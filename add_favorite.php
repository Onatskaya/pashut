<?php
include("functions/function.php");

$succsess = false;
$member_id= $_SESSION['member_id'];
$property_id= $_GET['listing_id'];
$que_s="SELECT * FROM favorite_tbl WHERE member_id='$member_id' AND property_id='$property_id' ";
$obj_s= mysqli_query($conn,$que_s);
if(mysqli_num_rows($obj_s))
{
	$data_fav=mysqli_fetch_assoc($obj_s);
	$fav_id=$data_fav['fav_id'];
	$status=$data_fav['status'];
	// print_r($status);die;
	if($status=='Favorite')
	{
		$status_fav='Unfavorite';
	}
	else
	{
		$status_fav='Favorite';
	}
	$que_u="UPDATE favorite_tbl SET status='$status_fav' WHERE fav_id='$fav_id' ";
	$obj_u=mysqli_query($conn,$que_u);
	
	if($obj_u){
		$succsess = true;
	}
	echo json_encode(array(
			'succsess' => $succsess, 
			'status' => $status_fav
		));
}
else
{
	$que_i="INSERT INTO favorite_tbl(member_id,property_id,status) VALUES('$member_id','$property_id','Favorite') ";
	$obj_i=mysqli_query($conn,$que_i);

	if($obj_i){
		$succsess = true;
	}
	echo json_encode(array(
			'succsess' => $succsess,
			'status' => 'Favorite'
		));
}


?>