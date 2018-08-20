<?php
    error_reporting(E_ALL);

	$host = "localhost";
	$username = "root";
	$pass = "dev01";
	$database = "pashut";

	$conn = mysqli_connect($host, $username, $pass, $database);
	mysqli_query($conn,"SET NAMES utf8");
	if(!$conn) 
	{
		echo "<h3 style='background-color:#FF3366;width:50%; top:105px; left:25%; position: absolute; padding:6px 6px; color: #fff; text-align:center; font-size:18px;font-family: Georgia;font-style: italic;'>Error Connecting Database ! Please Try Again Later</h3>";
	}
  
	date_default_timezone_set("Asia/Kolkata");
 
	// Configuration For msg.msgclub.net
	$smskey='xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
	$senderName='xxxxxx';
 	
	
	$imageExtentions=array('jpg','png','gif');	
	session_start();
	
	if(!isset($_SESSION['language']))
	{	
		$_SESSION['language']='Hebrew';
	}
?>
