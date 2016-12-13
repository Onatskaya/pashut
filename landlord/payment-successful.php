<?php
include('../functions/function.php');
include('../check_price.php');

$member_id=$_SESSION['member_id'];
$order_id=$_SESSION['order_id'];
$plan_id=$_SESSION['membership_plan'];
$post_id=$_SESSION['post_id'];

$que2="UPDATE post SET featured_listing='Yes' WHERE post_id='$post_id' ";
$obj2= mysqli_query($conn,$que2);

echo "<script>setTimeout(function(){window.location.href='post_listing.php'},3000);</script><h4 style='background-color:green;width:50%; top:105px; left:25%; position: absolute; padding:6px 6px; color: #fff; text-align:center; font-size:18px;font-family: Georgia;font-style: italic;'>Property added to featured Successfully</h4>";
?>