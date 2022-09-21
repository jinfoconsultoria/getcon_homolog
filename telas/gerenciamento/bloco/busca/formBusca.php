<div class="card">
    <div class="card-body">
        <h4 class="card-title">Faça uma busca</h4>

        <h5 class="card-subtitle">Aqui você pode fazer uma busca pelos usuários cadastrados e realizar edições.</h5>

        <form id="form-busca-morador">
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nome-busca">Nome</label>
                        <input class="form-control simple-input" name="nome" type="text" id="nome-busca" />
                        <input name="tipo" class="usuario-busca" value="usuario" type="hidden" />
                        <input name="tipo_usuario" class="tipousuario-busca" value="morador" type="hidden" />
                        <input name="acao" class="acao-busca" value="busca" type="hidden" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email-busca">Email</label>
                        <input class="form-control" name="email" type="text" id="email-busca" />
                    </div>
                </div>
            </div>

            <script>
                $('#bloco-busca').change(function() {
                    console.log($('#bloco-busca').val());
                    $('#apto-busca').load('/telas/master/listaApartamento.php?bloco=' + $('#bloco-busca').val() + '&tipo=cleanMorador');
                });

                $('#apto-busca').change(function() {
                    console.log($(this).val());
                    $('#morador-busca').load('/telas/master/listaMorador.php?bloco=' + $('#bloco-busca').val() + '&apartamento=' + $(this).val());
                });
            </script>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="bloco-busca">Bloco</label>

                        <select class="custom-select form-control" name="bloco-busca" id="bloco-busca">

                            <option value="" selected>Seleciona um bloco.</option>
                            <?php $bloco = $db->selectBloco($dbatual); ?>

                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="apto-busca">Apartamento</label>
                        <select class="custom-select form-control" name="apto-busca" id="apto-busca">
                            <option value="" selected>Seleciona um apartamento.</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-loader btn-primary" type="button">
                Pesquisar
                <img class="img-loader" src="assets/img/loader_branco.svg">
            </button>
            <button type="button" class="btn btn-light limpar-filtros" type="button">Limpar filtros</button>
        </form>

    </div>
</div>