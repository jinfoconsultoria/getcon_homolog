<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Teste[]|\Cake\Collection\CollectionInterface $teste
 */
?>

<div class="teste index content box">
    <?= $this->Html->link(__('Adicionar'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Teste') ?></h3>
    <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($teste as $teste): ?>
                <tr>
                    <td><?= $this->Number->format($teste->id) ?></td>
                    <td><?= h($teste->modified) ?></td>
                    <td><?= h($teste->created) ?></td>
                    <td><?= $this->Number->format($teste->status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $teste->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $teste->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $teste->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teste->id)]) ?>
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
