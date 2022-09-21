<?php
session_start();
// $_SESSION['db_condominio'] = 'gestccon2_leandro_ribeiro_de_oliveira';
?>

<ul class="nav nav-tabs nav-tabs-main" id="abas" role="tablist">
	<li class="nav-item" role="presentation">
		<a class="nav-link active" id="tab-edicao" data-toggle="tab" href="#edicao" role="tab" aria-controls="edicao" aria-selected="true">Editar</a>
	</li>

	<!-- <li class="nav-item" role="presentation">
		<a class="nav-link active" id="cadastro-tab" data-toggle="tab" href="#cadastro" role="tab" aria-controls="cadastro" aria-selected="true">Cadastrar</a>
	</li>

	<li class="nav-item" role="presentation">
		<a class="nav-link" id="tab-busca" data-toggle="tab" href="#busca" role="tab" aria-controls="busca" aria-selected="false">Procurar</a>
	</li> -->
</ul>

<div class="tab-content" id="abasConteudo">
	<div class="tab-pane fade" id="cadastro" role="tabpanel" aria-labelledby="cadastro-tab">
		<form id="form-cadastro" action="">
			<div class="card" width="50%">
				<div class="card-body">
					<h4 class="card-title">Informações do condomínio</h4>

					<h6 class="card-subtitle">Aqui você irá definir as informações sobre o condomínio</h6>

					<div class="row mt-4">
						<div class="col-md-4">
							<div class="form-group">
								<label for="nome-cadastro">Nome do condomínio</label>
								<input name="nome-cadastro" required class="form-control simples-input" type="text" id="nome-cadastro" />
								<input type="hidden" name="acao" value="cadastro" />
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label for="imagem-cadastro">Imagem</label>
								<div class="input-group">
									<div class="custom-file">
										<input type="file" class="custom-file-input outros-input" id="imagem-cadastro" name="imagem-cadastro" />
										<label class="custom-file-label" for="imagem-cadastro"></label>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label for="site-cadastro">Site</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">https://</span>
									</div>
									<input type="text" required name="site-cadastro" class="form-control" id="site-cadastro" onkeyup="validarURL(this, '.site-erro_cadastro')" />
								</div>
								<label class="erro-mensagem site-erro_cadastro">URL inválida</label>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="card" width="50%">
				<div class="card-body">
					<h5 class="card-title">Contato do condomínio</h5>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="email-cadastro">Email</label>
								<input class="form-control" required type="text" onkeyup="validarEmail(this, '.email-erro_cadastro')" id="email-cadastro" name="email-cadastro" />
								<label class="erro-mensagem email-erro_cadastro">Email inválido</label>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="telefone-cadastro">Telefone</label>
								<input class="form-control telefone-input" required name="telefone-cadastro" type="text" id="telefone-cadastro" />
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="card" width="50%">
				<div class="card-body">
					<h5 class="card-title">Endereço do condomínio</h5>

					<div class="row mt-4">
						<div class="col-md-3">
							<div class="form-group">
								<label for="cep-cadastro">CEP</label>
								<input class="form-control cep-input" required type="text" name="cep-cadastro" id="cep-cadastro" onkeyup="consultarCep(this, 'cadastro', '.cep-erro_cadastro')" maxlength="9" />
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="logradouro-cadastro">Logradouro</label>
								<input class="form-control simples-input" required name="logradouro-cadastro" type="text" id="logradouro-cadastro" />
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label for="numero-cadastro">Número</label>
								<input class="form-control simples-input" required name="numero_logradouro-cadastro" type="text" id="numero-cadastro" />
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="bairro-cadastro">Bairro</label>
								<input class="form-control simples-input" required name="bairro-cadastro" type="text" id="bairro-cadastro" />
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="tipo_logradouro-cadastro">Tipo do logradouro</label>
								<select class="custom-select form-control outros-input" name="tipo_logradouro-cadastro" required id="tipo_logradouro-cadastro">
									<option value="">Selecione</option>
									<option value="Aeroporto">Aeroporto</option>
									<option value="Alameda">Alameda</option>
									<option value="Área">Área</option>
									<option value="Avenida">Avenida</option>
									<option value="Campo">Campo</option>
									<option value="Chácara">Chácara</option>
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
								<input class="form-control simples-input" required name="cidade-cadastro" type="text" id="cidade-cadastro" />
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="estado-cadastro">Estado</label>
								<input class="form-control simples-input" required name="estado-cadastro" type="text" id="estado-cadastro" />
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="card" width="50%">
				<div class="card-body">
					<h5 class="card-title">Configurações e permissões do condomínio</h5>

					<div class="row mt-4">
						<div class="col-md-6">
							<label for="email_reserva-cadastro">Email reserva</label>
							<select class="custom-select form-control outros-input" required name="email_reserva-cadastro" id="email_reserva-cadastro">
								<option value="">Selecione</option>
								<option value="termo_portal">Termo portal</option>
								<option value="termo_painel">Termo painel</option>
								<option value="ambos">Os dois</option>
								<option value="nenhum">Nenhum</option>
							</select>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="database-cadastro">Nome do banco de dados</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">gestccon2_</span>
									</div>
									<input type="text" name="database-cadastro" required class="form-control simples-input" id="database-cadastro" />
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label for="lista_convidados-cadastro">Lista de convidados</label>
								<input type="radio" value="digitada" name="lista_convidados-cadastro" id="lista_digitada-cadastro" required class="multipla" />
								<label for="lista_digitada-cadastro" class="multipla btn-outline-secondary">Lista digitada</label>
								<input type="radio" value="upload" name="lista_convidados-cadastro" id="lista_upload-cadastro" class="multipla" />
								<label for="lista_upload-cadastro" class="multipla btn-outline-secondary">Upload</label>
								<input type="radio" value="ambos" name="lista_convidados-cadastro" id="lista_ambos-cadastro" class="multipla" />
								<label for="lista_ambos-cadastro" class="multipla btn-outline-secondary">Ambos</label>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label for="cartao-cadastro">Posição do cartão:</label>
								<input type="radio" value="vertical" name="cartao-cadastro" id="vertical_cartao-cadastro" required class="multipla" />
								<label for="vertical_cartao-cadastro" class="multipla btn-outline-secondary">Vertical</label>
								<input type="radio" value="horizontal" name="cartao-cadastro" id="horizontal_cartao-cadastro" class="multipla" />
								<label for="horizontal_cartao-cadastro" class="multipla btn-outline-secondary">Horizontal</label>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label for="painel-cadastro">Liberar o painel?</label>
								<input type="radio" value="sim" required name="painel-cadastro" id="sim_painel-cadastro" class="multipla" />
								<label for="sim_painel-cadastro" class="multipla btn-outline-success">Sim</label>
								<input type="radio" value="nao" name="painel-cadastro" id="nao_painel-cadastro" class="multipla" />
								<label for="nao_painel-cadastro" class="multipla btn-outline-danger">Não</label>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label for="validar_nascimento-cadastro">Validar nascimento?</label>
								<input type="radio" value="sim" required name="validar_nascimento-cadastro" id="sim_validar_nascimento-cadastro" class="multipla" />
								<label for="sim_validar_nascimento-cadastro" class="multipla btn-outline-success">Sim</label>
								<input type="radio" value="nao" name="validar_nascimento-cadastro" id="nao_validar_nascimento-cadastro" class="multipla" />
								<label for="nao_validar_nascimento-cadastro" class="multipla btn-outline-danger">Não</label>
							</div>
						</div>
					</div>

					<button type="submit" class="btn btn-loader btn-primary" type="button">
						Cadastrar
						<img class="img-loader" src="assets/img/loader_branco.svg">
					</button>
				</div>
			</div>
		</form>
	</div>

	<div class="tab-pane fade" id="busca" role="tabpanel" aria-labelledby="busca-tab">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Faça uma busca</h4>
				<h5 class="card-subtitle">Deixe os campos em branco para listar todos os registros.</h5>

				<form id="form-busca">
					<div class="form-group mt-4">
						<label for="nome-busca">Nome do condomínio</label>
						<input type="hidden" name="acao" value="busca" />
						<input id="nome-busca" name="nome-busca" type="text" class="form-control" />
					</div>

					<button type="submit" class="btn btn-loader btn-primary" type="button" id="submit-busca">
						Pesquisar
						<img class="img-loader" src="assets/img/loader_branco.svg">
					</button>
				</form>
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

	<div class="tab-pane fade show active" id="edicao" role="tabpanel" aria-labelledby="edicao-tab">
		<form id="form-edicao">
			<div class="card" width="50%">
				<div class="card-body">
					<h4 class="card-title">Informações do condomínio</h4>

					<div class="row mt-4">
						<div class="col-md-4">
							<div class="form-group">
								<label for="nome-edicao">Nome do condomínio</label>
								<input name="nome-edicao" required class="form-control simples-input" type="text" id="nome-edicao" />
								<input type="hidden" name="ts" id="ts-edicao" />
								<input type="hidden" name="database-edicao" id="database-edicao" value="<?php echo $_SESSION['db_condominio'] ?>" />
								<input type="hidden" name="acao" value="edicao" />
								<input type="hidden" name="tipo" value="condominio" />
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label for="imagem-edicao">Imagem</label>
								<div class="input-group">
									<div class="custom-file">
										<input type="file" class="custom-file-input outros-input" id="imagem-edicao" name="imagem-edicao" />
										<label class="custom-file-label" for="imagem-edicao"></label>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label for="site-edicao">Site</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">https://</span>
									</div>
									<input type="text" required name="site-edicao" class="form-control" id="site-edicao" onkeyup="validarURL(this, '.site-erro_edicao')" />
								</div>
								<label class="erro-mensagem site-erro_edicao">URL inválida</label>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="card" width="50%">
				<div class="card-body">
					<h5 class="card-title">Contato do condomínio</h5>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="email-edicao">Email</label>
								<input class="form-control" required type="text" onkeyup="validarEmail(this, '.email-erro_edicao')" id="email-edicao" name="email-edicao" />
								<label class="erro-mensagem email-erro_edicao">Email inválido</label>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="telefone-edicao">Telefone</label>
								<input class="form-control telefone-input" required name="telefone-edicao" type="text" id="telefone-edicao" />
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="card" width="50%">
				<div class="card-body">
					<h5 class="card-title">Endereço do condomínio</h5>

					<div class="row mt-4">
						<div class="col-md-3">
							<div class="form-group">
								<label for="cep-edicao">CEP</label>
								<input class="form-control cep-input" required type="text" name="cep-edicao" id="cep-edicao" onkeyup="consultarCep(this, 'edicao', '.cep-erro_edicao')" maxlength="9" />
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="logradouro-edicao">Logradouro</label>
								<input class="form-control simples-input" required name="logradouro-edicao" type="text" id="logradouro-edicao" />
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label for="numero-edicao">Número</label>
								<input class="form-control simples-input" required name="numero_logradouro-edicao" type="text" id="numero-edicao" />
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="bairro-edicao">Bairro</label>
								<input class="form-control simples-input" required name="bairro-edicao" type="text" id="bairro-edicao" />
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="tipo_logradouro-edicao">Tipo do logradouro</label>
								<select class="custom-select form-control outros-input" name="tipo_logradouro-edicao" required id="tipo_logradouro-edicao">
									<option value="">Selecione</option>
									<option value="Aeroporto">Aeroporto</option>
									<option value="Alameda">Alameda</option>
									<option value="Área">Área</option>
									<option value="Avenida">Avenida</option>
									<option value="Campo">Campo</option>
									<option value="Chácara">Chácara</option>
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
								<label for="cidade-edicao">Cidade</label>
								<input class="form-control simples-input" required name="cidade-edicao" type="text" id="cidade-edicao" />
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="estado-edicao">Estado</label>
								<input class="form-control simples-input" required name="estado-edicao" type="text" id="estado-edicao" />
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="card" width="50%">
				<div class="card-body">
					<h5 class="card-title">Configurações e permissões do condomínio</h5>

					<div class="form-group mt-4">
						<label for="email_reserva-edicao">Email reserva</label>
						<select class="custom-select form-control outros-input" required name="email_reserva-edicao" id="email_reserva-edicao">
							<option value="">Selecione</option>
							<option value="termo_portal">Termo portal</option>
							<option value="termo_painel">Termo painel</option>
							<option value="ambos">Os dois</option>
							<option value="nenhum">Nenhum</option>
						</select>
					</div>

					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="lista_convidados-edicao">Lista de convidados</label>
								<input type="radio" value="digitada" name="lista_convidados-edicao" id="lista_digitada-edicao" required class="multipla" />
								<label for="lista_digitada-edicao" class="multipla btn-outline-secondary">Lista digitada</label>
								<input type="radio" value="upload" name="lista_convidados-edicao" id="lista_upload-edicao" class="multipla" />
								<label for="lista_upload-edicao" class="multipla btn-outline-secondary">Upload</label>
								<input type="radio" value="ambos" name="lista_convidados-edicao" id="lista_ambos-edicao" class="multipla" />
								<label for="lista_ambos-edicao" class="multipla btn-outline-secondary">Ambos</label>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label for="cartao-edicao">Posição do cartão:</label>
								<input type="radio" value="vertical" name="cartao-edicao" id="vertical_cartao-edicao" required class="multipla" />
								<label for="vertical_cartao-edicao" class="multipla btn-outline-secondary">Vertical</label>
								<input type="radio" value="horizontal" name="cartao-edicao" id="horizontal_cartao-edicao" class="multipla" />
								<label for="horizontal_cartao-edicao" class="multipla btn-outline-secondary">Horizontal</label>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label for="validar_nascimento-edicao">Validar nascimento?</label>
								<input type="radio" value="sim" required name="validar_nascimento-edicao" id="sim_validar_nascimento-edicao" class="multipla" />
								<label for="sim_validar_nascimento-edicao" class="multipla btn-outline-success">Sim</label>
								<input type="radio" value="nao" name="validar_nascimento-edicao" id="nao_validar_nascimento-edicao" class="multipla" />
								<label for="nao_validar_nascimento-edicao" class="multipla btn-outline-danger">Não</label>
							</div>
						</div>
					</div>

					<button type="submit" class="btn btn-loader btn-primary mt-4" type="button">
						Atualizar
						<img class="img-loader" src="assets/img/loader_branco.svg">
					</button>
				</div>
			</div>
		</form>
	</div>
</div>

<script>
	$('#nome-cadastro').on('keyup', (e) => {
		var str = $(e.target).val().toLowerCase()
		var str2 = str.replace(/[^A-Za-z ]+/, '')
		$('#database-cadastro').val(str2.replace(/\s\s+/g, ' ').replaceAll(' ', '_')).addClass('valid')
	})

	$('#form-cadastro').on('submit', (e) => {
		var dados = $(e.target).serialize()

		var unindexed_array = $(e.target).serializeArray()
		var indexed_array = {}

		$.map(unindexed_array, function(n, i) {
			indexed_array[n['name']] = n['value']
		})

		$.ajax({
			url: 'telas_ajax/master/condominio.php',
			type: 'POST',
			data: dados,
			success: (response) => {
				var status = response.split(' |divisor| ')[0]
				var mensagem = response.split(' |divisor| ')[1]

				if (status == 'sucesso') {
					toastr.success(mensagem, 'Sucesso')
				} else if (status == 'falha') {
					toastr.error(mensagem, 'Erro')
				}
			},
			error: (response) => {
				console.log(response)
			},
		})

		return false
	})

	$('#form-busca').on('submit', (e) => {
		var dados = $(e.target).serialize()

		$.ajax({
			url: 'telas_ajax/master/condominio.php',
			type: 'POST',
			data: dados,
			success: (response) => {
				var responseObjeto = JSON.parse(response)
				var tabela = $('#tabela-busca_resultado')
				var texto = $('#texto-busca_resultado')
				var qtd = Object.keys(responseObjeto).length;

				debugger

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
							<td>${objeto['status']}</td>
							<td class="acoes-td">
								<i class="fas fa-pen editar-condominio" data-ts="${objeto['ts']}"></i>
								<i class="fas fa-trash excluir-condominio"></i>
								<i class="fas fa-power-off desativar-condominio"></i>
							</td>
						</tr>
						`)
					})

					setarTooltips('.editar-condominio', 'Editar condomínio', 'top')
					setarTooltips('.excluir-condominio', 'Excluir condomínio', 'top')
					setarTooltips('.desativar-condominio', 'Ativar/Desativar condomínio', 'top')

					$(tabela).show()
				}
			},
			error: (response) => {
				console.log(response)
			},
		})

		return false
	})

	$('#form-edicao').on('submit', (e) => {
		var dados = $(e.target).serialize()
		var campos_invalidos = $('#form-edicao .invalid').length;

		if (campos_invalidos > 0) {
			toastr.error('Preencha todos os campos corretamente.', 'Erro');
			return false;
		}

		$.ajax({
			url: 'telas_ajax/master/condominio.php',
			type: 'POST',
			data: dados,
			success: (response) => {
				var status = response.split(' |divisor| ')[0]
				var mensagem = response.split(' |divisor| ')[1]

				if (status == 'sucesso') {
					toastr.success(mensagem, 'Sucesso')
					$('.nav-link.sub-nav-link.sub-active[data-file=condominio]').click();

				} else if (status == 'falha') {
					toastr.error(mensagem, 'Erro')
				}
			},
			error: (response) => {
				console.log(response)
			},
		})

		return false
	})

	$(document).ready((e) => {
		const db = '<?php echo $_SESSION['db_condominio'] ?>';

		$.ajax({
			url: 'telas_ajax/master/condominio.php',
			type: 'POST',
			data: `db=${db}&acao=select&tipo=condominio`,
			success: (response) => {
				var responseObjeto = JSON.parse(response)
				var qtd = Object.keys(responseObjeto).length

				// return;
				if (qtd < 1) {
					toastr.error('Erro ao localizar o condomínio', 'Erro')
					return
				}

				if (responseObjeto) {
					const condominio = responseObjeto[0];

					$('#ts-edicao').val(condominio['ts']).removeClass('valid invalid').addClass('valid');
					$('#nome-edicao').val(condominio['nome']).removeClass('valid invalid').addClass('valid');
					$('#site-edicao').val(condominio['site']).removeClass('valid invalid').addClass('valid');
					$('#email-edicao').val(condominio['email']).removeClass('valid invalid').addClass('valid');
					$('#telefone-edicao').val(condominio['telefone']).removeClass('valid invalid').addClass('valid');
					$('#cep-edicao').val(condominio['cep']).removeClass('valid invalid').addClass('valid');
					$('#logradouro-edicao').val(condominio['logradouro']).removeClass('valid invalid').addClass('valid');
					$('#numero-edicao').val(condominio['numero_logradouro']).removeClass('valid invalid').addClass('valid');
					$('#bairro-edicao').val(condominio['bairro']).removeClass('valid invalid').addClass('valid');
					$('#tipo_logradouro-edicao').val(condominio['tipo_logradouro']).removeClass('valid invalid').addClass('valid');
					$('#cidade-edicao').val(condominio['cidade']).removeClass('valid invalid').addClass('valid');
					$('#estado-edicao').val(condominio['estado']).removeClass('valid invalid').addClass('valid');
					$('#email_reserva-edicao').find('[value=' + condominio['email_reserva'] + ']').prop('selected', true).removeClass('valid invalid').addClass('valid');
					$('[name=lista_convidados-edicao][value=' + condominio['lista_convidados'] + ']').prop('checked', true);
					$('[name=cartao-edicao][value=' + condominio['cartao'] + ']').prop('checked', true);
					$('[name=painel-edicao][value=' + condominio['liberar_painel'] + ']').prop('checked', true);
					$('[name=validar_nascimento-edicao][value=' + condominio['validar_nascimento'] + ']').prop('checked', true);

					$('#tab-edicao').parent().show();
					$('#tab-edicao').click();

				}
			},
			error: (response) => {
				console.log(response)
			},
		})
	})
</script>