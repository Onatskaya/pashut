<?php
include('functions/function.php');
include('check_price.php');

//$order_id=$_SESSION['order_id'];
$order_id='PLH-20';

$start_date= date('Y-m-d');
$end_date= check_end_date($_SESSION['membership_plan']);


$payment_date=date('Y-m-d h:i:s');

$que="UPDATE plan_tbl SET start_date='$start_date',end_date='$end_date',status='Paid',payment_date='$payment_date',plan_status='Enable' WHERE order_id='$order_id' ";
// print_r($que);die;
$obj= mysqli_query($conn,$que);

$que2="UPDATE members SET member_status='Enable' WHERE order_id='$order_id' ";
$obj2= mysqli_query($conn,$que2);

$que_info="SELECT * FROM members 
INNER JOIN plan_tbl ON members.order_id= plan_tbl.order_id 
WHERE members.order_id='$order_id' "; 

//$que_info="SELECT * FROM members WHERE members.order_id='$order_id' ";
// print_r($que_info);die;
$obj_info=mysqli_query($conn,$que_info);
$data_info=mysqli_fetch_assoc($obj_info);
//$data_mail=mysqli_fetch_array($obj_info);


/*$getmail="SELECT * FROM members WHERE order_id='$order_id'";
$obj_mail=mysqli_query($conn,$getmail);
$getrows=mysql_fetch_array($obj_mail);*/

$email_to = $data_info['email']; // 'developer.amitpandey@gmail.com';
$email_subject = "PashutLehaskir.com - Payment Confirmation!";
$message="Payment Confirmation";

$body="<table width='100%' height='100%' style='min-width:348px' border='0' cellspacing='0' cellpadding='0'>
    <tbody>
      <tr height='32px'></tr>
      <tr align='center'>
        <td width='32px'></td>
        <td>
          <table border='0' cellspacing='0' cellpadding='0' style='max-width:600px'>
            <tbody>
            
              <tr height='16'>
              </tr>
              <tr>
                <td>
                  <table bgcolor='#E92324' width='100%' border='0' cellspacing='0' cellpadding='0' style='min-width:332px;max-width:600px;border:1px solid #e0e0e0;border-bottom:0;border-top-left-radius:3px;border-top-right-radius:3px'>
                    <tbody>
                      <tr>
                        <td></td>
                        <td height='72px' colspan='2'>
                          <img width='150' height='50' src='http://www.laabhaa.co.in/pashutlehaskir.com/images/logo.png' style='display:block;width:300px;min-height:32px' class='CToWUd'>
                        </td>
                      </tr>
                      <tr>
                        <td width='50px'></td>
                        <td style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:24px;color:#ffffff;line-height:1.25'>Payment Confirmation!</td>
                        <td width='32px'></td></tr><tr><td height='18px' colspan='3'></td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr>
                <td>
                  <table bgcolor='#FAFAFA' width='100%' border='0' cellspacing='0' cellpadding='0' style='min-width:332px;max-width:600px;border:1px solid #f0f0f0;border-bottom:1px solid #c0c0c0;border-top:0;border-bottom-left-radius:3px;border-bottom-right-radius:3px;background:url(http://www.laabhaa.co.in/pashutlehaskir.com/images/footer-bg.png)'>
                    <tbody>
                      <tr height='16px'>
                        <td width='32px' rowspan='3'></td>
                        <td></td>
                        <td width='32px' rowspan='3'></td>
                      </tr>
                      <tr>
                        <td>
                          <table style='min-width:300px' border='0' cellspacing='0' cellpadding='0'>
                            <tbody>
                              <tr>
                                <td style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1.5'>Dear ".$data_info['first_name']." ".$data_info['last_name'].",</td>
                              </tr>
                              <tr>
                                <td style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1.5'>
                                    
                                   Thank you for joining PashutLeHaskir.com! All properties listed throughout our website are available and ready to schedule and rent! Simply search our database with your desired specifications to find a perfect property suitable to your exact needs!

                                  <table border='0' cellspacing='0' cellpadding='0' style='margin-top:16px;margin-bottom:16px'>
                                    <tbody>
                                      <tr valign='middle'>
                                        <td width='16px'></td>
                                        <td style='line-height:1.2'>
                                          <span style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:18px;font-weight:bold;color:#E92324'>".$data_info['first_name']." ".$data_info['last_name']."</span>
                                        </td>
                                      </tr>
                                      <tr valign='middle'>
                                        <td width='16px'></td>
                                        <td style='line-height:1.2'>
                                          <span style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:18px;font-weight:bold;color:#E92324'>PashutLeHaskir.com </span><span style='color:#E92324'>".$data_info['plan_name']."</span>
                                        </td>
                                      </tr>
                                      <tr valign='middle'>
                                        <td width='16px'></td>
                                        <td style='line-height:1.2'>
                                          <span style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:18px;font-weight:bold;color:#E92324'>Login Details: </span>
                                        </td>
                                      </tr>
                                      <tr valign='middle'>
                                        <td width='16px'></td>
                                        <td style='line-height:1.2'>
                                          <span style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:16px;color:#E92324'>Username: ".$data_info['username']."</span>
                                        </td>
                                      </tr>
                                      <tr valign='middle'>
                                        <td width='16px'></td>
                                        <td style='line-height:1.2'>
                                          <span style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:16px;color:#E92324'>Password: ".$data_info['password']."</span>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                   <tr>
                                      <td style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1'>Login today to find your property!</td>
                                    </tr>
                                  
                                </td>
                              </tr>
                              <tr height='32px'></tr>
                              <tr>
                                <td style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1.5'>If you have any questions regarding your account or listing please contact our help desk at <br><b style='color:#961717;'><a href='mailto:info@pashutlehaskir.com'> info@pashutlehaskir.com</a></b></td>
                              </tr>
                              <tr height='16px'></tr>
                              
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr height='32px'></tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <table bgcolor='#E92324' width='100%' border='0' cellspacing='0' cellpadding='0' style='min-width:332px;max-width:600px;border:1px solid #e0e0e0;border-bottom:0;border-top-left-radius:3px;border-top-right-radius:3px'>
                <tbody>
                  <tr>
                    <td></td>
                    <td height='72px' colspan='2'>
                      <img width='150' height='50' src='http://www.laabhaa.co.in/pashutlehaskir.com/images/logo.png' style='display:block;width:300px;min-height:32px;margin-left:35px;' class='CToWUd'>
                    </td>
                  </tr>
                </tbody>
              </table>
              
              
            </tbody>
          </table>
        </td>
        <td width='32px'></td>
      </tr>
      <tr height='32px'></tr>
    </tbody>
  </table>";
// print_r($body);die;
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'From:Pashutlehaskir<info@pashutlehaskir.com>' . "\r\n";
//$headers .= 'Cc:'.$user_email. "\r\n";
@mail($email_to, $email_subject, $body, $headers);



echo "<script>setTimeout(function(){window.location.href='index.php'},10000);</script>";

?>


  	
 
		
				<title>pashutlehaskir.com</title>
				<link rel="shortcut icon" href="" />
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				
				<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">
				<meta http-equiv="expires" content="0" />
				<meta http-equiv="Pragma" content="no-cache" />
				<meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8" />

				
       			<meta name="apple-itunes-app" content="app-id=509021914">
   				
	<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//script.crazyegg.com/pages/scripts/0044/7420.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>

<script>
var _prum = [['id', '56a93ecdabe53ddd5a18ddad'],
             ['mark', 'firstbyte', (new Date()).getTime()]];
(function() {
    var s = document.getElementsByTagName('script')[0]
      , p = document.createElement('script');
    p.async = 'async';
    p.src = '//rum-static.pingdom.net/prum.min.js';
    s.parentNode.insertBefore(p, s);
})();
</script> 

			<script type="text/javascript">
			function movetoNext(current, nextFieldID) {
			if (current.value.length >= current.maxLength) {
			document.getElementById(nextFieldID).focus();
			}
			}
			</script>
			 <!-- Google Fonts embed code -->
			<script type="text/javascript">
				(function() {
					var link_element = document.createElement("link"),
						s = document.getElementsByTagName("script")[0];
					if (window.location.protocol !== "http:" && window.location.protocol !== "https:") {
						link_element.href = "http:";
					}
					link_element.href += "//fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900";
					link_element.rel = "stylesheet";
					link_element.type = "text/css";
					s.parentNode.insertBefore(link_element, s);
				})();
			</script>


			
				<!-- Latest compiled and minified CSS -->
				<link href="css/201603/ui-lightness/jquery-ui-1.10.4.css" rel="stylesheet">
				<link rel="stylesheet" href="css/bootstrap.min.css">
				<!-- Custom styles for this template -->
				<link href="css/201603/global.css" rel="stylesheet">
				<link href="css/201603/section.css" rel="stylesheet">
				<link href="css/201603/carousel.css" rel="stylesheet">
			
					<meta name="keywords" content="pashutlehaskir.com | Rent SoCal Houses, Apartments & More, Los Angeles rentals, Santa Monica House, South Bay Rentals, Los Angeles Apartments, Orange County Rentals, San Diego Apartments, Hermosa Beach Apartments, Hollywood For Rent, Burbank Apartments, Glendale Homes, Studio City Rentals, Apartments for Rent, Houses for Rent, Condos for Rent, Apartments in Los Angeles, Apartments in LA, USC, University of Southern California, Cal State, California State University, UCLA, University of California, University of California Los Angeles, Loyola Marymount University, Pepperdine, Pepperdine University, USC Student Housing, USC Housing, USC Apartments, Cal State Housing, Cal State Student Housing, Cal State Apartments, UCLA Housing, UCLA Student Housing, UCLA Apartments, LMU Housing, LMU Student Housing, LMU Apartments, Pepperdine Housing, Pepperdine Student Housing, Pepperdine Apartments" />
				
					<meta name="description" content="pashutlehaskir.com is the #1 home finding service in the Los Angeles area. Search SoCal apartment rentals, houses, condos & roommates!" />
				
					<meta name="robots" content="index,follow" />
					<meta name="GOOGLEBOT" content="index,follow" />
				
			
			
			<meta name="google-translate-customization" content="954d153704cc37f5-fac58c9bb4d3c842-g115d03cfb1ac5d23-17"></meta>
			
			
        
	</head>

	
	<body  class="guest" >
	

	
		
		<div id="slidedown-content" data-status="hide" class="none">
			<div id="login-content" class="fb">
				<form action="login.php" name="loginForm" method="post">
					<span>
						<label>Username</label> 
						<input type="text" name="username" class="text" size="10" maxlength="100" />
					</span>
					<span>
						<label>Password</label>
						<input type="password" autocomplete="off" class="text" name="password" size="10" maxlength="45" />
					</span>	

					
					<input type="image" name="login" class="submit" src="images/new/btn-login.png" align="absmiddle" />
					
					

				</form>
				<div class="separator">
				-------------- OR --------------
				</div>
				<div class="fb-login-section">
				<a href="#" class="fb-login"><img src="images/fblogin.png"></a>
				</div>
			</div>		
		</div>
	
		<?php
		include('header.php');
		?>
	
	
    <!-- Carousel
    ================================================== -->
		
	<div class="container">


<div class="container public">
		
	<div class="row" align="center">
		
		<h1>Thank You</h1>
		<p>Your payment was successful. Thank you.</p>
	
	</div>
</div>

</div> <!-- End main container div -->
	<br><br><br><br><br><br><br><br>&nbsp;<br><br><br>
<br><br><br><br>	
	<!-- FOOTER -->
		<?php
			include('footer.php');
		?>
		
		

	
	

		
		
	
	
	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	
<script src="js/jquery.min.js"></script>

	
	<script src="js/new/jquery-ui-1.10.4/jquery-ui-1.10.4.js"></script>
	<script src="js/new/jquery.cycle.all.js"></script>
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	
	
			
	<script src="js/fb_login.js"></script>	
	<script src="js/navigation/menu.js" type="text/javascript" language="javascript"></script>	
	<script src="js/default.js" type="text/javascript" language="javascript"></script>	

	<script src="js/ddaaccordion.js" type="text/javascript" language="javascript"></script>


	
	<!-- Default JavaScript -->
	<script src="js/new/default.js"></script>
	


