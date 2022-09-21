<ul class="nav nav-tabs nav-tabs-main" id="abas" role="tablist">

	<li class="nav-item" role="presentation">

		<a class="nav-link active" id="cadastro-tab" data-toggle="tab" href="#cadastro" role="tab" aria-controls="cadastro" aria-selected="true">Cadastrar</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="busca-tab" data-toggle="tab" href="#busca" role="tab" aria-controls="busca" aria-selected="false">Procurar</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="tipo-tab" data-toggle="tab" href="#tipo" role="tab" aria-controls="tipo" aria-selected="false">Tipo</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="agendamento-tab" data-toggle="tab" href="#agendamento" role="tab" aria-controls="agendamento" aria-selected="false">Agendamento</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="busca_agendamento-tab" data-toggle="tab" href="#busca_agendamento" role="tab" aria-controls="busca_agendamento" aria-selected="false">Procurar agendamento</a>

	</li>

</ul>



<div class="tab-content" id="abasConteudo">

	<div class="tab-pane fade show active" id="cadastro" role="tabpanel" aria-labelledby="cadastro-tab">

		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Cadastrar mensagem</h4>



				<div class="row mt-4">

					<div class="col-md-6">

						<div class="form-group">

							<label for="nome-cadastro">Nome</label>

							<input class="form-control" type="text" id="nome-cadastro" />

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="imagem-cadastro">Imagem</label>

							<div>

								<div class="input-group">

									<div class="custom-file">

										<input type="file" class="custom-file-input" id="imagem-cadastro" />

										<label class="custom-file-label" for="imagem-cadastro"></label>

										<i class="preview-file far fa-eye d-none"></i>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-6">

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

					<div class="col-md-6">

						<div class="form-group">

							<label for="tipo-cadastro">Tipo</label>

							<select disabled class="custom-select form-control" id="tipo-cadastro">

								<option>Não existem tipos cadastrados.</option>

							</select>

						</div>

					</div>

				</div>



				<button class="btn btn-primary">Cadastrar</button>

			</div>

		</div>

	</div>



	<div class="tab-pane fade" id="busca" role="tabpanel" aria-labelledby="busca-tab">

		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Faça uma busca</h4>



				<div class="row mt-4">

					<div class="col-md-4">

						<div class="form-group">

							<label for="nome-busca">Nome</label>

							<input class="form-control" type="text" id="nome-busca" />

						</div>

					</div>

					<div class="col-md-4">

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

					<div class="col-md-4">

						<div class="form-group">

							<label for="tipo-busca">Tipo</label>

							<select disabled class="custom-select form-control" id="tipo-busca">

								<option>Não existem tipos cadastrados.</option>

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

					<h5 class="card-subtitle" style="text-align: center;">Aqui aparecerão os resultados da busca.</h5>

				</div>

			</div>

		</div>

	</div>



	<div class="tab-pane fade" id="tipo" role="tabpanel" aria-labelledby="tipo-tab">

		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Cadastrar um tipo</h4>



				<div class="form-group mt-4">

					<label for="tipo-tipo">Tipo</label>

					<input class="form-control" type="text" id="tipo-tipo" />

				</div>



				<button class="btn btn-primary">Cadastrar</button>

			</div>

		</div>



		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Resultado</h4>

<!-- <script src="../assets/js/uploader.js"></script> -->

					<i class="fad fa-file-pdf gerar-pdf"></i>

					<i class="fad fa-file-excel gerar-xls"></i>

				</div>



				<div id="busca-resultado">

					<h5 class="card-subtitle" style="text-align: center;">Nenhum resultado encontrado.</h5>

				</div>

			</div>

		</div>

	</div>



	<div class="tab-pane fade" id="agendamento" role="tabpanel" aria-labelledby="agendamento-tab">

		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Faça um agendamento</h4>



				<div class="row mt-4">

					<div class="col-md-4">

						<div class="form-group">

							<label for="servico-agendamento">Serviço</label>

							<select disabled class="custom-select form-control" id="servico-agendamento">

								<option>Não existem serviços cadastrados.</option>

							</select>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="quantidade-agendamento">Quantidade</label>

							<input value="1" class="form-control" type="text" id="quantidade-agendamento" />

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="data-agendamento">Data</label>

							<input class="form-control" type="date" id="data-agendamento" />

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label for="bloco-agendamento">Bloco</label>

							<select disabled class="custom-select form-control" id="bloco-agendamento">

								<option selected>Não existem blocos cadastrados.</option>

							</select>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="apto-agendamento">Apartamento</label>

							<select disabled class="custom-select form-control" id="apto-agendamento">

								<option selected>Não existem apartamentos cadastrados.</option>

							</select>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="morador-agendamento">Morador</label>

							<select disabled class="custom-select form-control" id="morador-agendamento">

								<option selected>Selecione o bloco e o apartamento.</option>

							</select>

						</div>

					</div>

				</div>



				<button class="btn btn-primary">Cadastrar</button>

			</div>

		</div>

	</div>



	<div class="tab-pane fade" id="busca_agendamento" role="tabpanel" aria-labelledby="busca_agendamento-tab">

		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Faça uma busca</h4>



				<div class="row mt-4">

					<div class="col-md-6">

						<div class="form-group">

							<label for="tipo-busca_agendamento">Tipo</label>

							<select disabled class="custom-select form-control" id="tipo-busca_agendamento">

								<option>Não existem tipos cadastrados.</option>

							</select>

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="servico-busca_agendamento">Serviço</label>

							<select disabled class="custom-select form-control" id="servico-busca_agendamento">

								<option>Não existem serviços cadastrados.</option>

							</select>

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="data_inicial-busca_agendamento">Data inicial</label>

							<input class="form-control" type="date" id="data_inicial-busca_agendamento" />

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="data_final-busca_agendamento">Data final</label>

							<input class="form-control" type="date" id="data_final-busca_agendamento" />

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label for="bloco-busca_agendamento">Bloco</label>

							<select disabled class="custom-select form-control" id="bloco-busca_agendamento">

								<option selected>Não existem blocos cadastrados.</option>

							</select>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="apto-busca_agendamento">Apartamento</label>

							<select disabled class="custom-select form-control" id="apto-busca_agendamento">

								<option selected>Não existem apartamentos cadastrados.</option>

							</select>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="morador-busca_agendamento">Morador</label>

							<select disabled class="custom-select form-control" id="morador-busca_agendamento">

								<option selected>Selecione o bloco e o apartamento.</option>

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

					<h5 class="card-subtitle" style="text-align: center;">Aqui aparecerão os resultados da busca.</h5>

				</div>

			</div>

		</div>

	</div>

</div>



<!-- <script src="../assets/js/uploader.js"></script> -->



<script>

	CKEDITOR.replaceAll('ckeditor');

</script>

