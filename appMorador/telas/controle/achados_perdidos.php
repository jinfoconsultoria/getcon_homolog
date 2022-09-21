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
            <div class="section-title">Documentos e Atas</div> 
            <div class="wide-block pb-1 pt-1">

                <form id="form-cadastro-achadosPerdidos">
                    <input type="hidden" name="acao" value="cadastro" />
		            <input type="hidden" name="tipo" value="achados" />
                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="descricao">Descrição</label>
                            <input type="text" class="form-control" name="descricao-cadastro" id="descricao" placeholder="Digite uma descrição do item">
                            <i class="clear-input"><i class="fas fa-times"></i></i>
                        </div>
                    </div>

                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="data">Data</label>
                            <input type="date" class="form-control" name="data-cadastro" id="data" placeholder="Enter com uma data valida">
                            <i class="clear-input"><i class="fas fa-times"></i></i>
                        </div>
                    </div>

                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="arquivo">Imagem</label>
                            <input type="file" class="form-control" name="arquivo-cadastro" id="arquivo">
                            <i class="clear-input"><i class="fas fa-times"></i></i>
                        </div>
                    </div>

                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="tipo">Tipo</label>
                            <select class="form-control custom-select" name="tipo-cadastro" id="tipo">

                                <option value="" selected>Selecione um Tipo</option>
                                <?php
								
								$query = "select * from tipoAchadosPerdidos";
		
								$resultado = mysqli_query($link_condominio, $query);
								while($tipoDocumento = mysqli_fetch_assoc($resultado)){
									$tipoDocumento_id = $tipoDocumento["id"];
									$tipoDocumento_nome = $tipoDocumento['nome'];
									echo "<option value='$tipoDocumento_id'>$tipoDocumento_nome</option>";
								}
								?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="local">Local</label>
                            <input type="text" class="form-control" name="local-cadastro" id="local" placeholder="Digite uma descrição do local">
                            <i class="clear-input"><i class="fas fa-times"></i></i>
                        </div>
                    </div>

                    <button type="submit"  class="btn btn-primary btn-block mt-4">CADASTRAR</button>
                </form>

            </div>
        </div> 
</div>

<script>



cadastroAjax('form-cadastro-achadosPerdidos','controle/achados_perdidos');
</script>