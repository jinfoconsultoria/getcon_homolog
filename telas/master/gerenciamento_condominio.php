<?php
session_start();

require_once('../../assets/php/classes.php');
$db = new db();
?>

<ul class="nav nav-tabs nav-tabs-main" id="abas" role="tablist">
	<li class="nav-item" role="presentation" style="display: none">
		<a class="nav-link" id="tab-edicao" data-toggle="tab" href="#edicao" role="tab" aria-controls="edicao" aria-selected="false">Editar</a>
	</li>

	<li class="nav-item" role="presentation">
		<a class="nav-link active" id="cadastro-tab" data-toggle="tab" href="#cadastro" role="tab" aria-controls="cadastro" aria-selected="true">Cadastrar</a>
	</li>

	<li class="nav-item" role="presentation">
		<a class="nav-link" id="tab-busca" data-toggle="tab" href="#busca" role="tab" aria-controls="busca" aria-selected="false">Procurar</a>
	</li>

	<li class="nav-item" role="presentation">
		<a class="nav-link" id="tab-configuracao" data-toggle="tab" href="#configuracao" role="tab" aria-controls="busca" aria-selected="false">Configurações</a>
	</li>
</ul>



<div class="tab-content" id="abasConteudo">
	<div class="tab-pane fade show active" id="cadastro" role="tabpanel" aria-labelledby="cadastro-tab">
		<form id="form-cadastro-condominio">
			<div class="card" width="50%">
				<div class="card-body">
					<h4 class="card-title">Informações do condomínio</h4>
					<h6 class="card-subtitle">Aqui você irá definir as informações sobre o condomínio</h6>
					<div class="row mt-4">
						<div class="col-md-6">
							<div class="form-group">
								<label for="nome-cadastro">Nome</label>
								<input class="form-control simples-input" name="nome-cadastro" type="text" id="nome-cadastro" required />
								<input type="hidden" name="acao" value="cadastro" />
								<input type="hidden" name="tipo" value="condominio" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="imagem-cadastro">Imagem</label>
								<div class="input-group">
									<div class="custom-file">
										<input type="file" name="imagem-cadastro" class="custom-file-input outros-input" id="imagem-cadastro" />
										<label class="custom-file-label" for="imagem-cadastro"></label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="cnpj-cadastro">CNPJ</label>
								<input class="form-control cnpj-input" name="cnpj-cadastro" type="text" id="cnpj-cadastro" required />
								<label class="erro-mensagem">CNPJ inválido</label>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="site-cadastro">Site</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">https://</span>
									</div>
									<input type="text" name="site-cadastro" class="form-control" id="site-cadastro" onkeyup="validarURL(this, '.site-erro_cadastro')" />
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
								<input class="form-control" type="text" onkeyup="validarEmail(this, '.email-erro_cadastro')" name="email-cadastro" id="email-cadastro" required />
								<label class="erro-mensagem email-erro_cadastro">Email inválido</label>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="telefone1-cadastro">Telefone</label>
								<input class="form-control telefone-input" name="telefone-cadastro" type="text" id="telefone-cadastro" required />
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="card" width="50%">
				<div class="card-body">
					<h5 class="card-title">Endereço do condomínio</h5>
					<h6 class="card-subtitle">Digite o cep primeiro para preencher os campos automaticamente</h6>
					<div class="row mt-4">
						<div class="col-md-3">
							<div class="form-group">
								<label for="cep-cadastro">CEP</label>
								<input class="form-control cep-input" name="cep-cadastro" type="text" id="cep-cadastro" onkeyup="consultarCep(this, 'cadastro', '.cep-erro_cadastro')" />
								<label class="erro-mensagem cep-erro_cadastro">CEP inválido</label>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="logradouro-cadastro">Logradouro</label>
								<input class="form-control" name="logradouro-cadastro" type="text" id="logradouro-cadastro" required />
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="numero-cadastro">Número</label>
								<input class="form-control simples-input" name="numero_logradouro-cadastro" type="text" id="numero-cadastro" required />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="bairro-cadastro">Bairro</label>
								<input class="form-control" name="bairro-cadastro" type="text" id="bairro-cadastro" required />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="tipo_logradouro-cadastro">Tipo do logradouro</label>
								<select class="custom-select form-control outros-input" name="tipo_logradouro-cadastro" required name="tipo_logradouro-cadastro" id="tipo_logradouro-cadastro">
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
								<div class="">
									<input class="form-control" name="cidade-cadastro" type="text" id="cidade-cadastro" required />
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="estado-cadastro">Estado</label>
								<div class="">
									<input class="form-control" name="estado-cadastro" type="text" id="estado-cadastro" required />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="card" width="50%">
				<div class="card-body">
					<h5 class="card-title">Configurações e permissões do condomínio</h5>

					<div class="form-group mt-4">
						<label for="database-cadastro">Nome do banco de dados</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">gestccon2_</span>
							</div>
							<input type="text" name="database-cadastro" required class="form-control simples-input" id="database-cadastro" />
						</div>
					</div>

					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label for="painel-cadastro">Liberar o painel?</label>
								<input type="radio" required name="painel-cadastro" value="sim" id="sim_painel-cadastro" class="multipla" />
								<label for="sim_painel-cadastro" class="multipla btn-outline-success">Sim</label>
								<input type="radio" name="painel-cadastro" value="nao" id="nao_painel-cadastro" class="multipla" />
								<label for="nao_painel-cadastro" class="multipla btn-outline-danger">Não</label>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label for="portal-cadastro">Liberar o portal?</label>
								<input type="radio" required name="portal-cadastro" value="sim" id="sim_portal-cadastro" class="multipla" />
								<label for="sim_portal-cadastro" class="multipla btn-outline-success">Sim</label>
								<input type="radio" name="portal-cadastro" value="nao" id="nao_portal-cadastro" class="multipla" />
								<label for="nao_portal-cadastro" class="multipla btn-outline-danger">Não</label>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label for="status-cadastro">Status do condomínio</label>
								<input type="radio" required name="status-cadastro" value="ativo" id="ativo_status-cadastro" class="multipla" />
								<label for="ativo_status-cadastro" class="multipla btn-outline-success">Ativo</label>
								<input type="radio" name="status-cadastro" value="inativo" id="inativo_status-cadastro" class="multipla" />
								<label for="inativo_status-cadastro" class="multipla btn-outline-danger">Inativo</label>
							</div>
						</div>
					</div>

					<button type="submit" class="btn btn-loader btn-primary mt-4" type="button">
						Cadastrar
						<img class="img-loader" src="assets/img/loader_branco.svg">
					</button>
				</div>
			</div>
		</form>
	</div>

	<!-- <div class="tab-pane fade show active" id="cadastro" role="tabpanel" aria-labelledby="cadastro-tab">
		<form id="form-cadastro-condominio" action="">
			<div class="card" width="50%">
				<div class="card-body">
					<h4 class="card-title">Informações do condomínio</h4>
					<h6 class="card-subtitle">Aqui você irá definir as informações sobre o condomínio</h6>
					<div class="row mt-4">
						<div class="col-md-6">
							<div class="form-group">
								<label for="nome-cadastro">Nome</label>
								<input class="form-control simples-input" type="text" id="nome-cadastro" required />
								<input type="hidden" name="acao" value="cadastro">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="imagem-cadastro">Imagem</label>
								<div class="input-group">
									<div class="custom-file">
										<input type="file" class="custom-file-input outros-input" id="imagem-cadastro" required />
										<label class="custom-file-label" for="imagem-cadastro"></label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="cnpj-cadastro">CNPJ</label>
								<input class="form-control cnpj-input" type="text" id="cnpj-cadastro" required />
								<label class="erro-mensagem">CNPJ inválido</label>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="site-cadastro">Site</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">https://</span>
									</div>
									<input type="text" class="form-control" id="site-cadastro" onkeyup="validarURL(this, '.site-erro_cadastro')" />
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
						<div class="col-md-4">
							<div class="form-group">
								<label for="email-cadastro">Email</label>
								<input class="form-control" type="text" onkeyup="validarEmail(this, '.email-erro_cadastro')" id="email-cadastro" required />
								<label class="erro-mensagem email-erro_cadastro">Email inválido</label>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="telefone1-cadastro">Telefone 1</label>
								<input class="form-control telefone-input" type="text" id="telefone1-cadastro" required />
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="telefone2-cadastro">Telefone 2</label>
								<input class="form-control telefone-input" type="text" id="telefone2-cadastro" required />
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="card" width="50%">
				<div class="card-body">
					<h5 class="card-title">Endereço do condomínio</h5>
					<h6 class="card-subtitle">Digite o cep primeiro para preencher os campos automaticamente</h6>
					<div class="row mt-4">
						<div class="col-md-3">
							<div class="form-group">
								<label for="cep-cadastro">CEP</label>
								<input class="form-control cep-input" type="text" id="cep-cadastro" onkeyup="consultarCep(this, 'cadastro', '.cep-erro_cadastro')" />
								<label class="erro-mensagem cep-erro_cadastro">CEP inválido</label>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="logradouro-cadastro">Logradouro</label>
								<input class="form-control" type="text" id="logradouro-cadastro" required />
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="numero-cadastro">Número</label>
								<input class="form-control simples-input" type="text" id="numero-cadastro" required />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="bairro-cadastro">Bairro</label>
								<input class="form-control" type="text" id="bairro-cadastro" required />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="tipo_logradouro-cadastro">Tipo do logradouro</label>
								<select class="custom-select form-control outros-input" name="tipo_logradouro-cadastro" id="tipo_logradouro-cadastro">
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
								<div class="">
									<input class="form-control" type="text" id="cidade-cadastro" required />
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="estado-cadastro">Estado</label>
								<div class="">
									<input class="form-control" type="text" id="estado-cadastro" required />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="card" width="50%">
				<div class="card-body">
					<h5 class="card-title">Configurações e permissões do condomínio</h5>

					<div class="row mt-4">

						<div class="col-md-3">
							<div class="form-group">
								<label for="painel-cadastro">Liberar o painel?</label>
								<input type="radio" checked name="painel-cadastro" id="sim_painel-cadastro" class="multipla" />
								<label for="sim_painel-cadastro" class="multipla btn-outline-success">Sim</label>
								<input type="radio" name="painel-cadastro" id="nao_painel-cadastro" class="multipla" />
								<label for="nao_painel-cadastro" class="multipla btn-outline-danger">Não</label>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label for="portal-cadastro">Liberar o portal?</label>
								<input type="radio" checked name="portal-cadastro" id="sim_portal-cadastro" class="multipla" />
								<label for="sim_portal-cadastro" class="multipla btn-outline-success">Sim</label>
								<input type="radio" name="portal-cadastro" id="nao_portal-cadastro" class="multipla" />
								<label for="nao_portal-cadastro" class="multipla btn-outline-danger">Não</label>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label for="status-cadastro">Status do condomínio</label>
								<input type="radio" checked name="status-cadastro" id="ativo_status-cadastro" class="multipla" />
								<label for="ativo_status-cadastro" class="multipla btn-outline-success">Ativo</label>
								<input type="radio" name="status-cadastro" id="inativo_status-cadastro" class="multipla" />
								<label for="inativo_status-cadastro" class="multipla btn-outline-danger">Inativo</label>
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
	</div> -->

	<div class="tab-pane fade" id="busca" role="tabpanel" aria-labelledby="busca-tab">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Faça uma busca</h4>
				<h5 class="card-subtitle">Deixe os campos em branco para listar todos os registros.</h5>

				<form id="form-busca-condominio">
					<div class="form-group mt-4">
						<label for="nome-busca">Nome do condomínio</label>
						<input type="hidden" name="acao" value="busca" />
						<input type="hidden" name="tipo" value="condominio" />
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

					<i class="fad fa-file-excel gerar-xls" id="btn-excelCondominios"></i>
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

	<div class="tab-pane fade" id="configuracao" role="tabpanel" aria-labelledby="configuracao-tab">

		<ul class="nav nav-tabs subnav-tabs nav-tabs-main" id="abas" role="tablist">
			<li class="nav-item" role="presentation">
				<a class="nav-link active" id="bloco-tab" data-toggle="tab" href="#bloco" role="tab" aria-controls="bloco" aria-selected="false">Bloco</a>
			</li>

			<li class="nav-item" role="presentation">
				<a class="nav-link" id="apartamento-tab" data-toggle="tab" href="#apartamento" role="tab" aria-controls="apartamento" aria-selected="false">Apartamento</a>
			</li>

			<li class="nav-item" role="presentation">
				<a class="nav-link" id="horario_funcionamento-tab" data-toggle="tab" href="#horario_funcionamento" role="tab" aria-controls="horario_funcionamento" aria-selected="false">Horário de funcionamento</a>
			</li>

			<li class="nav-item" role="presentation">
				<a class="nav-link" id="pagina-tab" data-toggle="tab" href="#pagina" role="tab" aria-controls="pagina" aria-selected="false">Página</a>
			</li>

			<li class="nav-item" role="presentation">
				<a class="nav-link" id="procurar_pagina-tab" data-toggle="tab" href="#procurar_pagina" role="tab" aria-controls="procurar_pagina" aria-selected="false">Procurar página</a>
			</li>

			<li class="nav-item" role="presentation">
				<a class="nav-link" id="modulo-tab" data-toggle="tab" href="#modulo" role="tab" aria-controls="modulo" aria-selected="false">Módulo</a>
			</li>
		</ul>



		<div class="tab-content" id="abasConteudo">
			<div class="tab-pane fade active show" id="bloco" role="tabpanel" aria-labelledby="bloco-tab">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Cadastrar bloco</h4>

						<form id="form-cadastro-bloco">
							<div class="container-dinamico mt-4">
								<div class="form-group">
									<label for="bloco-bloco">Bloco</label>
									<input class="form-control simples-input" name="bloco" type="text" id="bloco-bloco" />
									<input type="hidden" name="acao" value="cadastro" />
									<input type="hidden" name="tipo" value="bloco" />
									<input type="hidden" id="id-bloco" name="id-bloco" value="" />
									<input type="hidden" id="bloco-antigo" value="" />
								</div>
							</div>
							<button type="button" class="btn btn-loader btn-primary atualizar-blocos" style="display: none;">
								Atualizar
								<img class="img-loader" src="assets/img/loader_branco.svg">
							</button>
							<button type="button" class="btn btn-light cancelar-atualizar-blocos" style="display: none">Cancelar</button>

							<div class="btn_acrescentar mb-3" data-input-type="bloco">+ Acrescentar um campo</div>

							<button type="submit" class="btn btn-loader btn-primary" type="button">
								Cadastrar
								<img class="img-loader" src="assets/img/loader_branco.svg">
							</button>
							<button type="button" class="btn btn-loader btn-light listar-blocos mr-auto">
								Listar
								<img class="img-loader" src="assets/img/loader_preto.svg">
							</button>
						</form>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Resultado</h4>
						<div class="relatorios"><i class="fad fa-file-pdf gerar-pdf"></i><i class="fad fa-file-excel gerar-xls" id="btn-excelBloco"></i>
						</div>
						<div id="busca-resultado-bloco">
							<h5 class="card-subtitle" style="text-align:center">Aqui aparecerão todos os resultados da busca.</h5>

							<div class="table-responsive tabela-resultado mt-4" style="display: none">
								<table class="table table-bordered table-hover">
									<thead class="bg-inverse text-white">
										<tr>
											<th>#</th>
											<th>Bloco</th>
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

			<div class="tab-pane fade" id="apartamento" role="tabpanel" aria-labelledby="apartamento-tab">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Cadastrar apartamento</h4>

						<form id="form-cadastro-apartamento">
							<div class="form-group mt-4">
								<label for="bloco-apartamento">Bloco</label>
								<select id="bloco-apartamento" class="custom-select form-control" name="bloco-apartamento">
									<option value="" disabled selected>Selecione</option>
									<?php
									$bloco_json = $db->fetch_assoc($_SESSION['db_condominio'], '*', 'bloco', '');
									$bloco_array = json_decode($bloco_json, true);

									if ($bloco_array) {
										foreach ($bloco_array as $key => $item) {
											echo '<option value="' . $item["id"] . '">' . $item["bloco"] . '</option>';
										}
									} else {
										echo '<option value="">Nenhum bloco cadastrado.</option>';
									}
									?>
								</select>
								<input type="hidden" name="acao" value="cadastro" />
								<input type="hidden" name="tipo" value="apartamento" />
								<input type="hidden" id="id-apartamento" name="id-apartamento" value="" />
							</div>

							<div class="container-dinamico">
								<div class="form-group">
									<label for="apartamento-apartamento">Apartamento</label>
									<input class="form-control simples-input" name="apartamento" type="text" id="apartamento-apartamento" />
								</div>
							</div>

							<button type="button" class="btn btn-loader btn-primary atualizar-apartamentos" style="display: none;">
								Atualizar
								<img class="img-loader" src="assets/img/loader_branco.svg">
							</button>
							<button type="button" class="btn btn-light cancelar-atualizar-apartamentos" style="display: none">Cancelar</button>

							<div class="btn_acrescentar mb-3" data-input-type="apartamento">+ Acrescentar um campo</div>

							<button type="submit" class="btn btn-loader btn-primary" type="button">
								Cadastrar
								<img class="img-loader" src="assets/img/loader_branco.svg">
							</button>
							<button type="button" class="btn btn-loader btn-light listar-apartamentos mr-auto">
								Listar
								<img class="img-loader" src="assets/img/loader_preto.svg">
							</button>
						</form>


					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Resultado</h4>
						<div class="relatorios"><i class="fad fa-file-pdf gerar-pdf"></i><i class="fad fa-file-excel gerar-xls" id="btn-excelApartamento"></i>
						</div>
						<div class="resultado">
							<h5 class="card-subtitle" style="text-align:center">Aqui aparecerão todos os resultados da busca.</h5>

							<div class="table-responsive tabela-resultado mt-4" style="display: none">
								<table class="table table-bordered table-hover">
									<thead class="bg-inverse text-white">
										<tr>
											<th>#</th>
											<th>Bloco</th>
											<th>Apartamento</th>
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

			<div class="tab-pane fade" id="horario_funcionamento" role="tabpanel" aria-labelledby="horario_funcionamento-tab">
				<div class="card" width="50%">
					<div class="card-body">
						<h4 class="card-title">Horário de funcionamento</h4>

						<div class="table-responsive mt-4">
							<table class="table table-bordered table-hover">
								<thead class="bg-inverse text-white">
									<tr>
										<th scope="col">#</th>
										<th scope="col">Segunda</th>
										<th scope="col">Terça</th>
										<th scope="col">Quarta</th>
										<th scope="col">Quinta</th>
										<th scope="col">Sexta</th>
										<th scope="col">Sábado</th>
										<th scope="col">Domingo</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">Início</th>
										<td>
											<select class="custom-select form-control" name="funcionamento_inicio">
												<option value="00:00">00:00</option>
												<option value="01:00" selected="">01:00</option>
												<option value="02:00">02:00</option>
												<option value="03:00">03:00</option>
												<option value="04:00">04:00</option>
												<option value="05:00">05:00</option>
												<option value="06:00">06:00</option>
												<option value="07:00">07:00</option>
												<option value="08:00">08:00</option>
												<option value="09:00">09:00</option>
												<option value="10:00">10:00</option>
												<option value="11:00">11:00</option>
												<option value="12:00">12:00</option>
												<option value="13:00">13:00</option>
												<option value="14:00">14:00</option>
												<option value="15:00">15:00</option>
												<option value="16:00">16:00</option>
												<option value="17:00">17:00</option>
												<option value="18:00">18:00</option>
												<option value="19:00">19:00</option>
												<option value="20:00">20:00</option>
												<option value="21:00">21:00</option>
												<option value="22:00">22:00</option>
												<option value="23:00">23:00</option>
											</select>
										</td>
										<td>
											<select class="custom-select form-control" name="funcionamento_inicio">
												<option value="00:00">00:00</option>
												<option value="01:00" selected="">01:00</option>
												<option value="02:00">02:00</option>
												<option value="03:00">03:00</option>
												<option value="04:00">04:00</option>
												<option value="05:00">05:00</option>
												<option value="06:00">06:00</option>
												<option value="07:00">07:00</option>
												<option value="08:00">08:00</option>
												<option value="09:00">09:00</option>
												<option value="10:00">10:00</option>
												<option value="11:00">11:00</option>
												<option value="12:00">12:00</option>
												<option value="13:00">13:00</option>
												<option value="14:00">14:00</option>
												<option value="15:00">15:00</option>
												<option value="16:00">16:00</option>
												<option value="17:00">17:00</option>
												<option value="18:00">18:00</option>
												<option value="19:00">19:00</option>
												<option value="20:00">20:00</option>
												<option value="21:00">21:00</option>
												<option value="22:00">22:00</option>
												<option value="23:00">23:00</option>
											</select>
										</td>
										<td>
											<select class="custom-select form-control" name="funcionamento_inicio">
												<option value="00:00">00:00</option>
												<option value="01:00" selected="">01:00</option>
												<option value="02:00">02:00</option>
												<option value="03:00">03:00</option>
												<option value="04:00">04:00</option>
												<option value="05:00">05:00</option>
												<option value="06:00">06:00</option>
												<option value="07:00">07:00</option>
												<option value="08:00">08:00</option>
												<option value="09:00">09:00</option>
												<option value="10:00">10:00</option>
												<option value="11:00">11:00</option>
												<option value="12:00">12:00</option>
												<option value="13:00">13:00</option>
												<option value="14:00">14:00</option>
												<option value="15:00">15:00</option>
												<option value="16:00">16:00</option>
												<option value="17:00">17:00</option>
												<option value="18:00">18:00</option>
												<option value="19:00">19:00</option>
												<option value="20:00">20:00</option>
												<option value="21:00">21:00</option>
												<option value="22:00">22:00</option>
												<option value="23:00">23:00</option>
											</select>
										</td>
										<td>
											<select class="custom-select form-control" name="funcionamento_inicio">
												<option value="00:00">00:00</option>
												<option value="01:00" selected="">01:00</option>
												<option value="02:00">02:00</option>
												<option value="03:00">03:00</option>
												<option value="04:00">04:00</option>
												<option value="05:00">05:00</option>
												<option value="06:00">06:00</option>
												<option value="07:00">07:00</option>
												<option value="08:00">08:00</option>
												<option value="09:00">09:00</option>
												<option value="10:00">10:00</option>
												<option value="11:00">11:00</option>
												<option value="12:00">12:00</option>
												<option value="13:00">13:00</option>
												<option value="14:00">14:00</option>
												<option value="15:00">15:00</option>
												<option value="16:00">16:00</option>
												<option value="17:00">17:00</option>
												<option value="18:00">18:00</option>
												<option value="19:00">19:00</option>
												<option value="20:00">20:00</option>
												<option value="21:00">21:00</option>
												<option value="22:00">22:00</option>
												<option value="23:00">23:00</option>
											</select>
										</td>
										<td>
											<select class="custom-select form-control" name="funcionamento_inicio">
												<option value="00:00">00:00</option>
												<option value="01:00" selected="">01:00</option>
												<option value="02:00">02:00</option>
												<option value="03:00">03:00</option>
												<option value="04:00">04:00</option>
												<option value="05:00">05:00</option>
												<option value="06:00">06:00</option>
												<option value="07:00">07:00</option>
												<option value="08:00">08:00</option>
												<option value="09:00">09:00</option>
												<option value="10:00">10:00</option>
												<option value="11:00">11:00</option>
												<option value="12:00">12:00</option>
												<option value="13:00">13:00</option>
												<option value="14:00">14:00</option>
												<option value="15:00">15:00</option>
												<option value="16:00">16:00</option>
												<option value="17:00">17:00</option>
												<option value="18:00">18:00</option>
												<option value="19:00">19:00</option>
												<option value="20:00">20:00</option>
												<option value="21:00">21:00</option>
												<option value="22:00">22:00</option>
												<option value="23:00">23:00</option>
											</select>
										</td>
										<td>
											<select class="custom-select form-control" name="funcionamento_inicio">
												<option value="00:00">00:00</option>
												<option value="01:00" selected="">01:00</option>
												<option value="02:00">02:00</option>
												<option value="03:00">03:00</option>
												<option value="04:00">04:00</option>
												<option value="05:00">05:00</option>
												<option value="06:00">06:00</option>
												<option value="07:00">07:00</option>
												<option value="08:00">08:00</option>
												<option value="09:00">09:00</option>
												<option value="10:00">10:00</option>
												<option value="11:00">11:00</option>
												<option value="12:00">12:00</option>
												<option value="13:00">13:00</option>
												<option value="14:00">14:00</option>
												<option value="15:00">15:00</option>
												<option value="16:00">16:00</option>
												<option value="17:00">17:00</option>
												<option value="18:00">18:00</option>
												<option value="19:00">19:00</option>
												<option value="20:00">20:00</option>
												<option value="21:00">21:00</option>
												<option value="22:00">22:00</option>
												<option value="23:00">23:00</option>
											</select>
										</td>
										<td>
											<select class="custom-select form-control" name="funcionamento_inicio">
												<option value="00:00">00:00</option>
												<option value="01:00" selected="">01:00</option>
												<option value="02:00">02:00</option>
												<option value="03:00">03:00</option>
												<option value="04:00">04:00</option>
												<option value="05:00">05:00</option>
												<option value="06:00">06:00</option>
												<option value="07:00">07:00</option>
												<option value="08:00">08:00</option>
												<option value="09:00">09:00</option>
												<option value="10:00">10:00</option>
												<option value="11:00">11:00</option>
												<option value="12:00">12:00</option>
												<option value="13:00">13:00</option>
												<option value="14:00">14:00</option>
												<option value="15:00">15:00</option>
												<option value="16:00">16:00</option>
												<option value="17:00">17:00</option>
												<option value="18:00">18:00</option>
												<option value="19:00">19:00</option>
												<option value="20:00">20:00</option>
												<option value="21:00">21:00</option>
												<option value="22:00">22:00</option>
												<option value="23:00">23:00</option>
											</select>
										</td>
									</tr>
									<tr>
										<th scope="row">Final</th>
										<td>
											<select class="custom-select form-control" name="funcionamento_inicio">
												<option value="00:00">00:00</option>
												<option value="01:00">01:00</option>
												<option value="02:00">02:00</option>
												<option value="03:00">03:00</option>
												<option value="04:00">04:00</option>
												<option value="05:00">05:00</option>
												<option value="06:00">06:00</option>
												<option value="07:00">07:00</option>
												<option value="08:00">08:00</option>
												<option value="09:00">09:00</option>
												<option value="10:00">10:00</option>
												<option value="11:00">11:00</option>
												<option value="12:00">12:00</option>
												<option value="13:00">13:00</option>
												<option value="14:00">14:00</option>
												<option value="15:00">15:00</option>
												<option value="16:00">16:00</option>
												<option value="17:00">17:00</option>
												<option value="18:00">18:00</option>
												<option value="19:00">19:00</option>
												<option value="20:00">20:00</option>
												<option value="21:00">21:00</option>
												<option value="22:00">22:00</option>
												<option value="23:00" selected="">23:00</option>
											</select>
										</td>
										<td>
											<select class="custom-select form-control" name="funcionamento_inicio">
												<option value="00:00">00:00</option>
												<option value="01:00">01:00</option>
												<option value="02:00">02:00</option>
												<option value="03:00">03:00</option>
												<option value="04:00">04:00</option>
												<option value="05:00">05:00</option>
												<option value="06:00">06:00</option>
												<option value="07:00">07:00</option>
												<option value="08:00">08:00</option>
												<option value="09:00">09:00</option>
												<option value="10:00">10:00</option>
												<option value="11:00">11:00</option>
												<option value="12:00">12:00</option>
												<option value="13:00">13:00</option>
												<option value="14:00">14:00</option>
												<option value="15:00">15:00</option>
												<option value="16:00">16:00</option>
												<option value="17:00">17:00</option>
												<option value="18:00">18:00</option>
												<option value="19:00">19:00</option>
												<option value="20:00">20:00</option>
												<option value="21:00">21:00</option>
												<option value="22:00">22:00</option>
												<option value="23:00" selected="">23:00</option>
											</select>
										</td>
										<td>
											<select class="custom-select form-control" name="funcionamento_inicio">
												<option value="00:00">00:00</option>
												<option value="01:00">01:00</option>
												<option value="02:00">02:00</option>
												<option value="03:00">03:00</option>
												<option value="04:00">04:00</option>
												<option value="05:00">05:00</option>
												<option value="06:00">06:00</option>
												<option value="07:00">07:00</option>
												<option value="08:00">08:00</option>
												<option value="09:00">09:00</option>
												<option value="10:00">10:00</option>
												<option value="11:00">11:00</option>
												<option value="12:00">12:00</option>
												<option value="13:00">13:00</option>
												<option value="14:00">14:00</option>
												<option value="15:00">15:00</option>
												<option value="16:00">16:00</option>
												<option value="17:00">17:00</option>
												<option value="18:00">18:00</option>
												<option value="19:00">19:00</option>
												<option value="20:00">20:00</option>
												<option value="21:00">21:00</option>
												<option value="22:00">22:00</option>
												<option value="23:00" selected="">23:00</option>
											</select>
										</td>
										<td>
											<select class="custom-select form-control" name="funcionamento_inicio">
												<option value="00:00">00:00</option>
												<option value="01:00">01:00</option>
												<option value="02:00">02:00</option>
												<option value="03:00">03:00</option>
												<option value="04:00">04:00</option>
												<option value="05:00">05:00</option>
												<option value="06:00">06:00</option>
												<option value="07:00">07:00</option>
												<option value="08:00">08:00</option>
												<option value="09:00">09:00</option>
												<option value="10:00">10:00</option>
												<option value="11:00">11:00</option>
												<option value="12:00">12:00</option>
												<option value="13:00">13:00</option>
												<option value="14:00">14:00</option>
												<option value="15:00">15:00</option>
												<option value="16:00">16:00</option>
												<option value="17:00">17:00</option>
												<option value="18:00">18:00</option>
												<option value="19:00">19:00</option>
												<option value="20:00">20:00</option>
												<option value="21:00">21:00</option>
												<option value="22:00">22:00</option>
												<option value="23:00" selected="">23:00</option>
											</select>
										</td>
										<td>
											<select class="custom-select form-control" name="funcionamento_inicio">
												<option value="00:00">00:00</option>
												<option value="01:00">01:00</option>
												<option value="02:00">02:00</option>
												<option value="03:00">03:00</option>
												<option value="04:00">04:00</option>
												<option value="05:00">05:00</option>
												<option value="06:00">06:00</option>
												<option value="07:00">07:00</option>
												<option value="08:00">08:00</option>
												<option value="09:00">09:00</option>
												<option value="10:00">10:00</option>
												<option value="11:00">11:00</option>
												<option value="12:00">12:00</option>
												<option value="13:00">13:00</option>
												<option value="14:00">14:00</option>
												<option value="15:00">15:00</option>
												<option value="16:00">16:00</option>
												<option value="17:00">17:00</option>
												<option value="18:00">18:00</option>
												<option value="19:00">19:00</option>
												<option value="20:00">20:00</option>
												<option value="21:00">21:00</option>
												<option value="22:00">22:00</option>
												<option value="23:00" selected="">23:00</option>
											</select>
										</td>
										<td>
											<select class="custom-select form-control" name="funcionamento_inicio">
												<option value="00:00">00:00</option>
												<option value="01:00">01:00</option>
												<option value="02:00">02:00</option>
												<option value="03:00">03:00</option>
												<option value="04:00">04:00</option>
												<option value="05:00">05:00</option>
												<option value="06:00">06:00</option>
												<option value="07:00">07:00</option>
												<option value="08:00">08:00</option>
												<option value="09:00">09:00</option>
												<option value="10:00">10:00</option>
												<option value="11:00">11:00</option>
												<option value="12:00">12:00</option>
												<option value="13:00">13:00</option>
												<option value="14:00">14:00</option>
												<option value="15:00">15:00</option>
												<option value="16:00">16:00</option>
												<option value="17:00">17:00</option>
												<option value="18:00">18:00</option>
												<option value="19:00">19:00</option>
												<option value="20:00">20:00</option>
												<option value="21:00">21:00</option>
												<option value="22:00">22:00</option>
												<option value="23:00" selected="">23:00</option>
											</select>
										</td>
										<td>
											<select class="custom-select form-control" name="funcionamento_inicio">
												<option value="00:00">00:00</option>
												<option value="01:00">01:00</option>
												<option value="02:00">02:00</option>
												<option value="03:00">03:00</option>
												<option value="04:00">04:00</option>
												<option value="05:00">05:00</option>
												<option value="06:00">06:00</option>
												<option value="07:00">07:00</option>
												<option value="08:00">08:00</option>
												<option value="09:00">09:00</option>
												<option value="10:00">10:00</option>
												<option value="11:00">11:00</option>
												<option value="12:00">12:00</option>
												<option value="13:00">13:00</option>
												<option value="14:00">14:00</option>
												<option value="15:00">15:00</option>
												<option value="16:00">16:00</option>
												<option value="17:00">17:00</option>
												<option value="18:00">18:00</option>
												<option value="19:00">19:00</option>
												<option value="20:00">20:00</option>
												<option value="21:00">21:00</option>
												<option value="22:00">22:00</option>
												<option value="23:00" selected="">23:00</option>
											</select>
										</td>
									</tr>
								</tbody>
							</table>
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
							<h5 class="card-subtitle" style="text-align: center">Nenhum resultado encontrado.</h5>
						</div>
					</div>
				</div>
			</div>

			<div class="tab-pane fade" id="pagina" role="tabpanel" aria-labelledby="pagina-tab">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Cadastro da página</h4>
						<div class="row mt-4">
							<div class="col-md-6">
								<div class="form-group">
									<label for="pai-pagina">Pai</label>
									<select disabled class="custom-select form-control outros-input" id="pai-pagina">
										<option selected="">Não existem pais cadastrados.</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="modulo-pagina">Módulos</label>
									<select disabled class="custom-select form-control outros-input" id="modulo-pagina">
										<option selected="">Não existem módulos cadastrados.</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="nome-pagina">Nome</label>
									<input class="form-control simples-input" type="text" id="nome-pagina" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="titulo-pagina">Título</label>
									<input class="form-control simples-input" type="text" id="titulo-pagina" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="link-pagina">Link</label>
									<div class="input-group">
										<div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">https://</span>
										</div>
										<input type="text" class="form-control" id="link-pagina" onkeyup="validarURL(this, '.link-erro_pagina')" />
									</div>
									<label class="erro-mensagem link-erro_pagina">URL inválida</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="codigo-pagina">Com código?</label>
							<input type="radio" name="codigo-pagina" id="sim_codigo-pagina" class="multipla" />
							<label for="sim_codigo-pagina" class="multipla btn-outline-success">Sim</label>
							<input type="radio" name="codigo-pagina" id="nao_codigo-pagina" class="multipla" />
							<label for="nao_codigo-pagina" class="multipla btn-outline-danger">Não</label>
						</div>

						<button class="btn btn-primary">Cadastrar</button>
					</div>
				</div>
			</div>

			<div class="tab-pane fade" id="procurar_pagina" role="tabpanel" aria-labelledby="procurar_pagina-tab">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Buscar página</h4>
						<div class="form-group">
							<label for="nome-procurar_pagina">Nome</label>
							<input class="form-control" type="text" id="nome-procurar_pagina" />
						</div>
						<div class="form-group">
							<label for="tipo-procurar_pagina">Tipo?</label>
							<input type="radio" name="tipo-procurar_pagina" id="janela_tipo-procurar_pagina" class="multipla" />
							<label for="janela_tipo-procurar_pagina" class="multipla btn-outline-secondary">Janela</label>
							<input type="radio" name="tipo-procurar_pagina" id="aba_tipo-procurar_pagina" class="multipla" />
							<label for="aba_tipo-procurar_pagina" class="multipla btn-outline-secondary">Aba</label></div><button class="btn btn-primary">Procurar</button>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Resultado</h4>
						<div class="relatorios"><i class="fad fa-file-pdf gerar-pdf"></i><i class="fad fa-file-excel gerar-xls"></i>
						</div>
						<div id="busca-resultado">
							<h5 class="card-subtitle" style="text-align:center">Aqui aparecerão todos os resultados da busca.</h5>
						</div>
					</div>
				</div>
			</div>

			<div class="tab-pane fade" id="modulo" role="tabpanel" aria-labelledby="modulo-tab">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Cadastrar um módulo</h4>
						<h5 class="card-subtitle">Aqui você pode fazer uma busca pelos ambientes cadastrados e realizar edições.</h5>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="nome-modulo">Nome</label>
									<input class="form-control simples-input" type="text" id="nome-modulo" /></div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="titulo-modulo">Título</label>
									<input class="form-control simples-input" type="text" id="titulo-modulo" />
								</div>
							</div>
						</div><button class="btn btn-primary">Cadastrar</button>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Resultado</h4>
						<div class="relatorios"><i class="fad fa-file-pdf gerar-pdf"></i><i class="fad fa-file-excel gerar-xls"></i>
						</div>
						<div id="busca-resultado">
							<h5 class="card-subtitle" style="text-align:center">Nenhum resultado encontrado.</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="tab-pane fade" id="edicao" role="tabpanel" aria-labelledby="edicao-tab">
		<form id="form-edicao-condominio">
			<div class="card" width="50%">
				<div class="card-body">
					<h4 class="card-title">Informações do condomínio</h4>
					<h6 class="card-subtitle">Aqui você irá definir as informações sobre o condomínio</h6>
					<div class="row mt-4">
						<div class="col-md-6">
							<div class="form-group">
								<label for="nome-edicao">Nome</label>
								<input class="form-control simples-input" required name="nome-edicao" type="text" id="nome-edicao" />
								<input type="hidden" name="ts" id="ts-edicao" value="" />
								<input type="hidden" name="database-edicao" id="database-edicao" value="" />
								<input type="hidden" name="acao" value="edicao" />
								<input type="hidden" name="tipo" value="condominio" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="imagem-edicao">Imagem</label>
								<div class="input-group">
									<div class="custom-file">
										<input type="file" name="imagem-edicao" class="custom-file-input outros-input" id="imagem-edicao" />
										<label class="custom-file-label" for="imagem-edicao"></label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="cnpj-edicao">CNPJ</label>
								<input class="form-control cnpj-input" required name="cnpj-edicao" type="text" id="cnpj-edicao" />
								<label class="erro-mensagem">CNPJ inválido</label>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="site-edicao">Site</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">https://</span>
									</div>
									<input type="text" name="site-edicao" required class="form-control" id="site-edicao" onkeyup="validarURL(this, '.site-erro_cadastro')" />
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
								<label for="email-edicao">Email</label>
								<input class="form-control" required type="text" onkeyup="validarEmail(this, '.email-erro_cadastro')" name="email-edicao" id="email-edicao" />
								<label class="erro-mensagem email-erro_cadastro">Email inválido</label>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="telefone1-edicao">Telefone</label>
								<input class="form-control telefone-input" required name="telefone-edicao" type="text" id="telefone-edicao" />
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="card" width="50%">
				<div class="card-body">
					<h5 class="card-title">Endereço do condomínio</h5>
					<h6 class="card-subtitle">Digite o cep primeiro para preencher os campos automaticamente</h6>
					<div class="row mt-4">
						<div class="col-md-3">
							<div class="form-group">
								<label for="cep-edicao">CEP</label>
								<input class="form-control cep-input" required name="cep-edicao" type="text" id="cep-edicao" onkeyup="consultarCep(this, 'cadastro', '.cep-erro_cadastro')" />
								<label class="erro-mensagem cep-erro_cadastro">CEP inválido</label>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="logradouro-edicao">Logradouro</label>
								<input class="form-control" required name="logradouro-edicao" type="text" id="logradouro-edicao" />
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
								<input class="form-control" required name="bairro-edicao" type="text" id="bairro-edicao" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="tipo_logradouro-edicao">Tipo do logradouro</label>
								<select class="custom-select form-control outros-input" name="tipo_logradouro-edicao" required name="tipo_logradouro-edicao" id="tipo_logradouro-edicao">
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
								<label for="cidade-edicao">Cidade</label>
								<div class="">
									<input class="form-control" required name="cidade-edicao" type="text" id="cidade-edicao" />
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="estado-edicao">Estado</label>
								<div class="">
									<input class="form-control" required name="estado-edicao" type="text" id="estado-edicao" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="card" width="50%">
				<div class="card-body">
					<h5 class="card-title">Configurações e permissões do condomínio</h5>


					<div class="row mt-4">
						<div class="col-md-3">
							<div class="form-group">
								<label for="painel-edicao">Liberar o painel?</label>
								<input type="radio" required name="painel-edicao" value="sim" id="sim_painel-edicao" class="multipla" />
								<label for="sim_painel-edicao" class="multipla btn-outline-success">Sim</label>
								<input type="radio" name="painel-edicao" value="nao" id="nao_painel-edicao" class="multipla" />
								<label for="nao_painel-edicao" class="multipla btn-outline-danger">Não</label>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label for="portal-edicao">Liberar o portal?</label>
								<input type="radio" required name="portal-edicao" value="sim" id="sim_portal-edicao" class="multipla" />
								<label for="sim_portal-edicao" class="multipla btn-outline-success">Sim</label>
								<input type="radio" name="portal-edicao" value="nao" id="nao_portal-edicao" class="multipla" />
								<label for="nao_portal-edicao" class="multipla btn-outline-danger">Não</label>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label for="status-edicao">Status do condomínio</label>
								<input type="radio" required name="status-edicao" value="ativo" id="ativo_status-edicao" class="multipla" />
								<label for="ativo_status-edicao" class="multipla btn-outline-success">Ativo</label>
								<input type="radio" name="status-edicao" value="inativo" id="inativo_status-edicao" class="multipla" />
								<label for="inativo_status-edicao" class="multipla btn-outline-danger">Inativo</label>
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
	$("#btn-excelCondominios").click(function(){
		var acao = "excel1";

		$.ajax({
			url: '../../telas_ajax/master/condominio.php',
			type: 'POST',
			data: {acao:acao},
			success: (response) => {
				window.open('../../telas_ajax/master/condominios.csv', '_blank');
			},
			error: (response) => {
				console.log(response)
			},
		})
	});
	
	$("#btn-excelBloco").click(function(){
		var acao = "excel2";

		$.ajax({
			url: '../../telas_ajax/master/condominio.php',
			type: 'POST',
			data: {acao:acao},
			success: (response) => {
				window.open('../../telas_ajax/master/bloco.csv', '_blank');
			},
			error: (response) => {
				console.log(response)
			},
		})
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

	Excel('btn-excelApartamento','excel3','../../telas_ajax/master/condominio.php','../../telas_ajax/master/apartamento.csv');

	


	$('#nome-cadastro').on('keyup', (e) => {
		var str = $(e.target).val().toLowerCase()
		var str2 = str.replace(/[^A-Za-z ]+/, '')
		$('#database-cadastro').val(str2.replace(/\s\s+/g, ' ').replaceAll(' ', '_')).addClass('valid')
	});

	$('#form-cadastro-condominio button[type="submit"]').on('click', (e) => {
		var radio_invalidos = $('#form-cadastro-condominio input[type=radio]:not(:checked)').length;

		if (radio_invalidos > 3) {
			toastr.error('Preencha todos os campos corretamente.', 'Erro');
			return false;
		}
	});
	$('#form-cadastro-condominio').on('submit', (e) => {
		var dados = $(e.target).serialize();
		var campos_invalidos = $('#form-cadastro-condominio .invalid').length;

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
	$('#form-busca-condominio').on('submit', (e) => {
		var dados = $(e.target).serialize()

		$.ajax({
			url: 'telas_ajax/master/condominio.php',
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
						<tr>
							<td>${i + 1}</td>
							<td>${objeto['nome']}</td>
							<td>${objeto['status']}</td>
							<td class="acoes-td">
								<i class="fas fa-pen editar-condominio" data-ts="${objeto['ts']}"></i>
								<i class="fas fa-trash excluir-condominio" data-ts="${objeto['ts']}"></i>
								<i class="fas fa-power-off desativar-condominio"></i>
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
		})

		return false
	});
	$('#form-edicao-condominio button[type="submit"]').on('click', (e) => {
		var radio_invalidos = $('#form-edicao-condominio input[type=radio]:not(:checked)').length;

		if (radio_invalidos > 3) {
			toastr.error('Preencha todos os campos corretamente.', 'Erro');
			return false;
		}
	});

	$('#form-edicao-condominio').on('submit', (e) => {
		var dados = $(e.target).serialize()
		var campos_invalidos = $('#form-edicao-condominio .invalid').length;
		var radio_invalidos = $('#form-edicao-condominio input[type=radio]:not(:checked)').length;

		if (campos_invalidos > 0 || radio_invalidos > 3) {
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
					$('#submit-busca').click();
					$('#tab-busca').click();
					$('#tab-edicao').parent().hide();

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
	$('body').on('click', '.editar-condominio', (e) => {
		const ts = $(e.target).attr('data-ts');

		$.ajax({
			url: 'telas_ajax/master/condominio.php',
			type: 'POST',
			data: `ts=${ts}&acao=select&tipo=condominio`,
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

					$('#ts-edicao').val(condominio['timestamp']).removeClass('valid invalid').addClass('valid');
					$('#database-edicao').val(condominio['db_condominio']).removeClass('valid invalid').addClass('valid');
					$('#nome-edicao').val(condominio['nome']).removeClass('valid invalid').addClass('valid');
					$('#cnpj-edicao').val(condominio['cnpj']).removeClass('valid invalid').addClass('valid');
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
					$('[name=painel-edicao][value=' + condominio['liberar_painel'] + ']').prop('checked', true);
					$('[name=portal-edicao][value=' + condominio['liberar_portal'] + ']').prop('checked', true);
					$('[name=status-edicao][value=' + condominio['status'] + ']').prop('checked', true);

					$('#tab-edicao').parent().show();
					$('#tab-edicao').click();

				}
			},
			error: (response) => {
				console.log(response)
			},
		})
		e.stopImmediatePropagation();
	});
	$('body').on('click', '.excluir-condominio', (e) => {
		const ts = $(e.target).attr('data-ts');

		$.ajax({
			url: 'telas_ajax/master/condominio.php',
			type: 'POST',
			data: `ts=${ts}&acao=excluir&tipo=condominio`,
			success: (response) => {
				var status = response.split(' |divisor| ')[0]
				var mensagem = response.split(' |divisor| ')[1]

				if (status == 'sucesso') {
					toastr.success('Condomínio excluído com sucesso!', 'Sucesso')
					$('#submit-busca').click();
				} else if (status == 'falha') {
					toastr.error(mensagem, 'Erro')
				}
			},
			error: (response) => {
				console.log(response)
			},
		});
		e.stopImmediatePropagation();
	});



	$('#form-cadastro-bloco').on('submit', (e) => {
		var bloco_arr = [];
		$("input[name=bloco]").each((i, el) => {
			var bloco = $(el).val();
			bloco_arr.push(bloco);
		});

		if (!checarArray(bloco_arr)) {
			toastr.error('Preencha todos os campos corretamente.', 'Erro')
			return false;
		}

		$.ajax({
			url: 'telas_ajax/master/condominio.php',
			type: 'POST',
			data: {
				bloco: bloco_arr,
				acao: 'cadastro',
				tipo: 'bloco'
			},
			success: (response) => {
				var status = response.split(' |divisor| ')[0]
				var mensagem = response.split(' |divisor| ')[1]

				if (status == 'sucesso') {
					toastr.success(mensagem, 'Sucesso');
					$("#bloco-bloco").val('').removeClass('valid invalid');
					$('#form-cadastro-bloco .remover-input').parent().remove();
					$('.listar-blocos').click();

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
	$('body').on('click', '.listar-blocos', (e) => {

		$.ajax({
			url: 'telas_ajax/master/condominio.php',
			type: 'POST',
			data: {
				acao: 'select',
				tipo: 'bloco'
			},
			success: (response) => {
				var response_obj = JSON.parse(response);
				var tabela = $('.listar-blocos').closest('#bloco').find('.tabela-resultado');
				var texto = $('.listar-blocos').closest('#bloco').find('#busca-resultado-bloco .card-subtitle');

				if (!checarArray(response_obj)) {
					$(tabela).hide();
					$(texto).show().text("Nenhum resultado encontrado.");

				} else {
					$(texto).hide();
					$(tabela).find('tbody').html('')

					$(response_obj).each((i, objeto) => {
						$(tabela).find('tbody').append(`
						<tr>
							<td>${i + 1}</td>
							<td>${objeto['bloco']}</td>
							<td class="acoes-td">
								<i class="fas fa-pen editar-bloco" data-id="${objeto['id']}" data-name="${objeto['bloco']}"></i>
								<i class="fas fa-trash excluir-bloco" data-id="${objeto['id']}" data-name="${objeto['bloco']}"></i>
							</td>
						</tr>
						`)
					})

					setarTooltips('.editar-bloco', 'Editar bloco', 'top', false)
					setarTooltips('.excluir-bloco', 'Excluir bloco', 'top', true)

					$(tabela).show()
				}
			},
			error: (response) => {
				console.log(response);
			},
		})
		e.stopImmediatePropagation();
	});
	$('body').on('click', '.excluir-bloco', (e) => {

		var dados = {
			acao: 'excluir',
			tipo: 'bloco',
			bloco: $(e.target).attr('data-name'),
			id: $(e.target).attr('data-id')
		}

		$.ajax({
			url: 'telas_ajax/master/condominio.php',
			type: 'POST',
			data: dados,
			success: (response) => {
				var status = response.split(' |divisor| ')[0]
				var mensagem = response.split(' |divisor| ')[1]

				if (status == 'sucesso') {
					toastr.success(mensagem, 'Sucesso');
					$(e.target).closest('.tab-pane.active').find('.btn_acrescentar').show();
					$(e.target).closest('.tab-pane.active').find('button.atualizar-blocos, button.cancelar-atualizar-blocos').hide().removeClass('ajax-progress');
					$("#bloco-bloco").val('').removeClass('valid invalid');
					$('.listar-blocos').click();

				} else if (status == 'falha') {
					toastr.error(mensagem, 'Erro')
				}
			},
			error: (response) => {
				console.log(response)
			},
		})
		e.stopImmediatePropagation();
	});
	$('body').on('click', '.editar-bloco', (e) => {
		$(e.target).closest('.tab-pane.active').find('.btn_acrescentar').hide();
		$(e.target).closest('.tab-pane.active').find('button[type=submit], button.listar-blocos').hide();
		$(e.target).closest('.tab-pane.active').find('button.atualizar-blocos, button.cancelar-atualizar-blocos').show();
		$(e.target).closest('.tab-pane.active').find('#id-bloco').val($(e.target).attr('data-id'));


		$('#form-cadastro-bloco .remover-input').parent().remove();
		$("#bloco-bloco").val($(e.target).attr('data-name')).focus();
		$("#bloco-antigo").val($(e.target).attr('data-name'));

		e.stopImmediatePropagation();
	});
	$('body').on('click', '.atualizar-blocos', (e) => {
		var dados = {
			acao: 'edicao',
			tipo: 'bloco',
			id: $("#id-bloco").val(),
			bloco_novo: $("#bloco-bloco").val(),
			bloco_antigo: $("#bloco-antigo").val()
		}

		$.ajax({
			url: 'telas_ajax/master/condominio.php',
			type: 'POST',
			data: dados,
			success: (response) => {
				var status = response.split(' |divisor| ')[0]
				var mensagem = response.split(' |divisor| ')[1]

				if (status == 'sucesso') {
					toastr.success(mensagem, 'Sucesso');
					$(e.target).closest('.tab-pane.active').find('.btn_acrescentar').show();
					$(e.target).closest('.tab-pane.active').find('button.atualizar-blocos, button.cancelar-atualizar-blocos').hide().removeClass('ajax-progress');
					$(e.target).closest('.tab-pane.active').find('button[type=submit], button.listar-blocos').show();
					$("#bloco-bloco").val('').removeClass('valid invalid');
					$('.listar-blocos').click();

				} else if (status == 'falha') {
					toastr.error(mensagem, 'Erro')
				}
			},
			error: (response) => {
				console.log(response)
			},
		})
		e.stopImmediatePropagation();
	})
	$('body').on('click', '.cancelar-atualizar-blocos', (e) => {
		$(e.target).closest('.tab-pane.active').find('.btn_acrescentar').show();
		$(e.target).closest('.tab-pane.active').find('button[type=submit], button.listar-blocos').show();
		$(e.target).closest('.tab-pane.active').find('button.atualizar-blocos, button.cancelar-atualizar-blocos').hide().removeClass('ajax-progress');
		$("#bloco-bloco").val('').removeClass('valid invalid');
		e.stopImmediatePropagation();
	})

	$('#form-cadastro-apartamento').on('submit', (e) => {
		var bloco = $(e.target).find('[name=bloco-apartamento]').val();
		var apartamento_arr = [];
		$("input[name=apartamento]").each((i, el) => {
			var apartamento = $(el).val();
			apartamento_arr.push(apartamento);
		});

		if (!checarArray(apartamento_arr) || !bloco) {
			toastr.error('Preencha todos os campos corretamente.', 'Erro')
			return false;
		}

		$.ajax({
			url: 'telas_ajax/master/condominio.php',
			type: 'POST',
			data: {
				apartamento: apartamento_arr,
				bloco: bloco,
				acao: 'cadastro',
				tipo: 'apartamento'
			},
			success: (response) => {
				var status = response.split(' |divisor| ')[0]
				var mensagem = response.split(' |divisor| ')[1]

				if (status == 'sucesso') {
					toastr.success(mensagem, 'Sucesso');
					$("#apartamento-apartamento").val('').removeClass('valid invalid');
					$('#form-cadastro-apartamento .remover-input').parent().remove();
					$('.listar-apartamentos').click();
					$('#bloco-apartamento').val("");

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
	$('body').on('click', '.listar-apartamentos', (e) => {
		var bloco = $('#bloco-apartamento').val();

		if(!bloco){
			toastr.error('Escolha um bloco antes de listar os apartamentos.', 'Erro')
			return false;
		}

		$.ajax({
			url: 'telas_ajax/master/condominio.php',
			type: 'POST',
			data: {
				acao: 'select',
				bloco: bloco,
				tipo: 'apartamento'
			},
			success: (response) => {
				var response_obj = JSON.parse(response);
				var tabela = $('.listar-apartamentos').closest('#apartamento').find('.tabela-resultado');
				var texto = $('.listar-apartamentos').closest('#apartamento').find('.resultado .card-subtitle');

				if (!checarArray(response_obj)) {
					$(tabela).hide();
					$(texto).show().text("Nenhum resultado encontrado.");

				} else {
					$(texto).hide();
					$(tabela).find('tbody').html('')

					$(response_obj).each((i, objeto) => {
						$(tabela).find('tbody').append(`
						<tr>
							<td>${i + 1}</td>
							<td>${objeto['bloco']}</td>
							<td>${objeto['apartamento']}</td>
							<td class="acoes-td">
								<i class="fas fa-pen editar-apartamento" data-id="${objeto['id']}" data-name="${objeto['apartamento']}" data-bloco="${objeto['bloco']}"></i>
								<i class="fas fa-trash excluir-apartamento" data-id="${objeto['id']}"></i>
							</td>
						</tr>
						`)
					})

					setarTooltips('.editar-apartamento', 'Editar apartamento', 'top', false)
					setarTooltips('.excluir-apartamento', 'Excluir apartamento', 'top', true)

					$(tabela).show()
				}
			},
			error: (response) => {
				console.log(response);
			},
		})
		e.stopImmediatePropagation();
	});
	$('body').on('click', '.excluir-apartamento', (e) => {
		var dados = {
			acao: 'excluir',
			tipo: 'apartamento',
			id: $(e.target).attr('data-id')
		}

		$.ajax({
			url: 'telas_ajax/master/condominio.php',
			type: 'POST',
			data: dados,
			success: (response) => {
				var status = response.split(' |divisor| ')[0]
				var mensagem = response.split(' |divisor| ')[1]

				if (status == 'sucesso') {
					toastr.success(mensagem, 'Sucesso');
					$(e.target).closest('.tab-pane.active').find('.btn_acrescentar').show();
					$(e.target).closest('.tab-pane.active').find('button.atualizar-apartamentos, button.cancelar-atualizar-apartamentos').hide().removeClass('ajax-progress');
					$("#apartamento-apartamento").val('').removeClass('valid invalid');
					$('.listar-apartamentos').click();

				} else if (status == 'falha') {
					toastr.error(mensagem, 'Erro')
				}
			},
			error: (response) => {
				console.log(response)
			},
		})
		e.stopImmediatePropagation();
	});
	$('body').on('click', '.editar-apartamento', (e) => {
		$(e.target).closest('.tab-pane.active').find('.btn_acrescentar').hide();
		$(e.target).closest('.tab-pane.active').find('button[type=submit], button.listar-apartamentos').hide();
		$(e.target).closest('.tab-pane.active').find('button.atualizar-apartamentos, button.cancelar-atualizar-apartamentos').show();
		$(e.target).closest('.tab-pane.active').find('#id-apartamento').val($(e.target).attr('data-id'));


		$('#form-cadastro-apartamento .remover-input').parent().remove();
		$('#bloco-apartamento').val($(e.target).attr('data-bloco'));
		$("#apartamento-apartamento").val($(e.target).attr('data-name')).focus();

		e.stopImmediatePropagation();
	});
	$('body').on('click', '.atualizar-apartamentos', (e) => {
		var dados = {
			acao: 'edicao',
			tipo: 'apartamento',
			id: $("#id-apartamento").val(),
			apartamento: $("#apartamento-apartamento").val()
		}

		$.ajax({
			url: 'telas_ajax/master/condominio.php',
			type: 'POST',
			data: dados,
			success: (response) => {
				var status = response.split(' |divisor| ')[0]
				var mensagem = response.split(' |divisor| ')[1]

				if (status == 'sucesso') {
					toastr.success(mensagem, 'Sucesso');
					$(e.target).closest('.tab-pane.active').find('.btn_acrescentar').show();
					$(e.target).closest('.tab-pane.active').find('button.atualizar-apartamentos, button.cancelar-atualizar-apartamentos').hide().removeClass('ajax-progress');
					$(e.target).closest('.tab-pane.active').find('button[type=submit], button.listar-apartamentos').show();
					$("#apartamento-apartamento").val('').removeClass('valid invalid');
					$('.listar-apartamentos').click();

				} else if (status == 'falha') {
					toastr.error(mensagem, 'Erro')
				}
			},
			error: (response) => {
				console.log(response)
			},
		})
		e.stopImmediatePropagation();
	});
	$('body').on('click', '.cancelar-atualizar-apartamentos', (e) => {
		$(e.target).closest('.tab-pane.active').find('.btn_acrescentar').show();
		$(e.target).closest('.tab-pane.active').find('button[type=submit], button.listar-apartamentos').show();
		$(e.target).closest('.tab-pane.active').find('button.atualizar-apartamentos, button.cancelar-atualizar-apartamentos').hide().removeClass('ajax-progress');
		$('#bloco-apartamento').val("");
		$("#apartamento-apartamento").val('').removeClass('valid invalid');
		e.stopImmediatePropagation();
	});
</script>