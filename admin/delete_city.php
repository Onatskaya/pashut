<?php
include('../functions/function.php');
include('check_login.php');

$city_id = $_GET['city_id'];

if( !is_numeric($city_id) ){
    die;
}
$city_id = intval($city_id);
//Delete city with city_id.
$que_delete="DELETE FROM city WHERE city_id='{$city_id}'";
$res = mysqli_query($conn,$que_delete);
?>
<?php echo "<script>setTimeout(function(){window.location.href='cities.php'},2000);</script><h4 style='z-index:99; background-color:#7292DA;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>City is Deleted Successfully!</h4>"; ?>