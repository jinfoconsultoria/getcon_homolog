<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TiposContato $tiposContato
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tipos Contato'), ['action' => 'edit', $tiposContato->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tipos Contato'), ['action' => 'delete', $tiposContato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposContato->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tipos Contatos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tipos Contato'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tiposContatos view content">
            <h3><?= h($tiposContato->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tipo Contato') ?></th>
                    <td><?= h($tiposContato->tipo_contato) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tiposContato->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status Id') ?></th>
                    <td><?= $this->Number->format($tiposContato->status_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($tiposContato->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($tiposContato->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
