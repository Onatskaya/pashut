<?php
include('functions/function.php');
$pid= $_GET['pid'];
$events = get_viewing_time($pid);

if(!$events){
    $events = '[]';
}

if($_SESSION['language']=='Hebrew')
{
	$getto='';
	foreach($_GET as $key=>$val)
	{
		$getto.=$key.'='.$val.'&';
	}
   echo "<script>location.href='view_detail_h.php?$getto'</script>";
}
if(isset($_SESSION['member_logged']))
{
	$member_id= $_SESSION['member_id'];	
	$que_fav="SELECT * FROM favorite_tbl WHERE member_id='$member_id' AND property_id='$pid' ";
	$obj_fav= mysqli_query($conn,$que_fav);
	if(mysqli_num_rows($obj_fav))
	{
		$fav_status=mysqli_fetch_assoc($obj_fav)['status'];
	}
}

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

$que_city="SELECT * FROM city ";
$obj_city=mysqli_query($conn,$que_city);
while($data_city3=mysqli_fetch_assoc($obj_city))
{
	$data_city2[]=$data_city3;
}


$que_time="SELECT * FROM timing ";
$obj_time=mysqli_query($conn,$que_time);
while($data_time3=mysqli_fetch_assoc($obj_time))
{
	$data_time2[]=$data_time3;
}

?>
   
   <style>
   	.hov.selectdtr {
   	 background: rgb(61, 77, 101) none repeat scroll 0 0 !important;
	 color:#FFF;
	}
   </style> 
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
				<link href="css/201603/ui-lightness/jquery-ui-1.10.4.css" rel="stylesheet">
				<link rel="stylesheet" href="css/bootstrap.min.css">
				<!-- Custom styles for this template -->
				<link href="css/201603/global.css" rel="stylesheet">
				<link href="css/201603/section.css" rel="stylesheet">
				<link href="css/201603/carousel.css" rel="stylesheet">
                <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.0.1/fullcalendar.min.css">
			
					<meta name="keywords" content="pashutlehaskir.com | Rent SoCal Houses, Apartments & More, Los Angeles rentals, Santa Monica House, South Bay Rentals, Los Angeles Apartments, Orange County Rentals, San Diego Apartments, Hermosa Beach Apartments, Hollywood For Rent, Burbank Apartments, Glendale Homes, Studio City Rentals, Apartments for Rent, Houses for Rent, Condos for Rent, Apartments in Los Angeles, Apartments in LA, USC, University of Southern California, Cal State, California State University, UCLA, University of California, University of California Los Angeles, Loyola Marymount University, Pepperdine, Pepperdine University, USC Student Housing, USC Housing, USC Apartments, Cal State Housing, Cal State Student Housing, Cal State Apartments, UCLA Housing, UCLA Student Housing, UCLA Apartments, LMU Housing, LMU Student Housing, LMU Apartments, Pepperdine Housing, Pepperdine Student Housing, Pepperdine Apartments" />
				
					<meta name="description" content="pashutlehaskir.com is the #1 home finding service in the Los Angeles area. Search SoCal apartment rentals, houses, condos & roommates!" />
				
					<meta name="robots" content="index,follow" />
					<meta name="GOOGLEBOT" content="index,follow" />
				
			
			
			<meta name="google-translate-customization" content="954d153704cc37f5-fac58c9bb4d3c842-g115d03cfb1ac5d23-17"></meta>
	</head>
		

<style type="text/css">
	.search-results .search-filters {
	    position: relative;
	    width: 100%;
	}

    #color_w.average, #color_b.active, #color_a.active, #color_v.active, #color_s.active{
        color: rgb(255, 192, 0);
    }
    #color_w.easy, #color_b.calm, #color_a.calm, #color_v.calm, #color_s.calm{
        color: #92E342;
    }

    #color_w.hard, #color_b.busy, #color_a.busy, #color_v.busy, #color_s.busy{
        color: red;
    }

</style>
	<body  class="guest" >
	
	
	<!-- Google Tag Manager -->

<!-- End Google Tag Manager --> 


	
		
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

<div class="locations">
	<div class="col-md-5" align="center"></div>
	
	
	<div class="col-md-12" align="center">

		<div class="listing-details">
				
				
		<div class="listing-content">		
				
		<div class="col-md-8 col-xs-12">
			<!-- <div class="row">
				<div class="container-fluid search-results photo">
					<div class="search-filters">	
						<form action="guestsearch.php" name="searchForm" method="GET">
							<div class="search-filters-span">
								<div class="col">
									<select name="city" style="width:32%;" class="medium right-pad">
										<?php
				                            foreach($data_city2 as $data_city)
				                            { ?>
				                                <option><?php echo $data_city['city_name'];?></option>
				                        <?php }
				                        ?>
									</select>
								</div>
								<div class="col">	
										<select class="med" name="priceLow">
											<option value="0">From</option>
											
												<option value="">₪0</option>
				                                <option value="500">₪500</option>
				                                <option value="1000">₪1000</option>
				                                <option value="1500">₪1500</option>
				                                <option value="2000">₪2000</option>
				                                <option value="2500">₪2500</option>
				                                <option value="3000">₪3000</option>
				                                <option value="3500">₪3500</option>
				                                <option value="4000">₪4000</option>
				                                <option value="4500">₪4500</option>
				                                <option value="5000">₪5000</option>
				                                <option value="5500">₪5500</option>
				                                <option value="6000">₪6000</option>
				                                <option value="6500">₪6500</option>
				                                <option value="7000">₪7000</option>
				                                <option value="7500">₪7500</option>
				                                <option value="8000">₪8000</option>
				                                <option value="8500">₪8500</option>
				                                <option value="9000">₪9000</option>
				                                <option value="9500">₪9500</option>
				                                <option value="10000">₪10000</option>
				                                <option value="10500">₪10500</option>
				                                <option value="11000">₪11000</option>
				                                <option value="11500">₪11500</option>
				                                <option value="12000">₪12000</option>
				                                <option value="12500">₪12500</option>
				                                <option value="13000">₪13000</option>
				                                <option value="13500">₪13500</option>
				                                <option value="14000">₪14000</option>
				                                <option value="14500">₪14500</option>
				                                <option value="15000">₪15000</option>
				                                <option value="15500">₪15500</option>
				                                <option value="16000">₪16000</option>
				                                <option value="16500">₪16500</option>
				                                <option value="17000">₪17000</option>
				                                <option value="17500">₪17500</option>
				                                <option value="18000">₪18000</option>
				                                <option value="18500">₪18500</option>
				                                <option value="19000">₪19000</option>
				                                <option value="19500">₪19500</option>
				                                <option value="20000">₪20000</option>
				                                <option value="20500">₪20500</option>
				                                <option value="21000">₪21000</option>
				                                <option value="21500">₪21500</option>
				                                <option value="22000">₪22000</option>
				                                <option value="22500">₪22500</option>
				                                <option value="23000">₪23000</option>
				                                <option value="23500">₪23500</option>
				                                <option value="24000">₪24000</option>
				                                <option value="24500">₪24500</option>
				                                <option value="25000">₪25000</option>
				                                <option value="25500">₪25500</option>
				                                <option value="26000">₪26000</option>
				                                <option value="26500">₪26500</option>
				                                <option value="27000">₪27000</option>
				                                <option value="27500">₪27500</option>
				                                <option value="28000">₪28000</option>
				                                <option value="28500">₪28500</option>
				                                <option value="29000">₪29000</option>
				                                <option value="29500">₪29500</option>
				                                <option value="30000">₪30000</option>
												
										</select>
										<span class="">-</span>
										<select class="med pad" name="priceHigh">
											<option value="0">To</option>
											
													<option value="500">₪500</option>
				                                    <option value="1000">₪1000</option>
				                                    <option value="1500">₪1500</option>
				                                    <option value="2000">₪2000</option>
				                                    <option value="2500">₪2500</option>
				                                    <option value="3000">₪3000</option>
				                                    <option value="3500">₪3500</option>
				                                    <option value="4000">₪4000</option>
				                                    <option value="4500">₪4500</option>
				                                    <option value="5000">₪5000</option>
				                                    <option value="5500">₪5500</option>
				                                    <option value="6000">₪6000</option>
				                                    <option value="6500">₪6500</option>
				                                    <option value="7000">₪7000</option>
				                                    <option value="7500">₪7500</option>
				                                    <option value="8000">₪8000</option>
				                                    <option value="8500">₪8500</option>
				                                    <option value="9000">₪9000</option>
				                                    <option value="9500">₪9500</option>
				                                    <option value="10000">₪10000</option>
				                                    <option value="10500">₪10500</option>
				                                    <option value="11000">₪11000</option>
				                                    <option value="11500">₪11500</option>
				                                    <option value="12000">₪12000</option>
				                                    <option value="12500">₪12500</option>
				                                    <option value="13000">₪13000</option>
				                                    <option value="13500">₪13500</option>
				                                    <option value="14000">₪14000</option>
				                                    <option value="14500">₪14500</option>
				                                    <option value="15000">₪15000</option>
				                                    <option value="15500">₪15500</option>
				                                    <option value="16000">₪16000</option>
				                                    <option value="16500">₪16500</option>
				                                    <option value="17000">₪17000</option>
				                                    <option value="17500">₪17500</option>
				                                    <option value="18000">₪18000</option>
				                                    <option value="18500">₪18500</option>
				                                    <option value="19000">₪19000</option>
				                                    <option value="19500">₪19500</option>
				                                    <option value="20000">₪20000</option>
				                                    <option value="20500">₪20500</option>
				                                    <option value="21000">₪21000</option>
				                                    <option value="21500">₪21500</option>
				                                    <option value="22000">₪22000</option>
				                                    <option value="22500">₪22500</option>
				                                    <option value="23000">₪23000</option>
				                                    <option value="23500">₪23500</option>
				                                    <option value="24000">₪24000</option>
				                                    <option value="24500">₪24500</option>
				                                    <option value="25000">₪25000</option>
				                                    <option value="25500">₪25500</option>
				                                    <option value="26000">₪26000</option>
				                                    <option value="26500">₪26500</option>
				                                    <option value="27000">₪27000</option>
				                                    <option value="27500">₪27500</option>
				                                    <option value="28000">₪28000</option>
				                                    <option value="28500">₪28500</option>
				                                    <option value="29000">₪29000</option>
				                                    <option value="29500">₪29500</option>
				                                    <option value="30000">₪30000</option>
											
										</select>
									</div>
									<div class="col">										
										<select name="structure_type" style="width:32%;" class="medium right-pad">
											<option>Apartments /Condos</option>
											<option>Houses /Guest Houses</option>
											<option>Garages /Storage</option>
											<option>Commercial/Offices</option>
											<option>Lofts</option>
											<option>Hotels</option>
											<option>Other </option>
											<option>Roommates/Shares</option>
											<option>Vacations/Short-Term</option>
										</select>
									</div>
									<div class="col">
										<input type="hidden" value="g" name="searchType">
										
										<input type="submit" align="absmiddle" value="SEARCH" class="search" name="search-submit">
									</div>
								</div>				
						</form>
					</div>
				</div>
			</div> -->
			<div class="row">
			<link media="screen" type="text/css" href="js/new/slider/flexslider.css" rel="stylesheet">


                <div class="flexslider" id="slider">
                    <?php
                    if($data['featured_listing']=='Yes')
                    { ?>
                        <div class="featured-badge"></div>
                    <?php	}
                    ?>
                    <div class="flex-viewport" style="overflow: hidden; position: relative;">
                        <ul class="slides" style="width: 2600%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                            <?php if($main_image = slide_image_path('home_images/', $data['main_image'])): ?>
                                <li style="width: 752px; float: left; display: block;" class="flex-active-slide"><img style="width:80%;" src="<?php echo $main_image; ?>" draggable="false"></li>
                            <?php endif; ?>

                            <?php if($image1 = slide_image_path('home_images/', $data['image1'])): ?>
                                <li style="width: 752px; float: left; display: block;"><img style="width:80%;" src="<?php echo $image1; ?>" draggable="false"></li>
                            <?php endif; ?>
                            <?php if($image2 = slide_image_path('home_images/', $data['image2'])): ?>
                                <li style="width: 752px; float: left; display: block;"><img style="width:80%;" src="<?php echo $image2; ?>" draggable="false"></li>
                            <?php endif; ?>
                            <?php if($image3 = slide_image_path('home_images/', $data['image3'])): ?>
                                <li style="width: 752px; float: left; display: block;"><img style="width:80%;" src="<?php echo $image3; ?>" draggable="false"></li>
                            <?php endif; ?>
                            <?php if($image4 = slide_image_path('home_images/', $data['image4'])): ?>
                                <li style="width: 752px; float: left; display: block;"><img style="width:80%;" src="<?php echo $image4; ?>" draggable="false"></li>
                            <?php endif; ?>
                            <?php if($image5 = slide_image_path('home_images/', $data['image5'])): ?>
                                <li style="width: 752px; float: left; display: block;"><img style="width:80%;" src="<?php echo $image5; ?>" draggable="false"></li>
                            <?php endif; ?>
                            <?php
                            if(isset($data_img2))
                            {
                                foreach($data_img2 as $data_img)
                                { ?>
                                    <?php if(!slide_image_path('home_images/', $data_img['image'])) continue; ?>
                                    <li style="width: 752px; float: left; display: block;"><img style="width:80%;" src="../home_images/<?php echo $data_img['image'];?>" draggable="false"></li>
                                <?php }
                            }
                            ?>
                            <!--                            --><?php //if($main_image = slide_image_path('home_images/', $data['main_image'])): ?>
                            <!--							<li style="width: 752px; float: left; display: block;"><img style="width:60%;" src="--><?php //echo $main_image; ?><!--" draggable="false"></li>-->
                            <!--                            --><?php //endif; ?>
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

                            <?php if($main_image = slide_image_path('home_images/', $data['main_image'])): ?>
                                <li style="width: 210px; float: left; display: block;" class="flex-active-slide"><img src="<?php echo $main_image; ?>" draggable="false"></li>
                            <?php endif; ?>
                            <?php if($image1 = slide_image_path('home_images/', $data['image1'])): ?>
                                <li style="width: 210px; float: left; display: block;"><img src="<?php echo $image1; ?>" draggable="false"></li>
                            <?php endif; ?>
                            <?php if($image2 = slide_image_path('home_images/', $data['image2'])): ?>
                                <li style="width: 210px; float: left; display: block;"><img src="<?php echo $image2; ?>" draggable="false"></li>
                            <?php endif; ?>
                            <?php if($image3 = slide_image_path('home_images/', $data['image3'])): ?>
                                <li style="width: 210px; float: left; display: block;"><img src="<?php echo $image3; ?>" draggable="false"></li>
                            <?php endif; ?>
                            <?php if($image4 = slide_image_path('home_images/', $data['image4'])): ?>
                                <li style="width: 210px; float: left; display: block;"><img src="<?php echo $image4; ?>" draggable="false"></li>
                            <?php endif; ?>
                            <?php if($image5 = slide_image_path('home_images/', $data['image5'])): ?>
                                <li style="width: 210px; float: left; display: block;"><img src="<?php echo $image5; ?>" draggable="false"></li>
                            <?php endif; ?>
                            <?php
                            if(isset($data_img2))
                            {
                                foreach($data_img2 as $data_img)
                                { ?>
                                    <?php if(!slide_image_path('home_images/', $data_img['image'])) continue; ?>
                                    <li style="width: 210px; float: left; display: block;"><img src="../home_images/<?php echo $data_img['image'];?>" draggable="false"></li>
                                <?php }
                            }
                            ?>
                            <!--							<li style="width: 210px; float: left; display: block;"><img src="../home_images/--><?php //echo $data['main_image'];?><!--" draggable="false"></li>-->
                        </ul>
                    </div>
                    <ul class="flex-direction-nav">
                        <li><a href="#" class="flex-prev flex-disabled" tabindex="-1">Previous</a></li>
                        <li><a href="#" class="flex-next">Next</a></li>
                    </ul>
                </div>





				
				

			  <!-- FlexSlider -->
			  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
			  <script src="js/WSRFlexslider.js" defer></script>

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
						<div class=" extra_padding">
							<strong>City/Area:</strong>
							<span itemtype="http://schema.org/PostalAddress" itemscope="" itemprop="address"><?php $WHERE_CITY['city_id']=$data['city']; echo select('city',$WHERE_CITY)[0]['city_name'];?></span>, <span itemprop="addressRegion"><?php $WHERE_STATE['id']=$data['state']; echo select('state',$WHERE_STATE)[0]['state_name'];?></span></span>
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
						<strong>Listing Type:</strong> <?php $WHERE_LTYPE['list_id']=$data['listing_type']; echo select('listing_type',$WHERE_LTYPE)[0]['listing_type'];?>
					</div>
				</div>
				<div class="row odd">
					<div class="col-md-6">
						<strong>Deposit:</strong>₪&nbsp;<?php echo $data['deposit'];?>
					</div>
					<div class="col-md-6">
						<strong>Bedrooms:</strong><?php $WHERE_BEDROOM['id']=$data['bedroom']; echo select('bedroom_tbl',$WHERE_BEDROOM)[0]['bedroom'];?>
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
						<strong>Bathrooms:</strong><?php $WHERE_BATH['id']=$data['bathroom']; echo select('bath_tbl',$WHERE_BATH)[0]['bath'];?>
					</div>
				</div>
				<div class="row odd">
					<div class="col-md-6">
						<strong>Furnished:</strong><?php $WHERE_FUR['id']=$data['furnished']; echo select('furnished',$WHERE_FUR)[0]['furnished'];?>
					</div>
					<div class="col-md-6">
						<strong>Lease Type:</strong><?php $WHERE_LEASE['id']=$data['lease_type']; echo select('lease_tbl',$WHERE_LEASE)[0]['lease_type'];?>
					</div>
				</div>
				<div class="row even">
					<div class="col-md-6">
						<strong>Pets:</strong>
						<?php $WHERE_PETS['id']=$data['pet']; echo select('pets',$WHERE_PETS)[0]['pets'];?>
					</div>
					<div class="col-md-6">
						<strong>Structure Type:</strong><?php $WHERE_STRUCT['struct_id']=$data['structure_type']; echo select('structure_type',$WHERE_STRUCT)[0]['name_en'];?>
					</div>
				</div>
				<div class="row odd">
					<div class="col-md-6">
						<strong>Unit Details:</strong><?php $WHERE_UNIT['id']=$data['unit_type']; echo select('unit_tbl',$WHERE_UNIT)[0]['unit_type'];?>
					</div>
					<div class="col-md-6">
						<strong>Parking: </strong><?php $WHERE_PARK['id']=$data['parking']; echo select('parking_tbl',$WHERE_PARK)[0]['parking'];?>
					</div>
				</div>
				<div class="row even">
					<div class="col-md-6">
						<strong>Meters: </strong><?php echo $data['square_footage'];?>
					</div>					
					<?php
					if(isset($_SESSION['member_logged']))
					{ ?>
						<div class="col-md-6">
							<strong>Address</strong><?php echo $data['address'];?>
						</div>				</div>
					<?php	
					}
					else
					{
					?>							<div class="col-md-6">													</div>											</div>				<?php 					}				?>	
					<div class="row odd">						<div class="col-md-6">
							<strong>Vacancy Heading</strong><?php echo $data['short_descp'];?>
						</div>						<div class="col-md-6">
							<strong>Vacancy Description</strong><?php echo $data['full_descp'];?>
						</div>					</div>
				<?php
				if(isset($_SESSION['member_logged']))
				{ ?>
				<div class="row even">
					<div class="col-md-6">
						<strong>Name</strong><?php echo $data['name'];?>
					</div>
					<div class="col-md-6">
						<strong>Email </strong><span id="land_id"><?php echo $data['email'];?></span>
					</div>
				</div>
				<div class="row odd">
					<div class="col-md-6">
						<strong>Phone No. </strong><?php echo $data['contact_a'];?>-<?php echo $data['contact_b'];?>-<?php echo $data['contact_c'];?>&nbsp;&nbsp;Ext- <?php echo $data['contact_d'];?>
					</div>
					<!-- <div class="col-md-6">
						<strong>Full Address</strong><?php echo $data['street_no'];?>, <?php echo $data['street_name'];?>, <?php echo $data['city'];?>, <?php echo $data['state'];?>- <?php echo $data['pincode'];?>
					</div> -->
				</div>
				<!-- <div class="row odd">
					<div class="col-md-6">
						<strong>Open House: </strong>
						KEYS AVAILABLE FOR CHECKOUT @ 1020 WILSHIRE BLVD. SANTA MONICA CA, FROM 8AM-4PM 7-DAYS-A-WEEK!
					</div>
				</div> -->
				<?php	
				}
				?>
			</div>
		</div>
								
								

								
							
					
						<div class="col-md-4 col-xs-12">
							<div class="">	
								<br><a href="#" onclick="history.back();" class="btn btn-danger form-control">Back to Previous Page</a>	
								<?php
								if(!isset($_SESSION['member_logged']))
								{ ?>
								<br><a href="join.php" class="signupLink">JOIN TO VIEW CONTACT INFO</a>
								<?php }
								?>
									<a href="#" class="payrentLink" data-toggle="modal" data-target="#myModal">Instant Viewing</a>
									<div class="walkscore">
										<div class="top">WALKSCORE</div>
										<div class="body">
											<div class="middle">
                                                <?php $WHERE_WALK['id']=$data['walkscore']; $walkscore = select('walkscore',$WHERE_WALK)[0]['walkscore'];?>
												<div class="large"><span id="color_w" class="<?php echo strtolower($walkscore); ?>" ><?php echo $walkscore; ?></span></div>
												<div class="small">
													<span><?php $WHERE_WALK['id']=$data['walkscore_descrp']; echo select('walkscore_desc',$WHERE_WALK)[0]['walkscore_desc'];?></span>
												</div>
											</div>
											</div><h3></h3></div>
							</div> 
			 
							<div class="">				
								<div class="soundscore">
                                    <?php $WHERE_SOUND['id']=$data['soundscore']; $soundscore = select('soundscore',$WHERE_SOUND)[0]['soundscore']; ?>
									<div class="top">Soundscore: <span id="color_s" class="<?php echo strtolower($soundscore); ?>"><?php echo $soundscore;?></span></div>
									<div class="body">
										<div class="middle">
                                            <?php $WHERE_VEHICAL['id']=$data['vehicle_noise']; $vehicle_noise = select('vehicle_noise',$WHERE_VEHICAL)[0]['vehicle_noise'];?>
											<div class="medium">Vehicle Noise: 
												<span id="color_v" class="<?php echo strtolower($vehicle_noise); ?>"><?php echo $vehicle_noise; ?></span>
											</div>
                                            <?php $WHERE_AIR['id']=$data['airport_noise']; $airport_noise = select('airport_noise',$WHERE_AIR)[0]['airport_noise'];?>
											<div class="medium">Airport Noise: 
												<span id="color_a" class="<?php echo strtolower($airport_noise); ?>"><?php echo $airport_noise;?></span>
											</div>
                                            <?php $WHERE_BUIS['id']=$data['business_noise']; $businesses = select('businesses',$WHERE_BUIS)[0]['businesses'];?>
											<div class="medium">Businesses: 
												<span id="color_b" class="<?php echo strtolower($businesses); ?>"><?php echo $businesses; ?></span>
											</div>
											<img width="220" border="0" src="images/soundscore_module-gradient.png">
											<div class="small">
												<span><?php $WHERE_SOUNDD['id']=$data['soundscore_descrp']; echo select('soundscore_desc',$WHERE_SOUNDD)[0]['soundscore_desc'];?></span>
											</div>
										</div>
									</div><h3></h3>
								</div>
								<div class="listing-map">									
									<div style="width: 280px; height: 230px; margin: 0px auto 15px; position: relative;">
										<script src='http://maps.google.com/maps/api/js?key=AIzaSyACWUZ9OL8BQVQC-4cSsSFmEo71SLDzvlk&sensor=false'></script>
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
										<?php echo "<script type='text/javascript'>function init_map(){var myOptions = {zoom:".$data['property_zoom'].",center:new google.maps.LatLng('".$data['property_lat']."','".$data['property_lng']."'),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(".$data['property_lat'].",".$data['property_lng'].")});infowindow = new google.maps.InfoWindow({content:'<strong>Location</strong><br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>"; ?>
									</div>
								</div>
							</div>

							<div class="address-info">
									<div class="actionLinks">										
									<!-- <a href="#" class="applyLink">Apply Now</a>
									<a href="#" class="payrentLink">Pay Rent Online</a> -->
									<!-- <a href="#" class="messageLink"><img width="22" align="absmiddle" src="images/2016/icons/message-center_icon.png"> Send Message</a> -->
									<!-- <a target="_blank" href="https://www.google.co.in/maps/@<?php echo $data['property_lat'];?>,<?php echo $data['property_lng'];?>,<?php echo $data['property_zoom'];?>z" class="gMapLink"><img width="22" align="absmiddle" src="images/2016/icons/pin-listingicon.png"> Open in Google Maps</a> -->
									<a target="_blank" href="http://maps.google.com/maps?q=loc:<?php echo $data['property_lat'];?>,<?php echo $data['property_lng'];?>" class="gMapLink"> Open in Google Maps</a>
									<?php
									if(isset($_SESSION['member_logged']))
									{ ?>
									<span class="favLink-area">
										<?php
											if(isset($fav_status))
											{
												if($fav_status=='Favorite')
												{ ?>
												<a href="save_fav.php?pid=<?php echo $pid;?>"><img width="22" align="absmiddle" src="images/2016/icons/heartselected-listingicon.png"> Remove Favorites</a>
												<?php }
												else
												{ ?>
													<a href="save_fav.php?pid=<?php echo $pid;?>"><img width="22" align="absmiddle" src="images/2016/icons/heartselected-listingicon.png"> Add to Favorites</a>
											<?php	}
											}
											else
											{ ?>
												<a href="save_fav.php?pid=<?php echo $pid;?>"><img width="22" align="absmiddle" src="images/2016/icons/heartselected-listingicon.png"> Add to Favorites</a>
											<?php 
											}
										?>
									</span>
									<?php
									}
									?>
								</div>
								<h1 style="text-transform: capitalize;"><?php $WHERE_BED['id']=$data['bedroom']; echo select('bedroom_tbl',$WHERE_BED)[0]['bedroom'];?> <?php $WHERE_STRUCT['struct_id']=$data['structure_type']; echo select('structure_type',$WHERE_STRUCT)[0]['name_en'];?> <span style="text-transform: lowercase;">in</span> <?php $WHERE_CITY['city_id']=$data['city']; echo select('city',$WHERE_CITY)[0]['city_name'];?></h1>
								<h3>Listing Info</h3><?php $WHERE_STRUCT['struct_id']=$data['structure_type']; echo select('structure_type',$WHERE_STRUCT)[0]['name_en'];?><br>
								<h3>Amenities</h3>
								<ul>
									<?php
									include("amenities.php");
									?>
								</ul>
			
							</div>
					</div>
					<script src="https://open.mapquestapi.com/sdk/js/v7.2.s/mqa.toolkit.js?key=Fmjtd%7Cluubn16an0%2Cbg%3Do5-90axuz"></script>
					
				</div> <!-- End listing-detail div -->
			</div>

			<!-- <div class="container-fluid footer">
				<div class="container highlight-section">
					<div class="col-md-8">
						<h2>AS SEEN IN </h2>
						<img src="images/2016/as-seen-banner.jpg">
					</div>
					<div class="col-md-4">
						<a href="apps.cfm"><img src="images/2016/download-app-banner.jpg"></a>
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
<style>
	
	.hov:hover{
		background:#3D4D65!important;
		cursor:pointer;
		color:white;
	}
</style>	
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
                <div id="calendar"></div>
	        </div>
	        <div class="modal-footer">
	          	<!-- <button type="button" class="btn btn-default" id="yes">Yes</button> -->
	          	<button type="button" class="btn btn-default" data-dismiss="modal" id="no" >Close</button>
	 			<!-- <input type="hidden" class="btn btn-success" name="id" id="id" value="<?php echo $pid; ?>"> -->
	 			
	        </div>
      	</div>
    </div>
</div>	
		 

<div class="modal fade" id="confirm_modal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      	<div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Confirm Viewing Time </h4>
	        </div>
	        <div class="modal-body">

	        	<table class="table table-striped">
	        	 	<tr>
	        	 		<th>Day</th>
	        	 		<th>Time From</th>
	        	 		<th>Time To</th>
	        	 	</tr>
	        	 	<tr>
	        	 		<td><input type="text"  id="confirm_day" value="" readonly></td>
	        	 		<td><input type="text"  id="time_from" value="" readonly></td>
	        	 		<td><input type="text"  id="time_to" value="" readonly></td>
	        	 	</tr>
	        	 </table>
	        	
	          <p ><span id="p">Are you sure you want to view this property between these hours??</span></p>
	          
	        </div>
	        <div class="modal-footer">
	          	<button type="button" class="btn btn-default" id="yes_confirm">Yes</button>
	          	<button type="button" class="btn btn-default" data-dismiss="modal" id="no" >Close</button>
	          	<!-- <input type="hidden"  id="confirm_day" value=""> -->
	          	<input type="hidden" class="btn btn-success" id="pid" value="<?php echo $pid; ?>">
	 		</div>
      	</div>
    </div>
</div>		



	
	
	<!-- Bootstrap core JavaScript
	
	<!-- Placed at the end of the document so the pages load faster -->
	
	
		
		
	
	
	<!-- Bootstrap core JavaScript
	================================================== -->
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

    <!-- Full Calendar -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.0.1/fullcalendar.min.js"></script>


	
	<!-- Default JavaScript -->
	<script src="js/new/default.js"></script>
	

	<script type="text/javascript">
	$(document).ready(function(){
//		var a=$("#color_s").text();
//		if(a=='Calm')
//		{
//			$("#color_s").css("color", "#92E342");
//		}
//		if(a=='Active')
//		{
//			$("#color_s").css("color", "#FFC000");
//		}
//		if(a=='Busy')
//		{
//			$("#color_s").css("color", "red");
//		}

        <?php if( $member_id && $_SESSION['member_logged'] ): ?>
            $('#myModal').on('shown.bs.modal', function() {
                var eventsList = <?php echo $events; ?>;
                $('#calendar').fullCalendar({
                    header: {
                        left: '',
                        center: 'prev title next',
                        right: ''
                    },
                    displayEventTime: false,
                    defaultView: 'month',
                    editable: false,
                    eventRender: function (event, element) {
                        element.attr('href', 'javascript:void(0);');
                        element.click(function() {

                            if(event.start){
                                $("#confirm_day").val(moment(event.start).format('dddd'));
                            }

                            if(event.start){
                                $("#time_from").val(moment(event.start).format('h:mm'));
                            }

                            if(event.end){
                                $("#time_to").val(moment(event.end).format('h:mm'));
                            }

                            $('#myModal').modal('hide');
                            $('#confirm_modal').modal('show');

                        });
                    },
                    events: eventsList
                });
            });
        <?php else: ?>
            $('#myModal').on('shown.bs.modal', function() {
                var eventsList = <?php echo $events; ?>;
                $('#calendar').fullCalendar({
                    header: {
                        left: '',
                        center: 'prev title next',
                        right: ''
                    },
                    displayEventTime: false,
                    defaultView: 'month',
                    editable: false,
                    events: eventsList
                });
            });
        <?php endif; ?>
	});
	</script>
	<script type="text/javascript">
	$(document).ready(function(){
	  $('body').on('click','.mt',function(){
	    var day=$(this).children().first('td').text();
	    var time_from=$(this).children('td').eq(1).text();
	    var time_to=$(this).children('td').eq(2).text();
	  	// alert(time_to);
	    // var time_to=$(this).children().third('td').text();
	     $('#myModal').modal('hide');
	     $('#confirm_modal').modal('show');
	     $('#confirm_day').val(day);
	     $('#time_from').val(time_from);
	     $('#time_to').val(time_to);
	    // window.location = 'send_mai.php?tid=' + id;
	  });
	});
	</script>

	<script type="text/javascript">
	$(document).ready(function(){
	  $('body').on('click','#yes_confirm',function(){
	    var day=$('#confirm_day').val();
	    var land_id=$('#land_id').text();
	    var pid= $('#pid').val();
	    var time_from= $('#time_from').val();
	    var time_to= $('#time_to').val();
	  	// alert(time_to);
	    window.location = 'send_confirm_mail.php?tid=' + day + '&land_id=' + land_id + '&time_from=' + time_from + '&time_to=' + time_to + '&pid=' + pid;
	  });
	});
	</script>

	 <script type="text/javascript">
		$(document).ready(function(){
	  		$('body').on('click','#confirm_modal2',function(){
	  			var a= $('#confirm_day').val();
	  			var b= $('#time_from').val();
	  			var c= $('#time_to').val();

	  			$('#confirm_day2').val(a);
	  			$('#confirm_time_from').val(b);
	  			$('#confirm_time_to').val(c);
	  			$('#confirm_modal').modal('hide');

	  	  	});
			
			$('.table tr').click(function(){
				$('.table tr').removeClass('selectdtr');
				$(this).addClass('selectdtr');
			});
	  	});

	</script>
    </body>
</html>