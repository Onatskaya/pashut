<?php
include("../functions/function.php");

$id= $_SESSION['member_id'];

$a= $_POST['current_password'];
$b= $_POST['new_password'];

$sql_select= "SELECT * FROM members WHERE member_id='$id' ";
$obj_select= mysqli_query($conn,$sql_select);
$data_select= mysqli_fetch_assoc($obj_select)['password'];

if($a==$data_select)
{ 	
   $sql="UPDATE members SET password='$b' WHERE member_id='$id'";
   mysqli_query($conn,$sql);
   echo "<script>setTimeout(function(){window.location.href='change_password.php'},2000);</script><h4 style='background-color:green;width:50%; top:105px; left:25%; position: absolute; padding:6px 6px; color: #fff; text-align:center; font-size:18px;font-family: Georgia;font-style: italic;'>Password Changed Successfully</h4>"; 
}
else
{
	echo "<script>setTimeout(function(){window.location.href='change_password.php'},2000);</script><h4 style='background-color:red;width:50%; top:105px; left:25%; position: absolute; padding:6px 6px; color: #fff; text-align:center; font-size:18px;font-family: Georgia;font-style: italic;'>You have entered wrong Current Password</h4>"; 
}  

?>