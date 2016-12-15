<?php
include('../functions/function.php');
include('check_login.php');
if($_SESSION['language']=='Hebrew')
{
	$getto='';
	foreach($_GET as $key=>$val)
	{
		$getto.=$key.'='.$val.'&';
	}
	echo "<script>location.href='view_property_h.php?$getto'</script>";
}
if(isset($_GET['city']))
{

	$city=$_GET['city'];
	$structure_type= $_GET['structure_type'];
	$priceLow= $_GET['priceLow'];
	$priceHigh= $_GET['priceHigh'];


    $per_page = 3;
    if (isset($_GET['page'])) $page=($_GET['page']-1); else $page=0;
    $start=abs($page*$per_page);

    $que_search_count="SELECT COUNT(*) FROM post WHERE city='$city' AND structure_type='$structure_type' AND property_available='Available' AND post_date_confirm='yes' ";
	$que_search="SELECT * FROM post WHERE city='$city' AND structure_type='$structure_type' AND property_available='Available' AND post_date_confirm='yes' ";
	if(isset($_REQUEST['priceLow']) AND !empty($_REQUEST['priceLow']))
	{
		$que_condition.=" AND rent >=$priceLow ";
	}
	if(isset($_REQUEST['priceHigh']) AND !empty($_REQUEST['priceHigh']))
	{
        $que_condition.=" AND rent <=$priceHigh ";
	}
    if(isset($_REQUEST['bedroom']) AND !empty($_REQUEST['bedroom']))
    {
         $bedroom= $_GET['bedroom'];
        $que_condition.=" AND bedroom ='$bedroom' ";
    }
    if(isset($_REQUEST['bathroom']) AND !empty($_REQUEST['bathroom']))
    {
        $bathroom= $_GET['bathroom'];
        $que_condition.=" AND bathroom ='$bathroom' ";
    }
    if(isset($_REQUEST['square_footage']) AND !empty($_REQUEST['square_footage']))
    {
        $square_footage= $_GET['square_footage'];
        $que_condition.=" AND square_footage='$square_footage' ";
    }
    if(isset($_REQUEST['furnished']) AND !empty($_REQUEST['furnished']))
    {
        $furnished= $_GET['furnished'];
        $que_condition.=" AND furnished ='$furnished' ";
    }

    // Search only featured
    if(isset($_SESSION['member_logged'] ) &&  (!empty($_REQUEST['featured_search']) && $_REQUEST['featured_search'] == 'Yes' ))
    {
        $que_condition.=" AND featured_listing ='Yes' ";
    }

    $que_search_count .= $que_condition;
    $que_search .= $que_condition;

    $que_search.="ORDER BY featured_listing DESC";

    $que_search.= " LIMIT $start,$per_page";
	// print_r($que_search);die;
	$obj_search=mysqli_query($conn,$que_search);
	if($trow=mysqli_num_rows($obj_search))
	{
		while($data_search3=mysqli_fetch_assoc($obj_search))
		{
			$data_search2[]= $data_search3; 
		}
	}
}

$que_city="SELECT * FROM city ";
$obj_city=mysqli_query($conn,$que_city);
while($data_city3=mysqli_fetch_assoc($obj_city))
{
    $data_city2[]=$data_city3;
}

$que_bath="SELECT * FROM bath_tbl";
$obj_bath=mysqli_query($conn,$que_bath);

$que_bedroom="SELECT * FROM bedroom_tbl";
$obj_bedroom=mysqli_query($conn,$que_bedroom);

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


                        <script language="javascript" type="text/javascript">
                           window.onload = function(){ document.getElementById("loading").style.display = "none" }
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

<style type="text/css">
    .search-results .search-filters {
        width: 100%;
    }
    .s_field{
        display: none;
    }
</style>            
            
        

	
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
    <div class="container-fluid search-results photo">
    	 <h2>Search Results <span class="highlight"><em><?php if(isset($trow)) { echo $trow; } else {
             echo 'o';} ?> Results</em></span></h2>
    	<div class="search-filters">	
    		<form action="#" method="GET">		
    			<div class="search-filters-span">
    				<div class="col">
    					<select name="city" style="width:24%;" class="medium right-pad">
    						<?php
                                foreach($data_city2 as $data_city)
                                { 
							?>
                                    <option value="<?php echo $data_city['city_id'];?>"><?php echo $data_city['city_name'];?></option>
                            <?php 
								}
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
    							<?php
                                foreach($data_struct2 as $data_struct)
                                { ?>
                                    <option value='<?php echo $data_struct['struct_id'];?>'><?php echo $data_struct['name_en'];?></option>
                            <?php }
                            ?>
    						</select>
    					</div>
    					<div class="col">
                            <select name="bedroom" style="width:24%;" class="medium right-pad s_field">
                                <option value="">Select Bedrooms</option>
                                    <?php
                                    while($data_bedroom=mysqli_fetch_assoc($obj_bedroom))
                                    { ?>
                                        <option value='<?php echo $data_bedroom['id']; ?>'><?php echo $data_bedroom['bedroom']; ?></option>
                                <?php }
                                    ?>
                            </select>
                            <select name="bathroom" style="width:14%;" class="medium right-pad s_field">
                                <option value="">Select Bathrooms</option>
                                  <?php
                                     while($data_bath=mysqli_fetch_assoc($obj_bath))
                                     { ?>
                                        <option value='<?php echo $data_bath['id'];?>'><?php echo $data_bath['bath'];?></option>
                                 <?php }
                                     ?> 
                               
                            </select>&nbsp;
                            <select name="square_footage" style="width:14%;" class="medium right-pad s_field">
                                <option value="">Select Meters</option>
                                  <?php
                                     for($i=1;$i<=200;$i++)
                                     { ?>
                                        <option><?php echo $i;?></option>
                                 <?php }
                                     ?> 
                               
                            </select>
                            <!-- <input type="text" placeholder="Enter meters" style="width:14%;" name="square_footage" class="s_field"> -->
                            <select name="furnished" style="width:24%;" class="medium right-pad s_field">
                                <option value="">Select Furnished</option>
                                <?php
                                    while($data_fur=mysqli_fetch_assoc($obj_fur))
                                    { 
								?>
                                        <option value='<?php echo $data_fur['id'];?>'><?php echo $data_fur['furnished'];?></option>
                                <?php 
									}
                                ?> 
							</select>
                            <div class="featured-search-block s_field">
                                <?php $checked = ( !empty( $_REQUEST['featured_search'] ) &&   $_REQUEST['featured_search'] == 'Yes' ) ? 'checked="checked"' : '';  ?>
                                <label for="featured_search">Search only featured</label>
                                <input type="checkbox" name="featured_search" value="Yes" <?php echo $checked; ?>>
                            </div>
                        </div>
                        <br>
    					<div class="col">
    						<input type="hidden" value="g" name="searchType">
    						
                            <input type="submit" align="absmiddle" value="Search" class="search" name="search-submit">
                            <a href="#" align="absmiddle" class="btn btn-danger" style="background-color:#EE2324; padding:12px 14px;font-size: 16px;" id="adv_search">Advanced Search</a>
    					</div>
    				</div>				
    		</form>
    	</div>
    	<hr>
    	
       
    	
    	<div style="margin-bottom:10px;text-align:right;">
    		<!-- &nbsp; <a onclick="javascript:fnSearchResultsPrint();" href="#" style="color:#5181EF;text-decoration:underline;font-weight:bold;">Printer Friendly Version</a> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  -->
    	</div>	
    		
    	
    	<div class="" id="content">
    				
    		<div id="loading-message" style="display: none;"><img id="loading" align="absmiddle" src="../images/icons/loading-bar.gif"></div>
    		<span data-value="2224" id="totalrecords"></span>
    		<span data-value="36" id="perpage"></span>
    		<span data-value="photo" id="result-layout"></span>
    		<div id="search-results">

    <div class="selection-bar">
    	<ul class="layout-selection list-inline">
    		<li class="selected" data-layout="photo">
    			<img align="absmiddle" src="../images/new/photo-icon.png"> Photo
    		</li>
    		<li data-layout="list">
    			<img align="absmiddle" src="../images/new/list-icon.png"> List
    		</li>		
    	</ul>

<!--    	    --><?php //if(): ?>
    		<div class="pagination pagination-top">
                <?php $QS = http_build_query(array_merge($_GET, array("page"=>2))); ?>

                <ul>
				
						<li><a class="currentpage" data-pageid="1" href="<?php echo htmlspecialchars("$_SERVER[PHP_SELF]?$QS"); ?>">1</a></li>
					
						<li><a data-pageid="2" href="<?php echo htmlspecialchars("$_SERVER[PHP_SELF]?$QS"); ?>" class="prevnext">2</a></li>
					
						<li><a data-pageid="3" href="#" class="prevnext">3</a></li>
					
						<li><a data-pageid="4" href="#" class="prevnext">4</a></li>
					
						<li><a data-pageid="5" href="#" class="prevnext">5</a></li>
					
						<li><a data-pageid="6" href="#" class="prevnext">6</a></li>
					
						<li><a data-pageid="62" href="#" class="prevnext">Last &gt;&gt;</a></li>
    				
    			</ul>				
    		</div>
    	
    </div>



    
     <?php
    if(isset($data_search2))
    {
    	foreach($data_search2 as $data_search)
    	{ ?>
    		<div class="listing-wrapper featured col-md-3 col-lg-3 col-sm-4 col-xs-12">
                <?php
                if($data_search['featured_listing']=='Yes')
                { ?>
    			     <span class="badge"></span>
                <?php
                }
                ?>
    			<div class="image-wrapper">		
    				<a href="view_detail.php?pid=<?php echo $data_search['post_id'];?>">
    					<img alt="Santa Monica Apartments"  src="../home_images/<?php echo $data_search['main_image'];?>">
    				</a>
    				<div class="detail-link">
    					<!-- <a href="/listingdetail/1298189/santa-monica/eco-friendly-1920s-charm-near-expo-rail-stop-utilities-included/"></a> -->
    					<a href="view_detail.php?pid=<?php echo $data_search['post_id'];?>">VIEW DETAILS</a>
    				</div>
    				<a href="#">
    					
    				</a>
    			</div>
    			<div class="text-wrapper">
    				<div class="top-section">
    					<div class="area-text"><?php $WHERE_CITY['city_id']=$data_search['city']; echo select('city',$WHERE_CITY)[0]['city_name'];?>&nbsp;<?php $WHERE_STATE['id']=$data_search['state']; echo select('state',$WHERE_STATE)[0]['state_name'];?></div>
    					<div class="title-text"><?php echo $data_search['short_descp'];?></div>
    					<div class="property-text"><?php $WHERE_BEDROOM['id']=$data_search['bedroom']; echo select('bedroom_tbl',$WHERE_BEDROOM)[0]['bedroom'];?> &nbsp;|&nbsp; <?php $WHERE_BATH['id']=$data_search['bathroom']; echo select('bath_tbl',$WHERE_BATH)[0]['bath'];?></div>
    				</div>
    				<div class="middle-section">
    					<div class="available-text">
    						<span class="avail-text">
    							<?php
    							if($data_search['availability']<=date('Y-m-d'))
    							{	
    								echo "AVAILABLE - NOW!";
    							}
    							else
    							{ 
    							    echo "AVAILABLE - '".$data_search['availability']."' "; 
    							}
    							?>
    						</span>
    						<span class="join-text">
    							<br><a href="join.php">Join Now to See Address &amp; Phone!</a> 						
    						</span>
    					</div>
    				</div>
    				<div class="bottom-section">								
    						<a onmouseout="UnTip()" onmouseover="Tip('This listing includes photos. Click to view photos.',WIDTH, -350, SHADOW, true, FADEIN, 500, FADEOUT, 1000, BGCOLOR, '#FF8', BORDERCOLOR, '#FC0', PADDING, 5, FONTWEIGHT, 'bold', FONTSIZE, '11px')" href="view_detail.php?pid=<?php echo $data_search['post_id'];?>"><img border="0" align="absmiddle" class="" src="../images/2016/icons/photos-listingicon.png"></a>
    						<a onmouseout="UnTip()" onmouseover="Tip('This listing has a Map. Click to view the Map.',WIDTH, -350, SHADOW, true, FADEIN, 500, FADEOUT, 1000, BGCOLOR, '#FF8', BORDERCOLOR, '#FC0', PADDING, 5, FONTWEIGHT, 'bold', FONTSIZE, '11px')" href="#"><img border="0" align="absmiddle" class="" src="../images/2016/icons/pin-listingicon.png"></a>
    						<?php
    						if($data_search['pet'] !='2')
    						{ ?>
    							<a onmouseout="UnTip()" onmouseover="Tip('Pets ok. See listing for details on acceptable pets.',WIDTH, -350, SHADOW, true, FADEIN, 500, FADEOUT, 1000, BGCOLOR, '#FF8', BORDERCOLOR, '#FC0', PADDING, 5, FONTWEIGHT, 'bold', FONTSIZE, '11px')" href="#"><img border="0" align="absmiddle" class="" src="../images/2016/icons/pets-listingicon.png"></a>
    						<?php } ?>

                            <?php
                            if($data_search['accessiblee'] =='yes')
                               { ?>
                            <a onmouseout="UnTip()" onmouseover="Tip('This unit is wheelchair accessible',WIDTH, -350, SHADOW, true, FADEIN, 500, FADEOUT, 1000, BGCOLOR, '#FF8', BORDERCOLOR, '#FC0', PADDING, 5, FONTWEIGHT, 'bold', FONTSIZE, '11px')" href="javascript:void(0);"><img border="0" align="absmiddle" class="" src="../images/2016/icons/wheelchair-listingicon.png"></a>
                            <?php } ?> 
                                 
                            <?php
                            if($data_search['parking'] !='3')
                            { ?>
                                <a onmouseout="UnTip()" onmouseover="Tip('Parking available.  See listing for parking details.',WIDTH, -350, SHADOW, true, FADEIN, 500, FADEOUT, 1000, BGCOLOR, '#FF8', BORDERCOLOR, '#FC0', PADDING, 5, FONTWEIGHT, 'bold', FONTSIZE, '11px')" href="javascript:void(0);"><img border="0" align="absmiddle" class="" src="../images/2016/icons/parking-listingicon.png"></a>
                            <?php } ?>
                        

                            <?php
                            if($data_search['refrigerator'] =='Yes')
                            { ?>
                            <a onmouseout="UnTip()" onmouseover="Tip('This unit includes a refrigerator.',WIDTH, -350, SHADOW, true, FADEIN, 500, FADEOUT, 1000, BGCOLOR, '#FF8', BORDERCOLOR, '#FC0', PADDING, 5, FONTWEIGHT, 'bold', FONTSIZE, '11px')" href="javascript:void(0);"><img border="0" align="absmiddle" class="" src="../images/2016/icons/refridgerator-listingicon.png"></a>
                           <?php } ?>    

                            
                        <div class="price-text">₪&nbsp;<?php echo $data_search['rent'];?></div>
    					<div class="clearboth"></div>
    					<hr style="margin:10px auto;">
    					<div class="footer-section">
    						<div class="left"></div>
    						<div class="right">
    							<a href="#">
    								<span class="favorite-link guest">
    									<img align="absmiddle" src="../images/2016/icons/heart-listingicon.png">
    								</span>
    							</a>
    							<span class="quick-text">
    								<a rel="prettyPhoto" href="view_detail.php?pid=<?php echo $data_search['post_id'];?>">
    									<img align="absmiddle" src="../images/2016/icons/view-listingicon.png">
    								</a>
    							</span>
    						</div>
    						<div class="clearboth"></div>
    					</div>
    				</div>
    			</div>		
    		</div>
    	<?php }
    } ?>

    

    	<div class="pagination pagination-bottom">			
    		<ul>				
    			
    					<li><a class="currentpage" data-pageid="1" href="#">1</a></li>
    				
    					<li><a data-pageid="2" href="#" class="prevnext">2</a></li>
    				
    					<li><a data-pageid="3" href="#" class="prevnext">3</a></li>
    				
    					<li><a data-pageid="4" href="#" class="prevnext">4</a></li>
    				
    					<li><a data-pageid="5" href="#" class="prevnext">5</a></li>
    				
    					<li><a data-pageid="6" href="#" class="prevnext">6</a></li>
    				
    				<li><a data-pageid="62" href="#" class="prevnext">Last &gt;&gt;</a></li>
    			
    		</ul>				
    	</div>
    </div>
    		<div class="ad-results">
    			<div class="line"><img src="http://static.westsiderentals.com/images/relocation-expert.png"></div>
    			<div class="line"><img src="/images/time-warner-authorized-retailer.png"></div>
    		</div>
    		<div class="quickview" id="listing-details-modal"></div>
    	</div>		
    	
    	
    			
    	
    </div>
	
	
		<!-- FOOTER -->
	<?php
	include('footer.php');
	?>	

		



		 
	
	
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

    <script language="javascript" type="text/javascript" src="../js/tooltips/wz_tooltip.js"></script>
	
	<!-- Default JavaScript -->
	<script src="../js/new/default.js"></script>
	


    <script language="javascript" type="text/javascript" src="../js/navigation/menu.js?ver=1008"></script>
    <div id="dropmenudiv" onmouseout="dynamichide(event)" onmouseover="clearhidemenu()" style="visibility:hidden;width:165px;background-color:lightyellow"></div>
    <script language="javascript" type="text/javascript" src="../js/default.js?ver=1008"></script>
    <script language="javascript" type="text/javascript" src="../js/ddaaccordion.js?ver=1008"></script>
    
    <script type="text/javascript" src="../js/guest_search.js" language="javascript"></script>
    <script type="text/javascript" src="../js/jquery.cookie.js" language="javascript"></script>
    <link charset="utf-8" media="screen" type="text/css" href="../js/new/prettyphoto/css/prettyPhoto.css" rel="stylesheet">
    <script charset="utf-8" type="text/javascript" src="../js/new/prettyphoto/js/jquery.prettyPhoto.js"></script>




	<script type="text/javascript">
        $(document).ready(function(){
            $('#adv_search').click(function(){
                $('.s_field').show();
                $('#adv_search').hide();
            });
        });

    </script>
    <?php
        if(isset($_SESSION['member_logged'])) {
            include 'member_init.php';
        }
    ?>
    </body>
</html>


