<?php
include('../functions/function.php');
include('check_login.php');
include('check_plan.php');

$que_member="SELECT * FROM members m
INNER JOIN plan_tbl p on m.member_id = p.member_id
WHERE m.member_type='member' AND p.status='Paid' ORDER BY m.member_id DESC ";
// print_r($que_member);die;
$obj_member= mysqli_query($conn,$que_member);

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
		<!-- <h3 style="background-color:#3D4D65;color:#fff;text-align:center;">Registered Members</h3> -->
		<center><h2>Members</h2></center>
			<div class="row">
				<table id="myTable" class="table table-striped dataTable table-bordered">                       
				    <thead>
				        <tr>
			               <th class="col-md-1">S.No.</th>
			               <th class="col-md-2">Name</th>
			               <th class="col-md-2">Username</th>
			               <th class="col-md-2">Contact No.</th>
			               <th class="col-md-2">Membership</th>
			               <th class="col-md-1">Action</th>
				        </tr>
				    </thead>
				    <tbody>
				    	<?php
				    	$n=1;
				    		while($data_member=mysqli_fetch_assoc($obj_member))
				    		{  ?>
						        <tr>
						            <td><?php echo $n; ?></td>
						            <td><?php echo $data_member['first_name'];?>&nbsp;<?php echo $data_member['last_name'];?></td>
						            <td><?php echo $data_member['username'];?></td>
						            <td><?php echo $data_member['mem_phone_a'];?>-<?php echo $data_member['mem_phone_b'];?>-<?php echo $data_member['mem_phone_c'];?></td>
						            <td><?php  check_plan($data_member['membership_plan']); ?></td>
						        	<td>
										<a href="view_member_detail.php?lid=<?php echo $data_member['member_id'];?>" class="glyphicon glyphicon-eye-open"></a>
										<a href="delete_member.php?lid=<?php echo $data_member['member_id'];?>" data-href="delete_member.php?pid=<?php echo $data_member['member_id'];?>" class="glyphicon glyphicon-trash js-property-remove"></a>
									</td>
						        </tr>
						        	
				    		<?php 
				    		$n++; 
				    		}
				    		?>
				    </tbody>
				</table>
			</div>	
		
		








	</div>
</div> <!-- End main container div -->
	
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
	


<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">

<script type="text/javascript">
 jQuery( document ).ready(function( $ ) {
    $('#myTable').dataTable({ "bSort": false});
});
</script>