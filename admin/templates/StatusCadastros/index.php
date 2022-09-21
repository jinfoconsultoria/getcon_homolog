<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StatusCadastro[]|\Cake\Collection\CollectionInterface $statusCadastros
 */
?>
<div class="statusCadastros index content">
    <?= $this->Html->link(__('New Status Cadastro'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Status Cadastros') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome_statu') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($statusCadastros as $statusCadastro): ?>
                <tr>
                    <td><?= $this->Number->format($statusCadastro->id) ?></td>
                    <td><?= h($statusCadastro->nome_statu) ?></td>
                    <td><?= h($statusCadastro->created) ?></td>
                    <td><?= h($statusCadastro->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $statusCadastro->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $statusCadastro->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $statusCadastro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $statusCadastro->id)]) ?>
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
