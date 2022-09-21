<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BlocosAtributo $blocosAtributo
 * @var string[]|\Cake\Collection\CollectionInterface $statusAtributos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $blocosAtributo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $blocosAtributo->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Blocos Atributos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="blocosAtributos form content">
            <?= $this->Form->create($blocosAtributo) ?>
            <fieldset>
                <legend><?= __('Edit Blocos Atributo') ?></legend>
                <?php
                    echo $this->Form->control('nome_bloco');
                    echo $this->Form->control('status_atributo_id', ['options' => $statusAtributos]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
