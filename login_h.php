<?php
include_once('functions/function.php');
// print_r($_POST);
$today_date= date('Y-m-d');
if($_SESSION['language']=='English')
{
	echo "<script>location.href='login.php'</script>";
}
extract($_POST);
$WHERE['username']=$username;
if(select('members',$WHERE))
{
	
	$WHERE['AND password']=$password;
	if($row=select('members',$WHERE))
	{
		if($row[0]['member_type']=='landlord')
		{
			$_SESSION['member_id']=$row[0]['member_id'];
			$_SESSION['landlord_logged']=true;
			$_SESSION['member_type']= $row[0]['member_type'];
			// echo "<script>setTimeout(function(){window.location.href='landlord/dashboard.php'},2000);</script><h4 style='z-index:99; background-color:#7292DA;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Login Successfull!</h4>";
			echo '<script>window.location.href = "landlord/dashboard.php";</script>';
		}
		if($row[0]['member_type']=='member')
		{
			// $que_s="SELECT * FROM members m
			// INNER JOIN plan_tbl p on m.member_id = p.member_id
			//  WHERE m.username='$username' AND p.status='Paid' AND p.end_date > '$today_date' ";
			// $obj_s=mysqli_query($conn,$que_s);
			// if(mysqli_num_rows($obj_s))
			// {
				$_SESSION['member_id']=$row[0]['member_id'];
				$_SESSION['member_logged']=true;
				// echo "<script>setTimeout(function(){window.location.href='member/view_property.php'},2000);</script><h4 style='z-index:99; background-color:#7292DA;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Login Successfull!</h4>";
				echo '<script>window.location.href = "index.php";</script>';
			// }
			// else
			// {
			// 	$_SESSION['err_msg_usr']="Your Membership plan is Expire !";
			// 	echo "<script>window.location.href = 'login2_h.php';</script>";
			// }
		}
	}
	else
	{
		// echo "<script>setTimeout(function(){window.history.back();},2000);</script><h4 style='z-index:99; background-color:#FF3366;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Invalid Password !</h4>";
		$_SESSION['err_msg_pass']="סיסמה שגויה !";
		echo "<script>window.location.href = 'login2_h.php';</script>";
	}	
}
else
{
	// echo "<script>setTimeout(function(){window.history.back();},2000);</script><h4 style='z-index:99; background-color:#FF3366;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Invalid Username !</h4>";
	$_SESSION['err_msg_usr']="שם משתמש לא חוקי !";
	echo "<script>window.location.href = 'login2_h.php';</script>";
}	


?>