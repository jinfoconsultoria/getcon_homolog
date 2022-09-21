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



    <?php

    $query = "select * from usuario where ts = '{$_SESSION['ts']}'";



    $resultado = mysqli_query($link_condominio, $query);

    $usuario = mysqli_fetch_assoc($resultado);



    ?>



    <!-- loader -->

    <div id="loader">

        <img src="assets/img/logo-icon.png" alt="icon" class="loading-icon">

    </div>



    <?php

    include("components/index/header.php")

    ?>



    <div id="appCapsule">

        <!-- Wallet Card -->

        <?php

        include("components/index/walletCard.php")

        ?>



        <!-- Informação Condominios -->

        <?php

        include("infoCondominio.php");

        ?>



        <!-- my cards -->

        <?php

        include("components/index/reservasCard.php")

        ?>





        <!-- News -->

        <?php

        include("components/index/classificadosCard.php")

        ?>

    </div>





    <?php

    include("template/menu.php");

    include("template/footer.php");

    ?>