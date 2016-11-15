<?php

if($data_post['property_available']=='Available' AND $data_post['post_date_confirm']=='yes' )
{
	echo "<span style='color:green;font-weight:bold;'>";
	echo 'Available';
	echo "</span>";
}

if($data_post['property_available'] != 'Available')
{
	echo "<span style='color:red;font-weight:bold;'>";
	echo 'Rented';
	echo "</span>";
}

if($data_post['post_date_confirm'] !='yes')
{
	echo "<span style='color:#f28430;font-weight:bold;'>";
	echo 'Saved Listing';
	echo "</span>";
}

?>