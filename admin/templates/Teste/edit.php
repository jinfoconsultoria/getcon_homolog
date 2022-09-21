<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Teste $teste
 */
?>


<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $teste->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $teste->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Teste'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="teste form content">
            <?= $this->Form->create($teste) ?>
            <fieldset>
                <legend><?= __('Edit Teste') ?></legend>
                <?php
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
