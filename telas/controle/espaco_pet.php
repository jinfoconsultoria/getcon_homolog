<ul class="nav nav-tabs nav-tabs-main" id="abas" role="tablist">

	<li class="nav-item" role="presentation">

		<a class="nav-link active" id="cadastro-tab" data-toggle="tab" href="#cadastro" role="tab" aria-controls="cadastro" aria-selected="true">Cadastrar</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="tipo-tab" data-toggle="tab" href="#tipo" role="tab" aria-controls="tipo" aria-selected="false">Tipo</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="busca-tab" data-toggle="tab" href="#busca" role="tab" aria-controls="busca" aria-selected="false">Procurar</a>

	</li>

</ul>



<div class="tab-content" id="abasConteudo">

	<div class="tab-pane fade show active" id="cadastro" role="tabpanel" aria-labelledby="cadastro-tab">

		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Cadastrar um PET</h4>



				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label for="assunto-cadastro">Nome</label>

							<input class="form-control" type="text" id="assunto-cadastro" />

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="assunto-cadastro">Raça</label>

							<input class="form-control" type="text" id="assunto-cadastro" />

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="assunto-cadastro">Porte</label>

							<input class="form-control" type="text" id="assunto-cadastro" />

						</div>

					</div>

				</div>



				<div class="row">

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

					<div class="col-md-6">

						<div class="form-group">

							<label for="tipo-busca">Tipo</label>

							<select disabled="" class="custom-select form-control" id="tipo-busca">

								<option selected="">Não existem tipos cadastrados.</option>

							</select>

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label for="bloco-cadastro">Bloco</label>

							<select disabled="" class="custom-select form-control" id="bloco-cadastro">

								<option selected="">Não existem blocos cadastrados.</option>

							</select>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="apto-cadastro">Apartamento</label>

							<select disabled="" class="custom-select form-control" id="apto-cadastro">

								<option selected="">Não existem apartamentos cadastrados.</option>

							</select>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="morador-cadastro">Morador</label>

							<select disabled="" class="custom-select form-control" id="morador-cadastro">

								<option selected="">Selecione o bloco e o apartamento.</option>

							</select>

						</div>

					</div>

				</div>



<!-- <script src="../assets/js/uploader.js"></script> -->utton>

			</div>

		</div>

	</div>



	<div class="tab-pane fade" id="tipo" role="tabpanel" aria-labelledby="tipo-tab">

		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Cadastrar tipo</h4>



				<div class="form-group">

					<label for="nome-tipo">Nome</label>

					<input class="form-control" type="text" id="nome-tipo" />

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



	<div class="tab-pane fade" id="busca" role="tabpanel" aria-labelledby="busca-tab">

		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Faça uma busca</h4>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="assunto-busca">Nome</label>

							<input class="form-control" type="text" id="assunto-busca" />

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="tipo-busca">Tipo</label>

							<select disabled="" class="custom-select form-control" id="tipo-busca">

								<option selected="">Não existem tipos cadastrados.</option>

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

</div>



<!-- <script src="../assets/js/uploader.js"></script> -->



<script>

	CKEDITOR.replaceAll('ckeditor');

	$('input[type="date"]').val(new Date().today());

</script>

