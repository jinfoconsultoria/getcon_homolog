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

				<h4 class="card-title">Cadastrar um malote</h4>



				<div class="row">

					<div class="col-md-3">

						<div class="form-group">

							<label for="perfil-cadastro">Perfil</label>



							<input type="radio" name="perfil-cadastro" id="morador_perfil-cadastro" class="multipla" />

							<label for="morador_perfil-cadastro" class="multipla btn-outline-secondary">Morador</label>



							<input type="radio" name="perfil-cadastro" id="empresa_perfil-cadastro" class="multipla" />

							<label for="empresa_perfil-cadastro" class="multipla btn-outline-secondary">Empresa</label>

						</div>

					</div>

					<div class="col-md-5">

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

					<div class="col-md-4">

						<div class="form-group">

							<label for="tipo-cadastro">Tipo</label>

							<select disabled class="custom-select form-control" id="tipo-cadastro">

								<option>Não existem tipos cadastrados.</option>

							</select>

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-3">

						<div class="form-group">

							<label for="data-cadastro">Data</label>

							<input class="form-control" type="date" id="data-cadastro" />

						</div>

					</div>

					<div class="col-md-3">

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

					<div class="col-md-3">

						<div class="form-group">

							<label for="numero_doc-cadastro">Número da documentação</label>

							<div class="">

								<input class="form-control" type="text" id="numero_doc-cadastro" />

							</div>

						</div>

					</div>

					<div class="col-md-3">

						<div class="form-group">

							<label for="empresa-cadastro">Empresa</label>

							<div class="">

								<input class="form-control" type="text" id="empresa-cadastro" />

							</div>

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



				<div class="form-group">

					<label for="observacao-cadastro">Observação</label>

					<textarea id="observacao-cadastro" class="form-control ckeditor" rows="3"></textarea>

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

				<h4 class="card-title">Buscar</h4>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="nome-busca">Nome</label>

								<input class="form-control" type="text" id="nome-busca" />

						</div>

					</div>
<!-- <script src="../assets/js/uploader.js"></script> -->
					<div class="col-md-6">

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

				</div>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="vencimento_inicial-busca">Data de vencimento inicial</label>

							<input class="form-control" type="date" id="vencimento_inicial-busca">

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="vencimento_final-busca">Data de vencimento final</label>

							<input class="form-control" type="date" id="vencimento_final-busca">

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="cadastro_inicial-busca">Data de cadastro inicial</label>

							<input class="form-control" type="date" id="cadastro_inicial-busca">

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="cadastro_final-busca">Data de cadastro final</label>

							<input class="form-control" type="date" id="cadastro_final-busca">

						</div>

					</div>

				</div>





				<div class="row">

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

					<div class="col-md-4">

						<div class="form-group">

							<label for="empresa-busca">Empresa</label>

							<select disabled class="custom-select form-control" id="empresa-busca">

								<option>Não existem empresas cadastrados.</option>

							</select>

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

					<div class="col-md-4">

						<div class="form-group">

							<label for="ordem-busca">Ordem</label>

							<select class="custom-select form-control" id="ordem-busca">

								<option>Selecione um</option>

								<option>Alfabética crescente</option>

								<option>Alfabética decrescente</option>

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

