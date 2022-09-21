<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bloco $bloco
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Editar Bloco'), ['action' => 'edit', $bloco->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar Bloco'), ['action' => 'delete', $bloco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bloco->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Blocos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Novo Bloco'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="blocos view content">
            <h3><?= h($bloco->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Bloco Nome') ?></th>
                    <td><?= h($bloco->bloco_nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($bloco->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($bloco->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cadastro') ?></th>
                    <td><?= h($bloco->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Alterado') ?></th>
                    <td><?= h($bloco->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
