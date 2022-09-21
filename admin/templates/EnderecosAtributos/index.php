<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EnderecosAtributo[]|\Cake\Collection\CollectionInterface $enderecosAtributos
 */
?>
<div class="enderecosAtributos index content">
    <?= $this->Html->link(__('New Enderecos Atributo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Enderecos Atributos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('cep_endereco') ?></th>
                    <th><?= $this->Paginator->sort('logradouro_endereco') ?></th>
                    <th><?= $this->Paginator->sort('bairro_endereco') ?></th>
                    <th><?= $this->Paginator->sort('numero_endereco') ?></th>
                    <th><?= $this->Paginator->sort('logradouros_atributo_id') ?></th>
                    <th><?= $this->Paginator->sort('cidade_endereco') ?></th>
                    <th><?= $this->Paginator->sort('estado_endereco') ?></th>
                    <th><?= $this->Paginator->sort('status_atributo_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($enderecosAtributos as $enderecosAtributo): ?>
                <tr>
                    <td><?= $this->Number->format($enderecosAtributo->id) ?></td>
                    <td><?= h($enderecosAtributo->cep_endereco) ?></td>
                    <td><?= h($enderecosAtributo->logradouro_endereco) ?></td>
                    <td><?= h($enderecosAtributo->bairro_endereco) ?></td>
                    <td><?= h($enderecosAtributo->numero_endereco) ?></td>
                    <td><?= $enderecosAtributo->has('logradouros_atributo') ? $this->Html->link($enderecosAtributo->logradouros_atributo->id, ['controller' => 'LogradourosAtributos', 'action' => 'view', $enderecosAtributo->logradouros_atributo->id]) : '' ?></td>
                    <td><?= h($enderecosAtributo->cidade_endereco) ?></td>
                    <td><?= h($enderecosAtributo->estado_endereco) ?></td>
                    <td><?= $enderecosAtributo->has('status_atributo') ? $this->Html->link($enderecosAtributo->status_atributo->nome_status, ['controller' => 'StatusAtributos', 'action' => 'view', $enderecosAtributo->status_atributo->id]) : '' ?></td>
                    <td><?= h($enderecosAtributo->created) ?></td>
                    <td><?= h($enderecosAtributo->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $enderecosAtributo->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $enderecosAtributo->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $enderecosAtributo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enderecosAtributo->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
