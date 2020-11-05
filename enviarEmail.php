<?php
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$nome = $_POST['name'] ? $_POST['name']: 'Não informado';
$email = $_POST['email'] ? $_POST['email']: 'Não informado';
$assunto = $_POST['subject'] ? $_POST['subject']: 'Não informado';
$mensagem = $_POST['message'] ? $_POST['message']: 'Não informado';

if ($email && $mensagem) {


$mail = new PHPMailer();

	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'crystalclearservicos@gmail.com';  //insere aqui o email da empresa
	$mail->Password = '@senha123'; // a senha do email
	$mail->Port = 587;

	$mail->setFrom('crystalclearservicos@gmail.com');  //insere aqui o email novamente, pois é atraves dessa linha que ele enviará o email
	$mail->addAddress('crystalclearservicos@gmail.com'); //aqui é onde ele recebe  o destinatario (o da propria empresa, ja que ela vai receber) e caso seja mais de um, basta acrecentar mais linhas dessa


	//as 3 linhas abaixo é onde vc pode modificar o texto do email e onde ele receberá os parametros do formulario
	$mail->isHTML(true);
	$mail->Subject = 'Orçamento através do site da Serviços Crystal';
	$mail->Body = "Nome: {$nome}<br>
					  Email: {$email}<br>
					  Mensagem: {$mensagem}<br>"
					  ;

	if($mail->send()) {
		echo "<script>window.location='contato.php';alert('$nome, sua mensagem foi enviada com sucesso! Estaremos retornando em breve');</script>";
	} else {
		echo 'Email nao enviado';
		}

} else {
	echo 'Email não enviado: informar o email e a mensagem';
}
