<?php
    session_start();
    // Exigir o arquivo de classes que armazena as métodos;
    require_once '../../../assets/php/classes.php';
    
    // Instância um novo objeto do banco de dados e inicia a conexão;
    $db   = new db();
    $dbatual = $_SESSION['db_condominio'];
    $link_condominio = $db->conecta_mysql($_SESSION['db_condominio']);
?>

<!-- App Capsule -->
<div id="appCapsule">


    <div class="section full mt-1 mb-2">
        <div class="section-title">Correspondências</div>
        <div class="content-header mb-05">
            Tabela de controle de correspondências
        </div>
        <div class="wide-block p-0">

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Remetente</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Rastreio</th>
                            <th scope="col">Data Registro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

							
							$query = "select * from correspondencia inner join tipoCorrespondencia on correspondencia.tipoCorrespondencia = tipoCorrespondencia.id where morador = '{$_SESSION['id']}' order by correspondencia.id desc";
                            $i =1;
							$resultado = mysqli_query($link_condominio, $query);
							while($tipoDocumento = mysqli_fetch_assoc($resultado)){
                        ?>
                                <th scope="row"><?=$i?></th>
                                <td><?= $tipoDocumento['remetente']?></td>
                                <td><?= $tipoDocumento['nome']?></td>
                                <td><?= $tipoDocumento['codRastreio']?></td>
                                <td><?= $tipoDocumento['dataRecebimento']?></td>
                        <?php
                                $i++;
							}

                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>