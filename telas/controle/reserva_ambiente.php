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

	<div class="tab-pane fade show active" id="cadastro" role="tabpanel" aria-labelledby="cadastro-tab">
		<form id="form-cadastro-reservaAmbiente">
		<input type="hidden" name="acao" value="cadastro" />
		<input type="hidden" name="tipo" value="reservaAmbiente" />
		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Informações do cadastro</h4>

				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label for="titulo-cadastro">Título</label>

							<input class="form-control" type="text" name="titulo-cadastro" id="titulo-cadastro" />

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

							<label for="ambiente-cadastro">Ambiente</label>

							<select  class="custom-select form-control" name="ambiente-cadastro" id="ambiente-cadastro">
								<option selected>Seleciona um ambiente.</option>
								<?php
								
								$query = "select * from ambiente";
		
								$resultado = mysqli_query($link_condominio, $query);
								while($ambiente = mysqli_fetch_assoc($resultado)){
									$ambiente_id = $ambiente["id"];
									$ambiente_nome = $ambiente['nome'];
									echo "<option value='$ambiente_id'>$ambiente_nome</option>";
								}
								?>

							</select>

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="hora_inicial-cadastro">Horário inicial</label>

							<input class="form-control" value="08:00" type="time" name="hora_inicial-cadastro" id="hora_inicial-cadastro" />

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="hora_final-cadastro">Horário final</label>

							<input class="form-control" type="time" value="22:00" name="hora_final-cadastro" id="hora_final-cadastro" />

						</div>

					</div>

				</div>

				<script>

					$(document).ready(function(){	
						$('#bloco-cadastro').change(function(){
							console.log($('#bloco-cadastro').val());
							$('#apto-cadastro').load('/telas/master/listaApartamento.php?bloco='+$('#bloco-cadastro').val()+'&tipo=cleanMorador');
							
						});

						$('#apto-cadastro').change(function(){
							console.log($(this).val());
							$('#morador-cadastro').load('/telas/master/listaMorador.php?bloco='+$('#bloco-cadastro').val()+'&apartamento='+$(this).val());
						});

						$('#bloco-busca').change(function(){
							console.log($('#bloco-busca').val());
							$('#apto-busca').load('/telas/master/listaApartamento.php?bloco='+$('#bloco-busca').val()+'&tipo=cleanMorador');
							
						});

						$('#apto-busca').change(function(){
							console.log($(this).val());
							$('#morador-busca').load('/telas/master/listaMorador.php?bloco='+$('#bloco-busca').val()+'&apartamento='+$(this).val());
						});
						
					});

				</script>



				<div class="row div-morador">

					<div class="col-md-4">

						<div class="form-group">

							<label for="bloco-cadastro">Bloco</label>

							<select class="custom-select form-control" name="bloco-cadastro" id="bloco-cadastro">

								<option selected>Seleciona um bloco.</option>
								<?php $bloco = $db->selectBloco($dbatual); ?>
							</select>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="apto-cadastro">Apartamento</label>

							<select class="custom-select form-control" name="apto-cadastro" id="apto-cadastro">

								<option selected>Selecione um apartamento</option>

							</select>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="morador-cadastro">Morador</label>

							<select class="custom-select form-control" name="morador-cadastro" id="morador-cadastro">

								<option selected>Selecione um morador</option>

							</select>

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label for="seguranca-cadastro">Segurança</label>

							<input class="form-control" type="number" name="seguranca-cadastro" id="seguranca-cadastro" />

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="status-cadastro">Status</label>



							<input type="radio" name="status-cadastro"  id="confirmada_status-cadastro" class="multipla" value='1'/>

							<label for="confirmada_status-cadastro" class="multipla btn-outline-secondary">Confirmada</label>



							<input type="radio" name="status-cadastro"  id="cobrada_status-cadastro" class="multipla" value='2'/>

							<label for="cobrada_status-cadastro" class="multipla btn-outline-secondary">Já cobrada</label>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="isento-cadastro">Isento?</label>



							<input type="radio" name="isento-cadastro" id="sim_isento-cadastro" class="multipla" value='1' />

							<label for="sim_isento-cadastro" class="multipla btn-outline-success">Sim</label>



							<input type="radio" name="isento-cadastro" id="nao_isento-cadastro" class="multipla" value='0' />

							<label for="nao_isento-cadastro" class="multipla btn-outline-danger">Não</label>

						</div>

					</div>

				</div>



				<div class="form-group">

					<label for="observacao-cadastro">Observação</label>

					<textarea id="observacao-cadastro" name="observacao-cadastro" rows="5" class="form-control ckeditor"></textarea>

				</div>



				<div class="form-group">

					<label for="convidados-cadastro">Convidados por</label>



					<input type="radio" name="convidados-cadastro"  id="arquivo_convidados-cadastro" class="multipla" value='arquivo' />

					<label for="arquivo_convidados-cadastro" class="multipla btn-outline-secondary">Arquivo</label>



					<input type="radio" name="convidados-cadastro" checked id="digitavel_convidados-cadastro" class="multipla" value='digitavel' />

					<label for="digitavel_convidados-cadastro" class="multipla btn-outline-secondary">Digitável</label>

<!-- <script src="../assets/js/uploader.js"></script> -->



				<div class="form-group convidados-arquivo" style="display: none;">

					<label for="arquivo-cadastro">Arquivo</label>

					<div class="input-group">

						<div class="custom-file">

							<input type="file" class="custom-file-input" id="arquivo-cadastro" />

							<label class="custom-file-label" for="arquivo-cadastro">Nenhum arquivo selecionado.</label>

						</div>

					</div>

				</div>



				<div class="convidados-digitavel">

					<div class="row">

						<div class="col-md-6">

							<div class="form-group">

								<label for="nome_convidados-cadastro">Nome</label>

								<input class="form-control" type="name" name="nome_convidados-cadastro" id="nome_convidados-cadastro" />

							</div>

						</div>

						<div class="col-md-5">

							<div class="form-group">

								<label for="doc_convidados-cadastro">Documento</label>

								<input class="form-control" type="name" name="doc_convidados-cadastro" id="doc_convidados-cadastro" />

							</div>

						</div>

						<div class="col-md-5">

							<div class="form-group">

								<label for="quantidade-cadastro">Quantidade</label>

								<input class="form-control" type="name" name="quantidade-cadastro" id="quantidade-cadastro" />

							</div>

						</div>
						<!--
						<div class="col-md-1">

							<a><span class="input-group-text adicionar-convidado">+</span></a>

						</div>
						!-->
					</div>

				</div>



				<button class="btn btn-primary" type="submit">Cadastrar</button>

			</div>

		</div>
		</form>
	</div>
	</div>


	<div class="tab-pane fade" id="busca" >
		<form id="form-busca-reservaAmbiente">
		<input type="hidden" name="acao" value="busca" />
		<input type="hidden" name="tipo" value="reservaAmbiente" />
		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Faça uma busca</h4>



				<div class="row mt-4">

					<div class="col-md-6">

						<div class="form-group">

							<label for="ambiente-busca">Ambiente</label>

							<select class="custom-select form-control" name="ambiente-busca" id="ambiente-busca">

								<option value="" selected>Selecione um Ambiente</option>
								<?php $ambiente = $db->selectAmbiente($dbatual); ?>
							</select>

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="status-busca">Status</label>

							<select class="custom-select form-control" name="status-busca" id="status-busca">

								<option value="" selected>Selecione um Status</option>
								<option value="1">Confirmada</option>
								<option value="1">Já Cobrada</option>
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



				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label for="bloco-busca">Bloco</label>

							<select class="custom-select form-control" name="bloco-busca" id="bloco-busca">

								<option value=""selected>Seleciona um bloco.</option>
								<?php $bloco = $db->selectBloco($dbatual); ?>

							</select>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="apto-busca">Apartamento</label>

							<select class="custom-select form-control" name="apto-busca" id="apto-busca">

							<option  value="" selected>Selecione um apartamento</option>

							</select>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="morador-busca">Morador</label>

							<select class="custom-select form-control" name="morador-busca" id="morador-busca">

								<option   value="" selected>Selecione um Morador</option>

							</select>

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
					<i class="fad fa-file-pdf gerar-pdf"></i>

					<i class="fad fa-file-excel gerar-xls " id="btn-excel"></i>
				</div>

				<div id="busca-resultado">
					<h5 id="texto-busca_resultado" class="card-subtitle" style="text-align: center">Aqui aparecerão todos os resultados da busca.</h5>

					<div id="tabela-busca_resultado" class="table-responsive" style="display: none">
						<table class="table table-bordered table-hover">
							<thead class="bg-inverse text-white">
								<tr>
									<th>#</th>
									<th>Ambiente</th>
									<th>Bloco</th>
									<th>Apartamento</th>
									<th>Morador</th>
									<th>Data</th>
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


	$("#cadastro-tab").click(function(){
		$("#cadastro").show();
		$("#busca").hide();
	});

	$("#busca-tab").click(function(){
		$("#cadastro").hide();
		$("#busca").show();
	});


	$('input[name="convidados-cadastro"]').on('click', (e) => {

		if ($(e.target).attr('id') == 'arquivo_convidados-cadastro') {

			$('.convidados-digitavel').hide();

			$('.convidados-arquivo').show();

		} else if ($(e.target).attr('id') == 'digitavel_convidados-cadastro') {

			$('.convidados-arquivo').hide();

			$('.convidados-digitavel').show();

		}

	});



	$('body').on('click', '.adicionar-convidado', (e) => {

		$('.convidados-digitavel').append(

			`<div class="row" style="margin-top: -5px;">

				<div class="col-md-6">

					<div class="form-group">

						<label for="nome-busca">Nome</label>

						<input class="form-control" type="name" id="nome-busca" />

					</div>

				</div>

				<div class="col-md-5">

					<div class="form-group">

						<label for="nome-busca">Documento</label>

						<input class="form-control" type="name" id="nome-busca" />

					</div>

				</div>

				<div class="col-md-1">

					<a class="remover_campo-apto"><span class="input-group-text remover-convidado">×</span></a>

					<a class="btn-add_convidado"><span class="input-group-text adicionar-convidado">+</span></a>

				</div>

			</div>`

		);

		setarTooltips();

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

	Excel('btn-excel','excel1','../../telas_ajax/controle/reserva_ambiente.php','../../telas_ajax/controle/reserva_ambiente.csv');


	$('body').on('click', '.remover-convidado', (e) => {

		$(e.target).closest('.row').remove();

	});

	$('#form-cadastro-reservaAmbiente').on('submit', (e) => {
		var dados = $(e.target).serialize();
		var campos_invalidos = $('#form-cadastro-reservaAmbiente .invalid').length;

		if (campos_invalidos > 0) {
			toastr.error('Preencha todos os campos corretamente.', 'Erro');
			return false;
		}

		$.ajax({
			url: '../../telas_ajax/controle/reserva_ambiente.php',
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

	$('#form-busca-reservaAmbiente').on('submit', (e) => {
		var dados = $(e.target).serialize();
		var campos_invalidos = $('#form-busca-reservaAmbiente .invalid').length;

		if (campos_invalidos > 0) {
			toastr.error('Preencha todos os campos corretamente.', 'Erro');
			return false;
		}

		$.ajax({
			url: 'telas_ajax/controle/reserva_ambiente.php',
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
							<td>${objeto['bloco']}</td>
							<td>${objeto['apartamento']}</td>
							<td>${objeto['morador']}</td>
							<td>${objeto['data']}</td>
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

