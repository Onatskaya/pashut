<?php
include('../functions/function.php');
include('check_login.php');

$category_id = $_GET['category_id'];

if( !is_numeric($category_id) ){
    die;
}
$category_id = intval($category_id);
//Delete city with city_id.
$que_delete="DELETE FROM `category` WHERE `id`='{$category_id}'";
$res = mysqli_query($conn,$que_delete);
?>
<?php echo "<script>setTimeout(function(){window.location.href='categories.php'},2000);</script><h4 style='z-index:99; background-color:#7292DA;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Category is Deleted Successfully!</h4>"; ?>