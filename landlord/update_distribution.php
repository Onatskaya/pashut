<?php
include("../functions/function.php");

$pid=$_POST['pid'];
unset($_POST['pid']);
// print_r($pid);die;

if(!isset($_POST['la_weekly']))
{
	$_POST['la_weekly']=0;
}
if(!isset($_POST['downtown_news']))
{
	$_POST['downtown_news']=0;
}
if(!isset($_POST['zumper']))
{
	$_POST['zumper']=0;
}
if(!isset($_POST['vast']))
{
	$_POST['vast']=0;
}

if(!isset($_POST['daily_press']))
{
	$_POST['daily_press']=0;
}
if(!isset($_POST['oodle']))
{
	$_POST['oodle']=0;
}
if(!isset($_POST['live_lovely']))
{
	$_POST['live_lovely']=0;
}
if(!isset($_POST['google_base']))
{
	$_POST['google_base']=0;
}
if(!isset($_POST['canyon_news']))
{
	$_POST['canyon_news']=0;
}
if(!isset($_POST['reader']))
{
	$_POST['reader']=0;
}
if(!isset($_POST['walkscore2']))
{
	$_POST['walkscore2']=0;
}
if(!isset($_POST['renthop']))
{
	$_POST['renthop']=0;
}

$where['post_id']=$pid;

update('post',$_POST,$where);
echo "<script>setTimeout(function(){window.location.href='edit_post.php?pid=$pid'},2000);</script><h4 style='z-index:99; background-color:#7292DA;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Information is Updated Successfully!</h4>";

?>