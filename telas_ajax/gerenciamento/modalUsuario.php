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

    if ($acao === 'tipoAtestado') {
        $value = isset($_POST['value']) ? $_POST['value'] : die('falha | dividor | preencha o campo');

        $sql = "insert into tipoAtestado (ate_nome) VALUES ('$value')";

        $query = mysqli_query($link_condominio, $sql);

        if ($query) {
            print_r($db->fetch_assoc($dbatual, '*', 'tipoAtestado', ''));
        } else {
            echo 0;
        }
    }

    if ($acao === 'categoriaAtestado') {
        print_r($db->fetch_assoc($dbatual, '*', 'tipoAtestado', ''));
    }

    if ($acao === 'excluirTipoAtestado') {
        $id = isset($_POST['id']) ? $_POST['id'] : '';

        $sql = "delete from tipoAtestado where ate_id = ('$id')";

        $query = mysqli_query($link_condominio, $sql);

        if ($query) {
            echo 'sucesso';
        } else {
            echo 0;
        }
    }

    if ($acao === 'editarTipoAtestado') {
        $id = isset($_POST['id']) ? $_POST['id'] : '';
        $value = isset($_POST['value']) ? $_POST['value'] : '';

        $sql = "update tipoAtestado set
            ate_nome = '$value'

            where ate_id = '$id'
        ";

        $query = mysqli_query($link_condominio, $sql);

        if ($query) {
            print_r($db->fetch_assoc($dbatual, '*', 'tipoAtestado', ''));
        } else {
            echo 0;
        }
    }
}
