<ul class="nav nav-tabs nav-tabs-main" id="abas" role="tablist">

	<li class="nav-item" role="presentation">

		<a class="nav-link active" id="lanhouse-tab" data-toggle="tab" href="#lanhouse" role="tab" aria-controls="lanhouse" aria-selected="true">Lan House</a>

	</li>

</ul>



<div class="tab-content" id="abasConteudo">

	<div class="tab-pane fade show active" id="lanhouse" role="tabpanel" aria-labelledby="lanhouse-tab">

		<ul class="nav nav-tabs subnav-tabs nav-tabs-main" id="abas" role="tablist">

			<li class="nav-item" role="presentation">

				<a class="nav-link active" id="sessao-tab" data-toggle="tab" href="#sessao" role="tab" aria-controls="sessao" aria-selected="true">Sessões</a>

			</li>

			<li class="nav-item" role="presentation">

				<a class="nav-link" id="busca-tab" data-toggle="tab" href="#busca" role="tab" aria-controls="busca" aria-selected="false">Procurar</a>

			</li>

			<li class="nav-item" role="presentation">

				<a class="nav-link" id="configuracao-tab" data-toggle="tab" href="#configuracao" role="tab" aria-controls="configuracao" aria-selected="false">Configuração</a>

			</li>

			<li class="nav-item" role="presentation">

				<a class="nav-link" id="cadastrar_servicos-tab" data-toggle="tab" href="#cadastrar_servicos" role="tab" aria-controls="cadastrar_servicos" aria-selected="false">Cadastrar serviços</a>

			</li>

			<li class="nav-item" role="presentation">

				<a class="nav-link" id="busca_servicos-tab" data-toggle="tab" href="#busca_servicos" role="tab" aria-controls="busca_servicos" aria-selected="false">Procurar serviços</a>

			</li>

			<li class="nav-item" role="presentation">

				<a class="nav-link" id="tipo-tab" data-toggle="tab" href="#tipo" role="tab" aria-controls="tipo" aria-selected="false">Tipo</a>

			</li>

			<li class="nav-item" role="presentation">

				<a class="nav-link" id="leitor-tab" data-toggle="tab" href="#leitor" role="tab" aria-controls="leitor" aria-selected="false">Leitor</a>

			</li>

		</ul>



		<div class="tab-content" id="subAbasConteudo">

			<div class="tab-pane fade show active" id="sessao" role="tabpanel" aria-labelledby="sessao-tab">

				<div class="card" width="50%">

					<div class="card-body">

						<h4 class="card-title">Iniciar sessão</h4>



						<div class="row mt-4">

							<div class="col-md-4">

								<div class="form-group">

									<label for="bloco-sessao">Bloco</label>

									<select disabled="" class="custom-select form-control" id="bloco-sessao">

										<option selected="">Não existem blocos cadastrados.</option>

									</select>

								</div>

							</div>

							<div class="col-md-4">

								<div class="form-group">

									<label for="apto-sessao">Apartamento</label>

									<select disabled="" class="custom-select form-control" id="apto-sessao">

										<option selected="">Não existem apartamentos cadastrados.</option>

									</select>

								</div>

							</div>

							<div class="col-md-4">

								<div class="form-group">

									<label for="morador-sessao">Morador</label>

									<select disabled="" class="custom-select form-control" id="morador-sessao">

										<option selected="">Selecione o bloco e o apartamento.</option>

									</select>

								</div>

							</div>

						</div>



						<button class="btn btn-primary">Cadastrar</button>

					</div>

				</div>



				<div class="card">

					<div class="card-body">

						<h4 class="card-title">Sessões em andamento</h4>

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

						<h4 class="card-title">Procurar</h4>



						<div class="row mt-4">

							<div class="col-md-4">

								<div class="form-group">

									<label for="bloco-busca">Bloco</label>

									<select disabled="" class="custom-select form-control" id="bloco-busca">

										<option selected="">Não existem blocos cadastrados.</option>

									</select>

								</div>

							</div>

							<div class="col-md-4">

								<div class="form-group">

									<label for="apto-busca">Apartamento</label>

									<select disabled="" class="custom-select form-control" id="apto-busca">

										<option selected="">Não existem apartamentos cadastrados.</option>

									</select>

								</div>

							</div>

							<div class="col-md-4">

								<div class="form-group">

									<label for="morador-busca">Morador</label>

									<select disabled="" class="custom-select form-control" id="morador-busca">

										<option selected="">Selecione o bloco e o apartamento.</option>

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



						<div class="form-group">

							<label for="status-busca">Status</label>



							<input type="radio" name="status-busca" id="andamento_status-busca" class="multipla" />

							<label for="andamento_status-busca" class="multipla btn-outline-secondary">Em andamento</label>



							<input type="radio" name="status-busca" id="finalizado_status-busca" class="multipla" />

							<label for="finalizado_status-busca" class="multipla btn-outline-secondary">Finalizado</label>

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

						<h4 class="card-title">Configurações</h4>



						<div class="form-group mt-4">

							<label for="valor-configuracao">Valor da hora</label>

							<div class="input-group">

								<div class="input-group-prepend">

									<span class="input-group-text">R$</span>

								</div>

								<input value="10" class="form-control" type="text" id="valor-configuracao" />

							</div>

						</div>



						<button class="btn btn-primary">Atualizar</button>

					</div>

				</div>

			</div>



			<div class="tab-pane fade" id="cadastrar_servicos" role="tabpanel" aria-labelledby="cadastrar_servicos-tab">

				<div class="card">

<!-- <script src="../assets/js/uploader.js"></script> -->

						<h4 class="card-title">Cadastrar serviços</h4>



						<div class="row mt-4">

							<div class="col-md-4">

								<div class="form-group">

									<label for="bloco-cadastrar_servicos">Bloco</label>

									<select disabled="" class="custom-select form-control" id="bloco-cadastrar_servicos">

										<option selected="">Não existem blocos cadastrados.</option>

									</select>

								</div>

							</div>

							<div class="col-md-4">

								<div class="form-group">

									<label for="apto-cadastrar_servicos">Apartamento</label>

									<select disabled="" class="custom-select form-control" id="apto-cadastrar_servicos">

										<option selected="">Não existem apartamentos cadastrados.</option>

									</select>

								</div>

							</div>

							<div class="col-md-4">

								<div class="form-group">

									<label for="morador-cadastrar_servicos">Morador</label>

									<select disabled="" class="custom-select form-control" id="morador-cadastrar_servicos">

										<option selected="">Selecione o bloco e o apartamento.</option>

									</select>

								</div>

							</div>

						</div>



						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label for="quantidade-cadastrar_servicos">Quantidade</label>

									<div class="">

										<input class="form-control" type="text" id="quantidade-cadastrar_servicos" />

									</div>

								</div>

							</div>

							<div class="col-md-4">

								<label for="valor-cadastrar_servicos">Valor</label>

								<div class="input-group">

									<div class="input-group-prepend">

										<span class="input-group-text">R$</span>

									</div>

									<input class="form-control" type="text" id="valor-cadastrar_servicos" />

								</div>

							</div>

							<div class="col-md-4">

								<div class="form-group">

									<label for="tipo-cadastrar_servicos">Tipo</label>

									<select disabled="" class="custom-select form-control" id="tipo-cadastrar_servicos">

										<option selected="">Não existem tipos cadastrados.</option>

									</select>

								</div>

							</div>

						</div>



						<button class="btn btn-primary">Cadastrar</button>

					</div>

				</div>

			</div>



			<div class="tab-pane fade" id="busca_servicos" role="tabpanel" aria-labelledby="busca_servicos-tab">

				<div class="card">

					<div class="card-body">

						<h4 class="card-title">Buscar serviços</h4>



						<div class="row mt-4">

							<div class="col-md-6">

								<div class="form-group">

									<label for="data_inicial-busca_servicos">Data inicial</label>

									<input class="form-control" type="date" id="data_inicial-busca_servicos" />

								</div>

							</div>

							<div class="col-md-6">

								<div class="form-group">

									<label for="data_final-busca_servicos">Data final</label>

									<input class="form-control" type="date" id="data_final-busca_servicos" />

								</div>

							</div>

						</div>



						<div class="row">

							<div class="col-md-4">

								<div class="form-group">

									<label for="bloco-busca_servicos">Bloco</label>

									<select disabled="" class="custom-select form-control" id="bloco-busca_servicos">

										<option selected="">Não existem blocos cadastrados.</option>

									</select>

								</div>

							</div>

							<div class="col-md-4">

								<div class="form-group">

									<label for="apto-busca_servicos">Apartamento</label>

									<select disabled="" class="custom-select form-control" id="apto-busca_servicos">

										<option selected="">Não existem apartamentos cadastrados.</option>

									</select>

								</div>

							</div>

							<div class="col-md-4">

								<div class="form-group">

									<label for="morador-busca_servicos">Morador</label>

									<select disabled="" class="custom-select form-control" id="morador-busca_servicos">

										<option selected="">Selecione o bloco e o apartamento.</option>

									</select>

								</div>

							</div>

						</div>



						<div class="row">

							<div class="col-md-6">

								<div class="form-group">

									<label for="quantidade-busca_servicos">Quantidade</label>

									<div class="">

										<input class="form-control" type="text" id="quantidade-busca_servicos" />

									</div>

								</div>

							</div>

							<div class="col-md-6">

								<div class="form-group">

									<label for="tipo-busca_servicos">Tipo</label>

									<select disabled="" class="custom-select form-control" id="tipo-busca_servicos">

										<option selected="">Não existem tipos cadastrados.</option>

									</select>

								</div>

							</div>

						</div>



						<button class="btn btn-primary">Procurar</button>

					</div>

				</div>

			</div>



			<div class="tab-pane fade" id="tipo" role="tabpanel" aria-labelledby="tipo-tab">

				<div class="card">

					<div class="card-body">

						<h4 class="card-title">Cadastrar tipos</h4>



						<div class="row mt-4">

							<div class="col-md-6">

								<div class="form-group">

									<label for="nome-tipo">Nome</label>

									<input class="form-control" type="text" id="nome-tipo" />

								</div>

							</div>

							<div class="col-md-6">

								<div class="form-group">

									<label for="valor-tipo">Valor</label>

									<div class="input-group">

										<div class="input-group-prepend">

											<span class="input-group-text">R$</span>

										</div>

										<input class="form-control" type="text" id="valor-tipo" />

									</div>

								</div>

							</div>

						</div>



						<button class="btn btn-primary">Cadastrar</button>

					</div>

				</div>

			</div>



			<div class="tab-pane fade" id="leitor" role="tabpanel" aria-labelledby="leitor-tab">

				<div class="card">

					<div class="card-body">

						<h4 class="card-title">Leitor</h4>



						<div class="form-group mt-4">

							<label for="cod-leitor">Código</label>

							<input class="form-control" type="text" id="cod-leitor" />

						</div>



						<button class="btn btn-primary">Enviar</button>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>



<!-- <script src="../assets/js/uploader.js"></script> -->



<script>

	CKEDITOR.replaceAll('ckeditor');

	$('input[type="date"]').val(new Date().today());

</script>

