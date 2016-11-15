<?php
include("../functions/function.php");

// print_r($_POST['accept_pm_brokerage']);die;

$post_id=$_POST['post_id'];
$where['post_id']=$post_id;

update('post',$_POST,$where);
echo "<script>setTimeout(function(){window.location.href='edit_post.php?pid=$post_id'},2000);</script><h4 style='z-index:99; background-color:#7292DA;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Timing Updated Successfully!</h4>";

?>