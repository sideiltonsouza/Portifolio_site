 <?php
    $questao1 = $_POST['q1'];
    $questao2 = $_POST['q2'];
    $questao3 = $_POST['q3'];
    $questao4 = $_POST['q4'];
    $questao5 = $_POST['q5'];
    $questao6 = $_POST['q6'];
    $questao7 = $_POST['q7'];
    $questao8 = $_POST['q8'];
    $pontos = 0;
    $personagem = "";
    $descricao = "";
    $cor = "";
    $imagem = "";

    switch ($questao1) {
        case "a":
            $pontos += 4;
            break;
        case "b":
            $pontos += 2;
            break;
        case "c":
            $pontos += 3;
            break;
        default:
            $pontos += 1;
            break;
    }
    switch ($questao2) {
        case "a":
            $pontos += 4;
            break;
        case "b":
            $pontos += 3;
            break;
        case "c":
            $pontos += 2;
            break;
        default:
            $pontos += 1;
            break;
    }
    switch ($questao3) {
        case "a":
            $pontos += 3;
            break;
        case "b":
            $pontos += 4;
            break;
        case "c":
            $pontos += 1;
            break;
        default:
            $pontos += 2;
            break;
    }
    switch ($questao4) {
        case "a":
            $pontos += 1;
            break;
        case "b":
            $pontos += 4;
            break;
        case "c":
            $pontos += 2;
            break;
        default:
            $pontos += 3;
            break;
    }
    switch ($questao5) {
        case "a":
            $pontos += 1;
            break;
        case "b":
            $pontos += 2;
            break;
        case "c":
            $pontos += 3;
            break;
        default:
            $pontos += 4;
            break;
    }
    switch ($questao6) {
        case "a":
            $pontos += 2;
            break;
        case "b":
            $pontos += 1;
            break;
        case "c":
            $pontos += 4;
            break;
        default:
            $pontos += 3;
            break;
    }
    switch ($questao7) {
        case "a":
            $pontos += 3;
            break;
        case "b":
            $pontos += 1;
            break;
        case "c":
            $pontos += 2;
            break;
        default:
            $pontos += 4;
            break;
    }
    switch ($questao8) {
        case "a":
            $pontos += 2;
            break;
        case "b":
            $pontos += 1;
            break;
        case "c":
            $pontos += 3;
            break;
        default:
            $pontos += 4;
            break;
    }

    if ($pontos <= 10) {
        $personagem = "Homem-Aranha";
        $imagem = "homem_aranha";
        $descricao = "Você é uma pessoa bem Humorada, e com um forte senso de justiça e ética.";
        $cor = "000";
    } else if ($pontos <= 13) {
        $personagem = "Doutor Estranho";
        $imagem = "doutor_estranho";
        $descricao = "Você é um pessoa que leva seu trabalho muito a serio, possui muito conhecimento sobre varias coisas, além de ter uma lábia muito boa.";
        $cor = "3d2645";
    } else if ($pontos <= 16) {
        $personagem = "Feiticeira Escarlate";
        $imagem = "feiticeira_escarlate";
        $descricao = "Você é uma pessoa inteligente e reservada, porém guarda dentro de si sentimentos intensos que vez ou outra são demonstrados até de forma descontrolada.";
        $cor = "c81d25";
    } else if ($pontos <= 19) {
        $personagem = "Thor";
        $imagem = "thor";
        $descricao = "Você é uma pessoa extremamente forte, compreensivo e com um ótimo coração. Sabe que as pessoas podem mudar, tem uma personalidade forte e faz de tudo pelas pessoas que você ama.";
        $cor = "3a506b";
    } else if ($pontos <= 22) {
        $personagem = "Hulk";
        $imagem = "hulk";
        $descricao = "Você além de inteligente possui um grande coração, tão grande quanto o monstro que você se transforma quando está com raiva. Faz de tudo para proteger os seus amigos, mesmo que para isso você tenha que quebrar algumas coisas.";
        $cor = "127475";
    } else if ($pontos <= 25) {
        $personagem = "Viúva Negra";
        $imagem = "viuva_negra";
        $descricao = "Você é uma pessoa independe e que não gosta de se sentir vulnerável. Você é determinada e sempre foca em seus objetivos, odeia perder tempo com bobagens e de expor seus sentimentos. ";
        $cor = "c81d25";
    } else if ($pontos <= 28) {
        $personagem = "Homem de ferro";
        $imagem = "homem_de_ferro";
        $descricao = "Você é uma pessoa super inteligente e que adora tecnologia. Com um olhar revolucionário e mente criativa, você está sempre de bem com a vida e procurando ver o lado bom das coisas.";
        $cor = "45050c";
    } else {
        $personagem = "Capitão América";
        $imagem = "capitao_america";
        $descricao = "Você é um líder tradicional que se sente responsável pela sua equipe, sabe tomar as decisões certas e vive se sacrificando pelas pessoas que você gosta sem esperar nada em troca.";
        $cor = "083d77";
    }

    echo '<!DOCTYPE html>
        <html lang="pt-br">
        
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Qual dos vingadores é você</title>
            <link rel="stylesheet" href="../styles/estilos.css">
            <link rel="stylesheet" href="../../styles/animacao.css">
            <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600&display=swap" rel="stylesheet">
        </head>
        
        <body>

            <div class="container">
                <div id="header" style="background-image: url(../contents/imagens/personagens/' . $imagem . '.jpg);">
                    <span style="background: #' . $cor . ';">' . $personagem . '</span>
                </div>
                <p>' . $descricao . '</p>
                <a id="btnVolta" href="../index.html" style="background: #' . $cor . ';">Refazer</a>
                <a id="btnHome" href="../../index.php">Voltar</a>
            </div>
            
            <script src="../js/script.js"></script>
        </body>
        
        </html>';
    ?>
  