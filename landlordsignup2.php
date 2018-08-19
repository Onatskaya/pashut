<?php
include_once('functions/function.php');
// print_r($_POST);
$data['member_type']='landlord';
$data['first_name']=$_POST['first_name'];
$data['last_name']=$_POST['last_name'];
$data['email']=$_POST['ll_email'];
$data['mem_phone_a']=$_POST['ll_phone_a'];
$data['mem_phone_b']=$_POST['ll_phone_b'];
$data['mem_phone_c']=$_POST['ll_phone_c'];
$data['mem_street_number']=$_POST['ll_street_number'];
$data['mem_street_address']=$_POST['ll_street_address'];
$data['mem_city']=$_POST['ll_city'];
$data['mem_state']=$_POST['ll_state'];
$data['mem_zipcode']=$_POST['ll_zipcode'];
$data['ll_type']=$_POST['landlord_type_id'];
$data['username']=$_POST['username'];
$data['password']=$_POST['password'];
$data['accept_terms']=$_POST['llterms'];
$data['accept_foreclosure']=$_POST['nofc'];
$data['accept_credit_check']=$_POST['credit_check'];
$data['accept_pm_brokerage']=$_POST['pm_brokerage'];

$WHERE['username']=$_POST['username'];
$exst=isExist('members',$WHERE);
// print_r($exst);die;
if($exst== true)
{
	echo "<script>setTimeout(function(){window.history.back();},3000);</script><h4 style='z-index:99; background-color:#FF3366;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Username already exist, choose another Username</h4>";
}
else
{
	if(insert('members',$data,'member_id','member_id'))
	{
			$email_to2 = $_POST['ll_email'];
			$email_subject2 = "Registration Successful!";
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
									<td style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:24px;color:#ffffff;line-height:1.25'>Registration Successful!</td>
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
											  <br>Your account created successfully please have a login and post your listings
											  <br>
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
			$headers2 .= 'From: Pashutlehaskir <info@pashutlehaskir.com>' . "\r\n";
			//$headers .= 'Cc:'.$user_email. "\r\n";
			@mail($email_to2, $email_subject2, $body2, $headers2);



		echo "<script>setTimeout(function(){window.location.href='index.php'},2000);</script><h4 style='z-index:99; background-color:#5cb85c;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Registeration Successfull !</h4>";
	}
	else
	{
		echo "<script>setTimeout(function(){window.history.back();},2000);</script><h4 style='z-index:99; background-color:#FF3366;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Failed To Register Membership ! Please Try Again Later</h4>";
	}	
}

	

?>