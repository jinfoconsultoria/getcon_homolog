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

					<div class="col-md-4">

						<div class="form-group">

							<label for="bloco-busca">Bloco</label>

							<select disabled class="custom-select form-control" id="bloco-busca">

								<option selected="">Não existem blocos cadastrados.</option>

							</select>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="apto-busca">Apartamento</label>

							<select disabled class="custom-select form-control" id="apto-busca">

								<option selected="">Não existem apartamentos cadastrados.</option>

							</select>

						</div>

                    </div>

                    <div class="col-md-4">

						<div class="form-group">

							<label for="bloco-busca">Morador</label>

							<select disabled class="custom-select form-control" id="bloco-busca">

								<option selected="">Selecione o bloco e o apartamento.</option>

							</select>

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

                            <label for="veiculo-busca">Tem veículo?</label>



                            <input type="radio" name="veiculo-busca" id="sim_veiculo-busca" class="multipla">

                            <label for="sim_veiculo-busca" class="multipla btn-outline-success">Sim</label>



                            <input type="radio" name="veiculo-busca" id="nao_veiculo-busca" class="multipla">
<!-- <script src="../assets/js/uploader.js"></script> -->
                            <label for="nao_veiculo-busca" class="multipla btn-outline-danger">Não</label>

                        </div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

                            <label for="status_morador-busca">Status do morador</label>



                            <input type="radio" name="status_morador-busca" id="novo_status_morador-busca" class="multipla">

                            <label for="novo_status_morador-busca" class="multipla btn-outline-secondary">Novo</label>



                            <input type="radio" name="status_morador-busca" id="ativo_status_morador-busca" class="multipla">

                            <label for="ativo_status_morador-busca" class="multipla btn-outline-secondary">Ativo</label>



                            <input type="radio" name="status_morador-busca" id="inativo_status_morador-busca" class="multipla">

                            <label for="inativo_status_morador-busca" class="multipla btn-outline-secondary">Inativo</label>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="form-group">

                            <label for="placa-busca">Placa</label>

                            <div class="">

                                <input class="form-control" type="text" id="placa-busca" />

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

