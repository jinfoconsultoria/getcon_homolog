<?php

$sql = "select * from visitante where moradorCadastro='{$_SESSION['id']}' order by nome asc ";

$query = mysqli_query($link_condominio, $sql);
while ($result = mysqli_fetch_assoc($query)) {
?>
    <div class="visitanteArea" data-id="visitante-<?= $result['id'] ?>">
        <div class="visitanteInfo">
            <h2><?= $result['nome'] ?></h4>
                <p>Ultima Liberação: <?= $result['dataLib'] ?></p>
                <p><?= $result['observacao'] ?></p>
        </div>
        <div class="visitanteButton">
            <button class="btn btn-primary authAccept" data-toggle="modal" data-target="#ModalAuth">AUTORIZAR</button>
            <!-- <button class="btn btn-primary">EDITAR</button> -->
        </div>
    </div>
<?php
}
?>