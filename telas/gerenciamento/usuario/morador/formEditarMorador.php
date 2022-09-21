<form id="form-editar-morador">
    <div class="card" width="50%">
        <div class="card-body">
            <h4 class="card-title">Informações do usuário</h4>
            <div class="row">
                <div class="col-md-6">
                    <img src="" id="img-morador-editar" style="height:125px;margin-top:1rem;">
                </div>

            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nome_edicao-morador">Nome</label>
                        <input class="form-control simples-input" type="text" required name="nome" id="nome_edicao-morador" />

                        <input name="tipo" value="usuario" type="hidden" />
                        <input name="tipo_usuario" value="morador" type="hidden" />
                        <input name="acao" value="edicao" type="hidden" />
                        <input name="ts" id="ts_edicao-morador" value="" type="hidden" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="imagem_edicao-morador">Imagem</label>
                        <p class="imagem_usuario-morador visualizar-imagem" data-imagem="" style="display: none">Visualizar imagem</p>
                        <div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <i class="fad fa-camera usar-webcam" data-pasta="usuario" data-toggle="modal" data-target="#webcam-modal"></i>
                                    <input type="file" class="custom-file-input outros-input imagem" id="imagem_edicao-morador" name="imagem" data-pasta="usuario" />
                                    <input type="hidden" id="imagem_edicao_hidden-morador" class="imagem-hidden" name="imagem">
                                    <label class="custom-file-label" for="imagem_edicao-morador"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="bloco_edicao-morador">Bloco</label>
                        <select id="bloco_edicao-morador" class="custom-select form-control bloco-select" required name="bloco">
                            <option value="" selected>Selecione</option>
                            <?php
                            $bloco_json = $db->fetch_assoc($dbatual, '*', 'bloco', '');

                            $bloco_array = json_decode($bloco_json, true);

                            if ($bloco_array) {
                                foreach ($bloco_array as $key => $item) {
                                    echo '<option value="' . $item["id"] . '">' . $item["bloco"] . '</option>';
                                }
                            } else {
                                echo '<option value="">Nenhum bloco cadastrado.</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="apto_edicao-morador">Apartamento</label>
                        <select disabled class="custom-select form-control apartamento-select" id="apto_edicao-morador" required name="apartamento">
                            <option selected value="">Selecione o bloco.</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="email_edicao-morador">Email</label>
                        <input class="form-control" required name="email" type="email" id="email_edicao-morador" />
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="senha_edicao-morador">Senha</label>
                        <input class="form-control" name="senha" type="password" id="senha_edicao-morador" />
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="telefone_edicao-morador">Celular</label>
                        <input class="form-control celular-input" required name="telefone" type="text" id="telefone_edicao-morador" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-configuracoes" width="50%">
        <div class="card-body">
            <h5 class="card-title">Configurações e permissões do usuário</h5>

            <div class="form-group mt-4">
                <label for="categoria_edicao-morador">Categoria</label>
                <div class="input-group">
                    <select id="categoria_edicao-morador" class="custom-select form-control" required name="categoria">
                        <option value="">Selecione</option>
                        <optgroup label="Personalizado">
                            <?php
                            $categoria_json = $db->fetch_assoc($_SESSION['db_condominio'], 'categoria', 'usuario_categoria', '');
                            $categoria_array = json_decode($categoria_json, true);

                            if ($categoria_array) {
                                foreach ($categoria_array as $key => $item) {
                                    echo '<option value="' . $item["categoria"] . '">' . $item["categoria"] . '</option>';
                                }
                            } else {
                                echo '<option value="">Nenhuma categoria personalizada cadastrada.</option>';
                            }
                            ?>
                        </optgroup>
                        <optgroup label="Padrão">
                            <option value="Proprietário">Proprietário</option>
                            <option value="Locatário">Locatário</option>
                            <option value="Locatário temporada">Locatário temporada</option>
                            <option value="Pai">Pai</option>
                            <option value="Mãe">Mãe</option>
                            <option value="Filho(a)">Filho(a)</option>
                        </optgroup>
                    </select>

                    <div class="input-group-append">
                        <a href="javascript:void(0)"><span class="input-group-text editar-item" id="cadastrar_categoria" data-toggle="modal" data-target="#cadastrar_categoria-modal"><i class="far fa-plus"></i></span></a>
                    </div>
                </div>


                <div class="form-group" id="div-temporario-edicao-morador" style="display:none">
                    <label for="dataSaida-temporario_edicao-morador">Data de Saída</label>
                    <input type="date" value="" class="form-control" id="dataSaida-temporario_edicao-morador" name="dataSaida-temporario_edicao-morador" />
                </div>

            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="mensagens_edicao-morador">Vai receber mensagens?</label>
                        <input type="radio" required name="mensagens" value="sim" id="sim_mensagens_edicao-morador" class="multipla" />
                        <label for="sim_mensagens_edicao-morador" class="multipla btn-outline-success">Sim</label>
                        <input type="radio" name="mensagens" value="não" id="nao_mensagens_edicao-morador" class="multipla" />
                        <label for="nao_mensagens_edicao-morador" class="multipla btn-outline-danger">Não</label>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="reservas_edicao-morador">Poderá realizar reservas?</label>
                        <input type="radio" required name="reservas" value="sim" id="sim_reservas_edicao-morador" class="multipla" />
                        <label for="sim_reservas_edicao-morador" class="multipla btn-outline-success">Sim</label>
                        <input type="radio" name="reservas" value="não" id="nao_reservas_edicao-morador" class="multipla" />
                        <label for="nao_reservas_edicao-morador" class="multipla btn-outline-danger">Não</label>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="status_edicao-morador">Status</label>
                        <input type="radio" required name="status" value="ativo" id="ativo_status_edicao-morador" class="multipla" />
                        <label for="ativo_status_edicao-morador" class="multipla btn-outline-success">Ativo</label>
                        <input type="radio" name="status" value="inativo" id="inativo_status_edicao-morador" class="multipla" />
                        <label for="inativo_status_edicao-morador" class="multipla btn-outline-danger">Inativo</label>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-4">Cadastrar</button>
        </div>
    </div>

    <div class="card card-cadastro_opcional" width="50%">
        <div class="card-body">
            <h5 class="card-title">Cadastro opcional</h5>

            <h6 class="card-subtitle">Selecione os dados adicionais que deseja atribuir ao morador.</h6>

            <div class="form-group">
                <label for="info_extra_edicao-morador">Dados opcionais</label>

                <input type="checkbox" name="info_extra_edicao-morador" id="email_info_extra_edicao-morador" class="multipla" />
                <label for="email_info_extra_edicao-morador" class="multipla btn-outline-secondary">Email</label>

                <input type="checkbox" name="info_extra_edicao-morador" id="telefone_info_extra_edicao-morador" class="multipla" />
                <label for="telefone_info_extra_edicao-morador" class="multipla btn-outline-secondary">Telefone</label>

                <input type="checkbox" name="info_extra_edicao-morador" id="endereco_info_extra_edicao-morador" class="multipla" />
                <label for="endereco_info_extra_edicao-morador" class="multipla btn-outline-secondary">Endereço</label>

                <input type="checkbox" name="info_extra_edicao-morador" id="veiculo_info_extra_edicao-morador" class="multipla" />
                <label for="veiculo_info_extra_edicao-morador" class="multipla btn-outline-secondary">Veículo</label>

                <input type="checkbox" name="info_extra_edicao-morador" id="bicicleta_info_extra_edicao-morador" class="multipla" />
                <label for="bicicleta_info_extra_edicao-morador" class="multipla btn-outline-secondary">Bicicleta</label>

                <input type="checkbox" name="info_extra_edicao-morador" id="documento_info_extra_edicao-morador" class="multipla" />
                <label for="documento_info_extra_edicao-morador" class="multipla btn-outline-secondary">Documento</label>

                <input type="checkbox" name="info_extra_edicao-morador" id="atestado_info_extra_edicao-morador" class="multipla" />
                <label for="atestado_info_extra_edicao-morador" class="multipla btn-outline-secondary">Atestado médico</label>

                <input type="checkbox" name="info_extra_edicao-morador" id="observacao_info_extra_edicao-morador" class="multipla" />
                <label for="observacao_info_extra_edicao-morador" class="multipla btn-outline-secondary">Observação</label>
            </div>
        </div>
    </div>

    <div class="card div-email" style="display: none">
        <div class="card-body">
            <h4 class="card-title">Email opcional</h4>

            <div class="container-dinamico mt-4">
                <div class="form-group">
                    <label for="email_opcional_edicao-morador">Email</label>
                    <input class="form-control" type="email" name="email_opcional" id="email_opcional_edicao-morador" />
                </div>
            </div>

            <div class="btn_acrescentar" data-input-type="email">+ Acrescentar um item</div>
        </div>
    </div>

    <div class="card div-telefone" style="display: none">
        <div class="card-body">
            <h4 class="card-title">Telefone</h4>

            <div class="container-dinamico mt-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="telefone_opcional_edicao-morador">Telefone</label>
                            <input class="form-control telefone-input" type="text" id="telefone_opcional_edicao-morador" name="telefone_opcional" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="celular_opcional_edicao-morador">Celular</label>

                            <input class="form-control celular-input" type="text" id="celular_opcional_edicao-morador" name="celular_opcional" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="btn_acrescentar" data-input-type="telefone">+ Acrescentar um item</div>
        </div>
    </div>

    <div class="card div-endereco" style="display: none">
        <div class="card-body">
            <h5 class="card-title">Endereço</h5>

            <div class="row mt-4">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="cep_edicao-morador">CEP</label>
                        <input class="form-control cep-input" type="text" id="cep_edicao-morador" name="cep" onfocusout="consultarCep(this, 'endereco')" />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="numero_edicao-morador">Número</label>
                        <input class="form-control numero-input" type="text" id="numero_edicao-morador" name="numero" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tipo_logradouro_edicao-morador">Tipo do logradouro</label>
                        <select class="custom-select form-control" name="tipo_logradouro" id="tipo_logradouro_edicao-morador">
                            <option value="">Selecione</option>
                            <option value="Aeroporto">Aeroporto</option>
                            <option value="Alameda">Alameda</option>
                            <option value="Área">Área</option>
                            <option value="Avenida">Avenida</option>
                            <option value="Campo">Campo</option>
                            <option value="Chácara">Chácara</option>
                            <option value="Colônia">Colônia</option>
                            <option value="Condomínio">Condomínio</option>
                            <option value="Conjunto">Conjunto</option>
                            <option value="Distrito">Distrito</option>
                            <option value="Esplanada">Esplanada</option>
                            <option value="Estação">Estação</option>
                            <option value="Estrada">Estrada</option>
                            <option value="Favela">Favela</option>
                            <option value="Fazenda">Fazenda</option>
                            <option value="Feira">Feira</option>
                            <option value="Jardim">Jardim</option>
                            <option value="Ladeira">Ladeira</option>
                            <option value="Lago">Lago</option>
                            <option value="Lagoa">Lagoa</option>
                            <option value="Largo">Largo</option>
                            <option value="Loteamento">Loteamento</option>
                            <option value="Morro">Morro</option>
                            <option value="Núcleo">Núcleo</option>
                            <option value="Parque">Parque</option>
                            <option value="Passarela">Passarela</option>
                            <option value="Pátio">Pátio</option>
                            <option value="Praça">Praça</option>
                            <option value="Quadra">Quadra</option>
                            <option value="Recanto">Recanto</option>
                            <option value="Residencial">Residencial</option>
                            <option value="Rodovia">Rodovia</option>
                            <option value="Rua">Rua</option>
                            <option value="Setor">Setor</option>
                            <option value="Sítio">Sítio</option>
                            <option value="Travessa">Travessa</option>
                            <option value="Trecho">Trecho</option>
                            <option value="Trevo">Trevo</option>
                            <option value="Vale">Vale</option>
                            <option value="Vereda">Vereda</option>
                            <option value="Via">Via</option>
                            <option value="Viaduto">Viaduto</option>
                            <option value="Viela">Viela</option>
                            <option value="Vila">Vila</option>
                        </select>
                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="logradouro_edicao-morador">Logradouro</label>
                        <input class="form-control logradouro-input" type="text" id="logradouro_edicao-morador" name="logradouro" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="bairro_edicao-morador">Bairro</label>
                        <input class="form-control bairro-input" type="text" id="bairro_edicao-morador" name="bairro" />
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cidade_edicao-morador">Cidade</label>
                        <input class="form-control" type="text" id="cidade_edicao-morador" name="cidade" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="estado_edicao-morador">Estado</label>
                        <input class="form-control" type="text" id="estado_edicao-morador" name="estado" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card div-veiculo" style="display: none">
        <div class="card-body">
            <h4 class="card-title">Veículo</h4>

            <div class="container-dinamico mt-4">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="placa_edicao-morador">Placa</label>

                            <input class="form-control placa_carro-input" type="text" id="placa_edicao-morador" name="placa" />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="modelo_carro_edicao-morador">Modelo</label>
                            <input class="form-control" type="text" id="modelo_carro_edicao-morador" name="modelo" />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cor_carro_edicao-morador">Cor</label>
                            <input class="form-control" type="text" id="cor_carro_edicao-morador" name="cor" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="btn_acrescentar" data-input-type="veiculo">+ Acrescentar um item</div>
        </div>
    </div>

    <div class="card div-bicicleta" style="display: none">
        <div class="card-body">
            <h4 class="card-title">Bicicleta</h4>

            <img src="" id="edicao-imagem-bicicleta" style="height:125px;margin-top:1rem;" />

            <div class="container-dinamico mt-4">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nome_bike_edicao-morador">Nome</label>
                            <input class="form-control" type="text" id="nome_bike_edicao-morador" name="nome_bicicleta" />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="localizacao_bike_edicao-morador">Localização</label>
                            <input class="form-control" type="text" id="localizacao_bike_edicao-morador" name="localizacao_bicicleta" />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="imagem_bike_edicao-morador">Imagem</label>

                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="imagem_bike_edicao-morador" data-pasta="bicicleta" name="imagem_adc" />
                                    <label class="custom-file-label" for="imagem_bike_edicao-morador"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="btn_acrescentar" data-input-type="bicicleta">+ Acrescentar um item</div>
        </div>
    </div>

    <div class="card div-atestado" style="display: none">
        <div class="card-body">
            <h4 class="card-title">Atestado médico</h4>

            <div class="container-dinamico mt-4">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="vencimento-atestado">Data de vencimento</label>

                            <input class="form-control" type="date" id="vencimento_atestado_edicao-morador" name="vencimento_atestado" />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="tipo-atestado">Tipo</label>
                            <div class="input-group">
                                <select class="custom-select form-control" id="tipo_atestado_edicao-morador" name="tipo_atestado">
                                    <option value="">Selecione</option>

                                    <option>Ambos</option>

                                    <option>Academia</option>

                                    <option>Natação</option>

                                    <option>Piscina</option>
                                    <?php
                                    $sql = "select * from tipoAtestado";
                                    $query = mysqli_query($link_condominio, $sql);
                                    while ($tipoAtestado = mysqli_fetch_assoc($query)) {
                                    ?>
                                        <option><?= $tipoAtestado['ate_nome'] ?></option>
                                    <?php
                                    }

                                    ?>
                                </select>

                                <div class="input-group-append">
                                    <a href="javascript:void(0)"><span class="input-group-text editar-item" id="usuarioTipoAtestado" data-tipo="usuario-atestado" data-toggle="modal" data-target="#usuarioTipoAtestado-modal"><i class="far fa-plus"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="arquivo-atestado">Arquivo</label>

                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="arquivo_atestado_edicao-morador" name="arquivo" />
                                    <label class="custom-file-label" for="arquivo-atestado">Nenhum arquivo selecionado.</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="observacao-atestado">Observação</label>
                    <textarea id="observacao_atestado_edicao-morador" name="observacao_atestado" rows="5" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-download-atestado">
                        Baixar Arquivo
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="card div-documento" style="display: none">
        <div class="card-body">
            <h4 class="card-title">Documento</h4>

            <div class="container-dinamico mt-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="rg_edicao-morador">RG</label>
                            <input class="form-control rg-input" type="text" id="rg_edicao-morador" name="rg" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cpf_edicao-morador">CPF</label>

                            <input class="form-control cpf-input" type="text" id="cpf_edicao-morador" name="cpf" />

                            <label class="erro-mensagem">CPF inválido</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="btn_acrescentar" data-input-type="documento">+ Acrescentar um item</div>
        </div>
    </div>

    <div class="card div-observacao" style="display: none">
        <div class="card-body">
            <h4 class="card-title">Observação</h4>

            <div class="form-group mt-4">
                <label for="observacao_edicao-morador">Observação</label>
                <textarea id="observacao_edicao-morador" name="observacao" rows="5" class="form-control"></textarea>
            </div>
        </div>
    </div>
</form>