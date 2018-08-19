<?php
include("../functions/function.php");
include('check_login.php');
if($_SESSION['language']=='English')
{
	$getto='';
	foreach($_GET as $key=>$val)
	{
		$getto.=$key.'='.$val.'&';
	}
	echo "<script>location.href='edit_post.php?$getto'</script>";
}

$post_id= $_GET['pid'];

$today_date=date('Y-m-d');

$que_post="SELECT * FROM post WHERE post_id='$post_id' ";
$obj_post= mysqli_query($conn,$que_post);
$data_post= mysqli_fetch_assoc($obj_post);

$que_state="SELECT * FROM state ";
$obj_state= mysqli_query($conn,$que_state);

$que_img="SELECT * FROM house_image WHERE post_id='$post_id' ";
// print_r($que_img);die;
$obj_img= mysqli_query($conn,$que_img);
if(mysqli_num_rows($obj_img))
{
    while($data_img3= mysqli_fetch_assoc($obj_img))
    {
        $data_img2[]=$data_img3;
    }
}

$que_city="SELECT * FROM city ";
$obj_city=mysqli_query($conn,$que_city);
while($data_city3=mysqli_fetch_assoc($obj_city))
{
    $data_city2[]=$data_city3;
}


$que_time="SELECT * FROM timing";
$obj_time= mysqli_query($conn,$que_time);
while($data_time3=mysqli_fetch_assoc($obj_time))
{
    $data_time2[]= $data_time3;
}


$member_id=$_SESSION['member_id'];

$que_unit="SELECT * FROM unit_tbl ";
$obj_unit=mysqli_query($conn,$que_unit);

$que_lease="SELECT * FROM lease_tbl";
$obj_lease=mysqli_query($conn,$que_lease);

$que_floor="SELECT * FROM floor_tbl";
$obj_floor=mysqli_query($conn,$que_floor);

$que_parking="SELECT * FROM parking_tbl";
$obj_parking=mysqli_query($conn,$que_parking);

$que_bath="SELECT * FROM bath_tbl";
$obj_bath=mysqli_query($conn,$que_bath);

$que_bedroom="SELECT * FROM bedroom_tbl";
$obj_bedroom=mysqli_query($conn,$que_bedroom);


$que_time="SELECT * FROM timing";
$obj_time= mysqli_query($conn,$que_time);
while($data_time3=mysqli_fetch_assoc($obj_time))
{
    $data_time2[]= $data_time3;
}

$que_city="SELECT * FROM city ";
$obj_city=mysqli_query($conn,$que_city);
while($data_city3=mysqli_fetch_assoc($obj_city))
{
    $data_city2[]=$data_city3;
}
if(empty($data_post['property_zoom'])){
    $data_post['property_zoom'] = 6;
}

if(empty($data_post['property_lat'])){
    $data_post['property_lat'] = '31.046051';
}

if(empty($data_post['property_lng'])){
    $data_post['property_lng'] = '34.85161199999993';
}

?>
<!DOCTYPE HTML> 
<html lang="en">
  <head>		
		<title>Pashutlehaskir.com</title>
		<link rel="shortcut icon" href="" />
		<meta charset="utf-8">
		<html dir="rtl" lang="he">
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
		<style>
			input{
				float:right!important;
			}
			select{
				float:right!important;
			}
		</style>

<body  class="guest" >
	
	<?php
		include('header_h.php');
	?>

    <!-- Carousel
    ================================================== -->
    	<div class="container edit-post-page">



    <link rel="stylesheet" href="/css/lightbox.css" type="text/css" />




    <div class="ll-dash post-listing">
    		<!-- <div class="col-md-3 left-col">
    			
    			<div class="line">
    				<a href="leasingserviceinfo.cfm">
    					<img src="/images/new/ll-leasing-banner.jpg" border="0"  />
    				</a>
    			</div>

    			<div class="line">
    				<a href="enhanceListing.cfm">
    					<img src="/images/new/ll-featured-banner.jpg" border="0"  />
    				</a>
    			</div>

    			<div class="ts-mod">
    				<h3>Tenant Screenings</h3>
    				<h4><a href="/landlords/tenantscreening/">Click here to learn more</a></h4>
    				<p>Our Hours: 8am-8pm M-F, 10am-6pm Sat-Sun</p>

    				<h4>Credit Check Fax @ 888.938.1116</h4>
    				<p><a href="/pdf/tenant_screening_application.pdf">Fax Us the Tenant Screening Application</a></p>
    				

    				<h4>Compliance Fax @ 888.938.1119</h4>
    				<p><a href="/pdf/cc_compliance.pdf">Fax Us the Compliance Packet</a></p>
    			</div>
    			<div class="line">
    				<a href="rentDoctor.cfm">
    					<img src="/images/new/ll-rentdr-banner.jpg" border="0"  />
    				</a>
    			</div>
    			
    			<div class="forms-mod">
    				<h3>Useful Forms for Landlords</h3>
    				
    				<ul>
    					
    						<li><a href="/pdf/Credit Report, How to Read.pdf" target="_blank">How to read Credit Checks</a></li>
    					
    						<li><a href="/pdf/FCRA DOCUMENT.pdf" target="_blank">The Fair Credit Reporting Act</a></li>
    					
    						<li><a href="/pdf/California Tenant Law.pdf" target="_blank">California Tenant Law</a></li>
    					
    						<li><a href="/pdf/Sample ScoreCard.pdf" target="_blank">Sample of Scorecard Report</a></li>
    					
    						<li><a href="/pdf/Sample Detailed Report.pdf" target="_blank">Sample Detailed Report</a></li>
    					
    						<li><a href="/pdf/New Residential Lease5.pdf" target="_blank">Residential Lease Agreement</a></li>
    					
    						<li><a href="/pdf/Registration Packet.pdf" target="_blank">Registration For Credit Checks</a></li>
    					
    						<li><a href="/pdf/Tenant Screening Application11.pdf" target="_blank">Tenant Screening Application</a></li>
    					
    						<li><a href="/pdf/Rental Application9.pdf" target="_blank">Rental Application</a></li>
    					
    						<li><a href="/pdf/Adverse_Action_Notice.pdf" target="_blank">Notice of Adverse Action</a></li>
    					
    				</ul>
    			</div>
    		</div> -->
    		
    		
    		<div class="col-md-12">
    			


    <div class="dash-top-section-wrap row">
    	<div class="col-md-12 dash-top-section">
    		<h2>רישום עדכון</h2> 
    		<nav class="navbar navbar-default dash-nav pull-right" role="navigation">
    			<div class="navbar-header">
    				<style>
					.abc{
						margin-top:-19px!important;
					}
					</style>
					<span class="title ">רישום עדכון</span> 
    				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-2">
    				  <span class="sr-only">Toggle navigation</span>
    				  <span class="icon-bar"></span>
    				  <span class="icon-bar"></span>
    				  <span class="icon-bar"></span>
    				</button>
    			  </div>
    		
    			<div class="collapse navbar-collapse" id="navbar-collapse-2">
    				<ul class="nav navbar-nav list-inline dash-nav">
    					<!-- <li class="">
    						<a href="dashboard.php">
    							Home
    						</a>
    					</li> -->
    					<!-- <li class="">
    						<a href="/landlords/alertedit.cfm">
    							Email &amp; Text Alerts
    						</a>
    					</li> -->
    					
    					<li class="selected abc">
    						<a href="add_post2.php">
    							רישום עדכון
    						</a>
    					</li>
    				</ul>
    			</div>
    		</nav>
    	</div>

    	
    		
    		<!-- <div class="col-md-3 message-mod">
    			<h3>Your Message Center</h3>
    			<div class="text_wrapper">
    				
    				<div class="highlight"><em></em><b>0</b> Unread Messages </div>
    				
    				
    				<div class="detail-link">
    					<a href="/inbox.cfm">View More Messages</a>
    				</div>
    			</div>
    		</div> -->
    	
    </div>
    			
    			<div class="center-mod">
   		

    			   		

    		      <table class="table_type_4" cellspacing="0" cellpadding="0" border="0">
    			<tr valign="top">
    				<td colspan="2">
    					<h3>1. מיקום פנוי</h3>
    					<div class="smallgray">אנא הכנס את הכתובת הפנויה שלך למטה ולמפות אותו על ידי לחיצה על הקישור " מפה זה ! " . זה יעזור לנו למצוא מפות תכונות שימושיות אחרות עבור המשרה הפנויה שלך .</div>
    				    <br>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-6">
                                <div class="listing-map">                                   
                                    <div style="width: auto; height: 230px; margin: 0px auto 15px; position: relative;">
                                        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
                                        <div style='overflow:hidden;height:230px;width:auto;'>
                                            <div id='gmap_canvas' style='height:230px;width:auto;'></div>
                                            <div>
                                                <small><a href="http://embedgooglemaps.com">                                    
                                                embed google maps                           
                                                </a></small>
                                            </div>
                                            <div>
                                                <!-- <small><a href="https://privacypolicytemplate.net">privacy policy example</a></small> -->
                                            </div>
                                            <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
                                        </div>
                                        <?php echo "<script type='text/javascript'>function init_map(){var myOptions = {language:'he',zoom:".$data_post['property_zoom'].",center:new google.maps.LatLng('".$data_post['property_lat']."','".$data_post['property_lng']."'),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(".$data_post['property_lat'].",".$data_post['property_lng'].")});infowindow = new google.maps.InfoWindow({content:'<strong>Location</strong><br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>"; ?>
                                    </div>
                                </div>
                            </div>
                            <label class="col-md-2">מיקום נוכחי :</label>
                        </div>
                        <br>

                        <form action="update_location.php" method="post" name="propForm" class="herbew-form" enctype="multipart/form-data">
                        <div>
                            <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
                            <input type="hidden" id="latituteee" value="<?php echo $data_post['property_lat']; ?>">
                            <input type="hidden" id="greatituteee" value="<?php echo $data_post['property_lng']; ?>">
                            <input type="hidden" id="zomeee" value="<?php echo $data_post['property_zoom']; ?>">
                                
                                <div class="col-md-3"></div>
                                <div class="col-md-4">
                                    <div class='map-wrapper'>
                                        <div id="map"></div>
                                        <div id="legend">אתה יכול לגרור ולשחרר את הסמן למיקום הנכון</div>
                                    </div>
                                </div>
								<div class="col-xs-12 col-md-5 edit-form">
                                    <div class='input input-positioned'>
                                        <div class="row">
                                            <div class="col-md-2"></div>
											<div class="col-md-6">
                                                <input id="addresspicker_map" />   
                                            </div>  
                                            <label class="col-md-4">כתובת :</label> 
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2"></div>
											<div class="col-md-6">
                                                <input id="locality" disabled=disabled> 
                                            </div>
                                            <label class="col-md-4">מָקוֹם:</label> 
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2"></div>
											<div class="col-md-6">
                                                <input id="administrative_area_level_2" disabled=disabled> 
                                            </div>
                                            <label class="col-md-4">מָחוֹז: </label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2"></div>
											<div class="col-md-6">
                                                <input id="administrative_area_level_1" disabled=disabled>
                                            </div>
                                            <label class="col-md-4">מדינה / מחוז : </label> 
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2"></div>
											<div class="col-md-6">
                                                <input id="country" disabled=disabled>
                                            </div>  
                                            <label class="col-md-4">מדינה: </label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2"></div>
											<div class="col-md-6">
                                                <input id="postal_code" disabled=disabled>
                                            </div>
                                            <label class="col-md-4">מיקוד: </label> 
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2"></div>
											<div class="col-md-6">
                                                <input type="text" name="property_lat" id="lat" class="form-control" readonly=""> 
                                            </div>
                                            <label class="col-md-4">Lat:</label> 
                                        </div>  
                                        <div class="row">
                                            <div class="col-md-2"></div>
											<div class="col-md-6">
                                                <input type="text" name="property_lng" id="lng" class="form-control" readonly="">
                                            </div> 
                                            <label class="col-md-4">Lng:</label> 
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2"></div>
											<div class="col-md-6">
                                                <input type="text" name="property_zoom" id="zoom" class="form-control" readonly="">
                                            </div> 
                                            <label class="col-md-4">זום :</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2"></div>
											<div class="col-md-6">
                                                <input id="type" disabled=disabled />
                                            </div>
                                            <label class="col-md-4">סוּג:</label> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>&nbsp;
                            <div class="row" align="center">
                                <div class="col-sm-3 col-sm-offset-3">
									<input type="submit" class="btn btn-info " value="עדכון">
								</div>
							</div>

                        </form>
                    </td>
    			</tr>

    			

    			<tr valign="top">
    				<td colspan="2">
    					<div class="grayline"></div>
    					<h3>2. פרטים ליצירת קשר</h3>
    					<div class="smallgray">את פרטי ההתקשרות הבאים יופיעו על הרישום פנוי שלך יהיה גלוי לדיירים .</div>
    					<!-- <div class="marg_top_5"><a href="#fill_form" id="fill_form">Fill the contact information with your account information.</a></div> -->
    				</td>
    			</tr>
                <form action="update_post.php" method="post" enctype="multipart/form-data" id="contact_info">
                    <input type="hidden" name="pid" value="<?php echo $post_id; ?>">
                
				<tr valign="top">
					<td colspan='2'>
						<table>
							<tr valign="top">
								<td class="subheader">
									שם איש קשר:
								</td>
								<td class="field">
									<input type="text" class="input validate[required] text" name="name" id="name" size="50" maxlength="100" value="<?php echo $data_post['name']; ?>">
								</td>
							</tr>
							<tr valign="top">
								<td class="subheader">
									טלפון ליצירת קשר:
								</td>
								<td class="small-marg">
									<input type="text" class="input validate[required,custom[number]] numberonly text quater" name="contact_a" id="contact_a"  maxlength="3" value="<?php echo $data_post['contact_a']; ?>">
									<input type="text" class="input validate[required,custom[number]] numberonly text quater" name="contact_b" id="contact_b" maxlength="3" value="<?php echo $data_post['contact_b']; ?>">
									<input type="text" class="input validate[required,custom[number]] numberonly text quater" name="contact_c" id="contact_c" maxlength="4" value="<?php echo $data_post['contact_c']; ?>"><span style="font-size:16px;color:#C30">*</span>
									<span style="position:relative;top:4px;">Ext.</span> <input type="text" class="input numberonly text smalltext" name="contact_d" maxlength="10" value="<?php echo $data_post['contact_d']; ?>">

									<!-- Hide old Alt phone field  -->
									<input type="hidden" class="input numberonly text quater" name="alt_contact_a"  maxlength="3" value="">
									<input type="hidden" class="numberonly text quater" name="alt_contact_b" value="" maxlength="3">
									<input type="hidden" class="input numberonly text quater" name="alt_contact_c" value="" maxlength="4">
									<input type="hidden" class="input numberonly text smalltext" name="alt_contact_d"  value="" maxlength="10">
									<!-- End Hide old Alt phone field -->
								</td>
							</tr>
							<tr valign="top">
								<td class="subheader">
									פַקס:
								</td>
								<td class="field small-marg">
									<input type="text" class="input numberonly text quater smalltext" name="contact_fax_a" maxlength="3" value="<?php echo $data_post['contact_fax_a']; ?>">
									<input type="text" class="input numberonly text quater smalltext" name="contact_fax_b"  value="<?php echo $data_post['contact_fax_b']; ?>" maxlength="3" > 
									<input type="text" class="input numberonly text quater" name="contact_fax_c" value="<?php echo $data_post['contact_fax_c']; ?>" maxlength="4" >
								</td>
							</tr>
							<tr valign="top">
								<td class="subheader">
									דוא"ל ליצירת קשר:
								</td>
								<td class="field">
									<input type="text" class="input validate[required,custom[email]] text" name="email" size="50" maxlength="100" value="<?php echo $data_post['email']; ?>">
								</td>
							</tr>
							<!-- <tr valign="top">
							<td class="subheader">
								BRE Number:
							</td>
							<td class="field">
								<input type="text" class="text" name="bre_number" size="20" maxlength="50" value="<?php echo $data_post['bre_number']; ?>">
							</td>
						</tr> -->
						</table>
					</td>	
				</tr>	
                <tr valign="top">
                    <td class="field" colspan="2">
                        <div class="col-md-3 col-md-offset-3">
                            <input type="submit" class="btn btn-info" name="submit_feature" value="עדכון">
                         </div>
                    </td>
                </tr>
                </form>


    			<tr valign="top">
    				<td colspan="2">
    					<div class="grayline"></div>
    					<h3>3. תכונות פנויות</h3>
    				</td>
    			</tr>

    			<tr valign="top">
    				<td colspan="2">
    					<div class="">	
                            <form action="update_post.php" method="post" enctype="multipart/form-data" id="vacancy_feature">
    						    <input type="hidden" name="pid" value="<?php echo $post_id; ?>">
                               
    							<div class="col-md-2">
								</div>
    							<div class="col-md-6">
    								<table style="width:auto;" cellspacing="0" cellpadding="0" border="0">
    									<tr valign="top">
    										<td class="medsubheader" >
    											השכרה:
    										</td>
    										<td class="field">
    											₪<input type="text" class="input validate[required] numberonly text" style="width:60px;" id="rent" name="rent" maxlength="10" value="<?php echo $data_post['rent'];?>" > 
    										</td>
    									</tr>
    									<tr valign="top">
    										<td class="medsubheader">
    											לְהַפְקִיד:
    										</td>
    										<td class="field">
    											₪<input type="text" class="input validate[required] numberonly text" style="width:100px;" id="deposit" name="deposit" maxlength="50" value="<?php echo $data_post['deposit'];?>">
    										</td>
    									</tr>
    									<tr valign="top">
    										<td class="medsubheader">
    											לַחכּוֹר:
    										</td>
    										<td class="field">											
    											<select name="lease_type" id="lease_type" class="input validate[required]">
    												<option value="">בחר</option>
    												<?php
    												    while($data_lease=mysqli_fetch_assoc($obj_lease))
                                                        { ?>
                                                            <option value="<?php echo $data_lease['id']; ?>" <?php if($data_post['lease_type']== $data_lease['id']){ echo 'selected'; } ?>><?php echo $data_lease['lease_type_he']; ?></option>    
                                                    <?php    }	
    											     ?>		
														
    											</select>
    										</td>
    									</tr>
    									<tr valign="top">
    										<td class="medsubheader">
    											תאריך פנוי:
    										</td>
    										<td class="field">
    											<!-- <select name="availmo"><option value=""></option><option value="1" >Jan</option><option value="2" >Feb</option><option value="3" >Mar</option><option value="4" >Apr</option><option value="5" >May</option><option value="6" >Jun</option><option value="7" >Jul</option><option value="8" >Aug</option><option value="9" >Sep</option><option value="10" >Oct</option><option value="11" >Nov</option><option value="12" >Dec</option></select><input type="hidden" name="reqFld" value="1" >&nbsp;/&nbsp;<select name="availday"><option value=""></option><option value="1" >1</option><option value="2" >2</option><option value="3" >3</option><option value="4" >4</option><option value="5" >5</option><option value="6" >6</option><option value="7" >7</option><option value="8" >8</option><option value="9" >9</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option></select><input type="hidden" name="reqFld" value="1" >&nbsp;/&nbsp;<select name="availyr"><option value=""></option><option value="2016" >2016</option><option value="2017" >2017</option></select> <input type="hidden" name="reqFld" value="1" ><span style="font-size:16px;color:#C30">*</span> <span style="font-size: 10px;">(<A href="javascript:availToday()">Now</A>)</span>  -->
   		                                      <input type="text" class="input validate[required] text date_p" style="width:180px;" name="availability" maxlength="500" value="<?php echo date('d-m-Y',strtotime($data_post['availability']));  ?>" >
    	                                   </td>
    									</tr>
    									<tr valign="top">
    										<td class="medsubheader">
    											קומות:
    										</td>
    										<td class="field">
    											<select name="floor" id="floor" class="input validate[required]" style="width: 184px;">
    												 <option value="">בחר</option>
    											     <?php
                                                     while($data_floor=mysqli_fetch_assoc($obj_floor))
                                                     { 
													 ?>
                                                        <option value="<?php echo $data_floor['id']; ?>" <?php if($data_post['floor']==$data_floor['id']){ echo 'selected'; } ?>><?php echo $data_floor['floor_he']; ?></option>
													 <?php 
													 }
                                                     ?>	
												</select>
    										</td>
    									</tr>
    									<tr valign="top">
    										<td class="medsubheader">
    											סוג חניה :
    										</td>
    										<td class="field">
    											<select name="parking" id="parking" class="input validate[required]">
    												<option value="">בחר</option>
    											    <?php
                                                    while($data_parking=mysqli_fetch_assoc($obj_parking))
                                                    { 
													?>
                                                        <option value="<?php echo $data_parking['id'];?>" <?php if($data_post['parking']==$data_parking['id']){ echo 'selected'; } ?> ><?php echo $data_parking['parking_he'];?></option>
													<?php 
													}
                                                    ?>	
													
    											</select>
    										</td>
    									</tr>
    									<tr valign="top">
    										<td class="medsubheader">
    											מקומות חנייה:
    										</td>
    										<td class="field">
    											<input type="text" class="text" style="width:30px;" id="parking_space" name="parking_space" maxlength="2" value="<?php echo $data_post['parking_space'];?>">
    										</td>
    									</tr>
    									<!-- <tr valign="top">
    										<td class="medsubheader">
    											School District:
    										</td>
    										<td class="field">
    											<input type="text" class="text" style="width:180px;" name="school_district" id="school_district" maxlength="500" value="<?php echo $data_post['school_district'];?>" >
    										</td>
    									</tr> -->
    									<!-- <tr valign="top">
    										<td class="medsubheader">
    											Open House:
    										</td>
    										<td class="field">
    											<input type="text" class="text" style="width:180px;" name="open_house" id="open_house" maxlength="100" value="<?php echo $data_post['open_house']; ?>"> 
    		                                    <img src="../images/info.gif" border="0" align="absmiddle" class=""/>
    	                                   </td>
    									</tr> -->
                                        <tr valign="top">
                                            <td class="medsubheader">
                                             מדינה:
                                            </td>
                                            <td class="field">
                                                <select name="state" id="state" class="input validate[required] form-control">
                                                      <?php
													$StateQ='SELECT * FROM state';
													$StateR=mysqli_query($conn,$StateQ);
													while($row=mysqli_fetch_assoc($StateR))
													{	
													?>
													<option value="<?php echo $row['id'];?>" <?php if($data_post['state']==$row['id']){ echo 'selected'; } ?>><?php echo $row['state_name_he'];?></option>
													<?php
													}
													?>
                                                </select>
                                                <span style="font-size:16px;color:#C30">*</span>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td class="medsubheader">
                                               כתובת מלאה:
                                            </td>
                                            <td class="field">
                                                <textarea name="address" class="input validate[required] mb" id="address" style="width:auto;height:62px;"><?php echo $data_post['address']; ?></textarea>
                                                <span style="font-size:16px;color:#C30">*</span>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td class="medsubheader">
                                              תיאור Walkscore :
                                            </td>
                                            <td class="field">
                                                <select name="walkscore_descrp" id="walkscore_descrp" class="input validate[required] form-control">
                                                    <option value="">בחר</option>
                                                    <?php
													$WalkDQ='SELECT * FROM walkscore_desc';
													$WalkDR=mysqli_query($conn,$WalkDQ);
													while($row=mysqli_fetch_assoc($WalkDR))
													{	
													?>
													<option value="<?php echo $row['id'];?>" <?php if($data_post['walkscore_descrp']==$row['id']){ echo 'selected'; } ?>><?php echo $row['walkscore_desc_he'];?></option>
													<?php
													}
													?>
												</select>
                                                <span style="font-size:16px;color:#C30">*</span>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td class="medsubheader">
                                               תיאור Soundscore :
                                            </td>
                                            <td class="field">
                                               <select name="soundscore_descrp" id="soundscore_descrp" class="input validate[required] form-control">
                                                    <?php
													$SoundDQ='SELECT * FROM soundscore_desc';
													$SoundDR=mysqli_query($conn,$SoundDQ);
													while($row=mysqli_fetch_assoc($SoundDR))
													{	
													?>
													<option value="<?php echo $row['id'];?>" <?php if($data_post['soundscore_descrp']==$row['id']){ echo 'selected'; } ?>><?php echo $row['soundscore_desc_he'];?></option>
													<?php
													}
													?>
												</select>
                                                <span style="font-size:16px;color:#C30">*</span>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td class="medsubheader">
                                               רעש משדה תעופה :
                                            </td>
                                            <td class="field">
                                               <select name="airport_noise" id="airport_noise" class="input validate[required] form-control">
                                                   <?php
													$airQ='SELECT * FROM airport_noise';
													$airR=mysqli_query($conn,$airQ);
													while($row=mysqli_fetch_assoc($airR))
													{	
													?>
													<option value="<?php echo $row['id'];?>"  <?php if($data_post['airport_noise']==$row['id']){ echo 'selected'; } ?>><?php echo $row['airport_noise_he'];?></option>
													<?php
													}
													?>
                                               </select>
                                                <span style="font-size:16px;color:#C30">*</span>
                                            </td>
                                        </tr>
    								</table>
    							</div>
								 <div class="col-md-4">					
    								<table style="width:auto;" cellspacing="0" cellpadding="0" border="0">
    									<tr valign="top">
    										<td class="medsubheader">
    											סוג המבנה :
    										</td>
    										<td class="field">
    											<select id="structure_type" name="structure_type">
													<option value="">בחר</option>
													<?php
													$structQ='SELECT * FROM structure_type';
													$structR=mysqli_query($conn,$structQ);
													while($row=mysqli_fetch_assoc($structR))
													{	
													?>
													<option value="<?php echo $row['struct_id'];?>" <?php if($data_post['structure_type']==$row['struct_id']){ echo 'selected';}?>><?php echo $row['name_he'];?></option>
													<?php
													}
													?>
												 </select>
    										</td>
    									</tr>
    									<!-- <tr valign="top">
    										<td class="medsubheader">
    											Units on Property:
    										</td>
    										<td class="field">
    											<input type="text" class="text" name="unit_detail" id="unit_detail" maxlength="5" value="<?php echo $data_post['unit_detail']; ?>" >
    		                                    <img src="../images/info.gif" border="0" align="absmiddle" class=""/>
                                            </td>
    									</tr> -->
    									<tr valign="top">
    										<td class="medsubheader">
    											סוג רישום :
    										</td>
    										<td class="field">
    											<select name="listing_type" id="listing_type" class="input validate[required] ">
                                                    <option value="">בחר</option>
                                                    <?php
													$listQ='SELECT * FROM listing_type';
													$listR=mysqli_query($conn,$listQ);
													while($row=mysqli_fetch_assoc($listR))
													{	
													?>
													<option value="<?php echo $row['list_id'];?>" <?php if($data_post['listing_type']==$row['list_id']) { echo 'selected'; } ?>><?php echo $row['listing_type_he'];?></option>
													<?php
													}
													?>
												</select>
                                                <span style="font-size:16px;color:#C30">*</span>
    										</td>
    									</tr>
    									<tr valign="top">
    										<td class="medsubheader">
    											יחידת סוג:
    										</td>
    										<td class="field">
    											<select name="unit_type" id="unit_type" class="input validate[required] ">
                                                    <option value="">בחר</option>
                                                    <?php
                                                    while($data_unit=mysqli_fetch_assoc($obj_unit))
                                                    { 
													?>
                                                        <option value="<?php echo $data_unit['id'];?>" <?php if($data_post['unit_type']==$data_unit['id']){ echo 'selected'; }  ?>><?php echo $data_unit['unit_type_he'];?></option>
													<?php 
													}
                                                    ?>
												</select>
                                                <span style="font-size:16px;color:#C30">*</span>
    										</td>
    									</tr>
    									<tr valign="top">
    										<td class="medsubheader">
    											מספר יחידה:
    										</td>
    										<td class="field">
    											<input type="text" class="text" style="width:40px;" name="unit_no" id="unit_no" maxlength="20" value="<?php echo $data_post['unit_no']; ?>"> 
    	<!--  <input type="checkbox" class="noborder" name="dontshowunitno" value="1" > <span style="font-size: 10px;">Do not show to Members</span> -->
    										</td>
    									</tr>
    									<tr valign="top">
    										<td class="medsubheader">
    											חדרי שינה :
    										</td>
    										<td class="field">
    											<select name="bedroom" id="bedroom" class="input validate[required]">
                                                    <option value="">בחר</option>
                                                    <?php
                                                    while($data_bedroom=mysqli_fetch_assoc($obj_bedroom))
                                                    { 
													?>
                                                        <option value="<?php echo $data_bedroom['id']; ?>" <?php if($data_post['bedroom']==$data_bedroom['id']) { echo 'selected'; } ?> ><?php echo $data_bedroom['bedroom_he']; ?></option>
													<?php 
													}
                                                    ?>
													
                                                </select>
                                                <span style="font-size:16px;color:#C30">*</span>
    										</td>
    									</tr>
    									<tr valign="top">
    										<td class="medsubheader">
    											חדרי אמבטיה:
    										</td>
    										<td class="field">
    											<select name="bathroom" id="bathroom" class="input validate[required] ">
                                                    <?php
                                                    while($data_bath=mysqli_fetch_assoc($obj_bath))
                                                    { 
													?>
                                                        <option vlaue="<?php echo $data_bath['id'];?>" <?php if($data_post['bathroom']==$data_bath['id']) { echo 'selected'; } ?>><?php echo $data_bath['bath_he'];?></option>
													<?php 
													}
                                                    ?> 
												</select>
                                                <span style="font-size:16px;color:#C30">*</span>
    										</td>
    									</tr>
    									<tr valign="top">
    										<td class="medsubheader">
    											מרוהט:
    										</td>
    										<td class="field">
    											<select name="furnished" id="furnished" class="input validate[required] ">
                                                    <option value="">בחר</option>
													<?php
													$FurQ='SELECT * FROM furnished';
													$FurR=mysqli_query($conn,$FurQ);
													while($row=mysqli_fetch_assoc($FurR))
													{	
													?>
													<option value="<?php echo $row['id'];?>" <?php if($data_post['furnished']==$row['id']) { echo 'selected'; } ?>><?php echo $row['furnished_he'];?></option>
													<?php
													}
													?>
													</select>
                                                <span style="font-size:16px;color:#C30">*</span>
    										</td>
    									</tr>
    									<tr valign="top">
    										<td class="medsubheader">
    											חיות מחמד:
    										</td>
    										<td class="field">
    											<select name="pet" id="pet">
                                                    <?php
													$PetQ='SELECT * FROM pets';
													$PetR=mysqli_query($conn,$PetQ);
													while($row=mysqli_fetch_assoc($PetR))
													{	
													?>
													<option value="<?php echo $row['id'];?>" <?php if($data_post['pet']==$row['id']) { echo 'selected'; } ?>><?php echo $row['pets_he'];?></option>
													<?php
													}
													?>
												</select>
                                                <span style="font-size:16px;color:#C30">*</span>
    										</td>
    									</tr>
    									<tr valign="top">
    										<td class="medsubheader">
    											מטר :
    										</td>
    										<td class="field">
    											<input type="text" class="text" style="width:180px;" id="square_footage" name="square_footage" value="<?php echo $data_post['square_footage']; ?>" >
    										</td>
    									</tr>
                                        <tr valign="top">
                                            <td class="medsubheader">
                                              עִיר:
                                            </td>
                                            <td class="field">
                                                <select name="city" id="city" class="input validate[required] form-control">
                                                    <option value="">בחר</option>
                                                    <?php
                                                        foreach($data_city2 as $data_city)
                                                        { 
													?>
                                                            <option value="<?php echo $data_city['city_id'];?>" <?php if($data_post['city']==$data_city['city_id']) { echo 'selected'; } ?>><?php echo $data_city['city_name_he'];?></option>
                                                    <?php 
														}
                                                    ?>
													
                                                </select>
                                                <span style="font-size:16px;color:#C30">*</span>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td class="medsubheader">
                                               &nbsp;
                                            </td>
                                            <td class="field">
                                                &nbsp;
                                             </td>
                                        </tr>
                                        <tr valign="top">
                                            <td class="medsubheader">
                                               Walkscore:
                                            </td>
                                            <td class="field">
                                                <select name="walkscore" id="walkscore" class="input validate[required] form-control">
                                                    <option value="">בחר</option>
                                                    <?php
													$WalkQ='SELECT * FROM walkscore';
													$WalkR=mysqli_query($conn,$WalkQ);
													while($row=mysqli_fetch_assoc($WalkR))
													{	
													?>
													<option value="<?php echo $row['id'];?>" <?php if($data_post['walkscore']==$row['id']){ echo 'selected'; } ?>><?php echo $row['walkscore_he'];?></option>
													<?php
													}
													?>
												</select>
                                                <span style="font-size:16px;color:#C30">*</span>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td class="medsubheader">
                                               Soundscore:
                                            </td>
                                            <td class="field">
												<select name="soundscore" id="soundscore" class="input validate[required] form-control">
                                                   <option value="">בחר</option>
                                                    <?php
													$SoundQ='SELECT * FROM soundscore';
													$SoundR=mysqli_query($conn,$SoundQ);
													while($row=mysqli_fetch_assoc($SoundR))
													{	
													?>
													<option value="<?php echo $row['id'];?>" <?php if($data_post['soundscore']==$row['id']){ echo 'selected'; } ?>><?php echo $row['soundscore_he'];?></option>
													<?php
													}
													?>
												</select>
                                                <span style="font-size:16px;color:#C30">*</span>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td class="medsubheader">
                                               רעש רכב :
                                            </td>
                                            <td class="field">
                                               <select name="vehicle_noise" id="vehicle_noise" class="input validate[required] form-control">
                                                   <option value="">בחר</option>
                                                    <?php
													$VNQ='SELECT * FROM vehicle_noise';
													$VNR=mysqli_query($conn,$VNQ);
													while($row=mysqli_fetch_assoc($VNR))
													{	
													?>
													<option value="<?php echo $row['id'];?>" <?php if($data_post['vehicle_noise']==$row['id']){ echo 'selected'; } ?>><?php echo $row['vehicle_noise_he'];?></option>
													<?php
													}
													?>
													
                                               </select>
                                                <span style="font-size:16px;color:#C30">*</span>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td class="medsubheader">
                                               עסקים :
                                            </td>
                                            <td class="field">
                                               <select name="business_noise" id="business_noise" class="input validate[required] form-control">
                                                   <?php
													$BuisQ='SELECT * FROM businesses';
													$BuisR=mysqli_query($conn,$BuisQ);
													while($row=mysqli_fetch_assoc($BuisR))
													{	
													?>
													<option value="<?php echo $row['id'];?>" <?php if($data_post['business_noise']==$row['id']){ echo 'selected'; } ?>><?php echo $row['businesses_he'];?></option>
													<?php
													}
													?>  
                                               </select>
                                                <span style="font-size:16px;color:#C30">*</span>
                                            </td>
                                        </tr>
                                        <!-- <tr valign="top">
                                            <td class="medsubheader">
                                               Featured Listing:
                                            </td>
                                            <td class="field">
                                                <input type="checkbox" name="featured_listing" id="fl" value="Yes" class="small" style="position:relative;top:5px;" <?php if($data_post['featured_listing']=='Yes'){ echo 'checked'; } ?> >
                                            </td>
                                        </tr> -->
                                        
    								</table>
    							</div>
                                <div class="row">
                                    <tr valign="top">
                                        <td class="field" colspan="2">
                                            <div class="col-md-3 col-md-offset-3">
                                                <input type="submit" class="btn btn-info" name="submit_feature" value="עדכון">
                                             </div>
                                        </td>
                                    </tr>
                                </div>
                                </form>
    						</div>
    				</td>
    			</tr>
                
                <tr valign="top" id="fl_box" style="display:none;">
                    <td colspan="2">
                        <div class=""> 
                            <div class="col-md-12">                  
                            
                                <table style="width:auto;" cellspacing="0" cellpadding="0" border="0">
                                    <tr valign="top">
                                        <td class="medsubheader" colspan="2">
                                            <b>Note:-</b>
                                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </span>
                                        </td>
                                     </tr>
                                    <tr valign="top">
                                        <td class="medsubheader">
                                            Credit Card Number
                                        </td>
                                        <td class="field">
                                            <input type="text" name="f_credit_card_no" class="input validate[required] form-control" maxlength="16">
                                         </td>
                                    </tr>
                                    <tr valign="top">
                                        <td class="medsubheader">
                                            Expiration Date *
                                        </td>
                                        <td class="field">
                                           <select name="f_credit_exp_mo" class="input validate[required] form-control">
                                                <option value="">Month</option>
                                                <option value="01">January</option>
                                                <option value="02">February</option>
                                                <option value="03">March</option>
                                                <option value="04">April</option>
                                                <option value="05">May</option>
                                                <option value="06">June</option>
                                                <option value="07">July</option
                                                ><option value="08">August</option>
                                                <option value="09">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                           </select>
                                           <select name="f_credit_exp_yr" class="input validate[required] form-control">
                                                <option value="">Year</option>
                                                <?php
                                                for($i=2016;$i<=2050;$i++)
                                                { ?>
                                                    <option><?php echo $i; ?></option>
                                                <?php }
                                                ?>
                                           </select>
                                        </td>
                                    </tr>
                                    
                                    <tr valign="top">
                                        <td class="medsubheader">
                                            CVV*
                                        </td>
                                        <td class="field">
                                            <input name="f_credit_card_cvv" class="input validate[required] form-control" maxlength="4" type="text">
                                        </td>
                                    </tr>
                                 
                                </table>
                            </div>
                           
                        </div>
                    </td>
                </tr>
                <tr valign="top">
                    <td colspan="2">
                        <div class="grayline"></div>
                        <h3>4. תמונות</h3>
                    </td>
                </tr>
                <tr valign="top">
                    <td colspan="2">
                        <div class=""> 
                            <div class="row">                  
                                <table style="width:auto;" cellspacing="0" cellpadding="0" border="0">
                                    <tr valign="top">
                                        <form action="update_image_m.php" method="POST" enctype="multipart/form-data" id="image_a">
                                        <input type="hidden" name="pid" value="<?php echo $post_id; ?>">
                                        <td class="medsubheader">
                                           תמונה קדמית
                                        </td>
                                        <td class="field" align="center">
                                            <img src="../home_images/<?php echo $data_post['main_image'];?>" height="80" width="90"> 
                                        </td>
                                         <td class="field">
                                            <input type="hidden" name="old_main_image" value="<?php echo $data_post['main_image']; ?>">
                                            <input type="file" name="main_image" class="input validate[required]">
                                        </td>
                                        <td class="field">
                                            <input type="submit" class="btn btn-info" value="עדכון">
                                        </td>
                                        </form>
                                    </tr>
                                    <tr valign="top">
                                        <form action="update_image_m.php" method="POST" enctype="multipart/form-data" id="image_b">
                                        <input type="hidden" name="pid" value="<?php echo $post_id; ?>">
                                        <td class="medsubheader">
                                          תמונה 1
                                        </td>
                                        <td class="field" align="center">
                                           <img src="../home_images/<?php echo $data_post['image1'];?>" height="80" width="90">
                                        </td>
                                         <td class="field">
                                            <input type="hidden" name="old_image1" value="<?php echo $data_post['image1']; ?>">
                                            <input type="file" name="image1" class="input validate[required]">
                                        </td>
                                        <td class="field">
                                            <input type="submit" class="btn btn-info" value="עדכון">
                                        </td>
                                        </form>
                                    </tr>
                                    <tr valign="top">
                                        <form action="update_image_m.php" method="POST" enctype="multipart/form-data" id="image_c">
                                        <input type="hidden" name="pid" value="<?php echo $post_id; ?>">
                                        <td class="medsubheader">
                                           תמונה 2
                                        </td>
                                        <td class="field" align="center">
                                           <img src="../home_images/<?php echo $data_post['image2'];?>" height="80" width="90">
                                        </td>
                                         <td class="field">
                                            <input type="hidden" name="old_image2" value="<?php echo $data_post['image2']; ?>">
                                            <input type="file" name="image2" class="input validate[required]">
                                        </td>
                                        <td class="field">
                                            <input type="submit" class="btn btn-info" value="עדכון">
                                        </td>
                                        </form>
                                    </tr>
                                    <tr valign="top">
                                        <form action="update_image_m.php" method="POST" enctype="multipart/form-data" id="image_d">
                                        <input type="hidden" name="pid" value="<?php echo $post_id; ?>">
                                        <td class="medsubheader">
                                           תמונה 3
                                        </td>
                                        <td class="field" align="center">
                                           <img src="../home_images/<?php echo $data_post['image3'];?>" height="80" width="90">
                                        </td>
                                         <td class="field">
                                            <input type="hidden" name="old_image3" value="<?php echo $data_post['image3']; ?>">
                                            <input type="file" name="image3" class="input validate[required]">
                                        </td>
                                        <td class="field">
                                            <input type="submit" class="btn btn-info" value="עדכון">
                                        </td>
                                        </form>
                                    </tr>
                                    <tr valign="top">
                                        <form action="update_image_m.php" method="POST" enctype="multipart/form-data" id="image_e">
                                        <input type="hidden" name="pid" value="<?php echo $post_id; ?>">
                                        <td class="medsubheader">
                                           תמונה 4
                                        </td>
                                        <td class="field" align="center">
                                           <img src="../home_images/<?php echo $data_post['image4'];?>" height="80" width="90">
                                        </td>
                                         <td class="field">
                                            <input type="hidden" name="old_image4" value="<?php echo $data_post['image4']; ?>">
                                            <input type="file" name="image4" class="input validate[required]">
                                        </td>
                                        <td class="field">
                                            <input type="submit" class="btn btn-info" value="עדכון">
                                        </td>
                                        </form>
                                    </tr>
                                    <tr valign="top">
                                        <form action="update_image_m.php" method="POST" enctype="multipart/form-data" id="image_f">
                                        <input type="hidden" name="pid" value="<?php echo $post_id; ?>">
                                        <td class="medsubheader">
                                           תמונה 5

                                        </td>
                                        <td class="field" align="center">
                                           <img src="../home_images/<?php echo $data_post['image5'];?>" height="80" width="90">
                                        </td>
                                         <td class="field">
                                            <input type="hidden" name="old_image5" value="<?php echo $data_post['image5']; ?>">
                                            <input type="file" name="image5" class="input validate[required]">
                                        </td>
                                        <td class="field">
                                            <input type="submit" class="btn btn-info" value="עדכון">
                                        </td>
                                        </form>
                                    </tr>
                                <?php
                                $n=6;
                                if(isset($data_img2))
                                {   
                                    foreach($data_img2 as $data_img)
                                    { ?>
                                    <tr valign="top">
                                        <td class="medsubheader">
                                            תמונות <?php echo $n; ?>
                                            <input type="hidden" name="iid" value="<?php echo $data_img['image_id'] ?>">
                                        </td>
                                        <td class="field">
                                           <img src="../home_images/<?php echo $data_img['image'];?>" height="80" width="90">
                                        </td>
                                        <td class="field" align="center">
                                          <a href="edit_image_r.php?iid=<?php echo $data_img['image_id'];?>&post_id=<?php echo $post_id;?>"  class="btn btn-info  link-input">עדכון</a>
                                        </td>
                                        <td class="field">
                                           <a href="delete_image_r.php?iid=<?php echo $data_img['image_id'];?>&post_id=<?php echo $post_id;?>" onclick="return confirm('Are you sure, want to Delete this Image')" class="btn btn-danger  link-input">לִמְחוֹק</a>
                                        </td>
                                    </tr>
                                    <br>
                                <?php 
                                $n++;   }
                                }
                                ?>
                                <input type="hidden" name="no_id" id="no_id" value="<?php echo $n; ?>">
                                   
                                </table>
                            </div>
                            <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form action="update_add_image.php" method="POST" enctype="multipart/form-data" id="image_add">
                                            <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-4">
                                                    <table class="table table-bordered table-hover" id="tab_logicc">
                                                    <tbody>
                                                        <tr id='addrr<?php echo $n-1; ?>'>
                                                            <td>
                                                                <?php echo $n ;?>
                                                            </td>
                                                            <td>
                                                                <input type="file" name="image[]" class="input validate[required] form-control" >
                                                            </td>
                                                        </tr>
                                                        <tr id='addrr<?php echo $n ;?>'></tr>   
                                                    </tbody>
                                                    </table>
                                                    <a id="add_roww" value='<?php echo $n;?>' class="btn btn-default pull-left">הוספת תמונה</a><a id='delete_roww' class="pull-right btn btn-default">מחק תמונה</a>
                                                </div>
                                                <label class="col-md-4 col-md-offset-8">הוסף תמונות נוספות</label>
                                            </div>
                                            <br>
                                            <div class="row" align="center">
                                                <div class="col-sm-3 col-sm-offset-3">
                                                    <input type="submit" value="לְהוֹסִיף" class="btn btn-info">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                 
                            
                        </div>
                    </td>
                </tr>
                <tr valign="top">
                    <td colspan="2">
                        <div class="grayline"></div>
                        <h3>5. טיימס צופה</h3>
                    </td>
                </tr>
                <tr valign="top">
                    <td colspan="2">
                        <div class=""> 
                            <form action="update_time.php" method="POST">
                                <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
                            <div class="col-md-12">                  
                                <table style="width:auto;" cellspacing="0" cellpadding="0" border="0">
                                    <tr valign="top">
                                        <td class="medsubheader">
                                           יוֹם שֵׁנִי
                                        </td>
                                        <td class="field">
                                            <select name="mon_time_frm">
                                                <option value="">מ</option>
                                                <?php
                                                foreach($data_time2 as $data_time)
                                                { ?>
                                                    <option <?php if($data_time['time']==$data_post['mon_time_frm']){ echo 'selected'; } ?> ><?php echo $data_time['time']; ?></option>
                                                <?php }
                                                ?>
                                            </select>
                                            <select name="mon_time_to">
                                                <option value="">ל</option>
                                                <?php
                                                foreach($data_time2 as $data_time)
                                                { ?>
                                                    <option  <?php if($data_time['time']==$data_post['mon_time_to']){ echo 'selected'; } ?> ><?php echo $data_time['time']; ?></option>
                                                <?php }
                                                ?>
                                            </select>
                                        </td>
                                        
                                    </tr>
                                    <tr valign="top">
                                        <td class="medsubheader">
                                           יוֹם שְׁלִישִׁי
                                        </td>
                                        <td class="field">
                                            <select name="tue_time_frm">
                                                <option value="">מ</option>
                                                <?php
                                                foreach($data_time2 as $data_time)
                                                { ?>
                                                    <option  <?php if($data_time['time']==$data_post['tue_time_frm']){ echo 'selected'; } ?>><?php echo $data_time['time']; ?></option>
                                                <?php }
                                                ?>
                                            </select>
                                            <select name="tue_time_to">
                                                <option value="">ל</option>
                                                <?php
                                                foreach($data_time2 as $data_time)
                                                { ?>
                                                    <option  <?php if($data_time['time']==$data_post['tue_time_to']){ echo 'selected'; } ?>><?php echo $data_time['time']; ?></option>
                                                <?php }
                                                ?>
                                            </select>
                                         </td>
                                    </tr>
                                    <tr valign="top">
                                        <td class="medsubheader">
                                            יום רביעי
                                        </td>
                                        <td class="field">
                                          <select name="wed_time_frm">
                                              <option value="">מ</option>
                                              <?php
                                              foreach($data_time2 as $data_time)
                                              { ?>
                                                <option  <?php if($data_time['time']==$data_post['wed_time_frm']){ echo 'selected'; } ?>><?php echo $data_time['time']; ?></option>
                                              <?php }
                                              ?>
                                          </select>
                                            <select name="wed_time_to">
                                                <option value="">ל</option>
                                                <?php
                                                foreach($data_time2 as $data_time)
                                                { ?>
                                                    <option  <?php if($data_time['time']==$data_post['wed_time_to']){ echo 'selected'; } ?>><?php echo $data_time['time']; ?></option>
                                                <?php }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                    
                                    <tr valign="top">
                                        <td class="medsubheader">
                                            יוֹם חֲמִישִׁי
                                        </td>
                                        <td class="field">
                                            <select name="thu_time_frm">
                                                <option value="">מ</option>
                                                <?php
                                                foreach($data_time2 as $data_time)
                                                { ?>
                                                    <option  <?php if($data_time['time']==$data_post['thu_time_frm']){ echo 'selected'; } ?>><?php echo $data_time['time']; ?></option>
                                                <?php }
                                                ?>
                                            </select>
                                            <select name="thu_time_to">
                                                <option value="">ל</option>
                                                <?php
                                                foreach($data_time2 as $data_time)
                                                { ?>
                                                    <option  <?php if($data_time['time']==$data_post['thu_time_to']){ echo 'selected'; } ?>><?php echo $data_time['time']; ?></option>
                                                <?php }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <td class="medsubheader">
                                            יוֹם שִׁישִׁי
                                        </td>
                                        <td class="field">
                                            <select name="fri_time_frm">
                                                <option value="">מ</option>
                                                <?php
                                                foreach($data_time2 as $data_time)
                                                { ?>
                                                    <option  <?php if($data_time['time']==$data_post['fri_time_frm']){ echo 'selected'; } ?>><?php echo $data_time['time']; ?></option>
                                                <?php }
                                                ?>
                                            </select>
                                           <select name="fri_time_to">
                                               <option value="">ל</option>
                                               <?php
                                               foreach($data_time2 as $data_time)
                                               { ?>
                                                    <option <?php if($data_time['time']==$data_post['fri_time_to']){ echo 'selected'; } ?>><?php echo $data_time['time']; ?></option>
                                               <?php }
                                               ?>
                                           </select>
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <td class="medsubheader">
                                            יום שבת
                                        </td>
                                        <td class="field">
                                            <select name="sat_time_frm">
                                                <option value="">מ</option>
                                                <?php
                                                foreach($data_time2 as $data_time)
                                                { ?>
                                                    <option <?php if($data_time['time']==$data_post['sat_time_frm']){ echo 'selected'; } ?>><?php echo $data_time['time']; ?></option>
                                                <?php }
                                                ?>
                                            </select>
                                           <select name="sat_time_to">
                                               <option value="">ל</option>
                                               <?php
                                               foreach($data_time2 as $data_time)
                                               { ?>
                                                    <option <?php if($data_time['time']==$data_post['sat_time_to']){ echo 'selected'; } ?>><?php echo $data_time['time']; ?></option>
                                               <?php }
                                               ?>
                                           </select>
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <td class="medsubheader">
                                            יוֹם רִאשׁוֹן
                                        </td>
                                        <td class="field">
                                            <select name="sun_time_frm">
                                                <option value="">מ</option>
                                                <?php
                                                foreach($data_time2 as $data_time)
                                                { ?>
                                                    <option <?php if($data_time['time']==$data_post['sun_time_frm']){ echo 'selected'; } ?>><?php echo $data_time['time']; ?></option>
                                                <?php }
                                                ?>
                                            </select>
                                          <select name="sun_time_to">
                                              <option value="">ל</option>
                                              <?php
                                              foreach($data_time2 as $data_time)
                                              { ?>
                                                    <option <?php if($data_time['time']==$data_post['sun_time_to']){ echo 'selected'; } ?>><?php echo $data_time['time']; ?></option>
                                              <?php }
                                              ?>
                                          </select>
                                        </td>
                                    </tr>
                                </table>
                                <div class="col-sm-3 col-sm-offset-3">
                                    <input type="submit" class="btn btn-info" align="center" value="עדכון">
                                </div>
                            </div>
                             </form>    
                        </div>
                    </td>
                </tr>
                

    			<tr valign="top">
    				<td colspan="2">
    					<div class="grayline"></div> 
    					<h3>6. אביזרי פנויות</h3>
    				</td> 
    			</tr>
    			<tr valign="top">
    				<td colspan="2">
    					<div class="row">
    						<form action="update_amenities.php" method="POST" >
                                 <input type="hidden" name="pid" value="<?php echo $post_id; ?>">
    							<div class="col-md-4 check" style="width:25%;">
    							</div>
								<div class="col-md-4 check" style="width:25%;">
    								<input type="checkbox" id="label_refrigerator" class="small" style="position:relative;top:5px;" name="refrigerator" value="yes" <?php if($data_post['refrigerator']=='yes'){ echo 'checked'; } ?> >
    								&nbsp;<label for="label_refrigerator">מְקָרֵר</label>
    							</div>
    							
    							<div class="col-md-4 check" style="width:25%;">
    								<input type="checkbox" id="label_air_conditioner" class="small" style="position:relative;top:5px;" name="air_conditioner" value="yes" <?php if($data_post['air_conditioner']=='yes'){ echo 'checked'; } ?> >
    								&nbsp;<label for="label_air_conditioner">מזגן</label>
    							</div>
    							
    							<div class="col-md-4 check" style="width:25%;">
    								<input type="checkbox" id="label_yard" class="small" style="position:relative;top:5px;" name="yard" value="yes" <?php if($data_post['yard']=='yes'){ echo 'checked'; } ?> >
    								&nbsp;<label for="label_yard">חָצֵר</label>
    							</div>
    							<div class="col-md-4 check" style="width:25%;">
    							</div>
								
    							<div class="col-md-4 check" style="width:25%;">
    								<input type="checkbox" id="label_stove" class="small" style="position:relative;top:5px;" name="stove" value="yes" <?php if($data_post['stove']=='yes'){ echo 'checked'; } ?> >
    								&nbsp;<label for="label_stove">תַנוּר</label>
    							</div>
    							
    							<div class="col-md-4 check" style="width:25%;">
    								<input type="checkbox" id="label_wallheater" class="small" style="position:relative;top:5px;" name="wallheater" value="yes" <?php if($data_post['wallheater']=='yes'){ echo 'checked'; } ?> >
    								&nbsp;<label for="label_wallheater">מחמם סטריט</label>
    							</div>
    							
    							<div class="col-md-4 check" style="width:25%;">
    								<input type="checkbox" id="label_elevator" class="small" style="position:relative;top:5px;" name="elevator" value="yes" <?php if($data_post['elevator']=='yes'){ echo 'checked'; } ?> >
    								&nbsp;<label for="label_elevator">מַעֲלִית</label>
    							</div>
    							<div class="col-md-4 check" style="width:25%;">
    							</div>
								
    							<div class="col-md-4 check" style="width:25%;">
    								<input type="checkbox" id="label_dishwasher" class="small" style="position:relative;top:5px;" name="dishwasher" value="yes" <?php if($data_post['dishwasher']=='yes'){ echo 'checked'; } ?> >
    								&nbsp;<label for="label_dishwasher">מדיח כלים</label>
    							</div>
    							
    							<div class="col-md-4 check" style="width:25%;">
    								<input type="checkbox" id="label_laundry" class="small" style="position:relative;top:5px;" name="laundry" value="yes" <?php if($data_post['laundry']=='yes'){ echo 'checked'; } ?> >
    								&nbsp;<label for="label_laundry">מכבסה בחצרי</label>
    							</div>
    							
    							<div class="col-md-4 check" style="width:25%;">
    								<input type="checkbox" id="label_pool" class="small" style="position:relative;top:5px;" name="pool" value="yes" <?php if($data_post['pool']=='yes'){ echo 'checked'; } ?> >
    								&nbsp;<label for="label_pool">פּוּל</label>
    							</div>
    							<div class="col-md-4 check" style="width:25%;">
    							</div>
								
    							<div class="col-md-4 check" style="width:25%;">
    								<input type="checkbox" id="label_microwave" class="small" style="position:relative;top:5px;" name="microwave" value="yes" <?php if($data_post['microwave']=='yes'){ echo 'checked'; } ?> >
    								&nbsp;<label for="label_microwave">מיקרוגל</label>
    							</div>
    							
    							<div class="col-md-4 check" style="width:25%;">
    								<input type="checkbox" id="label_wd" class="small" style="position:relative;top:5px;" name="wd" value="yes" <?php if($data_post['wd']=='yes'){ echo 'checked'; } ?> >
    								&nbsp;<label for="label_wd">מכונת כביסה ומייבש ביחידה</label>
    							</div>
    							
    							<div class="col-md-4 check" style="width:25%;">
    								<input type="checkbox" id="label_spa" class="small" style="position:relative;top:5px;" name="spa" value="yes" <?php if($data_post['spa']=='yes'){ echo 'checked'; } ?> >
    								&nbsp;<label for="label_spa">ספא / ג'קוזי</label>
    							</div>
    							<div class="col-md-4 check" style="width:25%;">
    							</div>
								
    							<div class="col-md-4 check" style="width:25%;">
    								<input type="checkbox" id="label_central_air" class="small" style="position:relative;top:5px;" name="central_air" value="yes" <?php if($data_post['central_air']=='yes'){ echo 'checked'; } ?> >
    								&nbsp;<label for="label_central_air">מיזוג אוויר מרכזי</label>
    							</div>
    							
    							<div class="col-md-4 check" style="width:25%;">
    								<input type="checkbox" id="label_wd_hookups" class="small" style="position:relative;top:5px;" name="wd_hookups" value="yes" <?php if($data_post['wd_hookups']=='yes'){ echo 'checked'; } ?> >
    								&nbsp;<label for="label_wd_hookups">מכונת כביסה קונסולת שיער</label>
    							</div>
    							
    							<div class="col-md-4 check" style="width:25%;">
    								<input type="checkbox" id="label_accessible" class="small" style="position:relative;top:5px;" name="accessiblee" value="yes" <?php if($data_post['accessiblee']=='yes'){ echo 'checked'; } ?> >
    								&nbsp;<label for="label_accessible">נגיש לכסא גלגלים</label>
    							</div>
    							<div class="col-md-4 check" style="width:25%;">
    							</div>
								
    							<div class="col-md-4 check" style="width:25%;">
    								<input type="checkbox" id="label_central_heat" class="small" style="position:relative;top:5px;" name="central_heat" value="yes" <?php if($data_post['central_heat']=='yes'){ echo 'checked'; } ?> >
    								&nbsp;<label for="label_central_heat">הסקה מרכזית</label>
    							</div>
    							
    							<div class="col-md-4 check" style="width:25%;">
    								<input type="checkbox" id="label_balcony" class="small" style="position:relative;top:5px;" name="balcony" value="yes" <?php if($data_post['balcony']=='yes'){ echo 'checked'; } ?> >
    								&nbsp;<label for="label_balcony">מִרפֶּסֶת</label>
    							</div>
    							
    							<div class="col-md-4 check" style="width:25%;">
    								<input type="checkbox" id="label_controlled_access" class="small" style="position:relative;top:5px;" name="controlled_access" value="yes" <?php if($data_post['controlled_access']=='yes'){ echo 'checked'; } ?> >
    								&nbsp;<label for="label_controlled_access">בניין גישה מבוקרת</label>
    							</div>
    							<div class="col-md-4 check" style="width:25%;">
    							</div>
								
    							<div class="col-md-4 check" style="width:25%;">
    								<input type="checkbox" id="label_fireplace" class="small" style="position:relative;top:5px;" name="fireplace" value="yes" <?php if($data_post['fireplace']=='yes'){ echo 'checked'; } ?> >
    								&nbsp;<label for="label_fireplace">אָח</label>
    							</div>
    							
    							<div class="col-md-4 check" style="width:25%;">
    								<input type="checkbox" id="label_patio" class="small" style="position:relative;top:5px;" name="patio" value="yes" <?php if($data_post['patio']=='yes'){ echo 'checked'; } ?> >
    								&nbsp;<label for="label_patio">מבואה</label>
    							</div>
    							
    							<div class="col-md-4 check" style="width:25%;">
    								<input type="checkbox" id="label_quiet_nhood" class="small" style="position:relative;top:5px;" name="quiet_nhood" value="yes" <?php if($data_post['quiet_nhood']=='yes'){ echo 'checked'; } ?> >
    								&nbsp;<label for="label_quiet_nhood">בשכונה שקטה</label>
    							</div>
                                
    							<div class="col-md-3 col-md-offset-3">
                                     <input type="submit" class="btn btn-info" value="עדכון">
                                </div>
                            </form>    
    					</div>
    				</td>
    			</tr>
    			
    			<tr valign="top">
    				<td colspan="2">
    					<div class="grayline"></div>
    					<h3>תיאור פנוי 7.</h3>
    				</td>
    			</tr>
                 <form action="update_post.php" method="post" enctype="multipart/form-data" id="vacancy_descp">
                    <input type="hidden" name="pid" value="<?php echo $post_id; ?>">
        			<tr valign="top">
						<td colspan='2'>
							<table>	
								<tr valign="top">
									<td class="subheader">
										<span >פנויות כותרת :</span>
									</td>
									<td class="field">
										<input type="text" class="input validate[required] text mb" style="width:auto;" name="short_descp" maxlength="100" value="<?php echo $data_post['short_descp'];?>" ><span style="font-size:16px;color:#C30">*</span> 
									</td>
								</tr>
								

								<tr valign="top">
									<td class="subheader" >
										<span >פנויות פרטים:</span> 
									</td>
									<td class="field">
										<textarea name="full_descp" class="mb" style="width:auto;height:150px;" ><?php echo $data_post['full_descp'];?></textarea>
									   <br><span style="color: red;font-size:11px;"><strong>אין מספרי טלפון , כתובת , אתר או בעל בית לתקשר מותרי קופסא זו .</strong></span>
									</td>
								</tr>
							</tr>
						</table>
					</td>
                    <tr valign="top">
                        <td class="subheader" colspan="2">
                            <div class="col-md-3 col-md-offset-3">
                                <input type="submit" class="btn btn-info" value="עדכון">
                            </div>
                        </td>
                    </tr>
                </form>

    			<!-- <tr valign="top">
    				<td colspan="2">
    					<div class="grayline"></div>
    					<h3>8. Paid Utilities</h3>
    				</td>
    			</tr>
                <tr valign="top">
    				<td colspan="2">
    					<div class="row">
    						
							<div class="col-md-3">
								<input type="checkbox" id="label_utilities" class="small" style="position:relative;top:5px;" name="utilities" value="yes" >
								&nbsp;<label for="label_utilities">All Utilities</label>
							</div>
							
							<div class="col-md-3">
								<input type="checkbox" id="label_utils_partial" class="small" style="position:relative;top:5px;" name="utils_partial" value="yes" >
								&nbsp;<label for="label_utils_partial">Partial Utilities</label>
							</div>
							
							<div class="col-md-3">
								<input type="checkbox" id="label_water" class="small" style="position:relative;top:5px;" name="water" value="yes" >
								&nbsp;<label for="label_water">Water</label>
							</div>
							
							<div class="col-md-3">
								<input type="checkbox" id="label_hot_water" class="small" style="position:relative;top:5px;" name="hot_water" value="yes" >
								&nbsp;<label for="label_hot_water">Hot Water</label>
							</div>
							
							<div class="col-md-3">
								<input type="checkbox" id="label_trash" class="small" style="position:relative;top:5px;" name="trash" value="yes" >
								&nbsp;<label for="label_trash">Trash</label>
							</div>
							
							<div class="col-md-3">
								<input type="checkbox" id="label_gas" class="small" style="position:relative;top:5px;" name="gas" value="yes" >
								&nbsp;<label for="label_gas">Gas</label>
							</div>
							
							<div class="col-md-3">
								<input type="checkbox" id="label_electricity" class="small" style="position:relative;top:5px;" name="electricity" value="yes" >
								&nbsp;<label for="label_electricity">Electricity</label>
							</div>
							
							<div class="col-md-3">
								<input type="checkbox" id="label_maid_service" class="small" style="position:relative;top:5px;" name="maid_service" value="yes" >
								&nbsp;<label for="label_maid_service">Maid Service</label>
							</div>
							
							<div class="col-md-3">
								<input type="checkbox" id="label_gardener" class="small" style="position:relative;top:5px;" name="gardener" value="yes" >
								&nbsp;<label for="label_gardener">Gardener</label>
							</div>
							
							<div class="col-md-3">
								<input type="checkbox" id="label_pool_service" class="small" style="position:relative;top:5px;" name="pool_service" value="yes" >
								&nbsp;<label for="label_pool_service">Pool Service</label>
							</div>
							
							<div class="col-md-3">
								<input type="checkbox" id="label_association_fees" class="small" style="position:relative;top:5px;" name="association_fees" value="yes" >
								&nbsp;<label for="label_association_fees">Assoc. Fees</label>
							</div>
							
							<div class="col-md-3">
								<input type="checkbox" id="label_cable" class="small" style="position:relative;top:5px;" name="cable" value="yes" >
								&nbsp;<label for="label_cable">Cable</label>
							</div>
							
							<div class="col-md-3">
								<input type="checkbox" id="label_wifi" class="small" style="position:relative;top:5px;" name="wifi" value="yes" >
								&nbsp;<label for="label_wifi">Wifi</label>
							</div>
    									
    					</div>
    				</td>
    			</tr>
 -->

    			<tr valign="top">
    				<td colspan="2">
    					<div class="grayline"></div>
    					<h3>8. רישום פנוי הודעה</h3>
    				</td>
    			</tr>
                <form action="update_post_date.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="pid" value="<?php echo $post_id; ?>">
				
							<tr valign="top">
								<td colspan="2" style="float:right">
									<?php 
									if($data_post['post_date'] <= $today_date AND $data_post['post_date_confirm']=='yes'  )
									{ ?>
										<div style="float:left;">
											<input type="radio" name="post_date_confirm" value="no" class="noborder" checked=""> הודעה כבר רשום
										</div>
										<br>
								   <?php }
									?>
									 <?php 
									 if($data_post['post_date'] >= $today_date AND $data_post['post_date_confirm']=='no' AND $data_post['post_date'] != '2020-02-20'  )
									 { ?>
										 <div style="float:left;">
											 <input type="radio" name="post_date_confirm" value="no" class="noborder" checked=""> פוסט זה רישום על
											 <input type="text" class="text date_p" style="width:100px;"  name="post_date" value="<?php echo date('d-m-Y',strtotime($data_post['post_date']));?>"> 
										 </div>
										 <br>
									<?php }
									 ?>
									  <?php 
									  if($data_post['post_date_confirm']=='no' AND $data_post['post_date'] == '2020-02-20'  )
									  { ?>
										  <input type="radio" name="post_date_confirm" id="post_now" value="yes" class="noborder">    פרסם את הרישום הזה עכשיו<br />
										  <br />
										  <div style="float:left;">
											<input type="radio" name="post_date_confirm" id="post_later1" value="no" class="noborder"> פוסט זה רישום על
											<input type="text" class="text date_p" id="post_later2" style="width:100px;" name="post_date" disabled=""> 
										  </div>
										  <div class="clearfix"></div><br />
										  <input type="radio" name="post_date_confirm" id="post_save" value="no" class="noborder" checked=""> אל תפרסמו חברה , לשמור כקובץ רישום שכורה לשימוש עתידי .
									 <?php }
									  ?>
									
										<!-- <b>Vacancy Listing Status:</b> New Listing <br><br>
										<input type="radio" name="post_date_confirm" value="yes" class="noborder">	Post this listing now<br />
										<br />
										<div style="float:left;">
											<input type="radio" name="post_date_confirm" value="no" class="noborder"> Post this listing on
											<input type="text" class="text date_p" style="width:100px;"  name="post_date"> 
										</div>
										<div class="clearfix"></div><br />
										<input type="radio" name="post_date_confirm" value="no" class="noborder"> Do not post now, save as rented listing for future use. -->
								</td>
					
				</tr>
				<tr valign="top">
                    <td colspan="2">
                        <input type="submit" class="btn btn-info" value="עדכון">
                    </td>
                </tr>

    			
    				<tr valign="top" class="sign-request-wrapper">
    					<td colspan="2">
    						<div class="grayline"></div>
    						<h3>9. קבל חינם ' להשכרה ' Sign</h3>
    					</td>
    				</tr>

    				
    				<form action="update_post_driver.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="pid" value="<?php echo $post_id; ?>">
        				<tr valign="top" class="sign-request-wrapper">
        					<td colspan="2" style="float:right">
        						<div style="font-size: 18px; float: left; width: auto;">
        							
        															
        								
        								<input type="checkbox" id="signRequest" name="for_rent_check1" value="Yes" class="noborder" <?php if($data_post['for_rent_check1']=='Yes'){ echo 'checked'; } ?>>
        							
        							
        							 &nbsp;<b>חופשי <span style="color:red;">להשכרה</span> סִימָן</b> - נו נוסיף גדול " להשכרה" סימן ( כמו אחד מימין) מחוץ הנכס שלך . השתמש בשדה "הוראות התקן " למטה כדי לספק את כל הוראות לנהג שלנו . <br />
    							<br /><b>הוראות התקן :</b> <span class="smallgray">(למשל - היכנס מקום בחצר הקדמית )</span><br />
        							<textarea class="mb" name="driver_instr" style="width:auto;height:100px;"><?php echo $data_post['driver_instr']; ?></textarea>
        						</div>
        						<div style="float: left; width: 130px;">
        							<!-- <img src="http://static.westsiderentals.com/images/sign_m.gif" style="border: 1px solid black;"> -->
        						</div>
        						<div class="clearboth"></div>
        					</td>
        				</tr>
                         <!-- <tr valign="top">
            				<td colspan="2">
            					<div style="margin:10px 0px;width: 600px; height:100px;overflow:auto;border:1px solid #A9A9A9; background: #efefef; padding:0px 8px 8px 8px;">
            						<h3>Fair Housing Act Notice</h3>
            						All submissions are subject to the federal and California fair housing laws which make it illegal to indicate in any advertisement &quot;any preference, limitation, or discrimination because of race, color, religion, sex, physical or mental disability, familial status&quot; (e.g. &quot;No children&quot; or &quot;Not suitable for Children&quot;), sexual orientation, ancestry, marital status, or source of income (e.g. &quot;No Section 8&quot; is prohibited). Your local jurisdiction may impose additional requirements. <br />
            						<br />
            						If you have questions about the fair housing laws and housing discrimination, please call the Southern California Housing Rights Center (formerly the Fair Housing Council of San Gabriel Valley) at (800) 477-5977 or go to HRCâ€™s website at <A href="http://www.hrc-la.org" target="_blank">www.hrc-la.org</a>.
            					</div>
            					<input type="Checkbox" value="Yes" name="for_rent_check2" class="noborder" checked="checked"> &nbsp; I have read and agree to the terms of the Fair Housing Act
            				</td>
            			</tr> -->
                        <tr valign="top" class="sign-request-wrapper">
                            <td colspan="2">
                                <input type="submit" class="btn btn-info" value="עדכון">
                            </td>    
                        </tr>

                    </form>

    			
    					
    				<!-- 					
    					<tr valign="top">
    						<td colspan="2">
    							<div class="grayline"></div>
    							<h3>10. Choose Distribution</h3>
    						</td>
    					</tr>

    					<tr valign="top">
    						<td colspan="2">

    							
    								<b>PashutLeHaskir.com leverages strategic partnerships with other listing services around the web, providing additional exposure to your listing so that we may find you the right tenant quickly and efficiently. Please select below where you would like your listings displayed.  
    								
    								<br /> 
    							
    							</td>
    					</tr>
    				
    				


    				<tr valign="top">
    					<td colspan="2">
    						<div class="row">
    							 <form action="update_distribution.php" method="POST" >
                                    <input type="hidden" name="pid" value="<?php echo $post_id; ?>">
    									<div class="col-md-3">
    										<input type="checkbox" id="label_LA Weekly" class="small" style="position:relative;top:5px;" name="la_weekly" value="yes" <?php if($data_post['la_weekly']=='yes'){ echo 'checked'; } ?> >
    										&nbsp;<label for="label_LA Weekly">LA Weekly</label>
    									</div> 
    									 
    									<div class="col-md-3">
    										<input type="checkbox" id="label_Downtown News" class="small" style="position:relative;top:5px;" name="downtown_news" value="yes" <?php if($data_post['downtown_news']=='yes'){ echo 'checked'; } ?> >
    										&nbsp;<label for="label_Downtown News">Downtown News</label>
    									</div> 
    									 
    									<div class="col-md-3">
    										<input type="checkbox" id="label_Zumper" class="small" style="position:relative;top:5px;" name="zumper" value="yes" <?php if($data_post['zumper']=='yes'){ echo 'checked'; } ?> >
    										&nbsp;<label for="label_Zumper">Zumper</label>
    									</div> 
    									 
    									<div class="col-md-3">
    										<input type="checkbox" id="label_Vast" class="small" style="position:relative;top:5px;" name="vast" value="yes" <?php if($data_post['vast']=='yes'){ echo 'checked'; } ?> >
    										&nbsp;<label for="label_Vast">Vast</label>
    									</div> 
    									 
    									<div class="col-md-3">
    										<input type="checkbox" id="label_Santa Monica Daily Press" class="small" style="position:relative;top:5px;" name="daily_press" value="yes" <?php if($data_post['daily_press']=='yes'){ echo 'checked'; } ?> >
    										&nbsp;<label for="label_Santa Monica Daily Press">Daily Press</label>
    									</div> 
    									 
    									<div class="col-md-3">
    										<input type="checkbox" id="label_Oodle" class="small" style="position:relative;top:5px;" name="oodle" value="yes" <?php if($data_post['oodle']=='yes'){ echo 'checked'; } ?> >
    										&nbsp;<label for="label_Oodle">Oodle</label>
    									</div> 
    									 
    									<div class="col-md-3">
    										<input type="checkbox" id="label_Live Lovely" class="small" style="position:relative;top:5px;" name="live_lovely" value="yes" <?php if($data_post['live_lovely']=='yes'){ echo 'checked'; } ?> >
    										&nbsp;<label for="label_Live Lovely">Live Lovely</label>
    									</div> 
    									 
    									<div class="col-md-3">
    										<input type="checkbox" id="label_Google Base" class="small" style="position:relative;top:5px;" name="google_base" value="yes" <?php if($data_post['google_base']=='yes'){ echo 'checked'; } ?> >
    										&nbsp;<label for="label_Google Base">Google Base</label>
    									</div> 
    									 
    									<div class="col-md-3">
    										<input type="checkbox" id="label_Canyon News" class="small" style="position:relative;top:5px;" name="canyon_news" value="yes" <?php if($data_post['canyon_news']=='yes'){ echo 'checked'; } ?> >
    										&nbsp;<label for="label_Canyon News">Canyon News</label>
    									</div> 
    									 
    									<div class="col-md-3">
    										<input type="checkbox" id="label_San Diego Reader" class="small" style="position:relative;top:5px;" name="reader" value="yes" <?php if($data_post['reader']=='yes'){ echo 'checked'; } ?> >
    										&nbsp;<label for="label_San Diego Reader">San Diego Reader</label>
    									</div> 
    									 
    									<div class="col-md-3">
    										<input type="checkbox" id="label_Walkscore" class="small" style="position:relative;top:5px;" name="walkscore2" value="yes" <?php if($data_post['walkscore2']=='yes'){ echo 'checked'; } ?> >
    										&nbsp;<label for="label_Walkscore">Walkscore</label>
    									</div> 
    									 
    									<div class="col-md-3">
    										<input type="checkbox" id="label_Renthop" class="small" style="position:relative;top:5px;" name="renthop" value="yes" <?php if($data_post['renthop']=='yes'){ echo 'checked'; } ?> >
    										&nbsp;<label for="label_Renthop">Renthop</label>
    									</div> 
                                    <br>
    							     <div class="row">
                                         <div class="col-md-3 col-md-offset-4">
                                             <input type="submit" class="btn btn-info" value="עדכון">
                                         </div>
                                     </div>

                                </form>		
    						</div>
    					</td>
    				</tr>
 -->
    				

    			<!-- <tr valign="top">
    				<td colspan="2">
    					<br /><br />
    					<div class="marg_right_20 fleft">
    						<input type="submit" name="submit_button" id="save_submit" class="btn_submit btn_submit_prop" value="Save & Upload Photos" />
    						
    						<input type="submit" id="save_submit2" class="btn_submit btn_submit_prop" value="Save" />
    					</div>
    					<div class="clearboth"></div>
    					<div id="trytomapnote" class="marg_top_5 fleft" style=""><span class="smallred">Note: Please try to Map your property before submitting this vacancy.</span></div>
    					<div class="clearboth"></div>
    				</td>
    			</tr> -->
    		</table>

    		
    		

    		
    
    	</div>
    	</div>
    </div>




    </div>  <!-- End main container div -->
	
	
	<!-- FOOTER -->
<?php
	include("footer_h.php");
?>
		 
	
	
	<!-- Bootstrap core JavaScript
	
	<!-- Placed at the end of the document so the pages load faster -->
	
	
		
		
	
	
	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	 <script type="text/javascript" src="../js/jquery.min.js"></script>      
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
        




     










  <script type="text/javascript">
    $(document).ready(function(){
        var t=$('#no_id').val();
        // alert(t);
        var i=parseInt(t);
        $("#add_roww").click(function(){
            if(i<14)
            {   
            $('#addrr'+i).html("<td>"+ (i+1) +"</td><td><input  name='image[]' type='file'  class='form-control input-md'></td>");
            $('#tab_logicc').append('<tr id="addrr'+(i+1)+'"></tr>');
            i++;
            } 
        });
        $("#delete_roww").click(function(){
            if(i>t)
            {
                $("#addrr"+(i-1)).html('');
                i--;
            }
        });
    });
  </script> 

    <script type="text/javascript">
        $(document).ready(function(){
            $('#fl').click(function(){
                if($(this).prop("checked") == true){
                    $('#fl_box').slideDown(1000);
                }
                else if($(this).prop("checked") == false){
                    $('#fl_box').slideUp(1000);
                }
            });
        });
    </script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#fill_form").click(function(){
            var member_id=$("#member_id").val();
            // alert(member_id);
            $.post("fill_form.php", { form_id : member_id}, function(data){
                var alldata = $.parseJSON(data);
                $('#name').val(alldata.first_name);
                $('#contact_a').val(alldata.mem_phone_a);
                $('#contact_b').val(alldata.mem_phone_b);
                $('#contact_c').val(alldata.mem_phone_c);
            });
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#select_vacancy').click(function(){
            var evy=$('#existing_vacancy').val();
            $.post("fill_form.php", { evy : evy}, function(data){
                var alldata = $.parseJSON(data);
                $('#structure_type').val(alldata.structure_type);
                $('#unit_detail').val(alldata.unit_detail);
                $('#listing_type').val(alldata.listing_type);
                $('#unit_type').val(alldata.unit_type);
                $('#unit_no').val(alldata.unit_no);
                $('#bedroom').val(alldata.bedroom);
                $('#bathroom').val(alldata.bathroom);
                $('#square_footage').val(alldata.square_footage);
                $('#rent').val(alldata.rent);
                $('#deposit').val(alldata.deposit);
                $('#address').val(alldata.address);
                $('#city').val(alldata.city);
                $('#walkscore').val(alldata.walkscore);
                $('#soundscore').val(alldata.soundscore);
                $('#vehicle_noise').val(alldata.vehicle_noise);
                $('#business_noise').val(alldata.business_noise);
                $('#lease_type').val(alldata.lease_type);
                $('#floor').val(alldata.floor);
                $('#parking').val(alldata.parking);
                $('#parking_space').val(alldata.parking_space);
                $('#school_district').val(alldata.school_district);
                $('#open_house').val(alldata.open_house);
                $('#state').val(alldata.state);
                $('#walkscore_descrp').val(alldata.walkscore_descrp);
                $('#soundscore_descrp').val(alldata.soundscore_descrp);
                $('#airport_noise').val(alldata.airport_noise);
            });

        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#post_now").click(function(){
            var date = $.datepicker.formatDate('yy-mm-dd', new Date());
            $("#post_later2").prop('disabled', false);
            $("#post_later2").val(date);
            $("#post_later2").attr("hidden","hidden");
            // $("#post_later2").attr("hidden","hidden");
        });
        $("#post_later1").click(function(){
            $("#post_later2").removeAttr("hidden","hidden");
            $("#post_later2").val("");
            $("#post_later2").prop('disabled', false);
        });
        $("#post_save").click(function(){
            $("#post_later2").prop('disabled', true);
            $("#post_later2").val('');
        });
    });
</script>


    <link rel="stylesheet" href="../css/jquery-ui.css">
    <script src="../js/jquery-ui.js"></script>
    <script>
     $(function() 
     {   $( ".date_p" ).datepicker({
             changeMonth:true,
             changeYear:true,
             yearRange:"-100:+0",
              minDate: 0,
             dateFormat:"dd-mm-yy" });
     });
     </script>


    
   





    <link rel="stylesheet" href="../themes/base/jquery.ui.all.css">
     <link rel="stylesheet" href="../css/demo.css">
     <script src="https://maps.google.com/maps/api/js?key=AIzaSyACWUZ9OL8BQVQC-4cSsSFmEo71SLDzvlk&sensor=false&language=he"></script>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
     <script src="../js/jquery.ui.addresspicker.js"></script>
     <script>
     $(function() {
		var latituteee=$('#latituteee').val(); 
		var greatituteee=$('#greatituteee').val(); 
		var zomee=$('#zomeee').val(); 
		var z=parseInt(zomee);
       var addresspicker = $( "#addresspicker" ).addresspicker({
         componentsFilter: 'country:FR'
       });
       var addresspickerMap = $( "#addresspicker_map" ).addresspicker({
         regionBias: "fr",
         language: "he",
         updateCallback: showCallback,
         mapOptions: {
           zoom: z,
           center: new google.maps.LatLng(latituteee, greatituteee),
           scrollwheel: false,
           mapTypeId: google.maps.MapTypeId.ROADMAP
         },
         elements: {
           map:      "#map",
           lat:      "#lat",
           lng:      "#lng",
           street_number: '#street_number',
           route: '#route',
           locality: '#locality',
           sublocality: '#sublocality',
           administrative_area_level_3: '#administrative_area_level_3',
           administrative_area_level_2: '#administrative_area_level_2',
           administrative_area_level_1: '#administrative_area_level_1',
           country:  '#country',
           postal_code: '#postal_code',
           type:    '#type'
         }
       });

       var gmarker = addresspickerMap.addresspicker( "marker");
       gmarker.setVisible(true);
       addresspickerMap.addresspicker( "updatePosition");

       $('#reverseGeocode').change(function(){
         $("#addresspicker_map").addresspicker("option", "reverseGeocode", ($(this).val() === 'true'));
       });

       function showCallback(geocodeResult, parsedGeocodeResult){
         $('#callback_result').text(JSON.stringify(parsedGeocodeResult, null, 4));
       }
       // Update zoom field
       var map = $("#addresspicker_map").addresspicker("map");
       google.maps.event.addListener(map, 'idle', function(){
         $('#zoom').val(map.getZoom());
       });

     });
     </script>


 <link rel="stylesheet" href="../css/validationEngine.jquery.css">
     <script src="../js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
     <script src="../js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
     <script type="text/javascript">
        $(document).ready(function(){
            $("#contact_info").validationEngine();
        });
        $(function() {
            $('.numberonly').keyup(function() {
                if (this.value.match(/[^0-9]/g)) {
                    this.value = this.value.replace(/[^0-9]/g, '');
                }
            });
        });

        $(document).ready(function(){
            // alert('hi');
            $("#image_a").validationEngine();
        });

        $(document).ready(function(){
            // alert('hi');
            $("#image_b").validationEngine();
        });

        $(document).ready(function(){
            // alert('hi');
            $("#image_c").validationEngine();
        });

        $(document).ready(function(){
            // alert('hi');
            $("#image_d").validationEngine();
        });

        $(document).ready(function(){
            // alert('hi');
            $("#image_e").validationEngine();
        });

        $(document).ready(function(){
            // alert('hi');
            $("#image_f").validationEngine();
        });

        $(document).ready(function(){
            // alert('hi');
            $("#image_add").validationEngine();
        });

        $(document).ready(function(){
            // alert('hi');
            $("#vacancy_feature").validationEngine();
        });

        $(document).ready(function(){
            // alert('hi');
            $("#vacancy_descp").validationEngine();
        });
     </script>
