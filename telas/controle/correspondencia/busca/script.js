

$('#form-busca').on('submit', (e) => {
    var dados = $(e.target).serialize();
    var campos_invalidos = $('#form-busca .invalid').length;

    if (campos_invalidos > 0) {
        toastr.error('Preencha todos os campos corretamente.', 'Erro');
        return false;
    }

    $.ajax({
        url: 'telas_ajax/controle/correspondencia.php',
        type: 'POST',
        data: dados,
        success: (response) => {
            var responseObjeto = JSON.parse(response)
            var tabela = $('#tabela-busca_resultado2')
            var texto = $('#texto-busca_resultado2')
            var qtd = Object.keys(responseObjeto).length
            // return;
            if (qtd < 1) {
                $(texto).html('Nenhum resultado encontrado.')
                $(texto).show()
                $(tabela).hide()

                return
            }

            if (responseObjeto) {
                $(texto).hide()
                $(tabela).find('tbody').html('')

                $(responseObjeto).each((i, objeto) => {

                    var dateArr = objeto['dataRecebimento'].split("-");
                    dateStr = dateArr[2] + "/" + dateArr[1] + "/" + dateArr[0];

                    objeto['status'] === '0' ? (
                        $(tabela).find('tbody').append(`
                            <tr>
                                <td>${dateStr}</td>
                                <td>${objeto['bloco']}</td>
                                <td>${objeto['apartamento']}</td>
                                <td>${objeto['morador']}</td>
                                <td>${objeto['remetente']}</td>
                                <td>${objeto['nome']}</td>
                                <td>${objeto['codRastreio']}</td>
                                <td class="acoes-td">
                            
                                    <i class="fas fa-pen editar-tooltip editar-correspondencia" data-ts="${objeto['codRastreio']}"></i>

                                    <i class="fas fa-check aceitar-correspondencia" data-ts="${objeto['codRastreio']}"></i>

                                    
                                    <i class="fas fa-times excluir-correspondencia" data-ts="${objeto['codRastreio']}"></i>

                                    
                                    <a href="javascript:void(0)">
                                        <span data-toggle="modal" class="qrcode-modal"  data-ts="${objeto['codRastreio']}" data-target="#qrcodeCorrespondencia-modal">
                                        <i class="fas fa-qrcode"></i>
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        `)
                    )
                        :
                        (
                            $(tabela).find('tbody').append(`
                            <tr>
                                <td>${dateStr}</td>
                                <td>${objeto['bloco']}</td>
                                <td>${objeto['apartamento']}</td>
                                <td>${objeto['morador']}</td>
                                <td>${objeto['remetente']}</td>
                                <td>${objeto['nome']}</td>
                                <td>${objeto['codRastreio']}</td>
                                <td class="acoes-td">
                                    <a href="javascript:void(0)">
                                        <span data-toggle="modal" class="observacao-correspondencia-modal" data-ts="${objeto['codRastreio']}" data-target="#observacaoCorrespondencia-modal">
                                            <i class="fas fa-clipboard-list"></i>
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        `)
                        )
                })

                $(tabela).show()
            }
        },
        error: (response) => {
            console.log(response)
        },
    })

    return false
});

function ajaxCorrespondencia(ts, acao, tipo) {
    $.ajax({
        url: '../../telas_ajax/controle/correspondencia.php',
        type: 'POST',
        data: `cod-baixa=${ts}&acao=${acao}&tipo=${tipo}`,
        success: (response) => {
            var status = response.split(' |divisor| ')[0]
            var mensagem = response.split(' |divisor| ')[1]

            if (status == 'sucesso') {
                toastr.success('Correspondência baixada com sucesso!', 'Sucesso')
                $('#form-busca button[type=submit]').click();

            } else if (status == 'falha') {
                toastr.error(mensagem, 'Erro')
            }
        },
        error: (response) => {
            console.log(response)
        },
    })
}


$('body').on('click', '.aceitar-correspondencia', (e) => {
    const ts = $(e.target).attr('data-ts');

    ajaxCorrespondencia(ts, 'cadastro', 'baixa')

    e.stopImmediatePropagation();
});

$('body').on('click', '.excluir-correspondencia', (e) => {
    const ts = $(e.target).attr('data-ts');

    ajaxCorrespondencia(ts, 'excluir', 'baixa')

    e.stopImmediatePropagation();
});

