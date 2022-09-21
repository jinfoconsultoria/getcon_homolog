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

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="servico-tab" data-toggle="tab" href="#servico" role="tab" aria-controls="servico" aria-selected="false">Serviço</a>

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

							<label for="tipo-cadastro">Tipo</label>

							<select disabled class="custom-select form-control" id="tipo-cadastro">

								<option>Não existem tipos cadastrados.</option>

							</select>

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="data-cadastro">Data</label>

							<input class="form-control" type="date" id="data-cadastro" />

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="ocorrencia-cadastro">Ocorrência com</label>

							<select class="custom-select form-control" id="ocorrencia-cadastro">

								<option>Selecione um</option>

								<option>Morador</option>

								<option>Outras</option>

							</select>

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="feita-cadastro">Feita por</label>

							<select class="custom-select form-control" id="feita-cadastro">

								<option>Selecione um</option>

								<option>Adm reg.</option>

								<option>Adm morador</option>

							</select>

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label for="titulo-cadastro">Título</label>

							<input class="form-control" type="text" id="titulo-cadastro" />

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="localizacao-cadastro">Localização</label>

							<input class="form-control" type="text" id="localizacao-cadastro" />

						</div>

					</div>

					<div class="col-md-4">

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



				<div class="form-group">

					<label for="descricao-cadastro">Descrição</label>

					<textarea id="descricao-cadastro" rows="5" class="form-control ckeditor"></textarea>

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



				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label for="feita-busca">Feita por</label>

							<select class="custom-select form-control" id="feita-busca">

								<option>Selecione um</option>

								<option>Adm reg.</option>

								<option>Adm morador</option>

							</select>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="tipo-busca">Tipo</label>

							<select class="custom-select form-control" id="tipo-busca">

								<option>Não existem tipos cadastrados.</option>

							</select>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="status-busca">Status</label>

							<select class="custom-select form-control" id="status-busca">

<!-- <script src="../assets/js/uploader.js"></script> -->/option>

							</select>

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label for="local-busca">Local</label>

							<select disabled class="custom-select form-control" id="local-busca">

								<option>Não existem locais cadastradas.</option>

							</select>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="ocorrencia-busca">Ocorrência</label>

							<select disabled class="custom-select form-control" id="ocorrencia-busca">

								<option>Não existem ocorrências cadastradas.</option>

							</select>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="acao-busca">Ação</label>

							<select disabled class="custom-select form-control" id="acao-busca">

								<option>Não existem ações cadastradas.</option>

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



	<div class="tab-pane fade" id="configuracao" role="tabpanel" aria-labelledby="configuracao-tab">

		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Cadastrar tipo</h4>



				<div class="row mt-4">

					<div class="col-md-6">

						<div class="form-group">

							<div class="form-group">

								<label for="tipo-configuracao">Tipo</label>

								<input class="form-control" type="text" id="tipo-configuracao" />

							</div>

						</div>

					</div>

				</div>



				<button class="btn btn-primary">Cadastrar</button>

			</div>

		</div>

		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Cadastrar status</h4>



				<div class="row mt-4">

					<div class="col-md-6">

						<div class="form-group">

							<div class="form-group">

								<label for="status-configuracao">Status</label>

								<input class="form-control" type="text" id="status-configuracao" />

							</div>

						</div>

					</div>

				</div>



				<button class="btn btn-primary">Cadastrar</button>

			</div>

		</div>

		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Cadastrar local</h4>



				<div class="row mt-4">

					<div class="col-md-6">

						<div class="form-group">

							<div class="form-group">

								<label for="local-configuracao">Local</label>

								<input class="form-control" type="text" id="local-configuracao" />

							</div>

						</div>

					</div>

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



	<div class="tab-pane fade" id="servico" role="tabpanel" aria-labelledby="servico-tab">

		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Escolher serviço</h4>



				<div class="row mt-4">

					<div class="col-md-6">

						<div class="form-group">

							<div class="form-group">

								<label for="nome-servico">Nome</label>

								<input class="form-control" type="text" id="nome-servico" />

							</div>

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="valor-servico">Valor</label>

							<div class="input-group">

								<div class="input-group-prepend">

									<span class="input-group-text">R$</span>

								</div>

								<input class="form-control" type="text" id="valor-servico" />

							</div>

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

