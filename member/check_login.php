<?php

if(!isset($_SESSION['member_logged']))
{
	echo '<script>window.location.href = "../index.php";</script>';
}
?>