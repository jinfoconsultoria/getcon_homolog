<form id="form-cadastro-visitante">
    <input type="hidden" name="acao" id="acaoVisitante" value="cadastro" />
    <input type="hidden" name="tipo" value="visitante" />

    <div class="card" width="50%">

        <div class="card-body">

            <h4 class="card-title">Informações do cadastro</h4>



            <div class="row mt-4">

                <div class="col-md-4">

                    <div class="form-group">

                        <label for="nome-cadastro">Nome</label>
                        <input class="form-control" type="text" name="nome-cadastro" id='nome-cadastro'>

                    </div>

                </div>



                <div class="col-md-4">

                    <div class="form-group">

                        <label for="documento-cadastro">Documento</label>
                        <input class="form-control" type="text" name="documento-cadastro" id="documento-cadastro">

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="form-group">
                        <label for="imagem-morador">Imagem</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <i class="fad fa-camera usar-webcam" data-pasta="visitante" data-toggle="modal" data-target="#webcam-modal"></i>
                                <input type="file" name="imagem" class="custom-file-input outros-input imagem-upload" id="imagem-visitante" data-pasta="visitante" />
                                <input type="hidden" class="imagem-hidden" name="imagem">
                                <label class="custom-file-label" for="imagem-visitante"></label>
                            </div>
                        </div>
                    </div>

                </div>

            </div>



            <div class="row">

                <div class="col-md-4">

                    <div class="form-group">

                        <label for="placa-cadastro">Placa</label>
                        <input class="form-control" type="text" name="placa-cadastro" id="placa-cadastro">

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="form-group">
                        <label for="tipo_visitante-cadastro">Tipo de visitante</label>
                        <div class="input-group">


                            <select class="custom-select form-control" name='tipo_visitante-cadastro' id="tipo_visitante-cadastro">

                                <option selected>Selecione</option>

                                <?php

                                $query = "select * from tipoVisitante";

                                $resultado = mysqli_query($link_condominio, $query);
                                while ($tipoVisitante = mysqli_fetch_assoc($resultado)) {
                                    $id = $tipoVisitante["id"];
                                    $nome = $tipoVisitante['nome'];
                                    echo "<option value='$id'>$nome</option>";
                                }
                                ?>

                            </select>
                            <div class="input-group-append">
                                <a href="javascript:void(0)"><span class="input-group-text editar-item" id="cadastrar_tipo" data-toggle="modal" data-target="#cadastrar_tipo-modal"><i class="far fa-plus"></i></span></a>
                            </div>
                        </div>
                    </div>

                </div>



                <div class="col-md-4">

                    <div class="form-group">

                        <label for="data_entrada-cadastro">Data de entrada</label>

                        <input class="form-control" type="date" name="data_entrada-cadastro" id="data_entrada-cadastro" />

                    </div>

                </div>



            </div>



            <div class="row">

                <div class="col-md-4">

                    <div class="form-group">

                        <label for="bloco-cadastro">Bloco</label>

                        <select class="custom-select form-control" name="bloco-cadastro" id="bloco-cadastro">

                            <option value='' selected>Seleciona um bloco.</option>
                            <?php $bloco = $db->selectBloco($dbatual); ?>
                        </select>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="form-group">

                        <label for="apto-cadastro">Apartamento</label>

                        <select class="custom-select form-control" name="apto-cadastro" id="apto-cadastro">

                            <option value='' selected>Selecione um apartamento</option>

                        </select>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="form-group">

                        <label for="morador-cadastro">Morador</label>

                        <select class="custom-select form-control" name="morador-cadastro" id="morador-cadastro">

                            <option value='' selected>Selecione um morador</option>

                        </select>

                    </div>

                </div>

            </div>



            <div class="form-group">

                <!-- <script src="../assets/js/uploader.js"></script> --></label>

                <textarea id="observacao-cadastro" rows="5" name='observacao-cadastro' class="form-control ckeditor"></textarea>

            </div>

            <button class="btn btn-primary" id="cadastrar-visitante">Cadastrar</button>

        </div>
    </div>
</form>

<script>
    $(document).ready(function() {
        $('#form-cadastro-visitante').on('submit', (e) => {
            // $("#acaoVisitante").value("cadastro");

            var dados = $(e.target).serialize();
            var campos_invalidos = $('#form-cadastro-visitante .invalid').length;

            if (campos_invalidos > 0) {
                toastr.error('Preencha todos os campos corretamente.', 'Erro');
                return false;
            }

            $.ajax({
                url: 'telas_ajax/controle/autorizacao_visitante.php',
                type: 'POST',
                data: dados,
                success: (response) => {
                    var status = response.split(' |divisor| ')[0]
                    var mensagem = response.split(' |divisor| ')[1]

                    if (status == 'sucesso') {
                        toastr.success(mensagem, 'Sucesso');
                        $('#tab-busca').click();
                        $('#submit-busca').click();

                    } else if (status == 'falha') {
                        toastr.error(mensagem, 'Erro')
                    }
                },
                error: (response) => {
                    console.log(response)
                },
            })
            return false;
        });
    });
</script>