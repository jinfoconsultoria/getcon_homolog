<?php
session_start();

// Exigir o arquivo de classes que armazena as métodos;
require_once '../../assets/php/classes.php';

// Instância um novo objeto do banco de dados e inicia a conexão;
$db   = new db();
$dbatual = $_SESSION['db_condominio'];
$link_condominio = $db->conecta_mysql($_SESSION['db_condominio']);
?>

<ul class="nav nav-tabs nav-tabs-main" id="abas" role="tablist">
	<li class="nav-item" role="presentation">
		<a class="nav-link" id="editar_admin-tab" data-toggle="tab" href="#editar_admin" role="tab" aria-controls="editar_admin" aria-selected="false" style="display: none">Editar Administrador</a>
	</li>
	<li class="nav-item" role="presentation">
		<a class="nav-link" id="editar_morador-tab" data-toggle="tab" href="#editar_morador" role="tab" aria-controls="editar_morador" aria-selected="false" style="display: none">Editar Morador</a>
	</li>

	<li class="nav-item" role="presentation">
		<a class="nav-link" id="administrador-tab" data-toggle="tab" href="#administrador" role="tab" aria-controls="administrador" aria-selected="false">Administrador</a>
	</li>

	<li class="nav-item" role="presentation">
		<a class="nav-link active" id="morador-tab" data-toggle="tab" href="#morador" role="tab" aria-controls="morador" aria-selected="true">Morador</a>
	</li>

	<li class="nav-item" role="presentation">
		<a class="nav-link" id="busca-tab" data-toggle="tab" href="#busca" role="tab" aria-controls="busca" aria-selected="false">Procurar</a>
	</li>
</ul>

<div class="tab-content" id="abasConteudo">
	<div class="tab-pane fade" id="editar_admin" role="tabpanel" aria-labelledby="editar_admin-tab">
		<?php
		// FORMULÁRIO DE EDIÇÃO DE ADMINISTRADOR CADASTRADO
		include("usuario/admin/formEditarAdmin.php")
		?>
	</div>

	<div class="tab-pane fade" id="administrador" role="tabpanel" aria-labelledby="administrador-tab">
		<?php
		// FORMULÁRIO DE CADASTRO DE ADMINISTRADOR
		include("usuario/admin/formCadastroAdmin.php");


		// LISTAGEM DE ADMINISTRADOR CADASTRADO
		include("usuario/admin/listAdmin.php");
		?>
	</div>

	<div class="tab-pane fade" id="editar_morador" role="tabpanel" aria-labelledby="editar_morador-tab">
		<?php
		// FORMULÁRIO DE EDIÇÃO DE MORADOR CADASTRADO
		include("usuario/morador/formEditarMorador.php")
		?>
	</div>

	<div class="tab-pane fade show active" id="morador" role="tabpanel" aria-labelledby="morador-tab">
		<?php
		// FORMULÁRIO DE CADASTRO DE MORADOR
		include("usuario/morador/formCadastroMorador.php")
		?>
	</div>

	<div class="tab-pane fade" id="busca" role="tabpanel" aria-labelledby="busca-tab">
		<?php
		// FORMULÁRIO DE BUSCA DE MORADOR
		include("usuario/busca/formBusca.php");

		// TABELA DE RESULTADO DA BUSCA DE MORADOR
		include("usuario/busca/resultBusca.php");
		?>


	</div>
</div>

<?php include('usuario/modalUsuario.php') ?>



<script>
	CKEDITOR.replaceAll('ckeditor')

	tippy('#cadastrar_apartamento', {
		content: 'Cadastre, edite ou remova um apartamento.',
		placement: 'top',
		arrow: true,
	})
	tippy('#cadastrar_bloco', {
		content: 'Cadastre, edite ou remova um bloco.',
		placement: 'top',
		arrow: true,
	})
	tippy('#cadastrar_perfil', {
		content: 'Cadastre, edite ou remova um perfil.',
		placement: 'top',
		arrow: true,
	})
	tippy('#cadastrar_categoria', {
		content: 'Cadastre, edite ou remova uma categoria.',
		placement: 'top',
		arrow: true,
	})

	setarTooltips('.editar-usuario', 'Editar usuário', 'top', false)
	setarTooltips('.excluir-usuario', 'Excluir usuário', 'top', true);

	$('body').on('click', '.add_campo-apto', (e) => {
		$(e.target).parent().parent().parent().parent().append(`
			<div class="input-group extra-fields mt-2">
				<input type="text" class="form-control">
				<div class="input-group-append">
					<a class="remover_campo-apto" href="javascript:void(0)"><span class="input-group-text remover-item">×</span></a>
					<a class="add_campo-apto" href="javascript:void(0)"><span class="input-group-text add-item">+</span></a>
				</div>
			</div>
		`)
		e.stopImmediatePropagation()
	})

	$('body').on('click', '.remover_campo-apto', (e) => {
		$(e.target).parent().parent().parent().remove()
		e.stopImmediatePropagation();
	})

	$('body').on('click', '.close-modal', (e) => {
		$('.extra-fields').remove();
	})

	$('input[name="info_extra-morador"]').on('click', (e) => {
		if ($(e.target).attr('id') == 'email_info_extra-morador') {
			if ($(e.target).is(':checked')) {
				$('.div-email').show()
			} else {
				$('.div-email').hide()
			}
		} else if ($(e.target).attr('id') == 'telefone_info_extra-morador') {
			if ($(e.target).is(':checked')) {
				$('.div-telefone').show()
			} else {
				$('.div-telefone').hide()
			}
		} else if ($(e.target).attr('id') == 'documento_info_extra-morador') {
			if ($(e.target).is(':checked')) {
				$('.div-documento').show()
			} else {
				$('.div-documento').hide()
			}
		} else if ($(e.target).attr('id') == 'veiculo_info_extra-morador') {
			if ($(e.target).is(':checked')) {
				$('.div-veiculo').show()
			} else {
				$('.div-veiculo').hide()
			}
		} else if ($(e.target).attr('id') == 'bicicleta_info_extra-morador') {
			if ($(e.target).is(':checked')) {
				$('.div-bicicleta').show()
			} else {
				$('.div-bicicleta').hide()
			}
		} else if ($(e.target).attr('id') == 'observacao_info_extra-morador') {
			if ($(e.target).is(':checked')) {
				$('.div-observacao').show()
			} else {
				$('.div-observacao').hide()
			}
		} else if ($(e.target).attr('id') == 'endereco_info_extra-morador') {
			if ($(e.target).is(':checked')) {
				$('.div-endereco').show()
			} else {
				$('.div-endereco').hide()
			}
		} else if ($(e.target).attr('id') == 'atestado_info_extra-morador') {
			if ($(e.target).is(':checked')) {
				$('.div-atestado').show()
			} else {
				$('.div-atestado').hide()
			}
		}
	})

	$('input[name="info_extra_edicao-morador"]').on('click', (e) => {
		if ($(e.target).attr('id') == 'email_info_extra_edicao-morador') {
			if ($(e.target).is(':checked')) {
				$(e.target).closest('.tab-pane').find('.div-email').show();
			} else {
				$(e.target).closest('.tab-pane').find('.div-email').hide();
			}
		} else if ($(e.target).attr('id') == 'telefone_info_extra_edicao-morador') {
			if ($(e.target).is(':checked')) {
				$(e.target).closest('.tab-pane').find('.div-telefone').show();
			} else {
				$(e.target).closest('.tab-pane').find('.div-telefone').hide();
			}
		} else if ($(e.target).attr('id') == 'documento_info_extra_edicao-morador') {
			if ($(e.target).is(':checked')) {
				$(e.target).closest('.tab-pane').find('.div-documento').show();
			} else {
				$(e.target).closest('.tab-pane').find('.div-documento').hide();
			}
		} else if ($(e.target).attr('id') == 'veiculo_info_extra_edicao-morador') {
			if ($(e.target).is(':checked')) {
				$(e.target).closest('.tab-pane').find('.div-veiculo').show();
			} else {
				$(e.target).closest('.tab-pane').find('.div-veiculo').hide();
			}
		} else if ($(e.target).attr('id') == 'bicicleta_info_extra_edicao-morador') {
			if ($(e.target).is(':checked')) {
				$(e.target).closest('.tab-pane').find('.div-bicicleta').show();
			} else {
				$(e.target).closest('.tab-pane').find('.div-bicicleta').hide();
			}
		} else if ($(e.target).attr('id') == 'observacao_info_extra_edicao-morador') {
			if ($(e.target).is(':checked')) {
				$(e.target).closest('.tab-pane').find('.div-observacao').show();
			} else {
				$(e.target).closest('.tab-pane').find('.div-observacao').hide();
			}
		} else if ($(e.target).attr('id') == 'endereco_info_extra_edicao-morador') {
			if ($(e.target).is(':checked')) {
				$(e.target).closest('.tab-pane').find('.div-endereco').show();
			} else {
				$(e.target).closest('.tab-pane').find('.div-endereco').hide();
			}
		} else if ($(e.target).attr('id') == 'atestado_info_extra_edicao-morador') {
			if ($(e.target).is(':checked')) {
				$(e.target).closest('.tab-pane').find('.div-atestado').show();
			} else {
				$(e.target).closest('.tab-pane').find('.div-atestado').hide();
			}
		}
	})

	// Categoria
	$('#form-cadastro_categoria, #form-cadastro_perfil').bind("keypress", function(e) {
		var keyCode = e.keyCode || e.which;
		if (keyCode === 13) {
			e.preventDefault();
			return false;
		}
	})

	$('#form-cadastro_categoria').on('submit', (e) => {
		var categoria_arr = [];
		$("input[name=categoria-cadastro]").each((i, el) => {
			var categoria = $(el).val();
			categoria_arr.push(categoria);
		});

		if (!checarArray(categoria_arr)) {
			toastr.error('Preencha todos os campos corretamente.', 'Erro')
			return false;
		}

		$.ajax({
			url: 'telas_ajax/gerenciamento/usuario.php',
			type: 'POST',
			data: {
				categoria: categoria_arr,
				acao: 'cadastro',
				tipo: 'categoria'
			},
			success: (response) => {
				var status = response.split(' |divisor| ')[0]
				var mensagem = response.split(' |divisor| ')[1]

				if (status == 'sucesso') {
					toastr.success(mensagem, 'Sucesso')
					$('#form-cadastro_categoria .remover-input').parent().remove();
					$('#categoria-cadastro-modal').val('');
					$('.listar-categorias').click();

				} else if (status == 'falha') {
					toastr.error(mensagem, 'Erro')
				}
			},
			error: (response) => {
				console.log(response)
			},
		})
		e.stopImmediatePropagation();
		return false;

	})

	$('.listar-categorias').on('click', (e) => {

		$.ajax({
			url: 'telas_ajax/gerenciamento/usuario.php',
			type: 'POST',
			data: {
				acao: 'select',
				tipo: 'categoria'
			},
			success: (response) => {
				responseObj = JSON.parse(response);

				if (responseObj.length > 0) {
					$("#nenhum-resultado_categoria").hide();

					$("#tabela-categoria_resultado").show();
					$("#tabela-categoria_resultado tbody").html('');

					$(responseObj).each((i, el) => {
						$("#tabela-categoria_resultado tbody").append(`
						<tr>
							<td>${i+1}</td>
							<td>${el['categoria']}</td>
							<td class="acoes-td">
								<i class="fas fa-pen editar-tooltip editar-categoria" data-name="${el['categoria']}" data-id="${el['id']}"></i>
								<i class="fas fa-trash excluir-tooltip excluir-categoria" data-name="${el['categoria']}" data-id="${el['id']}"></i>
							</td>
						</tr>
					`)
					});
				} else {
					$("#tabela-categoria_resultado").hide();
					$("#nenhum-resultado_categoria").show();
				}
			},
			error: (response) => {
				console.log(response)
			},
		})
		e.stopImmediatePropagation();
	})

	$('body').on('click', '.editar-categoria', (e) => {
		$(e.target).closest('.modal-body').find('.btn_acrescentar').hide();
		$(e.target).closest('.modal-body').find('button.atualizar-categorias, button.cancelar-atualizar-categorias').show();
		$(e.target).closest('.modal-body').find('#id-categoria').val($(e.target).attr('data-id'));

		$('#form-cadastro_categoria .remover-input').parent().remove();
		$('#categoria-cadastro-modal').val('');
		$("#categoria-cadastro-modal").val($(e.target).attr('data-name')).focus();

		e.stopImmediatePropagation();
	});

	$('body').on('click', '.excluir-categoria', (e) => {
		var dados = {
			acao: 'excluir',
			tipo: 'categoria',
			id: $(e.target).attr('data-id')
		}

		$.ajax({
			url: 'telas_ajax/gerenciamento/usuario.php',
			type: 'POST',
			data: dados,
			success: (response) => {
				var status = response.split(' |divisor| ')[0]
				var mensagem = response.split(' |divisor| ')[1]

				if (status == 'sucesso') {
					toastr.success(mensagem, 'Sucesso');
					$(e.target).closest('.modal-body').find('.btn_acrescentar').show();
					$(e.target).closest('.modal-body').find('button.atualizar-categorias, button.cancelar-atualizar-categorias').hide().removeClass('ajax-progress');
					$("#categoria-cadastro-modal").val('');
					$('.listar-categorias').click();

				} else if (status == 'falha') {
					toastr.error(mensagem, 'Erro')
				}
			},
			error: (response) => {
				console.log(response)
			},
		})
		e.stopImmediatePropagation();
	});

	$('body').on('click', '.atualizar-categorias', (e) => {
		var dados = {
			acao: 'edicao',
			tipo: 'categoria',
			id: $("#id-categoria").val(),
			categoria: $("#categoria-cadastro-modal").val()
		}

		$.ajax({
			url: 'telas_ajax/gerenciamento/usuario.php',
			type: 'POST',
			data: dados,
			success: (response) => {
				var status = response.split(' |divisor| ')[0]
				var mensagem = response.split(' |divisor| ')[1]

				if (status == 'sucesso') {
					toastr.success(mensagem, 'Sucesso');
					$(e.target).closest('.modal-body').find('.btn_acrescentar').show();
					$(e.target).closest('.modal-body').find('button.atualizar-categorias, button.cancelar-atualizar-categorias').hide().removeClass('ajax-progress');
					$("#categoria-cadastro-modal").val('');
					$('.listar-categorias').click();

				} else if (status == 'falha') {
					toastr.error(mensagem, 'Erro')
				}
			},
			error: (response) => {
				console.log(response)
			},
		})
		e.stopImmediatePropagation();
	})

	$('body').on('click', '.cancelar-atualizar-categorias', (e) => {
		$(e.target).closest('.modal-body').find('.btn_acrescentar').show();
		$(e.target).closest('.modal-body').find('button.atualizar-categorias, button.cancelar-atualizar-categorias').hide().removeClass('ajax-progress');
		$("#categoria-cadastro-modal").val('');
		e.stopImmediatePropagation();
	})


	// Perfil
	$('#form-cadastro_perfil').on('submit', (e) => {
		var perfil_arr = [];
		$("input[name=perfil-cadastro]").each((i, el) => {
			var perfil = $(el).val();
			perfil_arr.push(perfil);
		});

		if (!checarArray(perfil_arr)) {
			toastr.error('Preencha todos os campos corretamente.', 'Erro')
			return false;
		}

		$.ajax({
			url: 'telas_ajax/gerenciamento/usuario.php',
			type: 'POST',
			data: {
				perfil: perfil_arr,
				acao: 'cadastro',
				tipo: 'perfil'
			},
			success: (response) => {
				var status = response.split(' |divisor| ')[0]
				var mensagem = response.split(' |divisor| ')[1]

				if (status == 'sucesso') {
					toastr.success(mensagem, 'Sucesso')
					$('#form-cadastro_perfil .remover-input').parent().remove();
					$('#perfil-cadastro-modal').val('');
					$('.listar-perfis').click();

				} else if (status == 'falha') {
					toastr.error(mensagem, 'Erro')
				}
			},
			error: (response) => {
				console.log(response)
			},
		})
		e.stopImmediatePropagation();
		return false;

	})
	$('.listar-perfis').on('click', (e) => {

		$.ajax({
			url: 'telas_ajax/gerenciamento/usuario.php',
			type: 'POST',
			data: {
				acao: 'select',
				tipo: 'perfil'
			},
			success: (response) => {
				responseObj = JSON.parse(response);

				if (responseObj.length > 0) {
					$("#nenhum-resultado_perfil").hide();

					$("#tabela-perfil_resultado").show();
					$("#tabela-perfil_resultado tbody").html('');

					$(responseObj).each((i, el) => {
						$("#tabela-perfil_resultado tbody").append(`
						<tr>
							<td>${i+1}</td>
							<td>${el['perfil']}</td>
							<td class="acoes-td">
								<i class="fas fa-pen editar-tooltip editar-perfil" data-name="${el['perfil']}" data-id="${el['id']}"></i>
								<i class="fas fa-trash excluir-tooltip excluir-perfil" data-name="${el['perfil']}" data-id="${el['id']}"></i>
							</td>
						</tr>
					`)
					});
				} else {
					$("#tabela-perfil_resultado").hide();
					$("#nenhum-resultado_perfil").show();
				}
			},
			error: (response) => {
				console.log(response)
			},
		})
		e.stopImmediatePropagation();
	})
	$('body').on('click', '.editar-perfil', (e) => {
		$(e.target).closest('.modal-body').find('.btn_acrescentar').hide();
		$(e.target).closest('.modal-body').find('button.atualizar-perfis, button.cancelar-atualizar-perfis').show();
		$(e.target).closest('.modal-body').find('#id-perfil').val($(e.target).attr('data-id'));

		$('#form-cadastro_perfil .remover-input').parent().remove();
		$('#perfil-cadastro-modal').val('');
		$("#perfil-cadastro-modal").val($(e.target).attr('data-name')).focus();

		e.stopImmediatePropagation();
	});
	$('body').on('click', '.excluir-perfil', (e) => {
		var dados = {
			acao: 'excluir',
			tipo: 'perfil',
			id: $(e.target).attr('data-id')
		}

		$.ajax({
			url: 'telas_ajax/gerenciamento/usuario.php',
			type: 'POST',
			data: dados,
			success: (response) => {
				var status = response.split(' |divisor| ')[0]
				var mensagem = response.split(' |divisor| ')[1]

				if (status == 'sucesso') {
					toastr.success(mensagem, 'Sucesso');
					$(e.target).closest('.modal-body').find('.btn_acrescentar').show();
					$(e.target).closest('.modal-body').find('button.atualizar-perfis, button.cancelar-atualizar-perfis').hide().removeClass('ajax-progress');
					$("#perfil-cadastro-modal").val('');
					$('.listar-perfis').click();

				} else if (status == 'falha') {
					toastr.error(mensagem, 'Erro')
				}
			},
			error: (response) => {
				console.log(response)
			},
		})
		e.stopImmediatePropagation();
	});
	$('body').on('click', '.atualizar-perfis', (e) => {
		var dados = {
			acao: 'edicao',
			tipo: 'perfil',
			id: $("#id-perfil").val(),
			perfil: $("#perfil-cadastro-modal").val()
		}

		$.ajax({
			url: 'telas_ajax/gerenciamento/usuario.php',
			type: 'POST',
			data: dados,
			success: (response) => {
				var status = response.split(' |divisor| ')[0]
				var mensagem = response.split(' |divisor| ')[1]

				if (status == 'sucesso') {
					toastr.success(mensagem, 'Sucesso');
					$(e.target).closest('.modal-body').find('.btn_acrescentar').show();
					$(e.target).closest('.modal-body').find('button.atualizar-perfis, button.cancelar-atualizar-perfis').hide().removeClass('ajax-progress');
					$("#perfil-cadastro-modal").val('');
					$('.listar-perfis').click();

				} else if (status == 'falha') {
					toastr.error(mensagem, 'Erro')
				}
			},
			error: (response) => {
				console.log(response)
			},
		})
		e.stopImmediatePropagation();
	})
	$('body').on('click', '.cancelar-atualizar-perfis', (e) => {
		$(e.target).closest('.modal-body').find('.btn_acrescentar').show();
		$(e.target).closest('.modal-body').find('button.atualizar-perfis, button.cancelar-atualizar-perfis').hide().removeClass('ajax-progress');
		$("#perfil-cadastro-modal").val('');
		e.stopImmediatePropagation();
	})


	$('.bloco-select').on('change', (e) => {
		$.ajax({
			url: 'telas_ajax/master/condominio.php',
			type: 'POST',
			data: {
				acao: 'select',
				tipo: 'apartamento',
				bloco: $(e.target).val()
			},
			success: (response) => {
				if (response) {
					var response_obj = JSON.parse(response);
					var select = $(e.target).closest('.row').find('.apartamento-select');
					$(select).html('<option value="">Selecione</option>');
					$(select).prop('disabled', false);

					$(response_obj).each((i, el) => {
						$(select).append(`<option value="${el['id']}">${el['apartamento']}</option>`);
					});
				}
			},
			error: (response) => {
				console.log(response)
			},
		})
		e.stopImmediatePropagation();
	})
	$('#cadastrar_categoria-modal').on('hidden.bs.modal', function() {
		$(this).find('.remover-input').parent().remove();
		$('#categoria-cadastro-modal').val('');
		$('#tabela-categoria_resultado').hide();
	});
	$('#morador .card-cadastro_opcional .multipla[type="checkbox"]').on('change', (e) => {
		var qtd = $('#morador .card-cadastro_opcional .multipla[type="checkbox"]:checked').length;
		if (qtd < 1) {
			$('#morador').find('button[type=submit]').remove();
			$('.card-configuracoes .card-body').append(`<button type="submit" class="btn btn-primary mt-4">Cadastrar</button>`);
			return;
		}

		var ultimo_card = $(e.target).closest('.tab-pane').find('.card:visible').last();

		$('#morador').find('button[type=submit]').remove();
		$(ultimo_card).find('.card-body').append(`<button type="submit" class="btn btn-primary mt-4">Cadastrar</button>`);
	});
	$('#editar_morador .card-cadastro_opcional .multipla[type="checkbox"]').on('change', reposicionarBotao());

	function reposicionarBotao() {
		var qtd = $('#editar_morador .card-cadastro_opcional .multipla[type="checkbox"]:checked').length;
		if (qtd < 1) {
			$('#editar_morador').find('button[type=submit]').remove();
			$('#editar_morador .card-configuracoes .card-body').append(`<button type="submit" class="btn btn-primary mt-4">Cadastrar</button>`);
			return;
		}
		var ultimo_card = $('#editar_morador').closest('.tab-pane').find('.card:visible').last();

		$('#editar_morador').find('button[type=submit]').remove();
		$(ultimo_card).find('.card-body').append(`<button type="submit" class="btn btn-primary mt-2">Atualizar</button>`);
	}


	$('#form-cadastro-admin').on('submit', (e) => {
		var dados = $(e.target).serialize();

		$.ajax({
			url: 'telas_ajax/gerenciamento/usuario.php',
			type: 'POST',
			data: dados,
			success: (response) => {
				var status = response.split(' |divisor| ')[0]
				var mensagem = response.split(' |divisor| ')[1]

				if (status == 'sucesso') {
					toastr.success(mensagem, 'Sucesso');
					$('.nav-link.sub-nav-link.sub-active[data-file=usuario]').click();

				} else if (status == 'falha') {
					toastr.error(mensagem, 'Erro')

				} else if (status == 'alerta') {
					toastr.warning(mensagem, 'Alerta');
					$('.nav-link.sub-nav-link.sub-active[data-file=usuario]').click();
				}
			},
			error: (response) => {
				console.log(response)
			},
		})
		e.stopImmediatePropagation();
		return false;
	})
	$('#form-editar-admin').on('submit', (e) => {
		var dados = $(e.target).serialize();

		$.ajax({
			url: 'telas_ajax/gerenciamento/usuario.php',
			type: 'POST',
			data: dados,
			success: (response) => {
				var status = response.split(' |divisor| ')[0]
				var mensagem = response.split(' |divisor| ')[1]

				if (status == 'sucesso') {
					toastr.success(mensagem, 'Sucesso');
					$('.nav-link.sub-nav-link.sub-active[data-file=usuario]').click();

				} else if (status == 'falha') {
					toastr.error(mensagem, 'Erro')

				} else if (status == 'alerta') {
					toastr.warning(mensagem, 'Alerta')
				}
			},
			error: (response) => {
				console.log(response)
			},
		})
		e.stopImmediatePropagation();
		return false;
	})
	$('body').on('click', '.editar-admin', (e) => {
		const ts = $(e.target).attr('data-ts');

		$.ajax({
			url: 'telas_ajax/gerenciamento/usuario.php',
			type: 'POST',
			data: `ts=${ts}&acao=select&tipo=usuario&tipo_usuario=admin`,
			success: (response) => {

				var responseObjeto = JSON.parse(response)
				var qtd = Object.keys(responseObjeto).length


				// return;
				if (qtd < 1) {
					toastr.error('Erro ao localizar o condomínio', 'Erro')
					return false;
				}

				if (responseObjeto) {
					const usuario = responseObjeto[0];

					$('#ts_edicao-admin').val(usuario['ts']).removeClass('valid invalid').addClass('valid');
					$('#nome_edicao-admin').val(usuario['nome']).removeClass('valid invalid').addClass('valid');
					$('#email_edicao-admin').val(usuario['email']).removeClass('valid invalid').addClass('valid');
					$('#senha_edicao-admin').val(usuario['senha']).removeClass('valid invalid').addClass('valid');
					$('#telefone_edicao-admin').val(usuario['telefone']).removeClass('valid invalid').addClass('valid');
					$("#img-admin-editar").attr('src', 'assets/uploads/imagens/usuario/' + usuario['imagem']);

					$('#perfil_edicao-admin').val(usuario['perfil']).removeClass('valid invalid').addClass('valid');
					$('#categoria_edicao-admin').val(usuario['categoria']).removeClass('valid invalid').addClass('valid');

					$('[name=acesso_site][value=' + usuario['acesso_site'] + ']').prop('checked', true);
					$('[name=liberar_permissao][value=' + usuario['liberar_permissao'] + ']').prop('checked', true);
					$('[name=status][value=' + usuario['status'] + ']').prop('checked', true);

					if (usuario['imagem']) {
						$('#imagem_edicao_hidden-admin').val(usuario['imagem']).removeClass('valid invalid').addClass('valid');
						$('#imagem_edicao_hidden-admin').closest('.custom-file').find('label').text("Uma imagem selecionada.").removeClass('valid invalid').addClass('valid');
						$('.imagem_usuario-admin').attr('data-imagem', `usuario/${usuario['imagem']}`);
						$('.imagem_usuario-admin').show();
					} else {
						$('.imagem_usuario-admin').attr('data-imagem', '');
						$('.imagem_usuario-admin').hide();
					}

					$('#editar_admin-tab').show();
					$('#editar_admin-tab').click();

				}
			},
			error: (response) => {
				console.log(response)
			},
		})
		e.stopImmediatePropagation();
	});
	$('body').on('click', '.excluir-admin', (e) => {
		const ts = $(e.target).attr('data-ts');

		$.ajax({
			url: 'telas_ajax/gerenciamento/usuario.php',
			type: 'POST',
			data: `ts=${ts}&acao=excluir&tipo=usuario&tipo_usuario=admin`,
			success: (response) => {
				var status = response.split(' |divisor| ')[0]
				var mensagem = response.split(' |divisor| ')[1]

				if (status == 'sucesso') {
					toastr.success('Usuário excluído com sucesso!', 'Sucesso')
					$('.nav-link.sub-nav-link.sub-active[data-file=usuario]').click();

				} else if (status == 'falha') {
					toastr.error(mensagem, 'Erro')
				}
			},
			error: (response) => {
				console.log(response)
			},
		});
		e.stopImmediatePropagation();
	});

	
	$('#form-busca-morador').on('submit', (e) => {
		var dados = $(e.target).serialize();

		$.ajax({
			url: 'telas_ajax/gerenciamento/usuario.php',
			type: 'POST',
			data: dados,
			success: (response) => {
				var response_obj = JSON.parse(response);
				var tabela = $("#form-busca-morador").closest('.tab-pane').find('.tabela-resultado');
				var texto = $("#form-busca-morador").closest('.tab-pane').find('.texto-resultado');

				if (checarArray(response_obj)) {
					$(texto).hide();
					$(tabela).show();
					$(tabela).find('tbody').html('');

					$(response_obj).each((i, el) => {
						$(tabela).find('tbody').append(`
							<tr>
								<td>${i+1}</td>
								<td>${el['nome']}</td>
								<td>${el['blocoNome']}</td>
								<td>${el['apartamentoNome']}</td>
								<td>${el['status']}</td>
								<td class="acoes-td">
									<i class="fas fa-pen editar-tooltip editar-morador" data-ts="${el['ts']}"></i>
									<a href="javascript:void(0)">
										<span data-toggle="modal" class="usuarioFone" data-ts="${el['ts']}" data-target="#usuarioFone-modal">
											<i class="fas fa-phone" ></i>
										</span>
									</a>
									<a href="javascript:void(0)">
										<span data-toggle="modal" class="usuarioEmail" data-ts="${el['ts']}" data-target="#usuarioEmail-modal">
											<i class="fas fa-envelope-open-text" ></i>
										</span>
									</a>

									<a href="javascript:void(0)">
										<span data-toggle="modal" class="usuarioFoto" data-ts="${el['ts']}" data-target="#usuarioFoto-modal">
											<i class="fas fa-camera" ></i>
										</span>
									</a>
									
									<a href="javascript:void(0)">
										<span data-toggle="modal" class="usuarioCard" data-ts="${el['ts']}" data-target="#usuarioCard-modal">
											<i class="fas fa-id-card" ></i>
										</span>
									</a>

									<a href="javascript:void(0)" onClick={handleClickSendPassword()}>
										<span data-toggle="modal" class="reenviarSenha" data-ts="${el['ts']}" data-target="">
											<i class="fas fa-key"></i>
										</span>
									</a>
								</td>
							</tr>
						`);
					})
				} else {
					$(tabela).hide();
					$(texto).html('Nenhum resultado encontrado.').show();
				}
			},
			error: (response) => {
				console.log(response)
			},
		})
		e.stopImmediatePropagation();
		return false;
	})
	$('#form-editar-morador').on('submit', (e) => {
		var form = $("#form-editar-morador").serializeArray();
		var Obj = {};
		form.forEach((item) => (!Obj[item.name]) ? Obj[item.name] = [item.value] : Obj[item.name].push(item.value))
		delete Obj['info_extra_edicao-morador'];

		var dados = $.param(Obj);

		$.ajax({
			url: 'telas_ajax/gerenciamento/usuario.php',
			type: 'POST',
			data: dados,
			success: (response) => {
				var status = response.split(' |divisor| ')[0]
				var mensagem = response.split(' |divisor| ')[1]

				if (status == 'sucesso') {
					$('#nome-busca').val(Obj['nome'][0]);
					$('#email-busca').val(Obj['email'][0]);
					$('#bloco-busca').val(Obj['bloco'][0]);
					$('#apto-busca').append('<option value="' + Obj['apartamento'][0] + '">' + Obj['apartamento'][0] + '</option>').prop('disabled', false).val(Obj['apartamento'][0]);
					$('#form-busca-morador button[type=submit]').click();
					$('#editar_morador-tab').hide();
					$('#busca-tab').click();

					toastr.success(mensagem, 'Sucesso');

				} else if (status == 'falha') {
					toastr.error(mensagem, 'Erro')

				}
			},
			error: (response) => {
				console.log(response)
			},
		})
		e.stopImmediatePropagation();
		return false;
	})
	$('body').on('click', '.editar-morador', (e) => {
		const ts = $(e.target).attr('data-ts');

		$.ajax({
			url: 'telas_ajax/gerenciamento/usuario.php',
			type: 'POST',
			data: `ts=${ts}&acao=select&tipo=usuario&tipo_usuario=morador`,
			success: (response) => {
				var response_obj = JSON.parse(response)
				var qtd = Object.keys(response_obj).length

				if (qtd < 1) {
					toastr.error('Erro ao localizar o usuário', 'Erro')
					return false;
				}

				if (response_obj) {
					$("#editar_morador").find('select').val("");
					$("#editar_morador").find('textarea').val("");
					$("#editar_morador").find('input').not('[type=radio]')
					$("#editar_morador").find('.valid').removeClass('valid');
					$("#editar_morador").find('.invalid').removeClass('invalid');
					$("#editar_morador").find('[name=info_extra_edicao-morador]:checked').click();
					$("#editar_morador").find('.remover-input').closest('.container_inputs-dinamico').remove();

					const usuario = response_obj[0];
					$("#img-morador-editar").attr('src', 'assets/uploads/imagens/usuario/' + usuario['imagem']);
					$('#ts_edicao-morador').val(usuario['ts']).removeClass('valid invalid').addClass('valid');
					$('#nome_edicao-morador').val(usuario['nome']).removeClass('valid invalid').addClass('valid');
					$('#bloco_edicao-morador').val(usuario['bloco']).removeClass('valid invalid').addClass('valid');
					$('#apto_edicao-morador').append(`<option value="${usuario['apartamento']}">${usuario['Apto']}</option>
					`).val(usuario['apartamento']).prop('disabled', false).removeClass('valid invalid').addClass('valid');
					$('#email_edicao-morador').val(usuario['email']).removeClass('valid invalid').addClass('valid');
					$('#senha_edicao-morador').val(usuario['senha']).removeClass('valid invalid').addClass('valid');
					$('#telefone_edicao-morador').val(usuario['telefone']).removeClass('valid invalid').addClass('valid');

					$('#categoria_edicao-morador').val(usuario['categoria']).removeClass('valid invalid').addClass('valid');

					$('#editar_morador [name=mensagens][value=' + usuario['recebe_mensagens'] + ']').prop('checked', true);
					$('#editar_morador [name=reservas][value=' + usuario['realiza_reservas'] + ']').prop('checked', true);
					$('#editar_morador [name=status][value=' + usuario['status'] + ']').prop('checked', true);


					var email_opcional = JSON.parse(usuario['email_opcional']);
					var telefone_opcional = JSON.parse(usuario['telefone_opcional']);
					var celular_opcional = JSON.parse(usuario['celular_opcional']);
					var endereco = JSON.parse(usuario['endereco']);
					var veiculo = JSON.parse(usuario['veiculo']);
					var bicicleta = JSON.parse(usuario['bicicleta']);
					var documento = JSON.parse(usuario['documento']);
					var atestado = JSON.parse(usuario['atestado']);
					var observacao = usuario['observacao'];
					if (email_opcional && email_opcional[0] && email_opcional.length > 0) {
						var div_email = $('#editar_morador').find('.div-email');
						var div_email_checkbox = $('#email_info_extra_edicao-morador');

						if (email_opcional.length > 1) {
							for (var i = 1; i < email_opcional.length; i++) $(div_email).find('.btn_acrescentar').click();

							for (var i = 0; i < email_opcional.length; i++) $(div_email).find('[name=email_opcional]').eq(i).addClass('valid').val(email_opcional[i]);
						} else {
							$(div_email).find('[name=email_opcional]').addClass('valid').val(email_opcional[0]);
						}
						$(div_email_checkbox).click();
					}
					if (telefone_opcional && telefone_opcional[0] && telefone_opcional.length > 0) {
						var div_telefone = $('#editar_morador').find('.div-telefone');
						var div_telefone_checkbox = $('#telefone_info_extra_edicao-morador');

						if (telefone_opcional.length > 1) {
							for (var i = 1; i < telefone_opcional.length; i++) $(div_telefone).find('.btn_acrescentar').click();

							for (var i = 0; i < telefone_opcional.length; i++) {
								$(div_telefone).find('[name=telefone_opcional]').eq(i).addClass('valid').val(telefone_opcional[i]);
								$(div_telefone).find('[name=celular_opcional]').eq(i).addClass('valid').val(celular_opcional[i]);
							}
						} else {
							$(div_telefone).find('[name=telefone_opcional]').addClass('valid').val(telefone_opcional[0]);
							$(div_telefone).find('[name=celular_opcional]').addClass('valid').val(celular_opcional[0]);
						}
						$(div_telefone_checkbox).click();
					}

					console.log(endereco, endereco.cep);
					if (endereco && endereco.cep && Object.keys(endereco).length > 0) {


						var div_endereco = $('#editar_morador').find('.div-endereco');
						var div_endereco_checkbox = $('#endereco_info_extra_edicao-morador');

						$(div_endereco).find('[name=logradouro]').addClass('valid').val(endereco["logradouro"])
						$(div_endereco).find('[name=tipo_logradouro]').addClass('valid').val(endereco["tipo_logradouro"])
						$(div_endereco).find('[name=numero]').addClass('valid').val(endereco["numero"])
						$(div_endereco).find('[name=bairro]').addClass('valid').val(endereco["bairro"])
						$(div_endereco).find('[name=cidade]').addClass('valid').val(endereco["cidade"])
						$(div_endereco).find('[name=cep]').addClass('valid').val(endereco["cep"])
						$(div_endereco).find('[name=estado]').addClass('valid').val(endereco["estado"])

						$(div_endereco_checkbox).click();
					}
					if (veiculo && veiculo[0].placa && veiculo[0].modelo && veiculo[0].cor && veiculo.length > 0) {
						var div_veiculo = $('#editar_morador').find('.div-veiculo');
						var div_veiculo_checkbox = $('#veiculo_info_extra_edicao-morador');

						for (var i = 1; i < veiculo.length; i++) $(div_veiculo).find('.btn_acrescentar').click();

						$(veiculo).each((i, el) => {
							$(div_veiculo).find('[name=placa]').eq(i).addClass('valid').val(el["placa"])
							$(div_veiculo).find('[name=modelo]').eq(i).addClass('valid').val(el["modelo"])
							$(div_veiculo).find('[name=cor]').eq(i).addClass('valid').val(el["cor"])
						});

						$(div_veiculo_checkbox).click();
					}
					if (bicicleta && bicicleta[0].nome_bicicleta && bicicleta[0].localizacao_bicicleta && bicicleta.length > 0) {
						var div_bicicleta = $('#editar_morador').find('.div-bicicleta');
						var div_bicicleta_checkbox = $('#bicicleta_info_extra_edicao-morador');

						for (var i = 1; i < bicicleta.length; i++) $(div_bicicleta).find('.btn_acrescentar').click();

						$(bicicleta).each((i, el) => {
							$(div_bicicleta).find('[name=nome_bicicleta]').eq(i).addClass('valid').val(el["nome_bicicleta"])
							$(div_bicicleta).find('[name=localizacao_bicicleta]').eq(i).addClass('valid').val(el["localizacao_bicicleta"])
							$(div_bicicleta).find('[name=imagem_adc]').eq(i).addClass('valid').attr('src', 'assets/uploads/imagens/bicicleta/' + el["imagem_bicicleta"])
							$("#edicao-imagem-bicicleta").attr('src', 'assets/uploads/imagens/bicicleta/' + el["imagem_bicicleta"])
						});


						$(div_bicicleta_checkbox).click();
					}
					if (documento && documento[0].rg && documento[0].cpf && documento.length > 0) {
						var div_documento = $('#editar_morador').find('.div-documento');
						var div_documento_checkbox = $('#documento_info_extra_edicao-morador');

						for (var i = 1; i < documento.length; i++) $(div_documento).find('.btn_acrescentar').click();

						$(documento).each((i, el) => {
							$(div_documento).find('[name=rg]').eq(i).addClass('valid').val(el["rg"])
							$(div_documento).find('[name=cpf]').eq(i).addClass('valid').val(el["cpf"])
						});

						$(div_documento_checkbox).click();
					}
					if (atestado && atestado.vencimento_atestado[0] && atestado.tipo_atestado[0] && Object.keys(atestado).length > 0) {


						var div_atestado = $('#editar_morador').find('.div-atestado');
						var div_atestado_checkbox = $('#atestado_info_extra_edicao-morador');

						$(div_atestado).find('[name=vencimento_atestado]').addClass('valid').val(atestado["vencimento_atestado"]);
						$(div_atestado).find('[name=tipo_atestado]').addClass('valid').val(atestado["tipo_atestado"]);
						$(div_atestado).find('[name=arquivo_atestado]').addClass('valid').val(atestado["arquivo_atestado"]);
						$(div_atestado).find('[name=observacao_atestado]').addClass('valid').val(atestado["observacao_atestado"]);

						$(div_atestado_checkbox).click();

						$('.btn-download-atestado').click(function(e) {
							e.preventDefault(); //stop the browser from following
							href = "../../assets/uploads/arquivos/atestado/" + atestado["arquivo_atestado"];
							var valFileDownloadPath = 'http//:' + 'your url';

							window.open(href, '_blank');

						});

					}
					if (observacao && observacao.length > 0) {
						var div_observacao = $('#editar_morador').find('.div-observacao');
						var div_observacao_checkbox = $('#observacao_info_extra_edicao-morador');

						if (observacao.length > 1) {
							$(div_observacao).find('[name=observacao]').addClass('valid').val(observacao);
						}
						$(div_observacao_checkbox).click();
					}


					if (usuario['imagem']) {
						$('#imagem_edicao_hidden-morador').val(usuario['imagem']).removeClass('valid invalid').addClass('valid');
						$('#imagem_edicao_hidden-morador').closest('.custom-file').find('label').text("Uma imagem selecionada.").removeClass('valid invalid').addClass('valid');
						$('.imagem_usuario-morador').attr('data-imagem', `usuario/${usuario['imagem']}`);
						$('.imagem_usuario-morador').show();
					} else {
						$('.imagem_usuario-morador').attr('data-imagem', '');
						$('.imagem_usuario-morador').hide();
					}

					$('#editar_morador-tab').show();
					$('#editar_morador-tab').click();
					setTimeout(() => {
						reposicionarBotao()
					}, 500);

				}
			},
			error: (response) => {
				console.log(response)
			},
		})
		e.stopImmediatePropagation();
	});
	$('body').on('click', '.excluir-morador', (e) => {
		const ts = $(e.target).attr('data-ts');

		$.ajax({
			url: 'telas_ajax/gerenciamento/usuario.php',
			type: 'POST',
			data: `ts=${ts}&acao=excluir&tipo=usuario&tipo_usuario=morador`,
			success: (response) => {
				var status = response.split(' |divisor| ')[0]
				var mensagem = response.split(' |divisor| ')[1]

				if (status == 'sucesso') {
					toastr.success('Usuário excluído com sucesso!', 'Sucesso')
					$('#form-busca-morador button[type=submit]').click();

				} else if (status == 'falha') {
					toastr.error(mensagem, 'Erro')
				}
			},
			error: (response) => {
				console.log(response)
			},
		});
		e.stopImmediatePropagation();
	});

	$('body').on('click', '.limpar-filtros', (e) => {
		var form = $(e.target).closest('form');
		$(form).find('select').val("");
		$(form).find('input').not('[type=radio]').val('')
		$(form).find('.valid, .invalid').removeClass('valid invalid');

		$(form).find('.usuario-busca').val("usuario");
		$(form).find('.tipousuario-busca').val('morador');
		$(form).find('.acao-busca').val('busca');
		$(".tabela-resultado").hide();
	})


	$("#categoria_edicao-morador").change(function() {
		const value = $(this).val();

		if (value === 'Locatário temporada') {
			$("#div-temporario-edicao-morador").show();
		} else {
			$("#div-temporario-edicao-morador").hide();
		}
	});

	$("#categoria-morador").change(function() {
		const value = $(this).val();

		if (value === 'Locatário temporada') {
			$("#div-temporario-morador").show();
		} else {
			$("#div-temporario-morador").hide();
		}
	});

	function handleClickSendPassword() {
		alert("Módulo de email não realizado conforme já conversado")
	}
</script>