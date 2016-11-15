<?php
include('../functions/function.php');
include('check_login.php');
include('check_plan.php');
if($_SESSION['language']=='Hebrew')
{
	$getto='';
	foreach($_GET as $key=>$val)
	{
		$getto.=$key.'='.$val.'&';
	}
	echo "<script>location.href='edit_member_detail_h.php?$getto'</script>";
}
$member_id= $_SESSION['member_id'];

$que_mem="SELECT * FROM members WHERE member_id='$member_id' ";
$obj_mem= mysqli_query($conn,$que_mem);
$data_mem= mysqli_fetch_assoc($obj_mem);

// print_r($total_prop);die;
?>


<!DOCTYPE HTML> 
<html lang="en">
  <head>		
		<title>Pashutlehaskir.com</title>
		<link rel="shortcut icon" href="" />
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">				
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">
		<meta http-equiv="expires" content="0" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8" />				
		<meta name="apple-itunes-app" content="app-id=509021914">									
		<!-- Latest compiled and minified CSS -->
		<link href="../css/201603/ui-lightness/jquery-ui-1.10.4.css" rel="stylesheet">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<!-- Custom styles for this template -->
		<link href="../css/201603/global.css" rel="stylesheet">
		<link href="../css/201603/section.css" rel="stylesheet">
		<link href="../css/201603/carousel.css" rel="stylesheet">
	
		<meta name="keywords" content="pashutlehaskir.com | Rent SoCal Houses, Apartments & More, Los Angeles rentals, Santa Monica House, South Bay Rentals, Los Angeles Apartments, Orange County Rentals, San Diego Apartments, Hermosa Beach Apartments, Hollywood For Rent, Burbank Apartments, Glendale Homes, Studio City Rentals, Apartments for Rent, Houses for Rent, Condos for Rent, Apartments in Los Angeles, Apartments in LA, USC, University of Southern California, Cal State, California State University, UCLA, University of California, University of California Los Angeles, Loyola Marymount University, Pepperdine, Pepperdine University, USC Student Housing, USC Housing, USC Apartments, Cal State Housing, Cal State Student Housing, Cal State Apartments, UCLA Housing, UCLA Student Housing, UCLA Apartments, LMU Housing, LMU Student Housing, LMU Apartments, Pepperdine Housing, Pepperdine Student Housing, Pepperdine Apartments" />
		<meta name="description" content="pashutlehaskir.com is the #1 home finding service in the Los Angeles area. Search SoCal apartment rentals, houses, condos & roommates!" />
		<meta name="robots" content="index,follow" />
		<meta name="GOOGLEBOT" content="index,follow" />		
		<meta name="google-translate-customization" content="954d153704cc37f5-fac58c9bb4d3c842-g115d03cfb1ac5d23-17"></meta>		       
</head>


<body  class="guest" >
	
	<?php
		include('header.php');
	?>

    <!-- Carousel
    ================================================== -->
<div class="container">
	<div class="container locations">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
			<form action="update_member.php" method="post" id="register">
				<div class="row" align="center">
					<h2>Update Profile</h2>
				</div>
				<div class="row">
					<label class="col-md-2">First Name</label>
					<div class="col-md-4"><input type="text" name="first_name" class="input validate[required] form-control" value="<?php echo $data_mem['first_name'];?>"></div>
					<label class="col-md-2">Last Name</label>
					<div class="col-md-4"><input type="text" name="last_name" class="input validate[required] form-control" value="<?php echo $data_mem['last_name'];?>"></div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Email</label>
					<div class="col-md-4"><input type="text" name="email" class="input validate[required,custom[email]] form-control" value="<?php echo $data_mem['email'];?>"></div>
					<label class="col-md-2">Contact No.</label>
					<div class="col-md-1"><input type="text" name="mem_phone_a" class=" form-control" value="<?php echo $data_mem['mem_phone_a'];?>" maxlength="3"></div>
					<div class="col-md-1"><input type="text" name="mem_phone_b" class=" form-control" value="<?php echo $data_mem['mem_phone_b'];?>" maxlength="3"></div>
					<div class="col-md-2"><input type="text" name="mem_phone_c" class=" form-control" value="<?php echo $data_mem['mem_phone_c'];?>" maxlength="4"></div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Zipcode</label>
					<div class="col-md-4"><input type="text" name="mem_zipcode" class="input validate[required] form-control" value="<?php echo $data_mem['mem_zipcode'];?>"></div>
					<label class="col-md-2">Credit Card Number</label>
					<div class="col-md-4"><input type="text" name="credit_card_no" class="input validate[required] form-control" value="<?php echo $data_mem['credit_card_no'];?>" maxlength="16"></div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Card Expiration Date</label>
					<div class="col-md-2">
						<select name="credit_card_exp_mo" class="form-control">
							<option <?php if($data_mem['credit_card_exp_mo']==01){ echo 'selected'; } ?> value="01">January</option>
							<option <?php if($data_mem['credit_card_exp_mo']==02){ echo 'selected'; } ?> value="02">February</option>
							<option <?php if($data_mem['credit_card_exp_mo']==03){ echo 'selected'; } ?> value="03">March</option>
							<option <?php if($data_mem['credit_card_exp_mo']==04){ echo 'selected'; } ?> value="04">April</option>
							<option <?php if($data_mem['credit_card_exp_mo']==05){ echo 'selected'; } ?> value="05">May</option>
							<option <?php if($data_mem['credit_card_exp_mo']==06){ echo 'selected'; } ?> value="06">June</option>
							<option <?php if($data_mem['credit_card_exp_mo']==07){ echo 'selected'; } ?> value="07">July</option>
							<option <?php if($data_mem['credit_card_exp_mo']==08){ echo 'selected'; } ?> value="08">August</option>
							<option <?php if($data_mem['credit_card_exp_mo']==09){ echo 'selected'; } ?> value="09">September</option>
							<option <?php if($data_mem['credit_card_exp_mo']==10){ echo 'selected'; } ?> value="10">October</option>
							<option <?php if($data_mem['credit_card_exp_mo']==11){ echo 'selected'; } ?> value="11">November</option>
							<option <?php if($data_mem['credit_card_exp_mo']==12){ echo 'selected'; } ?> value="12">December</option>
						</select>
					</div>
					<div class="col-md-2">
						<select name="credit_card_exp_yr" class="form-control">
							<?php
							for($i=2016;$i<=2050;$i++)
							{ ?>
								<option <?php if($data_mem['credit_card_exp_yr']==$i){ echo 'selected'; } ?> ><?php echo $i; ?></option>
						<?php	}
							?>
						</select>
					</div>
					
					<label class="col-md-2">CVV</label>
					<div class="col-md-4"><input type="text" name="credit_card_cvs" class="input validate[required] form-control" value="<?php echo $data_mem['credit_card_cvs'];?>"></div>
				</div>
				<br>
				<!-- <div class="row">
					<label class="col-md-2">Membership Start Date</label>
					<div class="col-md-4"><input type="text" class="input validate[required] form-control" value=""></div>
					<label class="col-md-2">Membership Expiry Date</label>
					<div class="col-md-4"><input type="text" class="input validate[required] form-control" value=""></div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Account Type</label>
					<div class="col-md-4"><input type="text" class="input validate[required] form-control" value="<?php check_plan($data_mem['membership_plan']);?>"></div>
				</div>
				<br>&nbsp; -->
				<?php
				if($data_mem['member2_firstname'] != '')
				{ ?>
					<div class="row"><h4 style="color:#3D4D65">Second Person Detail :</h4></div>
					<div class="row">
						<label class="col-md-2">First Name</label>
						<div class="col-md-4"><input type="text" name="member2_firstname" class="input validate[required] form-control" value="<?php echo $data_mem['member2_firstname'];?>"></div>
						<label class="col-md-2">Last Name</label>
						<div class="col-md-4"><input type="text" name="member2_lastname" class="input validate[required] form-control" value="<?php echo $data_mem['member2_lastname'];?>"></div>
					</div>
					<br>
					<div class="row">
						<label class="col-md-2">Email</label>
						<div class="col-md-4"><input type="text" name="member2_email" class="form-control" value="<?php echo $data_mem['member2_email'];?>"></div>

						<label class="col-md-2">Contact No.</label>
						<div class="col-md-1"><input type="text" class="form-control" name="member2_phone_a" value="<?php echo $data_mem['member2_phone_a'];?>" maxlength="3"></div>
						<div class="col-md-1"><input type="text" class="form-control" name="member2_phone_b" value="<?php echo $data_mem['member2_phone_b'];?>" maxlength="3"></div>
						<div class="col-md-2"><input type="text" class="form-control" name="member2_phone_c" value="<?php echo $data_mem['member2_phone_c'];?>" maxlength="4"></div>
					</div>
					<br>
				<?php }
				?>

				<?php
				if($data_mem['sender_first_name'] != '')
				{ ?>
					<div class="row"><h4 style="color:#3D4D65">Sender Person Detail :</h4></div>
					<div class="row">
						<label class="col-md-2">First Name</label>
						<div class="col-md-4"><input type="text" class="input validate[required] form-control" name="sender_first_name" value="<?php echo $data_mem['sender_first_name'];?>"></div>
						<label class="col-md-2">Last Name</label>
						<div class="col-md-4"><input type="text" class="input validate[required] form-control" name="sender_last_name" value="<?php echo $data_mem['sender_last_name'];?>"></div>
					</div>
					<br>
					<div class="row">
						<label class="col-md-2">Email</label>
						<div class="col-md-4"><input type="text" class="input validate[required] form-control" name="sender_email" value="<?php echo $data_mem['sender_email'];?>"></div>

						<label class="col-md-2">Contact No.</label>
						<div class="col-md-1"><input type="text" class="form-control" name="sender_phone_a" value="<?php echo $data_mem['sender_phone_a'];?>"></div>
						<div class="col-md-1"><input type="text" class="form-control" name="sender_phone_b" value="<?php echo $data_mem['sender_phone_b'];?>"></div>
						<div class="col-md-2"><input type="text" class="form-control" name="sender_phone_c" value="<?php echo $data_mem['sender_phone_c'];?>"></div>
					</div>
					<br>
				<?php }
				?>
				<div class="row">
					<center><input type="submit" class="btn btn-danger" value="Update"></center>
				</div>
			</div>
			</form>
				
			<div class="col-md-1"></div>
		</div>

		<br>&nbsp;
		
		







	</div>
</div> <!-- End main container div -->
	
	
	<!-- FOOTER -->
<?php
	include("footer.php");
?>
		 
	
	
	<!-- Bootstrap core JavaScript
	
	<!-- Placed at the end of the document so the pages load faster -->
	
	
		
		
	
	
	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	
<script src="../js/jquery.min.js"></script>
<script src="../js/new/jquery-ui-1.10.4/jquery-ui-1.10.4.js"></script>
<script src="../js/new/jquery.cycle.all.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="../js/bootstrap.min.js"></script>		
<script src="../js/fb_login.js"></script>	
<script src="../js/navigation/menu.js" type="text/javascript" language="javascript"></script>	
<script src="../js/default.js" type="text/javascript" language="javascript"></script>	
<script src="../js/ddaaccordion.js" type="text/javascript" language="javascript"></script>
<!-- Default JavaScript -->
<script src="../js/new/default.js"></script>
	


<link rel="stylesheet" href="../css/validationEngine.jquery.css">
<script src="../js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="../js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
	$(document).ready(function(){
		// alert('hi');
		$("#register").validationEngine();
	});
	function checkHELLO(field, rules, i, options){
			if (field.val() != "HELLO") {
			return options.allrules.validate2fields.alertText;
			}
	}
	$(function() {
		$('.numberonly').keyup(function() {
			if (this.value.match(/[^0-9]/g)) {
				this.value = this.value.replace(/[^0-9]/g, '');
			}
		});
	});
</script>