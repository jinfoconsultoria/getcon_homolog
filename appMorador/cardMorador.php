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



$query = "select * from usuario where ts = '{$_SESSION['ts']}'";

$resultado = mysqli_query($link_condominio, $query);
$usuario = mysqli_fetch_assoc($resultado);
?>

<style>
    .divGeralPages {
        display: flex;
        justify-content: center;
    }

    .card {
        margin-top: 2rem;
        padding: 1rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    #qrCodeCard-modal {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    span{
        margin:0.5rem;
    }
</style>


<body id="bodyGeral">

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
            Meu Cartão
        </div>
        <div class="right">

        </div>
    </div>

    <!-- App Capsule -->
    <div id="appCapsule" class="divGeralPages">
        <div class="card">

            <img src="../assets/uploads/imagens/usuario/<?= $usuario['imagem'] ?>" alt="avatar" class="imaged w200" style="object-fit: cover;object-position: center;height: 200px;" />

            <span><?= $usuario['nome'] ?></span>
            <div id="qrCodeCard-Modal"></div>
        </div>

    </div>

    <?php
    include("template/menu.php");
    include("template/footer.php");
    ?>

    <script src='../assets/js/qrcode.min.js'></script>
    <script>
        $(document).ready(function() {
            var svg = new QRCode({
                content: String(<?= $usuario['ts'] ?>),
                join: true,
                width: '225',
                height: "225",
            }).svg();

            $("#qrCodeCard-Modal").html(svg)
        })
    </script>