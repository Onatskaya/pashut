<?php
include('../functions/function.php');
include('check_login.php');

$pid = $_GET['pid'];

if( !is_numeric($pid) ){
    die;
}
$pid = intval($pid);
//Delete post with pid.
$que_delete="DELETE FROM post WHERE post_id='{$pid}'";
$res = mysqli_query($conn,$que_delete);
?>

<?php echo "<script>setTimeout(function(){window.location.href='post_listing.php'},2000);</script><h4 style='z-index:99; background-color:#7292DA;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Property is Deleted Successfully!</h4>"; ?>