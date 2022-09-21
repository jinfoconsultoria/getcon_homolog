<?php

session_start();

// Exigir o arquivo de classes que armazena as métodos;
require_once('../../assets/php/classes.php');

// Instância um novo objeto do banco de dados e inicia a conexão;
$db = new db();
$link = $db->conecta_mysql('gestccon2');

$email  = isset($_POST['email-login']) && !empty($_POST['email-login']) ? $_POST['email-login'] : die('falha |divisor| Preencha todos os campos corretamente.');
$senha  = isset($_POST['senha-login']) && !empty($_POST['senha-login']) ? md5($_POST['senha-login']) : die('falha |divisor| Preencha todos os campos corretamente.');
$morador = isset($_POST['tipo_usuario']) ? $_POST['tipo_usuario'] : 'admin';



$resultado = $db->num_rows('', '', 'usuario', "email = '$email' AND senha = '$senha' AND tipo_usuario = '$morador' and status ='ativo'");

if ($morador === 'morador') {
    if ($resultado === 1) {
        $dados_usuario = json_decode($db->fetch_assoc('', '*', 'usuario', "email = '$email' AND senha = '$senha' AND tipo_usuario = 'morador' and status ='ativo'"), true);

        $_SESSION['logado'] = true;
        $_SESSION['nome'] = $dados_usuario[0]['nome'];
        $_SESSION['imagem'] = $dados_usuario[0]['imagem'];
        $_SESSION['email'] = $dados_usuario[0]['email'];
        $_SESSION['db_condominio'] = $dados_usuario[0]['db_condominio'];
        $_SESSION['id'] = $dados_usuario[0]['id'];
        $_SESSION['bloco'] = $dados_usuario[0]['bloco'];
        $_SESSION['apartamento'] = $dados_usuario[0]['apartamento'];
        $_SESSION['ts'] = $dados_usuario[0]['ts'];



        echo 'sucesso |divisor| Você será redirecionado em alguns segundos.';
    } else {
        echo 'falha |divisor| Suas credenciais estão incorretas! Tente novamente.';
    }
}elseif($morador === 'admin'){
    if ($resultado === 1) {
        $dados_usuario = json_decode($db->fetch_assoc('', '*', 'usuario', "email = '$email' AND senha = '$senha' AND tipo_usuario = 'admin' and status ='ativo'"), true);

        $_SESSION['logado'] = true;
        $_SESSION['nome'] = $dados_usuario[0]['nome'];
        $_SESSION['imagem'] = $dados_usuario[0]['imagem'];
        $_SESSION['email'] = $dados_usuario[0]['email'];
        $_SESSION['db_condominio'] = $dados_usuario[0]['db_condominio'];
        $_SESSION['id'] = $dados_usuario[0]['id'];
        $_SESSION['bloco'] = $dados_usuario[0]['bloco'];
        $_SESSION['apartamento'] = $dados_usuario[0]['apartamento'];
        $_SESSION['ts'] = $dados_usuario[0]['ts'];



        echo 'sucesso |divisor| Você será redirecionado em alguns segundos.';
    } else {
        echo 'falha |divisor| Suas credenciais estão incorretas! Tente novamente.';
    }
}
