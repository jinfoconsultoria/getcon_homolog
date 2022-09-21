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
        $nome               = isset($_POST['nome-cadastro']) ? $_POST['nome-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $documento          = isset($_POST['documento-cadastro']) ? $_POST['documento-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $placa              = isset($_POST['placa-cadastro']) ? $_POST['placa-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $perfil             = isset($_POST['tipo_visitante-cadastro']) ? $_POST['tipo_visitante-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $observacao         = isset($_POST['observacao-cadastro']) ? $_POST['observacao-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $dataentrada        = isset($_POST['data_entrada-cadastro']) ? $_POST['data_entrada-cadastro'] : date('Y-m-d');
        $morador            = isset($_POST['morador-cadastro']) ? $_POST['morador-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $horaentrada = date("H:i:s");
        $image = $_SESSION['imagemUp'];

        $sql_documento = "SELECT * FROM visitante where documento = '$documento'";
        $resultDocumento = mysqli_query($link_condominio, $sql_documento);

        $numrows = mysqli_num_rows($resultDocumento);

        if ($numrows == 0) {

            // INSERT NA TABELA VISITANTE
            $query_condominio = "INSERT INTO
                visitante(nome, documento, placa, perfil, observacao, moradorCadastro,image,datalib,statusLib)
                VALUES('$nome', '$documento', '$placa', '$perfil', '$observacao','$morador','$image','$dataentrada',1)";

            $sql_condominio = mysqli_query($link_condominio, $query_condominio);

            // INSERT NA TABELA LOG VISITANTE
            $sql_documento = "SELECT * FROM visitante where documento = '$documento'";
            $resultDocumento = mysqli_query($link_condominio, $sql_documento);

            $documento = mysqli_fetch_assoc($resultDocumento);

            $idVisitante = $documento['id'];

            $idFunc = $_SESSION['id'];

            $insertLog = "INSERT INTO
                visitanteLog(idVisitante,idMorador,dataEntrada,horaEntrada,status,func)
                VALUES('$idVisitante','$morador','$dataentrada','$horaentrada',1,'$idFunc')
            ";

            $sql_condominio2 = mysqli_query($link_condominio, $insertLog);
        } else {
            echo "falha |divisor| O visitante $nome já possui cadastro!";
        }

        if ($sql_condominio) {
            echo "sucesso |divisor| O visitante $nome foi cadastrado com sucesso!";
        }else{
            echo "falha |divisor| Falha ao cadastrar o visitante";
        }
    }

    if($acao === 'editar'){
        
        $idVisitante = isset($_POST['idVisitante']) ? $_POST['idVisitante'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $nome               = isset($_POST['nome-editar']) ? $_POST['nome-editar'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $documento          = isset($_POST['documento-editar']) ? $_POST['documento-editar'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $placa              = isset($_POST['placa-editar']) ? $_POST['placa-editar'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $perfil             = isset($_POST['tipo_visitante-editar']) ? $_POST['tipo_visitante-editar'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $observacao         = isset($_POST['observacao-editar']) ? $_POST['observacao-editar'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $dataentrada        = isset($_POST['data_entrada-editar']) ? $_POST['data_entrada-editar'] : date('Y-m-d');
        $image = isset($_POST['imagem']) ? $_POST['imagem'] : die('falha |divisor| Preencha todos os campos corretamente.');

        $queryUpdate = "update visitante 
                set
                    nome = '$nome',
                    image = '$image',
                    documento = '$documento',
                    placa = '$placa',
                    perfil = '$perfil',
                    observacao = '$observacao',
                    dataLib = '$dataentrada'

                    where id = '$idVisitante'
        
        ";

        $sqlUpdate = mysqli_query($link_condominio, $queryUpdate);

        if ($sqlUpdate) {
            echo "sucesso |divisor| O visitante $nome foi atualizado com sucesso!";
        }else{
            echo "falha |divisor| Falha ao atualizar o visitante";
        }
    }



    if ($acao === 'busca') {
        $nome = isset($_POST['nome-busca']) ? $_POST['nome-busca'] : '';
        $placa = isset($_POST['placa-busca']) ? $_POST['placa-busca'] : '';
        $documento = isset($_POST['documento-busca']) ? $_POST['documento-busca'] : '';
        $dataentrada = isset($_POST['data_entrada-busca']) ? $_POST['data_entrada-busca'] : '';

        $diaAtual = date('Y-m-d');
        $nextDay = date('Y-m-d', strtotime(' +1 day'));

        $items = 'visitante.documento as DocVisitante, bloco.bloco as BlocoNome, visitante.nome as NomeVisitante, 
        apartamento.apartamento as AptoNome, visitante.placa as placaMorador, visitante.id as IdVisitante, dataLib, statusLib';

        $from = 'visitante inner join usuario on usuario.id = moradorCadastro inner join bloco on usuario.bloco = bloco.id 
        inner join apartamento on apartamento.id = usuario.apartamento ';

        $where = "visitante.id not in (select idVisitante from visitanteLog where dataEntrada = '$diaAtual' and status = 1)";
       
        if ($nome) {
            print_r($db->fetch_assoc($dbatual, $items, $from, "visitante.nome LIKE '%$nome%'"));
        } elseif ($placa) {
            print_r($db->fetch_assoc($dbatual, $items, $from, "visitante.placa LIKE '%$placa%'"));
        } elseif ($documento) {
            print_r($db->fetch_assoc($dbatual, $items, $from, "visitante.documento LIKE '%$documento%'"));
        } elseif ($dataentrada) {
            print_r($db->fetch_assoc($dbatual, $items, $from, "dataLib =  '$dataentrada'"));

        } else {
            print_r($db->fetch_assoc($dbatual, $items, $from,""));
        }
    }

    if ($acao == 'logVisitante') {

        $idLog = trim($_POST['id'], 'visitante-');
        $idOldLog = $_POST['idLog'];

        $horaAtual = date("H:i:s");
        $dataAtual = date("Y-m-d");
        $idFunc = $_SESSION['id'];

        $sqlselect = "select moradorCadastro from visitante where id = '$idLog'";
        $query = mysqli_query($link_condominio,$sqlselect);
        $result = mysqli_fetch_assoc($query);

        $idMorador = $result['moradorCadastro'];

        $sql = "insert into visitanteLog(idVisitante,idMorador,dataEntrada,horaEntrada,status,func) 
                                  values('$idLog','$idMorador','$dataAtual','$horaAtual','1','$idFunc')            
        ";

        $query = mysqli_query($link_condominio, $sql);

        //UPDATE VISITANTE LIBERAÇÃO
        $sqlupdate = "update visitante set
                        dataLib = '$dataAtual',
                        statusLib = '1'

                        where id = '$idLog'
        ";

        //DELETE LOG ANTIGO
        if($idOldLog){
            $sqlDelete = "delete from visitanteLog where id ='$idOldLog'";
            $queryDelete = mysqli_query($link_condominio,$sqlDelete);
        }

        $queryUp = mysqli_query($link_condominio,$sqlupdate);

        if ($query) {
            echo "sucesso |divisor| Entrada registrada e autorizada!";
        } else {
            echo "falha |divisor| Erro ao autorizar!";
        }
    }


    // CADASTRO DE TIPO DE VISITANTE MODAL
    if ($acao === 'cadastroTipo-modal') {
        $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : die('falha |divisor| Preencha todos os campos corretamente.');

        // INSERT NA TABELA VISITANTE
        $query_condominio = "INSERT INTO
        tipoVisitante(nome)
        VALUES('$tipo')";

        $sql_condominio = mysqli_query($link_condominio, $query_condominio);

        if ($sql_condominio) {
            echo "sucesso |divisor| O tipo $nome foi cadastrado com sucesso!";
        } else {
            echo "falha |divisor| O tipo $nome já possui cadastro!";
        }
    }

    if ($acao == 'logVisitante-Auth') {

        $idLog = trim($_POST['idVisitante'], 'visitante-');
        $dataEntrada = isset($_POST['dataInicial']) ? $_POST['dataFinal'] : date('Y-m-d');
        $horaAtual = date("H:i:s");
        $idFunc = $_SESSION['id'];

        if ($dataEntrada == '') {
            $dataEntrada = date('Y-m-d');
        }

        $sqlselect = "select moradorCadastro from visitante where id = '$idLog'";
        $query = mysqli_query($link_condominio,$sqlselect);
        $result = mysqli_fetch_assoc($query);


        //ID MORADOR
        $idMorador = $result['moradorCadastro'];

        $sql = "insert into visitanteLog(idVisitante,idMorador,dataEntrada,horaEntrada,status,func) 
                                  values('$idLog','$idMorador','$dataEntrada','$horaAtual','2','$idFunc')            
        ";

        $query = mysqli_query($link_condominio, $sql);
    }

   
    if ($acao === 'editar-visitante') {
        $idVisitante = trim($_POST['id'], 'visitante-');

        $items = 'visitante.documento as DocVisitante, bloco.id as BlocoId, visitante.nome as NomeVisitante, 
        apartamento.id as AptoId, visitante.placa as placaMorador, visitante.id as IdVisitante, dataLib, statusLib,visitante.perfil,
        visitante.observacao,moradorCadastro,image
        ';

        $from = 'visitante inner join usuario on usuario.id = moradorCadastro inner join bloco on usuario.bloco = bloco.id 
        inner join apartamento on apartamento.id = usuario.apartamento';

        $where = "visitante.id = '$idVisitante'";
        print_r($db->fetch_assoc($dbatual, $items, $from, $where));
    }
} else {
    echo "a";
}
