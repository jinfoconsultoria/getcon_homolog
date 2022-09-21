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
        $nome               = isset($_POST['nome-cadastro']) ? $_POST['nome-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $documento          = isset($_POST['documento']) ? $_POST['documento'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $placa              = isset($_POST['placa']) ? $_POST['placa'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $perfil             = isset($_POST['perfil']) ? $_POST['perfil'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $observacao         = isset($_POST['observacao']) ? $_POST['observacao'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $dataentrada = date("Y-m-d");
        $horaentrada = date("H:i:s");

        $query_condominio = "INSERT INTO
            visitante(nome, documento, placa, perfil, observacao, dataentrada, horaentrada)
            VALUES('$nome', '$documento', '$placa', '$perfil', '$observacao','$dataentrada','$horaentrada')";

        $sql_condominio = mysqli_query($link_condominio, $query_condominio);
            
        if ($sql_condominio) {
            echo "sucesso |divisor| O visitante $nome foi cadastrado com sucesso!";
        } else {
            if(!$sql_condominio) {
                echo "falha |divisor| Ocorreu um erro ao cadastrar o visitante. Query: $query_condominio";
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

    if($acao === "excel"){
        $exports = new exports();

        $i = 0;
        $result = mysqli_query($link_condominio, "select * from visitante");
        while($id = mysqli_fetch_assoc($result)){
            $aux1[$i] = $id;

            $i++;
        }
        
        $header = ['id','nome','documento','placa','perfil','observacao','dataEntrada','horaEntrada'];
        

        $excel = $exports->excel($aux1,$header,'visitante');
       
    }
}else{
    echo "a";
}
?>