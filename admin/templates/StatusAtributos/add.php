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
            <?= $this->Html->link(__('List Status Atributos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="statusAtributos form content">
            <?= $this->Form->create($statusAtributo) ?>
            <fieldset>
                <legend><?= __('Add Status Atributo') ?></legend>
                <?php
                    echo $this->Form->control('nome_status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
