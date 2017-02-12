<?php

function get_rent_ids($type = 'mainresults'){
    $properties_table = 'table#' . $type;
    $properties_id = array();

    $args = array('http'=>array('header' => "User-Agent:MyAgent/1.0\r\n"));
    $context = stream_context_create($args);
    // create HTML DOM
    $html = file_get_html(PARSE_URL, false, $context);


    foreach($html->find($properties_table) as $table) {
        foreach( $table->find("tr.light") as $row){
            $id = $row->getAttribute('id');


            $int_id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
            if(is_numeric($int_id)){
                $properties_id[] = $int_id;
            }
        }
    }
    $html->clear();
    unset($html);

    return $properties_id;
}

function get_property($property_id){
    header('Content-Type: text/html; charset=utf-8');
    $data = array();
    $args = array('http'=>array('header' => "User-Agent:MyAgent/1.0\r\n"));
    $context = stream_context_create($args);

    $page = file_get_html(PARSE_URL . '/viewad,' . $property_id . '.aspx', false, $context);
    $add_info = $page->find('div#addetails', 0);

//    foreach($add_info as $info){
    $data['title'] = $add_info->find('h1', 0)->plaintext;
    $data['price'] = trim($add_info->find('div.price', 0)->plaintext, "|");
    $data['remarks'] = $add_info->find('div.remarks', 0)->plaintext;
//    $add_info->find('div.remarks', 0)->parent()->parent();
    $main_content = $add_info->find('div.main', 0)->find('div div div', 0);
//    $data['add_info'][] = $main_content->children(0)->innertext;

// $bars = $main_content->children(2)->outertext;
    //Bars
    $bars = $main_content->children(2);
    $data['bars']['label'] = $bars->plaintext;
    $data['bars']['value'] = get_check_value($bars->find('img', 0)->src);

    //Partners
    $partners = $main_content->children(3);
    $data['partners']['label'] = $partners->plaintext;
    $data['partners']['value'] = get_check_value($partners->find('img', 0)->src);

    //Furniture
    $furniture = $main_content->children(4);
    $data['furniture']['label'] = $furniture->plaintext;
    $data['furniture']['value'] = get_check_value($furniture->find('img', 0)->src);

    //Elevator
    $elevator = $main_content->children(6);
    $data['elevator']['label'] = $elevator->plaintext;
    $data['elevator']['value'] = get_check_value($elevator->find('img', 0)->src);

    //Balcony
    $balcony = $main_content->children(7);
    $data['balcony']['label'] = $balcony->plaintext;
    $data['balcony']['value'] = get_check_value($balcony->find('img', 0)->src);

    //Parking: on the street
    $parking = $main_content->children(9);
    $data['parking']['label'] = $parking->plaintext;
    $data['parking']['value'] = get_check_value($parking->find('img', 0)->src);

    //Air conditioning
    $air_conditioning = $main_content->children(10);
    $data['air_conditioning']['label'] = $air_conditioning->plaintext;
    $data['air_conditioning']['value'] = get_check_value($air_conditioning->find('img', 0)->src);

    //Mr:
    $mr = $main_content->children(13);
    $data['mr']['label'] = $mr->plaintext;
    //$data['mr']['value'] = $main_content->children(11)->plaintext;

    //Floor
    $floor = $main_content->children(14);
    $data['floor']['label'] = $floor->plaintext;

    //Contact
    $contact = $main_content->children(15);
    $data['contact']['label'] = $contact->plaintext;

    //Payments per year
    $payments_per_year = $main_content->children(17);
    $data['payments_per_year']['label'] = $payments_per_year->plaintext;

    //Availability
    $availability = $main_content->children(18);
    $data['availability']['label'] = $availability->plaintext;

    //View Phone
    $view_phone = $main_content->children(19);
    $data['view_phone']['label'] = $view_phone->plaintext;

    //Address
    $address = $main_content->children(21);
    $data['address']['label'] = $address->plaintext;

    //Region
    $region = $main_content->children(24);
    $data['region']['label'] = $region->plaintext;

    //Price
    $price = $main_content->children(25);
    $data['price_field']['label'] = $price->plaintext;

    $path = dirname(__FILE__);
    $logo_imaga = $path . '/logo_mark.png';

    foreach($add_info->find('ul#piccarousel') as $image){
        foreach($image->find('img') as $element){
//            header('Content-type: image/jpeg');
//            $data['images'][] = $element->src;
//            $img = '/var/www/clocal/test/test.jpeg';
            parse_str($element->src, $img_query);
            $filename = $img_query['fn'];
            $save_filepath = $path . '\images\/' . $filename;

            file_put_contents($save_filepath, file_get_contents($element->src));
//            add_image_logo($save_filepath, $logo_imaga);

            $data['images'][] = $save_filepath;
        }
    }

    $page->clear();
    unset($page);

    return $data;
}

function get_check_value($img_src){
    if( strpos( $img_src, IMGSRC_TRUE )){
        return true;
    }else{
        return false;
    }
}

function view_row($row){
    foreach($row as $key => $field){
//        echo '<td>';
        if('images' == $key ){
            foreach($field as $image){
                header('Content-type: image/jpeg');
                echo file_get_contents($image);
            }
        }
//        else{
//            if(is_array($field)){
//                if(isset($field['label'])){
//                    echo $field['label'] . ': ' . $field['value'];
//                }
//            }else{
//                echo $field;
//            }
//        }

//        echo '</td>';
    }
}

function add_image_logo($image_path, $logo){
    $stamp = imagecreatefrompng($logo);
    $im = imagecreatefromjpeg($image_path);

    $marge_right = 10;
    $marge_bottom = 10;
    $sx = imagesx($stamp);
    // var_dump($sx);
    $sy = imagesy($stamp);

    // Копирование изображения штампа на фотографию с помощью смещения края
    // и ширины фотографии для расчета позиционирования штампа.
    imagecopy($im, $stamp, 0, imagesy($im) - $sy, 0, 0, imagesx($stamp), imagesy($stamp));

    // Вывод и освобождение памяти
    header('Content-type: image/png');
    imagepng($im);
    imagedestroy($im);
}
