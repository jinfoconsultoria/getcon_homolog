<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TiposcontatosAtributo[]|\Cake\Collection\CollectionInterface $tiposcontatosAtributos
 */
?>
<div class="tiposcontatosAtributos index content">
    <?= $this->Html->link(__('New Tiposcontatos Atributo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tiposcontatos Atributos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome_tiposcontato') ?></th>
                    <th><?= $this->Paginator->sort('status_atributo_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tiposcontatosAtributos as $tiposcontatosAtributo): ?>
                <tr>
                    <td><?= $this->Number->format($tiposcontatosAtributo->id) ?></td>
                    <td><?= h($tiposcontatosAtributo->nome_tiposcontato) ?></td>
                    <td><?= $tiposcontatosAtributo->has('status_atributo') ? $this->Html->link($tiposcontatosAtributo->status_atributo->nome_status, ['controller' => 'StatusAtributos', 'action' => 'view', $tiposcontatosAtributo->status_atributo->id]) : '' ?></td>
                    <td><?= h($tiposcontatosAtributo->created) ?></td>
                    <td><?= h($tiposcontatosAtributo->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tiposcontatosAtributo->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tiposcontatosAtributo->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tiposcontatosAtributo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposcontatosAtributo->id)]) ?>
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
