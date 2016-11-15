<?php
include_once('config.php');

function insert($table,$value,$primarykey=NULL,$colname=NULL)
{
	global $conn;
	$query="INSERT INTO $table(";
    if(is_array($value))
    {
     	foreach ($value as $key => $val) 
		{
			{
				$keys[]=str_replace('"','',(str_replace("'","",$key)));
			}
		}
		$query.=implode(',',$keys);
    }
	$query.=") VALUES(";
	foreach($value as $key => $val) {
	if(is_array($val))
	{
		$vals[]="'".implode(',',$val)."'";
	}
	else
	{
		$vals[]="'".str_replace('"','',(str_replace("'","",$val)))."'";
	}
	}
	$query.=implode(',',$vals).")";      					
	//echo $query;die;    //Query check
	$result=mysqli_query($conn,$query);
	if(mysqli_affected_rows($conn))
	{
		if($primarykey )
		{	
			if(!$colname)
			{
				$colname=$primarykey;
			}	
			$last_id=last_id($table,$primarykey,$colname);
			return $last_id;
		}
		else
		{
			return true;
		}	
	}
	else
	{
		return false;
	}	
}

function last_id($table,$primarykey,$colname)
{
	global $conn;
	$query="SELECT $colname FROM $table ORDER BY $primarykey DESC";
	$result=mysqli_query($conn,$query);
	return mysqli_fetch_assoc($result)[$colname];
}

function isExist($table,$value)
{
	global $conn;
	$query="SELECT * FROM $table WHERE ";
    if(is_array($value))
    {
     	foreach ($value as $key => $val) 
		{
     		
     	     	$WHERE[]=$key." = '".$val."'";
     	}
		$query.=implode(' ',$WHERE);     
		//echo $query; die;
    }
	$result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result))
	{
		return true;
	}	
    else
	{
		return false;
	}
}    

function update($table,$value,$WHERE)
{
	global $conn;
	$query="UPDATE $table SET ";
	foreach($value as $key => $val) 
	{
		$up[]=$key."='".str_replace('"','',(str_replace("'","",$val)))."'";
	}
	$query.=implode(', ',$up)." WHERE ";
	foreach($WHERE as $key=>$val)
	{
		$wh[]=$key."='".str_replace('"','',(str_replace("'","",$val)))."'";
	}
	$query.=implode(' ',$wh);
    $result=mysqli_query($conn,$query);
    if(mysqli_affected_rows($conn))
    {
		return true;
	}
	else
	{
		return false;
	}	
}
function delet($table,$WHERE)
{
	global $conn;
	$query="DELETE FROM $table WHERE";
	foreach($WHERE as $key=>$val)
	{
		$wh[]=$key."='".$val."'";
	}
	$query.=implode(' ',$wh);
    $result=mysqli_query($conn,$query);
    if(mysqli_affected_rows($conn))
    {
		return true;
	}
	else
	{
		return false;
	}	
}
function select($table,$WHERE)
{
	global $conn;
	$query="SELECT * FROM $table WHERE ";
	foreach($WHERE as $key=>$val)
	{
		$wh[]=$key."='".$val."'";
	}
	$query.=implode(' ',$wh);
    //echo $query; die;
	$result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result))
    {
		while($row=mysqli_fetch_assoc($result))
		{
			$rows[]=$row;
		}	
		return $rows;
	}
	else
	{
		return false;
	}	
}

function Send_SMS($mobileNumber,$message,$route='1')
{
	global $smskey;
	global $senderName;
	$serverUrl='msg.msgclub.net';
	$senderId=$senderName;
	$routeId=$route;
	$authKey=$smskey;
	$postData = array(
						'mobileNumbers' => $mobileNumber,        
						'smsContent' => $message,
						'senderId' => $senderId,
						'routeId' => $routeId,		
						"smsContentType" =>'Unicode'
					);
	$data_json = json_encode($postData);
	$url="http://msg.msgclub.net/rest/services/sendSMS/sendGroupSms?AUTH_KEY=".$authKey;
	$ch = curl_init();
	curl_setopt_array($ch, array(
									CURLOPT_URL => $url,
									CURLOPT_HTTPHEADER => array('Content-Type: application/json','Content-Length: ' . strlen($data_json)),
									CURLOPT_RETURNTRANSFER => true,
									CURLOPT_POST => true,
									CURLOPT_POSTFIELDS => $data_json,
									CURLOPT_SSL_VERIFYHOST => 0,
									CURLOPT_SSL_VERIFYPEER => 0
								)
					);
	$output = curl_exec($ch);
	if(curl_errno($ch))
	{
		echo 'error:' . curl_error($ch);
	}
	curl_close($ch);
	return $output;
}

?>

