<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CadUsuario[]|\Cake\Collection\CollectionInterface $cadUsuarios
 */
?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <!-- Meta tags Obrigatórias -->
        <title>GestCCon</title>
        <!-- <link rel="icon" href="https://getbootstrap.com/docs/4.1/assets/img/favicons/favicon-32x32.png" /> -->
        <meta charset="utf-8" />
        <meta name="author" content="AgenciaLMG" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Bootstrap CSS -->
        <!-- <link rel="stylesheet" href="../../../assets/lib/bootstrap/css/bootstrap.min.css" /> -->

        <!-- Font Awesome -->
        <!-- <link href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css" rel="stylesheet" /> -->
        <!-- <link href="../../../assets/fontawesome/css/all.css" rel="stylesheet" /> -->

        <!-- <link href="../../../assets/lib/uploader/css/croppie.css" rel="stylesheet" /> -->
        <!-- <link rel="stylesheet" href="../../../assets/lib/simplebar/simplebar.css" /> -->
        <!-- <link href="../../../assets/lib/toastr/build/toastr.css" rel="stylesheet" /> -->

        <!-- Estilos -->
        <!-- <link rel="stylesheet" href="../../../assets/css/components.css" /> -->
        <link rel="stylesheet" href="../assets/css/estilo.css" />
    </head>
    <body>
    <div class="row cadBlocos index content">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <?= $this->Html->link(__('Buscar'), ['action' => 'index']) ?>
                </li>
                <li class="nav-item">
                    <?= $this->Html->link(('Cadastro'), ['action' => 'add'], ['class' => 'button ']) ?>
                </li>
                <li class="nav-item">
                    <a class="button disabled" aria-disabled="true">Editar</a>
                </li>
            </ul>
        </div>
            <div class="page-titles">
                <div class="row" style="margin-left: 15px">
                    <h3 id="secao-titulo" class="text-themecolor margin-left: 11px;">Usuários</h3>
                </div>
            </div>
            <div class="tab-pane ml"  aria-labelledby="busca-tab" style="margin-left: 20px; margin-right: 20px;">
                <div class="card">
            <div class="card-body">
                <h4 class="card-title">Faça uma busca</h4>

                <h5 class="card-subtitle">Aqui você pode fazer uma busca pelos usuários cadastrados e realizar edições.</h5>

                <form id="form-busca-morador">
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nome-busca">Nome</label>
                                <input class="form-control simple-input" name="nome" type="text" id="nome-busca">
                                <input name="tipo" class="usuario-busca" value="usuario" type="hidden">
                                <input name="tipo_usuario" class="tipousuario-busca" value="morador" type="hidden">
                                <input name="acao" class="acao-busca" value="busca" type="hidden">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email-busca">Email</label>
                                <input class="form-control" name="email" type="text" id="email-busca">
                            </div>
                        </div>
                    </div>

                    <script>
                        $('#bloco-busca').change(function() {
                            console.log($('#bloco-busca').val());
                            $('#apto-busca').load('/telas/master/listaApartamento.php?bloco=' + $('#bloco-busca').val() + '&tipo=cleanMorador');
                        });

                        $('#apto-busca').change(function() {
                            console.log($(this).val());
                            $('#morador-busca').load('/telas/master/listaMorador.php?bloco=' + $('#bloco-busca').val() + '&apartamento=' + $(this).val());
                        });
                    </script>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="bloco-busca">Bloco</label>

                                <select class="custom-select form-control" name="bloco-busca" id="bloco-busca">

                                    <option value="" selected="">Seleciona um bloco.</option>
                                    <option value="36">Bloco A</option><option value="37">Bloco B</option><option value="38">Bloco C</option><option value="39">Bloco D</option><option value="40">Bloco E</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="apto-busca">Apartamento</label>
                                <select class="custom-select form-control" name="apto-busca" id="apto-busca">
                                    <option value="" selected="">Seleciona um apartamento.</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-loader btn-primary">
                        Pesquisar
                        <img class="img-loader" src="assets/img/loader_branco.svg">
                    </button>
                    <button type="button" class="btn btn-light limpar-filtros">Limpar filtros</button>
                </form>
            </div>
        </div>
        </div>
            <div class="table-responsive mt-3">
                <table class="table table-bordered table-hover" style="margin-left: 20px; margin-right: 20px;">
                    <thead class="bg-inverse text-white">
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('usuario') ?></th>
                            <th><?= $this->Paginator->sort('senha') ?></th>
                            <th><?= $this->Paginator->sort('perfil') ?></th>
                            <th><?= $this->Paginator->sort('email') ?></th>
                            <th><?= $this->Paginator->sort('celular') ?></th>
                            <th><?= $this->Paginator->sort('foto') ?></th>
                            <th><?= $this->Paginator->sort('categoria') ?></th>
                            <th><?= $this->Paginator->sort('Data Criação') ?></th>
                            <th><?= $this->Paginator->sort('Data Nodificação') ?></th>
                            <th><?= $this->Paginator->sort('Status') ?></th>
                            <th><?= $this->Paginator->sort('Receber Mensagens') ?></th>
                            <th><?= $this->Paginator->sort('Realizar Reservas') ?></th>
                            <th><?= $this->Paginator->sort('Veículo') ?></th>
                            <th><?= $this->Paginator->sort('Observação') ?></th>
                            <th><?= $this->Paginator->sort('Apartamento') ?></th>
                            <th class="actions"><?= __('Ações') ?></th>
                        </tr>
                    </thead>
                    <tbody class="border border-inverse">
                        <?php foreach ($cadUsuarios as $cadUsuario): ?>
                        <tr>
                            <td><?= $this->Number->format($cadUsuario->id) ?></td>
                            <td><?= h($cadUsuario->usuario) ?></td>
                            <td><?= h($cadUsuario->senha) ?></td>
                            <td><?= $cadUsuario->perfil === null ? '' : $this->Number->format($cadUsuario->perfil) ?></td>
                            <td><?= h($cadUsuario->email) ?></td>
                            <td><?= h($cadUsuario->celular) ?></td>
                            <td><?= h($cadUsuario->foto) ?></td>
                            <td><?= $cadUsuario->categoria === null ? '' : $this->Number->format($cadUsuario->categoria) ?></td>
                            <td><?= h($cadUsuario->created) ?></td>
                            <td><?= h($cadUsuario->modified) ?></td>
                            <td><?= $cadUsuario->status === null ? '' : $this->Number->format($cadUsuario->status) ?></td>
                            <td><?= $cadUsuario->receber_mensagens === null ? '' : $this->Number->format($cadUsuario->receber_mensagens) ?></td>
                            <td><?= $cadUsuario->realizar_reservas === null ? '' : $this->Number->format($cadUsuario->realizar_reservas) ?></td>
                            <td><?= h($cadUsuario->veiculo) ?></td>
                            <td><?= h($cadUsuario->observacao) ?></td>
                            <td><?= $cadUsuario->has('cad_apartamento') ? $this->Html->link($cadUsuario->cad_apartamento->id, ['controller' => 'CadApartamentos', 'action' => 'view', $cadUsuario->cad_apartamento->id]) : '' ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Ver'), ['action' => 'view', $cadUsuario->id]) ?>
                                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $cadUsuario->id]) ?>
                                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $cadUsuario->id], ['confirm' => __('Você tem certeza que quer deletar # {0}?', $cadUsuario->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="paginator">
                <ul class="pagination" style="margin-left: 20px; margin-right: 20px;">
                    <?= $this->Paginator->first('<< ' . __('Primeira')) ?>
                    <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('Próxima') . ' >') ?>
                    <?= $this->Paginator->last(__('Ultíma') . ' >>') ?>
                </ul>
                <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de um total de {{count}} ')) ?></p>
            </div>
        </div>
    </body>
</html>