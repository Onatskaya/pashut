<?php
include_once('functions/function.php');
if($_SESSION['language']=='Hebrew')
{
	echo "<script>location.href='index_h.php'</script>";
}	
$que_city="SELECT * FROM city ";
$obj_city=mysqli_query($conn,$que_city);
while($data_city3=mysqli_fetch_assoc($obj_city))
{
	$data_city2[]=$data_city3;
}

$que_struct="SELECT * FROM structure_type ";
$obj_struct=mysqli_query($conn,$que_struct);
while($data_struct3=mysqli_fetch_assoc($obj_struct))
{
	$data_struct2[]=$data_struct3;
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
	
	
	<!-- Google Tag Manager -->




	
		
		<div id="slidedown-content" data-status="hide" class="none">
			<div id="login-content" class="fb">
				<form action="login.php" name="loginForm" method="POST">
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
	
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="20000">
       
	  
      <div class="carousel-inner">
		
		
			<div class="item active">
			<img style="background: url(images/homepage/Downtown-LA1.jpg);background-size:cover;height:100%;width:100%;" src="images/homepage/blank.gif">
			 
			  <div class="container">
				
				<div class="carousel-caption">
					
					<div class="image-wrapper">
						<a href="apartments/westside-apartments/westside-apartments.html"><img src="images/homepage/thumbnails/Santa-Monica.jpg"></a>
						
					</div>
										
					<div class="text-wrapper">
						
										
						<h2><a href="apartments/westside-apartments/westside-apartments.html">Westside - 2957 Listings</a></h2>
							
						
					</div>					
				</div>
				<div class="carousel-links">
					<a href="#" class="popular-areas-link">View Popular Areas</a> 
				</div>
				
				<div class="carousel-search">
					




<div class="search-box">
	<h2>SEARCH NOW FOR <strong>FREE!</strong></h2>
	<h4 style="color:#E92324;font-weight:bold;">Say Goodbye To Agent Fees!</h4>
	<form action="guestsearch.php" name="searchForm" method="GET">
		
		<div class="line">
			<select name="city" style="width:32%;" class="medium right-pad">
				<?php
					foreach($data_city2 as $data_city)
					{ ?>
						<option value="<?php echo $data_city['city_id'];?>"><?php echo $data_city['city_name'];?></option>
				<?php }
				?>
			</select>
			<select name="structure_type" style="width:32%;" class="medium right-pad">
				<?php
					foreach($data_struct2 as $data_struct)
					{ 
				?>
						<option value="<?php echo $data_struct['struct_id'];?>"><?php echo $data_struct['name_en'];?></option>
				<?php 
					}
				?>
				
			</select>
		
			<select name="priceLow" style="width:12%;" class="medium right-pad">
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
			
			<select name="priceHigh" style="width:12%;" class="medium ">
				<option value="">To</option>
				
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
		<input type="submit" name="search-submit" class="search" value="SEARCH" align="absmiddle" />
		
		
		<input type="hidden" name="searchType" value="g" />
		
	</form>
	
	<div class="text-search">
	<form method="post" action="#" name="textCodeSearch">
		<input id="listing_id" class="text" type="text" name="listing_id" placeholder="Search By Text Code" />
		<input class="search-sm" type="submit" name="text-submit" value="SEARCH" />
	</form>
	</div>
</div>


				</div>
				
				<div class="carousel-red-layer"></div>
				
				
			  </div>
			</div>
			
			<div class="item ">
				<img style="background: url(images/homepage/Orange-County.jpg);background-size:cover;height:100%;width:100%;" src="images/homepage/blank.gif">
			 
			  <div class="container">
				
				<div class="carousel-caption">
					
					<div class="image-wrapper">
						<a href="apartments/hollywood-apartments/hollywood-apartments.html"><img src="images/homepage/thumbnails/Hollywood.jpg"></a>
						
					</div>
										
					<div class="text-wrapper">
						
										
						<h2><a href="apartments/hollywood-apartments/hollywood-apartments.html">Hollywood - 1734 Listings</a></h2>
							
						
					</div>					
				</div>
				<div class="carousel-links">
					<a href="#" class="popular-areas-link">View Popular Areas</a> 
				</div>
				
				<div class="carousel-search">
					




<div class="search-box">
	<h2>SEARCH NOW FOR <strong>FREE!</strong></h2>
	<h4 style="color:#E92324;font-weight:bold;">Say Goodbye To Agent Fees!</h4>
	<form action="guestsearch.php" name="searchForm" method="GET">
		
		<div class="line">
			<select name="city" style="width:32%;" class="medium right-pad">
				<?php
					foreach($data_city2 as $data_city)
					{ ?>
						<option value="<?php echo $data_city['city_id'];?>"><?php echo $data_city['city_name'];?></option>
				<?php }
				?>
			</select>
			<select name="structure_type" style="width:32%;" class="medium right-pad">
				<?php
					foreach($data_struct2 as $data_struct)
					{ 
				?>
						<option value="<?php echo $data_struct['struct_id'];?>"><?php echo $data_struct['name_en'];?></option>
				<?php 
					}
				?>
			</select>
		
			<select name="priceLow" style="width:12%;" class="medium right-pad">
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
			
			<select name="priceHigh" style="width:12%;" class="medium ">
				<option value="">To</option>
				
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
		<input type="submit" name="search-submit" class="search" value="SEARCH" align="absmiddle" />
		
		
		<input type="hidden" name="searchType" value="g" />
		
	</form>
	
	<div class="text-search">
	<form method="post" action="#" name="textCodeSearch">
		<input id="listing_id" class="text" type="text" name="listing_id" placeholder="Search By Text Code" />
		<input class="search-sm" type="submit" name="text-submit" value="SEARCH" />
	</form>
	</div>
</div>


				</div>
				
				<div class="carousel-red-layer"></div>
				
				
			  </div>
			</div>
			
			<div class="item ">
					<img style="background: url(images/homepage/South-Bay.jpg);background-size:cover;height:100%;width:100%;" src="images/homepage/blank.gif">
			 
			  <div class="container">
				
				<div class="carousel-caption">
					
					<div class="image-wrapper">
						<a href="apartments/south-bay-apartments/south-bay-apartments.html"><img src="images/homepage/thumbnails/South-Bay.jpg"></a>
						
					</div>
										
					<div class="text-wrapper">
						
										
						<h2><a href="apartments/south-bay-apartments/south-bay-apartments.html">South Bay - 1025 Listings</a></h2>
							
						
					</div>					
				</div>
				<div class="carousel-links">
					<a href="#" class="popular-areas-link">View Popular Areas</a> 
				</div>
				
				<div class="carousel-search">
					




<div class="search-box">
	<h2>SEARCH NOW FOR <strong>FREE!</strong></h2>
	<h4 style="color:#E92324;font-weight:bold;">Say Goodbye To Agent Fees!</h4>
	<form action="guestsearch.php" name="searchForm" method="GET">
		
		<div class="line">
			<select name="city" style="width:32%;" class="medium right-pad">
				<?php
					foreach($data_city2 as $data_city)
					{ ?>
						<option value="<?php echo $data_city['city_id'];?>"><?php echo $data_city['city_name'];?></option>
				<?php }
				?>
			</select>
			<select name="structure_type" style="width:32%;" class="medium right-pad">
				<?php
					foreach($data_struct2 as $data_struct)
					{ 
				?>
						<option value="<?php echo $data_struct['struct_id'];?>"><?php echo $data_struct['name_en'];?></option>
				<?php 
					}
				?>
			</select>
		
			<select name="priceLow" style="width:12%;" class="medium right-pad">
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
			
			<select name="priceHigh" style="width:12%;" class="medium ">
				<option value="">To</option>
				
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
		<input type="submit" name="search-submit" class="search" value="SEARCH" align="absmiddle" />
		
		
		<input type="hidden" name="searchType" value="g" />
		
	</form>
	
	<div class="text-search">
	<form method="post" action="#" name="textCodeSearch">
		<input id="listing_id" class="text" type="text" name="listing_id" placeholder="Search By Text Code" />
		<input class="search-sm" type="submit" name="text-submit" value="SEARCH" />
	</form>
	</div>
</div>


				</div>
				
				<div class="carousel-red-layer"></div>
				
				
			  </div>
			</div>
			
			<div class="item ">
		<img style="background: url(images/homepage/Hollywood.jpg);background-size:cover;height:100%;width:100%;" src="images/homepage/blank.gif">
			 
			  <div class="container">
				
				<div class="carousel-caption">
					
					<div class="image-wrapper">
						<a href="apartments/san-fernando-valley-apartments/san-fernando-valley-apartments.html"><img src="images/homepage/thumbnails/Studio-City.jpg"></a>
						
					</div>
										
					<div class="text-wrapper">
						
										
						<h2><a href="apartments/san-fernando-valley-apartments/san-fernando-valley-apartments.html">San Fernando Valley - 1428 Listings</a></h2>
							
						
					</div>					
				</div>
				<div class="carousel-links">
					<a href="#" class="popular-areas-link">View Popular Areas</a> 
				</div>
				
				<div class="carousel-search">
					




<div class="search-box">
	<h2>SEARCH NOW FOR <strong>FREE!</strong></h2>
	<h4 style="color:#E92324;font-weight:bold;">Say Goodbye To Agent Fees!</h4>
	<form action="guestsearch.php" name="searchForm" method="GET">
		
		<div class="line">
			<select name="city" style="width:32%;" class="medium right-pad">
				<?php
					foreach($data_city2 as $data_city)
					{ ?>
						<option value="<?php echo $data_city['city_id'];?>"><?php echo $data_city['city_name'];?></option>
				<?php }
				?>
			</select>
			<select name="structure_type" style="width:32%;" class="medium right-pad">
				<?php
					foreach($data_struct2 as $data_struct)
					{ 
				?>
						<option value="<?php echo $data_struct['struct_id'];?>"><?php echo $data_struct['name_en'];?></option>
				<?php 
					}
				?>
			</select>
		
			<select name="priceLow" style="width:12%;" class="medium right-pad">
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
			
			<select name="priceHigh" style="width:12%;" class="medium ">
				<option value="">To</option>
				
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
		<input type="submit" name="search-submit" class="search" value="SEARCH" align="absmiddle" />
		
		
		<input type="hidden" name="searchType" value="g" />
		
	</form>
	
	<div class="text-search">
	<form method="post" action="#" name="textCodeSearch">
		<input id="listing_id" class="text" type="text" name="listing_id" placeholder="Search By Text Code" />
		<input class="search-sm" type="submit" name="text-submit" value="SEARCH" />
	</form>
	</div>
</div>


				</div>
				
				<div class="carousel-red-layer"></div>
				
				
			  </div>
			</div>
			
			<div class="item ">
				<img style="background: url(images/homepage/Pasadena.jpg);background-size:cover;height:100%;width:100%;" src="images/homepage/blank.gif">
			 
			  <div class="container">
				
				<div class="carousel-caption">
					
					<div class="image-wrapper">
						<a href="apartments/downtown-la-apartments/downtown-la-apartments.html"><img src="images/homepage/thumbnails/Downtown-LA.jpg"></a>
						
					</div>
										
					<div class="text-wrapper">
						
										
						<h2><a href="apartments/downtown-la-apartments/downtown-la-apartments.html">Downtown LA - 1464 Listings</a></h2>
							
						
					</div>					
				</div>
				<div class="carousel-links">
					<a href="#" class="popular-areas-link">View Popular Areas</a> 
				</div>
				
				<div class="carousel-search">
					




<div class="search-box">
	<h2>SEARCH NOW FOR <strong>FREE!</strong></h2>
	<h4 style="color:#E92324;font-weight:bold;">Say Goodbye To Agent Fees!</h4>
	<form action="guestsearch.php" name="searchForm" method="GET">
		
		<div class="line">
			<select name="city" style="width:32%;" class="medium right-pad">
				<?php
					foreach($data_city2 as $data_city)
					{ ?>
						<option value="<?php echo $data_city['city_id'];?>"><?php echo $data_city['city_name'];?></option>
				<?php }
				?>
			</select>
			<select name="structure_type" style="width:32%;" class="medium right-pad">
				<?php
					foreach($data_struct2 as $data_struct)
					{ 
				?>
						<option value="<?php echo $data_struct['struct_id'];?>"><?php echo $data_struct['name_en'];?></option>
				<?php 
					}
				?>
			</select>
		
			<select name="priceLow" style="width:12%;" class="medium right-pad">
				<option value="">From</option>
				
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
			
			<select name="priceHigh" style="width:12%;" class="medium ">
				<option value="">To</option>
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
		<input type="submit" name="search-submit" class="search" value="SEARCH" align="absmiddle" />
		
		
		<input type="hidden" name="searchType" value="g" />
		
	</form>
	
	<div class="text-search">
	<form method="post" action="#" name="textCodeSearch">
		<input id="listing_id" class="text" type="text" name="listing_id" placeholder="Search By Text Code" />
		<input class="search-sm" type="submit" name="text-submit" value="SEARCH" />
	</form>
	</div>
</div>


				</div>
				
				<div class="carousel-red-layer"></div>
				
				
			  </div>
			</div>
			
			<div class="item ">
				<img src="images/blank.gif" alt="slide" style="background: url(images/homepage/Downtown-LA1.jpg) no-repeat center center; background-size:cover;width:100%;height:100%;" /> 
			 
			  <div class="container">
				
				<div class="carousel-caption">
					
					<div class="image-wrapper">
						<a href="apartments/san-gabriel-valley-apartments/san-gabriel-valley-apartments.html"><img src="images/homepage/thumbnails/Pasadena.jpg"></a>
						
					</div>
										
					<div class="text-wrapper">
						
										
						<h2><a href="apartments/san-gabriel-valley-apartments/san-gabriel-valley-apartments.html">San Gabriel Valley - 791 Listings</a></h2>
							
						
					</div>					
				</div>
				<div class="carousel-links">
					<a href="#" class="popular-areas-link">View Popular Areas</a> 
				</div>
				
				<div class="carousel-search">
					




<div class="search-box">
	<h2>SEARCH NOW FOR <strong>FREE!</strong></h2>
	<h4 style="color:#E92324;font-weight:bold;">Say Goodbye To Agent Fees!</h4>
	<form action="guestsearch.php" name="searchForm" method="GET">
		
		<div class="line">
			<select name="city" style="width:32%;" class="medium right-pad">
				<?php
					foreach($data_city2 as $data_city)
					{ ?>
						<option value="<?php echo $data_city['city_id'];?>"><?php echo $data_city['city_name'];?></option>
				<?php }
				?>
			</select>
			<select name="structure_type" style="width:32%;" class="medium right-pad">
				<?php
					foreach($data_struct2 as $data_struct)
					{ 
				?>
						<option value="<?php echo $data_struct['struct_id'];?>"><?php echo $data_struct['name_en'];?></option>
				<?php 
					}
				?>
			</select>
		
			<select name="priceLow" style="width:12%;" class="medium right-pad">
				<option value="">From</option>
				
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
			
			<select name="priceHigh" style="width:12%;" class="medium ">
				<option value="">To</option>
				
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
		<input type="submit" name="search-submit" class="search" value="SEARCH" align="absmiddle" />
		
		
		<input type="hidden" name="searchType" value="g" />
		
	</form>
	
	<div class="text-search">
	<form method="post" action="#" name="textCodeSearch">
		<input id="listing_id" class="text" type="text" name="listing_id" placeholder="Search By Text Code" />
		<input class="search-sm" type="submit" name="text-submit" value="SEARCH" />
	</form>
	</div>
</div>


				</div>
				
				<div class="carousel-red-layer"></div>
				
				
			  </div>
			</div>
			
			<div class="item ">
			<img style="background: url(images/homepage/South-Bay.jpg);background-size:cover;height:100%;width:100%;" src="images/homepage/blank.gif">
			 
			  <div class="container">
				
				<div class="carousel-caption">
					
					<div class="image-wrapper">
						<a href="apartments/san-diego-apartments/san-diego-apartments.html"><img src="images/homepage/thumbnails/San-Diego.jpg"></a>
						
					</div>
										
					<div class="text-wrapper">
						
										
						<h2><a href="apartments/san-diego-apartments/san-diego-apartments.html">San Diego - 1988 Listings</a></h2>
							
						
					</div>					
				</div>
				<div class="carousel-links">
					<a href="#" class="popular-areas-link">View Popular Areas</a> 
				</div>
				
				<div class="carousel-search">
					




<div class="search-box">
	<h2>SEARCH NOW FOR <strong>FREE!</strong></h2>
	<h4 style="color:#E92324;font-weight:bold;">Say Goodbye To Agent Fees!</h4>
	<form action="guestsearch.php" name="searchForm" method="GET">
		
		<div class="line">
			<select name="city" style="width:32%;" class="medium right-pad">
				<?php
					foreach($data_city2 as $data_city)
					{ ?>
						<option value="<?php echo $data_city['city_id'];?>"><?php echo $data_city['city_name'];?></option>
				<?php }
				?>
			</select>
			<select name="structure_type" style="width:32%;" class="medium right-pad">
				<?php
					foreach($data_struct2 as $data_struct)
					{ 
				?>
						<option value="<?php echo $data_struct['struct_id'];?>"><?php echo $data_struct['name_en'];?></option>
				<?php 
					}
				?>
			</select>
		
			<select name="priceLow" style="width:12%;" class="medium right-pad">
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
			
			<select name="priceHigh" style="width:12%;" class="medium ">
				<option value="">To</option>
				
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
		<input type="submit" name="search-submit" class="search" value="SEARCH" align="absmiddle" />
		
		
		<input type="hidden" name="searchType" value="g" />
		
	</form>
	
	<div class="text-search">
	<form method="post" action="#" name="textCodeSearch">
		<input id="listing_id" class="text" type="text" name="listing_id" placeholder="Search By Text Code" />
		<input class="search-sm" type="submit" name="text-submit" value="SEARCH" />
	</form>
	</div>
</div>


				</div>
				
				<div class="carousel-red-layer"></div>
				
				
			  </div>
			</div>
			
			<div class="item ">
				<img style="background: url(images/homepage/Orange-County.jpg);background-size:cover;height:100%;width:100%;" src="images/homepage/blank.gif">
			 
			  <div class="container">
				
				<div class="carousel-caption">
					
					<div class="image-wrapper">
						<a href="#"><img src="images/homepage/thumbnails/Orange-County.jpg"></a>
						
					</div>
										
					<div class="text-wrapper">
						
										
						<h2><a href="#">Orange County - 1851 Listings</a></h2>
							
						
					</div>					
				</div>
				<div class="carousel-links">
					<a href="#" class="popular-areas-link">View Popular Areas</a> 
				</div>
				
				<div class="carousel-search">
					




<div class="search-box">
	<h2>SEARCH NOW FOR <strong>FREE!</strong></h2>
	<h4 style="color:#E92324;font-weight:bold;">Say Goodbye To Agent Fees!</h4>
	<form action="guestsearch.php" name="searchForm" method="GET">
		
		<div class="line">
			<select name="city" style="width:32%;" class="medium right-pad">
				<?php
					foreach($data_city2 as $data_city)
					{ ?>
						<option value="<?php echo $data_city['city_id'];?>"><?php echo $data_city['city_name'];?></option>
				<?php }
				?>
			</select>
			<select name="structure_type" style="width:32%;" class="medium right-pad">
				<?php
					foreach($data_struct2 as $data_struct)
					{ 
				?>
						<option value="<?php echo $data_struct['struct_id'];?>"><?php echo $data_struct['name_en'];?></option>
				<?php 
					}
				?>
			</select>
			<select name="priceLow" style="width:12%;" class="medium right-pad">
				<option value="">From</option>
				
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
			
			<select name="priceHigh" style="width:12%;" class="medium ">
				<option value="">To</option>
				
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
		<input type="submit" name="search-submit" class="search" value="SEARCH" align="absmiddle" />
		
		
		<input type="hidden" name="searchType" value="g" />
		
	</form>
	
	<div class="text-search">
	<form method="post" action="#" name="textCodeSearch">
		<input id="listing_id" class="text" type="text" name="listing_id" placeholder="Search By Text Code" />
		<input class="search-sm" type="submit" name="text-submit" value="SEARCH" />
	</form>
	</div>
</div>


				</div>
				
				<div class="carousel-red-layer"></div>
				
				
			  </div>
			</div>
					
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
	
	<!-- /.carousel -->
	
	
	<div class="mobile-join-now">
		<a href="join.php"><span class="main-join-banner">JOIN NOW</span></a>				
	</div>
	
	<!--<div class="container popular-areas" style="display:none;" data-status="hide">
		<div class="col-md-8">
			<h1>Rent Easier with pashutlehaskir.com</h1>
			<p>pashutlehaskir.com is Southern California's leading rental property listing service, serving over one million customers since 1996. We offer thousands of exclusive apartment, condo, house, guesthouse, office, storage and roommate listings throughout Santa Barbara, San Diego, and the greater Los Angeles area. Our dynamic and easy-to-use Member search system allows members of pashutlehaskir.com to sort and filter existing listings, as well as receive alerts when new matching listings are posted. Sign up on pashutlehaskir.com today to gain access to our exclusive database of rental listings and find your ideal SoCal home!</p>
		</div>
		<div class="col-md-2 col-xs-6 area-links">
			
			<a href="apartments/los-angeles-apartments/los-angeles-apartments.html">All Los Angeles</a>
			<a href="apartments/santa-monica-apartments/santa-monica-apartments.html">Santa Monica</a>
			<a href="apartments/west-hollywood-apartments/west-hollywood-apartments.html">West Hollywood</a>
			<a href="apartments/west-la-apartments/west-la-apartments.html">West LA</a>
			<a href="apartments/venice-apartments/venice-apartments.html">Venice</a>
			<a href="apartments/redondo-beach-apartments/redondo-beach-apartments.html">Redondo Beach</a>
			<a href="apartments/beverly-hills-adj-apartments/beverly-hills-adj-apartments.html">Beverly Hills Adj</a>
		</div>
		<div class="col-md-2 col-xs-6 area-links">
			<a href="apartments/hollywood-apartments/hollywood-apartments.html">Hollywood</a>
			<a href="apartments/brentwood-apartments/brentwood-apartments.html">Brentwood</a>
			<a href="apartments/palms-apartments/palms-apartments.html">Palms</a>
			<a href="apartments/sherman-oaks-apartments/sherman-oaks-apartments.html">Sherman Oaks</a>
			<a href="apartments/westwood-apartments/westwood-apartments.html">Westwood</a>
			<a href="apartments/mar-vista-apartments/mar-vista-apartments.html">Mar Vista</a>
			<a href="apartments/studio-city-apartments/studio-city-apartments.html">Studio City</a>
		</div>
	</div>-->

	<div class="container-fluid ll-signup-area top">
		<div class="col-md-4">
			<div class="ft col-md-12" style="background-image: url('images/2016/plh-homepage_brokeragebanner.png'); min-height: 255px; background-size: cover; background-repeat: no-repeat;">
				<ul>
					<li>No Agent Fees</li>
					<li ><span style="color:red;">Property Owners Get Paid With Each Listing! </span></li>
					<li>Instant Property Scheduling & Viewing</li>
					<li>Pre-Approved Listings & Photos</li>
					<li>Updated Hourly</li>
				</ul>
				<div class="img_a">
					<a href="sitemap.php">
						READ MORE
					</a>
				</div>
			</div>
		</div>
			<style type="text/css">
				.ld{
					margin-top: 50px;
					text-align: left;
				}
				.ld h2{
					margin-top: 25px;
					color:#fff;
					font-weight: bold;
				}
				.ld p{
					color: #fff;
					
				}
			</style>
			
		<div class="col-md-4">
			<div class="ft col-md-12" style="background-image: url('images/2016/plh-homepage_rentpaybanner.png'); min-height: 255px; background-size: cover ; background-repeat: no-repeat;">
				<div class="ld">
					<h2>Property Owners</h2>
					<p>List Your Rental for FREE.</p>
					<p>Get started today.</p>
				</div>
				<div class="img_a padd">
					<a href="post.php">READ MORE</a>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="ft col-md-12" style="background-image: url('images/2016/plh-homepage_landlordsbanner.png'); min-height: 255px; background-size: cover; background-repeat: no-repeat;">
				<div class="img_a center">
					<a href="faq.php">
						FAQ'S
					</a>
				</div>
			</div>
		</div>
	</div> 
	
	
	<div class="container-fluid ll-signup-area">
		<div class="col-md-12">
		<a href="#"><img src="images/newhomepage-featuredlistings.png" ></a>
		</div>
	</div> 
	<div class="container">
		<div class="col-md-12 home_page">
		<p>PashutLeHaskir connects renters and property owners. Simply.</p>
		<p>Our unique, interactive platform provides quick, efficient and accurate information on rental properties in cities and neighborhoods around Israel. All property listings are screened and pre-approved, include pre-verified photos, instant scheduling and viewing times, and all property listings are updated daily.</p>
		<p>Properties listed on PashutLeHaskir have <strong>no agency fees.</strong></p>
		<h2>How It Works - Renters</h2>
		<ul>
			<li>PL provides to members the most comprehensive and accurate property information within Israel. Our primary focus is to create a high level of satisfaction for renters seeking to find a property and for property owners that seek to fill vacancies.</li>
			<li>Renters that join PL engage in a simplified and highly organized interface, comfortable user experience, easy to navigate listings and accurate property information.</li>
			<li>Membership includes monthly access to all available properties, instant scheduling and viewing options, hourly updated listings and comprehensive resources for moving. Monthly membership costs 99NIS for 30 days.</li>
		</ul>
		<h2>How it works – Property Owners</h2>
		<ul>
			<li>Property Owners may list their available properties for free, daily. All property pages are required to include clear accurate photos of each room, bedroom, bathroom and balcony spaces. </li>
			<li>A minimum of 5 photos and 1 photo of the building from the outside (video optional) is required to list a property on PashutLehaskir.</li>
			<li>All Property Owners are required to set their own scheduling/viewing times on each listing or property page to allow renters convenient access to view the property.</li>
			<li>Once an apartment is rented, Owners can remove their listing by clicking the unavailable button on the bottom of their property page.
</li>
		</ul>
		</div>
	</div>

 <!-- End main container div -->
	
	
		<!-- FOOTER -->
	<?php
		include('footer.php');
	?>
	
		
		
	
	
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
	
	
	<!-- Pretty photo --->
	<link rel="stylesheet" href="js/new/prettyphoto/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
	<script src="js/new/prettyphoto/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
	
	
	<script src="js/tooltips/wz_tooltip.js" type="text/javascript" language="javascript"></script>
			
			
				


		
	<div id="ttdUniversalPixelTagfb79dc7af6cc4733a9c4a87c68c6f55e" style="display:none">
	        <script src="https://js.adsrvr.org/up_loader.1.1.0.js" type="text/javascript"></script>
	        <script type="text/javascript">
	            (function(global) {
	                if (typeof TTDUniversalPixelApi === 'function') {
	                    var universalPixelApi = new TTDUniversalPixelApi();
	                    universalPixelApi.init("nalbr2d", ["k56d7yb"], "https://insight.adsrvr.org/track/up", "ttdUniversalPixelTagfb79dc7af6cc4733a9c4a87c68c6f55e");
	                }
	            })(this);
	        </script>
	    </div>


	 
			
			
	</body>
</html>

