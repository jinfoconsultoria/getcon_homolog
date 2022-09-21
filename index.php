<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <title>GestCCon - Login</title>
    <!-- <link rel="icon" href="https://getbootstrap.com/docs/4.1/assets/img/favicons/favicon-32x32.png" /> -->
    <meta charset="utf-8" />
    <meta name="author" content="Leandro Ribeiro" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css" />

    <!-- Font Awesome -->
    <link href="assets/fontawesome/css/all.css" rel="stylesheet" />

    <link href="assets/lib/toastr/build/toastr.css" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/b6ab1f2b75.js" crossorigin="anonymous"></script>

    <!-- Estilos -->
    <link rel="stylesheet" href="assets/css/components.css" />
    <link rel="stylesheet" href="assets/css/estilo.css" />

    <style>
        .preload * {
            -webkit-transition: none !important;
            -moz-transition: none !important;
            -ms-transition: none !important;
            -o-transition: none !important;
            transition: none !important;
        }
        

        #header{
            display:flex;
            flex-direction:column;
            height:600px;
            background-image:url('assets/img/bg_.jpg');
            background-position:center;
            background-size:cover;
        }

        .navbar{
            display:flex;
            flex-direction:row;
            justify-content:space-between;
            height:115px;
            align-items:center;
            padding:0px 50px;
        }

        .navbar-menu{
            font-weight:600;
        }

        .navbar-text{
            padding-right:25px;
        }

        .header-text{
            padding:200px 50px;
        }

        h2,a,p{
            color:#43405F;
        }

        .servicos-header{
            display:flex;
            align-items:center;
            justify-content:center;
            text-align:center;
            flex-direction:column;
            padding:75px 0px 35px;
        }

        .servicos-geral{
            display:flex;flex-direction:column;align-items:center;justify-content:center
        }

        .servicos-linha{
            display:flex;flex-direction:row;justify-content:space-evenly
        }

        .servicos-item{
            display:flex;flex-direction:row;margin:25px
        }

        .iconServico{
            font-size:2.25rem;
            color:#43405F;
            padding:0px 15px;
        }

        @media(max-width:476px){
            .navbar-menu{
                display:none;
            }
        }
    </style>
</head>

<body class="preload">

    <div id="header">
        <nav class="navbar">
            <div>
                <img src='assets/img/logo_gest.png' height="75px"/>
            </div>

            <div class="navbar-menu">
                <a href="#"><span class="navbar-text">Home</span></a>
                <a href="#"><span class="navbar-text">A GestCCon</span></a>
                <a href="#"><span class="navbar-text">Serviços</span></a>
                <a href="#"><span class="navbar-text">Contato</span></a>
                <a href="login.php"><button class="btn btn-primary" style="padding:5px 25px">ENTRE</button></a>
            </div>
        </nav>

        <div class="header-text">
            <h2>Uma solução completa de </h2>
            <h2 class="mt-2">software para seu condomínio</h2>
            <p class="mt-4">Inicie sua integração com portal de moradores, envie de mensagem em</br>
            mensagem em massa, reservas de ambientes, registro de mudanças</p>

            <a href="#"><button class="btn btn-primary" style="padding:5px 25px">TESTE AQUI</button></a>
        </div>

    </div>

    <div id="servicos">
        <div class="servicos-header">
            <h3>Nossos Serviços</h3>
            <p>Serviços completos para administração do seu condomínio</p>
        </div>

        <div class="servicos-geral">
            <div class="servicos-linha">
                <div class="servicos-item">
                    <div>
                        <i class="far fa-gem iconServico"></i>
                    </div>
                    <div style="display:flex;flex-direction:column">
                        <h6>Portal de Moradores</h6>
                        <p>Integre sua administração</br> com os moradores</p>
                    </div>
                </div>

                <div class="servicos-item">
                    <div>
                        <i class="fas fa-paper-plane iconServico"></i>
                    </div>
                    <div style="display:flex;flex-direction:column">
                        <h6>Mensagem em massa</h6>
                        <p>Envie comunicado rapidamente</br> para seus moradores</p>
                    </div>
                </div>
            </div>

            <div class="servicos-linha">
                <div class="servicos-item">
                    <div>
                        <i class="fas fa-newspaper iconServico"></i>
                    </div>
                    <div style="display:flex;flex-direction:column">
                        <h6>Jornal do Condominio</h6>
                        <p>Mantenha os moradores</br> sempre informados</p>
                    </div>
                </div>

                <div class="servicos-item">
                    <div>
                        <i class="fas fa-heart iconServico"></i>
                    </div>
                    <div style="display:flex;flex-direction:column">
                        <h6>Suporte Rápido</h6>
                        <p>Resolvemos seus problemas</br> em pequenos prazos</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="display:flex;flex-direction:row;margin:50px 0px 75px">
        <div style="background-image:url(assets/img/img1.jpg);height:400px;width:650px">

        </div>

        <div style="display:flex;align-items:center;justify-content:center">
            <div style="background-color:white;margin-left:-150px;margin-top:-50px;height:250px;width:500px;padding:45px">
                <h3>Quem somos</h3>
                <p class="mt-4" style="font-size:0.7rem">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque magna massa, laoreet sit amet rhoncus et, aliquet eget est. Nullam blandit, quam non tincidunt imperdiet, nulla nunc euismod metus, nec ultrices eros odio quis lorem.</p>
                <button class="btn btn-primary mt-3" style="float:right">Leia Mais</button>
            </div>
        </div>
    </div>

    <div style="margin:75px;display:flex;justify-content:center;align-items:center;flex-direction:column">
        <div class="servicos-header">
            <h3>Confira como funciona</h3>
            <p>Um vídeo simples e prático pra explicar nosso sistema</p>
        </div>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/YFX4262CXIE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div style="width:100%;height:225px;background-color:#635AB5;display:flex;flex-direction:column;justify-content:center;align-items:center">  
        <h3 style="color:white">Entre em contato conosco</h3>
        <button class="btn " style="background-color:white;border-color:white;color:#43405F">Ligue pra gente!</button>
    </div>
</body>

</html>