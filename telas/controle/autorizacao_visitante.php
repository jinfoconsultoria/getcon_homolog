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

		<a class="nav-link active" id="autorizacao-tab" data-toggle="tab" href="#autorizacao" role="tab" aria-controls="autorizacao" aria-selected="true">Autorizações</a>

	</li>

	<li class="nav-item" role="presentation">

		<a class="nav-link" id="cadastro-tab" data-toggle="tab" href="#cadastro" role="tab" aria-controls="cadastro" aria-selected="false">Cadastro</a>

	</li>

	<li class="nav-item" role="presentation" id="nav-item-editar-visitante" style="display:none">

		<a class="nav-link" id="editar-tab" data-toggle="tab" href="#editar" role="tab" aria-controls="editar" aria-selected="false">Editar Visitante</a>

	</li>

</ul>



<div class="tab-content" id="abasConteudo">

	<div class="tab-pane fade show active" id="autorizacao" role="tabpanel" aria-labelledby="autorizacao-tab">

		<?php
		//TABELA DE RESULTADOS DA BUSCA
		include("autorizacao_visitante/autorizacao/formBuscaVisitante.php")
		?>

		<?php
		//TABELA DE RESULTADOS DA BUSCA
		include("autorizacao_visitante/autorizacao/tableResultVisitante.php")
		?>


	</div>


	<div class="tab-pane fade" id="cadastro" role="tabpanel" aria-labelledby="cadastro-tab">

		<?php
		//FORM CADASTRO DE VISITANTE
		include("autorizacao_visitante/cadastro/formCadastroVisitante.php")
		?>

	</div>


	<div class="tab-pane fade" id="editar" role="tabpanel" aria-labelledby="editar-tab">

		<?php
		//FORM EDIÇÃO DE VISITANTE
		include("autorizacao_visitante/edicao/formEditarVisitante.php")
		?>
	</div>

</div>

<?php include("autorizacao_visitanteModal.php") ?>


<style>
	.authAccept {
		color: #44bd32;
		cursor: pointer;
	}

	.authNegate {
		color: #e84118;
		cursor: pointer;
	}
</style>

<!-- <script src="../assets/js/uploader.js"></script> -->



<script>
	CKEDITOR.replaceAll('ckeditor');

	$(document).ready(function() {



		$("#autorizacao-tab").click(function() {
			$("#autorizacao").show();
			$("#cadastro").hide();
			$("#editar").hide();
		});

		$("#cadastro-tab").click(function() {
			$("#autorizacao").hide();
			$("#cadastro").show();
			$("#editar").hide();
		});

		$("#editar-tab").click(function() {
			$("#autorizacao").hide();
			$("#cadastro").hide();
			$("#editar").show();
		});

		//CADASTRO TIPO MODAL
		$("#btn-cadastrarTipo_modal").click(function() {
			const tipo = $("#tipo_visitante-modal").val();

			$.ajax({
				url: 'telas_ajax/controle/autorizacao_visitante.php',
				type: 'POST',
				data: {
					tipo: tipo,
					acao: 'cadastroTipo-modal'
				},
				success: (response) => {
					var status = response.split(' |divisor| ')[0]
					var mensagem = response.split(' |divisor| ')[1]

					if (status == 'sucesso') {
						toastr.success(mensagem, 'Sucesso');

					} else if (status == 'falha') {
						toastr.error(mensagem, 'Erro')
					}
				},
				error: (response) => {
					console.log(response)
				},
			})
		});

		// SELECT BLOCO CADASTRO

		$('#bloco-cadastro').change(function() {
			$('#apto-cadastro').load('/telas/master/listaApartamento.php?bloco=' + $('#bloco-cadastro').val() + '&tipo=cleanMorador');
		});

		$('#apto-cadastro').change(function() {
			$('#morador-cadastro').load('/telas/master/listaMorador.php?bloco=' + $('#bloco-cadastro').val() + '&apartamento=' + $('#apto-cadastro').val());
		});

		// SELECT BLOCO EDITAR

		$('#bloco-editar').change(function() {

			$('#apto-editar').load('/telas/master/listaApartamento.php?bloco=' + $('#bloco-editar').val() + '&tipo=cleanMorador');

		});

		$('#apto-editar').change(function() {
			$('#morador-editar').load('/telas/master/listaMorador.php?bloco=' + $('#bloco-editar').val() + '&apartamento=' + $('#apto-editar').val());
		});


		// SCRIPT CADASTRO
		$("body").on('click', ".authAccept", function() {
			var id = $(this).parent().parent().attr('data-id');
			var idLog = $(this).parent().parent().attr('data-idlog');

			var acao = 'logVisitante';

			$.ajax({
				url: 'telas_ajax/controle/autorizacao_visitante.php',
				type: 'POST',
				data: {

					id: id,
					acao: acao,
					idLog: idLog
				},
				success: function(response) {
					var status = response.split(' |divisor| ')[0]
					var mensagem = response.split(' |divisor| ')[1]

					if (status == 'sucesso') {
						toastr.success(mensagem, 'Sucesso');
						$('#tab-busca').click();
						$('#submit-busca').click();

					} else if (status == 'falha') {
						toastr.error(mensagem, 'Erro')
					}
				}
			});
		});
	});
</script>