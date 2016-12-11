<?php
include("../functions/function.php");

$member_id= $_SESSION['member_id'];

if( empty($member_id) )
    die;

$event_id= $_POST['eventId'];

//$que_select="SELECT * FROM viewing_time_tbl WHERE id='$event_id' ";
//$obj_select= mysqli_query($conn,$que_select);
//$data_select= mysqli_fetch_assoc($obj_select);
//// print_r($data_select);die;

$que="DELETE FROM viewing_time_tbl WHERE id='$event_id' ";
$obj= mysqli_query($conn,$que);

die;