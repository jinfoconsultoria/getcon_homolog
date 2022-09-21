var canvas = $('.webcam-canvas')[0],
	context = canvas.getContext('2d'),
	salvar = $('.webcam-salvar'),
	capturar = $('.webcam-capturar'),
	recapturar = $('.webcam-recapturar'),
	width,
	height,
	stream,
	label_webcam,
	input_webcam,
	input_hidden_webcam,
	pasta_webcam,
	timestamp,
	imagem = $('.webcam-imagem'),
	video = $('.webcam-video')[0],
	videoObj = {
		video: {
			width: {
				ideal: 1280,
			},
		},
	},
	errBack = function (error) {
		console.log('Erro na captura da webcam: ', error.code);
	};

function iniciarWebcam() {
	timestamp = Date.now() / 1000 | 0;
	if (navigator.getUserMedia) {
		navigator.getUserMedia(
			videoObj,
			function (stream) {
				stream_config = stream;
				video.srcObject = stream;
				width = stream.getVideoTracks()[0].getSettings().width;
				height = stream.getVideoTracks()[0].getSettings().height;
				canvas.width = width;
				canvas.height = height;
				video.play();
			},
			errBack
		);
	} else if (navigator.webkitGetUserMedia) {
		navigator.webkitGetUserMedia(
			videoObj,
			function (stream) {
				stream_config = stream;
				video.srcObject = stream;
				width = stream.getVideoTracks()[0].getSettings().width;
				height = stream.getVideoTracks()[0].getSettings().height;
				canvas.width = width;
				canvas.height = height;
				video.play();
			},
			errBack
		);
	} else if (navigator.mozGetUserMedia) {
		navigator.mozGetUserMedia(
			videoObj,
			function (stream) {
				stream_config = stream;
				video.srcObject = stream;
				width = stream.getVideoTracks()[0].getSettings().width;
				height = stream.getVideoTracks()[0].getSettings().height;
				canvas.width = width;
				canvas.height = height;
				video.play();
			},
			errBack
		);
	}
}
function capturarImagem() {
	canvas.getContext('2d').drawImage(video, 0, 0, width, height);
	$(video).hide();
	$(imagem).show();
	$(capturar).hide();
	$(recapturar).show();
	$(imagem).attr('src', canvas.toDataURL('image/jpeg', 0.4));
}

function encerrarWebcam() {
	stream_config.getTracks().forEach(function (track) {
		track.stop();
	});
}

function configurarInput(label, input, input_hidden, pasta) {
	switch (pasta) {
		case 'usuario':
			$(input_hidden).val(`${timestamp}.jpeg`);
			$(label).text('Uma imagem selecionada.');

			break;
	}
	$(input).blur();
}

$(capturar).on('click', function () {
	capturarImagem();
});
$(video).on('click', function () {
	capturarImagem();
});

$(recapturar).on('click', function () {
	$(video).show();
	$(imagem).hide();
	$(capturar).show();
	$(recapturar).hide();
});

$(salvar).on('click', function () {
	$.ajax({
		type: 'POST',
		url: 'assets/php/image_uploader.php',
		data: {
			imgBase64: $(imagem).attr('src'),
			imgName: `${timestamp}.jpeg`,
		},
	}).done(function (o) {
		$('.webcam-modal').modal('toggle');
		toastr.success('A imagem foi salva com sucesso!', 'Sucesso');
		$(video).show();
		$(imagem).hide();
		$(capturar).show();
		$(recapturar).hide();
		encerrarWebcam();
		configurarInput(label_webcam, input_webcam, input_hidden_webcam, pasta_webcam);
	});
	return false;
});

$(document).on('click', '.usar-webcam', function (e) {
	label_webcam = $(e.target).closest('.custom-file').find('label');
	input_webcam = $(e.target).closest('.custom-file').find('.imagem-upload');
	input_hidden_webcam = $(e.target).closest('.custom-file').find('.imagem-hidden');
	pasta_webcam = $(e.target).attr('data-pasta');
	iniciarWebcam();
});
