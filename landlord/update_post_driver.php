<?php
include("../functions/function.php");

$pid=$_POST['pid'];
unset($_POST['pid']);
// print_r($pid);die;

if(!isset($_POST['for_rent_check1']))
{
	$_POST['for_rent_check1']=0;
}

$where['post_id']=$pid;

update('post',$_POST,$where);
echo "<script>setTimeout(function(){window.location.href='edit_post.php?pid=$pid'},2000);</script><h4 style='z-index:99; background-color:#7292DA;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Your Property Information is Updated Successfully!</h4>";

?>