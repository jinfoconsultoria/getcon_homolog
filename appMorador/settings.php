<?php
session_start();
include("template/topo.php");

if (!isset($_SESSION['logado']) || !$_SESSION['logado'] === true) {
    header("location: login.php");
}

// Exigir o arquivo de classes que armazena as métodos;
require_once '../assets/php/classes.php';

// Instância um novo objeto do banco de dados e inicia a conexão;
$db   = new db();
$dbatual = $_SESSION['db_condominio'];
$link_condominio = $db->conecta_mysql($_SESSION['db_condominio']);
?>

<style>
    .updateItem {
        display: flex;
        flex-direction: column;
    }



    .div_altera_morador {
        padding: 0rem 1rem 0.5rem;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        width: 100%;
        align-items: flex-start;
    }

    .div_altera_morador>input {
        border: 1px solid #EDEDF5;
        height: 2rem;
    }
</style>

<body>

    <!-- loader -->
    <div id="loader">
        <img src="assets/img/logo-icon.png" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader">
        <div class="left">
            <a href="index.php" class="headerButton goBack">
                <i class="fas fa-angle-left"></i>
            </a>
        </div>
        <div class="pageTitle">
            Configurações
        </div>
        <div class="right">

        </div>
    </div>
    <!-- * App Header -->


    <?php
    $query = "select * from usuario where ts = '{$_SESSION['ts']}'";

    $resultado = mysqli_query($link_condominio, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    ?>


    <!-- App Capsule -->
    <div id="appCapsule">
        <input type="hidden" id="ts" value="<?= $usuario['ts'] ?>" />

        <!-- IMAGEM HEADER -->
        <?php
        include("components/settings/imageHeader.php")
        ?>

        <!-- TOGGLE NOTIFY EMAIL -->
        <?php
        include("components/settings/notifyEmail.php")
        ?>


        <div class="listview-title mt-1">Configurações do Perfil</div>
        <?php
        include("components/settings/configPerfilEmailFone.php")
        ?>


        <div class="listview-title mt-1">Segurança</div>

        <?php
        include("components/settings/configPerfilSenhaLogout.php")
        ?>

    </div>

    <script>
        $(document).ready(function() {

            $("#btn-att-fone").click(function() {
                $("#div-fone_morador").slideToggle();
                $("#btn_altera-fone").fadeToggle();
            })

            $("#btn-att-email").click(function() {
                $("#div-email_morador").slideToggle();
                $("#btn_altera-email").fadeToggle();
            })

            $("#btn-att-senha").click(function() {
                $("#div-senha_morador").slideToggle();
                $("#btn_altera-senha").fadeToggle();
            })

            function updateMorador(id, value, acao) {
                $("#" + id).click(function() {

                    const valueUpdate = $("#" + value).val();
                    const tsMorador = $("#ts").val();
                    const acaoMorador = $("#" + acao).val();

                    if (value === 'email_morador') {
                        console.log("a")
                        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                        if (!filter.test(valueUpdate)) {
                            $("#" + value).focus();
                            $("#" + value).css("border", "1px solid #dc3545")
                            $(".error-email").show();
                            return false
                        }

                    }

                    $.ajax({
                        url: 'telas_ajax/settings.php',
                        type: 'POST',
                        data: {
                            valueUpdate: valueUpdate,
                            tsMorador: tsMorador,
                            acaoMorador: acaoMorador
                        },
                        success: (response) => {
                            $(".error-email").hide();
                            $("#" + value).css("border", "1px solid #EDEDF5")
                            setTimeout(() => {
                                window.location.href = 'settings.php';
                            }, 1800);
                        },
                        error: (response) => {
                            console.log(response)
                        },
                    })

                    return false
                });
            }

            updateMorador('btn_altera-fone', 'fone_morador', 'fone_acao');
            updateMorador('btn_altera-email', 'email_morador', 'email_acao');
            updateMorador('btn_altera-senha', 'senha_morador', 'senha_acao');

            $("#msgEmailMorador").change(function() {
                const status = $(this).val();
                const tsMorador = $("#ts").val();
                const acaoMorador = 'editStatusMsg';

                $.ajax({
                    url: 'telas_ajax/settings.php',
                    type: 'POST',
                    data: {
                        status: status,
                        tsMorador: tsMorador,
                        acaoMorador: acaoMorador
                    },
                    success: (response) => {
                        console.log(response)
                    },
                    error: (response) => {
                        console.log(response)
                    },
                })
            })

            $("#btn-update-usuario_imagem").click(function() {
                $("#usuario_imagem").click();
                $("#usuario_imagem").change(function() {
                    const tsMorador = $("#ts").val();
                    const acaoMorador = 'editImageMorador';

                    setTimeout(function() {
                        $.ajax({
                            url: 'telas_ajax/settings.php',
                            type: 'POST',
                            data: {
                                tsMorador: tsMorador,
                                acaoMorador: acaoMorador
                            },
                            success: (response) => {
                                $("#imageProfile").attr('src',"../assets/uploads/imagens/usuario/"+response)
                            },
                            error: (response) => {
                                console.log(response)
                            },

                        })
                    }, 2000)


                });
            })

        });
    </script>
    <!-- * App Capsule -->
    <?php
    include("template/menu.php");
    include("template/footer.php");
    ?>