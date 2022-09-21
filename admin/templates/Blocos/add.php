<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bloco $bloco
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Blocos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="blocos form content">
            <?= $this->Form->create($bloco) ?>
            <fieldset>
                <legend><?= __('Add Bloco') ?></legend>
                <?php
                    echo $this->Form->control('bloco_nome');
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
