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

    // $args = array('http'=>array('header' => "User-Agent:MyAgent/1.0\r\n"));
    // $context = stream_context_create($args);
    // create HTML DOM
    // $html = file_get_html(PARSE_URL, false, $context);

$properties_id = get_rent_ids();
foreach ($properties_id as $key => $property_id) {
	$data[] = get_property($property_id);
}


// $property = get_property($properties_id[0]);
var_dump($data);
die;
// $properties_data = get_property($property_id[0]);
// var_dump($properties_id);
// die;
function scraping_digg() {
    // create HTML DOM
//    foreach($html->find('table#mainresults') as $table) {
//        foreach( $table->find("tr.light") as $row){
//            $id = $row->getAttribute('id');
//
//
//            $int_id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
//            if(is_numeric($int_id)){
//                $properties_id[] = $int_id;
//            }
//        }
//    }

//    $first_id = $properties_id[0];
//    http://www.homeless.co.il/rent/viewad,631096.aspx

//    $item = array();
//    echo '<table border="1">';
    $properties_id = get_rent_ids();
    $properties_data = array();
    foreach($properties_id as $property_id){
        $properties_data[$property_id] = get_property($property_id);
    }
//    echo '<pre>';
//    print_r($properties_data);
//    echo '</pre>';
//    echo '</table>';



    // get news block
//    foreach($html->find('div.news-summary') as $article) {
//        // get title
//        $item['title'] = trim($article->find('h3', 0)->plaintext);
//        // get details
//        $item['details'] = trim($article->find('p', 0)->plaintext);
//        // get intro
//        $item['diggs'] = trim($article->find('li a strong', 0)->plaintext);
//
//        $ret[] = $item;
//    }

    // clean up memory
//    $html->clear();
//    unset($html);

    return $properties_id;
}


// -----------------------------------------------------------------------------
// test it!

// "http://digg.com" will check user_agent header...
//ini_set('user_agent', 'My-Application/2.5');

$ret = scraping_digg();

//foreach($ret as $v) {
//    echo $v['title'].'<br>';
//    echo '<ul>';
//    echo '<li>'.$v['details'].'</li>';
//    echo '<li>Diggs: '.$v['diggs'].'</li>';
//    echo '</ul>';
//}
