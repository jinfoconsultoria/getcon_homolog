<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContatosAtributo $contatosAtributo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Contatos Atributo'), ['action' => 'edit', $contatosAtributo->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Contatos Atributo'), ['action' => 'delete', $contatosAtributo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contatosAtributo->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Contatos Atributos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Contatos Atributo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contatosAtributos view content">
            <h3><?= h($contatosAtributo->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome Contato') ?></th>
                    <td><?= h($contatosAtributo->nome_contato) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email Contato') ?></th>
                    <td><?= h($contatosAtributo->email_contato) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status Atributo') ?></th>
                    <td><?= $contatosAtributo->has('status_atributo') ? $this->Html->link($contatosAtributo->status_atributo->nome_status, ['controller' => 'StatusAtributos', 'action' => 'view', $contatosAtributo->status_atributo->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Tiposcontatos Atributo') ?></th>
                    <td><?= $contatosAtributo->has('tiposcontatos_atributo') ? $this->Html->link($contatosAtributo->tiposcontatos_atributo->id, ['controller' => 'TiposcontatosAtributos', 'action' => 'view', $contatosAtributo->tiposcontatos_atributo->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($contatosAtributo->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($contatosAtributo->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($contatosAtributo->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
