<div class="card" width="50%">
    <div class="card-body">
        <h4 class="card-title">Informações do usuário</h4>

        <h6 class="card-subtitle">Aqui você irá definir as informações sobre o usuário.</h6>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nome-morador">Nome</label>
                    <input class="form-control simples-input" required name="nome" type="text" id="nome-morador" />
                    <input name="tipo" value="usuario" type="hidden" />
                    <input name="tipo_usuario" value="morador" type="hidden" />
                    <input name="acao" value="cadastro" type="hidden" />
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="imagem-morador">Imagem</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <i class="fad fa-camera usar-webcam" data-pasta="usuario" data-toggle="modal" data-target="#webcam-modal"></i>
                            <input type="file" name="imagem" class="custom-file-input outros-input imagem-upload" id="imagem-morador" data-pasta="usuario" />
                            <input type="hidden" class="imagem-hidden" name="imagem">
                            <label class="custom-file-label" for="imagem-morador"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="bloco-morador">Bloco</label>
                    <select id="bloco-morador" required name="bloco" class="custom-select form-control bloco-select">
                        <option value="" disabled selected>Selecione</option>
                        <?php
                        $bloco_json = $db->fetch_assoc($_SESSION['db_condominio'], '*', 'bloco', '');
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
                    <label for="apto-morador">Apartamento</label>
                    <select disabled class="custom-select form-control apartamento-select" required name="apartamento" id="apto-morador">
                        <option selected value="">Selecione o bloco.</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="email-morador">Email</label>
                    <input class="form-control" required name="email" type="email" id="email-morador" onkeyup="validarEmail(this, '.email-erro_cadastro')" />
                    <label class="erro-mensagem email-erro_cadastro">Email inválido</label>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="senha-morador">Senha</label>
                    <input class="form-control" autocomplete="new-password" required name="senha" type="password" id="senha-morador" />
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="telefone-morador">Celular</label>
                    <input class="form-control celular-input" name="telefone" type="text" id="telefone-morador" />
                </div>
            </div>
        </div>
    </div>
</div>

