<?php
include("../functions/function.php");
date_default_timezone_set('UTC');
$start_time        = '';
$end_time          = '';
$current_day       = '';
$event_description = '';
$property_pid      = '';

if( ! empty( $_POST['current_day'] ) ) {
    $current_day = $_POST['current_day'];
}else{
    $current_day = date('Y-m-d');
}

if( ! empty( $_POST['viewing_start_time'] ) ) {
    $start_time = $current_day . ' ' . $_POST['viewing_start_time'];
    $start_time = strtotime($start_time);
}

if( ! empty( $_POST['viewing_end_time'] ) ) {
    $end_time = $current_day . ' ' . $_POST['viewing_end_time'];
    $end_time = strtotime($end_time);
}

if( ! empty( $_POST['event_description'] ) ) {
    $event_description = trim(htmlspecialchars($_POST['event_description']));
}

if( ! empty( $_POST['property_pid'] ) ) {
    $property_pid = intval($_POST['property_pid']);
}else{
    die;
}


$event_time = array(
    "id"           => strval($property_pid),
    "start"        => date('Y-m-d\TH:i:s', $start_time ),
    "end"          => date('Y-m-d\TH:i:s', $end_time ),
    "description"  => $event_description
);


$save_data = array(
    'property_id' => $property_pid,
    'viewing_time' => base64_encode(serialize($event_time))
);

$insert_id = insert('viewing_time_tbl', $save_data);

if($insert_id){
    echo 'Success';
}else{
    echo 'Error';
}



die;

