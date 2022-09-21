<?php
session_start();

// Exigir o arquivo de classes que armazena as métodos;
require_once '../../assets/php/classes.php';

// Instância um novo objeto do banco de dados e inicia a conexão;
$db   = new db();
$dbatual = $_SESSION['db_condominio'];
$link_condominio = $db->conecta_mysql($_SESSION['db_condominio']);

?>


<ul class="nav nav-tabs nav-tabs-main" id="abas" role="tablist">

	<li class="nav-item" role="presentation">

		<a class="nav-link active" id="cadastro-tab" data-toggle="tab" href="#cadastro" role="tab" aria-controls="cadastro" aria-selected="true">Cadastrar</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="tipo-tab" data-toggle="tab" href="#tipo" role="tab" aria-controls="tipo" aria-selected="false">Tipo</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="busca-tab" data-toggle="tab" href="#busca" role="tab" aria-controls="busca" aria-selected="false">Procurar</a>

	</li>

</ul>



<div class="tab-content" id="abasConteudo">

	<div class="tab-pane fade show active" id="cadastro" role="tabpanel" aria-labelledby="cadastro-tab">
		<form id="form-cadastro-documento">
		<input type="hidden" name="acao" value="cadastro" />
		<input type="hidden" name="tipo" value="documento" />
		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Cadastrar um documento</h4>



				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label for="assunto-cadastro">Assunto</label>

							<input class="form-control" type="text" name="assunto-cadastro" id="assunto-cadastro" />

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="data-cadastro">Data</label>

							<input class="form-control" type="date" name="data-cadastro" id="data-cadastro" />

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="arquivo-cadastro">Arquivo</label>

							<div class="input-group">

								<div class="custom-file">

									<input type="file" class="custom-file-input" name="arquivo-cadastro" id="arquivo-cadastro" />

									<label class="custom-file-label" for="arquivo-cadastro">Nenhum arquivo selecionado.</label>

								</div>

							</div>

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="bloco-cadastro">Bloco</label>

							<select class="custom-select form-control" name="bloco-cadastro" id="bloco-cadastro">

								<?php
								
									$bloco = $db->selectBloco($dbatual);
								?>

							</select>

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="tipo-cadastro">Tipo</label>

							<select  class="custom-select form-control" name="tipo-cadastro" id="tipo-cadastro">

								<?php
								
								$query = "select * from tipoDocumento";
		
								$resultado = mysqli_query($link_condominio, $query);
								while($tipoDocumento = mysqli_fetch_assoc($resultado)){
									$tipoDocumento_id = $tipoDocumento["id"];
									$tipoDocumento_nome = $tipoDocumento['nome'];
									echo "<option value='$tipoDocumento_id'>$tipoDocumento_nome</option>";
								}
								?>

							</select>

						</div>

					</div>

				</div>



				<button class="btn btn-primary" type="submit">Cadastrar</button>

			</div>

		</div>
		</form>
	</div>



	<div class="tab-pane fade" id="tipo" role="tabpanel" aria-labelledby="tipo-tab">
	<form id="form-cadastro-tipoDocumento">
		<input type="hidden" name="acao" value="cadastro" />
		<input type="hidden" name="tipo" value="tipoDocumento" />
		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Cadastrar tipo</h4>



				<div class="form-group">

					<label for="nome-tipo">Nome</label>

					<input class="form-control" type="text" name="nome-tipo" id="nome-tipo" />

				</div>



				<button class="btn btn-primary">Cadastrar</button>

			</div>
			</form>
		</div>

<!-- <script src="../assets/js/uploader.js"></script> -->

		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Resultado</h4>

				<div class="relatorios">
					<i class="fad fa-file-pdf gerar-pdf" ></i>

					<i class="fad fa-file-excel gerar-xls" id="btn-excel2"></i>
				</div>

				<div id="busca-resultado">
					<h5 id="texto-busca_resultado" class="card-subtitle" style="text-align: center">Aqui aparecerão todos os resultados da busca.</h5>

					<div id="tabela-busca_resultado" class="table-responsive" style="display: none">
						<table class="table table-bordered table-hover">
							<thead class="bg-inverse text-white">
								<tr>
									<th>#</th>
									<th>Nome do condomínio</th>
									<th>Status</th>
									<th style="text-align: center">Ações</th>
								</tr>
							</thead>
							<tbody class="border border-inverse"></tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

	</div>



	<div class="tab-pane fade" id="busca" role="tabpanel" aria-labelledby="busca-tab">
		<form id="form-busca-documento">
		<input type="hidden" name="acao" value="buscar"/>
		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Faça uma busca</h4>



				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label for="assunto-busca">Assunto</label>

							<input class="form-control" type="text" name="assunto-busca" id="assunto-busca" />

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="tipo-busca">Tipo</label>

							<select  class="custom-select form-control" name="tipo-busca" id="tipo-busca">
								<option value="">Selecionar</option>
							<?php
								
								$query = "select * from tipoDocumento";
		
								$resultado = mysqli_query($link_condominio, $query);
								while($tipoDocumento = mysqli_fetch_assoc($resultado)){
									$tipoDocumento_id = $tipoDocumento["id"];
									$tipoDocumento_nome = $tipoDocumento['nome'];
									echo "<option value='$tipoDocumento_id'>$tipoDocumento_nome</option>";
								}
								?>

							</select>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="bloco-busca">Bloco</label>

							<select class="custom-select form-control" name="bloco-busca" id="bloco-busca">
								<option value="">Selecionar</option>
							<?php
								
								$bloco = $db->selectBloco($dbatual);
							?>

							</select>

						</div>

					</div>

				</div>



				<div class="row">

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



				<button class="btn btn-primary" type="submit">Procurar</button>

			</div>
			</form>
		</div>



		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Resultado</h4>

				<div class="relatorios">
					<i class="fad fa-file-pdf gerar-pdf" id="btn-pdf"></i>

					<i class="fad fa-file-excel gerar-xls " id="btn-excel"></i>
				</div>

				<div id="busca-resultado2">
					<h5 id="texto-busca_resultado2" class="card-subtitle" style="text-align: center">Aqui aparecerão todos os resultados da busca.</h5>

					<div id="tabela-busca_resultado2" class="table-responsive" style="display: none">
						<table class="table table-bordered table-hover">
							<thead class="bg-inverse text-white">
								<tr>
									<th>#</th>
									<th>Assunto</th>
									<th>Tipo</th>
									<th>Bloco</th>
									<th>Data de Cadastro</th>
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
	CKEDITOR.replaceAll('ckeditor');

	

	$("#btn-excel").click(function(){
		var acao = "excel";

		$.ajax({
			url: '../../telas_ajax/controle/documento.php',
			type: 'POST',
			data: {acao:acao},
			success: (response) => {
				window.open('../../telas_ajax/controle/documento.csv', '_blank');
			},
			error: (response) => {
				console.log(response)
			},
		})
	});

	$("#btn-excel2").click(function(){
		var acao = "excel2";

		$.ajax({
			url: '../../telas_ajax/controle/documento.php',
			type: 'POST',
			data: {acao:acao},
			success: (response) => {
				window.open('../../telas_ajax/controle/tipoDocumento.csv', '_blank');
			},
			error: (response) => {
				console.log(response)
			},
		})
	});


	$('#form-cadastro-documento').on('submit', (e) => {
		var dados = $(e.target).serialize();
		var campos_invalidos = $('#form-cadastro-documento .invalid').length;

		if (campos_invalidos > 0) {
			toastr.error('Preencha todos os campos corretamente.', 'Erro');
			return false;
		}

		$.ajax({
			url: '../../telas_ajax/controle/documento.php',
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

	$('#form-cadastro-tipoDocumento').on('submit', (e) => {
		var dados = $(e.target).serialize();
		var campos_invalidos = $('#form-cadastro-tipoDocumento .invalid').length;

		if (campos_invalidos > 0) {
			toastr.error('Preencha todos os campos corretamente.', 'Erro');
			return false;
		}

		$.ajax({
			url: '../../telas_ajax/controle/documento.php',
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

	$('#form-busca-documento').on('submit', (e) => {
		var dados = $(e.target).serialize();
		var campos_invalidos = $('#form-busca-documento .invalid').length;

		if (campos_invalidos > 0) {
			toastr.error('Preencha todos os campos corretamente.', 'Erro');
			return false;
		}

		$.ajax({
			url: 'telas_ajax/controle/documento.php',
			type: 'POST',
			data: dados,
			success: (response) => {
				var responseObjeto = JSON.parse(response)
				var tabela = $('#tabela-busca_resultado2')
				var texto = $('#texto-busca_resultado2')
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
							<td>${objeto['assunto']}</td>
							<td>${objeto['nome']}</td>
							<td>${objeto['bloco']}</td>
							<td>${objeto['dataCadastro']}</td>
						</tr>
						`)
					})

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

