<?php 
$pdf=$_GET['url'];
$last=$_GET['last_check'];
//file_put_contents("library/LastNumber.ck",$last);
$arr=explode("/",$pdf);
header("Content-Disposition: attachment; filename=".$arr[count($arr)-1]);
echo file_get_contents($pdf);
?>