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

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="status-tab" data-toggle="tab" href="#status" role="tab" aria-controls="status" aria-selected="false">Status</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="tipo-tab" data-toggle="tab" href="#tipo" role="tab" aria-controls="tipo" aria-selected="false">Tipo</a>

	</li>

</ul>



<div class="tab-content" id="abasConteudo">

	<div class="tab-pane fade show active" id="cadastro" role="tabpanel" aria-labelledby="cadastro-tab">
		<form id="form-cadastro-achadosPerdidos">
		<input type="hidden" name="acao" value="cadastro" />
		<input type="hidden" name="tipo" value="achados" />
		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Informações do cadastro</h4>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="descricao-cadastro">Descrição</label>

							<input class="form-control" type="text" name="descricao-cadastro" id="descricao-cadastro" />

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="imagem-cadastro">Imagem</label>

							<div>

								<div class="input-group">

									<div class="custom-file">

										<input type="file" class="custom-file-input" name='imagem' data-pasta='achadosPerdidos' id="imagem-cadastro" />

										<label class="custom-file-label" for="imagem-cadastro"></label>

										<i class="preview-file far fa-eye d-none"></i>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label for="data-cadastro">Data</label>

							<input class="form-control" type="date" name="data-cadastro" id="data-cadastro" />

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="tipo-cadastro">Tipo</label>

							<select class="custom-select form-control" name="tipo-cadastro" id="tipo-cadastro">

								<option value="">Nenhum tipo cadastrado.</option>
								<?php
								
								$query = "select * from tipoAchadosPerdidos";
		
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

							<label for="local-cadastro">Local</label>

							<input class="form-control" type="text" name="local-cadastro" id="local-cadastro" />

						</div>

					</div>

				</div>



				<button class="btn btn-primary" type="submit">Cadastrar</button>

			</div>

		</div>
		
	</div>
	</form>
</div>

	<div class="tab-pane fade" id="busca" role="tabpanel" aria-labelledby="busca-tab">
	
		<div class="card">
			<form id="form-buscar-achadosPerdidos">
			<input type="hidden" name="acao" value="buscar" />
			<input type="hidden" name="tipo" value="achados" />
			<div class="card-body">

				<h4 class="card-title">Faça uma busca</h4>

				<h5 class="card-subtitle">Aqui você pode fazer uma busca pelos ambientes cadastrados e realizar edições.</h5>



				<div class="form-group">

					<label for="nome-busca">Nome</label>

					<input class="form-control" type="text" name="nome-busca"  id="nome-busca" />

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



<!-- <script src="../assets/js/uploader.js"></script> -->

                    <div class="col-md-6">

						<div class="form-group">

							<label for="tipo-busca">Tipo</label>

							<select  class="custom-select form-control" id="tipo-busca">

								<option value="">Nenhum tipo cadastrado.</option>
								<?php
								
								$query = "select * from tipoAchadosPerdidos";
		
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

					<div class="col-md-6">

						<div class="form-group">

							<label for="status-busca">Status</label>

							<select class="custom-select form-control" name="status-busca" id="status-busca">

								<option value="">Nenhum status cadastrado.</option>
								<?php
								
								$query = "select * from statusAchadosPerdidos";
		
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



				<button class="btn btn-primary" type="submit">Procurar</button>
				
			</div>
			</form>
		



		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Resultado</h4>

				<div class="relatorios">
					<i class="fad fa-file-pdf gerar-pdf" id="btn-pdf"></i>

					<i class="fad fa-file-excel gerar-xls " id="btn-excel"></i>
				</div>

				<div id="busca-resultado">
					<h5 id="texto-busca_resultado" class="card-subtitle" style="text-align: center">Aqui aparecerão todos os resultados da busca.</h5>

					<div id="tabela-busca_resultado" class="table-responsive" style="display: none">
						<table class="table table-bordered table-hover">
							<thead class="bg-inverse text-white">
								<tr>
									<th>#</th>
									<th>Descrição</th>
									<th>Tipo</th>
									<th>Local</th>
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
</div>


	<div class="tab-pane fade" id="status" role="tabpanel" aria-labelledby="status-tab">
		
		<div class="card">
		<form id="form-cadastro-status">
			<input type="hidden" name="acao" value="cadastro" />
			<input type="hidden" name="tipo" value="status" />
			<div class="card-body">

				<h4 class="card-title">Cadastrar um status</h4>



				<div class="form-group">

					<label for="nome-status">Nome</label>

					<input class="form-control" type="text" name="nome-status" id="nome-status" />

                </div>



				<button class="btn btn-primary" type="submit">Cadastrar</button>

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

					<h5 class="card-subtitle" style="text-align: center;">Nenhum resultado encontrado.</h5>

				</div>

			</div>

		</div>
		
    </div>



	<div class="tab-pane fade" id="tipo" role="tabpanel" aria-labelledby="tipo-tab">

		<div class="card">
		<form id="form-cadastro-tipo">
			<input type="hidden" name="acao" value="cadastro" />
			<input type="hidden" name="tipo" value="tipo" />
			<div class="card-body">

				<h4 class="card-title">Cadastrar um tipo</h4>



				<div class="form-group">

					<label for="nome-tipo">Nome</label>

					<input class="form-control" type="text" name="nome-tipo" id="nome-tipo" />

                </div>



				<button class="btn btn-primary" type="submit">Cadastrar</button>

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

					<h5 class="card-subtitle" style="text-align: center;">Nenhum resultado encontrado.</h5>

				</div>

			</div>

		</div>

	</div>

</div>



<!-- <script src="../assets/js/uploader.js"></script> -->



<script>

	CKEDITOR.replaceAll('ckeditor');

	$('input[type="date"]').val(new Date().today());


	$("#status-tab").click(function(){
		$("#status").show();
		$("#abasConteudo").hide();
		$("#tipo").hide();
		$("#busca").hide();
	});

	$("#cadastro-tab").click(function(){
		$("#status").hide();
		$("#abasConteudo").show();
		$("#tipo").hide();
		$("#busca").hide();
	});

	$("#tipo-tab").click(function(){
		$("#status").hide();
		$("#abasConteudo").hide();
		$("#tipo").show();
		$("#busca").hide();
	});

	$("#busca-tab").click(function(){
		$("#status").hide();
		$("#abasConteudo").hide();
		$("#tipo").hide();
		$("#busca").show();
	});
	

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

	function cadastrar(name,id){

		$('#'+id).on('submit', (e) => {
			var dados = $(e.target).serialize();
			var campos_invalidos = $('#'+id+' .invalid').length;

			if (campos_invalidos > 0) {
				toastr.error('Preencha todos os campos corretamente.', 'Erro');
				return false;
			}

			$.ajax({
				url: '../../telas_ajax/controle/'+name+'.php',
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
	}

	
	Excel('btn-excel','excel1','../../telas_ajax/controle/achados_perdidos.php','../../telas_ajax/controle/achados_perdidos.csv');

	cadastrar('achados_perdidos','form-cadastro-status');

	cadastrar('achados_perdidos','form-cadastro-tipo');


	$('#form-cadastro-achadosPerdidos').on('submit', (e) => {
		var dados = $(e.target).serialize();
		var campos_invalidos = $('#form-cadastro-achadosPerdidos .invalid').length;

		if (campos_invalidos > 0) {
			toastr.error('Preencha todos os campos corretamente.', 'Erro');
			return false;
		}

		$.ajax({
			url: '../../telas_ajax/controle/achados_perdidos.php',
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


	$('#form-buscar-achadosPerdidos').on('submit', (e) => {
		var dados = $(e.target).serialize();
		var campos_invalidos = $('#form-buscar-achadosPerdidos .invalid').length;

		if (campos_invalidos > 0) {
			toastr.error('Preencha todos os campos corretamente.', 'Erro');
			return false;
		}

		$.ajax({
			url: 'telas_ajax/controle/achados_perdidos.php',
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
							<td>${objeto['descricao']}</td>
							<td>${objeto['tipo']}</td>
							<td>${objeto['local']}</td>
							<td>${objeto['status']}</td>
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

