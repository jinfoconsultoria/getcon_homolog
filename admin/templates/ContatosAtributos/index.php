<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContatosAtributo[]|\Cake\Collection\CollectionInterface $contatosAtributos
 */
?>
<div class="contatosAtributos index content">
    <?= $this->Html->link(__('New Contatos Atributo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Contatos Atributos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome_contato') ?></th>
                    <th><?= $this->Paginator->sort('email_contato') ?></th>
                    <th><?= $this->Paginator->sort('status_atributo_id') ?></th>
                    <th><?= $this->Paginator->sort('tiposcontatos_atributo_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contatosAtributos as $contatosAtributo): ?>
                <tr>
                    <td><?= $this->Number->format($contatosAtributo->id) ?></td>
                    <td><?= h($contatosAtributo->nome_contato) ?></td>
                    <td><?= h($contatosAtributo->email_contato) ?></td>
                    <td><?= $contatosAtributo->has('status_atributo') ? $this->Html->link($contatosAtributo->status_atributo->nome_status, ['controller' => 'StatusAtributos', 'action' => 'view', $contatosAtributo->status_atributo->id]) : '' ?></td>
                    <td><?= $contatosAtributo->has('tiposcontatos_atributo') ? $this->Html->link($contatosAtributo->tiposcontatos_atributo->id, ['controller' => 'TiposcontatosAtributos', 'action' => 'view', $contatosAtributo->tiposcontatos_atributo->id]) : '' ?></td>
                    <td><?= h($contatosAtributo->created) ?></td>
                    <td><?= h($contatosAtributo->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $contatosAtributo->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contatosAtributo->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contatosAtributo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contatosAtributo->id)]) ?>
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
