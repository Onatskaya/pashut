<?php

if(!isset($_SESSION['is_admin_logged_in']))
{
	echo '<script>window.location.href = "../index.php";</script>';
}
?>