<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CadServico $cadServico
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cad Servico'), ['action' => 'edit', $cadServico->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cad Servico'), ['action' => 'delete', $cadServico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cadServico->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cad Servicos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cad Servico'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cadServicos view content">
            <h3><?= h($cadServico->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Descricao') ?></th>
                    <td><?= h($cadServico->descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($cadServico->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cad Fornecedore') ?></th>
                    <td><?= $cadServico->has('cad_fornecedore') ? $this->Html->link($cadServico->cad_fornecedore->id, ['controller' => 'CadFornecedores', 'action' => 'view', $cadServico->cad_fornecedore->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Cad Apartamento') ?></th>
                    <td><?= $cadServico->has('cad_apartamento') ? $this->Html->link($cadServico->cad_apartamento->id, ['controller' => 'CadApartamentos', 'action' => 'view', $cadServico->cad_apartamento->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cadServico->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($cadServico->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($cadServico->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
