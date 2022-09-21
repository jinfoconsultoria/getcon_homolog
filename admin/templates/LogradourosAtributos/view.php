<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LogradourosAtributo $logradourosAtributo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Logradouros Atributo'), ['action' => 'edit', $logradourosAtributo->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Logradouros Atributo'), ['action' => 'delete', $logradourosAtributo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $logradourosAtributo->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Logradouros Atributos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Logradouros Atributo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="logradourosAtributos view content">
            <h3><?= h($logradourosAtributo->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome Logradouro') ?></th>
                    <td><?= h($logradourosAtributo->nome_logradouro) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($logradourosAtributo->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($logradourosAtributo->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($logradourosAtributo->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Enderecos Atributos') ?></h4>
                <?php if (!empty($logradourosAtributo->enderecos_atributos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Cep Endereco') ?></th>
                            <th><?= __('Logradouro Endereco') ?></th>
                            <th><?= __('Bairro Endereco') ?></th>
                            <th><?= __('Numero Endereco') ?></th>
                            <th><?= __('Logradouros Atributo Id') ?></th>
                            <th><?= __('Cidade Endereco') ?></th>
                            <th><?= __('Estado Endereco') ?></th>
                            <th><?= __('Status Atributo Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($logradourosAtributo->enderecos_atributos as $enderecosAtributos) : ?>
                        <tr>
                            <td><?= h($enderecosAtributos->id) ?></td>
                            <td><?= h($enderecosAtributos->cep_endereco) ?></td>
                            <td><?= h($enderecosAtributos->logradouro_endereco) ?></td>
                            <td><?= h($enderecosAtributos->bairro_endereco) ?></td>
                            <td><?= h($enderecosAtributos->numero_endereco) ?></td>
                            <td><?= h($enderecosAtributos->logradouros_atributo_id) ?></td>
                            <td><?= h($enderecosAtributos->cidade_endereco) ?></td>
                            <td><?= h($enderecosAtributos->estado_endereco) ?></td>
                            <td><?= h($enderecosAtributos->status_atributo_id) ?></td>
                            <td><?= h($enderecosAtributos->created) ?></td>
                            <td><?= h($enderecosAtributos->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'EnderecosAtributos', 'action' => 'view', $enderecosAtributos->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'EnderecosAtributos', 'action' => 'edit', $enderecosAtributos->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'EnderecosAtributos', 'action' => 'delete', $enderecosAtributos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enderecosAtributos->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
