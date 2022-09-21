<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BlocosAtributo $blocosAtributo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Blocos Atributo'), ['action' => 'edit', $blocosAtributo->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Blocos Atributo'), ['action' => 'delete', $blocosAtributo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blocosAtributo->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Blocos Atributos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Blocos Atributo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="blocosAtributos view content">
            <h3><?= h($blocosAtributo->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome Bloco') ?></th>
                    <td><?= h($blocosAtributo->nome_bloco) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status Atributo') ?></th>
                    <td><?= $blocosAtributo->has('status_atributo') ? $this->Html->link($blocosAtributo->status_atributo->nome_status, ['controller' => 'StatusAtributos', 'action' => 'view', $blocosAtributo->status_atributo->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($blocosAtributo->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($blocosAtributo->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($blocosAtributo->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
