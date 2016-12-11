<?php
include("../functions/function.php");
include('check_login.php');
if($_SESSION['language']=='Hebrew')
{
	$getto='';
	foreach($_GET as $key=>$val)
	{
		$getto.=$key.'='.$val.'&';
	}
	echo "<script>location.href='add_post_h.php?$getto'</script>";
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


$que_post="SELECT * FROM post INNER JOIN structure_type on post.structure_type=structure_type.struct_id  WHERE member_id='$member_id' ";
$obj_post= mysqli_query($conn,$que_post);

$time_array = get_time_array();
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
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.0.1/fullcalendar.min.css">
</head>


<body  class="guest" >
	
	<?php
		include('header.php');
	?>

    <!-- Carousel
    ================================================== -->
    	<div class="container">



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
    		<h2 style="margin-bottom:0px;">Let us do the work for you!</h2>
            <div class="container-fluid">
                
    		</div> 
            <nav class="navbar navbar-default dash-nav" role="navigation">
    			<div class="navbar-header">
    				<span class="title">Add New Listing</span> 
    				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-2">
    				  <span class="sr-only">Toggle navigation</span>
    				  <span class="icon-bar"></span>
    				  <span class="icon-bar"></span>
    				  <span class="icon-bar"></span>
    				</button>
    			  </div>
    		
    			<div class="collapse navbar-collapse" id="navbar-collapse-2">
    				<ul class="nav navbar-nav list-inline dash-nav">
    					<li class="">
    						<a href="dashboard.php">
    							Home
    						</a>
    					</li>
    					<!-- <li class="">
    						<a href="/landlords/alertedit.cfm">
    							Email &amp; Text Alerts
    						</a>
    					</li> -->
    					
    					<li class="selected">
    						<a href="add_post2.php">
    							Add New Listing
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
    			
    		

    		
<!--    		<div class="exitingListingBlock">-->
<!--    			<h3>Copy Details From Existing Vacancy</h3>-->
<!--    			<div>You can fill out vacancy details like location, features etc from existing vacancy. Choose a previously entered vacancy by selecting it from the drop down below and clicking <b>SELECT</b> button.</div>-->
<!--    			<br />  -->
<!--    -->
<!--    			<select id="existing_vacancy">-->
<!--    				<option value="">-Please Select-</option>-->
<!--                    --><?php
//                    while($data_post=mysqli_fetch_assoc($obj_post))
//                    { ?>
<!--                        <option value="--><?php //echo $data_post['post_id']; ?><!--">--><?php //echo $data_post['name_en'];?><!--</option>-->
<!--                  --><?php // }
//                    ?>
<!--    			</select>-->
<!--    			<button style="color:#555;font-weight:bold;padding:7px 15px;" id="select_vacancy">SELECT</button>-->
<!--    			-->
<!--    		</div>-->
    		

    		<form action="save_post.php" method="post" name="propForm" id="propForm" enctype="multipart/form-data">
    			   		

    		      <table class="table_type_4" cellspacing="0" cellpadding="0" border="0">
    			<tr valign="top">
    				<td colspan="2">
    					<h3>1. Vacancy Location</h3>
    					<div class="smallgray">Please enter your vacancy address below and Map it by clicking the link "Map It!". It will help us to find Maps and other useful features for your vacancy.</div>
    				    <div>
                                 <div class="col-md-6">
                                <div class='input input-positioned'>
                                    <div class="row">
                                        <label class="col-md-4">Address : </label> 
                                        <div class="col-md-6">
                                            <input id="addresspicker_map" />   
                                        </div>  
                                    </div>
                                    <div class="row">
                                        <label class="col-md-4">Locality: </label> 
                                        <div class="col-md-6">
                                            <input id="locality" disabled=disabled> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-4">District: </label>
                                        <div class="col-md-6">
                                            <input id="administrative_area_level_2" disabled=disabled> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-4">State/Province: </label> 
                                        <div class="col-md-6">
                                            <input id="administrative_area_level_1" disabled=disabled>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-4">Country:  </label>
                                        <div class="col-md-6">
                                            <input id="country" disabled=disabled>
                                        </div>  
                                    </div>
                                    <div class="row">
                                        <label class="col-md-4">Postal Code: </label> 
                                        <div class="col-md-6">
                                            <input id="postal_code" disabled=disabled>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-4">Lat:</label> 
                                        <div class="col-md-6">
                                            <input type="text" name="property_lat" id="lat" class="form-control" readonly=""> 
                                        </div>
                                    </div>  
                                    <div class="row">
                                        <label class="col-md-4">Lng:</label> 
                                        <div class="col-md-6">
                                            <input type="text" name="property_lng" id="lng" class="form-control" readonly="">
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <label class="col-md-4">Zoom:</label>
                                        <div class="col-md-6">
                                            <input type="text" name="property_zoom" id="zoom" class="form-control" readonly="">
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <label class="col-md-4">Type:</label> 
                                        <div class="col-md-6">
                                            <input id="type" disabled=disabled />
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class='map-wrapper'>
                                        <div id="map"></div>
                                        <div id="legend"><p>You can drag and drop the marker to the correct location</p></div>
                                    </div>
                                </div>
                        </div>
                    </td>
    			</tr>

    			

    			<tr valign="top">
    				<td colspan="2">
    					<div class="grayline"></div>
    					<h3>2.  Contact Information</h3>
    					<div class="smallgray">The contact information below will appear on your vacancy listing and will be visible to tenants. </div>
    					<div class="marg_top_5"><a href="#fill_form" id="fill_form">Fill the contact information with your account information.</a></div>
    				</td>
    			</tr>
                <input type="hidden" id="member_id" value="<?php echo $member_id; ?>">
    			<tr valign="top">
    				<td class="subheader">
    					Contact Name:
    				</td>
    				<td class="field">
    					<input type="text" class="input validate[required] text" name="name" id="name" size="50" maxlength="100" >
    				</td>
    			</tr>
    			<tr valign="top">
    				<td class="subheader">
    					Contact Phone:
    				</td>
    				<td class="">
                        <input type="text" class="input validate[required,custom[number]] numberonly text quater" name="contact_a" id="contact_a"  maxlength="3">
    					<input type="text" class="input validate[required,custom[number]] numberonly text quater" name="contact_b" id="contact_b" value="" maxlength="3">
    					<input type="text" class="input validate[required,custom[number]] numberonly text quater" name="contact_c" id="contact_c"  value="" maxlength="4"><span style="font-size:16px;color:#C30">*</span>
    					&nbsp;&nbsp;<span style="position:relative;top:4px;">Ext.</span> <input type="text" class="numberonly text smalltext" name="contact_d"  value="" maxlength="10">

						<input type="hidden" class="numberonly text quater input" name="alt_contact_a" value="" maxlength="3">
						<input type="hidden" class="numberonly text quater input" name="alt_contact_b" value="" maxlength="3">
						<input type="hidden" class="numberonly text quater input" name="alt_contact_c"  value="" maxlength="4">
                    </td>
    			</tr>

    			<tr valign="top">
    				<td class="subheader">
    					Contact Fax:
    				</td>
    				<td class="field">
                        <input type="text" class="numberonly text quater smalltext input" name="contact_fax_a" maxlength="3">
    					<input type="text" class="numberonly text quater smalltext input" name="contact_fax_b"  value="" maxlength="3" > 
    					<input type="text" class="numberonly text quater input" name="contact_fax_c" value="" maxlength="4" >
                    </td>
    			</tr>
    			<tr valign="top">
    				<td class="subheader">
    					Contact Email:
    				</td>
    				<td class="field">
    					<input type="text" class="input validate[required,custom[email]] text" name="email" size="50" maxlength="100" value="">
    				</td>
    			</tr>
    			<!-- <tr valign="top">
    				<td class="subheader">
    					BRE Number:
    				</td>
    				<td class="field">
    					<input type="text" class="text" name="bre_number" size="20" maxlength="50" value="">
    				</td>
    			</tr> -->


    			<tr valign="top">
    				<td colspan="2">
    					<div class="grayline"></div>
    					<h3>3. Vacancy Features</h3>
    				</td>
    			</tr>

    			<tr valign="top">
    				<td colspan="2">
    					<div class="">	
    						<div class="col-md-4">					
    						
    								<table style="width:auto;" cellspacing="0" cellpadding="0" border="0">
    									<tr valign="top">
    										<td class="medsubheader">
    											Structure Type:
    										</td>
											<td class="field">
    											<select id="structure_type" name="structure_type">
													<option value="">Select</option>
													<?php
													$structQ='SELECT * FROM structure_type';
													$structR=mysqli_query($conn,$structQ);
													while($row=mysqli_fetch_assoc($structR))
													{	
													?>
													<option value="<?php echo $row['struct_id'];?>"><?php echo $row['name_en'];?></option>
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
    											<input type="text" class="text" name="unit_detail" id="unit_detail" maxlength="5" >
    		                                    <img src="../images/info.gif" border="0" align="absmiddle" class=""/>
                                            </td>
    									</tr> -->
    									<tr valign="top">
    										<td class="medsubheader">
    											Listing Type:
    										</td>
    										<td class="field">
    											<select name="listing_type" id="listing_type" class="input validate[required] ">
                                                    <option value="">Select</option>
                                                    <?php
													$listQ='SELECT * FROM listing_type';
													$listR=mysqli_query($conn,$listQ);
													while($row=mysqli_fetch_assoc($listR))
													{	
													?>
													<option value="<?php echo $row['list_id'];?>"><?php echo $row['listing_type'];?></option>
													<?php
													}
													?>
                                                </select>
                                                <span style="font-size:16px;color:#C30">*</span>
    										</td>
    									</tr>
    									<tr valign="top">
    										<td class="medsubheader">
    											Unit Type:
    										</td>
    										<td class="field">
    											<select name="unit_type" id="unit_type" class="input validate[required] ">
                                                    <option value="">Select</option>
                                                    <?php
                                                    while($data_unit=mysqli_fetch_assoc($obj_unit))
                                                    { ?>
                                                        <option value="<?php echo $data_unit['id'];?>"><?php echo $data_unit['unit_type'];?></option>
                                                   <?php }
                                                    ?>
                                                </select>
                                                <span style="font-size:16px;color:#C30">*</span>
    										</td>
    									</tr>
    									<tr valign="top">
    										<td class="medsubheader">
    											Unit Number:
    										</td>
    										<td class="field">
    											<input type="text" class="text" style="width:40px;" name="unit_no" id="unit_no" maxlength="20"> 
    		                                      <img src="../images/info.gif" border="0" align="absmiddle" class=""/>
    	<!--  <input type="checkbox" class="noborder" name="dontshowunitno" value="1" > <span style="font-size: 10px;">Do not show to Members</span> -->
    										</td>
    									</tr>
    									<tr valign="top">
    										<td class="medsubheader">
    											Bedrooms:
    										</td>
    										<td class="field">
    											<select name="bedroom" id="bedroom" class="input validate[required] ">
                                                    <option value="">Select</option>
                                                    <?php
                                                    while($data_bedroom=mysqli_fetch_assoc($obj_bedroom))
                                                    { 
													?>
                                                        <option value="<?php echo $data_bedroom['id']; ?>"><?php echo $data_bedroom['bedroom']; ?></option>
													<?php 
													}
                                                    ?>
                                                </select>
                                                <span style="font-size:16px;color:#C30">*</span>
    										</td>
    									</tr>
    									<tr valign="top">
    										<td class="medsubheader">
    											Bathrooms:
    										</td>
    										<td class="field">
    											<select name="bathroom" id="bathroom" class="input validate[required] ">
                                                    <option value="">Select</option>
													<?php
                                                    while($data_bath=mysqli_fetch_assoc($obj_bath))
                                                    { 
													?>
                                                        <option value="<?php echo $data_bath['id'];?>"><?php echo $data_bath['bath'];?></option>
													<?php 
													}
                                                    ?> 
                                                </select>
                                                <span style="font-size:16px;color:#C30">*</span>
    										</td>
    									</tr>
    									<tr valign="top">
    										<td class="medsubheader">
    											Furnished:
    										</td>
    										<td class="field">
    											<select name="furnished" id="furnished" class="input validate[required] ">
                                                    <option value="">Select</option>
													<?php
													$FurQ='SELECT * FROM furnished';
													$FurR=mysqli_query($conn,$FurQ);
													while($row=mysqli_fetch_assoc($FurR))
													{	
													?>
													<option value="<?php echo $row['id'];?>"><?php echo $row['furnished'];?></option>
													<?php
													}
													?>
                                                </select>
                                                <span style="font-size:16px;color:#C30">*</span>
    										</td>
    									</tr>
    									<tr valign="top">
    										<td class="medsubheader">
    											Pets:
    										</td>
    										<td class="field">
    											<select name="pet" id="pet">
													<?php
													$PetQ='SELECT * FROM pets';
													$PetR=mysqli_query($conn,$PetQ);
													while($row=mysqli_fetch_assoc($PetR))
													{	
													?>
													<option value="<?php echo $row['id'];?>"><?php echo $row['pets'];?></option>
													<?php
													}
													?>
                                                </select>
                                                <span style="font-size:16px;color:#C30">*</span>
    										</td>
    									</tr>
    									<tr valign="top">
    										<td class="medsubheader">
    											Meters:
    										</td>
    										<td class="field">
    											<input type="text" class="text" style="width:180px;" id="square_footage" name="square_footage" >
    										</td>
    									</tr>
                                        <tr valign="top">
                                            <td class="medsubheader">
                                               City:
                                            </td>
                                            <td class="field">
                                                <select name="city" id="city" class="input validate[required] form-control">
                                                    <option value="">Select</option>
                                                    <?php
                                                        foreach($data_city2 as $data_city)
                                                        { ?>
                                                            <option value="<?php echo $data_city['city_id'];?>"><?php echo $data_city['city_name'];?></option>
                                                    <?php }
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
                                                    <option value="">Select</option>
                                                    <?php
													$WalkQ='SELECT * FROM walkscore';
													$WalkR=mysqli_query($conn,$WalkQ);
													while($row=mysqli_fetch_assoc($WalkR))
													{	
													?>
													<option value="<?php echo $row['id'];?>"><?php echo $row['walkscore'];?></option>
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
                                                    <option value="">Select</option>
                                                    <?php
													$SoundQ='SELECT * FROM soundscore';
													$SoundR=mysqli_query($conn,$SoundQ);
													while($row=mysqli_fetch_assoc($SoundR))
													{	
													?>
													<option value="<?php echo $row['id'];?>"><?php echo $row['soundscore'];?></option>
													<?php
													}
													?>
                                               </select>
                                                <span style="font-size:16px;color:#C30">*</span>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td class="medsubheader">
                                               Vehicle Noise:
                                            </td>
                                            <td class="field">
                                               <select name="vehicle_noise" id="vehicle_noise" class="input validate[required] form-control">
                                                    <option value="">Select</option>
                                                    <?php
													$VNQ='SELECT * FROM vehicle_noise';
													$VNR=mysqli_query($conn,$VNQ);
													while($row=mysqli_fetch_assoc($VNR))
													{	
													?>
													<option value="<?php echo $row['id'];?>"><?php echo $row['vehicle_noise'];?></option>
													<?php
													}
													?>
                                               </select>
                                                <span style="font-size:16px;color:#C30">*</span>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td class="medsubheader">
                                               Businesses:
                                            </td>
                                            <td class="field">
                                               <select name="business_noise" id="business_noise" class="input validate[required] form-control">
                                                <option value="">Select</option>
                                                 <?php
													$BuisQ='SELECT * FROM businesses';
													$BuisR=mysqli_query($conn,$BuisQ);
													while($row=mysqli_fetch_assoc($BuisR))
													{	
													?>
													<option value="<?php echo $row['id'];?>"><?php echo $row['businesses'];?></option>
													<?php
													}
													?>
                                               </select>
                                                <span style="font-size:16px;color:#C30">*</span>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td class="medsubheader">
                                               Featured Listing:
                                            </td>
                                            <td class="field">
                                                <input type="checkbox" name="featured_listing" id="fl" value="Yes" class="small" style="position:relative;top:-3px;" >
                                            </td>
                                        </tr>
                                        
    								</table>
    							</div>
    							<div class="col-md-6">
    								<table style="width:auto;" cellspacing="0" cellpadding="0" border="0">
    									<tr valign="top">
    										<td class="medsubheader" >
    											Rent:
    										</td>
    										<td class="field">
    											₪<input type="text" class="input validate[required] numberonly text" style="width:60px;" id="rent" name="rent" maxlength="10" > 
    		
                                                <img src="../images/info.gif" border="0" align="absmiddle" class=""/></a>
    	
    										</td>
    									</tr>
    									<tr valign="top">
    										<td class="medsubheader">
    											Deposit:
    										</td>
    										<td class="field">
    											₪<input type="text" class="input validate[required] numberonly text" style="width:100px;" id="deposit" name="deposit" maxlength="50">
    										</td>
    									</tr>
    									<tr valign="top">
    										<td class="medsubheader">
    											Lease:
    										</td>
    										<td class="field">											
    											<select name="lease_type" id="lease_type" class="input validate[required]">
    												<option value="">Select</option>
    												<?php
    												    while($data_lease=mysqli_fetch_assoc($obj_lease))
                                                        { ?>
                                                            <option value="<?php echo $data_lease['id']; ?>"><?php echo $data_lease['lease_type']; ?></option>    
                                                    <?php    }	
    											     ?>		
    											</select>
    										</td>
    									</tr>
    									<tr valign="top">
    										<td class="medsubheader">
    											Available Date:
    										</td>
    										<td class="field">
    											<!-- <select name="availmo"><option value=""></option><option value="1" >Jan</option><option value="2" >Feb</option><option value="3" >Mar</option><option value="4" >Apr</option><option value="5" >May</option><option value="6" >Jun</option><option value="7" >Jul</option><option value="8" >Aug</option><option value="9" >Sep</option><option value="10" >Oct</option><option value="11" >Nov</option><option value="12" >Dec</option></select><input type="hidden" name="reqFld" value="1" >&nbsp;/&nbsp;<select name="availday"><option value=""></option><option value="1" >1</option><option value="2" >2</option><option value="3" >3</option><option value="4" >4</option><option value="5" >5</option><option value="6" >6</option><option value="7" >7</option><option value="8" >8</option><option value="9" >9</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option></select><input type="hidden" name="reqFld" value="1" >&nbsp;/&nbsp;<select name="availyr"><option value=""></option><option value="2016" >2016</option><option value="2017" >2017</option></select> <input type="hidden" name="reqFld" value="1" ><span style="font-size:16px;color:#C30">*</span> <span style="font-size: 10px;">(<A href="javascript:availToday()">Now</A>)</span>  -->
   		                                      <input type="text" class="input validate[required] text date_p" style="width:180px;" name="availability" maxlength="500" >
                                                <img src="../images/info.gif" border="0" align="absmiddle" class=""/>
    	                                   </td>
    									</tr>
    									<tr valign="top">
    										<td class="medsubheader">
    											Floors:
    										</td>
    										<td class="field">
    											<select name="floor" id="floor" class="input validate[required]" style="width: 184px;">
    												<option value="">Select</option>
    											     <?php
                                                     while($data_floor=mysqli_fetch_assoc($obj_floor))
                                                     { ?>
                                                        <option value="<?php echo $data_floor['id']; ?>"><?php echo $data_floor['floor']; ?></option>
                                                    <?php }
                                                     ?>	
    											</select>
    										</td>
    									</tr>
    									<tr valign="top">
    										<td class="medsubheader">
    											Parking Type:
    										</td>
    										<td class="field">
    											<select name="parking" id="parking" class="input validate[required]">
    												<option value="">Select</option>
    											     <?php
                                                     while($data_parking=mysqli_fetch_assoc($obj_parking))
                                                     { ?>
                                                        <option value="<?php echo $data_parking['id'];?>"><?php echo $data_parking['parking'];?></option>
                                                 <?php }
                                                     ?>	
    											</select>
    										</td>
    									</tr>
    									<tr valign="top">
    										<td class="medsubheader">
    											Parking Spaces:
    										</td>
    										<td class="field">
    											<input type="text" class="text" style="width:30px;" id="parking_space" name="parking_space" maxlength="2">
    										</td>
    									</tr>
    									<!-- <tr valign="top">
    										<td class="medsubheader">
    											School District:
    										</td>
    										<td class="field">
    											<input type="text" class="text" style="width:180px;" name="school_district" id="school_district" maxlength="500" >
    										</td>
    									</tr> -->
    									<!-- <tr valign="top">
    										<td class="medsubheader">
    											Open House:
    										</td>
    										<td class="field">
    											<input type="text" class="text" style="width:180px;" name="open_house" id="open_house" maxlength="100" value=""> 
    		                                    <img src="../images/info.gif" border="0" align="absmiddle" class=""/>
    	                                   </td>
    									</tr> -->
                                        <tr valign="top">
                                            <td class="medsubheader">
                                               State:
                                            </td>
                                            <td class="field">
                                                <select name="state" id="state" class="input validate[required] form-control">
                                                     <?php
													$StateQ='SELECT * FROM state';
													$StateR=mysqli_query($conn,$StateQ);
													while($row=mysqli_fetch_assoc($StateR))
													{	
													?>
													<option value="<?php echo $row['id'];?>"><?php echo $row['state_name'];?></option>
													<?php
													}
													?>
                                                </select>
                                                <span style="font-size:16px;color:#C30">*</span>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td class="medsubheader">
                                               Full Address:
                                            </td>
                                            <td class="field">
                                                <textarea name="address" class="input validate[required] mb" id="address" style="width:auto;height:62px;" ></textarea>
                                                <span style="font-size:16px;color:#C30">*</span>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td class="medsubheader">
                                               Walkscore Description:
                                            </td>
                                            <td class="field">
                                                <select name="walkscore_descrp" id="walkscore_descrp" class="input validate[required] form-control">
                                                    <option value="">Select</option>
                                                    <?php
													$WalkDQ='SELECT * FROM walkscore_desc';
													$WalkDR=mysqli_query($conn,$WalkDQ);
													while($row=mysqli_fetch_assoc($WalkDR))
													{	
													?>
													<option value="<?php echo $row['id'];?>"><?php echo $row['walkscore_desc'];?></option>
													<?php
													}
													?>
                                                </select>
                                                <span style="font-size:16px;color:#C30">*</span>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td class="medsubheader">
                                               Soundscore Description:
                                            </td>
                                            <td class="field">
                                               <select name="soundscore_descrp" id="soundscore_descrp" class="input validate[required] form-control">
                                                    <option value="">Select</option>
													<?php
													$SoundDQ='SELECT * FROM soundscore_desc';
													$SoundDR=mysqli_query($conn,$SoundDQ);
													while($row=mysqli_fetch_assoc($SoundDR))
													{	
													?>
													<option value="<?php echo $row['id'];?>"><?php echo $row['soundscore_desc'];?></option>
													<?php
													}
													?>
                                               </select>
                                                <span style="font-size:16px;color:#C30">*</span>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td class="medsubheader">
                                               Airport Noise:
                                            </td>
                                            <td class="field">
                                               <select name="airport_noise" id="airport_noise" class="input validate[required] form-control">
                                                    <option value="">Select</option>
                                                   <?php
													$airQ='SELECT * FROM airport_noise';
													$airR=mysqli_query($conn,$airQ);
													while($row=mysqli_fetch_assoc($airR))
													{	
													?>
													<option value="<?php echo $row['id'];?>"><?php echo $row['airport_noise'];?></option>
													<?php
													}
													?>
                                               </select>
                                               <span style="font-size:16px;color:#C30">*</span>
                                            </td>
                                        </tr>
    								</table>
    							</div>
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
                                           <h4>Featured listings receive exclusive services, priority sorting by area with a banner over your photos, and we list the property for you! Featured Listing members also receive a higher percentage of our service fee when your property is rented! Contact our help desk for more info  <a href="mailto:info@pashutlehaskir.com">info@pashutlehaskir.com</a></h4>
                                        </td>
                                     </tr>
                                   <!--  <tr valign="top">
                                        <td class="medsubheader">
                                            Credit Card Number
                                        </td>
                                        <td class="field">
                                            <input type="text" name="f_credit_card_no" class="input validate[required] form-control" maxlength="16">
                                         </td>
                                    </tr> -->
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
                        <h3>4. Images</h3>
                    </td>
                </tr>
                <tr valign="top">
                    <td colspan="2">
                        <div class=""> 
                            <div class="col-xs-12 col-md-4">                  
                            
                                <table style="width:auto;" cellspacing="0" cellpadding="0" border="0">
                                    <tr valign="top">
                                        <td class="medsubheader">
                                           Front Image
                                        </td>
                                        <td class="field">
                                            <input type="file" name="main_image" class="input validate[required] form-control">
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <td class="medsubheader">
                                            Image 1
                                        </td>
                                        <td class="field">
                                            <input type="file" name="image1" class="input validate[required] form-control">
                                         </td>
                                    </tr>
                                    <tr valign="top">
                                        <td class="medsubheader">
                                            Image 2
                                        </td>
                                        <td class="field">
                                           <input type="file" name="image2" class="input validate[required] form-control">
                                        </td>
                                    </tr>
                                    
                                    <tr valign="top">
                                        <td class="medsubheader">
                                            Add More Images
                                        </td>
                                        <td class="field">
                                            <table class="table table-bordered table-hover" id="tab_logicc">
                                            <tbody>
                                                <tr id='addrr0'>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>
                                                        <input type="file" name="image[]" class="form-control">
                                                    </td>
                                                </tr>
                                                <tr id='addrr1'></tr>   
                                            </tbody>
                                            </table>
                                            <a id="add_roww" value='1' class="btn btn-default pull-left">Add Image</a><a id='delete_roww' class="pull-right btn btn-default">Delete Image</a>    
                                        </td>
                                    </tr>
                                 
                                </table>
                            </div>
                            <div class="col-md-6">
                                <table style="width:auto;" cellspacing="0" cellpadding="0" border="0">
                                    <tr valign="top">
                                        <td class="medsubheader" >
                                            Image 3
                                        </td>
                                        <td class="field">
                                            <input type="file" name="image3" class="input validate[required] form-control">
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <td class="medsubheader">
                                            Image 4
                                        </td>
                                        <td class="field">
                                            <input type="file" name="image4" class="input validate[required] form-control">
                                        </td>
                                    </tr>
                                    
                                    <tr valign="top">
                                        <td class="medsubheader">
                                            Image 5
                                        </td>
                                        <td class="field">
                                            <input type="file" name="image5" class="input validate[required] form-control">
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
                        <h3>5. Viewing Times</h3>
                    </td>
                </tr>
                <tr valign="top">
                    <td colspan="2">
                    <div id="calendar"></div>
                    <input type="hidden" id="calendar_events_list" name="calendar_events" value="">
                    <div id="eventContent" title="Event Details" style="display:none;">
                        Start: <span id="startTime"></span><br>
                        End: <span id="endTime"></span><br><br>
                        <p id="eventInfo"></p>
                        <a href="#" class="btn btn-danger" id="event-remove" data-eventid="false" >Remove</a>
                    </div>
                    <div id="js-event-confirm" title="Add Event" style="display:none;">
                        <div class="modal-body"></div>
                    </div><!-- /.modal -->
<!--                        <div class=""> -->
<!--                            <div class="col-md-4">                  -->
<!--                            -->
<!--                                <table style="width:auto;" cellspacing="0" cellpadding="0" border="0">-->
<!--                                    <tr valign="top">-->
<!--                                        <td class="medsubheader">-->
<!--                                           Monday-->
<!--                                        </td>-->
<!--                                        <td class="field">-->
<!--                                            <select name="mon_time_frm">-->
<!--                                                <option value="">From</option>-->
<!--                                                --><?php
//                                                foreach($data_time2 as $data_time)
//                                                { ?>
<!--                                                    <option>--><?php //echo $data_time['time']; ?><!--</option>-->
<!--                                                --><?php //}
//                                                ?>
<!--                                            </select>-->
<!--                                            <select name="mon_time_to">-->
<!--                                                <option value="">To</option>-->
<!--                                                --><?php
//                                                foreach($data_time2 as $data_time)
//                                                { ?>
<!--                                                    <option>--><?php //echo $data_time['time']; ?><!--</option>-->
<!--                                                --><?php //}
//                                                ?>
<!--                                            </select>-->
<!--                                        </td>-->
<!--                                        -->
<!--                                    </tr>-->
<!--                                    <tr valign="top">-->
<!--                                        <td class="medsubheader">-->
<!--                                           Tuesday-->
<!--                                        </td>-->
<!--                                        <td class="field">-->
<!--                                            <select name="tue_time_frm">-->
<!--                                                <option value="">From</option>-->
<!--                                                --><?php
//                                                foreach($data_time2 as $data_time)
//                                                { ?>
<!--                                                    <option>--><?php //echo $data_time['time']; ?><!--</option>-->
<!--                                                --><?php //}
//                                                ?>
<!--                                            </select>-->
<!--                                            <select name="tue_time_to">-->
<!--                                                <option value="">To</option>-->
<!--                                                --><?php
//                                                foreach($data_time2 as $data_time)
//                                                { ?>
<!--                                                    <option>--><?php //echo $data_time['time']; ?><!--</option>-->
<!--                                                --><?php //}
//                                                ?>
<!--                                            </select>-->
<!--                                         </td>-->
<!--                                    </tr>-->
<!--                                    <tr valign="top">-->
<!--                                        <td class="medsubheader">-->
<!--                                            Wednesday-->
<!--                                        </td>-->
<!--                                        <td class="field">-->
<!--                                          <select name="wed_time_frm">-->
<!--                                              <option value="">From</option>-->
<!--                                              --><?php
//                                              foreach($data_time2 as $data_time)
//                                              { ?>
<!--                                                <option>--><?php //echo $data_time['time']; ?><!--</option>-->
<!--                                              --><?php //}
//                                              ?>
<!--                                          </select>-->
<!--                                            <select name="wed_time_to">-->
<!--                                                <option value="">To</option>-->
<!--                                                --><?php
//                                                foreach($data_time2 as $data_time)
//                                                { ?>
<!--                                                    <option>--><?php //echo $data_time['time']; ?><!--</option>-->
<!--                                                --><?php //}
//                                                ?>
<!--                                            </select>-->
<!--                                        </td>-->
<!--                                    </tr>-->
<!--                                    -->
<!--                                    <tr valign="top">-->
<!--                                        <td class="medsubheader">-->
<!--                                            Thursday-->
<!--                                        </td>-->
<!--                                        <td class="field">-->
<!--                                            <select name="thu_time_frm">-->
<!--                                                <option value="">From</option>-->
<!--                                                --><?php
//                                                foreach($data_time2 as $data_time)
//                                                { ?>
<!--                                                    <option>--><?php //echo $data_time['time']; ?><!--</option>-->
<!--                                                --><?php //}
//                                                ?>
<!--                                            </select>-->
<!--                                            <select name="thu_time_to">-->
<!--                                                <option value="">To</option>-->
<!--                                                --><?php
//                                                foreach($data_time2 as $data_time)
//                                                { ?>
<!--                                                    <option>--><?php //echo $data_time['time']; ?><!--</option>-->
<!--                                                --><?php //}
//                                                ?>
<!--                                            </select>-->
<!--                                        </td>-->
<!--                                    </tr>-->
<!--                                    <tr valign="top">-->
<!--                                        <td class="medsubheader">-->
<!--                                            Friday-->
<!--                                        </td>-->
<!--                                        <td class="field">-->
<!--                                            <select name="fri_time_frm">-->
<!--                                                <option value="">From</option>-->
<!--                                                --><?php
//                                                foreach($data_time2 as $data_time)
//                                                { ?>
<!--                                                    <option>--><?php //echo $data_time['time']; ?><!--</option>-->
<!--                                                --><?php //}
//                                                ?>
<!--                                            </select>-->
<!--                                           <select name="fri_time_to">-->
<!--                                               <option value="">To</option>-->
<!--                                               --><?php
//                                               foreach($data_time2 as $data_time)
//                                               { ?>
<!--                                                <option>--><?php //echo $data_time['time']; ?><!--</option>-->
<!--                                               --><?php //}
//                                               ?>
<!--                                           </select>-->
<!--                                        </td>-->
<!--                                    </tr>-->
<!--                                    <tr valign="top">-->
<!--                                        <td class="medsubheader">-->
<!--                                            Saturday-->
<!--                                        </td>-->
<!--                                        <td class="field">-->
<!--                                            <select name="sat_time_frm">-->
<!--                                                <option value="">From</option>-->
<!--                                                --><?php
//                                                foreach($data_time2 as $data_time)
//                                                { ?>
<!--                                                    <option>--><?php //echo $data_time['time']; ?><!--</option>-->
<!--                                                --><?php //}
//                                                ?>
<!--                                            </select>-->
<!--                                           <select name="sat_time_to">-->
<!--                                               <option value="">To</option>-->
<!--                                               --><?php
//                                               foreach($data_time2 as $data_time)
//                                               { ?>
<!--                                                <option>--><?php //echo $data_time['time']; ?><!--</option>-->
<!--                                               --><?php //}
//                                               ?>
<!--                                           </select>-->
<!--                                        </td>-->
<!--                                    </tr>-->
<!--                                    <tr valign="top">-->
<!--                                        <td class="medsubheader">-->
<!--                                            Sunday-->
<!--                                        </td>-->
<!--                                        <td class="field">-->
<!--                                            <select name="sun_time_frm">-->
<!--                                                <option value="">From</option>-->
<!--                                                --><?php
//                                                foreach($data_time2 as $data_time)
//                                                { ?>
<!--                                                    <option>--><?php //echo $data_time['time']; ?><!--</option>-->
<!--                                                --><?php //}
//                                                ?>
<!--                                            </select>-->
<!--                                          <select name="sun_time_to">-->
<!--                                              <option value="">To</option>-->
<!--                                              --><?php
//                                              foreach($data_time2 as $data_time)
//                                              { ?>
<!--                                                <option>--><?php //echo $data_time['time']; ?><!--</option>-->
<!--                                              --><?php //}
//                                              ?>
<!--                                          </select>-->
<!--                                        </td>-->
<!--                                    </tr>-->
<!---->
<!--                                 -->
<!--                                </table>-->
<!--                            </div>-->
<!--                        </div>-->
                    </td>
                </tr>
                

    			<tr valign="top">
    				<td colspan="2">
    					<div class="grayline"></div> 
    					<h3>6. Vacancy Amenities</h3>
    				</td> 
    			</tr>
    			<tr valign="top">
    				<td colspan="2">
    					<div class="row">
    						
    							<div class="col-md-4 check" style="width:26%;">
    								<input type="checkbox" id="label_refrigerator" class="small" style="position:relative;top:5px;" name="refrigerator" value="yes" >
    								&nbsp;<label for="label_refrigerator">Refrigerator</label>
    							</div>
    							
    							<div class="col-md-4 check" style="width:26%;">
    								<input type="checkbox" id="label_air_conditioner" class="small" style="position:relative;top:5px;" name="air_conditioner" value="yes" >
    								&nbsp;<label for="label_air_conditioner">Air Conditioner</label>
    							</div>
    							
    							<div class="col-md-4 check" style="width:26%;">
    								<input type="checkbox" id="label_yard" class="small" style="position:relative;top:5px;" name="yard" value="yes" >
    								&nbsp;<label for="label_yard">Yard</label>
    							</div>
    							
    							<div class="col-md-4 check" style="width:26%;">
    								<input type="checkbox" id="label_stove" class="small" style="position:relative;top:5px;" name="stove" value="yes" >
    								&nbsp;<label for="label_stove">Stove</label>
    							</div>
    							
    							<div class="col-md-4 check" style="width:26%;">
    								<input type="checkbox" id="label_wallheater" class="small" style="position:relative;top:5px;" name="wallheater" value="yes" >
    								&nbsp;<label for="label_wallheater">Wall Heater</label>
    							</div>
    							
    							<div class="col-md-4 check" style="width:26%;">
    								<input type="checkbox" id="label_elevator" class="small" style="position:relative;top:5px;" name="elevator" value="yes" >
    								&nbsp;<label for="label_elevator">Elevator</label>
    							</div>
    							
    							<div class="col-md-4 check" style="width:26%;">
    								<input type="checkbox" id="label_dishwasher" class="small" style="position:relative;top:5px;" name="dishwasher" value="yes" >
    								&nbsp;<label for="label_dishwasher">Dishwasher</label>
    							</div>
    							
    							<div class="col-md-4 check" style="width:26%;">
    								<input type="checkbox" id="label_laundry" class="small" style="position:relative;top:5px;" name="laundry" value="yes" >
    								&nbsp;<label for="label_laundry">Laundry on premises</label>
    							</div>
    							
    							<div class="col-md-4 check" style="width:26%;">
    								<input type="checkbox" id="label_pool" class="small" style="position:relative;top:5px;" name="pool" value="yes" >
    								&nbsp;<label for="label_pool">Pool</label>
    							</div>
    							
    							<div class="col-md-4 check" style="width:26%;">
    								<input type="checkbox" id="label_microwave" class="small" style="position:relative;top:5px;" name="microwave" value="yes" >
    								&nbsp;<label for="label_microwave">Microwave</label>
    							</div>
    							
    							<div class="col-md-4 check" style="width:26%;">
    								<input type="checkbox" id="label_wd" class="small" style="position:relative;top:5px;" name="wd" value="yes" >
    								&nbsp;<label for="label_wd">Washer and Dryer in Unit</label>
    							</div>
    							
    							<div class="col-md-4 check" style="width:26%;">
    								<input type="checkbox" id="label_spa" class="small" style="position:relative;top:5px;" name="spa" value="yes" >
    								&nbsp;<label for="label_spa">Spa/Jacuzzi</label>
    							</div>
    							
    							<div class="col-md-4 check" style="width:26%;">
    								<input type="checkbox" id="label_central_air" class="small" style="position:relative;top:5px;" name="central_air" value="yes" >
    								&nbsp;<label for="label_central_air">Central Air</label>
    							</div>
    							
    							<div class="col-md-4 check" style="width:26%;">
    								<input type="checkbox" id="label_wd_hookups" class="small" style="position:relative;top:5px;" name="wd_hookups" value="yes" >
    								&nbsp;<label for="label_wd_hookups">Washer and Dryer Hookups</label>
    							</div>
    							
    							<div class="col-md-4 check" style="width:26%;">
    								<input type="checkbox" id="label_accessible" class="small" style="position:relative;top:5px;" name="accessiblee" value="yes" >
    								&nbsp;<label for="label_accessible">Wheelchair Accessible</label>
    							</div>
    							
    							<div class="col-md-4 check" style="width:26%;">
    								<input type="checkbox" id="label_central_heat" class="small" style="position:relative;top:5px;" name="central_heat" value="yes" >
    								&nbsp;<label for="label_central_heat">Central Heat</label>
    							</div>
    							
    							<div class="col-md-4 check" style="width:26%;">
    								<input type="checkbox" id="label_balcony" class="small" style="position:relative;top:5px;" name="balcony" value="yes" >
    								&nbsp;<label for="label_balcony">Balcony</label>
    							</div>
    							
    							<div class="col-md-4 check" style="width:26%;">
    								<input type="checkbox" id="label_controlled_access" class="small" style="position:relative;top:5px;" name="controlled_access" value="yes" >
    								&nbsp;<label for="label_controlled_access">Controlled Access Building</label>
    							</div>
    							
    							<div class="col-md-4 check" style="width:26%;">
    								<input type="checkbox" id="label_fireplace" class="small" style="position:relative;top:5px;" name="fireplace" value="yes" >
    								&nbsp;<label for="label_fireplace">Fireplace</label>
    							</div>
    							
    							<div class="col-md-4 check" style="width:26%;">
    								<input type="checkbox" id="label_patio" class="small" style="position:relative;top:5px;" name="patio" value="yes" >
    								&nbsp;<label for="label_patio">Patio</label>
    							</div>
    							
    							<div class="col-md-4 check" style="width:26%;">
    								<input type="checkbox" id="label_quiet_nhood" class="small" style="position:relative;top:5px;" name="quiet_nhood" value="yes" >
    								&nbsp;<label for="label_quiet_nhood">Quiet Neighborhood</label>
    							</div>
    							

    					</div>
    				</td>
    			</tr>
    			
    			<tr valign="top">
    				<td colspan="2">
    					<div class="grayline"></div>
    					<h3>7. Vacancy Description</h3>
    				</td>
    			</tr>
    			<tr valign="top">
    				<td class="subheader">
    					Vacancy Heading:
    				</td>
    				<td class="field">
    					<input type="text" class="input validate[required] text mb" style="width:auto;" name="short_descp" maxlength="100" ><span style="font-size:16px;color:#C30">*</span> 
    		            <img src="../images/info.gif" border="0" align="absmiddle" class=""/>
    	            </td>
    			</tr>
    			

    			<tr valign="top">
    				<td class="subheader">
    					Vacancy Details: 
    				</td>
    				<td class="field">
    					<textarea name="full_descp" class="mb" style="width:auto;height:150px;" ></textarea>
    					<img src="../images/info.gif" border="0" align="absmiddle" class=""/></a>
    	               <br><span style="color: red;font-size:11px;"><strong>NO PHONE NUMBERS, ADDRESS, WEBSITE OR LANDLORD CONTACT ALLOWED IN THIS BOX.</STRONG></span>
    				</td>
    			</tr>

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
    			</tr> -->


    			<tr valign="top">
    				<td colspan="2">
    					<div class="grayline"></div>
    					<h3>8. Post Vacancy Listing</h3>
    				</td>
    			</tr>

    			<tr valign="top">
    				<td colspan="2">

    					
    						<b>Vacancy Listing Status:</b> New Listing <br><br>
    						<input type="radio" name="post_date_confirm" value="yes" id="post_now" class="input validate[required] noborder" >	Post this listing now<br />
    						<br />
    						<div style="float:left;">
    							<input type="radio" name="post_date_confirm" value="no" id="post_later1" class="input validate[required] noborder" style="    margin-top: 14px;"> Post this listing on
    							<input type="text" class="text date_p" style="width:100px;" id="post_later2"  name="post_date"> 
    						</div>
    						<div class="clearfix"></div><br />
    						<input type="radio" name="post_date_confirm" value="no" id="post_save" class="input validate[required] noborder"> Do not post now, save as rented listing for future use.
    				</td>
    			</tr>

    			
    				<tr valign="top" class="sign-request-wrapper">
    					<td colspan="2">
    						<div class="grayline"></div>
    						<h3>9. Get Free 'FOR RENT' Sign</h3>
    					</td>
    				</tr>

    				
    				
    				<tr valign="top" class="sign-request-wrapper">
    					<td colspan="2">
    						<div style="font-size: 18px; float: left; width: auto;">
    							
    															
    								
    								<input type="checkbox" id="signRequest" name="for_rent_check1" value="Yes" class="noborder" checked="checked">
    							
    							
    							 &nbsp;<b>Free <span style="color:red;">FOR RENT</span> Sign</b> - We will place a large "FOR RENT" sign (like the one at right) outside your property. Please use the "Driver Instructions" field below to provide any instructions to our driver. <br />
    							<br /><b>Driver Instructions:</b> <span class="smallgray">(e.g. - Place Sign in the front yard)</span><br />
    							<textarea class="mb" name="driver_instr" style="width:auto;height:100px;"></textarea>
    						</div>
    						<div style="float: left; width: 130px;">
    							<!-- <img src="http://static.westsiderentals.com/images/sign_m.gif" style="border: 1px solid black;"> -->
    						</div>
    						<div class="clearboth"></div>
    					</td>
    				</tr>
    			

    			<tr valign="top">
    				<td colspan="2">
    					<!-- <div style="margin:10px 0px;width: 600px; height:100px;overflow:auto;border:1px solid #A9A9A9; background: #efefef; padding:0px 8px 8px 8px;">
    						<h3>Fair Housing Act Notice</h3>
    						All submissions are subject to the federal and California fair housing laws which make it illegal to indicate in any advertisement &quot;any preference, limitation, or discrimination because of race, color, religion, sex, physical or mental disability, familial status&quot; (e.g. &quot;No children&quot; or &quot;Not suitable for Children&quot;), sexual orientation, ancestry, marital status, or source of income (e.g. &quot;No Section 8&quot; is prohibited). Your local jurisdiction may impose additional requirements. <br />
    						<br />
    						If you have questions about the fair housing laws and housing discrimination, please call the Southern California Housing Rights Center (formerly the Fair Housing Council of San Gabriel Valley) at (800) 477-5977 or go to HRCâ€™s website at <A href="http://www.hrc-la.org" target="_blank">www.hrc-la.org</a>.
    					</div> -->
    					<input type="Checkbox" value="Yes" name="for_rent_check2" class="noborder" checked="checked"> &nbsp; I have read and agree to the terms of the Fair Housing Act
    				</td>
    			</tr>

    			
    					
    									
    					<!-- <tr valign="top">
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
    							 
    									<div class="col-md-3">
    										<input type="checkbox" id="label_LA Weekly" class="small" style="position:relative;top:5px;" name="la_weekly" value="yes" CHECKED>
    										&nbsp;<label for="label_LA Weekly">LA Weekly</label>
    									</div> 
    									 
    									<div class="col-md-3">
    										<input type="checkbox" id="label_Downtown News" class="small" style="position:relative;top:5px;" name="downtown_news" value="yes" CHECKED>
    										&nbsp;<label for="label_Downtown News">Downtown News</label>
    									</div> 
    									 
    									<div class="col-md-3">
    										<input type="checkbox" id="label_Zumper" class="small" style="position:relative;top:5px;" name="zumper" value="yes" CHECKED>
    										&nbsp;<label for="label_Zumper">Zumper</label>
    									</div> 
    									 
    									<div class="col-md-3">
    										<input type="checkbox" id="label_Vast" class="small" style="position:relative;top:5px;" name="vast" value="yes" CHECKED>
    										&nbsp;<label for="label_Vast">Vast</label>
    									</div> 
    									 
    									<div class="col-md-3">
    										<input type="checkbox" id="label_Santa Monica Daily Press" class="small" style="position:relative;top:5px;" name="daily_press" value="yes" CHECKED>
    										&nbsp;<label for="label_Santa Monica Daily Press">Daily Press</label>
    									</div> 
    									 
    									<div class="col-md-3">
    										<input type="checkbox" id="label_Oodle" class="small" style="position:relative;top:5px;" name="oodle" value="yes" CHECKED>
    										&nbsp;<label for="label_Oodle">Oodle</label>
    									</div> 
    									 
    									<div class="col-md-3">
    										<input type="checkbox" id="label_Live Lovely" class="small" style="position:relative;top:5px;" name="live_lovely" value="yes" CHECKED>
    										&nbsp;<label for="label_Live Lovely">Live Lovely</label>
    									</div> 
    									 
    									<div class="col-md-3">
    										<input type="checkbox" id="label_Google Base" class="small" style="position:relative;top:5px;" name="google_base" value="yes" CHECKED>
    										&nbsp;<label for="label_Google Base">Google Base</label>
    									</div> 
    									 
    									<div class="col-md-3">
    										<input type="checkbox" id="label_Canyon News" class="small" style="position:relative;top:5px;" name="canyon_news" value="yes" CHECKED>
    										&nbsp;<label for="label_Canyon News">Canyon News</label>
    									</div> 
    									 
    									<div class="col-md-3">
    										<input type="checkbox" id="label_San Diego Reader" class="small" style="position:relative;top:5px;" name="reader" value="yes" CHECKED>
    										&nbsp;<label for="label_San Diego Reader">San Diego Reader</label>
    									</div> 
    									 
    									<div class="col-md-3">
    										<input type="checkbox" id="label_Walkscore" class="small" style="position:relative;top:5px;" name="walkscore2" value="yes" CHECKED>
    										&nbsp;<label for="label_Walkscore">Walkscore</label>
    									</div> 
    									 
    									<div class="col-md-3">
    										<input type="checkbox" id="label_Renthop" class="small" style="position:relative;top:5px;" name="renthop" value="yes" CHECKED>
    										&nbsp;<label for="label_Renthop">Renthop</label>
    									</div> 
    									
    						</div>
    					</td>
    				</tr> -->

    				

    			<tr valign="top">
    				<td colspan="2">
    					<br /><br />
    					<div class="marg_right_20 fleft">
    						<!-- <input type="submit" name="submit_button" id="save_submit" class="btn_submit btn_submit_prop" value="Save & Upload Photos" /> -->
    						
    						<input type="submit" id="save_submit2" class="btn_submit btn_submit_prop" value="Save" />
    					</div>
    					<div class="clearboth"></div>
    					<div id="trytomapnote" class="marg_top_5 fleft" style=""><span class="smallred">Note: Please try to Map your property before submitting this vacancy.</span></div>
    					<div class="clearboth"></div>
    				</td>
    			</tr>
    		</table>

    		
    		

    		
    	</form>
    	</div>
    	</div>
    </div>
    <div id="eventAdd" title="Add Time" style="display:none;">
        <?php if( !empty($time_array) ): ?>
            <form id="add_viewing_time">
                <label for="viewing_end_time">Start:</label>
                <select name="viewing_start_time" id="viewing_start_time">
                    <option value="">From</option>
                    <?php foreach( $time_array as $time_val ): ?>
                        <option value="<?php echo $time_val; ?>"><?php echo $time_val; ?></option>
                    <?php endforeach; ?>
                </select>
                <label for="viewing_end_time">End:</label>
                <select name="viewing_end_time" id="viewing_end_time">
                    <option value="">To</option>
                    <?php foreach( $time_array as $time_val ): ?>
                        <option value="<?php echo $time_val; ?>"><?php echo $time_val; ?></option>
                    <?php endforeach; ?>
                </select>
                <textarea name="event_description"></textarea>
                <input type="hidden" id="current_day" name="current_day">
                <input type="hidden" name="property_pid" value="<?php echo $pid; ?>">

                <input type="submit" class="btn btn-info" name="save_viewing_time" value="Save">
            </form>
        <?php endif; ?>
    </div>



    </div>  <!-- End main container div -->
	
	
	<!-- FOOTER -->
<?php
	include("footer.php");
?>
		 
	
	
	<!-- Bootstrap core JavaScript
	
	<!-- Placed at the end of the document so the pages load faster -->
	
	
		
		
	
	
	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	 <script type="text/javascript" src="../js/jquery.min.js"></script>      
     <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script type="text/javascript">
      $('select').select2({minimumResultsForSearch: Infinity});
    </script>
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
            var t=$('#add_row').attr('value');
            var i=parseInt(t);
            $("#add_row").click(function(){
                $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input  name='amenities[]' type='text' placeholder='Amenities'  class='form-control input-md'></td>");
                $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
                i++; 
            });
            $("#delete_row").click(function(){
                if(i>1)
                {
                    $("#addr"+(i-1)).html('');
                    i--;
                }
            });
        });
    </script>


    <script type="text/javascript">
        $(document).ready(function(){
            // alert("hello");
            var t=$('#add_roww').attr('value');
            var i=parseInt(t);
            $("#add_roww").click(function(){
                if(i<9)
                {   
                $('#addrr'+i).html("<td>"+ (i+1) +"</td><td><input  name='image[]' type='file'  class='form-control input-md'></td>");
                $('#tab_logicc').append('<tr id="addrr'+(i+1)+'"></tr>');
                i++;
                } 
            });
            $("#delete_roww").click(function(){
                if(i>1)
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
            $("#post_later2").prop('disabled', true);
        });
        $("#post_later1").click(function(){
            $("#post_later2").removeAttr("hidden","hidden");
            $("#post_later2").val("");
            $("#post_later2").prop('disabled', false);
        });
        $("#post_save").click(function(){
            $("#post_later2").prop('disabled', false);
            $("#post_later2").attr("hidden","hidden");
            $("#post_later2").val('20-02-2020');
            // alert("hello");
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
     <script src="http://maps.google.com/maps/api/js?key=AIzaSyACWUZ9OL8BQVQC-4cSsSFmEo71SLDzvlk&sensor=false"></script>

     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
     <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
     <script src="../js/jquery.ui.addresspicker.js"></script>
     <script>
     $(function() {
       var addresspicker = $( "#addresspicker" ).addresspicker({
         componentsFilter: 'country:FR'
       });
       var addresspickerMap = $( "#addresspicker_map" ).addresspicker({
         regionBias: "fr",
         language: "fr",
         updateCallback: showCallback,
         mapOptions: {
           zoom: 4,
           center: new google.maps.LatLng(31.046051, 34.85161199999993),
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

    <!-- Full Calendar -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.0.1/fullcalendar.min.js"></script>
     <script type="text/javascript">
        $(document).ready(function(){
            // alert('hi');
            $("#propForm").validationEngine();

            var calendarOptions = {
                header: {
                    left: '',
                    center: 'prev title next',
                    right: ''
                },
                displayEventTime: false,
                defaultView: 'month',
                editable: true,
                eventRender: function (event, element) {
                    element.attr('href', 'javascript:void(0);');
                    element.click(function() {
                        if(event.id){
                            $('a#event-remove').attr('data-eventid', event.id);
                        }

                        if(event.start){
                            $("#startTime").html(moment(event.start).format('MMM Do h:mm A'));
                        }

                        if(event.start){
                            $("#endTime").html(moment(event.end).format('MMM Do h:mm A'));
                        }

                        if(event.description){
                            $("#eventInfo").html(event.description);
                        }

                        $("#eventContent").dialog({ modal: true, title: 'Viewing Times', width:350});
                    });
                },
                dayClick: function(date, event, view) {
                    $('#current_day').val(date.format());
                    $('#eventAdd').dialog();
                },
                events: []
            }

            $('#calendar').fullCalendar(calendarOptions);


            $('#add_viewing_time').submit(function(e){
                e.preventDefault();

                var eventsList = $('#calendar_events_list').val();

                console.log(eventsList);

                var eventInfo = {
                    start: $(this).find('#viewing_start_time').val(),
                    end: $(this).find('#viewing_end_time').val(),
                    description: $(this).find('textarea').val()
                }

                if( eventsList.length ){
                    eventsList = JSON.parse(eventsList);
                }else{
                    eventsList = [];
                }

                eventsList.push(eventInfo);
                eventsList = JSON.stringify(eventsList);

                $('#calendar_events_list').val(eventsList);
                $('#eventAdd').dialog('close');

                if($('#calendar_events_list').val().length){
                    calendarOptions.events = JSON.parse($('#calendar_events_list').val());
                }

                $('#calendar').fullCalendar(calendarOptions);

                console.log(eventInfo);
            });
        });
        $(function() {
            $('.numberonly').keyup(function() {
                if (this.value.match(/[^0-9]/g)) {
                    this.value = this.value.replace(/[^0-9]/g, '');
                }
            });
        });
     </script>
