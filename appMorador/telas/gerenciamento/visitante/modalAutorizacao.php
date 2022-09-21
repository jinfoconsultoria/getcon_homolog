<div class="modal fade modalbox" id="ModalAuth" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Solicitar Autorização</h5>
                <a href="javascript:;" class="closeModal" data-dismiss="modal">Fechar</a>
            </div>
            <div class="modal-body">
                <h4 style="margin-bottom:15px">Selecione os dias de Autorização</h4>
                <div class="form-group basic">
                    <div class="input-wrapper">
                        <label class="label" for="DataInicial">Data Inicial</label>
                        <input type="date" class="form-control" name="data_inicio-cadastro" id="dataInicial-visitante" required>
                        <i class="clear-input"><i class="fas fa-times"></i></i>
                    </div>

                    <div class="input-wrapper" style="margin-top:10px;">
                        <label class="label" for="dataFinal">Data Final</label>
                        <input type="date" class="form-control" name="data_fim-cadastro" id="dataFinal-visitante" required>
                        <i class="clear-input"><i class="fas fa-times"></i></i>
                    </div>
                </div>

                <button class="btn btn-primary authFinal" style="width:100%;margin-top:15px">Autorizar</button>
            </div>
        </div>
    </div>
</div>