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
        if($tipo == "reservaAmbiente"){
            $ambiente                    = isset($_POST['ambiente-cadastro']) ? $_POST['ambiente-cadastro'] : die('afalha |divisor| Preencha todos os campos corretamente.');
            $horaI              = isset($_POST['hora_inicio-cadastro']) ? $_POST['hora_inicio-cadastro'] : die('bfalha |divisor| Preencha todos os campos corretamente.');
            $horaF                      = isset($_POST['hora_fim-cadastro']) ? $_POST['hora_fim-cadastro'] : die('cfalha |divisor| Preencha todos os campos corretamente.');
            $convidados               = isset($_POST['convidados-cadastro']) ? $_POST['convidados-cadastro'] : die('dfalha |divisor| Preencha todos os campos corretamente.');
            $data               = isset($_POST['data-cadastro']) ? $_POST['data-cadastro'] : die('efalha |divisor| Preencha todos os campos corretamente.');
            $observacao               = isset($_POST['observacao-cadastro']) ? $_POST['observacao-cadastro'] : die('ffalha |divisor| Preencha todos os campos corretamente.');
            $morador = $_SESSION['id'];

            $usuario = mysqli_query($link_condominio,"select bloco,apartamento from usuario where id = '$morador'");
            $result = mysqli_fetch_assoc($usuario);

            $bloco = $result['bloco'];
            $apartamento = $result['apartamento'];

            $titulo = "Reserva Morador";

            $query_condominio = "INSERT INTO
            reserva_ambiente(titulo,data,ambiente,hora_inicial,hora_final,bloco,apto,morador,quantidade,observacao,seguranca,status,isento,convidados,nome_convidados,doc_convidados,arquivo)
            VALUES('$titulo','$data','$ambiente','$horaI','$horaF','$bloco','$apartamento','$morador','$convidados','$observacao','','','','','','','')";
    
            $sql_condominio = mysqli_query($link_condominio, $query_condominio);
                
            if ($sql_condominio) {
                echo "sucesso |divisor| documento $assunto foi cadastrado com sucesso!";
            } else {
                if(!$sql_condominio) {
                    echo "falha |divisor| Ocorreu um erro ao cadastrar a reserva de ambiente. Query: $query_condominio";
                }else{
                    echo "a";
                }
            }
        }
    }

   
}else{
    echo "a";
}
?>