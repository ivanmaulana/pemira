<?php
include('config.php');


//tangkap data dari form
$nrp = $_GET['nrp'];
$fullname = $_POST['fullname'];
$fakultas = substr($nrp, 0, 1);
$departemen = substr($nrp, 0, 2);
$email = $_POST['email']."@apps.ipb.ac.id";
$telp = $_POST['telepon'];
$link = "edit-pemilih.php?msg=1&id=".$nrp;

//update data di database sesuai user_id
$query = mysql_query("UPDATE pengguna SET fullname='$fullname', fakultas='$fakultas', departemen='$departemen', telp='$telp', email='$email' where nrp='$nrp'") or die(mysql_error());

if ($query) {
	header("location:/$link");
}
?>