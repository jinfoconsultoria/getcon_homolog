<ul class="nav nav-tabs nav-tabs-main" id="abas" role="tablist">

	<li class="nav-item" role="presentation">

		<a class="nav-link active" id="cadastro-tab" data-toggle="tab" href="#cadastro" role="tab" aria-controls="cadastro" aria-selected="false">Cadastrar</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="busca-tab" data-toggle="tab" href="#busca" role="tab" aria-controls="busca" aria-selected="false">Procurar</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="configuracao-tab" data-toggle="tab" href="#configuracao" role="tab" aria-controls="configuracao" aria-selected="false">Configuração</a>

	</li>

</ul>



<div class="tab-content" id="abasConteudo">

	<div class="tab-pane fade show active" id="cadastro" role="tabpanel" aria-labelledby="cadastro-tab">

		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Cadastrar acesso</h4>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="bloco-cadastro">Bloco</label>

							<select disabled class="custom-select form-control" id="bloco-cadastro">

								<option selected="">Não existem blocos cadastrados.</option>

							</select>

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="apto-cadastro">Apartamento</label>

							<select disabled class="custom-select form-control" id="apto-cadastro">

								<option selected="">Não existem apartamentos cadastrados.</option>

							</select>

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="morador-cadastro">Morador</label>

							<select disabled class="custom-select form-control" id="morador-cadastro">

								<option selected="">Selecione o bloco e o apartamento.</option>

							</select>

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="status_morador-cadastro">Status do morador</label>



							<input type="radio" name="status_morador-cadastro" id="ativo_status_morador-cadastro" class="multipla" />

							<label for="ativo_status_morador-cadastro" class="multipla btn-outline-secondary">Ativo</label>



							<input type="radio" name="status_morador-cadastro" id="inativo_status_morador-cadastro" class="multipla" />

							<label for="inativo_status_morador-cadastro" class="multipla btn-outline-secondary">Inativo</label>

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

							<label for="morador-busca">Morador</label>

							<select disabled class="custom-select form-control" id="morador-busca">

								<option selected="">Selecione o bloco e o apartamento.</option>

							</select>

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">
<!-- <script src="../assets/js/uploader.js"></script> -->
							<label for="status_morador-busca">Status do morador</label>



							<input type="radio" name="status_morador-busca" id="ativo_status_morador-busca" class="multipla" />

							<label for="ativo_status_morador-busca" class="multipla btn-outline-secondary">Ativo</label>



							<input type="radio" name="status_morador-busca" id="inativo_status_morador-busca" class="multipla" />

							<label for="inativo_status_morador-busca" class="multipla btn-outline-secondary">Inativo</label>

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

				<h4 class="card-title">Faça uma busca</h4>



				<div class="row">

					<div class="col-md-3">

						<div class="form-group">

							<label for="valor_1-configuracao">Valor 1</label>

							<div class="input-group">

								<div class="input-group-prepend">

									<span class="input-group-text">R$</span>

								</div>

								<input value="60" class="form-control" type="text" id="valor_1-configuracao" />

							</div>

						</div>

					</div>

					<div class="col-md-3">

						<div class="form-group">

							<label for="valor_2-configuracao">Valor 2</label>

							<div class="input-group">

								<div class="input-group-prepend">

									<span class="input-group-text">R$</span>

								</div>

								<input value="40" class="form-control" type="text" id="valor_2-configuracao" />

							</div>

						</div>

					</div>

					<div class="col-md-3">

						<div class="form-group">

							<label for="valor_3-configuracao">Valor 3</label>

							<div class="input-group">

								<div class="input-group-prepend">

									<span class="input-group-text">R$</span>

								</div>

								<input value="40" class="form-control" type="text" id="valor_3-configuracao" />

							</div>

						</div>

					</div>

					<div class="col-md-3">

						<div class="form-group">

							<label for="pacote_cobranca-configuracao">Pacote cobrança</label>

							<div class="input-group">

								<div class="input-group-prepend">

									<span class="input-group-text">R$</span>

								</div>

								<input value="100" class="form-control" type="text" id="pacote_cobranca-configuracao" />

							</div>

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-3">

						<div class="form-group">

							<label for="idade_minima-configuracao">Idade mínima</label>

							<input value="10" class="form-control" type="text" id="idade_minima-configuracao" />

						</div>

					</div>

					<div class="col-md-3">

						<div class="form-group">

							<label for="dia_fechamento-configuracao">Dia de fechamento</label>

							<input value="15" class="form-control" type="text" id="dia_fechamento-configuracao" />

						</div>

                    </div>

                    <div class="col-md-3">

                        <div class="form-group">

                            <label for="multa-configuracao">Gera multa?</label>



                            <input type="radio" name="multa-configuracao" id="sim_multa-configuracao" class="multipla" />

                            <label for="sim_multa-configuracao" class="multipla btn-outline-success">Sim</label>



                            <input checked type="radio" name="multa-configuracao" id="nao_multa-configuracao" class="multipla" />

                            <label for="nao_multa-configuracao" class="multipla btn-outline-danger">Não</label>

                        </div>

                    </div>

				</div>



				<button class="btn btn-primary">Atualizar</button>

			</div>

		</div>

	</div>

</div>



<!-- <script src="../assets/js/uploader.js"></script> -->



<script>

	CKEDITOR.replaceAll('ckeditor');

</script>

