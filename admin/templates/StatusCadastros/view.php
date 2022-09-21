<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StatusCadastro $statusCadastro
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Status Cadastro'), ['action' => 'edit', $statusCadastro->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Status Cadastro'), ['action' => 'delete', $statusCadastro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $statusCadastro->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Status Cadastros'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Status Cadastro'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="statusCadastros view content">
            <h3><?= h($statusCadastro->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome Statu') ?></th>
                    <td><?= h($statusCadastro->nome_statu) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($statusCadastro->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($statusCadastro->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($statusCadastro->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
