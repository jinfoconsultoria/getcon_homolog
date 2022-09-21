<ul class="nav nav-tabs nav-tabs-main" id="abas" role="tablist">

	<li class="nav-item" role="presentation">

		<a class="nav-link active" id="busca-tab" data-toggle="tab" href="#busca" role="tab" aria-controls="busca" aria-selected="true">Procurar</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="anexo-tab" data-toggle="tab" href="#anexo" role="tab" aria-controls="anexo" aria-selected="false">Anexo</a>

	</li>

</ul>



<div class="tab-content" id="abasConteudo">

	<div class="tab-pane fade show active" id="cadastro" role="tabpanel" aria-labelledby="cadastro-tab">

		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Cadastrar informativo</h4>



				<div class="row mt-4">

					<div class="col-md-6">

						<div class="form-group">

							<label for="titulo-cadastro">Título</label>

							<input class="form-control" type="text" id="titulo-cadastro" />

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="convidado-cadastro">Convidado</label>

							<input class="form-control" type="text" id="convidado-cadastro" />

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

							<label for="status-busca">Status</label>

							<select class="custom-select form-control" id="status-busca">

								<option>Selecione um</option>

								<option>Confirmado</option>

								<option>Não confirmado</option>

							</select>

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="ambiente-busca">Ambiente</label>

							<select disabled class="custom-select form-control" id="ambiente-busca">

								<option>Não existem ambientes cadastrados.</option>

							</select>

						</div>

					</div>

				</div>



				<button class="btn btn-primary">Procurar</button>

			</div>

		</div>

	</div>



	<div class="tab-pane fade" id="anexo" role="tabpanel" aria-labelledby="anexo-tab">

		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Faça uma busca</h4>



				<div class="row mt-4">

					<div class="col-md-4">

						<div class="form-group">

							<label for="ambiente-anexo">Ambiente</label>

							<select disabled class="custom-select form-control" id="ambiente-anexo">

								<option>Não existem ambientes cadastrados.</option>

							</select>

						</div>

<!-- <script src="../assets/js/uploader.js"></script> -->

					<div class="col-md-4">

						<div class="form-group">

							<label for="data_inicial-anexo">Data inicial</label>

							<input class="form-control" type="date" id="data_inicial-anexo" />

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="data_final-anexo">Data final</label>

							<input class="form-control" type="date" id="data_final-anexo" />

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

					<h5 class="card-subtitle" style="text-align: center;">Aqui aparecerão os resultados da busca.</h5>

				</div>

			</div>

		</div>

	</div>



	<div class="tab-pane fade" id="configuracao" role="tabpanel" aria-labelledby="configuracao-tab">

		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Configurações</h4>



				<div class="form-group mt-4">

					<label for="ordem_noticias-configuracao">Ordem das notícias</label>

					<select class="custom-select form-control" id="ordem_noticias-configuracao">

						<option>Nome - Ascendente</option>

						<option>Nome - Descendente</option>

						<option>Data de cadastro - Ascendente</option>

						<option selected>Data de cadastro - Descendente</option>

					</select>

				</div>



				<button class="btn btn-primary">Salvar</button>

			</div>

		</div>

	</div>



	<div class="tab-pane fade" id="tipo" role="tabpanel" aria-labelledby="tipo-tab">

		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Cadastrar um tipo</h4>



				<div class="form-group">

					<label for="tipo-tipo">Tipo</label>

					<input class="form-control" type="text" id="tipo-tipo" />

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

</div>



<!-- <script src="../assets/js/uploader.js"></script> -->



<script>

	CKEDITOR.replaceAll('ckeditor');

</script>

