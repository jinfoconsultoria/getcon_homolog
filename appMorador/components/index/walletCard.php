<div class="section wallet-card-section pt-1">
            <div class="wallet-card">
                <!-- Balance -->
                <div class="balance">
                    <div class="left">
                        <span class="title">Última Correspondência</span>

                        <?php

                        $query = "select * from correspondencia inner join tipoCorrespondencia on correspondencia.tipoCorrespondencia = tipoCorrespondencia.id where morador = '{$_SESSION['id']}' order by correspondencia.id desc limit 1";

                        $resultado = mysqli_query($link_condominio, $query);
                        $correspondencia = mysqli_fetch_assoc($resultado);

                        ?>


                        <h4 class="total"><?php echo $correspondencia['remetente']; ?></h4>
                        <h3><?= $correspondencia['nome'] ?></h3>
                    </div>

                </div>
                <!-- * Balance -->
                <!-- Wallet Footer -->
                <?php
                    include("menuWalletCard.php")
                ?>
                <!-- * Wallet Footer -->
            </div>
        </div>