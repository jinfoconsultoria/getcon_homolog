<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StatusAtributo[]|\Cake\Collection\CollectionInterface $statusAtributos
 */
?>
<div class="statusAtributos index content">
    <?= $this->Html->link(__('New Status Atributo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Status Atributos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome_status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($statusAtributos as $statusAtributo): ?>
                <tr>
                    <td><?= $this->Number->format($statusAtributo->id) ?></td>
                    <td><?= h($statusAtributo->nome_status) ?></td>
                    <td><?= h($statusAtributo->created) ?></td>
                    <td><?= h($statusAtributo->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $statusAtributo->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $statusAtributo->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $statusAtributo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $statusAtributo->id)]) ?>
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
