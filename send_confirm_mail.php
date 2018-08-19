<?php
include("functions/function.php");
$member_id= $_SESSION['member_id'];

$pid=$_GET['pid'];

$que_m="SELECT * FROM members WHERE member_id='$member_id' ";
$obj_m= mysqli_query($conn,$que_m);
$data_m=mysqli_fetch_assoc($obj_m);
$name= $data_m['first_name'];
$email_id_member=$data_m['email'];

$day=$_GET['tid'];
$time_from=$_GET['time_from'];
$time_to=$_GET['time_to'];

$email_id_land=$_GET['land_id'];

$email_to = "$email_id_member";
$email_subject = "Instant Viewing Confirmation";
// print_r($phone);die;
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
                          <img width='150' height='50' src='http://pashutlehaskir.com/images/logo.png' style='display:block;width:300px;min-height:32px' class='CToWUd'>
                        </td>
                      </tr>
                      <tr>
                        <td width='50px'></td>
                        <td style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:24px;color:#ffffff;line-height:1.25'>Instant Viewing Confirmation!</td>
                        <td width='32px'></td></tr><tr><td height='18px' colspan='3'></td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr>
                <td>
                  <table bgcolor='#FAFAFA' width='100%' border='0' cellspacing='0' cellpadding='0' style='min-width:332px;max-width:600px;border:1px solid #f0f0f0;border-bottom:1px solid #c0c0c0;border-top:0;border-bottom-left-radius:3px;border-bottom-right-radius:3px'>
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
                                <td style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1.5'>Dear ".$name.",</td>
                              </tr>
                              <tr>
                                <td style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1.5'>
                                  <br>Thank you for scheduling an instant viewing time with PashutLeHaskir.com! <br><br>
                                  Your scheduled time to view the property you selected  is between ".$time_from." & ".$time_to." ".$day."<br><br>
                                  All properties listed throughout our website are available and ready to schedule and rent! Simply search our database with your desired specifications to find a perfect property suitable to your exact needs!
                                  <table border='0' cellspacing='0' cellpadding='0' style='margin-top:16px;margin-bottom:16px'>
                                    <tbody>
                                      <tr valign='middle'>
                                        <td width='16px'></td>
                                        <td style='line-height:1.2'>
                                          <span style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:16px;color:red'>".$name." </span>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <table border='0' cellspacing='0' cellpadding='0' style='margin-top:16px;margin-bottom:16px'>
                                    <tbody>
                                      <tr valign='middle'>
                                        <td width='16px'></td>
                                        <td style='line-height:1.2'>
                                          <span style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:16px;color:red'>Instant Viewing Scheduled Between ".$time_from." & ".$time_to."  on ".$day."</span>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <table border='0' cellspacing='0' cellpadding='0' style='margin-top:16px;margin-bottom:16px'>
                                    <tbody>
                                      <tr valign='middle'>
                                        <td width='16px'></td>
                                        <td style='line-height:1.2'>
                                          <span style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:16px;color:red;'>A notification email has also been sent to the Owner of the property!</span>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                              <tr height='32px'></tr>
                              <tr>
                                <td style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:red;line-height:1.5'>If you have any questions regarding your account please contact our help desk at info@pashutlehaskir.com<br></td>
                              </tr>
                              <tr height='16px'>
                                  <td style='background-color:red';><img width='150' height='50' src='http://pashutlehaskir.com/images/logo.png' style='display:block;width:300px;min-height:32px' class='CToWUd'></td>
                              </tr>
                              
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr height='32px'></tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr height='16'></tr>
              <tr>
                <td style='max-width:600px;font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:10px;color:#bcbcbc;line-height:1.5'></td>
              </tr>
              <tr>
                <td>
                  
                </td>
              </tr>
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
$headers .= 'From: Instant Viewing Confirmation <info@pashutlehaskir.com>' . "\r\n";
//$headers .= 'Cc:'.$user_email. "\r\n";
@mail($email_to, $email_subject, $body, $headers);






$email_to2 = "$email_id_land";
$email_subject2 = "Instant Viewing/Scheduling Confirmation";
// print_r($phone);die;
$body2="<table width='100%' height='100%' style='min-width:348px' border='0' cellspacing='0' cellpadding='0'>
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
                          <img width='150' height='50' src='http://pashutlehaskir.com/images/logo.png' style='display:block;width:300px;min-height:32px' class='CToWUd'>
                        </td>
                      </tr>
                      <tr>
                        <td width='50px'></td>
                        <td style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:24px;color:#ffffff;line-height:1.25'>Instant Viewing/Scheduling Confirmation!</td>
                        <td width='32px'></td></tr><tr><td height='18px' colspan='3'></td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr>
                <td>
                  <table bgcolor='#FAFAFA' width='100%' border='0' cellspacing='0' cellpadding='0' style='min-width:332px;max-width:600px;border:1px solid #f0f0f0;border-bottom:1px solid #c0c0c0;border-top:0;border-bottom-left-radius:3px;border-bottom-right-radius:3px'>
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
                                <td style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1.5'>Dear Landlord,</td>
                              </tr>
                              <tr>
                                <td style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1.5'>
                                  <br>A prospective renter has scheduling an instant viewing time to see your property with PashutLeHaskir.com! 
								  <br>
								  <br>The scheduled time selected  is  between  ".$time_from."  & ".$time_to." on ".$day."
								  <br><br>
								  All properties listed throughout our website are available and ready to schedule and rent! Simply search our database with your desired specifications to find a perfect property suitable to your exact needs!
								  <br><br>
								  
                                 
                                  <table border='0' cellspacing='0' cellpadding='0' style='margin-top:16px;margin-bottom:16px'>
                                    <tbody>
                                      <tr valign='middle'>
                                        <td width='16px'></td>
                                        <td style='line-height:1.2; color:red; '>
                                          Member's Name:<span style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:16px;color:red'>  ".$name." </span>
										</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  
                                  <table border='0' cellspacing='0' cellpadding='0' style='margin-top:16px;margin-bottom:16px'>
                                    <tbody>
                                      <tr valign='middle'>
                                        <td width='16px'></td>
                                        <td style='line-height:1.2'>
                                          <span style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:16px;color:red;'> Instant Viewing Scheduled Between ".$time_from."  & ".$time_to." on ".$day."</span>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                              <tr height='32px'></tr>
                              <tr height='32px'></tr>
                              <tr>
                                <td style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;line-height:1.5'>If you have any questions regarding your account please contact our help desk at info@pashutlehaskir.com<br></td>
                              </tr>
                              
                              <tr height='16px'>
                                  <td style='background-color:red';><img width='150' height='50' src='http://pashutlehaskir.com/images/logo.png' style='display:block;width:300px;min-height:32px' class='CToWUd'></td>
                              </tr>
                              
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr height='32px'></tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr height='16'></tr>
              <tr>
                <td style='max-width:600px;font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:10px;color:#bcbcbc;line-height:1.5'></td>
              </tr>
              <tr>
                <td>
                  
                </td>
              </tr>
            </tbody>
          </table>
        </td>
        <td width='32px'></td>
      </tr>
      <tr height='32px'></tr>
    </tbody>
  </table>";
// print_r($body2);die;

// To send HTML mail, the Content-type header must be set
$headers2  = 'MIME-Version: 1.0' . "\r\n";
$headers2 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers2 .= 'From: Instant Viewing Confirmation <info@pashutlehaskir.com>' . "\r\n";
//$headers .= 'Cc:'.$user_email. "\r\n";
@mail($email_to2, $email_subject2, $body2, $headers);


echo "<script>setTimeout(function(){window.location.href='view_detail.php?pid=$pid'},2000);</script><h4 style='background-color:green;width:50%; top:105px; left:25%; position: absolute; padding:6px 6px; color: #fff; text-align:center; font-size:18px;font-family: Georgia;font-style: italic;'>Thank you for scheduling an instant viewing time</h4>";



?>