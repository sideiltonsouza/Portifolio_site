<?php

//Aluno Sideilton Santos de souza RA: 19827125

$correto = $_GET['apresentado'];
$escolhido = $_GET['escolhido'];

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Resultado</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="estilos/style.css">
    </head>
    <body>

    <div id="errou" style="display: none;">
             <p>Você escolheu: <strong><?=$escolhido?></strong>. <br> A opção correta é: <strong><?=$correto?></strong>.</p>
    </div>
        
    <div id="acertou" style="display: none;">
             <p>Opção correta: <strong><?=$escolhido?></strong>. <br> Você <strong>ACERTOU!</strong>.</p>
             
    </div>
    <a id="btn" href="index.php" target="_self">Tentar outra rodada</a>
        
    </body>

    <script>

        //Mostra Mensagem diferente para acerto ou erro

        var escolhido = "<?=$escolhido?>";
        var correto = "<?=$correto?>";

        if (escolhido === correto) {
             document.getElementById("acertou").style.display = "block";   
        }else{
            document.getElementById("errou").style.display = "block"; 
        }
    </script>


</html>
