<?php
include("../functions/function.php");

if(isset($_POST['form_id']))
{
		$member_id= $_POST['form_id'];
		$que= "SELECT * FROM members WHERE member_id='$member_id' ";
		$obj= mysqli_query($conn,$que);
		$data=mysqli_fetch_assoc($obj);
		echo json_encode($data);
}


if(isset($_POST['evy']))
{
		$post_id= $_POST['evy'];
		$que= "SELECT * FROM post WHERE post_id='$post_id' ";
		$obj= mysqli_query($conn,$que);
		$data=mysqli_fetch_assoc($obj);
		echo json_encode($data);
}

?>