<!-- LOG VISITANTE modal -->
<div id="logvisitante-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="logvisitante-modalLabel" aria-modal="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-primary">
                <span>Histórico de Visitas</span>
                <button type="button" class="close ml-auto" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-hover">
                    <thead class="bg-inverse text-white">
                        <tr>
                            <th>Data</th>
                            <th>Horário</th>
                            <th>Morador</th>
                            <th>Bloco</th>
                            <th>Apartamento</th>
                        </tr>
                    </thead>
                    <tbody class="border border-inverse" id="log-visitante-modal">

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

<!-- IMAGEM VISITANTE modal -->
<div id="imgvisitante-modal" class="modal fade imagem-modal" tabindex="-1" role="dialog" aria-labelledby="imgvisitante-modalLabel" aria-modal="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-primary">
                <span>Imagem Visitante</span>
                <button type="button" class="close ml-auto" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <img src="" id="foto-modal-visitante" style="width:100%" />
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-loader btn-primary" data-dismiss="modal">
                    Fechar
                </button>
            </div>
        </div>
    </div>
</div>

<!-- OBS VISITANTE modal -->
<div id="obsvisitante-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="obsvisitante-modalLabel" aria-modal="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-primary">
                <span>Observação Visitante</span>
                <button type="button" class="close ml-auto" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div id="obs-visitante-modal">

                </div>

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
    //RETORNA FONE
    $("body").on('click', ".logvisitante", function() {
        var idLog = $(this).attr('data-id');

        var acao = 'logVisitanteModal';

        $.ajax({
            url: 'telas_ajax/controle/autorizacao_visitanteModal.php',
            type: 'POST',
            data: {
                acao: acao,
                idLog: idLog
            },
            success: function(response) {
                var data = JSON.parse(response);

                const map = $.map(data, function(item) {
                    return (`
                        <tr>
                            <td>${item.dataEntrada}</td>
                            <td>${item.horaEntrada}</td>
                            <td>${item.nomeMorador}</td>
                            <td>${item.blocoNome}</td>
                            <td>${item.apartamentoNome}</td>
                        </tr>
                    `);
                });

                $("#log-visitante-modal").html(map);
            }
        });
    });


    //RETORNA OBS VISITANTE
    $("body").on('click', ".obsvisitante", function() {
        var idLog = $(this).attr('data-id');

        var acao = 'obsvisitanteModal';


        $.ajax({
            url: 'telas_ajax/controle/autorizacao_visitanteModal.php',
            type: 'POST',
            data: {
                acao: acao,
                idLog: idLog
            },
            success: function(response) {
                var data = JSON.parse(response);

                const map = $.map(data, function(item) {
                    return (`
                        <p>
                        ${item.observacao}
                        </p>
                    `);
                });

                $("#obs-visitante-modal").html(map);
            }
        });
    });

    //RETORNA FOTO
    $("body").on('click', ".imgvisitante", function() {
        var idLog = $(this).attr('data-id');

        var acao = 'visitante-foto-modal';

        $.ajax({
            url: 'telas_ajax/controle/autorizacao_visitanteModal.php',
            type: 'POST',
            data: {
                acao: acao,
                idLog: idLog
            },
            success: function(response) {
                var data = JSON.parse(response);

                const mapFoto = $.map(data, function(item) {
                    return item.image;
                });

                $("#foto-modal-visitante").attr('src', 'assets/uploads/imagens/visitante/' + mapFoto);
            }
        });
    });
</script>