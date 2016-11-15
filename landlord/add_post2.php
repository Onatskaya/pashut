<?php
include("../functions/function.php");
include('check_login.php');

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
<style type="text/css">
	.ls label{
		font-size: 15px;
		color:#536072;
		text-align: left;
	}
</style>

<body  class="guest" >
	
	<?php
		include('header.php');
	?>

    <!-- Carousel
    ================================================== -->
<div class="container">
	<div class="container locations">
		<div class="col-md-5" align="center"></div>
		<form action="save_post.php" method="POST" enctype="multipart/form-data" id="register">
			<input type="hidden" name="property_available" value="Available">
			<div class="col-md-12 ls" align="center">
				<h4 style="text-decoration:underline;text-align:left;">Post your listing by filling in the required fields below. Property Owners benefit from higher quality tenants, immediate viewing schedules to easily show your property and less time taken to rent your property.</h4>

				<div class="row" align="left">
					<h4 style="color:red;">Address and Specifications </h4>
				</div>
				<div class="row">
					<label class="col-md-2">Name</label>
					<div class="col-md-4"><input type="text" name="name" class="input validate[required] form-control"></div>
					<label class="col-md-2">Email</label>
					<div class="col-md-4"><input type="email" name="email" class="input validate[required,custom[email]] form-control"></div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Phone No.</label>
					<div class="col-md-4"><input type="text" name="contact" class="input validate[required,custom[number]] numberonly form-control"></div>
					<label class="col-md-2">Full Address</label>
					<div class="col-md-4"><input type="text" name="address" class="input validate[required] form-control"></div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Street Number</label>
					<div class="col-md-4"><input type="text" name="street_no" class="input validate[required] form-control"></div>
					<label class="col-md-2">Street Name</label>
					<div class="col-md-4"><input type="text" name="street_name" class="input validate[required] form-control"></div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">State</label>
					<div class="col-md-4">
						<select name="state" class="input validate[required] form-control">
							<option>Israel</option>
						</select>
					</div>
					<label class="col-md-2">City</label>
					<div class="col-md-4">
						<select name="city" class="input validate[required] form-control">
							<option value="">Select</option>
							<?php
								foreach($data_city2 as $data_city)
								{ ?>
									<option><?php echo $data_city['city_name'];?></option>
							<?php }
							?>
						</select>
					</div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Zip-code</label>
					<div class="col-md-4"><input type="text" name="pincode" class="input validate[required] form-control"></div>
					<label class="col-md-2">Amenities</label>
					<div class="col-md-4">
						  	<table class="table table-bordered table-hover" id="tab_logic">
                            <tbody>
								<tr id='addr0'>
									<td>
										1
									</td>
									<td>
										<input type="text" name='amenities[]' placeholder='Amenities' class="input validate[required] form-control" />
									</td>
								</tr>
								<tr id='addr1'></tr>	
							</tbody>
                          	</table>
                          	<a id="add_row" value='1' class="btn btn-default pull-left">Add Amenity</a><a id='delete_row' class="pull-right btn btn-default">Delete Amenity</a>
					</div>
				</div>
				<br>
				<!-- <div class="row">
					<label class="col-md-2">Paid Utilities</label>
					<div class="col-md-4"><input type="text" name="paid_utilities" class="form-control"></div>
				</div> -->
				<br>&nbsp;
				<div class="row">
					<label class="col-md-2">Availability</label>
					<div class="col-md-4"><input type="text" name="availability" id="availability" class="input validate[required] form-control"></div>
					<label class="col-md-2">Short Description</label>
					<div class="col-md-4"><input type="text" name="short_descp" class="input validate[required] form-control"></div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Rent Price</label>
					<div class="col-md-4"><input type="text" name="rent" class="input validate[required,custom[number]] numberonly form-control"></div>
					<label class="col-md-2">Listing Type</label>
					<div class="col-md-4">
						<select class="input validate[required]  form-control" name="listing_type">
							<option value="">Select</option>
							<option>Standard Rental</option>
						</select>
					</div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Desposit</label>
					<div class="col-md-4"><input type="text" name="deposit" class="input validate[required,custom[number]] numberonly form-control"></div>
					<label class="col-md-2">Bedrooms</label>
					<div class="col-md-4">
						<select class="input validate[required] form-control" name="bedroom">
							<option value="">Select</option>
							<option>Single</option>
							<option>Studio</option>
							<option>Bachelor</option>
							<option>1 bedroom</option>
							<option>2 bedroom</option>
							<option>3 bedroom</option>
							<option>4 bedroom</option>
							<option>5 bedroom</option>
							<option>6 bedroom</option>
						</select>
					</div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Bathrooms</label>
					<div class="col-md-4">
						<select class="input validate[required] form-control" name="bathroom">
						<option value="">Select</option>
						<option>1 Bath</option>
						<option>2 Bath</option>
						<option>3 Bath</option>
						<option>4 Bath</option>
						<option>5 Bath</option>
						<option>6 Bath</option>
						<option>Shared Bathroom</option>
						</select>
					</div>
					<label class="col-md-2">Furnished</label>
					<div class="col-md-4">
						<select class="input validate[required] form-control" name="furnished">
							<option value="">Select</option>
							<option>Yes</option>
							<option>No</option>
						</select>
					</div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Lease Type</label>
					<div class="col-md-4">
						<select class="input validate[required] form-control" name="lease_type">
							<option value="">Select</option>
							<option>Six month lease</option>
							<option>One year minimum lease</option>
							<option>Two year minimum lease</option>
							<option>Flexible lease</option>
						</select>
					</div>
					<label class="col-md-2">Pets</label>
					<div class="col-md-4">
						<select class="input validate[required] form-control" name="pet">
							<option value="">Select</option>
							<option>No pets</option>
							<option>Will consider pet</option>
							<option>Cat ok</option>
						</select>
					</div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Stucture Type</label>
					<div class="col-md-4">
						<select class="input validate[required] form-control" name="structure_type">
							<option value="">Select</option>
							<option>Apartments /Condos </option>
							<option>Houses /Guest Houses </option>
							<option>Garages /Storage</option>
							<option>Commercial/Offices </option>
							<option>Lofts </option>
							<option>Hotels </option>
							<option>Other </option>
							<option>Roommates/Shares</option>
							<option>Vacations/Short-Term</option>
						</select>
					</div>
					<label class="col-md-2">Unit Details</label>
					<div class="col-md-4"><input type="text" name="unit_detail" class="input validate[required] form-control"></div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Meters</label>
					<div class="col-md-4"><input type="text" name="square_footage" class="input validate[required] form-control"></div>
					<label class="col-md-2">Parking</label>
					<div class="col-md-4">
						<select class="input validate[required] form-control" name="parking">
							<option value="">Select</option>
							<option>Parking Available</option>
							<option>No Parking</option>
							<option>Street parking</option>
							<option>1-car Gated parking</option>
							<option>1-car Parking included</option>
							<option>1-car Garage parking</option>
							<option>2-car Parking included</option>
							<option>2-car Garage parking</option>
							<option>3-car Parking included</option>
							<option>3-car Garage parking</option>
							<option>Permit parking</option>
						</select>
					</div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Walkscore</label>
					<div class="col-md-4">
						<select name="walkscore" class="input validate[required] form-control">
							<option value="">Select</option>
							<option>Easy</option>
							<option>Average</option>
							<option>Hard</option>
						</select>
					</div>
					<label class="col-md-2">Walkscore Description</label>
					<div class="col-md-4">
						<select name="walkscore_descrp" class="input validate[required] form-control">
							<option value="">Select</option>
							<option>Close to all major shops and restaurants</option>
							<option>Near all major shops and restaurants</option>
							<option>Far from major shops and restaurants</option>
						</select>
					</div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Soundscore</label>
					<div class="col-md-4">
						<select name="soundscore" class="input validate[required] form-control">
							<option value="">Select</option>
							<option>Calm</option>
							<option>Active</option>
							<option>Busy</option>
						</select>
					</div>
					<label class="col-md-2">Soundscore Description</label>
					<div class="col-md-4">
						<select name="soundscore_descrp" class="input validate[required] form-control">
							<option value="">Select</option>
							<option>Calm Street</option>
							<option>Active Street</option>
							<option>Busy Street</option>
						</select>
					</div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Vehicle Noise</label>
					<div class="col-md-4">
						<select name="vehicle_noise" class="input validate[required] form-control">
							<option>Select</option>
							<option>Busy</option>
							<option>Active</option>
							<option>Calm</option>
						</select>
					</div>
					<label class="col-md-2">Airport Noise</label>
					<div class="col-md-4">
						<select name="airport_noise" class="input validate[required] form-control">
							<option>Select</option>
							<option>Busy</option>
							<option>Active</option>
							<option>Calm</option>
						</select>
					</div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Businesses</label>
					<div class="col-md-4">
						<select name="business_noise" class="input validate[required] form-control">
							<option>Select</option>
							<option>Busy</option>
							<option>Active</option>
							<option>Calm</option>
						</select>
					</div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Featured Listing</label>
					<div class="col-md-1">
						<input type="checkbox" name="featured_listing" id="fl" value="Yes">
					</div>
				</div>
				<br>
				<div class="row" id="fl_box" style="display:none;">
					<div class="container" style="border:2px solid red;">
						<div class="row"><b>Note:-</b>
							<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</span>
						</div>
						<br>
						<div class="row">
								<div class="col-md-3"></div>
							<div class="col-md-6">
								<div class="row">
									<label class="col-md-4">Credit Card Number</label>
									<div class="col-md-6">
										<input type="text" name="f_credit_card_no" class="input validate[required] form-control" maxlength="16">
									</div>
								</div>
								<br>
								<div class="row">
									<label class="col-md-4">Expiration Date *</label>
									<div class="col-md-3">
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
									</div>
									<div class="col-md-3">
										<select name="f_credit_exp_yr" class="input validate[required] form-control">
											<option value="">Year</option>
											<?php
											for($i=2016;$i<=2050;$i++)
											{ ?>
												<option><?php echo $i; ?></option>
											<?php }
											?>
										</select>
									</div>	
								</div>
								<br>
								<div class="row">
									<label class="col-md-4">CVV* </label>
									<div class="col-md-6">
										<input name="f_credit_card_cvv" class="input validate[required] form-control" maxlength="4" type="text">
									</div>
								</div>
							</div>
								<div class="col-md-3"></div>
						</div>
						<br>
					</div>
				</div>
				<br>
				<div class="row" align="center" style="border-bottom:1px solid #000"></div>
				<br>
				<div class="row" align="left">
					<h4 style="color:red;">Images </h4>
				</div>
				<div class="row">
					<label class="col-md-2">Front Image</label>
					<div class="col-md-4"><input type="file" name="main_image" class="input validate[required] form-control"></div>
					<label class="col-md-2">Image 1</label>
					<div class="col-md-4"><input type="file" name="image1" class="form-control"></div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Image 2</label>
					<div class="col-md-4"><input type="file" name="image2" class="input validate[required] form-control"></div>
					<label class="col-md-2">Image 3</label>
					<div class="col-md-4"><input type="file" name="image3" class="input validate[required] form-control"></div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Image 4</label>
					<div class="col-md-4"><input type="file" name="image4" class="input validate[required] form-control"></div>
					<label class="col-md-2">Image 5</label>
					<div class="col-md-4">
						<input type="file" name="image5" class="input validate[required] form-control">
					</div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Add More Images</label>
					<div class="col-md-4">
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
					</div>
					<label class="col-md-2">Availabile Amenities</label>
					<div class="col-md-4" align="left">
						<input type="checkbox" name="a_parking" value="1">&nbsp;&nbsp;Parking<br>
						<input type="checkbox" name="a_refrigerator" value="1">&nbsp;&nbsp;Refrigertor<br>
						<input type="checkbox" name="a_pets" value="1">&nbsp;&nbsp;Allow Pets<br>
						<input type="checkbox" name="a_wheelchair" value="1">&nbsp;&nbsp;WheelChair accessible<br>
					</div>
				</div>
				<br>&nbsp;
					<div class="row" align="center" style="border-bottom:1px solid #000"></div>
					<br>
				<div class="row">
					<div class="col-md-3">
						<h4 style="color:red;">Viewing Times </h4>
					</div>
					<div class="col-md-6">
						<div class="row">
							<label class="col-md-2">Monday</label>
							<div class="col-md-2" >
								<select name="mon_time_frm">
								<option value="">From</option>
								<?php
								foreach($data_time2 as $data_time)
								{ ?>
									<option><?php echo $data_time['time']; ?></option>
								<?php }
								?>
								</select>
							</div>
							<div class="col-md-2" >
								<select name="mon_time_to">
								<option value="">To</option>
								<?php
								foreach($data_time2 as $data_time)
								{ ?>
									<option><?php echo $data_time['time']; ?></option>
								<?php }
								?>
								</select>
							</div>
						</div>
						<br>
						<div class="row">
							<label class="col-md-2">Tuesday</label>
							<div class="col-md-2" >
								<select name="tue_time_frm">
								<option value="">From</option>
								<?php
								foreach($data_time2 as $data_time)
								{ ?>
									<option><?php echo $data_time['time']; ?></option>
								<?php }
								?>
								</select>
							</div>
							<div class="col-md-2" >
								<select name="tue_time_to">
								<option value="">To</option>
								<?php
								foreach($data_time2 as $data_time)
								{ ?>
									<option><?php echo $data_time['time']; ?></option>
								<?php }
								?>
								</select>
							</div>
						</div>
						<br>
						<div class="row">
							<label class="col-md-2">Wednesday</label>
							<div class="col-md-2" >
								<select name="tue_time_frm">
								<option value="">From</option>
								<?php
								foreach($data_time2 as $data_time)
								{ ?>
									<option><?php echo $data_time['time']; ?></option>
								<?php }
								?>
								</select>
							</div>
							<div class="col-md-2" >
								<select name="tue_time_to">
								<option value="">To</option>
								<?php
								foreach($data_time2 as $data_time)
								{ ?>
									<option><?php echo $data_time['time']; ?></option>
								<?php }
								?>
								</select>
							</div>
						</div>
						<br>
						<div class="row">
							<label class="col-md-2">Wednesday</label>
							<div class="col-md-2" >
								<select name="wed_time_frm">
								<option value="">From</option>
								<?php
								foreach($data_time2 as $data_time)
								{ ?>
									<option><?php echo $data_time['time']; ?></option>
								<?php }
								?>
								</select>
							</div>
							<div class="col-md-2" >
								<select name="wed_time_to">
								<option value="">To</option>
								<?php
								foreach($data_time2 as $data_time)
								{ ?>
									<option><?php echo $data_time['time']; ?></option>
								<?php }
								?>
								</select>
							</div>
						</div>
						<br>
						<div class="row">
							<label class="col-md-2">Thursday</label>
							<div class="col-md-2" >
								<select name="thu_time_frm">
								<option value="">From</option>
								<?php
								foreach($data_time2 as $data_time)
								{ ?>
									<option><?php echo $data_time['time']; ?></option>
								<?php }
								?>
								</select>
							</div>
							<div class="col-md-2" >
								<select name="thu_time_to">
								<option value="">To</option>
								<?php
								foreach($data_time2 as $data_time)
								{ ?>
									<option><?php echo $data_time['time']; ?></option>
								<?php }
								?>
								</select>
							</div>
						</div>
						<br>
						<div class="row">
							<label class="col-md-2">Monday</label>
							<div class="col-md-2" >
								<select name="fri_time_frm">
								<option value="">From</option>
								<?php
								foreach($data_time2 as $data_time)
								{ ?>
									<option><?php echo $data_time['time']; ?></option>
								<?php }
								?>
								</select>
							</div>
							<div class="col-md-2" >
								<select name="fri_time_to">
								<option value="">To</option>
								<?php
								foreach($data_time2 as $data_time)
								{ ?>
									<option><?php echo $data_time['time']; ?></option>
								<?php }
								?>
								</select>
							</div>
						</div>
						<br>
						<div class="row">
							<label class="col-md-2">Monday</label>
							<div class="col-md-2" >
								<select name="sat_time_frm">
								<option value="">From</option>
								<?php
								foreach($data_time2 as $data_time)
								{ ?>
									<option><?php echo $data_time['time']; ?></option>
								<?php }
								?>
								</select>
							</div>
							<div class="col-md-2" >
								<select name="sat_time_to">
								<option value="">To</option>
								<?php
								foreach($data_time2 as $data_time)
								{ ?>
									<option><?php echo $data_time['time']; ?></option>
								<?php }
								?>
								</select>
							</div>
						</div>
						<br>
						<div class="row">
							<label class="col-md-2">Sunday</label>
							<div class="col-md-2" >
								<select name="sun_time_frm">
								<option value="">From</option>
								<?php
								foreach($data_time2 as $data_time)
								{ ?>
									<option><?php echo $data_time['time']; ?></option>
								<?php }
								?>
								</select>
							</div>
							<div class="col-md-2" >
								<select name="sun_time_to">
								<option value="">To</option>
								<?php
								foreach($data_time2 as $data_time)
								{ ?>
									<option><?php echo $data_time['time']; ?></option>
								<?php }
								?>
								</select>
							</div>
						</div>
						<br>

					</div>
				</div>
				<br>&nbsp;
				<div class="row" align="center" style="border-bottom:1px solid #000"></div>
				<br>
				<div class="row" align="left">
					<h4 style="color:red;">Select Location </h4>
				</div>
				<div class="row">
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
					      		<input type="hidden" id="sublocality" disabled=disabled> 
					       		<input type="hidden" id="administrative_area_level_3" disabled=disabled> 
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
					<div class="col-md-6">
					    <div class='map-wrapper'>
					      	<div id="map"></div>
					      	<div id="legend">You can drag and drop the marker to the correct location</div>
					    </div>
					</div>
				</div>

					 
				<br>
				<div>
					<center><input type="submit" class="btn btn-danger" value="Submit"></center>
				</div>
				

			</div>
		</form>	
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
	
<!-- <script src="../js/jquery.min.js"></script> -->
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
	




 <link rel="stylesheet" href="../themes/base/jquery.ui.all.css">
				  <link rel="stylesheet" href="../css/demo.css">
				  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>

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


<link rel="stylesheet" href="../css/jquery-ui.css">
<script src="../js/jquery-ui.js"></script>
<script>
 $(function() 
 {   $( "#availability" ).datepicker({
         changeMonth:true,
         changeYear:true,
         yearRange:"-100:+0",
         dateFormat:"dd-mm-yy" });
 });
 </script>


 <link rel="stylesheet" href="../css/validationEngine.jquery.css">
 <script src="../js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
 <script src="../js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
 <script type="text/javascript">
 	$(document).ready(function(){
 		// alert('hi');
 		$("#register").validationEngine();
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

				