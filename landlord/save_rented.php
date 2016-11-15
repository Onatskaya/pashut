<?php
include("../functions/function.php");

$member_id=$_SESSION['member_id'];
$post_id= $_POST['post_id'];
$renter_name=$_POST['renter_name'];

$que="UPDATE post SET property_available='$renter_name' WHERE post_id='$post_id' ";
$obj= mysqli_query($conn,$que);
echo "<script>setTimeout(function(){window.location.href='view_post_detail.php?pid=$post_id'},2000);</script><h4 style='z-index:99; background-color:#7292DA;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Your Property is Successfully Removed from listing</h4>";
?>