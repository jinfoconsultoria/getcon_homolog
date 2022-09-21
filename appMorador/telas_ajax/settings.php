<?php
session_start();

// Exigir o arquivo de classes que armazena as métodos;
require_once '../../assets/php/classes.php';

// Instância um novo objeto do banco de dados e inicia a conexão;
$db   = new db();
$dbatual = $_SESSION['db_condominio'];
$dbgeral = `gestccon2`;
$link_condominio = $db->conecta_mysql($_SESSION['db_condominio']);
$link_geral = $db->conecta_mysql($dbgeral);

if ($link_condominio) {
    $acao = $_POST['acaoMorador'];

    if ($acao == "editFone") {
        $fone               = isset($_POST['valueUpdate']) ? $_POST['valueUpdate'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $ts               = isset($_POST['tsMorador']) ? $_POST['tsMorador'] : die('falha |divisor| Preencha todos os campos corretamente.');


        $query_condominio = "update usuario set 
            telefone = '$fone'

            where ts = '$ts'
        ";

        $sql_condominio = mysqli_query($link_condominio, $query_condominio);
        $sql_condominio = mysqli_query($link_geral, $query_condominio);
        if ($sql_condominio) {
            echo "sucesso |divisor| Achados e perdidos cadastrado com sucesso!";
        } else {
            if (!$sql_condominio) {
                echo "falha |divisor| Ocorreu um erro ao cadastrar o achados e perdidos. Query: $query_condominio";
            }
        }
    }
    if ($acao == "editEmail") {
        $email               = isset($_POST['valueUpdate']) ? $_POST['valueUpdate'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $ts               = isset($_POST['tsMorador']) ? $_POST['tsMorador'] : die('falha |divisor| Preencha todos os campos corretamente.');


        $query_condominio = "update usuario set 
            email = '$email'

            where ts = '$ts'
        ";

        $sql_condominio = mysqli_query($link_condominio, $query_condominio);
        $sql_condominio = mysqli_query($link_geral, $query_condominio);

        if ($sql_condominio) {
            echo "sucesso |divisor| Achados e perdidos cadastrado com sucesso!";
        } else {
            if (!$sql_condominio) {
                echo "falha |divisor| Ocorreu um erro ao cadastrar o achados e perdidos. Query: $query_condominio";
            }
        }
    }
    if ($acao == "editSenha") {
        $senha               = isset($_POST['valueUpdate']) ? md5($_POST['valueUpdate']) : die('falha |divisor| Preencha todos os campos corretamente.');
        $ts               = isset($_POST['tsMorador']) ? $_POST['tsMorador'] : die('falha |divisor| Preencha todos os campos corretamente.');


        $query_condominio = "update usuario set 
            senha = '$senha'

            where ts = '$ts'
        ";

        $sql_condominio = mysqli_query($link_condominio, $query_condominio);
        $sql_condominio = mysqli_query($link_geral, $query_condominio);

        if ($sql_condominio) {
            echo "sucesso |divisor| Achados e perdidos cadastrado com sucesso!";
        } else {
            if (!$sql_condominio) {
                echo "falha |divisor| Ocorreu um erro ao cadastrar o achados e perdidos. Query: $query_condominio";
            }
        }
    }
    if ($acao == "editStatusMsg") {
        $status               = isset($_POST['status']) ? $_POST['status'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $ts               = isset($_POST['tsMorador']) ? $_POST['tsMorador'] : die('falha |divisor| Preencha todos os campos corretamente.');


        if ($status === 'não') {

            $query_condominio = "update usuario set 
                recebe_mensagens = 'sim'

                where ts = '$ts'
            ";
        } elseif ($status === 'sim') {
            $query_condominio = "update usuario set 
                recebe_mensagens = 'não'

                where ts = '$ts'
            ";
        }

        $sql_condominio = mysqli_query($link_condominio, $query_condominio);
        $sql_condominio = mysqli_query($link_geral, $query_condominio);

        if ($sql_condominio) {
            echo "sucesso |divisor| Achados e perdidos cadastrado com sucesso!";
        } else {

            echo "falha |divisor| Ocorreu um erro ao cadastrar o achados e perdidos. Query: $query_condominio";
        }
    }
    if ($acao == "editImageMorador") {
        $imagem               = isset($_SESSION['imagemUp']) ? $_SESSION['imagemUp'] : die('falha |divisor| Preencha todos os campos corretamente.');; 
        $ts               = isset($_POST['tsMorador']) ? $_POST['tsMorador'] : die('falha |divisor| Preencha todos os campos corretamente.');

        $query_condominio = "update usuario set 
                imagem = '$imagem'

                where ts = '$ts'
            ";

        $sql_condominio = mysqli_query($link_condominio, $query_condominio);
        $sql_condominio = mysqli_query($link_geral, $query_condominio);

        if ($sql_condominio) {
            $value = $_SESSION['imagemUp'];
            echo $value;
        } else {

            echo "falha |divisor| Ocorreu um erro ao cadastrar o achados e perdidos. Query: $query_condominio";
        }
    }
    
}
