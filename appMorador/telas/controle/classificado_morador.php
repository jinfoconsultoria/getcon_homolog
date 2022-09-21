<?php
    session_start();
    // Exigir o arquivo de classes que armazena as métodos;
    require_once '../../../assets/php/classes.php';
    
    // Instância um novo objeto do banco de dados e inicia a conexão;
    $db   = new db();
    $dbatual = $_SESSION['db_condominio'];
    $link_condominio = $db->conecta_mysql($_SESSION['db_condominio']);
?>

<div id="appCapsule">
        <div class="section full mt-1 mb-2">
            <div class="section-title">Informações da reserva</div>
            <div class="wide-block pb-1 pt-1">

                <form id="form-cadastro-reservaAmbiente">
                    <input type="hidden" name="acao" value="cadastro" />
                    <input type="hidden" name="tipo" value="reservaAmbiente" />
                    
                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="ambiente">Ambiente</label>
                            <select class="form-control custom-select" name="ambiente-cadastro" id="ambiente" required>

                                <option value="" selected>Selecione um ambiente</option>
                                <?php
								
								$query = "select * from ambiente";
		
								$resultado = mysqli_query($link_condominio, $query);
								while($ambiente = mysqli_fetch_assoc($resultado)){
									$ambiente_id = $ambiente["id"];
									$ambiente_nome = $ambiente['nome'];
									echo "<option value='$ambiente_id'>$ambiente_nome</option>";
								}
								?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="data">Data</label>
                            <input type="date" class="form-control" name="data-cadastro" id="data" required>
                            <i class="clear-input"><i class="fas fa-times"></i></i>
                        </div>
                    </div>

                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="horaInicial">Hora Inicial</label>
                            <input type="time" class="form-control" name="hora_inicio-cadastro" id="horaInicial" required>
                            <i class="clear-input"><i class="fas fa-times"></i></i>
                        </div>

                        <div class="input-wrapper">
                            <label class="label" for="horaInicial">Hora Final</label>
                            <input type="time" class="form-control" name="hora_fim-cadastro" id="horaInicial" required >
                            <i class="clear-input"><i class="fas fa-times"></i></i>
                        </div>
                    </div>

                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="convidados">Quantidade de Convidados</label>
                            <input type="number" class="form-control" name="convidados-cadastro" id="convidados" placeholder="Quantidade de Convidados" required>
                            <i class="clear-input"><i class="fas fa-times"></i></i>
                        </div>
                    </div>

                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="observacao">Observação</label>
                            <textarea id="observacao" name="observacao-cadastro" rows="2" class="form-control"></textarea>
                            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block mt-4">CADASTRAR</button>
                </form>

            </div>
        </div>
</div>

<script>
    $('#form-cadastro-reservaAmbiente').on('submit', (e) => {
		var dados = $(e.target).serialize();
		var campos_invalidos = $('#form-cadastro-reservaAmbiente .invalid').length;

		if (campos_invalidos > 0) {
			toastr.error('Preencha todos os campos corretamente.', 'Erro');
			return false;
		}

		$.ajax({
			url: 'telas_ajax/controle/reserva_ambiente.php',
			type: 'POST',
			data: dados,
			success: (response) => {
                console.log(response)
			},
			error: (response) => {
				console.log(response)
			},
		})

		return false 
	});
</script>