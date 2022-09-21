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

		<a class="nav-link" id="busca-tab" data-toggle="tab" href="#busca" role="tab" aria-controls="busca" aria-selected="false">Procurar</a>

	</li>

</ul>



<div class="tab-content" id="abasConteudo">
	<form id="form-cadastro-aviso">
		<input type="hidden" name="acao" value="cadastro" />
		<input type="hidden" name="tipo" value="aviso" />
		
		<div class="tab-pane fade show active" id="cadastro" role="tabpanel" aria-labelledby="cadastro-tab">

			<div class="card" width="50%">

				<div class="card-body">

					<h4 class="card-title">Informações do cadastro</h4>



					<div class="form-group mt-4">

						<label for="titulo-cadastro">Assunto</label>

						<input class="form-control" type="text" id="titulo-cadastro" name="titulo-cadastro" />

					</div>



					<div class="row">

						<div class="col-md-4">

							<div class="form-group">

								<label for="data-cadastro">Data de vencimento</label>

								<input class="form-control" type="date" id="data-cadastro" name="data-cadastro" />

							</div>

						</div>



						<div class="col-md-4">

							<div class="form-group">

								<label for="bloco-cadastro">Bloco</label>

								<select class="custom-select form-control" id="bloco-cadastro" name="bloco-cadastro">

									<option value="0" selected>Selecione um bloco</option>
									<?php $bloco = $db->selectBloco($dbatual); ?>
								</select>

							</div>

						</div>

						<div class="col-md-4">

							<div class="form-group">

								<label for="arquivo-cadastro">Arquivo</label>

								<div class="input-group">

									<div class="custom-file">

										<input type="file" class="custom-file-input" id="arquivo-cadastro" name="arquivo-cadastro" />

										<label class="custom-file-label" for="arquivo-cadastro">Nenhum arquivo selecionado.</label>

									</div>

								</div>

							</div>

						</div>

					</div>



					<div class="form-group">

						<label for="texto-cadastro">Texto</label>

						<textarea id="texto-cadastro" name="texto-cadastro" rows="5" class="form-control ckeditor"></textarea>

	<!-- <script src="../assets/js/uploader.js"></script> -->



					<button class="btn btn-primary">Cadastrar</button>

				</div>

			</div>
			</form>
		</div>




	<div class="tab-pane fade" id="busca" role="tabpanel" aria-labelledby="busca-tab">
		<form id="form-busca-aviso">
		<input type="hidden" name="acao" value="buscar" />
		<input type="hidden" name="tipo" value="aviso" />
		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Faça uma busca</h4>



				<div class="form-group">

					<label for="busca-titulo-aviso">Título</label>

					<input class="form-control" type="text" name="busca-titulo-aviso" id="busca-titulo-aviso" />

				</div>

				<button class="btn btn-primary" type="submit">Procurar</button>

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
					<h5 id="texto-busca_resultado2" class="card-subtitle" style="text-align: center">Aqui aparecerão todos os resultados da busca.</h5>

					<div id="tabela-busca_resultado2" class="table-responsive" style="display: none">
						<table class="table table-bordered table-hover">
							<thead class="bg-inverse text-white">
								<tr>
									<th>Assunto</th>
									<th>Data</th>
									<th>Bloco</th>
									<th>Texto</th>
								</tr>
							</thead>
							<tbody class="border border-inverse"></tbody>
						</table>
					</div>
				</div>

			</div>

		</div>
		</form>
		</div>
		</div>
	</div>
</div>



<!-- <script src="../assets/js/uploader.js"></script> -->



<script>

	CKEDITOR.replaceAll('ckeditor');
	
//	$( "#cadastro-tab" ).click(function() {
//		$( "#form-cadastro-aviso" ).show();
//		$( "#form-busca-aviso" ).hide();
//	});
	
//	$( "#busca-tab" ).click(function() {
//		$( "#form-cadastro-aviso" ).hide();
//		$( "#form-busca-aviso" ).show();
//	});

	$('#form-cadastro-aviso').on('submit', (e) => {
		var dados = $(e.target).serialize();
		var campos_invalidos = $('#form-cadastro-aviso .invalid').length;

		if (campos_invalidos > 0) {
			toastr.error('Preencha todos os campos corretamente.', 'Erro');
			return false;
		}

		$.ajax({
			url: '../../telas_ajax/controle/aviso_morador.php',
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
	
	$('#form-busca-aviso').on('submit', (e) => {
		var dados = $(e.target).serialize();
		var campos_invalidos = $('#form-busca .invalid').length;

		if (campos_invalidos > 0) {
			toastr.error('Preencha todos os campos corretamente.', 'Erro');
			return false;
		}

		$.ajax({
			url: 'telas_ajax/controle/aviso_morador.php',
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
							<td>${objeto['assunto']}</td>
							<td>${objeto['data']}</td>
							<td>${objeto['bloco']}</td>
							<td>${objeto['texto']}</td>
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

