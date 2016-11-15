<?php
include('../functions/function.php');
include('check_login.php');
include('../check_price.php');
include('check_plan.php');
if($_SESSION['language']=='Hebrew')
{
	$getto='';
	foreach($_GET as $key=>$val)
	{
		$getto.=$key.'='.$val.'&';
	}
	echo "<script>location.href='update_plan_h.php?$getto'</script>";
}
$member_id= $_SESSION['member_id'];

$que_mem="SELECT * FROM members m
		INNER JOIN plan_tbl p on m.member_id = p.member_id
		WHERE m.member_id='$member_id' AND m.order_id= p.order_id ";
$obj_mem= mysqli_query($conn,$que_mem);
$data_mem= mysqli_fetch_assoc($obj_mem);

$que_p="SELECT * FROM plan_tbl WHERE member_id='$member_id' ";
$obj_p=mysqli_query($conn,$que_p);
if(mysqli_num_rows($obj_p))
{
	while($data_p3=mysqli_fetch_assoc($obj_p))
	{
		$data_p2[]=$data_p3;
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
	

	<div class="navbar-wrapper">
		<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		  <div class="container-fluid no-side-pad">	  
		  
				<div class="navbar-header">
				  
					<span class="title"><a href="#"><img src="images/logo.png" width="175"></a></span>
				  
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
					<span class="sr-only"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<div class="navbar-collapse collapse" id="navbar-collapse-1">
					<ul class="nav navbar-nav">
							<li class="home"><em></em><a href="view_property.php">Search Property</a></li>
							<li class="post"><em></em><a href="member_detail.php">Profile</a></li>
							<li class="post"><em></em><a href="update_plan.php">Upgrade Plan</a></li>
							<li class="find"><em></em><a href="#"></a></li>
					</ul>
				  
					<ul class="nav navbar-nav navbar-right">
					
					

						<li class="dropdown">
						  <a href="../aboutus.php" class="dropdown-toggle"></a>
						  
						</li>

						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
						  
						</li>
						<?php 
									$getto1='';
									foreach($_GET as $key=>$val)
									{
										$getto1.=$key.'='.$val.'--121--';
									}
								?>
							<style>
								.flag{
									      height: 19px;
										width: 25px;
										margin-top:-5px;
										//position: fixed;
										//top: 1.67%;
										//right: 13.7%;
										//right: 13.7%;
								}
							</style>
							<li class="dropdown">
							  <a href="../change_langauage.php?language=Hebrew&backpage=<?php echo $_SERVER['PHP_SELF'].'?'.$getto1;?>"><img src="../images/Hflag.jpg" class="flag"> Hebrew</a>
							</li>
						
						<li class="find"><em></em><a href="favorite.php">Favorites</a></li>
						<li class="find"><em></em><a href="change_password.php">Preferences</a></li>
						
						<li class="find"><em></em><a href="logout.php">Logout</a></li>
						
					
				  </ul>
				  
				</div>
			
		  </div>
		</div>
	</div>
	<div class="hero">
	<img src="../images/hero-bar.jpg">
		<div class="container-fluid">
			<div class="col-md-6 col-sm-6">
				<ul class="list-inline">
				  
					<li><a href="../index.php"><img src="../images/logo.png" class="logo" /></a></li>					
				  
					
				</ul>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="row">
					<div class="col-md-4">
						
					</div>
					
				</div>
			</div>
			
		</div>
		
		<div class="shadow"></div>
	</div>


    <!-- Carousel
    ================================================== -->
<div class="container">
	<div class="container locations">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="row" align="center">
					<h2>Upgrade Membership Plan </h2>
				</div>
			<form action="payments.php" method="POST" id="upgrade">
				<input type="hidden" name="mid" value="<?php echo $data_mem['member_id'];?>">
				<div class="row">
					<label class="col-md-2">Name</label>
					<div class="col-md-4"><span class="form-control"><?php echo $data_mem['first_name'];?>&nbsp;<?php echo $data_mem['last_name'];?></span></div>
					<label class="col-md-2">Email</label>
					<div class="col-md-4"><span class="form-control"><?php echo $data_mem['email'];?></span></div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Username</label>
					<div class="col-md-4"><span class="form-control"><?php echo $data_mem['username'];?></span></div>
					<label class="col-md-2">Contact No.</label>
					<div class="col-md-4"><span class="form-control"><?php echo $data_mem['mem_phone_a'];?>-<?php echo $data_mem['mem_phone_b'];?>-<?php echo $data_mem['mem_phone_c'];?></span></div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Current Membership Type</label>
					<div class="col-md-4"><span class="form-control"><?php check_plan($data_mem['membership_plan']);?></span></div>
					<label class="col-md-2">Membership Plan Id</label>
					<div class="col-md-4"><span class="form-control"><?php echo $data_mem['order_id'];?></span></div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Membership Start Date (mm-dd-yy)</label>
					<div class="col-md-4"><span class="form-control"><?php echo date('m-d-Y',strtotime($data_mem['start_date']));?></span></div>
					<label class="col-md-2">Membership Expiry Date (mm-dd-yy)</label>
					<div class="col-md-4"><span class="form-control"><?php echo date('m-d-Y',strtotime($data_mem['end_date']));?></span></div>
				</div>
				<br>
				<?php
				if(isset($data_p2))
				{ $n=1;  ?>
					<div class="row"><h3>Membership Plan Taken</h3></div>
					<br>
					<table class="table table-striped dataTable table-bordered">
						<tr>
							<th>S.No.</th>
							<th>Plan name</th>
							<th>Plan Id</th>
							<th>Start Date(mm-dd-yy)</th>
							<th>End Date(mm-dd-yy)</th>
							<th>Plan Amount</th>
						</tr>	
					
					<?php
					foreach($data_p2 as $data_p)
					{ ?>
						<tr>
							<td><?php echo $n; ?></td>
							<td><?php echo $data_p['plan_name']; ?></td>
							<td><?php echo $data_p['order_id']; ?></td>
							<td><?php echo date('m-d-Y',strtotime($data_p['start_date'])); ?></td>
							<td><?php echo date('m-d-Y',strtotime($data_p['start_date'])); ?></td>
							<td><?php echo $data_p['plan_amount']; ?></td>
						</tr>
					<?php	
						$n++;	
					}
					?>
					</table>
				<?php }
				?>
				<div class="row">
					<label class="col-md-2">Select Membership Plan</label>
					<div class="col-md-4">
						<select name="membership_plan" class="input validate[required] form-control">
							<option value="">Select</option>
							<option value="s1">Single Membership for 1 Month</option>
							<option value="s2">Single Membership for 2 Month</option>
							<option value="s3">Single Membership for 3 Month</option>
							<option value="d1">Dual Membership for 1 Month</option>
							<option value="d2">Dual Membership for 2 Month</option>
							<option value="d3">Dual Membership for 3 Month</option>
							<option value="c1">Corporate Membership for 1 Month</option>
							<option value="c2">Corporate Membership for 2 Month</option>
							<option value="c3">Corporate Membership for 3 Month</option>
						</select>
					</div>
					<div class="col-md-4">
						<a  target="_blank" href="../join.php">View Plan Details</a>
					</div>
				</div>
				<br>
				
				<div class="row">
					<center><input type="submit" class="btn btn-danger" value="Upgrade Plan"></center>
				</div>
			</form>
			</div>

				
			<div class="col-md-1"></div>
		</div>



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
		$("#upgrade").validationEngine();
	});
</script>