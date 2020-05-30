<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "taal_arquitetura";

//Criar a conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);



$result_orcamento = "SELECT * FROM orcamentos_site ORDER BY id DESC";
$resultado_orcamento = mysqli_query ($conn, $result_orcamento);
$row_orcamento = mysqli_fetch_assoc($resultado_orcamento);
$total = mysqli_num_rows($resultado_orcamento);

?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAAL Arquitetura - My Account</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald&family=Roboto:wght@300&display=swap"
        rel="stylesheet">


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
    <link rel="stylesheet" href="_assets/_css/myaccount.css">
    


</head>

<body>

    <!-- Start NavBar-->

    <header>
        <div class="container row">

            <a href="index.php" class="anchor"><img src="_assets/_img/TAAL ARQUITETURA LOGO.png" alt="logo_TAAL"></a>
            <nav>
                <ul id="navbar-list">
                    <li><a href="index.php" class="anchor">Home</a></li>
                    <li><a href="#footer-detail" class="anchor">Contato</a></li>
                    <li> &#x2706; whatsApp +5511985718918 </li>
                </ul>

            </nav>
            <div id="button">
                <a href="index.php" class="anchor"><button class="button" type="button">Voltar</button></a>
            </div>
        </div>
        <div id="header-detail"></div>
    </header>

    <!-- End NavBar-->

    <!-- Start My Account-->

    <section id="myaccount">
        <div class="container row">
            <div id="account-box" class="container column-nowrap">
                <div id="account-info">
                    <div>
                        <h5>My Account</h5>
                    </div>
                    <div>
                        <h4>Orçamentos Pedidos.</h4>
                    </div>
                    <br>
                    <p style="color:#FE7E01;" >| ID | Nome | E-mail | Endereço | Celular | Telefone | Pref-Email 
                    | Pref-Tel | Pref-Whats | Pref-Hora | Data-Pedido | Mensagem |
                    </p>
                    <br>

                    <?php
        // se o número de resultados for maior que zero, mostra os dados
                    if($total > 0) {
        // inicia o loop que vai mostrar todos os dados
                    do {
                ?>

                    <p class="account-p">
                        <?=$row_orcamento['id']?> | <?=$row_orcamento['nome']?> |<br>
                        <?=$row_orcamento['email']?> | <?=$row_orcamento['endereço']?> |
                        <?=$row_orcamento['celular']?> | <?=$row_orcamento['telefone']?> |<br>
                        <?=$row_orcamento['pref_email']?> | <?=$row_orcamento['pref_tel']?> |
                        <?=$row_orcamento['pref_whats']?> | <?=$row_orcamento['pref_hora']?> |<br>
                        <?=$row_orcamento['data_pedido']?> |<br> <?=$row_orcamento['msg']?> |
                        <br>
                        <br>


                    </p>
                    <?php
        // finaliza o loop que vai mostrar os dados
                     }while($row_orcamento = mysqli_fetch_assoc($resultado_orcamento));
    // fim do if 
                     }else{
                ?>

                    <p>Nenhum orçamento registrado!</p>

                    <?php
                     }
                     ?>


                </div>
            </div>
        </div>
    </section>

    <!-- End My Account -->

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
                <p>Term & privacy | Certificates & awards | <a onclick="alert(myAcount())" id="myaccount" href="myaccount.php" class="anchor"> My
                        account </a>
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
    <script type="text/javascript" src="_assets/_script/script.js"></script>

</body>

</html>