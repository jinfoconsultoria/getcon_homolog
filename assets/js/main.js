function getTime() {
	var date = new Date();

	var minutes = date.getMinutes();

	var hour = date.getHours();

	if (hour < 10 && hour >= 0) hour = '0' + hour;

	var time = hour + ':' + minutes;

	return time;
}

$('.nav-link').on('click', (e) => {
	if ($(e.target).parent().hasClass('main-nav-item')) {
		$('.main-nav-item .nav-link').removeClass('active');

		$(e.target).addClass('active');
	} else if ($(e.target).hasClass('sub-nav-link')) {
		$('.sub-nav-link').removeClass('sub-active');

		$(e.target).addClass('sub-active');
	}
});

function pegarNomeArquivo(el) {
	return $(el).val().split('\\').pop();
}

function previaImagem(el) {
	if (el.files && el.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			alterarPreview(e.target.result);
		};

		reader.readAsDataURL(el.files[0]);
	}
}

$('body').on('change', '.custom-file-input', function () {
	$(this).parent().find('.custom-file-label').text(pegarNomeArquivo(this));
});

function alterarPreview(img) {
	prevTippy[0].setContent(img);
}

function consultarCep(cep, aba, erro) {
	if ($(cep).val().length >= 9) {
		$.ajax({
			url: 'https://viacep.com.br/ws/' + $(cep).val() + '/json/unicode/',

			dataType: 'json',

			success: function (data) {
				if (data.erro) {
					$(cep).removeClass('valid invalid');

					$(cep).addClass('invalid');

					$(erro).show();

					return;
				} else {
					$(cep).removeClass('valid invalid');

					$(cep).addClass('valid');

					$(erro).hide();
				}

				if (!$(`#logradouro-${aba}`).attr('readonly')) {
					$(`#cep-${aba}`).val(data.cep).attr('readonly', true).addClass('valid');

					$(`#logradouro-${aba}`).val(data.logradouro).attr('readonly', true).addClass('valid');

					$(`#bairro-${aba}`).val(data.bairro).attr('readonly', true).addClass('valid');

					$(`#cidade-${aba}`).val(data.localidade).attr('readonly', true).addClass('valid');

					$(`#estado-${aba}`).val(data.uf).attr('readonly', true).addClass('valid');

					$(`#numero-${aba}`).focus();
				}
			},

			error: function (data) {
				console.log(data);
			},
		});
	}
}

function validaCpfCnpj(val) {
	if (val.length == 14) {
		var cpf = val.trim();

		cpf = cpf.replace(/\./g, '');

		cpf = cpf.replace('-', '');

		cpf = cpf.split('');

		var v1 = 0;

		var v2 = 0;

		var aux = false;

		for (var i = 1; cpf.length > i; i++) {
			if (cpf[i - 1] != cpf[i]) {
				aux = true;
			}
		}

		if (aux == false) {
			return false;
		}

		for (var i = 0, p = 10; cpf.length - 2 > i; i++, p--) {
			v1 += cpf[i] * p;
		}

		v1 = (v1 * 10) % 11;

		if (v1 == 10) {
			v1 = 0;
		}

		if (v1 != cpf[9]) {
			return false;
		}

		for (var i = 0, p = 11; cpf.length - 1 > i; i++, p--) {
			v2 += cpf[i] * p;
		}

		v2 = (v2 * 10) % 11;

		if (v2 == 10) {
			v2 = 0;
		}

		if (v2 != cpf[10]) {
			return false;
		} else {
			return true;
		}
	} else if (val.length == 18) {
		var cnpj = val.trim();

		cnpj = cnpj.replace(/\./g, '');

		cnpj = cnpj.replace('-', '');

		cnpj = cnpj.replace('/', '');

		cnpj = cnpj.split('');

		var v1 = 0;

		var v2 = 0;

		var aux = false;

		for (var i = 1; cnpj.length > i; i++) {
			if (cnpj[i - 1] != cnpj[i]) {
				aux = true;
			}
		}

		if (aux == false) {
			return false;
		}

		for (var i = 0, p1 = 5, p2 = 13; cnpj.length - 2 > i; i++, p1--, p2--) {
			if (p1 >= 2) {
				v1 += cnpj[i] * p1;
			} else {
				v1 += cnpj[i] * p2;
			}
		}

		v1 = v1 % 11;

		if (v1 < 2) {
			v1 = 0;
		} else {
			v1 = 11 - v1;
		}

		if (v1 != cnpj[12]) {
			return false;
		}

		for (var i = 0, p1 = 6, p2 = 14; cnpj.length - 1 > i; i++, p1--, p2--) {
			if (p1 >= 2) {
				v2 += cnpj[i] * p1;
			} else {
				v2 += cnpj[i] * p2;
			}
		}

		v2 = v2 % 11;

		if (v2 < 2) {
			v2 = 0;
		} else {
			v2 = 11 - v2;
		}

		if (v2 != cnpj[13]) {
			return false;
		} else {
			return true;
		}
	} else {
		return false;
	}
}

function validarEmail(email, erro) {
	const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	if (re.test(String(email.value).toLowerCase())) {
		$(email).removeClass('valid invalid');

		$(email).addClass('valid');

		$(erro).hide();

		return;
	} else {
		$(email).removeClass('valid invalid');

		$(email).addClass('invalid');

		$(erro).show();
	}
}

function validarURL(str, erro) {
	var pattern = new RegExp('^(https?:\\/\\/)?' + '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|' + '((\\d{1,3}\\.){3}\\d{1,3}))' + '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*' + '(\\?[;&a-z\\d%_.~+=-]*)?' + '(\\#[-a-z\\d_]*)?$', 'i');

	if (!!pattern.test(str.value)) {
		$(str).removeClass('valid invalid');

		$(str).addClass('valid');

		$(erro).hide();
	} else {
		$(str).removeClass('valid invalid');

		$(str).addClass('invalid');

		$(erro).show();
	}
}

function checarArray(array) {
	if (array.length < 1) return false;

	for (var i = 0; i < array.length; i++) {
		if (array[i] === '' || array[i] === undefined) return false;
	}
	return true;
}

$(document).ready(() => {
	toastr.options = {
		closeButton: true,
		debug: false,
		newestOnTop: false,
		progressBar: true,
		positionClass: 'toast-bottom-right',
		preventDuplicates: false,
		onclick: null,
		showDuration: '300',
		hideDuration: '1000',
		timeOut: '5000',
		extendedTimeOut: '1000',
		showEasing: 'swing',
		hideEasing: 'linear',
		showMethod: 'fadeIn',
		hideMethod: 'fadeOut',
	};
});


