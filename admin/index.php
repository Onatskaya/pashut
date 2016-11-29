<?php
include('../functions/function.php');

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
				  
					<span class="title"><a href="#"><img src="../images/logo.png" width="175"></a></span>
				  
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
					<span class="sr-only"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<div class="navbar-collapse collapse" id="navbar-collapse-1">
				  	<ul class="nav navbar-nav">
						<li class="home"><em></em><a href="#"></a></li>
						<li class="post"><em></em><a href="#"></a></li>
						<li class="post"><em></em><a href="#"></a></li>
						<li class="find"><em></em><a href="#"></a></li>
					</ul>
				  	<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle"></a>
						  <!-- <ul class="dropdown-menu">
							<li><a href="aboutus.html">Company History</a></li>
							<li><a href="find.html">Contact Us</a></li>
							<li><a href="jobs.html">Jobs at plh</a></li>
							<li><a href="join.html">Corporate Sales</a></li>
							<li><a href="filminglocations.html">Filming Locations</a></li>
							<li><a href="press.html">Press</a></li>
							<li><a href="hotels.html">Hotels</a></li>
						  </ul> -->
						</li>

						<li class="post"><em></em><a href="#"></a></li>
						<li class="find"><em></em><a href="#"></a></li>
						<li class="find"><em></em><a href="#"></a></li>
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
		</div>
		<div class="shadow"></div>
	</div>

    <!-- Carousel
    ================================================== -->
<div class="container">
	<div class="container locations">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" align="center">
				<h2>Admin Login</h2>
				<form action="auth.php" method="POST" id="login">
				    <div class="row">
				        <label class="col-md-4">Login Name</label>
				        <div class="col-md-6"><input type="username" name="username" class="input validate[required] form-control"></div>
				    </div>
				    <br>
				    <div class="row">
				        <label class="col-md-4">Password</label>
				        <div class="col-md-6"><input type="password" name="password" class="input validate[required] form-control"></div>
				    </div>
				    <br>
				    <div class="row" align="center">
				        <input type="submit" style="width:120px;" class="btn" value="Login">
				    </div>
				</form>
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<center><h3 style="color:red;font-weight:bold;">
				<?php
					if(isset($_SESSION['err_msg']))
					{
						echo $_SESSION['err_msg'];
						unset($_SESSION['err_msg']);
					}
				?>
			</h3></center>
		</div>
	</div>
</div> <!-- End main container div -->
<br>
<br>
<br><br>
<br>
<br>&nbsp;	

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
       $("#login").validationEngine();
   });
   function checkHELLO(field, rules, i, options){
           if (field.val() != "HELLO") {
           return options.allrules.validate2fields.alertText;
           }
   }
</script>