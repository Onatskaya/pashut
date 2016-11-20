<?php
include("../functions/function.php");

$member_id= $_SESSION['member_id'];
$post_id= $_GET['post_id'];
$image_id= $_GET['iid'];

$que_select="SELECT * FROM house_image WHERE image_id='$image_id' ";
$obj_select= mysqli_query($conn,$que_select);
$data_select= mysqli_fetch_assoc($obj_select)['image'];
// print_r($data_select);die;

$que="DELETE FROM house_image WHERE image_id='$image_id' ";
$obj= mysqli_query($conn,$que);
unlink("../home_images/".$data_select);

echo "<script>setTimeout(function(){window.location.href='edit_post.php?pid=$post_id'},2000);</script><h4 style='z-index:99; background-color:#7292DA;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Image is Deleted Successfully!</h4>";
?>