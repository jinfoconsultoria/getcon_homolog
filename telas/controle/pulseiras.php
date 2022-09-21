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

</ul>



<div class="tab-content" id="abasConteudo">

	<div class="tab-pane fade show active" id="cadastro" role="tabpanel" aria-labelledby="cadastro-tab">

		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Informações do cadastro</h4>



				<div class="form-group mt-4">

					<label for="entrada-cadastro">Entrada de</label>



					<input type="radio" checked name="entrada-cadastro" id="morador_entrada-cadastro" class="multipla" />

					<label for="morador_entrada-cadastro" class="multipla btn-outline-secondary">Morador</label>



					<input type="radio" name="entrada-cadastro" id="visitante_entrada-cadastro" class="multipla" />

					<label for="visitante_entrada-cadastro" class="multipla btn-outline-secondary">Visitante</label>

				</div>



				<div class="form-group div-visitante" style="display: none;">

					<label for="nome_visitante-cadastro">Nome do visitante</label>

					<input class="form-control" type="text" id="nome_visitante-cadastro" />

				</div>



				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label for="cor_pulseira-cadastro">Cor da pulseira</label>

							<select disabled class="custom-select form-control" id="cor_pulseira-cadastro">

								<option>Não existem cores cadastradas.</option>

							</select>

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

							<label for="tipo-cadastro">Tipo</label>

							<select disabled class="custom-select form-control" id="tipo-cadastro">

								<option>Não existem tipos cadastrados.</option>

							</select>

						</div>

					</div>

				</div>



				<div class="row div-morador">

					<div class="col-md-4">

						<div class="form-group">

							<label for="bloco-cadastro">Bloco</label>

							<select disabled class="custom-select form-control" id="bloco-cadastro">

								<option selected>Não existem blocos cadastrados.</option>

							</select>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="apto-cadastro">Apartamento</label>

							<select disabled class="custom-select form-control" id="apto-cadastro">

								<option selected>Não existem apartamentos cadastrados.</option>

							</select>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="morador-cadastro">Morador</label>

							<select disabled class="custom-select form-control" id="morador-cadastro">

								<option selected>Selecione o bloco e o apartamento.</option>

							</select>

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



                <div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label for="bloco-busca">Bloco</label>

							<select disabled class="custom-select form-control" id="bloco-busca">

								<option selected>Não existem blocos cadastrados.</option>

							</select>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="apto-busca">Apartamento</label>

							<select disabled class="custom-select form-control" id="apto-busca">

								<option selected>Não existem apartamentos cadastrados.</option>

							</select>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="morador-busca">Morador</label>

							<select disabled class="custom-select form-control" id="morador-busca">

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

					<h5 class="card-subtitle" style="text-align: center;">Aqui aparecerão todos os resultados da busca.</h5>

				</div>

			</div>

		</div>

	</div>



	<div class="tab-pane fade" id="tipo" role="tabpanel" aria-labelledby="tipo-tab">

		<div class="card">

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



	$('input[name="entrada-cadastro"]').on('click', (e) => {

		if ($(e.target).attr('id') == 'morador_entrada-cadastro') {

			$('.div-visitante').hide();

			// $('.convidados-arquivo').show();

		} else if ($(e.target).attr('id') == 'visitante_entrada-cadastro') {

			// $('.convidados-arquivo').hide();

			$('.div-visitante').show();

		}

	});

</script>

