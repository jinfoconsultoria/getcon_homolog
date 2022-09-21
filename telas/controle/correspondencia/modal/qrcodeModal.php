<!-- OBSERVAÇÃO modal -->
<div id="qrcodeCorrespondencia-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="qrcodeCorrespondencia-modalLabel" aria-modal="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-primary">
                <span>QR Code</span>
                <button type="button" class="close ml-auto" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <div id="qrCodeCard-Modal"></div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-loader btn-primary" data-dismiss="modal">
                    Fechar
                </button>
            </div>
        </div>
    </div>
</div>

<script src='../../assets/js/qrcode.min.js'></script>

<style>
    #qrCodeCard-Modal {
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<script>
    $(document).ready(function() {

        $('body').on('click', '.qrcode-modal', function() {
            const ts = $(this).attr('data-ts');

            var svg = new QRCode({
                content: ts,
                join: true,
                width: '400',
                height: "400",
            }).svg();

            $("#qrCodeCard-Modal").html(svg)
        });
    })
</script>