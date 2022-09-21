<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contato $contato
 * @var \Cake\Collection\CollectionInterface|string[] $tiposcontatos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Contatos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contatos form content">
            <?= $this->Form->create($contato) ?>
            <fieldset>
                <legend><?= __('Add Contato') ?></legend>
                <?php
                    echo $this->Form->control('email');
                    echo $this->Form->control('telefone');
                    echo $this->Form->control('tiposcontatos_id', ['options' => $tiposcontatos]);
                    echo $this->Form->control('status_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
