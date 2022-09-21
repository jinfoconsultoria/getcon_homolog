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

    if($acao == "cadastro"){
        if($tipo == "tipoDocumento"){
            $nome               = isset($_POST['nome-tipo']) ? $_POST['nome-tipo'] : die('falha |divisor| Preencha todos os campos corretamente.');
    
            $query_condominio = "INSERT INTO
                tipoDocumento(nome)
                VALUES('$nome')";
    
            $sql_condominio = mysqli_query($link_condominio, $query_condominio);
                
            if ($sql_condominio) {
                echo "sucesso |divisor| Tipo de documento $nome foi cadastrado com sucesso!";
            } else {
                if(!$sql_condominio) {
                    echo "falha |divisor| Ocorreu um erro ao cadastrar o  tipo de documento. Query: $query_condominio";
                }
            }

            print_r($db->fetch_assoc($dbatual, '*', 'tipoDocumento', ""));
        }


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

    if ($acao === 'buscar') {
        $assunto = isset($_POST['assunto-busca']) ? $_POST['assunto-busca'] : '';
        $tipo = isset($_POST['tipo-busca']) ? $_POST['tipo-busca'] : '';
        $bloco = isset($_POST['bloco-busca']) ? $_POST['bloco-busca'] : '';
        $dataI = isset($_POST['data_inicial-busca']) ? $_POST['data_inicial-busca'] : '';
        $dataF = isset($_POST['data_final-busca']) ? $_POST['data_final-busca'] : '';

        if ($assunto) {
            print_r($db->fetch_assoc($dbatual, '*', 'documentoAta inner join tipoDocumento on tipoDocumento.id = documentoAta.idTipo', " assunto LIKE '%$assunto%' "));
        }elseif($tipo){
            print_r($db->fetch_assoc($dbatual, '*', 'documentoAta inner join tipoDocumento on tipoDocumento.id = documentoAta.idTipo', " idTipo = '$tipo' "));
        }elseif($bloco){
            print_r($db->fetch_assoc($dbatual, '*', 'documentoAta inner join tipoDocumento on tipoDocumento.id = documentoAta.idTipo', " bloco = '$bloco' "));
        }elseif(isSet($dataI) and isSet($dataF)){
            print_r($db->fetch_assoc($dbatual, '*', 'documentoAta inner join tipoDocumento on tipoDocumento.id = documentoAta.idTipo', " dataCadastro between '$dataI' and '$dataF' "));
        }else {
            print_r($db->fetch_assoc($dbatual, '*', 'documentoAta inner join tipoDocumento on tipoDocumento.id = documentoAta.idTipo', ''));
        }

      
    }

    if($acao === "excel"){
        $exports = new exports();

        $i = 0;
        $result = mysqli_query($link_condominio, "select * from documentoAta");
        while($id = mysqli_fetch_assoc($result)){
            $aux1[$i] = $id;

            $i++;
        }
        
        $header = ['id','assunto','dataCadastro','arquivo','idBloco','idTipoDocumento','emailUsuario','horaCadastro'];
        

        $excel = $exports->excel($aux1,$header,'documento');
       
    }

    if($acao === "excel2"){
        $exports = new exports();

        $i = 0;
        $result = mysqli_query($link_condominio, "select * from tipoDocumento");
        while($id = mysqli_fetch_assoc($result)){
            $aux1[$i] = $id;

            $i++;
        }
        
        $header = ['id','nome'];
        

        $excel = $exports->excel($aux1,$header,'tipoDocumento');
       
    }
}else{
    echo "a";
}
?>