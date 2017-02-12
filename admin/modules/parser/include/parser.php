<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s")." GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Cache-Control: post-check=0,pre-check=0", false);
header("Cache-Control: max-age=0", false);
header("Pragma: no-cache");

include('../lib/simple_html_dom.php');
include('../config/define.php');
include('functions.php');
$root_dir = dirname(dirname(dirname(dirname(__DIR__))));
include($root_dir.'/functions/function.php');
$properties_id = get_rent_ids();

//test mod, delete this row in production
$properties_id = $properties_id[0];



$error = false;
foreach ($properties_id as $key => $property_id) {
    if (!saveParsPost(get_property($properties_id))){
        $error = true;
    }
}
if (!$error){
    echo 'Data was saved successfully';
}else{
    echo 'Dude, what\'s wrong';
}



