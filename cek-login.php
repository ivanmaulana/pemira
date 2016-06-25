<?php 
session_start();

//jika session username belum dibuat, atau session username kosong
if (!isset($_SESSION['nrp']) || empty($_SESSION['nrp'])) {
	//redirect ke halaman login
	header('location:login.php');
}
?>