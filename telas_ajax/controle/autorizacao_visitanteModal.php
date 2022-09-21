<?php
session_start();

// Exigir o arquivo de classes que armazena as métodos;
require_once '../../assets/php/classes.php';

// Instância um novo objeto do banco de dados e inicia a conexão;
$db   = new db();
$dbatual = $_SESSION['db_condominio'];
$link_condominio = $db->conecta_mysql($_SESSION['db_condominio']);

if ($link_condominio) {
    $acao = $_POST['acao'];

    //RETORNA LOG DE VISITANTE NO MODAL
    if ($acao === 'logVisitanteModal') {
        $idMorador = trim($_POST['idLog'], 'visitante-');

        $items = 'dataEntrada,horaEntrada,usuario.nome as nomeMorador,bloco.bloco as blocoNome, apartamento.apartamento as apartamentoNome';
        $from = 'visitanteLog 
                inner join usuario on usuario.id = visitanteLog.idMorador 
                inner join bloco on bloco.id = usuario.bloco
                inner join apartamento on apartamento.id = usuario.apartamento';
        $where = "idVisitante = '$idMorador'";

        print_r($db->fetch_assoc($dbatual, $items, $from, $where));
    }

    //RETORNA LOG DE VISITANTE NO MODAL
    if ($acao === 'obsvisitanteModal') {
        $idMorador = trim($_POST['idLog'], 'visitante-');

        $items = 'observacao';
        $from = 'visitante';
        $where = "id = '$idMorador'";

        print_r($db->fetch_assoc($dbatual, $items, $from, $where));
    }

    //RETORNA FOTO USUARIO NO MODAL
    if ($acao === 'visitante-foto-modal') {
        $idMorador = trim($_POST['idLog'], 'visitante-');

        $items = 'image';
        $from = 'visitante';
        $where = "id = '$idMorador'";

        print_r($db->fetch_assoc($dbatual, $items, $from, $where));
    }
}
