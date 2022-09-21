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

		<a class="nav-link active" id="cadastro-tab" data-toggle="tab" href="#cadastro" role="tab" aria-controls="cadastro" aria-selected="true">Cadastrar</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="busca-tab" data-toggle="tab" href="#busca" role="tab" aria-controls="busca" aria-selected="false">Procurar</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="observacao-tab" data-toggle="tab" href="#observacao" role="tab" aria-controls="observacao" aria-selected="false">Observação</a>

	</li>

	

</ul>



<div class="tab-content" id="abasConteudo">

	<div class="tab-pane fade show active" id="cadastro" role="tabpanel" aria-labelledby="cadastro-tab">
		<?php
		include("correspondencia/formCadastroCorrespondencia.php");
		?>
	</div>

	<!-- <script src="../assets/js/uploader.js"></script> -->
	<div class="tab-pane fade" id="baixa" role="tabpanel" aria-labelledby="baixa-tab">
		<?php
		include("correspondencia/formBaixaCorrespondencia.php");
		?>
	</div>



	<div class="tab-pane fade" id="observacao" role="tabpanel" aria-labelledby="observacao-tab">
		<?php
		include("correspondencia/formCadastroObservação.php");
		?>
	</div>



	<div class="tab-pane fade" id="busca" role="tabpanel" aria-labelledby="busca-tab">
		<?php
		include("correspondencia/busca/formBusca.php");
		?>
		<?php
		include("correspondencia/busca/tabelaResultado.php");
		?>
	</div>

</div>


<!-- IMPORT MODALS CORRESPONDENCIA -->
<?php
include("correspondencia/modalCorrespondencia.php");
?>

<!-- <script src="../assets/js/uploader.js"></script> -->

<script>
	$(document).ready(function() {
		<?php
		//FORM BUSCA CORRESPONDÊNCIA
		include("correspondencia/busca/script.js");


		//FORM CADASTRO CORRESPONDÊNCIA
		include("correspondencia/cadastro/cadastroCorrespondencia.js");
		?>
	})
</script>


<script>
	$('#form-cadastro-baixa').on('submit', (e) => {
		var dados = $(e.target).serialize();
		var campos_invalidos = $('#form-cadastro-baixa .invalid').length;

		if (campos_invalidos > 0) {
			toastr.error('Preencha todos os campos corretamente.', 'Erro');
			return false;
		}

		$.ajax({
			url: '../../telas_ajax/controle/correspondencia.php',
			type: 'POST',
			data: dados,
			success: (response) => {
				var status = response.split(' |divisor| ')[0]
				var mensagem = response.split(' |divisor| ')[1]

				if (status == 'sucesso') {
					toastr.success(mensagem, 'Sucesso');
					$('#tab-busca').click();
					$('#submit-busca').click();

				} else if (status == 'falha') {
					toastr.error(mensagem, 'Erro')
				}
			},
			error: (response) => {
				console.log(response)
			},
		})

		return false
	});

	

	$('#form-cadastro-busca').on('submit', (e) => {
		var dados = $(e.target).serialize();
		var campos_invalidos = $('#form-cadastro-busca .invalid').length;

		if (campos_invalidos > 0) {
			toastr.error('Preencha todos os campos corretamente.', 'Erro');
			return false;
		}

		$.ajax({
			url: '../../telas_ajax/controle/correspondencia.php',
			type: 'POST',
			data: dados,
			success: (response) => {
				var status = response.split(' |divisor| ')[0]
				var mensagem = response.split(' |divisor| ')[1]

				if (status == 'sucesso') {
					toastr.success(mensagem, 'Sucesso');
					$('#tab-busca').click();
					$('#submit-busca').click();

				} else if (status == 'falha') {
					toastr.error(mensagem, 'Erro')
				}
			},
			error: (response) => {
				console.log(response)
			},
		})

		return false
	});



	CKEDITOR.replaceAll('ckeditor');

	$('input[type="date"]').val(new Date().today());



	tippy('#cadastrar_categoria_almoxarifado', {

		content: 'Cadastre, edite ou remova uma categoria.',

		placement: 'top',

		arrow: true,

	});



	tippy('#cadastrar_grupo_almoxarifado', {

		content: 'Cadastre, edite ou remova um grupo.',

		placement: 'top',

		arrow: true,

	});



	$('body').on('click', '#cadastrar_tipo_correspondencia-modal > div > div > div.modal-body > div:nth-child(4) > div > div > a', (e) => {

		$('#cadastrar_tipo_correspondencia-modal > div > div > div.modal-footer > button.btn.btn-light.close-modal').click();

	});



	$('body').on('click', '.add_campo-tipo', (e) => {

		$(e.target).parent().parent().parent().parent().append(`

		<div class="input-group extra-fields mt-2">

			<input type="text" class="form-control">

			<div class="input-group-append">

				<a class="remover_campo-tipo" href="javascript:void(0)"><span class="input-group-text remover-item">×</span></a>

				<a class="add_campo-tipo" href="javascript:void(0)"><span class="input-group-text add-item">+</span></a>

			</div>

		</div>

		`);

		e.stopImmediatePropagation();

	});



	$('body').on('click', '.remover_campo-tipo', (e) => {

		$(e.target).parent().parent().parent().remove();

		e.stopImmediatePropagation();

	});



	$('body').on('click', '.close-modal', (e) => {

		$('.extra-fields').remove();

	});
</script>