<div class="card">
    <div class="card-body">
        <h4 class="card-title">Administradores cadastrados</h4>

        <div class="relatorios">
            <i class="fad fa-file-pdf gerar-pdf"></i>
            <i class="fad fa-file-excel gerar-xls"></i>
        </div>

        <div id="busca-resultado">
            <?php
            $usuario_json = $db->fetch_assoc($_SESSION['db_condominio'], '', 'usuario', "tipo_usuario = 'admin'");
            $usuario_array = json_decode($usuario_json, true);

            if ($usuario_array) {
            ?>
                <div id="tabela-busca_resultado" class="table-responsive">
                    <table class="table table-bordered table-hover mt-4">
                        <thead class="bg-inverse text-white">
                            <tr>
                                <th>#</th>
                                <th>Nome do usuário</th>
                                <th>Email</th>
                                <th>Perfil</th>
                                <th>Status</th>
                                <th style="text-align: center">Ações</th>
                            </tr>
                        </thead>
                        <tbody class="border border-inverse">

                            <?php
                            $i = 1;
                            foreach ($usuario_array as $key => $item) {
                                // echo '<option value="' . $item["usuario"] . '">' . $item["usuario"] . '</option>';
                                echo '<tr>';
                                echo '<td>' . $i . '</td>';
                                echo '<td>' . $item["nome"] . '</td>';
                                echo '<td>' . $item["email"] . '</td>';
                                echo '<td>' . $item["perfil"] . '</td>';
                                echo '<td>' . $item["status"] . '</td>';
                                echo '<td class="acoes-td">
											<i class="fas fa-pen editar-admin" data-ts="' . $item["ts"] . '"></i>
											<a href="javascript:void(0)">
												<span data-toggle="modal" class="adminFoto" data-ts="' . $item["ts"] . '" data-target="#adminFoto-modal">
													<i class="fas fa-camera foto-admin" ></i>
												</span>
											</a>
											
										</td>';
                                echo '</tr>';
                                $i++;
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            <?php
            } else {
                echo '<h5 class="card-subtitle" style="text-align: center">Nenhum resultado encontrado.</h5>';
            }
            ?>
        </div>
    </div>
</div>