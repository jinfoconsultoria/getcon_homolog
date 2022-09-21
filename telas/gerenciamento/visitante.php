<ul class="nav nav-tabs nav-tabs-main" id="abas" role="tablist">

	<li class="nav-item" role="presentation">

		<a class="nav-link active" id="cadastro-tab" data-toggle="tab" href="#cadastro" role="tab" aria-controls="cadastro" aria-selected="true">Cadastrar</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="busca-tab" data-toggle="tab" href="#busca" role="tab" aria-controls="busca" aria-selected="false">Procurar</a>

	</li>

</ul>



<div class="tab-content" id="abasConteudo">

	<div class="tab-pane fade show active" id="cadastro" role="tabpanel" aria-labelledby="cadastro-tab">
	<form id="form-cadastro-visitante">
		<input type="hidden" name="acao" value="cadastro" />
		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Informações do visitante</h4>

				<h6 class="card-subtitle">Aqui você irá definir as informações sobre o visitante</h6>



				<div class="row mt-4">

					<div class="col-md-4">

						<div class="form-group">

							<label for="nome-cadastro">Nome</label>

							<input class="form-control" name="nome-cadastro" type="text" id="nome-cadastro" />

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="imagem-cadastro">Imagem</label>

							<div>

								<div class="input-group">

									<div class="custom-file">

										<input type="file" name="imagem-cadastro" class="custom-file-input" id="imagem-cadastro" />

										<label class="custom-file-label" for="imagem-cadastro"></label>

										<i class="preview-file far fa-eye d-none"></i>

									</div>

								</div>

							</div>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="documento-cadastro">Documento</label>

							<input class="form-control" name="documento" type="text" id="documento-cadastro" />

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="placa-cadastro">Placa</label>

							<input class="form-control" name="placa" type="text" id="placa-cadastro" />

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="tipo-cadastro">Tipo</label>

							<select id="tipo-cadastro" class="custom-select form-control" name="perfil">

								<option>Selecione</option>

								<option value="carteiro">Carteiro</option>

								<option value="convidado">Convidado</option>

								<option value="entregador">Entregador</option>

								<option value="visitante">Visitante</option>

							</select>

						</div>

					</div>

				</div>



				<div class="form-group">

					<label for="observacao-cadastro">Observação</label>

					<div>

						<textarea id="observacao-cadastro" name="observacao" class="form-control ckeditor" rows="3"></textarea>

					</div>

				</div>

				<button id="btn-cadastro-visitante" type="submit" class="btn btn-primary mt-4">Cadastrar</button>
<!-- <script src="../assets/js/uploader.js"></script> -->
			</div>

		</div>

	</div>

</form>


	<div class="tab-pane fade" id="busca" role="tabpanel" aria-labelledby="busca-tab">
	<form id="form-busca-visitante">
		<input type="hidden" name="acao" value="busca" />
		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Faça uma busca</h4>

				<h5 class="card-subtitle">Aqui você pode fazer uma busca pelos ambientes cadastrados e realizar edições.</h5>



				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label for="nome-busca">Nome</label>

							<input class="form-control" name="nome-busca" type="text" id="nome-busca" />

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="documento-busca">Documento</label>

							<input class="form-control" name="documento-busca" type="text" id="documento-busca" />

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="placa-busca">Placa</label>

							<input class="form-control" name="placa-busca" type="text" id="placa-busca" />

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label for="data_incial-busca">Data inicial</label>

							<input class="form-control"  type="date" id="data_incial-busca" />

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="data_final-busca">Data final</label>

							<input class="form-control" type="date" id="data_final-busca" />

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="tipo-busca">Tipo</label>

							<input class="form-control" type="text" id="tipo-busca" />

						</div>

					</div>

				</div>



				<button class="btn btn-primary" type="submit">Procurar</button>

			</div>

		</div>

	</form>

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
											<th>Documento</th>
											<th>Placa</th>
											<th>Data Entrada</th>
											<th>Hora Entrada</th>
										</tr>
									</thead>
									<tbody class="border border-inverse"></tbody>
								</table>
							</div>
				</div>

			</div>

		</div>

	</div>

</div>



<!-- <script src="../assets/js/uploader.js"></script> -->



<script>

	var prevTippy = tippy('.preview-file.fa-eye', {

		content: `Faça o upload de uma imagem.`,

		placement: 'left',

		allowHTML: true,

		arrow: true,

		maxWidth: 500,

	});


	$("#btn-excel").click(function(){
		var colunas = 5;
		var acao = "excel";

		$.ajax({
			url: '../../telas_ajax/gerenciamento/visitante.php',
			type: 'POST',
			data: {colunas:colunas,acao:acao},
			success: (response) => {
				window.open('../../telas_ajax/gerenciamento/visitante.csv', '_blank');
			},
			error: (response) => {
				console.log(response)
			},
		})
	});


	CKEDITOR.replaceAll('ckeditor');

	$("#busca-tab").click(function(){
		$("#cadastro").hide();
		$("#busca").fadeIn();
	});

	$("#cadastro-tab").click(function(){
		$("#busca").hide();
		$("#cadastro").fadeIn();
	});


	$('#form-cadastro-visitante').on('submit', (e) => {
		var dados = $(e.target).serialize();
		var campos_invalidos = $('#form-cadastro-visitante .invalid').length;

		if (campos_invalidos > 0) {
			toastr.error('Preencha todos os campos corretamente.', 'Erro');
			return false;
		}

		$.ajax({
			url: 'telas_ajax/gerenciamento/visitante.php',
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

	$('#form-busca-visitante').on('submit', (e) => {
		var dados = $(e.target).serialize();
		var campos_invalidos = $('#form-busca-visitante .invalid').length;

		if (campos_invalidos > 0) {
			toastr.error('Preencha todos os campos corretamente.', 'Erro');
			return false;
		}

		$.ajax({
			url: 'telas_ajax/gerenciamento/visitante.php',
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
							<td>${objeto['documento']}</td>
							<td>${objeto['placa']}</td>
							<td>${objeto['dataentrada']}</td>
							<td>${objeto['horaentrada']}</td>
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

