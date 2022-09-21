<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TiposcontatosAtributo $tiposcontatosAtributo
 * @var string[]|\Cake\Collection\CollectionInterface $statusAtributos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tiposcontatosAtributo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tiposcontatosAtributo->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Tiposcontatos Atributos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tiposcontatosAtributos form content">
            <?= $this->Form->create($tiposcontatosAtributo) ?>
            <fieldset>
                <legend><?= __('Edit Tiposcontatos Atributo') ?></legend>
                <?php
                    echo $this->Form->control('nome_tiposcontato');
                    echo $this->Form->control('status_atributo_id', ['options' => $statusAtributos]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
