<?php
session_start();

// Exigir o arquivo de classes que armazena as métodos;
require_once '../../assets/php/classes.php';

// Instância um novo objeto do banco de dados e inicia a conexão;
$db   = new db();
$dbatual = $_SESSION['db_condominio'];
$link_condominio = $db->conecta_mysql($_SESSION['db_condominio']);

$id_bloco = $_GET['bloco'];

$resultado = mysqli_query($link_condominio,"select * from apartamento where bloco = '$id_bloco'");

   
echo "<option value='' selected>Selecione um apartamento</option>";
while($rs_apartamento = mysqli_fetch_assoc($resultado)){
    $apartamento = $rs_apartamento['apartamento'];
    $apartamento_id = $rs_apartamento['id'];
    echo "<option value='$apartamento_id'>$apartamento</option>";
    
}

?>