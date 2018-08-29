<?php
include('functions/function.php');
if ($_SESSION['language'] == 'Hebrew') {
    $getto = '';
    foreach ($_GET as $key => $val) {
        $getto .= $key . '=' . $val . '&';
    }


    echo "<script>location.href='moving_resources_listings.php?$getto'</script>";
}

$per_page = 20;
if (isset($_GET['page'])) $page = ($_GET['page'] - 1); else $page = 0;
$start = abs($page * $per_page);

$que_condition = '';

$mvrQuery = "SELECT mvr.id, mvr.name, mvr.content, mvr.image, cat.name AS cat_name, c.city_name AS city FROM `moving_resources` AS `mvr` LEFT JOIN `city` AS `c` ON c.city_id = mvr.city LEFT JOIN `category` AS `cat` ON cat.id = mvr.category";

if (!empty($_GET['city']) && !empty($_GET['category'])) {
    $mvrQuery .= " WHERE c.city_id=" . $_GET['city'] . " AND cat.id=" . $_GET['category'];
} elseif (!empty($_GET['city'])) {
    $mvrQuery .= " WHERE c.city_id=" . $_GET['city'];
} elseif (!empty($_GET['category'])) {
    if (isset($_GET['category'])) {
        $mvrQuery .= " WHERE cat.id=" . $_GET['category'];
    }
}

$que_search_count = $mvrQuery;

$mvrQuery .= " LIMIT $start,$per_page";
$que_search = $mvrQuery;


//    $que_condition.=" AND featured_listing ='Yes' ";
//
//
//    $que_search_count .= $que_condition;
//
//    $que_condition.= "ORDER BY featured_listing DESC";
//    $que_condition.= " LIMIT $start,$per_page";
//    $que_search .= $que_condition;

// print_r($que_search);die;
$obj_search = mysqli_query($conn, $que_search);
if ($rows = mysqli_num_rows($obj_search)) {
    while ($data_search3 = mysqli_fetch_assoc($obj_search)) {
        $data_search2[] = $data_search3;
    }
}

$result = mysqli_query($conn, $que_search_count);
$total_rows = mysqli_num_rows($result);
$num_pages = ceil($total_rows / $per_page);


$que_city = "SELECT * FROM city ";
$obj_city = mysqli_query($conn, $que_city);
while ($data_city3 = mysqli_fetch_assoc($obj_city)) {
    $data_city2[] = $data_city3;
}

$que_struct = "SELECT * FROM category";
$obj_struct = mysqli_query($conn, $que_struct);
while ($data_struct3 = mysqli_fetch_assoc($obj_struct)) {
    $data_struct2[] = $data_struct3;
}

?>

<!DOCTYPE HTML>
<html lang="en">
<head>


    <title>pashutlehaskir.com</title>
    <link rel="shortcut icon" href=""/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport"
          content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">
    <meta http-equiv="expires" content="0"/>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8"/>


    <meta name="apple-itunes-app" content="app-id=509021914">


    <script type="text/javascript">
        setTimeout(function () {
            var a = document.createElement("script");
            var b = document.getElementsByTagName("script")[0];
            a.src = document.location.protocol + "//script.crazyegg.com/pages/scripts/0044/7420.js?" + Math.floor(new Date().getTime() / 3600000);
            a.async = true;
            a.type = "text/javascript";
            b.parentNode.insertBefore(a, b)
        }, 1);
    </script>

    <script>
        var _prum = [['id', '56a93ecdabe53ddd5a18ddad'],
            ['mark', 'firstbyte', (new Date()).getTime()]];
        (function () {
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
        (function () {
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
        setTimeout(function () {
            var a = document.createElement("script");
            var b = document.getElementsByTagName("script")[0];
            a.src = document.location.protocol + "//script.crazyegg.com/pages/scripts/0044/7420.js?" + Math.floor(new Date().getTime() / 3600000);
            a.async = true;
            a.type = "text/javascript";
            b.parentNode.insertBefore(a, b)
        }, 1);
    </script>

    <script>
        var _prum = [['id', '56a93ecdabe53ddd5a18ddad'],
            ['mark', 'firstbyte', (new Date()).getTime()]];
        (function () {
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
        (function () {
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
        window.onload = function () {
            document.getElementById("loading").style.display = "none"
        }
    </script>


    <!-- Latest compiled and minified CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet"/>
    <link href="css/201603/ui-lightness/jquery-ui-1.10.4.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="css/201603/base.css" rel="stylesheet">
    <link href="css/201603/global.css" rel="stylesheet">
    <link href="css/201603/section.css" rel="stylesheet">
    <link href="css/201603/carousel.css" rel="stylesheet">

    <meta name="keywords"
          content="pashutlehaskir.com | Rent SoCal Houses, Apartments & More, Israel rentals, Santa Monica House, South Bay Rentals, Israel Apartments, Orange County Rentals, San Diego Apartments, Hermosa Beach Apartments, Hollywood For Rent, Burbank Apartments, Glendale Homes, Studio City Rentals, Apartments for Rent, Houses for Rent, Condos for Rent, Apartments in Israel, Apartments in LA, USC, University of Southern California, Cal State, California State University, UCLA, University of California, University of California Israel, Loyola Marymount University, Pepperdine, Pepperdine University, USC Student Housing, USC Housing, USC Apartments, Cal State Housing, Cal State Student Housing, Cal State Apartments, UCLA Housing, UCLA Student Housing, UCLA Apartments, LMU Housing, LMU Student Housing, LMU Apartments, Pepperdine Housing, Pepperdine Student Housing, Pepperdine Apartments"/>

    <meta name="description"
          content="pashutlehaskir.com is the #1 home finding service in the Israel area. Search SoCal apartment rentals, houses, condos & roommates!"/>

    <meta name="robots" content="index,follow"/>
    <meta name="GOOGLEBOT" content="index,follow"/>


    <meta name="google-translate-customization" content="954d153704cc37f5-fac58c9bb4d3c842-g115d03cfb1ac5d23-17"></meta>

</head>

<style type="text/css">
    .search-results .search-filters {
        width: 90%;
        overflow: hidden;
    }

    .s_field {
        display: none !important;
    }
</style>

<body class="guest">
<!-- Google Tag Manager -->

<!-- End Google Tag Manager -->

<div id="slidedown-content" data-status="hide" class="none">
    <div id="login-content" class="fb">
        <form action="login.php" name="loginForm" method="post">
                    <span>
                        <label>Username</label> 
                        <input type="text" name="username" class="text" size="10" maxlength="100"/>
                    </span>
            <span>
                        <label>Password</label>
                        <input type="password" autocomplete="off" class="text" name="password" size="10"
                               maxlength="45"/>
                    </span>


            <input type="image" name="login" class="submit" src="images/new/btn-login.png" align="absmiddle"/>


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
<div class="container-fluid search-results photo">
    <h2>Search Results <span class="highlight"><em>
            <?php
            if (isset($rows)) {
                echo $rows;
            } else {
                echo '0';
            }
            ?>
                Results</em>
            </span></h2>
    <div style="margin-bottom:10px;text-align:center;">
        <span style="color:#3d4d65; font-size: 15px; font-weight:bold;">Find specialized and reputable moving services & solutions in your area! Choose your preffered service and city to help your move go more smoothly and efficiently. </span>
    </div>

    <div class="search-filters">
        <form action="#" method="GET">
            <div class="search-filters-span">
                <div class="col">
                    <select name="city" style="width:32%;" class="medium right-pad">
                        <option value=''>-- Select City --</option>
                        <?php
                        foreach ($data_city2 as $data_city) { ?>
                            <option value='<?php echo $data_city['city_id']; ?>' <?php if (isset($_GET['city']) && $_GET['city'] == $data_city['city_id']) {
                                echo 'selected';
                            } ?>>
                                <?php echo $data_city['city_name']; ?>
                            </option>
                        <?php }
                        ?>
                    </select>
                </div>
                <div class="col">
                    <select name="category" style="width:32%;" class="medium right-pad">
                        <option value=''>-- Select Category --</option>
                        <?php
                        foreach ($data_struct2 as $data_struct) { ?>
                            <option value='<?php echo $data_struct['id']; ?>' <?php if (isset($_GET['category']) && $_GET['category'] == $data_struct['id']) {
                                echo 'selected';
                            } ?>>
                                <?php echo $data_struct['name']; ?>
                            </option>
                        <?php }
                        ?>
                    </select>
                </div>
                <div class="col">
                    <input type="hidden" value="g" name="searchType">
                    <input type="submit" align="absmiddle" value="Search" class="search" name="search-submit">
                </div>
            </div>
        </form>
    </div>
    <hr>

    <div class="" id="content">

        <div id="loading-message" style="display: none;"><img id="loading" align="absmiddle"
                                                              src="images/icons/loading-bar.gif"></div>
        <span data-value="2224" id="totalrecords"></span>
        <span data-value="36" id="perpage"></span>
        <span data-value="photo" id="result-layout"></span>
        <div id="search-results">

            <div class="selection-bar">
                <?php echo get_pagination($page, $per_page, $total_rows); ?>
            </div>


            <?php if (isset($data_search2)): ?>
                <?php foreach ($data_search2 as $data_search): ?>
                    <div class="listing-wrapper featured col-md-3 col-lg-3 col-sm-4 col-xs-12">
                        <div class="image-wrapper">
                            <img alt="" src="images/moving_resources/<?php echo $data_search['image']; ?>">
                        </div>
                        <div class="text-wrapper">
                            <div class="top-section">
                                <div class="area-text"><span
                                            class="avail-text">City:</span> <?php echo $data_search['city']; ?></div>
                                <div class="area-text"><span
                                            class="avail-text">Category:</span> <?php echo $data_search['cat_name']; ?>
                                </div>
                                <div class="title-text"><?php echo $data_search['content']; ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

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
<?php include('footer.php'); ?>

<style>
    .listing-wrapper.featured {
        height: auto;
        margin-bottom: 25px;
        padding: 15px;
        transition: transform .2s;
    }

    .listing-wrapper.featured:hover {
        transform: scale(1.1);
    }

    .listing-wrapper.featured:hover .image-wrapper,
    .listing-wrapper.featured:hover .text-wrapper {
        -webkit-box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.75);
        box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.75);
    }

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

    @media (min-width: 320px) and (max-width: 767px) {
        .select2.select2-container.select2-container--default {
            width: 100% !important;
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
            width: 48% !important;
        }

        .selectDesh {
            width: 4%;
            display: block;
            float: left;
        }
    }
</style>

<!-- Bootstrap core JavaScript

<!-- Placed at the end of the document so the pages load faster -->


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
<div id="dropmenudiv" onmouseout="dynamichide(event)" onmouseover="clearhidemenu()"
     style="visibility:hidden;width:165px;background-color:lightyellow"></div>
<script language="javascript" type="text/javascript" src="js/default.js?ver=1008"></script>
<script language="javascript" type="text/javascript" src="js/ddaaccordion.js?ver=1008"></script>
<script src="js/new/default.js"></script>
<script type="text/javascript" src="js/guest_search.js" language="javascript"></script>
<script type="text/javascript" src="js/jquery.cookie.js" language="javascript"></script>
<link charset="utf-8" media="screen" type="text/css" href="js/new/prettyphoto/css/prettyPhoto.css" rel="stylesheet">
<script charset="utf-8" type="text/javascript" src="js/new/prettyphoto/js/jquery.prettyPhoto.js"></script>


<script type="text/javascript">
    $(document).ready(function () {
        $('#adv_search').click(function () {
//                    $('.s_field').show();
            $('.col').removeClass('s_field');
            $('#adv_search').hide();
        });
    });

</script>

<?php
if (isset($_SESSION['member_logged'])) {
    include 'member/member_init.php';
}
?>
</body>
</html>
