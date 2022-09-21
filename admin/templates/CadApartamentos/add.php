<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CadApartamento $cadApartamento
 * @var \Cake\Collection\CollectionInterface|string[] $cadBlocos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Cad Apartamentos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cadApartamentos form content">
            <?= $this->Form->create($cadApartamento) ?>
            <fieldset>
                <legend><?= __('Add Cad Apartamento') ?></legend>
                <?php
                    echo $this->Form->control('numero');
                    echo $this->Form->control('status');
                    echo $this->Form->control('cad_bloco_id');
                    echo $this->Form->control('cad_bloco_cad_condominio_id', ['options' => $cadBlocos]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
