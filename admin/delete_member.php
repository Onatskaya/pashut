<?php
include('../functions/function.php');
include('check_login.php');

$member_id = $_GET['lid'];

if( !is_numeric($member_id) ){
	die;
}

$member_id = intval($member_id);

//Delete post with member_id.
$que_delete="DELETE FROM members WHERE member_id='{$member_id}'";
$res = mysqli_query($conn,$que_delete);
?>
<?php echo "<script>setTimeout(function(){window.location.href='landlord.php'},2000);</script><h4 style='z-index:99; background-color:#7292DA;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Member is Deleted Successfully!</h4>"; ?>

