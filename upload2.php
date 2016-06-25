<?php
define("MAX_SIZE", "100") //membatasi file size gambar yang dapat diupload maksimal 100 kb
define("WIDTH", "400") //membatasi ukuran lebar gambar sebesar 400px
define("HEIGHT", "200") //membatasi ukuran tinggi gambar sebesar 200px

if(isset($_POST['upload'] { //jika ada file gambar yang diupload
	
	$gambar=$_FILES['image']['name'] //memberikan nama variabel gambar
	if($gambar!==' '){ //jika ada nama file gambar 
		$namafile=stripslashes($_FILES['image']['name'] //
		$ektensi=getExtention($namafile); //menentukan ektensi dari file gambar yang diupload
		$ektensi=strtolower($ektensi); //setelah ektensi didapat maka hurufnya dirubah ke format huruf kecil

		if(($ektensi!="jpg") or ($ektensi!="jpeg") or ($ektensi!="gif") or ($ektensi!="png"){
			echo"Gambar yang anda upload tidak diperbolehkan !";
			exit;} 

		else {
			$ukuran=filesize($_FILES['image']['tmp_name']); //menentukan dimensi gambar yang ada di direktori sementara di server 
			list($file_width, $file_height) = getimagesize($_FILES['image']['tmp_name']);

			if (($file_width > WIDTH) or ($file_height > HEIGHT)) { //jika dimensi gambar melebihi maksimal
				echo "Ukuran gambar tidak sesuai yang kami minta !";
				exit;
			}
			else {
				$copy=copy($_FILES['image']['tmp_name'], "image/$gambar" ); //mengkopi file gambar dari direktori server ke folder image anda
				if (!$copy) {
					echo"Proses upload gagal, silahkan ulangi lagi...";
					exit;
				}
			}
		}
	}
}
else {
	echo "File gambar belum diisi !";
	exit;
}

if($copy){ //jika berhasil mengkopi gambar
	echo "Gambar anda berhasil diupload. Terima kasih..";
	}
			?>
