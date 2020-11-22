<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sideilton Souza</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/fontes.css">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="styles/mobile.css">
    <link rel="stylesheet" media="screen and (min-width: 769px)" href="styles/desktop.css">
    <link rel="stylesheet" href="styles/animate.css">
</head>

<body>
    <div class="container">
        <nav id="barra_menus">
            <div class="centro" id="navbar">
                <div id="open_menu" class="animate__animated animate__fadeInRight" style="display:none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div id="close_menu" class="animate__animated animate__fadeInRight">
                    <span></span>
                    <span></span>
                </div>
                <div onclick="mover(0)"></div>
                <span id="bg_logo" class="cont_center animate__animated animate__fadeIn"></span>
                <ul id="menus" class="cont_center" style="display:none">
                    <li id="menu_sobre" onclick="mover(1)">sobre</li>
                    <li id="menu_projetos" onclick="mover(2)">projetos</li>
                    <li id="menu_contato" onclick="mover(3)">contato</li>
                </ul>
            </div>
        </nav>
        <header id="capa" class="animate__animated animate__fadeIn">
            <div class="centro" id="banner">
                <div class="left cont_center">
                    <img class="animate__animated animate__fadeIn" src="contents/icons/LOGO_WHITE.svg" alt="" srcset="">
                    <img class="animate__animated animate__fadeInLeft" src="contents/images/ondinha_amarela.svg" alt="" srcset="">
                </div>
                <div class="right cont_center">
                    <img class="animate__animated animate__fadeInUp" src="contents/images/titulo.svg" alt="" srcset="">
                    <img class="animate__animated animate__fadeInUp" src="contents/images/sombra.png" alt="" srcset="">
                </div>
            </div>
        </header>

        <section id="sobre">
            <div class="centro">
                <div class="left cont_center" data-anime="left">
                    <img src="contents/images/sobre_mim.svg" alt="" srcset="">
                    <p data-anime="left">Olá, me chamo Sideilton Souza, tenho 27 anos, cursando Sistemas para Internet, aspirante a Designer Gráfico, amante de café, séries e doguinhos (mas não!, não vou mostrar eles aqui. Quem sabe numa outra oportuinidade)... Enfim, montei esse pequeno site pra mostrar um pouco do meu aprendizado até aqui com as tecnologias web: HTML5, CSS, JS e PHP; e ferramentas como Corel Draw e Photoshop (conhecimentos básicos mas procurando me especializar). Críticas construtivas são bem vindas, sinta-se à vontade! </p>
                </div>
                <div class="right cont_center" data-anime="top">
                    <img src="contents/images/espiral_amarela.svg" alt="" srcset="">
                </div>
            </div>
        </section>
        <section id="projetos">
            <div class="centro">
                <div data-anime="right" class="galeria" id="galeria">
                    <div id="close">
                        <span></span>
                        <span></span>
                    </div>
                    <div id="midiaSocial" class="fotos">
                        <?php
                        $midiasocial = "contents/images/midiasocial/";
                        foreach (glob("$midiasocial/*", GLOB_NOSORT) as $image) {
                            echo '<img src="' . $image . '"alt=""srcset="">';
                        }
                        ?>
                    </div>

                    <div id="logomarcas" class="fotos">
                        <?php
                        $logos = "contents/images/logos/";
                        foreach (glob("$logos/*", GLOB_NOSORT) as $image) {
                            echo '<img src="' . $image . '"alt=""srcset="">';
                        }
                        ?>
                    </div>

                    <div id="sites" class="fotos">
                        <div class="cartao">
                            <img src="contents/images/sites/1.jpg" alt="" srcset="">
                            <a href="imc/index.html" target="_blank" rel="noopener noreferrer">Visitar</a>
                        </div>
                        <div class="cartao">
                            <img src="contents/images/sites/2.jpg" alt="" srcset="">
                            <a href="jogo/index.php" target="_blank" rel="noopener noreferrer">Visitar</a>
                        </div>
                        <div class="cartao">
                            <img src="contents/images/sites/3.jpg" alt="" srcset="">
                            <a href="quiz/index.html" target="_blank" rel="noopener noreferrer">Visitar</a>
                        </div>
                    </div>

                    <div id="impressos" class="fotos">
                        <?php
                        $impressos = "contents/images/impressos/";
                        foreach (glob("$impressos/*", GLOB_NOSORT) as $image) {
                            echo '<img src="' . $image . '"alt=""srcset="">';
                        }
                        ?>
                    </div>

                    <div id="cartaoDigital" class="fotos">
                        <?php
                        $cartaodigital = "contents/images/cartaodigital/";
                        foreach (glob("$cartaodigital*", GLOB_NOSORT) as $image) {
                            echo '<div class="cartao"><img src="contents/images/cartaodigital/' . basename($image) . '"alt=""srcset=""><a href="contents/downloads/' . basename($image, 'jpg') . 'pdf"
                            download="Cartão interativo ' . basename($image, '.jpg') . '">baixar modelo</a></div>';
                        }
                        ?>
                    </div>

                </div>

                <div class="left cont_center" data-anime="left">
                    <img src="contents/images/projetos.svg" alt="" srcset="" data-anime="left">
                    <span id="midias" onclick="abre('midiaSocial')"></span>
                    <span id="logos" onclick="abre('logomarcas')"></span>
                </div>
                <div class="right cont_center" data-anime="right">
                    <img src="contents/images/espiral_branca.svg" alt="" srcset="">
                    <span id="web" onclick="abre('sites')"></span>
                    <span id="impressao" onclick="abre('impressos')"></span>
                    <span id="card" onclick="abre('cartaoDigital')"></span>
                </div>
            </div>
        </section>
        <section id="contato">
            <div class="centro">
                <div id="contato_centro"></div>
                <div class="left cont_center" data-anime="top">
                    <img src="contents/images/fale_comigo.svg" alt="" srcset="">
                    <a href="https://api.whatsapp.com/send?phone=5561995452063">Clique aqui para me chamar no <strong>WhatsApp</strong></a>
                    <img src="contents/images/ondinha_branca.svg" alt="" srcset="">
                </div>
                <div class="right cont_center">
                    <form action="contato.php" method="post">
                        <h1>Ou me mande um e-mail:</h1>
                        <textarea name="mensagem" id="mensagem" cols="30" rows="4" placeholder="Digite aqui sua mensagem" required></textarea>
                        <button id="btnform" onclick="showForm()">Continuar</button>
                        <label id="lnome" for="nome" class="inputs">Qual seu nome?</label>
                        <input type="text" name="nome" id="nome" maxlength="40" placeholder="Digite aqui seu nome" class="inputs" required>
                        <label id="lemail" for="email" class="inputs">E seu e-mail?</label>
                        <input type="email" name="email" id="email" placeholder="Digite aqui seu e-mail" required class="inputs">
                        <input type="submit" value="Enviar" class="inputs">
                    </form>
                </div>
            </div>
        </section>
        <footer>
            <div class="centro">
                <a href="https://api.whatsapp.com/send?phone=5561995452063"> WhatsApp: (61) 99545 2063</a>
                <a href="mailto:sideiltonsouza@outlook.com">sideiltonsouza@outlook.com</a>
            </div>
        </footer>
    </div>
    <script src="js/script.js"></script>
</body>

</html>