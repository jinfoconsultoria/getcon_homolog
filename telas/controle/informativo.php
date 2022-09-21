<ul class="nav nav-tabs nav-tabs-main" id="abas" role="tablist">

	<li class="nav-item" role="presentation">

		<a class="nav-link active" id="cadastro-tab" data-toggle="tab" href="#cadastro" role="tab" aria-controls="cadastro" aria-selected="true">Cadastro</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="busca-tab" data-toggle="tab" href="#busca" role="tab" aria-controls="busca" aria-selected="false">Procurar</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="configuracao-tab" data-toggle="tab" href="#configuracao" role="tab" aria-controls="configuracao" aria-selected="false">Configuração</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="tipo-tab" data-toggle="tab" href="#tipo" role="tab" aria-controls="tipo" aria-selected="false">Tipo</a>

	</li>

</ul>



<div class="tab-content" id="abasConteudo">

	<div class="tab-pane fade show active" id="cadastro" role="tabpanel" aria-labelledby="cadastro-tab">

		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Cadastrar informativo</h4>



				<div class="row mt-4">

					<div class="col-md-4">

						<div class="form-group">

							<label for="nome-cadastro">Nome</label>

							<input class="form-control" type="text" id="nome-cadastro" />

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="arquivo-cadastro">Arquivo</label>

							<div class="input-group">

								<div class="custom-file">

									<input type="file" class="custom-file-input" id="arquivo-cadastro" />

									<label class="custom-file-label" for="arquivo-cadastro">Nenhum arquivo selecionado.</label>

								</div>

							</div>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="tipo-cadastro">Tipo</label>

							<select disabled class="custom-select form-control" id="tipo-cadastro">

								<option selected>Não existem tipos cadastrados.</option>

							</select>

						</div>

					</div>

				</div>



                <div class="form-group">

                    <label for="texto-cadastro">Texto</label>

                    <textarea id="texto-cadastro" rows="5" class="form-control ckeditor"></textarea>

                </div>



				<button class="btn btn-primary">Procurar</button>

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

							<label for="nome-busca">Nome</label>

							<input class="form-control" type="text" id="nome-busca" />

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="tipo-busca">Tipo</label>

							<select disabled class="custom-select form-control" id="tipo-busca">

								<option selected>Não existem tipos cadastrados.</option>

							</select>

						</div>

					</div>

                </div>



                <div class="row">

                    <div class="col-md-6">
<!-- <script src="../assets/js/uploader.js"></script> -->
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

