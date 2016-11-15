<?php
if(($_FILES['image']))
{
 	foreach ($_FILES['image'] as $img) 
	{
		$ext= pathinfo($img['name'], PATHINFO_EXTENSION);
		$imageExe=array('jpg','jpeg','png','gif');
		if(!in_array(strtolower($exe), $imageExe))
		{
			alert('Invalid');
			die;
		}	
		$img2= $member_id.time().".".$ext;
		move_uploaded_file($img["tmp_name"],"../home_images/".$img2);
		$que_img= "INSERT INTO house_image(member_id,post_id,image) VALUES('$member_id','$post_id','$img') ";
		print_r($que_img);die;
	}
}
?>