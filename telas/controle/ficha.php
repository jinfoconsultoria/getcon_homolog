<ul class="nav nav-tabs nav-tabs-main" id="abas" role="tablist">

	<li class="nav-item" role="presentation">

		<a class="nav-link active" id="cadastro-tab" data-toggle="tab" href="#cadastro" role="tab" aria-controls="cadastro" aria-selected="true">Cadastrar</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="registro-tab" data-toggle="tab" href="#registro" role="tab" aria-controls="registro" aria-selected="false">Registro</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="tipo-tab" data-toggle="tab" href="#tipo" role="tab" aria-controls="tipo" aria-selected="false">Tipo</a>

	</li>

</ul>



<div class="tab-content" id="abasConteudo">

	<div class="tab-pane fade show active" id="cadastro" role="tabpanel" aria-labelledby="cadastro-tab">

		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Cadastrar uma ficha</h4>



				<div class="form-group">

					<label for="nome-cadastro">Nome</label>

					<input class="form-control" type="text" id="nome-cadastro" />

				</div>



				<div class="form-group">

					<label for="texto-cadastro">Texto</label>

					<textarea id="texto-cadastro" class="form-control ckeditor" rows="3"></textarea>

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



	<div class="tab-pane fade" id="registro" role="tabpanel" aria-labelledby="registro-tab">

		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Registro</h4>



				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label for="bloco-registro">Bloco</label>

							<select disabled="" class="custom-select form-control" id="bloco-registro">

								<option selected="">Não existem blocos cadastrados.</option>

							</select>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="apto-registro">Apartamento</label>

							<select disabled="" class="custom-select form-control" id="apto-registro">

								<option selected="">Não existem apartamentos cadastrados.</option>

							</select>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="morador-registro">Morador</label>

							<select disabled="" class="custom-select form-control" id="morador-registro">

								<option selected="">Selecione o bloco e o apartamento.</option>

							</select>

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label for="data-registro">Data</label>

							<input class="form-control" type="date" id="data-registro" />

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="valor-registro">Valor</label>

							<div class="input-group">

								<div class="input-group-prepend">

									<span class="input-group-text">R$</span>

								</div>

<!-- <script src="../assets/js/uploader.js"></script> -->id="valor-registro" />

							</div>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="tipo-registro">Tipo</label>

							<select disabled class="custom-select form-control" id="tipo-registro">

								<option>Não existem tipos cadastrados.</option>

							</select>

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="imagem-registro">Imagem</label>

							<div>

								<div class="input-group">

									<div class="custom-file">

										<input type="file" class="custom-file-input" id="imagem-registro" />

										<label class="custom-file-label" for="imagem-cadastro"></label>

										<i class="preview-file far fa-eye d-none"></i>

									</div>

								</div>

							</div>

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="fornecedor-registro">Fornecedor</label>

							<div class="">

								<input class="form-control" type="text" id="fornecedor-registro" />

							</div>

						</div>

					</div>

				</div>



				<div class="form-group">

					<label for="observacao-registro">Observação</label>

					<textarea id="observacao-registro" class="form-control ckeditor" rows="3"></textarea>

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

</div>



<!-- <script src="../assets/js/uploader.js"></script> -->



<script>

	CKEDITOR.replaceAll('ckeditor');

	$('input[type="date"]').val(new Date().today());

</script>

