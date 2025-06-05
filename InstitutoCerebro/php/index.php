<?php
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$name = $_POST["name"];
$phone = $_POST["phone"];
$mailcontact = $_POST["mail"];
$message = $_POST["message"];
$mail = new PHPMailer();

try {

	//Ask for HTML-friendly debug output
	$mail->Debugoutput = 'html';
	$mail->CharSet = 'UTF-8';
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'institutoc2020@gmail.com';
	$mail->Password = '123buk123';
	$mail->Port = 587;
	//Set the encryption system to use - ssl (deprecated) or tls
	$mail->SMTPSecure = 'tls';

	$mail->setFrom('contato@cerebroinstituto.com.br');
	$mail->addAddress('contato@cerebroinstituto.com.br');
	$mail->isHTML(true);
	$mail->Subject = 'Mensagem do Site Instituto do Cérebro';
	$mail->Body = "<div><br>
    <h1><b>Mensagem enviada pelo site Instituto do cérebro</b></h1><br>
    ============<br>
    <h2>Contato por e-mail<br>
    Nome: ".$name.".<br>
    E-mail: ".$mailcontact.".<br>
    Mensagem: <div style='color:#304A78!important;'>".$message."</div><br><br></h2>
    </div>";
	$mail->AltBody = 'Mensagem do Site Instituto do Cérebro';

	if($mail->send()) {
		echo "<script> alert('Mensagem enviada com sucesso!');</script>";
	} else {
		echo 'Email nao enviado';
	}
} catch (Exception $e) {
	echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}