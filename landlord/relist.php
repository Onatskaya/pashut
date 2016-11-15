<?php
include("../functions/function.php");

$post_id= $_GET['pid'];

$que="UPDATE post SET property_available='Available' WHERE post_id='$post_id' ";
$obj= mysqli_query($conn,$que);
echo "<script>setTimeout(function(){window.location.href='view_post_detail.php?pid=$post_id'},2000);</script><h4 style='z-index:99; background-color:#7292DA;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Your Property is Successfully Relisted</h4>";
?>