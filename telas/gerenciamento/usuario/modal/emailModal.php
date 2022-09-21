<!-- EMAIL modal -->
<div id="usuarioEmail-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="usuarioEmail-modalLabel" aria-modal="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-primary">
                <span>Email Cadastrado</span>
                <button type="button" class="close ml-auto" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div>
                    <table class="table table-bordered table-hover">
                        <thead class="bg-inverse text-white">
                            <tr>
                                <th>Email</th>
                                <th>Ações</a></th>
                            </tr>
                        </thead>
                        <tbody class="border border-inverse" id="div-usuarioEmail">

                        </tbody>
                    </table>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">Enviar Mensagem</button>
                <button type="submit" class="btn btn-loader btn-primary" data-dismiss="modal">
                    Fechar
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    //RETORNA FONE
    $("body").on('click', ".usuarioEmail", function() {
        var idLog = $(this).attr('data-ts');

        var acao = 'usuario-email-modal';

        $.ajax({
            url: 'telas_ajax/gerenciamento/modalUsuario.php',
            type: 'POST',
            data: {
                acao: acao,
                idLog: idLog
            },
            success: function(response) {
                var data = JSON.parse(response);

                var email = $.map(data, function(item, i) {
                    const itemAdc = JSON.parse(item.email_opcional);

                    const itemPrincipal = item.email;

                    const mapAdc = $.map(itemAdc, function(fone, i) {
                        return (

                            `
                            <tr>
                                <td>${itemAdc[i]}</td>
                                <td><a onClick={handleErrorProgramado()}><i class="fas fa-envelope-open-text"></i></a></td>
                            </tr>
                            
                            `
                        )
                    }).join('');

                    return (
                        `
                        <tr>
                            <td style='font-weight:600'>${itemPrincipal}</td>
                            <td><a onClick={handleErrorProgramado()}><i class="fas fa-envelope-open-text"></i></a></td>
                        </tr>
                        ${mapAdc}
                        `
                    );

                })

                document.getElementById("div-usuarioEmail").innerHTML = email;

            }
        });
    });
</script>