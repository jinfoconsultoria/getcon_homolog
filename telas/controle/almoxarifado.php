<ul class="nav nav-tabs nav-tabs-main" id="abas" role="tablist">

	<li class="nav-item" role="presentation">

		<a class="nav-link active" id="entrada-tab" data-toggle="tab" href="#entrada" role="tab" aria-controls="entrada" aria-selected="true">Entrada</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="saida-tab" data-toggle="tab" href="#saida" role="tab" aria-controls="saida" aria-selected="false">Saída</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="estoque-tab" data-toggle="tab" href="#estoque" role="tab" aria-controls="estoque" aria-selected="false">Estoque</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="produto-tab" data-toggle="tab" href="#produto" role="tab" aria-controls="produto" aria-selected="false">Produto</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="busca-tab" data-toggle="tab" href="#busca" role="tab" aria-controls="busca" aria-selected="false">Procurar</a>

	</li>

</ul>



<div class="tab-content" id="abasConteudo">

	<div class="tab-pane fade show active" id="entrada" role="tabpanel" aria-labelledby="entrada-tab">

		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Cadastrar entrada</h4>



				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label for="fornecedor-entrada">Fornecedor</label>

							<select disabled class="custom-select form-control" id="fornecedor-entrada">

								<option>Não existem fornecedores cadastrados.</option>

							</select>

						</div>

					</div>



					<div class="col-md-4">

						<div class="form-group">

							<label for="produto-entrada">Produto</label>

							<select disabled class="custom-select form-control" id="produto-entrada">

								<option>Não existem produtos cadastrados.</option>

							</select>

						</div>

					</div>



					<div class="col-md-4">

						<div class="form-group">

							<label for="arquivo-entrada">Arquivo</label>

							<div class="input-group">

								<div class="custom-file">

									<input type="file" class="custom-file-input" id="arquivo-entrada" />

									<label class="custom-file-label" for="arquivo-entrada"></label>

								</div>

							</div>

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label for="nota-entrada">Nota</label>

							<input class="form-control" type="text" id="nota-entrada" />

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="quantidade-entrada">Quantidade</label>

							<input class="form-control" type="text" id="quantidade-entrada" />

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="valor-entrada">Valor</label>

							<input class="form-control" type="text" id="valor-entrada" />

						</div>

					</div>

				</div>



				<button class="btn btn-primary">Cadastrar</button>

			</div>

		</div>

	</div>



	<div class="tab-pane fade" id="saida" role="tabpanel" aria-labelledby="saida-tab">

		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Cadastrar saída</h4>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="nome-saida">Nome solicitante</label>

							<input class="form-control" type="text" id="nome-saida" />

						</div>

					</div>



					<div class="col-md-6">

						<div class="form-group">

							<label for="produto-saida">Produto</label>

							<select disabled class="custom-select form-control" id="produto-saida">

								<option>Não existem produtos cadastrados.</option>

							</select>

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label for="nota-saida">Nota</label>

							<input class="form-control" type="text" id="nota-saida" />

						</div>

					</div>



					<div class="col-md-4">

						<div class="form-group">

							<label for="quantidade-saida">Quantidade</label>

							<input class="form-control" type="text" id="quantidade-saida" />

						</div>

					</div>



					<div class="col-md-4">

						<div class="form-group">

							<label for="valor-saida">Valor</label>

							<input class="form-control" type="text" id="valor-saida" />

						</div>

					</div>

				</div>



				<button class="btn btn-primary">Cadastrar</button>

			</div>

		</div>

	</div>



	<div class="tab-pane fade" id="estoque" role="tabpanel" aria-labelledby="estoque-tab">

		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Estoque</h4>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="nome-estoque">Nome</label>

							<input class="form-control" type="text" id="nome-estoque" />

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="categoria-estoque">Categoria</label>

							<div class="input-group">

								<select id="categoria-estoque" disabled="" class="custom-select form-control" name="categoria-estoque">

									<option>Não existem categorias cadastradas</option>

								</select>

								<div class="input-group-append">

									<a href="javascript:void(0)"

										><span class="input-group-text editar-item" id="cadastrar_categoria_almoxarifado" data-toggle="modal" data-target="#cadastrar_categoria_almoxarifado-modal"><i class="far fa-plus"></i></span

									></a>

								</div>

							</div>

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="data_inicial-estoque">Data inicial</label>

							<input class="form-control" type="date" id="data_inicial-estoque" />

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="data_final-estoque">Data final</label>

							<input class="form-control" type="date" id="data_final-estoque" />

						</div>

<!-- <script src="../assets/js/uploader.js"></script> -->

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

					<h5 class="card-subtitle" style="text-align: center;">Os resultados da busca aparecerão aqui.</h5>

				</div>

			</div>

		</div>

	</div>



	<div class="tab-pane fade" id="produto" role="tabpanel" aria-labelledby="tipo-tab">

		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Cadastrar produto</h4>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="nome-produto">Nome</label>

							<input class="form-control" type="text" id="nome-produto" />

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="imagem-produto">Imagem</label>

							<div>

								<div class="input-group">

									<div class="custom-file">

										<input type="file" class="custom-file-input" id="imagem-produto" />

										<label class="custom-file-label" for="imagem-produto"></label>

										<i class="preview-file far fa-eye d-none"></i>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>



				<div class="form-group">

					<label for="cod_barras-produto">Código de barras</label>

					<input class="form-control" type="number" id="cod_barras-produto" />

				</div>



				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label for="minimo-produto">Mínimo</label>

							<input class="form-control" type="number" id="minimo-produto" />

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="valor-produto">Valor</label>

							<div class="input-group">

								<div class="input-group-prepend">

									<span class="input-group-text">R$</span>

								</div>

								<input class="form-control" type="text" id="valor-produto" />

							</div>

						</div>

					</div>

					<div class="col-md-4">

						<label for="categoria-produto">Categoria</label>

						<div class="input-group">

							<select id="categoria-produto" disabled="" class="custom-select form-control" name="categoria-produto">

								<option>Não existem categorias cadastradas</option>

							</select>

							<div class="input-group-append">

								<a href="javascript:void(0)"

									><span class="input-group-text editar-item" id="cadastrar_categoria_almoxarifado" data-toggle="modal" data-target="#cadastrar_categoria_almoxarifado-modal"><i class="far fa-plus"></i></span

								></a>

							</div>

						</div>

					</div>

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

					<h5 class="card-subtitle" style="text-align: center;">Nenhum resultado encontrado.</h5>

				</div>

			</div>

		</div>

	</div>



	<div class="tab-pane fade" id="busca" role="tabpanel" aria-labelledby="busca-tab">

		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Cadastrar produto</h4>



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

						<label for="categoria-busca">Categoria</label>

						<div class="input-group">

							<select id="categoria-busca" disabled="" class="custom-select form-control" name="categoria-busca">

								<option>Não existem categorias cadastradas</option>

							</select>

							<div class="input-group-append">

								<a href="javascript:void(0)">

									<span class="input-group-text editar-item" id="cadastrar_categoria_almoxarifado" data-toggle="modal" data-target="#cadastrar_categoria_almoxarifado-modal"><i class="far fa-plus"></i> </span

								></a>

							</div>

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="status-busca">Status</label>



							<input type="radio" name="status-busca" id="entrada_status-busca" class="multipla" />

							<label for="entrada_status-busca" class="multipla btn-outline-primary">Entrada</label>



							<input type="radio" name="status-busca" id="saida_status-busca" class="multipla" />

							<label for="saida_status-busca" class="multipla btn-outline-primary">Saída</label>

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

					<h5 class="card-subtitle" style="text-align: center;">Aqui aparecerão todos os resultados da busca.</h5>

				</div>

			</div>

		</div>

	</div>

</div>



<!-- <script src="../assets/js/uploader.js"></script> -->



<script>

	CKEDITOR.replaceAll('ckeditor');

	$('input[type="date"]').val(new Date().today());



	tippy('#cadastrar_categoria_almoxarifado', {

		content: 'Cadastre, edite ou remova uma categoria.',

		placement: 'top',

		arrow: true,

	});



	tippy('#cadastrar_grupo_almoxarifado', {

		content: 'Cadastre, edite ou remova um grupo.',

		placement: 'top',

		arrow: true,

	});



	$('body').on('click', '#cadastrar_categoria_almoxarifado-modal > div > div > div.modal-body > div:nth-child(4) > div > div > a', (e) => {

		$('#cadastrar_categoria_almoxarifado-modal > div > div > div.modal-footer > button.btn.btn-light.close-modal').click();

	});



	$('body').on('click', '.add_campo-apto', (e) => {

		$(e.target).parent().parent().parent().parent().append(`

		<div class="input-group extra-fields mt-2">

			<input type="text" class="form-control">

			<div class="input-group-append">

				<a class="remover_campo-apto" href="javascript:void(0)"><span class="input-group-text remover-item">×</span></a>

				<a class="add_campo-apto" href="javascript:void(0)"><span class="input-group-text add-item">+</span></a>

			</div>

		</div>

		`);

		e.stopImmediatePropagation();

	});



	$('body').on('click', '.remover_campo-apto', (e) => {

		$(e.target).parent().parent().parent().remove();

		e.stopImmediatePropagation();

	});



	$('body').on('click', '.close-modal', (e) => {

		$('.extra-fields').remove();

	});

</script>

