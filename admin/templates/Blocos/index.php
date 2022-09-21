<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bloco[]|\Cake\Collection\CollectionInterface $blocos
 */
?>
<div class="blocos index content">
    <?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Blocos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('bloco_nome') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('Cadastro') ?></th>
                    <th><?= $this->Paginator->sort('Alterado') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($blocos as $bloco): ?>
                <tr>
                    <td><?= $this->Number->format($bloco->id) ?></td>
                    <td><?= h($bloco->bloco_nome) ?></td>
                    <td><?= h($bloco->status) ?></td>
                    <td><?= h($bloco->created) ?></td>
                    <td><?= h($bloco->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $bloco->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $bloco->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $bloco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bloco->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Prmeira')) ?>
            <?= $this->Paginator->prev('< ' . __('Voltar')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próxima') . ' >') ?>
            <?= $this->Paginator->last(__('Última') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, Mostrando {{current}} Registro(s) de {{count}} total')) ?></p>
    </div>
</div>
