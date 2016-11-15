<?php
include('../functions/function.php');
include('check_login.php');
if($_SESSION['language']=='English')
{
	$getto='';
	foreach($_GET as $key=>$val)
	{
		$getto.=$key.'='.$val.'&';
	}
	echo "<script>location.href='edit_profile.php?$getto'</script>";
}
$member_id=$_SESSION['member_id'];

$que_mem="SELECT * FROM members WHERE member_id='$member_id' ";
$obj_mem= mysqli_query($conn,$que_mem);
$data_mem= mysqli_fetch_assoc($obj_mem);

$que_state="SELECT * FROM state ";
$obj_state= mysqli_query($conn,$que_state);


// print_r($total_prop);die;
?>


<!DOCTYPE HTML> 
<html lang="en">
  <head>		
		<title>Pashutlehaskir.com</title>
		<link rel="shortcut icon" href="" />
		<meta charset="utf-8">
		<html dir="rtl" lang="he">
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
	<style>
		span{
			text-align: right;
		}
		label{
			text-align: right;
		}
	</style>


<body  class="guest" >
	
	<?php
		include('header_h.php');
	?>

    <!-- Carousel
    ================================================== -->
<div class="container">
	<div class="container locations">
		<div class="row">
			<div class="col-md-1"></div>
			<form action="update_profile.php" method="POST" id="register">
				<div class="col-md-10">
					<div class="row" align="center">
						<h2>עדכן פרופיל</h2>
					</div>
					<div class="row">
						<div class="col-md-4"><input type="text" class="input validate[required] form-control" name="last_name" value="<?php echo $data_mem['last_name'];?>"></div>				
						<label class="col-md-2">שם משפחה</label>
						<div class="col-md-4"><input type="text" class="input validate[required] form-control" name="first_name" value="<?php echo $data_mem['first_name'];?>"></div>
						<label class="col-md-2">שם פרטי</label>
					</div>
					<br>
					<div class="row">
						<div class="col-md-4">
							<div class="col-md-4"><input type="text" class="input validate[required] form-control" name="mem_phone_c" value="<?php echo $data_mem['mem_phone_c'];?>" maxlength="4"></div>
							<div class="col-md-4"><input type="text" class="input validate[required] form-control" name="mem_phone_b" value="<?php echo $data_mem['mem_phone_b'];?>" maxlength="3"></div>
							<div class="col-md-4"><input type="text" class="input validate[required] form-control" name="mem_phone_a" value="<?php echo $data_mem['mem_phone_a'];?>" maxlength="3" ></div>
						</div>
						<label class="col-md-2">מס לתקשר</label>
						<div class="col-md-4"><input type="text" class="input validate[required] form-control" name="email" value="<?php echo $data_mem['email'];?>"></div>
						<label class="col-md-2">אֶלֶקטרוֹנִי</label>
					</div>
					<br>
					<div class="row">
						<div class="col-md-4"><input type="text" class="input validate[required] form-control" name="mem_street_address" value="<?php echo $data_mem['mem_street_address'];?>"></div>
						<label class="col-md-2">שם רחוב</label>
						<div class="col-md-4"><input type="text" class="input validate[required] form-control" name="mem_street_number" value="<?php echo $data_mem['mem_street_number'];?>"></div>
						<label class="col-md-2">מספר רחוב</label>
					</div>
					<br>
					<div class="row">
						<div class="col-md-4">
							<select class="input validate[required] form-control" name="mem_state">
								<?php
								while($data_state=mysqli_fetch_assoc($obj_state))
								{ ?>
									<option <?php if($data_state['state_name']==$data_mem['mem_state']) { echo 'selected'; } ?> ><?php echo $data_state['state_name_he'];?></option>
								<?php }
								?>
							</select>
						</div>
						<label class="col-md-2">מדינה</label>
						<div class="col-md-4"><input type="text" class="input validate[required] form-control" name="mem_city" value="<?php echo $data_mem['mem_city'];?>"></div>
						<label class="col-md-2">עִיר</label>
					</div>
					<br>
					<div class="row">
						<div class="col-md-4">
							<select class="input validate[required] form-control" name="ll_type">	
								<option <?php if($data_mem['ll_type']=='Individual') { echo "selected"; } ?> value="Individual">אִישִׁי</option>
								<option <?php if($data_mem['ll_type']=='Property Management') { echo "selected"; } ?> value="Property Management">ניהול נכסים</option>	
								<option <?php if($data_mem['ll_type']=='Complex') { echo "selected"; } ?> value="Complex">מורכב</option>
								<option <?php if($data_mem['ll_type']=='Roommate') { echo "selected"; } ?> value="Roommate">שותף לחדר</option>						
								<option <?php if($data_mem['ll_type']=='Other') { echo "selected"; } ?> value="Other">אַחֵר</option>								
								<option <?php if($data_mem['ll_type']=='Agent') { echo "selected"; } ?> value="Agent">סוֹכֵן</option>	
							</select>
						</div>
						<label class="col-md-2">סוג החשבון</label>
						<div class="col-md-4"><input type="text" class="input validate[required] form-control" name="mem_zipcode" value="<?php echo $data_mem['mem_zipcode'];?>"></div>
						<label class="col-md-2">מיקוד</label>
					</div>
					<br>
					<div class="row">
						<div class="col-md-4"></div>
						<label class="col-md-2"></label>
						<div class="col-md-4"><input type="text" class="input validate[required] form-control" name="username" value="<?php echo $data_mem['username'];?>"></div>
						<label class="col-md-2">שם משתמש</label>
					</div>
					<br>
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-2">
							<input type="checkbox" name="accept_credit_check" value="1" 
							<?php if($data_mem['accept_credit_check']==1) { echo 'checked'; } ?> >
						</div>
						<label class="col-md-8">מעוניין לקבל הודעות דוא"ל וחדשות על PL ?</label>
					</div>
					<br>
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-2">
							<input type="checkbox"  name="accept_pm_brokerage" value="1"
							<?php if($data_mem['accept_pm_brokerage']==1) { echo 'checked'; }  ?> >
						</div>
						<label class="col-md-8">מעוניין לקבל מידע נוסף אודות שירותי ליסינג & איך Pashutle haskir יכול לשכור מקום</label>
					</div>
					<br>
					<div class="row" align="center">
						<input type="submit" class="btn btn-danger" value="עדכון">
					</div>
				</div>
				<br>
			</form>

			<div class="col-md-1"></div>
		</div>

		<br>&nbsp;
		
		







	</div>
</div> <!-- End main container div -->
	
	
	<!-- FOOTER -->
<?php
	include("footer_h.php");
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