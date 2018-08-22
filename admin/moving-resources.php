<?php
include('../functions/function.php');
include('check_login.php');
$que_post="SELECT mvr.id, mvr.name, mvr.email, mvr.image, cat.name AS cat_name, c.city_name AS city FROM `moving_resources` AS `mvr` LEFT JOIN `city` AS `c` ON c.city_id = mvr.city LEFT JOIN `category` AS `cat` ON cat.id = mvr.category WHERE 1";


$obj_post= mysqli_query($conn,$que_post);

//Cities
$cities = array();
$que_city = "SELECT * FROM `city` ORDER BY `city_name`";
$obj_city = mysqli_query($conn,$que_city);

while($data_city=mysqli_fetch_assoc($obj_city))
{
    $cities[]=$data_city;
}


//Categories
$categories = [];
$que_category = "SELECT * FROM `category` ORDER BY `name`";
$obj_category= mysqli_query($conn,$que_category);
while($data_category=mysqli_fetch_assoc($obj_category))
{
    $categories[]=$data_category;
}

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


<body  class="guest" >

<?php
include('header.php');
?>

<!-- Carousel
================================================== -->
<div class="container">
    <div class="container locations">
        <!-- <h3 style="background-color:#3D4D65;color:#fff;text-align:center;">Listing</h3> -->
        <center><h2>Moving Resources</h2></center>
        <div class="remove-all-block" style="float: right; margin: 5px;">
            <a href="moving-resources-edit.php" class="btn btn-success" value="Add New">Add New</a>
<!--            <input type="submit" name="remove-all" value="Remove all">-->
<!--            <input type="submit" name="remove-checked" value="Remove checked">-->
        </div>
        <div class="row">
            <table id="myTable" class="table table-striped dataTable table-bordered">
                <thead>
                <tr>
                    <th class="col-md-1">S.No.</th>
                    <th class="col-md-2">Name</th>
                    <th class="col-md-2">Email</th>
                    <th class="col-md-2">City</th>
                    <th class="col-md-2">Category</th>
                    <th class="col-md-1">Image</th>
                    <th class="col-md-2">
                        <span style="float: left">Select</span>
                        <input id="check-all-prop" type="checkbox" name="check_all">
                    </th>
                    <th class="col-md-1">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $n=1;
                while($data_post=mysqli_fetch_assoc($obj_post))
                {  ?>
                    <tr>
                        <td><?php echo $n; ?></td>
                        <td class="js-prop-name"><?php echo $data_post['name'];?></td>
                        <td><?php echo $data_post['email'];?></td>
                        <td><?php echo $data_post['city'];?></td>
                        <td><?php echo $data_post['cat_name'];?></td>
                        <td>
                            <?php if(!empty($data_post['image'])): ?>
                                <img src="../images/moving_resources/<?php echo $data_post['image'];?>" height="60" width="60">
                            <?php endif; ?>
                        </td>
                        <td><input type="checkbox" class="select-property" name="property_check[]" data-post_id="<?php echo $data_post['id'];?>"></td>
                        <td>
<!--                            <a href="moving-resources-edit.php?pid=--><?php //echo $data_post['id'];?><!--" class="glyphicon glyphicon-eye-open"></a>-->
                            <a href="moving-resources-edit.php?id=<?php echo $data_post['id'];?>" class="glyphicon glyphicon-pencil"></a>
                            <a href="delete_mvr.php?id=<?php echo $data_post['id'];?>" data-href="delete_post.php?pid=<?php echo $data_post['id'];?>" class="glyphicon glyphicon-trash js-property-remove"></a>
                        </td>
                    </tr>

                    <?php
                    $n++;
                }
                ?>
                </tbody>
            </table>
        </div>





    </div>
</div> <!-- End main container div -->
<br>
<br>
<br>
<br>

<!-- FOOTER -->
<?php
include("footer.php");
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

<script src="../js/bootstrap-confirmation.js"></script>

<script src="../js/fb_login.js"></script>
<script src="../js/navigation/menu.js" type="text/javascript" language="javascript"></script>
<script src="../js/default.js" type="text/javascript" language="javascript"></script>
<script src="../js/ddaaccordion.js" type="text/javascript" language="javascript"></script>
<!-- Default JavaScript -->
<script src="../js/new/default.js"></script>


<script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">

<script type="text/javascript">

    jQuery( document ).ready(function( $ ) {
        var table = $('#myTable').dataTable({ "bSort": false});
        table.api().columns(0).visible( false );
        //
        // table.api()
        //     .columns( 3 )
        //     .search( 'Arad' )
        //     .draw();

        $('#check-all-prop').click(function(event) {
            if(this.checked) {
                // Iterate each checkbox
                $(':checkbox', '#myTable').each(function() {
                    this.checked = true;
                });
            }else{
                $(':checkbox', '#myTable').each(function() {
                    this.checked = false;
                });
            }
        });

        $('input[name="remove-checked"]').click(function(e){
            e.preventDefault;
            var prop_arr = [];
            $('input:checkbox.select-property', '#myTable').each(function () {
                if(this.checked){
                    prop_arr.push($(this).attr('data-post_id'));
                }
            });
            if(confirm('Are you sure?')){
                $.ajax({
                    method: 'post',
                    url: 'remove_properties.php',
                    dataType: 'json',
                    data: {
                        action: 'remove_properties',
                        id_list: JSON.stringify(prop_arr)
                    },
                    success: function(resp) {
                        if(resp){
                            if(resp.status == 'success'){
                                location.reload();
                            }else{
                                alert('Try again later');
                            }

                        }
                    }
                });
            }

        });

        $('input[name="remove-all"]').click(function(e){
            e.preventDefault;
            if(confirm('Are you sure?')){
                $.ajax({
                    method: 'post',
                    url: 'remove_properties.php',
                    dataType: 'json',
                    data: {
                        action: 'remove_all_properties'
                    },
                    success: function(resp) {
                        if(resp){
                            if(resp.status == 'success'){
                                location.reload();
                            }else{
                                alert('Try again later');
                            }

                        }
                    }
                });
            }

        });

    });
</script>