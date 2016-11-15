<?php
include('functions/function.php');
$pid= $_GET['pid'];
if($_SESSION['language']=='English')
{
	$getto='';
	foreach($_GET as $key=>$val)
	{
		$getto.=$key.'='.$val.'&';
	}
   echo "<script>location.href='view_detail.php?$getto'</script>";
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
    
    <!DOCTYPE HTML> 
<html lang="en">
  <head>

  	
 
		
				<title>pashutlehaskir.com</title>
				<link rel="shortcut icon" href="" />
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<html dir="rtl" lang="he">
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
		

<style type="text/css">
	.search-results .search-filters {
	    position: relative;
	    width: 100%;
	}
</style>	
			
        

	
	<body  class="guest" >
	
	
	<!-- Google Tag Manager -->

<!-- End Google Tag Manager --> 


	
		
		<div id="slidedown-content" data-status="hide" class="none">
			<div id="login-content" class="fb">
				<form action="login.php" name="loginForm" method="post">
					<span>
						<label>שם משתמש</label> 
						<input type="text" name="username" class="text" size="10" maxlength="100" />
					</span>
					<span>
						<label>סיסמה</label>
						<input type="password" autocomplete="off" class="text" name="password" size="10" maxlength="45" />
					</span>	
					<input type="image" name="login" class="submit" src="images/new/btn-login.png" align="absmiddle" />
				</form>
				<div class="separator">
				-------------- אוֹ --------------
				</div>
				<div class="fb-login-section">
					<a href="#" class="fb-login"><img src="images/fblogin.png"></a>
				</div>
			</div>		
		</div>
	
		<?php
		include('header_h.php');
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
				<div class="flexslider" id="slider" dir="ltr">
					<?php
						if($data['featured_listing']=='Yes')
						{ ?>
							<div class="featured-badge"></div>
					<?php	}
					?>
					<div class="flex-viewport" style="overflow: hidden; position: relative;" dir="ltr">
						<ul class="slides" style="width: 2600%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
							<li style="width: 752px; float: left; display: block;" class="flex-active-slide"><img style="width:85%;" src="home_images/<?php echo $data['main_image'];?>" draggable="false"></li>
							<li style="width: 752px; float: left; display: block;"><img style="width:85%;" src="home_images/<?php echo $data['image1'];?>" draggable="false"></li>
							<li style="width: 752px; float: left; display: block;"><img style="width:85%;" src="home_images/<?php echo $data['image2'];?>" draggable="false"></li>
							<li style="width: 752px; float: left; display: block;"><img style="width:85%;" src="home_images/<?php echo $data['image3'];?>" draggable="false"></li>
							<li style="width: 752px; float: left; display: block;"><img style="width:85%;" src="home_images/<?php echo $data['image4'];?>" draggable="false"></li>
							<li style="width: 752px; float: left; display: block;"><img style="width:85%;" src="home_images/<?php echo $data['image5'];?>" draggable="false"></li>
							<?php
							if(isset($data_img2))
							{
								foreach($data_img2 as $data_img)
								{ ?>
									<li style="width: 752px; float: left; display: block;"><img style="width:85%;" src="home_images/<?php echo $data_img['image'];?>" draggable="false"></li>
							<?php }
							}
							?>
			<!-- 				<li style="width: 752px; float: left; display: block;"><img style="width:60%;" src="http://static.westsiderentals.com/photos/featured/photos/201106/7.jpg" draggable="false"></li>
							<li style="width: 752px; float: left; display: block;"><img style="width:60%;" src="http://static.westsiderentals.com/photos/featured/photos/201106/8.jpg" draggable="false"></li>
							<li style="width: 752px; float: left; display: block;"><img style="width:60%;" src="http://static.westsiderentals.com/photos/featured/photos/201106/9.jpg" draggable="false"></li>
							<li style="width: 752px; float: left; display: block;"><img style="width:60%;" src="http://static.westsiderentals.com/photos/featured/photos/201106/10.jpg" draggable="false"></li>
							<li style="width: 752px; float: left; display: block;"><img style="width:60%;" src="http://static.westsiderentals.com/photos/featured/photos/201106/111.jpg" draggable="false"></li>
							<li style="width: 752px; float: left; display: block;"><img style="width:60%;" src="http://static.westsiderentals.com/photos/featured/photos/201106/12.jpg" draggable="false"></li> -->
							<li style="width: 752px; float: left; display: block;"><img style="width:60%;" src="home_images/<?php echo $data['main_image'];?>" draggable="false"></li>
						</ul>
					</div>
					<ul class="flex-direction-nav">
						<li><a href="#" class="flex-prev"></a></li>
						<li><a href="#" class="flex-next"></a></li>
					</ul>
				</div>
				<div class="flexslider" id="carousel" dir="ltr">
					<div class="flex-viewport" style="overflow: hidden; position: relative;">
						<ul class="slides" style="width: 2600%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
				          	<li style="width: 210px; float: left; display: block;" class="flex-active-slide"><img src="home_images/<?php echo $data['main_image'];?>" draggable="false"></li>
							<li style="width: 210px; float: left; display: block;"><img src="home_images/<?php echo $data['image1'];?>" draggable="false"></li>
							<li style="width: 210px; float: left; display: block;"><img src="home_images/<?php echo $data['image2'];?>" draggable="false"></li>
							<li style="width: 210px; float: left; display: block;"><img src="home_images/<?php echo $data['image3'];?>" draggable="false"></li>
							<li style="width: 210px; float: left; display: block;"><img src="home_images/<?php echo $data['image4'];?>" draggable="false"></li>
							<li style="width: 210px; float: left; display: block;"><img src="home_images/<?php echo $data['image5'];?>" draggable="false"></li>
							<?php
							if(isset($data_img2))
							{
								foreach($data_img2 as $data_img)
								{ ?>
									<li style="width: 210px; float: left; display: block;"><img src="home_images/<?php echo $data_img['image'];?>" draggable="false"></li>
							<?php }
							}
							?>

				<!-- 			<li style="width: 210px; float: left; display: block;"><img src="http://static.westsiderentals.com/photos/featured/photos/201106/7.jpg" draggable="false"></li>
							<li style="width: 210px; float: left; display: block;"><img src="http://static.westsiderentals.com/photos/featured/photos/201106/8.jpg" draggable="false"></li>
							<li style="width: 210px; float: left; display: block;"><img src="http://static.westsiderentals.com/photos/featured/photos/201106/9.jpg" draggable="false"></li>
							<li style="width: 210px; float: left; display: block;"><img src="http://static.westsiderentals.com/photos/featured/photos/201106/10.jpg" draggable="false"></li>
							<li style="width: 210px; float: left; display: block;"><img src="http://static.westsiderentals.com/photos/featured/photos/201106/111.jpg" draggable="false"></li>
							<li style="width: 210px; float: left; display: block;"><img src="http://static.westsiderentals.com/photos/featured/photos/201106/12.jpg" draggable="false"></li> -->
							<li style="width: 210px; float: left; display: block;"><img src="home_images/<?php echo $data['main_image'];?>" draggable="false"></li>
						</ul>
					</div>
					<ul class="flex-direction-nav">
						<li><a href="#" class="flex-prev"></a></li>
						<li><a href="#" class="flex-next"></a></li>
					</ul>
				</div>
				
				

			  <!-- FlexSlider -->
			  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
			  <script src="js/WSRFlexslider.js" defer=""></script>

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
					<div class="header">פרטי נכס</div>
				</div>
				<div class="row odd">
					<div class="col-md-6">
						<div class=" extra_padding">
							<strong>עיר/אזור:</strong>
							<span itemtype="http://schema.org/PostalAddress" itemscope="" itemprop="address"><span itemprop="addressLocality"><?php $WHERE_CITY['city_id']=$data['city']; echo select('city',$WHERE_CITY)[0]['city_name_he'];?></span>, <span itemprop="addressRegion"><?php $WHERE_STATE['id']=$data['state']; echo select('state',$WHERE_STATE)[0]['state_name_he'];?></span></span>
							<span itemtype="http://schema.org/GeoCoordinates" itemscope="" itemprop="geo"><meta itemprop="latitude" content="34.0124539"><meta itemprop="longitude" content="-118.4849298"></span>
						</div>
					</div>
					<div class="col-md-6">
						<div class=" extra_padding">
							<strong>מספר מודעה:</strong><?php echo $data['listing_number'];?>
						</div>
					</div>
				</div>			
				<div class="row even">
					<div class="col-md-6">
						<strong>שכירות:</strong>₪&nbsp;<?php echo $data['rent'];?> 
					</div>
					<div class="col-md-6">
						<strong>סוג מודעה:</strong> <?php $WHERE_LTYPE['list_id']=$data['listing_type']; echo select('listing_type',$WHERE_LTYPE)[0]['listing_type_he'];?>
					</div>
				</div>
				<div class="row odd">
					<div class="col-md-6">
						<strong>פיקדון:</strong>₪&nbsp;<?php echo $data['deposit'];?>
					</div>
					<div class="col-md-6">
						<strong>חדרי שינה:</strong><?php $WHERE_BEDROOM['id']=$data['bedroom']; echo select('bedroom_tbl',$WHERE_BEDROOM)[0]['bedroom_he'];?>
					</div>
				</div>
				<div class="row even">
					<div class="col-md-6">
						<strong>זמינות:</strong>
						<span class="available_now">
							<span>
								<?php
								if($data['availability']<=date('Y-m-d'))
								{	
									echo "זמין עכשיו!";
								}
								else
								{ 
								     echo "זמינות - '".$data['availability']."' "; 
								}
								?>
							</span>
						</span>
					</div>
					<div class="col-md-6">
						<strong>שירותים:</strong><?php $WHERE_BATH['id']=$data['bathroom']; echo select('bath_tbl',$WHERE_BATH)[0]['bath_he'];?>
					</div>
				</div>
				<div class="row odd">
					<div class="col-md-6">
						<strong>ריהוט:</strong><?php $WHERE_FUR['id']=$data['furnished']; echo select('furnished',$WHERE_FUR)[0]['furnished_he'];?>
					</div>
					<div class="col-md-6">
						<strong>סוג שכירות:</strong><?php $WHERE_LEASE['id']=$data['lease_type']; echo select('lease_tbl',$WHERE_LEASE)[0]['lease_type_he'];?>
					</div>
				</div>
				<div class="row even">
					<div class="col-md-6">
						<strong>חיות מחמד:</strong>
						<?php $WHERE_PETS['id']=$data['pet']; echo select('pets',$WHERE_PETS)[0]['pets_he'];?>
					</div>
					<div class="col-md-6">
						<strong>סוג מבנה:</strong><?php $WHERE_STRUCT['struct_id']=$data['structure_type']; echo select('structure_type',$WHERE_STRUCT)[0]['name_he'];?>
					</div>
				</div>
				<div class="row odd">
					<div class="col-md-6">
						<strong>פרטי יחידה:</strong><?php $WHERE_UNIT['id']=$data['unit_type']; echo select('unit_tbl',$WHERE_UNIT)[0]['unit_type_he'];?>
					</div>
					<div class="col-md-6">
						<strong>חניה:</strong><?php $WHERE_PARK['id']=$data['parking']; echo select('parking_tbl',$WHERE_PARK)[0]['parking_he'];?>
					</div>
				</div>
				<div class="row even">
					<div class="col-md-6">
						<strong>מטרים:</strong><?php echo $data['square_footage'];?>
					</div>					
					<?php
					if(isset($_SESSION['member_logged']))
					{ ?>
						<div class="col-md-6">
							<strong>כתובת</strong><?php echo $data['address'];?>
						</div>				</div>
					<?php	
					}
					else
					{
					?>							<div class="col-md-6">													</div>											</div>				<?php 					}				?>	
					<div class="row odd">						<div class="col-md-6">
							<strong>כותרת דירה</strong><?php echo $data['short_descp'];?>
						</div>						<div class="col-md-6">
							<strong>תיאור דירה</strong><?php echo $data['full_descp'];?>
						</div>					</div>
				<?php
				if(isset($_SESSION['member_logged']))
				{ ?>
				<div class="row even">
					<div class="col-md-6">
						<strong>שֵׁם</strong><?php echo $data['name'];?>
					</div>
					<div class="col-md-6">
						<strong>אֶלֶקטרוֹנִי </strong><span id="land_id"><?php echo $data['email'];?></span>
					</div>
				</div>
				<div class="row odd">
					<div class="col-md-6"  dir="ltr">
						<strong>טלפון</strong><?php echo $data['contact_a'];?>-<?php echo $data['contact_b'];?>-<?php echo $data['contact_c'];?>&nbsp;&nbsp;Ext- <?php echo $data['contact_d'];?>
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
								
								

								
							
					
						<div class="col-md-4">
							<div class="hidden-xs hidden-sm">	
								<br><a href="#" onclick="history.back();" class="btn btn-danger form-control">חזרה לעמוד הקודם</a>	
								<?php
								if(!isset($_SESSION['member_logged']))
								{ ?>
								<br><a href="join.php" class="signupLink">הירשם כדי לצפות בפרטי יצירת קשר</a>
								<?php }
								?>
									<a href="#" class="payrentLink" data-toggle="modal" data-target="#myModal">צפייה מיידית</a>
									<div class="walkscore">
										<div class="top">Walkscore</div>
										<div class="body">
											<div class="middle">
												<div class="large"><span id="color_w"><?php $WHERE_WALK['id']=$data['walkscore']; echo select('walkscore',$WHERE_WALK)[0]['walkscore_he'];?></span></div>
												<div class="small">
													<span><?php $WHERE_WALK['id']=$data['walkscore_descrp']; echo select('walkscore_desc',$WHERE_WALK)[0]['walkscore_desc_he'];?></span>
												</div>
											</div>
											</div><h3></h3></div>
							</div> 
			 
							<div class="hidden-xs hidden-sm">				
								<div class="soundscore">
									<div class="top">Soundscore : <span style="color: #EE583F" id="color_s"><?php $WHERE_SOUND['id']=$data['soundscore']; echo select('soundscore',$WHERE_SOUND)[0]['soundscore_he'];?></span></div>
									<div class="body">
										<div class="middle">
											<div class="medium">רעש תחבורתי:
												<span style="color: #EE583F !important" id="color_v"><?php $WHERE_VEHICAL['id']=$data['vehicle_noise']; echo select('vehicle_noise',$WHERE_VEHICAL)[0]['vehicle_noise_he'];?></span>
											</div>
											<div class="medium">רעש נמל תעופה: 
												<span style="color: #FFCB3F !important" id="color_a"><?php $WHERE_AIR['id']=$data['airport_noise']; echo select('airport_noise',$WHERE_AIR)[0]['airport_noise_he'];?></span>
											</div>
											<div class="medium">בתי עסק: 
												<span style="color: #EE583F !important" id="color_b"><?php $WHERE_BUIS['id']=$data['business_noise']; echo select('businesses',$WHERE_BUIS)[0]['businesses_he'];?></span>
											</div>
											<img width="220" border="0" src="images/soundscore_module-gradient.png">
											<div class="small">
												<span><?php $WHERE_SOUNDD['id']=$data['soundscore_descrp']; echo select('soundscore_desc',$WHERE_SOUNDD)[0]['soundscore_desc_he'];?></span>
											</div>
										</div>
									</div><h3></h3>
								</div>
								<div class="listing-map">									
									<div style="width: 280px; height: 230px; margin: 0px auto 15px; position: relative;">
										<script src='http://maps.google.com/maps/api/js?key=AIzaSyACWUZ9OL8BQVQC-4cSsSFmEo71SLDzvlk&sensor=false&language=he'></script>
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
									<a style="text-align: right;margin-right: 10%;" target="_blank" href="http://maps.google.com/maps?hl=he&q=loc:<?php echo $data['property_lat'];?>,<?php echo $data['property_lng'];?>&language=he" class="gMapLink">פתח בגוגל מפות</a>
									<?php
									if(isset($_SESSION['member_logged']))
									{ ?>
									<span class="favLink-area">
										<?php
											if(isset($fav_status))
											{
												if($fav_status=='Favorite')
												{ ?>
												<a style="text-align: right; float:right; margin-right: 10%;" href="save_fav.php?pid=<?php echo $pid;?>"><img width="22" align="absmiddle" src="images/2016/icons/heartselected-listingicon.png">הסר למועדפים</a>
												<?php }
												else
												{ ?>
													<a style="text-align: right; float:right; margin-right: 10%;" href="save_fav.php?pid=<?php echo $pid;?>"><img width="22" align="absmiddle" src="images/2016/icons/heartselected-listingicon.png">הוסף למועדפים</a>
											<?php	}
											}
											else
											{ ?>
												<a style="text-align: right; float:right; margin-right: 10%;" href="save_fav.php?pid=<?php echo $pid;?>"><img width="22" align="absmiddle" src="images/2016/icons/heartselected-listingicon.png">הוסף למועדפים</a>
											<?php 
											}
										?>
									</span>
									<?php
									}
									?>
								</div>
								<h1 style="text-align:right;margin-right:10%; text-transform: capitalize;"><?php $WHERE_BED['id']=$data['bedroom']; echo select('bedroom_tbl',$WHERE_BED)[0]['bedroom_he'];?> <?php $WHERE_STRUCT['struct_id']=$data['structure_type']; echo select('structure_type',$WHERE_STRUCT)[0]['name_he'];?> <span style="text-transform: lowercase;">ב</span> <?php $WHERE_CITY['city_id']=$data['city']; echo select('city',$WHERE_CITY)[0]['city_name_he'];?></h1>
								<h3 style="text-align:right;margin-right:10%">פרטי המודעה</h3><div style="text-align:right;margin-right:10%"><?php $WHERE_STRUCT['struct_id']=$data['structure_type']; echo select('structure_type',$WHERE_STRUCT)[0]['name_he'];?></div>
								<h3 style="text-align:right;margin-right:10%">אביזרים</h3>
								<ul style="text-align:right;margin-right:20%">	<?php
									include("amenities_h.php");
									?>
								</ul>
			
							</div>
					</div>
					<div class="container"></div>
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
		include('footer_h.php');
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
	          <h4 class="modal-title">זמן הצגת נכסים </h4>
	        </div>
	        <div class="modal-body">
	          <!-- <p ><span id="p">Are you sure, want to Delete this Reminder ?</span></p> -->
	          <?php
	          if(isset($_SESSION['member_logged']))
	          { ?>
	      			<table class="table ">
	      				<tr>
							<th style="text-align:right">יְוֹם</th>
							<th style="text-align:right">זמן שעובר</th>
							<th style="text-align:right">זמן ל</th>
						</tr>
	      				<tr class="mt hov">
	      					<td>יוֹם שֵׁנִי</td>
	      					<td><?php echo $data['mon_time_frm'];?></td>
	      					<td><?php echo $data['mon_time_to'];?></td>
	      				</tr>
	      				<tr class="mt hov">
	      					<td>יוֹם שְׁלִישִׁי</td>
	      					<td><?php echo $data['tue_time_frm'];?></td>
	      					<td><?php echo $data['tue_time_to'];?></td>
	      				</tr>
	      				<tr class="mt hov">
	      					<td>יום רביעי</td>
	      					<td><?php echo $data['wed_time_frm'];?></td>
	      					<td><?php echo $data['wed_time_to'];?></td>
	      				</tr>
	      				<tr class="mt hov">
	      					<td>יוֹם חֲמִישִׁי</td>
	      					<td><?php echo $data['thu_time_frm'];?></td>
	      					<td><?php echo $data['thu_time_to'];?></td>
	      				</tr>
	      				<tr class="mt hov">
	      					<td>יוֹם שִׁישִׁי</td>
	      					<td><?php echo $data['fri_time_frm'];?></td>
	      					<td><?php echo $data['fri_time_to'];?></td>
	      				</tr>
	      				<tr class="mt hov">
	      					<td>יום שבת</td>
	      					<td><?php echo $data['sat_time_frm'];?></td>
	      					<td><?php echo $data['sat_time_to'];?></td>
	      				</tr>
	      				<tr class="mt hov">
	      					<td>יוֹם רִאשׁוֹן</td>
	      					<td><?php echo $data['sun_time_frm'];?></td>
	      					<td><?php echo $data['sun_time_to'];?></td>
	      				</tr>
	      			</table>
	          <?php }
	          else
	          { ?>

	         <table class="table ">
	          	<tr>
					<th style="text-align:right">יְוֹם</th>
					<th style="text-align:right">זמן שעובר</th>
					<th style="text-align:right">זמן ל</th>
				</tr>
	          	<tr class="hov">
	          		<td>יוֹם שֵׁנִי</td>
	          		<td><?php echo $data['mon_time_frm'];?></td>
	          		<td><?php echo $data['mon_time_to'];?></td>
	          	</tr>
	          	<tr class="hov">
	          		<td>יוֹם שְׁלִישִׁי</td>
	          		<td><?php echo $data['tue_time_frm'];?></td>
	          		<td><?php echo $data['tue_time_to'];?></td>
	          	</tr>
	          	<tr class="hov">
	          		<td>יום רביעי</td>
	          		<td><?php echo $data['wed_time_frm'];?></td>
	          		<td><?php echo $data['wed_time_to'];?></td>
	          	</tr>
	          	<tr class="hov">
	          		<td>יוֹם חֲמִישִׁי</td>
	          		<td><?php echo $data['thu_time_frm'];?></td>
	          		<td><?php echo $data['thu_time_to'];?></td>
	          	</tr>
	          	<tr class="hov">
	          		<td>יוֹם שִׁישִׁי</td>
	          		<td><?php echo $data['fri_time_frm'];?></td>
	          		<td><?php echo $data['fri_time_to'];?></td>
	          	</tr>
	          	<tr class="hov">
	          		<td>יום שבת</td>
	          		<td><?php echo $data['sat_time_frm'];?></td>
	          		<td><?php echo $data['sat_time_to'];?></td>
	          	</tr>
	          	<tr class="hov">
	          		<td>יוֹם רִאשׁוֹן</td>
	          		<td><?php echo $data['sun_time_frm'];?></td>
	          		<td><?php echo $data['sun_time_to'];?></td>
	          	</tr>
	          </table>
	          <?php }
	          ?>
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
	          <h4 class="modal-title">אשר צופה זמן </h4>
	        </div>
	        <div class="modal-body">

	        	<table class="table table-striped">
	        	 	<tr>
	        	 		<th style="text-align:right">יְוֹם</th>
						<th style="text-align:right">זמן שעובר</th>
						<th style="text-align:right">זמן ל</th>
	        	 	</tr>
	        	 	<tr>
	        	 		<td><input type="text"  id="confirm_day" value="" readonly=""></td>
	        	 		<td><input type="text"  id="time_from" value="" readonly=""></td>
	        	 		<td><input type="text"  id="time_to" value="" readonly=""></td>
	        	 	</tr>
	        	 </table>
	        	
	          <p ><span id="p">האם אתה בטוח שברצונך להציג את הנכס הזה בין השעות האלה?</span></p>
	          
	        </div>
	        <div class="modal-footer">
	          	<button type="button" class="btn btn-default" id="yes_confirm">כן</button>
	          	<button type="button" class="btn btn-default" data-dismiss="modal" id="no" >לִסְגוֹר</button>
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


	
	<!-- Default JavaScript -->
	<script src="js/new/default.js"></script>
	

	<script type="text/javascript">
	$(document).ready(function(){
		var a=$("#color_s").text();
		if(a=='לְהַרְגִיעַ')
		{
			$("#color_s").css("color", "#92E342");
		}
		if(a=='פָּעִיל')
		{
			$("#color_s").css("color", "#FFC000");
		}
		if(a=='עסוק')
		{
			$("#color_s").css("color", "red");
		}
	});
	</script>
	<script type="text/javascript">
	$(document).ready(function(){
		var a=$("#color_v").text();
		if(a=='לְהַרְגִיעַ')
		{
			$("#color_v").css("color", "#92E342");
		}
		if(a=='פָּעִיל')
		{
			$("#color_v").css("color", "#FFC000");
		}
		if(a=='עסוק')
		{
			$("#color_v").css("color", "red");
		}
	});
	</script>

	<script type="text/javascript">
	$(document).ready(function(){
		var a=$("#color_a").text();
		if(a=='לְהַרְגִיעַ')
		{
			$("#color_a").css("color", "#92E342");
		}
		if(a=='פָּעִיל')
		{
			$("#color_a").css("color", "#FFC000");
		}
		if(a=='עסוק')
		{
			$("#color_a").css("color", "red");
		}
	});
	</script>

	<script type="text/javascript">
	$(document).ready(function(){
		var a=$("#color_b").text();
		if(a=='לְהַרְגִיעַ')
		{
			$("#color_b").css("color", "#92E342");
		}
		if(a=='פָּעִיל')
		{
			$("#color_b").css("color", "#FFC000");
		}
		if(a=='עסוק')
		{
			$("#color_b").css("color", "red");
		}
	});
	</script>

	<script type="text/javascript">
	$(document).ready(function(){
		var a=$("#color_w").text();
		if(a=='קַל')
		{
			$("#color_w").css("color", "#92E342");
		}
		if(a=='מְמוּצָע')
		{
			$("#color_w").css("color", "#FFC000");
		}
		if(a=='קָשֶׁה')
		{
			$("#color_w").css("color", "red");
		}
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
	  	});

	</script>