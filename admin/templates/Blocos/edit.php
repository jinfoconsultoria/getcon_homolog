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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bloco->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bloco->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Blocos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="blocos form content">
            <?= $this->Form->create($bloco) ?>
            <fieldset>
                <legend><?= __('Edit Bloco') ?></legend>
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
