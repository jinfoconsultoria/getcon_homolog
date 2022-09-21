<?php
    session_start();
    include("template/topo.php");

    if (!isset($_SESSION['logado']) || !$_SESSION['logado'] === true) {
        header("location: login.php");
    }

    $page = $_GET['ref'];
    $title = $_GET['title']
?>

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
            Registro
        </div>
        <div class="right">
            
        </div>
    </div>

    <!-- App Capsule -->
    <div id="appCapsule" class="divGeralPages">


        <script>
            $(document).ready(function(){

                $('.divGeralPages').load("telas/<?=$page?>.php");
                $(".pageTitle").text("<?= $title?>");
                
            });
        </script>
    </div>
 


<?php
    include("template/menu.php");
    include("template/footer.php");
?>