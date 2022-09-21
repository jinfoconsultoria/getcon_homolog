<!-- FOTO modal  ADMIN-->
<div id="adminFoto-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="adminFoto-modalLabel" aria-modal="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-primary">
                <span>Foto Cadastrada</span>
                <button type="button" class="close ml-auto" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <img src="" id="foto-modal-admin" style="width:100%" />
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
    $("body").on('click', ".foto-admin", function() {
        var idLog = $(this).parent().attr('data-ts');

        var acao = 'usuario-foto-modal';

        $.ajax({
            url: 'telas_ajax/gerenciamento/modalUsuario.php',
            type: 'POST',
            data: {
                acao: acao,
                idLog: idLog
            },
            success: function(response) {
                var data = JSON.parse(response);

                const mapFoto = $.map(data, function(item) {
                    return item.imagem;
                });

                $("#foto-modal-admin").attr('src', 'assets/uploads/imagens/usuario/' + mapFoto);
            }
        });
    })
</script>