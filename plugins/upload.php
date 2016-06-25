<!DOCTYPE html>
<?php 
  include('cek-login.php');
  include('config.php');
?>


<html>
<head>
	<title>upload</title>
</head>
<body>

	<form method="post" enctype="multipart/form-data">
	<td colspan="4">Upload Gambar (Ukuran Maks = 1 MB) : <input type="file" accept="image/*" name="gambar" required /> | Keterangan : <input type="text" name="kete"  /> | 
	<input type="submit" value="Upload" name="save"></td>
	</form>

	<?php
	 if (isset($_POST['save'])){
	 $fileName = $_FILES['gambar']['name'];
	  // Simpan di Folder Gambar
	  move_uploaded_file($_FILES['gambar']['tmp_name'], "image/".$_FILES['gambar']['name']);
	  echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";
	  
	 } 
	?>

</body>
</html>
