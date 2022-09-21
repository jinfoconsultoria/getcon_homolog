<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Condominio $condominio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Condominio'), ['action' => 'edit', $condominio->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Condominio'), ['action' => 'delete', $condominio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $condominio->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Condominios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Condominio'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="condominios view content">
            <h3><?= h($condominio->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome Condominio') ?></th>
                    <td><?= h($condominio->nome_condominio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bloco') ?></th>
                    <td><?= $condominio->has('bloco') ? $this->Html->link($condominio->bloco->id, ['controller' => 'Blocos', 'action' => 'view', $condominio->bloco->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($condominio->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($condominio->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($condominio->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
