<!-- OBSERVAÇÃO modal -->
<div id="observacaoCorrespondencia-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="observacaoCorrespondencia-modalLabel" aria-modal="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-primary">
                <span>Observação correspondência</span>
                <button type="button" class="close ml-auto" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <h5 id="remetente"></h5>

                <h5 id="codRastreio"></h5>

                <span id="dataRecebimento"></span>

                <div id="observacaoCorrespondencia" style="margin-top:1rem">
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
    $(document).ready(function() {

        $('body').on('click', '.observacao-correspondencia-modal', function() {
            const ts = $(this).attr('data-ts');

            console.log(ts)

            var acao = 'observacaoCorrespondencia-modal';

            $.ajax({
                url: '../../telas_ajax/controle/correspondencia/modal.php',
                type: 'POST',
                data: {
                    acao: acao,
                    ts: ts
                },
                success: function(response) {
                    var data = JSON.parse(response);

                    const map2 = $.map(data, function(item) {
                        var dateArr = item.dataRecebimento.split("-");
                        dateStr = dateArr[2] + "/" + dateArr[1] + "/" + dateArr[0];

                        $("#dataRecebimento").text("Registrado em: " + dateStr);
                        $("#remetente").text("Remetente: " + item.remetente);
                        $("#codRastreio").text("Código de Rastreio: " + item.codRastreio);
                        $("#observacaoCorrespondencia").html(item.observacao);
                    });

                }
            });
        });
    })
</script>