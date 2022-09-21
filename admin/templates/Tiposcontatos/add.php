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
            <?= $this->Html->link(__('List Tipos Contatos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tiposContatos form content">
            <?= $this->Form->create($tiposContato) ?>
            <fieldset>
                <legend><?= __('Add Tipos Contato') ?></legend>
                <?php
                    echo $this->Form->control('tipo_contato');
                    echo $this->Form->control('status_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
