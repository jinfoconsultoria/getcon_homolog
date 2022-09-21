<div class="card">

    <div class="card-body">

        <h4 class="card-title">Resultado</h4>

        <div class="relatorios">

            <i class="fad fa-file-pdf gerar-pdf"></i>

            <i class="fad fa-file-excel gerar-xls"></i>

        </div>



        <div id="busca-resultado">

            <div id="tabela-busca_resultado" class="table-responsive tabela-resultado mt-4">

                <?php

                $data = date('Y-m-d');
                $items = 'visitante.nome,visitante.documento,visitante.placa,dataEntrada,
						visitanteLog.id as id, bloco.bloco, apartamento.apartamento, visitanteLog.status as statusVisitante,idVisitante';

                $from = 'visitanteLog inner join visitante on visitante.id = idVisitante inner join usuario on 
						visitante.moradorCadastro = usuario.id inner join bloco on bloco.id = usuario.bloco inner join apartamento on 
						apartamento.id = usuario.apartamento';

                $where = "dataEntrada = '$data' and visitanteLog.status = 2 group by visitanteLog.idVisitante";
                $sql = "SELECT $items from $from  where $where";

                $query = mysqli_query($link_condominio, $sql);
                $numrows = mysqli_num_rows($query);

                ?>

                <table class="table table-bordered table-hover">
                    <thead class="bg-inverse text-white">
                        <tr>
                            <th>Nome</th>
                            <th>Documento</th>
                            <th>Placa</th>
                            <th>Bloco</th>
                            <th>Apartamento</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody class="border border-inverse">
                        <?php
                        while ($result = mysqli_fetch_assoc($query)) {
                        ?>

                            <tr data-idlog="<?= $result['id'] ?>" data-id="visitante-<?= $result['idVisitante'] ?>">
                                <td><?= $result['nome'] ?></td>
                                <td><?= $result['documento'] ?></td>
                                <td><?= $result['placa'] ?></td>
                                <td><?= $result['bloco'] ?></td>
                                <td><?= $result['apartamento'] ?></td>

                                <td class="acoes-td">
                                    <i class="fas fa-check authAccept"></i>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>

                <h5 id="texto-busca_resultado" class="card-subtitle" style="text-align: center;">Aqui aparecerão todos os resultados da busca.</h5>

            </div>
        </div>

    </div>

</div>