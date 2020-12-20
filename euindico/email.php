<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indicações enviadas</title>
    <link rel="stylesheet" href="styles/fontes.css">
    <link rel="stylesheet" media="screen and (min-width: 768px)" href="styles/desktop.min.css">
    <link rel="stylesheet" media="screen and (max-width: 767px)" href="styles/mobile.min.css">
    <link rel="stylesheet" href="styles/global.css">
</head>

<body>

    <?php

    $to = "sideiltonsantos@hotmail.com";
    $cc = "sideiltonsouza@outlook.com";

    $from = $_POST['nome_aluno'];
    $polo = $_POST['polo'];
    $ra = $_POST['ra_cpf'];
    $raOuCpf = "RA: ";
    $indicado1 = $_POST['indicado1'];
    $tel_indicado1 = $_POST['tel_indicado1'];
    $indicado2 = $_POST['indicado2'];
    $tel_indicado2 = $_POST['tel_indicado2'];

    if (strlen($ra) > 9) {
        $raOuCpf = "CPF: " . $ra;
    } else {
        $raOuCpf = "RA: " . $ra;
    }

    if ($polo == "bsb") {
        $to = "cesumarbrasilia@gmail.com";
    }

    switch ($polo) {
        case 'tgt':
            $polo = "Taguatinga";
            break;
        case 'cei':
            $polo = "Ceilândia";
            break;
        case 'pla':
            $polo = "Planaltina";
            break;
        case 'gam':
            $polo = "Gama";
            break;
        case 'agl':
            $polo = "Águas Lindas";
            break;
        default:
            $polo = "Brasília";
            break;
    }





    // Adiciona o arquivo class.phpmailer.php - você deve especificar corretamente o caminho da pasta com o este arquivo.
    require 'autenticar.php';
    include_once 'PHPMailer/src/PHPMailer.php';
    include_once 'PHPMailer/src/Exception.php';
    include_once 'PHPMailer/src/SMTP.php';
    include_once 'PHPMailer/src/OAuth.php';
    //Crie uma classe com as credenciais do seu email
    //e armazene nas variaveis $senha e $username

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    if ($from) {
        // Inicia a classe PHPMailer
        $mail = new PHPMailer();
        // DEFINIÇÃO DOS DADOS DE AUTENTICAÇÃO - Você deve auterar conforme o seu domínio!
        $mail->IsSMTP(); // Define que a mensagem será SMTP
        $mail->Host = "smtp.gmail.com"; // Seu endereço de host SMTP
        $mail->SMTPAuth = true; // Define que será utilizada a autenticação -  Mantenha o valor "true"
        $mail->Port = 587; // Porta de comunicação SMTP - Mantenha o valor "587"
        $mail->SMTPSecure = false; // Define se é utilizado SSL/TLS - Mantenha o valor "false"
        $mail->SMTPAutoTLS = true; // Define se, por padrão, será utilizado TLS - Mantenha o valor "false"
        $mail->Username = $user; // Conta de email existente e ativa em seu domínio
        $mail->Password = $senha; // Senha da sua conta de email
        // DADOS DO REMETENTE
        $mail->Sender = $to; // Conta de email existente e ativa em seu domínio
        $mail->From = $to; // Sua conta de email que será remetente da mensagem
        $mail->FromName = "Nova indicação para o Polo " . $polo; // Nome da conta de email
        // DADOS DO DESTINATÁRIO
        $mail->AddAddress($to); // Define qual conta de email receberá a mensagem
        //$mail->AddAddress('recebe2@dominio.com.br'); // Define qual conta de email receberá a mensagem
        //$mail->AddCC($cc); // Define qual conta de email receberá uma cópia
        $mail->AddBCC($cc); // Define qual conta de email receberá uma cópia oculta
        // Definição de HTML/codificação
        $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
        $mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
        // DEFINIÇÃO DA MENSAGEM
        $mail->Subject  = "Indicações recebidas através do site"; // Assunto da mensagem
        $mail->Body .= "<br><h3>O aluno " . $from . " com " . $raOuCpf . " indicou:</h3><br>"; // Texto da mensagem
        $mail->Body .= "<h4>" . $indicado1 . " <br>Telefone: " . $tel_indicado1 . "</h4>"; // Texto da mensagem

        if ($indicado2) {
            $mail->Body .= "<br><h4>e " . $indicado2 . "<br>Telefone: " . $tel_indicado2 . "</h4>";
        }
        // $mail->Body .= " Assunto: Teste"; // Texto da mensagem
        //$mail->Body .= nl2br($message); // Texto da mensagem
        // ENVIO DO EMAIL
        $enviado = $mail->Send();
        // Limpa os destinatários e os anexos
        $mail->ClearAllRecipients();


        // Exibe uma mensagem de resultado do envio (sucesso/erro)
        if ($enviado) {
            echo '<section id="final">
            <div class="container">
                <div class="center" id="enviado">
                    <span></span>
                    <p>Indicações enviadas com sucesso! :).</p>
                    <div>
                        <a href="index.html">Indicar mais</a>
                        <a href="https://studeo.unicesumar.edu.br">Ir para o Studeo</a>
                    </div>
                </div>
             </div>
        </section>';
        } else {
            echo '<section id="final">
            <div class="container">
                <div class="center" id="naoEnviado">
                    <span></span>
                    <p>Ops! ocorreu um erro no servidor, não me xingue, já estou tentando resolver. Tente novamente ou passe as indicações diretamente para uma das meninas da recepção.</p>
                    <div>
                        <a href="index.html">Indicar mais</a>
                        <a href="https://studeo.unicesumar.edu.br">Ir para o Studeo</a>
                    </div>
                </div>
             </div>
        </section>';
        }
    }
    ?>


</body>

</html>