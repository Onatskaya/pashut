<?php
include_once('functions/function.php');
extract($_GET);
$_SESSION['language']=$language;
$backpage=str_replace('--121--','&',$backpage);
echo "<script>location.href='$backpage'</script>";
?>