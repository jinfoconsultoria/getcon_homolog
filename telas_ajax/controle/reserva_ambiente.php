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
        if($tipo == "reservaAmbiente"){
            $titulo               = isset($_POST['titulo-cadastro']) ? $_POST['titulo-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $data               = isset($_POST['data-cadastro']) ? $_POST['data-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $ambiente               = isset($_POST['ambiente-cadastro']) ? $_POST['ambiente-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $hora_inicial               = isset($_POST['hora_inicial-cadastro']) ? $_POST['hora_inicial-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $hora_final               = isset($_POST['hora_final-cadastro']) ? $_POST['hora_final-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $bloco               = isset($_POST['bloco-cadastro']) ? $_POST['bloco-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $apto               = isset($_POST['apto-cadastro']) ? $_POST['apto-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $morador               = isset($_POST['morador-cadastro']) ? $_POST['morador-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $seguranca               = isset($_POST['seguranca-cadastro']) ? $_POST['seguranca-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $status               = isset($_POST['status-cadastro']) ? $_POST['status-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $isento               = isset($_POST['isento-cadastro']) ? $_POST['isento-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $observacao               = isset($_POST['observacao-cadastro']) ? $_POST['observacao-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $convidados               = isset($_POST['convidados-cadastro']) ? $_POST['convidados-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $nome_convidados               = isset($_POST['nome_convidados-cadastro']) ? $_POST['nome_convidados-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $doc_convidados               = isset($_POST['doc_convidados-cadastro']) ? $_POST['doc_convidados-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $quantidade               = isset($_POST['quantidade-cadastro']) ? $_POST['quantidade-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $arquivo               = $_POST['arquivo-cadastro'];
    
            $query_condominio = "INSERT INTO
                reserva_ambiente(titulo,data,ambiente,hora_inicial,hora_final,bloco,apto,morador,seguranca,status,isento,observacao,convidados,nome_convidados,doc_convidados,arquivo,quantidade)
                VALUES('$titulo','$data','$ambiente','$hora_inicial','$hora_final','$bloco','$apto','$morador','$seguranca','$status','$isento','$observacao','$convidados','$nome_convidados','$doc_convidados','$arquivo','$quantidade')";
    
            $sql_condominio = mysqli_query($link_condominio, $query_condominio);
                
            if ($sql_condominio) {
                echo "sucesso |divisor| Reserva cadastrada com sucesso!";
            } else {
                if(!$sql_condominio) {
                    echo "falha |divisor| Ocorreu um erro ao cadastrar a Reserva. Query: $query_condominio";
                }
            }

            print_r($db->fetch_assoc($dbatual, '*', 'ambiente', ""));
        }
    }

    if ($acao === 'busca') {
        if($tipo == 'reservaAmbiente'){

            $ambiente = isset($_POST['ambiente-busca']) ? $_POST['ambiente-busca'] : '';
            $status = isset($_POST['status-busca']) ? $_POST['status-busca'] : '';
            $dataI = isset($_POST['data_inicial-busca']) ? $_POST['data_inicial-busca'] : '';
            $dataF = isset($_POST['data_final-busca']) ? $_POST['data_final-busca'] : '';
            $bloco = isset($_POST['bloco-busca']) ? $_POST['bloco-busca'] : '';
            $apto = isset($_POST['apto-busca']) ? $_POST['apto-busca'] : '';
            $morador = isset($_POST['morador-busca']) ? $_POST['morador-busca'] : '';

            

            if ($ambiente) {
                print_r($db->fetch_assoc($dbatual, 'ambiente.nome,reserva_ambiente.bloco,reserva_ambiente.apto,morador,reserva_ambiente.data,bloco.bloco,apartamento.apartamento,usuario.nome as morador', 'reserva_ambiente inner join ambiente on reserva_ambiente.ambiente = ambiente.id inner join bloco on reserva_ambiente.bloco = bloco.id inner join apartamento on reserva_ambiente.apto = apartamento.id inner join usuario on reserva_ambiente.morador = usuario.id', " ambiente = '$ambiente' "));
            }elseif($tipo){
                print_r($db->fetch_assoc($dbatual, 'ambiente.nome,reserva_ambiente.bloco,reserva_ambiente.apto,morador,reserva_ambiente.data,bloco.bloco,apartamento.apartamento,usuario.nome as morador', 'reserva_ambiente inner join ambiente on reserva_ambiente.ambiente = ambiente.id inner join bloco on reserva_ambiente.bloco = bloco.id inner join apartamento on reserva_ambiente.apto = apartamento.id inner join usuario on reserva_ambiente.morador = usuario.id', " status = '$status' "));
            }elseif($bloco){
                print_r($db->fetch_assoc($dbatual, 'ambiente.nome,reserva_ambiente.bloco,reserva_ambiente.apto,morador,reserva_ambiente.data,bloco.bloco,apartamento.apartamento,usuario.nome as morador', 'reserva_ambiente inner join ambiente on reserva_ambiente.ambiente = ambiente.id inner join bloco on reserva_ambiente.bloco = bloco.id inner join apartamento on reserva_ambiente.apto = apartamento.id inner join usuario on reserva_ambiente.morador = usuario.id', " bloco = '$bloco' "));
            }elseif($apto){
                print_r($db->fetch_assoc($dbatual, 'ambiente.nome,reserva_ambiente.bloco,reserva_ambiente.apto,morador,reserva_ambiente.data,bloco.bloco,apartamento.apartamento,usuario.nome as morador', 'reserva_ambiente inner join ambiente on reserva_ambiente.ambiente = ambiente.id inner join bloco on reserva_ambiente.bloco = bloco.id inner join apartamento on reserva_ambiente.apto = apartamento.id inner join usuario on reserva_ambiente.morador = usuario.id', " apto = '$apto' "));
            }elseif($morador){
                print_r($db->fetch_assoc($dbatual, 'ambiente.nome,reserva_ambiente.bloco,reserva_ambiente.apto,morador,reserva_ambiente.data,bloco.bloco,apartamento.apartamento,usuario.nome as morador', 'reserva_ambiente inner join ambiente on reserva_ambiente.ambiente = ambiente.id inner join bloco on reserva_ambiente.bloco = bloco.id inner join apartamento on reserva_ambiente.apto = apartamento.id inner join usuario on reserva_ambiente.morador = usuario.id', " morador = '$morador' "));
            }elseif(isSet($dataI) and isSet($dataF)){
                print_r($db->fetch_assoc($dbatual, 'ambiente.nome,reserva_ambiente.bloco,reserva_ambiente.apto,morador,reserva_ambiente.data,bloco.bloco,apartamento.apartamento,usuario.nome as morador', 'reserva_ambiente inner join ambiente on reserva_ambiente.ambiente = ambiente.id inner join bloco on reserva_ambiente.bloco = bloco.id inner join apartamento on reserva_ambiente.apto = apartamento.id inner join usuario on reserva_ambiente.morador = usuario.id', " data between '$dataI' and '$dataF' "));
            }else {
                print_r($db->fetch_assoc($dbatual, 'ambiente.nome,reserva_ambiente.bloco,reserva_ambiente.apto,morador,reserva_ambiente.data,bloco.bloco,apartamento.apartamento,usuario.nome as morador', 'reserva_ambiente inner join ambiente on reserva_ambiente.ambiente = ambiente.id inner join bloco on reserva_ambiente.bloco = bloco.id inner join apartamento on reserva_ambiente.apto = apartamento.id inner join usuario on reserva_ambiente.morador = usuario.id', ''));
            }
        }
    }

    if($acao === "excel1"){
        $exports = new exports();

        $i = 0;

        
        $result = mysqli_query($link_condominio, "select * from reserva_ambiente");
        while($id = mysqli_fetch_assoc($result)){
            $aux1[$i] = $id;

            $i++;
        }
        
        $header = ['id','titulo','data','ambiente','hora_inicial','hora_final','bloco','apto','morador','seguranca','status','isento','observacao','convidados','nome_convidados','doc_convidados','arquivo','quantidade'];
        

        $excel = $exports->excel($aux1,$header,'reserva_ambiente');
       
    }
}else{
    echo "a";
}
?>