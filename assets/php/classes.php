<?php

class db {
    public function conecta_mysql($db) {
        $db = isset($db) && !empty($db) ? $db : 'gestccon2';

        // Criar a conexão e armazenar em uma variável;
        // $con = mysqli_connect('localhost', 'gest_us', '1tuF^#vIB8oN8-lC', $db);
	$con = mysqli_connect('localhost', 'gestccon', 'Marco@2020#!', $db);

        // Ajustar o charset de comunicação entre o banco de dados;
        mysqli_set_charset($con, 'utf8');

        // Verificar existência de erro na conexão e exibir o código na tela;
        if (mysqli_error($con)) {
            echo 'falha |divisor| Falha ao se conectar com o banco de dados.<br><br> Erro: ' . mysqli_connect_error();
        };

        // Retornar link de conexão;
        return $con;
    }

    public function criar_banco($db) {
        // Nome do modelo a ser importado após a criação do banco
        $arquivo = 'modelo.sql';

        // Criar a conexão e armazenar em uma variável;
        $con = mysqli_connect('localhost', 'gestccon', 'Marco@2020#!');

        // Criar um banco para o condomínio
        $query = "CREATE DATABASE $db";
        $resultado = mysqli_query($con, $query);
        if (mysqli_error($con) == "Can't create database '$db'; database exists") {
            die('falha |divisor| Já existe um banco de dados com esse nome!<br>Por favor, atribua um nome diferente.');
        }

        // Selecionar o banco criado
        mysqli_select_db($con, $db) or die('falha |divisor| Falha ao selecionar o banco de dados.<br><br> Erro: ' . mysqli_error($con));

        // Variável que armazenará todos os dados da leitura do modelo.sql
        $templine = '';

        // Ler o arquivo inteiro
        $lines = file("../../assets/php/db/$arquivo");

        // Realizar loop em cada linha para remover os comentários
        foreach ($lines as $line) {
            // Se for um comentário, pular para a próxima linha
            if (substr($line, 0, 2) == '--' || $line == '') {
                continue;
            }

            // Concatenar com os dados da variável
            $templine .= $line;

            // Se tiver um ponto e vírgula, é o fim da query
            if (substr(trim($line), -1, 1) == ';') {
                // Executar query
                mysqli_query($con, $templine) or die('falha |divisor| Erro ao executar a query para inserção dos dados.' . mysqli_error($con));
                // Limpar variável
                $templine = '';
            }
        }
    }

    public function selectBloco($db){
        $link = $this->conecta_mysql($db);


		$query = "select * from bloco";
		
		$resultado = mysqli_query($link, $query);
		while($bloco = mysqli_fetch_assoc($resultado)){
            $bloco_id = $bloco["id"];
            $bloco_nome = $bloco['bloco'];
			echo "<option value='$bloco_id'>$bloco_nome</option>";
		}
								
    }

    public function selectLocal($db){
        $link = $this->conecta_mysql($db);


		$sql = "select * from localManutencao";
		
		$query = mysqli_query($link, $sql);
		while($result = mysqli_fetch_assoc($query)){
            $result_id = $result["lom_id"];
            $result_nome = $result['lom_nome'];
            if($result['lom_status'] === '1'){
                echo "<option value='$result_id'>$result_nome</option>";
            }
			
		}
								
    }

    public function selectAmbiente($db){
        $link = $this->conecta_mysql($db);


		$query = "select * from ambiente";
		
		$resultado = mysqli_query($link, $query);
		while($result = mysqli_fetch_assoc($resultado)){
            $ambiente_id = $result["id"];
            $ambiente_nome = $result['nome'];
			echo "<option value='$ambiente_id'>$ambiente_nome</option>";
		}
								
    }

    public function insert($db, $dados) {
        $db = !empty($db) ? "$db" : '';

        $link = $this->conecta_mysql($db);
        $resultado = mysqli_query($link, "INSERT INTO $dados");

        return $resultado;
    }

    public function select($db, $coluna, $tabela, $condicao) {
        $db = !empty($db) ? "$db" : 'gestccon2';
        $coluna = !empty($coluna) ? "$coluna" : '*';
        $condicao = !empty($condicao) ? "1 = 1 AND $condicao" : '1 = 1';

        $link = $this->conecta_mysql($db);
        $resultado = mysqli_query($link, "select $coluna from $tabela where $condicao");

        return $resultado;
    }

    public function update($db, $tabela, $data, $condicao) {
        $db = !empty($db) ? "$db" : 'gestccon2';
        $condicao = !empty($condicao) ? "1 = 1 AND $condicao" : '1 = 1';

        $link = $this->conecta_mysql($db);
        $resultado = mysqli_query($link, "UPDATE $tabela SET $data WHERE $condicao");

        return $resultado;
    }

    public function delete($db, $tabela, $condicao) {
        $db = !empty($db) ? "$db" : 'gestccon2';
        $condicao = !empty($condicao) ? "1 = 1 AND $condicao" : '1 = 1';

        $link = $this->conecta_mysql($db);
        $resultado = mysqli_query($link, "delete from $tabela where $condicao");

        return $resultado;
    }

    public function drop($db) {
        $link = $this->conecta_mysql($db);
        $resultado = mysqli_query($link, "DROP DATABASE $db");

        return $resultado;
    }

    public function fetch_assoc($db, $coluna, $tabela, $condicao) {
        $db = !empty($db) ? "$db" : 'gestccon2';
        $coluna = !empty($coluna) ? "$coluna" : '*';
        $condicao = !empty($condicao) ? "1 = 1 AND $condicao" : '1 = 1';

        $link = $this->conecta_mysql($db);
        $query = "select $coluna from $tabela where $condicao";

        $resultado = mysqli_query($link, $query);

        $linhas = array();
        while ($linha = mysqli_fetch_assoc($resultado)) {
            $linhas[] = $linha;
        }

        return json_encode($linhas);
    }

    public function num_rows($db, $coluna, $tabela, $condicao) {
        $db = !empty($db) ? "$db" : 'gestccon2';
        $coluna = !empty($coluna) ? "$coluna" : '*';
        $condicao = !empty($condicao) ? "1 = 1 AND $condicao" : '1 = 1';

        $link = $this->conecta_mysql($db);
        $query = "select $coluna from $tabela where $condicao";

        $resultado = mysqli_query($link, $query);

        $qtd_linhas = mysqli_num_rows($resultado);

        return $qtd_linhas;
    }
}

class exports{
    
    public function excel($col1,$header,$nome){
        $fp = fopen($nome.".csv", "w"); // o "a" indica que o arquivo será sobrescrito sempre que esta função for executada.

        fputcsv($fp,$header);

        foreach($col1 as $coluna){
            fputcsv($fp,$coluna);
        }

        fclose($fp);
    }
}

class tratamento {
    private $required = false;
    public function ucfirst($dados, $required) {
        if (is_array($dados)) {
            if ($required) {
                $dados_formatado = isset($dados) && !empty($dados) ? array_map('ucfirst', array_map('strtolower', array_map('trim', $dados))) : die('falha |divisor| Preencha todos os campos corretamente.');
                return $dados_formatado;
            } else {
                $dados_formatado = array_map('ucfirst', array_map('strtolower', array_map('trim', $dados)));
                return $dados_formatado;
            }
        } else {
            if ($required) {
                $dados_formatado = isset($dados) && !empty($dados) ? ucfirst(strtolower(trim($dados))) : die('falha |divisor| Preencha todos os campos corretamente.');
                return $dados_formatado;
            } else {
                $dados_formatado = ucfirst(strtolower(trim($dados)));
                return $dados_formatado;
            }
        }
    }

    public function ucwords($dados, $required) {
        if (is_array($dados)) {
            if ($required) {
                $dados_formatado = isset($dados) && !empty($dados) ? array_map('ucwords', array_map('strtolower', array_map('trim', $dados))) : die('falha |divisor| Preencha todos os campos corretamente.');
                return $dados_formatado;
            } else {
                $dados_formatado = array_map('ucwords', array_map('strtolower', array_map('trim', $dados)));
                return $dados_formatado;
            }
        } else {
            if ($required) {
                $dados_formatado = isset($dados) && !empty($dados) ? ucwords(strtolower(trim($dados))) : die('falha |divisor| Preencha todos os campos corretamente.');
                return $dados_formatado;
            } else {
                $dados_formatado = ucwords(strtolower(trim($dados)));
                return $dados_formatado;
            }
        }
    }

    public function strtolower($dados, $required) {
        if (is_array($dados)) {
            if ($required) {
                $dados_formatado = isset($dados) && !empty($dados) ? array_map('strtolower', array_map('trim', $dados)) : die('falha |divisor| Preencha todos os campos corretamente.');
                return $dados_formatado;
            } else {
                $dados_formatado = array_map('strtolower', array_map('trim', $dados));
                return $dados_formatado;
            }
        } else {
            if ($required) {
                $dados_formatado = isset($dados) && !empty($dados) ? strtolower(trim($dados)) : die('falha |divisor| Preencha todos os campos corretamente.');
                return $dados_formatado;
            } else {
                $dados_formatado = strtolower(trim($dados));
                return $dados_formatado;
            }
        }
    }

    public function strtoupper($dados, $required) {
        if (is_array($dados)) {
            if ($required) {
                $dados_formatado = isset($dados) && !empty($dados) ? array_map('strtoupper', array_map('trim', $dados)) : die('falha |divisor| Preencha todos os campos corretamente.');
                return $dados_formatado;
            } else {
                $dados_formatado = array_map('strtoupper', array_map('trim', $dados));
                return $dados_formatado;
            }
        } else {
            if ($required) {
                $dados_formatado = isset($dados) && !empty($dados) ? strtoupper(trim($dados)) : die('falha |divisor| Preencha todos os campos corretamente.');
                return $dados_formatado;
            } else {
                $dados_formatado = strtoupper(trim($dados));
                return $dados_formatado;
            }
        }
    }

    public function trim($dados, $required) {
        if (is_array($dados)) {
            if ($required) {
                $dados_formatado = isset($dados) && !empty($dados) ? array_map('trim', $dados) : die('falha |divisor| Preencha todos os campos corretamente.');
                return $dados_formatado;
            } else {
                $dados_formatado = array_map('trim', $dados);
                return $dados_formatado;
            }
        } else {
            if ($required) {
                $dados_formatado = isset($dados) && !empty($dados) ? trim($dados) : die('falha |divisor| Preencha todos os campos corretamente.');
                return $dados_formatado;
            } else {
                $dados_formatado = trim($dados);
                return $dados_formatado;
            }
        }
    }

    public function md5($dados, $required) {
        if (is_array($dados)) {
            if ($required) {
                $dados_formatado = isset($dados) && !empty($dados) ? array_map('md5', $dados) : die('falha |divisor| Preencha todos os campos corretamente.');
                return $dados_formatado;
            } else {
                $dados_formatado = array_map('md5', $dados);
                return $dados_formatado;
            }
        } else {
            if ($required) {
                $dados_formatado = isset($dados) && !empty($dados) ? md5($dados) : die('falha |divisor| Preencha todos os campos corretamente.');
                return $dados_formatado;
            } else {
                $dados_formatado = md5($dados);
                return $dados_formatado;
            }
        }
    }

    public function isset($dados, $required) {
        if (is_array($dados)) {
            if ($required) {
                $dados_formatado = isset($dados) && !empty($dados) ? array_map('isset', $dados) : die('falha |divisor| Preencha todos os campos corretamente.');
                return $dados_formatado;
            } else {
                $dados_formatado = array_map('isset', $dados);
                return $dados_formatado;
            }
        } else {
            if ($required) {
                $dados_formatado = isset($dados) && !empty($dados) ? isset($dados) : die('falha |divisor| Preencha todos os campos corretamente.');
                return $dados_formatado;
            } else {
                $dados_formatado = isset($dados);
                return $dados_formatado;
            }
        }
    }
}
