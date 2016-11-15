<?php
include("../functions/function.php");

$id= $_SESSION['member_id'];

// print_r($_POST);die;

$where['member_id']= $id;
update('members',$_POST,$where);
echo "<script>setTimeout(function(){window.location.href='member_detail.php'},2000);</script><h4 style='background-color:green;width:50%; top:105px; left:25%; position: absolute; padding:6px 6px; color: #fff; text-align:center; font-size:18px;font-family: Georgia;font-style: italic;'>Profile Update Successfully</h4>"; 

?>