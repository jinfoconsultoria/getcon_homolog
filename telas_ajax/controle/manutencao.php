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
        $lom_id               = isset($_POST['local_qrcode-cadastro']) ? $_POST['local_qrcode-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $titulo          = isset($_POST['titulo-cadastro']) ? $_POST['titulo-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $dataCadastro              = isset($_POST['data-cadastro']) ? $_POST['data-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $bloco             = isset($_POST['bloco-cadastro']) ? $_POST['bloco-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $apto         = isset($_POST['apto-cadastro']) ? $_POST['apto-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $morador        = isset($_POST['morador-cadastro']) ? $_POST['morador-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $descricao          = isset($_POST['descricao-cadastro']) ? $_POST['descricao-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $tipo = isset($_POST['registro-cadastro']) ? $_POST['registro-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $horaentrada = date("H:i:s");
        $image = $_SESSION['imagemUp'];


        // INSERT NA TABELA MANUTENÇÃO
        $query_condominio = "insert into
                manutencao(lom_id, man_titulo,man_image,man_dataCadastro,man_tipo, man_horaCadastro, man_bloco, man_apto,man_morador,man_descricao,man_status)
                VALUES('$lom_id', '$titulo','$image', '$dataCadastro ','$tipo', '$horaentrada', '$bloco','$apto','$morador','$descricao','1')";

        $sql_condominio = mysqli_query($link_condominio, $query_condominio);

    
        if ($sql_condominio) {
            echo "sucesso |divisor| A manutenção foi cadastrado com sucesso!";
        } else {
            echo "falha |divisor| Ao cadastrar uma manutenção!";
        }
    }

    if ($acao === 'busca') {
        $nome = isset($_POST['nome-busca']) ? $_POST['nome-busca'] : '';
        $tipo = isset($_POST['tipo-busca']) ? $_POST['tipo-busca'] : '';
        $local = isset($_POST['local-qrcode']) ? $_POST['local-qrcode'] : '';
        $dataentrada = isset($_POST['data_entrada-busca']) ? $_POST['data_entrada-busca'] : '';

        $diaAtual = date('Y-m-d');

        $items = '*';

        $from = 'manutencao inner join bloco on bloco.id = manutencao.man_bloco inner join localManutencao on localManutencao.lom_id = manutencao.lom_id
            inner join statusManutencao on man_status = statusManutencao.id
            ';

        if ($nome) {
            print_r($db->fetch_assoc($dbatual, $items, $from, "man_titulo LIKE '%$nome%'"));
        } elseif ($tipo) {
            print_r($db->fetch_assoc($dbatual, $items, $from, "man_status = '$placa'"));
        } elseif ($local) {
            print_r($db->fetch_assoc($dbatual, $items, $from, "lom_id = '$local'"));
        } elseif ($dataentrada) {
            print_r($db->fetch_assoc($dbatual, $items, $from, "man_dataCadastro =  '$dataentrada'"));
        } else {
            print_r($db->fetch_assoc($dbatual, $items, $from, ""));
        }
    }

    if ($acao == 'logVisitante') {

        $idLog = trim($_POST['id'], 'visitante-');
        $idOldLog = $_POST['idLog'];

        $horaAtual = date("H:i:s");
        $dataAtual = date("Y-m-d");
        $idFunc = $_SESSION['id'];

        $sqlselect = "select moradorCadastro from visitante where id = '$idLog'";
        $query = mysqli_query($link_condominio, $sqlselect);
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
        if ($idOldLog) {
            $sqlDelete = "delete from visitanteLog where id ='$idOldLog'";
            $queryDelete = mysqli_query($link_condominio, $sqlDelete);
        }

        $queryUp = mysqli_query($link_condominio, $sqlupdate);

        if ($query) {
            echo "sucesso |divisor| Entrada registrada e autorizada!";
        } else {
            echo "falha |divisor| Erro ao autorizar!";
        }
    }


    // CADASTRO DE TIPO DE VISITANTE MODAL
    if ($acao === 'cadastroLocal-modal') {
        $local = isset($_POST['local']) ? $_POST['local'] : die('falha |divisor| Preencha todos os campos corretamente.');

        // INSERT NA TABELA VISITANTE
        $query_condominio = "insert into localManutencao(lom_nome,lom_status) VALUES('$local','1')";

        $sql_condominio = mysqli_query($link_condominio, $query_condominio);

        if ($sql_condominio) {
            echo "sucesso |divisor| O local $local foi cadastrado com sucesso!";
        } else {
            echo "falha |divisor| O local $local já possui cadastro!";
        }
    }
}
