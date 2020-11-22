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
    $mail->Encoding = "base64";
    $mail->CharSet = "utf-8";
    header('Content-Type: text/html; charset=utf-8');
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    $from = $_POST['email'];
    $to = "sideiltonsouza@outlook.com";
    $name = $_POST['nome'];
    $subject = "";
    $message = $name . ": " . $_POST['mensagem'];
    $headers = "From:" . $from;
    mail($to, $subject, $message, $headers);
    ?>

    <div id="tanks">
        <span>Obrigado pelo contato!
            <h4 id="msg">Sua mensagem foi enviada e será respondida o mais rápido possivel. Para um retorno mais rápido considere contato via WhatsApp.</h4>
            <a href="index.html">Voltar</a>
        </span>
        <img src="contents/images/tanks.png" alt="" srcset="">
    </div>



</body>

</html>