<?php
session_start();

// Exigir o arquivo de classes que armazena as métodos;
require_once '../../assets/php/classes.php';

// Instância um novo objeto do banco de dados e inicia a conexão;
$db   = new db();
$dbatual = $_SESSION['db_condominio'];
$link_condominio = $db->conecta_mysql($_SESSION['db_condominio']);

if($link_condominio){
    $acao = $_POST['acao'];

    if($acao == "cadastro"){
        $placa               = isset($_POST['placa-saida']) ? $_POST['placa-saida'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $visitante               = isset($_POST['visitante-saida']) ? $_POST['visitante-saida'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $identificacao          = isset($_POST['num_identificacao-saida']) ? $_POST['num_identificacao-saida'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $cartao              = isset($_POST['num_cartao-saida']) ? $_POST['num_cartao-saida'] : die('falha |divisor| Preencha todos os campos corretamente.');
        

        $dataSaida = date("Y-m-d");
        $horaSaida = date("H:i:s");

        $query_condominio = "INSERT INTO
            controleSaida (placa, visitante, identificacao, cartao, dataSaida,horaSaida)
            VALUES('$placa', '$visitante', '$identificacao', '$cartao', '$dataSaida', '$horaSaida')";

        $sql_condominio = mysqli_query($link_condominio, $query_condominio);
            
        if ($sql_condominio) {
            echo "sucesso |divisor| Os dados de saída foram cadastrado com sucesso!";
        } else {
            if(!$sql_condominio) {
                echo "falha |divisor| Ocorreu um erro ao cadastrar os dados de saída. Query: $query_condominio";
            }
        }
    }

}else{
    echo "a";
}
?>