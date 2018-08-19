<?php

include_once('functions/function.php');
if($_SESSION['language']=='Hebrew')
{
	echo "<script>location.href='contactus_h.php'</script>";
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
			
					<meta name="keywords" content="pashutlehaskir.com | Rent SoCal Houses, Apartments & More, Israel rentals, Santa Monica House, South Bay Rentals, Israel Apartments, Orange County Rentals, San Diego Apartments, Hermosa Beach Apartments, Hollywood For Rent, Burbank Apartments, Glendale Homes, Studio City Rentals, Apartments for Rent, Houses for Rent, Condos for Rent, Apartments in Israel, Apartments in LA, USC, University of Southern California, Cal State, California State University, UCLA, University of California, University of California Israel, Loyola Marymount University, Pepperdine, Pepperdine University, USC Student Housing, USC Housing, USC Apartments, Cal State Housing, Cal State Student Housing, Cal State Apartments, UCLA Housing, UCLA Student Housing, UCLA Apartments, LMU Housing, LMU Student Housing, LMU Apartments, Pepperdine Housing, Pepperdine Student Housing, Pepperdine Apartments" />
				
					<meta name="description" content="pashutlehaskir.com is the #1 home finding service in the Israel area. Search SoCal apartment rentals, houses, condos & roommates!" />
				
					<meta name="robots" content="index,follow" />
					<meta name="GOOGLEBOT" content="index,follow" />
				
			
			
			<meta name="google-translate-customization" content="954d153704cc37f5-fac58c9bb4d3c842-g115d03cfb1ac5d23-17"></meta>
			
			
        
	</head>

	
	<body  class="guest" >
	
	

	
		
		<div id="slidedown-content" data-status="hide" class="none">
			<div id="login-content" class="fb">
				<form action="login/login.html" name="loginForm" method="post">
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
 
	<div class="container">
	<div class="llsignup">
		
		<h3><div align="right"><a href="../login/login.html"></a></div></h3>
		<h2>Contact Us</h2>
		
		
		<!-- <h3>Why list with pashutlehaskir.com?</h3>
		<ul>
			<li>Our membership system ensures <strong>higher quality of tenants</strong>.</li> 
			<li>pashutlehaskir.com brings <strong>over 18 years</strong> of proven results. </li>
			<li><strong>8 retail offices</strong> in SoCal with rental experts ready to assist you.</li> 
			<li>Our professional drivers will place 'For Rent' signs & photograph your property For <strong>Free</strong>.</li>
		</ul> -->
		<hr clas="featured">
		<form action="send_mail.php" method="post" id="contactform">
				<div class="mod-row form_page">
					<div class="row">
						<div class="col-md-12">	
							<label>First Name:</label>
							<input type="text" name="name" class="input validate[required] form-control" size="30" maxlength="50" >
						</div>
						<div class="col-md-12">	
							<label>Email:</label>
							<input type="text" name="email" class="input validate[required,custom[email]] form-control" size="30" maxlength="100">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">	
							<label>Phone:</label>
							
							<input type="text" class="small input validate[required] form-control" name="phone_a" maxlength="3" onFocus="this.select()" onBlur="this.value=chars(this.value,'1234567890');" onKeyUp="if(this.value.length==3 && event.keyCode != 9 && event.keyCode != 16)this.form.ll_phone_b.focus();">
							
							<input type="text" class="small input validate[required] form-control" name="phone_b" maxlength="3" onFocus="this.select()" onBlur="this.value=chars(this.value,'1234567890');" onKeyUp="if(this.value.length==3 && event.keyCode != 9 && event.keyCode != 16)this.form.ll_phone_c.focus();">
							
							<input type="text" class="small input validate[required] form-control" name="phone_c" maxlength="4" onFocus="this.select()" onBlur="this.value=chars(this.value,'1234567890');">
						</div>
						<div class="col-md-12">	
							<label>Comment:</label>
							<textarea size="140" name="message" class="input validate[required] form-control" rows="4"></textarea>
						</div>
						<div class="col-md-12">	
							<button class="submit" type="submit" name="Submit" value="Submit Request">Submit </button>
						</div>
					</div>
				</div>
			</div>
							
		</form>
	</div>		
</div> <!-- End main container div -->
	
	
	<!-- FOOTER -->
		<?php
			include('footer.php');
		?>
		

		
		 
	
	
	<!-- Bootstrap core JavaScript
	
	<!-- Placed at the end of the document so the pages load faster -->
	
<script src="js/jquery.min.js"></script>
	

	
	<script src="js/new/jquery-ui-1.10.4/jquery-ui-1.10.4.js"></script>
	<script src="js/new/jquery.cycle.all.js"></script>
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	
	
			
	<script src="js/fb_login.js"></script>	
	<script src="js/navigation/menu.js" type="text/javascript" language="javascript"></script>	
	<script src="js/default.js" type="text/javascript" language="javascript"></script>	

	<script src="js/ddaaccordion.js" type="text/javascript" language="javascript"></script>


	
	<!-- Default JavaScript -->
	<script src="js/new/default.js"></script>
	



<link rel="stylesheet" href="css/validationEngine.jquery.css">
<script src="js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
	$(document).ready(function(){
		// alert('hi');
		$("#contactform").validationEngine();
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
