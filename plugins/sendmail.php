<?php

	include('config.php');
	//tangkap data dari form
	$nrp = $_GET['nrp'];

	//cek nrp sudah ada atau belum
	$ceknrp = mysql_query("SELECT * FROM pengguna WHERE nrp='$nrp'");

	$cek = mysql_fetch_array($ceknrp);
	$email = $cek['email'];

	echo $email;
    
	require_once('phpmailer/class.phpmailer.php');
	//require ('phpmailer/PHPMailerAutoload.php');
include("phpmailer/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

$mail->IsSMTP(); // telling the class to use SMTP

$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPDebug = 0;
$mail->Host       = "tls://smtp.gmail.com"; // sets the SMTP server
$mail->Port       = 587;                    // set the SMTP port for the GMAIL server
$mail->SMTPSecure = 'ssl';
$mail->Username   = "pemiraipb1@gmail.com"; // SMTP account username
$mail->Password   = "agriweb1";        // SMTP account password

$mail->SetFrom('pemira@imaulana.com', 'Pemira IPB');

$mail->AddReplyTo("pemira@imaulana.com","Pemira IPB");

$mail->Subject    = "Password PemiraIPB 2015";

$mail->MsgHTML('<div align="center">
<table border="1" cellpadding="10" width="700px">
	<tr>
		<td>
			<h2>Selamat Pagi '.$cek['fullname'].'</h2><p>Ini merupakan email pemberitahuan dari Komisi Pemilihan Raya Institut Pertanian Bogor. Untuk melakukan pemberian suara dengan cara mengunjungi http://pemira.imaulana.com kemudian masuk dengan menggunakan : NRP anda dan <i><u><b> '.$cek['password'].' </b></u></i> untuk password. Terimakasih atas perhatiannya.</p><p><b>Gunakanlah hak suara anda dengan bijak, satu suara anda dapat merubah IPB kita.
		</td>
	</tr>	
</table>
');

$mail->addAddress($email);

$mail->isHTML(true);

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  header('location:index.php');
}

?>