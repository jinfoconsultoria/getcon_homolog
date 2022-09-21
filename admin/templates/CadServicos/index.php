<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CadServico[]|\Cake\Collection\CollectionInterface $cadServicos
 */
?>
<div class="cadServicos index content">
    <?= $this->Html->link(__('New Cad Servico'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cad Servicos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('descricao') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('cad_fornecedore_id') ?></th>
                    <th><?= $this->Paginator->sort('cad_apartamento_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cadServicos as $cadServico): ?>
                <tr>
                    <td><?= $this->Number->format($cadServico->id) ?></td>
                    <td><?= h($cadServico->descricao) ?></td>
                    <td><?= h($cadServico->status) ?></td>
                    <td><?= h($cadServico->created) ?></td>
                    <td><?= h($cadServico->modified) ?></td>
                    <td><?= $cadServico->has('cad_fornecedore') ? $this->Html->link($cadServico->cad_fornecedore->id, ['controller' => 'CadFornecedores', 'action' => 'view', $cadServico->cad_fornecedore->id]) : '' ?></td>
                    <td><?= $cadServico->has('cad_apartamento') ? $this->Html->link($cadServico->cad_apartamento->id, ['controller' => 'CadApartamentos', 'action' => 'view', $cadServico->cad_apartamento->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $cadServico->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cadServico->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cadServico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cadServico->id)]) ?>
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
