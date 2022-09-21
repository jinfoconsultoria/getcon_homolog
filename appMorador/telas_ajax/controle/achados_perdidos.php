<?php
session_start();

// Exigir o arquivo de classes que armazena as métodos;
require_once '../../../assets/php/classes.php';

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
           
    
            $query_condominio = "INSERT INTO
                achadosPerdidos(descricao,dataCadastro,tipo,local,status,imagem)
                VALUES ('$descricao','$data','$tipo','$local','0','0')";
    
            $sql_condominio = mysqli_query($link_condominio, $query_condominio);
                
            if ($sql_condominio) {
                echo "sucesso |divisor| Achados e perdidos cadastrado com sucesso!";
            } else {
                if(!$sql_condominio) {
                    echo "falha |divisor| Ocorreu um erro ao cadastrar o achados e perdidos. Query: $query_condominio";
                }
            }

            print_r($db->fetch_assoc($dbatual, '*', 'achadosPerdidos', ""));
        }
    }
}