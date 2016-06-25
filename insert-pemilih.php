<?php
//panggil file config.php untuk menghubung ke server
include('config.php');
//tangkap data dari form
$nrp = $_POST['nrp'];
$fullname = $_POST['fullname'];
$email = $_POST['email']."@apps.ipb.ac.id";
$telp = $_POST['telepon'];

//cek nrp sudah ada atau belum
$ceknrp = mysql_query("SELECT * FROM pengguna WHERE nrp='$nrp'");
if (mysql_num_rows($ceknrp) == 1){
	header('location:form-pemilih.php?msg=1');
}

//fungsi random password
function random_password( $length = 8){
	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	$password1 = substr( str_shuffle( $chars ) , 0, $length);
	return $password1;
}

$password = random_password(8);

//mengambil 1 huruf pertama dari nrp untuk fakultas dan 2 huruf pertama untuk departemen  
$fakultas = substr($nrp, 0, 1);
$departemen = substr($nrp, 0, 2);

//simpan data ke database menggunakan metode transaksi agar menjamin masuk ke 2 tabel
$query = mysql_query("INSERT into pengguna values('$nrp', '$fullname', '$fakultas', '$departemen', '$password', '$telp', '0', '$email')") or die(mysql_error());
$query2 = mysql_query("INSERT into data (nrp) values('$nrp')") or die(mysql_error());

if ($query && $query2) {
	header('location:form-pemilih.php?msg=2');
}
?>