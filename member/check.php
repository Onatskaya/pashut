<?php
include('../functions/function.php');
include('check_login.php');
$member_id= $_SESSION['member_id'];
$today_date= date('Y-m-d');


$que_s="SELECT * FROM members m
		INNER JOIN plan_tbl p on m.member_id = p.member_id
		WHERE m.member_id='$member_id' AND m.order_id= p.order_id AND member_status='Enable' ";
// print_r($que_s);die;
$obj_s=mysqli_query($conn,$que_s);
$data_s= mysqli_fetch_assoc($obj_s);
if($data_s['end_date'] < $today_date)
{
	$que_pt="UPDATE paln_tbl SET plan_status='Disable' WHERE order_id='".$data_s['order_id']."'' ";
	$obj_pt= mysqli_query($conn,$que_pt);
	$que_mm="UPDATE members SET member_status='Disable' WHERE order_id='".$data_s['order_id']."' ";
	$obj_mm= mysqli_query($conn,$que_mm);
}

$que_pc="SELECT * FROM members WHERE member_id='$member_id' AND member_status='Enable' ";
// print_r($que_pc);die;
$obj_pc= mysqli_query($conn,$que_pc);
$data_pc=mysqli_fetch_assoc($obj_pc);
if(mysqli_num_rows($obj_pc))
{
	echo '<script>window.location.href = "view_property.php";</script>';
}
//else
//{
//	echo "<script>setTimeout(function(){window.location.href='update_plan.php'},2000);</script><h4 style='z-index:99; background-color:#FF3366;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Membership is Expire , Upgrade your plan</h4>";
//}

// print_r($que_s);die;



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
		<div class="col-md-5" align="center"></div>
		<div class="col-md-12" align="center">
		
		
		








		</div>
	</div>
</div> <!-- End main container div -->
	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
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
	

