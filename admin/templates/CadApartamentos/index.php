<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CadApartamento[]|\Cake\Collection\CollectionInterface $cadApartamentos
 */
?>
<div class="cadApartamentos index content">
    <?= $this->Html->link(__('New Cad Apartamento'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cad Apartamentos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('numero') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('cad_bloco_id') ?></th>
                    <th><?= $this->Paginator->sort('cad_bloco_cad_condominio_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cadApartamentos as $cadApartamento): ?>
                <tr>
                    <td><?= $this->Number->format($cadApartamento->id) ?></td>
                    <td><?= h($cadApartamento->numero) ?></td>
                    <td><?= $cadApartamento->status === null ? '' : $this->Number->format($cadApartamento->status) ?></td>
                    <td><?= h($cadApartamento->created) ?></td>
                    <td><?= h($cadApartamento->modified) ?></td>
                    <td><?= $this->Number->format($cadApartamento->cad_bloco_id) ?></td>
                    <td><?= $cadApartamento->has('cad_bloco') ? $this->Html->link($cadApartamento->cad_bloco->Array, ['controller' => 'CadBlocos', 'action' => 'view', $cadApartamento->cad_bloco->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $cadApartamento->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cadApartamento->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cadApartamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cadApartamento->id)]) ?>
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
