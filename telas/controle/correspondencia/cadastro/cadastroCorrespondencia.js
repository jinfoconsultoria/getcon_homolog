$('#form-cadastro-correspondencia').on('submit', (e) => {
    var dados = $(e.target).serialize();
    var campos_invalidos = $('#form-cadastro-correspondencia .invalid').length;

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
                $("#remetente-cadastro").val('')
                $("#data_recebimento-cadastro").val('')
                $("#tipo_correspondencia-cadastro").val('')
                $("#bloco-cadastro").val('')
                $("#apto-cadastro").val('')
                $("#morador-cadastro").val('')
                $("#cod_rastreio-cadastro").val('')

                toastr.success(mensagem, 'Sucesso');
                $('#busca-tab').click();
                $('#form-busca').submit();
                

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


