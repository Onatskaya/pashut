<?php
include('../functions/function.php');

$a=$_POST['username'];
$b=$_POST['password'];
$sql="SELECT * from admin_tbl where username='$a' and password='$b'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
{
	$_SESSION['admin']=$a;
 	$_SESSION['is_admin_logged_in']= true;
    echo '<script>window.location.href = "post_listing.php";</script>';
}
else
{
	  // echo "<script>setTimeout(function(){window.location.href='index.php'},3000);</script><h4 style='background-color:red;width:50%; top:105px; left:25%; position: absolute; padding:6px 6px; color: #fff; text-align:center; font-size:18px;font-family: Georgia;font-style: italic;'>Invalid Username / Password</h4>";
	 $_SESSION['err_msg']="Invalid Username / Password";
	 echo '<script>window.location.href = "index.php";</script>';
}


?>