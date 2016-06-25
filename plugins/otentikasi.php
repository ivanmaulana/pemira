<?php
include('config.php');

session_start();

//tangkap data dari form login
$nrp = $_POST['nrp'];
$password = $_POST['password'];

//untuk mencegah sql injection
//kita gunakan mysql_real_escape_string
$nrp = mysql_real_escape_string($nrp);
$password = mysql_real_escape_string($password);

//cek data yang dikirim, apakah kosong atau tidak
if (empty($nrp) && empty($password)) {
	//kalau username dan password kosong
	header('location:login.php?error=1');
	break;
} else if (empty($nrp)) {
	//kalau username saja yang kosong
	header('location:login.php?error=2');
	break;
} else if (empty($password)) {
	//kalau password saja yang kosong
	header('location:login.php?error=3');
	break;
}

$a = mysql_query("SELECT * from pengguna where nrp='$nrp'");
if (mysql_num_rows($a) == 0){
	//kalau username ataupun password tidak terdaftar di database
	header('location:login.php?error=4');
}

$q = mysql_query("SELECT * from pengguna where nrp='$nrp' and password='$password'");
if (mysql_num_rows($q) == 1) {
	//kalau username dan password sudah terdaftar di database
	//buat session dengan nama username dengan isi nama user yang login
	$_SESSION['nrp'] = $nrp;
	//redirect ke halaman index
	header('location:index.php');
} else if (mysql_num_rows($q) == 0 && mysql_num_rows($a) == 1){
	//kalau username ada
	header('location:login.php?error=5');
}
?>