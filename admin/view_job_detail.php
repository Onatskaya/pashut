<?php
include('../functions/function.php');
include('check_login.php');

$jid= $_GET['jid'];

$que_jb="SELECT * FROM jobs WHERE job_id='$jid' ";
$obj_jb= mysqli_query($conn,$que_jb);
$data_jb= mysqli_fetch_assoc($obj_jb);

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
				<div class="row" align="center">
					<h2>Person Detail</h2>
				</div>
				<div class="row">
					<label class="col-md-2">Name</label>
					<div class="col-md-4"><span class="form-control"><?php echo $data_jb['first_name'];?>&nbsp;<?php echo $data_jb['last_name'];?></span></div>
					<label class="col-md-2">Email</label>
					<div class="col-md-4"><span class="form-control"><?php echo $data_jb['Email'];?></span></div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Telephone</label>
					<div class="col-md-4"><span class="form-control"><?php echo $data_jb['telephone'];?>&nbsp;<?php echo $data_jb['last_name'];?></span></div>
					<label class="col-md-2">Street Address</label>
					<div class="col-md-4"><span class="form-control"><?php echo $data_jb['street_address'];?></span></div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">City</label>
					<div class="col-md-4"><span class="form-control"><?php echo $data_jb['city'];?></span></div>
					<label class="col-md-2">State</label>
					<div class="col-md-4"><span class="form-control"><?php echo $data_jb['state'];?></span></div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Zipcode</label>
					<div class="col-md-4"><span class="form-control"><?php echo $data_jb['zip_code'];?></span></div>
					<label class="col-md-2">Referred Office Location</label>
					<div class="col-md-4"><span class="form-control"><?php echo $data_jb['office_location'];?></span></div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Degree/Level Attained</label>
					<div class="col-md-4"><span class="form-control"><?php echo $data_jb['degree'];?></span></div>
					<label class="col-md-2">Resume</label>
					<div class="col-md-4"><span><a target="_blank" href="../uploads/resumes/<?php echo $data_jb['resume'];?>"><img src="../uploads/resumes/resume.jpg" height="90" width="80"></a></span></div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Start Work From</label>
					<div class="col-md-4"><span class="form-control"><?php echo $data_jb['start_day'];?>/<?php echo $data_jb['start_month'];?>/<?php echo $data_jb['start_year'];?></span></div>
				</div>
				<br>&nbsp;
				<div class="row">
					<h4>Days and hours available for work:</h4>
				</div>
				<div class="row">
					<table class="table table-bordered table-condensed">
						<tr>
							<td><b>Days</b></td>
							<td><b>Timing From</b></td>
							<td><b>Timing To</b></td>
						</tr>
						<tr>
							<td>Monday</td>
							<td><?php echo $data_jb['mon_from'];?></td>
							<td><?php echo $data_jb['mon_to'];?></td>
						</tr>
						<tr>
							<td>Tuesday</td>
							<td><?php echo $data_jb['tue_from'];?></td>
							<td><?php echo $data_jb['tue_to'];?></td>
						</tr>
						<tr>
							<td>Wednesday</td>
							<td><?php echo $data_jb['wed_to'];?></td>
							<td><?php echo $data_jb['wed_to'];?></td>
						</tr>
						<tr>
							<td>Thursday</td>
							<td><?php echo $data_jb['thu_from'];?></td>
							<td><?php echo $data_jb['thu_to'];?></td>
						</tr>
						<tr>
							<td>Friday</td>
							<td><?php echo $data_jb['fri_from'];?></td>
							<td><?php echo $data_jb['fri_to'];?></td>
						</tr>
						<tr>
							<td>Saturday</td>
							<td><?php echo $data_jb['sat_from'];?></td>
							<td><?php echo $data_jb['sat_to'];?></td>
						</tr>
						<tr>
							<td>Sunday</td>
							<td><?php echo $data_jb['sun_from'];?></td>
							<td><?php echo $data_jb['sun_to'];?></td>
						</tr>
					</table>
				</div>
				<br>
				

				
			</div>
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
	

