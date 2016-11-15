<?php
include_once('functions/function.php');
if($_SESSION['language']=='Hebrew')
{
	echo "<script>location.href='post_h.php'</script>";
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

	
	<body  class="guest post-guest" >
	
<!-- 	<img src="images/new/footer-bg.png">
	<img src="images/new/WsrBackground.jpg" class="top-img"> -->
	
		
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
 
	<div class="container">
	<div class="llsignup">
		
		<h3><div align="right"><a href="login2.php">Already Have an Account?</a></div></h3>
		<h2>List your property for <strong>FREE</strong></h2>
		
		
		<h3>Why list with PashutLehaskir.com?</h3>
		<ul>
			<li>Our membership system ensures <strong>higher quality of tenants</strong>.</li> 
			<li>PashutLehaskir.com supports Property Owners and <strong>each listing earns you money</strong>!</li>
			<li>Our experienced support teams can guide you through the entire listing process.</li> 
			<li>Featured listings create a <strong>surge in demand</strong> and higher visibilty to your listings.</li>
		</ul>
		<hr clas="featured">
		<form action="landlordsignup2.php" method="post" name="llSignupForm" id="llSignupForm">
		
			
				<input type="hidden" name="submitted" value="1" />
			
				<div class="mod-row">
					<div class="row">
						<div class="col-md-4">	
							<label>First Name:</label>
							<input type="text" size="30" maxlength="50" class="input validate[required] form-control" name="first_name">
						</div>
						<div class="col-md-4">	
							<label>Last Name:</label>
							<input type="text" size="30" maxlength="50" class="input validate[required] form-control" name="last_name">
						</div>
						<div class="col-md-4">	
							<label>Email:</label>
							<input type="text" size="30" maxlength="100" name="ll_email">
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">	
							<label>Phone:</label>
							
							<input type="text" class="small" name="ll_phone_a" maxlength="3" onFocus="this.select()" onBlur="this.value=chars(this.value,'1234567890');" onKeyUp="if(this.value.length==3 && event.keyCode != 9 && event.keyCode != 16)this.form.ll_phone_b.focus();">
							
							<input type="text" class="small" name="ll_phone_b" maxlength="3" onFocus="this.select()" onBlur="this.value=chars(this.value,'1234567890');" onKeyUp="if(this.value.length==3 && event.keyCode != 9 && event.keyCode != 16)this.form.ll_phone_c.focus();">
							
							<input type="text" class="small" name="ll_phone_c" maxlength="4" onFocus="this.select()" onBlur="this.value=chars(this.value,'1234567890');">
						</div>
						<div class="col-md-4">	
							<label>Street Number:</label>
							<input type="text" class="" size="6" maxlength="10" name="ll_street_number" />
						</div>
						<div class="col-md-4">	
							<label>Street Name:</label>
							<input type="text" class="large" size="30" maxlength="100" name="ll_street_address" />
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">	
							<label>City:</label>
							<input type="text" class="medium" size="30" maxlength="50" name="ll_city">
						</div>
						<div class="col-md-4">	
							<label>State:</label>
							<select name="ll_state" class="small">
								<option >AL</option>
							</select>
						</div>
						<div class="col-md-4">	
							<label>Zipcode:</label>
							<input type="text" size="7" maxlength="10" name="ll_zipcode" class="">
						</div>
					</div>
					<div class="row highlight">
						<div class="col-md-7">	
							<label>Please Select Your Account Type </label>
						</div>
						<div class="col-md-3">
							<select name="landlord_type_id">
								
								<option>Individual</option>
								
								<option>Property Management</option>
								
								<option>Complex</option>
								
								<option>Roommate</option>
								
								<option>Other</option>
								
								<option>Agent</option>
								
							</select>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-4">	
							<label>User Name:</label>
							<input type="text" name="username" maxlength="100">								
							<div id="response"></div>
							<a  id="check-username">check availability</a>
						</div>
						<div class="col-md-4">	
							<label>Password:</label>
							<input type="password" autocomplete="off" name="password" id="password" maxlength="20">
						</div>
						<div class="col-md-4">	
							<label>Confirm Password:</label>
							<input type="password" autocomplete="off" name="password2" maxlength="20">
						</div>
					</div>
					
				</div>
				
				
				<div class="mod-row">
					<div class="row">
						<div class="col-md-8">
							<div class="line"><input type="Checkbox" class="checkbox" name="llterms" value="1"> I have read and understood the <A href="../ll_terms.htm" target="_blank">Terms of Use</a> of pashutlehaskir.com</div>
							<div class="line"><input type="Checkbox" class="checkbox" name="nofc" value="1"> I agree my property is not in foreclosure</div>
							<div class="line"><input type="checkbox" class="checkbox" name="credit_check" value="1"> I am interested in receiving Emails & Newsletter about PashutLeHaskir.com</div>
							<div class="line"><input type="checkbox" class="checkbox" name="pm_brokerage" 							value="1"> I am interested in learning more about leasing services and how PashutLeHaskir.com can help me rent my place! </div>
							<div class="line">
								<br />

								
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<div class="g-recaptcha" data-sitekey="6LcM5iUTAAAAADYezGbpT7j43Jdbk6XmmukUyDD4"></div>
<noscript>
  <div style="width: 302px; height: 422px;">
    <div style="width: 302px; height: 422px; position: relative;">
      <div style="width: 302px; height: 422px; position: absolute;">
        <iframe src="https://www.google.com/recaptcha/api/fallback?k=6LcM5iUTAAAAADBOFMTYrgbfcFMJSmgYgGeY1D2T"
                frameborder="0" scrolling="no"
                style="width: 302px; height:422px; border-style: none;">
        </iframe>
      </div>
      <div style="width: 300px; height: 60px; border-style: none;
                  bottom: 12px; left: 25px; margin: 0px; padding: 0px; right: 25px;
                  background: #f9f9f9; border: 1px solid #c1c1c1; border-radius: 3px;">
        <textarea id="g-recaptcha-response" name="g-recaptcha-response"
                  class="g-recaptcha-response"
                  style="width: 250px; height: 40px; border: 1px solid #c1c1c1;
                         margin: 10px 25px; padding: 0px; resize: none;" >
        </textarea>
      </div>
    </div>
  </div>
</noscript> 



							</div>
						</div>
						
					</div>
				</div>
				
				<div class="mod-row">
					<input type="submit" value="Create Account" class="btn" style="width:20% ; background-color:#0074E4; color:#fff;" name="btSafeSubmit" id="join-plh">
				</div>
				
		</form>
	</div>		
</div> <!-- End main container div -->
	
	
		<!-- FOOTER -->
	<?php
		include('footer.php');
	?>
	

	
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
	
<script src="js/jquery.min.js"></script>

<script type="text/javascript" src="js/jquery.validate.min.js" language="javascript"></script>
<script type="text/javascript" src="js/signup.js" language="javascript"></script>


	
	<!-- Bootstrap core JavaScript
	
	<!-- Placed at the end of the document so the pages load faster -->
	
	<script src="js/jquery_003.js"></script>
	


	
	<script src="js/#Super.js"></script>
	
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.js"></script>
	
	
			
	<script src="js/fb_login.js"></script>	
	<script src="js/menu.js" type="text/javascript" language="javascript"></script><div id="dropmenudiv" style="visibility:hidden;width:165px;background-color:lightyellow" onmouseover="clearhidemenu()" onmouseout="dynamichide(event)"></div>	
	<script src="js/default.js" type="text/javascript" language="javascript"></script>	

	


	
	<!-- Default JavaScript -->
	<script src="js/default_002.js"></script>
	<script language="javascript" src="js/jquery_002.js" type="text/javascript"></script> <script language="javascript" src="js/signup.js" type="text/javascript"></script><style type="text/css">
.preferences-content{display: none}
</style><style type="text/css">
.agreement-content{display: none}
</style> <script language="javascript" src="js/fb_signup.js" type="text/javascript"></script> 
	

<script type="text/javascript">
	$(document).ready(function(){
		$('.planid').click(function(){
			var a =$(this).val();
			$('#planid_no').val(a);
		});
	});
</script>

