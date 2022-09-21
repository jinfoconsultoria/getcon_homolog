<?php
session_start();
// Exigir o arquivo de classes que armazena as métodos;
require_once '../../assets/php/classes.php';

// Instância um novo objeto do banco de dados e inicia a conexão;
$db = new db();
$tratamento = new tratamento();
$tipo = is_array($_POST['tipo']) ? $_POST['tipo'][0] : $_POST['tipo'];
$acao = is_array($_POST['acao']) ? $_POST['acao'][0] : $_POST['acao'];

if ($tipo === 'categoria') {
    if ($acao === 'cadastro') {
        $database = $_SESSION['db_condominio'];
        $categoria = array_unique(array_map('ucfirst', array_map('strtolower', array_map('trim', $_POST['categoria']))));
        $categoria = array_unique($tratamento->ucfirst($_POST['categoria'], false));
        $categoria_joined = join("', '", $categoria);
        $linhas = $db->num_rows($database, '', 'usuario_categoria', "categoria in ('$categoria_joined')");

        if ($linhas > 0) {
            die('falha |divisor| Você está tentando inserir dados já existentes.');
        }

        if (!$categoria) {
            die('falha |divisor| Preencha todos os campos corretamente.');
        } else {
            if (array_search('', $categoria) == true) {
                die('falha |divisor| Preencha todos os campos corretamente.');
            }
        }

        $dados = 'usuario_categoria(categoria) VALUES';
        $i = 0;
        foreach ($categoria as $key => $item) {
            if ($i === 0) {
                $dados .= "('$item')";
            } else {
                $dados .= ", ('$item')";
            }
            $i++;
        }

        $sql = $db->insert($database, $dados);

        if ($sql) {
            echo 'sucesso |divisor| Categoria(s) cadastradas com sucesso!';
        } else {
            echo 'falha |divisor| Ocorreu um erro ao cadastrar as categoria(s).';
        }
    }

    if ($_POST['acao'] === 'edicao') {
        $database = $_SESSION['db_condominio'];
        $categoria = !empty($_POST['categoria']) ? ucfirst(strtolower($_POST['categoria'])) : die('falha |divisor| Preencha todos os campos corretamente.');
        $id = $_POST['id'];

        $dados = "categoria = '$categoria'";

        $sql = $db->update($database, 'usuario_categoria', $dados, "id = '$id'");

        if ($sql) {
            echo 'sucesso |divisor| Categoria atualizada com sucesso!';
        } else {
            echo 'falha |divisor| Ocorreu um erro ao atualizada a categoria.';
        }
    }

    if ($_POST['acao'] === 'excluir') {
        $database = $_SESSION['db_condominio'];
        $id = $_POST['id'];

        $sql = $db->delete($database, 'usuario_categoria', "id = '$id'");

        if ($sql) {
            echo 'sucesso |divisor| Categoria excluída com sucesso!';
        } else {
            echo 'falha |divisor| Ocorreu um erro ao excluir a categoria.';
        }
    }

    if ($_POST['acao'] === 'select') {
        $db_condominio = isset($_POST['db']) ? $_POST['db'] : $_SESSION['db_condominio'];

        if ($db_condominio) {
            print_r($db->fetch_assoc($db_condominio, '*', 'usuario_categoria', ''));
        } else {
            die('falha |divisor| Ocorreu um erro ao editar o condomínio.');
        }
    }
}

if ($tipo === 'perfil') {
    if ($acao === 'cadastro') {
        $database = $_SESSION['db_condominio'];
        $perfil = array_unique(array_map('ucfirst', array_map('strtolower', array_map('trim', $_POST['perfil']))));
        $perfil_joined = join("', '", $perfil);
        $linhas = $db->num_rows($database, '', 'usuario_perfil', "perfil in ('$perfil_joined')");

        if ($linhas > 0) {
            die('falha |divisor| Você está tentando inserir dados já existentes.');
        }

        if (!$perfil) {
            die('falha |divisor| Preencha todos os campos corretamente.');
        } else {
            if (array_search('', $perfil) == true) {
                die('falha |divisor| Preencha todos os campos corretamente.');
            }
        }

        $dados = 'usuario_perfil(perfil) VALUES';
        $i = 0;
        foreach ($perfil as $key => $item) {
            if ($i === 0) {
                $dados .= "('$item')";
            } else {
                $dados .= ", ('$item')";
            }
            $i++;
        }

        $sql = $db->insert($database, $dados);

        if ($sql) {
            echo 'sucesso |divisor| Perfil(s) cadastradas com sucesso!';
        } else {
            echo 'falha |divisor| Ocorreu um erro ao cadastrar as perfil(s).';
        }
    }
    if ($_POST['acao'] === 'edicao') {
        $database = $_SESSION['db_condominio'];
        $id = $_POST['id'];
        $perfil = !empty($_POST['perfil']) ? ucfirst(strtolower(trim($_POST['perfil']))) : die('falha |divisor| Preencha todos os campos corretamente.');
        $linhas = $db->num_rows($database, '', 'usuario_perfil', "perfil = '$perfil'");
        if ($linhas > 0) {
            die('falha |divisor| Você está tentando inserir dados já existentes.');
        }

        $dados = "perfil = '$perfil'";

        $sql = $db->update($database, 'usuario_perfil', $dados, "id = '$id'");

        if ($sql) {
            echo 'sucesso |divisor| Perfil atualizado com sucesso!';
        } else {
            echo 'falha |divisor| Ocorreu um erro ao atualizar o perfil.';
        }
    }
    if ($_POST['acao'] === 'excluir') {
        $database = $_SESSION['db_condominio'];
        $id = $_POST['id'];

        $sql = $db->delete($database, 'usuario_perfil', "id = '$id'");

        if ($sql) {
            echo 'sucesso |divisor| Perfil excluída com sucesso!';
        } else {
            echo 'falha |divisor| Ocorreu um erro ao excluir a perfil.';
        }
    }
    if ($_POST['acao'] === 'select') {
        $db_condominio = isset($_POST['db']) ? $_POST['db'] : $_SESSION['db_condominio'];

        if ($db_condominio) {
            print_r($db->fetch_assoc($db_condominio, '*', 'usuario_perfil', ''));
        } else {
            die('falha |divisor| Ocorreu um erro ao editar o condomínio.');
        }
    }
}

if ($tipo === 'usuario') {
    $tipo_usuario = is_array($_POST['tipo_usuario']) ? $_POST['tipo_usuario'][0] : $_POST['tipo_usuario'];

    if ($tipo_usuario === 'admin') {
        if ($acao === 'cadastro') {
            $date = new DateTime();
            $timestamp = $date->getTimestamp();
            $database = isset($_SESSION['db_condominio']) ? $_SESSION['db_condominio'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $nome = isset($_POST['nome']) ? ucwords(strtolower(trim($_POST['nome']))) : die('falha |divisor| Preencha todos os campos corretamente.');
            $imagem = $tratamento->strtolower($_POST['imagem'], true);
            $email = isset($_POST['email']) ? strtolower(trim($_POST['email'])) : die('falha |divisor| Preencha todos os campos corretamente.');
            $telefone = isset($_POST['telefone']) ? strtolower(trim($_POST['telefone'])) : null;
            $senha = isset($_POST['senha']) ? md5($_POST['senha']) : die('falha |divisor| Preencha todos os campos corretamente.');
            $perfil = isset($_POST['perfil']) ? ucfirst(strtolower(trim($_POST['perfil']))) : die('falha |divisor| Preencha todos os campos corretamente.');
            $categoria = "";
            $acesso_site = isset($_POST['acesso_site']) ? strtolower(trim($_POST['acesso_site'])) : die('falha |divisor| Preencha todos os campos corretamente.');
            $permissao = isset($_POST['liberar_permissao']) ? strtolower(trim($_POST['liberar_permissao'])) : die('falha |divisor| Preencha todos os campos corretamente.');
            $status = isset($_POST['status']) ? strtolower(trim($_POST['status'])) : die('falha |divisor| Preencha todos os campos corretamente.');
            $tipo_usuario = strtolower(trim($tipo_usuario));

            $linhas_email = $db->num_rows($database, '', 'usuario', "email = '$email'");
            $linhas_email_senha = $db->num_rows($database, '', 'usuario', "email = '$email' AND senha = '$senha'");

            if ($linhas_email_senha > 0) {
                die('falha |divisor| Já existe um usuário com esse email e senha.');
            }

            $dados = "usuario(ts, nome, imagem, email, senha, perfil, categoria, acesso_site, liberar_permissao, tipo_usuario, status, telefone)
                VALUES('$timestamp', '$nome', '$imagem', '$email', '$senha', '$perfil', '$categoria', '$acesso_site', '$permissao', '$tipo_usuario', '$status' ,'$telefone')";
            $dados_main = "usuario(ts, nome, imagem, email, senha, perfil, categoria, acesso_site, liberar_permissao, tipo_usuario, status, db_condominio, telefone)
                VALUES('$timestamp', '$nome', '$imagem', '$email', '$senha', '$perfil', '$categoria', '$acesso_site', '$permissao', '$tipo_usuario', '$status', '$database','$telefone')";

            $sql = $db->insert($database, $dados);
            $sql_main = $db->insert('gestccon2', $dados_main);

            if ($sql && $sql_main && $linhas_email > 0) {
                echo 'alerta |divisor| O usuário foi cadastrado com sucesso, mas já existem usuários com esse email.';
            } elseif ($sql && $sql_main) {
                echo 'sucesso |divisor| Usuário cadastrado com sucesso!';
            } else {
                echo 'falha |divisor| Ocorreu um erro ao cadastrar o usuário.';
            }
        }
        if ($_POST['acao'] === 'edicao') {
            $database = isset($_SESSION['db_condominio']) ? $_SESSION['db_condominio'] : die('falha |divisor| Erro ao selecionar condomínio.');
            $ts = $tratamento->ucwords($_POST['ts'], true);
            $nome = $tratamento->ucwords($_POST['nome'], true);
            $imagem = $tratamento->strtolower($_POST['imagem'], true);
            $email = $tratamento->strtolower($_POST['email'], true);
            $telefone = $tratamento->strtolower($_POST['telefone'], true);

            //QUERY VERIFICAÇÃO DA SENHA

            $link_condominio = $db->conecta_mysql($database);

            $queryUsuario = "select * from usuario where ts = '$ts'";
            $sql_condominio = mysqli_query($link_condominio, $queryUsuario);

            $result = mysqli_fetch_assoc($sql_condominio);
            $senhaAtual = $result['senha'];

            $senhaAtual === $_POST['senha'] ? $senha = $senhaAtual : $senha = $tratamento->md5($_POST['senha'], true);

            $perfil = $tratamento->ucfirst($_POST['perfil'], true);
            $categoria = "";
            $acesso_site = $tratamento->strtolower($_POST['acesso_site'], true);
            $permissao = $tratamento->strtolower($_POST['liberar_permissao'], true);
            $status = $tratamento->strtolower($_POST['status'], true);
            $tipo_usuario = $tratamento->strtolower($tipo_usuario, true);

            $linhas_email = $db->num_rows($database, '', 'usuario', "email = '$email' AND ts != '$ts'");
            $linhas_email_senha = $db->num_rows($database, '', 'usuario', "email = '$email' AND senha = '$senha' AND ts != '$ts'");
            if ($linhas_email_senha > 0) {
                die('falha |divisor| Já existe um usuário com esse email e senha.');
            }

            $dados = "nome = '$nome', imagem = '$imagem',telefone = '$telefone' ,email = '$email', senha = '$senha', perfil = '$perfil', categoria = '$categoria', acesso_site = '$acesso_site', liberar_permissao = '$permissao', status = '$status'";

            $sql = $db->update($database, 'usuario', $dados, "ts = '$ts'");
            $sql_main = $db->update('gestccon2', 'usuario', $dados, "ts = '$ts'");

            if ($sql) {
                echo 'sucesso |divisor| Perfil atualizado com sucesso!';
            } else {
                echo 'falha |divisor| Ocorreu um erro ao atualizar o perfil.';
            }
        }
        if ($_POST['acao'] === 'excluir') {
            $database = $_SESSION['db_condominio'];
            $ts = $_POST['ts'];

            $sql = $db->delete($database, 'usuario', "ts = '$ts'");

            if ($sql) {
                echo 'sucesso |divisor| Perfil excluída com sucesso!';
            } else {
                echo 'falha |divisor| Ocorreu um erro ao excluir a perfil.';
            }
        }
        if ($_POST['acao'] === 'select') {
            $db_condominio = isset($_POST['db']) ? $_POST['db'] : $_SESSION['db_condominio'];
            $ts = isset($_POST['ts']) ? $_POST['ts'] : die('falha |divisor| Ocorreu um erro ao editar o usuário.');

            

            if ($db_condominio) {
                print_r($db->fetch_assoc($db_condominio, '*', 'usuario', "ts = '$ts'"));
            } else {
                die('falha |divisor| Ocorreu um erro ao editar o condomínio.');
            }
        }
    }

    if ($tipo_usuario === 'morador') {
        if ($acao === 'cadastro') {
            $date = new DateTime();
            $tipo_usuario = ucfirst(strtolower(trim($tipo_usuario)));
            $database = isset($_SESSION['db_condominio']) ? $_SESSION['db_condominio'] : die('falha |divisor| Preencha todos os campos corretamente.');

            $usuario['ts'] = $date->getTimestamp();
            $usuario['tipo_usuario'] = isset($_POST['tipo_usuario']) ? strtolower(trim($_POST['tipo_usuario'][0])) : die('falha |divisor| Preencha todos os campos corretamente.');
            $usuario['nome'] = isset($_POST['nome']) ? ucwords(strtolower(trim($_POST['nome'][0]))) : die('falha |divisor| Preencha todos os campos corretamente.');
            $usuario['email'] = isset($_POST['email']) ? strtolower(trim($_POST['email'][0])) : '';
            $usuario['imagem'] = isset(array_filter($tratamento->strtolower($_POST['imagem'], true))[0]) ? array_filter($tratamento->strtolower($_POST['imagem'], true))[0] : 'nouser.jpg';
            $usuario['senha'] = isset($_POST['senha']) ? md5($_POST['senha'][0]) : die('falha |divisor| Preencha todos os campos corretamente.');
            $usuario['telefone'] = isset($_POST['telefone']) ? trim($_POST['telefone'][0]) : '';
            $usuario['bloco'] = isset($_POST['bloco']) ? ucwords(strtolower(trim($_POST['bloco'][0]))) : die('falha |divisor| Preencha todos os campos corretamente.');
            $usuario['apartamento'] = isset($_POST['apartamento']) ? ucwords(strtolower(trim($_POST['apartamento'][0]))) : die('falha |divisor| Preencha todos os campos corretamente.');
            $usuario['recebe_mensagens'] = isset($_POST['recebe_mensagens']) ? strtolower(trim($_POST['recebe_mensagens'][0])) : die('falha |divisor| Preencha todos os campos corretamente.');
            $usuario['realiza_reservas'] = isset($_POST['liberar_reservas']) ? strtolower(trim($_POST['liberar_reservas'][0])) : die('falha |divisor| Preencha todos os campos corretamente.');
            $usuario['categoria'] = isset($_POST['categoria']) ? ucfirst(strtolower(trim($_POST['categoria'][0]))) : die('falha |divisor| Preencha todos os campos corretamente.');
            $usuario['status'] = isset($_POST['status']) ? strtolower(trim($_POST['status'][0])) : die('falha |divisor| Preencha todos os campos corretamente.');
            $usuario['telefone_opcional'] = isset($_POST['telefone_opcional']) ? array_map('trim', $_POST['telefone_opcional']) : '';
            $usuario['celular_opcional'] = isset($_POST['celular_opcional']) ? array_map('trim', $_POST['celular_opcional']) : '';
            $usuario['email_opcional'] = isset($_POST['email_opcional']) ? array_map('strtolower', array_map('trim', $_POST['email_opcional'])) : '';

            // echo isset($_POST['imagem']) ? $_POST['imagem'] : 'nouser';

            if (isset($_POST['placa']) && isset($_POST['modelo']) && isset($_POST['cor'])) {
                $i = 0;
                $usuario['veiculo'] = [];
                foreach ($_POST['placa'] as $chave => $item) {
                    array_push(
                        $usuario['veiculo'],
                        (object) [
                            'placa' => strtoupper(trim($_POST['placa'][$i])),
                            'modelo' => ucfirst(strtolower(trim($_POST['modelo'][$i]))),
                            'cor' => ucfirst(strtolower(trim($_POST['cor'][$i]))),
                        ]
                    );
                    $i++;
                }
                unset($i);
            }
            if (isset($_POST['nome_bicicleta']) && isset($_POST['localizacao_bicicleta'])) {
                $i = 0;
                $usuario['bicicleta'] = [];
                foreach ($_POST['nome_bicicleta'] as $chave => $item) {
                    array_push(
                        $usuario['bicicleta'],
                        (object) [
                            'nome_bicicleta' => ucfirst(strtolower(trim($_POST['nome_bicicleta'][$i]))),
                            'localizacao_bicicleta' => ucfirst(strtolower(trim($_POST['localizacao_bicicleta'][$i]))),
                            'imagem_bicicleta' => $_SESSION['imagemUp_adc']
                        ]
                    );
                    $i++;
                }
                unset($i);
            }
            if (isset($_POST['rg']) && isset($_POST['cpf'])) {
                $i = 0;
                $usuario['documento'] = [];
                foreach ($_POST['rg'] as $chave => $item) {
                    array_push(
                        $usuario['documento'],
                        (object) [
                            'rg' => ucfirst(strtolower(trim($_POST['rg'][$i]))),
                            'cpf' => ucfirst(strtolower(trim($_POST['cpf'][$i]))),
                        ]
                    );
                    $i++;
                }
                unset($i);
            }
            $usuario['atestado']['vencimento_atestado'] = isset($_POST['vencimento_atestado']) ? array_map('ucfirst', array_map('strtolower', array_map('trim', $_POST['vencimento_atestado']))) : '';
            $usuario['atestado']['tipo_atestado'] = isset($_POST['tipo_atestado']) ? array_map('ucfirst', array_map('strtolower', array_map('trim', $_POST['tipo_atestado']))) : '';
            $usuario['atestado']['arquivo_atestado'] = isset($_POST['arquivo_atestado']) ? $_SESSION['arquivoAtestado'] : '';
            $usuario['atestado']['observacao_atestado'] = isset($_POST['observacao_atestado']) ? array_map('ucfirst', array_map('trim', $_POST['observacao_atestado'])) : '';
            $usuario['endereco']['logradouro'] = isset($_POST['logradouro']) ? ucfirst(strtolower(trim($_POST['logradouro'][0]))) : '';
            $usuario['endereco']['tipo_logradouro'] = isset($_POST['tipo_logradouro']) ? ucfirst(strtolower(trim($_POST['tipo_logradouro'][0]))) : '';
            $usuario['endereco']['numero'] = isset($_POST['numero']) ? trim($_POST['numero'][0]) : '';
            $usuario['endereco']['cep'] = isset($_POST['cep']) ? trim($_POST['cep'][0]) : '';
            $usuario['endereco']['bairro'] = isset($_POST['bairro']) ? ucfirst(strtolower(trim($_POST['bairro'][0]))) : '';
            $usuario['endereco']['cidade'] = isset($_POST['cidade']) ? ucfirst(strtolower(trim($_POST['cidade'][0]))) : '';
            $usuario['endereco']['estado'] = isset($_POST['estado']) ? strtoupper(trim($_POST['estado'][0])) : '';
            $usuario['observacao'] = isset($_POST['observacao']) ? trim($_POST['observacao'][0]) : '';

            $linhas_email = $db->num_rows($database, '', 'usuario', "email = '" . $usuario['email'] . "'");
            $linhas_email_senha = $db->num_rows($database, '', 'usuario', "email = '" . $usuario['email'] . "' AND senha = '" . $usuario['senha'] . "'");

            if ($linhas_email_senha > 0) {
                die('falha |divisor| Já existe um usuário com esse email e senha.');
            }

            $i = 0;
            $len = count($usuario);
            $tabelas = '';
            $tabelas_principal = '';
            $valores = ' VALUES';
            $valores_principal = '';
            foreach ($usuario as $chave => $valor) {
                if ($valor && $i === 0) {
                    if (!is_array($valor)) {
                        $tabelas .= "($chave, ";
                        $valores .= "('$valor', ";
                    } else {
                        $tabelas .= "($chave, ";
                        $valores .= "('" . json_encode($valor, JSON_UNESCAPED_UNICODE) . "', ";
                    }
                } elseif ($i == $len - 1) {
                    if (!is_array($valor)) {
                        $tabelas_principal .= $tabelas . "$chave, db_condominio)";
                        $valores_principal .= $valores . "'$valor', '" . $_SESSION['db_condominio'] . "')";

                        $tabelas .= "$chave)";
                        $valores .= "'$valor')";
                    } else {
                        $tabelas_principal .= $tabelas . "$chave, db_condominio)";
                        $valores_principal .= $valores . "'" . json_encode($valor, JSON_UNESCAPED_UNICODE) . "', '" . $_SESSION['db_condominio'] . "')";

                        $tabelas .= "$chave)";
                        $valores .= "'" . json_encode($valor, JSON_UNESCAPED_UNICODE) . "')";
                    }
                } elseif ($valor) {
                    if (!is_array($valor)) {
                        $tabelas .= "$chave, ";
                        $valores .= "'$valor', ";
                    } else {
                        $tabelas .= "$chave, ";
                        $valores .= "'" . json_encode($valor, JSON_UNESCAPED_UNICODE) . "', ";
                    }
                }
                $i++;
            }
            $dados = 'usuario' . $tabelas . $valores;
            $dados_main = 'usuario' . $tabelas_principal . $valores_principal;

            $sql = $db->insert($database, $dados);
            $sql_main = $db->insert('gestccon2', $dados_main);

            if ($sql && $sql_main && $linhas_email > 0) {
                echo 'alerta |divisor| O usuário foi cadastrado com sucesso, mas já existem usuários com esse email.';
            } elseif ($sql && $sql_main) {
                echo 'sucesso |divisor| Usuário cadastrado com sucesso!';
            } else {
                echo 'falha |divisor| Ocorreu um erro ao cadastrar o usuário.';
            }
        }
        if ($acao === 'edicao') {
            $tipo_usuario = $tratamento->ucfirst($tipo_usuario, true);
            $database = isset($_SESSION['db_condominio']) ? $_SESSION['db_condominio'] : die('falha |divisor| Preencha todos os campos corretamente.');
            $ts = isset($_POST['ts'][0]) ? $_POST['ts'][0] : die('falha |divisor| Preencha todos os campos corretamente.');
            $date = new DateTime();

            $usuario['nome'] = $tratamento->ucwords($_POST['nome'][0], true);
            $usuario['imagem'] = array_filter($tratamento->strtolower($_POST['imagem'], true))[0];
            $usuario['email'] = $tratamento->strtolower($_POST['email'][0], true);


            //QUERY VERIFICAÇÃO DA SENHA

            $link_condominio = $db->conecta_mysql($database);

            $queryUsuario = "select * from usuario where ts = '$ts'";
            $sql_condominio = mysqli_query($link_condominio, $queryUsuario);

            $result = mysqli_fetch_assoc($sql_condominio);
            $senhaAtual = $result['senha'];

            $senhaAtual === $_POST['senha'][0] ? $usuario['senha'] = $senhaAtual : $usuario['senha'] = $tratamento->md5($_POST['senha'][0], true);

 
            $usuario['telefone'] = $tratamento->trim($_POST['telefone'][0], true);
            $usuario['bloco'] = $tratamento->ucwords($_POST['bloco'][0], true);
            $usuario['apartamento'] = $tratamento->ucwords($_POST['apartamento'][0], true);
            $usuario['recebe_mensagens'] = $tratamento->strtolower($_POST['mensagens'][0], true);
            $usuario['realiza_reservas'] = $tratamento->strtolower($_POST['reservas'][0], true);
            $usuario['categoria'] = $tratamento->ucfirst($_POST['categoria'][0], true);
            $usuario['status'] = $tratamento->strtolower($_POST['status'][0], true);
            $usuario['telefone_opcional'] = $tratamento->trim($_POST['telefone_opcional'], false);
            $usuario['celular_opcional'] = $tratamento->trim($_POST['celular_opcional'], false);
            $usuario['email_opcional'] = $tratamento->strtolower($_POST['email_opcional'], false);

            if (isset($_POST['placa']) && isset($_POST['modelo']) && isset($_POST['cor'])) {
                $i = 0;
                $usuario['veiculo'] = [];
                foreach ($_POST['placa'] as $chave => $item) {
                    array_push(
                        $usuario['veiculo'],
                        (object) [
                            'placa' => $tratamento->strtoupper($_POST['placa'][$i], false),
                            'modelo' => $tratamento->ucfirst($_POST['modelo'][$i], false),
                            'cor' => $tratamento->ucfirst($_POST['cor'][$i], false),
                        ]
                    );
                    $i++;
                }
                unset($i);
            }
            if (isset($_POST['nome_bicicleta']) && isset($_POST['localizacao_bicicleta'])) {
                $i = 0;
                $usuario['bicicleta'] = [];
                foreach ($_POST['nome_bicicleta'] as $chave => $item) {
                    array_push(
                        $usuario['bicicleta'],
                        (object) [
                            'nome_bicicleta' => $tratamento->ucfirst($_POST['nome_bicicleta'][$i], false),
                            'localizacao_bicicleta' => $tratamento->ucfirst($_POST['localizacao_bicicleta'][$i], false),
                            'imagem_bicicleta' => $_SESSION['imagemUp_adc']
                        ]
                    );
                    $i++;
                }
                unset($i);
            }
            if (isset($_POST['rg']) && isset($_POST['cpf'])) {
                $i = 0;
                $usuario['documento'] = [];
                foreach ($_POST['rg'] as $chave => $item) {
                    array_push(
                        $usuario['documento'],
                        (object) [
                            'rg' => $tratamento->ucfirst($_POST['rg'][$i], false),
                            'cpf' => $tratamento->ucfirst($_POST['cpf'][$i], false),
                        ]
                    );
                    $i++;
                }
                unset($i);
            }
            $usuario['atestado']['vencimento_atestado'] = $tratamento->ucfirst($_POST['vencimento_atestado'], false);
            $usuario['atestado']['tipo_atestado'] = $tratamento->ucfirst($_POST['tipo_atestado'], false);
            $usuario['atestado']['arquivo_atestado'] = $tratamento->strtolower( $_SESSION['arquivoAtestado'] , false);
            $usuario['atestado']['observacao_atestado'] = $tratamento->ucfirst($_POST['observacao_atestado'], false);
            $usuario['endereco']['logradouro'] = $tratamento->ucfirst($_POST['logradouro'][0], false);
            $usuario['endereco']['tipo_logradouro'] = $tratamento->ucfirst($_POST['tipo_logradouro'][0], false);
            $usuario['endereco']['numero'] = $tratamento->trim($_POST['numero'][0], false);
            $usuario['endereco']['cep'] = $tratamento->trim($_POST['cep'][0], false);
            $usuario['endereco']['bairro'] = $tratamento->ucfirst($_POST['bairro'][0], false);
            $usuario['endereco']['cidade'] = $tratamento->ucfirst($_POST['cidade'][0], false);
            $usuario['endereco']['estado'] = $tratamento->strtoupper($_POST['estado'][0], false);
            $usuario['observacao'] = $tratamento->trim($_POST['observacao'][0], false);

            $i = 0;
            $len = count($usuario);
            $query = '';
            foreach ($usuario as $chave => $valor) {
                if ($valor && $i === 0) {
                    if (!is_array($valor)) {
                        $query .= "$chave = '$valor'";
                    } else {
                        $query .= "$chave = '" . json_encode($valor, JSON_UNESCAPED_UNICODE) . "'";
                    }
                } elseif ($valor) {
                    if (!is_array($valor)) {
                        $query .= ", $chave = '$valor'";
                    } else {
                        $query .= ", $chave = '" . json_encode($valor, JSON_UNESCAPED_UNICODE) . "'";
                    }
                }
                $i++;
            }

            $dados = $query;
            $sql = $db->update($database, 'usuario', $dados, "ts = '$ts'");

            if ($sql) {
                echo 'sucesso |divisor| Usuário atualizado com sucesso!';
            } else {
                echo 'falha |divisor| Ocorreu um erro ao atualizar o usuário.';
            }
        }
        if ($acao === 'excluir') {
            $database = $_SESSION['db_condominio'];
            $ts = $_POST['ts'];

            $sql = $db->delete($database, 'usuario', "ts = '$ts'");

            if ($sql) {
                echo 'sucesso |divisor| Perfil excluída com sucesso!';
            } else {
                echo 'falha |divisor| Ocorreu um erro ao excluir a perfil.';
            }
        }
        if ($acao === 'busca') {
            $tipo_usuario = $_POST['tipo_usuario'];
            $database = isset($_SESSION['db_condominio']) ? $_SESSION['db_condominio'] : die('falha |divisor| Erro ao localizar banco de dados.');
            $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $bloco = isset($_POST['bloco-busca']) ? $_POST['bloco-busca'] : '';
            $apartamento = isset($_POST['apto-busca']) ? $_POST['apto-busca'] : '';

            $items = '*,bloco.bloco as blocoNome,usuario.bloco as bloco , apartamento.apartamento as apartamentoNome, usuario.apartamento as apartamento';
            $from = 'usuario inner join bloco on bloco.id = usuario.bloco inner join apartamento on apartamento.id = usuario.apartamento ';
            $where = "tipo_usuario = 'morador'";

            if ($nome) {
                print_r($db->fetch_assoc($database, $items, $from, " nome like '%$nome%' and $where "));
            } elseif ($email) {
                print_r($db->fetch_assoc($database, $items, $from, " email like '%$email%' and $where "));
            } elseif ($apartamento != '' && $bloco != '') {
                print_r($db->fetch_assoc($database, $items, $from, " usuario.apartamento =  '$apartamento' and usuario.bloco = '$bloco' and $where"));
            } elseif ($bloco) {
                print_r($db->fetch_assoc($database, $items, $from, " usuario.bloco = '$bloco' and $where "));
            } elseif ($apartamento) {
                print_r($db->fetch_assoc($database, $items, $from, " usuario.apartamento =  '$apartamento' and $where"));
            } else {
                print_r($db->fetch_assoc($database, $items, $from, $where));
                
            }
        }
        if ($acao === 'select') {
            $db_condominio = isset($_POST['db']) ? $_POST['db'] : $_SESSION['db_condominio'];
            $ts = isset($_POST['ts']) ? $_POST['ts'] : die('falha |divisor| Ocorreu um erro ao editar o usuário.');

            

            if ($db_condominio) {
                print_r($db->fetch_assoc($db_condominio, '*,apartamento.apartamento as Apto,usuario.apartamento as apartamento ', 'usuario inner join apartamento on apartamento.id = usuario.apartamento', "ts = '$ts'"));
            } else {
                die('falha |divisor| Ocorreu um erro ao editar o usuário.');
            }
        }
    }
}
