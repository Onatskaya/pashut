<?php
include("../functions/function.php");

$member_id= $_SESSION['member_id'];
$pid=$_POST['pid'];
if(isset($_FILES['main_image']['name']))
{
	$main_image= $_FILES['main_image']['name'];
	$ext= explode(".",$main_image);
	$end_m= end($ext);
	$main_image= "m".$member_id.time().".".$end_m;
	$que_image="UPDATE post SET main_image='$main_image' where post_id='$pid' ";
	$obj_image= mysqli_query($conn,$que_image);
	move_uploaded_file($_FILES["main_image"]["tmp_name"],"../home_images/".$main_image);
	// print_r($que_image);die;
}

if(isset($_FILES['image1']['name']))
{
	$image1= $_FILES['image1']['name'];
	$ext1= explode(".",$image1);
	$end1= end($ext1);
	$image1= "a".$member_id.time().".".$end1;
	$que_image="UPDATE post SET image1='$image1' where post_id='$pid' ";
	$obj_image= mysqli_query($conn,$que_image);
	move_uploaded_file($_FILES["image1"]["tmp_name"],"../home_images/".$image1);
}

if(isset($_FILES['image2']['name']))
{
	$image2= $_FILES['image2']['name'];
	$ext2= explode(".",$image2);
	$end2= end($ext2);
	$image2= "b".$member_id.time().".".$end2;
	$que_image="UPDATE post SET image2='$image2' where post_id='$pid' ";
	$obj_image= mysqli_query($conn,$que_image);
	move_uploaded_file($_FILES["image2"]["tmp_name"],"../home_images/".$image2);
}

if(isset($_FILES['image3']['name']))
{
	$image3= $_FILES['image3']['name'];
	$ext3= explode(".",$image3);
	$end3= end($ext3);
	$image3= "c".$member_id.time().".".$end3;
	$que_image="UPDATE post SET image3='$image3' where post_id='$pid' ";
	$obj_image= mysqli_query($conn,$que_image);
	move_uploaded_file($_FILES["image3"]["tmp_name"],"../home_images/".$image3);
}

if(isset($_FILES['image4']['name']))
{
	$image4= $_FILES['image4']['name'];
	$ext4= explode(".",$image4);
	$end4= end($ext4);
	$image4= "d".$member_id.time().".".$end4;
	$que_image="UPDATE post SET image4='$image4' where post_id='$pid' ";
	$obj_image= mysqli_query($conn,$que_image);
	move_uploaded_file($_FILES["image4"]["tmp_name"],"../home_images/".$image4);
}

if(isset($_FILES['image5']['name']))
{
	$image5= $_FILES['image5']['name'];
	$ext5= explode(".",$image5);
	$end5= end($ext5);
	$image5= "e".$member_id.time().".".$end5;
	$que_image="UPDATE post SET image5='$image5' where image_id='$pid' ";
	$obj_image= mysqli_query($conn,$que_image);
	move_uploaded_file($_FILES["image5"]["tmp_name"],"../home_images/".$image5);
}
// print_r($_FILES);die;

echo "<script>setTimeout(function(){window.location.href='edit_post.php?pid=$pid'},2000);</script><h4 style='z-index:99; background-color:#7292DA;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Your Image is Updated Successfully!</h4>";

?>