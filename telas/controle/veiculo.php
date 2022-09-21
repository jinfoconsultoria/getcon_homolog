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



				<div class="row mt-4">

					<div class="col-md-6">

						<div class="form-group">

							<label for="placa-cadastro">Placa</label>

							<input class="form-control" type="text" id="placa-cadastro" />

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="status-cadastro">Status</label>



							<input type="radio" name="status-cadastro" id="entrada_status-cadastro" class="multipla" />

							<label for="entrada_status-cadastro" class="multipla btn-outline-secondary">Entrada</label>



							<input type="radio" name="status-cadastro" id="saida_status-cadastro" class="multipla" />

							<label for="saida_status-cadastro" class="multipla btn-outline-secondary">Saída</label>

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

							<label for="placa-busca">Placa</label>

							<input class="form-control" type="text" id="placa-busca" />

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="status-busca">Status</label>



							<input type="radio" name="status-busca" id="entrada_status-busca" class="multipla" />

							<label for="entrada_status-busca" class="multipla btn-outline-secondary">Entrada</label>



							<input type="radio" name="status-busca" id="saida_status-busca" class="multipla" />

							<label for="saida_status-busca" class="multipla btn-outline-secondary">Saída</label>

<!-- <script src="../assets/js/uploader.js"></script> -->

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

				<h4 class="card-title">Configuração</h4>



				<div class="row mt-4">

					<div class="col-md-6">

						<div class="form-group">

							<label for="qtd_veiculos-configuracao">Quantidade de veículos</label>

							<input class="form-control" type="number" id="qtd_veiculos-configuracao" />

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="tempo_alerta-configuracao">Tempo de alerta</label>

							<input class="form-control" type="text" id="tempo_alerta-configuracao" />

						</div>

					</div>

				</div>



				<button class="btn btn-primary">Salvar</button>

			</div>

		</div>

	</div>

</div>



<!-- <script src="../assets/js/uploader.js"></script> -->



<script>

	CKEDITOR.replaceAll('ckeditor');

</script>

