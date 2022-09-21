<?php
    session_start();
    // Exigir o arquivo de classes que armazena as métodos;
    require_once '../assets/php/classes.php';

    // Instância um novo objeto do banco de dados e inicia a conexão;
    $db   = new db();
    $dbatual = $_SESSION['db_condominio'];
    $link_condominio = $db->conecta_mysql($_SESSION['db_condominio']);

    $query= mysqli_query($link_condominio,"select texto,assunto,avisoMorador.data,bloco.bloco from avisoMorador inner join bloco on avisoMorador.bloco = bloco.id order by avisoMorador.id desc limit 1");
    $result = mysqli_fetch_assoc($query);
    $date = $result['data'];

    $numrows = mysqli_num_rows($query);
    
    $newDate = date("d/m/Y",strtotime($date));

    if($numrows > 0){
?>



<div class="section full mt-4"> 
    <div class="section-heading padding">
        <h2 class="title">Informativo</h2>
        <a href="avisoCondominio.php" class="link">Ver Todas</a>
    </div>
    <div class="card" style="margin:0px 16px">
        <img src="assets/img/sample/photo/wide1.jpg" class="card-img-top" alt="image">
        <div class="card-body">
            <h5 class="card-title"><?= $result['assunto']?></h5>
            <h6 class="card-subtitle mb-1">Bloco<?= $result['bloco'] ?> - <?= $newDate?></h6>
            <p class="card-text"><?= $result['texto'] ?></p>
        </div>
    </div>
</div>

<?php
    }
?>