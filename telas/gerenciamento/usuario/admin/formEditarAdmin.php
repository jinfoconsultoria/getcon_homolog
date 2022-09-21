<form id="form-editar-admin">
    <div class="card" width="50%">
        <div class="card-body">
            <h4 class="card-title">Informações do usuário</h4>
            <div class="row">
                <div class="col-md-6">
                    <img src="" id="img-admin-editar" style="height:125px;margin-top:1rem;">
                </div>

            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nome_edicao-admin">Nome</label>
                        <input class="form-control simples-input" required name="nome" type="text" id="nome_edicao-admin" />
                        <input name="tipo" value="usuario" type="hidden" />
                        <input name="tipo_usuario" value="admin" type="hidden" />
                        <input name="acao" value="edicao" type="hidden" />
                        <input name="ts" id="ts_edicao-admin" value="" type="hidden" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="imagem_edicao-admin">Imagem</label>
                        <p class="imagem_usuario-admin visualizar-imagem" data-imagem="" style="display: none">Visualizar imagem</p>
                        <div class="input-group">
                            <div class="custom-file">
                                <i class="fad fa-camera usar-webcam" data-pasta="usuario" data-toggle="modal" data-target="#webcam-modal"></i>
                                <input type="file" class="custom-file-input outros-input" name="imagem" id="imagem_edicao-admin" data-pasta="usuario" />
                                <input type="hidden" id="imagem_edicao_hidden-admin" class="imagem-hidden" name="imagem">
                                <label class="custom-file-label" for="imagem_edicao-admin"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email_edicao-admin">Email</label>
                        <input class="form-control" required name="email" type="email" onkeyup="validarEmail(this, '.email-erro_cadastro')" id="email_edicao-admin" />
                        <label class="erro-mensagem email-erro_cadastro">Email inválido</label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="senha_edicao-admin">Senha</label>
                        <input class="form-control simples-input" name="senha" type="password" id="senha_edicao-admin" />
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="telefone_edicao-admin">Celular</label>
                        <input class="form-control celular-input" required name="telefone" type="text" id="telefone_edicao-admin" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card" width="50%">
        <div class="card-body">
            <h5 class="card-title">Configurações e permissões do usuário</h5>

            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="perfil_edicao-admin">Perfil</label>
                        <div class="input-group">
                            <select id="perfil_edicao-admin" class="custom-select form-control outros-input" required name="perfil">
                                <option value="" disabled selected>Selecione</option>
                                <optgroup label="Personalizados">
                                    <?php
                                    $perfil_json = $db->fetch_assoc($_SESSION['db_condominio'], 'perfil', 'usuario_perfil', '');
                                    $perfil_array = json_decode($perfil_json, true);

                                    if ($perfil_array) {
                                        foreach ($perfil_array as $key => $item) {
                                            echo '<option value="' . $item["perfil"] . '">' . $item["perfil"] . '</option>';
                                        }
                                    } else {
                                        echo '<option value="">Nenhum perfil personalizado cadastrado.</option>';
                                    }
                                    ?>
                                </optgroup>
                                <optgroup label="Padrão">
                                    <option value="Síndico">Síndico</option>
                                    <option value="Conselheiro">Conselheiro</option>
                                    <option value="Gerente">Gerente</option>
                                    <option value="Supervisor">Supervisor</option>
                                    <option value="Encarregado">Encarregado</option>
                                    <option value="Atendimento">Atendimento</option>
                                    <option value="Comunicação">Comunicação</option>
                                    <option value="Correspondência">Correspondência</option>
                                    <option value="Informática">Informática</option>
                                    <option value="Financeiro">Financeiro</option>
                                    <option value="Auxiliar">Auxiliar</option>
                                    <option value="Portaria">Portaria</option>
                                    <option value="Administradora">Administradora</option>
                                </optgroup>
                            </select>

                            <div class="input-group-append">
                                <a href="javascript:void(0)"><span class="input-group-text editar-item" id="cadastrar_perfil" data-toggle="modal" data-target="#cadastrar_perfil-modal"><i class="far fa-plus"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="site_edicao-admin">Poderá acessar o site?</label>
                        <input type="radio" required name="acesso_site" value="sim" id="sim_site_edicao-admin" class="multipla" />
                        <label for="sim_site_edicao-admin" class="multipla btn-outline-success">Sim</label>
                        <input type="radio" name="acesso_site" value="não" id="nao_site_edicao-admin" class="multipla" />
                        <label for="nao_site_edicao-admin" class="multipla btn-outline-danger">Não</label>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="permissao_edicao-admin">Liberar permissão?</label>
                        <input type="radio" required name="liberar_permissao" value="sim" id="sim_permissao_edicao-admin" class="multipla" />
                        <label for="sim_permissao_edicao-admin" class="multipla btn-outline-success">Sim</label>
                        <input type="radio" name="liberar_permissao" value="não" id="nao_permissao_edicao-admin" class="multipla" />
                        <label for="nao_permissao_edicao-admin" class="multipla btn-outline-danger">Não</label>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="status_edicao-admin">Status</label>
                        <input type="radio" required name="status" value="ativo" id="ativo_status_edicao-admin" class="multipla" />
                        <label for="ativo_status_edicao-admin" class="multipla btn-outline-success">Ativo</label>
                        <input type="radio" name="status" value="inativo" id="inativo_status_edicao-admin" class="multipla" />
                        <label for="inativo_status_edicao-admin" class="multipla btn-outline-danger">Inativo</label>
                    </div>
                </div>
            </div>

            <button class="btn btn-primary mt-3">Atualizar</button>
        </div>
    </div>
</form>