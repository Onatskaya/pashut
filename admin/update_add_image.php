<?php
include("../functions/function.php");

$member_id=$_SESSION['member_id'];
$post_id= $_POST['post_id'];
// print_r($member_id);die;


if(is_array($_FILES['image']) AND $_FILES['image']['name'][0] != "")
{
	$n=0;
 	foreach ($_FILES['image']['name'] as $img) 
	{
		$ext= explode(".",$img);
		$end= end($ext);
		$img2= $member_id.$n.time().".".$end;
		move_uploaded_file($_FILES['image']["tmp_name"][$n],"../home_images/".$img2);
		$que_img= "INSERT INTO house_image(member_id,post_id,image) VALUES('$member_id','$post_id','$img2') ";
		$obj_img= mysqli_query($conn,$que_img);
		$n++;
		// print_r($que_img);die;
	}
}


echo "<script>setTimeout(function(){window.location.href='edit_post.php?pid=$post_id'},2000);</script><h4 style='z-index:99; background-color:#7292DA;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Post Added Successfully!</h4>";
?>