
<div id="cadastrar_categoria-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="cadastrar_categoria-modalLabel" style="display: none" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-primary">
            <span>Cadastrar tipo categoria</span>
                <button type="button" class="close ml-auto" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form id="form-cadastro_categoria" style="overflow-y: auto;">
                <div class="modal-body">

                    <div class="container-dinamico mt-4">
                        <div class="form-group">
                            <label for="categoria-cadastro-modal">Categoria</label>
                            <input class="form-control" name="categoria-cadastro" type="text" id="categoria-cadastro-modal" />
                            <input id="acao-categoria" type="hidden" name="acao" value="cadastro">
                            <input id="id-categoria" type="hidden" name="id" value="">
                        </div>
                    </div>
                    <button type="button" class="btn btn-loader btn-primary atualizar-categorias" style="display: none;">
                        Atualizar
                        <img class="img-loader" src="assets/img/loader_branco.svg">
                    </button>
                    <button type="button" class="btn btn-light cancelar-atualizar-categorias" style="display: none">Cancelar</button>

                    <h6 class="card-subtitle text-center mt-5 mb-2" style="display: none;" id="nenhum-resultado_categoria">Nenhuma categoria foi encontrada.</h6>
                    <div id="tabela-categoria_resultado" class="table-responsive mt-3" style="display: none">
                        <table class="table table-bordered table-hover">
                            <thead class="bg-inverse text-white">
                                <tr>
                                    <th>#</th>
                                    <th>Categoria</th>
                                    <th style="text-align: center">Ações</th>
                                </tr>
                            </thead>
                            <tbody class="border border-inverse">

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-loader btn-info listar-categorias mr-auto">
                        Listar
                        <img class="img-loader" src="assets/img/loader_branco.svg">
                    </button>
                    <button type="button" class="btn btn-light close-modal" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-loader btn-primary">
                        Cadastrar
                        <img class="img-loader" src="assets/img/loader_branco.svg">
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>