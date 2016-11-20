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

//Fetch all properties.
$que_post="SELECT * FROM post ORDER BY post_id DESC ";
$obj_post= mysqli_query($conn,$que_post);

?>

<table id="myTable" class="table table-striped dataTable table-bordered">
    <thead>
    <tr>
        <th class="col-md-1">S.No.</th>
        <th class="col-md-2">Name</th>
        <th class="col-md-2">Email</th>
        <th class="col-md-2">City</th>
        <th class="col-md-2">Structure Type</th>
        <th class="col-md-1">Image</th>
        <th class="col-md-2">Status</th>
        <th class="col-md-1">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $n=1;
    while($data_post=mysqli_fetch_assoc($obj_post))
    {  ?>
        <tr>
            <td><?php echo $n; ?></td>
            <td class="js-prop-name"><?php echo $data_post['name'];?></td>
            <td><?php echo $data_post['email'];?></td>
            <td><?php echo $data_post['city'];?></td>
            <td><?php echo $data_post['structure_type'];?></td>
            <td><img src="../home_images/<?php echo $data_post['main_image'];?>" height="60" width="60"></td>
            <td><?php include('property_status.php');?></td>
            <td>
                <a href="view_post_detail.php?pid=<?php echo $data_post['post_id'];?>" class="glyphicon glyphicon-eye-open"></a>
                <a href="view_post_detail.php?pid=<?php echo $data_post['post_id'];?>" class="glyphicon glyphicon-pencil"></a>
                <a href="delete_post.php?pid=<?php echo $data_post['post_id'];?>" data-href="delete_post.php?pid=<?php echo $data_post['post_id'];?>" class="glyphicon glyphicon-trash js-property-remove"></a>

            </td>
        </tr>

        <?php
        $n++;
    }
    ?>
    </tbody>
</table>