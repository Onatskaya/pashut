<?php
include('../functions/function.php');

if($_POST['action'] == 'remove_properties' && $_POST['id_list'] != ''){
    $properties_arr = json_decode($_POST['id_list']);
    $ids = join("','",$properties_arr);

    $que_delete="DELETE FROM post WHERE post_id IN ('$ids')";
    $res = mysqli_query($conn,$que_delete);

    if($res){
        print json_encode(array('status' => 'success'));

    }else{
        print json_encode(array('status' => 'failed'));
    }
}

if($_POST['action'] == 'remove_all_properties' && empty($_POST['id_list']) ){
    $que_delete_all="DELETE FROM post WHERE 1";
    $del_res = mysqli_query($conn,$que_delete_all);

    if($del_res){
        print json_encode(array('status' => 'success'));

    }else{
        print json_encode(array('status' => 'failed'));
    }
}
die;