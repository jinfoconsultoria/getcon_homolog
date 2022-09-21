<ul class="nav nav-tabs nav-tabs-main" id="abas" role="tablist">

	<li class="nav-item" role="presentation">

		<a class="nav-link active" id="cadastro-tab" data-toggle="tab" href="#cadastro" role="tab" aria-controls="cadastro" aria-selected="true">Cadastrar</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="busca-tab" data-toggle="tab" href="#busca" role="tab" aria-controls="busca" aria-selected="false">Procurar</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="status-tab" data-toggle="tab" href="#status" role="tab" aria-controls="status" aria-selected="false">Status</a>

	</li>

</ul>



<div class="tab-content" id="abasConteudo">

	<div class="tab-pane fade show active" id="cadastro" role="tabpanel" aria-labelledby="cadastro-tab">

		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Cadastrar mensagem</h4>



				<div class="form-group mt-4">

					<label for="assunto-cadastro">Assunto</label>

					<input class="form-control" type="text" id="assunto-cadastro" />

				</div>



				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label for="nivel-cadastro">Nível</label>

							<select disabled class="custom-select form-control" id="nivel-cadastro">

								<option>Não existem níveis cadastrados.</option>

							</select>

						</div>

					</div>

					<div class="col-md-4">

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

                            <label for="status-cadastro">Status</label>

                            <select disabled class="custom-select form-control" id="status-cadastro">

                                <option>Não existem status cadastrados.</option>

                            </select>

						</div>

					</div>

				</div>



				<div class="row">

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



				<div class="form-group">

					<label for="texto-cadastro">Texto</label>

					<textarea id="texto-cadastro" rows="5" class="form-control ckeditor"></textarea>

				</div>



				<div class="table-responsive" style="text-align: center;">

					<table class="table">

						<thead>

							<tr>

								<th scope="col">Total ativo</th>

								<th scope="col">Total filtrado</th>

								<th scope="col">Sem email</th>

								<th scope="col">Com email</th>

								<th scope="col">Apto com email</th>

								<th scope="col">Total</th>

							</tr>

						</thead>

						<tbody>

							<tr style="background-color: whitesmoke;">

								<td>

									0

								</td>

								<td>

									0

								</td>

								<td>

									0

								</td>

								<td>

									0

								</td>

								<td>

									0

								</td>

								<td>

									0

								</td>

							</tr>

						</tbody>

					</table>

<!-- <script src="../assets/js/uploader.js"></script> -->



				<button class="btn btn-primary">Cadastrar</button>

			</div>

		</div>

	</div>



	<div class="tab-pane fade" id="busca" role="tabpanel" aria-labelledby="busca-tab">

		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Faça uma busca</h4>



				<div class="row mt-4">

					<div class="col-md-6">

						<div class="form-group">

							<label for="assunto-busca">Assunto</label>

							<input class="form-control" type="text" id="assunto-busca" />

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="status-busca">Status</label>

                            <select disabled class="custom-select form-control" id="status-busca">

                                <option>Não existem status cadastrados.</option>

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



	<div class="tab-pane fade" id="status" role="tabpanel" aria-labelledby="status-tab">

		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Cadastrar um status</h4>



				<div class="form-group mt-4">

                    <label for="status-status">Status</label>

                    <input class="form-control" type="text" id="status-status" />

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

</script>

