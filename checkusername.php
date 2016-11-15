<?php
include_once('functions/function.php');
extract($_REQUEST);
$WHERE['username']=$username;
if(select('members',$WHERE))
{
	echo "<span style='color:#EA4335'>This username is already taken</span>";
}
else
{
	echo "<span style='color:#34A853'>This username is available</span>";
}	
?>