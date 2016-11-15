<?php
include("../functions/function.php");

// print_r($_POST['accept_pm_brokerage']);die;
if(!isset($_POST['accept_credit_check']))
{
	$_POST['accept_credit_check']=0;
}
if(!isset($_POST['accept_pm_brokerage']))
{
	$_POST['accept_pm_brokerage']=0;
}

$member_id=$_SESSION['member_id'];
$where['member_id']=$member_id;

update('members',$_POST,$where);
echo "<script>setTimeout(function(){window.location.href='profile.php'},2000);</script><h4 style='z-index:99; background-color:#7292DA;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Your Profile is Updated Successfully!</h4>";

?>