<form id="form-cadastro-morador">
    <?php
    include("cadastro/infoMorador.php");

    include("cadastro/configMorador.php");

    include("cadastro/opcionalMorador.php");
    ?>


</form>

<script>
    $(document).ready(function() {

        function verifyEmailFone(email, fone) {
            var email = $("#" + email).val()
            var fone = $("#" + fone).val()

            if (!fone || !email) {
                return false
            } else {
                return true
            }
        }

        function ajaxCadastroMorador(dados,Obj) {
            $.ajax({
                url: 'telas_ajax/gerenciamento/usuario.php',
                type: 'POST',
                data: dados,
                success: (response) => {
                    var status = response.split(' |divisor| ')[0]
                    var mensagem = response.split(' |divisor| ')[1]

                    if (status == 'sucesso') {
                        toastr.success(mensagem, 'Sucesso');

                        $('#form-busca-morador button[type=submit]').click();
                        $('#editar_morador-tab').hide();
                        $('#busca-tab').click();

                        $("#nome-morador").val('')
                        $("#email-morador").val('')
                        $("#senha-morador").val('')

                    } else if (status == 'falha') {
                        toastr.error(mensagem, 'Erro')

                    } else if (status == 'alerta') {
                        toastr.warning(mensagem, 'Alerta');
                        $('#nome-busca').val(Obj['nome'][0]);
                        $('#email-busca').val(Obj['email'][0]);
                        $('#form-busca-morador button[type=submit]').click();
                        $('#editar_morador-tab').hide();
                        $('#busca-tab').click();
                    }
                },
                error: (response) => {
                    console.log(response)
                },
            })
        }


        $("#acceptModalVerify").click(function() {
            ajaxCadastroMorador(dados)
            $(".close").click()
        })


        function openModal() {
            $("#btn-cadastro-verify-open-modal").click()
            console.log("função ta sendo chamada")
        }

        $("#verifyEmail").on('click', (e) => {

            $('#cadastroPrimary').click()
        })

        var dados;

        $('#form-cadastro-morador').on('submit', (e) => {

            var form = $("#form-cadastro-morador").serializeArray();
            var Obj = {};
            form.forEach((item) => (!Obj[item.name]) ? Obj[item.name] = [item.value] : Obj[item.name].push(item.value))
            delete Obj['info_extra-morador'];

            dados = $.param(Obj);

            if (verifyEmailFone('email-morador', 'telefone-morador')) {
                ajaxCadastroMorador(dados,Obj);
            } else {
                //CLICK NÃO FUNCIONANDO NO MOMENTO
                $(document).ready(function() {
                    openModal()
                })
            }

            e.stopImmediatePropagation();
            return false;

        })

    })
</script>