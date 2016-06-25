<?php
include('config.php');
//tangkap data dari form

$km = $_POST['km'];
$f = $_POST['f'];
$nrp = $_GET['nrp'];

if($km == 1 && $f == 1)
	$q1 = mysql_query("UPDATE data SET KM_K1='1', FAKULTAS_K1='1', status='1'  WHERE nrp='$nrp'") or die(mysql_error());
if($km == 1 && $f == 2)
	$q1 = mysql_query("UPDATE data SET KM_K1='1', FAKULTAS_K2='1', status='1' WHERE nrp='$nrp'") or die(mysql_error());
if($km == 2 && $f == 1)
	$q1 = mysql_query("UPDATE data SET KM_K2='1', FAKULTAS_K1='1', status='1' WHERE nrp='$nrp'") or die(mysql_error());
if($km == 2 && $f == 2)
	$q1 = mysql_query("UPDATE data SET KM_K2='1', FAKULTAS_K2='1', status='1' WHERE nrp='$nrp'") or die(mysql_error());

if ($q1) {
	header('location:terimakasih.php');
}

?>