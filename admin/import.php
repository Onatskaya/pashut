<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Cache-Control: post-check=0,pre-check=0", false);
header("Cache-Control: max-age=0", false);
header("Pragma: no-cache");


include("../functions/function.php");
include('check_login.php');

include('modules/parser/lib/simple_html_dom.php');
include('modules/parser/config/define.php');
include('modules/parser/include/functions.php');

//if($_SESSION['language']=='Hebrew')
//{
//    $getto='';
//    foreach($_GET as $key=>$val)
//    {
//        $getto.=$key.'='.$val.'&';
//    }
//    echo "<script>location.href='import_h.php?$getto'</script>";
//}

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Pashutlehaskir.com</title>
    <link rel="shortcut icon" href=""/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">
    <meta http-equiv="expires" content="0"/>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8"/>
    <meta name="apple-itunes-app" content="app-id=509021914">
    <!-- Latest compiled and minified CSS -->
    <link href="../css/201603/ui-lightness/jquery-ui-1.10.4.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="../css/201603/global.css" rel="stylesheet">
    <link href="../css/201603/section.css" rel="stylesheet">
    <link href="../css/201603/carousel.css" rel="stylesheet">

    <script src="http://maps.google.com/maps/api/js?key=AIzaSyACWUZ9OL8BQVQC-4cSsSFmEo71SLDzvlk"></script>
    <meta name="keywords"
          content="pashutlehaskir.com | Rent SoCal Houses, Apartments & More, Los Angeles rentals, Santa Monica House, South Bay Rentals, Los Angeles Apartments, Orange County Rentals, San Diego Apartments, Hermosa Beach Apartments, Hollywood For Rent, Burbank Apartments, Glendale Homes, Studio City Rentals, Apartments for Rent, Houses for Rent, Condos for Rent, Apartments in Los Angeles, Apartments in LA, USC, University of Southern California, Cal State, California State University, UCLA, University of California, University of California Los Angeles, Loyola Marymount University, Pepperdine, Pepperdine University, USC Student Housing, USC Housing, USC Apartments, Cal State Housing, Cal State Student Housing, Cal State Apartments, UCLA Housing, UCLA Student Housing, UCLA Apartments, LMU Housing, LMU Student Housing, LMU Apartments, Pepperdine Housing, Pepperdine Student Housing, Pepperdine Apartments"/>
    <meta name="description"
          content="pashutlehaskir.com is the #1 home finding service in the Los Angeles area. Search SoCal apartment rentals, houses, condos & roommates!"/>
    <meta name="robots" content="index,follow"/>
    <meta name="GOOGLEBOT" content="index,follow"/>
    <meta name="google-translate-customization" content="954d153704cc37f5-fac58c9bb4d3c842-g115d03cfb1ac5d23-17">
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>


<?php
include('header.php');
?>


<div class="container import-page">
    <div>Import posts from <a href="http://www.homeless.co.il/">http://www.homeless.co.il</a></div>
    <button id="start">Start import</button>
    <div id="progress" class="hidden" style="width:500px;border:1px solid #ccc;"></div>
    <div id="results" style="width"></div>
</div>
<div id="information" style="width"></div>
<?php
if (isset($_GET['parse']) && ($_GET['parse'] == true)) {
    pars();
}

function pars()
{
    echo '<script language="JavaScript">
            document.getElementById("progress").classList.remove(\'hidden\');
         </script>';
    $already_parsed = 0;
    $properties_id = get_rent_ids();
    $count = count($properties_id);

//test mod, delete this row in production
    $properties_id2 = [];
    for($i = 1; $i<=15;$i++){
        $properties_id2[] = $properties_id[$i];
    }
    unset($properties_id);
    $properties_id = $properties_id2;
    $count = count($properties_id2);
// end test config


    foreach ($properties_id as $key => $property_id) {
        $key++;
        $percent = intval($key / $count * 100) . "%";
        echo '<script language="javascript">
    document.getElementById("progress").innerHTML="<div style=\"width:' . $percent . ';background-color:#ddd;\">&nbsp;</div>";
    document.getElementById("results").innerHTML="' . $key . ' post(s) processed.";
    </script>';

        echo str_repeat(' ', 1024 * 64);
        flush();
        if (is_already_parsed($property_id)){
            $already_parsed++;
        }else{
            saveParsPost($property_id);
        };
    }
    $was_saved = $count-$already_parsed;
    if($count == $already_parsed){
        echo '<script language="javascript">document.getElementById("results").innerHTML="Process completed. New posts, no found."</script>';
    }else{
        echo '<script language="javascript">document.getElementById("results").innerHTML="Process completed. ',$key,' post(s) was parsed.<br>',$was_saved, ' new post(s) was saved.','"</script>';
    }

}

?>


<?php
include("footer.php");
?>

<script type="text/javascript" src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/default.js" type="text/javascript" language="javascript"></script>
<script>
    $('#start').on('click', function () {
        window.location.href = 'import.php?parse=true';
    })
</script>







