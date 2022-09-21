<?php
session_start();

// Exigir o arquivo de classes que armazena as métodos;
require_once '../../../assets/php/classes.php';

// Instância um novo objeto do banco de dados e inicia a conexão;
$db   = new db();
$dbatual = $_SESSION['db_condominio'];
$link_condominio = $db->conecta_mysql($_SESSION['db_condominio']);

if ($link_condominio) {
    $acao = $_POST['acao'];

    //RETORNA FONE USUARIO NO MODAL
    if ($acao === 'usuario-fone-modal') {
        $ts = $_POST['idLog'];

        $items = 'telefone,telefone_opcional,nome,celular_opcional';
        $from = 'usuario';
        $where = "ts = '$ts'";

        print_r($db->fetch_assoc($dbatual, $items, $from, $where));
    }

    //RETORNA EMAIL USUARIO NO MODAL
    if ($acao === 'usuario-email-modal') {
        $ts = $_POST['idLog'];

        $items = 'email,email_opcional,nome';
        $from = 'usuario';
        $where = "ts = '$ts'";

        print_r($db->fetch_assoc($dbatual, $items, $from, $where));
    }

    //RETORNA FOTO USUARIO NO MODAL
    if ($acao === 'usuario-foto-modal') {
        $ts = $_POST['idLog'];

        $items = 'imagem';
        $from = 'usuario';
        $where = "ts = '$ts'";

        print_r($db->fetch_assoc($dbatual, $items, $from, $where));
    }

    //RETORNA CARD USUARIO NO MODAL
    if ($acao === 'usuario-card-modal') {
        $ts = $_POST['idLog'];

        $items = 'imagem, nome, email,perfil,categoria,usuario.bloco as bloco, 
        usuario.apartamento as apartamento, observacao, bloco.bloco as NomeBloco,
        apartamento.apartamento as NomeApartamento,telefone,ts';

        $from = 'usuario inner join bloco on bloco.id = usuario.bloco 
        inner join apartamento on apartamento.id = usuario.apartamento';

        $where = "ts = '$ts'";

        print_r($db->fetch_assoc($dbatual, $items, $from, $where));
    }

    if ($acao === 'tipoCorrespondencia') {
        $value = isset($_POST['value']) ? $_POST['value'] : die('falha | dividor | preencha o campo');

        $sql = "insert into tipoCorrespondencia (nome) VALUES ('$value')";

        $query = mysqli_query($link_condominio, $sql);

        if ($query) {
            print_r($db->fetch_assoc($dbatual, '*', 'tipoCorrespondencia', ''));
        } else {
            echo 0;
        }
    }

    if ($acao === 'categoriaCorrespondencia') {
        print_r($db->fetch_assoc($dbatual, '*', 'tipoCorrespondencia', ''));
    }

    if ($acao === 'excluirTipoCorrespondencia') {
        $id = isset($_POST['id']) ? $_POST['id'] : '';

        $sql = "delete from tipoCorrespondencia where id = ('$id')";

        $query = mysqli_query($link_condominio, $sql);

        if ($query) {
            print_r($db->fetch_assoc($dbatual, '*', 'tipoCorrespondencia', ''));
        } else {
            echo 0;
        }
    }

    if ($acao === 'editarTipoCorrespondencia') {
        $id = isset($_POST['id']) ? $_POST['id'] : '';
        $value = isset($_POST['value']) ? $_POST['value'] : '';

        $sql = "update tipoCorrespondencia set
            nome = '$value'

            where id = '$id'
        ";

        $query = mysqli_query($link_condominio, $sql);

        if ($query) {
            print_r($db->fetch_assoc($dbatual, '*', 'tipoCorrespondencia', ''));
        } else {
            echo 0;
        }
    }

    if ($acao === 'observacaoCorrespondencia-modal') {
        $id = isset($_POST['ts']) ? $_POST['ts'] : '';

        $items = 'observacao,remetente,dataBaixa,dataRecebimento,codRastreio';
        $from = 'correspondencia';
        $where = "codRastreio = '$id'";

        print_r($db->fetch_assoc($dbatual, $items, $from, $where));
    }
}
