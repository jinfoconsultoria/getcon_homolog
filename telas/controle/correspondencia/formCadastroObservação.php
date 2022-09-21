<form id="form-cadastro-observacao">
    <input type="hidden" name="acao" id="acaoObservacaoForm" value="cadastro" />
    <input type="hidden" name="tipo" id="tipoObservacaoForm" value="observacaoMorador" />
    <div class="card">

        <div class="card-body">

            <h4 class="card-title">Cadastrar observação</h4>



            <div class="row mt-4">

                <div class="col-md-4">

                    <div class="form-group">

                        <label for="bloco-observacao">Bloco</label>

                        <select class="custom-select form-control" name="bloco-observacao" id="bloco-observacao">

                            <option value="" selected>Seleciona um bloco.</option>
                            <?php $bloco = $db->selectBloco($dbatual); ?>
                        </select>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="form-group">

                        <label for="apto-observacao">Apartamento</label>

                        <select class="custom-select form-control" name="apto-observacao" id="apto-observacao">

                            <option value="" selected>Selecione um Apartamento.</option>

                        </select>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="form-group">

                        <label for="morador-observacao">Morador</label>

                        <select class="custom-select form-control" name="morador-observacao" id="morador-observacao">

                            <option value="" selected>Selecione um Morador.</option>

                        </select>

                    </div>

                </div>

            </div>


            <div class="form-group">

                <label for="observacao-observacao">Observação</label>

                <textarea id="ckEditorObservacao" name="observacao-observacao" class="form-control ckeditor" rows="3"></textarea>

            </div>



            <button class="btn btn-primary" id="btn-cadastro-observacao" type="submit">Cadastrar</button>

        </div>

    </div>
</form>

<script>
    $(document).ready(function() {
        CKEDITOR.replaceAll("ckEditorObservacao");

        $('#apto-observacao').change(function() {
            $('#morador-observacao').load('/telas/master/listaMorador.php?bloco=' + $('#bloco-observacao').val() + '&apartamento=' + $(this).val());
        });

        $('#morador-observacao').change(function() {
            $('#cod-observacao').load('/telas/master/listaCorrespondencia.php?bloco=' + $('#bloco-observacao').val() + '&apartamento=' + $("#apto-observacao").val() + '&morador=' + $(this).val());
        });

        function ajaxUpdateCadastro(id, value, acao, tipo) {
            if (id === '') {
                toastr.error('Preencha todos os campos corretamente.', 'Erro');
                return false;
            }

            $.ajax({
                url: '../../telas_ajax/controle/correspondencia.php',
                type: 'POST',
                data: {
                    id: id,
                    value: value,
                    acao: acao,
                    tipo: tipo
                },
                success: (response) => {
                    var status = response.split(' |divisor| ')[0]
                    var mensagem = response.split(' |divisor| ')[1]

                    if (status == 'sucesso') {
                        toastr.success(mensagem, 'Sucesso');

                    } else if (status == 'falha') {
                        toastr.error(mensagem, 'Erro')
                    }
                },
                error: (response) => {
                    console.log(response)
                },
            })
        }


        $("#morador-observacao").change(function() {
            const id = $(this).val()

            const acao = "select"
            const tipo = 'observacaoMorador'


            $.ajax({
                url: '../../telas_ajax/controle/correspondencia.php',
                type: 'POST',
                data: {
                    acao: acao,
                    tipo: tipo,
                    id: id
                },
                success: function(response) {
                    var data = JSON.parse(response);

                    const map = $.map(data, function(item) {
                        CKEDITOR.instances['ckEditorObservacao'].setData(item.obsCorrespondencia);
                        // $(".cke_editable p").text(item.obsCorrespondencia);
                    });

                    if (data.length > 0) {
                        $("#btn-cadastro-observacao").text("Atualizar")
                        $("#btn-cadastro-observacao").attr('id', "btn-atualizar-observacao")
                        $("#acaoObservacaoForm").val("update")
                    } else {
                        $("#btn-atualizar-observacao").text("Cadastrar")
                        $("#acaoObservacaoForm").val("cadastro")
                        $("#btn-atualizar-observacao").attr('id', "btn-cadastro-observacao")
                        CKEDITOR.instances['ckEditorObservacao'].setData('');
                    }
                }
            });
        })

        $("#btn-cadastro-observacao").click(function() {
            const id = $("#morador-observacao").val();
            const value = CKEDITOR.instances['ckEditorObservacao'].getData();
            const acao = $("#acaoObservacaoForm").val()
            const tipo = $("#tipoObservacaoForm").val()


            ajaxUpdateCadastro(id, value, acao, tipo)

            return false
        })

        $("#btn-atualizar-observacao").click(function() {
            const id = $("#morador-observacao").val();
            const value = CKEDITOR.instances['ckEditorObservacao'].getData();
            const acao = $("#acaoObservacaoForm").val()
            const tipo = $("#tipoObservacaoForm").val()


            ajaxUpdateCadastro(id, value, acao, tipo)

            return false
        })


    });
</script>