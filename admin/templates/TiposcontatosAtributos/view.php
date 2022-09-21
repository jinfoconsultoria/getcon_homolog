<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TiposcontatosAtributo $tiposcontatosAtributo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tiposcontatos Atributo'), ['action' => 'edit', $tiposcontatosAtributo->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tiposcontatos Atributo'), ['action' => 'delete', $tiposcontatosAtributo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposcontatosAtributo->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tiposcontatos Atributos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tiposcontatos Atributo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tiposcontatosAtributos view content">
            <h3><?= h($tiposcontatosAtributo->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome Tiposcontato') ?></th>
                    <td><?= h($tiposcontatosAtributo->nome_tiposcontato) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status Atributo') ?></th>
                    <td><?= $tiposcontatosAtributo->has('status_atributo') ? $this->Html->link($tiposcontatosAtributo->status_atributo->nome_status, ['controller' => 'StatusAtributos', 'action' => 'view', $tiposcontatosAtributo->status_atributo->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tiposcontatosAtributo->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($tiposcontatosAtributo->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($tiposcontatosAtributo->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
