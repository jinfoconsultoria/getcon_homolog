<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LogradourosAtributo $logradourosAtributo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Logradouros Atributos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="logradourosAtributos form content">
            <?= $this->Form->create($logradourosAtributo) ?>
            <fieldset>
                <legend><?= __('Add Logradouros Atributo') ?></legend>
                <?php
                    echo $this->Form->control('nome_logradouro');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
