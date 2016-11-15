<?php
include_once('../functions/function.php');

$pid= $_GET['pid'];
$que="SELECT * FROM post WHERE post_id='$pid' ";
$obj= mysqli_query($conn, $que);
$data= mysqli_fetch_assoc($obj);

echo "<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>";
?>
<div style='overflow:hidden;height:650px;width:1350px;'>
	<div id='gmap_canvas' style='height:650px;width:1350px;'></div>
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
<?php
echo "<script type='text/javascript'>function init_map(){var myOptions = {zoom:".$data['property_zoom'].",center:new google.maps.LatLng('".$data['property_lat']."','".$data['property_lng']."'),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(".$data['property_lat'].",".$data['property_lng'].")});infowindow = new google.maps.InfoWindow({content:'<strong>Location</strong><br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>"; 
?>


