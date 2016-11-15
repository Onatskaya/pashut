<?php
include("../functions/function.php");

$member_id= $_SESSION['member_id'];
$post_id=$_POST['post_id'];

$amenities3= $_POST['amenities'];
$amenities2=array_filter($amenities3);
$amenities= implode(",", $amenities2);
// print_r($amenities);die;


$where['post_id']=$post_id;
$que="UPDATE post SET amenities='$amenities' WHERE post_id='$post_id' ";
$obj= mysqli_query($conn,$que);
echo "<script>setTimeout(function(){window.location.href='edit_post.php?pid=$post_id'},2000);</script><h4 style='z-index:99; background-color:#7292DA;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Your Post is Updated Successfully!</h4>";

?>