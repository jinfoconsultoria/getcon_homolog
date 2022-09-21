<form id="form-busca-visitante">
    <input type="hidden" name="acao" value="busca" />
    <input type="hidden" name="tipo" value="visitante" />
    <div class="card">

        <div class="card-body">

            <h4 class="card-title">Faça uma busca</h4>



            <div class="row mt-4">

                <div class="col-md-4">

                    <div class="form-group">

                        <label for="nome-busca">Nome</label>

                        <input class="form-control" type="text" name="nome-busca" id="nome-busca" />

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="form-group">

                        <label for="placa-busca">Placa</label>

                        <input class="form-control" type="text" name="placa-busca" id="placa-busca" />

                    </div>

                </div>

            </div>


            <div class="row">

                <div class="col-md-4">

                    <div class="form-group">

                        <label for="documento-busca">Documento</label>

                        <input class="form-control" type="text" name="documento-busca" id="documento-busca" />

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group">

                        <label for="data_entrada-busca">Data de entrada</label>

                        <input class="form-control" type="date" name="data_entrada-busca" id="data_entrada-busca" />

                    </div>

                </div>

            </div>


            <button class="btn btn-primary">Procurar</button>

        </div>
    </div>
</form>


<script>
    $(document).ready(function() {
        $('#form-busca-visitante').on('submit', (e) => {
            var dados = $(e.target).serialize();
            var campos_invalidos = $('#form-busca-visitante .invalid').length;

            if (campos_invalidos > 0) {
                toastr.error('Preencha todos os campos corretamente.', 'Erro');
                return false;
            }

            $.ajax({
                url: 'telas_ajax/controle/autorizacao_visitante.php',
                type: 'POST',
                data: dados,
                success: (response) => {
                    var responseObjeto = JSON.parse(response)
                    var tabela = $('#tabela-busca_resultado')
                    var texto = $('#texto-busca_resultado')
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

                        //DATE ATUAL
                        Date.prototype.yyyymmdd = function() {
                            var yyyy = this.getFullYear().toString();
                            var mm = (this.getMonth() + 1).toString(); // getMonth() is zero-based
                            var dd = this.getDate().toString();
                            return yyyy + "-" + (mm[1] ? mm : "0" + mm[0]) + "-" + (dd[1] ? dd : "0" + dd[0]); // padding
                        };

                        var date = new Date();
                        var dateAtual = date.yyyymmdd()

                        $(responseObjeto).each((i, objeto) => {
                            $(tabela).find('tbody').append(`
							<tr data-id='visitante-${objeto['IdVisitante']}' class='visitante-${objeto['IdVisitante']}'>
								<td>${objeto['NomeVisitante']}</td>
								<td class='cpf-input'>${objeto['DocVisitante']}</td>
								<td class='placaMask'>${objeto['placaMorador']}</td>
								<td>${objeto['BlocoNome']}</td>
								<td>${objeto['AptoNome']}</td>


								<td class="acoes-td">
								${objeto['statusLib'] === '1' && objeto['dataLib'] === dateAtual?
									`<span>Autorizado</span>`:
									'<i class="fas fa-check authAccept"></i>'
								}
									<i class="fas fa-pen editar-visitante" data-id="${objeto['IdVisitante']}" data-name="${objeto['IdVisitante']}"></i>
									
									<a href="javascript:void(0)">
										<span class="logvisitante" data-id='visitante-${objeto['IdVisitante']}' data-toggle="modal" data-target="#logvisitante-modal">
											<i class="fas fa-stream"></i>
										</span>
									</a>
									
									<a href="javascript:void(0)">
										<span class="imgvisitante"  data-id='visitante-${objeto['IdVisitante']}' data-toggle="modal" data-target="#imgvisitante-modal">
											<i class="far fa-image"></i>
										</span>
									</a>
									
									<a href="javascript:void(0)">
										<span class="obsvisitante"  data-id='visitante-${objeto['IdVisitante']}' data-toggle="modal" data-target="#obsvisitante-modal">
											<i class="fas fa-comment-dots"></i>
										</span>
									</a>
								</td>

							</tr>
							`)
                        })

                        setarTooltips('.editar-condominio', 'Editar condomínio', 'top', false)
                        setarTooltips('.excluir-condominio', 'Excluir condomínio', 'top', true)
                        setarTooltips('.desativar-condominio', 'Ativar/Desativar condomínio', 'top', false)
                        $(".placaMask").mask("AAA-AAAA");

                        $(tabela).show()
                    }
                },
                error: (response) => {
                    console.log(response)
                },
            });

            return false
        });
    });
</script>