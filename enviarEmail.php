<?php

if(isset($_POST['email'])  && !empty($_POST['email'])) {

    $nome = addslashes($_POST['name']);
    $email = addslashes($_POST['name']);
    $assunto = addslashes($_POST['subject']);
    $menssagem = addslashes($_POST['message']);
    
}

$to = "nicolas.leao98@gmail.com";
$subject = "Contato - Programador Br";
$body = "Nome: ".$nome. "\r\n".
        "Email: ". $email. "\r\n".
        "Mensagem: ". $menssagem. "\r\n";

$header = "From:nicolas.leao99@gmail.com"."\r\n".
            "Reply-to:".$email."\r\n".
            "X=Mailer:PHP/".phpversion();


if(mail($to,$subject,$body,$header)) {
    echo("Sucess!!");
}else {
    echo("Error!!");
}



?>