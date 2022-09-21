<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CadBloco $cadBloco
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cad Bloco'), ['action' => 'edit', $cadBloco->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cad Bloco'), ['action' => 'delete', $cadBloco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cadBloco->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cad Blocos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cad Bloco'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cadBlocos view content">
            <h3><?= h($cadBloco->Array) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($cadBloco->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cad Condominio') ?></th>
                    <td><?= $cadBloco->has('cad_condominio') ? $this->Html->link($cadBloco->cad_condominio->id, ['controller' => 'CadCondominios', 'action' => 'view', $cadBloco->cad_condominio->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cadBloco->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $cadBloco->status === null ? '' : $this->Number->format($cadBloco->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($cadBloco->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($cadBloco->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
