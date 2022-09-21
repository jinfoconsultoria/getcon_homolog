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
        $nome               = isset($_POST['nome-entrada']) ? $_POST['nome-entrada'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $tipo_entrada               = isset($_POST['morador_tipo-entrada']) ? $_POST['morador_tipo-entrada'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $documento          = isset($_POST['rg-entrada']) ? $_POST['rg-entrada'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $placa              = isset($_POST['placa-entrada']) ? $_POST['placa-entrada'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $cor             = isset($_POST['cor-entrada']) ? $_POST['cor-entrada'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $modelo         = isset($_POST['modelo-entrada']) ? $_POST['modelo-entrada'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $ocupantes              = isset($_POST['ocupantes-entrada']) ? $_POST['ocupantes-entrada'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $bloco             = isset($_POST['bloco_autorizado-entrada']) ? $_POST['bloco_autorizado-entrada'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $apartamento         = isset($_POST['apto_autorizado-entrada']) ? $_POST['apto_autorizado-entrada'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $morador             = isset($_POST['morador_autorizado-entrada']) ? $_POST['morador_autorizado-entrada'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $cartao         = isset($_POST['numero_cartao-entrada']) ? $_POST['numero_cartao-entrada'] : die('falha |divisor| Preencha todos os campos corretamente.');

        $dataentrada = date("Y-m-d");
        $horaentrada = date("H:i:s");

        $query_condominio = "INSERT INTO
            controleEntrada (nome, tipoEntrada, documento, placa, cor, modelo, ocupantes,bloco,apartamento,morador,cartao,dataEntrada,horaEntrada)
            VALUES('$nome', '$tipo_entrada', '$documento', '$placa', '$cor', '$modelo', '$ocupantes','$bloco','$apartamento','$morador','$cartao','$dataentrada','$horaentrada')";

        $sql_condominio = mysqli_query($link_condominio, $query_condominio);
            
        if ($sql_condominio) {
            echo "sucesso |divisor| Os dados de entrada foram cadastrado com sucesso!";
        } else {
            if(!$sql_condominio) {
                echo "falha |divisor| Ocorreu um erro ao cadastrar os dados de entrada. Query: $query_condominio";
            }
        }
    }

    if ($acao === 'busca') {
        $nome = isset($_POST['nome-busca']) ? $_POST['nome-busca'] : '';
        $placa = isset($_POST['placa']) ? $_POST['placa'] : '';
        $perfil = isset($_POST['perfil']) ? $_POST['perfil'] : '';
        $documento = isset($_POST['documento']) ? $_POST['documento'] : '';

        if ($nome) {
            print_r($db->fetch_assoc($dbatual, '*', 'visitante', "nome LIKE '%$nome%' "));
        }elseif($placa){
            print_r($db->fetch_assoc($dbatual, '*', 'visitante', "placa LIKE '%$placa%' "));
        }else {
            print_r($db->fetch_assoc($dbatual, '*', 'visitante', ''));
        }

      
    }
}else{
    echo "a";
}
?>