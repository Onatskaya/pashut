<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//$price = '8,500 ₪';
//print $price;
//print '<br>';
//$filter_price = filter_var($price, FILTER_SANITIZE_NUMBER_FLOAT);
//print $filter_price;
//print '<br>';
//print number_format($filter_price, -1, '', '');
include('functions/function.php');
//$que_post="SELECT * FROM post WHERE `property_available` != 'Available' ORDER BY post_id DESC ";

$que_post="SELECT * FROM post";
$obj_post= mysqli_query($conn,$que_post);

while($data_post=mysqli_fetch_assoc($obj_post)){
    $post_id = $data_post['post_id'];
    print '<br>';
    $rent = filter_var($data_post['rent'], FILTER_SANITIZE_NUMBER_FLOAT);
    print $rent;

    $update_post="UPDATE post SET rent=$rent WHERE post_id=$post_id";
    $res = mysqli_query($conn,$update_post);
    print_r($res);
}