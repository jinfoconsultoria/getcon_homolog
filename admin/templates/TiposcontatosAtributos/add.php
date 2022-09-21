<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TiposcontatosAtributo $tiposcontatosAtributo
 * @var \Cake\Collection\CollectionInterface|string[] $statusAtributos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Tiposcontatos Atributos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tiposcontatosAtributos form content">
            <?= $this->Form->create($tiposcontatosAtributo) ?>
            <fieldset>
                <legend><?= __('Add Tiposcontatos Atributo') ?></legend>
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
