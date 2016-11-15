<?php
include('../functions/function.php');
include('../check_price.php');

$member_id=$_SESSION['member_id'];
$order_id=$_SESSION['order_id'];
$plan_id=$_SESSION['membership_plan'];

$que_mem="SELECT * FROM members WHERE member_id='$member_id' ";
$obj_mem= mysqli_query($conn,$que_mem);
$data_mem=mysqli_fetch_assoc($obj_mem);
$name= $data_mem['first_name'];
// print_r($name);die;

$start_date= date('Y-m-d');
$end_date= check_end_date($_SESSION['membership_plan']);
$plan_name= check_plan_name($_SESSION['membership_plan']);
$plan_amount= check_price($_SESSION['membership_plan']);

$payment_date=date('Y-m-d h:i:s');

$que="INSERT INTO plan_tbl(member_id,plan_id,member_name,plan_name,plan_amount,status,start_date,end_date,payment_date,order_id,plan_status) VALUES('$member_id','$plan_id','$name','$plan_name','$plan_amount','Paid','$start_date','$end_date','$payment_date','$order_id','Enable') ";
$obj= mysqli_query($conn,$que);

$que2="UPDATE members SET member_status='Enable',order_id='$order_id',membership_plan='$plan_id' WHERE member_id='$member_id' ";
$obj2= mysqli_query($conn,$que2);

echo "<script>setTimeout(function(){window.location.href='member_detail.php'},3000);</script><h4 style='background-color:green;width:50%; top:105px; left:25%; position: absolute; padding:6px 6px; color: #fff; text-align:center; font-size:18px;font-family: Georgia;font-style: italic;'>Your Plan is Successfully Upgrade</h4>"; 
?>


  	
 
	


