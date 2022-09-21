


<!-- IMPORT MODAL FONE -->
<?php
    include("usuario/modal/foneModal.php")
?>

<!-- IMPORT MODAL EMAIL -->
<?php
    include("usuario/modal/emailModal.php")
?>

<!-- IMPORT MODAL FOTO USUARIO -->
<?php
    include("usuario/modal/fotoModal.php")
?>

<!-- IMPORT MODAL FOTO ADMIN -->
<?php
    include("usuario/modal/fotoModalAdmin.php")
?>

<!-- IMPORT MODAL CARDS -->
<?php
    include("usuario/modal/cardModal.php")
?>

<!-- IMPORT MODAL TIPO ATESTADO -->
<?php
    include("usuario/modal/tipoAtestadoModal.php")
?>

<!-- IMPORT MODAL CADASTRO CATEGORIA -->
<?php
    include("usuario/modal/cadastroCategoriaModal.php")
?>

<?php
    include("usuario/modal/verifyEmailFoneModal.php")
?>



<script>
    function handleErrorProgramado() {
        alert("Modo de email não realizado conforme já conversado")
    }
</script>

<script src="assets/js/printThis.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.24/b-1.7.0/b-html5-1.7.0/datatables.min.js"></script>