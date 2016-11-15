<?php
include_once('functions/function.php');
// print_r($_POST);
if($_SESSION['language']=='Hebrew')
{
	echo "<script>location.href='login_h.php'</script>";
}
$today_date= date('Y-m-d');

extract($_POST);
$WHERE['username']=$username;

if(select('members',$WHERE))
{
	$WHERE['AND password']=$password;	
	//$WHERE['AND member_status']='Enable';
	
	$WHERE1['username']=$username;
	$WHERE1['AND password']=$password;	
	$WHERE1['AND member_status']='Enable';
	
	if($row=select('members',$WHERE))	
	{
		if($row[0]['member_type']=='landlord')
		{
			$_SESSION['member_id']=$row[0]['member_id'];
			$_SESSION['landlord_logged']=true;
			$_SESSION['member_type']= $row[0]['member_type'];
			echo '<script>window.location.href = "landlord/dashboard.php";</script>';
		}
		else if($row=select('members',$WHERE1))	
		{
		
			$_SESSION['member_id']=$row[0]['member_id'];
			$_SESSION['member_logged']=true;
			echo '<script>window.location.href = "index.php";</script>'; 
		}
		else
		{
			$_SESSION['err_msg_pass']="Invalid Password !";
			echo "<script>window.location.href = 'login2.php';</script>";
		}
	
	}
	else
	{
		$_SESSION['err_msg_pass']="Invalid Password !";
		echo "<script>window.location.href = 'login2.php';</script>";
	}

}
else
{
	// echo "<script>setTimeout(function(){window.history.back();},2000);</script><h4 style='z-index:99; background-color:#FF3366;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Invalid Username !</h4>";
	$_SESSION['err_msg_usr']="Invalid Username !";
	echo "<script>window.location.href = 'login2.php';</script>";
}	


?>