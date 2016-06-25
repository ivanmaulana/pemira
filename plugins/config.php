<?php
error_reporting(0);
error_reporting(E_ALL ^ E_DEPRECATED);
//host yang digunakan
$host = 'mysql.idhostinger.com'; 
 
//username untuk login ke host
//biasanya didapatkan pada email konfirmasi order hosting
$user = 'u244613727_root'; 
 
//jika menggunakan PC sendiri sebagai host,
//secara default password dikosongkan
$pass = 'iJq2ultL1E';
 
//isikan nama database sesuai database
//yang dibuat pada langkah-1
$dbname = 'u244613727_pemir';
 
//mengubung ke host
$connect = mysql_connect($host, $user, $pass) or die(mysql_error());
 
//memilih database yang akan digunakan
$dbselect = mysql_select_db($dbname);
?>