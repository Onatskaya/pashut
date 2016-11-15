<?php
include_once('functions/function.php');
extract($_POST);
//die;
$WHERE['email']=$verify;
if($data=select('members',$WHERE))
{
	
	extract($data[0]);
	$to = $verify;
	$url = "http://www.pashutlehaskir.com/login2.php";
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
														<img width='150' height='50' src='http://www.pashutlehaskir.com/images/logo.png' style='display:block;width:300px;min-height:32px' class='CToWUd'>
													</td>
												</tr>
												<tr>
													<td width='50px'></td>
													<td style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:24px;color:#ffffff;line-height:1.25'>Password Recovery</td>
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
																	<td style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1.5'>Hi $first_name $last_name,</td>
																</tr>
																<tr>
																	<td style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1.5'>
																		Your Password Has been Restored Successfully 
																		<table border='0' cellspacing='0' cellpadding='0' style='margin-top:16px;margin-bottom:16px'>
																			<tbody>
																				<tr valign='middle'>
																					<td width='16px'></td>
																					<td style='line-height:1.2'>
																						<span style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:16px;color:#202020'>Login Details </span>
																					</td>
																				</tr>
																			</tbody>
																		</table>
																		<table border='0' cellspacing='0' cellpadding='0' style='margin-top:16px;margin-bottom:16px'>
																			<tbody>
																				<tr valign='middle'>
																					<td width='16px'></td>
																					<td style='line-height:1.2'>
																						<span style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:16px;color:#727272'>Username:</span>
																					</td>
																					<td width=20px>  </td>
																					<td width=20px> : </td>
																					<td>
																						<span style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#727272'>$username</span>
																					</td>
																				</tr>
																				<tr valign='middle'>
																					<td width='16px'></td>
																					<td style='line-height:1.2'>
																						<span style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:16px;color:#727272'>Password</span>
																					</td>
																					<td width=20px>  </td>
																					<td width=20px> : </td>
																					<td>	
																						<span style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#727272'>$password</span>
																					</td>
																				</tr>
																				<tr valign='middle'>
																					<td width='16px'></td>
																					<td style='line-height:1.2'>
																						<span style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:16px;color:#727272'>Login @ </span>
																					</td>
																					<td width=20px>  </td>
																					<td width=20px> : </td>
																					<td>	
																						<span style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#727272'>$url</span>
																					</td>
																				</tr>
																			</tbody>
																		</table>
																		
																	</td>
																</tr>
																<tr height='32px'></tr>
																<tr>
																	<td style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1.5'>Best,<br>Team <b style='color:#961717;'>pashutle</b><span style='color:#961717;'>haskir.com</span></td>
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
								<tr height='16'></tr>
								<tr>
									<td style='max-width:600px;font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:10px;color:#bcbcbc;line-height:1.5'></td>
								</tr>
								<tr>
									<td>
										<table style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:10px;color:#666666;line-height:18px;padding-bottom:10px'>
											<tbody>
												<tr>
													<td>You received this mandatory email service announcement to update you about important changes to your <b style='color:#961717;'>pashutle</b><span style='color:#961717;'>haskir.com</span>
												</tr>
												<tr>
													<td>
														&copy; 2016 <b style='color:#961717;'>pashutle</b><span style='color:#961717;'>haskir.com</span>, </div>
													</td>
												</tr>
											</tbody>
										</table>
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
	
	$from = "info@pashutlehaskir.com";
	$subject = "Password Recovery Mail -info@pashutlehaskir.com";
	$headers1  = 'MIME-Version: 1.0' . "\r\n";
	$headers1 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	// Additional headers
	$headers1 .= 'From: pashutlehaskir.com <info@pashutlehaskir.com>' . "\r\n";
	//$headers .= 'Cc:'.$user_email. "\r\n";
	// Mail it
	$sentmail= @mail($to, $subject, $body, $headers1);
	echo "<script>setTimeout(function(){location.href='login2.php'},4000);</script><h4 style='z-index:99; background-color:#7292DA;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Password Sent Successfully ! Please check your registered email to restore your password</h4>";
}
else
{
	echo "<script>setTimeout(function(){window.history.back();},2000);</script><h4 style='z-index:99; background-color:#FF3366;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Invalid Username !</h4>";
}	
//if(insert('members',$data,'member_id','member_id'))
//{
//	echo "<script>setTimeout(function(){window.location.href='index.html'},2000);</script><h4 style='z-index:99; background-color:#5cb85c;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Registeration Successfull !</h4>";
//}
//else
//{
//	echo "<script>setTimeout(function(){window.history.back();},2000);</script><h4 style='z-index:99; background-color:#FF3366;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Failed To Register Membership ! Please Try Again Later</h4>";
//}
	

?>