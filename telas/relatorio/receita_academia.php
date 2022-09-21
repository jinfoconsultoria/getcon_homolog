<ul class="nav nav-tabs nav-tabs-main" id="abas" role="tablist">

	<li class="nav-item" role="presentation">

		<a class="nav-link active" id="receita-tab" data-toggle="tab" href="#receita" role="tab" aria-controls="receita" aria-selected="true">Receitas da academia</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="fechamento-tab" data-toggle="tab" href="#fechamento" role="tab" aria-controls="fechamento" aria-selected="false">Fechamento</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="busca_periodo-tab" data-toggle="tab" href="#busca_periodo" role="tab" aria-controls="busca_periodo" aria-selected="false">Procurar período</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="adicionar_periodo-tab" data-toggle="tab" href="#adicionar_periodo" role="tab" aria-controls="adicionar_periodo" aria-selected="false">Adicionar ao período</a>

	</li>

</ul>



<div class="tab-content" id="abasConteudo">

	<div class="tab-pane fade show active" id="receita" role="tabpanel" aria-labelledby="receita-tab">

		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Faça uma busca</h4>



				<div class="form-group mt-4">

					<label for="periodo-receita">Período</label>

					<select disabled class="custom-select form-control" id="periodo-receita">

						<option>Não existem períodos cadastrados.</option>

					</select>

				</div>



				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label for="bloco-receita">Bloco</label>

							<select disabled class="custom-select form-control" id="bloco-receita">

								<option selected>Não existem blocos cadastrados.</option>

							</select>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="apto-receita">Apartamento</label>

							<select disabled class="custom-select form-control" id="apto-receita">

								<option selected>Não existem apartamentos cadastrados.</option>

							</select>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="morador-receita">Morador</label>

							<select disabled class="custom-select form-control" id="morador-receita">

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



	<div class="tab-pane fade" id="fechamento" role="tabpanel" aria-labelledby="fechamento-tab">

		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Fechamento</h4>



				<div class="form-group mt-4">

					<label for="periodo-fechamento">Período</label>

					<select disabled class="custom-select form-control" id="periodo-fechamento">

						<option>Não existem períodos cadastrados.</option>

					</select>

				</div>



				<button class="btn btn-primary">Gerar relatório</button>

			</div>

		</div>



		<div class="card">

			<div class="card-body">

<!-- <script src="../assets/js/uploader.js"></script> -->

				<div class="relatorios">

					<i class="fad fa-file-pdf gerar-pdf"></i>

					<i class="fad fa-file-excel gerar-xls"></i>

				</div>



				<div id="busca-resultado">

					<h5 class="card-subtitle" style="text-align: center;">Aqui aparecerão os resultados do relatório.</h5>

				</div>

			</div>

		</div>

	</div>



	<div class="tab-pane fade" id="busca_periodo" role="tabpanel" aria-labelledby="busca_periodo-tab">

		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Faça uma busca</h4>



				<div class="row mt-4">

                    <div class="col-md-6">

                        <div class="form-group">

                            <label for="periodo-busca_periodo">Período</label>

                            <select disabled class="custom-select form-control" id="periodo-busca_periodo">

                                <option>Não existem períodos cadastrados.</option>

                            </select>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-group">

                            <label for="ordem-busca_periodo">Ordem</label>

                            <select class="custom-select form-control" id="ordem-busca_periodo">

                                <option>Nome</option>

                                <option>Bloco e apartamento</option>

                                <option>Data ativo - Crescente</option>

                                <option>Data ativo - Decrescente</option>

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



	<div class="tab-pane fade" id="adicionar_periodo" role="tabpanel" aria-labelledby="adicionar_periodo-tab">

		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Adicionar ao perído</h4>



				<div class="row mt-4">

                    <div class="col-md-6">

                        <div class="form-group">

                            <label for="periodo-adicionar_periodo">Período</label>

                            <select disabled class="custom-select form-control" id="periodo-adicionar_periodo">

                                <option>Não existem períodos cadastrados.</option>

                            </select>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-group">

                            <label for="ordem-adicionar_periodo">Ordem</label>

                            <select class="custom-select form-control" id="ordem-adicionar_periodo">

                                <option>Nome</option>

                                <option>Bloco e apartamento</option>

                                <option>Data ativo - Crescente</option>

                                <option>Data ativo - Decrescente</option>

                            </select>

                        </div>

                    </div>

                </div>



				<button class="btn btn-primary">Cadastrar</button>

			</div>

		</div>

	</div>

</div>



<!-- <script src="../assets/js/uploader.js"></script> -->



<script>

	CKEDITOR.replaceAll('ckeditor');

</script>

