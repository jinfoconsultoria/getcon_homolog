<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LogradourosAtributo[]|\Cake\Collection\CollectionInterface $logradourosAtributos
 */
?>
<div class="logradourosAtributos index content">
    <?= $this->Html->link(__('New Logradouros Atributo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Logradouros Atributos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome_logradouro') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($logradourosAtributos as $logradourosAtributo): ?>
                <tr>
                    <td><?= $this->Number->format($logradourosAtributo->id) ?></td>
                    <td><?= h($logradourosAtributo->nome_logradouro) ?></td>
                    <td><?= h($logradourosAtributo->created) ?></td>
                    <td><?= h($logradourosAtributo->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $logradourosAtributo->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $logradourosAtributo->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $logradourosAtributo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $logradourosAtributo->id)]) ?>
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
