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

		<a class="nav-link active" id="entrada-tab" data-toggle="tab" href="#entrada" role="tab" aria-controls="entrada" aria-selected="true">Entrada</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="saida-tab" data-toggle="tab" href="#saida" role="tab" aria-controls="saida" aria-selected="false">Saída</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="aut_entrada-tab" data-toggle="tab" href="#aut_entrada" role="tab" aria-controls="aut_entrada" aria-selected="false">Aut. de Entrada</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="cadastro-tab" data-toggle="tab" href="#cadastro" role="tab" aria-controls="cadastro" aria-selected="false">Cadastro</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="relatorio-tab" data-toggle="tab" href="#relatorio" role="tab" aria-controls="relatorio" aria-selected="false">Relatório</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="convidado-tab" data-toggle="tab" href="#convidado" role="tab" aria-controls="convidado" aria-selected="false">Convidado</a>

	</li>

</ul>



<div class="tab-content" id="abasConteudo">

	<div class="tab-pane fade show active" id="entrada" role="tabpanel" aria-labelledby="entrada-tab">
	<form id="form-cadastro-controle">
		<input type="hidden" name="acao" value="cadastro" />
		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Informações da entrada</h4>



				<div class="form-group mt-4">

					<label for="entrada-entrada">Entrada de:</label>



					<input type="radio" name="morador_tipo-entrada" value="pedestre" id="pedestre_tipo-entrada" class="tipo_entrada-radio multipla" />

					<label for="pedestre_tipo-entrada" class="multipla btn-outline-secondary">Pedestre</label>



					<input type="radio" name="morador_tipo-entrada" value="veiculo" id="veiculo_tipo-entrada" class="tipo_entrada-radio multipla" />

					<label for="veiculo_tipo-entrada" class="multipla btn-outline-secondary">Veículo</label>



					<input type="radio" checked name="morador_tipo-entrada" value="morador" id="morador_tipo-entrada" class="tipo_entrada-radio multipla" />

					<label for="morador_tipo-entrada" class="multipla btn-outline-secondary">Morador</label>

				</div>



				<div class="entrada_visitante-div d-none">

					<div class="row">

						<div class="col-md-6">

							<div class="form-group">

								<label for="nome-entrada">Nome</label>

								<input class="form-control simples-input" type="text" name="nome-entrada" id="nome-entrada" />

							</div>

						</div>

						<div class="col-md-6">

							<div class="form-group">

								<label for="rg-entrada">RG</label>

								<input class="form-control rg-input" type="text" name="rg-entrada" id="rg-entrada" />

							</div>

						</div>

					</div>



					<div class="veiculo_div-entrada tipo_entrada-div">

						<div class="row">

							<div class="col-md-3">

								<div class="form-group">

									<label for="placa-entrada">Placa</label>

									<input class="form-control placa_carro-input" type="text" name="placa-entrada" id="placa-entrada" />

								</div>

							</div>

							<div class="col-md-3">

								<div class="form-group">

									<label for="cor-entrada">Cor</label>

									<input class="form-control simples-input" type="text" name="cor-entrada" id="cor-entrada" />

								</div>

							</div>

							<div class="col-md-3">

								<div class="form-group">

									<label for="modelo-entrada">Modelo</label>

									<input class="form-control simples-input" type="text" name="modelo-entrada" id="modelo-entrada" />

								</div>

							</div>

							<div class="col-md-3">

								<div class="form-group">

									<label for="ocupantes-entrada">Ocupantes</label>

									<input class="form-control simples-input" type="number" name="ocupantes-entrada" id="ocupantes-entrada" />

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>



		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Informações do morador que autorizou o acesso</h4>

				<script>
					$(document).ready(function(){
						$('#bloco_autorizado-entrada').change(function(){
							console.log($('#bloco_autorizado-entrada').val());
							$('#apto_autorizado-entrada').load('/telas/master/listaApartamento.php?bloco='+$('#bloco_autorizado-entrada').val()+'&tipo=cleanMorador');
							
						});

						$('#apto_autorizado-entrada').change(function(){
							console.log($(this).val());
							$('#morador_autorizado-entrada').load('/telas/master/listaMorador.php?bloco='+$('#bloco_autorizado-entrada').val()+'&apartamento='+$(this).val());
						});
						
						$('#bloco_autorizado-entrada2').change(function(){

							$('#apto_autorizado-entrada2').load('/telas/master/listaApartamento.php?bloco='+$('#bloco_autorizado-entrada2').val()+'&tipo=cleanMorador');
							
						});
					});

				</script>


				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label for="bloco_autorizado-entrada">Bloco</label>

							<select class="custom-select form-control outros-input" name="bloco_autorizado-entrada" id="bloco_autorizado-entrada">
								<option selected="">Não existem blocos cadastrados.</option>
								<?php
									$query = "select * from bloco";
									
									$resultado = mysqli_query($link_condominio, $query);
									while($bloco = mysqli_fetch_assoc($resultado)){
								?>
										<option value="<?= $bloco['id']?>"><?= $bloco['bloco']?></option>
								<?php
									}
								?>
							</select>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="apto_autorizado-entrada">Apartamento</label>

							<select class="custom-select form-control outros-input" name="apto_autorizado-entrada" id="apto_autorizado-entrada">

								<option selected="">Não existem apartamentos cadastrados.</option>

								<?php
									$query = "select * from apartamento";
									
									$resultado = mysqli_query($link_condominio, $query);
									while($bloco = mysqli_fetch_assoc($resultado)){
								?>
										<option value="<?= $bloco['apartamento']?>"><?= $bloco['apartamento']?></option>
								<?php
									}
								?>
							</select>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="apto_autorizado-entrada">Morador</label>

							<select class="custom-select form-control outros-input" name="morador_autorizado-entrada" id="morador_autorizado-entrada">

								<option selected="">Selecione o bloco e o apartamento.</option>

							</select>

						</div>

					</div>

				</div>



				<div class="form-group">

					<label for="numero_cartao-entrada">Número do cartão</label>

					<input class="form-control simples-input" type="number" name="numero_cartao-entrada" id="numero_cartao-entrada" />

				</div>



				<button class="btn btn-primary mt-4" type="submit">Cadastrar</button>

			</div>

		</div>
		</form>
	</div>



	<div class="tab-pane fade" id="saida" role="tabpanel" aria-labelledby="saida-tab">
		<form id="form-cadastro-controleSaida">
		<input type="hidden" name="acao" value="cadastro" />
		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Informações da saída</h4>



				<div class="row">

					<div class="col-md-3">

						<div class="form-group">

							<label for="placa-saida">Placa</label>

							<input class="form-control placa_carro-input" type="text" name="placa-saida" id="placa-saida" />

						</div>

					</div>

					<div class="col-md-3">

						<div class="form-group">

							<label for="visitante-saida">Visitante</label>

							<input class="form-control simples-input" type="text" name="visitante-saida" id="visitante-saida" />

						</div>

					</div>

					<div class="col-md-3">

						<div class="form-group">

							<label for="num_identificacao-saida">Número de identificação</label>

							<input class="form-control simples-input" type="text" name="num_identificacao-saida" id="num_identificacao-saida" />

						</div>

					</div>

					<div class="col-md-3">

						<div class="form-group">

							<label for="num_cartao-saida">Número do cartão</label>

							<input class="form-control simples-input" type="text"  name="num_cartao-saida" id="num_cartao-saida" />

						</div>

					</div>

				</div>



				<button class="btn btn-primary" type="submit">Cadastrar</button>

			</div>

		</div>
		</form>
	</div>



	<div class="tab-pane fade" id="aut_entrada" role="tabpanel" aria-labelledby="aut_entrada-tab">
		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Faça uma busca</h4>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="bloco_autorizado-entrada">Bloco</label>

							<select class="custom-select form-control outros-input" name="bloco_autorizado-entrada" id="bloco_autorizado-entrada2">
								<option selected="">Não existem blocos cadastrados.</option>
								<?php
									$query = "select * from bloco";
									
									$resultado = mysqli_query($link_condominio, $query);
									while($bloco = mysqli_fetch_assoc($resultado)){
								?>
										<option value="<?= $bloco['id']?>"><?= $bloco['bloco']?></option>
								<?php
									}
								?>
							</select>

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="apto_autorizado-entrada">Apartamento</label>

							<select class="custom-select form-control outros-input" name="apto_autorizado-entrada" id="apto_autorizado-entrada2">

								<option selected="">Não existem apartamentos cadastrados.</option>

								<?php
									$query = "select * from apartamento";
									
									$resultado = mysqli_query($link_condominio, $query);
									while($bloco = mysqli_fetch_assoc($resultado)){
								?>
										<option value="<?= $bloco['id']?>"><?= $bloco['apartamento']?></option>
								<?php
									}
								?>
							</select>

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-3">

						<div class="form-group">

							<label for="nome-aut_entrada">Nome</label>

							<input class="form-control" type="text" id="nome-aut_entrada" />

						</div>

					</div>

					<div class="col-md-3">

						<div class="form-group">

							<label for="placa-aut_entrada">Placa</label>

							<input class="form-control placa_carro-input" type="text" id="placa-aut_entrada" />

						</div>

					</div>

					<div class="col-md-3">

						<div class="form-group">

							<label for="cor-aut_entrada">Cor</label>

							<input class="form-control" type="text" id="cor-aut_entrada" />

						</div>

					</div>

					<div class="col-md-3">

						<div class="form-group">

							<label for="modelo-aut_entrada">Modelo</label>

							<input class="form-control" type="text" id="modelo-aut_entrada" />

						</div>

					</div>

				</div>



				<button class="btn btn-primary mt-4">Procurar</button>

				<button class="btn btn-light mt-4">Confirmar entrada</button>

			</div>

		</div>
		</form>
	</div>



	<div class="tab-pane fade" id="cadastro" role="tabpanel" aria-labelledby="cadastro-tab">

		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Cadastro</h4>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="nome-cadastro">Nome</label>

							<input class="form-control simples-input" type="text" id="nome-cadastro" />

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="imagem-cadastro">Imagem</label>

							<div>

								<div class="input-group">

									<div class="custom-file">

										<input type="file" class="custom-file-input outros-input" id="imagem-cadastro" />

										<label class="custom-file-label" for="imagem-cadastro"></label>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="tipo-cadastro">Tipo</label>

							<select disabled class="custom-select form-control outros-input" id="tipo-cadastro">

								<option selected="">Não existem tipos cadastrados.</option>

							</select>

						</div>

					</div>
<!-- <script src="../assets/js/uploader.js"></script> -->
					<div class="col-md-6">

						<div class="form-group">

							<label for="rg-cadastro">RG</label>

							<input class="form-control rg-input" type="text" id="rg-cadastro" />

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-3">

						<div class="form-group">

							<label for="empresa-cadastro">Empresa</label>

							<input class="form-control simples-input" type="text" id="empresa-cadastro" />

						</div>

					</div>

					<div class="col-md-3">

						<div class="form-group">

							<label for="placa-cadastro">Placa</label>

							<input class="form-control placa_carro-input" type="text" id="placa-cadastro" />

						</div>

					</div>

					<div class="col-md-3">

						<div class="form-group">

							<label for="cor-cadastro">Cor</label>

							<input class="form-control simples-input" type="text" id="cor-cadastro" />

						</div>

					</div>

					<div class="col-md-3">

						<div class="form-group">

							<label for="modelo-cadastro">Modelo</label>

							<input class="form-control simples-input" type="text" id="modelo-cadastro" />

						</div>

					</div>

				</div>



				<div class="form-group">

					<label for="observacao-cadastro">Observação</label>

					<textarea id="observacao-cadastro simples-input" rows="5" class="form-control ckeditor"></textarea>

				</div>



				<button class="btn btn-primary">Cadastrar</button>

			</div>

		</div>

	</div>



	<div class="tab-pane fade" id="relatorio" role="tabpanel" aria-labelledby="relatorio-tab">

		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Cadastrar relatório</h4>



				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label for="nome-relatorio">Nome</label>

							<input class="form-control simples-input" type="text" id="nome-relatorio" />

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="num_identificacao-relatorio">Número de identificação</label>

							<input class="form-control simples-input" type="text" id="num_identificacao-relatorio" />

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="num_cartao-relatorio">Número do cartão</label>

							<input class="form-control simples-input" type="text" id="num_cartao-relatorio" />

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="placa-relatorio">Placa</label>

							<input class="form-control placa_carro-input" type="text" id="placa-relatorio" />

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="documento-relatorio">Documento</label>

							<input class="form-control simples-input" type="text" id="documento-relatorio" />

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="data_inicial_entrada-relatorio">Data inicial (Entrada)</label>

							<input class="form-control simples-input" type="date" id="data_inicial_entrada-busca" />

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="data_final_entrada-relatorio">Data final (Entrada)</label>

							<input class="form-control simples-input" type="date" id="data_final_entrada-busca" />

						</div>

					</div>

				</div>

				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="data_inicial_saida-relatorio">Data inicial (Saída)</label>

							<input class="form-control simples-input" type="date" id="data_inicial_saida-busca" />

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="data_final_saida-relatorio">Data final (Saída)</label>

							<input class="form-control simples-input" type="date" id="data_final_saida-busca" />

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="bloco-relatorio">Bloco</label>

							<select disabled class="custom-select form-control outros-input" id="bloco-relatorio">

								<option selected="">Não existem blocos cadastrados.</option>

							</select>

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="apto-relatorio">Apartamento</label>

							<select disabled class="custom-select form-control outros-input" id="apto-relatorio">

								<option selected="">Não existem apartamentos cadastrados.</option>

							</select>

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="morador-relatorio">Morador</label>

							<input class="form-control simples-input" type="text" id="morador-relatorio" />

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="num_registro-relatorio">Número de registro</label>

							<input class="form-control simples-input" type="text" id="num_registro-relatorio" />

						</div>

					</div>

				</div>



				<div class="form-group">

					<label for="status-relatorio">Status</label>



					<input type="radio" name="status-relatorio" id="agendado_status-relatorio" class="multipla" />

					<label for="agendado_status-relatorio" class="multipla btn-outline-secondary">Agendado</label>



					<input type="radio" name="status-relatorio" id="dentro_status-relatorio" class="multipla" />

					<label for="dentro_status-relatorio" class="multipla btn-outline-secondary">Dentro</label>



					<input type="radio" name="status-relatorio" id="fora_status-relatorio" class="multipla" />

					<label for="fora_status-relatorio" class="multipla btn-outline-secondary">Fora</label>

				</div>



				<button class="btn btn-primary mt-4">Cadastrar</button>

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

					<h5 class="card-subtitle" style="text-align: center">Aqui aparecerão todos os resultados da busca.</h5>

				</div>

			</div>

		</div>

	</div>



	<div class="tab-pane fade" id="convidado" role="tabpanel" aria-labelledby="convidado-tab">

		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Faça uma busca</h4>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="titulo-convidado">Título</label>

							<input class="form-control" type="text" id="titulo-convidado" />

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="convidado-convidado">Convidado</label>

							<input class="form-control" type="text" id="convidado-convidado" />

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="data_inicial-convidado">Data inicial</label>

							<input class="form-control" type="date" id="data_inicial-convidado" />

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="data_final-convidado">Data final</label>

							<input class="form-control" type="date" id="data_final-convidado" />

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="ambiente-entrada">Ambiente</label>

							<select disabled class="custom-select form-control" id="ambiente-entrada">

								<option selected="">Não existem ambientes cadastrados.</option>

							</select>

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="status-convidado">Status</label>



							<input type="radio" name="status-convidado" id="sim_status-convidado" class="multipla" />

							<label for="sim_status-convidado" class="multipla btn-outline-success">Confirmado</label>



							<input type="radio" name="status-convidado" id="nao_status-convidado" class="multipla" />

							<label for="nao_status-convidado" class="multipla btn-outline-danger">Não confirmado</label>

						</div>

					</div>

				</div>



				<button class="btn btn-primary">Procurar</button>

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

					<h5 class="card-subtitle" style="text-align: center">Aqui aparecerão todos os resultados da busca.</h5>

				</div>

			</div>

		</div>

	</div>

</div>



<!-- <script src="../assets/js/uploader.js"></script> -->



<script>

	$('body').on('click', '.tipo_entrada-radio', (e) => {

		switch ($(e.target).val()) {

			case 'pedestre':

				if ($('.entrada_visitante-div').hasClass('d-none')) {

					$('.entrada_visitante-div').removeClass('d-none');

				}



				if (!$('.veiculo_div-entrada').hasClass('d-none')) {

					$('.veiculo_div-entrada').addClass('d-none');

				}

				break;



			case 'veiculo':

				if ($('.entrada_visitante-div').hasClass('d-none')) {

					$('.entrada_visitante-div').removeClass('d-none');

				}



				if ($('.veiculo_div-entrada').hasClass('d-none')) {

					$('.veiculo_div-entrada').removeClass('d-none');

				}

				break;



			case 'morador':

				if (!$('.entrada_visitante-div').hasClass('d-none')) {

					$('.entrada_visitante-div').addClass('d-none');

				}

				break;

		}

		e.stopImmediatePropagation();

	});



	CKEDITOR.replaceAll('ckeditor');



	$('#form-cadastro-controle').on('submit', (e) => {
		var dados = $(e.target).serialize();
		var campos_invalidos = $('#form-cadastro-controle .invalid').length;

		if (campos_invalidos > 0) {
			toastr.error('Preencha todos os campos corretamente.', 'Erro');
			return false;
		}

		$.ajax({
			url: 'telas_ajax/master/controleEntrada.php',
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

	$('#form-cadastro-controleSaida').on('submit', (e) => {
		var dados = $(e.target).serialize();
		var campos_invalidos = $('#form-cadastro-controleSaida .invalid').length;

		if (campos_invalidos > 0) {
			toastr.error('Preencha todos os campos corretamente.', 'Erro');
			return false;
		}

		$.ajax({
			url: 'telas_ajax/master/controleSaida.php',
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
</script>

