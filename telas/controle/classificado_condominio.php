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

		<a class="nav-link" id="categoria-tab" data-toggle="tab" href="#categoria" role="tab" aria-controls="categoria" aria-selected="false">Categoria</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="busca-tab" data-toggle="tab" href="#busca" role="tab" aria-controls="busca" aria-selected="false">Procurar</a>

	</li>

</ul>



<div class="tab-content" id="abasConteudo">

	<div class="tab-pane fade show active" id="cadastro" role="tabpanel" aria-labelledby="cadastro-tab">
		<form id="form-cadastro-classificado">
		<input type="hidden" name="acao" value="cadastro" />
		<input type="hidden" name="tipo" value="classificado" />
		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Cadastrar um classificado</h4>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="titulo-classificado">Título</label>

							<input class="form-control" type="text" id="titulo-classificado" name="titulo-classificado" />

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="arquivo-cadastro">Arquivo</label>

							<div class="input-group">

								<div class="custom-file">

									<!-- <input type="file" class="custom-file-input" id="arquivo-cadastro" name="arquivo-cadastro" /> -->

									<label class="custom-file-label" for="arquivo-cadastro">Nenhum arquivo selecionado.</label>

								</div>

							</div>

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label for="tipo-categoria">Categoria</label>

							<select class="custom-select form-control" id="tipo-categoria" name="tipo-categoria">

								<option value="0">Selecione uma categoria</option>
								
								<?php
									
									$query = "select * from classificadoCategoria";
			
									$resultado = mysqli_query($link_condominio, $query);
									while($classificadoCategoria = mysqli_fetch_assoc($resultado)){
										$classificadoCategoria_id = $classificadoCategoria["id"];
										$classificadoCategoria_categoria = $classificadoCategoria['categoria'];
										echo "<option value='$classificadoCategoria_id'>$classificadoCategoria_categoria</option>";
									}
									?>

							</select>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="tipo-cadastro">Fornecedor</label>

							<select class="custom-select form-control" id="tipo-cadastro" name="tipo-cadastro">

								<option value="0">Selecione um fornecedor</option>
								
								<?php
									
									$query = "select * from classificadoFornecedor";
			
									$resultado = mysqli_query($link_condominio, $query);
									while($classificadoFornecedor = mysqli_fetch_assoc($resultado)){
										$classificadoFornecedor_id = $classificadoFornecedor["id"];
										$classificadoFornecedor_nome = $classificadoFornecedor['nome'];
										echo "<option value='$classificadoFornecedor_id'>$classificadoFornecedor_nome</option>";
									}
									?>


							</select>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="valor-cadastro">Valor</label>

							<div class="input-group">

								<div class="input-group-prepend">

									<span class="input-group-text">R$</span>

								</div>

								<input class="form-control" type="text" id="valor-cadastro" name="valor-cadastro" />

							</div>

						</div>

					</div>

				</div>



				<div class="form-group">

					<label for="observacao-cadastro">Texto</label>

					<textarea id="observacao-cadastro" name="observacao-cadastro" class="form-control ckeditor" rows="3"></textarea>

				</div>



				<button class="btn btn-primary">Cadastrar</button>
				</form>
			</div>

		</div>

<!-- <script src="../assets/js/uploader.js"></script> -->



	<div class="tab-pane fade" id="categoria" role="tabpanel" aria-labelledby="categoria-tab">
	<form id="form-cadastro-categoria">
		<input type="hidden" name="acao" value="cadastro" />
		<input type="hidden" name="tipo" value="categoria" />
		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Cadastrar Categoria</h4>



				<div class="form-group">

					<label for="nome-categoria">Nome</label>

					<input class="form-control" type="text" id="nome-categoria" name="nome-categoria"/>

				</div>



				<button class="btn btn-primary">Cadastrar</button>

			</div>

		</div>



		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Resultado</h4>

				<div class="relatorios">

					<i class="fad fa-file-pdf gerar-pdf"></i>

					<i class="fad fa-file-excel gerar-xls"></i>

				</div>



				<div id="busca-resultado">

					<h5 class="card-subtitle" style="text-align: center;">Nenhum resultado encontrado.</h5>

				</div>

			</div>

		</div>
	</form>
	</div>



	<div class="tab-pane fade" id="busca" role="tabpanel" aria-labelledby="busca-tab">
		<form id="form-busca-classificado">
		<input type="hidden" name="acao" value="buscar" />
		<input type="hidden" name="tipo" value="categoria" />
		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Faça uma busca</h4>



				<div class="form-group">

					<label for="titulo-classificado">Título</label>

					<input class="form-control" type="text" name="titulo-classificado" id="titulo-classificado" />

				</div>

				<button class="btn btn-primary" type="submit">Procurar</button>

			</div>
			</form>
		</div>



		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Resultado</h4>

				<div class="relatorios">

					<i class="fad fa-file-pdf gerar-pdf"></i>

					<i class="fad fa-file-excel gerar-xls"></i>

				</div>



				<div id="busca-resultado">
					<h5 id="texto-busca_resultado2" class="card-subtitle" style="text-align: center">Aqui aparecerão todos os resultados da busca.</h5>

					<div id="tabela-busca_resultado2" class="table-responsive" style="display: none">
						<table class="table table-bordered table-hover">
							<thead class="bg-inverse text-white">
								<tr>
									<th>Id</th>
									<th>Titulo</th>
									<th>Categoria</th>
									<th>Fornecedor</th>
									<th>Valor</th>
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

</div>



<!-- <script src="../assets/js/uploader.js"></script> -->



<script>

	CKEDITOR.replaceAll('ckeditor');

	$('input[type="date"]').val(new Date().today());
	
	$( "#categoria-tab" ).click(function() {
		$( "#form-cadastro-classificado" ).hide();
		$( "#form-busca-classificado" ).hide();
		$( "#form-cadastro-categoria" ).show();
	});
	
	$( "#cadastro-tab" ).click(function() {
		$( "#form-cadastro-classificado" ).show();
		$( "#form-busca-classificado" ).hide();
		$( "#form-cadastro-categoria" ).hide();
	});
	
	$( "#busca-tab" ).click(function() {
		$( "#form-cadastro-classificado" ).hide();
		$( "#form-busca-classificado" ).show();
		$( "#form-cadastro-categoria" ).hide();
	});
	
	$('#form-cadastro-classificado').on('submit', (e) => {
		var dados = $(e.target).serialize();
		var campos_invalidos = $('#form-cadastro-classificado .invalid').length;

		if (campos_invalidos > 0) {
			toastr.error('Preencha todos os campos corretamente.', 'Erro');
			return false;
		}

		$.ajax({
			url: '../../telas_ajax/controle/classificado.php',
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
	
		$('#form-cadastro-categoria').on('submit', (e) => {
		var dados = $(e.target).serialize();
		var campos_invalidos = $('#form-cadastro-categoria .invalid').length;

		if (campos_invalidos > 0) {
			toastr.error('Preencha todos os campos corretamente.', 'Erro');
			return false;
		}

		$.ajax({
			url: '../../telas_ajax/controle/classificado.php',
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
	
	$('#form-busca-classificado').on('submit', (e) => {
		var dados = $(e.target).serialize();
		var campos_invalidos = $('#form-busca .invalid').length;

		if (campos_invalidos > 0) {
			toastr.error('Preencha todos os campos corretamente.', 'Erro');
			return false;
		}

		$.ajax({
			url: 'telas_ajax/controle/classificado.php',
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
							<td>${objeto['id']}</td>
							<td>${objeto['titulo']}</td>
							<td>${objeto['categoria']}</td>
							<td>${objeto['fornecedor']}</td>
							<td>${objeto['valor']}</td>
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

