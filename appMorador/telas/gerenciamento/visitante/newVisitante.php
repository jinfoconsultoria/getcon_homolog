<div class="row newVisitante">
    <h3>Meus Visitantes</h3>
    <button class="btn btn-primary" data-toggle="modal" data-target="#newVisitante">
        <i class="fas fa-plus" style="color:white;margin-right:5px"></i>
        Novo
    </button>
</div>

<div class="modal fade modalbox" id="newVisitante" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Novo Visitante</h5>
                <a href="javascript:;" class="closeModal" data-dismiss="modal">Fechar</a>
            </div>
            <div class="modal-body">
                <h4 style="margin-bottom:15px">Cadastre as informações do seu visitante</h4>
                <form id="newVisitante">
                    <input type="hidden" value="cadastro" name="acao"/>
                    <input type="hidden" value="<?= $_SESSION['id']?>" name="morador-cadastro"/>

                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="nome-cadastro">Nome</label>
                            <input type="text" class="form-control" name="nome-cadastro" id="nome-visitante" required>
                            <i class="clear-input"><i class="fas fa-times"></i></i>
                        </div>

                        <div class="input-wrapper" style="margin-top:10px;">
                            <label class="label" for="documento-cadastro">Documento</label>
                            <input type="text" class="form-control" name="documento-cadastro" id="documento-visitante" required>
                            <i class="clear-input"><i class="fas fa-times"></i></i>
                        </div>

                        <div class="input-wrapper" style="margin-top:10px;">
                            <label class="label" for="placa-cadastro">Placa</label>
                            <input type="text" class="form-control" name="placa-cadastro" id="placa-visitante" required>
                            <i class="clear-input"><i class="fas fa-times"></i></i>
                        </div>

                        <div class="input-wrapper" style="margin-top:10px;">
                            <label class="label" for="tipo_visitante-cadastro">Tipo de Visitante</label>
                            <select class="form-control custom-select" name='tipo_visitante-cadastro' id="tipo_visitante-cadastro">

                                <option value="" selected>Selecione</option>
                                <?php 

                                $query = "select * from tipoVisitante"; 

                                $resultado = mysqli_query($link_condominio, $query);
                                while ($tipoVisitante = mysqli_fetch_assoc($resultado)) {
                                    $id = $tipoVisitante["id"];
                                    $nome = $tipoVisitante['nome'];
                                    echo "<option value='$id'>$nome</option>";
                                }
                                ?>
                            </select>
                        </div>


                        <div class="input-wrapper" style="margin-top:10px;">
                            <label class="label" for="observacao-cadastro">Observação</label>
                            <textarea rows="3" class="form-control" name='observacao-cadastro' id="observacao-cadastro">teste</textarea>
                            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                        </div>
                    </div>

                    <button class="btn btn-primary" style="width:100%;margin-top:15px">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#placa-visitante").mask("AAA-AAAA");

        $("#newVisitante").on('submit', (e) => {
			// $("#acaoVisitante").value("cadastro");

			var dados = $(e.target).serialize();
			var campos_invalidos = $('#newVisitante .invalid').length;

			if (campos_invalidos > 0) {
				toastr.error('Preencha todos os campos corretamente.', 'Erro');
				return false;
			}

			$.ajax({
				url: '../../../telas_ajax/controle/autorizacao_visitante.php',
				type: 'POST',
				data: dados,
				success: (response) => {
					var status = response.split(' |divisor| ')[0]
					var mensagem = response.split(' |divisor| ')[1]

					if (status == 'sucesso') {
						toastr.success(mensagem, 'Sucesso');

					} else if (status == 'falha') {
						toastr.error(mensagem, 'Erro')
					}
				},
				error: (response) => {
					console.log(response)
				},
			})
			return false;
		});
    })
</script>