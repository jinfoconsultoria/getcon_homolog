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
    $tipo = $_POST['tipo'];

    if ($tipo == "correspondencia") {
        if ($acao == "cadastro") {
            $remetente               = isset($_POST['remetente-cadastro']) ? $_POST['remetente-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $data_recebimento               = isset($_POST['data_recebimento-cadastro']) ? $_POST['data_recebimento-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $tipo_correspondencia               = isset($_POST['tipo_correspondencia-cadastro']) ? $_POST['tipo_correspondencia-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $bloco               = isset($_POST['bloco-cadastro']) ? $_POST['bloco-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $apto               = isset($_POST['apto-cadastro']) ? $_POST['apto-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $morador               = isset($_POST['morador-cadastro']) ? $_POST['morador-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $cod_rastreio               = isset($_POST['cod_rastreio-cadastro']) ? $_POST['cod_rastreio-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $observacao               = isset($_POST['observacao-cadastro']) ? $_POST['observacao-cadastro'] : '';

            $selectSql = "select * from correspondencia where codRastreio = '$cod_rastreio'";
            $query = mysqli_query($link_condominio, $selectSql);

            $numrows = mysqli_num_rows($query);

            if ($numrows >= 1) {
                echo "falha |divisor| Código de rastreio ja cadastrado";
            } else {



                $query_condominio = "insert into
                correspondencia(remetente,dataRecebimento,tipoCorrespondencia,bloco,apto,morador,codRastreio,observacao,status)
                VALUES('$remetente','$data_recebimento','$tipo_correspondencia','$bloco','$apto','$morador','$cod_rastreio','$observacao','0')";

                $sql_condominio = mysqli_query($link_condominio, $query_condominio);

                if ($sql_condominio) {
                    echo "sucesso |divisor| Correspondência cadastrada com sucesso!";
                } else {
                    echo "falha |divisor| Ocorreu um erro ao cadastrar a correspondência";
                }
            }
        }
    }

    if ($tipo == 'baixa') {
        if ($acao == 'cadastro') {
            $codBaixa              = isset($_POST['cod-baixa']) ? $_POST['cod-baixa'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $func = $_SESSION['id'];

            $date = date("Y-m-d H:i:s");

            $select = mysqli_query($link_condominio, "select * from correspondencia where codRastreio = '$codBaixa'");
            $result = mysqli_fetch_assoc($select);
            if ($result['status'] != 1) {
                $update = mysqli_query($link_condominio, "
                    update correspondencia set
                    status = '1',
                    dataBaixa = '$date',
                    funcionario = '$func'
                    
                    where codRastreio = '$codBaixa'");
            }



            if ($update) {
                echo "sucesso |divisor| baixa com sucesso!";
            } else {
                if (!$update) {
                    echo "falha |divisor| Ocorreu um erro ao dar baixa.";
                }
            }
        }

        if ($acao == 'excluir') {
            $codBaixa              = isset($_POST['cod-baixa']) ? $_POST['cod-baixa'] : die('falha |divisor| Preencha todos os campos corretamente.');

            $query = mysqli_query($link_condominio, "delete from correspondencia where codRastreio = '$codBaixa'");


            if ($query) {
                echo "sucesso |divisor| Correspondência excluida com sucesso!";
            } else {
                if (!$query) {
                    echo "falha |divisor| Ocorreu um erro ao excluir";
                }
            }
        }
    }

    if ($tipo == 'observacao') {
        if ($acao == 'cadastro') {
            $bloco              = isset($_POST['bloco-observacao']) ? $_POST['bloco-observacao'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $apartamento              = isset($_POST['apto-observacao']) ? $_POST['apto-observacao'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $morador              = isset($_POST['morador-observacao']) ? $_POST['morador-observacao'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $observacao              = isset($_POST['observacao-observacao']) ? $_POST['observacao-observacao'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $codRastreio              = isset($_POST['cod-observacao']) ? $_POST['cod-observacao'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $data = date("Y-m-d H:i:s");

            $query_condominio = "INSERT INTO
                obsCorrespondencia(bloco,apto,morador,observacao,codRastreio,data)
                VALUES('$bloco','$apartamento','$morador','$observacao','$codRastreio','$data')";

            $sql_condominio = mysqli_query($link_condominio, $query_condominio);

            if ($sql_condominio) {
                echo "sucesso |divisor| Reserva cadastrada com sucesso!";
            } else {
                if (!$sql_condominio) {
                    echo "falha |divisor| Ocorreu um erro ao cadastrar a Reserva. Query: $query_condominio";
                }
            }

            print_r($db->fetch_assoc($dbatual, '*', 'obsCorrespondencia', ""));
        }
    }

    if ($tipo === 'observacaoMorador') {
        if ($acao === 'select') {
            $id = isset($_POST['id']) ? $_POST['id'] : '';


            $items = '*';
            $from = 'obsUsuario';
            $where = "ts = '$id'";

            print_r($db->fetch_assoc($dbatual, $items, $from, $where));
        }

        if ($acao === 'cadastro') {
            $idMorador              = isset($_POST['id']) ? $_POST['id'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $valueObservacao              = isset($_POST['value']) ? $_POST['value'] : die('falha |divisor| Preencha todos os campos corretamente.');

            $data = date("Y-m-d H:i:s");

            $query_condominio = "INSERT INTO
                obsUsuario(ts,obsCorrespondencia,created_at)
                VALUES('$idMorador','$valueObservacao','$data')";

            $sql_condominio = mysqli_query($link_condominio, $query_condominio);

            if ($sql_condominio) {
                echo "sucesso |divisor| Observacao cadastrada com sucesso!";
            } else {

                echo "falha |divisor| Ocorreu um erro ao cadastrar a observação.  Query: $query_condominio";
            }
        }

        if ($acao === 'update') {
            $idMorador              = isset($_POST['id']) ? $_POST['id'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $valueObservacao              = isset($_POST['value']) ? $_POST['value'] : die('falha |divisor| Preencha todos os campos corretamente.');

            $data = date("Y-m-d H:i:s");

            $query_condominio = "
            update obsUsuario set
            
                obsCorrespondencia = '$valueObservacao',
                updated_at = '$data'

            where ts = '$idMorador'";

            $sql_condominio = mysqli_query($link_condominio, $query_condominio);

            if ($sql_condominio) {
                echo "sucesso |divisor| Observacao atualizado com sucesso!";
            } else {

                echo "falha |divisor| Ocorreu um erro ao atualizar a observação. Query: $query_condominio";
            }
        }
    }

    if ($acao === 'busca') {
        if ($tipo == 'busca') {

            $cod = isset($_POST['cod-busca']) ? $_POST['cod-busca'] : '';
            $status = isset($_POST['status-busca']) ? $_POST['status-busca'] : '0';
            $dataI = isset($_POST['data_inicial-busca']) ? $_POST['data_inicial-busca'] : '';
            $dataF = isset($_POST['data_final-busca']) ? $_POST['data_final-busca'] : '';
            $bloco = isset($_POST['bloco-busca']) ? $_POST['bloco-busca'] : '';
            $apto = isset($_POST['apto-busca']) ? $_POST['apto-busca'] : '';
            $morador = isset($_POST['morador-busca']) ? $_POST['morador-busca'] : '';
            $tipo = isset($_POST['tipo-busca']) ? $_POST['tipo-busca'] : '';

            $items = 'codRastreio,bloco.bloco,apartamento.apartamento,usuario.nome as morador,correspondencia.status,correspondencia.dataRecebimento,remetente,tipoCorrespondencia.nome,usuario.ts as ts ';
            $from = 'correspondencia inner join bloco on correspondencia.bloco = bloco.id inner join apartamento on correspondencia.apto = apartamento.id inner join usuario on correspondencia.morador = usuario.id inner join tipoCorrespondencia on correspondencia.tipoCorrespondencia = tipoCorrespondencia.id';


            if ($cod) {
                print_r($db->fetch_assoc($dbatual, $items, $from, " codRastreio = '$cod' "));
            } elseif ($tipo) {
                print_r($db->fetch_assoc($dbatual, $items, $from, " tipoCorrespondencia = '$tipo' "));
            } elseif ($bloco && $apto && $morador) {
                print_r($db->fetch_assoc($dbatual, $items, $from, " correspondencia.bloco = '$bloco' and correspondencia.apto = '$apto' and correspondencia.morador = '$morador' "));
            } elseif ($bloco && $apto) {
                print_r($db->fetch_assoc($dbatual, $items, $from, " correspondencia.bloco = '$bloco' and correspondencia.apto = '$apto' "));
            } elseif ($bloco) {
                print_r($db->fetch_assoc($dbatual, $items, $from, " correspondencia.bloco = '$bloco' "));
            } elseif ($status) {
                print_r($db->fetch_assoc($dbatual, $items, $from, " correspondencia.status = '$status' "));
            } elseif (isset($dataI) and isset($dataF)) {
                print_r($db->fetch_assoc($dbatual, $items, $from, " dataRecebimento between '$dataI' and '$dataF' and correspondencia.status = '$status' "));
            } else {
                print_r($db->fetch_assoc($dbatual, $items, $from, "correspondencia.status = '$status'"));
            }
        }
    }
} else {
    echo "a";
}
