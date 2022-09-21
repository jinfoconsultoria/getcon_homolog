<!-- CADASTRAR TIPO correspondência modal -->
<div id="tipoCorrespondencia-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="tipoCorrespondencia-modalLabel" aria-modal="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-primary">
                <span>Cadastrar tipo correspondência</span>
                <button type="button" class="close ml-auto" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <div class="container-dinamico mt-4">
                    <div class="form-group">
                        <label for="tipoCorrespondencia-cadastro-modal">Tipo correspondência</label>
                        <input class="form-control" name="tipoCorrespondencia-cadastro" type="text" id="tipoCorrespondencia-cadastro-modal" />
                        <input id="acao-tipoCorrespondencia" type="hidden" name="acao" value="cadastro">
                        <input id="id-tipoCorrespondencia" type="hidden" name="id" value="">
                    </div>
                </div>
                <button type="button" class="btn btn-loader btn-primary atualizar-tipoCorrespondencia" style="display: none;">
                    Atualizar
                    <img class="img-loader" src="assets/img/loader_branco.svg">
                </button>
                <button type="button" class="btn btn-light cancelar-atualizar-tipoCorrespondencia" style="display: none">Cancelar</button>


                <h6 class="card-subtitle text-center mt-5 mb-2" style="display: none;" id="nenhum-resultado_tipoCorrespondencia">Nenhuma categoria foi encontrada.</h6>
                <div id="tabela-tipoCorrespondencia_resultado" class="table-responsive mt-3" style="display: none">
                    <table class="table table-bordered table-hover">
                        <thead class="bg-inverse text-white">
                            <tr>
                                <th>#</th>
                                <th>Tipo Correspondência</th>
                                <th style="text-align: center">Ações</th>
                            </tr>
                        </thead>
                        <tbody class="border border-inverse">

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-loader btn-info listar-tipo-correspondencia mr-auto">
                    Listar
                    <img class="img-loader" src="assets/img/loader_branco.svg">
                </button>
                <button type="button" class="btn btn-light close-modal" data-dismiss="modal">Fechar</button>
                <button type="button" id="btn-tipoCorrespondencia-cadastro" class="btn btn-loader btn-primary">
                    Cadastrar
                    <img class="img-loader" src="assets/img/loader_branco.svg">
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    $("body").on('click', "#btn-tipoCorrespondencia-cadastro", function() {
        var value = $("#tipoCorrespondencia-cadastro-modal").val();
        var acao = "tipoCorrespondencia";

        if (value != '') {

            $.ajax({
                url: 'telas_ajax/controle/correspondencia/modal.php',
                type: 'POST',
                data: {
                    acao: acao,
                    value: value
                },
                success: function(response) {
                    if (response !== 0) {
                        toastr.success('Tipo cadastrado com sucesso!', 'Sucesso')
                        $('.close').click();

                        $("#tipoCorrespondencia-cadastro-modal").val('');
                        $(".listar-tipo-correspondencia").click()


                        var optionGroup = JSON.parse(response).map(item => {
                            return (
                                "<option value='" + item.id + "'>" + item.nome + "</option>"
                            )
                        })

                        $("#group-perso-tipoCorrespondencia").html(optionGroup)


                    } else {
                        toastr.error(mensagem, 'Erro')
                    }
                }
            });
        } else {
            toastr.error('Não deixe o campo vazio', 'Erro')
        }
    });

    $('.listar-tipo-correspondencia').on('click', (e) => {

        $.ajax({
            url: 'telas_ajax/controle/correspondencia/modal.php',
            type: 'POST',
            data: {
                acao: 'categoriaCorrespondencia',
            },
            success: (response) => {
                responseObj = JSON.parse(response);

                if (responseObj.length > 0) {
                    $("#nenhum-resultado_tipoCorrespondencia").hide();

                    $("#tabela-tipoCorrespondencia_resultado").show();
                    $("#tabela-tipoCorrespondencia_resultado tbody").html('');

                    $(responseObj).each((i, el) => {
                        $("#tabela-tipoCorrespondencia_resultado tbody").append(`
                <tr>
                    <td>${i+1}</td>
                    <td>${el['nome']}</td>
                    <td class="acoes-td"> 
                        <i class="fas fa-pen editar-tooltip editar-tipoCorrespondencia" data-name="${el['nome']}" data-id="${el['id']}"></i>
                        <i class="fas fa-trash excluir-tooltip excluir-tipoCorrespondencia" data-name="${el['nome']}" data-id="${el['id']}"></i>
                    </td>
                </tr>
            `)
                    });
                } else {
                    $("#tabela-categoria_resultado").hide();
                    $("#nenhum-resultado_categoria").show();
                }
            },
            error: (response) => {
                console.log(response)
            },
        })
        e.stopImmediatePropagation();
    })

    $("body").on('click', ".excluir-tipoCorrespondencia", (e) => {
        var dados = {
            acao: 'excluirTipoCorrespondencia',
            id: $(e.target).attr('data-id')
        }

        $.ajax({
            url: 'telas_ajax/controle/correspondencia/modal.php',
            type: 'POST',
            data: dados,
            success: (response) => {
                var status = response;
                var mensagem = "Tipo de correspondência Excluido"
                $(".listar-tipo-correspondencia").click()
                if (status !== 0) {
                    toastr.success(mensagem, 'Sucesso');
                    $('.close').click();

                    var optionGroup = JSON.parse(response).map(item => {
                        return (
                            "<option value='" + item.id + "'>" + item.nome + "</option>"
                        )
                    })

                    $("#group-perso-tipoCorrespondencia").html(optionGroup)


                } else if (status == 'falha') {
                    var mensagem = "Erro ao excluir Tipo de correspondência"
                    toastr.error(mensagem, 'Erro')
                }
            },
            error: (response) => {
                console.log(response)
            },
        })
    })

    $("body").on('click', ".editar-tipoCorrespondencia", (e) => {
        var value = $(e.target).attr('data-name');

        $("#tipoCorrespondencia-cadastro-modal").val(value)
        $("#id-tipoCorrespondencia").val($(e.target).attr('data-id'))
        $(".atualizar-tipoCorrespondencia").show()
        $(".cancelar-atualizar-tipoCorrespondencia").show()
    })

    $("body").on('click', ".cancelar-atualizar-tipoCorrespondencia", (e) => {
        $(".cancelar-atualizar-tipoCorrespondencia").hide();
        $(".atualizar-tipoCorrespondencia").hide();
        $("#tipoCorrespondencia-cadastro-modal").val('')

    })


    $("body").on('click', ".atualizar-tipoCorrespondencia", (e) => {

        var value = $("#tipoCorrespondencia-cadastro-modal").val();


        var dados = {
            acao: 'editarTipoCorrespondencia',
            id: $("#id-tipoCorrespondencia").val(),
            value: value
        }

        $.ajax({
            url: 'telas_ajax/controle/correspondencia/modal.php',
            type: 'POST',
            data: dados,
            success: (response) => {
                var status = response;
                var mensagem = "Tipo de correspondência Atualizado"
                $(".listar-tipo-correspondencia").click()
                if (status !== 0) {
                    toastr.success(mensagem, 'Sucesso');
                    $('.close').click();

                    var optionGroup = JSON.parse(response).map(item => {
                        return (
                            "<option value='" + item.id + "'>" + item.nome + "</option>"
                        )
                    })

                    $("#group-perso-tipoCorrespondencia").html(optionGroup)

                } else {
                    var mensagem = "Erro ao atualizar Tipo de correspondência"
                    toastr.error(mensagem, 'Erro')
                }
            },
            error: (response) => {
                console.log(response)
            },
        })
    })
</script>