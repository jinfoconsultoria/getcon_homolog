<div class="card">
    <div class="card-body">
        <h4 class="card-title">Resultado</h4>

        <div class="relatorios">
            <i class="fad fa-file-pdf gerar-pdf"></i>

            <i class="fad fa-file-excel gerar-xls " id="btn-excel"></i>
        </div>

        <div id="busca-resultado">
            <h5 id="texto-busca_resultado2" class="card-subtitle" style="text-align: center">Aqui aparecerão todos os resultados da busca.</h5>

            <div id="tabela-busca_resultado2" class="table-responsive" style="display: none">
                <table class="table table-bordered table-hover">
                    <thead class="bg-inverse text-white">
                        <tr>
                            <th>Registro</th>
                            <th>Bloco</th>
                            <th>Apartamento</th>
                            <th>Morador</th>
                            <th>Remetente</th>
                            <th>Tipo</th>
                            <th>Código</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody class="border border-inverse"></tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    .aceitar-correspondencia{
        color:#44bd32;
    }
    .excluir-correspondencia{
        color:#e84118;
    }
</style>