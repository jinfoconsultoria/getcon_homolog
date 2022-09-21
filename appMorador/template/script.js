function cadastroAjax(id,name){
    $('#'+id).on('submit', (e) => {
		var dados = $(e.target).serialize();
		var campos_invalidos = $('#'+id+' .invalid').length;

		if (campos_invalidos > 0) {
			toastr.error('Preencha todos os campos corretamente.', 'Erro');
			return false;
		}

		$.ajax({
			url: 'telas_ajax/'+name+'.php',
			type: 'POST',
			data: dados,
			success: (response) => {
                console.log(response)
			},
			error: (response) => {
				console.log(response)
			},
		})

		return false
	});
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
        url: `../../assets/php/image_uploader.php`,
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
        url: `../../assets/php/image_uploader2.php`,
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
        url: `../../assets/php/arquivo_uploader.php`,
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