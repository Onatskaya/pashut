<?php

include_once('functions/function.php');
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
	<div class="container">


<div>
	<div>
		
	

		<form name="jobsForm" id="jobsForm" action="proccessJobs.php" method="post" enctype="multipart/form-data" onsubmit="return _CF_checkjobsForm(this)">

		
		
		<table class="table_type_1 table_type_2 tab1">
			<tr valign="top">
				<td colspan="2"><h2>General Information</h2></td>
			</tr>
			<tr valign="top">
				<td class="header">First Name:</td>
				<td class="field"><input name="First_Name" type="text" maxlength="45" class="input validate[required] text" ></td>
			</tr>
			<tr valign="top">
				<td class="header">Last Name:</td>
				<td class="field"><input name="Last_Name" type="text"  maxlength="45" class="input validate[required] text"></td>
			</tr>
			<tr valign="top">
				<td class="header">Telephone:</td>
				<td class="field"><input name="Telephone" type="text" maxlength="45" class="input validate[required] text"></td>
			</tr>
			<tr valign="top">
				<td class="header">E-mail:</td>
				<td class="field"><input name="Email" type="text" maxlength="55" class="input validate[required] text"></td>
			</tr>
			<tr valign="top">
				<td class="header">Street Address:</td>
				<td class="field"><input name="Street_Address" type="text" maxlength="75" class="input validate[required] text"></td>
			</tr>
			<tr valign="top">
				<td class="header">City:</td>
				<td class="field"><input name="City" class="input validate[required] text" type="text"  maxlength="45"></td>
			</tr>
				<tr valign="top">
				<td class="header">State:</td>
				<td class="field"><select name="State"><option value=""></option><option value="AL" >Alabama</option><option value="AK" >Alaska</option><option value="AB" >Alberta</option><option value="AZ" >Arizona</option><option value="AR" >Arkansas</option><option value="BC" >British Columbia</option><option value="CA" SELECTED>California</option><option value="CO" >Colorado</option><option value="CT" >Connecticut</option><option value="DE" >Delaware</option><option value="FL" >Florida</option><option value="GA" >Georgia</option><option value="HI" >Hawaii</option><option value="ID" >Idaho</option><option value="IL" >Illinois</option><option value="IN" >Indiana</option><option value="IA" >Iowa</option><option value="KS" >Kansas</option><option value="KY" >Kentucky</option><option value="LA" >Louisiana</option><option value="ME" >Maine</option><option value="MB" >Manitoba</option><option value="MD" >Maryland</option><option value="MA" >Massachusetts</option><option value="MI" >Michigan</option><option value="MN" >Minnesota</option><option value="MS" >Mississippi</option><option value="MO" >Missouri</option><option value="MT" >Montana</option><option value="NE" >Nebraska</option><option value="NV" >Nevada</option><option value="NB" >New Brunswick</option><option value="NH" >New Hampshire</option><option value="NJ" >New Jersey</option><option value="NM" >New Mexico</option><option value="NY" >New York</option><option value="NF" >Newfoundland</option><option value="NC" >North Carolina</option><option value="ND" >North Dakota</option><option value="NT" >Northwest Territories</option><option value="NS" >Nova Scotia</option><option value="NU" >Nunavut</option><option value="OH" >Ohio</option><option value="OK" >Oklahoma</option><option value="ON" >Ontario</option><option value="OR" >Oregon</option><option value="PA" >Pennsylvania</option><option value="PE" >Prince Edward Island</option><option value="PR" >Puerto Rico</option><option value="QC" >Quebec</option><option value="RI" >Rhode Island</option><option value="SK" >Saskatchewan</option><option value="SC" >South Carolina</option><option value="SD" >South Dakota</option><option value="TN" >Tennessee</option><option value="TX" >Texas</option><option value="UT" >Utah</option><option value="VT" >Vermont</option><option value="VA" >Virginia</option><option value="WA" >Washington</option><option value="DC" >Washington DC</option><option value="WV" >West Virginia</option><option value="WI" >Wisconsin</option><option value="WY" >Wyoming</option><option value="YT" >Yukon</option></select></td>
			</tr>		<tr valign="top">
				<td class="header">Zip Code:</td>
				<td class="field"><input name="Zip_Code" type="text" id="Zip_Code" size="7" maxlength="10" class="text"></td>
			</tr>
			</table>



			<table class="table_type_1 table_type_2 tab2">
			<tr valign="top">
				<td colspan="2">
					
					<h2>Employment Information</h2>
				</td>
			</tr>
			<tr valign="top">
				<td class="header">Referred Office Location:</td>
				<td class="field"><select class="input validate[required] " name="Office_Location">
					<option selected="selected" value="">(Choose One)</option>
					
					 <option value="Santa Monica">Santa Monica</option>
					
					 <option value="Hollywood">Hollywood</option>
					
					 <option value="Pasadena">Pasadena</option>
					
					 <option value="Encino">Encino</option>
					
					 <option value="Hermosa Beach">Hermosa Beach</option>
					
					 <option value="La Jolla">La Jolla</option>
					
					 <option value="Costa Mesa ">Costa Mesa </option>
					
				  </select>
				</td>
			</tr>
			<tr valign="top">
				<td class="header">Degree/Level Attained:</td>
				<td class="field"><select class="input validate[required] " name="Degree">
					<option selected="selected" value="">(Choose One)</option>
					
					 <option value="High School or Equivalent">High School or Equivalent</option>
					
					 <option value="Vocational">Vocational</option>
					
					 <option value="Some College Coursework">Some College Coursework</option>
					
					 <option value="Bachelor's Degree">Bachelor's Degree</option>
					
					 <option value="Masters and Above">Masters and Above</option>
					
				  </select>
				</td>
			</tr>
			
		<tr valign="top">
			<td colspan="2">
				<b>What days and hours are you available for work:</b>
			</td>
		</tr>
		
		<input name="Time_Available" type="hidden" value=" ">
		
		<tr valign="top">
			<td class="header">Monday:</td>
			<td class="field"><select name="Mon_From">
				<option selected="selected" value="">(From)</option>
				
				 <option value="8AM">8:00 AM 
				 <option value="9AM">9:00 AM 
				 <option value="10AM">10:00 AM 
				 <option value="11AM">11:00 AM 
				 <option value="12PM">12:00 PM 
				 <option value="1PM">1:00 PM 
				 <option value="2PM">2:00 PM 
				 <option value="3PM">3:00 PM 
				 <option value="4PM">4:00 PM 
				 <option value="5PM">5:00 PM 
				 <option value="6PM">6:00 PM 
				 <option value="7PM">7:00 PM 
				 <option value="8PM">8:00 PM 
				 <option value="9PM">9:00 PM 
			  </select>&nbsp;-&nbsp;<select name="Mon_To">
				<option selected="selected" value="">(To)</option>
				
				 <option value="8AM">8:00 AM 
				 <option value="9AM">9:00 AM 
				 <option value="10AM">10:00 AM 
				 <option value="11AM">11:00 AM 
				 <option value="12PM">12:00 PM 
				 <option value="1PM">1:00 PM 
				 <option value="2PM">2:00 PM 
				 <option value="3PM">3:00 PM 
				 <option value="4PM">4:00 PM 
				 <option value="5PM">5:00 PM 
				 <option value="6PM">6:00 PM 
				 <option value="7PM">7:00 PM 
				 <option value="8PM">8:00 PM 
				 <option value="9PM">9:00 PM 
			  </select>
			</td>
		</tr>
		
		
		<tr valign="top">
			<td class="header">Tuesday:</td>
			<td class="field"><select name="Tue_From">
				<option selected="selected" value="">(From)</option>
				
				 <option value="8AM">8:00 AM 
				 <option value="9AM">9:00 AM 
				 <option value="10AM">10:00 AM 
				 <option value="11AM">11:00 AM 
				 <option value="12PM">12:00 PM 
				 <option value="1PM">1:00 PM 
				 <option value="2PM">2:00 PM 
				 <option value="3PM">3:00 PM 
				 <option value="4PM">4:00 PM 
				 <option value="5PM">5:00 PM 
				 <option value="6PM">6:00 PM 
				 <option value="7PM">7:00 PM 
				 <option value="8PM">8:00 PM 
				 <option value="9PM">9:00 PM 
			  </select>&nbsp;-&nbsp;<select name="Tue_To">
				<option selected="selected" value="">(To)</option>
				
				 <option value="8AM">8:00 AM 
				 <option value="9AM">9:00 AM 
				 <option value="10AM">10:00 AM 
				 <option value="11AM">11:00 AM 
				 <option value="12PM">12:00 PM 
				 <option value="1PM">1:00 PM 
				 <option value="2PM">2:00 PM 
				 <option value="3PM">3:00 PM 
				 <option value="4PM">4:00 PM 
				 <option value="5PM">5:00 PM 
				 <option value="6PM">6:00 PM 
				 <option value="7PM">7:00 PM 
				 <option value="8PM">8:00 PM 
				 <option value="9PM">9:00 PM 
			  </select>
			</td>
		</tr>
		
		
		<tr valign="top">
			<td class="header">Wednesday:</td>
			<td class="field"><select name="Wed_From">
				<option selected="selected" value="">(From)</option>
				
				 <option value="8AM">8:00 AM 
				 <option value="9AM">9:00 AM 
				 <option value="10AM">10:00 AM 
				 <option value="11AM">11:00 AM 
				 <option value="12PM">12:00 PM 
				 <option value="1PM">1:00 PM 
				 <option value="2PM">2:00 PM 
				 <option value="3PM">3:00 PM 
				 <option value="4PM">4:00 PM 
				 <option value="5PM">5:00 PM 
				 <option value="6PM">6:00 PM 
				 <option value="7PM">7:00 PM 
				 <option value="8PM">8:00 PM 
				 <option value="9PM">9:00 PM 
			  </select>&nbsp;-&nbsp;<select name="Wed_To">
				<option selected="selected" value="">(To)</option>
				
				 <option value="8AM">8:00 AM 
				 <option value="9AM">9:00 AM 
				 <option value="10AM">10:00 AM 
				 <option value="11AM">11:00 AM 
				 <option value="12PM">12:00 PM 
				 <option value="1PM">1:00 PM 
				 <option value="2PM">2:00 PM 
				 <option value="3PM">3:00 PM 
				 <option value="4PM">4:00 PM 
				 <option value="5PM">5:00 PM 
				 <option value="6PM">6:00 PM 
				 <option value="7PM">7:00 PM 
				 <option value="8PM">8:00 PM 
				 <option value="9PM">9:00 PM 
			  </select>
			</td>
		</tr>
		
		
		<tr valign="top">
			<td class="header">Thursday:</td>
			<td class="field"><select name="Thu_From">
				<option selected="selected" value="">(From)</option>
				
				 <option value="8AM">8:00 AM 
				 <option value="9AM">9:00 AM 
				 <option value="10AM">10:00 AM 
				 <option value="11AM">11:00 AM 
				 <option value="12PM">12:00 PM 
				 <option value="1PM">1:00 PM 
				 <option value="2PM">2:00 PM 
				 <option value="3PM">3:00 PM 
				 <option value="4PM">4:00 PM 
				 <option value="5PM">5:00 PM 
				 <option value="6PM">6:00 PM 
				 <option value="7PM">7:00 PM 
				 <option value="8PM">8:00 PM 
				 <option value="9PM">9:00 PM 
			  </select>&nbsp;-&nbsp;<select name="Thu_To">
				<option selected="selected" value="">(To)</option>
				
				 <option value="8AM">8:00 AM 
				 <option value="9AM">9:00 AM 
				 <option value="10AM">10:00 AM 
				 <option value="11AM">11:00 AM 
				 <option value="12PM">12:00 PM 
				 <option value="1PM">1:00 PM 
				 <option value="2PM">2:00 PM 
				 <option value="3PM">3:00 PM 
				 <option value="4PM">4:00 PM 
				 <option value="5PM">5:00 PM 
				 <option value="6PM">6:00 PM 
				 <option value="7PM">7:00 PM 
				 <option value="8PM">8:00 PM 
				 <option value="9PM">9:00 PM 
			  </select>
			</td>
		</tr>
		
		
		<tr valign="top">
			<td class="header">Friday:</td>
			<td class="field"><select name="Fri_From">
				<option selected="selected" value="">(From)</option>
				
				 <option value="8AM">8:00 AM 
				 <option value="9AM">9:00 AM 
				 <option value="10AM">10:00 AM 
				 <option value="11AM">11:00 AM 
				 <option value="12PM">12:00 PM 
				 <option value="1PM">1:00 PM 
				 <option value="2PM">2:00 PM 
				 <option value="3PM">3:00 PM 
				 <option value="4PM">4:00 PM 
				 <option value="5PM">5:00 PM 
				 <option value="6PM">6:00 PM 
				 <option value="7PM">7:00 PM 
				 <option value="8PM">8:00 PM 
				 <option value="9PM">9:00 PM 
			  </select>&nbsp;-&nbsp;<select name="Fri_To">
				<option selected="selected" value="">(To)</option>
				
				 <option value="8AM">8:00 AM 
				 <option value="9AM">9:00 AM 
				 <option value="10AM">10:00 AM 
				 <option value="11AM">11:00 AM 
				 <option value="12PM">12:00 PM 
				 <option value="1PM">1:00 PM 
				 <option value="2PM">2:00 PM 
				 <option value="3PM">3:00 PM 
				 <option value="4PM">4:00 PM 
				 <option value="5PM">5:00 PM 
				 <option value="6PM">6:00 PM 
				 <option value="7PM">7:00 PM 
				 <option value="8PM">8:00 PM 
				 <option value="9PM">9:00 PM 
			  </select>
			</td>
		</tr>
		
		
		<tr valign="top">
			<td class="header">Saturday:</td>
			<td class="field"><select name="Sat_From">
				<option selected="selected" value="">(From)</option>
				
				 <option value="8AM">8:00 AM 
				 <option value="9AM">9:00 AM 
				 <option value="10AM">10:00 AM 
				 <option value="11AM">11:00 AM 
				 <option value="12PM">12:00 PM 
				 <option value="1PM">1:00 PM 
				 <option value="2PM">2:00 PM 
				 <option value="3PM">3:00 PM 
				 <option value="4PM">4:00 PM 
				 <option value="5PM">5:00 PM 
				 <option value="6PM">6:00 PM 
				 <option value="7PM">7:00 PM 
				 <option value="8PM">8:00 PM 
				 <option value="9PM">9:00 PM 
			  </select>&nbsp;-&nbsp;<select name="Sat_To">
				<option selected="selected" value="">(To)</option>
				
				 <option value="8AM">8:00 AM 
				 <option value="9AM">9:00 AM 
				 <option value="10AM">10:00 AM 
				 <option value="11AM">11:00 AM 
				 <option value="12PM">12:00 PM 
				 <option value="1PM">1:00 PM 
				 <option value="2PM">2:00 PM 
				 <option value="3PM">3:00 PM 
				 <option value="4PM">4:00 PM 
				 <option value="5PM">5:00 PM 
				 <option value="6PM">6:00 PM 
				 <option value="7PM">7:00 PM 
				 <option value="8PM">8:00 PM 
				 <option value="9PM">9:00 PM 
			  </select>
			</td>
		</tr>
		
		
		<tr valign="top">
			<td class="header">Sunday:</td>
			<td class="field"><select name="Sun_From">
				<option selected="selected" value="">(From)</option>
				
				 <option value="8AM">8:00 AM 
				 <option value="9AM">9:00 AM 
				 <option value="10AM">10:00 AM 
				 <option value="11AM">11:00 AM 
				 <option value="12PM">12:00 PM 
				 <option value="1PM">1:00 PM 
				 <option value="2PM">2:00 PM 
				 <option value="3PM">3:00 PM 
				 <option value="4PM">4:00 PM 
				 <option value="5PM">5:00 PM 
				 <option value="6PM">6:00 PM 
				 <option value="7PM">7:00 PM 
				 <option value="8PM">8:00 PM 
				 <option value="9PM">9:00 PM 
			  </select>&nbsp;-&nbsp;<select name="Sun_To">
				<option selected="selected" value="">(To)</option>
				
				 <option value="8AM">8:00 AM 
				 <option value="9AM">9:00 AM 
				 <option value="10AM">10:00 AM 
				 <option value="11AM">11:00 AM 
				 <option value="12PM">12:00 PM 
				 <option value="1PM">1:00 PM 
				 <option value="2PM">2:00 PM 
				 <option value="3PM">3:00 PM 
				 <option value="4PM">4:00 PM 
				 <option value="5PM">5:00 PM 
				 <option value="6PM">6:00 PM 
				 <option value="7PM">7:00 PM 
				 <option value="8PM">8:00 PM 
				 <option value="9PM">9:00 PM 
			  </select>
			</td>
		</tr>
		
				
		<tr valign="top">
			<td colspan="2">
				<b>If hired, on what day can you start work?</b>
			</td>
		</tr>
		
		<input name="Can_Start_On" type="hidden" value=" ">
		
		<tr valign="top">
			<td class="header">&nbsp;</td>
			<td class="field"><select name="Start_Month">
			  <option selected="selected" value="">(Month)</option>
			  
			   <option value="January">January</option>
			  
			   <option value="February">February</option>
			  
			   <option value="March">March</option>
			  
			   <option value="April">April</option>
			  
			   <option value="May">May</option>
			  
			   <option value="June">June</option>
			  
			   <option value="July">July</option>
			  
			   <option value="August">August</option>
			  
			   <option value="September">September</option>
			  
			   <option value="October">October</option>
			  
			   <option value="November">November</option>
			  
			   <option value="December">December</option>
			  
			 </select><input type="hidden" name="reqFld" value="1" >&nbsp;/&nbsp;<select name="Start_Day">
			  <option selected="selected" value="">(Day)</option>
			  
			   <option value="1">1</option>
			  
			   <option value="2">2</option>
			  
			   <option value="3">3</option>
			  
			   <option value="4">4</option>
			  
			   <option value="5">5</option>
			  
			   <option value="6">6</option>
			  
			   <option value="7">7</option>
			  
			   <option value="8">8</option>
			  
			   <option value="9">9</option>
			  
			   <option value="10">10</option>
			  
			   <option value="11">11</option>
			  
			   <option value="12">12</option>
			  
			   <option value="13">13</option>
			  
			   <option value="14">14</option>
			  
			   <option value="15">15</option>
			  
			   <option value="16">16</option>
			  
			   <option value="17">17</option>
			  
			   <option value="18">18</option>
			  
			   <option value="19">19</option>
			  
			   <option value="20">20</option>
			  
			   <option value="21">21</option>
			  
			   <option value="22">22</option>
			  
			   <option value="23">23</option>
			  
			   <option value="24">24</option>
			  
			   <option value="25">25</option>
			  
			   <option value="26">26</option>
			  
			   <option value="27">27</option>
			  
			   <option value="28">28</option>
			  
			   <option value="29">29</option>
			  
			   <option value="30">30</option>
			  
			   <option value="31">31</option>
			  
			 </select><input type="hidden" name="reqFld" value="1" >&nbsp;/&nbsp;<select name="Start_Year">
			  <option selected="selected" value="">(Year)</option>
			  
			   <option value="2016">2016</option>
			  
			   <option value="2017">2017</option>
			  
			   <option value="2018">2018</option>
			  
			 </select>
			</td>
		</tr>
		
		
		<table class="table_type_1 table_type_2 tab3">
		<tr valign="top">
				<td colspan="2">
					<h2>Resume Upload</h2>
				</td>
			</tr>
		<tr valign="top">
			<td class="header">Upload File:</td>
			<td class="field">
			 <input name="Resume" type="file" class="input validate[required] " id="Resume" size="50"><br>
			 <!-- <div class="smallgray">Only upload files less than 200kb with the following extensions: .doc, .txt, .rtf, .pdf</div> -->
			</td>
		</tr>
	
		<!-- <tr valign="top">
			<td colspan="2" align="center">
			


				<script src="https://www.google.com/recaptcha/api.js" async defer></script>
				<div class="g-recaptcha" data-sitekey="6Lcnmg0TAAAAAIgJo3gouOUnrbKXNMac7Ob6Ez2i"></div>
				<noscript>
				  <div style="width: 302px; height: 422px;">
				    <div style="width: 302px; height: 422px; position: relative;float:left;">
				      <div style="width: 302px; height: 422px; position: absolute;float:left;">
				        <iframe src="https://www.google.com/recaptcha/api/fallback?k=6Lcnmg0TAAAAAIgJo3gouOUnrbKXNMac7Ob6Ez2i"
				                frameborder="0" scrolling="no"
				                style="width: 302px; height:422px; border-style: none;">
				        </iframe>
				      </div>
				      <div style="width: 300px; height: 60px; border-style: none;float:left;
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


			</td>
			
		</tr> -->

		<tr valign="top">
			<td class="header"></td>
			<td class="field">
				<br /><input type="submit" name="submit" value="Submit" class="btn_submit" onclick="return checkSubmit(document.jobsForm)" />			 
			</td>
		</tr>
		
		</form>

		</table>
	</div>
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
			$("#jobsForm").validationEngine();
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
