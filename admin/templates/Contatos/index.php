<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contato[]|\Cake\Collection\CollectionInterface $contatos
 */
?>
<div class="contatos index content">
    <?= $this->Html->link(__('New Contato'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Contatos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('telefone') ?></th>
                    <th><?= $this->Paginator->sort('tiposcontatos_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('status_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contatos as $contato): ?>
                <tr>
                    <td><?= $this->Number->format($contato->id) ?></td>
                    <td><?= h($contato->email) ?></td>
                    <td><?= h($contato->telefone) ?></td>
                    <td><?= $contato->has('tiposcontato') ? $this->Html->link($contato->tiposcontato->id, ['controller' => 'Tiposcontatos', 'action' => 'view', $contato->tiposcontato->id]) : '' ?></td>
                    <td><?= h($contato->created) ?></td>
                    <td><?= h($contato->modified) ?></td>
                    <td><?= $this->Number->format($contato->status_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $contato->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contato->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contato->id)]) ?>
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
