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
	<form id="form-cadastro-fornecedor">

		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Informações do fornecedor</h4>

				<h6 class="card-subtitle">Aqui você irá definir as informações sobre o fornecedor.</h6>



				<div class="row mt-4">

					<div class="col-md-6">

						<div class="form-group">

							<label for="nome-cadastro">Nome</label>

							<input class="form-control simples-input" type="text" id="nome-cadastro" name="nome-cadastro" />

						</div>

					</div>



					<div class="col-md-6">

						<div class="form-group">

							<label for="ramo-cadastro">Ramo</label>

							<input class="form-control simples-input" type="text" id="ramo-cadastro" name="ramo-cadastro" />

						</div>

					</div>

				</div>



				<div class="form-group">

					<label for="imagem-cadastro">Logo</label>

					<div>

						<div class="input-group">

							<div class="custom-file">

								<input type="file" class="custom-file-input outros-input" id="imagem-cadastro" name="imagem-cadastro" />

								<label class="custom-file-label" for="imagem-cadastro"></label>

							</div>

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="site-cadastro">Site</label>

							<div class="input-group">

								<div class="input-group-prepend">

									<span class="input-group-text" id="basic-addon1">https://</span>

								</div>

								<input type="text" class="form-control" id="site-cadastro" onkeyup="validarURL(this, '.site-erro_cadastro')" name="site-cadastro"/>

							</div>

							<label class="erro-mensagem site-erro_cadastro">URL inválida</label>

						</div>

					</div>



					<div class="col-md-6">

						<div class="form-group">

							<label for="cnpj-cadastro">CNPJ</label>

							<input class="form-control cnpj-input" type="text" id="cnpj-cadastro" name="cnpj-cadastro" />

							<label class="erro-mensagem">CNPJ inválido</label>

						</div>

					</div>

				</div>

			</div>

		</div>



		<div class="card" width="50%">

			<div class="card-body">

				<h5 class="card-title">Endereço do fornecedor</h5>

				<h6 class="card-subtitle">Digite o cep primeiro para preencher os campos automaticamente</h6>



				<div class="row mt-4">

					<div class="col-md-3">

						<div class="form-group">

							<label for="cep-cadastro">CEP</label>

							<input class="form-control cep-input" type="text" id="cep-cadastro" onkeyup="consultarCep(this, 'cadastro', '.cep-erro_cadastro')" name="cep-cadastro" />

							<label class="erro-mensagem cep-erro_cadastro">CEP inválido</label>

						</div>

					</div>



					<div class="col-md-6">

						<div class="form-group">

							<label for="logradouro-cadastro simples-input">Logradouro</label>

							<input class="form-control simples-input" type="text" id="logradouro-cadastro" name="logradouro-cadastro"" />

						</div>

					</div>



					<div class="col-md-3">

						<div class="form-group">

							<label for="numero-cadastro">Número</label>

							<input class="form-control simples-input" type="text" id="numero-cadastro" name="numero-cadastro"  />

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="bairro-cadastro">Bairro</label>

							<input class="form-control simples-input" type="text" id="bairro-cadastro" name="bairro-cadastro"  />

						</div>

					</div>



					<div class="col-md-6">

						<div class="form-group">

							<label for="tipo-logradouro">Tipo do logradouro</label>

							<select class="custom-select form-control outros-input" name="tipo-logradouro" id="tipo-logradouro" name="tipo-logradouro" >

								<option>Selecione</option>

								<option value="Aeroporto">Aeroporto</option>

								<option value="Alameda">Alameda</option>

								<option value="Área">Área</option>

								<option value="Avenida">Avenida</option>

								<option value="Campo">Campo</option>

								<option value="Chácara">Chácara</option>
<!-- <script src="../assets/js/uploader.js"></script> -->
								<option value="Colônia">Colônia</option>

								<option value="Condomínio">Condomínio</option>

								<option value="Conjunto">Conjunto</option>

								<option value="Distrito">Distrito</option>

								<option value="Esplanada">Esplanada</option>

								<option value="Estação">Estação</option>

								<option value="Estrada">Estrada</option>

								<option value="Favela">Favela</option>

								<option value="Fazenda">Fazenda</option>

								<option value="Feira">Feira</option>

								<option value="Jardim">Jardim</option>

								<option value="Ladeira">Ladeira</option>

								<option value="Lago">Lago</option>

								<option value="Lagoa">Lagoa</option>

								<option value="Largo">Largo</option>

								<option value="Loteamento">Loteamento</option>

								<option value="Morro">Morro</option>

								<option value="Núcleo">Núcleo</option>

								<option value="Parque">Parque</option>

								<option value="Passarela">Passarela</option>

								<option value="Pátio">Pátio</option>

								<option value="Praça">Praça</option>

								<option value="Quadra">Quadra</option>

								<option value="Recanto">Recanto</option>

								<option value="Residencial">Residencial</option>

								<option value="Rodovia">Rodovia</option>

								<option value="Rua">Rua</option>

								<option value="Setor">Setor</option>

								<option value="Sítio">Sítio</option>

								<option value="Travessa">Travessa</option>

								<option value="Trecho">Trecho</option>

								<option value="Trevo">Trevo</option>

								<option value="Vale">Vale</option>

								<option value="Vereda">Vereda</option>

								<option value="Via">Via</option>

								<option value="Viaduto">Viaduto</option>

								<option value="Viela">Viela</option>

								<option value="Vila">Vila</option>

							</select>

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="cidade-cadastro">Cidade</label>

							<input class="form-control simples-input" type="text" id="cidade-cadastro" name="cidade-cadastro" />

						</div>

					</div>



					<div class="col-md-6">

						<div class="form-group">

							<label for="estado-cadastro">Estado</label>

							<input class="form-control simples-input" type="text" id="estado-cadastro" name="estado-cadastro" />

						</div>

					</div>

				</div>

			</div>

		</div>



		<div class="card" width="50%">

			<div class="card-body">

				<h5 class="card-title">Contato do fornecedor</h5>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="telefone-cadastro">Telefone</label>

							<input class="form-control telefone-input" type="text" id="telefone-cadastro" name="telefone-cadastro" />

						</div>

					</div>



					<div class="col-md-6">

						<div class="form-group">

							<label for="email-cadastro">Email</label>

							<input class="form-control" type="text" onkeyup="validarEmail(this, '.email-erro_cadastro')" id="email-cadastro" name="email-cadastro" />

							<label class="erro-mensagem email-erro_cadastro">Email inválido</label>

						</div>

					</div>

				</div>

				<button class="btn btn-primary mt-4">Cadastrar</button>

			</div>

		</div>

	</div>



	<div class="tab-pane fade" id="busca" role="tabpanel" aria-labelledby="busca-tab">

		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Faça uma busca</h4>

				<h5 class="card-subtitle">Aqui você pode fazer uma busca pelos fornecedores cadastrados e realizar edições.</h5>



				<div class="form-group mt-4">

					<label for="nome-busca">Nome</label>

					<input id="nome-busca" type="text" class="form-control" placeholder="Insira o nome do fornecedor..." />

				</div>

				<button class="btn btn-primary" type="button">Pesquisar</button>

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

</form>

<script>


	$('#form-cadastro-fornecedor').on('submit', (e) => {
		var dados = $(e.target).serialize();
		var campos_invalidos = $('#form-cadastro-fornecedor .invalid').length;
		alert('teste');
		if (campos_invalidos > 0) {
			toastr.error('Preencha todos os campos corretamente.', 'Erro');
			return false;
		}

		$.ajax({
			alert('teste');
			url: 'telas_ajax/gerenciamento/fornecedor.php',
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

		return false
</script>
