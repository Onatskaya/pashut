<?php

include_once('functions/function.php');
if($_SESSION['language']=='Hebrew')
{
	echo "<script>location.href='login2_h.php'</script>";
}
?>
	 
    <!DOCTYPE HTML> 
<html lang="en">
  <head>

  	
 
		
				<title>pashutlehaskir.com</title>
				<link rel="shortcut icon" href="#" />
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				
				<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">
				<meta http-equiv="expires" content="0" />
				<meta http-equiv="Pragma" content="no-cache" />
				<meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8" />

				
       			<meta name="apple-itunes-app" content="app-id=509021914">
   				

				
				<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//script.crazyegg.com/pages/scripts/0044/7420.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>

<script>
var _prum = [['id', '56a93ecdabe53ddd5a18ddad'],
             ['mark', 'firstbyte', (new Date()).getTime()]];
(function() {
    var s = document.getElementsByTagName('script')[0]
      , p = document.createElement('script');
    p.async = 'async';
    p.src = '//rum-static.pingdom.net/prum.min.js';
    s.parentNode.insertBefore(p, s);
})();
</script> 

			<script type="text/javascript">
			function movetoNext(current, nextFieldID) {
			if (current.value.length >= current.maxLength) {
			document.getElementById(nextFieldID).focus();
			}
			}
			</script>
			 <!-- Google Fonts embed code -->
			<script type="text/javascript">
				(function() {
					var link_element = document.createElement("link"),
						s = document.getElementsByTagName("script")[0];
					if (window.location.protocol !== "http:" && window.location.protocol !== "https:") {
						link_element.href = "http:";
					}
					link_element.href += "//fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900";
					link_element.rel = "stylesheet";
					link_element.type = "text/css";
					s.parentNode.insertBefore(link_element, s);
				})();
			</script>




						
				<!-- Latest compiled and minified CSS -->
				<link href="css/201603/ui-lightness/jquery-ui-1.10.4.css" rel="stylesheet">
				<link rel="stylesheet" href="css/bootstrap.min.css">
				<!-- Custom styles for this template -->
				<link href="css/201603/global.css" rel="stylesheet">
				<link href="css/201603/section.css" rel="stylesheet">
				<link href="css/201603/carousel.css" rel="stylesheet">
			
					<meta name="keywords" content="pashutlehaskir.com | Rent SoCal Houses, Apartments & More, Los Angeles rentals, Santa Monica House, South Bay Rentals, Los Angeles Apartments, Orange County Rentals, San Diego Apartments, Hermosa Beach Apartments, Hollywood For Rent, Burbank Apartments, Glendale Homes, Studio City Rentals, Apartments for Rent, Houses for Rent, Condos for Rent, Apartments in Los Angeles, Apartments in LA, USC, University of Southern California, Cal State, California State University, UCLA, University of California, University of California Los Angeles, Loyola Marymount University, Pepperdine, Pepperdine University, USC Student Housing, USC Housing, USC Apartments, Cal State Housing, Cal State Student Housing, Cal State Apartments, UCLA Housing, UCLA Student Housing, UCLA Apartments, LMU Housing, LMU Student Housing, LMU Apartments, Pepperdine Housing, Pepperdine Student Housing, Pepperdine Apartments" />
				
					<meta name="description" content="pashutlehaskir.com is the #1 home finding service in the Los Angeles area. Search SoCal apartment rentals, houses, condos & roommates!" />
				
					<meta name="robots" content="index,follow" />
					<meta name="GOOGLEBOT" content="index,follow" />
				
			
			
			<meta name="google-translate-customization" content="954d153704cc37f5-fac58c9bb4d3c842-g115d03cfb1ac5d23-17"></meta>
			
			
        
	</head>

	
	<body  class="guest" >
	
	


	
		
		<div id="slidedown-content" data-status="hide" class="none">
			<div id="login-content" class="fb">
				<form action="login.php" name="loginForm" method="post">
					<span>
						<label>Username</label> 
						<input type="text" name="username" class="text" size="10" maxlength="100" />
					</span>
					<span>
						<label>Password</label>
						<input type="password" autocomplete="off" class="text" name="password" size="10" maxlength="45" />
					</span>	

					
					<input type="image" name="login" class="submit" src="images/new/btn-login.png" align="absmiddle" />
					
					

				</form>
				<div class="separator">
				-------------- OR --------------
				</div>
				<div class="fb-login-section">
				<a href="#" class="fb-login"><img src="images/fblogin.png"></a>
				</div>
			</div>		
		</div>
	
		<?php
		include('header.php');
		?>
		
	
	
    <!-- Carousel
    ================================================== -->
			
			<div class="shadow"></div>
		</div>
	<div class="container">
	
    	<div class="spanColumn">
        <div class="centerModule">
			

			<h1 style="color:red;">
				<?php
				if(isset($_SESSION['err_msg_usr']))
				{
					echo $_SESSION['err_msg_usr'];
					unset($_SESSION['err_msg_usr']);
				}
				?>
				<?php
				if(isset($_SESSION['err_msg_pass']))
				{
					echo $_SESSION['err_msg_pass'];
					unset($_SESSION['err_msg_pass']);
				}
				?>
			</h1>
			
			
		</div>
	</div>

	<div class="base-wrapper">
		<div class="col-sm-12 col-md-4">
            <div class="gridModule" style="height:470px;">
				<div class="header">LOG IN</div>
				<div class="body">
					<form name="loginForm" id="loginForm" action="login.php" method="post" onsubmit="return _CF_checkloginForm(this)">
						<div class="row">
							<input name="username" id="username"  type="text" maxlength="100"  onkeyup="if(submitEnter(this,event)) login(this.form)"  placeholder="Username"  />
						</div>
						<div class="row">
							<input name="password" id="password"  type="password" maxlength="20"  onkeyup="if(submitEnter(this,event)) login(this.form)"  placeholder="Password"  />
						</div>
						<div class="row" align="center">
							 <input type="submit" name="btn-login" class="btn_login" value="LOG IN" />
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-8">
        	<div class="centerModule">
        		
                
                <div class="gridModule col-sm-6 col-md-12" style="margin-bottom: 10px;">
					<div class="header">FOR MEMBERS - FORGOT YOUR PASSWORD?</div>
					<div class="body">
						
						<form action="passwordReminder.php" name="reminderForm" method="post">
							<div class="row">
							
								<input type="text"  name="verify" placeholder="Email Address" maxlength="100">
								
								<input type="submit" name="submit" value="EMAIL PASSWORD" class="btn_login" />  
							</div>
						</form>
					</div>
					<div class="clearboth"></div>
                </div>
                <div class="gridModule col-sm-6 col-md-12">
					<div class="header">FOR LANDLORDS - FORGOT YOUR PASSWORD?</div>
					<div class="body">
						
						<form action="passwordReminder.php" name="reminderForm" method="post">
							<div class="row">
								<input type="text"  name="verify" placeholder="Email Address" maxlength="100">
								<input type="submit" name="submit" value="EMAIL PASSWORD" class="btn_login" />  
							</div>
						</form>
					</div>
					<div class="clearboth"></div>
                </div>
			</div>
	    </div>
	</div>


</div> <!-- End main container div -->
	
	
		<?php
			include('footer.php');
		?>

		
		
	
	
	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	
<script src="js/jquery.min.js"></script>
	

	
	<script src="../js/new/jquery-ui-1.10.4/jquery-ui-1.10.4.js"></script>
	<script src="../js/new/jquery.cycle.all.js"></script>
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	
	
			
	<script src="../js/fb_login.js"></script>	
	<script src="../js/navigation/menu.js" type="text/javascript" language="javascript"></script>	
	<script src="../js/default.js" type="text/javascript" language="javascript"></script>	

	<script src="../js/ddaaccordion.js" type="text/javascript" language="javascript"></script>


	
	<!-- Default JavaScript -->
	<script src="../js/new/default.js"></script>
	<script language="javascript" src="../js/forms.js" type="text/javascript"></script> <script language="javascript" src="../js/strings.js" type="text/javascript"></script> 
	
	<!-- Pretty photo --->
	<link rel="stylesheet" href="../js/new/prettyphoto/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
	<script src="../js/new/prettyphoto/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
	
	
	<script src="../js/tooltips/wz_tooltip.js" type="text/javascript" language="javascript"></script>
			
			
				


		
	<div id="ttdUniversalPixelTagfb79dc7af6cc4733a9c4a87c68c6f55e" style="display:none">
	        <script src="https://js.adsrvr.org/up_loader.1.1.0.js" type="text/javascript"></script>
	        <script type="text/javascript">
	            (function(global) {
	                if (typeof TTDUniversalPixelApi === 'function') {
	                    var universalPixelApi = new TTDUniversalPixelApi();
	                    universalPixelApi.init("nalbr2d", ["k56d7yb"], "https://insight.adsrvr.org/track/up", "ttdUniversalPixelTagfb79dc7af6cc4733a9c4a87c68c6f55e");
	                }
	            })(this);
	        </script>
	    </div>


	 
			
			
	</body>
</html>

