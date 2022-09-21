<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EnderecosAtributo $enderecosAtributo
 * @var string[]|\Cake\Collection\CollectionInterface $logradourosAtributos
 * @var string[]|\Cake\Collection\CollectionInterface $statusAtributos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $enderecosAtributo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $enderecosAtributo->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Enderecos Atributos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="enderecosAtributos form content">
            <?= $this->Form->create($enderecosAtributo) ?>
            <fieldset>
                <legend><?= __('Edit Enderecos Atributo') ?></legend>
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
