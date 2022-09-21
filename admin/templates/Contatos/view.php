<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contato $contato
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Contato'), ['action' => 'edit', $contato->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Contato'), ['action' => 'delete', $contato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contato->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Contatos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Contato'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contatos view content">
            <h3><?= h($contato->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($contato->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefone') ?></th>
                    <td><?= h($contato->telefone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tiposcontato') ?></th>
                    <td><?= $contato->has('tiposcontato') ? $this->Html->link($contato->tiposcontato->id, ['controller' => 'Tiposcontatos', 'action' => 'view', $contato->tiposcontato->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($contato->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status Id') ?></th>
                    <td><?= $this->Number->format($contato->status_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($contato->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($contato->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
