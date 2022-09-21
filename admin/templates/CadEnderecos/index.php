<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CadEndereco[]|\Cake\Collection\CollectionInterface $cadEnderecos
 */
?>
<div class="cadEnderecos index content">
    <?= $this->Html->link(__('New Cad Endereco'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cad Enderecos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('#') ?></th>
                    <th><?= $this->Paginator->sort('cep') ?></th>
                    <th><?= $this->Paginator->sort('logradouro') ?></th>
                    <th><?= $this->Paginator->sort('numero') ?></th>
                    <th><?= $this->Paginator->sort('bairro') ?></th>
                    <th><?= $this->Paginator->sort('tipo_logradouro') ?></th>
                    <th><?= $this->Paginator->sort('cidade') ?></th>
                    <th><?= $this->Paginator->sort('estado') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cadEnderecos as $cadEndereco): ?>
                <tr>
                    <td><?= $this->Number->format($cadEndereco->id) ?></td>
                    <td><?= h($cadEndereco->cep) ?></td>
                    <td><?= h($cadEndereco->logradouro) ?></td>
                    <td><?= $cadEndereco->numero === null ? '' : $this->Number->format($cadEndereco->numero) ?></td>
                    <td><?= h($cadEndereco->bairro) ?></td>
                    <td><?= $cadEndereco->tipo_logradouro === null ? '' : $this->Number->format($cadEndereco->tipo_logradouro) ?></td>
                    <td><?= h($cadEndereco->cidade) ?></td>
                    <td><?= h($cadEndereco->estado) ?></td>
                    <td><?= h($cadEndereco->created) ?></td>
                    <td><?= h($cadEndereco->modified) ?></td>
                    <td><?= $cadEndereco->status === null ? '' : $this->Number->format($cadEndereco->status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $cadEndereco->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cadEndereco->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cadEndereco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cadEndereco->id)]) ?>
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
