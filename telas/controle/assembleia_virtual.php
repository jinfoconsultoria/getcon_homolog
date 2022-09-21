<ul class="nav nav-tabs nav-tabs-main" id="abas" role="tablist">

	<li class="nav-item" role="presentation">

		<a class="nav-link active" id="cadastro-tab" data-toggle="tab" href="#cadastro" role="tab" aria-controls="cadastro" aria-selected="true">Cadastrar</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="busca-tab" data-toggle="tab" href="#busca" role="tab" aria-controls="busca" aria-selected="false">Procurar</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="configuracao-tab" data-toggle="tab" href="#configuracao" role="tab" aria-controls="configuracao" aria-selected="false">Configuração</a>

	</li>

</ul>



<div class="tab-content" id="abasConteudo">

	<div class="tab-pane fade show active" id="cadastro" role="tabpanel" aria-labelledby="cadastro-tab">

		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Informações do cadastro</h4>



				<div class="form-group mt-4">

					<label for="titulo-cadastro">Título</label>

					<input class="form-control" type="text" id="titulo-cadastro" />

				</div>



				<div class="form-group">

					<label for="observacao-cadastro">Observação</label>

					<textarea id="observacao-cadastro" rows="5" class="form-control ckeditor"></textarea>

				</div>



				<div class="div-alternativas">

					<div class="form-group">

						<label for="alternativa_1-cadastro">Alternativa 1</label>

						<input class="form-control" type="text" id="alternativa_1-cadastro" />

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



				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label for="data-cadastro">Data</label>

							<input class="form-control" type="date" id="data-cadastro" />

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="status-cadastro">Status</label>

							<select class="custom-select form-control" id="status-cadastro">

								<option selected>Selecione um</option>

								<option>Criada</option>

								<option>Finalizada</option>

								<option>Sugestão</option>

								<option>Ocultar portal</option>

							</select>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="por-apto-cadastro">Por apartamento?</label>



							<input type="radio" name="por-apto-cadastro" id="sim_por-apto-cadastro" class="multipla" />

							<label for="sim_por-apto-cadastro" class="multipla btn-outline-success">Sim</label>



							<input type="radio" name="por-apto-cadastro" id="nao_por-apto-cadastro" class="multipla" />

							<label for="nao_por-apto-cadastro" class="multipla btn-outline-danger">Não</label>

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



				<div class="row mt-4">

					<div class="col-md-6">

						<div class="form-group">

							<label for="nome-busca">Nome</label>

							<input class="form-control" type="text" id="nome-busca" />

						</div>

					</div>
<!-- <script src="../assets/js/uploader.js"></script> -->
					<div class="col-md-6">

						<div class="form-group">

							<label for="status-busca">Status</label>

							<select class="custom-select form-control" id="status-busca">

								<option selected>Selecione um</option>

								<option>Criada</option>

								<option>Finalizada</option>

								<option>Sugestão</option>

								<option>Ocultar portal</option>

							</select>

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



	<div class="tab-pane fade" id="configuracao" role="tabpanel" aria-labelledby="configuracao-tab">

		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Adicionar apartamentos</h4>

				<h6 class="card-subtitle">Apartamentos adicionados aqui irão poder votar na assembléia.</h6>



				<div class="row mt-4">

					<div class="col-md-6">

						<div class="form-group">

							<label for="bloco-configuracao">Bloco</label>

							<select disabled class="custom-select form-control" id="bloco-configuracao">

								<option selected>Não existem blocos cadastrados.</option>

							</select>

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="apto-configuracao">Apartamento</label>

							<select disabled class="custom-select form-control" id="apto-configuracao">

								<option selected>Não existem apartamentos cadastrados.</option>

							</select>

						</div>

					</div>

				</div>



				<button class="btn btn-primary">Adicionar</button>

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

