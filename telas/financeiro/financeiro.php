<ul class="nav nav-tabs nav-tabs-main" id="abas" role="tablist">
	<li class="nav-item" role="presentation">
		<a class="nav-link active" id="cadastro-tab" data-toggle="tab" href="#cadastro" role="tab" aria-controls="cadastro" aria-selected="true">Cadastro</a>
	</li>

	<li class="nav-item" role="presentation">
		<a class="nav-link" id="busca-tab" data-toggle="tab" href="#busca" role="tab" aria-controls="busca" aria-selected="false">Procurar</a>
	</li>

	<li class="nav-item" role="presentation">
		<a class="nav-link" id="categoria-tab" data-toggle="tab" href="#categoria" role="tab" aria-controls="categoria" aria-selected="false">Categoria</a>
	</li>

	<li class="nav-item" role="presentation">
		<a class="nav-link" id="status-tab" data-toggle="tab" href="#status" role="tab" aria-controls="status" aria-selected="false">Status</a>
	</li>

	<li class="nav-item" role="presentation">
		<a class="nav-link" id="importar-tab" data-toggle="tab" href="#importar" role="tab" aria-controls="importar" aria-selected="false">Importação</a>
	</li>
</ul>

<div class="tab-content" id="abasConteudo">
	<div class="tab-pane fade show active" id="cadastro" role="tabpanel" aria-labelledby="cadastro-tab">
		<div class="card" width="50%">
			<div class="card-body">
				<h4 class="card-title">Faça uma busca</h4>

				<div class="row mt-4">
					<div class="col-md-4">
						<div class="form-group">
							<div class="form-group">
								<label for="nome-cadastro">Nome</label>

								<input class="form-control" type="text" id="nome-cadastro" />
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
							<label for="valor-cadastro">Valor</label>

							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">R$</span>
								</div>

								<input class="form-control" type="text" id="valor-cadastro" />
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
							<label for="tipo-cadastro">Tipo</label>

							<input type="radio" checked name="tipo-cadastro" id="receber_tipo-cadastro" class="multipla" />

							<label for="receber_tipo-cadastro" class="multipla btn-outline-secondary">A receber</label>

							<input type="radio" name="tipo-cadastro" id="pagar_tipo-cadastro" class="multipla" />

							<label for="pagar_tipo-cadastro" class="multipla btn-outline-secondary">A pagar</label>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="data-cadastro">Data</label>

							<input class="form-control" type="date" id="data-cadastro" />
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
							<label for="categoria-cadastro">Categoria</label>

							<select disabled class="custom-select form-control" id="categoria-cadastro">
								<option selected>Não existem categorias cadastradas.</option>
							</select>
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
							<label for="status-cadastro">Status</label>

							<select disabled class="custom-select form-control" id="status-cadastro">
								<option selected>Não existem status cadastradas.</option>
							</select>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="arquivo-cadastro">Arquivo</label>

					<div class="input-group">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="arquivo-cadastro" />

							<label class="custom-file-label" for="arquivo-cadastro">Nenhum arquivo selecionado.</label>
						</div>
					</div>
				</div>

				<div class="row div-receber">
					<div class="col-md-4">
						<div class="form-group">
							<label for="bloco-cadastro">Bloco</label>

							<select disabled class="custom-select form-control" id="bloco-cadastro">
								<option selected>Não existem blocos cadastrados.</option>
							</select>
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
							<label for="apto-cadastro">Apartamento</label>

							<select disabled class="custom-select form-control" id="apto-cadastro">
								<option selected>Não existem apartamentos cadastrados.</option>
							</select>
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
							<label for="cheque-cadastro">Número do cheque</label>

							<input class="form-control" type="text" id="cheque-cadastro" />
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="observacao-cadastro">Observação</label>

					<textarea id="observacao-cadastro" rows="5" class="form-control ckeditor"></textarea>
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
					<h5 class="card-subtitle" style="text-align: center">Aqui aparecerão os resultados da busca.</h5>
				</div>
			</div>
		</div>
	</div>

	<div class="tab-pane fade" id="busca" role="tabpanel" aria-labelledby="busca-tab">
		<div class="card" width="50%">
			<div class="card-body">
				<h4 class="card-title">Faça uma busca</h4>

				<div class="row mt-4">
					<div class="col-md-6">
						<div class="form-group">
							<label for="data-busca">Nome</label>

							<input class="form-control" type="text" id="data-busca" />
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="valor-busca">Valor</label>

							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">R$</span>
								</div>

								<input class="form-control" type="text" id="valor-busca" />
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="data_inicial-busca">Data inicial</label>

							<input class="form-control" type="date" id="data_inicial-busca" />
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
					<div class="col-md-6">
						<div class="form-group">
							<label for="cadastro_inicial-busca">Cadastro inicial</label>

							<input class="form-control" type="date" id="cadastro_inicial-busca" />
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="cadastro_final-busca">Cadastro final</label>

							<input class="form-control" type="date" id="cadastro_final-busca" />
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="categoria-busca">Categoria</label>

							<select disabled class="custom-select form-control" id="categoria-busca">
								<option selected>Não existem categorias cadastradas.</option>
							</select>
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
							<label for="status-busca">Status</label>

							<select disabled class="custom-select form-control" id="status-busca">
								<option selected>Não existem status cadastradas.</option>
							</select>
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
							<label for="ordem-busca">Ordem</label>

							<select class="custom-select form-control" id="ordem-busca">
								<option>Nome</option>

								<option>Bloco e apartamento</option>

								<option>Data ativo - Crescente</option>

								<option>Data ativo - Decrescente</option>
							</select>
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
					<h5 class="card-subtitle" style="text-align: center">Aqui aparecerão os resultados da busca.</h5>
				</div>
			</div>
		</div>
	</div>

	<div class="tab-pane fade" id="categoria" role="tabpanel" aria-labelledby="categoria-tab">
		<div class="card" width="50%">
			<div class="card-body">
				<h4 class="card-title">Cadastrar um tipo</h4>

				<div class="form-group mt-4">
					<label for="tipo-categoria">Tipo</label>

					<input class="form-control" type="text" id="tipo-categoria" />
				</div>

				<button class="btn btn-primary">Cadastrar</button>
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

	<div class="tab-pane fade" id="status" role="tabpanel" aria-labelledby="status-tab">
		<div class="card" width="50%">
			<div class="card-body">
				<h4 class="card-title">Cadastrar um status</h4>

				<div class="form-group mt-4">
					<label for="status-status">Status</label>

					<input class="form-control" type="text" id="status-status" />
				</div>

				<button class="btn btn-primary">Cadastrar</button>
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

	<div class="tab-pane fade" id="importar" role="tabpanel" aria-labelledby="importar-tab">
		<div class="card" width="50%">
			<div class="card-body">
				<h4 class="card-title">Importar</h4>

				<div class="form-group mt-4">
					<label for="arquivo-importar">Arquivo</label>

					<div class="input-group">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="arquivo-importar" />

							<label class="custom-file-label" for="arquivo-importar">Nenhum arquivo selecionado.</label>
						</div>
					</div>
				</div>

				<button class="btn btn-primary">Enviar</button>
			</div>
		</div>
	</div>
</div>

<!-- <script src="../assets/js/uploader.js"></script> -->

<script>
	CKEDITOR.remove('ckeditor');
	CKEDITOR.replaceAll('ckeditor');

	$('input[name="tipo-cadastro"]').on('click', (e) => {
		if ($(e.target).attr('id') == 'receber_tipo-cadastro') {
			$('.div-receber').show();
		} else if ($(e.target).attr('id') == 'pagar_tipo-cadastro') {
			$('.div-receber').hide();
		}
	});
</script>
