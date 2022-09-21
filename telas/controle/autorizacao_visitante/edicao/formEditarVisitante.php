<form id="form-editar-visitante">
    <input type="hidden" name="acao" value="editar" />
    <input type="hidden" name="tipo" value="visitante" />
    <input type="hidden" name="idVisitante" id="idVisitante" value="" />
    <div class="card" width="50%">

        <div class="card-body">

            <h4 class="card-title">Informações do cadastro</h4>



            <div class="row mt-4">

                <div class="col-md-4">

                    <div class="form-group">

                        <label for="nome-editar">Nome</label>
                        <input class="form-control" type="text" name="nome-editar" id='nome-editar'>

                    </div>

                </div>



                <div class="col-md-4">

                    <div class="form-group">

                        <label for="documento-editar">Documento</label>
                        <input class="form-control" type="text" name="documento-editar" id="documento-editar">

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="form-group">
                        <label for="imagem-morador">Imagem</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <i class="fad fa-camera usar-webcam" data-pasta="visitante" data-toggle="modal" data-target="#webcam-modal"></i>
                                <input type="file" name="imagem" class="custom-file-input outros-input imagem-upload" data-pasta="visitante" />
                                <input type="hidden" class="imagem-hidden" name="imagem" id="imagem-visitante-editar">
                                <label class="custom-file-label" for="imagem-visitante"></label>
                            </div>
                        </div>
                    </div>

                </div>

            </div>



            <div class="row">

                <div class="col-md-4">

                    <div class="form-group">

                        <label for="placa-editar">Placa</label>
                        <input class="form-control" type="text" name="placa-editar" id="placa-editar">

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="form-group">
                        <label for="tipo_visitante-editar">Tipo de visitante</label>
                        <div class="input-group">


                            <select class="custom-select form-control" name='tipo_visitante-editar' id="tipo_visitante-editar">


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

                        <label for="data_entrada-editar">Data de entrada</label>

                        <input class="form-control" type="date" name="data_entrada-editar" id="data_entrada-editar" />

                    </div>

                </div>

            </div>


            <!-- 
				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label for="bloco-editar">Bloco</label>

							<select class="custom-select form-control"  id="bloco-editar" readonly>

								<option value='' selected>Seleciona um bloco.</option>
								<?php $bloco = $db->selectBloco($dbatual); ?>
							</select>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="apto-editar">Apartamento</label>

							<select class="custom-select form-control" id="apto-editar" readonly>

								<option value='' selected>Selecione um apartamento</option>

							</select>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="morador-editar">Morador</label>

							<select class="custom-select form-control" id="morador-editar" readonly>

								<option value='' selected>Selecione um morador</option>

							</select>

						</div>

					</div>

				</div> -->

            <div class="form-group">

                <!-- <script src="../assets/js/uploader.js"></script> --></label>

                <textarea id="observacao-editar" rows="5" name='observacao-editar' class="form-control ckeditor"></textarea>

            </div>

            <button class="btn btn-primary" id="editar-visitante">Alterar</button>

        </div>
    </div>
</form>

<script>
    $(document).ready(function() {
        $('#form-editar-visitante').on('submit', (e) => {
            console.log("entrando aqui");
            var dados = $(e.target).serialize();
            var campos_invalidos = $('#form-editar-visitante .invalid').length;

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
            return false
        });



        $("body").on('click', '.editar-visitante', function() {
            const id = $(this).parent().parent().attr('data-id');

            $.ajax({
                url: '../../telas_ajax/controle/autorizacao_visitante.php',
                type: 'POST',
                data: {
                    id: id,
                    acao: 'editar-visitante'
                },
                success: (response) => {
                    var responseObjeto = JSON.parse(response);

                    var qtd = Object.keys(responseObjeto).length;


                    // return;
                    if (qtd < 1) {
                        toastr.error('Erro ao localizar o visitante', 'Erro')
                        return
                    }

                    if (responseObjeto) {
                        const visitante = responseObjeto[0];
                        $("#idVisitante").val(visitante['IdVisitante']);

                        $("#nome-editar").val(visitante['NomeVisitante']);
                        $("#placa-editar").val(visitante['placaMorador']);
                        $("#documento-editar").val(visitante['DocVisitante']);
                        $("#tipo_visitante-editar").val(visitante['perfil']);
                        $("#data_entrada-editar").val(visitante['dataLib']);


                        $("#bloco-editar").val(visitante['BlocoId']).change();
                        $("#apto-editar").val(visitante['AptoId']).change()

                        $("#morador-editar").val(visitante['moradorCadastro']);
                        $("#observacao-editar").val(visitante['observacao']);

                        if (visitante['image']) {
                            $('#imagem-visitante-editar').val(visitante['image']).removeClass('valid invalid').addClass('valid');
                            $("#imagem-visitante-editar").attr('src', 'assets/uploads/imagens/visitante/' + visitante['image']);
                            $('.imagem-visitante-editar').attr('data-imagem', `usuario/${visitante['image']}`);
                        }


                        $('#editar-tab').click();
                        $('#nav-item-editar-visitante').show();
                        $('#editar').show();
                    }

                },
                error: (response) => {
                    console.log(response)
                },
            })
        });
    });
</script>