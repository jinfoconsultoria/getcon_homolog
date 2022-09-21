<div class="card card-cadastro_opcional" width="50%">
    <div class="card-body">
        <h5 class="card-title">Cadastro opcional</h5>

        <h6 class="card-subtitle">Selecione os dados adicionais que deseja atribuir ao morador.</h6>

        <div class="form-group">
            <label for="info_extra-morador">Dados opcionais</label>

            <input type="checkbox" name="info_extra-morador" id="email_info_extra-morador" class="multipla" />
            <label for="email_info_extra-morador" class="multipla btn-outline-secondary">Email</label>

            <input type="checkbox" name="info_extra-morador" id="telefone_info_extra-morador" class="multipla" />
            <label for="telefone_info_extra-morador" class="multipla btn-outline-secondary">Telefone</label>

            <input type="checkbox" name="info_extra-morador" id="endereco_info_extra-morador" class="multipla" />
            <label for="endereco_info_extra-morador" class="multipla btn-outline-secondary">Endereço</label>

            <input type="checkbox" name="info_extra-morador" id="veiculo_info_extra-morador" class="multipla" />
            <label for="veiculo_info_extra-morador" class="multipla btn-outline-secondary">Veículo</label>

            <input type="checkbox" name="info_extra-morador" id="bicicleta_info_extra-morador" class="multipla" />
            <label for="bicicleta_info_extra-morador" class="multipla btn-outline-secondary">Bicicleta</label>

            <input type="checkbox" name="info_extra-morador" id="documento_info_extra-morador" class="multipla" />
            <label for="documento_info_extra-morador" class="multipla btn-outline-secondary">Documento</label>

            <input type="checkbox" name="info_extra-morador" id="atestado_info_extra-morador" class="multipla" />
            <label for="atestado_info_extra-morador" class="multipla btn-outline-secondary">Atestado médico</label>

            <input type="checkbox" name="info_extra-morador" id="observacao_info_extra-morador" class="multipla" />
            <label for="observacao_info_extra-morador" class="multipla btn-outline-secondary">Observação</label>
        </div>
    </div>
</div>

<div class="card div-email" style="display: none">
    <div class="card-body">
        <h4 class="card-title">Email opcional</h4>

        <div class="container-dinamico mt-4">
            <div class="form-group">
                <label for="email_opcional-morador">Email</label>
                <input class="form-control" type="email" name="email_opcional" id="email_opcional-morador" onkeyup="validarEmail(this, '.email-erro_cadastro')" />

                <label class="erro-mensagem email-erro_cadastro">Email inválido</label>
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
                        <label for="telefone_opcional-morador">Telefone</label>
                        <input class="form-control telefone-input" name="telefone_opcional" type="text" id="telefone_opcional-morador" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="celular_opcional-morador">Celular</label>

                        <input class="form-control celular-input" name="celular_opcional" type="text" id="celular_opcional-morador" />
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
                    <label for="cep-endereco">CEP</label>
                    <input class="form-control cep-input" name="cep" type="text" id="cep-endereco" onfocusout="consultarCep(this, 'endereco')" />
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="numero-endereco">Número</label>
                    <input class="form-control numero-input" type="text" name="numero" id="numero-endereco" />
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="tipo_logradouro-endereco">Tipo do logradouro</label>
                    <select class="custom-select form-control" name="tipo_logradouro" id="tipo_logradouro-endereco">
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
                    <label for="logradouro-endereco">Logradouro</label>
                    <input class="form-control logradouro-input" type="text" name="logradouro" id="logradouro-endereco" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="bairro-endereco">Bairro</label>
                    <input class="form-control bairro-input" name="bairro" type="text" id="bairro-endereco" />
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cidade-endereco">Cidade</label>
                    <input class="form-control" name="cidade" type="text" id="cidade-endereco" />
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="estado-endereco">Estado</label>
                    <input class="form-control" name="estado" type="text" id="estado-endereco" />
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
                        <label for="placa-morador">Placa</label>
                        <input class="form-control placa_carro-input" type="text" name="placa" id="placa-morador" />
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="modelo_carro-morador">Modelo</label>
                        <input class="form-control" name="modelo" type="text" id="modelo_carro-morador" />
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="cor_carro-morador">Cor</label>

                        <input class="form-control" name="cor" type="text" id="cor_carro-morador" />
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

        <div class="container-dinamico mt-4">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nome_bike-morador">Nome</label>
                        <input class="form-control" name="nome_bicicleta" type="text" id="nome_bike-morador" />
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="localizacao_bike-morador">Localização</label>
                        <input class="form-control" name="localizacao_bicicleta" type="text" id="localizacao_bike-morador" />
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="imagem_bike-morador">Imagem</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="imagem_bike-morador" data-pasta="bicicleta" name="imagem_adc" />
                                <input type="hidden" class="imagem-hidden" name="imagem">
                                <label class="custom-file-label" for="imagem_bike-morador"></label>
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
                        <input class="form-control" name="vencimento_atestado" type="date" id="vencimento-atestado" />
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="tipo-atestado">Tipo</label>
                        <div class="input-group">
                            <select class="custom-select form-control" name="tipo_atestado" id="tipo-atestado">
                                <option value="">Selecione</option>

                                <optgroup label="Personalizado" id="group-perso-tipoAtestado">
                                    <?php
                                    $categoria_json = $db->fetch_assoc($_SESSION['db_condominio'], '*', 'tipoAtestado', '');
                                    $categoria_array = json_decode($categoria_json, true);

                                    if ($categoria_array) {
                                        foreach ($categoria_array as $key => $item) {
                                            echo '<option value="' . $item["ate_id"] . '">' . $item["ate_nome"] . '</option>';
                                        }
                                    } else {
                                        echo '<option value="">Nenhuma categoria personalizada cadastrada.</option>';
                                    }
                                    ?>
                                </optgroup>

                                <optgroup label="Padrão">
                                    <option value="1001">Academia</option>
                                    <option value="1002">Ambos</option>
                                    <option value="1003">Natação</option>
                                    <option value="1004">Pisicna</option>

                                </optgroup>
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
                                <input type="file" name="arquivo" class="custom-file-input" id="arquivo_atestado" data-pasta="atestado" />
                                <label class="custom-file-label" for="arquivo-atestado">Nenhum arquivo selecionado.</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="observacao-atestado">Observação</label>
                <textarea id="observacao-atestado" name="observacao_atestado" rows="5" class="form-control"></textarea>
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
                        <label for="rg-morador">RG</label>
                        <input class="form-control rg-input" name="rg" type="text" id="rg-morador" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cpf-morador">CPF</label>
                        <input class="form-control cpf-input" name="cpf" type="text" id="cpf-morador" />
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
            <label for="observacao-observacao">Observação</label>
            <textarea id="observacao-observacao" name="observacao" rows="5" class="form-control"></textarea>
        </div>
    </div>
</div>