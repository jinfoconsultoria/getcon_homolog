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
		<div class="card" width="50%">
			<div class="card-body">
				<h4 class="card-title">Informações do bloqueio</h4>

				<h6 class="card-subtitle">
					Para obter o endereço IP de um usuário, acesse <code>Relatório Geral <i class="fal fa-long-arrow-right"></i> Acessos</code> e selecione o usuário.
				</h6>

				<div class="form-group mt-4">
					<label for="nome-cadastro">Endereço IP</label>

					<input class="form-control ip-input" type="text" id="nome-cadastro" />
				</div>

				<button class="btn btn-primary mt-4">Cadastrar</button>
			</div>
		</div>
	</div>

	<div class="tab-pane fade" id="busca" role="tabpanel" aria-labelledby="busca-tab">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Faça uma busca</h4>

				<h5 class="card-subtitle">Aqui você pode fazer uma busca pelos bloqueios cadastrados e realizar edições.</h5>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="data_incial-busca">Data inicial</label>

							<input class="form-control" type="date" id="data_incial-busca" />
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="data_final-busca">Data final</label>

							<input class="form-control" type="date" id="data_final-busca" />
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="bloco-busca">Bloco</label>

							<select disabled class="custom-select form-control" id="bloco-busca">
								<option selected="">Não existem blocos cadastrados</option>
							</select>
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
							<label for="apto-busca">Apartamento</label>

							<select disabled class="custom-select form-control" id="apto-busca">
								<option selected="">Não existem apartamentos cadastrados</option>
							</select>
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
							<label for="morador-busca">Morador</label>

							<select disabled class="custom-select form-control" id="morador-busca">
								<option selected="">Selecione o bloco e o apartamento.</option>
							</select>
						</div>
					</div>
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
