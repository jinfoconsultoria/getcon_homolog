<!-- <?php

// session_start();

// if (!isset($_SESSION['logado']) || !$_SESSION['logado'] === true) {
// 	header("location: ./?login=1");
// }

?> -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<!-- Meta tags Obrigatórias -->
	<title>GestCCon</title>
	<!-- <link rel="icon" href="https://getbootstrap.com/docs/4.1/assets/img/favicons/favicon-32x32.png" /> -->
	<meta charset="utf-8" />
	<meta name="author" content="AgenciaLMG" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css" />

	<!-- Font Awesome -->
	<!-- <link href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css" rel="stylesheet" /> -->
	<link href="assets/fontawesome/css/all.css" rel="stylesheet" />

	<link href="assets/lib/uploader/css/croppie.css" rel="stylesheet" />
	<link rel="stylesheet" href="assets/lib/simplebar/simplebar.css" />
	<link href="assets/lib/toastr/build/toastr.css" rel="stylesheet" />

	<!-- Estilos -->
	<link rel="stylesheet" href="assets/css/components.css" />
	<link rel="stylesheet" href="assets/css/estilo.css" />
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark topbar" style="display:flex;flex-direction:row;justify-content:space-between">	

		<button class="navbar-toggler" id="toggleBtn" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<a class="navbar-brand" href="javascript:void(0)">
			<img src="assets/img/logo-branca.png" class="imgLogoP" width="220px" />
			<img src="assets/img/logo-brancaFlat.png" class="imgLogoS" width="65px"/>
		</a>

		<ul class="navbar-nav " style="flex-direction:row;">
			<li class="nav-item dropdown">
				<div class="dropdown">
					<!-- <a class="nav-link trocar-condominio" href="javascript:void(0)" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-exchange-alt"></i>
					</a> -->
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<div class="border-bottom rounded-top py-3 px-4">
							<h5 class="mb-0 font-weight-medium">Notifications</h5>
						</div>
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</div>
			</li>

			<li class="nav-item">
				<div style="display:flex;flex-direction:row" >
					<p class="m-2 nome-perfil"><?= $_SESSION['nome'] ?></p>	
					<img class="imagem-perfil" src="assets/uploads/imagens/usuario/<?= $_SESSION['imagem'] ?>">
					
					
				</div>
			</li>
		</ul>
	</nav>

	

	<div id="main" >
		<nav class="col-md-2  d-md-block bg-light sidebar" style="min-width:200px;max-width:225px;">
			<div class="sidebar-sticky" style="padding-top:12px" >
				<!-- <div id="sidebar-info"> 
					<p><?= $_SESSION['nome'] ?></p>
				</div> -->
				<ul class="nav flex-column" id="menu-itens">
					<!-- Home -->
					<li class="nav-item main-nav-item">
						<a class="nav-link sem-collapse active" href="javascript:void(0)" data-folder="home" data-file="dashboard" data-title="Home">
							<i class="fad fa-home"></i>
							Home
						</a>
					</li>

					<!-- Painel Master -->
					<li class="nav-item main-nav-item">
						<a class="nav-link" data-parent="#menu-itens" data-toggle="collapse" href="#collapseMaster" role="button" aria-expanded="false" aria-controls="collapseMaster">
							<i class="fad fa-user-shield"></i>
							Painel Master
							<i class="far fa-angle-right"></i>
						</a>

						<div class="collapse" data-parent="#menu-itens" id="collapseMaster">
							<ul class="nav flex-column submenus">
								<!-- Bloqueio -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="master" data-file="bloqueio" data-title="Bloqueio"> Bloqueio </a>
								</li>

								<!-- Condomínio -->
								<!-- <li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="master" data-file="gerenciamento_condominio" data-title="Condomínios">Condomínios</a>
								</li> -->

								<!-- Configuração de condomínio -->
								<!-- <li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="master" data-file="configuracao_condominio" data-title="Configuração de condomínio"> Configuração de condomínio </a>
								</li> -->

								<!-- Configuração de acesso -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="master" data-file="configuracao_acesso" data-title="Configuração de acesso"> Configuração de acesso </a>
								</li>

								<!-- Controles de acesso -->
								<!-- <li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="master" data-file="controles" data-title="Controles de acesso"> Controles de acesso </a>
								</li> -->

								<!-- Cotações -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="master" data-file="cotacoes" data-title="Cotações"> Cotações </a>
								</li>

								<!-- Depoimentos -->
								<!-- <li class="nav-item">
										<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="master" data-file="depoimentos" data-title="Depoimentos">
											Depoimentos
										</a>
									</li> -->

								<!-- Ouvidoria -->
								<!-- <li class="nav-item">
										<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="master" data-file="ouvidoria" data-title="Ouvidoria">
											Ouvidoria
										</a>
									</li> -->

								<!-- Suporte GestCCon -->
								<!-- <li class="nav-item">
										<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="master" data-file="suporte" data-title="Suporte GestCCon">
											Suporte GestCCon
										</a>
									</li> -->
							</ul>
						</div>
					</li>

					<!-- Gerenciamento -->
					<li class="nav-item main-nav-item">
						<a class="nav-link" data-parent="#menu-itens" data-toggle="collapse" href="#collapseGerenciamento" role="button" aria-expanded="false" aria-controls="collapseGerenciamento">
							<i class="fad fa-plus-circle"></i>
							Cadastro
							<i class="far fa-angle-right"></i>
						</a>
						<div class="collapse" data-parent="#menu-itens" id="collapseGerenciamento">
							<ul class="nav flex-column submenus">
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="gerenciamento" data-file="ambiente" data-title="Ambiente"> Ambiente </a>
								</li>
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="painel/blocos" data-folder="gerenciamento" data-file="bloco" data-title="Bloco"> Blocos </a>
								</li>
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="gerenciamento" data-file="condominio" data-title="Condomínio"> Condomínio </a>
								</li>

								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="gerenciamento" data-file="fornecedor" data-title="Fornecedor"> Fornecedor </a>
								</li>

								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="gerenciamento" data-file="usuario" data-title="Usuário"> Usuário </a>
								</li>

								<!-- <li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="gerenciamento" data-file="visitante" data-title="Visitante"> Visitante </a>
								</li> -->
							</ul>
						</div>
					</li>

					<!-- Financeiro -->
					<li class="nav-item main-nav-item">
						<a class="nav-link sem-collapse" href="javascript:void(0)" data-folder="financeiro" data-file="financeiro" data-title="Financeiro">
							<i class="fad fa-credit-card"></i>
							Financeiro
						</a>

						<div class="collapse" data-parent="#menu-itens" id="collapseFinanceiro">
							<ul class="nav flex-column submenus">
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="financeiro" data-file="contas_pagar" data-title="Contas a pagar"> Contas a pagar </a>
								</li>

								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="financeiro" data-file="contas_receber" data-title="Contas a receber"> Contas a receber </a>
								</li>

								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="financeiro" data-file="fluxo_caixa" data-title="Fluxo de caixa"> Fluxo de caixa </a>
								</li>
							</ul>
						</div>
					</li>

					<!-- Relatório Geral -->
					<li class="nav-item main-nav-item">
						<a class="nav-link" data-parent="#menu-itens" data-toggle="collapse" href="#collapseRelatorio" role="button" aria-expanded="false" aria-controls="collapseRelatorio">
							<i class="fad fa-analytics"></i>
							Relatório Geral
							<i class="far fa-angle-right"></i>
						</a>
						<div class="collapse" data-parent="#menu-itens" id="collapseRelatorio">
							<ul class="nav flex-column submenus">
								<!-- Acessos -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="relatorio" data-file="acessos" data-title="Acessos"> Acessos </a>
								</li>

								<!-- Bike -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="relatorio" data-file="bike" data-title="Bike"> Bike </a>
								</li>

								<!-- Receitas da academia -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="relatorio" data-file="receita_academia" data-title="Receitas da academia"> Receitas da academia </a>
								</li>

								<!-- Relatório geral de receitas -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="relatorio" data-file="relatorio_log" data-title="Relatório de logs"> Relatório de logs </a>
								</li>

								<!-- Relatório geral -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="relatorio" data-file="relatorio_geral" data-title="Relatório geral"> Relatório geral </a>
								</li>

								<!-- Reservas -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="relatorio" data-file="reservas" data-title="Reservas"> Reservas </a>
								</li>

								<!-- Reservas canceladas -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="relatorio" data-file="reservas_canceladas" data-title="Reservas canceladas"> Reservas canceladas </a>
								</li>

								<!-- Veículo -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="relatorio" data-file="veiculo" data-title="Veículo"> Veículo </a>
								</li>
							</ul>
						</div>
					</li>

					<!-- Controles -->
					<li class="nav-item main-nav-item">
						<a class="nav-link" data-parent="#menu-itens" data-toggle="collapse" href="#collapseControle" role="button" aria-expanded="false" aria-controls="collapseControle">
							<i class="far fa-tasks"></i>
							Controles
							<i class="far fa-angle-right"></i>
						</a>
						<div class="collapse" data-parent="#menu-itens" id="collapseControle">
							<ul class="nav flex-column submenus">
								<!-- Autorização de visitante -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="controle" data-file="autorizacao_visitante" data-title="Autorização de visitante"> Autorização de visitante </a>
								</li>
								<!-- Acesso à academia -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="controle" data-file="acesso_academia" data-title="Acesso à academia"> Acesso à academia </a>
								</li>

								<!-- Achados e perdidos -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="controle" data-file="achados_perdidos" data-title="Achados e perdidos"> Achados e perdidos </a>
								</li>

								<!-- Almoxarifado -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="controle" data-file="almoxarifado" data-title="Almoxarifado"> Almoxarifado </a>
								</li>

								<!-- Assembléia virtual -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="controle" data-file="assembleia_virtual" data-title="Assembléia virtual"> Assembléia virtual </a>
								</li>

								<!-- Atestado médico -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="controle" data-file="atestado_medico" data-title="Atestado médico"> Atestado médico </a>
								</li>

								<!-- Aviso home portal -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="controle" data-file="aviso_home" data-title="Aviso home portal"> Aviso home portal </a>
								</li>

								<!-- Acesso à academia -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="controle" data-file="acesso_academia" data-title="Acesso à academia"> Acesso à academia </a>
								</li>

								<!-- Classificados do condomínio -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="controle" data-file="classificado_condominio" data-title="Classificados do condomínio"> Classificados do condomínio </a>
								</li>

								<!-- Classificados de moradores -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="controle" data-file="classificado_morador" data-title="Classificados de moradores"> Classificados de moradores </a>
								</li>

								<!-- Consumo de água -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="controle" data-file="consumo_agua" data-title="Consumo de água"> Consumo de água </a>
								</li>

								<!-- Correspondências -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="controle" data-file="correspondencia" data-title="Correspondências"> Correspondências </a>
								</li>

								<!-- Documentos e ATAs -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="controle" data-file="documento" data-title="Documentos e ATAs"> Documentos e ATAs </a>
								</li>

								<!-- Enquetes e pesquisas -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="controle" data-file="enquete" data-title="Enquetes e pesquisas"> Enquetes e pesquisas </a>
								</li>

								<!-- Espaço PET -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="controle" data-file="espaco_pet" data-title="Espaço PET"> Espaço PET </a>
								</li>

								<!-- Ficha -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="controle" data-file="ficha" data-title="Ficha"> Ficha </a>
								</li>

								<!-- Fila de email -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="controle" data-file="fila_email" data-title="Fila de email"> Fila de email </a>
								</li>

								<!-- Informativo do condomínio -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="controle" data-file="informativo" data-title="Informativo do condomínio"> Informativo do condomínio </a>
								</li>

								<!-- Lista de convidados -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="controle" data-file="lista_convidados" data-title="Lista de convidados"> Lista de convidados </a>
								</li>

								<!-- Malote -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="controle" data-file="malote" data-title="Malote"> Malote </a>
								</li>

								<!-- Manutenção -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="controle" data-file="manutencao" data-title="Manutenção"> Manutenção </a>
								</li>

								<!-- Mensagem morador -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="controle" data-file="mensagem_morador" data-title="Mensagem morador"> Mensagem morador </a>
								</li>

								<!-- Mudança -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="controle" data-file="mudanca" data-title="Mudança"> Mudança </a>
								</li>

								<!-- Patrimonial e equipamentos -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="controle" data-file="patrimonial" data-title="Patrimonial e equipamentos"> Patrimonial e equipamentos </a>
								</li>

								<!-- Pulseiras -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="controle" data-file="pulseiras" data-title="Pulseiras"> Pulseiras </a>
								</li>

								<!-- Registro de ocorrências -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="controle" data-file="registro_ocorrencia" data-title="Registro de ocorrências"> Registro de ocorrências </a>
								</li>

								<!-- Reserva de ambientes -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="controle" data-file="reserva_ambiente" data-title="Reserva de ambientes"> Reserva de ambientes </a>
								</li>

								<!-- Veículo -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="controle" data-file="veiculo" data-title="Veículo"> Veículo </a>
								</li>

								<!-- Outros serviços -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="controle" data-file="outros" data-title="Outros serviços"> Outros serviços </a>
								</li>

								<!-- Demais serviços -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="controle" data-file="demais_servicos" data-title="Demais serviços"> Demais serviços </a>
								</li>
							</ul>
						</div>
					</li>
					
					<!-- Site Portal -->
					<li class="nav-item main-nav-item">
						<a class="nav-link" data-parent="#menu-itens" data-toggle="collapse" href="#collapsePortal" role="button" aria-expanded="false" aria-controls="collapsePortal">
							<i class="fad fa-cogs"></i>
							Site Portal
							<i class="far fa-angle-right"></i>
						</a>
						<div class="collapse" data-parent="#menu-itens" id="collapsePortal">
							<ul class="nav flex-column submenus">
								<!-- Banner -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="portal" data-file="banner" data-title="Banner"> Banner </a>
								</li>

								<!-- Conteúdo -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="portal" data-file="conteudo" data-title="Conteúdo"> Conteúdo </a>
								</li>

								<!-- Layout geral -->
								<li class="nav-item">
									<a class="nav-link sub-nav-link" href="javascript:void(0)" data-folder="portal" data-file="layout" data-title="Layout geral"> Layout geral </a>
								</li>
							</ul>
						</div>
					</li>

					<!-- LOGOUT -->
					<li class="nav-item main-nav-item">
						<a class="nav-link" href="logout?token=<?= md5(session_id()); ?>">
							<i class="fas fa-sign-out-alt"></i>
							Sair
						</a>
					</li>
				</ul>
			</div>
		</nav>

		<div id="contentSideMain" style="">
			<div class="page-titles">
				<div class="row">
					<h3 id="secao-titulo" class="text-themecolor mb-0">Home</h3>
				</div>
				<div class="row">
					<ol class="breadcrumb mb-0 p-0 bg-transparent">
						<li class="breadcrumb-item" id="breadcrumb-categoria"><a href="javascript:void(0)">Home</a></li>
						<li class="breadcrumb-item d-none active" id="breadcrumb-item"></li>
					</ol>
				</div>
			</div>

			<div id="main-container"></div>
		<div>
		
	</div>

	<div class="todos-modals">
		<div id="cadastrar_apto-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="cadastrar_apto-modalLabel" style="display: none" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header modal-colored-header bg-primary">
						<button type="button" class="close ml-auto" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<h4 class="card-title">Cadastre novos apartamentos</h4>
						<h6 class="card-subtitle">Dica: você pode acrescentar mais apartamentos e cadastra-los de uma única vez.</h6>
						<div class="form-group apartamentos-div mt-4">
							<label for="#apartamento">Apartamento</label>
							<div class="input-group">
								<input type="text" class="form-control" />
								<div class="input-group-append">
									<a href="javascript:void(0)" class="add_campo-apto"><span class="input-group-text add-item">+</span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-info close-modal mr-auto" data-dismiss="modal">Listar</button>
						<button type="button" class="btn btn-light close-modal" data-dismiss="modal">Cancelar</button>
						<button type="button" class="btn btn-primary">Salvar</button>
					</div>
				</div>
			</div>
		</div>

		<div id="cadastrar_bloco-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="cadastrar_bloco-modalLabel" style="display: none" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header modal-colored-header bg-primary">
						<button type="button" class="close ml-auto" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<h4 class="card-title">Cadastre novos blocos</h4>
						<h6 class="card-subtitle">Dica: você pode acrescentar mais blocos e cadastra-los de uma única vez.</h6>
						<div class="form-group apartamentos-div mt-4">
							<label for="#apartamento">Bloco</label>
							<div class="input-group">
								<input type="text" class="form-control" />
								<div class="input-group-append">
									<a href="javascript:void(0)" class="add_campo-apto"><span class="input-group-text add-item">+</span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-info close-modal mr-auto" data-dismiss="modal">Listar</button>
						<button type="button" class="btn btn-light close-modal" data-dismiss="modal">Cancelar</button>
						<button type="button" class="btn btn-primary">Salvar</button>
					</div>
				</div>
			</div>
		</div>

		<div id="cadastrar_tipo-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="cadastrar_tipo-modalLabel" style="display: none" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header modal-colored-header bg-primary">
						<button type="button" class="close ml-auto" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<h4 class="card-title">Cadastre novo Tipo</h4>
						<div class="form-group apartamentos-div mt-4">
							<label for="#apartamento">Tipo</label>
							<div class="input-group">
								<input type="text" class="form-control" id="tipo_visitante-modal" />
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-light close-modal" data-dismiss="modal">Cancelar</button>
						<button type="button" class="btn btn-primary" id="btn-cadastrarTipo_modal">Salvar</button>
					</div>
				</div>
			</div>
		</div>

		<!-- CADASTRO LOCAL MANUTENÇÃO -->
		<div id="cadastrar_local_manu-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="cadastrar_local_manu-modalLabel" style="display: none" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header modal-colored-header bg-primary">
						<button type="button" class="close ml-auto" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<h4 class="card-title">Cadastre novo Local</h4>
						<div class="form-group apartamentos-div mt-4">
							<label for="#apartamento">Local</label>
							<div class="input-group">
								<input type="text" class="form-control" id="local_manutencao-modal" />
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-light close-modal" data-dismiss="modal">Cancelar</button>
						<button type="button" class="btn btn-primary" id="btn-cadastrarLocal_modal">Salvar</button>
					</div>
				</div>
			</div>
		</div>

		

		<div id="cadastrar_categoria_almoxarifado-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="cadastrar_categoria-modalLabel" style="display: none" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header modal-colored-header bg-primary">
						<button type="button" class="close ml-auto" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<h4 class="card-title">Cadastre novas categorias</h4>
						<div class="form-group apartamentos-div mt-4">
							<label for="#apartamento">Categoria</label>
							<input type="text" class="form-control" />
						</div>

						<div class="form-group">
							<label for="grupo-categoria">Grupo</label>
							<div class="input-group">
								<select id="grupo-categoria" disabled="" class="custom-select form-control" name="grupo-categoria">
									<option>Não existem grupos cadastradas</option>
								</select>
								<div class="input-group-append">
									<a href="javascript:void(0)"><span class="input-group-text editar-item" id="cadastrar_grupo_almoxarifado" data-toggle="modal" data-target="#cadastrar_grupo_almoxarifado-modal"><i class="far fa-plus"></i></span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-info close-modal mr-auto" data-dismiss="modal">Listar</button>
						<button type="button" class="btn btn-light close-modal" data-dismiss="modal">Cancelar</button>
						<button type="button" class="btn btn-primary">Salvar</button>
					</div>
				</div>
			</div>
		</div>

		<div id="cadastrar_grupo_almoxarifado-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="cadastrar_grupo_almoxarifado-modalLabel" style="display: none" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header modal-colored-header bg-primary">
						<button type="button" class="close ml-auto" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<h4 class="card-title">Cadastre novos grupos</h4>
						<h6 class="card-subtitle">Dica: você pode acrescentar mais grupos e cadastra-los de uma única vez.</h6>
						<div class="form-group apartamentos-div mt-4">
							<label for="#apartamento">Grupo</label>
							<div class="input-group">
								<input type="text" class="form-control" />
								<div class="input-group-append">
									<a href="javascript:void(0)" class="add_campo-apto"><span class="input-group-text">+</span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-info close-modal mr-auto" data-dismiss="modal">Listar</button>
						<button type="button" class="btn btn-light close-modal" data-dismiss="modal">Cancelar</button>
						<button type="button" class="btn btn-primary">Salvar</button>
					</div>
				</div>
			</div>
		</div>

		<div id="cadastrar_perfil-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="cadastrar_perfil-modalLabel" style="display: none" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header modal-colored-header bg-primary">
						<button type="button" class="close ml-auto" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<form id="form-cadastro_perfil" style="overflow-y: auto;">
						<div class="modal-body">
							<h4 class="card-title">Cadastre novos perfis</h4>

							<div class="container-dinamico mt-4">
								<div class="form-group">
									<label for="perfil-cadastro-modal">Perfil</label>
									<input class="form-control" name="perfil-cadastro" type="text" id="perfil-cadastro-modal" />
									<input id="acao-perfil" type="hidden" name="acao" value="cadastro">
									<input id="id-perfil" type="hidden" name="id" value="">
								</div>
							</div>
							<button type="button" class="btn btn-loader btn-primary atualizar-perfis" style="display: none;">
								Atualizar
								<img class="img-loader" src="assets/img/loader_branco.svg">
							</button>
							<button type="button" class="btn btn-light cancelar-atualizar-perfis" style="display: none">Cancelar</button>
							<div class="btn_acrescentar" data-input-type="perfil">+ Acrescentar um campo</div>

							<h6 class="card-subtitle text-center mt-5 mb-2" style="display: none;" id="nenhum-resultado_perfil">Nenhum perfil foi encontrado.</h6>
							<div id="tabela-perfil_resultado" class="table-responsive mt-3" style="display: none">
								<table class="table table-bordered table-hover">
									<thead class="bg-inverse text-white">
										<tr>
											<th>#</th>
											<th>Perfil</th>
											<th style="text-align: center">Ações</th>
										</tr>
									</thead>
									<tbody class="border border-inverse">

									</tbody>
								</table>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-loader btn-info listar-perfis mr-auto">
								Listar
								<img class="img-loader" src="assets/img/loader_branco.svg">
							</button>

							<button type="button" class="btn btn-light close-modal" data-dismiss="modal">
								Fechar
							</button>

							<button type="submit" class="btn btn-loader btn-primary">
								Cadastrar
								<img class="img-loader" src="assets/img/loader_branco.svg">
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div id="cadastrar_tipo_correspondencia-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="cadastrar_tipo_correspondencia-modalLabel" style="display: none" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header modal-colored-header bg-primary">
						<button type="button" class="close ml-auto" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<h4 class="card-title">Cadastre novos tipos de correspondências</h4>
						<h6 class="card-subtitle">Dica: você pode acrescentar mais tipos e cadastra-los de uma única vez.</h6>
						<div class="form-group apartamentos-div mt-4">
							<label for="#apartamento">Tipo</label>
							<div class="input-group">
								<input type="text" class="form-control" />
								<div class="input-group-append">
									<a href="javascript:void(0)" class="add_campo-tipo"><span class="input-group-text">+</span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-info close-modal mr-auto" data-dismiss="modal">Listar</button>
						<button type="button" class="btn btn-light close-modal" data-dismiss="modal">Cancelar</button>
						<button type="button" class="btn btn-primary">Salvar</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Webcam modal -->
		<div id="webcam-modal" class="modal fade webcam-modal" tabindex="-1" role="dialog" aria-labelledby="webcam-modalLabel" aria-modal="false">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header modal-colored-header bg-primary">
						Capturar imagem
						<button type="button" class="close ml-auto" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<video class="webcam-video" autoplay></video>
						<canvas class="webcam-canvas"></canvas>
						<img class="webcam-imagem" style="display: none">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-light webcam-recapturar" style="display: none">
							Tirar outra
						</button>
						<button type="button" class="btn btn-light webcam-capturar">
							Capturar
						</button>
						<button id="save" type="submit" class="btn btn-loader btn-primary webcam-salvar">
							Salvar
							<img class="img-loader" src="assets/img/loader_branco.svg">
						</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Imagem modal -->
		<div id="imagem-modal" class="modal fade imagem-modal" tabindex="-1" role="dialog" aria-labelledby="imagem-modalLabel" aria-modal="false">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header modal-colored-header bg-primary">
						<button type="button" class="close ml-auto" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<img class="imagem-imagem">
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-loader btn-primary" data-dismiss="modal" >
							Fechar
						</button>
					</div>
				</div>
			</div>
		</div>

		
	</div>

	<div id="loader">
		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: 0; background: none; display: block; shape-rendering: auto; position: absolute; top: 50%; left: calc(50% + 117.5px); transform: translate(-50%, -50%); width: 70px" width="251px" height="251px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
			<circle cx="50" cy="50" r="36" stroke-width="8" stroke="#26c6da" stroke-dasharray="56.548667764616276 56.548667764616276" fill="none" stroke-linecap="round">
				<animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" keyTimes="0;1" values="0 50 50;360 50 50"></animateTransform>
			</circle>
		</svg>
	</div>

	<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
	<script src="assets/lib/jquery/jquery-min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>


	<!-- Libs -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.5/jspdf.plugin.autotable.min.js"></script>	
	<script src="assets/lib/tablehtml/tableHTMLExport.js"></script>
	<script src="assets/lib/tippy.js/popper.js"></script>
	<script src="assets/lib/tippy.js/tippy.js"></script>
	<script src="assets/lib/simplebar/simplebar.min.js"></script>
	<script src="assets/lib/ckeditor/ckeditor.js"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
	<script src="assets/lib/toastr/toastr.js"></script>




	<script src="assets/js/painel.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/webcam.js"></script>


	<script>
		$(document)
			.ajaxStart(function(e) {
				// Verifica se a chamada ajax vem da sidebar
				if ($(e.target.activeElement).hasClass('nav-link sub-nav-link')) {
					window.scrollTo(0, 0)
					$('html, body').css({
						'overflow-y': 'hidden'
					})
					$('#loader').css({
						display: 'flex'
					})
				}
				if ($(e.target.activeElement).hasClass('btn btn-loader')) {
					$(e.target.activeElement).addClass('ajax-progress');
				}
			})
			.ajaxStop(function(e) {
				// Verifica se a chamada ajax vem da sidebar
				if ($(e.target.activeElement).hasClass('nav-link sub-nav-link')) {
					$('html, body').css({
						'overflow-y': 'visible'
					})
					$('#loader').css({
						display: 'none'
					})
				}
				if ($(e.target.activeElement).hasClass('btn btn-loader')) {
					$(e.target.activeElement).removeClass('ajax-progress');
				}
			})

		function setarTooltips(el, mensagem, posicao, html) {
			if (!el) {
				tippy('.gerar-pdf', {
					content: 'Gerar um relatório em .PDF',
					placement: 'right',
					arrow: true,
				})
				tippy('.gerar-xls', {
					content: 'Gerar um relatório em .XLS',
					placement: 'right',
					arrow: true,
				})
				tippy('.remover-convidado', {
					content: 'Remover esse convidado.',
					placement: 'top',
					arrow: true,
				})
				tippy('.adicionar-convidado', {
					content: 'Adicionar um convidado.',
					placement: 'top',
					arrow: true,
				})
				tippy('.trocar-condominio', {
					content: 'Trocar condomínio',
					placement: 'left',
					arrow: true,
				})
			} else {
				tippy(el, {
					content: mensagem,
					placement: posicao,
					arrow: true,
					allowHTML: html
				})
			}
		}

		function setarMascaras() {
			$('.cpf-input').mask('000.000.000-00', {
				onKeyPress: function(value, e) {
					if (value.length >= $(e.currentTarget).attr('maxlength')) {
						if (validaCpfCnpj(value)) {
							$(e.currentTarget).parent().find('.erro-mensagem').hide()
							$(e.currentTarget).removeClass('valid invalid')
							$(e.currentTarget).addClass('valid')
						} else {
							console.log($(e.currentTarget))
							$(e.currentTarget).parent().find('.erro-mensagem').show()
							$(e.currentTarget).removeClass('valid invalid')
							$(e.currentTarget).addClass('invalid')
						}
					} else {
						$(e.currentTarget).removeClass('valid invalid')
						$(e.currentTarget).parent().find('.erro-mensagem').hide()
					}
				},
			})
			$('.cnpj-input').mask('00.000.000/0000-00', {
				onKeyPress: function(value, e) {
					if (value.length >= $(e.currentTarget).attr('maxlength')) {
						if (validaCpfCnpj(value)) {
							$(e.currentTarget).parent().find('.erro-mensagem').hide()
							$(e.currentTarget).removeClass('valid invalid')
							$(e.currentTarget).addClass('valid')
						} else {
							$(e.currentTarget).parent().find('.erro-mensagem').show()
							$(e.currentTarget).removeClass('valid invalid')
							$(e.currentTarget).addClass('invalid')
						}
					} else {
						$(e.currentTarget).removeClass('valid invalid')
						$(e.currentTarget).parent().find('.erro-mensagem').hide()
					}
				},
			})
			$('.rg-input').mask('00.000.000-0', {
				onKeyPress: function(value, e) {
					if (value.length >= $(e.currentTarget).attr('maxlength')) {
						if (!$(e.currentTarget).hasClass('valid')) $(e.currentTarget).addClass('valid')
					} else {
						$(e.currentTarget).removeClass('valid invalid')
					}
				},
			})
			$('.cep-input').mask('00000-000')
			$('.placa_carro-input').mask('SSS-0000', {
				onKeyPress: function(value, e) {
					if (value.length >= $(e.currentTarget).attr('maxlength')) {
						if (!$(e.currentTarget).hasClass('valid')) $(e.currentTarget).addClass('valid')
					} else {
						$(e.currentTarget).removeClass('valid invalid')
					}
				},
			})
			$('.telefone-input').mask('(00) 0000-0000', {
				onKeyPress: function(value, e) {
					if (value.length >= $(e.currentTarget).attr('maxlength')) {
						if (!$(e.currentTarget).hasClass('valid')) $(e.currentTarget).addClass('valid')
					} else {
						$(e.currentTarget).removeClass('valid invalid')
					}
				},
			})
			$('.celular-input').mask('(00) 00000-0000', {
				onKeyPress: function(value, e) {
					if (value.length >= $(e.currentTarget).attr('maxlength')) {
						if (!$(e.currentTarget).hasClass('valid')) $(e.currentTarget).addClass('valid')
					} else {
						$(e.currentTarget).removeClass('valid invalid')
					}
				},
			})
			$('.dinheiro-input').mask('000.000.000.000.000,00', {
				reverse: true
			})
			$('.ip-input').mask('099.099.099.099', {
				onKeyPress: function(value, e) {
					if (value.length >= $(e.currentTarget).attr('maxlength')) {
						if (!$(e.currentTarget).hasClass('valid')) $(e.currentTarget).addClass('valid')
					} else {
						$(e.currentTarget).removeClass('valid invalid')
					}
				},
			})

			$('.simples-input').on('input', (e) => {
				if ($(e.target).val()) {
					$(e.target).removeClass('valid invalid')
					$(e.target).addClass('valid')
				} else {
					$(e.target).removeClass('valid invalid')
					$(e.target).addClass('invalid')
				}
			})
			$('.outros-input').on('change', (e) => {
				const tagName = $(e.target).prop('tagName').toLowerCase()
				const inputType = $(e.target).attr('type')

				switch (tagName) {
					case 'input':
						if (inputType === 'file' && $(e.target).val() !== '') {
							$(e.target).parent().find('.custom-file-label').removeClass('valid invalid')
							$(e.target).parent().find('.custom-file-label').addClass('valid')
						} else {
							$(e.target).parent().find('.custom-file-label').removeClass('valid invalid')
							$(e.target).parent().find('.custom-file-label').addClass('invalid')
						}
						break

					case 'select':
						if ($(e.target).val() !== '') {
							$(e.target).removeClass('valid invalid')
							$(e.target).addClass('valid')
						} else {
							$(e.target).removeClass('valid invalid')
							$(e.target).addClass('invalid')
						}
						break
				}
			})
		}

		$('.submenus .nav-link').on('click', (e) => {
			setTimeout(setarTooltips, 1000)
			setTimeout(setarMascaras, 1000)
		})

		$(document).ready(() => {
			setarTooltips();
		});

		
	</script>

	<script>
	$(document).ready(function(){
		$("#toggleBtn").click(function(){
			var status = $(".sidebar").css("display");

			console.log('a');

			console.log(status);

			if(status == 'none'){
				$(".sidebar").show();
			}else{
				$(".sidebar").hide();
			}

		})
	})
	</script>
</body>

</html>