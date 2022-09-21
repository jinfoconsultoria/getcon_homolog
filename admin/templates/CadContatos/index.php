<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CadContato[]|\Cake\Collection\CollectionInterface $cadContatos
 */
?>
<div class="cadContatos index content">
    <?= $this->Html->link(__('New Cad Contato'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cad Contatos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('telefone') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cadContatos as $cadContato): ?>
                <tr>
                    <td><?= $this->Number->format($cadContato->id) ?></td>
                    <td><?= h($cadContato->email) ?></td>
                    <td><?= h($cadContato->telefone) ?></td>
                    <td><?= h($cadContato->created) ?></td>
                    <td><?= h($cadContato->modified) ?></td>
                    <td><?= $cadContato->status === null ? '' : $this->Number->format($cadContato->status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $cadContato->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cadContato->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cadContato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cadContato->id)]) ?>
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
