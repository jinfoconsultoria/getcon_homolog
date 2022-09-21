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

				<h4 class="card-title">Informações do cadastro</h4>



				<div class="row mt-4">

					<div class="col-md-4">

						<div class="form-group">

							<label for="nome-cadastro">Nome</label>

							<input class="form-control" type="text" id="nome-cadastro" />

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="descricao-cadastro">Descrição</label>

							<input class="form-control" type="text" id="descricao-cadastro" />

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

				</div>



				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label for="data_vencimento-busca">Data de vencimento</label>

							<input class="form-control" type="date" id="data_vencimento-busca" />

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="numero-cadastro">Número</label>

							<input class="form-control" type="text" id="numero-cadastro" />

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

<!-- <script src="../assets/js/uploader.js"></script> -->ação</label>

							<input class="form-control" type="text" id="localizacao-cadastro" />

						</div>

					</div>

				</div>



				<button class="btn btn-primary">Cadastrar</button>

			</div>

		</div>

	</div>



	<div class="tab-pane fade" id="busca" role="tabpanel" aria-labelledby="busca-tab">

		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Faça uma busca</h4>



                <div class="form-group mt-4">

                    <label for="nome-busca">Nome</label>

                    <input class="form-control" type="text" id="nome-busca" />

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

</script>

