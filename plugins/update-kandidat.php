<?php
include('config.php');
$wilayah = $_GET['id'];
$ketua_1 = $_POST['K1_ketua'];
$wakil_1 = $_POST['K1_wakil'];
$ketua_2 = $_POST['K2_ketua'];
$wakil_2 = $_POST['K2_wakil'];
$p_K1 = $wilayah.'1';
$p_K2 = $wilayah.'2';

$link = 'form-kandidat.php?id='.$wilayah;
$msg1 = '&message=1'; 
$msg2 = '&message=2';
$msg3 = '&message=3';

function begin(){
    mysql_query("BEGIN");
}

function commit(){
    mysql_query("COMMIT");
}

function rollback(){
    mysql_query("ROLLBACK");
}

begin();

$gambarK1=$_FILES['gambar_k1']['name']; //memberikan nama variabel gambar
if($gambarK1!==' '){ //jika ada nama file gambar 
  $ekstensiK1 = $_FILES["gambar_k1"]["type"];
  $eksK1 = substr($ekstensiK1, 6, 5);
  if ($eksK1 == 'png' || $eksK2 == 'jpg') {
    $namafileK1 ="K1".$wilayah.".".$eksK1; //

    $ukuranK1 = filesize($_FILES['gambar_k1']['tmp_name']); //menentukan dimensi gambar yang ada di direktori sementara di server 
    list($file_widthK1, $file_heightK1) = getimagesize($_FILES['gambar_k1']['tmp_name']);

    if ($file_widthK1/$file_heightK1 !== 1) { //jika dimensi tidak 1 : 1
      header("location:/$link$msg2");
    }
    else {
      $uploadK1 = move_uploaded_file($_FILES['gambar_k1']['tmp_name'], "image/".$namafileK1);     
    }
  }
  else {
    header("location:/$link$msg1");
  }

}

$gambarK2=$_FILES['gambar_k2']['name']; //memberikan nama variabel gambar
if($gambarK2!==' '){ //jika ada nama file gambar 
  $ekstensiK2 = $_FILES["gambar_k2"]["type"];
  $eksK2 = substr($ekstensiK2, 6, 5);
  if ($eksK2 == 'png' || $eksK2 == 'jpg') {
    $namafileK2="K2".$wilayah.".".$eksK2; //

    $ukuranK2=filesize($_FILES['gambar_k2']['tmp_name']); //menentukan dimensi gambar yang ada di direktori sementara di server 
    list($file_widthK2, $file_heightK2) = getimagesize($_FILES['gambar_k2']['tmp_name']);

    if ($file_widthK2/$file_heightK2 !== 1) { //jika dimensi tidak 1 : 1
      header("location:/$link$msg2");
    }
    else {
      $uploadK2 = move_uploaded_file($_FILES['gambar_k2']['tmp_name'], "image/".$namafileK2);     
    }
  }
  else {
    header("location:/$link$msg1");
  }
}

$query1 = mysql_query("UPDATE kandidat SET ketua='$ketua_1', wakil='$wakil_1', image='$namafileK1' WHERE id_pasangan='$p_K1' ") or die(mysql_error());
$query2 = mysql_query("UPDATE kandidat SET ketua='$ketua_2', wakil='$wakil_2', image='$namafileK2' WHERE id_pasangan='$p_K2' ") or die(mysql_error());

if ($query1 && $query2) {
  	commit();
	header("location:/$link$msg3");
}
else{
  rollback();
}

?>