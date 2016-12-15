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

function check_member_plan( $conn ){

	if( empty($_SESSION['member_id']) || empty( $_SESSION['member_logged'] ) )
		return;

	$today_date= date('Y-m-d');
	$member_id = $_SESSION['member_id'];

	$que_s="SELECT * FROM members m
		INNER JOIN plan_tbl p on m.member_id = p.member_id
		WHERE m.member_id='$member_id' AND m.order_id= p.order_id ";

	$obj_s=mysqli_query($conn,$que_s);
	$data_s= mysqli_fetch_assoc($obj_s);
	if($data_s['end_date'] < $today_date){

		if( $data_s['member_status'] == 'Enable' ){
			$que_pt="UPDATE plan_tbl SET plan_status='Disable' WHERE order_id='".$data_s['order_id']."' ";
			$obj_pt= mysqli_query($conn,$que_pt);
			$que_mm="UPDATE members SET member_status='Disable' WHERE order_id='".$data_s['order_id']."' ";
			$obj_mm= mysqli_query($conn,$que_mm);
		}
	}

	if( $data_s['end_date'] < $today_date || $data_s['member_status'] == 'Disable' ){

?>
		<div class="modal fade" id="expirateModal" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">You Membership plan is Expire!</h4>
					</div>
					<div class="modal-body">
						<p>Thank you for using PashutLehaskir.com. Your membership has expired. Please upgrade your account to continue searching forproperties.</p>
                        <a href="<?php echo site_url(); ?>/join.php" class="btn btn-danger upgrade" >Upgrade</a>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal" id="no" >Close</button>
					</div>
				</div>
			</div>
		</div>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#expirateModal').modal('show');

                $("#expirateModal").on("hidden.bs.modal", function () {
                    window.location.href = '<?php echo site_url(); ?>/join.php';
                });
            });
        </script>
	<?php
	}
}

function site_url(){
    if(isset($_SERVER['HTTPS'])){
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    }
    else{
        $protocol = 'http';
    }
    return $protocol . "://" . $_SERVER['SERVER_NAME'];
}


function get_time_array(){
    $minutes = 30;
    $endtime = new DateTime('23:30');

//modified the start value to get something _before_ the endtime:
    $time = new DateTime('00:00');
    $interval = new DateInterval('PT' . $minutes . 'M');

    $time_array = array();
    while($time < $endtime){
        $time->add($interval);
//        $time_array[] = $time->format('G:ia');
        $time_array[] = $time->format('H:i');
    }

    return $time_array;
}

function get_viewing_time($property_id){
    global $conn;

    $que_s="SELECT * FROM `viewing_time_tbl` AS `time`
      WHERE time.property_id='$property_id'";

    $result=mysqli_query($conn,$que_s);

    if(mysqli_num_rows($result))
    {
        $rows = array();
        while($row=mysqli_fetch_assoc($result))
        {

            if(is_string($row['viewing_time'])){
                $event_obj = unserialize(base64_decode($row['viewing_time']));
                if(is_string($event_obj)){
                    $event_obj = json_decode($event_obj, true);

                    if(is_array($event_obj)){
                        foreach($event_obj as $event){
                            if( ! empty($event) && is_array($event) ) {
                                $event['title'] = sprintf('%s - %s', date('g:ia', strtotime($event['start'])), date('g:ia', strtotime($event['end'])) );
                                $event['id']    = $row['id'];
                                $rows[] = $event;
                            }
                        }
                        continue;
                    }
                }

            }else{
                $event_obj = $row['viewing_time'];
            }

            if( ! empty($event_obj) && is_array($event_obj) ) {
                $event_obj['title'] = sprintf('%s - %s', date('g:ia', strtotime($event_obj['start'])), date('g:ia', strtotime($event_obj['end'])) );
                $event_obj['id']    = $row['id'];
                $rows[] = $event_obj;
            }
        }

        return json_encode($rows);
    }

    return false;
}

/**
 * Function return pagination,
 */

 function get_pagination( $current_page, $per_page, $total_rows ){
   if (isset($_GET['page'])) $page=($_GET['page']-1); else $page=0;
   $start=abs($page*$per_page);

   $num_pages=ceil($total_rows/$per_page);

   if($num_pages < 2)
     return;

    ob_start();
  ?>

   <div class="pagination pagination-top">
     <ul>
       <?php $i=1; ?>
       <?php while( $i <= $num_pages): ?>
         <?php $QS = http_build_query(array_merge($_GET, array("page"=>$i))); ?>
         <li>
           <?php $class = ($current_page == $i-1) ? 'currentpage' : 'prevnext'; ?>
           <a class="<?php echo $class; ?>" data-pageid="<?php echo $i; ?>" href="<?php echo htmlspecialchars("$_SERVER[PHP_SELF]?$QS"); ?>"><?php echo $i; ?></a>
         </li>
         <?php $i++; ?>
       <?php endwhile; ?>
     </ul>
   </div>
  <?php

   $pagination = ob_get_clean();

   return $pagination;
 }