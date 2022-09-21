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

    if($acao == "cadastro"){
        if($tipo == "visitante"){
            $nome                    = isset($_POST['nome-cadastro']) ? $_POST['nome-cadastro'] : die('afalha |divisor| Preencha todos os campos corretamente.');
            $horaCadastro               = date("H:i:s");
            $documento              = isset($_POST['documento-cadastro']) ? $_POST['documento-cadastro'] : die('bfalha |divisor| Preencha todos os campos corretamente.');
            $placa                      = isset($_POST['placa-cadastro']) ? $_POST['placa-cadastro'] : die('cfalha |divisor| Preencha todos os campos corretamente.');
            $tipo               = isset($_POST['tipo-cadastro']) ? $_POST['tipo-cadastro'] : die('dfalha |divisor| Preencha todos os campos corretamente.');
            $dataCadastro               = isset($_POST['data-cadastro']) ? $_POST['data-cadastro'] : die('efalha |divisor| Preencha todos os campos corretamente.');
            $observacao               = isset($_POST['observacao-cadastro']) ? $_POST['observacao-cadastro'] : die('ffalha |divisor| Preencha todos os campos corretamente.');
            $morador = $_SESSION['id'];


            $query_condominio = "INSERT INTO
                visitante(nome,documento,placa,perfil,observacao,dataentrada,horaentrada,moradorCadastro)
                VALUES('$nome','$documento','$placa','$tipo','$observacao','$dataCadastro','$horaCadastro',$morador)";
    
            $sql_condominio = mysqli_query($link_condominio, $query_condominio);
                
            if ($sql_condominio) {
                echo "sucesso |divisor| documento $assunto foi cadastrado com sucesso!";
            } else {
                if(!$sql_condominio) {
                    echo "falha |divisor| Ocorreu um erro ao cadastrar o documento. Query: $query_condominio";
                }
            }
        }
    }

   
}else{
    echo "a";
}
?>