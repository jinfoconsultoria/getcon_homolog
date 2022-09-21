<?php
session_start();

// Exigir o arquivo de classes que armazena as métodos;
require_once '../../assets/php/classes.php';

// Instância um novo objeto do banco de dados e inicia a conexão;
$db   = new db();
$acao = $_POST['acao'];
$tipo = $_POST['tipo'];

if ($tipo === 'condominio') {
    if ($acao === 'cadastro' && isset($_POST['database-cadastro'])) {
        $date               = new DateTime();
        $timestamp          = $date->getTimestamp();
        $database           = 'gestccon2_' . $_POST['database-cadastro'];
        $nome               = isset($_POST['nome-cadastro']) ? $_POST['nome-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $email              = isset($_POST['email-cadastro']) ? $_POST['email-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $email_reserva      = isset($_POST['email_reserva-cadastro']) ? $_POST['email_reserva-cadastro'] : 'nenhum';
        $site               = isset($_POST['site-cadastro']) ? $_POST['site-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $telefone           = isset($_POST['telefone-cadastro']) ? $_POST['telefone-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $cnpj               = isset($_POST['cnpj-cadastro']) ? $_POST['cnpj-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $logradouro         = isset($_POST['logradouro-cadastro']) ? $_POST['logradouro-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $tipo_logradouro    = isset($_POST['tipo_logradouro-cadastro']) ? $_POST['tipo_logradouro-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $numero_logradouro  = isset($_POST['numero_logradouro-cadastro']) ? $_POST['numero_logradouro-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $bairro             = isset($_POST['bairro-cadastro']) ? $_POST['bairro-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $cidade             = isset($_POST['cidade-cadastro']) ? $_POST['cidade-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $cep                = isset($_POST['cep-cadastro']) ? $_POST['cep-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $estado             = isset($_POST['estado-cadastro']) ? $_POST['estado-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $painel             = isset($_POST['painel-cadastro']) ? $_POST['painel-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $portal             = isset($_POST['portal-cadastro']) ? $_POST['portal-cadastro'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $lista_convidados   = isset($_POST['lista_convidados-cadastro']) ? $_POST['lista_convidados-cadastro'] : 'upload';
        $cartao             = isset($_POST['cartao-cadastro']) ? $_POST['cartao-cadastro'] : 'vertical';
        $validar_nascimento = isset($_POST['validar_nascimento-cadastro']) ? $_POST['validar_nascimento-cadastro'] : 'sim';
        $status             = isset($_POST['status-cadastro']) ? $_POST['status-cadastro'] : 'ativo';

        $db->criar_banco($database);
        $link            = $db->conecta_mysql('gestccon2');
        $link_condominio = $db->conecta_mysql($database);

        $query_condominio = "INSERT INTO
        geral(ts, bairro, cartao, cep, cidade, email, email_reserva, estado, lista_convidados, logradouro, nome, numero_logradouro, painel, site, telefone, tipo_logradouro, validar_nascimento)
        VALUES('$timestamp', '$bairro', '$cartao', '$cep', '$cidade', '$email', '$email_reserva', '$estado', '$lista_convidados', '$logradouro', '$nome', '$numero_logradouro', '$painel', '$site', '$telefone', '$tipo_logradouro', '$validar_nascimento')";
        $sql_condominio = mysqli_query($link_condominio, $query_condominio);

        $query = "INSERT INTO
        condominio(ts, cnpj, bairro, cep, cidade, email, estado, logradouro, nome, numero_logradouro, liberar_painel, site, telefone, tipo_logradouro, status, db_condominio)
        VALUES('$timestamp', '$cnpj', '$bairro', '$cep', '$cidade', '$email', '$estado', '$logradouro', '$nome', '$numero_logradouro', '$painel', '$site', '$telefone', '$tipo_logradouro', '$status', '$database')";
        $sql = mysqli_query($link, $query);

        if ($sql && $sql_condominio) {
            echo "sucesso |divisor| O condomínio $nome foi cadastrado com sucesso!";
        } else {
            if (!$sql) {
                echo "falha |divisor| Ocorreu um erro ao cadastrar o condomínio. Query: $query";
            } else if (!$sql_condominio) {
                echo "falha |divisor| Ocorreu um erro ao cadastrar o condomínio. Query: $query_condominio";
            }
        }
    }

    if ($acao === 'edicao') {
        $ts                          = isset($_POST['ts']) ? $_POST['ts'] : '';
        $database                    = isset($_POST['database-edicao']) ? $_POST['database-edicao'] : '';
        $dados['nome']               = isset($_POST['nome-edicao']) ? $_POST['nome-edicao'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $dados['cnpj']               = isset($_POST['cnpj-edicao']) ? $_POST['cnpj-edicao'] : '';
        $dados['email']              = isset($_POST['email-edicao']) ? $_POST['email-edicao'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $dados['email_reserva']      = isset($_POST['email_reserva-edicao']) ? $_POST['email_reserva-edicao'] : 'nenhum';
        $dados['site']               = isset($_POST['site-edicao']) ? $_POST['site-edicao'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $dados['telefone']           = isset($_POST['telefone-edicao']) ? $_POST['telefone-edicao'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $dados['logradouro']         = isset($_POST['logradouro-edicao']) ? $_POST['logradouro-edicao'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $dados['tipo_logradouro']    = isset($_POST['tipo_logradouro-edicao']) ? $_POST['tipo_logradouro-edicao'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $dados['numero_logradouro']  = isset($_POST['numero_logradouro-edicao']) ? $_POST['numero_logradouro-edicao'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $dados['bairro']             = isset($_POST['bairro-edicao']) ? $_POST['bairro-edicao'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $dados['cidade']             = isset($_POST['cidade-edicao']) ? $_POST['cidade-edicao'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $dados['cep']                = isset($_POST['cep-edicao']) ? $_POST['cep-edicao'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $dados['estado']             = isset($_POST['estado-edicao']) ? $_POST['estado-edicao'] : die('falha |divisor| Preencha todos os campos corretamente.');
        $dados['lista_convidados']   = isset($_POST['lista_convidados-edicao']) ? $_POST['lista_convidados-edicao'] : '';
        $dados['liberar_painel']     = isset($_POST['painel-edicao']) ? $_POST['painel-edicao'] : '';
        $dados['liberar_portal']     = isset($_POST['portal-edicao']) ? $_POST['portal-edicao'] : '';
        $dados['cartao']             = isset($_POST['cartao-edicao']) ? $_POST['cartao-edicao'] : '';
        $dados['validar_nascimento'] = isset($_POST['validar_nascimento-edicao']) ? $_POST['validar_nascimento-edicao'] : '';
        $dados['status']             = isset($_POST['status-edicao']) ? $_POST['status-edicao'] : 'ativo';

        $i                = 0;
        $query            = '';
        $query_condominio = '';
        foreach ($dados as $chave => $item) {
            if ($item && in_array($chave, array('email_reserva', 'lista_convidados', 'cartao', 'validar_nascimento'))) {
                $query_condominio .= ", $chave = '$item'";
                continue;
            } else if ($item && in_array($chave, array('status', 'cnpj', 'liberar_portal', 'liberar_painel'))) {
                $query .= ", $chave = '$item'";
                continue;
            }

            if ($item && $i === 0) {
                $query .= " $chave = '$item'";
                $query_condominio .= " $chave = '$item'";
            } else if ($item) {
                $query .= ", $chave = '$item'";
                $query_condominio .= ", $chave = '$item'";
            }
            $i++;
        }

        // die("falha |divisor| $query");
        $sql            = $db->update('gestccon2', 'condominio', $query, "ts = '$ts'");
        $sql_condominio = $db->update($database, 'geral', $query_condominio, "ts = '$ts'");

        if ($sql && $sql_condominio) {
            echo "sucesso |divisor| O condomínio " . $dados['nome'] . " foi atualizado com sucesso!";
        } else {
            echo "falha |divisor| Ocorreu um erro ao atualizar o condomínio. Query: $query";
        }
        ;
    }

    if ($acao === 'excluir') {
        $ts       = isset($_POST['ts']) ? $_POST['ts'] : '';
        $database = $db->fetch_assoc('', 'db_condominio', 'condominio', "ts = '$ts'");
        $database = json_decode($database, true)[0]['db_condominio'];

        if ($database === 'gestccon2') {
            die('falha |divisor| Você não pode excluir esse condomínio pois ele armazena informações cruciais do sistema.');
        }

        if ($database === 'gestccon2_testes' || $ts === '1598980193') {
            die('falha |divisor| Você não pode excluir esse condomínio pois ele pertence ao ambiente de testes.');
        }

        $sql_delete = $db->delete('', 'condominio', "ts = '$ts'");
        $sql_drop   = $db->drop($database);

        if ($sql_delete && $sql_drop) {
            echo "sucesso |divisor| O condomínio $nome foi excluído com sucesso!";
        } else {
            echo "falha |divisor| Ocorreu um erro ao excluir o condomínio. Query: $sql_delete";
        }
        ;
    }

    if ($acao === 'busca') {
        $nome = isset($_POST['nome-busca']) ? $_POST['nome-busca'] : '';

        if ($nome) {
            print_r($db->fetch_assoc('gestccon2', '*', 'condominio', "nome LIKE '%$nome%' "));
        } else {
            print_r($db->fetch_assoc('gestccon2', '*', 'condominio', ''));
        }
    }

    if ($acao === 'select') {
        $ts            = isset($_POST['ts']) ? $_POST['ts'] : '';
        $db_condominio = isset($_POST['db']) ? $_POST['db'] : '';

        if ($ts) {
            print_r($db->fetch_assoc('gestccon2', '*', 'condominio', "ts = '$ts' "));
        } else if ($db_condominio) {
            print_r($db->fetch_assoc($db_condominio, '*', 'geral', ''));
        } else {
            die("falha |divisor| Ocorreu um erro ao editar o condomínio.");
        }
    }
}

if ($tipo === 'bloco') {
    if ($acao === 'cadastro') {
        $database     = $_SESSION['db_condominio'];
        $bloco        = array_unique(array_map('ucwords', array_map('strtolower', array_map('trim', $_POST['bloco']))));
        $bloco_joined = join("', '", $bloco);
        $linhas       = $db->num_rows($database, '', 'bloco', "bloco in ('$bloco_joined')");
        if ($linhas > 0) {
            die('falha |divisor| Você está tentando inserir dados já existentes.');
        }

        if (!$bloco) {
            die('falha |divisor| Preencha todos os campos corretamente.');
        } else if ($bloco) {
            if (array_search('', $bloco) == true) {
                die('falha |divisor| Preencha todos os campos corretamente.');
            }
        }

        $dados = "bloco(bloco) VALUES";
        $i     = 0;
        foreach ($bloco as $key => $item) {
            if ($i === 0) {
                $dados .= "('$item')";
            } else {
                $dados .= ", ('$item')";
            }
            $i++;
        }

        $sql = $db->insert($database, $dados);

        if ($sql) {
            echo "sucesso |divisor| Bloco(s) cadastrados com sucesso!";
        } else {
            echo "falha |divisor| Ocorreu um erro ao cadastrar os bloco(s).";
        }
        ;
    }

    if ($acao === 'edicao') {
        $database     = $_SESSION['db_condominio'];
        $bloco_novo   = !empty($_POST['bloco_novo']) ? ucwords(strtolower(trim($_POST['bloco_novo']))) : die('falha |divisor| Preencha todos os campos corretamente.');
        $bloco_antigo = !empty($_POST['bloco_antigo']) ? ucwords(strtolower(trim($_POST['bloco_antigo']))) : die('falha |divisor| Preencha todos os campos corretamente.');
        $id           = $_POST['id'];
        $dados        = "bloco = '$bloco_novo'";

        $linhas = $db->num_rows($database, '', 'bloco', "bloco in ('$bloco_antigo')");
        if ($linhas > 0) {
            die('falha |divisor| Você está tentando inserir dados já existentes.');
        }

        $sql_bloco       = $db->update($database, 'bloco', $dados, "id = '$id'");
        $sql_apartamento = $db->update($database, 'apartamento', $dados, "bloco = '$bloco_antigo'");

        if ($sql_bloco && $sql_apartamento) {
            echo "sucesso |divisor| Bloco atualizado com sucesso!";
        } else {
            echo "falha |divisor| Ocorreu um erro ao atualizar o bloco.";
        }
        ;
    }

    if ($acao === 'excluir') {
        $database = $_SESSION['db_condominio'];
        $id       = $_POST['id'];
        $bloco    = $_POST['bloco'];

        $sql_bloco       = $db->delete($database, 'bloco', "id = '$id'");
        $sql_apartamento = $db->delete($database, 'apartamento', "bloco = '$bloco'");

        if ($sql_bloco && $sql_apartamento) {
            echo "sucesso |divisor| Bloco excluído com sucesso!";
        } else {
            echo "falha |divisor| Ocorreu um erro ao excluir o bloco.";
        }
        ;
    }

    if ($acao === 'select') {
        $db_condominio = $_SESSION['db_condominio'];

        if ($db_condominio) {
            print_r($db->fetch_assoc($db_condominio, '*', 'bloco', ''));
        } else {
            die("falha |divisor| Ocorreu um erro ao editar o condomínio.");
        }
    }
}

if ($tipo === 'apartamento') {
    if ($acao === 'cadastro') {
        $database = $_SESSION['db_condominio'];
        $bloco    = isset($_POST['bloco']) ? $_POST['bloco'] : die('falha |divisor| Preencha todos os campos corretamente.');

        $apartamento        = array_unique(array_map('ucwords', array_map('strtolower', array_map('trim', $_POST['apartamento']))));
        $apartamento_joined = join("', '", $apartamento);
        $linhas             = $db->num_rows($database, '', 'apartamento', "apartamento in ('$apartamento_joined')");

        if ($linhas > 0) {
            die('falha |divisor| Você está tentando inserir dados já existentes.');
        }

        if (!$apartamento) {
            die('falha |divisor| Preencha todos os campos corretamente.');
        } else if ($apartamento) {
            if (array_search('', $apartamento) == true) {
                die('falha |divisor| Preencha todos os campos corretamente.');
            }
        }

        $dados = "apartamento(apartamento, bloco) VALUES";
        $i     = 0;
        foreach ($apartamento as $key => $item) {
            if ($i === 0) {
                $dados .= "('$item', '$bloco')";
            } else {
                $dados .= ", ('$item', '$bloco')";
            }
            $i++;
        }

        $sql = $db->insert($database, $dados);

        if ($sql) {
            echo "sucesso |divisor| Categoria(s) cadastradas com sucesso!";
        } else {
            echo "falha |divisor| Ocorreu um erro ao cadastrar as categoria(s).";
        }
    }

    if ($acao === 'edicao') {
        $database    = $_SESSION['db_condominio'];
        $apartamento = !empty($_POST['apartamento']) ? ucfirst(strtolower(trim($_POST['apartamento']))) : die('falha |divisor| Preencha todos os campos corretamente.');
        $id          = $_POST['id'];

        $dados = "apartamento = '$apartamento'";

        $sql = $db->update($database, 'apartamento', $dados, "id = '$id'");

        if ($sql) {
            echo "sucesso |divisor| Apartamento atualizado com sucesso!";
        } else {
            echo "falha |divisor| Ocorreu um erro ao atualizar o apartamento.";
        }
        ;
    }

    if ($acao === 'excluir') {
        $database = $_SESSION['db_condominio'];
        $id       = $_POST['id'];

        $sql = $db->delete($database, 'apartamento', "id = '$id'");

        if ($sql) {
            echo "sucesso |divisor| Apartamento excluído com sucesso!";
        } else {
            echo "falha |divisor| Ocorreu um erro ao excluir o apartamento.";
        }
        ;
    }

    if ($acao === 'select') {
        $db_condominio = $_SESSION['db_condominio'];
        $bloco         = $_POST['bloco'];

        if ($db_condominio) {
            print_r($db->fetch_assoc($db_condominio, '*', 'apartamento', "bloco = '$bloco'"));
        } else {
            die("falha |divisor| Ocorreu um erro ao editar o condomínio.");
        }
    }
}

if ($acao === 'excel1') {
    $exports = new exports();

    $link            = $db->conecta_mysql('gestccon2');

    $i = 0;
    $result = mysqli_query($link, "select id,nome,email,cnpj,telefone,site,cep,status from condominio");
    while($id = mysqli_fetch_assoc($result)){
        $aux1[$i] = $id;

        $i++;
    }
    
    $header = ['id','nome','email','cnpj','telefone','site','cep','status'];

    $excel = $exports->excel($aux1,$header,'condominios');
   
}

if ($acao === 'excel2') {
    $exports = new exports();

    $link            = $db->conecta_mysql($_SESSION['db_condominio']);

    $i = 0;
    $result = mysqli_query($link, "select * from bloco");
    while($id = mysqli_fetch_assoc($result)){
        $aux1[$i] = $id;

        $i++;
    }
    
    $header = ['id','data','bloco'];

    $excel = $exports->excel($aux1,$header,'bloco');
   
}

if ($acao === 'excel3') {
    $exports = new exports();

    $link            = $db->conecta_mysql($_SESSION['db_condominio']);

    $i = 0;
    $result = mysqli_query($link, "select * from apartamento");
    while($id = mysqli_fetch_assoc($result)){
        $aux1[$i] = $id;

        $i++;
    }
    
    $header = ['id','dataCadastro','Bloco','Apartamento'];

    $excel = $exports->excel($aux1,$header,'apartamento');
   
}



