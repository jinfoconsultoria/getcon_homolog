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
            Minhas Reservas
        </div>
        <div class="right">
            
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section mt-2">
            
            <?php
            
                $query = "select * from reserva_ambiente inner join ambiente on reserva_ambiente.ambiente = ambiente.id where morador = '{$_SESSION['id']}'";
                                
                $resultado = mysqli_query($link_condominio, $query);
                while($reservas = mysqli_fetch_assoc($resultado)){
                    include("itemReserva.php");
                }

            ?>

        </div>

    </div>

<?php
    include("template/menu.php");
    include("template/footer.php");
?>