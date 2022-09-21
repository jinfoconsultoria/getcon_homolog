<div class="card">
    <div class="card-body">
        <h4 class="card-title">Faça uma busca</h4>

        <h5 class="card-subtitle">Aqui você pode fazer uma busca pelas correspondências</h5>

        <form id="form-busca">
            <input type="hidden" name="acao" value="busca" />
            <input type="hidden" name="tipo" value="busca" />


            <div class="row mt-4">

                <div class="col-md-6">

                    <div class="form-group">

                        <label for="data_inicial-busca">Data inicial</label>

                        <input class="form-control" type="date" name="data_inicial-busca" id="data_inicial-busca" />

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group">

                        <label for="data_final-busca">Data final</label>

                        <input class="form-control" type="date" name="data_final-busca" id="data_final-busca" />

                    </div>

                </div>

            </div>



            <div class="row">

                <div class="col-md-4">

                    <div class="form-group">

                        <label for="cod-busca">Código</label>

                        <input class="form-control" type="text" name="cod-busca" id="cod-busca" />

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="form-group">

                        <label for="tipo-busca">Tipo</label>

                        <select class="custom-select form-control" name="tipo-busca" id="tipo-busca">

                            <option value="" selected>Seleciona um tipo de Correspondencia.</option>
                            <?php

                            $query = "select * from tipoCorrespondencia";

                            $resultado = mysqli_query($link_condominio, $query);
                            while ($tipoCorrespondencia = mysqli_fetch_assoc($resultado)) {
                                $tipoCorrespondencia_id = $tipoCorrespondencia["id"];
                                $tipoCorrespondencia_nome = $tipoCorrespondencia['nome'];
                                echo "<option value='$tipoCorrespondencia_id'>$tipoCorrespondencia_nome</option>";
                            }
                            ?>

                        </select>

                    </div>

                </div>



                <div class="col-md-4">

                    <div class="form-group">

                        <label for="status-busca">Status</label>

                        <select class="custom-select form-control" name="status-busca" id="status-busca">

                            <option value="" selected>Selecione um status.</option>
                            <option value="0">Não recebido</option>
                            <option value="1">Recebido</option>

                        </select>

                    </div>

                </div>

            </div>



            <div class="row">

                <div class="col-md-4">

                    <div class="form-group">

                        <label for="bloco-busca">Bloco</label>

                        <select class="custom-select form-control" name="bloco-busca" id="bloco-busca">

                            <option value="" selected>Seleciona um bloco.</option>
                            <?php $bloco = $db->selectBloco($dbatual); ?>

                        </select>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="form-group">

                        <label for="apto-busca">Apartamento</label>

                        <select class="custom-select form-control" name="apto-busca" id="apto-busca">

                            <option value="" selected>Seleciona um apartamento.</option>

                        </select>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="form-group">

                        <label for="morador-busca">Morador</label>

                        <select class="custom-select form-control" name="morador-busca" id="morador-busca">

                            <option value="" selected>Selecione um morador.</option>

                        </select>

                    </div>

                </div>

            </div>


            <button class="btn btn-primary" type="submit">Procurar</button>
        </form>
    </div>
</div>