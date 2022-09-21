<ul class="nav nav-tabs nav-tabs-main" id="abas" role="tablist">

	<li class="nav-item" role="presentation">

		<a class="nav-link active" id="relatorio-tab" data-toggle="tab" href="#relatorio" role="tab" aria-controls="relatorio" aria-selected="true">Relatório</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="resumo-tab" data-toggle="tab" href="#resumo" role="tab" aria-controls="resumo" aria-selected="false">Resumo</a>

	</li>

</ul>



<div class="tab-content" id="abasConteudo">

	<div class="tab-pane fade show active" id="relatorio" role="tabpanel" aria-labelledby="relatorio-tab">

		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Faça uma busca</h4>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="data_inicial-relatorio">Data inicial</label>

							<input class="form-control" type="date" id="data_inicial-relatorio" />

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="data_final-relatorio">Data final</label>

							<input class="form-control" type="date" id="data_final-relatorio" />

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label for="bloco-relatorio">Bloco</label>

							<select disabled class="custom-select form-control" id="bloco-relatorio">

								<option selected>Não existem blocos cadastrados.</option>

							</select>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="apto-relatorio">Apartamento</label>

							<select disabled class="custom-select form-control" id="apto-relatorio">

								<option selected>Não existem apartamentos cadastrados.</option>

							</select>

						</div>

<!-- <script src="../assets/js/uploader.js"></script> -->

					<div class="col-md-4">

						<div class="form-group">

							<label for="morador-relatorio">Morador</label>

							<select disabled class="custom-select form-control" id="morador-relatorio">

								<option selected>Selecione o bloco e o apartamento.</option>

							</select>

						</div>

					</div>

				</div>



				<button class="btn btn-primary">Procurar</button>

			</div>

		</div>

	</div>



	<div class="tab-pane fade" id="resumo" role="tabpanel" aria-labelledby="resumo-tab">

		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Faça uma busca</h4>



				<div class="form-group">

					<label for="data_inicial-relatorio">Data</label>

					<input class="form-control" type="date" id="data_inicial-relatorio" />

				</div>



				<button class="btn btn-primary">Procurar</button>

			</div>

		</div>



		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Resumo</h4>

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

