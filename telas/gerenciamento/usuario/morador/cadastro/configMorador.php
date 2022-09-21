<div class="card card-configuracoes" width="50%">
    <div class="card-body">
        <h5 class="card-title">Configurações e permissões do usuário</h5>

        <div class="form-group mt-4">
            <label for="categoria-morador">Categoria</label>

            <div class="input-group">
                <select id="categoria-morador" class="custom-select form-control" required name="categoria">
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

            <div class="form-group" id="div-temporario-morador" style="display:none">
                <label for="dataSaida-temporario-morador">Data de Saída</label>
                <input type="date" value="" class="form-control" id="dataSaida-temporario-morador" name="dataSaida-temporario-morador" />
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="mensagens-morador">Vai receber mensagens?</label>
                    <input type="radio" required name="recebe_mensagens" value="sim" id="sim_mensagens-morador" class="multipla" />
                    <label for="sim_mensagens-morador" class="multipla btn-outline-success">Sim</label>
                    <input type="radio" name="recebe_mensagens" value="não" id="nao_mensagens-morador" class="multipla" />
                    <label for="nao_mensagens-morador" class="multipla btn-outline-danger">Não</label>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="reservas-morador">Poderá realizar reservas?</label>
                    <input type="radio" required name="liberar_reservas" value="sim" id="sim_reservas-morador" class="multipla" />
                    <label for="sim_reservas-morador" class="multipla btn-outline-success">Sim</label>
                    <input type="radio" name="liberar_reservas" value="não" id="nao_reservas-morador" class="multipla" />
                    <label for="nao_reservas-morador" class="multipla btn-outline-danger">Não</label>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="status-morador">Status</label>
                    <input type="radio" required name="status" value="ativo" id="ativo_status-morador" class="multipla" />
                    <label for="ativo_status-morador" class="multipla btn-outline-success">Ativo</label>
                    <input type="radio" name="status" value="inativo" id="inativo_status-morador" class="multipla" />
                    <label for="inativo_status-morador" class="multipla btn-outline-danger">Inativo</label>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-4 btn-cadatro-primary" id="cadastroPrimary" style="display:none">Cadastrar</button>

        <button type="button" class="btn btn-primary mt-4" id="verifyEmail">Cadastrar</button>
        
        <button type="button" id="btn-cadastro-verify-open-modal" class="btn btn-primary mt-4" data-toggle="modal" data-target="#verifyEmailFone-modal" style="display:none">Cadastrar</button>


    </div>
</div>