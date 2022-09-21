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
    
    if($tipo == "achados"){
        if($acao == "cadastro"){
            $descricao               = isset($_POST['descricao-cadastro']) ? $_POST['descricao-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $data               = isset($_POST['data-cadastro']) ? $_POST['data-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $local               = isset($_POST['local-cadastro']) ? $_POST['local-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $tipo               = isset($_POST['tipo-cadastro']) ? $_POST['tipo-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $imagem = $_SESSION['imagem'];
    
            $query_condominio = "INSERT INTO
                achadosPerdidos(descricao,dataCadastro,tipo,local,status,imagem)
                VALUES ('$descricao','$data','$tipo','$local','0','$imagem')";
    
            $sql_condominio = mysqli_query($link_condominio, $query_condominio);
                
            if ($sql_condominio) {
                echo "sucesso |divisor| Achados e perdidos cadastrado com sucesso!";
            } else {
                if(!$sql_condominio) {
                    echo "falha |divisor| Ocorreu um erro ao cadastrar o achados e perdidos. Query: $query_condominio";
                }
            }

            print_r($db->fetch_assoc($dbatual, '*', 'correspondencia', ""));
        }

        if ($acao === 'buscar') {
                $nome = isset($_POST['nome-busca']) ? $_POST['nome-busca'] : '';
                $dataI = isset($_POST['data_inicial-busca']) ? $_POST['data_inicial-busca'] : '';
                $dataF = isset($_POST['data_final-busca']) ? $_POST['data_final-busca'] : '';
                $tipo = isset($_POST['tipo-busca']) ? $_POST['tipo-busca'] : '';
                $status = isset($_POST['status-busca']) ? $_POST['status-busca'] : '';
    
                
                $items = '*';
                $from = 'achadosPerdidos'; 
    
                if ($nome) {
                    print_r($db->fetch_assoc($dbatual, $items, $from, " descricao like '%$nome%' "));
                }elseif($tipo){
                    print_r($db->fetch_assoc($dbatual, $items, $from, " tipoCorrespondencia = '$tipo' "));
                }elseif($status){
                    print_r($db->fetch_assoc($dbatual, $items, $from, " status = '$status' "));
                }elseif(isSet($dataI) and isSet($dataF)){
                    print_r($db->fetch_assoc($dbatual, $items, $from, " dataCadastro between '$dataI' and '$dataF' "));
                }else {
                    print_r($db->fetch_assoc($dbatual, $items, $from, ''));
                }

        }
    }

    if($tipo == 'tipo'){
        if($acao == 'cadastro'){
            $nomeTipo               = isset($_POST['nome-tipo']) ? $_POST['nome-tipo'] : die('falha |divisor| Preencha todos os campos corretamente.');

            $query_condominio = "INSERT INTO
                tipoAchadosPerdidos(nome)
                VALUES('$nomeTipo')";
    
            $sql_condominio = mysqli_query($link_condominio, $query_condominio);
                
            if ($sql_condominio) {
                echo "sucesso |divisor| Tipo cadastrado com sucesso!";
            } else {
                if(!$sql_condominio) {
                    echo "falha |divisor| Ocorreu um erro ao cadastrar o tipo. Query: $query_condominio";
                }
            }

            print_r($db->fetch_assoc($dbatual, '*', 'tipoAchadosPerdidos', ""));
        }
    }

    if($tipo == 'status'){
        if($acao == 'cadastro'){
            $nomeTipo               = isset($_POST['nome-status']) ? $_POST['nome-status'] : die('falha |divisor| Preencha todos os campos corretamente.');

            $query_condominio = "INSERT INTO
                statusAchadosPerdidos(nome)
                VALUES('$nomeTipo')";
    
            $sql_condominio = mysqli_query($link_condominio, $query_condominio);
                
            if ($sql_condominio) {
                echo "sucesso |divisor| Status cadastrado com sucesso!";
            } else {
                if(!$sql_condominio) {
                    echo "falha |divisor| Ocorreu um erro ao cadastrar o status. Query: $query_condominio";
                }
            }

            print_r($db->fetch_assoc($dbatual, '*', 'statusAchadosPerdidos', ""));
        }
    }


    if($acao === "excel1"){
        $exports = new exports();

        $i = 0;

        
        $result = mysqli_query($link_condominio, "select * from achadosPerdidos");
        while($id = mysqli_fetch_assoc($result)){
            $aux1[$i] = $id;

            $i++;
        }
        
        $header = ['id','descricao','imagem','dataCadastro','tipo','status'];
        

        $excel = $exports->excel($aux1,$header,'achados_perdidos');
       
    }
}else{
    echo "a";
}
?>