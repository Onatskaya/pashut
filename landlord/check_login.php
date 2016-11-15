<?php

if(!isset($_SESSION['landlord_logged']))
{
	echo '<script>window.location.href = "../index.php";</script>';
}
?>