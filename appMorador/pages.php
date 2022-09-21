<?php

    session_start();

    include("template/topo.php");



    if (!isset($_SESSION['logado']) || !$_SESSION['logado'] === true) {

        header("location: login.php");

    }



    

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

            <a href="pages.php" class="headerButton goBack">

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



        <div class="listview-title mt-1">Controles</div>

        <ul class="listview image-listview mb-2">

            <?php

                $link = ['reservaAmbiente','correspondencia','portaria','manutencao','documento','achadosPerdidos','enquetes','classificado'];

                $icon = ['map-marker-alt','inbox','door-open','plug','file-alt','box','clipboard-list','list'];

                $name = ['Reserva de Ambiente','Correspondência','Visitante','Manutenção','Documento','Achados e Perdidos','Enquetes e Pesquisas','Classificado Condominio'];



                $count = count($link);

                $i = 0;

                

                while($count > $i){

            ?>

                <li>

                    <a href="#" id="<?= $link[$i]?>" class="item">

                        <div class="icon-box bg-primary">

                            <i style="font-size:1.1rem" class="fas fa-<?= $icon[$i]?>"></i>

                        </div>

                        <div class="in">

                            <?= $name[$i]?>

                        </div>

                    </a>

                </li>

                    

            <?php

                    $i++;

                }

            ?>

        </ul>



        <script>

            $(document).ready(function(){

                $("#reservaAmbiente").click(function(){

                    $('.divGeralPages').load("telas/controle/reserva_ambiente.php");

                    $(".pageTitle").text("Reserva de Ambiente");

                });



                $("#correspondencia").click(function(){

                    $('.divGeralPages').load("telas/controle/correspondencia.php");

                    $(".pageTitle").text("Corresponências");

                });



                $("#portaria").click(function(){

                    $('.divGeralPages').load("telas/gerenciamento/visitante.php");

                    $(".pageTitle").text("Autorização de Visitante");

                });



                $("#manutencao").click(function(){

                    $('.divGeralPages').load("telas/controle/manutencao.php");

                    $(".pageTitle").text("Manutenção");

                });



                $("#documento").click(function(){

                    $('.divGeralPages').load("telas/controle/documento.php");

                    $(".pageTitle").text("Documentos e Atas");

                });



                $("#achadosPerdidos").click(function(){

                    $('.divGeralPages').load("telas/controle/achados_perdidos.php");

                    $(".pageTitle").text("Achados e Perdidos");

                });



                $("#enquetes").click(function(){

                    $('.divGeralPages').load("telas/controle/enquetes.php");

                    $(".pageTitle").text("Enquetes e Pesquisas");

                });



                $("#classificado").click(function(){

                    $('.divGeralPages').load("telas/controle/classificado_condominio.php");

                    $(".pageTitle").text("Classificado Morador");

                });

                

            });

        </script>

    </div>

 





<?php

    include("template/menu.php");

    include("template/footer.php");

?>