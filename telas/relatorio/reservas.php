<ul class="nav nav-tabs nav-tabs-main" id="abas" role="tablist">

	<li class="nav-item" role="presentation">

		<a class="nav-link active" id="busca-tab" data-toggle="tab" href="#busca" role="tab" aria-controls="busca" aria-selected="false">Procurar</a>

	</li>

</ul>



<div class="tab-content" id="abasConteudo">

	<div class="tab-pane fade show active" id="busca" role="tabpanel" aria-labelledby="busca-tab">

		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Faça uma busca</h4>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="usuario-busca">Usuário</label>

							<div class="">

								<input class="form-control" type="text" id="usuario-busca" />

							</div>

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="bloco-busca">Ambiente</label>

							<select disabled class="custom-select form-control" id="bloco-busca">

								<option selected="">Não existem ambientes cadastrados.</option>

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



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="bloco-busca">Bloco</label>

							<select disabled class="custom-select form-control" id="bloco-busca">

								<option selected="">Não existem blocos cadastrados.</option>

							</select>

						</div>

					</div>
<!-- <script src="../assets/js/uploader.js"></script> -->
					<div class="col-md-6">

						<div class="form-group">

							<label for="apto-busca">Apartamento</label>

							<select disabled class="custom-select form-control" id="apto-busca">

								<option selected="">Não existem apartamentos cadastrados.</option>

							</select>

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="bloco-busca">Morador</label>

							<select disabled class="custom-select form-control" id="bloco-busca">

								<option selected="">Selecione o bloco e o apartamento.</option>

							</select>

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="status-busca">Status</label>

							<select class="custom-select form-control" id="status-busca">

								<option>1º na espera</option>

								<option>Cancelada</option>

								<option>Confirmada</option>

								<option>Expirada</option>

								<option>Já cobrada</option>

								<option>Pré-reserva</option>

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

