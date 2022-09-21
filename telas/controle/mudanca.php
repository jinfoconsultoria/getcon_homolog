<ul class="nav nav-tabs nav-tabs-main" id="abas" role="tablist">

	<li class="nav-item" role="presentation">

		<a class="nav-link active" id="cadastro-tab" data-toggle="tab" href="#cadastro" role="tab" aria-controls="cadastro" aria-selected="true">Cadastrar</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="busca-tab" data-toggle="tab" href="#busca" role="tab" aria-controls="busca" aria-selected="false">Procurar</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="horario-tab" data-toggle="tab" href="#horario" role="tab" aria-controls="horario" aria-selected="false">Horário</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="bloqueio-tab" data-toggle="tab" href="#bloqueio" role="tab" aria-controls="bloqueio" aria-selected="false">Bloqueio</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="configuracao-tab" data-toggle="tab" href="#configuracao" role="tab" aria-controls="configuracao" aria-selected="false">Configuração</a>

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

							<label for="data-cadastro">Data</label>

							<input class="form-control" type="date" id="data-cadastro" />

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="hora-cadastro">Hora</label>

							<input class="form-control" type="time" id="hora-cadastro" />

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="situacao-cadastro">Situação</label>



							<input type="radio" name="situacao-cadastro" id="entrada_situacao-cadastro" class="multipla" />

							<label for="entrada_situacao-cadastro" class="multipla btn-outline-secondary">Entrada</label>



							<input type="radio" name="situacao-cadastro" id="saida_situacao-cadastro" class="multipla" />

							<label for="saida_situacao-cadastro" class="multipla btn-outline-secondary">Saída</label>

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

					<textarea id="observacao-cadastro" rows="5" class="form-control ckeditor"></textarea>

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

					<div class="col-md-4">

						<div class="form-group">

							<label for="data_inicial-busca">Data inicial</label>

							<input class="form-control" type="date" id="data_inicial-busca" />

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="data_final-busca">Data final</label>

							<input class="form-control" type="date" id="data_final-busca" />

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label for="situacao-busca">Situação</label>



							<input type="radio" name="situacao-busca" id="entrada_situacao-busca" class="multipla" />

							<label for="entrada_situacao-busca" class="multipla btn-outline-secondary">Entrada</label>



							<input type="radio" name="situacao-busca" id="saida_situacao-busca" class="multipla" />

							<label for="saida_situacao-busca" class="multipla btn-outline-secondary">Saída</label>

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



	<div class="tab-pane fade" id="horario" role="tabpanel" aria-labelledby="horario-tab">

		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Horário de funcionamento</h4>

				<div class="table-responsive mt-4">

					<table class="table">

						<thead>

							<tr>

								<th scope="col">#</th>

								<th scope="col"><span class="table-header">Segunda</span> <input type="checkbox" checked class="switch" id="segunda-switch" /> <label class="toggle" for="segunda-switch"></label></th>

								<th scope="col"><span class="table-header">Terça</span> <input type="checkbox" checked class="switch" id="terca-switch" /> <label class="toggle" for="terca-switch"></label></th>

								<th scope="col"><span class="table-header">Quarta</span> <input type="checkbox" checked class="switch" id="quarta-switch" /> <label class="toggle" for="quarta-switch"></label></th>

								<th scope="col"><span class="table-header">Quinta</span> <input type="checkbox" checked class="switch" id="quinta-switch" /> <label class="toggle" for="quinta-switch"></label></th>

								<th scope="col"><span class="table-header">Sexta</span> <input type="checkbox" checked class="switch" id="sexta-switch" /> <label class="toggle" for="sexta-switch"></label></th>

								<th scope="col"><span class="table-header">Sábado</span> <input type="checkbox" checked class="switch" id="sabado-switch" /> <label class="toggle" for="sabado-switch"></label></th>

								<th scope="col"><span class="table-header">Domingo</span> <input type="checkbox" checked class="switch" id="domingo-switch" /> <label class="toggle" for="domingo-switch"></label></th>

							</tr>

						</thead>

						<tbody>

							<tr>

								<th scope="row">Início</th>

								<td>

									<select class="custom-select form-control" name="funcionamento_inicio">

										<option value="00:00">00:00</option>

										<option value="01:00" selected="">01:00</option>

										<option value="02:00">02:00</option>

										<option value="03:00">03:00</option>

										<option value="04:00">04:00</option>

										<option value="05:00">05:00</option>

										<option value="06:00">06:00</option>

										<option value="07:00">07:00</option>

										<option value="08:00">08:00</option>

										<option value="09:00">09:00</option>

										<option value="10:00">10:00</option>

										<option value="11:00">11:00</option>

										<option value="12:00">12:00</option>

										<option value="13:00">13:00</option>

										<option value="14:00">14:00</option>

										<option value="15:00">15:00</option>

										<option value="16:00">16:00</option>

										<option value="17:00">17:00</option>

										<option value="18:00">18:00</option>

										<option value="19:00">19:00</option>

										<option value="20:00">20:00</option>

										<option value="21:00">21:00</option>

										<option value="22:00">22:00</option>

										<option value="23:00">23:00</option>

									</select>

								</td>

								<td>

									<select class="custom-select form-control" name="funcionamento_inicio">

										<option value="00:00">00:00</option>

										<option value="01:00" selected="">01:00</option>

										<option value="02:00">02:00</option>

										<option value="03:00">03:00</option>

										<option value="04:00">04:00</option>

										<option value="05:00">05:00</option>

										<option value="06:00">06:00</option>

										<option value="07:00">07:00</option>

										<option value="08:00">08:00</option>

										<option value="09:00">09:00</option>

										<option value="10:00">10:00</option>

										<option value="11:00">11:00</option>

										<option value="12:00">12:00</option>

										<option value="13:00">13:00</option>

										<option value="14:00">14:00</option>

										<option value="15:00">15:00</option>

										<option value="16:00">16:00</option>

										<option value="17:00">17:00</option>

										<option value="18:00">18:00</option>

										<option value="19:00">19:00</option>

										<option value="20:00">20:00</option>

										<option value="21:00">21:00</option>

										<option value="22:00">22:00</option>

										<option value="23:00">23:00</option>

									</select>

								</td>

								<td>

									<select class="custom-select form-control" name="funcionamento_inicio">

										<option value="00:00">00:00</option>

										<option value="01:00" selected="">01:00</option>

										<option value="02:00">02:00</option>

										<option value="03:00">03:00</option>

										<option value="04:00">04:00</option>

										<option value="05:00">05:00</option>

										<option value="06:00">06:00</option>

										<option value="07:00">07:00</option>

										<option value="08:00">08:00</option>

										<option value="09:00">09:00</option>

										<option value="10:00">10:00</option>

										<option value="11:00">11:00</option>

										<option value="12:00">12:00</option>

										<option value="13:00">13:00</option>

										<option value="14:00">14:00</option>

										<option value="15:00">15:00</option>

										<option value="16:00">16:00</option>

										<option value="17:00">17:00</option>

										<option value="18:00">18:00</option>

										<option value="19:00">19:00</option>

										<option value="20:00">20:00</option>

										<option value="21:00">21:00</option>

										<option value="22:00">22:00</option>

										<option value="23:00">23:00</option>

									</select>

								</td>

								<td>

									<select class="custom-select form-control" name="funcionamento_inicio">

										<option value="00:00">00:00</option>

										<option value="01:00" selected="">01:00</option>

										<option value="02:00">02:00</option>

										<option value="03:00">03:00</option>

										<option value="04:00">04:00</option>

										<option value="05:00">05:00</option>

										<option value="06:00">06:00</option>

										<option value="07:00">07:00</option>

										<option value="08:00">08:00</option>

										<option value="09:00">09:00</option>

										<option value="10:00">10:00</option>

										<option value="11:00">11:00</option>

										<option value="12:00">12:00</option>

										<option value="13:00">13:00</option>

										<option value="14:00">14:00</option>

										<option value="15:00">15:00</option>

										<option value="16:00">16:00</option>

										<option value="17:00">17:00</option>

										<option value="18:00">18:00</option>

										<option value="19:00">19:00</option>

										<option value="20:00">20:00</option>

										<option value="21:00">21:00</option>

										<option value="22:00">22:00</option>

										<option value="23:00">23:00</option>

									</select>

								</td>

								<td>

									<select class="custom-select form-control" name="funcionamento_inicio">

										<option value="00:00">00:00</option>

										<option value="01:00" selected="">01:00</option>

										<option value="02:00">02:00</option>

										<option value="03:00">03:00</option>

										<option value="04:00">04:00</option>

										<option value="05:00">05:00</option>

										<option value="06:00">06:00</option>

										<option value="07:00">07:00</option>

										<option value="08:00">08:00</option>

										<option value="09:00">09:00</option>

										<option value="10:00">10:00</option>

										<option value="11:00">11:00</option>

										<option value="12:00">12:00</option>

										<option value="13:00">13:00</option>

										<option value="14:00">14:00</option>

										<option value="15:00">15:00</option>

										<option value="16:00">16:00</option>

										<option value="17:00">17:00</option>

										<option value="18:00">18:00</option>

										<option value="19:00">19:00</option>

										<option value="20:00">20:00</option>

										<option value="21:00">21:00</option>

										<option value="22:00">22:00</option>

										<option value="23:00">23:00</option>

									</select>

								</td>

								<td>

									<select class="custom-select form-control" name="funcionamento_inicio">

										<option value="00:00">00:00</option>

										<option value="01:00" selected="">01:00</option>

										<option value="02:00">02:00</option>

										<option value="03:00">03:00</option>

										<option value="04:00">04:00</option>

										<option value="05:00">05:00</option>

										<option value="06:00">06:00</option>

										<option value="07:00">07:00</option>

										<option value="08:00">08:00</option>

										<option value="09:00">09:00</option>

										<option value="10:00">10:00</option>

										<option value="11:00">11:00</option>

										<option value="12:00">12:00</option>

										<option value="13:00">13:00</option>

										<option value="14:00">14:00</option>

										<option value="15:00">15:00</option>

										<option value="16:00">16:00</option>

										<option value="17:00">17:00</option>

										<option value="18:00">18:00</option>

										<option value="19:00">19:00</option>

										<option value="20:00">20:00</option>

										<option value="21:00">21:00</option>

										<option value="22:00">22:00</option>

										<option value="23:00">23:00</option>

									</select>

								</td>

								<td>

									<select class="custom-select form-control" name="funcionamento_inicio">

										<option value="00:00">00:00</option>

										<option value="01:00" selected="">01:00</option>

										<option value="02:00">02:00</option>

										<option value="03:00">03:00</option>

										<option value="04:00">04:00</option>

										<option value="05:00">05:00</option>

										<option value="06:00">06:00</option>

										<option value="07:00">07:00</option>

										<option value="08:00">08:00</option>

										<option value="09:00">09:00</option>

										<option value="10:00">10:00</option>

										<option value="11:00">11:00</option>
<!-- <script src="../assets/js/uploader.js"></script> -->
										<option value="12:00">12:00</option>

										<option value="13:00">13:00</option>

										<option value="14:00">14:00</option>

										<option value="15:00">15:00</option>

										<option value="16:00">16:00</option>

										<option value="17:00">17:00</option>

										<option value="18:00">18:00</option>

										<option value="19:00">19:00</option>

										<option value="20:00">20:00</option>

										<option value="21:00">21:00</option>

										<option value="22:00">22:00</option>

										<option value="23:00">23:00</option>

									</select>

								</td>

							</tr>

							<tr>

								<th scope="row">Final</th>

								<td>

									<select class="custom-select form-control" name="funcionamento_inicio">

										<option value="00:00">00:00</option>

										<option value="01:00">01:00</option>

										<option value="02:00">02:00</option>

										<option value="03:00">03:00</option>

										<option value="04:00">04:00</option>

										<option value="05:00">05:00</option>

										<option value="06:00">06:00</option>

										<option value="07:00">07:00</option>

										<option value="08:00">08:00</option>

										<option value="09:00">09:00</option>

										<option value="10:00">10:00</option>

										<option value="11:00">11:00</option>

										<option value="12:00">12:00</option>

										<option value="13:00">13:00</option>

										<option value="14:00">14:00</option>

										<option value="15:00">15:00</option>

										<option value="16:00">16:00</option>

										<option value="17:00">17:00</option>

										<option value="18:00">18:00</option>

										<option value="19:00">19:00</option>

										<option value="20:00">20:00</option>

										<option value="21:00">21:00</option>

										<option value="22:00">22:00</option>

										<option value="23:00" selected="">23:00</option>

									</select>

								</td>

								<td>

									<select class="custom-select form-control" name="funcionamento_inicio">

										<option value="00:00">00:00</option>

										<option value="01:00">01:00</option>

										<option value="02:00">02:00</option>

										<option value="03:00">03:00</option>

										<option value="04:00">04:00</option>

										<option value="05:00">05:00</option>

										<option value="06:00">06:00</option>

										<option value="07:00">07:00</option>

										<option value="08:00">08:00</option>

										<option value="09:00">09:00</option>

										<option value="10:00">10:00</option>

										<option value="11:00">11:00</option>

										<option value="12:00">12:00</option>

										<option value="13:00">13:00</option>

										<option value="14:00">14:00</option>

										<option value="15:00">15:00</option>

										<option value="16:00">16:00</option>

										<option value="17:00">17:00</option>

										<option value="18:00">18:00</option>

										<option value="19:00">19:00</option>

										<option value="20:00">20:00</option>

										<option value="21:00">21:00</option>

										<option value="22:00">22:00</option>

										<option value="23:00" selected="">23:00</option>

									</select>

								</td>

								<td>

									<select class="custom-select form-control" name="funcionamento_inicio">

										<option value="00:00">00:00</option>

										<option value="01:00">01:00</option>

										<option value="02:00">02:00</option>

										<option value="03:00">03:00</option>

										<option value="04:00">04:00</option>

										<option value="05:00">05:00</option>

										<option value="06:00">06:00</option>

										<option value="07:00">07:00</option>

										<option value="08:00">08:00</option>

										<option value="09:00">09:00</option>

										<option value="10:00">10:00</option>

										<option value="11:00">11:00</option>

										<option value="12:00">12:00</option>

										<option value="13:00">13:00</option>

										<option value="14:00">14:00</option>

										<option value="15:00">15:00</option>

										<option value="16:00">16:00</option>

										<option value="17:00">17:00</option>

										<option value="18:00">18:00</option>

										<option value="19:00">19:00</option>

										<option value="20:00">20:00</option>

										<option value="21:00">21:00</option>

										<option value="22:00">22:00</option>

										<option value="23:00" selected="">23:00</option>

									</select>

								</td>

								<td>

									<select class="custom-select form-control" name="funcionamento_inicio">

										<option value="00:00">00:00</option>

										<option value="01:00">01:00</option>

										<option value="02:00">02:00</option>

										<option value="03:00">03:00</option>

										<option value="04:00">04:00</option>

										<option value="05:00">05:00</option>

										<option value="06:00">06:00</option>

										<option value="07:00">07:00</option>

										<option value="08:00">08:00</option>

										<option value="09:00">09:00</option>

										<option value="10:00">10:00</option>

										<option value="11:00">11:00</option>

										<option value="12:00">12:00</option>

										<option value="13:00">13:00</option>

										<option value="14:00">14:00</option>

										<option value="15:00">15:00</option>

										<option value="16:00">16:00</option>

										<option value="17:00">17:00</option>

										<option value="18:00">18:00</option>

										<option value="19:00">19:00</option>

										<option value="20:00">20:00</option>

										<option value="21:00">21:00</option>

										<option value="22:00">22:00</option>

										<option value="23:00" selected="">23:00</option>

									</select>

								</td>

								<td>

									<select class="custom-select form-control" name="funcionamento_inicio">

										<option value="00:00">00:00</option>

										<option value="01:00">01:00</option>

										<option value="02:00">02:00</option>

										<option value="03:00">03:00</option>

										<option value="04:00">04:00</option>

										<option value="05:00">05:00</option>

										<option value="06:00">06:00</option>

										<option value="07:00">07:00</option>

										<option value="08:00">08:00</option>

										<option value="09:00">09:00</option>

										<option value="10:00">10:00</option>

										<option value="11:00">11:00</option>

										<option value="12:00">12:00</option>

										<option value="13:00">13:00</option>

										<option value="14:00">14:00</option>

										<option value="15:00">15:00</option>

										<option value="16:00">16:00</option>

										<option value="17:00">17:00</option>

										<option value="18:00">18:00</option>

										<option value="19:00">19:00</option>

										<option value="20:00">20:00</option>

										<option value="21:00">21:00</option>

										<option value="22:00">22:00</option>

										<option value="23:00" selected="">23:00</option>

									</select>

								</td>

								<td>

									<select class="custom-select form-control" name="funcionamento_inicio">

										<option value="00:00">00:00</option>

										<option value="01:00">01:00</option>

										<option value="02:00">02:00</option>

										<option value="03:00">03:00</option>

										<option value="04:00">04:00</option>

										<option value="05:00">05:00</option>

										<option value="06:00">06:00</option>

										<option value="07:00">07:00</option>

										<option value="08:00">08:00</option>

										<option value="09:00">09:00</option>

										<option value="10:00">10:00</option>

										<option value="11:00">11:00</option>

										<option value="12:00">12:00</option>

										<option value="13:00">13:00</option>

										<option value="14:00">14:00</option>

										<option value="15:00">15:00</option>

										<option value="16:00">16:00</option>

										<option value="17:00">17:00</option>

										<option value="18:00">18:00</option>

										<option value="19:00">19:00</option>

										<option value="20:00">20:00</option>

										<option value="21:00">21:00</option>

										<option value="22:00">22:00</option>

										<option value="23:00" selected="">23:00</option>

									</select>

								</td>

								<td>

									<select class="custom-select form-control" name="funcionamento_inicio">

										<option value="00:00">00:00</option>

										<option value="01:00">01:00</option>

										<option value="02:00">02:00</option>

										<option value="03:00">03:00</option>

										<option value="04:00">04:00</option>

										<option value="05:00">05:00</option>

										<option value="06:00">06:00</option>

										<option value="07:00">07:00</option>

										<option value="08:00">08:00</option>

										<option value="09:00">09:00</option>

										<option value="10:00">10:00</option>

										<option value="11:00">11:00</option>

										<option value="12:00">12:00</option>

										<option value="13:00">13:00</option>

										<option value="14:00">14:00</option>

										<option value="15:00">15:00</option>

										<option value="16:00">16:00</option>

										<option value="17:00">17:00</option>

										<option value="18:00">18:00</option>

										<option value="19:00">19:00</option>

										<option value="20:00">20:00</option>

										<option value="21:00">21:00</option>

										<option value="22:00">22:00</option>

										<option value="23:00" selected="">23:00</option>

									</select>

								</td>

							</tr>

						</tbody>

					</table>

				</div>



				<button class="btn btn-primary mt-4">Cadastrar</button>

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



	<div class="tab-pane fade" id="bloqueio" role="tabpanel" aria-labelledby="bloqueio-tab">

		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Faça uma busca</h4>



				<div class="row mt-4">

					<div class="col-md-6">

						<div class="form-group">

							<label for="data_inicial-bloqueio">Data inicial</label>

							<input class="form-control" type="date" id="data_inicial-bloqueio" />

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="data_final-bloqueio">Data final</label>

							<input class="form-control" type="date" id="data_final-bloqueio" />

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label for="hora_inicial-bloqueio">Hora inicial</label>

							<input class="form-control" type="time" id="hora_inicial-bloqueio" />

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="hora_final-bloqueio">Hora final</label>

							<input class="form-control" type="time" id="hora_final-bloqueio" />

						</div>

					</div>

				</div>



				<div class="form-group">

					<label for="motivo-bloqueio">Motivo</label>

					<input class="form-control" type="text" id="motivo-bloqueio" />

				</div>



				<div class="form-group">

					<label for="dias-bloqueio" class="mb-2">Dias da semana</label>

					<div class="dia">

						<span class="table-header">Segunda</span>

						<input type="checkbox" checked class="switch" id="dias-segunda-bloqueio" />

						<label class="toggle" for="dias-segunda-bloqueio"></label>

					</div>

					<div class="dia">

						<span class="table-header">Terça</span>

						<input type="checkbox" checked class="switch" id="dias-terca-bloqueio" />

						<label class="toggle" for="dias-terca-bloqueio"></label>

					</div>

					<div class="dia">

						<span class="table-header">Quarta</span>

						<input type="checkbox" checked class="switch" id="dias-quarta-bloqueio" />

						<label class="toggle" for="dias-quarta-bloqueio"></label>

					</div>

					<div class="dia">

						<span class="table-header">Quinta</span>

						<input type="checkbox" checked class="switch" id="dias-quinta-bloqueio" />

						<label class="toggle" for="dias-quinta-bloqueio"></label>

					</div>

					<div class="dia">

						<span class="table-header">Sexta</span>

						<input type="checkbox" checked class="switch" id="dias-sexta-bloqueio" />

						<label class="toggle" for="dias-sexta-bloqueio"></label>

					</div>

					<div class="dia">

						<span class="table-header">Sábado</span>

						<input type="checkbox" checked class="switch" id="dias-sabado-bloqueio" />

						<label class="toggle" for="dias-sabado-bloqueio"></label>

					</div>

					<div class="dia">

						<span class="table-header">Domingo</span>

						<input type="checkbox" checked class="switch" id="dias-domingo-bloqueio" />

						<label class="toggle" for="dias-domingo-bloqueio"></label>

					</div>

				</div>



				<button class="btn btn-primary">Bloquear</button>

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



	<div class="tab-pane fade" id="configuracao" role="tabpanel" aria-labelledby="configuracao-tab">

		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Faça uma busca</h4>



				<div class="row mt-4">

					<div class="col-md-6">

						<div class="form-group">

							<label for="max_mudancas-configuracao">Máximo de mudanças diárias</label>

							<input class="form-control" value="2" type="text" id="max_mudancas-configuracao" />

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="separar_bloco-configuracao">Separar blocos?</label>



							<input type="radio" name="separar_bloco-configuracao" id="sim_separar_bloco-configuracao" class="multipla" />

							<label for="sim_separar_bloco-configuracao" class="multipla btn-outline-success">Sim</label>



							<input type="radio" name="separar_bloco-configuracao" id="nao_separar_bloco-configuracao" class="multipla" />

							<label for="nao_separar_bloco-configuracao" class="multipla btn-outline-danger">Não</label>

						</div>

					</div>

				</div>



				<button class="btn btn-primary">Salvar</button>

			</div>

		</div>

	</div>

</div>



<!-- <script src="../assets/js/uploader.js"></script> -->



<script>

	CKEDITOR.replaceAll('ckeditor');



	$('body').on('click', '.switch', (e) => {

		if (!$(e.target).prop('checked')) {

			$(e.target).prop('checked', false);

		} else {

			$(e.target).prop('checked', true);

		}

	});

</script>

