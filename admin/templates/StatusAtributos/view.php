<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StatusAtributo $statusAtributo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Status Atributo'), ['action' => 'edit', $statusAtributo->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Status Atributo'), ['action' => 'delete', $statusAtributo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $statusAtributo->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Status Atributos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Status Atributo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="statusAtributos view content">
            <h3><?= h($statusAtributo->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome Status') ?></th>
                    <td><?= h($statusAtributo->nome_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($statusAtributo->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($statusAtributo->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($statusAtributo->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
