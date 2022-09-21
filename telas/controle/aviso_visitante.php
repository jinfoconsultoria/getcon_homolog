<ul class="nav nav-tabs nav-tabs-main" id="abas" role="tablist">

	<li class="nav-item" role="presentation">

		<a class="nav-link active" id="cadastro-tab" data-toggle="tab" href="#cadastro" role="tab" aria-controls="cadastro" aria-selected="true">Cadastrar</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="busca-tab" data-toggle="tab" href="#busca" role="tab" aria-controls="busca" aria-selected="false">Procurar</a>

	</li>

</ul>



<div class="tab-content" id="abasConteudo">

	<div class="tab-pane fade show active" id="cadastro" role="tabpanel" aria-labelledby="cadastro-tab">

		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Informações do cadastro</h4>



				<div class="row mt-4">

					<div class="col-md-4">

						<div class="form-group">

							<label for="titulo-cadastro">Nome</label>

							<input class="form-control" type="text" id="titulo-cadastro" />

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="titulo-cadastro">Placa</label>

							<input class="form-control" type="text" id="titulo-cadastro" />

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="titulo-cadastro">Documento</label>

							<input class="form-control" type="text" id="titulo-cadastro" />

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label for="id_do_radio">Tipo de visitante</label>

							<select class="custom-select form-control" id="id_do_radio">

								<option>Carteiro</option>

								<option>Convidado</option>

								<option>Entregador</option>

								<option>Reparo</option>

								<option>Visitante</option>

							</select>

						</div>

					</div>

					<div class="col-md-4">

                        <div class="form-group">

                            <label for="apto-observacao">Apartamento</label>

                            <select disabled class="custom-select form-control" id="apto-observacao">

                                <option selected>Não existem apartamentos cadastrados.</option>

                            </select>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="form-group">

                            <label for="morador-observacao">Morador</label>

                            <select disabled class="custom-select form-control" id="morador-observacao">

<!-- <script src="../assets/js/uploader.js"></script> -->>Selecione o bloco e o apartamento.</option>

                            </select>

                        </div>

                    </div>

				</div>



				<div class="form-group">

					<label for="texto-cadastro">Observação</label>

					<textarea id="texto-cadastro" rows="5" class="form-control ckeditor"></textarea>

				</div>



				<button class="btn btn-primary">Cadastrar</button>

			</div>

		</div>

	</div>



	<div class="tab-pane fade" id="busca" role="tabpanel" aria-labelledby="busca-tab">

		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Faça uma busca</h4>



				<div class="form-group">

					<label for="nome-busca">Nome</label>

					<input class="form-control" type="text" id="nome-busca" />

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

</script>

