<?php
include('../functions/function.php');
include("check_login.php");

$admin= $_SESSION['admin'];

$a= $_POST['current_password'];
$b= $_POST['new_password'];


$sql_select= "SELECT * FROM admin_tbl WHERE username='$admin' ";
$obj_select= mysqli_query($conn,$sql_select);
$data_select= mysqli_fetch_assoc($obj_select)['password'];

if($a==$data_select)
{ 	
   $sql="UPDATE admin_tbl SET password='$b' WHERE username='$admin'";
   mysqli_query($conn,$sql);
   echo "<script>setTimeout(function(){window.location='change_password.php';},2000);</script><h4 style='z-index:9999; background-color:#5FBA7D;width:50%; top:30%; left:25%; position: absolute; padding:15px; color: #fff; text-align:center; font-size:18px;'>Password Changed Successfuly!</h4>";   
}
else
{
	echo "<script>setTimeout(function(){window.location='change_password.php';},2000);</script><h4 style='z-index:9999; background-color:red;width:50%; top:30%; left:25%; position: absolute; padding:15px; color: #fff; text-align:center; font-size:18px;'>You have entered wrong Current Password !</h4>";
}  


?>
 
