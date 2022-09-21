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
        if($tipo == "documento"){
            $assunto                    = isset($_POST['assunto-cadastro']) ? $_POST['assunto-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $horaCadastro               = date("H:i:s");
            $tipoDocumento              = isset($_POST['tipo-cadastro']) ? $_POST['tipo-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $bloco                      = isset($_POST['bloco-cadastro']) ? $_POST['bloco-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $dataCadastro               = isset($_POST['data-cadastro']) ? $_POST['data-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $emailUsuario = $_SESSION['email'];


            $query_condominio = "INSERT INTO
                documentoAta(assunto,dataCadastro,idTipo,bloco,horaCadastro,usuario)
                VALUES('$assunto','$dataCadastro','$tipoDocumento','$bloco','$horaCadastro','$emailUsuario')";
    
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