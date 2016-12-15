<?php
include('../functions/function.php');
include('check_login.php');
if($_SESSION['language']=='English')
{
	$getto='';
	foreach($_GET as $key=>$val)
	{
		$getto.=$key.'='.$val.'&';
	}
	echo "<script>location.href='view_post_detail.php?$getto'</script>";
}

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

$events = get_viewing_time($pid);
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
				<link href="../css/201603/ui-lightness/jquery-ui-1.10.4.css" rel="stylesheet">
                <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.0.1/fullcalendar.min.css">
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
				
		<div class=" col-md-8">
			<!-- <div class="row"><h2 style="border-bottom:none;margin-bottom: 2px;"><?php echo $data['structure_type'];?></h2></div> -->
			<div class="row" dir='ltr'>
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
                            <?php if($main_image = slide_image_path('../home_images/', $data['main_image'])): ?>
                                <li style="width: 210px; float: left; display: block;" class="flex-active-slide"><img src="<?php echo $main_image; ?>" draggable="false"></li>
                            <?php endif; ?>
                            <?php if($image1 = slide_image_path('../home_images/', $data['image1'])): ?>
                                <li style="width: 210px; float: left; display: block;"><img src="<?php echo $image1; ?>" draggable="false"></li>
                            <?php endif; ?>
                            <?php if($image2 = slide_image_path('../home_images/', $data['image2'])): ?>
                                <li style="width: 210px; float: left; display: block;"><img src="<?php echo $image2; ?>" draggable="false"></li>
                            <?php endif; ?>
                            <?php if($image3 = slide_image_path('../home_images/', $data['image3'])): ?>
                                <li style="width: 210px; float: left; display: block;"><img src="<?php echo $image3; ?>" draggable="false"></li>
                            <?php endif; ?>
                            <?php if($image4 = slide_image_path('../home_images/', $data['image4'])): ?>
                                <li style="width: 210px; float: left; display: block;"><img src="<?php echo $image4; ?>" draggable="false"></li>
                            <?php endif; ?>
                            <?php if($image5 = slide_image_path('../home_images/', $data['image5'])): ?>
                                <li style="width: 210px; float: left; display: block;"><img src="<?php echo $image5; ?>" draggable="false"></li>
                            <?php endif; ?>
                            <?php
                            if(isset($data_img2))
                            {
                                foreach($data_img2 as $data_img)
                                { ?>
                                    <?php if(!slide_image_path('../home_images/', $data_img['image'])) continue; ?>
                                    <li style="width: 210px; float: left; display: block;"><img src="../home_images/<?php echo $data_img['image'];?>" draggable="false"></li>
                                <?php }
                            }
                            ?>
			<!-- 				<li style="width: 752px; float: left; display: block;"><img style="width:60%;" src="http://static.westsiderentals.com/photos/featured/photos/201106/7.jpg" draggable="false"></li>
							<li style="width: 752px; float: left; display: block;"><img style="width:60%;" src="http://static.westsiderentals.com/photos/featured/photos/201106/8.jpg" draggable="false"></li>
							<li style="width: 752px; float: left; display: block;"><img style="width:60%;" src="http://static.westsiderentals.com/photos/featured/photos/201106/9.jpg" draggable="false"></li>
							<li style="width: 752px; float: left; display: block;"><img style="width:60%;" src="http://static.westsiderentals.com/photos/featured/photos/201106/10.jpg" draggable="false"></li>
							<li style="width: 752px; float: left; display: block;"><img style="width:60%;" src="http://static.westsiderentals.com/photos/featured/photos/201106/111.jpg" draggable="false"></li>
							<li style="width: 752px; float: left; display: block;"><img style="width:60%;" src="http://static.westsiderentals.com/photos/featured/photos/201106/12.jpg" draggable="false"></li> -->
<!--							<li style="width: 752px; float: left; display: block;"><img style="width:60%;" src="../home_images/--><?php //echo $data['main_image'];?><!--" draggable="false"></li>-->
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
					<div class="header">פרטי נכס</div>
				</div>
				<div class="row odd">
					<div class="col-md-6">
						<strong>שֵׁם</strong><?php echo $data['name'];?>
					</div>
					<div class="col-md-6">
						<strong>אֶלֶקטרוֹנִי </strong><?php echo $data['email'];?>
					</div>
				</div>
				<div class="row even">
					<div class="col-md-6">
						<strong>בטלפון. </strong><?php echo $data['contact_a'].'-'.$data['contact_a'].'-'.$data['contact_c'] ;?> &nbsp; Ext <?php echo $data['contact_d']; ?>
					</div>
					<div class="col-md-6">
						<strong>כתובת</strong><?php echo $data['address'];?>
					</div>
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
					<div class="col-md-6">
						<strong>כתובת</strong><?php echo $data['address'];?>
					</div>
				</div>				<div class="row odd">
					<div class="col-md-6">
						<strong>כותרת דירה</strong><?php echo $data['short_descp'];?>
					</div>
					<div class="col-md-6">
						<strong>תיאור דירה</strong><?php echo $data['full_descp'];?>
					</div>
				</div>
				<div class="row even">
					<div class="col-md-6">
						<strong>הודעה הוספת תאריך / שעה :</strong><?php echo date('d-m-Y / H:m:s',strtotime($data['date'])) ;?>
					</div>
					<?php
					if($data['property_available']!='Available')
					{ ?>
						<div class="col-md-6">
							<strong style="color:red;">נכס מושכר</strong><?php echo $data['property_available'];?>
						</div>
					<?php 
					}	
					?>
				</div>
				<br>
				<?php
				if($data['featured_listing']=='Yes')
				{ ?>
					<div class="row even">
						<div class="col-md-6">
							<strong>רישום תכונה: </strong><span style="color:red;"><?php echo 'כן';?></span>
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
				<div class="row" align="center">
					<a href="edit_post.php?pid=<?php echo $data['post_id'];?>" class="btn btn-danger">לַעֲרוֹך</a>
				</div>


				<!-- <div class="row odd">
					<div class="col-md-6">
						<strong>Open House: </strong>
						KEYS AVAILABLE FOR CHECKOUT @ 1020 WILSHIRE BLVD. SANTA MONICA CA, FROM 8AM-4PM 7-DAYS-A-WEEK!
					</div>
				</div> -->
			</div>
		</div>
								
								

								
							
					
						<div class="col-md-4">
							
							<div class="sidebar">
								<br><a href="#" onclick="history.back();" class="btn btn-danger form-control">חזרה לעמוד הקודם</a>				
								<br><a href="#" class="payrentLink" data-toggle="modal" data-target="#myModal">צפייה מיידית</a>
								<?php if( !empty($_SESSION['member_id']) && !empty($data['member_id']) && $_SESSION['member_id'] == $data['member_id'] ): ?>
									<form id="add-to-featured" action="add_to_futured.php">
										<a href="#" class="js-add-to-featured" data-toggle="tooltip" data-placement="left" title="Featured Listings: Upgrading your property to a featured listing creates higher visibility  and a surge in demand for your listing. Renters see featured listings on the top of their searches. Click the 'Upgrade' button below to purchase" >
											<i class='glyphicon glyphicon-question-sign'></i>
										</a>
										<input type="submit" class="payrentLink" name="add-futured" value="Add Futured">
									</form>
								<?php endif; ?>
								<div class="walkscore">
										<div class="top">WALKSCORE</div>
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
									<div class="top">Soundscore: <span style="color: #EE583F" id="color_s"><?php $WHERE_SOUND['id']=$data['soundscore']; echo select('soundscore',$WHERE_SOUND)[0]['soundscore_he'];?></span></div>
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
											<img width="220" border="0" src="../images/soundscore_module-gradient.png">
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
								<!-- <div class="bigText">1827 7th St  #A, 90405</div>
									<div class="medText">
										WestsideRentals Leasing at (310) 576-1446
									</div>
									<div class="bold"><a class="mailtoLink" href="mailto:leasing@wsrbrokerage.com">leasing@wsrbrokerage.com</a></div> -->
									<!-- <a target="_blank" href="https://www.google.co.in/maps/@<?php echo $data['property_lat'];?>,<?php echo $data['property_lng'];?>,<?php echo $data['property_zoom'];?>z" class="gMapLink"><img width="22" align="absmiddle" src="../images/2016/icons/pin-listingicon.png"> Open in Google Maps</a> -->
									<a style="text-align:right;margin-right:10%" target="_blank" href="http://maps.google.com/maps?hl=he&q=loc:<?php echo $data['property_lat'];?>,<?php echo $data['property_lng'];?>" class="gMapLink"> פתח בגוגל מפות</a>
								<h1 style="text-align:right;margin-right:10%; text-transform: capitalize;"><?php $WHERE_BED['id']=$data['bedroom']; echo select('bedroom_tbl',$WHERE_BED)[0]['bedroom_he'];?> <?php $WHERE_STRUCT['struct_id']=$data['structure_type']; echo select('structure_type',$WHERE_STRUCT)[0]['name_he'];?> <span style="text-transform: lowercase;">ב</span> <?php $WHERE_CITY['city_id']=$data['city']; echo select('city',$WHERE_CITY)[0]['city_name_he'];?></h1>
								<h3 style="text-align:right;margin-right:10%">פרטי המודעה</h3><div style="text-align:right;margin-right:10%"><?php $WHERE_STRUCT['struct_id']=$data['structure_type']; echo select('structure_type',$WHERE_STRUCT)[0]['name_he'];?></div>
								<h3 style="text-align:right;margin-right:10%">אביזרים</h3>
								<ul style="text-align:right;margin-right:20%">
									<?php
									include('amenities_h.php');
									?>
								</ul>
							</div>
							<br>
							<div>
							<?php
							if($data['property_available']!='Available')
							{ ?>
								<a href="relist.php?pid=<?php echo $pid; ?>" class="applyLink">רשימת נכסים שוב</a>
							<?php
							}
							?>
							</div>
							<div>	
								<?php
								if($data['property_available']=='Available')
								{ ?>
									<button class="applyLink" id="prty_rnt">הושכר הנכס</button>
								<?php }	
								?>
								<div id="renter_form" style="display:none;">
									<form action="save_rented.php" method="POST" id="form_rent">
											<input type="hidden" name="post_id" value="<?php echo $pid; ?>">
										<label>שם השוכר</label>&nbsp;
										<input type="text" name="renter_name" class="input validate[required]"><br><br>
										<input type="submit" class="btn btn-danger" value="שלח">
									</form>
								</div>
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
		include('footer_h.php');
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
                    <div id="calendar"></div>
		          <!-- <p ><span id="p">Are you sure, want to Delete this Reminder ?</span></p> -->
<!--		          <table class="table table-striped">-->
<!--		          	<tr>-->
<!--		          		<th>Day</th>-->
<!--		          		<th>Time From</th>-->
<!--		          		<th>Time To</th>-->
<!--		          	</tr>-->
<!--		          	<tr>-->
<!--		          		<td>Monday</td>-->
<!--		          		<td>--><?php //echo $data['mon_time_frm'];?><!--</td>-->
<!--		          		<td>--><?php //echo $data['mon_time_to'];?><!--</td>-->
<!--		          	</tr>-->
<!--		          	<tr>-->
<!--		          		<td>Tueday</td>-->
<!--		          		<td>--><?php //echo $data['tue_time_frm'];?><!--</td>-->
<!--		          		<td>--><?php //echo $data['tue_time_to'];?><!--</td>-->
<!--		          	</tr>-->
<!--		          	<tr>-->
<!--		          		<td>Wednesday</td>-->
<!--		          		<td>--><?php //echo $data['wed_time_frm'];?><!--</td>-->
<!--		          		<td>--><?php //echo $data['wed_time_to'];?><!--</td>-->
<!--		          	</tr>-->
<!--		          	<tr>-->
<!--		          		<td>Thursday</td>-->
<!--		          		<td>--><?php //echo $data['thu_time_frm'];?><!--</td>-->
<!--		          		<td>--><?php //echo $data['thu_time_to'];?><!--</td>-->
<!--		          	</tr>-->
<!--		          	<tr>-->
<!--		          		<td>Friday</td>-->
<!--		          		<td>--><?php //echo $data['fri_time_frm'];?><!--</td>-->
<!--		          		<td>--><?php //echo $data['fri_time_to'];?><!--</td>-->
<!--		          	</tr>-->
<!--		          	<tr>-->
<!--		          		<td>Saturday</td>-->
<!--		          		<td>--><?php //echo $data['sat_time_frm'];?><!--</td>-->
<!--		          		<td>--><?php //echo $data['sat_time_to'];?><!--</td>-->
<!--		          	</tr>-->
<!--		          	<tr>-->
<!--		          		<td>Sunday</td>-->
<!--		          		<td>--><?php //echo $data['sun_time_frm'];?><!--</td>-->
<!--		          		<td>--><?php //echo $data['sun_time_to'];?><!--</td>-->
<!--		          	</tr>-->
<!--		          </table>-->
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
	


	<link rel="stylesheet" href="../css/validationEngine.jquery.css">
	<script src="../js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
	<script src="../js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>

    <!-- Full Calendar -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.0.1/fullcalendar.min.js"></script>


	<script type="text/javascript">
		$(document).ready(function(){
			$(".js-add-to-featured").tooltip({
				placement: 'left'
			});

			$("#form_rent").validationEngine();
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
		$('#prty_rnt').click(function(){
			$('#renter_form').show();
		});

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
	});
	</script>


	
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