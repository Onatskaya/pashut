<?php
include_once('functions/function.php');
$data['first_name']=$_POST['First_Name'];
$data['last_name']=$_POST['Last_Name'];
$data['telephone']=$_POST['Telephone'];
$data['email']=$_POST['Email'];
$data['street_address']=$_POST['Street_Address'];
$data['city']=$_POST['City'];
$data['state']=$_POST['State'];
$data['zip_code']=$_POST['Zip_Code'];
$data['office_location']=$_POST['Office_Location'];
$data['degree']=$_POST['Degree'];
$data['mon_from']=$_POST['Mon_From']; 
$data['mon_to']=$_POST['Mon_To'];
$data['tue_from']=$_POST['Tue_From'];
$data['tue_to']=$_POST['Tue_To'];
$data['wed_from']=$_POST['Wed_From'];
$data['wed_to']=$_POST['Wed_To'];
$data['thu_from']=$_POST['Thu_From'];
$data['thu_to']=$_POST['Thu_To'];
$data['fri_from']=$_POST['Fri_From'];
$data['fri_to']=$_POST['Fri_To'];
$data['sat_from']=$_POST['Sat_From'];
$data['sat_to']=$_POST['Sat_To'];
$data['sun_from']=$_POST['Sun_From']; 
$data['sun_to']=$_POST['Sun_To'];
$data['start_month']=$_POST['Start_Month']; 
$data['start_day']=$_POST['Start_Day'];
$data['start_year']=$_POST['Start_Year'];

if(isset($_FILES['Resume']) && $_FILES['Resume']['error']==0 )
{
	$docExe=['doc','docx','pdf'];
	$ext = pathinfo($_FILES['Resume']['name'], PATHINFO_EXTENSION);
	$data['resume']=$filename=$data['email'].'.'.$ext;
	if(in_array($ext,$docExe))
	{
		move_uploaded_file($_FILES['Resume']['tmp_name'],'uploads/resumes/'.$filename);
	}
	else
	{
		echo "<script>setTimeout(function(){window.history.back();},2000);</script><h4 style='z-index:99; background-color:#FF3366;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Invalid File Type ! Please Choose <b style='font-size:20px;'>.doc</b>,<b style='font-size:20px;'>.docx</b> or <b style='font-size:20px;'>.pdf</b> File</h4>";
		die;
	}	
}	
if(insert('jobs',$data,'job_id','job_id'))
{
	echo "<script>setTimeout(function(){location.href='index.php'},2000);</script><h4 style='z-index:99; background-color:#7292DA;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Request Recieved Successfully ! You will Get A Reply Soon, Thank you !</h4>";
}
else
{
	echo "<script>setTimeout(function(){window.history.back();},2000);</script><h4 style='z-index:99; background-color:#FF3366;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Sorry !We Can not accept your request at the moment , Please try again later </h4>";
}	

?>