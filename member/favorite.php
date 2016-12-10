<?php
include_once('../functions/function.php');
if($_SESSION['language']=='Hebrew')
{
	$getto='';
	foreach($_GET as $key=>$val)
	{
		$getto.=$key.'='.$val.'&';
	}
	echo "<script>location.href='favorite_h.php?$getto'</script>";
}
$member_id= $_SESSION['member_id'];
$que_s="SELECT * FROM favorite_tbl WHERE member_id='$member_id' AND status='Favorite' ";
$obj_s= mysqli_query($conn,$que_s);
if(mysqli_num_rows($obj_s))
{
	while($data_s3=mysqli_fetch_assoc($obj_s))
	{
		$data_s2[]=$data_s3;
	}
}

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
		<div class="col-md-12" align="center">
			<h2>Favorites</h2>
			<div class="row">
				<table id="myTable" class="table table-striped dataTable table-bordered">                       
				    <thead>
				        <tr>
			                <th class="col-md-1">S.No.</th>
			               <th class="col-md-2">Name</th>
			               <th class="col-md-2">Email</th>
			               <th class="col-md-2">City / Area</th>
			               <th class="col-md-2">Structure Type</th>
			               <th class="col-md-2">Meters</th>
			               <th class="col-md-1">Bedroom</th>
			               <th class="col-md-1">Bathroom</th>
			               <th class="col-md-1">Furnished</th>
			               <th class="col-md-1">Image</th>
			               <th class="col-md-1">Action</th>
				        </tr>
				    </thead>
				    <tbody>
				    	<?php
				    	if(isset($data_s2))
				    	{

				    		$n=1;
				    		foreach($data_s2 as $data_s)
				    		{ 
				    			$post_id=$data_s['property_id'];
				    			$que_fv="SELECT * FROM post WHERE post_id='$post_id' ";
				    			$obj_fv=mysqli_query($conn,$que_fv);
				    			$data_fv=mysqli_fetch_assoc($obj_fv);
				    		 ?>
						        <tr>
						             <td><?php echo $n; ?></td>
						            <td><?php echo $data_fv['name'];?></td>
						            <td><?php echo $data_fv['email'];?></td>
						            <td><?php $WHERE_CITY['city_id']=$data_fv['city']; echo select('city',$WHERE_CITY)[0]['city_name'];?></td>
						            <td><?php $WHERE_STRUCT['struct_id']=$data_fv['structure_type']; echo select('structure_type',$WHERE_STRUCT)[0]['name_en'];?></td>
						            <td><?php echo $data_fv['square_footage'];?> Meters</td>
						            <td><?php $WHERE_BEDROOM['id']=$data_fv['bedroom']; echo select('bedroom_tbl',$WHERE_BEDROOM)[0]['bedroom'];?></td>
						            <td><?php $WHERE_BATH['id']=$data_fv['bathroom']; echo select('bath_tbl',$WHERE_BATH)[0]['bath'];?></td>
						            <td><?php $WHERE_FUR['id']=$data_fv['furnished']; echo select('furnished',$WHERE_FUR)[0]['furnished'];?></td>
						            <td><img src="../home_images/<?php echo $data_fv['main_image'];?>" height="60" width="60"></td>
						        	<td><a href="view_detail.php?pid=<?php echo $data_fv['post_id'];?>" class="btn btn-danger">View Detail</a> </td>
						         </tr>
						        	
				    		<?php 
				    		$n++; 
				    		}
				    	}
				    	?>
				    </tbody>
				</table>
			</div>	
		








		</div>
	</div>
</div> <!-- End main container div -->
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
	

<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">

<script type="text/javascript">
 jQuery( document ).ready(function( $ ) {
    $('#myTable').dataTable({ "bSort": false});
});
</script>
<?php
    if(isset($_SESSION['member_logged'])) {
        include 'member_init.php';
    }
?>
</body>
</html>