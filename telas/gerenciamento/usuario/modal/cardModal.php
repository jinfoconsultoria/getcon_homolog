<style>
    .cardUsuario {
        box-shadow: 0px 0px 6px 5px #f0f0f0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border-radius: 0.25rem;
        border: 1px solid #d5d5d5;
        width: 5cm;
        height: 8cm;
        margin: 0 auto;
    }

    .cardUsuario3 {
        box-shadow: 0px 0px 6px 5px #f0f0f0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border-radius: 0.25rem;
        border: 1px solid #d5d5d5;
        width: 8cm;
        height: 10cm;
        margin: 0 auto;
    }

    .cardDivRG {
        display: flex;
        width: 100%;
        flex-direction: row;
        justify-content: space-between;
        padding: 1rem;
        border-bottom: 1px solid #eaeaea;
    }

    .cardInfo {
        padding: 1rem;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-end;
    }

    .cardInfo>h4 {
        font-size: 0.875rem;
    }

    .cardInfoRG {
        padding: 1rem;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        width: 100%;
    }

    .cardDivRG>h4 {
        margin-bottom: 0;
        font-weight: 400;
        line-height: 1.2;
        color: #455a64;
        font-size: 1rem;
    }


    .imgCard {
        width: 150px;
        padding-top: 1rem;
        border-radius: 0.25rem;
        height: 150px;
        object-fit: cover;
    }

    .imgCard2 {
        width: 125px;
        height: 125px;
        object-fit: cover;
        padding-top: 1rem;
        border-radius: 0.25rem;
    }

    .imgCard3 {
        width: 125px;
        height: 125px;
        border-radius: 0.25rem;
        object-fit: cover;
    }


    #codBarras {
        height: 2cm;
    }

    #codBarras3 {
        height: 4rem;
        width: 90px;
        margin-top: auto;
    }

    .infoGeral{
        display: flex;
        flex-direction: column;
        font-size: 0.875rem;
        margin: auto 0;
    }

    .infoGeral > span{
        font-size: 0.725rem;
    }
</style>


<!-- CARD modal -->
<div id="usuarioCard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="usuarioCard-modalLabel" aria-modal="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-primary">
                <span>Cartão do Usuário</span>
                <button type="button" class="close ml-auto" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body" id="card-modal-usuario">
                <div class='cardUsuario'>

                    <img id="usuarioCard-image" src="" class="imgCard" />

                    <div class="cardInfo">
                        <h4 id="usuarioCard-nome"></h4>
                        <svg id="codBarras"></svg>
                    </div>
                </div>
            </div>
            <div class="modal-body" id="card-modal-usuario2" style="display:none">

                <div class='cardUsuario'>

                    <img id="usuarioCard-image2" src="" class="imgCard2" />

                    <div class="cardInfo">
                        <h4 id="usuarioCard-nome2"></h4>
                        <div id="qrCodeCard-Modal"></div>
                    </div>
                </div>

            </div>

            <div class="modal-body" id="card-modal-usuario3" style="display:none">

                <div class='cardUsuario3'>
                    <div class="cardDivRG">
                        <div id="qrCodeCard-Modal3"></div>
                        <img id="usuarioCard-image3" src="" class="imgCard3" />
                    </div>
                    <div class="cardInfoRG">
                        <h4 id="usuarioCard-nome3"></h4>
                        <span id="usuarioCard-categoria3"></span>

                        <div class="infoGeral">
                            <span>Validade: </span>
                            
                            <span>ATESTADO: __/__/____</span>

                            <span>(&nbsp) PISCINA (&nbsp) BOLICHE (&nbsp) ACADEMIA </span>                            
                        </div>

                        <svg class="margin-top:auto" id="codBarras3"></svg>

                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button class="btn btn-loader btn-info" id="btn-cardUsuario">Cartão 1</button>
                <button class="btn btn-loader btn-info" id="btn-cardUsuario2">Cartão 2</button>
                <button class="btn btn-loader btn-info" id="btn-cardUsuario3">Cartão 3</button>
                <button type="button" id="btn-print-cardUsuario" class="btn btn-loader btn-secondary" data-dismiss="modal">
                    Imprimir
                </button>
                <button type="button" id="btn-print-cardUsuario2" class="btn btn-loader btn-secondary" data-dismiss="modal" style="display:none">
                    Imprimir
                </button>
                <button type="button" id="btn-print-cardUsuario3" class="btn btn-loader btn-secondary" data-dismiss="modal" style="display:none">
                    Imprimir
                </button>
                <button type="submit" class="btn btn-loader btn-primary" data-dismiss="modal">
                    Fechar
                </button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/jsbarcode/3.6.0/JsBarcode.all.min.js"></script>
<script src='../../assets/js/qrcode.min.js'></script>
<script>
    $(document).ready(function() {
        $("body").on('click', ".usuarioCard", function() {
            var idLog = $(this).attr('data-ts');

            var acao = 'usuario-card-modal';

            $.ajax({
                url: 'telas_ajax/gerenciamento/modalUsuario.php',
                type: 'POST',
                data: {
                    acao: acao,
                    idLog: idLog
                },
                success: function(response) {
                    var data = JSON.parse(response);

                    const map = $.map(data, function(item) {
                        JsBarcode('#codBarras', item.ts);
                        $("#usuarioCard-nome").text(item.nome);
                        $("#usuarioCard-image").attr("src", 'assets/uploads/imagens/usuario/' + item.imagem);
                    });

                    $('#qrCodeCard-Modal').empty();

                    const map2 = $.map(data, function(item) {
                        $("#usuarioCard-nome2").text(item.nome);
                        $("#usuarioCard-image2").attr("src", 'assets/uploads/imagens/usuario/' + item.imagem);

                        var svg = new QRCode({
                            content: item.ts,
                            join: true,
                            width: '125',
                            height: "125",
                        }).svg();

                        $("#qrCodeCard-Modal").html(svg)
                    });

                    const map3 = $.map(data, function(item) {
                        console.log(item)
                        $("#usuarioCard-nome3").text(item.nome);
                        $("#usuarioCard-categoria3").text(item.categoria)
                        $("#usuarioCard-image3").attr("src", 'assets/uploads/imagens/usuario/' + item.imagem);
                        JsBarcode('#codBarras3', item.ts);

                        var svg = new QRCode({
                            content: item.ts,
                            join: true,
                            width: '125',
                            height: "125",
                        }).svg();

                        $("#qrCodeCard-Modal3").html(svg)
                    });


                }
            });
        });

        $("#btn-cardUsuario2").click(function() {
            $("#card-modal-usuario").hide();
            $("#card-modal-usuario2").show();
            $("#card-modal-usuario3").hide();


            $("#btn-print-cardUsuario").hide();
            $("#btn-print-cardUsuario2").show();
            $("#btn-print-cardUsuario3").hide();

        })

        $("#btn-cardUsuario").click(function() {
            $("#card-modal-usuario").show();
            $("#card-modal-usuario2").hide();
            $("#card-modal-usuario3").hide();


            $("#btn-print-cardUsuario").show();
            $("#btn-print-cardUsuario2").hide();
            $("#btn-print-cardUsuario3").hide();

        })

        $("#btn-cardUsuario3").click(function() {
            $("#card-modal-usuario").hide();
            $("#card-modal-usuario2").hide();
            $("#card-modal-usuario3").show();


            $("#btn-print-cardUsuario").hide();
            $("#btn-print-cardUsuario2").hide();
            $("#btn-print-cardUsuario3").show();

        })

        $("#btn-print-cardUsuario").click(function() {
            $("#card-modal-usuario").printThis({
                importStyle: true,
                printDelay: 2000,
                importCSS: true,
            });
        });

        $("#btn-print-cardUsuario2").click(function() {

            $("#card-modal-usuario2").printThis({
                importStyle: true,
                printDelay: 2000,
                importCSS: true,
            });
        });

        $("#btn-print-cardUsuario3").click(function() {
            $("#card-modal-usuario3").printThis({
                importStyle: true,
                printDelay: 2000,
                importCSS: true,
            });
        });
    });
</script>