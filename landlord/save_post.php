<?php
include("../functions/function.php");


$member_id=$_SESSION['member_id'];
if(!empty($_POST['calendar_events'])){
    $calendar_events = $_POST['calendar_events'];
    unset($_POST['calendar_events']);
}

$contact=$_POST['contact_a'].'-'.$_POST['contact_b'].'-'.$_POST['contact_c'];

$listing_number=last_id('post','post_id','listing_number');
if($listing_number=="")
{
	$_POST['listing_number']= '1';
}
else
{
	$listing_number++;
	$_POST['listing_number']= $listing_number;
}




$_POST['main_image']="";
$_POST['image1']="";
$_POST['image2']="";
$_POST['image3']="";
$_POST['image4']="";
$_POST['image5']="";
if($_FILES['main_image']['name'] != "")
{
	$main_image= $_FILES['main_image']['name'];
	$ext= explode(".",$main_image);
	$end_m= end($ext);
	$main_image= "m".$member_id.time().".".$end_m;
	$_POST['main_image']=$main_image;
	move_uploaded_file($_FILES["main_image"]["tmp_name"],"../home_images/".$main_image);
	$_POST['main_image']=$main_image;
}

if($_FILES['image1']['name'] != "")
{
	$image1= $_FILES['image1']['name'];
	$ext1= explode(".",$image1);
	$end1= end($ext1);
	$image1= "a".$member_id.time().".".$end1;
	$_POST['image1']=$image1;
	move_uploaded_file($_FILES["image1"]["tmp_name"],"../home_images/".$image1);
	$_POST['image1']=$image1;
}

if($_FILES['image2']['name'] != "")
{
	$image2= $_FILES['image2']['name'];
	$ext2= explode(".",$image2);
	$end2= end($ext2);
	$image2= "b".$member_id.time().".".$end2;
	$_POST['image2']=$image2;
	move_uploaded_file($_FILES["image2"]["tmp_name"],"../home_images/".$image2);
	$_POST['image2']=$image2;
}

if($_FILES['image3']['name'] != "")
{
	$image3= $_FILES['image3']['name'];
	$ext3= explode(".",$image3);
	$end3= end($ext3);
	$image3= "c".$member_id.time().".".$end3;
	$_POST['image3']=$image3;
	move_uploaded_file($_FILES["image3"]["tmp_name"],"../home_images/".$image3);
	$_POST['image3']=$image3;
}

if($_FILES['image4']['name'] != "")
{
	$image4= $_FILES['image4']['name'];
	$ext4= explode(".",$image4);
	$end4= end($ext4);
	$image4= "d".$member_id.time().".".$end4;
	$_POST['image4']=$image4;
	move_uploaded_file($_FILES["image4"]["tmp_name"],"../home_images/".$image4);
	$_POST['image4']=$image4;
}

if($_FILES['image5']['name'] != "")
{
	$image5= $_FILES['image5']['name'];
	$ext5= explode(".",$image5);
	$end5= end($ext5);
	$image5= "e".$member_id.time().".".$end5;
	$_POST['image5']=$image5;
	move_uploaded_file($_FILES["image5"]["tmp_name"],"../home_images/".$image5);
	$_POST['image5']=$image5;
}

date_default_timezone_set('Asia/Kolkata');
$_POST['date']= date('Y-m-d h:i:s');

$_POST['availability']=date('Y-m-d',strtotime($_POST['availability']));
$_POST['post_date']=date('Y-m-d',strtotime($_POST['post_date']));
// print_r($_POST['availability']);die;
$_POST['member_id']=$member_id;

$_POST['property_available']='Available';
// print_r($_POST);die;

$post_id=insert('post',$_POST,'post_id','post_id');

if( !empty($calendar_events)){
//    [{"title":"01:30-02:00","start":"2016-12-15T01:30","end":"2016-12-15T02:00","description":""}]
    $save_data = array(
        'property_id' => $post_id,
        'viewing_time' => base64_encode(serialize($calendar_events))
    );

    $insert_id = insert('viewing_time_tbl', $save_data);
}


// print_r($_FILES['image']['name'][0]);die;
if(is_array($_FILES['image']) AND $_FILES['image']['name'][0] != "")
{
	$n=0;
 	foreach ($_FILES['image']['name'] as $img) 
	{
		$ext= explode(".",$img);
		$end= end($ext);
		$img2= $member_id.$n.time().".".$end;
		move_uploaded_file($_FILES['image']["tmp_name"][$n],"../home_images/".$img2);
		$que_img= "INSERT INTO house_image(member_id,post_id,image) VALUES('$member_id','$post_id','$img2') ";
		$obj_img= mysqli_query($conn,$que_img);
		$n++;
		// print_r($que_img);die;
	}
}




$email_to = $_POST['email'];
$email_subject = "PashutLehaskir.com - New Listing Confirmation!";
$message="Your listing is Submitted Successfully";

$body="<table width='100%' height='100%' style='min-width:348px' border='0' cellspacing='0' cellpadding='0'>
    <tbody>
      <tr height='32px'></tr>
      <tr align='center'>
        <td width='32px'></td>
        <td>
          <table border='0' cellspacing='0' cellpadding='0' style='max-width:600px'>
            <tbody>
            
              <tr height='16'>
              </tr>
              <tr>
                <td>
                  <table bgcolor='#E92324' width='100%' border='0' cellspacing='0' cellpadding='0' style='min-width:332px;max-width:600px;border:1px solid #e0e0e0;border-bottom:0;border-top-left-radius:3px;border-top-right-radius:3px'>
                    <tbody>
                      <tr>
                        <td></td>
                        <td height='72px' colspan='2'>
                          <img width='150' height='50' src='http://www.laabhaa.co.in/pashutlehaskir.com/images/logo.png' style='display:block;width:300px;min-height:32px' class='CToWUd'>
                        </td>
                      </tr>
                      <tr>
                        <td width='50px'></td>
                        <td style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:24px;color:#ffffff;line-height:1.25'>Property Listing Confirmation!</td>
                        <td width='32px'></td></tr><tr><td height='18px' colspan='3'></td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr>
                <td>
                  <table bgcolor='#FAFAFA' width='100%' border='0' cellspacing='0' cellpadding='0' style='min-width:332px;max-width:600px;border:1px solid #f0f0f0;border-bottom:1px solid #c0c0c0;border-top:0;border-bottom-left-radius:3px;border-bottom-right-radius:3px;background:url(http://www.laabhaa.co.in/pashutlehaskir.com/images/footer-bg.png)'>
                    <tbody>
                      <tr height='16px'>
                        <td width='32px' rowspan='3'></td>
                        <td></td>
                        <td width='32px' rowspan='3'></td>
                      </tr>
                      <tr>
                        <td>
                          <table style='min-width:300px' border='0' cellspacing='0' cellpadding='0'>
                            <tbody>
                              <tr>
                                <td style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1.5'>Dear ".$_POST['name'].",</td>
                              </tr>
                              <tr>
                                <td style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1.5'>
                                    
                                    Thank you for listing with PashutLeHaskir.com! Your property is available instantly on our website and ready to schedule and rent! Remember to set your viewing/scheduling hours for renters to conveniently see your property. 

                                  <table border='0' cellspacing='0' cellpadding='0' style='margin-top:16px;margin-bottom:16px'>
                                    <tbody>
                                      <tr valign='middle'>
                                        <td width='16px'></td>
                                        <td style='line-height:1.2'>
                                          <span style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:18px;font-weight:bold;color:#E92324'>".$_POST['name']." </span>
                                        </td>
                                      </tr>
                                      <tr valign='middle'>
                                        <td width='16px'></td>
                                        <td style='line-height:1.2'>
                                          <span style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:18px;font-weight:bold;color:#E92324'><a href='pashutlehaskir.com/view_detail.php?pid=".$post_id."'> Click Here</a> to View Property</span>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                   <tr>
                                      <td style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1'>Property Owners on PashutLeHaskir.com enjoy the benefits of higher quality tenants that are actively ready to rent and the added value of filling their vacancies faster.</td>
                                    </tr>
                                  
                                </td>
                              </tr>
                              <tr height='32px'></tr>
                              <tr>
                                <td style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1.5'>If you have any questions regarding your account or listing please contact our help desk at <br><b style='color:#961717;'><a href='mailto:info@pashutlehaskir.com'> info@pashutlehaskir.com</a></b></td>
                              </tr>
                              <tr height='16px'></tr>
                              
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr height='32px'></tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <table bgcolor='#E92324' width='100%' border='0' cellspacing='0' cellpadding='0' style='min-width:332px;max-width:600px;border:1px solid #e0e0e0;border-bottom:0;border-top-left-radius:3px;border-top-right-radius:3px'>
                <tbody>
                  <tr>
                    <td></td>
                    <td height='72px' colspan='2'>
                      <img width='150' height='50' src='http://www.laabhaa.co.in/pashutlehaskir.com/images/logo.png' style='display:block;width:300px;min-height:32px;margin-left:35px;' class='CToWUd'>
                    </td>
                  </tr>
                </tbody>
              </table>
              
              
            </tbody>
          </table>
        </td>
        <td width='32px'></td>
      </tr>
      <tr height='32px'></tr>
    </tbody>
  </table>";
// print_r($body);die;
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'From:Pashutlehaskir<info@pashutlehaskir.com>' . "\r\n";
//$headers .= 'Cc:'.$user_email. "\r\n";
@mail($email_to, $email_subject, $body, $headers);




echo "<script>setTimeout(function(){window.location.href='view_post_detail.php?pid=$post_id'},2000);</script><h4 style='z-index:99; background-color:#7292DA;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Post Added Successfully!</h4>";
?>