<!-- FONE modal -->
<div id="usuarioFone-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="usuarioFone-modalLabel" aria-modal="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-primary">
                <span>Telefones Cadastrados</span>
                <button type="button" class="close ml-auto" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <table>
                    <caption id="div-usuarioFoneHeader"></caption>
                    <thead>
                        <th>Telefones</th>
                    </thead>
                    <tbody id="div-usuarioFone">

                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-loader btn-primary" data-dismiss="modal">
                    Fechar
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    $("body").on('click', ".usuarioFone", function() {
        var idLog = $(this).attr('data-ts');

        var acao = 'usuario-fone-modal';

        $.ajax({
            url: 'telas_ajax/gerenciamento/modalUsuario.php',
            type: 'POST',
            data: {
                acao: acao,
                idLog: idLog
            },
            success: function(response) {
                var data = JSON.parse(response);


                var fone = $.map(data, function(item, i) {
                    const foneAdc = JSON.parse(item.telefone_opcional);
                    const celularAdc = JSON.parse(item.celular_opcional);

                    const fonePrincipal = item.telefone;

                    const mapAdc = $.map(foneAdc, function(fone, i) {

                        return (

                            `
                            <tr>
                                <td>${foneAdc[i]}</td>
                            </tr>
                            
                            `
                        )
                    }).join('');

                    const mapAdc2 = $.map(celularAdc, function(fone, i) {

                        return (

                            `
                            <tr>
                                <td>${celularAdc[i]}</td>
                            </tr>
                            
                            `
                        )
                    }).join('');

                    return (
                        `
                        <tr>
                            <td>${fonePrincipal}</td>
                        </tr>
                        ${mapAdc}
                        ${mapAdc2}
                        `
                    );

                })

                document.getElementById("div-usuarioFone").innerHTML = fone;

            }
        });
    });
</script>