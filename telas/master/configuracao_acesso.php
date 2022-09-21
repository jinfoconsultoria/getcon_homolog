<ul class="nav nav-tabs nav-tabs-main" id="abas" role="tablist">

	<li class="nav-item" role="presentation">

		<a class="nav-link active" id="cadastro-tab" data-toggle="tab" href="#cadastro" role="tab" aria-controls="cadastro" aria-selected="true">Cadastrar</a>

	</li>



	<li class="nav-item" role="presentation">

		<a class="nav-link" id="perfil_acesso-tab" data-toggle="tab" href="#perfil_acesso" role="tab" aria-controls="perfil_acesso" aria-selected="false">Perfil de acesso</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="acesso_portal-tab" data-toggle="tab" href="#acesso_portal" role="tab" aria-controls="acesso_portal" aria-selected="false">Acesso ao portal</a>

	</li>

</ul>



<div class="tab-content" id="abasConteudo">

	<div class="tab-pane fade show active" id="cadastro" role="tabpanel" aria-labelledby="cadastro-tab">

		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Informações do cadastro</h4>

				<h6 class="card-subtitle">Aqui você irá definir as informações sobre o cadastro.</h6>



				<div class="form-group">

					<label for="nome-cadastro">Nome</label>

					<input class="form-control simples-input" type="text" id="nome-cadastro" />

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






	<div class="tab-pane fade" id="perfil_acesso" role="tabpanel" aria-labelledby="perfil_acesso-tab">

		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Altere as permissões</h4>

				<h5 class="card-subtitle">Selecione uma seção para exibir as respectivas permissões.</h5>



				<div class="form-group">

					<label for="perfil-acesso">Perfil</label>

					<select disabled class="custom-select form-control" id="perfil-acesso">

						<option>Não existem perfis cadastrados.</option>

					</select>

				</div>



				<div id="container-tabela" class="mb-4">

					<div id="container-botoes" class="mb-3">

						<button class="btn btn-secondary" type="button" data-toggle="collapse" data-parent="#container-tabela" data-target="#cadastro-container" aria-expanded="true" aria-controls="cadastro-container">Cadastro</button>

						<button class="btn btn-secondary" type="button" data-toggle="collapse" data-parent="#container-tabela" data-target="#controles-container" aria-expanded="true" aria-controls="controles-container">Controles</button>

						<button class="btn btn-secondary" type="button" data-toggle="collapse" data-parent="#container-tabela" data-target="#financeiro-container" aria-expanded="true" aria-controls="financeiro-container">Financeiro</button>

						<button class="btn btn-secondary" type="button" data-toggle="collapse" data-parent="#container-tabela" data-target="#painel_master-container" aria-expanded="true" aria-controls="painel_master-container">Painel Master</button>

						<button class="btn btn-secondary" type="button" data-toggle="collapse" data-parent="#container-tabela" data-target="#relatorio_geral-container" aria-expanded="true" aria-controls="relatorio_geral-container">Relatório Geral</button>

						<button class="btn btn-secondary" type="button" data-toggle="collapse" data-parent="#container-tabela" data-target="#site_portal-container" aria-expanded="true" aria-controls="site_portal-container">Site portal</button>

					</div>



					<div id="cadastro-container" data-parent="#container-tabela" class="collapse">

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Cadastro</label>

								</div>

							</div>

							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos_main" id="todos_main-cadastro" />

									<label class="toggle toggle_todos" for="todos_main-cadastro">Todos</label>



									<input type="checkbox" class="switch switch_menu_main" id="menu_main-cadastro" />

									<label class="toggle toggle_menu" for="menu_main-cadastro">Menu</label>



									<input type="checkbox" class="switch switch_inserir_main" id="inserir_main-cadastro" />

									<label class="toggle toggle_inserir" for="inserir_main-cadastro">Inserir</label>



									<input type="checkbox" class="switch switch_alterar_main" id="alterar_main-cadastro" />

									<label class="toggle toggle_alterar" for="alterar_main-cadastro">Alterar</label>



									<input type="checkbox" class="switch switch_excluir_main" id="excluir_main-cadastro" />

									<label class="toggle toggle_excluir" for="excluir_main-cadastro">Excluir</label>



									<input type="checkbox" class="switch switch_procurar_main" id="procurar_main-cadastro" />

									<label class="toggle toggle_procurar" for="procurar_main-cadastro">Procurar</label>



									<input type="checkbox" class="switch switch_pdf_main" id="pdf_main-cadastro" />

									<label class="toggle toggle_pdf" for="pdf_main-cadastro">Pdf</label>



									<input type="checkbox" class="switch switch_xls_main" id="xls_main-cadastro" />

									<label class="toggle toggle_xls" for="xls_main-cadastro">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Ambientes</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="ambientes-acesso" id="todos_ambientes-acesso" />

									<label class="toggle toggle_todos" for="todos_ambientes-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="ambientes-acesso" id="menu_ambientes-acesso" />

									<label class="toggle toggle_menu" for="menu_ambientes-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="ambientes-acesso" id="inserir_ambientes-acesso" />

									<label class="toggle toggle_inserir" for="inserir_ambientes-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="ambientes-acesso" id="alterar_ambientes-acesso" />

									<label class="toggle toggle_alterar" for="alterar_ambientes-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="ambientes-acesso" id="excluir_ambientes-acesso" />

									<label class="toggle toggle_excluir" for="excluir_ambientes-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="ambientes-acesso" id="procurar_ambientes-acesso" />

									<label class="toggle toggle_procurar" for="procurar_ambientes-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="ambientes-acesso" id="pdf_ambientes-acesso" />

									<label class="toggle toggle_pdf" for="pdf_ambientes-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="ambientes-acesso" id="xls_ambientes-acesso" />

									<label class="toggle toggle_xls" for="xls_ambientes-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Aviso Eletrônico</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="aviso_eletronico-acesso" id="todos_aviso_eletronico-acesso" />

									<label class="toggle toggle_todos" for="todos_aviso_eletronico-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="aviso_eletronico-acesso" id="menu_aviso_eletronico-acesso" />

									<label class="toggle toggle_menu" for="menu_aviso_eletronico-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="aviso_eletronico-acesso" id="inserir_aviso_eletronico-acesso" />

									<label class="toggle toggle_inserir" for="inserir_aviso_eletronico-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="aviso_eletronico-acesso" id="alterar_aviso_eletronico-acesso" />

									<label class="toggle toggle_alterar" for="alterar_aviso_eletronico-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="aviso_eletronico-acesso" id="excluir_aviso_eletronico-acesso" />

									<label class="toggle toggle_excluir" for="excluir_aviso_eletronico-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="aviso_eletronico-acesso" id="procurar_aviso_eletronico-acesso" />

									<label class="toggle toggle_procurar" for="procurar_aviso_eletronico-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="aviso_eletronico-acesso" id="pdf_aviso_eletronico-acesso" />

									<label class="toggle toggle_pdf" for="pdf_aviso_eletronico-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="aviso_eletronico-acesso" id="xls_aviso_eletronico-acesso" />

									<label class="toggle toggle_xls" for="xls_aviso_eletronico-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Condominio</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="condominio-acesso" id="todos_condominio-acesso" />

									<label class="toggle toggle_todos" for="todos_condominio-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="condominio-acesso" id="menu_condominio-acesso" />

									<label class="toggle toggle_menu" for="menu_condominio-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="condominio-acesso" id="inserir_condominio-acesso" />

									<label class="toggle toggle_inserir" for="inserir_condominio-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="condominio-acesso" id="alterar_condominio-acesso" />

									<label class="toggle toggle_alterar" for="alterar_condominio-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="condominio-acesso" id="excluir_condominio-acesso" />

									<label class="toggle toggle_excluir" for="excluir_condominio-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="condominio-acesso" id="procurar_condominio-acesso" />

									<label class="toggle toggle_procurar" for="procurar_condominio-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="condominio-acesso" id="pdf_condominio-acesso" />

									<label class="toggle toggle_pdf" for="pdf_condominio-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="condominio-acesso" id="xls_condominio-acesso" />

									<label class="toggle toggle_xls" for="xls_condominio-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Fornecedor</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="fornecedor-acesso" id="todos_fornecedor-acesso" />

									<label class="toggle toggle_todos" for="todos_fornecedor-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="fornecedor-acesso" id="menu_fornecedor-acesso" />

									<label class="toggle toggle_menu" for="menu_fornecedor-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="fornecedor-acesso" id="inserir_fornecedor-acesso" />

									<label class="toggle toggle_inserir" for="inserir_fornecedor-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="fornecedor-acesso" id="alterar_fornecedor-acesso" />

									<label class="toggle toggle_alterar" for="alterar_fornecedor-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="fornecedor-acesso" id="excluir_fornecedor-acesso" />

									<label class="toggle toggle_excluir" for="excluir_fornecedor-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="fornecedor-acesso" id="procurar_fornecedor-acesso" />

									<label class="toggle toggle_procurar" for="procurar_fornecedor-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="fornecedor-acesso" id="pdf_fornecedor-acesso" />

									<label class="toggle toggle_pdf" for="pdf_fornecedor-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="fornecedor-acesso" id="xls_fornecedor-acesso" />

									<label class="toggle toggle_xls" for="xls_fornecedor-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Portal dos Moradores</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="portal-acesso" id="todos_portal-acesso" />

									<label class="toggle toggle_todos" for="todos_portal-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="portal-acesso" id="menu_portal-acesso" />

									<label class="toggle toggle_menu" for="menu_portal-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="portal-acesso" id="inserir_portal-acesso" />

									<label class="toggle toggle_inserir" for="inserir_portal-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="portal-acesso" id="alterar_portal-acesso" />

									<label class="toggle toggle_alterar" for="alterar_portal-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="portal-acesso" id="excluir_portal-acesso" />

									<label class="toggle toggle_excluir" for="excluir_portal-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="portal-acesso" id="procurar_portal-acesso" />

									<label class="toggle toggle_procurar" for="procurar_portal-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="portal-acesso" id="pdf_portal-acesso" />

									<label class="toggle toggle_pdf" for="pdf_portal-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="portal-acesso" id="xls_portal-acesso" />

									<label class="toggle toggle_xls" for="xls_portal-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Quadra Esportiva</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="quadra-acesso" id="todos_quadra-acesso" />

									<label class="toggle toggle_todos" for="todos_quadra-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="quadra-acesso" id="menu_quadra-acesso" />

									<label class="toggle toggle_menu" for="menu_quadra-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="quadra-acesso" id="inserir_quadra-acesso" />

									<label class="toggle toggle_inserir" for="inserir_quadra-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="quadra-acesso" id="alterar_quadra-acesso" />

									<label class="toggle toggle_alterar" for="alterar_quadra-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="quadra-acesso" id="excluir_quadra-acesso" />

									<label class="toggle toggle_excluir" for="excluir_quadra-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="quadra-acesso" id="procurar_quadra-acesso" />

									<label class="toggle toggle_procurar" for="procurar_quadra-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="quadra-acesso" id="pdf_quadra-acesso" />

									<label class="toggle toggle_pdf" for="pdf_quadra-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="quadra-acesso" id="xls_quadra-acesso" />

									<label class="toggle toggle_xls" for="xls_quadra-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Telefones Úteis</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="telefones-acesso" id="todos_telefones-acesso" />

									<label class="toggle toggle_todos" for="todos_telefones-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="telefones-acesso" id="menu_telefones-acesso" />

									<label class="toggle toggle_menu" for="menu_telefones-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="telefones-acesso" id="inserir_telefones-acesso" />

									<label class="toggle toggle_inserir" for="inserir_telefones-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="telefones-acesso" id="alterar_telefones-acesso" />

									<label class="toggle toggle_alterar" for="alterar_telefones-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="telefones-acesso" id="excluir_telefones-acesso" />

									<label class="toggle toggle_excluir" for="excluir_telefones-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="telefones-acesso" id="procurar_telefones-acesso" />

									<label class="toggle toggle_procurar" for="procurar_telefones-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="telefones-acesso" id="pdf_telefones-acesso" />

									<label class="toggle toggle_pdf" for="pdf_telefones-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="telefones-acesso" id="xls_telefones-acesso" />

									<label class="toggle toggle_xls" for="xls_telefones-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Termo</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="termo-acesso" id="todos_termo-acesso" />

									<label class="toggle toggle_todos" for="todos_termo-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="termo-acesso" id="menu_termo-acesso" />

									<label class="toggle toggle_menu" for="menu_termo-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="termo-acesso" id="inserir_termo-acesso" />

									<label class="toggle toggle_inserir" for="inserir_termo-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="termo-acesso" id="alterar_termo-acesso" />

									<label class="toggle toggle_alterar" for="alterar_termo-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="termo-acesso" id="excluir_termo-acesso" />

									<label class="toggle toggle_excluir" for="excluir_termo-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="termo-acesso" id="procurar_termo-acesso" />

									<label class="toggle toggle_procurar" for="procurar_termo-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="termo-acesso" id="pdf_termo-acesso" />

									<label class="toggle toggle_pdf" for="pdf_termo-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="termo-acesso" id="xls_termo-acesso" />

									<label class="toggle toggle_xls" for="xls_termo-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Usuários</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="usuários-acesso" id="todos_usuários-acesso" />

									<label class="toggle toggle_todos" for="todos_usuários-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="usuários-acesso" id="menu_usuários-acesso" />

									<label class="toggle toggle_menu" for="menu_usuários-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="usuários-acesso" id="inserir_usuários-acesso" />

									<label class="toggle toggle_inserir" for="inserir_usuários-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="usuários-acesso" id="alterar_usuários-acesso" />

									<label class="toggle toggle_alterar" for="alterar_usuários-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="usuários-acesso" id="excluir_usuários-acesso" />

									<label class="toggle toggle_excluir" for="excluir_usuários-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="usuários-acesso" id="procurar_usuários-acesso" />

									<label class="toggle toggle_procurar" for="procurar_usuários-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="usuários-acesso" id="pdf_usuários-acesso" />

									<label class="toggle toggle_pdf" for="pdf_usuários-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="usuários-acesso" id="xls_usuários-acesso" />

									<label class="toggle toggle_xls" for="xls_usuários-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Visitante</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="visitante-acesso" id="todos_visitante-acesso" />

									<label class="toggle toggle_todos" for="todos_visitante-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="visitante-acesso" id="menu_visitante-acesso" />

									<label class="toggle toggle_menu" for="menu_visitante-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="visitante-acesso" id="inserir_visitante-acesso" />

									<label class="toggle toggle_inserir" for="inserir_visitante-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="visitante-acesso" id="alterar_visitante-acesso" />

									<label class="toggle toggle_alterar" for="alterar_visitante-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="visitante-acesso" id="excluir_visitante-acesso" />

									<label class="toggle toggle_excluir" for="excluir_visitante-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="visitante-acesso" id="procurar_visitante-acesso" />

									<label class="toggle toggle_procurar" for="procurar_visitante-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="visitante-acesso" id="pdf_visitante-acesso" />

									<label class="toggle toggle_pdf" for="pdf_visitante-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="visitante-acesso" id="xls_visitante-acesso" />

									<label class="toggle toggle_xls" for="xls_visitante-acesso">Xls</label>

								</div>

							</div>

						</div>

					</div>



					<div id="controles-container" data-parent="#container-tabela" class="collapse">

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Controles</label>

								</div>

							</div>

							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos_main" id="todos_main-controles" />

									<label class="toggle toggle_todos" for="todos_main-controles">Todos</label>



									<input type="checkbox" class="switch switch_menu_main" id="menu_main-controles" />

									<label class="toggle toggle_menu" for="menu_main-controles">Menu</label>



									<input type="checkbox" class="switch switch_inserir_main" id="inserir_main-controles" />

									<label class="toggle toggle_inserir" for="inserir_main-controles">Inserir</label>



									<input type="checkbox" class="switch switch_alterar_main" id="alterar_main-controles" />

									<label class="toggle toggle_alterar" for="alterar_main-controles">Alterar</label>



									<input type="checkbox" class="switch switch_excluir_main" id="excluir_main-controles" />

									<label class="toggle toggle_excluir" for="excluir_main-controles">Excluir</label>



									<input type="checkbox" class="switch switch_procurar_main" id="procurar_main-controles" />

									<label class="toggle toggle_procurar" for="procurar_main-controles">Procurar</label>



									<input type="checkbox" class="switch switch_pdf_main" id="pdf_main-controles" />

									<label class="toggle toggle_pdf" for="pdf_main-controles">Pdf</label>



									<input type="checkbox" class="switch switch_xls_main" id="xls_main-controles" />

									<label class="toggle toggle_xls" for="xls_main-controles">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Acesso Academia</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="acesso-acesso" id="todos_acesso-acesso" />

									<label class="toggle toggle_todos" for="todos_acesso-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="acesso-acesso" id="menu_acesso-acesso" />

									<label class="toggle toggle_menu" for="menu_acesso-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="acesso-acesso" id="inserir_acesso-acesso" />

									<label class="toggle toggle_inserir" for="inserir_acesso-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="acesso-acesso" id="alterar_acesso-acesso" />

									<label class="toggle toggle_alterar" for="alterar_acesso-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="acesso-acesso" id="excluir_acesso-acesso" />

									<label class="toggle toggle_excluir" for="excluir_acesso-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="acesso-acesso" id="procurar_acesso-acesso" />

									<label class="toggle toggle_procurar" for="procurar_acesso-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="acesso-acesso" id="pdf_acesso-acesso" />

									<label class="toggle toggle_pdf" for="pdf_acesso-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="acesso-acesso" id="xls_acesso-acesso" />

									<label class="toggle toggle_xls" for="xls_acesso-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Achados e Perdidos</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="achados-acesso" id="todos_achados-acesso" />

									<label class="toggle toggle_todos" for="todos_achados-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="achados-acesso" id="menu_achados-acesso" />

									<label class="toggle toggle_menu" for="menu_achados-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="achados-acesso" id="inserir_achados-acesso" />

									<label class="toggle toggle_inserir" for="inserir_achados-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="achados-acesso" id="alterar_achados-acesso" />

									<label class="toggle toggle_alterar" for="alterar_achados-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="achados-acesso" id="excluir_achados-acesso" />

									<label class="toggle toggle_excluir" for="excluir_achados-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="achados-acesso" id="procurar_achados-acesso" />

									<label class="toggle toggle_procurar" for="procurar_achados-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="achados-acesso" id="pdf_achados-acesso" />

									<label class="toggle toggle_pdf" for="pdf_achados-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="achados-acesso" id="xls_achados-acesso" />

									<label class="toggle toggle_xls" for="xls_achados-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Almoxarifado</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="almoxarifado-acesso" id="todos_almoxarifado-acesso" />

									<label class="toggle toggle_todos" for="todos_almoxarifado-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="almoxarifado-acesso" id="menu_almoxarifado-acesso" />

									<label class="toggle toggle_menu" for="menu_almoxarifado-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="almoxarifado-acesso" id="inserir_almoxarifado-acesso" />

									<label class="toggle toggle_inserir" for="inserir_almoxarifado-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="almoxarifado-acesso" id="alterar_almoxarifado-acesso" />

									<label class="toggle toggle_alterar" for="alterar_almoxarifado-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="almoxarifado-acesso" id="excluir_almoxarifado-acesso" />

									<label class="toggle toggle_excluir" for="excluir_almoxarifado-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="almoxarifado-acesso" id="procurar_almoxarifado-acesso" />

									<label class="toggle toggle_procurar" for="procurar_almoxarifado-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="almoxarifado-acesso" id="pdf_almoxarifado-acesso" />

									<label class="toggle toggle_pdf" for="pdf_almoxarifado-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="almoxarifado-acesso" id="xls_almoxarifado-acesso" />

									<label class="toggle toggle_xls" for="xls_almoxarifado-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Assembléia Virtual</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="assembléia-acesso" id="todos_assembléia-acesso" />

									<label class="toggle toggle_todos" for="todos_assembléia-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="assembléia-acesso" id="menu_assembléia-acesso" />

									<label class="toggle toggle_menu" for="menu_assembléia-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="assembléia-acesso" id="inserir_assembléia-acesso" />

									<label class="toggle toggle_inserir" for="inserir_assembléia-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="assembléia-acesso" id="alterar_assembléia-acesso" />

									<label class="toggle toggle_alterar" for="alterar_assembléia-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="assembléia-acesso" id="excluir_assembléia-acesso" />

									<label class="toggle toggle_excluir" for="excluir_assembléia-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="assembléia-acesso" id="procurar_assembléia-acesso" />

									<label class="toggle toggle_procurar" for="procurar_assembléia-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="assembléia-acesso" id="pdf_assembléia-acesso" />

									<label class="toggle toggle_pdf" for="pdf_assembléia-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="assembléia-acesso" id="xls_assembléia-acesso" />

									<label class="toggle toggle_xls" for="xls_assembléia-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Atestado Médico</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="atestado-acesso" id="todos_atestado-acesso" />

									<label class="toggle toggle_todos" for="todos_atestado-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="atestado-acesso" id="menu_atestado-acesso" />

									<label class="toggle toggle_menu" for="menu_atestado-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="atestado-acesso" id="inserir_atestado-acesso" />

									<label class="toggle toggle_inserir" for="inserir_atestado-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="atestado-acesso" id="alterar_atestado-acesso" />

									<label class="toggle toggle_alterar" for="alterar_atestado-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="atestado-acesso" id="excluir_atestado-acesso" />

									<label class="toggle toggle_excluir" for="excluir_atestado-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="atestado-acesso" id="procurar_atestado-acesso" />

									<label class="toggle toggle_procurar" for="procurar_atestado-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="atestado-acesso" id="pdf_atestado-acesso" />

									<label class="toggle toggle_pdf" for="pdf_atestado-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="atestado-acesso" id="xls_atestado-acesso" />

									<label class="toggle toggle_xls" for="xls_atestado-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Aviso Home Portal</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="aviso-acesso" id="todos_aviso-acesso" />

									<label class="toggle toggle_todos" for="todos_aviso-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="aviso-acesso" id="menu_aviso-acesso" />

									<label class="toggle toggle_menu" for="menu_aviso-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="aviso-acesso" id="inserir_aviso-acesso" />

									<label class="toggle toggle_inserir" for="inserir_aviso-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="aviso-acesso" id="alterar_aviso-acesso" />

									<label class="toggle toggle_alterar" for="alterar_aviso-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="aviso-acesso" id="excluir_aviso-acesso" />

									<label class="toggle toggle_excluir" for="excluir_aviso-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="aviso-acesso" id="procurar_aviso-acesso" />

									<label class="toggle toggle_procurar" for="procurar_aviso-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="aviso-acesso" id="pdf_aviso-acesso" />

									<label class="toggle toggle_pdf" for="pdf_aviso-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="aviso-acesso" id="xls_aviso-acesso" />

									<label class="toggle toggle_xls" for="xls_aviso-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Aviso Visitante</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="aviso-acesso" id="todos_aviso_visitante-acesso" />

									<label class="toggle toggle_todos" for="todos_aviso_visitante-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="aviso-acesso" id="menu_aviso_visitante-acesso" />

									<label class="toggle toggle_menu" for="menu_aviso_visitante-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="aviso-acesso" id="inserir_aviso_visitante-acesso" />

									<label class="toggle toggle_inserir" for="inserir_aviso_visitante-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="aviso-acesso" id="alterar_aviso_visitante-acesso" />

									<label class="toggle toggle_alterar" for="alterar_aviso_visitante-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="aviso-acesso" id="excluir_aviso_visitante-acesso" />

									<label class="toggle toggle_excluir" for="excluir_aviso_visitante-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="aviso-acesso" id="procurar_aviso_visitante-acesso" />

									<label class="toggle toggle_procurar" for="procurar_aviso_visitante-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="aviso-acesso" id="pdf_aviso_visitante-acesso" />

									<label class="toggle toggle_pdf" for="pdf_aviso_visitante-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="aviso-acesso" id="xls_aviso_visitante-acesso" />

									<label class="toggle toggle_xls" for="xls_aviso_visitante-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Boliche</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="boliche-acesso" id="todos_boliche-acesso" />

									<label class="toggle toggle_todos" for="todos_boliche-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="boliche-acesso" id="menu_boliche-acesso" />

									<label class="toggle toggle_menu" for="menu_boliche-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="boliche-acesso" id="inserir_boliche-acesso" />

									<label class="toggle toggle_inserir" for="inserir_boliche-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="boliche-acesso" id="alterar_boliche-acesso" />

									<label class="toggle toggle_alterar" for="alterar_boliche-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="boliche-acesso" id="excluir_boliche-acesso" />

									<label class="toggle toggle_excluir" for="excluir_boliche-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="boliche-acesso" id="procurar_boliche-acesso" />

									<label class="toggle toggle_procurar" for="procurar_boliche-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="boliche-acesso" id="pdf_boliche-acesso" />

									<label class="toggle toggle_pdf" for="pdf_boliche-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="boliche-acesso" id="xls_boliche-acesso" />

									<label class="toggle toggle_xls" for="xls_boliche-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Clas. Forn. Condominio</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="clas.-acesso" id="todos_clas.-acesso" />

									<label class="toggle toggle_todos" for="todos_clas.-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="clas.-acesso" id="menu_clas.-acesso" />

									<label class="toggle toggle_menu" for="menu_clas.-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="clas.-acesso" id="inserir_clas.-acesso" />

									<label class="toggle toggle_inserir" for="inserir_clas.-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="clas.-acesso" id="alterar_clas.-acesso" />

									<label class="toggle toggle_alterar" for="alterar_clas.-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="clas.-acesso" id="excluir_clas.-acesso" />

									<label class="toggle toggle_excluir" for="excluir_clas.-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="clas.-acesso" id="procurar_clas.-acesso" />

									<label class="toggle toggle_procurar" for="procurar_clas.-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="clas.-acesso" id="pdf_clas.-acesso" />

									<label class="toggle toggle_pdf" for="pdf_clas.-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="clas.-acesso" id="xls_clas.-acesso" />

									<label class="toggle toggle_xls" for="xls_clas.-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Classificado Morador</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="classificado-acesso" id="todos_classificado-acesso" />

									<label class="toggle toggle_todos" for="todos_classificado-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="classificado-acesso" id="menu_classificado-acesso" />

									<label class="toggle toggle_menu" for="menu_classificado-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="classificado-acesso" id="inserir_classificado-acesso" />

									<label class="toggle toggle_inserir" for="inserir_classificado-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="classificado-acesso" id="alterar_classificado-acesso" />

									<label class="toggle toggle_alterar" for="alterar_classificado-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="classificado-acesso" id="excluir_classificado-acesso" />

									<label class="toggle toggle_excluir" for="excluir_classificado-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="classificado-acesso" id="procurar_classificado-acesso" />

									<label class="toggle toggle_procurar" for="procurar_classificado-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="classificado-acesso" id="pdf_classificado-acesso" />

									<label class="toggle toggle_pdf" for="pdf_classificado-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="classificado-acesso" id="xls_classificado-acesso" />

									<label class="toggle toggle_xls" for="xls_classificado-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Consumo de Água</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="consumo-acesso" id="todos_consumo-acesso" />

									<label class="toggle toggle_todos" for="todos_consumo-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="consumo-acesso" id="menu_consumo-acesso" />

									<label class="toggle toggle_menu" for="menu_consumo-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="consumo-acesso" id="inserir_consumo-acesso" />

									<label class="toggle toggle_inserir" for="inserir_consumo-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="consumo-acesso" id="alterar_consumo-acesso" />

									<label class="toggle toggle_alterar" for="alterar_consumo-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="consumo-acesso" id="excluir_consumo-acesso" />

									<label class="toggle toggle_excluir" for="excluir_consumo-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="consumo-acesso" id="procurar_consumo-acesso" />

									<label class="toggle toggle_procurar" for="procurar_consumo-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="consumo-acesso" id="pdf_consumo-acesso" />

									<label class="toggle toggle_pdf" for="pdf_consumo-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="consumo-acesso" id="xls_consumo-acesso" />

									<label class="toggle toggle_xls" for="xls_consumo-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Correspondências</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="correspondências-acesso" id="todos_correspondências-acesso" />

									<label class="toggle toggle_todos" for="todos_correspondências-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="correspondências-acesso" id="menu_correspondências-acesso" />

									<label class="toggle toggle_menu" for="menu_correspondências-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="correspondências-acesso" id="inserir_correspondências-acesso" />

									<label class="toggle toggle_inserir" for="inserir_correspondências-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="correspondências-acesso" id="alterar_correspondências-acesso" />

									<label class="toggle toggle_alterar" for="alterar_correspondências-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="correspondências-acesso" id="excluir_correspondências-acesso" />

									<label class="toggle toggle_excluir" for="excluir_correspondências-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="correspondências-acesso" id="procurar_correspondências-acesso" />

									<label class="toggle toggle_procurar" for="procurar_correspondências-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="correspondências-acesso" id="pdf_correspondências-acesso" />

									<label class="toggle toggle_pdf" for="pdf_correspondências-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="correspondências-acesso" id="xls_correspondências-acesso" />

									<label class="toggle toggle_xls" for="xls_correspondências-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Documentos e ATAs</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="documentos-acesso" id="todos_documentos-acesso" />

									<label class="toggle toggle_todos" for="todos_documentos-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="documentos-acesso" id="menu_documentos-acesso" />

									<label class="toggle toggle_menu" for="menu_documentos-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="documentos-acesso" id="inserir_documentos-acesso" />

									<label class="toggle toggle_inserir" for="inserir_documentos-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="documentos-acesso" id="alterar_documentos-acesso" />

									<label class="toggle toggle_alterar" for="alterar_documentos-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="documentos-acesso" id="excluir_documentos-acesso" />

									<label class="toggle toggle_excluir" for="excluir_documentos-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="documentos-acesso" id="procurar_documentos-acesso" />

									<label class="toggle toggle_procurar" for="procurar_documentos-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="documentos-acesso" id="pdf_documentos-acesso" />

									<label class="toggle toggle_pdf" for="pdf_documentos-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="documentos-acesso" id="xls_documentos-acesso" />

									<label class="toggle toggle_xls" for="xls_documentos-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Enquete / Pesquisas</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="enquete-acesso" id="todos_enquete-acesso" />

									<label class="toggle toggle_todos" for="todos_enquete-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="enquete-acesso" id="menu_enquete-acesso" />

									<label class="toggle toggle_menu" for="menu_enquete-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="enquete-acesso" id="inserir_enquete-acesso" />

									<label class="toggle toggle_inserir" for="inserir_enquete-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="enquete-acesso" id="alterar_enquete-acesso" />

									<label class="toggle toggle_alterar" for="alterar_enquete-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="enquete-acesso" id="excluir_enquete-acesso" />

									<label class="toggle toggle_excluir" for="excluir_enquete-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="enquete-acesso" id="procurar_enquete-acesso" />

									<label class="toggle toggle_procurar" for="procurar_enquete-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="enquete-acesso" id="pdf_enquete-acesso" />

									<label class="toggle toggle_pdf" for="pdf_enquete-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="enquete-acesso" id="xls_enquete-acesso" />

									<label class="toggle toggle_xls" for="xls_enquete-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Espaço Pet</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="espaço-acesso" id="todos_espaço-acesso" />

									<label class="toggle toggle_todos" for="todos_espaço-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="espaço-acesso" id="menu_espaço-acesso" />

									<label class="toggle toggle_menu" for="menu_espaço-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="espaço-acesso" id="inserir_espaço-acesso" />

									<label class="toggle toggle_inserir" for="inserir_espaço-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="espaço-acesso" id="alterar_espaço-acesso" />

									<label class="toggle toggle_alterar" for="alterar_espaço-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="espaço-acesso" id="excluir_espaço-acesso" />

									<label class="toggle toggle_excluir" for="excluir_espaço-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="espaço-acesso" id="procurar_espaço-acesso" />

									<label class="toggle toggle_procurar" for="procurar_espaço-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="espaço-acesso" id="pdf_espaço-acesso" />

									<label class="toggle toggle_pdf" for="pdf_espaço-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="espaço-acesso" id="xls_espaço-acesso" />

									<label class="toggle toggle_xls" for="xls_espaço-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Ficha</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="ficha-acesso" id="todos_ficha-acesso" />

									<label class="toggle toggle_todos" for="todos_ficha-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="ficha-acesso" id="menu_ficha-acesso" />

									<label class="toggle toggle_menu" for="menu_ficha-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="ficha-acesso" id="inserir_ficha-acesso" />

									<label class="toggle toggle_inserir" for="inserir_ficha-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="ficha-acesso" id="alterar_ficha-acesso" />

									<label class="toggle toggle_alterar" for="alterar_ficha-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="ficha-acesso" id="excluir_ficha-acesso" />

									<label class="toggle toggle_excluir" for="excluir_ficha-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="ficha-acesso" id="procurar_ficha-acesso" />

									<label class="toggle toggle_procurar" for="procurar_ficha-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="ficha-acesso" id="pdf_ficha-acesso" />

									<label class="toggle toggle_pdf" for="pdf_ficha-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="ficha-acesso" id="xls_ficha-acesso" />

									<label class="toggle toggle_xls" for="xls_ficha-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Fila de E-mail</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="fila-acesso" id="todos_fila-acesso" />

									<label class="toggle toggle_todos" for="todos_fila-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="fila-acesso" id="menu_fila-acesso" />

									<label class="toggle toggle_menu" for="menu_fila-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="fila-acesso" id="inserir_fila-acesso" />

									<label class="toggle toggle_inserir" for="inserir_fila-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="fila-acesso" id="alterar_fila-acesso" />

									<label class="toggle toggle_alterar" for="alterar_fila-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="fila-acesso" id="excluir_fila-acesso" />

									<label class="toggle toggle_excluir" for="excluir_fila-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="fila-acesso" id="procurar_fila-acesso" />

									<label class="toggle toggle_procurar" for="procurar_fila-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="fila-acesso" id="pdf_fila-acesso" />

									<label class="toggle toggle_pdf" for="pdf_fila-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="fila-acesso" id="xls_fila-acesso" />

									<label class="toggle toggle_xls" for="xls_fila-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Fórum morador</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="fórum-acesso" id="todos_fórum-acesso" />

									<label class="toggle toggle_todos" for="todos_fórum-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="fórum-acesso" id="menu_fórum-acesso" />

									<label class="toggle toggle_menu" for="menu_fórum-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="fórum-acesso" id="inserir_fórum-acesso" />

									<label class="toggle toggle_inserir" for="inserir_fórum-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="fórum-acesso" id="alterar_fórum-acesso" />

									<label class="toggle toggle_alterar" for="alterar_fórum-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="fórum-acesso" id="excluir_fórum-acesso" />

									<label class="toggle toggle_excluir" for="excluir_fórum-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="fórum-acesso" id="procurar_fórum-acesso" />

									<label class="toggle toggle_procurar" for="procurar_fórum-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="fórum-acesso" id="pdf_fórum-acesso" />

									<label class="toggle toggle_pdf" for="pdf_fórum-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="fórum-acesso" id="xls_fórum-acesso" />

									<label class="toggle toggle_xls" for="xls_fórum-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Informativo do Condomínio</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="informativo-acesso" id="todos_informativo-acesso" />

									<label class="toggle toggle_todos" for="todos_informativo-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="informativo-acesso" id="menu_informativo-acesso" />

									<label class="toggle toggle_menu" for="menu_informativo-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="informativo-acesso" id="inserir_informativo-acesso" />

									<label class="toggle toggle_inserir" for="inserir_informativo-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="informativo-acesso" id="alterar_informativo-acesso" />

									<label class="toggle toggle_alterar" for="alterar_informativo-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="informativo-acesso" id="excluir_informativo-acesso" />

									<label class="toggle toggle_excluir" for="excluir_informativo-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="informativo-acesso" id="procurar_informativo-acesso" />

									<label class="toggle toggle_procurar" for="procurar_informativo-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="informativo-acesso" id="pdf_informativo-acesso" />

									<label class="toggle toggle_pdf" for="pdf_informativo-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="informativo-acesso" id="xls_informativo-acesso" />

									<label class="toggle toggle_xls" for="xls_informativo-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">LanHouse</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="lanhouse-acesso" id="todos_lanhouse-acesso" />

									<label class="toggle toggle_todos" for="todos_lanhouse-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="lanhouse-acesso" id="menu_lanhouse-acesso" />

									<label class="toggle toggle_menu" for="menu_lanhouse-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="lanhouse-acesso" id="inserir_lanhouse-acesso" />

									<label class="toggle toggle_inserir" for="inserir_lanhouse-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="lanhouse-acesso" id="alterar_lanhouse-acesso" />

									<label class="toggle toggle_alterar" for="alterar_lanhouse-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="lanhouse-acesso" id="excluir_lanhouse-acesso" />

									<label class="toggle toggle_excluir" for="excluir_lanhouse-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="lanhouse-acesso" id="procurar_lanhouse-acesso" />

									<label class="toggle toggle_procurar" for="procurar_lanhouse-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="lanhouse-acesso" id="pdf_lanhouse-acesso" />

									<label class="toggle toggle_pdf" for="pdf_lanhouse-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="lanhouse-acesso" id="xls_lanhouse-acesso" />

									<label class="toggle toggle_xls" for="xls_lanhouse-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Lista de Convidados</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="lista-acesso" id="todos_lista-acesso" />

									<label class="toggle toggle_todos" for="todos_lista-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="lista-acesso" id="menu_lista-acesso" />

									<label class="toggle toggle_menu" for="menu_lista-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="lista-acesso" id="inserir_lista-acesso" />

									<label class="toggle toggle_inserir" for="inserir_lista-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="lista-acesso" id="alterar_lista-acesso" />

									<label class="toggle toggle_alterar" for="alterar_lista-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="lista-acesso" id="excluir_lista-acesso" />

									<label class="toggle toggle_excluir" for="excluir_lista-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="lista-acesso" id="procurar_lista-acesso" />

									<label class="toggle toggle_procurar" for="procurar_lista-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="lista-acesso" id="pdf_lista-acesso" />

									<label class="toggle toggle_pdf" for="pdf_lista-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="lista-acesso" id="xls_lista-acesso" />

									<label class="toggle toggle_xls" for="xls_lista-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Malote</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="malote-acesso" id="todos_malote-acesso" />

									<label class="toggle toggle_todos" for="todos_malote-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="malote-acesso" id="menu_malote-acesso" />

									<label class="toggle toggle_menu" for="menu_malote-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="malote-acesso" id="inserir_malote-acesso" />

									<label class="toggle toggle_inserir" for="inserir_malote-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="malote-acesso" id="alterar_malote-acesso" />

									<label class="toggle toggle_alterar" for="alterar_malote-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="malote-acesso" id="excluir_malote-acesso" />

									<label class="toggle toggle_excluir" for="excluir_malote-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="malote-acesso" id="procurar_malote-acesso" />

									<label class="toggle toggle_procurar" for="procurar_malote-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="malote-acesso" id="pdf_malote-acesso" />

									<label class="toggle toggle_pdf" for="pdf_malote-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="malote-acesso" id="xls_malote-acesso" />

									<label class="toggle toggle_xls" for="xls_malote-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Manutenção</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="manutenção-acesso" id="todos_manutenção-acesso" />

									<label class="toggle toggle_todos" for="todos_manutenção-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="manutenção-acesso" id="menu_manutenção-acesso" />

									<label class="toggle toggle_menu" for="menu_manutenção-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="manutenção-acesso" id="inserir_manutenção-acesso" />

									<label class="toggle toggle_inserir" for="inserir_manutenção-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="manutenção-acesso" id="alterar_manutenção-acesso" />

									<label class="toggle toggle_alterar" for="alterar_manutenção-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="manutenção-acesso" id="excluir_manutenção-acesso" />

									<label class="toggle toggle_excluir" for="excluir_manutenção-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="manutenção-acesso" id="procurar_manutenção-acesso" />

									<label class="toggle toggle_procurar" for="procurar_manutenção-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="manutenção-acesso" id="pdf_manutenção-acesso" />

									<label class="toggle toggle_pdf" for="pdf_manutenção-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="manutenção-acesso" id="xls_manutenção-acesso" />

									<label class="toggle toggle_xls" for="xls_manutenção-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Mensagem Morador</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="mensagem-acesso" id="todos_mensagem-acesso" />

									<label class="toggle toggle_todos" for="todos_mensagem-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="mensagem-acesso" id="menu_mensagem-acesso" />

									<label class="toggle toggle_menu" for="menu_mensagem-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="mensagem-acesso" id="inserir_mensagem-acesso" />

									<label class="toggle toggle_inserir" for="inserir_mensagem-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="mensagem-acesso" id="alterar_mensagem-acesso" />

									<label class="toggle toggle_alterar" for="alterar_mensagem-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="mensagem-acesso" id="excluir_mensagem-acesso" />

									<label class="toggle toggle_excluir" for="excluir_mensagem-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="mensagem-acesso" id="procurar_mensagem-acesso" />

									<label class="toggle toggle_procurar" for="procurar_mensagem-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="mensagem-acesso" id="pdf_mensagem-acesso" />

									<label class="toggle toggle_pdf" for="pdf_mensagem-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="mensagem-acesso" id="xls_mensagem-acesso" />

									<label class="toggle toggle_xls" for="xls_mensagem-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Mudança</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="mudança-acesso" id="todos_mudança-acesso" />

									<label class="toggle toggle_todos" for="todos_mudança-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="mudança-acesso" id="menu_mudança-acesso" />

									<label class="toggle toggle_menu" for="menu_mudança-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="mudança-acesso" id="inserir_mudança-acesso" />

									<label class="toggle toggle_inserir" for="inserir_mudança-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="mudança-acesso" id="alterar_mudança-acesso" />

									<label class="toggle toggle_alterar" for="alterar_mudança-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="mudança-acesso" id="excluir_mudança-acesso" />

									<label class="toggle toggle_excluir" for="excluir_mudança-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="mudança-acesso" id="procurar_mudança-acesso" />

									<label class="toggle toggle_procurar" for="procurar_mudança-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="mudança-acesso" id="pdf_mudança-acesso" />

									<label class="toggle toggle_pdf" for="pdf_mudança-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="mudança-acesso" id="xls_mudança-acesso" />

									<label class="toggle toggle_xls" for="xls_mudança-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Patrimonial/equipamentos</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="patrimonial/equipamentos-acesso" id="todos_patrimonial/equipamentos-acesso" />

									<label class="toggle toggle_todos" for="todos_patrimonial/equipamentos-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="patrimonial/equipamentos-acesso" id="menu_patrimonial/equipamentos-acesso" />

									<label class="toggle toggle_menu" for="menu_patrimonial/equipamentos-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="patrimonial/equipamentos-acesso" id="inserir_patrimonial/equipamentos-acesso" />

									<label class="toggle toggle_inserir" for="inserir_patrimonial/equipamentos-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="patrimonial/equipamentos-acesso" id="alterar_patrimonial/equipamentos-acesso" />

									<label class="toggle toggle_alterar" for="alterar_patrimonial/equipamentos-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="patrimonial/equipamentos-acesso" id="excluir_patrimonial/equipamentos-acesso" />

									<label class="toggle toggle_excluir" for="excluir_patrimonial/equipamentos-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="patrimonial/equipamentos-acesso" id="procurar_patrimonial/equipamentos-acesso" />

									<label class="toggle toggle_procurar" for="procurar_patrimonial/equipamentos-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="patrimonial/equipamentos-acesso" id="pdf_patrimonial/equipamentos-acesso" />

									<label class="toggle toggle_pdf" for="pdf_patrimonial/equipamentos-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="patrimonial/equipamentos-acesso" id="xls_patrimonial/equipamentos-acesso" />

									<label class="toggle toggle_xls" for="xls_patrimonial/equipamentos-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Pulseiras</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="pulseiras-acesso" id="todos_pulseiras-acesso" />

									<label class="toggle toggle_todos" for="todos_pulseiras-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="pulseiras-acesso" id="menu_pulseiras-acesso" />

									<label class="toggle toggle_menu" for="menu_pulseiras-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="pulseiras-acesso" id="inserir_pulseiras-acesso" />

									<label class="toggle toggle_inserir" for="inserir_pulseiras-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="pulseiras-acesso" id="alterar_pulseiras-acesso" />

									<label class="toggle toggle_alterar" for="alterar_pulseiras-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="pulseiras-acesso" id="excluir_pulseiras-acesso" />

									<label class="toggle toggle_excluir" for="excluir_pulseiras-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="pulseiras-acesso" id="procurar_pulseiras-acesso" />

									<label class="toggle toggle_procurar" for="procurar_pulseiras-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="pulseiras-acesso" id="pdf_pulseiras-acesso" />

									<label class="toggle toggle_pdf" for="pdf_pulseiras-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="pulseiras-acesso" id="xls_pulseiras-acesso" />

									<label class="toggle toggle_xls" for="xls_pulseiras-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Registro de Ocorrências</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="registro-acesso" id="todos_registro-acesso" />

									<label class="toggle toggle_todos" for="todos_registro-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="registro-acesso" id="menu_registro-acesso" />

									<label class="toggle toggle_menu" for="menu_registro-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="registro-acesso" id="inserir_registro-acesso" />

									<label class="toggle toggle_inserir" for="inserir_registro-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="registro-acesso" id="alterar_registro-acesso" />

									<label class="toggle toggle_alterar" for="alterar_registro-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="registro-acesso" id="excluir_registro-acesso" />

									<label class="toggle toggle_excluir" for="excluir_registro-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="registro-acesso" id="procurar_registro-acesso" />

									<label class="toggle toggle_procurar" for="procurar_registro-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="registro-acesso" id="pdf_registro-acesso" />

									<label class="toggle toggle_pdf" for="pdf_registro-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="registro-acesso" id="xls_registro-acesso" />

									<label class="toggle toggle_xls" for="xls_registro-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Reserva de Ambientes</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="reserva_ambientes-acesso" id="todos_reserva_ambientes-acesso" />

									<label class="toggle toggle_todos" for="todos_reserva_ambientes-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="reserva_ambientes-acesso" id="menu_reserva_ambientes-acesso" />

									<label class="toggle toggle_menu" for="menu_reserva_ambientes-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="reserva_ambientes-acesso" id="inserir_reserva_ambientes-acesso" />

									<label class="toggle toggle_inserir" for="inserir_reserva_ambientes-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="reserva_ambientes-acesso" id="alterar_reserva_ambientes-acesso" />

									<label class="toggle toggle_alterar" for="alterar_reserva_ambientes-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="reserva_ambientes-acesso" id="excluir_reserva_ambientes-acesso" />

									<label class="toggle toggle_excluir" for="excluir_reserva_ambientes-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="reserva_ambientes-acesso" id="procurar_reserva_ambientes-acesso" />

									<label class="toggle toggle_procurar" for="procurar_reserva_ambientes-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="reserva_ambientes-acesso" id="pdf_reserva_ambientes-acesso" />

									<label class="toggle toggle_pdf" for="pdf_reserva_ambientes-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="reserva_ambientes-acesso" id="xls_reserva_ambientes-acesso" />

									<label class="toggle toggle_xls" for="xls_reserva_ambientes-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Reserva de Quadra</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="reserva_quadra-acesso" id="todos_reserva_quadra-acesso" />

									<label class="toggle toggle_todos" for="todos_reserva_quadra-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="reserva_quadra-acesso" id="menu_reserva_quadra-acesso" />

									<label class="toggle toggle_menu" for="menu_reserva_quadra-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="reserva_quadra-acesso" id="inserir_reserva_quadra-acesso" />

									<label class="toggle toggle_inserir" for="inserir_reserva_quadra-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="reserva_quadra-acesso" id="alterar_reserva_quadra-acesso" />

									<label class="toggle toggle_alterar" for="alterar_reserva_quadra-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="reserva_quadra-acesso" id="excluir_reserva_quadra-acesso" />

									<label class="toggle toggle_excluir" for="excluir_reserva_quadra-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="reserva_quadra-acesso" id="procurar_reserva_quadra-acesso" />

									<label class="toggle toggle_procurar" for="procurar_reserva_quadra-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="reserva_quadra-acesso" id="pdf_reserva_quadra-acesso" />

									<label class="toggle toggle_pdf" for="pdf_reserva_quadra-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="reserva_quadra-acesso" id="xls_reserva_quadra-acesso" />

									<label class="toggle toggle_xls" for="xls_reserva_quadra-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Serviços Diversos</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="serviços-acesso" id="todos_serviços-acesso" />

									<label class="toggle toggle_todos" for="todos_serviços-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="serviços-acesso" id="menu_serviços-acesso" />

									<label class="toggle toggle_menu" for="menu_serviços-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="serviços-acesso" id="inserir_serviços-acesso" />

									<label class="toggle toggle_inserir" for="inserir_serviços-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="serviços-acesso" id="alterar_serviços-acesso" />

									<label class="toggle toggle_alterar" for="alterar_serviços-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="serviços-acesso" id="excluir_serviços-acesso" />

									<label class="toggle toggle_excluir" for="excluir_serviços-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="serviços-acesso" id="procurar_serviços-acesso" />

									<label class="toggle toggle_procurar" for="procurar_serviços-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="serviços-acesso" id="pdf_serviços-acesso" />

									<label class="toggle toggle_pdf" for="pdf_serviços-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="serviços-acesso" id="xls_serviços-acesso" />

									<label class="toggle toggle_xls" for="xls_serviços-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Veículos</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="veículos-acesso" id="todos_veículos-acesso" />

									<label class="toggle toggle_todos" for="todos_veículos-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="veículos-acesso" id="menu_veículos-acesso" />

									<label class="toggle toggle_menu" for="menu_veículos-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="veículos-acesso" id="inserir_veículos-acesso" />

									<label class="toggle toggle_inserir" for="inserir_veículos-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="veículos-acesso" id="alterar_veículos-acesso" />

									<label class="toggle toggle_alterar" for="alterar_veículos-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="veículos-acesso" id="excluir_veículos-acesso" />

									<label class="toggle toggle_excluir" for="excluir_veículos-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="veículos-acesso" id="procurar_veículos-acesso" />

									<label class="toggle toggle_procurar" for="procurar_veículos-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="veículos-acesso" id="pdf_veículos-acesso" />

									<label class="toggle toggle_pdf" for="pdf_veículos-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="veículos-acesso" id="xls_veículos-acesso" />

									<label class="toggle toggle_xls" for="xls_veículos-acesso">Xls</label>

								</div>

							</div>

						</div>

					</div>



					<div id="financeiro-container" data-parent="#container-tabela" class="collapse">

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Financeiro</label>

								</div>

							</div>

							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos_main" id="todos_main-financeiro" />

									<label class="toggle toggle_todos" for="todos_main-financeiro">Todos</label>



									<input type="checkbox" class="switch switch_menu_main" id="menu_main-financeiro" />

									<label class="toggle toggle_menu" for="menu_main-financeiro">Menu</label>



									<input type="checkbox" class="switch switch_inserir_main" id="inserir_main-financeiro" />

									<label class="toggle toggle_inserir" for="inserir_main-financeiro">Inserir</label>



									<input type="checkbox" class="switch switch_alterar_main" id="alterar_main-financeiro" />

									<label class="toggle toggle_alterar" for="alterar_main-financeiro">Alterar</label>



									<input type="checkbox" class="switch switch_excluir_main" id="excluir_main-financeiro" />

									<label class="toggle toggle_excluir" for="excluir_main-financeiro">Excluir</label>



									<input type="checkbox" class="switch switch_procurar_main" id="procurar_main-financeiro" />

									<label class="toggle toggle_procurar" for="procurar_main-financeiro">Procurar</label>



									<input type="checkbox" class="switch switch_pdf_main" id="pdf_main-financeiro" />

									<label class="toggle toggle_pdf" for="pdf_main-financeiro">Pdf</label>



									<input type="checkbox" class="switch switch_xls_main" id="xls_main-financeiro" />

									<label class="toggle toggle_xls" for="xls_main-financeiro">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Contas a pagar</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="contas_pagar-acesso" id="todos_contas_pagar-acesso" />

									<label class="toggle toggle_todos" for="todos_contas_pagar-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="contas_pagar-acesso" id="menu_contas_pagar-acesso" />

									<label class="toggle toggle_menu" for="menu_contas_pagar-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="contas_pagar-acesso" id="inserir_contas_pagar-acesso" />

									<label class="toggle toggle_inserir" for="inserir_contas_pagar-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="contas_pagar-acesso" id="alterar_contas_pagar-acesso" />

									<label class="toggle toggle_alterar" for="alterar_contas_pagar-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="contas_pagar-acesso" id="excluir_contas_pagar-acesso" />

									<label class="toggle toggle_excluir" for="excluir_contas_pagar-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="contas_pagar-acesso" id="procurar_contas_pagar-acesso" />

									<label class="toggle toggle_procurar" for="procurar_contas_pagar-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="contas_pagar-acesso" id="pdf_contas_pagar-acesso" />

									<label class="toggle toggle_pdf" for="pdf_contas_pagar-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="contas_pagar-acesso" id="xls_contas_pagar-acesso" />

									<label class="toggle toggle_xls" for="xls_contas_pagar-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Contas a receber </label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="contas_receber-acesso" id="todos_contas_receber-acesso" />

									<label class="toggle toggle_todos" for="todos_contas_receber-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="contas_receber-acesso" id="menu_contas_receber-acesso" />

									<label class="toggle toggle_menu" for="menu_contas_receber-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="contas_receber-acesso" id="inserir_contas_receber-acesso" />

									<label class="toggle toggle_inserir" for="inserir_contas_receber-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="contas_receber-acesso" id="alterar_contas_receber-acesso" />

									<label class="toggle toggle_alterar" for="alterar_contas_receber-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="contas_receber-acesso" id="excluir_contas_receber-acesso" />

									<label class="toggle toggle_excluir" for="excluir_contas_receber-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="contas_receber-acesso" id="procurar_contas_receber-acesso" />

									<label class="toggle toggle_procurar" for="procurar_contas_receber-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="contas_receber-acesso" id="pdf_contas_receber-acesso" />

									<label class="toggle toggle_pdf" for="pdf_contas_receber-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="contas_receber-acesso" id="xls_contas_receber-acesso" />

									<label class="toggle toggle_xls" for="xls_contas_receber-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Fluxo de caixa</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="fluxo-acesso" id="todos_fluxo-acesso" />

									<label class="toggle toggle_todos" for="todos_fluxo-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="fluxo-acesso" id="menu_fluxo-acesso" />

									<label class="toggle toggle_menu" for="menu_fluxo-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="fluxo-acesso" id="inserir_fluxo-acesso" />

									<label class="toggle toggle_inserir" for="inserir_fluxo-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="fluxo-acesso" id="alterar_fluxo-acesso" />

									<label class="toggle toggle_alterar" for="alterar_fluxo-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="fluxo-acesso" id="excluir_fluxo-acesso" />

									<label class="toggle toggle_excluir" for="excluir_fluxo-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="fluxo-acesso" id="procurar_fluxo-acesso" />

									<label class="toggle toggle_procurar" for="procurar_fluxo-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="fluxo-acesso" id="pdf_fluxo-acesso" />

									<label class="toggle toggle_pdf" for="pdf_fluxo-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="fluxo-acesso" id="xls_fluxo-acesso" />

									<label class="toggle toggle_xls" for="xls_fluxo-acesso">Xls</label>

								</div>

							</div>

						</div>

					</div>



					<div id="painel_master-container" data-parent="#container-tabela" class="collapse">

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Painel Master</label>

								</div>

							</div>

							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos_main" id="todos_main-master" />

									<label class="toggle toggle_todos" for="todos_main-master">Todos</label>



									<input type="checkbox" class="switch switch_menu_main" id="menu_main-master" />

									<label class="toggle toggle_menu" for="menu_main-master">Menu</label>



									<input type="checkbox" class="switch switch_inserir_main" id="inserir_main-master" />

									<label class="toggle toggle_inserir" for="inserir_main-master">Inserir</label>



									<input type="checkbox" class="switch switch_alterar_main" id="alterar_main-master" />

									<label class="toggle toggle_alterar" for="alterar_main-master">Alterar</label>



									<input type="checkbox" class="switch switch_excluir_main" id="excluir_main-master" />

									<label class="toggle toggle_excluir" for="excluir_main-master">Excluir</label>



									<input type="checkbox" class="switch switch_procurar_main" id="procurar_main-master" />

									<label class="toggle toggle_procurar" for="procurar_main-master">Procurar</label>



									<input type="checkbox" class="switch switch_pdf_main" id="pdf_main-master" />

									<label class="toggle toggle_pdf" for="pdf_main-master">Pdf</label>



									<input type="checkbox" class="switch switch_xls_main" id="xls_main-master" />

									<label class="toggle toggle_xls" for="xls_main-master">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Bloqueio</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="bloqueio-acesso" id="todos_bloqueio-acesso" />

									<label class="toggle toggle_todos" for="todos_bloqueio-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="bloqueio-acesso" id="menu_bloqueio-acesso" />

									<label class="toggle toggle_menu" for="menu_bloqueio-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="bloqueio-acesso" id="inserir_bloqueio-acesso" />

									<label class="toggle toggle_inserir" for="inserir_bloqueio-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="bloqueio-acesso" id="alterar_bloqueio-acesso" />

									<label class="toggle toggle_alterar" for="alterar_bloqueio-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="bloqueio-acesso" id="excluir_bloqueio-acesso" />

									<label class="toggle toggle_excluir" for="excluir_bloqueio-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="bloqueio-acesso" id="procurar_bloqueio-acesso" />

									<label class="toggle toggle_procurar" for="procurar_bloqueio-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="bloqueio-acesso" id="pdf_bloqueio-acesso" />

									<label class="toggle toggle_pdf" for="pdf_bloqueio-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="bloqueio-acesso" id="xls_bloqueio-acesso" />

									<label class="toggle toggle_xls" for="xls_bloqueio-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Boleto</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="boleto-acesso" id="todos_boleto-acesso" />

									<label class="toggle toggle_todos" for="todos_boleto-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="boleto-acesso" id="menu_boleto-acesso" />

									<label class="toggle toggle_menu" for="menu_boleto-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="boleto-acesso" id="inserir_boleto-acesso" />

									<label class="toggle toggle_inserir" for="inserir_boleto-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="boleto-acesso" id="alterar_boleto-acesso" />

									<label class="toggle toggle_alterar" for="alterar_boleto-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="boleto-acesso" id="excluir_boleto-acesso" />

									<label class="toggle toggle_excluir" for="excluir_boleto-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="boleto-acesso" id="procurar_boleto-acesso" />

									<label class="toggle toggle_procurar" for="procurar_boleto-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="boleto-acesso" id="pdf_boleto-acesso" />

									<label class="toggle toggle_pdf" for="pdf_boleto-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="boleto-acesso" id="xls_boleto-acesso" />

									<label class="toggle toggle_xls" for="xls_boleto-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Cadastro Ajuda</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="cadastro_ajuda-acesso" id="todos_cadastro_ajuda-acesso" />

									<label class="toggle toggle_todos" for="todos_cadastro_ajuda-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="cadastro_ajuda-acesso" id="menu_cadastro_ajuda-acesso" />

									<label class="toggle toggle_menu" for="menu_cadastro_ajuda-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="cadastro_ajuda-acesso" id="inserir_cadastro_ajuda-acesso" />

									<label class="toggle toggle_inserir" for="inserir_cadastro_ajuda-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="cadastro_ajuda-acesso" id="alterar_cadastro_ajuda-acesso" />

									<label class="toggle toggle_alterar" for="alterar_cadastro_ajuda-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="cadastro_ajuda-acesso" id="excluir_cadastro_ajuda-acesso" />

									<label class="toggle toggle_excluir" for="excluir_cadastro_ajuda-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="cadastro_ajuda-acesso" id="procurar_cadastro_ajuda-acesso" />

									<label class="toggle toggle_procurar" for="procurar_cadastro_ajuda-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="cadastro_ajuda-acesso" id="pdf_cadastro_ajuda-acesso" />

									<label class="toggle toggle_pdf" for="pdf_cadastro_ajuda-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="cadastro_ajuda-acesso" id="xls_cadastro_ajuda-acesso" />

									<label class="toggle toggle_xls" for="xls_cadastro_ajuda-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Cadastro Condomínio</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="cadastro_condominio-acesso" id="todos_cadastro_condominio-acesso" />

									<label class="toggle toggle_todos" for="todos_cadastro_condominio-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="cadastro_condominio-acesso" id="menu_cadastro_condominio-acesso" />

									<label class="toggle toggle_menu" for="menu_cadastro_condominio-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="cadastro_condominio-acesso" id="inserir_cadastro_condominio-acesso" />

									<label class="toggle toggle_inserir" for="inserir_cadastro_condominio-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="cadastro_condominio-acesso" id="alterar_cadastro_condominio-acesso" />

									<label class="toggle toggle_alterar" for="alterar_cadastro_condominio-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="cadastro_condominio-acesso" id="excluir_cadastro_condominio-acesso" />

									<label class="toggle toggle_excluir" for="excluir_cadastro_condominio-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="cadastro_condominio-acesso" id="procurar_cadastro_condominio-acesso" />

									<label class="toggle toggle_procurar" for="procurar_cadastro_condominio-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="cadastro_condominio-acesso" id="pdf_cadastro_condominio-acesso" />

									<label class="toggle toggle_pdf" for="pdf_cadastro_condominio-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="cadastro_condominio-acesso" id="xls_cadastro_condominio-acesso" />

									<label class="toggle toggle_xls" for="xls_cadastro_condominio-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Campo Extra</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="campo-acesso" id="todos_campo-acesso" />

									<label class="toggle toggle_todos" for="todos_campo-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="campo-acesso" id="menu_campo-acesso" />

									<label class="toggle toggle_menu" for="menu_campo-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="campo-acesso" id="inserir_campo-acesso" />

									<label class="toggle toggle_inserir" for="inserir_campo-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="campo-acesso" id="alterar_campo-acesso" />

									<label class="toggle toggle_alterar" for="alterar_campo-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="campo-acesso" id="excluir_campo-acesso" />

									<label class="toggle toggle_excluir" for="excluir_campo-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="campo-acesso" id="procurar_campo-acesso" />

									<label class="toggle toggle_procurar" for="procurar_campo-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="campo-acesso" id="pdf_campo-acesso" />

									<label class="toggle toggle_pdf" for="pdf_campo-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="campo-acesso" id="xls_campo-acesso" />

									<label class="toggle toggle_xls" for="xls_campo-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Config. Condominio</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="config.-acesso" id="todos_config.-acesso" />

									<label class="toggle toggle_todos" for="todos_config.-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="config.-acesso" id="menu_config.-acesso" />

									<label class="toggle toggle_menu" for="menu_config.-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="config.-acesso" id="inserir_config.-acesso" />

									<label class="toggle toggle_inserir" for="inserir_config.-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="config.-acesso" id="alterar_config.-acesso" />

									<label class="toggle toggle_alterar" for="alterar_config.-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="config.-acesso" id="excluir_config.-acesso" />

									<label class="toggle toggle_excluir" for="excluir_config.-acesso">Excluir</label>


<!-- <script src="../assets/js/uploader.js"></script> -->
									<input type="checkbox" class="switch switch_procurar" name="config.-acesso" id="procurar_config.-acesso" />

									<label class="toggle toggle_procurar" for="procurar_config.-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="config.-acesso" id="pdf_config.-acesso" />

									<label class="toggle toggle_pdf" for="pdf_config.-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="config.-acesso" id="xls_config.-acesso" />

									<label class="toggle toggle_xls" for="xls_config.-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Configuração de acesso</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="configuração-acesso" id="todos_configuração-acesso" />

									<label class="toggle toggle_todos" for="todos_configuração-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="configuração-acesso" id="menu_configuração-acesso" />

									<label class="toggle toggle_menu" for="menu_configuração-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="configuração-acesso" id="inserir_configuração-acesso" />

									<label class="toggle toggle_inserir" for="inserir_configuração-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="configuração-acesso" id="alterar_configuração-acesso" />

									<label class="toggle toggle_alterar" for="alterar_configuração-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="configuração-acesso" id="excluir_configuração-acesso" />

									<label class="toggle toggle_excluir" for="excluir_configuração-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="configuração-acesso" id="procurar_configuração-acesso" />

									<label class="toggle toggle_procurar" for="procurar_configuração-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="configuração-acesso" id="pdf_configuração-acesso" />

									<label class="toggle toggle_pdf" for="pdf_configuração-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="configuração-acesso" id="xls_configuração-acesso" />

									<label class="toggle toggle_xls" for="xls_configuração-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Conta Bancária</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="conta-acesso" id="todos_conta-acesso" />

									<label class="toggle toggle_todos" for="todos_conta-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="conta-acesso" id="menu_conta-acesso" />

									<label class="toggle toggle_menu" for="menu_conta-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="conta-acesso" id="inserir_conta-acesso" />

									<label class="toggle toggle_inserir" for="inserir_conta-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="conta-acesso" id="alterar_conta-acesso" />

									<label class="toggle toggle_alterar" for="alterar_conta-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="conta-acesso" id="excluir_conta-acesso" />

									<label class="toggle toggle_excluir" for="excluir_conta-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="conta-acesso" id="procurar_conta-acesso" />

									<label class="toggle toggle_procurar" for="procurar_conta-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="conta-acesso" id="pdf_conta-acesso" />

									<label class="toggle toggle_pdf" for="pdf_conta-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="conta-acesso" id="xls_conta-acesso" />

									<label class="toggle toggle_xls" for="xls_conta-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Conteúdo Institucional</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="conteúdo_institucional-acesso" id="todos_conteúdo_institucional-acesso" />

									<label class="toggle toggle_todos" for="todos_conteúdo_institucional-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="conteúdo_institucional-acesso" id="menu_conteúdo_institucional-acesso" />

									<label class="toggle toggle_menu" for="menu_conteúdo_institucional-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="conteúdo_institucional-acesso" id="inserir_conteúdo_institucional-acesso" />

									<label class="toggle toggle_inserir" for="inserir_conteúdo_institucional-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="conteúdo_institucional-acesso" id="alterar_conteúdo_institucional-acesso" />

									<label class="toggle toggle_alterar" for="alterar_conteúdo_institucional-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="conteúdo_institucional-acesso" id="excluir_conteúdo_institucional-acesso" />

									<label class="toggle toggle_excluir" for="excluir_conteúdo_institucional-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="conteúdo_institucional-acesso" id="procurar_conteúdo_institucional-acesso" />

									<label class="toggle toggle_procurar" for="procurar_conteúdo_institucional-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="conteúdo_institucional-acesso" id="pdf_conteúdo_institucional-acesso" />

									<label class="toggle toggle_pdf" for="pdf_conteúdo_institucional-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="conteúdo_institucional-acesso" id="xls_conteúdo_institucional-acesso" />

									<label class="toggle toggle_xls" for="xls_conteúdo_institucional-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Controle de Acesso</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="controle-acesso" id="todos_controle-acesso" />

									<label class="toggle toggle_todos" for="todos_controle-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="controle-acesso" id="menu_controle-acesso" />

									<label class="toggle toggle_menu" for="menu_controle-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="controle-acesso" id="inserir_controle-acesso" />

									<label class="toggle toggle_inserir" for="inserir_controle-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="controle-acesso" id="alterar_controle-acesso" />

									<label class="toggle toggle_alterar" for="alterar_controle-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="controle-acesso" id="excluir_controle-acesso" />

									<label class="toggle toggle_excluir" for="excluir_controle-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="controle-acesso" id="procurar_controle-acesso" />

									<label class="toggle toggle_procurar" for="procurar_controle-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="controle-acesso" id="pdf_controle-acesso" />

									<label class="toggle toggle_pdf" for="pdf_controle-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="controle-acesso" id="xls_controle-acesso" />

									<label class="toggle toggle_xls" for="xls_controle-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Copia E-mail</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="copia-acesso" id="todos_copia-acesso" />

									<label class="toggle toggle_todos" for="todos_copia-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="copia-acesso" id="menu_copia-acesso" />

									<label class="toggle toggle_menu" for="menu_copia-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="copia-acesso" id="inserir_copia-acesso" />

									<label class="toggle toggle_inserir" for="inserir_copia-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="copia-acesso" id="alterar_copia-acesso" />

									<label class="toggle toggle_alterar" for="alterar_copia-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="copia-acesso" id="excluir_copia-acesso" />

									<label class="toggle toggle_excluir" for="excluir_copia-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="copia-acesso" id="procurar_copia-acesso" />

									<label class="toggle toggle_procurar" for="procurar_copia-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="copia-acesso" id="pdf_copia-acesso" />

									<label class="toggle toggle_pdf" for="pdf_copia-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="copia-acesso" id="xls_copia-acesso" />

									<label class="toggle toggle_xls" for="xls_copia-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Cotações</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="cotações-acesso" id="todos_cotações-acesso" />

									<label class="toggle toggle_todos" for="todos_cotações-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="cotações-acesso" id="menu_cotações-acesso" />

									<label class="toggle toggle_menu" for="menu_cotações-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="cotações-acesso" id="inserir_cotações-acesso" />

									<label class="toggle toggle_inserir" for="inserir_cotações-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="cotações-acesso" id="alterar_cotações-acesso" />

									<label class="toggle toggle_alterar" for="alterar_cotações-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="cotações-acesso" id="excluir_cotações-acesso" />

									<label class="toggle toggle_excluir" for="excluir_cotações-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="cotações-acesso" id="procurar_cotações-acesso" />

									<label class="toggle toggle_procurar" for="procurar_cotações-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="cotações-acesso" id="pdf_cotações-acesso" />

									<label class="toggle toggle_pdf" for="pdf_cotações-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="cotações-acesso" id="xls_cotações-acesso" />

									<label class="toggle toggle_xls" for="xls_cotações-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Depoimento</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="depoimento-acesso" id="todos_depoimento-acesso" />

									<label class="toggle toggle_todos" for="todos_depoimento-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="depoimento-acesso" id="menu_depoimento-acesso" />

									<label class="toggle toggle_menu" for="menu_depoimento-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="depoimento-acesso" id="inserir_depoimento-acesso" />

									<label class="toggle toggle_inserir" for="inserir_depoimento-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="depoimento-acesso" id="alterar_depoimento-acesso" />

									<label class="toggle toggle_alterar" for="alterar_depoimento-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="depoimento-acesso" id="excluir_depoimento-acesso" />

									<label class="toggle toggle_excluir" for="excluir_depoimento-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="depoimento-acesso" id="procurar_depoimento-acesso" />

									<label class="toggle toggle_procurar" for="procurar_depoimento-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="depoimento-acesso" id="pdf_depoimento-acesso" />

									<label class="toggle toggle_pdf" for="pdf_depoimento-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="depoimento-acesso" id="xls_depoimento-acesso" />

									<label class="toggle toggle_xls" for="xls_depoimento-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Email Marketing</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="email-acesso" id="todos_email-acesso" />

									<label class="toggle toggle_todos" for="todos_email-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="email-acesso" id="menu_email-acesso" />

									<label class="toggle toggle_menu" for="menu_email-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="email-acesso" id="inserir_email-acesso" />

									<label class="toggle toggle_inserir" for="inserir_email-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="email-acesso" id="alterar_email-acesso" />

									<label class="toggle toggle_alterar" for="alterar_email-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="email-acesso" id="excluir_email-acesso" />

									<label class="toggle toggle_excluir" for="excluir_email-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="email-acesso" id="procurar_email-acesso" />

									<label class="toggle toggle_procurar" for="procurar_email-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="email-acesso" id="pdf_email-acesso" />

									<label class="toggle toggle_pdf" for="pdf_email-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="email-acesso" id="xls_email-acesso" />

									<label class="toggle toggle_xls" for="xls_email-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Envio Boleto</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="envio-acesso" id="todos_envio-acesso" />

									<label class="toggle toggle_todos" for="todos_envio-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="envio-acesso" id="menu_envio-acesso" />

									<label class="toggle toggle_menu" for="menu_envio-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="envio-acesso" id="inserir_envio-acesso" />

									<label class="toggle toggle_inserir" for="inserir_envio-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="envio-acesso" id="alterar_envio-acesso" />

									<label class="toggle toggle_alterar" for="alterar_envio-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="envio-acesso" id="excluir_envio-acesso" />

									<label class="toggle toggle_excluir" for="excluir_envio-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="envio-acesso" id="procurar_envio-acesso" />

									<label class="toggle toggle_procurar" for="procurar_envio-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="envio-acesso" id="pdf_envio-acesso" />

									<label class="toggle toggle_pdf" for="pdf_envio-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="envio-acesso" id="xls_envio-acesso" />

									<label class="toggle toggle_xls" for="xls_envio-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Extra - Condominio</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="extra-acesso" id="todos_extra-acesso" />

									<label class="toggle toggle_todos" for="todos_extra-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="extra-acesso" id="menu_extra-acesso" />

									<label class="toggle toggle_menu" for="menu_extra-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="extra-acesso" id="inserir_extra-acesso" />

									<label class="toggle toggle_inserir" for="inserir_extra-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="extra-acesso" id="alterar_extra-acesso" />

									<label class="toggle toggle_alterar" for="alterar_extra-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="extra-acesso" id="excluir_extra-acesso" />

									<label class="toggle toggle_excluir" for="excluir_extra-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="extra-acesso" id="procurar_extra-acesso" />

									<label class="toggle toggle_procurar" for="procurar_extra-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="extra-acesso" id="pdf_extra-acesso" />

									<label class="toggle toggle_pdf" for="pdf_extra-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="extra-acesso" id="xls_extra-acesso" />

									<label class="toggle toggle_xls" for="xls_extra-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Extrator</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="extrator-acesso" id="todos_extrator-acesso" />

									<label class="toggle toggle_todos" for="todos_extrator-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="extrator-acesso" id="menu_extrator-acesso" />

									<label class="toggle toggle_menu" for="menu_extrator-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="extrator-acesso" id="inserir_extrator-acesso" />

									<label class="toggle toggle_inserir" for="inserir_extrator-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="extrator-acesso" id="alterar_extrator-acesso" />

									<label class="toggle toggle_alterar" for="alterar_extrator-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="extrator-acesso" id="excluir_extrator-acesso" />

									<label class="toggle toggle_excluir" for="excluir_extrator-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="extrator-acesso" id="procurar_extrator-acesso" />

									<label class="toggle toggle_procurar" for="procurar_extrator-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="extrator-acesso" id="pdf_extrator-acesso" />

									<label class="toggle toggle_pdf" for="pdf_extrator-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="extrator-acesso" id="xls_extrator-acesso" />

									<label class="toggle toggle_xls" for="xls_extrator-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Importação</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="importação-acesso" id="todos_importação-acesso" />

									<label class="toggle toggle_todos" for="todos_importação-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="importação-acesso" id="menu_importação-acesso" />

									<label class="toggle toggle_menu" for="menu_importação-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="importação-acesso" id="inserir_importação-acesso" />

									<label class="toggle toggle_inserir" for="inserir_importação-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="importação-acesso" id="alterar_importação-acesso" />

									<label class="toggle toggle_alterar" for="alterar_importação-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="importação-acesso" id="excluir_importação-acesso" />

									<label class="toggle toggle_excluir" for="excluir_importação-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="importação-acesso" id="procurar_importação-acesso" />

									<label class="toggle toggle_procurar" for="procurar_importação-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="importação-acesso" id="pdf_importação-acesso" />

									<label class="toggle toggle_pdf" for="pdf_importação-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="importação-acesso" id="xls_importação-acesso" />

									<label class="toggle toggle_xls" for="xls_importação-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Inadimplência</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="inadimplência-acesso" id="todos_inadimplência-acesso" />

									<label class="toggle toggle_todos" for="todos_inadimplência-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="inadimplência-acesso" id="menu_inadimplência-acesso" />

									<label class="toggle toggle_menu" for="menu_inadimplência-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="inadimplência-acesso" id="inserir_inadimplência-acesso" />

									<label class="toggle toggle_inserir" for="inserir_inadimplência-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="inadimplência-acesso" id="alterar_inadimplência-acesso" />

									<label class="toggle toggle_alterar" for="alterar_inadimplência-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="inadimplência-acesso" id="excluir_inadimplência-acesso" />

									<label class="toggle toggle_excluir" for="excluir_inadimplência-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="inadimplência-acesso" id="procurar_inadimplência-acesso" />

									<label class="toggle toggle_procurar" for="procurar_inadimplência-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="inadimplência-acesso" id="pdf_inadimplência-acesso" />

									<label class="toggle toggle_pdf" for="pdf_inadimplência-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="inadimplência-acesso" id="xls_inadimplência-acesso" />

									<label class="toggle toggle_xls" for="xls_inadimplência-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">News Mens</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="news-acesso" id="todos_news-acesso" />

									<label class="toggle toggle_todos" for="todos_news-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="news-acesso" id="menu_news-acesso" />

									<label class="toggle toggle_menu" for="menu_news-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="news-acesso" id="inserir_news-acesso" />

									<label class="toggle toggle_inserir" for="inserir_news-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="news-acesso" id="alterar_news-acesso" />

									<label class="toggle toggle_alterar" for="alterar_news-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="news-acesso" id="excluir_news-acesso" />

									<label class="toggle toggle_excluir" for="excluir_news-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="news-acesso" id="procurar_news-acesso" />

									<label class="toggle toggle_procurar" for="procurar_news-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="news-acesso" id="pdf_news-acesso" />

									<label class="toggle toggle_pdf" for="pdf_news-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="news-acesso" id="xls_news-acesso" />

									<label class="toggle toggle_xls" for="xls_news-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Ouvidoria</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="ouvidoria-acesso" id="todos_ouvidoria-acesso" />

									<label class="toggle toggle_todos" for="todos_ouvidoria-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="ouvidoria-acesso" id="menu_ouvidoria-acesso" />

									<label class="toggle toggle_menu" for="menu_ouvidoria-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="ouvidoria-acesso" id="inserir_ouvidoria-acesso" />

									<label class="toggle toggle_inserir" for="inserir_ouvidoria-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="ouvidoria-acesso" id="alterar_ouvidoria-acesso" />

									<label class="toggle toggle_alterar" for="alterar_ouvidoria-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="ouvidoria-acesso" id="excluir_ouvidoria-acesso" />

									<label class="toggle toggle_excluir" for="excluir_ouvidoria-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="ouvidoria-acesso" id="procurar_ouvidoria-acesso" />

									<label class="toggle toggle_procurar" for="procurar_ouvidoria-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="ouvidoria-acesso" id="pdf_ouvidoria-acesso" />

									<label class="toggle toggle_pdf" for="pdf_ouvidoria-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="ouvidoria-acesso" id="xls_ouvidoria-acesso" />

									<label class="toggle toggle_xls" for="xls_ouvidoria-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Padrão E-mail</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="padrão-acesso" id="todos_padrão-acesso" />

									<label class="toggle toggle_todos" for="todos_padrão-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="padrão-acesso" id="menu_padrão-acesso" />

									<label class="toggle toggle_menu" for="menu_padrão-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="padrão-acesso" id="inserir_padrão-acesso" />

									<label class="toggle toggle_inserir" for="inserir_padrão-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="padrão-acesso" id="alterar_padrão-acesso" />

									<label class="toggle toggle_alterar" for="alterar_padrão-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="padrão-acesso" id="excluir_padrão-acesso" />

									<label class="toggle toggle_excluir" for="excluir_padrão-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="padrão-acesso" id="procurar_padrão-acesso" />

									<label class="toggle toggle_procurar" for="procurar_padrão-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="padrão-acesso" id="pdf_padrão-acesso" />

									<label class="toggle toggle_pdf" for="pdf_padrão-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="padrão-acesso" id="xls_padrão-acesso" />

									<label class="toggle toggle_xls" for="xls_padrão-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Pagamentos</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="pagamentos-acesso" id="todos_pagamentos-acesso" />

									<label class="toggle toggle_todos" for="todos_pagamentos-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="pagamentos-acesso" id="menu_pagamentos-acesso" />

									<label class="toggle toggle_menu" for="menu_pagamentos-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="pagamentos-acesso" id="inserir_pagamentos-acesso" />

									<label class="toggle toggle_inserir" for="inserir_pagamentos-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="pagamentos-acesso" id="alterar_pagamentos-acesso" />

									<label class="toggle toggle_alterar" for="alterar_pagamentos-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="pagamentos-acesso" id="excluir_pagamentos-acesso" />

									<label class="toggle toggle_excluir" for="excluir_pagamentos-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="pagamentos-acesso" id="procurar_pagamentos-acesso" />

									<label class="toggle toggle_procurar" for="procurar_pagamentos-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="pagamentos-acesso" id="pdf_pagamentos-acesso" />

									<label class="toggle toggle_pdf" for="pdf_pagamentos-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="pagamentos-acesso" id="xls_pagamentos-acesso" />

									<label class="toggle toggle_xls" for="xls_pagamentos-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Perguntas Plano</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="perguntas-acesso" id="todos_perguntas-acesso" />

									<label class="toggle toggle_todos" for="todos_perguntas-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="perguntas-acesso" id="menu_perguntas-acesso" />

									<label class="toggle toggle_menu" for="menu_perguntas-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="perguntas-acesso" id="inserir_perguntas-acesso" />

									<label class="toggle toggle_inserir" for="inserir_perguntas-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="perguntas-acesso" id="alterar_perguntas-acesso" />

									<label class="toggle toggle_alterar" for="alterar_perguntas-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="perguntas-acesso" id="excluir_perguntas-acesso" />

									<label class="toggle toggle_excluir" for="excluir_perguntas-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="perguntas-acesso" id="procurar_perguntas-acesso" />

									<label class="toggle toggle_procurar" for="procurar_perguntas-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="perguntas-acesso" id="pdf_perguntas-acesso" />

									<label class="toggle toggle_pdf" for="pdf_perguntas-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="perguntas-acesso" id="xls_perguntas-acesso" />

									<label class="toggle toggle_xls" for="xls_perguntas-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Rateio</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="rateio-acesso" id="todos_rateio-acesso" />

									<label class="toggle toggle_todos" for="todos_rateio-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="rateio-acesso" id="menu_rateio-acesso" />

									<label class="toggle toggle_menu" for="menu_rateio-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="rateio-acesso" id="inserir_rateio-acesso" />

									<label class="toggle toggle_inserir" for="inserir_rateio-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="rateio-acesso" id="alterar_rateio-acesso" />

									<label class="toggle toggle_alterar" for="alterar_rateio-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="rateio-acesso" id="excluir_rateio-acesso" />

									<label class="toggle toggle_excluir" for="excluir_rateio-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="rateio-acesso" id="procurar_rateio-acesso" />

									<label class="toggle toggle_procurar" for="procurar_rateio-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="rateio-acesso" id="pdf_rateio-acesso" />

									<label class="toggle toggle_pdf" for="pdf_rateio-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="rateio-acesso" id="xls_rateio-acesso" />

									<label class="toggle toggle_xls" for="xls_rateio-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Retorno E-mail</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="retorno-acesso" id="todos_retorno-acesso" />

									<label class="toggle toggle_todos" for="todos_retorno-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="retorno-acesso" id="menu_retorno-acesso" />

									<label class="toggle toggle_menu" for="menu_retorno-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="retorno-acesso" id="inserir_retorno-acesso" />

									<label class="toggle toggle_inserir" for="inserir_retorno-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="retorno-acesso" id="alterar_retorno-acesso" />

									<label class="toggle toggle_alterar" for="alterar_retorno-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="retorno-acesso" id="excluir_retorno-acesso" />

									<label class="toggle toggle_excluir" for="excluir_retorno-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="retorno-acesso" id="procurar_retorno-acesso" />

									<label class="toggle toggle_procurar" for="procurar_retorno-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="retorno-acesso" id="pdf_retorno-acesso" />

									<label class="toggle toggle_pdf" for="pdf_retorno-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="retorno-acesso" id="xls_retorno-acesso" />

									<label class="toggle toggle_xls" for="xls_retorno-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Suporte GestCCon</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="suporte-acesso" id="todos_suporte-acesso" />

									<label class="toggle toggle_todos" for="todos_suporte-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="suporte-acesso" id="menu_suporte-acesso" />

									<label class="toggle toggle_menu" for="menu_suporte-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="suporte-acesso" id="inserir_suporte-acesso" />

									<label class="toggle toggle_inserir" for="inserir_suporte-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="suporte-acesso" id="alterar_suporte-acesso" />

									<label class="toggle toggle_alterar" for="alterar_suporte-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="suporte-acesso" id="excluir_suporte-acesso" />

									<label class="toggle toggle_excluir" for="excluir_suporte-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="suporte-acesso" id="procurar_suporte-acesso" />

									<label class="toggle toggle_procurar" for="procurar_suporte-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="suporte-acesso" id="pdf_suporte-acesso" />

									<label class="toggle toggle_pdf" for="pdf_suporte-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="suporte-acesso" id="xls_suporte-acesso" />

									<label class="toggle toggle_xls" for="xls_suporte-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Tarefa</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="tarefa-acesso" id="todos_tarefa-acesso" />

									<label class="toggle toggle_todos" for="todos_tarefa-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="tarefa-acesso" id="menu_tarefa-acesso" />

									<label class="toggle toggle_menu" for="menu_tarefa-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="tarefa-acesso" id="inserir_tarefa-acesso" />

									<label class="toggle toggle_inserir" for="inserir_tarefa-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="tarefa-acesso" id="alterar_tarefa-acesso" />

									<label class="toggle toggle_alterar" for="alterar_tarefa-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="tarefa-acesso" id="excluir_tarefa-acesso" />

									<label class="toggle toggle_excluir" for="excluir_tarefa-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="tarefa-acesso" id="procurar_tarefa-acesso" />

									<label class="toggle toggle_procurar" for="procurar_tarefa-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="tarefa-acesso" id="pdf_tarefa-acesso" />

									<label class="toggle toggle_pdf" for="pdf_tarefa-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="tarefa-acesso" id="xls_tarefa-acesso" />

									<label class="toggle toggle_xls" for="xls_tarefa-acesso">Xls</label>

								</div>

							</div>

						</div>

					</div>



					<div id="relatorio_geral-container" data-parent="#container-tabela" class="collapse">

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Relatório Geral</label>

								</div>

							</div>

							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos_main" id="todos_main-relatorio" />

									<label class="toggle toggle_todos" for="todos_main-relatorio">Todos</label>



									<input type="checkbox" class="switch switch_menu_main" id="menu_main-relatorio" />

									<label class="toggle toggle_menu" for="menu_main-relatorio">Menu</label>



									<input type="checkbox" class="switch switch_inserir_main" id="inserir_main-relatorio" />

									<label class="toggle toggle_inserir" for="inserir_main-relatorio">Inserir</label>



									<input type="checkbox" class="switch switch_alterar_main" id="alterar_main-relatorio" />

									<label class="toggle toggle_alterar" for="alterar_main-relatorio">Alterar</label>



									<input type="checkbox" class="switch switch_excluir_main" id="excluir_main-relatorio" />

									<label class="toggle toggle_excluir" for="excluir_main-relatorio">Excluir</label>



									<input type="checkbox" class="switch switch_procurar_main" id="procurar_main-relatorio" />

									<label class="toggle toggle_procurar" for="procurar_main-relatorio">Procurar</label>



									<input type="checkbox" class="switch switch_pdf_main" id="pdf_main-relatorio" />

									<label class="toggle toggle_pdf" for="pdf_main-relatorio">Pdf</label>



									<input type="checkbox" class="switch switch_xls_main" id="xls_main-relatorio" />

									<label class="toggle toggle_xls" for="xls_main-relatorio">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Acessos</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="acessos-acesso" id="todos_acessos-acesso" />

									<label class="toggle toggle_todos" for="todos_acessos-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="acessos-acesso" id="menu_acessos-acesso" />

									<label class="toggle toggle_menu" for="menu_acessos-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="acessos-acesso" id="inserir_acessos-acesso" />

									<label class="toggle toggle_inserir" for="inserir_acessos-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="acessos-acesso" id="alterar_acessos-acesso" />

									<label class="toggle toggle_alterar" for="alterar_acessos-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="acessos-acesso" id="excluir_acessos-acesso" />

									<label class="toggle toggle_excluir" for="excluir_acessos-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="acessos-acesso" id="procurar_acessos-acesso" />

									<label class="toggle toggle_procurar" for="procurar_acessos-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="acessos-acesso" id="pdf_acessos-acesso" />

									<label class="toggle toggle_pdf" for="pdf_acessos-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="acessos-acesso" id="xls_acessos-acesso" />

									<label class="toggle toggle_xls" for="xls_acessos-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Receita da Academia</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="receita-acesso" id="todos_receita-acesso" />

									<label class="toggle toggle_todos" for="todos_receita-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="receita-acesso" id="menu_receita-acesso" />

									<label class="toggle toggle_menu" for="menu_receita-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="receita-acesso" id="inserir_receita-acesso" />

									<label class="toggle toggle_inserir" for="inserir_receita-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="receita-acesso" id="alterar_receita-acesso" />

									<label class="toggle toggle_alterar" for="alterar_receita-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="receita-acesso" id="excluir_receita-acesso" />

									<label class="toggle toggle_excluir" for="excluir_receita-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="receita-acesso" id="procurar_receita-acesso" />

									<label class="toggle toggle_procurar" for="procurar_receita-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="receita-acesso" id="pdf_receita-acesso" />

									<label class="toggle toggle_pdf" for="pdf_receita-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="receita-acesso" id="xls_receita-acesso" />

									<label class="toggle toggle_xls" for="xls_receita-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Rel. Bicicleta</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="relatorio_bicicleta-acesso" id="todos_relatorio_bicicleta-acesso" />

									<label class="toggle toggle_todos" for="todos_relatorio_bicicleta-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="relatorio_bicicleta-acesso" id="menu_relatorio_bicicleta-acesso" />

									<label class="toggle toggle_menu" for="menu_relatorio_bicicleta-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="relatorio_bicicleta-acesso" id="inserir_relatorio_bicicleta-acesso" />

									<label class="toggle toggle_inserir" for="inserir_relatorio_bicicleta-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="relatorio_bicicleta-acesso" id="alterar_relatorio_bicicleta-acesso" />

									<label class="toggle toggle_alterar" for="alterar_relatorio_bicicleta-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="relatorio_bicicleta-acesso" id="excluir_relatorio_bicicleta-acesso" />

									<label class="toggle toggle_excluir" for="excluir_relatorio_bicicleta-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="relatorio_bicicleta-acesso" id="procurar_relatorio_bicicleta-acesso" />

									<label class="toggle toggle_procurar" for="procurar_relatorio_bicicleta-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="relatorio_bicicleta-acesso" id="pdf_relatorio_bicicleta-acesso" />

									<label class="toggle toggle_pdf" for="pdf_relatorio_bicicleta-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="relatorio_bicicleta-acesso" id="xls_relatorio_bicicleta-acesso" />

									<label class="toggle toggle_xls" for="xls_relatorio_bicicleta-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Rel. Geral de Receitas</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="relatorio_geral-acesso" id="todos_relatorio_geral-acesso" />

									<label class="toggle toggle_todos" for="todos_relatorio_geral-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="relatorio_geral-acesso" id="menu_relatorio_geral-acesso" />

									<label class="toggle toggle_menu" for="menu_relatorio_geral-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="relatorio_geral-acesso" id="inserir_relatorio_geral-acesso" />

									<label class="toggle toggle_inserir" for="inserir_relatorio_geral-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="relatorio_geral-acesso" id="alterar_relatorio_geral-acesso" />

									<label class="toggle toggle_alterar" for="alterar_relatorio_geral-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="relatorio_geral-acesso" id="excluir_relatorio_geral-acesso" />

									<label class="toggle toggle_excluir" for="excluir_relatorio_geral-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="relatorio_geral-acesso" id="procurar_relatorio_geral-acesso" />

									<label class="toggle toggle_procurar" for="procurar_relatorio_geral-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="relatorio_geral-acesso" id="pdf_relatorio_geral-acesso" />

									<label class="toggle toggle_pdf" for="pdf_relatorio_geral-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="relatorio_geral-acesso" id="xls_relatorio_geral-acesso" />

									<label class="toggle toggle_xls" for="xls_relatorio_geral-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Relatório de Log</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="relatório-acesso" id="todos_relatório-acesso" />

									<label class="toggle toggle_todos" for="todos_relatório-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="relatório-acesso" id="menu_relatório-acesso" />

									<label class="toggle toggle_menu" for="menu_relatório-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="relatório-acesso" id="inserir_relatório-acesso" />

									<label class="toggle toggle_inserir" for="inserir_relatório-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="relatório-acesso" id="alterar_relatório-acesso" />

									<label class="toggle toggle_alterar" for="alterar_relatório-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="relatório-acesso" id="excluir_relatório-acesso" />

									<label class="toggle toggle_excluir" for="excluir_relatório-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="relatório-acesso" id="procurar_relatório-acesso" />

									<label class="toggle toggle_procurar" for="procurar_relatório-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="relatório-acesso" id="pdf_relatório-acesso" />

									<label class="toggle toggle_pdf" for="pdf_relatório-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="relatório-acesso" id="xls_relatório-acesso" />

									<label class="toggle toggle_xls" for="xls_relatório-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Relatórios de Veiculos</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="relatórios-acesso" id="todos_relatórios-acesso" />

									<label class="toggle toggle_todos" for="todos_relatórios-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="relatórios-acesso" id="menu_relatórios-acesso" />

									<label class="toggle toggle_menu" for="menu_relatórios-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="relatórios-acesso" id="inserir_relatórios-acesso" />

									<label class="toggle toggle_inserir" for="inserir_relatórios-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="relatórios-acesso" id="alterar_relatórios-acesso" />

									<label class="toggle toggle_alterar" for="alterar_relatórios-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="relatórios-acesso" id="excluir_relatórios-acesso" />

									<label class="toggle toggle_excluir" for="excluir_relatórios-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="relatórios-acesso" id="procurar_relatórios-acesso" />

									<label class="toggle toggle_procurar" for="procurar_relatórios-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="relatórios-acesso" id="pdf_relatórios-acesso" />

									<label class="toggle toggle_pdf" for="pdf_relatórios-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="relatórios-acesso" id="xls_relatórios-acesso" />

									<label class="toggle toggle_xls" for="xls_relatórios-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Reservas</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="reservas-acesso" id="todos_reservas-acesso" />

									<label class="toggle toggle_todos" for="todos_reservas-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="reservas-acesso" id="menu_reservas-acesso" />

									<label class="toggle toggle_menu" for="menu_reservas-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="reservas-acesso" id="inserir_reservas-acesso" />

									<label class="toggle toggle_inserir" for="inserir_reservas-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="reservas-acesso" id="alterar_reservas-acesso" />

									<label class="toggle toggle_alterar" for="alterar_reservas-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="reservas-acesso" id="excluir_reservas-acesso" />

									<label class="toggle toggle_excluir" for="excluir_reservas-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="reservas-acesso" id="procurar_reservas-acesso" />

									<label class="toggle toggle_procurar" for="procurar_reservas-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="reservas-acesso" id="pdf_reservas-acesso" />

									<label class="toggle toggle_pdf" for="pdf_reservas-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="reservas-acesso" id="xls_reservas-acesso" />

									<label class="toggle toggle_xls" for="xls_reservas-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Reservas Canceladas</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="reservas_canceladas-acesso" id="todos_reservas_canceladas-acesso" />

									<label class="toggle toggle_todos" for="todos_reservas_canceladas-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="reservas_canceladas-acesso" id="menu_reservas_canceladas-acesso" />

									<label class="toggle toggle_menu" for="menu_reservas_canceladas-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="reservas_canceladas-acesso" id="inserir_reservas_canceladas-acesso" />

									<label class="toggle toggle_inserir" for="inserir_reservas_canceladas-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="reservas_canceladas-acesso" id="alterar_reservas_canceladas-acesso" />

									<label class="toggle toggle_alterar" for="alterar_reservas_canceladas-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="reservas_canceladas-acesso" id="excluir_reservas_canceladas-acesso" />

									<label class="toggle toggle_excluir" for="excluir_reservas_canceladas-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="reservas_canceladas-acesso" id="procurar_reservas_canceladas-acesso" />

									<label class="toggle toggle_procurar" for="procurar_reservas_canceladas-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="reservas_canceladas-acesso" id="pdf_reservas_canceladas-acesso" />

									<label class="toggle toggle_pdf" for="pdf_reservas_canceladas-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="reservas_canceladas-acesso" id="xls_reservas_canceladas-acesso" />

									<label class="toggle toggle_xls" for="xls_reservas_canceladas-acesso">Xls</label>

								</div>

							</div>

						</div>

					</div>



					<div id="site_portal-container" data-parent="#container-tabela" class="collapse">

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Site Portal</label>

								</div>

							</div>

							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos_main" id="todos_main-portal" />

									<label class="toggle toggle_todos" for="todos_main-portal">Todos</label>



									<input type="checkbox" class="switch switch_menu_main" id="menu_main-portal" />

									<label class="toggle toggle_menu" for="menu_main-portal">Menu</label>



									<input type="checkbox" class="switch switch_inserir_main" id="inserir_main-portal" />

									<label class="toggle toggle_inserir" for="inserir_main-portal">Inserir</label>



									<input type="checkbox" class="switch switch_alterar_main" id="alterar_main-portal" />

									<label class="toggle toggle_alterar" for="alterar_main-portal">Alterar</label>



									<input type="checkbox" class="switch switch_excluir_main" id="excluir_main-portal" />

									<label class="toggle toggle_excluir" for="excluir_main-portal">Excluir</label>



									<input type="checkbox" class="switch switch_procurar_main" id="procurar_main-portal" />

									<label class="toggle toggle_procurar" for="procurar_main-portal">Procurar</label>



									<input type="checkbox" class="switch switch_pdf_main" id="pdf_main-portal" />

									<label class="toggle toggle_pdf" for="pdf_main-portal">Pdf</label>



									<input type="checkbox" class="switch switch_xls_main" id="xls_main-portal" />

									<label class="toggle toggle_xls" for="xls_main-portal">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Banner</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="banner-acesso" id="todos_banner-acesso" />

									<label class="toggle toggle_todos" for="todos_banner-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="banner-acesso" id="menu_banner-acesso" />

									<label class="toggle toggle_menu" for="menu_banner-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="banner-acesso" id="inserir_banner-acesso" />

									<label class="toggle toggle_inserir" for="inserir_banner-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="banner-acesso" id="alterar_banner-acesso" />

									<label class="toggle toggle_alterar" for="alterar_banner-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="banner-acesso" id="excluir_banner-acesso" />

									<label class="toggle toggle_excluir" for="excluir_banner-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="banner-acesso" id="procurar_banner-acesso" />

									<label class="toggle toggle_procurar" for="procurar_banner-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="banner-acesso" id="pdf_banner-acesso" />

									<label class="toggle toggle_pdf" for="pdf_banner-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="banner-acesso" id="xls_banner-acesso" />

									<label class="toggle toggle_xls" for="xls_banner-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Conteúdo</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="conteúdo-acesso" id="todos_conteúdo-acesso" />

									<label class="toggle toggle_todos" for="todos_conteúdo-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="conteúdo-acesso" id="menu_conteúdo-acesso" />

									<label class="toggle toggle_menu" for="menu_conteúdo-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="conteúdo-acesso" id="inserir_conteúdo-acesso" />

									<label class="toggle toggle_inserir" for="inserir_conteúdo-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="conteúdo-acesso" id="alterar_conteúdo-acesso" />

									<label class="toggle toggle_alterar" for="alterar_conteúdo-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="conteúdo-acesso" id="excluir_conteúdo-acesso" />

									<label class="toggle toggle_excluir" for="excluir_conteúdo-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="conteúdo-acesso" id="procurar_conteúdo-acesso" />

									<label class="toggle toggle_procurar" for="procurar_conteúdo-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="conteúdo-acesso" id="pdf_conteúdo-acesso" />

									<label class="toggle toggle_pdf" for="pdf_conteúdo-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="conteúdo-acesso" id="xls_conteúdo-acesso" />

									<label class="toggle toggle_xls" for="xls_conteúdo-acesso">Xls</label>

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label class="checkando" for="nome-cadastro">Layout Site</label>

								</div>

							</div>



							<div class="col-md-8">

								<div class="form-group">

									<input type="checkbox" class="switch switch_todos" name="layout-acesso" id="todos_layout-acesso" />

									<label class="toggle toggle_todos" for="todos_layout-acesso">Todos</label>



									<input type="checkbox" class="switch switch_menu" name="layout-acesso" id="menu_layout-acesso" />

									<label class="toggle toggle_menu" for="menu_layout-acesso">Menu</label>



									<input type="checkbox" class="switch switch_inserir" name="layout-acesso" id="inserir_layout-acesso" />

									<label class="toggle toggle_inserir" for="inserir_layout-acesso">Inserir</label>



									<input type="checkbox" class="switch switch_alterar" name="layout-acesso" id="alterar_layout-acesso" />

									<label class="toggle toggle_alterar" for="alterar_layout-acesso">Alterar</label>



									<input type="checkbox" class="switch switch_excluir" name="layout-acesso" id="excluir_layout-acesso" />

									<label class="toggle toggle_excluir" for="excluir_layout-acesso">Excluir</label>



									<input type="checkbox" class="switch switch_procurar" name="layout-acesso" id="procurar_layout-acesso" />

									<label class="toggle toggle_procurar" for="procurar_layout-acesso">Procurar</label>



									<input type="checkbox" class="switch switch_pdf" name="layout-acesso" id="pdf_layout-acesso" />

									<label class="toggle toggle_pdf" for="pdf_layout-acesso">Pdf</label>



									<input type="checkbox" class="switch switch_xls" name="layout-acesso" id="xls_layout-acesso" />

									<label class="toggle toggle_xls" for="xls_layout-acesso">Xls</label>

								</div>

							</div>

						</div>

					</div>

				</div>



				<button class="btn btn-primary">Salvar</button>

			</div>

		</div>

	</div>



	<div class="tab-pane fade" id="acesso_portal" role="tabpanel" aria-labelledby="acesso_portal-tab">

		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Altere as permissões</h4>

				<h5 class="card-subtitle">Selecione uma seção para exibir as respectivas permissões.</h5>



				<div class="form-group">

					<label for="perfil-acesso">Perfil</label>

					<select disabled class="custom-select form-control" id="perfil-acesso">

						<option>Não existem perfis cadastrados.</option>

					</select>

				</div>



				<div id="acessos_portal-container" class="collapse show">

					<div class="row">

						<div class="col-md-4">

							<div class="form-group">

								<label class="checkando" for="nome-cadastro">Permissões do portal</label>

							</div>

						</div>

						<div class="col-md-8">

							<div class="form-group">

								<input type="checkbox" class="switch switch_todos_main" id="todos_main-portal_acesso" />

								<label class="toggle toggle_todos" for="todos_main-portal_acesso">Todos</label>



								<input type="checkbox" class="switch switch_menu_main" id="menu_main-portal_acesso" />

								<label class="toggle toggle_menu" for="menu_main-portal_acesso">Menu</label>



								<input type="checkbox" class="switch switch_inserir_main" id="inserir_main-portal_acesso" />

								<label class="toggle toggle_inserir" for="inserir_main-portal_acesso">Inserir</label>



								<input type="checkbox" class="switch switch_alterar_main" id="alterar_main-portal_acesso" />

								<label class="toggle toggle_alterar" for="alterar_main-portal_acesso">Alterar</label>



								<input type="checkbox" class="switch switch_excluir_main" id="excluir_main-portal_acesso" />

								<label class="toggle toggle_excluir" for="excluir_main-portal_acesso">Excluir</label>



								<input type="checkbox" class="switch switch_procurar_main" id="procurar_main-portal_acesso" />

								<label class="toggle toggle_procurar" for="procurar_main-portal_acesso">Procurar</label>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-4">

							<div class="form-group">

								<label class="checkando" for="nome-cadastro">Segunda via boleto</label>

							</div>

						</div>



						<div class="col-md-8">

							<div class="form-group">

								<input type="checkbox" class="switch switch_todos" name="segunda_via-portal_acesso" id="todos_segunda_via-portal_acesso" />

								<label class="toggle toggle_todos" for="todos_segunda_via-portal_acesso">Todos</label>



								<input type="checkbox" class="switch switch_menu" name="segunda_via-portal_acesso" id="menu_segunda_via-portal_acesso" />

								<label class="toggle toggle_menu" for="menu_segunda_via-portal_acesso">Menu</label>



								<input type="checkbox" class="switch switch_inserir" name="segunda_via-portal_acesso" id="inserir_segunda_via-portal_acesso" />

								<label class="toggle toggle_inserir" for="inserir_segunda_via-portal_acesso">Inserir</label>



								<input type="checkbox" class="switch switch_alterar" name="segunda_via-portal_acesso" id="alterar_segunda_via-portal_acesso" />

								<label class="toggle toggle_alterar" for="alterar_segunda_via-portal_acesso">Alterar</label>



								<input type="checkbox" class="switch switch_excluir" name="segunda_via-portal_acesso" id="excluir_segunda_via-portal_acesso" />

								<label class="toggle toggle_excluir" for="excluir_segunda_via-portal_acesso">Excluir</label>



								<input type="checkbox" class="switch switch_procurar" name="segunda_via-portal_acesso" id="procurar_segunda_via-portal_acesso" />

								<label class="toggle toggle_procurar" for="procurar_segunda_via-portal_acesso">Procurar</label>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-4">

							<div class="form-group">

								<label class="checkando" for="nome-cadastro">Abrir classificado</label>

							</div>

						</div>



						<div class="col-md-8">

							<div class="form-group">

								<input type="checkbox" class="switch switch_todos" name="abrir_classificado-portal_acesso" id="todos_abrir_classificado-portal_acesso" />

								<label class="toggle toggle_todos" for="todos_abrir_classificado-portal_acesso">Todos</label>



								<input type="checkbox" class="switch switch_menu" name="abrir_classificado-portal_acesso" id="menu_abrir_classificado-portal_acesso" />

								<label class="toggle toggle_menu" for="menu_abrir_classificado-portal_acesso">Menu</label>



								<input type="checkbox" class="switch switch_inserir" name="abrir_classificado-portal_acesso" id="inserir_abrir_classificado-portal_acesso" />

								<label class="toggle toggle_inserir" for="inserir_abrir_classificado-portal_acesso">Inserir</label>



								<input type="checkbox" class="switch switch_alterar" name="abrir_classificado-portal_acesso" id="alterar_abrir_classificado-portal_acesso" />

								<label class="toggle toggle_alterar" for="alterar_abrir_classificado-portal_acesso">Alterar</label>



								<input type="checkbox" class="switch switch_excluir" name="abrir_classificado-portal_acesso" id="excluir_abrir_classificado-portal_acesso" />

								<label class="toggle toggle_excluir" for="excluir_abrir_classificado-portal_acesso">Excluir</label>



								<input type="checkbox" class="switch switch_procurar" name="abrir_classificado-portal_acesso" id="procurar_abrir_classificado-portal_acesso" />

								<label class="toggle toggle_procurar" for="procurar_abrir_classificado-portal_acesso">Procurar</label>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-4">

							<div class="form-group">

								<label class="checkando" for="nome-cadastro">Achados e perdidos</label>

							</div>

						</div>



						<div class="col-md-8">

							<div class="form-group">

								<input type="checkbox" class="switch switch_todos" name="achados_perdidos-portal_acesso" id="todos_achados_perdidos-portal_acesso" />

								<label class="toggle toggle_todos" for="todos_achados_perdidos-portal_acesso">Todos</label>



								<input type="checkbox" class="switch switch_menu" name="achados_perdidos-portal_acesso" id="menu_achados_perdidos-portal_acesso" />

								<label class="toggle toggle_menu" for="menu_achados_perdidos-portal_acesso">Menu</label>



								<input type="checkbox" class="switch switch_inserir" name="achados_perdidos-portal_acesso" id="inserir_achados_perdidos-portal_acesso" />

								<label class="toggle toggle_inserir" for="inserir_achados_perdidos-portal_acesso">Inserir</label>



								<input type="checkbox" class="switch switch_alterar" name="achados_perdidos-portal_acesso" id="alterar_achados_perdidos-portal_acesso" />

								<label class="toggle toggle_alterar" for="alterar_achados_perdidos-portal_acesso">Alterar</label>



								<input type="checkbox" class="switch switch_excluir" name="achados_perdidos-portal_acesso" id="excluir_achados_perdidos-portal_acesso" />

								<label class="toggle toggle_excluir" for="excluir_achados_perdidos-portal_acesso">Excluir</label>



								<input type="checkbox" class="switch switch_procurar" name="achados_perdidos-portal_acesso" id="procurar_achados_perdidos-portal_acesso" />

								<label class="toggle toggle_procurar" for="procurar_achados_perdidos-portal_acesso">Procurar</label>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-4">

							<div class="form-group">

								<label class="checkando" for="nome-cadastro">Assembléia Virtual</label>

							</div>

						</div>



						<div class="col-md-8">

							<div class="form-group">

								<input type="checkbox" class="switch switch_todos" name="assembleia-portal_acesso" id="todos_assembleia-portal_acesso" />

								<label class="toggle toggle_todos" for="todos_assembleia-portal_acesso">Todos</label>



								<input type="checkbox" class="switch switch_menu" name="assembleia-portal_acesso" id="menu_assembleia-portal_acesso" />

								<label class="toggle toggle_menu" for="menu_assembleia-portal_acesso">Menu</label>



								<input type="checkbox" class="switch switch_inserir" name="assembleia-portal_acesso" id="inserir_assembleia-portal_acesso" />

								<label class="toggle toggle_inserir" for="inserir_assembleia-portal_acesso">Inserir</label>



								<input type="checkbox" class="switch switch_alterar" name="assembleia-portal_acesso" id="alterar_assembleia-portal_acesso" />

								<label class="toggle toggle_alterar" for="alterar_assembleia-portal_acesso">Alterar</label>



								<input type="checkbox" class="switch switch_excluir" name="assembleia-portal_acesso" id="excluir_assembleia-portal_acesso" />

								<label class="toggle toggle_excluir" for="excluir_assembleia-portal_acesso">Excluir</label>



								<input type="checkbox" class="switch switch_procurar" name="assembleia-portal_acesso" id="procurar_assembleia-portal_acesso" />

								<label class="toggle toggle_procurar" for="procurar_assembleia-portal_acesso">Procurar</label>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-4">

							<div class="form-group">

								<label class="checkando" for="nome-cadastro">Classificados fornecedores</label>

							</div>

						</div>



						<div class="col-md-8">

							<div class="form-group">

								<input type="checkbox" class="switch switch_todos" name="classificados_fornecedores-portal_acesso" id="todos_classificados_fornecedores-portal_acesso" />

								<label class="toggle toggle_todos" for="todos_classificados_fornecedores-portal_acesso">Todos</label>



								<input type="checkbox" class="switch switch_menu" name="classificados_fornecedores-portal_acesso" id="menu_classificados_fornecedores-portal_acesso" />

								<label class="toggle toggle_menu" for="menu_classificados_fornecedores-portal_acesso">Menu</label>



								<input type="checkbox" class="switch switch_inserir" name="classificados_fornecedores-portal_acesso" id="inserir_classificados_fornecedores-portal_acesso" />

								<label class="toggle toggle_inserir" for="inserir_classificados_fornecedores-portal_acesso">Inserir</label>



								<input type="checkbox" class="switch switch_alterar" name="classificados_fornecedores-portal_acesso" id="alterar_classificados_fornecedores-portal_acesso" />

								<label class="toggle toggle_alterar" for="alterar_classificados_fornecedores-portal_acesso">Alterar</label>



								<input type="checkbox" class="switch switch_excluir" name="classificados_fornecedores-portal_acesso" id="excluir_classificados_fornecedores-portal_acesso" />

								<label class="toggle toggle_excluir" for="excluir_classificados_fornecedores-portal_acesso">Excluir</label>



								<input type="checkbox" class="switch switch_procurar" name="classificados_fornecedores-portal_acesso" id="procurar_classificados_fornecedores-portal_acesso" />

								<label class="toggle toggle_procurar" for="procurar_classificados_fornecedores-portal_acesso">Procurar</label>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-4">

							<div class="form-group">

								<label class="checkando" for="nome-cadastro">Classificados moradores</label>

							</div>

						</div>



						<div class="col-md-8">

							<div class="form-group">

								<input type="checkbox" class="switch switch_todos" name="classificados_moradores-portal_acesso" id="todos_classificados_moradores-portal_acesso" />

								<label class="toggle toggle_todos" for="todos_classificados_moradores-portal_acesso">Todos</label>



								<input type="checkbox" class="switch switch_menu" name="classificados_moradores-portal_acesso" id="menu_classificados_moradores-portal_acesso" />

								<label class="toggle toggle_menu" for="menu_classificados_moradores-portal_acesso">Menu</label>



								<input type="checkbox" class="switch switch_inserir" name="classificados_moradores-portal_acesso" id="inserir_classificados_moradores-portal_acesso" />

								<label class="toggle toggle_inserir" for="inserir_classificados_moradores-portal_acesso">Inserir</label>



								<input type="checkbox" class="switch switch_alterar" name="classificados_moradores-portal_acesso" id="alterar_classificados_moradores-portal_acesso" />

								<label class="toggle toggle_alterar" for="alterar_classificados_moradores-portal_acesso">Alterar</label>



								<input type="checkbox" class="switch switch_excluir" name="classificados_moradores-portal_acesso" id="excluir_classificados_moradores-portal_acesso" />

								<label class="toggle toggle_excluir" for="excluir_classificados_moradores-portal_acesso">Excluir</label>



								<input type="checkbox" class="switch switch_procurar" name="classificados_moradores-portal_acesso" id="procurar_classificados_moradores-portal_acesso" />

								<label class="toggle toggle_procurar" for="procurar_classificados_moradores-portal_acesso">Procurar</label>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-4">

							<div class="form-group">

								<label class="checkando" for="nome-cadastro">Consumo de água</label>

							</div>

						</div>



						<div class="col-md-8">

							<div class="form-group">

								<input type="checkbox" class="switch switch_todos" name="consumo_agua-portal_acesso" id="todos_consumo_agua-portal_acesso" />

								<label class="toggle toggle_todos" for="todos_consumo_agua-portal_acesso">Todos</label>



								<input type="checkbox" class="switch switch_menu" name="consumo_agua-portal_acesso" id="menu_consumo_agua-portal_acesso" />

								<label class="toggle toggle_menu" for="menu_consumo_agua-portal_acesso">Menu</label>



								<input type="checkbox" class="switch switch_inserir" name="consumo_agua-portal_acesso" id="inserir_consumo_agua-portal_acesso" />

								<label class="toggle toggle_inserir" for="inserir_consumo_agua-portal_acesso">Inserir</label>



								<input type="checkbox" class="switch switch_alterar" name="consumo_agua-portal_acesso" id="alterar_consumo_agua-portal_acesso" />

								<label class="toggle toggle_alterar" for="alterar_consumo_agua-portal_acesso">Alterar</label>



								<input type="checkbox" class="switch switch_excluir" name="consumo_agua-portal_acesso" id="excluir_consumo_agua-portal_acesso" />

								<label class="toggle toggle_excluir" for="excluir_consumo_agua-portal_acesso">Excluir</label>



								<input type="checkbox" class="switch switch_procurar" name="consumo_agua-portal_acesso" id="procurar_consumo_agua-portal_acesso" />

								<label class="toggle toggle_procurar" for="procurar_consumo_agua-portal_acesso">Procurar</label>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-4">

							<div class="form-group">

								<label class="checkando" for="nome-cadastro">Contato administração</label>

							</div>

						</div>



						<div class="col-md-8">

							<div class="form-group">

								<input type="checkbox" class="switch switch_todos" name="contato_adm-portal_acesso" id="todos_contato_adm-portal_acesso" />

								<label class="toggle toggle_todos" for="todos_contato_adm-portal_acesso">Todos</label>



								<input type="checkbox" class="switch switch_menu" name="contato_adm-portal_acesso" id="menu_contato_adm-portal_acesso" />

								<label class="toggle toggle_menu" for="menu_contato_adm-portal_acesso">Menu</label>



								<input type="checkbox" class="switch switch_inserir" name="contato_adm-portal_acesso" id="inserir_contato_adm-portal_acesso" />

								<label class="toggle toggle_inserir" for="inserir_contato_adm-portal_acesso">Inserir</label>



								<input type="checkbox" class="switch switch_alterar" name="contato_adm-portal_acesso" id="alterar_contato_adm-portal_acesso" />

								<label class="toggle toggle_alterar" for="alterar_contato_adm-portal_acesso">Alterar</label>



								<input type="checkbox" class="switch switch_excluir" name="contato_adm-portal_acesso" id="excluir_contato_adm-portal_acesso" />

								<label class="toggle toggle_excluir" for="excluir_contato_adm-portal_acesso">Excluir</label>



								<input type="checkbox" class="switch switch_procurar" name="contato_adm-portal_acesso" id="procurar_contato_adm-portal_acesso" />

								<label class="toggle toggle_procurar" for="procurar_contato_adm-portal_acesso">Procurar</label>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-4">

							<div class="form-group">

								<label class="checkando" for="nome-cadastro">Correspondência</label>

							</div>

						</div>



						<div class="col-md-8">

							<div class="form-group">

								<input type="checkbox" class="switch switch_todos" name="correspondencia-portal_acesso" id="todos_correspondencia-portal_acesso" />

								<label class="toggle toggle_todos" for="todos_correspondencia-portal_acesso">Todos</label>



								<input type="checkbox" class="switch switch_menu" name="correspondencia-portal_acesso" id="menu_correspondencia-portal_acesso" />

								<label class="toggle toggle_menu" for="menu_correspondencia-portal_acesso">Menu</label>



								<input type="checkbox" class="switch switch_inserir" name="correspondencia-portal_acesso" id="inserir_correspondencia-portal_acesso" />

								<label class="toggle toggle_inserir" for="inserir_correspondencia-portal_acesso">Inserir</label>



								<input type="checkbox" class="switch switch_alterar" name="correspondencia-portal_acesso" id="alterar_correspondencia-portal_acesso" />

								<label class="toggle toggle_alterar" for="alterar_correspondencia-portal_acesso">Alterar</label>



								<input type="checkbox" class="switch switch_excluir" name="correspondencia-portal_acesso" id="excluir_correspondencia-portal_acesso" />

								<label class="toggle toggle_excluir" for="excluir_correspondencia-portal_acesso">Excluir</label>



								<input type="checkbox" class="switch switch_procurar" name="correspondencia-portal_acesso" id="procurar_correspondencia-portal_acesso" />

								<label class="toggle toggle_procurar" for="procurar_correspondencia-portal_acesso">Procurar</label>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-4">

							<div class="form-group">

								<label class="checkando" for="nome-cadastro">Documentos/Atas</label>

							</div>

						</div>



						<div class="col-md-8">

							<div class="form-group">

								<input type="checkbox" class="switch switch_todos" name="documentos-portal_acesso" id="todos_documentos-portal_acesso" />

								<label class="toggle toggle_todos" for="todos_documentos-portal_acesso">Todos</label>



								<input type="checkbox" class="switch switch_menu" name="documentos-portal_acesso" id="menu_documentos-portal_acesso" />

								<label class="toggle toggle_menu" for="menu_documentos-portal_acesso">Menu</label>



								<input type="checkbox" class="switch switch_inserir" name="documentos-portal_acesso" id="inserir_documentos-portal_acesso" />

								<label class="toggle toggle_inserir" for="inserir_documentos-portal_acesso">Inserir</label>



								<input type="checkbox" class="switch switch_alterar" name="documentos-portal_acesso" id="alterar_documentos-portal_acesso" />

								<label class="toggle toggle_alterar" for="alterar_documentos-portal_acesso">Alterar</label>



								<input type="checkbox" class="switch switch_excluir" name="documentos-portal_acesso" id="excluir_documentos-portal_acesso" />

								<label class="toggle toggle_excluir" for="excluir_documentos-portal_acesso">Excluir</label>



								<input type="checkbox" class="switch switch_procurar" name="documentos-portal_acesso" id="procurar_documentos-portal_acesso" />

								<label class="toggle toggle_procurar" for="procurar_documentos-portal_acesso">Procurar</label>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-4">

							<div class="form-group">

								<label class="checkando" for="nome-cadastro">Enquete / Pesquisas</label>

							</div>

						</div>



						<div class="col-md-8">

							<div class="form-group">

								<input type="checkbox" class="switch switch_todos" name="enquete-portal_acesso" id="todos_enquete-portal_acesso" />

								<label class="toggle toggle_todos" for="todos_enquete-portal_acesso">Todos</label>



								<input type="checkbox" class="switch switch_menu" name="enquete-portal_acesso" id="menu_enquete-portal_acesso" />

								<label class="toggle toggle_menu" for="menu_enquete-portal_acesso">Menu</label>



								<input type="checkbox" class="switch switch_inserir" name="enquete-portal_acesso" id="inserir_enquete-portal_acesso" />

								<label class="toggle toggle_inserir" for="inserir_enquete-portal_acesso">Inserir</label>



								<input type="checkbox" class="switch switch_alterar" name="enquete-portal_acesso" id="alterar_enquete-portal_acesso" />

								<label class="toggle toggle_alterar" for="alterar_enquete-portal_acesso">Alterar</label>



								<input type="checkbox" class="switch switch_excluir" name="enquete-portal_acesso" id="excluir_enquete-portal_acesso" />

								<label class="toggle toggle_excluir" for="excluir_enquete-portal_acesso">Excluir</label>



								<input type="checkbox" class="switch switch_procurar" name="enquete-portal_acesso" id="procurar_enquete-portal_acesso" />

								<label class="toggle toggle_procurar" for="procurar_enquete-portal_acesso">Procurar</label>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-4">

							<div class="form-group">

								<label class="checkando" for="nome-cadastro">Fórum morador</label>

							</div>

						</div>



						<div class="col-md-8">

							<div class="form-group">

								<input type="checkbox" class="switch switch_todos" name="forum-portal_acesso" id="todos_forum-portal_acesso" />

								<label class="toggle toggle_todos" for="todos_forum-portal_acesso">Todos</label>



								<input type="checkbox" class="switch switch_menu" name="forum-portal_acesso" id="menu_forum-portal_acesso" />

								<label class="toggle toggle_menu" for="menu_forum-portal_acesso">Menu</label>



								<input type="checkbox" class="switch switch_inserir" name="forum-portal_acesso" id="inserir_forum-portal_acesso" />

								<label class="toggle toggle_inserir" for="inserir_forum-portal_acesso">Inserir</label>



								<input type="checkbox" class="switch switch_alterar" name="forum-portal_acesso" id="alterar_forum-portal_acesso" />

								<label class="toggle toggle_alterar" for="alterar_forum-portal_acesso">Alterar</label>



								<input type="checkbox" class="switch switch_excluir" name="forum-portal_acesso" id="excluir_forum-portal_acesso" />

								<label class="toggle toggle_excluir" for="excluir_forum-portal_acesso">Excluir</label>



								<input type="checkbox" class="switch switch_procurar" name="forum-portal_acesso" id="procurar_forum-portal_acesso" />

								<label class="toggle toggle_procurar" for="procurar_forum-portal_acesso">Procurar</label>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-4">

							<div class="form-group">

								<label class="checkando" for="nome-cadastro">Informativo do condomínio</label>

							</div>

						</div>



						<div class="col-md-8">

							<div class="form-group">

								<input type="checkbox" class="switch switch_todos" name="informativo-portal_acesso" id="todos_informativo-portal_acesso" />

								<label class="toggle toggle_todos" for="todos_informativo-portal_acesso">Todos</label>



								<input type="checkbox" class="switch switch_menu" name="informativo-portal_acesso" id="menu_informativo-portal_acesso" />

								<label class="toggle toggle_menu" for="menu_informativo-portal_acesso">Menu</label>



								<input type="checkbox" class="switch switch_inserir" name="informativo-portal_acesso" id="inserir_informativo-portal_acesso" />

								<label class="toggle toggle_inserir" for="inserir_informativo-portal_acesso">Inserir</label>



								<input type="checkbox" class="switch switch_alterar" name="informativo-portal_acesso" id="alterar_informativo-portal_acesso" />

								<label class="toggle toggle_alterar" for="alterar_informativo-portal_acesso">Alterar</label>



								<input type="checkbox" class="switch switch_excluir" name="informativo-portal_acesso" id="excluir_informativo-portal_acesso" />

								<label class="toggle toggle_excluir" for="excluir_informativo-portal_acesso">Excluir</label>



								<input type="checkbox" class="switch switch_procurar" name="informativo-portal_acesso" id="procurar_informativo-portal_acesso" />

								<label class="toggle toggle_procurar" for="procurar_informativo-portal_acesso">Procurar</label>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-4">

							<div class="form-group">

								<label class="checkando" for="nome-cadastro">Leitura de notícias</label>

							</div>

						</div>



						<div class="col-md-8">

							<div class="form-group">

								<input type="checkbox" class="switch switch_todos" name="leitura_noticias-portal_acesso" id="todos_leitura_noticias-portal_acesso" />

								<label class="toggle toggle_todos" for="todos_leitura_noticias-portal_acesso">Todos</label>



								<input type="checkbox" class="switch switch_menu" name="leitura_noticias-portal_acesso" id="menu_leitura_noticias-portal_acesso" />

								<label class="toggle toggle_menu" for="menu_leitura_noticias-portal_acesso">Menu</label>



								<input type="checkbox" class="switch switch_inserir" name="leitura_noticias-portal_acesso" id="inserir_leitura_noticias-portal_acesso" />

								<label class="toggle toggle_inserir" for="inserir_leitura_noticias-portal_acesso">Inserir</label>



								<input type="checkbox" class="switch switch_alterar" name="leitura_noticias-portal_acesso" id="alterar_leitura_noticias-portal_acesso" />

								<label class="toggle toggle_alterar" for="alterar_leitura_noticias-portal_acesso">Alterar</label>



								<input type="checkbox" class="switch switch_excluir" name="leitura_noticias-portal_acesso" id="excluir_leitura_noticias-portal_acesso" />

								<label class="toggle toggle_excluir" for="excluir_leitura_noticias-portal_acesso">Excluir</label>



								<input type="checkbox" class="switch switch_procurar" name="leitura_noticias-portal_acesso" id="procurar_leitura_noticias-portal_acesso" />

								<label class="toggle toggle_procurar" for="procurar_leitura_noticias-portal_acesso">Procurar</label>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-4">

							<div class="form-group">

								<label class="checkando" for="nome-cadastro">Log de user</label>

							</div>

						</div>



						<div class="col-md-8">

							<div class="form-group">

								<input type="checkbox" class="switch switch_todos" name="log-portal_acesso" id="todos_log-portal_acesso" />

								<label class="toggle toggle_todos" for="todos_log-portal_acesso">Todos</label>



								<input type="checkbox" class="switch switch_menu" name="log-portal_acesso" id="menu_log-portal_acesso" />

								<label class="toggle toggle_menu" for="menu_log-portal_acesso">Menu</label>



								<input type="checkbox" class="switch switch_inserir" name="log-portal_acesso" id="inserir_log-portal_acesso" />

								<label class="toggle toggle_inserir" for="inserir_log-portal_acesso">Inserir</label>



								<input type="checkbox" class="switch switch_alterar" name="log-portal_acesso" id="alterar_log-portal_acesso" />

								<label class="toggle toggle_alterar" for="alterar_log-portal_acesso">Alterar</label>



								<input type="checkbox" class="switch switch_excluir" name="log-portal_acesso" id="excluir_log-portal_acesso" />

								<label class="toggle toggle_excluir" for="excluir_log-portal_acesso">Excluir</label>



								<input type="checkbox" class="switch switch_procurar" name="log-portal_acesso" id="procurar_log-portal_acesso" />

								<label class="toggle toggle_procurar" for="procurar_log-portal_acesso">Procurar</label>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-4">

							<div class="form-group">

								<label class="checkando" for="nome-cadastro">Meus animais</label>

							</div>

						</div>



						<div class="col-md-8">

							<div class="form-group">

								<input type="checkbox" class="switch switch_todos" name="meus_animais-portal_acesso" id="todos_meus_animais-portal_acesso" />

								<label class="toggle toggle_todos" for="todos_meus_animais-portal_acesso">Todos</label>



								<input type="checkbox" class="switch switch_menu" name="meus_animais-portal_acesso" id="menu_meus_animais-portal_acesso" />

								<label class="toggle toggle_menu" for="menu_meus_animais-portal_acesso">Menu</label>



								<input type="checkbox" class="switch switch_inserir" name="meus_animais-portal_acesso" id="inserir_meus_animais-portal_acesso" />

								<label class="toggle toggle_inserir" for="inserir_meus_animais-portal_acesso">Inserir</label>



								<input type="checkbox" class="switch switch_alterar" name="meus_animais-portal_acesso" id="alterar_meus_animais-portal_acesso" />

								<label class="toggle toggle_alterar" for="alterar_meus_animais-portal_acesso">Alterar</label>



								<input type="checkbox" class="switch switch_excluir" name="meus_animais-portal_acesso" id="excluir_meus_animais-portal_acesso" />

								<label class="toggle toggle_excluir" for="excluir_meus_animais-portal_acesso">Excluir</label>



								<input type="checkbox" class="switch switch_procurar" name="meus_animais-portal_acesso" id="procurar_meus_animais-portal_acesso" />

								<label class="toggle toggle_procurar" for="procurar_meus_animais-portal_acesso">Procurar</label>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-4">

							<div class="form-group">

								<label class="checkando" for="nome-cadastro">Meus visitantes</label>

							</div>

						</div>



						<div class="col-md-8">

							<div class="form-group">

								<input type="checkbox" class="switch switch_todos" name="meus_visitantes-portal_acesso" id="todos_meus_visitantes-portal_acesso" />

								<label class="toggle toggle_todos" for="todos_meus_visitantes-portal_acesso">Todos</label>



								<input type="checkbox" class="switch switch_menu" name="meus_visitantes-portal_acesso" id="menu_meus_visitantes-portal_acesso" />

								<label class="toggle toggle_menu" for="menu_meus_visitantes-portal_acesso">Menu</label>



								<input type="checkbox" class="switch switch_inserir" name="meus_visitantes-portal_acesso" id="inserir_meus_visitantes-portal_acesso" />

								<label class="toggle toggle_inserir" for="inserir_meus_visitantes-portal_acesso">Inserir</label>



								<input type="checkbox" class="switch switch_alterar" name="meus_visitantes-portal_acesso" id="alterar_meus_visitantes-portal_acesso" />

								<label class="toggle toggle_alterar" for="alterar_meus_visitantes-portal_acesso">Alterar</label>



								<input type="checkbox" class="switch switch_excluir" name="meus_visitantes-portal_acesso" id="excluir_meus_visitantes-portal_acesso" />

								<label class="toggle toggle_excluir" for="excluir_meus_visitantes-portal_acesso">Excluir</label>



								<input type="checkbox" class="switch switch_procurar" name="meus_visitantes-portal_acesso" id="procurar_meus_visitantes-portal_acesso" />

								<label class="toggle toggle_procurar" for="procurar_meus_visitantes-portal_acesso">Procurar</label>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-4">

							<div class="form-group">

								<label class="checkando" for="nome-cadastro">Minha família</label>

							</div>

						</div>



						<div class="col-md-8">

							<div class="form-group">

								<input type="checkbox" class="switch switch_todos" name="minha_familia-portal_acesso" id="todos_minha_familia-portal_acesso" />

								<label class="toggle toggle_todos" for="todos_minha_familia-portal_acesso">Todos</label>



								<input type="checkbox" class="switch switch_menu" name="minha_familia-portal_acesso" id="menu_minha_familia-portal_acesso" />

								<label class="toggle toggle_menu" for="menu_minha_familia-portal_acesso">Menu</label>



								<input type="checkbox" class="switch switch_inserir" name="minha_familia-portal_acesso" id="inserir_minha_familia-portal_acesso" />

								<label class="toggle toggle_inserir" for="inserir_minha_familia-portal_acesso">Inserir</label>



								<input type="checkbox" class="switch switch_alterar" name="minha_familia-portal_acesso" id="alterar_minha_familia-portal_acesso" />

								<label class="toggle toggle_alterar" for="alterar_minha_familia-portal_acesso">Alterar</label>



								<input type="checkbox" class="switch switch_excluir" name="minha_familia-portal_acesso" id="excluir_minha_familia-portal_acesso" />

								<label class="toggle toggle_excluir" for="excluir_minha_familia-portal_acesso">Excluir</label>



								<input type="checkbox" class="switch switch_procurar" name="minha_familia-portal_acesso" id="procurar_minha_familia-portal_acesso" />

								<label class="toggle toggle_procurar" for="procurar_minha_familia-portal_acesso">Procurar</label>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-4">

							<div class="form-group">

								<label class="checkando" for="nome-cadastro">Minhas informações</label>

							</div>

						</div>



						<div class="col-md-8">

							<div class="form-group">

								<input type="checkbox" class="switch switch_todos" name="minhas_informacoes-portal_acesso" id="todos_minhas_informacoes-portal_acesso" />

								<label class="toggle toggle_todos" for="todos_minhas_informacoes-portal_acesso">Todos</label>



								<input type="checkbox" class="switch switch_menu" name="minhas_informacoes-portal_acesso" id="menu_minhas_informacoes-portal_acesso" />

								<label class="toggle toggle_menu" for="menu_minhas_informacoes-portal_acesso">Menu</label>



								<input type="checkbox" class="switch switch_inserir" name="minhas_informacoes-portal_acesso" id="inserir_minhas_informacoes-portal_acesso" />

								<label class="toggle toggle_inserir" for="inserir_minhas_informacoes-portal_acesso">Inserir</label>



								<input type="checkbox" class="switch switch_alterar" name="minhas_informacoes-portal_acesso" id="alterar_minhas_informacoes-portal_acesso" />

								<label class="toggle toggle_alterar" for="alterar_minhas_informacoes-portal_acesso">Alterar</label>



								<input type="checkbox" class="switch switch_excluir" name="minhas_informacoes-portal_acesso" id="excluir_minhas_informacoes-portal_acesso" />

								<label class="toggle toggle_excluir" for="excluir_minhas_informacoes-portal_acesso">Excluir</label>



								<input type="checkbox" class="switch switch_procurar" name="minhas_informacoes-portal_acesso" id="procurar_minhas_informacoes-portal_acesso" />

								<label class="toggle toggle_procurar" for="procurar_minhas_informacoes-portal_acesso">Procurar</label>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-4">

							<div class="form-group">

								<label class="checkando" for="nome-cadastro">Minhas mensagens</label>

							</div>

						</div>



						<div class="col-md-8">

							<div class="form-group">

								<input type="checkbox" class="switch switch_todos" name="minhas_mensagens-portal_acesso" id="todos_minhas_mensagens-portal_acesso" />

								<label class="toggle toggle_todos" for="todos_minhas_mensagens-portal_acesso">Todos</label>



								<input type="checkbox" class="switch switch_menu" name="minhas_mensagens-portal_acesso" id="menu_minhas_mensagens-portal_acesso" />

								<label class="toggle toggle_menu" for="menu_minhas_mensagens-portal_acesso">Menu</label>



								<input type="checkbox" class="switch switch_inserir" name="minhas_mensagens-portal_acesso" id="inserir_minhas_mensagens-portal_acesso" />

								<label class="toggle toggle_inserir" for="inserir_minhas_mensagens-portal_acesso">Inserir</label>



								<input type="checkbox" class="switch switch_alterar" name="minhas_mensagens-portal_acesso" id="alterar_minhas_mensagens-portal_acesso" />

								<label class="toggle toggle_alterar" for="alterar_minhas_mensagens-portal_acesso">Alterar</label>



								<input type="checkbox" class="switch switch_excluir" name="minhas_mensagens-portal_acesso" id="excluir_minhas_mensagens-portal_acesso" />

								<label class="toggle toggle_excluir" for="excluir_minhas_mensagens-portal_acesso">Excluir</label>



								<input type="checkbox" class="switch switch_procurar" name="minhas_mensagens-portal_acesso" id="procurar_minhas_mensagens-portal_acesso" />

								<label class="toggle toggle_procurar" for="procurar_minhas_mensagens-portal_acesso">Procurar</label>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-4">

							<div class="form-group">

								<label class="checkando" for="nome-cadastro">Mudança</label>

							</div>

						</div>



						<div class="col-md-8">

							<div class="form-group">

								<input type="checkbox" class="switch switch_todos" name="mudanca-portal_acesso" id="todos_mudanca-portal_acesso" />

								<label class="toggle toggle_todos" for="todos_mudanca-portal_acesso">Todos</label>



								<input type="checkbox" class="switch switch_menu" name="mudanca-portal_acesso" id="menu_mudanca-portal_acesso" />

								<label class="toggle toggle_menu" for="menu_mudanca-portal_acesso">Menu</label>



								<input type="checkbox" class="switch switch_inserir" name="mudanca-portal_acesso" id="inserir_mudanca-portal_acesso" />

								<label class="toggle toggle_inserir" for="inserir_mudanca-portal_acesso">Inserir</label>



								<input type="checkbox" class="switch switch_alterar" name="mudanca-portal_acesso" id="alterar_mudanca-portal_acesso" />

								<label class="toggle toggle_alterar" for="alterar_mudanca-portal_acesso">Alterar</label>



								<input type="checkbox" class="switch switch_excluir" name="mudanca-portal_acesso" id="excluir_mudanca-portal_acesso" />

								<label class="toggle toggle_excluir" for="excluir_mudanca-portal_acesso">Excluir</label>



								<input type="checkbox" class="switch switch_procurar" name="mudanca-portal_acesso" id="procurar_mudanca-portal_acesso" />

								<label class="toggle toggle_procurar" for="procurar_mudanca-portal_acesso">Procurar</label>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-4">

							<div class="form-group">

								<label class="checkando" for="nome-cadastro">Ouvidoria</label>

							</div>

						</div>



						<div class="col-md-8">

							<div class="form-group">

								<input type="checkbox" class="switch switch_todos" name="ouvidoria-portal_acesso" id="todos_ouvidoria-portal_acesso" />

								<label class="toggle toggle_todos" for="todos_ouvidoria-portal_acesso">Todos</label>



								<input type="checkbox" class="switch switch_menu" name="ouvidoria-portal_acesso" id="menu_ouvidoria-portal_acesso" />

								<label class="toggle toggle_menu" for="menu_ouvidoria-portal_acesso">Menu</label>



								<input type="checkbox" class="switch switch_inserir" name="ouvidoria-portal_acesso" id="inserir_ouvidoria-portal_acesso" />

								<label class="toggle toggle_inserir" for="inserir_ouvidoria-portal_acesso">Inserir</label>



								<input type="checkbox" class="switch switch_alterar" name="ouvidoria-portal_acesso" id="alterar_ouvidoria-portal_acesso" />

								<label class="toggle toggle_alterar" for="alterar_ouvidoria-portal_acesso">Alterar</label>



								<input type="checkbox" class="switch switch_excluir" name="ouvidoria-portal_acesso" id="excluir_ouvidoria-portal_acesso" />

								<label class="toggle toggle_excluir" for="excluir_ouvidoria-portal_acesso">Excluir</label>



								<input type="checkbox" class="switch switch_procurar" name="ouvidoria-portal_acesso" id="procurar_ouvidoria-portal_acesso" />

								<label class="toggle toggle_procurar" for="procurar_ouvidoria-portal_acesso">Procurar</label>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-4">

							<div class="form-group">

								<label class="checkando" for="nome-cadastro">Quadro de avisos</label>

							</div>

						</div>



						<div class="col-md-8">

							<div class="form-group">

								<input type="checkbox" class="switch switch_todos" name="quadro_avisos-portal_acesso" id="todos_quadro_avisos-portal_acesso" />

								<label class="toggle toggle_todos" for="todos_quadro_avisos-portal_acesso">Todos</label>



								<input type="checkbox" class="switch switch_menu" name="quadro_avisos-portal_acesso" id="menu_quadro_avisos-portal_acesso" />

								<label class="toggle toggle_menu" for="menu_quadro_avisos-portal_acesso">Menu</label>



								<input type="checkbox" class="switch switch_inserir" name="quadro_avisos-portal_acesso" id="inserir_quadro_avisos-portal_acesso" />

								<label class="toggle toggle_inserir" for="inserir_quadro_avisos-portal_acesso">Inserir</label>



								<input type="checkbox" class="switch switch_alterar" name="quadro_avisos-portal_acesso" id="alterar_quadro_avisos-portal_acesso" />

								<label class="toggle toggle_alterar" for="alterar_quadro_avisos-portal_acesso">Alterar</label>



								<input type="checkbox" class="switch switch_excluir" name="quadro_avisos-portal_acesso" id="excluir_quadro_avisos-portal_acesso" />

								<label class="toggle toggle_excluir" for="excluir_quadro_avisos-portal_acesso">Excluir</label>



								<input type="checkbox" class="switch switch_procurar" name="quadro_avisos-portal_acesso" id="procurar_quadro_avisos-portal_acesso" />

								<label class="toggle toggle_procurar" for="procurar_quadro_avisos-portal_acesso">Procurar</label>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-4">

							<div class="form-group">

								<label class="checkando" for="nome-cadastro">Ranking de tênis</label>

							</div>

						</div>



						<div class="col-md-8">

							<div class="form-group">

								<input type="checkbox" class="switch switch_todos" name="ranking_tenis" id="todos_ranking_tenis" />

								<label class="toggle toggle_todos" for="todos_ranking_tenis">Todos</label>



								<input type="checkbox" class="switch switch_menu" name="ranking_tenis" id="menu_ranking_tenis" />

								<label class="toggle toggle_menu" for="menu_ranking_tenis">Menu</label>



								<input type="checkbox" class="switch switch_inserir" name="ranking_tenis" id="inserir_ranking_tenis" />

								<label class="toggle toggle_inserir" for="inserir_ranking_tenis">Inserir</label>



								<input type="checkbox" class="switch switch_alterar" name="ranking_tenis" id="alterar_ranking_tenis" />

								<label class="toggle toggle_alterar" for="alterar_ranking_tenis">Alterar</label>



								<input type="checkbox" class="switch switch_excluir" name="ranking_tenis" id="excluir_ranking_tenis" />

								<label class="toggle toggle_excluir" for="excluir_ranking_tenis">Excluir</label>



								<input type="checkbox" class="switch switch_procurar" name="ranking_tenis" id="procurar_ranking_tenis" />

								<label class="toggle toggle_procurar" for="procurar_ranking_tenis">Procurar</label>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-4">

							<div class="form-group">

								<label class="checkando" for="nome-cadastro">Registro de ocorrências</label>

							</div>

						</div>



						<div class="col-md-8">

							<div class="form-group">

								<input type="checkbox" class="switch switch_todos" name="registro_ocorrencia-portal_acesso" id="todos_registro_ocorrencia-portal_acesso" />

								<label class="toggle toggle_todos" for="todos_registro_ocorrencia-portal_acesso">Todos</label>



								<input type="checkbox" class="switch switch_menu" name="registro_ocorrencia-portal_acesso" id="menu_registro_ocorrencia-portal_acesso" />

								<label class="toggle toggle_menu" for="menu_registro_ocorrencia-portal_acesso">Menu</label>



								<input type="checkbox" class="switch switch_inserir" name="registro_ocorrencia-portal_acesso" id="inserir_registro_ocorrencia-portal_acesso" />

								<label class="toggle toggle_inserir" for="inserir_registro_ocorrencia-portal_acesso">Inserir</label>



								<input type="checkbox" class="switch switch_alterar" name="registro_ocorrencia-portal_acesso" id="alterar_registro_ocorrencia-portal_acesso" />

								<label class="toggle toggle_alterar" for="alterar_registro_ocorrencia-portal_acesso">Alterar</label>



								<input type="checkbox" class="switch switch_excluir" name="registro_ocorrencia-portal_acesso" id="excluir_registro_ocorrencia-portal_acesso" />

								<label class="toggle toggle_excluir" for="excluir_registro_ocorrencia-portal_acesso">Excluir</label>



								<input type="checkbox" class="switch switch_procurar" name="registro_ocorrencia-portal_acesso" id="procurar_registro_ocorrencia-portal_acesso" />

								<label class="toggle toggle_procurar" for="procurar_registro_ocorrencia-portal_acesso">Procurar</label>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-4">

							<div class="form-group">

								<label class="checkando" for="nome-cadastro">Reserva de ambientes</label>

							</div>

						</div>



						<div class="col-md-8">

							<div class="form-group">

								<input type="checkbox" class="switch switch_todos" name="reserva_ambientes-portal_acesso" id="todos_reserva_ambientes-portal_acesso" />

								<label class="toggle toggle_todos" for="todos_reserva_ambientes-portal_acesso">Todos</label>



								<input type="checkbox" class="switch switch_menu" name="reserva_ambientes-portal_acesso" id="menu_reserva_ambientes-portal_acesso" />

								<label class="toggle toggle_menu" for="menu_reserva_ambientes-portal_acesso">Menu</label>



								<input type="checkbox" class="switch switch_inserir" name="reserva_ambientes-portal_acesso" id="inserir_reserva_ambientes-portal_acesso" />

								<label class="toggle toggle_inserir" for="inserir_reserva_ambientes-portal_acesso">Inserir</label>



								<input type="checkbox" class="switch switch_alterar" name="reserva_ambientes-portal_acesso" id="alterar_reserva_ambientes-portal_acesso" />

								<label class="toggle toggle_alterar" for="alterar_reserva_ambientes-portal_acesso">Alterar</label>



								<input type="checkbox" class="switch switch_excluir" name="reserva_ambientes-portal_acesso" id="excluir_reserva_ambientes-portal_acesso" />

								<label class="toggle toggle_excluir" for="excluir_reserva_ambientes-portal_acesso">Excluir</label>



								<input type="checkbox" class="switch switch_procurar" name="reserva_ambientes-portal_acesso" id="procurar_reserva_ambientes-portal_acesso" />

								<label class="toggle toggle_procurar" for="procurar_reserva_ambientes-portal_acesso">Procurar</label>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-4">

							<div class="form-group">

								<label class="checkando" for="nome-cadastro">Reserva de quadras</label>

							</div>

						</div>



						<div class="col-md-8">

							<div class="form-group">

								<input type="checkbox" class="switch switch_todos" name="reserva_quadras-portal_acesso" id="todos_reserva_quadras-portal_acesso" />

								<label class="toggle toggle_todos" for="todos_reserva_quadras-portal_acesso">Todos</label>



								<input type="checkbox" class="switch switch_menu" name="reserva_quadras-portal_acesso" id="menu_reserva_quadras-portal_acesso" />

								<label class="toggle toggle_menu" for="menu_reserva_quadras-portal_acesso">Menu</label>



								<input type="checkbox" class="switch switch_inserir" name="reserva_quadras-portal_acesso" id="inserir_reserva_quadras-portal_acesso" />

								<label class="toggle toggle_inserir" for="inserir_reserva_quadras-portal_acesso">Inserir</label>



								<input type="checkbox" class="switch switch_alterar" name="reserva_quadras-portal_acesso" id="alterar_reserva_quadras-portal_acesso" />

								<label class="toggle toggle_alterar" for="alterar_reserva_quadras-portal_acesso">Alterar</label>



								<input type="checkbox" class="switch switch_excluir" name="reserva_quadras-portal_acesso" id="excluir_reserva_quadras-portal_acesso" />

								<label class="toggle toggle_excluir" for="excluir_reserva_quadras-portal_acesso">Excluir</label>



								<input type="checkbox" class="switch switch_procurar" name="reserva_quadras-portal_acesso" id="procurar_reserva_quadras-portal_acesso" />

								<label class="toggle toggle_procurar" for="procurar_reserva_quadras-portal_acesso">Procurar</label>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-4">

							<div class="form-group">

								<label class="checkando" for="nome-cadastro">Solicitar manutenção</label>

							</div>

						</div>



						<div class="col-md-8">

							<div class="form-group">

								<input type="checkbox" class="switch switch_todos" name="manutencao" id="todos_manutencao" />

								<label class="toggle toggle_todos" for="todos_manutencao">Todos</label>



								<input type="checkbox" class="switch switch_menu" name="manutencao" id="menu_manutencao" />

								<label class="toggle toggle_menu" for="menu_manutencao">Menu</label>



								<input type="checkbox" class="switch switch_inserir" name="manutencao" id="inserir_manutencao" />

								<label class="toggle toggle_inserir" for="inserir_manutencao">Inserir</label>



								<input type="checkbox" class="switch switch_alterar" name="manutencao" id="alterar_manutencao" />

								<label class="toggle toggle_alterar" for="alterar_manutencao">Alterar</label>



								<input type="checkbox" class="switch switch_excluir" name="manutencao" id="excluir_manutencao" />

								<label class="toggle toggle_excluir" for="excluir_manutencao">Excluir</label>



								<input type="checkbox" class="switch switch_procurar" name="manutencao" id="procurar_manutencao" />

								<label class="toggle toggle_procurar" for="procurar_manutencao">Procurar</label>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-4">

							<div class="form-group">

								<label class="checkando" for="nome-cadastro">Telefones úteis</label>

							</div>

						</div>



						<div class="col-md-8">

							<div class="form-group">

								<input type="checkbox" class="switch switch_todos" name="telefones-portal_acesso" id="todos_telefones-portal_acesso" />

								<label class="toggle toggle_todos" for="todos_telefones-portal_acesso">Todos</label>



								<input type="checkbox" class="switch switch_menu" name="telefones-portal_acesso" id="menu_telefones-portal_acesso" />

								<label class="toggle toggle_menu" for="menu_telefones-portal_acesso">Menu</label>



								<input type="checkbox" class="switch switch_inserir" name="telefones-portal_acesso" id="inserir_telefones-portal_acesso" />

								<label class="toggle toggle_inserir" for="inserir_telefones-portal_acesso">Inserir</label>



								<input type="checkbox" class="switch switch_alterar" name="telefones-portal_acesso" id="alterar_telefones-portal_acesso" />

								<label class="toggle toggle_alterar" for="alterar_telefones-portal_acesso">Alterar</label>



								<input type="checkbox" class="switch switch_excluir" name="telefones-portal_acesso" id="excluir_telefones-portal_acesso" />

								<label class="toggle toggle_excluir" for="excluir_telefones-portal_acesso">Excluir</label>



								<input type="checkbox" class="switch switch_procurar" name="telefones-portal_acesso" id="procurar_telefones-portal_acesso" />

								<label class="toggle toggle_procurar" for="procurar_telefones-portal_acesso">Procurar</label>

							</div>

						</div>

					</div>

				</div>



				<button class="btn btn-primary">Salvar</button>

			</div>

		</div>

	</div>

</div>



<!-- <script src="../assets/js/uploader.js"></script> -->



<script>

	$('body').on('click', '.switch_todos_main', (e) => {

		var container = $(e.target).closest('.collapse').attr('id');



		if (!$(e.target).prop('checked')) {

			$(`#${container} .switch`).prop('checked', false);

		} else {

			$(`#${container} .switch`).prop('checked', true);

		}

	});

	$('body').on('click', '.switch_menu_main', (e) => {

		var container = $(e.target).closest('.collapse').attr('id');



		if (!$(e.target).prop('checked')) {

			$(`#${container} .switch_menu`).prop('checked', false);

		} else {

			$(`#${container} .switch_menu`).prop('checked', true);

		}

	});

	$('body').on('click', '.switch_inserir_main', (e) => {

		var container = $(e.target).closest('.collapse').attr('id');



		if (!$(e.target).prop('checked')) {

			$(`#${container} .switch_inserir`).prop('checked', false);

		} else {

			$(`#${container} .switch_inserir`).prop('checked', true);

		}

	});

	$('body').on('click', '.switch_alterar_main', (e) => {

		var container = $(e.target).closest('.collapse').attr('id');



		if (!$(e.target).prop('checked')) {

			$(`#${container} .switch_alterar`).prop('checked', false);

		} else {

			$(`#${container} .switch_alterar`).prop('checked', true);

		}

	});

	$('body').on('click', '.switch_excluir_main', (e) => {

		var container = $(e.target).closest('.collapse').attr('id');



		if (!$(e.target).prop('checked')) {

			$(`#${container} .switch_excluir`).prop('checked', false);

		} else {

			$(`#${container} .switch_excluir`).prop('checked', true);

		}

	});

	$('body').on('click', '.switch_procurar_main', (e) => {

		var container = $(e.target).closest('.collapse').attr('id');



		if (!$(e.target).prop('checked')) {

			$(`#${container} .switch_procurar`).prop('checked', false);

		} else {

			$(`#${container} .switch_procurar`).prop('checked', true);

		}

	});

	$('body').on('click', '.switch_pdf_main', (e) => {

		var container = $(e.target).closest('.collapse').attr('id');



		if (!$(e.target).prop('checked')) {

			$(`#${container} .switch_pdf`).prop('checked', false);

		} else {

			$(`#${container} .switch_pdf`).prop('checked', true);

		}

	});

	$('body').on('click', '.switch_xls_main', (e) => {

		var container = $(e.target).closest('.collapse').attr('id');



		if (!$(e.target).prop('checked')) {

			$(`#${container} .switch_xls`).prop('checked', false);

		} else {

			$(`#${container} .switch_xls`).prop('checked', true);

		}

	});

	$('body').on('click', '.switch_todos:not(.switch_todos_main)', (e) => {

		if (!$(e.target).prop('checked')) {

			$(e.target).parent().find('.switch').prop('checked', false);

		} else {

			$(e.target).parent().find('.switch').prop('checked', true);

		}

	});

</script>

