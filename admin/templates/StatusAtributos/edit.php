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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $statusAtributo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $statusAtributo->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Status Atributos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="statusAtributos form content">
            <?= $this->Form->create($statusAtributo) ?>
            <fieldset>
                <legend><?= __('Edit Status Atributo') ?></legend>
                <?php
                    echo $this->Form->control('nome_status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
