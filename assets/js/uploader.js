$(document).ready(function () {
	$('#image_demo').croppie('destroy');
	$image_crop = $('#image_demo').croppie({
		enableExif: true,

		viewport: {
			width: '100%',

			height: '100%',

			type: 'circle', //square
		},

		boundary: {
			width: '50vw',

			height: '50vw',
		},
	});

	$('body').on('change', '#imagem-cadastroa', function () {
		var ext = $('#imagem-cadastroa').val().split('.').pop().toLowerCase();

		if ($.inArray(ext, ['png', 'jpg', 'jpeg']) == -1) {
			// toastr.error('Por favor, envie somente arquivos de imagem (.png .jpg .jpeg).', 'Extensão inválida');

			$('#imagem-cadastroa').val('');

			return;
		} else {
			if (this.files[0].size > 5120000) {
				// toastr.error('Esse arquivo é muito grande. Faça o upload de outra imagem.', 'Tamanho máximo de 5MB');

				$('#imagem-cadastroa').val('');

				return;
			}

			var reader = new FileReader();

			reader.onload = function (event) {
				$image_crop
					.croppie('bind', {
						url: event.target.result,
					})
					.then(function () {
						console.log('jQuery bind complete');
					});
			};

			reader.readAsDataURL(this.files[0]);

			$('#uploadimageModal').modal('show');
		}
	});

	$('body').on('click', '.crop_image', function (event) {
		$image_crop
			.croppie('result', {
				type: 'canvas',

				size: 'viewport',
			})
			.then(function (response) {
				$.ajax({
					url: '../assets/lib/uploader/upload.php',

					type: 'POST',

					data: {
						image: response,
					},

					success: function (data) {
						$('#imagem-cadastroa').val('');

						// $('#imagem-cadastroa').attr('disabled', true);

						$('#uploadimageModal').modal('hide');

						alterarPreview(data);

						// toastr.success('Imagem alterada com sucesso.', 'Sucesso');
					},
				});
			});
	});
});
