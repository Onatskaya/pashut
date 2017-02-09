<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$root_dir = dirname(dirname(dirname(__DIR__)));

//$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$base_url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
//$currentPath = $_SERVER['PHP_SELF'];


include( $root_dir . "/functions/function.php");
include( $root_dir . 'check_login.php' );
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
    <link href="<?php echo $base_url; ?>/css/201603/ui-lightness/jquery-ui-1.10.4.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="<?php echo $base_url; ?>/css/201603/global.css" rel="stylesheet">
    <link href="<?php echo $base_url; ?>/css/201603/section.css" rel="stylesheet">
    <link href="<?php echo $base_url; ?>/css/201603/carousel.css" rel="stylesheet">

    <meta name="keywords" content="pashutlehaskir.com | Rent SoCal Houses, Apartments & More, Los Angeles rentals, Santa Monica House, South Bay Rentals, Los Angeles Apartments, Orange County Rentals, San Diego Apartments, Hermosa Beach Apartments, Hollywood For Rent, Burbank Apartments, Glendale Homes, Studio City Rentals, Apartments for Rent, Houses for Rent, Condos for Rent, Apartments in Los Angeles, Apartments in LA, USC, University of Southern California, Cal State, California State University, UCLA, University of California, University of California Los Angeles, Loyola Marymount University, Pepperdine, Pepperdine University, USC Student Housing, USC Housing, USC Apartments, Cal State Housing, Cal State Student Housing, Cal State Apartments, UCLA Housing, UCLA Student Housing, UCLA Apartments, LMU Housing, LMU Student Housing, LMU Apartments, Pepperdine Housing, Pepperdine Student Housing, Pepperdine Apartments" />
    <meta name="description" content="pashutlehaskir.com is the #1 home finding service in the Los Angeles area. Search SoCal apartment rentals, houses, condos & roommates!" />
    <meta name="robots" content="index,follow" />
    <meta name="GOOGLEBOT" content="index,follow" />
    <meta name="google-translate-customization" content="954d153704cc37f5-fac58c9bb4d3c842-g115d03cfb1ac5d23-17"></meta>
</head>


<body  class="guest" >

<?php
include($root_dir . '/header.php');
?>

<!-- Carousel
================================================== -->
<div class="container">
    <div class="container locations">
        <h3 style="background-color:#3D4D65;color:#fff;text-align:center;">Dashboard</h3>
        <div class="col-md-2"></div>
        <div class="col-md-8"></div>
        <div class="col-md-2"></div>




    </div>
</div> <!-- End main container div -->
<br>
<br>
<br>
<br>&nbsp;
<br>&nbsp;
<br>&nbsp;
<br>&nbsp;
<br>&nbsp;
<br>&nbsp;
<br>&nbsp;
<br>&nbsp;
<br>&nbsp;
<br>&nbsp;
<br>&nbsp;
<br>&nbsp;

<!-- FOOTER -->
<?php
include($root_dir . "/footer.php");
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
<!-- Default JavaScript -->
<script src="../js/new/default.js"></script>


<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">

<script type="text/javascript">
    jQuery( document ).ready(function( $ ) {
        $('#myTable').dataTable({ "bSort": false});
    });
</script>