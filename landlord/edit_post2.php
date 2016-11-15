<?php
include("../functions/function.php");
include('check_login.php');

$post_id= $_GET['pid'];

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

$data_amt2= explode(",", $data_post['amenities']);

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
		<form action="update_post.php" method="POST" enctype="multipart/form-data" id="register">
			<input type="hidden" name="pid" value="<?php echo $post_id; ?>">
			<div class="col-md-12 ls" align="center">
				<h2>Update Detail</h2>
				<div class="row">
					<label class="col-md-2">Name</label>
					<div class="col-md-4"><input type="text" name="name" class="input validate[required] form-control" value="<?php echo $data_post['name']; ?>"></div>
					<label class="col-md-2">Email</label>
					<div class="col-md-4"><input type="email" name="email" class="input validate[required,custom[email]] form-control" value="<?php echo $data_post['email']; ?>"></div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Phone No.</label>
					<div class="col-md-4"><input type="text" name="contact" class="input validate[required,custom[number]] numberonly form-control" value="<?php echo $data_post['contact']; ?>"></div>
					<label class="col-md-2">Full Address</label>
					<div class="col-md-4"><input type="text" name="address" class="input validate[required] form-control" value="<?php echo $data_post['address']; ?>"></div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Street Number</label>
					<div class="col-md-4"><input type="text" name="street_no" class="input validate[required] form-control" value="<?php echo $data_post['street_no']; ?>"></div>
					<label class="col-md-2">Street Name</label>
					<div class="col-md-4"><input type="text" name="street_name" class="input validate[required] form-control" value="<?php echo $data_post['street_name']; ?>"></div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">State</label>
					<div class="col-md-4">
						<select class="input validate[required] form-control" name="state">
							<?php
							while($data_state=mysqli_fetch_assoc($obj_state))
							{ ?>
								<option <?php if($data_state['state_name']==$data_post['state']) { echo 'selected'; } ?> ><?php echo $data_state['state_name'];?></option>
							<?php }
							?>		
						</select>
					</div>
					<label class="col-md-2">City</label>
					<div class="col-md-4">
						<select name="city" class="input validate[required] form-control">
							<?php
								foreach($data_city2 as $data_city)
								{ ?>
									<option <?php if($data_city['city_name']==$data_post['city']) { echo 'selected'; } ?>><?php echo $data_city['city_name'];?></option>
							<?php }
							?>
						</select>
					</div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Zip-code</label>
					<div class="col-md-4"><input type="text" name="pincode" class="input validate[required] form-control" value="<?php echo $data_post['pincode']; ?>"></div>
					<label class="col-md-2">Paid Utilities</label>
					<div class="col-md-4"><input type="text" name="paid_utilities" class="form-control" value="<?php echo $data_post['paid_utilities']; ?>"></div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Availability</label>
					<div class="col-md-4"><input type="text" name="availability" id="availability" class="input validate[required] form-control" value="<?php echo date('d-m-Y',strtotime($data_post['availability']));  ?>"></div>
					<label class="col-md-2">Short Description</label>
					<div class="col-md-4"><input type="text" name="short_descp" class="input validate[required] form-control" value="<?php echo $data_post['short_descp']; ?>"></div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Rent Price</label>
					<div class="col-md-4"><input type="text" name="rent" class="input validate[required,custom[number]] numberonly form-control" value="<?php echo $data_post['rent']; ?>"></div>
					<label class="col-md-2">Listing Type</label>
					<div class="col-md-4">
						<select class="input validate[required]  form-control" name="listing_type">
							<option value="">Select</option>
							<option <?php if($data_post['listing_type']=='Standard Rental') { echo 'selected'; } ?> >Standard Rental</option>
						</select>
					</div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Desposit</label>
					<div class="col-md-4"><input type="text" name="deposit" class="input validate[required,custom[number]] numberonly form-control" value="<?php echo $data_post['deposit']; ?>"></div>
					<label class="col-md-2">Bedrooms</label>
					<div class="col-md-4">
						<select class="input validate[required] form-control" name="bedroom">
							<option value="">Select</option>
							<option <?php if($data_post['bedroom']=='Single') { echo 'selected'; } ?>>Single</option>
							<option <?php if($data_post['bedroom']=='Studio') { echo 'selected'; } ?>>Studio</option>
							<option <?php if($data_post['bedroom']=='Bachelor') { echo 'selected'; } ?>>Bachelor</option>
							<option <?php if($data_post['bedroom']=='1 bedroom') { echo 'selected'; } ?>>1 bedroom</option>
							<option <?php if($data_post['bedroom']=='2 bedroom') { echo 'selected'; } ?>>2 bedroom</option>
							<option <?php if($data_post['bedroom']=='3 bedroom') { echo 'selected'; } ?>>3 bedroom</option>
							<option <?php if($data_post['bedroom']=='4 bedroom') { echo 'selected'; } ?>>4 bedroom</option>
							<option <?php if($data_post['bedroom']=='5 bedroom') { echo 'selected'; } ?>>5 bedroom</option>
							<option <?php if($data_post['bedroom']=='6 bedroom') { echo 'selected'; } ?>>6 bedroom</option>
						</select>
					</div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Bathrooms</label>
					<div class="col-md-4">
						<select class="input validate[required] form-control" name="bathroom">
						<option value="">Select</option>
						<option <?php if($data_post['bathroom']=='1 Bath') { echo 'selected'; } ?> >1 Bath</option>
						<option <?php if($data_post['bathroom']=='2 Bath') { echo 'selected'; } ?>>2 Bath</option>
						<option <?php if($data_post['bathroom']=='3 Bath') { echo 'selected'; } ?>>3 Bath</option>
						<option <?php if($data_post['bathroom']=='4 Bath') { echo 'selected'; } ?>>4 Bath</option>
						<option <?php if($data_post['bathroom']=='5 Bath') { echo 'selected'; } ?>>5 Bath</option>
						<option <?php if($data_post['bathroom']=='6 Bath') { echo 'selected'; } ?>>6 Bath</option>
						<option <?php if($data_post['bathroom']=='Shared Bathroom') { echo 'selected'; } ?>>Shared Bathroom</option>
						</select>
					</div>
					<label class="col-md-2">Furnished</label>
					<div class="col-md-4">
						<select class="input validate[required] form-control" name="furnished">
							<option value="">Select</option>
							<option <?php if($data_post['furnished']=='Yes') { echo 'selected'; } ?>>Yes</option>
							<option <?php if($data_post['furnished']=='No') { echo 'selected'; } ?>>No</option>
						</select>
					</div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Lease Type</label>
					<div class="col-md-4">
						<select class="input validate[required] form-control" name="lease_type">
							<option value="">Select</option>
							<option <?php if($data_post['lease_type']=='Six month lease') { echo 'selected'; } ?> >Six month lease</option>
							<option <?php if($data_post['lease_type']=='One year minimum lease') { echo 'selected'; } ?>>One year minimum lease</option>
							<option <?php if($data_post['lease_type']=='Two year minimum lease') { echo 'selected'; } ?>>Two year minimum lease</option>
							<option <?php if($data_post['lease_type']=='Flexible lease') { echo 'selected'; } ?>>Flexible lease</option>
						</select>
					</div>
					<label class="col-md-2">Pets</label>
					<div class="col-md-4">
						<select class="input validate[required] form-control" name="pet">
							<option value="">Select</option>
							<option <?php if($data_post['pet']=='No pets') { echo 'selected'; } ?>>No pets</option>
							<option <?php if($data_post['pet']=='Will consider pet') { echo 'selected'; } ?>>Will consider pet</option>
							<option <?php if($data_post['pet']=='Cat ok') { echo 'selected'; } ?>>Cat ok</option>
						</select>
					</div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Stucture Type</label>
					<div class="col-md-4">
						<select class="input validate[required] form-control"  name="structure_type">
							<option value="">Select</option>
							<option <?php if($data_post['structure_type']=='Apartments /Condos') { echo 'selected'; } ?>>Apartments /Condos </option>
							<option <?php if($data_post['structure_type']=='Houses /Guest Houses') { echo 'selected'; } ?>>Houses /Guest Houses </option>
							<option <?php if($data_post['structure_type']=='Garages /Storage') { echo 'selected'; } ?>>Garages /Storage</option>
							<option <?php if($data_post['structure_type']=='Commercial/Offices') { echo 'selected'; } ?>>Commercial/Offices </option>
							<option <?php if($data_post['structure_type']=='Lofts') { echo 'selected'; } ?>>Lofts </option>
							<option <?php if($data_post['structure_type']=='Hotels') { echo 'selected'; } ?>>Hotels </option>
							<option <?php if($data_post['structure_type']=='Other') { echo 'selected'; } ?>>Other </option>
							<option <?php if($data_post['structure_type']=='Roommates/Shares') { echo 'selected'; } ?>>Roommates/Shares</option>
							<option <?php if($data_post['structure_type']=='Vacations/Short-Term') { echo 'selected'; } ?>>Vacations/Short-Term</option>
						</select>
					</div>
					<label class="col-md-2">Unit Details</label>
					<div class="col-md-4"><input type="text" name="unit_detail" class="input validate[required] form-control" value="<?php echo $data_post['unit_detail']; ?>"></div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Meters</label>
					<div class="col-md-4"><input type="text" name="square_footage" class="input validate[required] form-control" value="<?php echo $data_post['square_footage']; ?>"></div>
					<label class="col-md-2">Parking</label>
					<div class="col-md-4">
						<select class="input validate[required] form-control" name="parking">
							<option value="">Select</option>
							<option <?php if($data_post['parking']=='Parking Available') { echo 'selected'; } ?>>Parking Available</option>
							<option <?php if($data_post['parking']=='No Parking') { echo 'selected'; } ?>>No Parking</option>
							<option <?php if($data_post['parking']=='Street parking') { echo 'selected'; } ?>>Street parking</option>
							<option <?php if($data_post['parking']=='1-car Gated parking') { echo 'selected'; } ?>>1-car Gated parking</option>
							<option <?php if($data_post['parking']=='1-car Parking included') { echo 'selected'; } ?>>1-car Parking included</option>
							<option <?php if($data_post['parking']=='1-car Garage parking') { echo 'selected'; } ?>>1-car Garage parking</option>
							<option <?php if($data_post['parking']=='2-car Parking included') { echo 'selected'; } ?>>2-car Parking included</option>
							<option <?php if($data_post['parking']=='2-car Garage parking') { echo 'selected'; } ?>>2-car Garage parking</option>
							<option <?php if($data_post['parking']=='3-car Parking included') { echo 'selected'; } ?>>3-car Parking included</option>
							<option <?php if($data_post['parking']=='3-car Garage parking') { echo 'selected'; } ?>>3-car Garage parking</option>
							<option <?php if($data_post['parking']=='Permit parking') { echo 'selected'; } ?>>Permit parking</option>
						</select>
					</div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Walkscore</label>
					<div class="col-md-1"><input type="number" name="walkscore" value="<?php echo $data_post['walkscore'];?>" class="input validate[required] form-control"></div>
					<div class="col-md-3" align="left">Out of 100</div>
					<label class="col-md-2">Soundscore</label>
					<div class="col-md-1"><input type="number" name="soundscore" value="<?php echo $data_post['soundscore'];?>" class="input validate[required] form-control"></div>
					<div class="col-md-3" align="left">Out of 100</div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Vehicle Noise</label>
					<div class="col-md-4">
						<select name="vehicle_noise" class="input validate[required] form-control">
							<option <?php if($data_post['vehicle_noise']=='Busy'){ echo 'selected'; } ?> >Busy</option>
							<option <?php if($data_post['vehicle_noise']=='Active'){ echo 'selected'; } ?>>Active</option>
							<option <?php if($data_post['vehicle_noise']=='Calm'){ echo 'selected'; } ?>>Calm</option>
						</select>
					</div>
					<label class="col-md-2">Airport Noise</label>
					<div class="col-md-4">
						<select name="airport_noise" class="input validate[required] form-control">
							<option <?php if($data_post['airport_noise']=='Busy'){ echo 'selected'; } ?> >Busy</option>
							<option <?php if($data_post['airport_noise']=='Active'){ echo 'selected'; } ?>>Active</option>
							<option <?php if($data_post['airport_noise']=='Calm'){ echo 'selected'; } ?>>Calm</option>
						</select>
					</div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Businesses</label>
					<div class="col-md-4">
						<select name="business_noise" class="input validate[required] form-control">
							<option <?php if($data_post['business_noise']=='Busy'){ echo 'selected'; } ?> >Busy</option>
							<option <?php if($data_post['business_noise']=='Active'){ echo 'selected'; } ?>>Active</option>
							<option <?php if($data_post['business_noise']=='Calm'){ echo 'selected'; } ?>>Calm</option>
						</select>
					</div>
				</div>
				<br>
				<div class="row">
					<label class="col-md-2">Availabile Amenities</label>
					<div class="col-md-4" align="left">
						<input type="checkbox" name="a_parking" value="1" <?php if($data_post['a_parking']=='1') { echo 'checked'; } ?> >&nbsp;&nbsp;Parking<br>
						<input type="checkbox" name="a_refrigerator" value="1" <?php if($data_post['a_refrigerator']=='1') { echo 'checked'; } ?>>&nbsp;&nbsp;Refrigertor<br>
						<input type="checkbox" name="a_pets" value="1" <?php if($data_post['a_pets']=='1') { echo 'checked'; } ?>>&nbsp;&nbsp;Allow Pets<br>
						<input type="checkbox" name="a_wheelchair" value="1" <?php if($data_post['a_wheelchair']=='1') { echo 'checked'; } ?>>&nbsp;&nbsp;WheelChair accessible<br>
					</div>
				</div>
				<br>
				<div>
					<center><input type="submit" class="btn btn-danger" value="Update"></center>
				</div>
				<br>
			</div>
		</form>	
			<div class="col-md-12 ls" align="center">
				<br>
				<div class="row">
					<center><h2>Update Image</h2></center>
				</div>
				<br>
				<div class="row">
					<form action="update_image_m.php" method="POST" enctype="multipart/form-data" id="image_a">
						<input type="hidden" name="pid" value="<?php echo $post_id; ?>">
						<label class="col-md-2">Front Image</label>
						<div class="col-md-2" align="left">
							<img src="../home_images/<?php echo $data_post['main_image'];?>" height="80" width="90"> 
						</div>
						<div class="col-md-3" align="left">	
							<input type="hidden" name="old_main_image" value="<?php echo $data_post['main_image']; ?>">
							<input type="file" name="main_image" class="input validate[required] form-control">
						</div>
						<div class="col-md-3">
							<input type="submit" class="btn btn-danger" value="Update">
						</div>
					</form>
				</div>
				<br>
				<div class="row">
					<form action="update_image_m.php" method="POST" enctype="multipart/form-data" id="image_b">
						<input type="hidden" name="pid" value="<?php echo $post_id; ?>">
						<label class="col-md-2">Image 1</label>
						<div class="col-md-2" align="left">
							<img src="../home_images/<?php echo $data_post['image1'];?>" height="80" width="90">
						</div>
						<div class="col-md-3" align="left">
							<input type="hidden" name="old_image1" value="<?php echo $data_post['image1']; ?>">
							<input type="file" name="image1" class="input validate[required] form-control">
						</div>
						<div class="col-md-3">
							<input type="submit" class="btn btn-danger" value="Update">
						</div>
					</form>
				</div>
				<br>
				<div class="row">
					<form action="update_image_m.php" method="POST" enctype="multipart/form-data" id="image_c">
						<input type="hidden" name="pid" value="<?php echo $post_id; ?>">
						<label class="col-md-2">Image 2</label>
						<div class="col-md-2" align="left">
							<img src="../home_images/<?php echo $data_post['image2'];?>" height="80" width="90">
						</div>
						<div class="col-md-3" align="left">
							<input type="hidden" name="old_image2" value="<?php echo $data_post['image2']; ?>">
							<input type="file" name="image2" class="input validate[required] form-control">
						</div>
						<div class="col-md-3">
							<input type="submit" class="btn btn-danger" value="Update">
						</div>
					</form>
				</div>
				<br>
				<div class="row">
					<form action="update_image_m.php" method="POST" enctype="multipart/form-data" id="image_d">
						<input type="hidden" name="pid" value="<?php echo $post_id; ?>">
						<label class="col-md-2">Image 3</label>
						<div class="col-md-2" align="left">
							<img src="../home_images/<?php echo $data_post['image3'];?>" height="80" width="90">
						</div>
						<div class="col-md-3" align="left">	
							<input type="hidden" name="old_image3" value="<?php echo $data_post['image3']; ?>">
							<input type="file" name="image3" class="input validate[required] form-control" >
						</div>
						<div class="col-md-3">
							<input type="submit" class="btn btn-danger" value="Update">
						</div>
					</form>
				</div>
				<br>
				<div class="row">
					<form action="update_image_m.php" method="POST" enctype="multipart/form-data" id="image_e">
						<input type="hidden" name="pid" value="<?php echo $post_id; ?>">
						<label class="col-md-2">Image 4</label>
						<div class="col-md-2" align="left">
							<img src="../home_images/<?php echo $data_post['image4'];?>" height="80" width="90">
						</div>
						<div class="col-md-3" align="left">
							<input type="hidden" name="old_image4" value="<?php echo $data_post['image4']; ?>">
							<input type="file" name="image4" class="input validate[required] form-control">
						</div>
						<div class="col-md-3">
							<input type="submit" class="btn btn-danger" value="Update">
						</div>
					</form>
				</div>
				<br>
				<div class="row">
					<form action="update_image_m.php" method="POST" enctype="multipart/form-data" id="image_f">
						<input type="hidden" name="pid" value="<?php echo $post_id; ?>">
						<label class="col-md-2">Image 5</label>
						<div class="col-md-2" align="left">
							<img src="../home_images/<?php echo $data_post['image5'];?>" height="80" width="90">
						</div>
						<div class="col-md-3" align="left">	
							<input type="hidden" name="old_image5" value="<?php echo $data_post['image5']; ?>">
							<input type="file" name="image5" class="input validate[required] form-control" >
						</div>
						<div class="col-md-3">
							<input type="submit" class="btn btn-danger" value="Update">
						</div>
					</form>
				</div>
				<br>
				<div class="row">
					
					<?php
					$n=6;
					if(isset($data_img2))
					{	
						foreach($data_img2 as $data_img)
						{ ?>
						<label class="col-md-2">Images <?php echo $n; ?></label>
						<div class="row">
							<input type="hidden" name="iid" value="<?php echo $data_img['image_id'] ?>">
							<div class="col-md-2" align="left">
								<img src="../home_images/<?php echo $data_img['image'];?>" height="80" width="90">
							</div>
							<div class="col-md-3">
								<a href="edit_image_r.php?iid=<?php echo $data_img['image_id'];?>&post_id=<?php echo $post_id;?>"  class="btn btn-danger">Update</a>
								<a href="delete_image_r.php?iid=<?php echo $data_img['image_id'];?>&post_id=<?php echo $post_id;?>" onclick="return confirm('Are you sure, want to Delete this Image')" class="btn btn-default">Delete</a>
							</div>
						</div>
						<br>
					<?php 
					$n++;	}
					}
					?>
					<input type="hidden" name="no_id" id="no_id" value="<?php echo $n; ?>">
				</div>
				<br>
				
				<div class="row">
					<div class="col-md-6">
						<form action="update_add_image.php" method="POST" enctype="multipart/form-data" id="image_add">
							<input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
							<div class="row">
								<label class="col-md-4">Add More Images</label>
								<div class="col-md-8">
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
			                      	<a id="add_roww" value='<?php echo $n;?>' class="btn btn-default pull-left">Add Image</a><a id='delete_roww' class="pull-right btn btn-default">Delete Image</a>
								</div>
							</div>
							<br>
							<div class="row">
								<input type="submit" value="Add" class="btn btn-danger">
							</div>
						</form>
					</div>
				</div>
				<br>
				<div class="row">
					<h2>Update Amenities</h2>
				</div>
				<div class="row">
					<form action="update_aminities.php" method="POST" >
						<input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
						<div class="col-md-6">
							<div class="row">
								<label class="col-md-4">Amenities</label>
								<div class="col-md-8">
								<?php
									foreach($data_amt2 as $data_amt)
									{ ?>
										<input type="text" class="form-control" name="amenities[]" value="<?php echo $data_amt; ?>">
									<br>
									<?php }
								?>
								</div>
								<br>
							</div>
							<br>
							<div class="row">
								<label class="col-md-4">Add More Amenities</label>
								<div class="col-md-6">
								  	<table class="table table-bordered table-hover" id="tab_logic">
			                        <tbody>
										<tr id='addr0'>
											<td>
												1
											</td>
											<td>
												<input type="text" name='amenities[]' placeholder='Amenities' class="input validate[required] form-control"  />
											</td>
										</tr>
										<tr id='addr1'></tr>	
									</tbody>
			                      	</table>
			                      	<a id="add_row" value='1' class="btn btn-default pull-left">Add Amenity</a><a id='delete_row' class="pull-right btn btn-default">Delete Amenity</a>
								</div>
							</div>
							<br>
							<div class="row">
								<input type="submit" class="btn btn-danger" value="Add">
							</div>
						</div>
					</form>	
				</div>
				<br>
				<div class="row">
					<h2>Update Property View Timing</h2>
				</div>
				<div class="row">
					<div class="col-md-3">
						<h4>Property View Timing :</h4>
					</div>
					<div class="col-md-6">
						<div class="row">
						<form action="update_time.php" method="POST">
							<input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
							<label class="col-md-2">Monday</label>
							<div class="col-md-2" >
								<select name="mon_time_frm">
								<option value="">From</option>
								<?php
								foreach($data_time2 as $data_time)
								{ ?>
									<option <?php if($data_time['time']==$data_post['mon_time_frm']){ echo 'selected'; } ?> ><?php echo $data_time['time']; ?></option>
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
									<option  <?php if($data_time['time']==$data_post['mon_time_to']){ echo 'selected'; } ?> ><?php echo $data_time['time']; ?></option>
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
									<option  <?php if($data_time['time']==$data_post['tue_time_frm']){ echo 'selected'; } ?>><?php echo $data_time['time']; ?></option>
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
									<option  <?php if($data_time['time']==$data_post['tue_time_to']){ echo 'selected'; } ?>><?php echo $data_time['time']; ?></option>
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
									<option  <?php if($data_time['time']==$data_post['wed_time_frm']){ echo 'selected'; } ?>><?php echo $data_time['time']; ?></option>
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
									<option  <?php if($data_time['time']==$data_post['wed_time_to']){ echo 'selected'; } ?>><?php echo $data_time['time']; ?></option>
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
									<option  <?php if($data_time['time']==$data_post['thu_time_frm']){ echo 'selected'; } ?>><?php echo $data_time['time']; ?></option>
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
									<option  <?php if($data_time['time']==$data_post['thu_time_to']){ echo 'selected'; } ?>><?php echo $data_time['time']; ?></option>
								<?php }
								?>
								</select>
							</div>
						</div>
						<br>
						<div class="row">
							<label class="col-md-2">Friday</label>
							<div class="col-md-2" >
								<select name="fri_time_frm">
								<option value="">From</option>
								<?php
								foreach($data_time2 as $data_time)
								{ ?>
									<option  <?php if($data_time['time']==$data_post['fri_time_frm']){ echo 'selected'; } ?>><?php echo $data_time['time']; ?></option>
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
									<option <?php if($data_time['time']==$data_post['fri_time_to']){ echo 'selected'; } ?>><?php echo $data_time['time']; ?></option>
								<?php }
								?>
								</select>
							</div>
						</div>
						<br>
						<div class="row">
							<label class="col-md-2">Saturday</label>
							<div class="col-md-2" >
								<select name="sat_time_frm">
								<option value="">From</option>
								<?php
								foreach($data_time2 as $data_time)
								{ ?>
									<option <?php if($data_time['time']==$data_post['sat_time_frm']){ echo 'selected'; } ?>><?php echo $data_time['time']; ?></option>
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
									<option <?php if($data_time['time']==$data_post['sat_time_to']){ echo 'selected'; } ?>><?php echo $data_time['time']; ?></option>
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
									<option <?php if($data_time['time']==$data_post['sun_time_frm']){ echo 'selected'; } ?>><?php echo $data_time['time']; ?></option>
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
									<option <?php if($data_time['time']==$data_post['sun_time_to']){ echo 'selected'; } ?>><?php echo $data_time['time']; ?></option>
								<?php }
								?>
								</select>
							</div>
						</div>
						<br>
						<div class="row">
							<center><input type="submit" class="btn btn-danger" value="Update"></center>
						</div>
						<br>
						</form>

					</div>
				</div>
				<br>
				<div class="row">
					<h2>Update Map Location</h2>
				</div>
				<div class="row">
					<label class="col-md-2">Current Location :</label>
					<div class="col-md-6">
						<div class="listing-map">									
							<div style="width: 280px; height: 230px; margin: 0px auto 15px; position: relative;">
								<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
								<div style='overflow:hidden;height:230px;width:280px;'>
									<div id='gmap_canvas' style='height:230px;width:280px;'></div>
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
								<?php echo "<script type='text/javascript'>function init_map(){var myOptions = {zoom:".$data_post['property_zoom'].",center:new google.maps.LatLng('".$data_post['property_lat']."','".$data_post['property_lng']."'),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(".$data_post['property_lat'].",".$data_post['property_lng'].")});infowindow = new google.maps.InfoWindow({content:'<strong>Location</strong><br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>"; ?>
							</div>
						</div>
					</div>
				</div>
				<br>
				<div class="row">
					<form action="update_location.php" method="POST">
						<input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
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
					<div class="row">
						<center><input type="submit" class="btn btn-danger" value="Update"></center>
					</form>
				</div>
				
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

 	$(document).ready(function(){
 		// alert('hi');
 		$("#image_a").validationEngine();
 	});
 	function checkHELLO(field, rules, i, options){
 			if (field.val() != "HELLO") {
 			return options.allrules.validate2fields.alertText;
 			}
 	}

 	$(document).ready(function(){
 		// alert('hi');
 		$("#image_b").validationEngine();
 	});
 	function checkHELLO(field, rules, i, options){
 			if (field.val() != "HELLO") {
 			return options.allrules.validate2fields.alertText;
 			}
 	}

 	$(document).ready(function(){
 		// alert('hi');
 		$("#image_c").validationEngine();
 	});
 	function checkHELLO(field, rules, i, options){
 			if (field.val() != "HELLO") {
 			return options.allrules.validate2fields.alertText;
 			}
 	}

 	$(document).ready(function(){
 		// alert('hi');
 		$("#image_d").validationEngine();
 	});
 	function checkHELLO(field, rules, i, options){
 			if (field.val() != "HELLO") {
 			return options.allrules.validate2fields.alertText;
 			}
 	}

 	$(document).ready(function(){
 		// alert('hi');
 		$("#image_e").validationEngine();
 	});
 	function checkHELLO(field, rules, i, options){
 			if (field.val() != "HELLO") {
 			return options.allrules.validate2fields.alertText;
 			}
 	}

 	$(document).ready(function(){
 		// alert('hi');
 		$("#image_f").validationEngine();
 	});
 	function checkHELLO(field, rules, i, options){
 			if (field.val() != "HELLO") {
 			return options.allrules.validate2fields.alertText;
 			}
 	}

 	$(document).ready(function(){
 		// alert('hi');
 		$("#image_add").validationEngine();
 	});
 	function checkHELLO(field, rules, i, options){
 			if (field.val() != "HELLO") {
 			return options.allrules.validate2fields.alertText;
 			}
 	}
 </script>