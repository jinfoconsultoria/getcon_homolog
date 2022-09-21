<?php
session_start();

// Exigir o arquivo de classes que armazena as métodos;
require_once '../../assets/php/classes.php';

// Instância um novo objeto do banco de dados e inicia a conexão;
$db   = new db();
$dbatual = $_SESSION['db_condominio'];
$link_condominio = $db->conecta_mysql($_SESSION['db_condominio']);

?>

<script src="../../assets/js/VanillaQR.js"></script>

<ul class="nav nav-tabs nav-tabs-main" id="abas" role="tablist">

	<li class="nav-item" role="presentation">

		<a class="nav-link active" id="cadastro-tab" data-toggle="tab" href="#cadastro" role="tab" aria-controls="cadastro" aria-selected="true">Cadastrar</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="busca-tab" data-toggle="tab" href="#busca" role="tab" aria-controls="busca" aria-selected="false">Procurar</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="qrcode-tab" data-toggle="tab" href="#qrcode" role="tab" aria-controls="qrcode" aria-selected="false">QR Code</a>

	</li>

</ul>



<div class="tab-content" id="abasConteudo">
	<form id="form-cadastro-manutencao">
		<input type="hidden" name="acao" value="cadastro" />
		<input type="hidden" name="tipo" value="manutencao" />

		<div class="tab-pane fade show active" id="cadastro" role="tabpanel" aria-labelledby="cadastro-tab">

			<div class="card" width="50%">

				<div class="card-body">

					<h4 class="card-title">Cadastrar manutenção</h4>

					<div class="row mt-4">

						<div class="col-md-6">

							<div class="form-group">

								<label for="titulo-cadastro">Título</label>

								<input class="form-control" type="text" id="titulo-cadastro" name="titulo-cadastro" />

							</div>

						</div>

						<div class="col-md-6">

							<div class="form-group">

								<label for="local-cadastro">Local</label>

								<select class="custom-select form-control" id="local_qrcode-cadastro" name="local_qrcode-cadastro">

									<option value="">Não existem locais cadastrados.</option>

									<?php $local = $db->selectLocal($dbatual); ?>

								</select>


							</div>

						</div>

					</div>



					<div class="row">

						<div class="col-md-4">

							<div class="form-group">

								<label for="imagem-cadastro">Imagem</label>

								<div class="input-group">

									<div class="custom-file">

										<input type="file" class="custom-file-input" id="imagem-cadastro" name="imagem" data-pasta="manutencao" />

										<label class="custom-file-label" for="imagem-cadastro"></label>

										<i class="preview-file far fa-eye d-none"></i>

									</div>

								</div>

							</div>

						</div>

						<div class="col-md-4">

							<div class="form-group">

								<label for="data-cadastro">Data</label>

								<input class="form-control" type="date" id="data-cadastro" name="data-cadastro" />

							</div>

						</div>

						<div class="col-md-4">

							<div class="form-group">

								<label for="registro-cadastro">Registrar como:</label>



								<input type="radio" name="registro-cadastro" id="administrador_registro-cadastro" value="adm" name="administrador_registro-cadastro" class="multipla" />

								<label for="administrador_registro-cadastro" class="multipla btn-outline-secondary">Administrador</label>



								<input type="radio" name="registro-cadastro" id="morador_registro-cadastro" value="morador" name="morador_registro-cadastro" class="multipla" />

								<label for="morador_registro-cadastro" class="multipla btn-outline-secondary">Morador</label>

							</div>

						</div>

					</div>



					<script>
						$(document).ready(function() {
							$('#bloco-cadastro').change(function() {
								console.log($('#bloco-cadastro').val());
								$('#apto-cadastro').load('/telas/master/listaApartamento.php?bloco=' + $('#bloco-cadastro').val() + '&tipo=cleanMorador');

							});

							$('#apto-cadastro').change(function() {
								console.log($(this).val());
								$('#morador-cadastro').load('/telas/master/listaMorador.php?bloco=' + $('#bloco-cadastro').val() + '&apartamento=' + $(this).val());
							});

							$('#bloco-observacao').change(function() {
								console.log($('#bloco-observacao').val());
								$('#apto-observacao').load('/telas/master/listaApartamento.php?bloco=' + $('#bloco-observacao').val() + '&tipo=cleanMorador');

							});

							$('#apto-observacao').change(function() {
								console.log($(this).val());
								$('#morador-observacao').load('/telas/master/listaMorador.php?bloco=' + $('#bloco-observacao').val() + '&apartamento=' + $(this).val());
							});

							$('#morador-observacao').change(function() {
								console.log($(this).val());
								$('#cod-observacao').load('/telas/master/listaCorrespondencia.php?bloco=' + $('#bloco-observacao').val() + '&apartamento=' + $("#apto-observacao").val() + '&morador=' + $(this).val());
							});

							$('#bloco-busca').change(function() {
								console.log($('#bloco-busca').val());
								$('#apto-busca').load('/telas/master/listaApartamento.php?bloco=' + $('#bloco-busca').val() + '&tipo=cleanMorador');

							});

							$('#apto-busca').change(function() {
								console.log($(this).val());
								$('#morador-busca').load('/telas/master/listaMorador.php?bloco=' + $('#bloco-busca').val() + '&apartamento=' + $(this).val());
							});

						});
					</script>



					<div class="row">

						<div class="col-md-3">

							<div class="form-group">

								<label for="bloco-cadastro">Bloco</label>

								<select class="custom-select form-control" name="bloco-cadastro" id="bloco-cadastro" name="bloco-cadastro">

									<option selected value="">Seleciona um bloco.</option>
									<?php $bloco = $db->selectBloco($dbatual); ?>

								</select>

							</div>

						</div>

						<div class="col-md-3">

							<div class="form-group">

								<label for="apto-cadastro">Apartamento</label>

								<select class="custom-select form-control" name="apto-cadastro" id="apto-cadastro" name="apto-cadastro">

									<option selected value="">Selecione um apartamento</option>

								</select>

							</div>

						</div>

						<div class="col-md-3">

							<div class="form-group">

								<label for="morador-cadastro">Morador</label>

								<select class="custom-select form-control" name="morador-cadastro" id="morador-cadastro" name="morador-cadastro">

									<option selected value="">Selecione um morador</option>

								</select>

							</div>

						</div>
					</div>


					<div class="form-group">

						<label for="descricao-cadastro">Descrição</label>

						<textarea id="descricao-cadastro" name="descricao-cadastro" class="form-control ckeditor" rows="3"></textarea>

					</div>



					<button class="btn btn-primary">Cadastrar</button>

				</div>

			</div>
	</form>
</div>




<div class="tab-pane fade" id="busca" role="tabpanel" aria-labelledby="busca-tab">

	<form id="form-busca-manutencao">
		<input type="hidden" name="acao" value="busca" />
		<input type="hidden" name="tipo" value="manutencao" />
		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Faça uma busca</h4>



				<div class="row mt-4">

					<div class="col-md-4">

						<div class="form-group">

							<label for="nome-busca">Nome</label>

							<input class="form-control" type="text" name="nome-busca" id="nome-busca" />

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="placa-busca">Status</label>

							<select class="custom-select form-control" id="tipo-busca" name="tipo-busca">

								<option selected value="">Selecione um status</option>

								<?php

								$sql = "select * from statusManutencao";

								$query = mysqli_query($link_condominio, $sql);
								while ($result = mysqli_fetch_assoc($query)) {
									$id = $result["id"];
									$nome = $result['status'];

									echo "<option value='$id'>$nome</option>";
								}
								?>


							</select>

						</div>

					</div>

				</div>


				<div class="row">
					<div class="col-md-6">
						<div class="form-group">

							<label for="placa-busca">Local</label>

							<select class="custom-select form-control" id="local-qrcode" name="local-qrcode">

								<option value="">Não existem locais cadastrados.</option>

								<?php $local = $db->selectLocal($dbatual); ?>

							</select>

						</div>
					</div>


					<div class="col-md-6">

						<div class="form-group">

							<label for="data_entrada-busca">Data de entrada</label>

							<input class="form-control" type="date" name="data_entrada-busca" id="data_entrada-busca" />

						</div>

					</div>

				</div>


				<button class="btn btn-primary">Procurar</button>

			</div>
		</div>
	</form>



	<div class="card">

		<div class="card-body">

			<h4 class="card-title">Resultado</h4>

			<div class="relatorios">

				<i class="fad fa-file-pdf gerar-pdf"></i>

				<i class="fad fa-file-excel gerar-xls"></i>

			</div>



			<div id="busca-resultado">

				<div id="tabela-busca_resultado" class="table-responsive tabela-resultado mt-4" style="display:none">

					<table class="table table-bordered table-hover">
						<thead class="bg-inverse text-white">
							<tr>
								<th>Titulo</th>
								<th>Bloco</th>
								<th>Local</th>
								<th>Data Registro</th>
								<th>Status</th>
								<th>Opções</th>
							</tr>
						</thead>
						<tbody class="border border-inverse">

						</tbody>
					</table>

					<h5 id="texto-busca_resultado" class="card-subtitle" style="text-align: center;">Aqui aparecerão todos os resultados da busca.</h5>

				</div>
			</div>


		</div>

	</div>

</div>



<div class="tab-pane fade" id="qrcode" role="tabpanel" aria-labelledby="qrcode-tab">

	<div class="card">

		<div class="card-body">

			<h4 class="card-title">Cadastrar um QR Code</h4>



			<div class="form-group mt-4">

				<label for="local-qrcode">Local</label>
				<div class="input-group">
					<select class="custom-select form-control" id="local-qrcode-cadastro">

						<option selected value="">Não existem locais cadastrados.</option>

						<?php $local = $db->selectLocal($dbatual); ?>

					</select>
					<div class="input-group-append">
						<a href="javascript:void(0)"><span class="input-group-text editar-item" id="cadastrar_local_manu" data-toggle="modal" data-target="#cadastrar_local_manu-modal"><i class="far fa-plus"></i></span></a>
					</div>
				</div>
			</div>



			<button class="btn btn-primary" id="btn-cadastrarQr">Cadastrar</button>

		</div>

	</div>



	<div class="card">

		<div class="card-body">

			<h4 class="card-title">QR Codes já cadastrados</h4>

			<div class="relatorios">

				<i class="fad fa-file-pdf gerar-pdf"></i>

				<i class="fad fa-file-excel gerar-xls"></i>

			</div>



			<div id="busca-resultado">

					<div id="tabela-busca_resultado" class="table-responsive tabela-resultado mt-4">

						<?php
						$items = '*';

						$from = 'qrCode inner join localManutencao on qrc_local = lom_id';

						$sql = "select $items from $from";

						$query = mysqli_query($link_condominio, $sql);
						$numrows = mysqli_num_rows($query);

						?>

							<table class="table table-bordered table-hover">
								<thead class="bg-inverse text-white">
									<tr>
										<th>QrCode</th>
										<th>Local cadastrado</th>

										<th>Opções</th>
									</tr>
								</thead>
								<tbody class="border border-inverse">
								<?php
									while ($result = mysqli_fetch_assoc($query)) {
								?>
									
										<tr data-id="qr-<?= $result['qrc_id'] ?>">
											<td><img height="80px" src="<?= $result['qrc_base64'] ?>"/></td>
											<td><?= $result['lom_nome'] ?></td>
											

											<td class="acoes-td">
												<i class="fas fa-check authAccept"></i>
											</td>
										</tr>
								<?php
								}
								?>
								</tbody>
							</table>

							<h5 id="texto-busca_resultado" class="card-subtitle" style="text-align: center;">Aqui aparecerão todos os resultados da busca.</h5>

					</div>
				</div>

		</div>

	</div>

</div>

</div>



<script src="../assets/js/uploader.js"></script>


<script>
	CKEDITOR.replaceAll('ckeditor');

	$("#cadastro-tab").click(function() {
		$("#busca").hide();
		$("#qrcode").hide();
		$("#qrcore_localizacao").hide();
		$("#cadastro").show();
	});

	$("#busca-tab").click(function() {
		$("#busca").show();
		$("#qrcode").hide();
		$("#qrcore_localizacao").hide();
		$("#cadastro").hide();
	});

	$("#qrcode-tab").click(function() {
		$("#busca").hide();
		$("#qrcode").show();
		$("#qrcore_localizacao").hide();
		$("#cadastro").hide();
	});

	$("#qrcore_localizacao-tab").click(function() {
		$("#busca").hide();
		$("#qrcode").hide();
		$("#qrcore_localizacao").show();
		$("#cadastro").hide();
	});

	function removerAcentos(newStringComAcento) {
		var string = newStringComAcento;
		var mapaAcentosHex = {
			a: /[\xE0-\xE6]/g,
			A: /[\xC0-\xC6]/g,
			e: /[\xE8-\xEB]/g,
			E: /[\xC8-\xCB]/g,
			i: /[\xEC-\xEF]/g,
			I: /[\xCC-\xCF]/g,
			o: /[\xF2-\xF6]/g,
			O: /[\xD2-\xD6]/g,
			u: /[\xF9-\xFC]/g,
			U: /[\xD9-\xDC]/g,
			c: /\xE7/g,
			C: /\xC7/g,
			n: /\xF1/g,
			N: /\xD1/g,
		};

		for (var letra in mapaAcentosHex) {
			var expressaoRegular = mapaAcentosHex[letra];
			string = string.replace(expressaoRegular, letra);
		}

		return string;
	}

	//CADASTRO QR CODE
	$("#btn-cadastrarQr").click(function() {
		const idLocal = $("#local-qrcode-cadastro").val();
		const acao = 'cadastro';

		var qr = new VanillaQR({
        
			// url
			url: "https://gestccon.com.br/sistema/visao/qrcodeManutencao.php?local="+idLocal  ,
		
			// width/height in pixels
			width: 50,
			height: 50,
		
			// colors
			colorLight: "#fff",
			colorDark: "#222",
		
			// output as table or canvas
			toTable: false,
		
			// Ecc correction level 1-4
			ecclevel: 1,
		
			// Use a border or not
			noBorder: false,
		
			// Border size to output at
			borderSize: 4
	
		});

		imageElement = qr.toImage("png");
		var srcImage = imageElement.src;

		$.ajax({
            url: "../../telas_ajax/controle/manutencaoQrcode.php",
            type: "POST",
            data: {
				idLocal:idLocal,
				srcImage:srcImage,
				acao:acao
            },
            dataType: "html",
            success: (response) => {
				var status = response.split(' |divisor| ')[0]
				var mensagem = response.split(' |divisor| ')[1]

				if (status == 'sucesso') {
					toastr.success(mensagem, 'Sucesso');

				} else if (status == 'falha') {
					toastr.error(mensagem, 'Erro')
				}

				window.location.reload();
			},
            error:function(data){
                alert('Erro ao carregar');
            }
        });
	});




	//CADASTRO LOCAL MODAL
	$("#btn-cadastrarLocal_modal").click(function() {
		const local = $("#local_manutencao-modal").val();

		$.ajax({
			url: 'telas_ajax/controle/manutencao.php',
			type: 'POST',
			data: {
				local: local,
				acao: 'cadastroLocal-modal'
			},
			success: (response) => {
				var status = response.split(' |divisor| ')[0]
				var mensagem = response.split(' |divisor| ')[1]

				if (status == 'sucesso') {
					toastr.success(mensagem, 'Sucesso');

				} else if (status == 'falha') {
					toastr.error(mensagem, 'Erro')
				}

				window.location.reload();
			},
			error: (response) => {
				console.log(response)
			},
		})
	});

	//cadastro manutencao
	$('#form-cadastro-manutencao').on('submit', (e) => {
		var dados = $(e.target).serialize();
		var campos_invalidos = $('#form-cadastro-manutencao .invalid').length;

		if (campos_invalidos > 0) {
			toastr.error('Preencha todos os campos corretamente.', 'Erro');
			return false;
		}

		$.ajax({
			url: '../../telas_ajax/controle/manutencao.php',
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

	//BUSCA MANUTENCAO
	$('#form-busca-manutencao').on('submit', (e) => {
		var dados = $(e.target).serialize();
		var campos_invalidos = $('#form-busca-manutencao .invalid').length;

		if (campos_invalidos > 0) {
			toastr.error('Preencha todos os campos corretamente.', 'Erro');
			return false;
		}

		$.ajax({
			url: 'telas_ajax/controle/manutencao.php',
			type: 'POST',
			data: dados,
			success: (response) => {
				var responseObjeto = JSON.parse(response)
				var tabela = $('#tabela-busca_resultado')
				var texto = $('#texto-busca_resultado')
				var qtd = Object.keys(responseObjeto).length

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
							<tr data-id='visitante-${objeto['IdVisitante']}' class='visitante-${objeto['IdVisitante']}'>
								<td>${objeto['man_titulo']}</td>
								<td>${objeto['bloco']}</td>
								<td>${objeto['lom_nome']}</td>
								<td>${objeto['man_dataCadastro']}</td>
								<td>${objeto['status']}</td>


								<td class="acoes-td">
								${objeto['statusLib'] === '1' && objeto['dataLib'] === dateAtual?
									'<span>Autorizado</span></td>':
									'<i class="fas fa-check authAccept"></i>'
								}
									<i class="fas fa-pen editar-visitanteLog" data-id="${objeto['IdVisitante']}" data-name="${objeto['IdVisitante']}"></i>
								</td>

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
		});

		return false
	});
</script>