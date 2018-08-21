<?php
include('../functions/function.php');
include('check_login.php');

$id = $_GET['id'];

if( !is_numeric($id) ){
    die;
}
$id = intval($id);
//Delete post with pid.
$que_delete="DELETE FROM `moving_resources` WHERE `id`='{$id}'";
$res = mysqli_query($conn,$que_delete);
?>
<?php echo "<script>setTimeout(function(){window.location.href='moving-resources.php'},2000);</script><h4 style='z-index:99; background-color:#7292DA;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Item Deleted Successfully!</h4>"; ?>