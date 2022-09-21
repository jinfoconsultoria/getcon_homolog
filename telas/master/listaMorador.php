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

$resultado = mysqli_query($link_condominio,"select * from usuario where bloco = '$id_bloco' and apartamento = '$id_apartamento'");

echo "<option value=''>Selecione um Morador</option>";
while($rs_morador = mysqli_fetch_assoc($resultado)){
    $morador = $rs_morador['nome'];
    $morador_id = $rs_morador['id'];
    echo "<option value='$morador_id'>$morador</option>";
}

?>