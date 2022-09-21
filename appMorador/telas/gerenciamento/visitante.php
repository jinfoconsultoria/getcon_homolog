<?php
session_start();

if (!isset($_SESSION['logado']) || !$_SESSION['logado'] === true) {
    header("location: login.php");
}

// Exigir o arquivo de classes que armazena as métodos;
require_once '../../../assets/php/classes.php';

// Instância um novo objeto do banco de dados e inicia a conexão;
$db   = new db();
$dbatual = $_SESSION['db_condominio'];
$link_condominio = $db->conecta_mysql($_SESSION['db_condominio']);
?>

<style>
    .visitanteArea {
        padding: 1rem;
        margin-bottom: 15px;
        border-radius: 7px;
        background-color: #ffffff;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
    }

    .visitanteInfo {
        display: flex;
        flex-direction: column;
        width: 100%;
    }

    .visitanteButton {
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        align-items: center;
        width: 100%;
    }

    .newVisitante {
        align-items: center;
        justify-content: space-between;
        padding: 0 1rem;
        margin-bottom: 2rem;
    }

    .newVisitante>h3 {

        margin: 0;

    }
</style>



<div class="section mt-2">
    <!-- NOVO VISITANTE HEADER E MODAl -->
    <?php
    include("visitante/newVisitante.php");
    ?>

    <?php
    include("visitante/itensVisitante.php");
    ?>
    <!-- Modal Basic -->
    <?php
    include("visitante/modalAutorizacao.php");
    ?>
    <!-- * Modal Basic -->

</div>


<!-- FALTA ABRIR O MODAL, COLOCAR O DIA INICIAL E FINAL E FINALIZAR COM A INSERÇÃO NO BANCO COM STATUS = 2 -->
<script>
    $(document).ready(function() {
        var idVisitante = '';
        $("body").on('click', ".authAccept", function() {
            idVisitante = $(this).parent().attr('data-id');
        });

        $(".authFinal").click(function() {
            var acao = 'logVisitante-Auth';
            var dataInicial = $("#dataInicial-visitante").val();
            var dataFinal = $("#dataFinal-visitante").val();

            $.ajax({
                type: "POST",
                url: "../../../telas_ajax/controle/autorizacao_visitante.php",
                data: {
                    acao: acao,
                    dataInicial: dataInicial,
                    dataFinal: dataFinal,
                    idVisitante: idVisitante
                },
                success: (response) => {
                    $(".closeModal").click();
                },
                error: (response) => {
                    console.log(response)
                },
            })
        });
    });
</script>