<!-- CADASTRAR TIPO ATESTADO modal -->
<div id="usuarioTipoAtestado-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="usuarioTipoAtestado-modalLabel" aria-modal="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-primary">
                <span>Cadastrar tipo atestado</span>
                <button type="button" class="close ml-auto" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <div class="container-dinamico mt-4">
                    <div class="form-group">
                        <label for="tipoAtestado-cadastro-modal">Atestado</label>
                        <input class="form-control" name="tipoAtestado-cadastro" type="text" id="tipoAtestado-cadastro-modal" />
                        <input id="acao-tipoAtestado" type="hidden" name="acao" value="cadastro">
                        <input id="id-tipoAtestado" type="hidden" name="id" value="">
                    </div>
                </div>
                <button type="button" class="btn btn-loader btn-primary atualizar-tipoAtestado" style="display: none;">
                    Atualizar
                    <img class="img-loader" src="assets/img/loader_branco.svg">
                </button>
                <button type="button" class="btn btn-light cancelar-atualizar-tipoAtestado" style="display: none">Cancelar</button>


                <h6 class="card-subtitle text-center mt-5 mb-2" style="display: none;" id="nenhum-resultado_tipoAtestado">Nenhuma categoria foi encontrada.</h6>
                <div id="tabela-tipoAtestado_resultado" class="table-responsive mt-3" style="display: none">
                    <table class="table table-bordered table-hover">
                        <thead class="bg-inverse text-white">
                            <tr>
                                <th>#</th>
                                <th>Tipo Atestado</th>
                                <th style="text-align: center">Ações</th>
                            </tr>
                        </thead>
                        <tbody class="border border-inverse">

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-loader btn-info listar-tipo-atestado mr-auto">
                    Listar
                    <img class="img-loader" src="assets/img/loader_branco.svg">
                </button>
                <button type="button" class="btn btn-light close-modal" data-dismiss="modal">Fechar</button>
                <button type="button" id="btn-tipoAtestado-cadastro" class="btn btn-loader btn-primary">
                    Cadastrar
                    <img class="img-loader" src="assets/img/loader_branco.svg">
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    $("body").on('click', "#btn-tipoAtestado-cadastro", function() {
        var value = $("#tipoAtestado-cadastro-modal").val();
        var acao = "tipoAtestado";

        if (value != '') {

            $.ajax({
                url: 'telas_ajax/gerenciamento/modalUsuario.php',
                type: 'POST',
                data: {
                    acao: acao,
                    value: value
                },
                success: function(response) {
                    if (response !== 0) {
                        toastr.success('Tipo cadastrado com sucesso!', 'Sucesso')
                        $('.btn-close-modal-atestado').click();
                        // $('#tipo-atestado').append('<option>' + value + '</option>');
                        // $('#tipo_atestado_edicao-morador').append('<option>' + value + '</option>');
                        $("#tipoAtestado-cadastro-modal").val('');
                        $(".listar-tipo-atestado").click()


                        var optionGroup = JSON.parse(response).map(item => {
                            return (
                                "<option value='" + item.ate_id + "'>" + item.ate_nome + "</option>"
                            )
                        })

                        $("#group-perso-tipoAtestado").html(optionGroup)


                    } else {
                        toastr.error(mensagem, 'Erro')
                    }
                }
            });
        } else {
            toastr.error('Não deixe o campo vazio', 'Erro')
        }
    });

    $('.listar-tipo-atestado').on('click', (e) => {

        $.ajax({
            url: 'telas_ajax/gerenciamento/modalUsuario.php',
            type: 'POST',
            data: {
                acao: 'categoriaAtestado',
            },
            success: (response) => {
                responseObj = JSON.parse(response);

                if (responseObj.length > 0) {
                    $("#nenhum-resultado_tipoAtestado").hide();

                    $("#tabela-tipoAtestado_resultado").show();
                    $("#tabela-tipoAtestado_resultado tbody").html('');

                    $(responseObj).each((i, el) => {
                        $("#tabela-tipoAtestado_resultado tbody").append(`
                <tr>
                    <td>${i+1}</td>
                    <td>${el['ate_nome']}</td>
                    <td class="acoes-td"> 
                        <i class="fas fa-pen editar-tooltip editar-tipoAtestado" data-name="${el['ate_nome']}" data-id="${el['ate_id']}"></i>
                        <i class="fas fa-trash excluir-tooltip excluir-tipoAtestado" data-name="${el['ate_nome']}" data-id="${el['ate_id']}"></i>
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

    $("body").on('click', ".excluir-tipoAtestado", (e) => {
        var dados = {
            acao: 'excluirTipoAtestado',
            id: $(e.target).attr('data-id')
        }

        $.ajax({
            url: 'telas_ajax/gerenciamento/modalUsuario.php',
            type: 'POST',
            data: dados,
            success: (response) => {
                var status = response;
                var mensagem = "Tipo de Atestado Excluido"
                $(".listar-tipo-atestado").click()
                if (status == 'sucesso') {
                    toastr.success(mensagem, 'Sucesso');


                } else if (status == 'falha') {
                    var mensagem = "Erro ao excluir Tipo de Atestado"
                    toastr.error(mensagem, 'Erro')
                }
            },
            error: (response) => {
                console.log(response)
            },
        })
    })

    $("body").on('click', ".editar-tipoAtestado", (e) => {
        var value = $(e.target).attr('data-name');

        $("#tipoAtestado-cadastro-modal").val(value)
        $("#id-tipoAtestado").val($(e.target).attr('data-id'))
        $(".atualizar-tipoAtestado").show()
        $(".cancelar-atualizar-tipoAtestado").show()
    })

    $("body").on('click', ".cancelar-atualizar-tipoAtestado", (e) => {
        $(".cancelar-atualizar-tipoAtestado").hide();
        $(".atualizar-tipoAtestado").hide();
        $("#tipoAtestado-cadastro-modal").val('')

    })


    $("body").on('click', ".atualizar-tipoAtestado", (e) => {

        var value = $("#tipoAtestado-cadastro-modal").val();


        var dados = {
            acao: 'editarTipoAtestado',
            id: $("#id-tipoAtestado").val(),
            value: value
        }

        $.ajax({
            url: 'telas_ajax/gerenciamento/modalUsuario.php',
            type: 'POST',
            data: dados,
            success: (response) => {
                var status = response;
                var mensagem = "Tipo de Atestado Atualizado"
                $(".listar-tipo-atestado").click()
                if (status !== 0) {
                    toastr.success(mensagem, 'Sucesso');

                    var optionGroup = JSON.parse(response).map(item => {
                        return (
                            "<option value='" + item.ate_id + "'>" + item.ate_nome + "</option>"
                        )
                    })

                    $("#group-perso-tipoAtestado").html(optionGroup)

                } else {
                    var mensagem = "Erro ao atualizar Tipo de Atestado"
                    toastr.error(mensagem, 'Erro')
                }
            },
            error: (response) => {
                console.log(response)
            },
        })
    })
</script>