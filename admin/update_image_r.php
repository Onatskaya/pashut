<?php
include("../functions/function.php");

$member_id= $_SESSION['member_id'];
$post_id= $_POST['post_id'];
$image_id= $_POST['image_id'];
	// print_r($image_id);die;


	$image= $_FILES['new_image']['name'];
	$ext= explode(".",$image);
	$end= end($ext);
	$new_name= $member_id.time().".".$end;
	$que="UPDATE house_image SET image='$new_name' where image_id='$image_id' ";
	$obj= mysqli_query($conn,$que);
	move_uploaded_file($_FILES["new_image"]["tmp_name"],"../home_images/".$new_name);
	echo "<script>setTimeout(function(){window.location.href='edit_post.php?pid=$post_id'},2000);</script><h4 style='z-index:99; background-color:#7292DA;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Your Image is Updated Successfully!</h4>";
	// print_r($que_image);die;




?>