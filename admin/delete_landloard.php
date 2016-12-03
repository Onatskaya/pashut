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

//Fetch all members with role landlord.
//$que_landlord="SELECT * FROM members WHERE member_type='landlord' ORDER BY member_id DESC ";
//$obj_landlord= mysqli_query($conn,$que_landlord);

?>
<?php echo "<script>setTimeout(function(){window.location.href='landlord.php'},2000);</script><h4 style='z-index:99; background-color:#7292DA;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Landlord is Deleted Successfully!</h4>"; ?>
<!--<table id="myTable" class="table table-striped dataTable table-bordered">-->
<!--    <thead>-->
<!--    <tr>-->
<!--        <th class="col-md-1">S.No.</th>-->
<!--        <th class="col-md-2">Name</th>-->
<!--        <th class="col-md-2">Username</th>-->
<!--        <th class="col-md-2">City</th>-->
<!--        <th class="col-md-2">Account Type</th>-->
<!--        <th class="col-md-1">Actions</th>-->
<!--    </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--    --><?php
//    $n=1;
//    while($data_landlord=mysqli_fetch_assoc($obj_landlord))
//    {  ?>
<!--        <tr>-->
<!--            <td>--><?php //echo $n; ?><!--</td>-->
<!--            <td>--><?php //echo $data_landlord['first_name'];?><!--&nbsp;--><?php //echo $data_landlord['last_name'];?><!--</td>-->
<!--            <td>--><?php //echo $data_landlord['username'];?><!--</td>-->
<!--            <td>--><?php //echo $data_landlord['mem_city'];?><!--</td>-->
<!--            <td>--><?php //echo $data_landlord['ll_type'];?><!--</td>-->
<!--            <td>-->
<!--                <a href="view_landlord_detail.php?lid=--><?php //echo $data_landlord['member_id'];?><!--" data-href="view_landlord_detail.php?lid=--><?php //echo $data_landlord['member_id'];?><!--" class="glyphicon glyphicon-eye-open"></a>-->
<!--                <a href="delete_landlord_detail.php?lid=--><?php //echo $data_landlord['member_id'];?><!--" data-href="delete_landlord_detail.php?lid=--><?php //echo $data_landlord['member_id'];?><!--" class="glyphicon glyphicon-trash js-property-remove"></a>-->
<!--            </td>-->
<!--        </tr>-->
<!---->
<!--        --><?php
//        $n++;
//    }
//    ?>
<!--    </tbody>-->
<!--</table>-->
