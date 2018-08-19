<?php
include('functions/function.php');
if($_SESSION['language']=='English')
{
    $getto='';
    foreach($_GET as $key=>$val)
    {
        $getto.=$key.'='.$val.'&';
    }
    echo "<script>location.href='guestsearch.php?$getto'</script>";
}
$member_id= $_SESSION['member_id'];

$favorite_link = !isset($_SESSION['member_logged']) ? '/login2.php' : '#';
$favorite_class = !isset($_SESSION['member_logged']) ? 'gust' : 'member';


$per_page = 20;
if (isset($_GET['page'])) $page=($_GET['page']-1); else $page=0;
$start=abs($page*$per_page);

if(isset($_GET['city']))
{
    $que_condition = '';
    $city=$_GET['city'];
    $structure_type= $_GET['structure_type'];
    $priceLow= $_GET['priceLow'];
    $priceHigh= $_GET['priceHigh'];

    $favorite_query = "SELECT property_id FROM favorite_tbl WHERE member_id='$member_id' AND status='Favorite'";
    $que_search_count="SELECT * FROM post WHERE city='$city' AND structure_type='$structure_type' AND property_available='Available' AND post_date_confirm='yes' ";
    $que_search="SELECT * FROM post
     WHERE city='$city' AND structure_type='$structure_type' AND property_available='Available' AND post_date_confirm='yes'  ";
    // print_r($que_search);die;
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
        $que_condition.=" AND square_footage ='$square_footage' ";
    }
    if(isset($_REQUEST['furnished']) AND !empty($_REQUEST['furnished']))
    {
        $furnished= $_GET['furnished'];
        $que_condition.=" AND furnished ='$furnished' ";
    }

    // Featured search
    if(isset($_SESSION['member_logged'] ) &&  (!empty($_REQUEST['featured_search']) && $_REQUEST['featured_search'] == 'Yes' ))
    {
        $que_condition.=" AND featured_listing ='Yes' ";
    }


    $que_search_count .= $que_condition;

    $que_condition.= " ORDER BY `featured_listing`, `post_date` DESC";
//    $que_condition.= "ORDER BY featured_listing DESC";
    $que_condition.= " LIMIT $start,$per_page";
    $que_search .= $que_condition;

    // print_r($que_search);die;
    $obj_search=mysqli_query($conn,$que_search);
    if($rows=mysqli_num_rows($obj_search))
    {
        while($data_search3=mysqli_fetch_assoc($obj_search))
        {
            $data_search2[]= $data_search3;
        }
    }

    $result = mysqli_query($conn, $que_search_count);
    $total_rows = mysqli_num_rows($result);
    $num_pages=ceil($total_rows/$per_page);
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

$que_bath="SELECT * FROM bath_tbl";
$obj_bath=mysqli_query($conn,$que_bath);

$que_fur="SELECT * FROM furnished";
$obj_fur=mysqli_query($conn,$que_fur);

$que_bedroom="SELECT * FROM bedroom_tbl";
$obj_bedroom=mysqli_query($conn,$que_bedroom);

$fav_list = array();
if( !empty($member_id)){
    $obj_fav = mysqli_query($conn,$favorite_query);
    while($fav_item=mysqli_fetch_assoc($obj_fav))
    {
        if(!empty($fav_item["property_id"])){
            $fav_list[]=$fav_item["property_id"];
        }
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link href="css/201603/ui-lightness/jquery-ui-1.10.4.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="css/201603/global.css" rel="stylesheet">
    <link href="css/201603/section.css" rel="stylesheet">
    <link href="css/201603/carousel.css" rel="stylesheet">

    <meta name="keywords" content="pashutlehaskir.com | Rent SoCal Houses, Apartments & More, Israel rentals, Santa Monica House, South Bay Rentals, Israel Apartments, Orange County Rentals, San Diego Apartments, Hermosa Beach Apartments, Hollywood For Rent, Burbank Apartments, Glendale Homes, Studio City Rentals, Apartments for Rent, Houses for Rent, Condos for Rent, Apartments in Israel, Apartments in LA, USC, University of Southern California, Cal State, California State University, UCLA, University of California, University of California Israel, Loyola Marymount University, Pepperdine, Pepperdine University, USC Student Housing, USC Housing, USC Apartments, Cal State Housing, Cal State Student Housing, Cal State Apartments, UCLA Housing, UCLA Student Housing, UCLA Apartments, LMU Housing, LMU Student Housing, LMU Apartments, Pepperdine Housing, Pepperdine Student Housing, Pepperdine Apartments" />

    <meta name="description" content="pashutlehaskir.com is the #1 home finding service in the Israel area. Search SoCal apartment rentals, houses, condos & roommates!" />

    <meta name="robots" content="index,follow" />
    <meta name="GOOGLEBOT" content="index,follow" />



    <meta name="google-translate-customization" content="954d153704cc37f5-fac58c9bb4d3c842-g115d03cfb1ac5d23-17"></meta>

</head>

<style type="text/css">
    .search-results .search-filters {
        width: 100%;
        overflow: hidden;
    }
    .s_field{
        display: none !important;
    }
</style>
<style>
    .temr {
        margin-bottom: 0px!important;
    }
    .llsignup input.small {
        float: right;
    }
    .formErrorArrow {
        width: 186%!important;
    }
    .formError .formErrorContent {
        margin-right: 85%;
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
            -------------- או --------------
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
<div class="container-fluid search-results photo">
<div style="text-align:right;font-weight: bold; font-size: 30px;">
    תוצאות חיפוש
			  <span class="highlight"><em>
                      <?php
                      if(isset($total_rows))
                      {
                          echo $total_rows;
                      }
                      else
                      {
                          echo '0';
                      }
                      ?>
                      תוצאות</em>
            </span>
</div>
<h2 style="margin-bottom: 0px;padding-bottom: 0px;"></h2>


<div class="search-filters">
<form action="#" method="GET">
<div class="search-filters-span">
<div class="col">
    <?php $city_val = !empty($_GET['city']) ?$_GET['city'] :'';?>
    <select name="city" style="width:32%;" class="medium right-pad">
        <?php
        foreach($data_city2 as $data_city)
        { ?>
            <option value='<?php echo $data_city['city_id'];?>' <?php checked($data_city['city_id'], $city_val ); ?>><?php echo $data_city['city_name_he'];?></option>
        <?php }
        ?>
    </select>
</div>
<div class="col">
    <?php $priceLow = !empty($_GET['priceLow']) ? $_GET['priceLow'] : 0  ?>
    <select class="med" name="priceLow">
        <option value="0">מסכום</option>
        <option value="0" <?php checked( $priceLow, 0 ); ?> >₪0</option>
        <option value="500" <?php checked( $priceLow, 500 ); ?> >₪500</option>
        <option value="1000" <?php checked( $priceLow, 1000 ); ?>>₪1000</option>
        <option value="1500" <?php checked( $priceLow, 1500 ); ?>>₪1500</option>
        <option value="2000" <?php checked( $priceLow, 2000 ); ?>>₪2000</option>
        <option value="2500" <?php checked( $priceLow, 2500 ); ?>>₪2500</option>
        <option value="3000" <?php checked( $priceLow, 3000 ); ?>>₪3000</option>
        <option value="3500" <?php checked( $priceLow, 3500 ); ?>>₪3500</option>
        <option value="4000" <?php checked( $priceLow, 4000 ); ?>>₪4000</option>
        <option value="4500" <?php checked( $priceLow, 4500 ); ?>>₪4500</option>
        <option value="5000" <?php checked( $priceLow, 5000 ); ?>>₪5000</option>
        <option value="5500" <?php checked( $priceLow, 5500 ); ?>>₪5500</option>
        <option value="6000" <?php checked( $priceLow, 6000 ); ?>>₪6000</option>
        <option value="6500" <?php checked( $priceLow, 6500 ); ?>>₪6500</option>
        <option value="7000" <?php checked( $priceLow, 7000 ); ?>>₪7000</option>
        <option value="7500" <?php checked( $priceLow, 7500 ); ?>>₪7500</option>
        <option value="8000" <?php checked( $priceLow, 8000 ); ?>>₪8000</option>
        <option value="8500" <?php checked( $priceLow, 8500 ); ?>>₪8500</option>
        <option value="9000" <?php checked( $priceLow, 9000 ); ?>>₪9000</option>
        <option value="9500" <?php checked( $priceLow, 9500 ); ?>>₪9500</option>
        <option value="10000" <?php checked( $priceLow, 10000 ); ?>>₪10000</option>
        <option value="10500" <?php checked( $priceLow, 10500 ); ?>>₪10500</option>
        <option value="11000" <?php checked( $priceLow, 11000 ); ?>>₪11000</option>
        <option value="11500" <?php checked( $priceLow, 11500 ); ?>>₪11500</option>
        <option value="12000" <?php checked( $priceLow, 12000 ); ?>>₪12000</option>
        <option value="12500" <?php checked( $priceLow, 12500 ); ?>>₪12500</option>
        <option value="13000" <?php checked( $priceLow, 13000 ); ?>>₪13000</option>
        <option value="13500" <?php checked( $priceLow, 13500 ); ?>>₪13500</option>
        <option value="14000" <?php checked( $priceLow, 14000 ); ?>>₪14000</option>
        <option value="15000" <?php checked( $priceLow, 15000 ); ?>>₪15000</option>
        <option value="15500" <?php checked( $priceLow, 15500 ); ?>>₪15500</option>
        <option value="16000" <?php checked( $priceLow, 16000 ); ?>>₪16000</option>
        <option value="16500" <?php checked( $priceLow, 16500 ); ?>>₪16500</option>
        <option value="17000" <?php checked( $priceLow, 17000 ); ?>>₪17000</option>
        <option value="17500" <?php checked( $priceLow, 17500 ); ?>>₪17500</option>
        <option value="18000" <?php checked( $priceLow, 18000 ); ?>>₪18000</option>
        <option value="18500" <?php checked( $priceLow, 18500 ); ?>>₪18500</option>
        <option value="19000" <?php checked( $priceLow, 19000 ); ?>>₪19000</option>
        <option value="19500" <?php checked( $priceLow, 19500 ); ?>>₪19500</option>
        <option value="20000" <?php checked( $priceLow, 20000 ); ?>>₪20000</option>
        <option value="20500" <?php checked( $priceLow, 20500 ); ?>>₪20500</option>
        <option value="21000" <?php checked( $priceLow, 21000 ); ?>>₪21000</option>
        <option value="21500" <?php checked( $priceLow, 21500 ); ?>>₪21500</option>
        <option value="22000" <?php checked( $priceLow, 22000 ); ?>>₪22000</option>
        <option value="22500" <?php checked( $priceLow, 22500 ); ?>>₪22500</option>
        <option value="23000" <?php checked( $priceLow, 23000 ); ?>>₪23000</option>
        <option value="23500" <?php checked( $priceLow, 23500 ); ?>>₪23500</option>
        <option value="24000" <?php checked( $priceLow, 24000 ); ?>>₪24000</option>
        <option value="24500" <?php checked( $priceLow, 24500 ); ?>>₪24500</option>
        <option value="25000" <?php checked( $priceLow, 25000 ); ?>>₪25000</option>
        <option value="25500" <?php checked( $priceLow, 25500 ); ?>>₪25500</option>
        <option value="26000" <?php checked( $priceLow, 26000 ); ?>>₪26000</option>
        <option value="26500" <?php checked( $priceLow, 26500 ); ?>>₪26500</option>
        <option value="27000" <?php checked( $priceLow, 27000 ); ?>>₪27000</option>
        <option value="27500" <?php checked( $priceLow, 27500 ); ?>>₪27500</option>
        <option value="28000" <?php checked( $priceLow, 28000 ); ?>>₪28000</option>
        <option value="28500" <?php checked( $priceLow, 28500 ); ?>>₪28500</option>
        <option value="29000" <?php checked( $priceLow, 29000 ); ?>>₪29000</option>
        <option value="29500" <?php checked( $priceLow, 29500 ); ?>>₪29500</option>
        <option value="30000" <?php checked( $priceLow, 30000 ); ?>>₪30000</option>
    </select>
    <span class="selectDesh">-</span>
    <?php $priceHigh = !empty($_GET['priceHigh']) ? $_GET['priceHigh'] : 0  ?>
    <select class="med pad" name="priceHigh">
        <option value="0">עד</option>
        <option value="500" <?php checked( $priceHigh, 500 ); ?> >₪500</option>
        <option value="1000" <?php checked( $priceHigh, 1000 ); ?>>₪1000</option>
        <option value="1500" <?php checked( $priceHigh, 1500 ); ?>>₪1500</option>
        <option value="2000" <?php checked( $priceHigh, 2000 ); ?>>₪2000</option>
        <option value="2500" <?php checked( $priceHigh, 2500 ); ?>>₪2500</option>
        <option value="3000" <?php checked( $priceHigh, 3000 ); ?>>₪3000</option>
        <option value="3500" <?php checked( $priceHigh, 3500 ); ?>>₪3500</option>
        <option value="4000" <?php checked( $priceHigh, 4000 ); ?>>₪4000</option>
        <option value="4500" <?php checked( $priceHigh, 4500 ); ?>>₪4500</option>
        <option value="5000" <?php checked( $priceHigh, 5000 ); ?>>₪5000</option>
        <option value="5500" <?php checked( $priceHigh, 5500 ); ?>>₪5500</option>
        <option value="6000" <?php checked( $priceHigh, 6000 ); ?>>₪6000</option>
        <option value="6500" <?php checked( $priceHigh, 6500 ); ?>>₪6500</option>
        <option value="7000" <?php checked( $priceHigh, 7000 ); ?>>₪7000</option>
        <option value="7500" <?php checked( $priceHigh, 7500 ); ?>>₪7500</option>
        <option value="8000" <?php checked( $priceHigh, 8000 ); ?>>₪8000</option>
        <option value="8500" <?php checked( $priceHigh, 8500 ); ?>>₪8500</option>
        <option value="9000" <?php checked( $priceHigh, 9000 ); ?>>₪9000</option>
        <option value="9500" <?php checked( $priceHigh, 9500 ); ?>>₪9500</option>
        <option value="10000" <?php checked( $priceHigh, 10000 ); ?>>₪10000</option>
        <option value="10500" <?php checked( $priceHigh, 10500 ); ?>>₪10500</option>
        <option value="11000" <?php checked( $priceHigh, 11000 ); ?>>₪11000</option>
        <option value="11500" <?php checked( $priceHigh, 11500 ); ?>>₪11500</option>
        <option value="12000" <?php checked( $priceHigh, 12000 ); ?>>₪12000</option>
        <option value="12500" <?php checked( $priceHigh, 12500 ); ?>>₪12500</option>
        <option value="13000" <?php checked( $priceHigh, 13000 ); ?>>₪13000</option>
        <option value="13500" <?php checked( $priceHigh, 13500 ); ?>>₪13500</option>
        <option value="14000" <?php checked( $priceHigh, 14000 ); ?>>₪14000</option>
        <option value="15000" <?php checked( $priceHigh, 15000 ); ?>>₪15000</option>
        <option value="15500" <?php checked( $priceHigh, 15500 ); ?>>₪15500</option>
        <option value="16000" <?php checked( $priceHigh, 16000 ); ?>>₪16000</option>
        <option value="16500" <?php checked( $priceHigh, 16500 ); ?>>₪16500</option>
        <option value="17000" <?php checked( $priceHigh, 17000 ); ?>>₪17000</option>
        <option value="17500" <?php checked( $priceHigh, 17500 ); ?>>₪17500</option>
        <option value="18000" <?php checked( $priceHigh, 18000 ); ?>>₪18000</option>
        <option value="18500" <?php checked( $priceHigh, 18500 ); ?>>₪18500</option>
        <option value="19000" <?php checked( $priceHigh, 19000 ); ?>>₪19000</option>
        <option value="19500" <?php checked( $priceHigh, 19500 ); ?>>₪19500</option>
        <option value="20000" <?php checked( $priceHigh, 20000 ); ?>>₪20000</option>
        <option value="20500" <?php checked( $priceHigh, 20500 ); ?>>₪20500</option>
        <option value="21000" <?php checked( $priceHigh, 21000 ); ?>>₪21000</option>
        <option value="21500" <?php checked( $priceHigh, 21500 ); ?>>₪21500</option>
        <option value="22000" <?php checked( $priceHigh, 22000 ); ?>>₪22000</option>
        <option value="22500" <?php checked( $priceHigh, 22500 ); ?>>₪22500</option>
        <option value="23000" <?php checked( $priceHigh, 23000 ); ?>>₪23000</option>
        <option value="23500" <?php checked( $priceHigh, 23500 ); ?>>₪23500</option>
        <option value="24000" <?php checked( $priceHigh, 24000 ); ?>>₪24000</option>
        <option value="24500" <?php checked( $priceHigh, 24500 ); ?>>₪24500</option>
        <option value="25000" <?php checked( $priceHigh, 25000 ); ?>>₪25000</option>
        <option value="25500" <?php checked( $priceHigh, 25500 ); ?>>₪25500</option>
        <option value="26000" <?php checked( $priceHigh, 26000 ); ?>>₪26000</option>
        <option value="26500" <?php checked( $priceHigh, 26500 ); ?>>₪26500</option>
        <option value="27000" <?php checked( $priceHigh, 27000 ); ?>>₪27000</option>
        <option value="27500" <?php checked( $priceHigh, 27500 ); ?>>₪27500</option>
        <option value="28000" <?php checked( $priceHigh, 28000 ); ?>>₪28000</option>
        <option value="28500" <?php checked( $priceHigh, 28500 ); ?>>₪28500</option>
        <option value="29000" <?php checked( $priceHigh, 29000 ); ?>>₪29000</option>
        <option value="29500" <?php checked( $priceHigh, 29500 ); ?>>₪29500</option>
        <option value="30000" <?php checked( $priceHigh, 30000 ); ?>>₪30000</option>
    </select>
</div>
<div class="col">
    <?php $structure_type_val = !empty($_GET['structure_type']) ?$_GET['structure_type'] :'';?>
    <select name="structure_type" style="width:32%;" class="medium right-pad">
        <?php
        foreach($data_struct2 as $data_struct)
        {
            ?>
            <option value='<?php echo $data_struct['struct_id'];?>' <?php checked($data_struct['struct_id'],$structure_type_val ); ?>><?php echo $data_struct['name_en'];?></option>
<!--            <option value="--><?php //echo $data_struct['struct_id'];?><!--">--><?php //echo $data_struct['name_he'];?><!--</option>-->
        <?php
        }
        ?>
    </select>
</div>
<div class="col s_field">
    <?php $bedroom_val = !empty($_GET['bedroom']) ?$_GET['bedroom'] :'';?>
    <select name="bedroom" style="width:24%;" class="medium right-pad">
        <option value="">חדרי שינה בחר</option>
        <?php
        while($data_bedroom=mysqli_fetch_assoc($obj_bedroom))
        { ?>
            <option value="<?php echo $data_bedroom['id']; ?>" <?php checked($data_bedroom['id'],$bedroom_val ); ?>><?php echo $data_bedroom['bedroom_he']; ?></option>
        <?php }
        ?>
    </select>
    <?php $bathroom_val = !empty($_GET['bathroom']) ?$_GET['bathroom'] :'';?>
    <select name="bathroom" style="width:14%;" class="medium right-pad">
        <option value="">בחלק מחדרי הרחצה</option>
        <?php
        while($data_bath=mysqli_fetch_assoc($obj_bath))
        { ?>
            <option value="<?php echo $data_bath['id'];?>" <?php checked($data_bath['id'],$bathroom_val ); ?>><?php echo $data_bath['bath_he'];?></option>
        <?php }
        ?>

    </select>&nbsp;
    <?php $square_footage_val = !empty($_GET['square_footage']) ?$_GET['square_footage'] :'';?>
    <select name="square_footage" style="width:14%;" class="medium right-pad">
        <option value="">מטר בחר</option>
        <?php
        for($i=1;$i<=200;$i++)
        { ?>
            <option value="<?php echo $i; ?>" <?php checked($square_footage_val, $i ); ?> ><?php echo $i;?></option>
        <?php }
        ?>

    </select>
    <!-- <input type="text" placeholder="Enter meters" style="width:14%;" name="square_footage" class="s_field"> -->
    <?php $furnished_val = !empty($_GET['furnished']) ?$_GET['furnished'] :'';?>
    <select name="furnished" style="width:24%;" class="medium right-pad">
        <option value="">בחר מרוהט</option>
        <?php
        while($data_fur=mysqli_fetch_assoc($obj_fur))
        {
            ?>
            <option value='<?php echo $data_fur['id'];?>' <?php checked($data_fur['id'], $furnished_val ); ?>><?php echo $data_fur['furnished_he'];?></option>
        <?php
        }
        ?>
    </select>
    <div class="featured-search-block">
        <?php $checked = ( !empty( $_REQUEST['featured_search'] ) &&   $_REQUEST['featured_search'] == 'Yes' ) ? 'checked="checked"' : '';  ?>
        <label for="featured_search">Search only featured</label>
        <input type="checkbox" name="featured_search" value="Yes" <?php echo $checked; ?>>
    </div>
</div>
<div class="col">
    <input type="hidden" value="g" name="searchType">

    <input type="submit" align="absmiddle" value="חפש" class="search" name="search-submit" style="margin-top: 1%;">
    <?php
    if(isset($_SESSION['member_logged']))
    { ?>
        <a href="#" align="absmiddle" class="btn btn-danger" style="background-color:#EE2324; padding:12px 14px;font-size: 16px; margin-left: 78%;" id="adv_search">חיפוש מתקדם</a>

    <?php }
    ?>

</div>
</div>
</form>
</div>
<hr>



<div style="margin-bottom:10px;text-align:right;">
    <!-- &nbsp; <a onclick="javascript:fnSearchResultsPrint();" href="#" style="color:#5181EF;text-decoration:underline;font-weight:bold;">Printer Friendly Version</a> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  -->
</div>


<div class="" id="content">

    <div id="loading-message" style="display: none;"><img id="loading" align="absmiddle" src="images/icons/loading-bar.gif"></div>
    <span data-value="2224" id="totalrecords"></span>
    <span data-value="36" id="perpage"></span>
    <span data-value="photo" id="result-layout"></span>
    <div id="search-results">

        <div class="selection-bar">
            <?php echo get_pagination($page, $per_page, $total_rows); ?>
            <ul class="layout-selection list-inline" style="float:right;">
                <li class="selected" data-layout="photo">
                    <img align="absmiddle" src="images/new/photo-icon.png">תמונות
                </li>
                <li data-layout="list">
                    <img align="absmiddle" src="images/new/list-icon.png"> רשימה
                </li>
            </ul>
        </div>




        <?php
        if(isset($data_search2))
        {
            foreach($data_search2 as $data_search)
            { ?>
                <div class="listing-wrapper featured col-md-3 col-lg-3 col-sm-4 col-xs-12" style="text-align: right;">
                    <?php
                    if($data_search['featured_listing']=='Yes')
                    { ?>
                        <span class="badge"></span>
                    <?php
                    }
                    ?>
                    <div class="image-wrapper">
                        <?php if( !empty($data_search['main_image'] )): ?>
                            <a href="view_detail.php?pid=<?php echo $data_search['post_id'];?>">
                                <img alt=""  src="home_images/<?php echo $data_search['main_image'];?>">
                            </a>
                        <?php endif; ?>
                        <div class="detail-link">
                            <!-- <a href="/listingdetail/1298189/santa-monica/eco-friendly-1920s-charm-near-expo-rail-stop-utilities-included/"></a> -->
                            <a href="view_detail.php?pid=<?php echo $data_search['post_id'];?>">הצג פרטים</a>
                        </div>
                        <a href="#">

                        </a>
                    </div>
                    <div class="text-wrapper">
                        <div class="top-section">
                            <div class="area-text"><?php $WHERE_CITY['city_id']=$data_search['city']; echo select('city',$WHERE_CITY)[0]['city_name_he'];?>&nbsp;<?php $WHERE_STATE['id']=$data_search['state']; echo select('state',$WHERE_STATE)[0]['state_name_he'];?></div>
                            <div class="title-text"><?php echo $data_search['short_descp'];?></div>
                            <div class="property-text"><?php $WHERE_BEDROOM['id']=$data_search['bedroom']; echo select('bedroom_tbl',$WHERE_BEDROOM)[0]['bedroom_he'];?> &nbsp;|&nbsp; <?php $WHERE_BATH['id']=$data_search['bathroom']; echo select('bath_tbl',$WHERE_BATH)[0]['bath_he'];?></div>
                        </div>
                        <div class="middle-section">
                            <div class="available-text">
    						<span class="avail-text">
    							<?php
                                if($data_search['availability']<=date('Y-m-d'))
                                {
                                    echo "זמין כעת!";
                                }
                                else
                                {
                                    echo "זמין - '".$data_search['availability']."' ";
                                }
                                ?>
    						</span>
    						<span class="join-text">
    							<br><a href="join.php">הצטרף עכשיו כדי לראות את כתובת וטלפון!</a> 						
    						</span>
                            </div>
                        </div>
                        <div class="bottom-section">
                            <a onmouseout="UnTip()" onmouseover="Tip('רשימה זו כוללת את תמונות . לחץ כדי לראות את התמונות .',WIDTH, -350, SHADOW, true, FADEIN, 500, FADEOUT, 1000, BGCOLOR, '#FF8', BORDERCOLOR, '#FC0', PADDING, 5, FONTWEIGHT, 'bold', FONTSIZE, '11px')" href="view_detail.php?pid=<?php echo $data_search['post_id'];?>"><img border="0" align="absmiddle" class="" src="images/2016/icons/photos-listingicon.png"></a>
                            <a onmouseout="UnTip()" onmouseover="Tip('רשימה זו יש מפה . לחץ כדי להציג את המפה .',WIDTH, -350, SHADOW, true, FADEIN, 500, FADEOUT, 1000, BGCOLOR, '#FF8', BORDERCOLOR, '#FC0', PADDING, 5, FONTWEIGHT, 'bold', FONTSIZE, '11px')" href="#"><img border="0" align="absmiddle" class="" src="images/2016/icons/pin-listingicon.png"></a>
                            <?php
                            if($data_search['pet'] !='2')
                            { ?>
                                <a onmouseout="UnTip()" onmouseover="Tip('חיות מחמד בסדר . הצג את הרישום לפרטים על חיות מחמד מקובלות .',WIDTH, -350, SHADOW, true, FADEIN, 500, FADEOUT, 1000, BGCOLOR, '#FF8', BORDERCOLOR, '#FC0', PADDING, 5, FONTWEIGHT, 'bold', FONTSIZE, '11px')" href="#"><img border="0" align="absmiddle" class="" src="images/2016/icons/pets-listingicon.png"></a>
                            <?php } ?>

                            <?php
                            if($data_search['accessiblee'] =='yes')
                            { ?>
                                <a onmouseout="UnTip()" onmouseover="Tip('יחידה זו נגישה לכסאות גלגלים',WIDTH, -350, SHADOW, true, FADEIN, 500, FADEOUT, 1000, BGCOLOR, '#FF8', BORDERCOLOR, '#FC0', PADDING, 5, FONTWEIGHT, 'bold', FONTSIZE, '11px')" href="javascript:void(0);"><img border="0" align="absmiddle" class="" src="images/2016/icons/wheelchair-listingicon.png"></a>
                            <?php } ?>

                            <?php
                            if($data_search['parking'] !='3')
                            { ?>
                                <a onmouseout="UnTip()" onmouseover="Tip('חניה זמינה . הצג את הרישום לפרטי חניה .',WIDTH, -350, SHADOW, true, FADEIN, 500, FADEOUT, 1000, BGCOLOR, '#FF8', BORDERCOLOR, '#FC0', PADDING, 5, FONTWEIGHT, 'bold', FONTSIZE, '11px')" href="javascript:void(0);"><img border="0" align="absmiddle" class="" src="images/2016/icons/parking-listingicon.png"></a>
                            <?php } ?>


                            <?php
                            if($data_search['refrigerator'] =='Yes')
                            { ?>
                                <a onmouseout="UnTip()" onmouseover="Tip('יחידה זו כוללת מקרר .',WIDTH, -350, SHADOW, true, FADEIN, 500, FADEOUT, 1000, BGCOLOR, '#FF8', BORDERCOLOR, '#FC0', PADDING, 5, FONTWEIGHT, 'bold', FONTSIZE, '11px')" href="javascript:void(0);"><img border="0" align="absmiddle" class="" src="images/2016/icons/refridgerator-listingicon.png"></a>
                            <?php } ?>


                            <div class="price-text left" style="float:left;">₪&nbsp;<?php echo $data_search['rent'];?></div>
                            <div class="clearboth"></div>
                            <hr style="margin:10px auto;">
                            <div class="footer-section">
                                <div class="left"></div>
                                <div class="left">
                                    <a href="<?php echo $favorite_link; ?>">
                                        <?php $fav_img = in_array($data_search['post_id'], $fav_list) ? '../images/2016/icons/heartselected-listingicon.png' : '../images/2016/icons/heart-listingicon.png';?>
                                        <span class="favorite-link <?php echo $favorite_class; ?>" data-listingid="<?php echo $data_search['post_id'];?>">
        									<img align="absmiddle" src="<?php echo $fav_img; ?>">
        								</span>
                                    </a>
    							<span class="quick-text">
    								<a rel="prettyPhoto" href="view_detail.php?pid=<?php echo $data_search['post_id'];?>">
                                        <img align="absmiddle" src="images/2016/icons/view-listingicon.png">
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
        <?php echo get_pagination($page, $per_page, $total_rows); ?>
    </div>
    <div class="ad-results">
        <div class="line"><img src="#"></div>
        <div class="line"><img src="images/time-warner-authorized-retailer.png"></div>
    </div>
    <div class="quickview" id="listing-details-modal"></div>
</div>
</div>

<!-- FOOTER -->
<?php
include('footer_h.php');
?>









<!-- Bootstrap core JavaScript

<!-- Placed at the end of the document so the pages load faster -->


<style>
    .select2-container {
        margin-bottom: 5px;
    }
    .select2-container--default .select2-selection--single {
        height: 46px;
        border: 1px solid #cad3df;
        border-radius: 0;
    }
    .select2-container--default .select2-selection--single .select2-selection__rendered {
        height: 44px;
        background: #eceff4;
        font-size: 16px;
        color: #3d4d65;
        line-height: 3;
    }
    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 46px;
    }
    @media (min-width : 320px) and (max-width : 767px) {
        .select2.select2-container.select2-container--default {
            width: 100%!important;
            display: block;
            float: left;
        }
        .select2-container--default .select2-selection--single {
            width: 100%;
            display: block;
            float: left;
        }
        select[name="priceLow"] + span.select2.select2-container.select2-container--default,
        select[name="priceHigh"] + span.select2.select2-container.select2-container--default {
            width: 48%!important;
        }
        .selectDesh {
            width: 4%;
            display: block;
            float: left;
        }
    }
</style>



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script type="text/javascript">
    $('select').select2({minimumResultsForSearch: Infinity});
</script>


<script src="js/new/jquery-ui-1.10.4/jquery-ui-1.10.4.js"></script>
<script src="js/new/jquery.cycle.all.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>



<script src="js/fb_login.js"></script>
<script src="js/navigation/menu.js" type="text/javascript" language="javascript"></script>
<script src="js/default.js" type="text/javascript" language="javascript"></script>

<script src="js/ddaaccordion.js" type="text/javascript" language="javascript"></script>

<script language="javascript" type="text/javascript" src="js/tooltips/wz_tooltip.js"></script>

<!-- Default JavaScript -->
<!---<script src="js/new/default.js"></script> -->








<script src="js/new/jquery-ui-1.10.4/jquery-ui-1.10.4.js"></script>
<script src="js/new/jquery.cycle.all.js"></script>
<script src="js/fb_login.js"></script>
<script language="javascript" type="text/javascript" src="js/navigation/menu.js?ver=1008"></script>
<div id="dropmenudiv" onmouseout="dynamichide(event)" onmouseover="clearhidemenu()" style="visibility:hidden;width:165px;background-color:lightyellow"></div>
<script language="javascript" type="text/javascript" src="js/default.js?ver=1008"></script>
<script language="javascript" type="text/javascript" src="js/ddaaccordion.js?ver=1008"></script>
<script src="js/new/default.js"></script>
<script type="text/javascript" src="js/guest_search.js" language="javascript"></script>
<script type="text/javascript" src="js/jquery.cookie.js" language="javascript"></script>
<link charset="utf-8" media="screen" type="text/css" href="js/new/prettyphoto/css/prettyPhoto.css" rel="stylesheet">
<script charset="utf-8" type="text/javascript" src="js/new/prettyphoto/js/jquery.prettyPhoto.js"></script>





<script type="text/javascript">
    $(document).ready(function(){
        $('#adv_search').click(function(){
            $('.col').removeClass('s_field');
            $('#adv_search').hide();
        });
    });

</script>
<?php
if(isset($_SESSION['member_logged'])) {
    include 'member/member_init.php';
}
?>
</body>
</html>






