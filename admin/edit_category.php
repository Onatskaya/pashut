<?php
include("../functions/function.php");
include('check_login.php');

$category = $category_h = null;

;
if($_POST['add-category'] && $_POST['category_id'] && is_numeric($_POST['category_id'])){
    //Update Item.
    $que_post=sprintf("UPDATE `category` SET `name`='%s',`name_he`='%s' WHERE `id` = '%s'",
        $_POST['category-name'],
        $_POST['category-name-he'],
        (int)$_POST['category_id']);

    $obj_post= mysqli_query($conn,$que_post);
    if($obj_post){
        echo "<script>setTimeout(function(){window.location.href='categories.php'},1000);</script>
                <h4 style='z-index:99; background-color:#7292DA;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Updated Successfully!</h4>";
    }
}elseif( $_POST['add-category'] && htmlspecialchars($_POST['category-name']) && htmlspecialchars($_POST['category-name-he'])){
    //Insert Item.
    $que_post=sprintf("INSERT INTO `category`(`name`, `name_he`) VALUES ('%s', '%s')",
                       $_POST['category-name'],
                       $_POST['category-name-he']
    );

    $obj_post= mysqli_query($conn,$que_post);

    if($obj_post){
        echo "<script>setTimeout(function(){window.location.href='categories.php'},1000);</script>
                <h4 style='z-index:99; background-color:#7292DA;width:50%; top:45%; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Category Added Successfully!</h4>";
    }
}

//Get Item.
if($_GET['category_id'] && is_numeric($_GET['category_id'])){
    $que_post=sprintf("SELECT * FROM `category` WHERE `id` = %s  ORDER BY `name`", (int)$_GET['category_id']);
    $obj_post= mysqli_query($conn,$que_post);
    $categoryArr = $obj_post->fetch_assoc();

    if(!empty($categoryArr) && is_array($categoryArr)){
        $category = $categoryArr['name'];
        $category_h = $categoryArr['name_he'];
    }
}



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

    <meta name="keywords"
          content="pashutlehaskir.com | Rent SoCal Houses, Apartments & More, Los Angeles rentals, Santa Monica House, South Bay Rentals, Los Angeles Apartments, Orange County Rentals, San Diego Apartments, Hermosa Beach Apartments, Hollywood For Rent, Burbank Apartments, Glendale Homes, Studio category Rentals, Apartments for Rent, Houses for Rent, Condos for Rent, Apartments in Los Angeles, Apartments in LA, USC, University of Southern California, Cal State, California State University, UCLA, University of California, University of California Los Angeles, Loyola Marymount University, Pepperdine, Pepperdine University, USC Student Housing, USC Housing, USC Apartments, Cal State Housing, Cal State Student Housing, Cal State Apartments, UCLA Housing, UCLA Student Housing, UCLA Apartments, LMU Housing, LMU Student Housing, LMU Apartments, Pepperdine Housing, Pepperdine Student Housing, Pepperdine Apartments"/>
    <meta name="description"
          content="pashutlehaskir.com is the #1 home finding service in the Los Angeles area. Search SoCal apartment rentals, houses, condos & roommates!"/>
    <meta name="robots" content="index,follow"/>
    <meta name="GOOGLEBOT" content="index,follow"/>
    <meta name="google-translate-customization" content="954d153704cc37f5-fac58c9bb4d3c842-g115d03cfb1ac5d23-17"></meta>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.0.1/fullcalendar.min.css">
</head>


<body class="guest">

<?php
include('header.php');
?>

<!-- Carousel
================================================== -->
<div class="container">
    <link rel="stylesheet" href="/css/lightbox.css" type="text/css"/>
    <div class="ll-dash post-listing">

        <div class="col-md-12">

            <div class="center-mod">
                <form action="edit_category.php" method="post" name="propForm" id="propForm" enctype="multipart/form-data">
                    <table class="table_type_4" cellspacing="0" cellpadding="0" border="0">
                        <tr valign="top">
                            <td colspan="2">
                                <div class="grayline"></div>
                                <h3>Add New category</h3>
                            </td>
                        </tr>
                        <tr valign="top">
                            <td class="subheader">
                                category Name:
                            </td>
                            <td class="field">
                                <input type="text" class="input validate[required] text" name="category-name" id="name" size="50" value="<?php echo  $category; ?>"
                                       maxlength="100">
                            </td>
                        </tr>

                        <tr valign="top">
                            <td class="subheader">
                                category Name:
                            </td>
                            <td class="field">
                                    <input type="text" class="input validate[required] text" name="category-name-he" id="name" size="50" value="<?php echo  $category_h; ?>"
                                       maxlength="100">
                            </td>
                        </tr>



                        <tr valign="top">
                            <td class="field">
                                <?php if($_GET['category_id'] && is_numeric($_GET['category_id'])): ?>
                                    <input type="hidden" name="category_id" value="<?php echo $_GET['category_id']; ?>">
                                <?php endif; ?>

                                <input type="submit" class="btn btn-primary" name="add-category" value="Save">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>

</div>  <!-- End main container div -->


<!-- FOOTER -->
<?php
include("footer.php");
?>


<!-- Bootstrap core JavaScript

<!-- Placed at the end of the document so the pages load faster -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script src="../js/new/jquery-ui-1.10.4/jquery-ui-1.10.4.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="../js/bootstrap.min.js"></script>
<script src="../js/fb_login.js"></script>
<script src="../js/navigation/menu.js" type="text/javascript" language="javascript"></script>
<script src="../js/default.js" type="text/javascript" language="javascript"></script>
<!-- Default JavaScript -->
<script src="../js/new/default.js"></script>


<link rel="stylesheet" href="../css/jquery-ui.css">

<link rel="stylesheet" href="../themes/base/jquery.ui.all.css">
<link rel="stylesheet" href="../css/demo.css">