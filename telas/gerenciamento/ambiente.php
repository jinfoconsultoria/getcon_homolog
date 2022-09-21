<ul class="nav nav-tabs nav-tabs-main" id="abas" role="tablist">

	<li class="nav-item" role="presentation">

		<a class="nav-link active" id="cadastro-tab" data-toggle="tab" href="#cadastro" role="tab" aria-controls="cadastro" aria-selected="true">Cadastrar</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="procurar-tab" data-toggle="tab" href="#procurar" role="tab" aria-controls="procurar" aria-selected="false">Procurar</a>

	</li>

</ul>



<div class="tab-content" id="abasConteudo">

	<div class="tab-pane fade show active" id="cadastro" role="tabpanel" aria-labelledby="cadastro-tab">
		<form id="form-cadastro-ambiente">
			<input type="hidden" name="acao" value="cadastro" />
			<div class="card" width="50%">

				<div class="card-body">

					<h4 class="card-title">Informações do ambiente</h4>

					<h6 class="card-subtitle">Aqui você irá definir as informações sobre o ambiente</h6>



					<div class="form-group mt-4">

						<label for="nome-cadastro">Nome</label>

						<div>

							<input class="form-control simples-input" type="text" name="nome-cadastro" id="nome-cadastro" />

						</div>

					</div>



					<div class="form-group">

						<label for="imagem-cadastro">Imagem</label>

						<div>

							<div class="input-group">

								<div class="custom-file">

									<input type="file" class="custom-file-input outros-input" name="imagem" data-pasta="ambiente" id="imagem-cadastro" />

									<label class="custom-file-label" for="imagem-cadastro"></label>

								</div>

							</div>

						</div>

					</div>



					<div class="form-group">

						<label for="valor-cadastro">Valor das reservas</label>

						<input class="form-control dinheiro-input" type="text" name="valor-cadastro" id="valor-cadastro" />

					</div>

				</div>

			</div>



			<div class="card" width="50%">

				<div class="card-body">

					<h5 class="card-title">Configurações do ambiente</h5>

					<div class="form-group">

						<label for="duracao-cadastro">Duração das reservas</label>



						<input type="radio" name="duracao-cadastro" id="por_hora_duracao-cadastro" class="multipla" value="Hora" />

						<label for="por_hora_duracao-cadastro" class="multipla btn-outline-secondary">Por hora</label>



						<input type="radio" name="duracao-cadastro" id="por_dia_duracao-cadastro" class="multipla" value="Dia" />

						<label for="por_dia_duracao-cadastro" class="multipla btn-outline-secondary">Por dia</label>

					</div>



					<div class="form-group">

						<label for="exibicao-cadastro">Aparecerá para todos?</label>



						<input type="radio" name="exibicao-cadastro" id="sim_exibicao-cadastro" class="multipla" value="Sim" />

						<label for="sim_exibicao-cadastro" class="multipla btn-outline-secondary">Sim</label>



						<input type="radio" name="exibicao-cadastro" id="nao_exibicao-cadastro" class="multipla" value="Não"/>

						<label for="nao_exibicao-cadastro" class="multipla btn-outline-secondary">Não</label>



						<input type="radio" name="exibicao-cadastro" id="admin_exibicao-cadastro" class="multipla" value="Administrador" />

						<label for="admin_exibicao-cadastro" class="multipla btn-outline-secondary">Só administradores</label>

		<!-- <script src="../assets/js/uploader.js"></script> -->



					<div class="form-group">

						<label for="status-cadastro">Status do ambiente</label>



						<input type="radio" name="status-cadastro" id="ativo_status-cadastro" class="multipla" value="Ativo"/>

						<label for="ativo_status-cadastro" class="multipla btn-outline-success">Ativo</label>



						<input type="radio" name="status-cadastro" id="inativo_status-cadastro" class="multipla" value="Inativo" />

						<label for="inativo_status-cadastro" class="multipla btn-outline-danger">Inativo</label>

					</div>



					<div class="form-group">

						<label for="padrão-cadastro">Padrão do status</label>



						<input type="radio" name="padrão-cadastro" id="espera_padrão-cadastro" class="multipla" value="Espera" />

						<label for="espera_padrão-cadastro" class="multipla btn-outline-secondary">1º na espera</label>



						<input type="radio" name="padrão-cadastro" id="confirmada_padrão-cadastro" class="multipla" value="Confirmado" />

						<label for="confirmada_padrão-cadastro" class="multipla btn-outline-secondary">Confirmada</label>



						<input type="radio" name="padrão-cadastro" id="expirada_padrão-cadastro" class="multipla" value="Expirada" />

						<label for="expirada_padrão-cadastro" class="multipla btn-outline-secondary">Expirada</label>



						<input type="radio" name="padrão-cadastro" id="cobrada_padrão-cadastro" class="multipla" value="Cobrada" />

						<label for="cobrada_padrão-cadastro" class="multipla btn-outline-secondary">Já cobrada</label>



						<input type="radio" name="padrão-cadastro" id="pre-reserva_padrão-cadastro" class="multipla" value="Pré-reserva" />

						<label for="pre-reserva_padrão-cadastro" class="multipla btn-outline-secondary">Pré reserva</label>

					</div>



					<button class="btn btn-primary mt-4">Cadastrar</button>

				</div>

			</div>

		</form>
	</div>
</div>
<div class="tab-pane fade" id="procurar" role="tabpanel" aria-labelledby="procurar-tab">
	<form id="form-busca-ambiente">
		<input type="hidden" name="acao" value="busca" />
		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Faça uma busca</h4>

				<h5 class="card-subtitle">Aqui você pode fazer uma busca pelos ambientes cadastrados e realizar edições.</h5>



				<div class="form-group mt-4">

					<label for="palavra_chave-busca">Palavra chave</label>

					<input type="text" class="form-control" id="palavra_chave-busca" placeholder="Insira uma palavra chave..." />

				</div>

				<button class="btn btn-primary" type="submit">Pesquisar</button>

			</div>

		</div>



		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Resultado</h4>

				<div class="relatorios">

					<i class="fad fa-file-pdf gerar-pdf"></i>

					<i class="fad fa-file-excel gerar-xls" id="btn-excel"></i>

				</div>



				<div id="busca-resultado">

					<h5 id="texto-busca_resultado" class="card-subtitle" style="text-align: center;">Aqui aparecerão todos os resultados da busca.</h5>
					<div id="tabela-busca_resultado" class="table-responsive tabela-resultado mt-4" style="display: none">
								<table class="table table-bordered table-hover">
									<thead class="bg-inverse text-white">
										<tr>
											<th>#</th>
											<th>Nome</th>
											<th>Valor</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody class="border border-inverse"></tbody>
								</table>
							</div>
				</div>

			</div>

		</div>
		
	</div>
	</form>
</div>



<!-- <script src="../assets/js/uploader.js"></script> -->

<script>

	function Excel(id,acaoDados,path,path2){	
		$("#"+id).click(function(){
			var acao = acaoDados;

			$.ajax({
				url: path,
				type: 'POST',
				data: {acao:acao},
				success: (response) => {
					window.open(path2, '_blank');
				},
				error: (response) => {
					console.log(response)
				},
			})
		});
	}

	Excel('btn-excel','excel1','../../telas_ajax/gerenciamento/ambiente.php','../../telas_ajax/gerenciamento/ambiente.csv');

	$("#procurar-tab").click(function(){
		$("#cadastro").hide();
		$("#procurar").fadeIn();
	});

	$("#cadastro-tab").click(function(){
		$("#procurar").hide();
		$("#cadastro").fadeIn();
	});

	$('#form-cadastro-ambiente button[type="submit"]').on('click', (e) => {
		var radio_invalidos = $('#form-cadastro-ambiente input[type=radio]:not(:checked)').length;

		if (radio_invalidos > 4) {
			toastr.error('Preencha todos os campos corretamente.', 'Erro');
			return false;
		}
	});

	$('#form-cadastro-ambiente').on('submit', (e) => {	
		var dados = $(e.target).serialize();
		var campos_invalidos = $('#form-cadastro-ambiente .invalid').length;

		if (campos_invalidos > 0) {
			toastr.error('Preencha todos os campos corretamente.', 'Erro');
			return false;
		}

		$.ajax({
			url: 'telas_ajax/gerenciamento/ambiente.php',
			type: 'POST',
			data: dados,
			success: (response) => {
				var status = response.split(' |divisor| ')[0]
				var mensagem = response.split(' |divisor| ')[1]

				if (status == 'sucesso') {
					toastr.success(mensagem, 'Sucesso');
					$('#tab-busca').click();
					$('#submit-busca').click();

				} else if (status == 'falha') {
					toastr.error(mensagem, 'Erro')
				}
			},
			error: (response) => {
				console.log(response)
			},
		})

		return false
	});

	$('#form-busca-ambiente').on('submit', (e) => {
		var dados = $(e.target).serialize();
		var campos_invalidos = $('#form-busca-ambiente .invalid').length;

		if (campos_invalidos > 0) {
			toastr.error('Preencha todos os campos corretamente.', 'Erro');
			return false;
		}

		$.ajax({
			url: 'telas_ajax/gerenciamento/ambiente.php',
			type: 'POST',
			data: dados,
			success: (response) => {
				var responseObjeto = JSON.parse(response)
				var tabela = $('#tabela-busca_resultado')
				var texto = $('#texto-busca_resultado')
				var qtd = Object.keys(responseObjeto).length
				console.log(responseObjeto);
				// return;
				if (qtd < 1) {
					$(texto).html('Nenhum resultado encontrado.')
					$(texto).show()
					$(tabela).hide()

					return
				}

				if (responseObjeto) {
					$(texto).hide()
					$(tabela).find('tbody').html('')

					$(responseObjeto).each((i, objeto) => {
						$(tabela).find('tbody').append(`
						<tr>
							<td>${i + 1}</td>
							<td>${objeto['nome']}</td>
							<td>${objeto['valor']}</td>
							<td>${objeto['status']}</td>
						</tr>
						`)
					})

					setarTooltips('.editar-condominio', 'Editar condomínio', 'top', false)
					setarTooltips('.excluir-condominio', 'Excluir condomínio', 'top', true)
					setarTooltips('.desativar-condominio', 'Ativar/Desativar condomínio', 'top', false)

					$(tabela).show()
				}
			},
			error: (response) => {
				console.log(response)
			},
		})

		return false
	});
</script>
