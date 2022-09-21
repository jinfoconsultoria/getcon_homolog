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
        $imagem = $_SESSION['imagem'];
        $valor          = isset($_POST['valor-cadastro']) ? $_POST['valor-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $duracao              = isset($_POST['duracao-cadastro']) ? $_POST['duracao-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $exibicao             = isset($_POST['exibicao-cadastro']) ? $_POST['exibicao-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $status         = isset($_POST['status-cadastro']) ? $_POST['status-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $padrao         = isset($_POST['padrão-cadastro']) ? $_POST['padrão-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');

        $query_condominio = "INSERT INTO
            ambiente(nome,imagem, valor, duracao, exibicao, status, padrao)
            VALUES('$nome','$imagem' ,'$valor', '$duracao', '$exibicao', '$status','$padrao')";

        $sql_condominio = mysqli_query($link_condominio, $query_condominio);
            
        if ($sql_condominio) {
            echo "sucesso |divisor| O ambiente $nome foi cadastrado com sucesso!";
        } else {
            if(!$sql_condominio) {
                echo "falha |divisor| Ocorreu um erro ao cadastrar o ambiente. Query: $query_condominio";
            }
        }
    }

    if ($acao === 'busca') {
        $nome = isset($_POST['nome-busca']) ? $_POST['nome-busca'] : '';

        if ($nome) {
            print_r($db->fetch_assoc($dbatual, '*', 'ambiente', "nome LIKE '%$nome%' "));
        }else {
            print_r($db->fetch_assoc($dbatual, '*', 'ambiente', ''));
        }

      
    }

    if($acao === "excel1"){
        $exports = new exports();

        $i = 0;
        $result = mysqli_query($link_condominio, "select * from ambiente");
        while($id = mysqli_fetch_assoc($result)){
            $aux1[$i] = $id;

            $i++;
        }
        
        $header = ['id','nome','valor','duração','status','exibição','padrão'];
        

        $excel = $exports->excel($aux1,$header,'ambiente');
       
    }
}else{
    echo "a";
}
?>