<?php 
include('config.php');

$id = $_GET['id'];
$d = substr($id, 0, 2);
$link = "pemira/tabel-pemilih.php?id=".$d;

$query = mysql_query("delete from pengguna where nrp='$id'") or die(mysql_error());
$query2 = mysql_query("delete from data where nrp='$id'") or die(mysql_error());

if ($query) {
	header("location:/$link");
}
?>