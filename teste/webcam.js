var canvas = $('.webcam-canvas')[0],
	context = canvas.getContext('2d'),
	salvar = $('.webcam-salvar'),
	capturar = $('.webcam-capturar'),
	recapturar = $('.webcam-recapturar'),
	width,
	height,
	stream,
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

$(capturar).on('click', function () {
	capturarImagem();
});
$(video).on('click', function () {
	capturarImagem();
});

$(recapturar).on('click', function () {
	canvas.getContext('2d').drawImage(video, 0, 0, width, height);
	$(video).show();
	$(imagem).hide();
	$(capturar).show();
	$(recapturar).hide();
});

$(salvar).on('click', function () {
	$.ajax({
		type: 'POST',
		url: 'teste/file_uploader.php',
		data: {
			imgBase64: $(imagem).attr('src'),
			imgName: `${Date.now()}.jpeg`,
		},
	}).done(function (o) {
        $('.webcam-modal').modal('toggle');
        toastr.success('A imagem foi salva com sucesso!', 'Sucesso')
        encerrarWebcam()
	});
	return false;
});

$('body').on('click', '.usar-webcam', function () {
	iniciarWebcam();
});
