<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAAL Arquitetura</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald&family=Roboto:wght@300&display=swap" rel="stylesheet">


    <script type="text/javascript" src="_assets/_script/carousel.js"></script>
    <link rel="stylesheet" href="_assets/_css/style.css">
    <link rel="stylesheet" href="_assets/_css/header.css">
    <link rel="stylesheet" href="_assets/_css/banner.css">
    <link rel="stylesheet" href="_assets/_css/budget.css">
    <link rel="stylesheet" href="_assets/_css/about.css">
    <link rel="stylesheet" href="_assets/_css/steps.css">
    <link rel="stylesheet" href="_assets/_css/gallery.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="_assets/_css/carousel.css">
    <link rel="stylesheet" href="_assets/_css/relax.css">
    <link rel="stylesheet" href="_assets/_css/form.css">
    <link rel="stylesheet" href="_assets/_css/footer.css">
    

</head>

<body>

    <!-- Start NavBar-->

    <header>
        <div class="container row">

            <a href="index.php" class="anchor"><img src="_assets/_img/TAAL ARQUITETURA LOGO.png" alt="logo_TAAL"></a>
            <nav>
                <ul id="navbar-list">
                    <li><a href="index.php" class="anchor">Home</a></li>
                    <li><a href="#gallery" class="anchor">Portfólio</a></li>
                    <li> <a href="#about" class="anchor">Sobre nós</a></li>
                    <li><a href="#footer-detail" class="anchor">Contato</a></li>
                    <li> &#x2706; whatsApp +5511985718918 </li>
                </ul>

            </nav>
            <div id="button">
                <a href="#form" class="anchor"><button class="button" type="button">Fazer orçamento</button></a>
            </div>
        </div>
        <div id="header-detail"></div>
    </header>

    <!-- End NavBar-->

    <!-- Start Banner-->

    <section id="banner">
        <div id="cont-banner">
            <h1>O que podemos fazer por <br>você hoje?</h1>
            <div class="container row">

                <div class="banner-cards" id="servicos">
                    <div class="banner-cards-info">
                        <img src="_assets/_icons/icon_servicos.png" alt="icon_servicos">
                        <h5>Serviços</h5>
                    </div>
                    <p> Contruções, instalações e manutenção em geral pelo melhor preço do mercado.</p>
                </div>

                <div class="banner-cards" id="design">
                    <div class="banner-cards-info">
                        <img src="_assets/_icons/icon_design.png" alt="icon_servicos">
                        <h5>Design</h5>
                    </div>
                    <p> Projetos residenciais, comerciais e corporativos, Cenografia e Eventos e  Design de
                        Interiores.</p>
                </div>

                <div class="banner-cards" id="projetos">
                    <div class="banner-cards-info">
                        <img src="_assets/_icons/icon_projetos.png" alt="icon_servicos">
                        <h5>Projetos</h5>
                    </div>
                    <p> Desenvolvimento de projetos técnico de segurança contra incêndio, residencial, comercial ou
                        industrial.</p>

                </div>
            </div>
        </div>
    </section>

    <!-- End Banner -->

    <!-- Start Budget-->

    <section id="budget">

        <div class="container row" id="budget-info">
            <div>
                <h5>Orçamento</h5>
            </div>
            <br>
            <div>
                <h4>Sem perder tempo!</h4>
            </div>
        </div>

        <div class="container row" id="budget-cards">
            <div class="budget-cards" id="budget-card-esq">
                <img src="_assets/_icons/icon_preco.png" alt="icon_preco">
                <p>Obtenha o preço e o tempo
                    para o serviço desejado.</p>
            </div>
            <div class="budget-cards">
                <img src="_assets/_icons/icon_horario.png" alt="icon_horario">
                <p>Agende o melhor dia e horário
                    para realização do serviço.</p>
            </div>
            <div class="budget-cards" id="budget-card-dir">
                <img src="_assets/_icons/icon_garantia.png" alt="icon_garantia">
                <p>Tenha a garantia de 3 meses
                    para os serviços realizados.</p>
            </div>
        </div>
    </section>

    <!-- End Budget -->

    <!-- Start About -->

    <section id="about">
        <div class="container row">

            <div id="about-left" class="container row">

            </div>
            <div class="about-info">

                <div id="about-right" class="container row">
                    <div class="container ">
                        <div class="about-info">

                            <div>
                                <h5>Quem somos!</h5>
                            </div>
                            <div>
                                <h4>Mais de 10 anos de experiência.</h4>
                            </div>
                            <p id="text-about">Somos um escritório de Arquitetura e Urbanismo que desenvolve projetos do
                                mais elevado
                                padrão,
                                nas áreas industriais, comerciais, residenciais e corporativas.
                                Para atingir tal finalidade a empresa conta com uma equipe de profissionais altamente
                                qualificados
                                e credenciados no CAU e CREA. </p>
                        </div>
                    </div>
                </div>

                <div id="about-partners" class="container row">

                    <div class="about-partners-cards" id="about-partner-cards-left">
                        <img src="_assets/_img/arquiteto.png" alt="Arquiteto">
                        <p>Arquiteto</p>
                    </div>
                    <div class="about-partners-cards">
                        <img src="_assets/_img/engenheiro.png" alt="Engenheiro">
                        <p>Engenheiro</p>
                    </div>
                    <div class="about-partners-cards">
                        <img src="_assets/_img/designer.png" alt="Designer">
                        <p>Designer</p>
                    </div>
                    <div class="about-partners-cards" id="about-partner-cards-right">
                        <img src="_assets/_img/projetista.png" alt="Projetista">
                        <p>Projetista</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- End About -->

    <!-- Start Steps-->

    <section id="steps">
        <div class="container row">


            <div id="steps-left" class="container">

            </div>

            <div id="steps-right" class="container column-nowrap">
                <div id="steps-info">
                    <div>
                        <h5>Projetos não!</h5>
                    </div>
                    <div>
                        <h4>Experiência de transformação!</h4>
                    </div>
                    <div>
                        <p>Nós não vêmos a realização dos projetos como construções e reformas. Nossa filosofia é
                            realizar
                            sonhos.
                            E tudo começa com um traço!</p>
                    </div>
                </div>


                <div id="steps-cards" class="container row">

                    <div class="steps-cards">
                        <img src="_assets/_icons/icon_pass.png" alt="passo1">
                        <h6>1° Descreva o projeto !</h6>
                        <p>Dê as principais características do projeto, ou anexe um arquivo!</p>
                    </div>

                    <div class="steps-cards">
                        <img src="_assets/_icons/icon_pass2.png" alt="passo2">
                        <h6>2° Receba um Layout !</h6>
                        <p>Nesta etapa você ja recebe um desenho elaborado segundo suas recomendações.</p>
                    </div>

                    <div class="steps-cards">
                        <img src="_assets/_icons/icon_pass3.png" alt="passo3">
                        <h6>3° Aprove o Layout !</h6>
                        <p>Aprove o Layout e receba o valor do seu pedido e efetue seu cadastro.</p>
                    </div>

                    <div class="steps-cards">
                        <img src="_assets/_icons/icon_pass4.png" alt="passo4">
                        <h6>4° Receba o projeto !</h6>
                        <p>Nesta etapa é efetuado o pagamento do projeto, e em até 10 dias úteis será finalizado.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- End Steps-->
    <!-- Start Gallery-->

    <section id="gallery">
        <div class="container row">
            <div id="gallery-box" class="container column-nowrap">
                <div id="gallery-info">
                    <div>
                        <h5>Portfólio</h5>
                    </div>
                    <div>
                        <h4>Descrubra nossos projetos</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Gallery -->

    <!-- Start Carousel -->

    <section id="carousel">
        <div class="container row">
            <div class="main" class="container row">
                <div class="cd-slider">
                    <ul>
                        <li>
                            <div class="image" style="background-image:url(_assets/_img/_port/co-working.jpg);"></div>
                            <div class="content">
                                <h2>TAAL Arquitetura</h2>
                            </div>
                        </li>
                        <li>
                            <div class="image" style="background-image:url(_assets/_img/_port/empresarial.jpg);"></div>
                            <div class="content">

                                <h2>Projeto Ambiente Empresarial</h2>
                            </div>
                        </li>
                        <li>
                            <div class="image" style="background-image:url(_assets/_img/_port/planejados.jpg);"></div>
                            <div class="content">
                                <h2>Projetos de Planejados</h2>
                            </div>
                        </li>
                        <li>
                            <div class="image" style="background-image:url(_assets/_img/_port/escada.jpg);"></div>
                            <div class="content">
                                <h2>Projeto de Interiores</h2>
                            </div>
                        </li>
                        <li>
                            <div class="image" style="background-image:url(_assets/_img/_port/comercial.jpg);"></div>
                            <div class="content">
                                <h2>Projeto de Fachadas</h2>
                            </div>
                        </li>
                        <li>
                            <div class="image" style="background-image:url(_assets/_img/_port/render.jpg);"></div>
                            <div class="content">
                                <h2>Maquetes Eletrônicas</h2>
                            </div>
                        </li>
                        <li>
                            <div class="image" style="background-image:url(_assets/_img/_port/planejamento.jpg);"></div>
                            <div class="content">
                                <h2>Planejamento de Obra</h2>
                            </div>
                        </li>
                        <li>
                            <div class="image" style="background-image:url(_assets/_img/_port/projeto.jpg);"></div>
                            <div class="content">
                                <h2>Projeto</h2>
                            </div>
                        </li>
                        <li>
                            <div class="image" style="background-image:url(_assets/_img/_port/projeto_1.jpg);"></div>
                            <div class="content">
                                <h2>Projeto 1</h2>
                            </div>
                        </li>
                        <li>
                            <div class="image"
                                style="background-image:url(_assets/_img/_port/paisagismo.jpg); background-position: center;">
                            </div>
                            <div class="content">
                                <h2>Projeto de Paisagismo</h2>
                            </div>
                        </li>
                        <li>
                            <div class="image" style="background-image:url(_assets/_img/_port/equipamentos.jpg);"></div>
                            <div class="content">
                                <h2>Equipamentos de Segurança</h2>
                            </div>
                        </li>
                        <li>
                            <div class="image" style="background-image:url(_assets/_img/_port/brigada_incendio.jpg);">
                            </div>
                            <div class="content">
                                <h2>Brigada de Incêndio</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
    </section>

    <!-- End Carousel -->

    <!-- Start Relax -->
    <section id="relax">
        <div id="cont-relax">
            <div id="relax-box" class="container row">
                <div id="relax-info">
                    <div>
                        <h5>Seu sonho começa com um traço!</h5>
                    </div>
                    <div>
                        <h4>Relax & deixe o resto <br>
                            com a gente.</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Relax -->

    <!--Start Form-->

    <section id="form">

        <div class="container row">
            <div id="form-info">
                <h2>CADASTRE-SE</h2>
                <h4>Preencha os espaços para realizar um orçamento.</h4>
                <p>Insira seus dados nos campos correspondentes.</p>
            </div>
        </div>

        <div id="form-itens" class="container row">

            <div id="form-itens-list">
                <form action="_assets/_php/form.php" method="POST" class="container row">
                    <div id="form-left">
                        <div id="form-basic" class="container column-nowrap">
                            <div id="input-email"><input type="email" name="email" id="form-email"
                                    placeholder="seuemail@email.com" style="font-size: 20px; color:#ffffff;"></div>
                            <div id="input-name"><input type="text" name="name" id="form-name"
                                    placeholder="Nome completo" style="font-size: 20px; color:#ffffff;">
                            </div>
                            <div id="input-address"><input type="text" name="address" id="form-address"
                                    placeholder="Endereço, n° - Cidade, Estado" style="font-size: 20px; color:#ffffff;">
                            </div>
                        </div>
                        <div id="form-phonecontacts" class="container row">
                            <div id="input-cel"><input type="tel" name="cel" id="form-cel"
                                    placeholder="Cel:(00) 00000-0000" style="font-size: 20px; color:#ffffff;"></div>
                            <div id="input-tel"><input type="tel" name="tel" id="form-tel"
                                    placeholder="Tel:(00) 0000-0000" style="font-size: 20px; color:#ffffff;"></div>
                        </div>

                        <textarea name="msg" id="form-msg" cols="30" rows="10" placeholder="Descreva seu projeto..."
                            style="font-size: 20px; color:#000000;"></textarea>

                        <?php 

if(isset($_SESSION['msg']))
    echo $_SESSION['msg'];
    unset ($_SESSION['msg']);

?>



                        <div id="form-button-submit">
                            <input type="submit" value="ENVIAR">
                        </div>
                    </div>


                    <div id="form-right">

                        <div class="container column-nowrap"">

                            <div id=" form-pref-info">
                            <div>
                                <p>Preferências de contato.</p>
                            </div>

                            <div id="form-pref-and-radio" class="container row">
                                <div id="form-pref-checkbox" class="container column-nowrap">
                                    <div>
                                        <input type="checkbox" name="check_email" id="form-checkbox-email"
                                            placeholder="E-mail" value="email">
                                        <label for="form-checkbox-email">E-mail</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="check_tel" id="form-checkbox-telefone"
                                            placeholder="Telefone" value="telefone">
                                        <label for="form-checkbox-telefone">Telefone</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="check_whats" id="form-checkbox-whatsapp"
                                            placeholder="Whats-App" value="whatsapp" checked>
                                        <label for="form-checkbox-whatsapp">Whats-App</label>
                                    </div>
                                </div>

                                <div id="form-pref-radio" class="container column-nowrap">
                                    <div>
                                        <label class="radio-time">Manhã
                                            <input type="radio" name="radio" value="Manhã">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div>
                                        <label class="radio-time">Tarde
                                            <input type="radio" name="radio" value="Tarde">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div>
                                        <label class="radio-time">Noite
                                            <input type="radio" checked="checked" name="radio" value="Noite">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="form-img">.
                            <img src="_assets/_icons/icon_msg.png" alt="envelope">
                        </div>

                    </div>
            </div>
            </form>
        </div>

        </div>

    </section>

    <!-- End Form-->


    <!-- Start Footer-->

    <footer>
        <div id="footer-detail"></div>

        <div class="container row">

            <div id="footer-logo">
                <a href="#" class="anchor">
                    <img src="_assets/_img/TAAL-ARQUITETURA-LOGO 2@2x.png" alt="logo_TAAL">
                </a>
            </div>
            <div id="footer-company">
                <p>Empresa</p>
                <div id="footer-detail-company"></div>

                <ul>
                    <li><a href="index.php" class="anchor">Home</a></li>
                    <li><a href="#gallery" class="anchor">Portfólio</a></li>
                    <li><a href="#about" class="anchor">Sobre nós</a></li>
                    <li><a href="##footer-detail" class="anchor">Contato</a></li>
                </ul>
            </div>
            <div id="footer-contact">
                <p>Contato</p>
                <div id="footer-detail-contact"></div>
                <ul>
                    <li>
                        <p>+55 (11) 34280957</p>
                    </li>
                    <li>
                        <p>+55 (11) 9 8571-8918</p>
                    </li>
                    <li>
                        <p>email: taalarquitetura@gmail.com</p>
                    </li>
                </ul>
            </div>
            <div id="footer-accounts">
                <p>Term & privacy | Certificates & awards | <a id="myaccount" href="login.php" class="anchor"> My account </a>
                </p>

                <a href="https://twitter.com/" class="anchor"><img src="_assets/_icons/icon_logo_twitter.png"
                        alt="twitter"></a>
                <a href="https://www.youtube.com/" class="anchor"><img src="_assets/_icons/icon_logo_youtube.png"
                        alt="youtube"></a>
                <a href="https://www.linkedin.com/" class="anchor"><img src="_assets/_icons/icon_logo_linkedin.png"
                        alt="linkedin"></a>
                <a href="https://br.pinterest.com/" class="anchor"><img src="_assets/_icons/icon_logo_pin.png"
                        alt="pinterest"></a>
            </div>
        </div>
    </footer>
    <!-- End Footer-->

    <script type="text/javascript" src="_assets/_script/carousel.js"></script>
    <script type="text/javascript" src="_assets/_script/script.js"></script>
    <script type="text/javascript" src="_assets/_script/myaccount.js"></script>

</body>

</html>