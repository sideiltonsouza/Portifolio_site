<!DOCTYPE html>
<html lang="pt-br" style="background: #fff;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obrigado pelo contato</title>
    <link rel="stylesheet" media="screen and (max-width: 900px)" href="styles/emailmobile.css">
    <link rel="stylesheet" media="screen and (min-width:901px)" href="styles/emaildesktop.css">
</head>

<body>
  <?php

    $from = $_POST['email'];
    $to = "sideiltonsouza@outlook.com";
    $name = $_POST['nome'];
    $subject = "";
    $message = $_POST['mensagem'];
    
    ?>

<?php
 // Adiciona o arquivo class.phpmailer.php - você deve especificar corretamente o caminho da pasta com o este arquivo.
include_once 'PHPMailer/src/PHPMailer.php';
include_once 'PHPMailer/src/Exception.php';
include_once 'PHPMailer/src/SMTP.php';
include_once 'PHPMailer/src/OAuth.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


 // Inicia a classe PHPMailer
 $mail = new PHPMailer();
 // DEFINIÇÃO DOS DADOS DE AUTENTICAÇÃO - Você deve auterar conforme o seu domínio!
 $mail->IsSMTP(); // Define que a mensagem será SMTP
 $mail->Host = "smtp.gmail.com"; // Seu endereço de host SMTP
 $mail->SMTPAuth = true; // Define que será utilizada a autenticação -  Mantenha o valor "true"
 $mail->Port = 587; // Porta de comunicação SMTP - Mantenha o valor "587"
 $mail->SMTPSecure = false; // Define se é utilizado SSL/TLS - Mantenha o valor "false"
 $mail->SMTPAutoTLS = true; // Define se, por padrão, será utilizado TLS - Mantenha o valor "false"
 $mail->Username = 'sideilton.santos.souza@gmail.com'; // Conta de email existente e ativa em seu domínio
 $mail->Password = 'sid812063'; // Senha da sua conta de email
 // DADOS DO REMETENTE
 $mail->Sender = $from; // Conta de email existente e ativa em seu domínio
 $mail->From = $from; // Sua conta de email que será remetente da mensagem
 $mail->FromName = $name; // Nome da conta de email
 // DADOS DO DESTINATÁRIO
 $mail->AddAddress($to, 'Feedback do site'); // Define qual conta de email receberá a mensagem
 //$mail->AddAddress('recebe2@dominio.com.br'); // Define qual conta de email receberá a mensagem
 //$mail->AddCC('copia@dominio.net'); // Define qual conta de email receberá uma cópia
 //$mail->AddBCC('copiaoculta@dominio.info'); // Define qual conta de email receberá uma cópia oculta
 // Definição de HTML/codificação
 $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
 $mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
 // DEFINIÇÃO DA MENSAGEM
 $mail->Subject  = "Feedback do site";// Assunto da mensagem
 $mail->Body .= " Nome: ".$name."<br>"; // Texto da mensagem
 $mail->Body .= " E-mail: ".$from."<br>"; // Texto da mensagem
 // $mail->Body .= " Assunto: Teste"; // Texto da mensagem
 $mail->Body .= nl2br($message); // Texto da mensagem
 // ENVIO DO EMAIL
 $enviado = $mail->Send();
 // Limpa os destinatários e os anexos
 $mail->ClearAllRecipients();


 // Exibe uma mensagem de resultado do envio (sucesso/erro)
/* if ($enviado) {
   echo "E-mail enviado com sucesso!";
 } else {
   echo "Não foi possível enviar o e-mail.";
   echo "Detalhes do erro: " . $mail->ErrorInfo;
 }*/
 ?>

    <div id="tanks">
        <span>Obrigado pelo contato!
            <h4 id="msg">Sua mensagem foi enviada e será respondida o mais rápido possivel. Para um retorno mais rápido considere contato via WhatsApp.</h4>
            <a href="index.php">Voltar</a>
        </span>
        <img src="contents/images/tanks.png" alt="" srcset="">
    </div>



</body>

</html>