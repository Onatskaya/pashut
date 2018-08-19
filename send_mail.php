<?php
include_once('functions/function.php');
$to = "info@pashutlehaskir.com";
$subject = "Request from the user";


//$email_to = "info@pashutlehaskir.com";
$email_subject = "Enquiry from User";
$phone=$_POST['phone_a'].$_POST['phone_b'].$_POST['phone_c'];
// print_r($phone);die;
$body= '
<html>
<head>
  <title>New Inquiry </title>
</head>
<body>
   
  <table border="0" cellspacing="0" cellpadding="0" width="602" align="center">
  <tbody><tr>
    <td align="left" style="font-size:12px;font-family:Arial; border-bottom:1px solid #c8c8c8;">

    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <tbody><tr valign="middle">
     
      </tr>
    </tbody></table>
    &nbsp;<br>
    
    </td>
  </tr>
  
  <tr>
    <td align="left" style="border:solid 1px #c8c8c8;font-size:12px;font-family:Arial;padding:20px;">
<h1>Dear Admin,</h1>

<p>You have an enquiry from website. Please contact him</p>

<div style="width:550px;min-height:30px;border:solid 1px #e5e5e5;background:-webkit-gradient(linear,left top,left bottom,from(#fff),to(#eee));background:-moz-linear-gradient(top,#fff,#eee)">
<table border="0" cellpadding="0" cellspacing="0" style="width:550px;height:30px;margin:auto">
        <tbody>
      
             
           
             <tr valign="" style="height:30px">
                <td style="padding-left:10px">
            <p> Name</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
            <p>'.$_POST['name'].'</p>
                </td>
            </tr>
            <tr valign="" style="height:30px">
                <td style="padding-left:10px">
            <p>E-Mail</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
            <p>'.$_POST['email'].'</p>
                </td>
            </tr>
            <tr valign="" style="height:30px">
                <td style="padding-left:10px">
            <p>Contact No.</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
            <p>'.$phone.'</p>
                </td>
            </tr>
            
            
            <tr valign="" style="height:30px">
                <td style="padding-left:10px">
            <p>Message</p>                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
            <p>'.$_POST['message'].'</p>
                </td>
            </tr>
            
         
    </tbody>
</table>
</div>
<div style="clear:both"></div>
<br><br>

<div style="clear:both"></div>
      <br>&nbsp;
    </td>
  </tr>
   <tr>
    <td align="left" style="font-size:12px;font-family:Arial">

    <br>
    
    </td>
  </tr>
</tbody></table>
</body>
</html>
';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Enquiry <info@pashutlehaskir.com>' . "\r\n";

if (mail($to,$subject,$body, $headers )){
echo "<script>setTimeout(function(){window.location.href='contactus.php'},2000);</script><h4 style='background-color:green;width:50%; top:105px; left:25%; position: absolute; padding:6px 6px; color: #fff; text-align:center; font-size:18px;font-family: Georgia;font-style: italic;'>Mail Sent successfully</h4>";
} else {
echo "<script>setTimeout(function(){window.location.href='contactus.php'},2000);</script><h4 style='background-color:red;width:50%; top:105px; left:25%; position: absolute; padding:6px 6px; color: #fff; text-align:center; font-size:18px;font-family: Georgia;font-style: italic;'>Mail not sent. Try againe later</h4>";
}

exit;

// To send HTML mail, the Content-type header must be set
//$headers  = 'MIME-Version: 1.0' . "\r\n";
//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
//$headers .= 'From: Enquiry <info@pashutlehaskir.com>' . "\r\n";
//$headers .= 'Cc:'.$user_email. "\r\n";
//@mail($email_to, $email_subject, $body, $headers);






?>
