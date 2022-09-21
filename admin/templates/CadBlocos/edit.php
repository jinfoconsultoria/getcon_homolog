<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CadBloco $cadBloco
 * @var string[]|\Cake\Collection\CollectionInterface $cadCondominios
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cadBloco->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cadBloco->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Cad Blocos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cadBlocos form content">
            <?= $this->Form->create($cadBloco) ?>
            <fieldset>
                <legend><?= __('Edit Cad Bloco') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
