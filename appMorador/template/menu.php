<?php
session_start();

$query = "select * from usuario where ts = '{$_SESSION['ts']}'";

$resultado = mysqli_query($link_condominio, $query);
$usuario = mysqli_fetch_assoc($resultado);

?>

<!-- * App Capsule -->

<style>
    .iconSize {
        font-size: 1.1rem;
    }
</style>

<!-- App Bottom Menu -->
<div class="appBottomMenu">
    <a href="index.php" class="item">
        <div class="col">
            <i class="fas fa-home iconSize"></i>
            <strong>Inicio</strong>
        </div>
    </a>
    <a href="tabelas.php" class="item">
        <div class="col">
            <i class="fas fa-bookmark iconSize"></i>
            <strong>Menu</strong>
        </div>
    </a>
    <a href="pages.php" class="item">
        <div class="col">
            <i class="fas fa-book iconSize"></i>
            <strong>Registros</strong>
        </div>
    </a>
    <a href="settings.php" class="item">
        <div class="col">
            <i class="fas fa-user iconSize"></i>
            <strong>Perfil</strong>
        </div>
    </a>
    <!--
        <a href="javascript:;" class="item" data-toggle="modal" data-target="#sidebarPanel">
            <div class="col">
                <ion-icon name="menu-outline"></ion-icon>
                <strong>Menu</strong>
            </div>
        </a>!-->
</div>
<!-- * App Bottom Menu -->

<!-- App Sidebar -->
<div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <!-- profile box -->
                <div class="profileBox pt-2 pb-2">
                    <div class="image-wrapper">
                        <img src="../../assets/uploads/imagens/usuario/<?= $usuario['imagem'] ?>" alt="image" class="imaged  w36" style="object-fit: cover;object-position: center;height: 36px;">
                    </div>
                    <div class="in">
                        <strong><?= $_SESSION['nome'] ?></strong>
                        <div class="text-muted"><?= mb_strimwidth($_SESSION['email'], 0, 20, "..."); ?></div>
                    </div>
                    <a href="#" class="btn btn-link btn-icon sidebar-close" data-dismiss="modal">
                        <i class="fas fa-times iconSize"></i>
                    </a>
                </div>
                <!-- * profile box -->
                <!-- balance -->
                <div class="sidebar-balance">
                    <div class="listview-title">Dia de Hoje</div>
                    <div class="in">
                        <h1 class="amount"><?= date("d/m/Y") ?></h1>
                    </div>
                </div>
                <!-- * balance -->

                <!-- action group -->
                <div class="action-group">
                    <a href="page.php?ref=/controle/reserva_ambiente&title=Reserva de Ambiente" class="action-button">
                        <div class="in">
                            <div class="iconbox">
                                <i class="fas fa-map-marker-alt iconSize"></i>
                            </div>
                            Reserva
                        </div>
                    </a>
                    <a href="app-index.html" class="action-button">
                        <div class="in">
                            <div class="iconbox">
                                <i class="fas fa-inbox iconSize"></i>
                            </div>
                            Correspondência
                        </div>
                    </a>
                    <a href="page.php?ref=gerenciamento/visitante&title=Autorização Visitante" class="action-button">
                        <div class="in">
                            <div class="iconbox">
                                <i class="fas fa-door-open iconSize"></i>
                            </div>
                            Visita
                        </div>
                    </a>
                </div>
                <!-- * action group -->

                <!-- menu -->
                <div class="listview-title mt-1">Menu</div>
                <ul class="listview flush transparent no-line image-listview">
                    <li>
                        <a href="index.php" class="item">
                            <div class="icon-box bg-primary">
                                <i class="fas fa-home iconSize"></i>
                            </div>
                            <div class="in">
                                Inicio
                                <span class="badge badge-primary">10</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="tabelas.php" class="item">
                            <div class="icon-box bg-primary">
                                <i class="fas fa-bookmark iconSize"></i>
                            </div>
                            <div class="in">
                                Menu
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="pages.html" class="item">
                            <div class="icon-box bg-primary">
                                <i class="fas fa-book iconSize"></i>
                            </div>
                            <div class="in">
                                Registros
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="settings.php" class="item">
                            <div class="icon-box bg-primary">
                                <i class="fas fa-user iconSize"></i>
                            </div>
                            <div class="in">
                                Perfil
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="cardMorador.php" class="item">
                            <div class="icon-box bg-primary">
                                <i class="fas fa-id-card-alt  iconSize"></i>
                            </div>
                            <div class="in">
                                Meu Cartão
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- * menu -->

                <!-- others -->
                <div class="listview-title mt-1">Outros</div>
                <ul class="listview flush transparent no-line image-listview">
                    <li>
                        <a href="settings.php" class="item">
                            <div class="icon-box bg-primary">
                                <i class="fas fa-cogs iconSize"></i>
                            </div>
                            <div class="in">
                                Configuração
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="component-messages.html" class="item">
                            <div class="icon-box bg-primary">
                                <i class="fas fa-ticket-alt iconSize"></i>
                            </div>
                            <div class="in">
                                Suporte
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="assets/php/logout.php" class="item">
                            <div class="icon-box bg-primary">
                                <i class="fas fa-sign-out-alt iconSize"></i>
                            </div>
                            <div class="in">
                                Sair
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- * others -->

                <!-- send money 
                    <d  iv class="listview-title mt-1">Send Money</div>
                    <ul class="listview image-listview flush transparent no-line">
                        <li>
                            <a href="#" class="item">
                                <img src="assets/img/sample/avatar/avatar2.jpg" alt="image" class="image">
                                <div class="in">
                                    <div>Artem Sazonov</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="item">
                                <img src="assets/img/sample/avatar/avatar4.jpg" alt="image" class="image">
                                <div class="in">
                                    <div>Sophie Asveld</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="item">
                                <img src="assets/img/sample/avatar/avatar3.jpg" alt="image" class="image">
                                <div class="in">
                                    <div>Kobus van de Vegte</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                     * send money -->

            </div>
        </div>
    </div>
</div>
<!-- * App Sidebar -->