<?php

function get_rent_ids($date, $type = 'mainresults'){
    $properties_table = 'table#' . $type;
    $properties_id = array();
    $urls = [
        1 => 'http://www.homeless.co.il/rent/inumber1=1',      //Tel Aviv:
        176 => 'http://www.homeless.co.il/rent/inumber1=176',    //Netanya:
        7 =>'http://www.homeless.co.il/rent/inumber1=7',      //Jerusalem:
        3 => 'http://www.homeless.co.il/rent/inumber1=3'       //Givatayim:
    ];

    // id's cities from city table
    $cities = [
        1 => 1,
        176 => 4,
        7 => 11,
        3 => 3,
    ];
    $limit = 0;

    // create HTML DOM
    foreach ($urls as $key => $url) {
        $args = array('http'=>array('header' => "User-Agent:MyAgent/1.0\r\n"."Cookie: search_inumber1%3d".$key."_rent={'boardtype':'rent','inumber1':'".$key."'}\r\n"));
        $context = stream_context_create($args);
         for ($i = 1; $i<=600;$i++) {
            $limit++;
            $pagination_url =$url.'/'.$i;
            $html = file_get_html($pagination_url, false, $context);
            $ids = get_id($html, $properties_table, $date, $cities[$key]);
            if(!empty($ids)){
                $properties_id = array_merge($properties_id,$ids);
            }else{
                break;
            }
            if($limit >= 50){
                break;
            }
        }
    }

    return $properties_id;
}

function get_id($html,$properties_table, $date, $city_id){

    $result = array();
    $date = DateTime::createFromFormat('m/d/Y', trim($date))->getTimestamp();
    $table = $html->find($properties_table)[0];

    foreach ($table->find("tr[type=ad]") as $row) {
        $date_td = DateTime::createFromFormat('d/m/Y', trim($row->children(9)->plaintext))->getTimestamp();
        if ($date_td >= $date) {
            $id = $row->getAttribute('id');
            $int_id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
            if (is_numeric($int_id)) {
                $result[] = ['id' => $int_id, 'city_id' => $city_id];
            }
        } else {
            break;
        }
    }
    $html->clear();
    unset($html);
    return $result;
}

function get_property($property){
    //header('Content-Type: text/html; charset=utf-8');
    $data = array();
    $args = array('http'=>array('header' => "User-Agent:MyAgent/1.0\r\n"));
    $context = stream_context_create($args);

    $page = file_get_html(PARSE_URL . '/viewad,' . $property['id'] . '.aspx', false, $context);
    $phone_url = 'http://www.homeless.co.il/webservices/icardos.asmx/IncrementClickesAndGetPhoneNumber?AdID='. $property['id'] . '&boardType=rent';
    $phones = file_get_html($phone_url, false, $context);
    $string = $phones->find('string')[0]->plaintext;
    $phones->clear();
    $phones = explode(',', $string);
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

    //Contact
    $phone = explode('-',$phones[0]);
    $data['contact_a'] = $phone[0];
    $data['contact_b'] = substr($phone[1], 0, 3);
    $data['contact_c'] = substr($phone[1], 3, strlen($phone[1]));

    //Address
    $address = $main_content->children(21);
    $data['address']['label'] = $address->plaintext;

    //Region
    $region = $main_content->children(24);
    $data['region']['label'] = $region->plaintext;

    //City
    $data['city'] = $property['city_id'];

    //Price
    $price = $main_content->children(25);
    $data['price_field']['label'] = $price->plaintext;

    $root_dir = (dirname(dirname(dirname(dirname(dirname(__FILE__))))));
    $save_path = $root_dir.'/home_images';
    $logo_imaga = $root_dir . '/images/img_logo.jpg';
    foreach($add_info->find('ul#piccarousel') as $image){
        foreach($image->find('img') as $element){
            if ($element->src == '/images/nopic.jpg'){
                break;
            }
            parse_str($element->src, $img_query);
            $src = substr($element->src, 0, -12);
            $filename = $img_query['fn'];
            $save_filepath = $save_path . '/' . $filename;
            if(file_put_contents($save_filepath, file_get_contents($src)) !== 0){
                chmod($save_filepath, 0777);
                add_logo($save_filepath,$logo_imaga);
                $data['images'][] = $filename;
            };
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


function saveParsPost($property)
{

    $data = get_property($property);
    if (empty($data)) return false;
    $post = [];
    // in production delete 3 from getMember() function
    $member = getMember(3);
    if ($member) {
        $post = [
            'name' => $member['first_name'],
            'email' => $member['email'],
//            'contact_a' => $member['mem_phone_a'],
//            'contact_b' => $member['mem_phone_b'],
//            'contact_c' => $member['mem_phone_c'],
            'member_id' => $member['member_id'],
        ];
    }
    $post += [
        'structure_type' => 1, //for apartments
        'address' => $data['address']['label'],
        'state' => 1, //for Israel
        'city' => $property['city_id'],
        'rent' => $data['price'],
        'parking' => $data['parking']['value']?$data['parking']['label']:'',
        'main_image' => $data['images'][0],
        'listing_number' => last_id('post','post_id','listing_number'),
        'elevator' => $data['parking']['value']?'Yes':'No',
        'balcony' => $data['balcony']['value']?'Yes':'No',
        'short_descp' => $data['title'],
        //'short_descp' => substr($data['remarks'], 0, 250).'...',
        'full_descp' => $data['remarks'],
        'floor' => $data['floor']['label'],
        'property_available' => 'Available',
        'square_footage' => $data['mr']['label'],
        'contact_a' => $data['contact_a'],
        'contact_b' => $data['contact_b'],
        'contact_c' => $data['contact_c'],
    ];
    $post += [
        'availability' => date('Y-m-d h:i:s'),
        'date' => date('Y-m-d h:i:s'),
        'post_date' => date('Y-m-d h:i:s'),
    ];

//    save post and save data what post was parsed
    $post_id = insert('post', $post, 'post_id','post_id');
    insert('parsed_data',['parsed_id' => $property['id']]);
    if ($post_id) {
        foreach ($data['images'] as $i => $image) {
            if ($i < 5) {
                update('post', ['image' . $i => $image], ['post_id' => $post_id]);
            } else {
                insert('house_image', ['member_id' => $member['member_id'], 'post_id' => $post_id, 'image' => $image]);
            }

        }
        return true;
    } else {
        return false;
    }
}

function is_already_parsed($id){
    return select('parsed_data', ['parsed_id' => $id]);
}
