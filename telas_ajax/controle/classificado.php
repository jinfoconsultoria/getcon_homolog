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
    $tipo = $_POST['tipo'];
    
    if($tipo == "classificado"){
        if($acao == "cadastro"){
            $titulo               = isset($_POST['titulo-classificado']) ? $_POST['titulo-classificado'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $categoria               = isset($_POST['tipo-categoria']) ? $_POST['tipo-categoria'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $fornecedor               = isset($_POST['tipo-cadastro']) ? $_POST['tipo-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $valor               = isset($_POST['valor-cadastro']) ? $_POST['valor-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $texto               = isset($_POST['observacao-cadastro']) ? $_POST['observacao-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
    
            $query_condominio = "INSERT INTO
                classificadoCondominio(titulo,categoria,fornecedor,valor,texto)
                VALUES('$titulo',$categoria,$fornecedor ,$valor,'$texto')";
    
            $sql_condominio = mysqli_query($link_condominio, $query_condominio);
                
            if ($sql_condominio) {
                echo "sucesso |divisor| Reserva cadastrada com sucesso!";
            } else {
                if(!$sql_condominio) {
                    echo "falha |divisor| Ocorreu um erro ao cadastrar a Reserva. Query: $query_condominio";
                }
            }

            print_r($db->fetch_assoc($dbatual, '*', 'classificadoCondominio', ""));
        }
    }


    if($tipo == 'categoria'){
        if($acao == 'cadastro'){
            $nomeCategoria               = isset($_POST['nome-categoria']) ? $_POST['nome-categoria'] : die('falha |divisor| Preencha todos os campos corretamente.');

            $query_condominio = "INSERT INTO
                classificadoCategoria(categoria)
                VALUES('$nomeCategoria')";
    
            $sql_condominio = mysqli_query($link_condominio, $query_condominio);
                
            if ($sql_condominio) {
                echo "sucesso |divisor| Reserva cadastrada com sucesso!";
            } else {
                if(!$sql_condominio) {
                    echo "falha |divisor| Ocorreu um erro ao cadastrar a Reserva. Query: $query_condominio";
                }
            }

            print_r($db->fetch_assoc($dbatual, '*', 'classificadoFornecedor', ""));
        }
    }


/*
    if($tipo == 'status'){
        if($acao == 'cadastro'){
            $nomeStatus              = isset($_POST['nome-status']) ? $_POST['nome-status'] : die('falha |divisor| Preencha todos os campos corretamente.');

            $query_condominio = "INSERT INTO
                statusCorrespondencia(nome)
                VALUES('$nomeStatus')";
    
            $sql_condominio = mysqli_query($link_condominio, $query_condominio);
                
            if ($sql_condominio) {
                echo "sucesso |divisor| Reserva cadastrada com sucesso!";
            } else {
                if(!$sql_condominio) {
                    echo "falha |divisor| Ocorreu um erro ao cadastrar a Reserva. Query: $query_condominio";
                }
            }

            print_r($db->fetch_assoc($dbatual, '*', 'statusCorrespondencia', ""));
        }
    }

    if($tipo == 'baixa'){
        if($acao == 'cadastro'){
            $codBaixa              = isset($_POST['cod-baixa']) ? $_POST['cod-baixa'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $date = date("Y-m-d H:i:s");

            $select = mysqli_query($link_condominio,"select * from correspondencia where codRastreio = '$codBaixa'");
            $result = mysqli_fetch_assoc($select);
            if($result['status'] != 1){
                $update = mysqli_query($link_condominio,"update correspondencia set status = '1',dataBaixa = '$date' where codRastreio = '$codBaixa'");
            }

           


            if ($update) {
                echo "sucesso |divisor| baixa com sucesso!";
            } else {
                if(!$update) {
                    echo "falha |divisor| Ocorreu um erro ao dar baixa. Query: $update";
                }
            }

            print_r($db->fetch_assoc($dbatual, '*', 'statusCorrespondencia', ""));
        }
    }

    if($tipo == 'observacao'){
        if($acao == 'cadastro'){
            $bloco              = isset($_POST['bloco-observacao']) ? $_POST['bloco-observacao'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $apartamento              = isset($_POST['apto-observacao']) ? $_POST['apto-observacao'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $morador              = isset($_POST['morador-observacao']) ? $_POST['morador-observacao'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $observacao              = isset($_POST['observacao-observacao']) ? $_POST['observacao-observacao'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $codRastreio              = isset($_POST['cod-observacao']) ? $_POST['cod-observacao'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $data = date("Y-m-d H:i:s");

            $query_condominio = "INSERT INTO
                obsCorrespondencia(bloco,apto,morador,observacao,codRastreio,data)
                VALUES('$bloco','$apartamento','$morador','$observacao','$codRastreio','$data')";
    
            $sql_condominio = mysqli_query($link_condominio, $query_condominio);
                
            if ($sql_condominio) {
                echo "sucesso |divisor| Reserva cadastrada com sucesso!";
            } else {
                if(!$sql_condominio) {
                    echo "falha |divisor| Ocorreu um erro ao cadastrar a Reserva. Query: $query_condominio";
                }
            }

            print_r($db->fetch_assoc($dbatual, '*', 'obsCorrespondencia', ""));
        }
    }
*/
    if ($acao === 'buscar') {
        if($tipo == 'categoria'){

            $titulo = isset($_POST['titulo-classificado']) ? $_POST['titulo-classificado'] : '';
            
            $items = '*';
            $from = 'classificadoCondominio';

            if ($titulo) {
                print_r($db->fetch_assoc($dbatual, $items, $from, ''));
            }else {
                print_r($db->fetch_assoc($dbatual, $items, $from, ''));
            }
        }
    }

    
}else{
    echo "a";
}

?>