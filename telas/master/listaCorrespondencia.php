<?php
session_start();

// Exigir o arquivo de classes que armazena as métodos;
require_once '../../assets/php/classes.php';

// Instância um novo objeto do banco de dados e inicia a conexão;
$db   = new db();
$dbatual = $_SESSION['db_condominio'];
$link_condominio = $db->conecta_mysql($_SESSION['db_condominio']);

$id_apartamento = $_GET['apartamento'];
$id_bloco = $_GET['bloco'];
$id_morador = $_GET['morador'];

$resultado = mysqli_query($link_condominio,"select * from correspondencia where bloco = '$id_bloco' and apto = '$id_apartamento' and morador = '$id_morador'");

echo "<option value=''>Selecione um Código de Rastreio</option>";
while($rs_cod = mysqli_fetch_assoc($resultado)){
    $rastreio = $rs_cod['codRastreio'];
    $id = $rs_cod['id'];
    echo "<option value='$id'>$rastreio</option>";
}

?>