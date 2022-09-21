<div class="item">  
    <!-- card block -->
    <div class="card-block bg-primary">
        <div class="card-main">
            <div class="card-button dropdown">
                <button type="button" class="btn btn-link btn-icon" data-toggle="dropdown">
                    <ion-icon name="ellipsis-horizontal"></ion-icon>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="javacript:;">
                        <ion-icon name="pencil-outline"></ion-icon>Edit
                    </a>
                    <a class="dropdown-item" href="javacript:;">
                        <ion-icon name="close-outline"></ion-icon>Remove
                    </a>
                    <a class="dropdown-item" href="javacript:;">
                        <ion-icon name="arrow-up-circle-outline"></ion-icon>Upgrade
                    </a>
                </div>
            </div>
            <div class="balance">
                <span class="label">Reserva</span>
                <h1 class="title"><?= $reservas['titulo']?></h1>
            </div>
            <div class="in">
                <div class="card-number">
                    <span class="label">Ambiente de Reserva</span>
                    <span>
                        <?= $reservas['nome']?> - 
                        <?php
                            $date= date_create($reservas['data']);
                            echo date_format($date,"d/m/Y"); 
                        ?>
                    </span>
                </div>
                <div class="bottom">
                    <div class="card-expiry">
                        <span class="label">Entrada</span>
                        <span><?= $reservas['hora_inicial']?></span>
                    </div>
                    <div class="card-expiry">
                        <span class="label">Saída</span>
                        <span><?= $reservas['hora_final']?></span>
                    </div>
                    <div class="card-expiry">
                        <span class="label">Convidados</span>
                        <span><?= $reservas['quantidade']?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * card block -->
</div>