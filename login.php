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
    </style>
</head>

<body class="preload">

    <div class="login-container d-flex justify-content-center align-items-center">
        <div class="login-box">
            <h3>Entrar</h3>
            <form class="form-horizontal mt-3 form-material" id="form-login">
                <div class="form-group mb-3">
                    <input class="form-control" type="email" value="leandro98.ata@gmail.com" name="email-login" placeholder="Email">
                </div>

                <div class="form-group mb-4">
                    <input class="form-control" type="password" value="Lro-1998" name="senha-login" placeholder="Senha">
                </div>

                <div class="form-group mb-5">
                    <div class="d-flex align-items-center">
                        <input id="checkbox-signup" type="checkbox" class="switch">
                        <label for="checkbox-signup" class="toggle">Lembrar</label>
                        <div class="ml-auto">
                            <a href="javascript:void(0)" id="to-recover" class="text-muted"><i class="fa fa-lock mr-1"></i> Esqueceu a senha?</a>
                        </div>
                    </div>
                </div>
                <div class="form-group text-center mt-5">
                    <div class="col-xs-12">
                        <button class="btn btn-loader btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Entrar
                            <img class="img-loader" src="assets/img/loader_branco.svg">
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>




    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="assets/lib/jquery/jquery-min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/lib/toastr/toastr.js"></script>

    <script>
        $(document)
            .ajaxStart(function(e) {
                // Verifica se a chamada ajax vem do botão
                if ($(e.target.activeElement).hasClass('btn btn-loader')) {
                    $(e.target.activeElement).addClass('ajax-start');
                }
            })
            .ajaxStop(function(e) {
                // Verifica se a chamada ajax vem do botão
                if ($(e.target.activeElement).hasClass('btn btn-loader')) {
                    $(e.target.activeElement).removeClass('ajax-start');
                }
            })

        toastr.options = {
            closeButton: true,
            debug: false,
            newestOnTop: false,
            progressBar: true,
            positionClass: 'toast-bottom-center',
            preventDuplicates: false,
            onclick: null,
            showDuration: '300',
            hideDuration: '1000',
            timeOut: '5000',
            extendedTimeOut: '1000',
            showEasing: 'swing',
            hideEasing: 'linear',
            showMethod: 'fadeIn',
            hideMethod: 'fadeOut',
        }

        var url_string = window.location.href;
        var url = new URL(url_string);
        var logout = url.searchParams.get("logout");
        var login = url.searchParams.get("login");

        if (login === '1') toastr.error('Por favor, faça login para acessar essa página.');
        if (logout === '1') toastr.success('Sessão finalizada com sucesso!');

        toastr.options = {
            closeButton: false,
            debug: false,
            newestOnTop: false,
            progressBar: false,
            positionClass: 'toast-bottom-center',
            preventDuplicates: false,
            onclick: null,
            showDuration: '300',
            hideDuration: '1000',
            timeOut: '5000',
            extendedTimeOut: '1000',
            showEasing: 'swing',
            hideEasing: 'linear',
            showMethod: 'fadeIn',
            hideMethod: 'fadeOut',
        }

        $('#form-login').on('submit', (e) => {
            var dados = $(e.target).serialize()

            $.ajax({
                url: 'telas_ajax/login/login.php',
                type: 'POST',
                data: dados,
                success: (response) => {
                    var status = response.split(' |divisor| ')[0]
                    var mensagem = response.split(' |divisor| ')[1]

                    if (status == 'sucesso') {
                        toastr.success(mensagem, 'Sucesso');

                        setTimeout(() => {
                            window.location.href = 'painel.php';
                        }, 1800);

                    } else if (status == 'falha') {
                        toastr.error(mensagem, 'Erro')

                    }
                },
                error: (response) => {
                    console.log(response)
                },
            })

            return false
        })

        $(document).ready(function() {
            $("body").removeClass("preload");
        });
    </script>
</body>

</html>
