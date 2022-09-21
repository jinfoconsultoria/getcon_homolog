<ul class="nav nav-tabs nav-tabs-main" id="abas" role="tablist">

	<li class="nav-item" role="presentation">

		<a class="nav-link active" id="profissao-tab" data-toggle="tab" href="#profissao" role="tab" aria-controls="profissao" aria-selected="true">Profissão</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="parentesco-tab" data-toggle="tab" href="#parentesco" role="tab" aria-controls="parentesco" aria-selected="false">Parentesco</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="configuracao_combo-tab" data-toggle="tab" href="#configuracao_combo" role="tab" aria-controls="configuracao_combo" aria-selected="false">Configuração combo</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="horario_funcionamento-tab" data-toggle="tab" href="#horario_funcionamento" role="tab" aria-controls="horario_funcionamento" aria-selected="false">Horário de funcionamento</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="categoria_pessoa-tab" data-toggle="tab" href="#categoria_pessoa" role="tab" aria-controls="categoria_pessoa" aria-selected="false">Categoria pessoa</a>

	</li>

</ul>



<div class="tab-content" id="abasConteudo">

	<div class="tab-pane fade show active" id="profissao" role="tabpanel" aria-labelledby="profissao-tab">

		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Profissão</h4>



				<div class="form-group mt-4">

					<label for="nome-profissao">Nome</label>

					<input class="form-control simples-input" type="text" id="nome-profissao" />

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

					<h5 class="card-subtitle" style="text-align: center">Nenhum resultado encontrado.</h5>

				</div>

			</div>

		</div>

	</div>



	<div class="tab-pane fade" id="parentesco" role="tabpanel" aria-labelledby="parentesco-tab">

		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Parentesco</h4>



				<div class="form-group mt-4">

					<label for="nome-parentesco">Nome</label>

					<input class="form-control simples-input" type="text" id="nome-parentesco" />

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

					<h5 class="card-subtitle" style="text-align: center">Nenhum resultado encontrado.</h5>

				</div>

			</div>

		</div>

	</div>



	<div class="tab-pane fade" id="configuracao_combo" role="tabpanel" aria-labelledby="configuracao_combo-tab">

		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Configuração combo</h4>



				<div class="form-group mt-4">

					<label for="profissao-config_combo">Cb profissão</label>

					<input type="radio" name="profissao-config_combo" id="normal_profissao-config_combo" class="multipla" />

					<label for="normal_profissao-config_combo" class="multipla btn-outline-secondary">Normal</label>

					<input type="radio" name="profissao-config_combo" id="editavel_profissao-config_combo" class="multipla" />

					<label for="editavel_profissao-config_combo" class="multipla btn-outline-secondary">Editável</label>

				</div>



				<div class="form-group">

					<label for="parentesco-config_combo">Cb parentesco</label>

					<input type="radio" name="parentesco-config_combo" id="normal_parentesco-config_combo" class="multipla" />

					<label for="normal_parentesco-config_combo" class="multipla btn-outline-secondary">Normal</label>



					<input type="radio" name="parentesco-config_combo" id="editavel_parentesco-config_combo" class="multipla" />

					<label for="editavel_parentesco-config_combo" class="multipla btn-outline-secondary">Editável</label>

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

					<h5 class="card-subtitle" style="text-align: center">Nenhum resultado encontrado.</h5>

				</div>

			</div>

		</div>

	</div>



	<div class="tab-pane fade" id="horario_funcionamento" role="tabpanel" aria-labelledby="horario_funcionamento-tab">

		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Horário de funcionamento</h4>



				<div class="table-responsive">

					<table class="table">

						<thead>

							<tr>

								<th scope="col">#</th>

								<th scope="col">Segunda</th>

								<th scope="col">Terça</th>

								<th scope="col">Quarta</th>

								<th scope="col">Quinta</th>

								<th scope="col">Sexta</th>

								<th scope="col">Sábado</th>

								<th scope="col">Domingo</th>

							</tr>

						</thead>

						<tbody>

							<tr>

								<th scope="row">Início</th>

								<td>

									<select class="custom-select form-control" name="funcionamento_inicio">

										<option value="00:00">00:00</option>

										<option value="01:00" selected>01:00</option>

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

										<option value="01:00" selected>01:00</option>

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

										<option value="01:00" selected>01:00</option>

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

										<option value="01:00" selected>01:00</option>

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

										<option value="01:00" selected>01:00</option>

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

										<option value="01:00" selected>01:00</option>

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

<!-- <script src="../assets/js/uploader.js"></script> -->

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

										<option value="01:00" selected>01:00</option>

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

										<option value="23:00" selected>23:00</option>

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

										<option value="23:00" selected>23:00</option>

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

										<option value="23:00" selected>23:00</option>

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

										<option value="23:00" selected>23:00</option>

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

										<option value="23:00" selected>23:00</option>

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

										<option value="23:00" selected>23:00</option>

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

										<option value="23:00" selected>23:00</option>

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

					<h5 class="card-subtitle" style="text-align: center">Nenhum resultado encontrado.</h5>

				</div>

			</div>

		</div>

	</div>



	<div class="tab-pane fade" id="categoria_pessoa" role="tabpanel" aria-labelledby="categoria_pessoa-tab">

		<div class="card" width="50%">

			<div class="card-body">

				<h4 class="card-title">Categoria pessoa</h4>



				<div class="form-group mt-4">

					<label for="nome-categoria">Nome</label>

					<input class="form-control simples-input" type="text" id="nome-categoria" />

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

					<h5 class="card-subtitle" style="text-align: center">Nenhum resultado encontrado.</h5>

				</div>

			</div>

		</div>

	</div>

</div>



<!-- <script src="../assets/js/uploader.js"></script> -->

