<?php
session_start();

// Exigir o arquivo de classes que armazena as métodos;
require_once '../../assets/php/classes.php';

// Instância um novo objeto do banco de dados e inicia a conexão;
$db   = new db();
$dbatual = $_SESSION['db_condominio'];
$link_condominio = $db->conecta_mysql($_SESSION['db_condominio']);

if ($link_condominio) {
    $acao = $_POST['acao'];

    if ($acao == "cadastro") {
        $idLocal               = isset($_POST['idLocal']) ? $_POST['idLocal'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $image          = isset($_POST['srcImage']) ? $_POST['srcImage'] : die('falha |divisor| Preencha todos os campos corretamente.');


        // INSERT NA TABELA MANUTENÇÃO
        $query_condominio = "insert into
                qrCode(qrc_local, qrc_base64)
                VALUES('$idLocal', '$image')";

        $sql_condominio = mysqli_query($link_condominio, $query_condominio);

    
        if ($sql_condominio) {
            echo "sucesso |divisor| A manutenção foi cadastrado com sucesso!";
        } else {
            echo "falha |divisor| Ao cadastrar uma manutenção!";
        }
    }
}
