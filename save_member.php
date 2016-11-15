<?php
ob_start();
include_once('functions/function.php');
include('check_price.php');

$membership_plan=$_POST['membership_plan'];
$member_name=$_POST['first_name'];
$date1= date('Y-m-d h:i:s');
$start_date= date('Y-m-d');
// $end_date=date('Y-m-d', strtotime('+1 months'));
$end_date= check_end_date($_POST['membership_plan']);
		// print_r($end_date);die;

$plan_name= check_plan_name($_POST['membership_plan']);
$plan_amount= check_price($_POST['membership_plan']);


$checkuser['username']= $_POST['username']; 
$username=isExist('members',$checkuser);


$que_sel="SELECT * FROM members ORDER BY order_id DESC LIMIT 1";
$que_sel=mysqli_query($conn,$que_sel);
if(mysqli_num_rows($que_sel))
{
	$_POST['order_id']=mysqli_fetch_assoc($que_sel)['order_id'];
	$_POST['order_id']++;
	$order_id= $_POST['order_id'];
}
else
{
	$_POST['order_id']='PLH-01';
	$order_id=$_POST['order_id'];
}
// print_r($order_id);die;

if($username==true)
{
	echo "<script>setTimeout(function(){window.history.back();},2000);</script><h4 style='z-index:99; background-color:red;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>This Username Already Exist !</h4>";
}
else
{
	$_POST['email']= $_POST['username'];
	if($last_id=insert('members',$_POST,'member_id','member_id'))
	{
		/* echo "<script>setTimeout(function(){window.location.href='join.php'},2000);</script><h4 style='z-index:99; background-color:#5cb85c;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Registration Successfull !</h4>";*/
		
		// print_r($last_id);die;		
		$que_p="INSERT INTO plan_tbl(member_id,plan_id,member_name,plan_name,plan_amount,status,payment_date,order_id) VALUES('$last_id','$membership_plan','$member_name','$plan_name','$plan_amount','Unpaid','$date1','$order_id') ";
		$obj_p=mysqli_query($conn,$que_p);
		echo "<script>window.location.href = 'payments.php?last_id=$last_id';</script>";
	}
	else
	{
		echo "<script>setTimeout(function(){window.history.back();},2000);</script><h4 style='z-index:99; background-color:#FF3366;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Failed To Register Membership ! Please Try Again Later</h4>";
	}		
}

?>