<?php
include("../functions/function.php");

$member_id= $_SESSION['member_id'];
$post_id= $_GET['post_id'];
$image_id = $_GET['img'];

if( ! is_numeric( $post_id ) || ! in_array( $image_id, array( 'main_image', 'image1', 'image2', 'image3', 'image4', 'image5') ) ) {
	echo "<script>setTimeout(function(){window.location.href='edit_post.php?pid=$post_id'},2000);</script><h4 style='z-index:99; background-color:#7292DA;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Some Error! Try again later</h4>";
	exit;
}

$que_select="SELECT * FROM post WHERE post_id='$post_id' ";
$obj_select= mysqli_query($conn,$que_select);
$data_select= mysqli_fetch_assoc($obj_select);

if( empty( $data_select[$image_id] ) ){
	echo "<script>setTimeout(function(){window.location.href='edit_post.php?pid=$post_id'},2000);</script><h4 style='z-index:99; background-color:#7292DA;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Some Error! Try again later</h4>";
	exit;
}
// print_r($data_select);die;

$que="UPDATE post SET $image_id = '' WHERE post_id='$post_id' ";
$obj= mysqli_query($conn,$que);
unlink("../home_images/".$data_select[$image_id]);

echo "<script>setTimeout(function(){window.location.href='edit_post.php?pid=$post_id'},2000);</script><h4 style='z-index:99; background-color:#7292DA;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Image is Deleted Successfully!</h4>";
?>