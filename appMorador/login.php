<?php
    session_start();
    include("template/topo.php");


        // Exigir o arquivo de classes que armazena as métodos;
    require_once '../assets/php/classes.php';

    // Instância um novo objeto do banco de dados e inicia a conexão;
    $db   = new db();
    $dbatual = $_SESSION['db_condominio'];
    $link_condominio = $db->conecta_mysql($_SESSION['db_condominio']);
?>

<body>

     <!-- loader -->
     <div id="loader">
        <img src="assets/img/logo-icon.png" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader no-border">
        <div class="left">
        </div>
        <div class="pageTitle"></div>
        <div class="right">
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section mt-2 text-center">
            <h1>Entrar</h1>
            <h4>Digite seu email e senha!</h4>
        </div>
        <div class="section mt-2 mb-5 p-3">
            <form id="form-login">
                <input type="hidden" name="tipo_usuario" value="morador"/> 
                <div class="form-group basic">
                    <div class="input-wrapper">
                        <label class="label" for="email1">E-mail</label>
                        <input type="email" class="form-control" name="email-login" id="email1"  placeholder="Digite seu Email">
                        <i class="clear-input"><i class="fas fa-times"></i></i>
                    </div>
                </div>

                <div class="form-group basic">
                    <div class="input-wrapper">
                        <label class="label" for="password1">Password</label>
                        <input type="password" class="form-control" name="senha-login" id="password1" placeholder="Digite sua senha">
                        <i class="clear-input"><i class="fas fa-times"></i></i>
                    </div>
                </div>

                <div class="form-links mt-2">
                    <div>
                        <a href="app-register.html">Contato com a Administradora</a>
                    </div>
                </div>

                <div class="form-button-group">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Log in</button>
                </div>

            </form>
        </div>

    </div>
    <!-- * App Capsule -->

    <script>
        $('#form-login').on('submit', (e) => {
            var dados = $(e.target).serialize()

            $.ajax({
                url: '../telas_ajax/login/login.php',
                type: 'POST',
                data: dados,
                success: (response) => {
                    setTimeout(() => {
                            window.location.href = 'index.php';
                    }, 1800);
                },
                error: (response) => {
                    console.log(response)
                },
            })

            return false
        })

    </script>

<?php
    include("template/footer.php");
?>