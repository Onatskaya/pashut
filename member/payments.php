<?php
// Database variables
include('../functions/function.php');
include('../check_price.php');

$que_sel="SELECT * FROM members ORDER BY order_id DESC LIMIT 1";
$que_sel=mysqli_query($conn,$que_sel);
if(mysqli_num_rows($que_sel))
{
	$order_id=mysqli_fetch_assoc($que_sel)['order_id'];
	$order_id++;
	
}
else
{
	$order_id='PLH-01';
}
// print_r($order_id);die;
$payment_date=date('Y-m-d h:i:s');

$last_id=$_POST['mid'];
$que="SELECT * FROM members WHERE member_id='$last_id' ";
$obj= mysqli_query($conn,$que);
$data=mysqli_fetch_assoc($obj);
$amt= check_price($_POST['membership_plan']);

$_SESSION['order_id']=$order_id;
$_SESSION['membership_plan']= $_POST['membership_plan'];

// print_r($_POST['membership_plan']);die;

$_POST['cmd']='_xclick';
$_POST['no_note']='1';
$_POST['lc']='IL';
$_POST['currency_code']='ILS';
$_POST['bn']='PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest';
$_POST['first_name']=$data['first_name'];
$_POST['last_name']=$data['last_name'];
$_POST['payer_email']=$data['email'];
$_POST['item_number']=$order_id;
$_POST['submit']='Submit Payment';

$host = "localhost"; //database location
$user = ""; //database username
$pass = ""; //database password
$db_name = ""; //database name

// PayPal settings
//$paypal_email = 'shalomnimrod@gmail.com ';
$paypal_email = 'ekolmyk@corp.web4pro.com.ua';

$return_url = 'http://pashut/payment-successful.php';
$cancel_url = 'http://pashut/payment-cancelled.php';
$notify_url = 'http://pashut/payments.php';

$item_name = 'Membership Price';
$item_amount = $amt;

// Include Functions
// include("functions.php");

// Check if paypal request or response
if (!isset($_POST["txn_id"]) && !isset($_POST["txn_type"])){
	$querystring = '';
	
	// Firstly Append paypal account to querystring
	$querystring .= "?business=".urlencode($paypal_email)."&";
	
	// Append amount& currency (£) to quersytring so it cannot be edited in html
	
	//The item name and amount can be brought in dynamically by querying the $_POST['item_number'] variable.
	$querystring .= "item_name=".urlencode($item_name)."&";
	$querystring .= "amount=".urlencode($item_amount)."&";
	
	//loop for posted values and append to querystring
	foreach($_POST as $key => $value){
		$value = urlencode(stripslashes($value));
		$querystring .= "$key=$value&";
	}
	
	// Append paypal return addresses
	$querystring .= "return=".urlencode(stripslashes($return_url))."&";
	$querystring .= "cancel_return=".urlencode(stripslashes($cancel_url))."&";
	$querystring .= "notify_url=".urlencode($notify_url);
	
	// Append querystring with custom field
	//$querystring .= "&custom=".USERID;
	
	// Redirect to paypal IPN
	$final='https://www.paypal.com/cgi-bin/webscr'.$querystring;
	header('location:https://www.paypal.com/cgi-bin/webscr'.$querystring);
	echo "<script>window.location.href = '".$final."';</script>";
	exit();
} else {
	//Database Connection
	$link = mysql_connect($host, $user, $pass);
	mysql_select_db($db_name);
	
	// Response from Paypal

	// read the post from PayPal system and add 'cmd'
	$req = 'cmd=_notify-validate';
	foreach ($_POST as $key => $value) {
		$value = urlencode(stripslashes($value));
		$value = preg_replace('/(.*[^%^0^D])(%0A)(.*)/i','${1}%0D%0A${3}',$value);// IPN fix
		$req .= "&$key=$value";
	}
	
	// assign posted variables to local variables
	$data['item_name']			= $_POST['item_name'];
	$data['item_number'] 		= $_POST['item_number'];
	$data['payment_status'] 	= $_POST['payment_status'];
	$data['payment_amount'] 	= $_POST['mc_gross'];
	$data['payment_currency']	= $_POST['mc_currency'];
	$data['txn_id']				= $_POST['txn_id'];
	$data['receiver_email'] 	= $_POST['receiver_email'];
	$data['payer_email'] 		= $_POST['payer_email'];
	$data['custom'] 			= $_POST['custom'];
		
	// post back to PayPal system to validate
	$header = "POST /cgi-bin/webscr HTTP/1.0\r\n";
	$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
	$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
	
	$fp = fsockopen ('ssl://www.paypal.com', 443, $errno, $errstr, 30);
	
	if (!$fp) {
		// HTTP ERROR
		
	} else {
		fputs($fp, $header . $req);
		while (!feof($fp)) {
			$res = fgets ($fp, 1024);
			if (strcmp($res, "VERIFIED") == 0) {
				
				// Used for debugging
				// mail('user@domain.com', 'PAYPAL POST - VERIFIED RESPONSE', print_r($post, true));
						
				// Validate payment (Check unique txnid & correct price)
				$valid_txnid = check_txnid($data['txn_id']);
				$valid_price = check_price($data['payment_amount'], $data['item_number']);
				// PAYMENT VALIDATED & VERIFIED!
				if ($valid_txnid && $valid_price) {
					
					$orderid = updatePayments($data);
					
					if ($orderid) {
						// Payment has been made & successfully inserted into the Database

						// $que="UPDATE members SET $amount='$amt',status='Paid',payment_date='$payment_date' WHERE member_id='$last_id' ";
						// $obj= mysqli_query($conn,$que);
					} else {
						// Error inserting into DB
						// E-mail admin or alert user
						// mail('user@domain.com', 'PAYPAL POST - INSERT INTO DB WENT WRONG', print_r($data, true));
					}
				} else {
					// Payment made but data has been changed
					// E-mail admin or alert user
				}
			
			} else if (strcmp ($res, "INVALID") == 0) {
			
				// PAYMENT INVALID & INVESTIGATE MANUALY!
				// E-mail admin or alert user
				
				// Used for debugging
				//@mail("user@domain.com", "PAYPAL DEBUGGING", "Invalid Response<br />data = <pre>".print_r($post, true)."</pre>");
			}
		}
	fclose ($fp);
	}
}
?>
