<?php
include("../functions/function.php");

$id= $_GET['id'];

if( ! is_numeric( $id ) ) {
	echo "<script>setTimeout(function(){window.location.href='moving-resources-edit.php?id=$id'},2000);</script><h4 style='z-index:99; background-color:#7292DA;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Some Error! Try again later</h4>";
	exit;
}

$que_select="SELECT `image` FROM moving_resources WHERE id='$id' ";
$obj_select= mysqli_query($conn,$que_select);
$data_select= mysqli_fetch_assoc($obj_select);

$que="UPDATE `moving_resources` SET `image` = '' WHERE id='$id'";
$obj= mysqli_query($conn,$que);
unlink("../images/moving_resources/" . $data_select['image']);

echo "<script>setTimeout(function(){window.location.href='moving-resources-edit.php?id=$id'},2000);</script><h4 style='z-index:99; background-color:#7292DA;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Image Deleted Successfully!</h4>";
?>