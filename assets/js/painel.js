$('.submenus .nav-link').on('click', (e) => {
	const elemento = e.target;
	const elementoCategoria = $(e.target).closest('.nav-item.main-nav-item').find('.active').text().trim();
	const elementoPasta = $(elemento).attr('data-folder');
	const elementoArquivo = $(elemento).attr('data-file');
	const elementoTitulo = $(elemento).attr('data-title');


	$('#secao-titulo').text(elementoTitulo);
	$('#breadcrumb-categoria a').text(elementoCategoria);
	$('#breadcrumb-item').text(elementoTitulo);

	if ($('#breadcrumb-item').hasClass('d-none')) $('#breadcrumb-item').removeClass('d-none');

	$("body").off("click");
	inputsDinamicos();
	$('#main-container').html('');
	$('#main-container').load(`telas/${elementoPasta}/${elementoArquivo}.php`);
});



$('.nav-link.sem-collapse').on('click', (e) => {
	const elemento = e.target;
	const elementoCategoria = $(e.target).closest('.nav-item.main-nav-item').find('.active').text().trim();
	const elementoPasta = $(elemento).attr('data-folder');
	const elementoArquivo = $(elemento).attr('data-file');
	const elementoTitulo = $(elemento).attr('data-title');

	$('#secao-titulo').text(elementoTitulo);
	$('#breadcrumb-categoria a').text(elementoCategoria);

	if (!$('#breadcrumb-item').hasClass('d-none')) $('#breadcrumb-item').addClass('d-none');

	$("body").off("click");
	inputsDinamicos();
	$('#main-container').html('');
	$('#main-container').load(`telas/${elementoPasta}/${elementoArquivo}.php`);
});

new SimpleBar($('.sidebar-sticky')[0]);

Date.prototype.today = (function() {

    var local = new Date(this);

    local.setMinutes(this.getMinutes() - this.getTimezoneOffset());

    return local.toJSON().slice(0,10);

});


function inputsDinamicos(){
	$('body').on('click', '.btn_acrescentar', (e) => {
		switch ($(e.target).attr('data-input-type')) {
			case 'email':
				$(e.target).parent().find('.container-dinamico').append(`
					<div class="form-group container_inputs-dinamico">
						<input class="form-control" name="email_opcional" type="email"/>
						<span class="remover-input">×<span>
					</div>
				`)
				break

			case 'telefone':
				$(e.target).parent().find('.container-dinamico').append(`

					<div class="row container_inputs-dinamico">
						<div class="col-md-6">
							<div class="form-group">
							<input class="form-control telefone-input" name="telefone_opcional" type="text" />
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control celular-input" name="celular_opcional" type="text" />
								<span class="remover-input">×<span>
							</div>
						</div>
					</div>

				`)
				break

			case 'documento':
				$(e.target).parent().find('.container-dinamico').append(`
					<div class="row container_inputs-dinamico">
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control rg-input" name="rg" type="text" />
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control cpf-input" name="cpf" type="text" />
								<span class="remover-input">×</span>
								<label class="erro-mensagem">CPF inválido</label>
							</div>
						</div>
					</div>

				`)
				break

			case 'veiculo':
				$(e.target).parent().find('.container-dinamico').append(`

					<div class="row container_inputs-dinamico">
						<div class="col-md-4">
							<div class="form-group">
								<input class="form-control placa_carro-input" name="placa" type="text" />
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<input class="form-control" name="modelo" type="text" />
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<input class="form-control" name="cor" type="text" />
								<span class="remover-input">×<span>
							</div>
						</div>
					</div>

				`)
				break

			case 'bicicleta':
				$(e.target).parent().find('.container-dinamico').append(`

					<div class="row container_inputs-dinamico">
						<div class="col-md-4">
							<div class="form-group">
								<input class="form-control" name="nome_bicicleta" type="text" />
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<input class="form-control" name="localizacao_bicicleta" type="text" />
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<div class="input-group custom-form-control">
									<div class="custom-file">
										<input type="file" name="imagem_bicicleta" class="custom-file-input" id="imagem_bike-morador" />
										<label class="custom-file-label" for="imagem_bike-morador"></label>
										<i class="preview-file far fa-eye d-none"></i>
									</div>
								</div>
								<span class="remover-input" style="right: 87px; z-index: 10">×<span>
							</div>
						</div>
					</div>

				`)
				break

			case 'categoria':
				$(e.target).parent().find('.container-dinamico').append(`
					<div class="form-group container_inputs-dinamico">
						<input class="form-control" name="categoria-cadastro" type="text" />
						<span class="remover-input">×<span>
					</div>
				`)
				break

			case 'perfil':
				$(e.target).parent().find('.container-dinamico').append(`
					<div class="form-group container_inputs-dinamico">
						<input class="form-control" name="perfil-cadastro" type="text" />
						<span class="remover-input">×<span>
					</div>
				`)
				break

			case 'bloco':
				$(e.target).parent().find('.container-dinamico').append(`
					<div class="form-group container_inputs-dinamico">
					<input class="form-control simples-input" name="bloco" type="text" />
						<span class="remover-input">×<span>
					</div>
				`)
				break

			case 'apartamento':
				$(e.target).parent().find('.container-dinamico').append(`
					<div class="form-group container_inputs-dinamico">
						<input class="form-control simples-input" name="apartamento" type="text" />
						<span class="remover-input">×<span>
					</div>
				`)
				break
		}
		e.stopImmediatePropagation();
		setTimeout(() => {
			setarMascaras();
		}, 100)
	});

	$('body').on('click', '.remover-input', (e) => {
		$(e.target).closest('.container_inputs-dinamico').remove();
		e.stopImmediatePropagation();
	})

	$('body').on('mouseover', '.remover-input', (e) => {
		$(e.target).closest('.container_inputs-dinamico').addClass('inputs_vermelhos')
	})

	$('body').on('mouseout', '.remover-input', (e) => {
		$(e.target).closest('.container_inputs-dinamico').removeClass('inputs_vermelhos')
	})
}


$(document).on('click', '.visualizar-imagem', function(e){
	const imagem = $(e.target).attr('data-imagem');
	$('#imagem-modal').find('img').attr('src', '');
	$('#imagem-modal').find('img').attr('src', `assets/uploads/imagens/${imagem}`);
	$('#imagem-modal').modal('show');
});

var input;
$(document).on('change', 'input[type=file][name=imagem]', function(e) {
	input = $(e.target);
	var pasta = $(input).attr('data-pasta');

    var file_data = $(e.target).prop("files")[0];
	var form_data = new FormData();
	form_data.append("pasta", pasta);
	form_data.append("file", file_data);

    $.ajax({
        url: `assets/php/image_uploader.php`,
        dataType: 'script',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function(response){
			$(input).closest('.custom-file').find('.imagem-hidden').val(response);
			input = undefined;
        }
	});
});

var input;
$(document).on('change', 'input[type=file][name=imagem_adc]', function(e) {
	input = $(e.target);
	var pasta = $(input).attr('data-pasta');

    var file_data = $(e.target).prop("files")[0];
	var form_data = new FormData();
	form_data.append("pasta", pasta);
	form_data.append("file", file_data);

    $.ajax({
        url: `assets/php/image_uploader2.php`,
        dataType: 'script',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function(response){
			$(input).closest('.custom-file').find('.imagem-hidden').val(response);
			input = undefined;
        }
	});
});

$(document).on('change', 'input[type=file][name=arquivo]', function(e) {
	input = $(e.target);
	var pasta = $(input).attr('data-pasta');

    var file_data = $(e.target).prop("files")[0];
	var form_data = new FormData();
	form_data.append("pasta", pasta);
	form_data.append("file", file_data);

    $.ajax({
        url: `assets/php/arquivo_uploader.php`,
        dataType: 'script',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function(response){
			$(input).closest('.custom-file').find('.imagem-hidden').val(response);
			input = undefined;
        }
	});
});