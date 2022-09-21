<form id="form-cadastro-correspondencia">
    <input type="hidden" name="acao" value="cadastro" />
    <input type="hidden" name="tipo" value="correspondencia" />
    <div class="card" width="50%">

        <div class="card-body">

            <h4 class="card-title">Cadastrar um correspôndencia</h4>

            <div class="row mt-4">

                <div class="col-md-4">

                    <div class="form-group">

                        <label for="remetente-cadastro">Remetente</label>

                        <input class="form-control" type="text" name="remetente-cadastro" id="remetente-cadastro" required/>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="form-group">

                        <label for="data_recebimento-cadastro">Data de recebimento</label>

                        <input class="form-control" type="date" name="data_recebimento-cadastro" id="data_recebimento-cadastro"required />

                    </div>

                </div>

                <div class="col-md-4">


                    <div class="form-group">
                        <label for="tipo_correspondencia-cadastro">Tipo</label>
                        <div class="input-group">
                            <select class="custom-select form-control" name="tipo_correspondencia-cadastro" id="tipo_correspondencia-cadastro" required>
                                <option value="" selected>Selecione</option>

                                <optgroup label="Personalizado" id="group-perso-tipoCorrespondencia">
                                    <?php
                                    $categoria_json = $db->fetch_assoc($_SESSION['db_condominio'], '*', 'tipoCorrespondencia', '');
                                    $categoria_array = json_decode($categoria_json, true);

                                    if ($categoria_array) {
                                        foreach ($categoria_array as $key => $item) {
                                            echo '<option value="' . $item["id"] . '">' . $item["nome"] . '</option>';
                                        }
                                    } else {
                                        echo '<option value="">Nenhuma categoria personalizada cadastrada.</option>';
                                    }
                                    ?>
                                </optgroup>

                                <optgroup label="Padrão">
                                    <option value="1001">Sedex</option>
                                    <option value="1002">Caixa Grande</option>
                                    <option value="1003">Caixa Média</option>
                                    <option value="1004">Caixa Pequena</option>
                                    <option value="1005">Carta Registrada</option>

                                </optgroup>
                            </select>


                            <div class="input-group-append">
                                <a href="javascript:void(0)"><span class="input-group-text editar-item" id="tipoCorrespondencia" data-tipo="tipo-correspondencia" data-toggle="modal" data-target="#tipoCorrespondencia-modal"><i class="far fa-plus"></i></span></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <script>
                $(document).ready(function() {
                    $('#bloco-cadastro').change(function() {
                        $('#apto-cadastro').load('/telas/master/listaApartamento.php?bloco=' + $('#bloco-cadastro').val() + '&tipo=cleanMorador');

                    });

                    $('#apto-cadastro').change(function() {
                        $('#morador-cadastro').load('/telas/master/listaMorador.php?bloco=' + $('#bloco-cadastro').val() + '&apartamento=' + $(this).val());
                    });

                    $('#bloco-observacao').change(function() {
                        $('#apto-observacao').load('/telas/master/listaApartamento.php?bloco=' + $('#bloco-observacao').val() + '&tipo=cleanMorador');

                    });

                    

                    $('#bloco-busca').change(function() {
                        $('#apto-busca').load('/telas/master/listaApartamento.php?bloco=' + $('#bloco-busca').val() + '&tipo=cleanMorador');

                    });

                    $('#apto-busca').change(function() {
                        $('#morador-busca').load('/telas/master/listaMorador.php?bloco=' + $('#bloco-busca').val() + '&apartamento=' + $(this).val());
                    });

                });
            </script>



            <div class="row">

                <div class="col-md-3">

                    <div class="form-group">

                        <label for="bloco-cadastro">Bloco</label>

                        <select class="custom-select form-control" name="bloco-cadastro" id="bloco-cadastro" required>

                            <option selected>Seleciona um bloco.</option>
                            <?php $bloco = $db->selectBloco($dbatual); ?>

                        </select>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="form-group">

                        <label for="apto-cadastro">Apartamento</label>

                        <select class="custom-select form-control" name="apto-cadastro" id="apto-cadastro" required>

                            <option selected>Selecione um apartamento</option>

                        </select>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="form-group">

                        <label for="morador-cadastro">Morador</label>

                        <select class="custom-select form-control" name="morador-cadastro" id="morador-cadastro" required>

                            <option selected>Selecione um morador</option>

                        </select>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="form-group">

                        <label for="cod_rastreio-cadastro">Código de rastreio</label>

                        <input class="form-control" type="text" name="cod_rastreio-cadastro" id="cod_rastreio-cadastro" required/>

                    </div>

                </div>

            </div>



            <div class="form-group">

                <label for="observacao-cadastro">Observação</label>

                <textarea id="observacao-cadastro" name="observacao-cadastro" class="form-control ckeditor" rows="3"></textarea>

            </div>



            <button class="btn btn-primary" type="submit">Cadastrar</button>

        </div>

    </div>
</form>