<?php
include('../functions/function.php');
include('check_login.php');

$pid= $_GET['pid'];
$que= "SELECT * FROM post WHERE post_id='$pid' ";
$obj= mysqli_query($conn,$que);
$data= mysqli_fetch_assoc($obj);

$que_img="SELECT * FROM house_image WHERE post_id='".$data['post_id']."' ";
$obj_img=mysqli_query($conn,$que_img);
if(mysqli_num_rows($obj_img))
{
	while($data_img3=mysqli_fetch_assoc($obj_img))
	{
		$data_img2[]= $data_img3;
	}
}


?>
    
    <!DOCTYPE HTML> 
<html lang="en">
  <head>

  	
 
		
				<title>pashutlehaskir.com</title>
				<link rel="shortcut icon" href="" />
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
	
	
	<!-- Google Tag Manager -->

<!-- End Google Tag Manager --> 


	
		
		<div id="slidedown-content" data-status="hide" class="none">
			<div id="login-content" class="fb">
				<form action="../login.php" name="loginForm" method="post">
					<span>
						<label>Username</label> 
						<input type="text" name="username" class="text" size="10" maxlength="100" />
					</span>
					<span>
						<label>Password</label>
						<input type="password" autocomplete="off" class="text" name="password" size="10" maxlength="45" />
					</span>	

					
					<input type="image" name="login" class="submit" src="../images/new/btn-login.png" align="absmiddle" />
					
					

				</form>
				<div class="separator">
				-------------- OR --------------
				</div>
				<div class="fb-login-section">
				<a href="#" class="fb-login"><img src="../images/fblogin.png"></a>
				</div>
			</div>		
		</div>
	
		<?php
		include('header.php');
		?>
	
	
    <!-- Carousel
    ================================================== -->
		
	<div class="container">

<div class="container locations">
	<div class="col-md-5" align="center"></div>
	
	
	<div class="col-md-12" align="center">

		<div class="listing-details container">
				
				
		<div class="container listing-content">		
				
		<div class="col-md-8">
			<div class="row"><h2 style="border-bottom:none;margin-bottom: 2px;"><?php echo $data['structure_type'];?></h2></div>
			<div class="row">
			<link media="screen" type="text/css" href="../js/new/slider/flexslider.css" rel="stylesheet">
				<div class="flexslider" id="slider">
					<?php
						if($data['featured_listing']=='Yes')
						{ ?>
							<div class="featured-badge"></div>
						<?php	}
						?>
					<div class="flex-viewport" style="overflow: hidden; position: relative;">
						<ul class="slides" style="width: 2600%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
							<li style="width: 752px; float: left; display: block;" class="flex-active-slide"><img style="width:auto;" src="../home_images/<?php echo $data['main_image'];?>" draggable="false"></li>
							<li style="width: 752px; float: left; display: block;"><img style="width:auto;" src="../home_images/<?php echo $data['image1'];?>" draggable="false"></li>
							<li style="width: 752px; float: left; display: block;"><img style="width:auto;" src="../home_images/<?php echo $data['image2'];?>" draggable="false"></li>
							<li style="width: 752px; float: left; display: block;"><img style="width:auto;" src="../home_images/<?php echo $data['image3'];?>" draggable="false"></li>
							<li style="width: 752px; float: left; display: block;"><img style="width:auto;" src="../home_images/<?php echo $data['image4'];?>" draggable="false"></li>
							<li style="width: 752px; float: left; display: block;"><img style="width:auto;" src="../home_images/<?php echo $data['image5'];?>" draggable="false"></li>
							<?php
							if(isset($data_img2))
							{
								foreach($data_img2 as $data_img)
								{ ?>
									<li style="width: 752px; float: left; display: block;"><img style="width:auto;" src="../home_images/<?php echo $data_img['image'];?>" draggable="false"></li>
							<?php }
							}
							?>
			<!-- 				<li style="width: 752px; float: left; display: block;"><img style="width:60%;" src="http://static.westsiderentals.com/photos/featured/photos/201106/7.jpg" draggable="false"></li>
							<li style="width: 752px; float: left; display: block;"><img style="width:60%;" src="http://static.westsiderentals.com/photos/featured/photos/201106/8.jpg" draggable="false"></li>
							<li style="width: 752px; float: left; display: block;"><img style="width:60%;" src="http://static.westsiderentals.com/photos/featured/photos/201106/9.jpg" draggable="false"></li>
							<li style="width: 752px; float: left; display: block;"><img style="width:60%;" src="http://static.westsiderentals.com/photos/featured/photos/201106/10.jpg" draggable="false"></li>
							<li style="width: 752px; float: left; display: block;"><img style="width:60%;" src="http://static.westsiderentals.com/photos/featured/photos/201106/111.jpg" draggable="false"></li>
							<li style="width: 752px; float: left; display: block;"><img style="width:60%;" src="http://static.westsiderentals.com/photos/featured/photos/201106/12.jpg" draggable="false"></li> -->
							<li style="width: 752px; float: left; display: block;"><img style="auto;" src="../home_images/<?php echo $data['main_image'];?>" draggable="false"></li>
						</ul>
					</div>
					<ul class="flex-direction-nav">
						<li><a href="#" class="flex-prev flex-disabled" tabindex="-1">Previous</a></li>
						<li><a href="#" class="flex-next">Next</a></li>
					</ul>
				</div>
				<div class="flexslider" id="carousel">
					<div class="flex-viewport" style="overflow: hidden; position: relative;">
						<ul class="slides" style="width: 2600%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
				          	<li style="width: 210px; float: left; display: block;" class="flex-active-slide"><img src="../home_images/<?php echo $data['main_image'];?>" draggable="false"></li>
							<li style="width: 210px; float: left; display: block;"><img src="../home_images/<?php echo $data['image1'];?>" draggable="false"></li>
							<li style="width: 210px; float: left; display: block;"><img src="../home_images/<?php echo $data['image2'];?>" draggable="false"></li>
							<li style="width: 210px; float: left; display: block;"><img src="../home_images/<?php echo $data['image3'];?>" draggable="false"></li>
							<li style="width: 210px; float: left; display: block;"><img src="../home_images/<?php echo $data['image4'];?>" draggable="false"></li>
							<li style="width: 210px; float: left; display: block;"><img src="../home_images/<?php echo $data['image5'];?>" draggable="false"></li>
							<?php
							if(isset($data_img2))
							{
								foreach($data_img2 as $data_img)
								{ ?>
									<li style="width: 210px; float: left; display: block;"><img src="../home_images/<?php echo $data_img['image'];?>" draggable="false"></li>
							<?php }
							}
							?>
				<!-- 			<li style="width: 210px; float: left; display: block;"><img src="http://static.westsiderentals.com/photos/featured/photos/201106/7.jpg" draggable="false"></li>
							<li style="width: 210px; float: left; display: block;"><img src="http://static.westsiderentals.com/photos/featured/photos/201106/8.jpg" draggable="false"></li>
							<li style="width: 210px; float: left; display: block;"><img src="http://static.westsiderentals.com/photos/featured/photos/201106/9.jpg" draggable="false"></li>
							<li style="width: 210px; float: left; display: block;"><img src="http://static.westsiderentals.com/photos/featured/photos/201106/10.jpg" draggable="false"></li>
							<li style="width: 210px; float: left; display: block;"><img src="http://static.westsiderentals.com/photos/featured/photos/201106/111.jpg" draggable="false"></li>
							<li style="width: 210px; float: left; display: block;"><img src="http://static.westsiderentals.com/photos/featured/photos/201106/12.jpg" draggable="false"></li> -->
							<li style="width: 210px; float: left; display: block;"><img src="../home_images/<?php echo $data['main_image'];?>" draggable="false"></li>
						</ul>
					</div>
					<ul class="flex-direction-nav">
						<li><a href="#" class="flex-prev flex-disabled" tabindex="-1">Previous</a></li>
						<li><a href="#" class="flex-next">Next</a></li>
					</ul>
				</div>
				
				

			  <!-- FlexSlider -->
			  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
			  <script src="../js/WSRFlexslider.js" defer=""></script>

			  <script type="text/javascript">
			   
			    $(window).load(function(){
			      
				  $('#carousel').flexslider({
			        animation: "slide",
			        controlNav: false,
			        animationLoop: false,
			        slideshow: false,
			        itemWidth: 210,
			        itemMargin: 5,
			        asNavFor: '#slider'
			      });
				  

			      $('#slider').flexslider({
			        animation: "slide",
			        controlNav: false,
			        animationLoop: false,
			        slideshow: false,
			        sync: "#carousel",
			        start: function(slider){
			          $('body').removeClass('loading');
			        }
			      });
			    });
			  </script>
			</div>
						 
						
						
			<div class="listing-info">
				<div class="row">
					<div class="header">PROPERTY DETAILS</div>
				</div>
				<div class="row odd">
					<div class="col-md-6">
						<strong>Name</strong><?php echo $data['name'];?>
					</div>
					<div class="col-md-6">
						<strong>Email </strong><?php echo $data['email'];?>
					</div>
				</div>
				<div class="row even">
					<div class="col-md-6">
						<strong>Phone No. </strong><?php echo $data['contact_a'];?>-<?php echo $data['contact_b'];?>-<?php echo $data['contact_c'];?>&nbsp;&nbsp;Ext- <?php echo $data['contact_d'];?>
					</div>
					<div class="col-md-6">
						<strong>Address</strong><?php echo $data['address'];?>
					</div>
				</div>
				<div class="row odd">
					<div class="col-md-6">
						<div class=" extra_padding">
							<strong>City/Area:</strong>
							<span itemtype="http://schema.org/PostalAddress" itemscope="" itemprop="address"><span itemprop="addressLocality"><?php echo $data['city'];?></span>, <span itemprop="addressRegion"><?php echo $data['state'];?></span></span>
							<span itemtype="http://schema.org/GeoCoordinates" itemscope="" itemprop="geo"><meta itemprop="latitude" content="34.0124539"><meta itemprop="longitude" content="-118.4849298"></span>
						</div>
					</div>
					<div class="col-md-6">
						<div class=" extra_padding">
							<strong>Listing Number:</strong><?php echo $data['listing_number'];?>
						</div>
					</div>
				</div>			
				<div class="row even">
					<div class="col-md-6">
						<strong>Rent Price:</strong>₪&nbsp;<?php echo $data['rent'];?> 
					</div>
					<div class="col-md-6">
						<strong>Listing Type:</strong> <?php echo $data['listing_type'];?> 
					</div>
				</div>
				<div class="row odd">
					<div class="col-md-6">
						<strong>Deposit:</strong>₪&nbsp;<?php echo $data['deposit'];?>
					</div>
					<div class="col-md-6">
						<strong>Bedrooms:</strong><?php echo $data['bedroom'];?>
					</div>
				</div>
				<div class="row even">
					<div class="col-md-6">
						<strong>Available:</strong>
						<span class="available_now">
							<span>
								<?php
								if($data['availability']<=date('Y-m-d'))
								{	
									echo "AVAILABLE - NOW!";
								}
								else
								{ 
								    echo "AVAILABLE - '".$data['availability']."' "; 
								}
								?>
							</span>
						</span>
					</div>
					<div class="col-md-6">
						<strong>Bathrooms:</strong><?php echo $data['bathroom'];?>
					</div>
				</div>
				<div class="row odd">
					<div class="col-md-6">
						<strong>Furnished:</strong><?php echo $data['furnished'];?>
					</div>
					<div class="col-md-6">
						<strong>Lease Type:</strong><?php echo $data['lease_type'];?>
					</div>
				</div>
				<div class="row even">
					<div class="col-md-6">
						<strong>Pets:</strong>
						<?php echo $data['pet'];?>
					</div>
					<div class="col-md-6">
						<strong>Structure Type:</strong><?php echo $data['structure_type'];?>
					</div>
				</div>
				<div class="row odd">
					<div class="col-md-6">
						<strong>Unit Details:</strong><?php echo $data['unit_type'];?>
					</div>
					<div class="col-md-6">
						<strong>Parking: </strong><?php echo $data['parking'];?>
					</div>
				</div>
				<div class="row even">
					<div class="col-md-6">
						<strong>Meters : </strong><?php echo $data['square_footage'];?>
					</div>
					<div class="col-md-6">
						<strong>Address</strong><?php echo $data['address'];?>
					</div>
				</div>
				<div class="row odd">
					<div class="col-md-6">
						<strong>Post Adding Date / Time:</strong><?php echo date('d-m-Y / H:m:s',strtotime($data['date'])) ;?>
					</div>
					<?php
					if($data['property_available']!='Available')
					{ ?>
						<div class="col-md-6">
							<strong style="color:red;">Property Rented To</strong><?php echo $data['property_available'];?>
						</div>
					<?php }
					?>
				</div>
				<?php
				if($data['featured_listing']=='Yes')
				{ ?>
					<div class="row even">
						<div class="col-md-6">
							<strong>Feature Listing : </strong><span style="color:red;"><?php echo $data['featured_listing'];?></span>
						</div>
						<!-- <div class="col-md-6">
							<strong>Credit Card Number :</strong><?php echo $data['f_credit_card_no'];?>
						</div> -->
					</div>
					<!-- <div class="row odd">
						<div class="col-md-6">
							<strong>Expiration Date : </strong><?php echo $data['f_credit_exp_mo'];?> / <?php echo $data['f_credit_exp_yr'];?>
						</div>
						<div class="col-md-6">
							<strong>CVV :</strong><?php echo $data['f_credit_card_cvv'];?>
						</div>
					</div> -->

				<?php }
				?>

				<!-- <div class="row odd">
					<div class="col-md-6">
						<strong>Open House: </strong>
						KEYS AVAILABLE FOR CHECKOUT @ 1020 WILSHIRE BLVD. SANTA MONICA CA, FROM 8AM-4PM 7-DAYS-A-WEEK!
					</div>
				</div> -->
			</div>
		</div>
								
								

								
							
					
						<div class="col-md-4">
							
			 				<div class="hidden-xs hidden-sm">			
			 					<br><a href="#" onclick="history.back();" class="btn btn-danger form-control">Back to Previous Page</a>	
								<br>	
			 					<a href="#" class="payrentLink" data-toggle="modal" data-target="#myModal">Instant Viewing</a>
			 					<div class="walkscore">
										<div class="top">WALKSCORE</div>
										<div class="body">
											<div class="middle">
												<div class="large" id="color_w"><span><?php echo $data['walkscore'];?></span></div>
												<div class="small">
													<span><?php echo $data['walkscore_descrp']; ?></span>
												</div>
											</div>
											</div><h3></h3></div>
			 				</div> 
								
							<div class="hidden-xs hidden-sm">
								<div class="soundscore">
									<div class="top">Soundscore: <span style="color: #EE583F" id="color_s"><?php echo $data['soundscore'];?></span></div>
									<div class="body">
										<div class="middle">
											<div class="medium">Vehicle Noise: 
												<span style="color: #EE583F !important" id="color_v"><?php echo $data['vehicle_noise'];?></span>
											</div>
											<div class="medium">Airport Noise: 
												<span style="color: #FFCB3F !important" id="color_a"><?php echo $data['airport_noise'];?></span>
											</div>
											<div class="medium">Businesses: 
												<span style="color: #EE583F !important" id="color_b"><?php echo $data['business_noise'];?></span>
											</div>
											<img width="220" border="0" src="../images/soundscore_module-gradient.png">
											<div class="small">
												<span><?php echo $data['soundscore_descrp']; ?></span>
											</div>
										</div>
									</div><h3></h3>
								</div>				
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
										<?php echo "<script type='text/javascript'>function init_map(){var myOptions = {zoom:".$data['property_zoom'].",center:new google.maps.LatLng('".$data['property_lat']."','".$data['property_lng']."'),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(".$data['property_lat'].",".$data['property_lng'].")});infowindow = new google.maps.InfoWindow({content:'<strong>Property Location</strong><br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>"; ?>
									</div>
								</div>
							</div>

							<div class="address-info">
								<!-- <div class="bigText">1827 7th St  #A, 90405</div>
									<div class="medText">
										WestsideRentals Leasing at (310) 576-1446
									</div>
									<div class="bold"><a class="mailtoLink" href="mailto:leasing@wsrbrokerage.com">leasing@wsrbrokerage.com</a></div> -->
									<!-- <a target="_blank" href="https://www.google.co.in/maps/@<?php echo $data['property_lat'];?>,<?php echo $data['property_lng'];?>,<?php echo $data['property_zoom'];?>z" class="gMapLink"><img width="22" align="absmiddle" src="../images/2016/icons/pin-listingicon.png"> Open in Google Maps</a> -->
									<a target="_blank" href="http://maps.google.com/maps?q=loc:<?php echo $data['property_lat'];?>,<?php echo $data['property_lng'];?>" class="gMapLink"> Open in Google Maps</a>
								<h1 style="text-transform: capitalize;"><?php echo $data['bedroom'];?> <?php echo $data['structure_type'];?> <span style="text-transform: lowercase;">in</span> <?php echo $data['city'];?></h1>
								<h3>Listing Info</h3><?php echo $data['structure_type'];?><br>
								<h3>Amenities</h3>
								<ul>
									<?php
									include("amenities.php");
									?>
								</ul>
								
							</div>
					</div>
					<div class="container"></div>
					<script src="https://open.mapquestapi.com/sdk/js/v7.2.s/mqa.toolkit.js?key=Fmjtd%7Cluubn16an0%2Cbg%3Do5-90axuz"></script>
					<script type="text/javascript">
						

							 /*An example of using the MQA.EventUtil to hook into the window load event and execute defined function
							  passed in as the last parameter. You could alternatively create a plain function here and have it
							  executed whenever you like (e.g. &lt;body onload="yourfunction"&gt;).*/

							  MQA.EventUtil.observe(window, 'load', function() {

								/*Create an object for options*/
								var options={
								  elt:document.getElementById('mapdiv'),        /*ID of element on the page where you want the map added*/
								  zoom:14,                                   /*initial zoom level of map*/
								  latLng:{lat:34.0124539, lng:-118.4849298},   /*center of map in latitude/longitude*/
								  mtype:'map'                                /*map type (map)*/
								};

								/*Construct an instance of MQA.TileMap with the options object*/
								window.map = new MQA.TileMap(options);
								
								MQA.withModule('largezoom', function() {
								  map.addControl(
									new MQA.LargeZoom(),
									new MQA.MapCornerPlacement(MQA.MapCorner.TOP_LEFT, new MQA.Size(5,5))
								  );
								});

								MQA.withModule('shapes', function() {
								  /*Creates a new MQA.CircleOverlay*/
								  var circle = new MQA.CircleOverlay();

								  /*Sets the radius unit to Miles. Options are 'MI' and 'KM' - defaults to miles if none specified.*/
								  circle.radiusUnit='MI';

								  /*Sets the radius measurement to 3 (miles) - specified with radiusUnit above.*/
								  circle.radius='0.5';	  

								  /*Sets the center point for the MQA.CircleOverlay*/
								  circle.shapePoints=[34.0124539, -118.4849298];
								  
								  /*Sets border color*/
								   circle.color='#B00303';
								 
								   /*Sets alpha transparency of the border*/
								   circle.colorAlpha=.3;
								 
								   /*Sets width of the border*/
								   circle.borderWidth=4;
								 
								   /*Sets fill color*/
								   circle.fillColor='#EFFF79';
								 
								   /*Sets alpha transparency of the fill color*/
								   circle.fillColorAlpha=.2;

								   /*Adds the MQA.CircleOverlay to the default shape collection of the MQA.TileMap*/
								   map.addShape(circle);
								   
								   
								});
								
								
							  });
					</script>
				</div> <!-- End listing-detail div -->
			</div>

			<!-- <div class="container-fluid footer">
				<div class="container highlight-section">
					<div class="col-md-8">
						<h2>AS SEEN IN </h2>
						<img src="../images/2016/as-seen-banner.jpg">
					</div>
					<div class="col-md-4">
						<a href="#"><img src="../images/2016/download-app-banner.jpg"></a>
					</div>
				</div>
				<div class="container-fluid disclaimer">
					<div class="col-md-12 col-xs-12  text-center">
						Westside Rentals is bonded and the only non restricted fully licensed rental service under the California Bureau of Real Estate.
					</div>
				</div>													
			</div> -->
		</div>	
	</div>
</div> <!-- End main container div -->
	
	
		<!-- FOOTER -->
	<?php
		include('footer.php');
	?>

		
	<div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog">
	      <!-- Modal content-->
	      	<div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title">Property Viewing Time </h4>
		        </div>
		        <div class="modal-body">
		          <!-- <p ><span id="p">Are you sure, want to Delete this Reminder ?</span></p> -->
		          <table class="table table-striped">
		          	<tr>
		          		<th>Day</th>
		          		<th>Time From</th>
		          		<th>Time To</th>
		          	</tr>
		          	<tr>
		          		<td>Monday</td>
		          		<td><?php echo $data['mon_time_frm'];?></td>
		          		<td><?php echo $data['mon_time_to'];?></td>
		          	</tr>
		          	<tr>
		          		<td>Tueday</td>
		          		<td><?php echo $data['tue_time_frm'];?></td>
		          		<td><?php echo $data['tue_time_to'];?></td>
		          	</tr>
		          	<tr>
		          		<td>Wednesday</td>
		          		<td><?php echo $data['wed_time_frm'];?></td>
		          		<td><?php echo $data['wed_time_to'];?></td>
		          	</tr>
		          	<tr>
		          		<td>Thursday</td>
		          		<td><?php echo $data['thu_time_frm'];?></td>
		          		<td><?php echo $data['thu_time_to'];?></td>
		          	</tr>
		          	<tr>
		          		<td>Friday</td>
		          		<td><?php echo $data['fri_time_frm'];?></td>
		          		<td><?php echo $data['fri_time_to'];?></td>
		          	</tr>
		          	<tr>
		          		<td>Saturday</td>
		          		<td><?php echo $data['sat_time_frm'];?></td>
		          		<td><?php echo $data['sat_time_to'];?></td>
		          	</tr>
		          	<tr>
		          		<td>Sunday</td>
		          		<td><?php echo $data['sun_time_frm'];?></td>
		          		<td><?php echo $data['sun_time_to'];?></td>
		          	</tr>
		          </table>
		        </div>
		        <div class="modal-footer">
		          	<!-- <button type="button" class="btn btn-default" id="yes">Yes</button> -->
		          	<button type="button" class="btn btn-default" data-dismiss="modal" id="no" >Close</button>
		 			<input type="hidden" class="btn btn-success" name="id" id="id" value="<?php echo $pid; ?>">
		 			
		        </div>
	      	</div>
	    </div>
	</div>		
		 
	
	
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
	


	<script type="text/javascript">
	$(document).ready(function(){
		var a=$("#color_s").text();
		if(a=='Calm')
		{
			$("#color_s").css("color", "#92E342");
		}
		if(a=='Active')
		{
			$("#color_s").css("color", "#FFC000");
		}
		if(a=='Busy')
		{
			$("#color_s").css("color", "red");
		}
	});
	</script>
	<script type="text/javascript">
	$(document).ready(function(){
		var a=$("#color_v").text();
		if(a=='Calm')
		{
			$("#color_v").css("color", "#92E342");
		}
		if(a=='Active')
		{
			$("#color_v").css("color", "#FFC000");
		}
		if(a=='Busy')
		{
			$("#color_v").css("color", "red");
		}
	});
	</script>

	<script type="text/javascript">
	$(document).ready(function(){
		var a=$("#color_a").text();
		if(a=='Calm')
		{
			$("#color_a").css("color", "#92E342");
		}
		if(a=='Active')
		{
			$("#color_a").css("color", "#FFC000");
		}
		if(a=='Busy')
		{
			$("#color_a").css("color", "red");
		}
	});
	</script>

	<script type="text/javascript">
	$(document).ready(function(){
		var a=$("#color_b").text();
		if(a=='Calm')
		{
			$("#color_b").css("color", "#92E342");
		}
		if(a=='Active')
		{
			$("#color_b").css("color", "#FFC000");
		}
		if(a=='Busy')
		{
			$("#color_b").css("color", "red");
		}
	});
	</script>

	<script type="text/javascript">
	$(document).ready(function(){
		var a=$("#color_w").text();
		if(a=='Easy')
		{
			$("#color_w").css("color", "#92E342");
		}
		if(a=='Average')
		{
			$("#color_w").css("color", "#FFC000");
		}
		if(a=='Hard')
		{
			$("#color_w").css("color", "red");
		}
	});
	</script>