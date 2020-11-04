<?php

if(isset($_POST['email'])  && !empty($_POST['email'])) {

    $nome = addslashes($_POST['name']);
    $email = addslashes($_POST['name']);
    $assunto = addslashes($_POST['subject']);
    $menssagem = addslashes($_POST['message']);
    $data_envio = date('d/m/Y');
    $hora_envio = date('H:i:s');

}

// $to = "nicolas.leao98@gmail.com";
// $subject = "Contato - Programador Br";
// $body = "Nome: ".$nome. "\r\n".
//         "Email: ". $email. "\r\n".
//         "Mensagem: ". $message. "\r\n";

// $header = "From:nicolas.leao99@gmail.com"."\r\n".
//             "Reply-to:".$email."\r\n".
//             "X=Mailer:PHP/".phpversion();


// if(mail($to,$subject,$body,$header)) {
//     echo("Sucess!!");
// }else {
//     echo("Error!!");
// }

// Compo E-mail
$arquivo = "
<style type='text/css'>
body {
margin:0px;
font-family:Verdane;
font-size:12px;
color: #666666;
}
a{
color: #666666;
text-decoration: none;
}
a:hover {
color: #FF0000;
text-decoration: none;
}
</style>
  <html>
      <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
          <tr>
            <td>
<tr>
               <td width='500'>Nome:$nome</td>
              </tr>
              <tr>
                <td width='320'>E-mail:<b>$email</b></td>
   </tr>
    <tr>
                <td width='320'>Telefone:<b>$assunto</b></td>
              </tr>
   <tr>
                <td width='320'>Mensagem:$menssagem</td>
              </tr>
              <tr>
                <td width='320'>Mensagem:</td>
              </tr>
          </td>
        </tr>
        <tr>
          <td>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></td>
        </tr>
      </table>
  </html>
";

$emailenviar = "nicolas.leao99@gmail.com";
$destino = $emailenviar;
$assunto = "Contato pelo Site";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: $nome <$email>';

$enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  }

?>