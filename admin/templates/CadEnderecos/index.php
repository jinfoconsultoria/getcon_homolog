<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CadEndereco[]|\Cake\Collection\CollectionInterface $cadEnderecos
 */
?>
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
        <div class="row cadEnderecos index content">
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
                    <h3 id="secao-titulo" class="text-themecolor margin-left: 11px;">Endereços</h3>
                </div>
            </div>
            <div class="tab-pane ml"  aria-labelledby="busca-tab" style="margin-left: 20px; margin-right: 20px;">
                    <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Faça uma busca</h4>

                    <h5 class="card-subtitle">Aqui você pode fazer uma busca pelos endereços cadastrados e realizar edições.</h5>

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
                <table class="table-bordered table-hover" style="margin-left: 20px; margin-right: 20px;">
                    <thead class="bg-inverse text-white">
                        <tr>
                            <th><?= $this->Paginator->sort('#') ?></th>
                            <th><?= $this->Paginator->sort('cep') ?></th>
                            <th><?= $this->Paginator->sort('logradouro') ?></th>
                            <th><?= $this->Paginator->sort('numero') ?></th>
                            <th><?= $this->Paginator->sort('bairro') ?></th>
                            <th><?= $this->Paginator->sort('tipo_logradouro') ?></th>
                            <th><?= $this->Paginator->sort('cidade') ?></th>
                            <th><?= $this->Paginator->sort('estado') ?></th>
                            <th><?= $this->Paginator->sort('Data Cadastro') ?></th>
                            <th><?= $this->Paginator->sort('Data Modificação') ?></th>
                            <th><?= $this->Paginator->sort('status') ?></th>
                            <th class="actions"><?= __('Ações') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cadEnderecos as $cadEndereco): ?>
                        <tr>
                            <td><?= $this->Number->format($cadEndereco->id) ?></td>
                            <td><?= h($cadEndereco->cep) ?></td>
                            <td><?= h($cadEndereco->logradouro) ?></td>
                            <td><?= $cadEndereco->numero === null ? '' : $this->Number->format($cadEndereco->numero) ?></td>
                            <td><?= h($cadEndereco->bairro) ?></td>
                            <td><?= $cadEndereco->tipo_logradouro === null ? '' : $this->Number->format($cadEndereco->tipo_logradouro) ?></td>
                            <td><?= h($cadEndereco->cidade) ?></td>
                            <td><?= h($cadEndereco->estado) ?></td>
                            <td><?= h($cadEndereco->created) ?></td>
                            <td><?= h($cadEndereco->modified) ?></td>
                            <td><?= $cadEndereco->status === null ? '' : $this->Number->format($cadEndereco->status) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Ver'), ['action' => 'view', $cadEndereco->id]) ?>
                                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $cadEndereco->id]) ?>
                                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $cadEndereco->id], ['confirm' => __('Você tem certeza que quer deletar # {0}?', $cadEndereco->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="paginator style="margin-left: 20px; margin-right: 20px;">
                <ul class="pagination">
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
