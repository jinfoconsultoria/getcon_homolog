<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EnderecosAtributo $enderecosAtributo
 * @var \Cake\Collection\CollectionInterface|string[] $logradourosAtributos
 * @var \Cake\Collection\CollectionInterface|string[] $statusAtributos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Enderecos Atributos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="enderecosAtributos form content">
            <?= $this->Form->create($enderecosAtributo) ?>
            <fieldset>
                <legend><?= __('Add Enderecos Atributo') ?></legend>
                <?php
                    echo $this->Form->control('cep_endereco');
                    echo $this->Form->control('logradouro_endereco');
                    echo $this->Form->control('bairro_endereco');
                    echo $this->Form->control('numero_endereco');
                    echo $this->Form->control('logradouros_atributo_id', ['options' => $logradourosAtributos]);
                    echo $this->Form->control('cidade_endereco');
                    echo $this->Form->control('estado_endereco');
                    echo $this->Form->control('status_atributo_id', ['options' => $statusAtributos]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
