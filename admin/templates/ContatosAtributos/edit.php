<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContatosAtributo $contatosAtributo
 * @var string[]|\Cake\Collection\CollectionInterface $statusAtributos
 * @var string[]|\Cake\Collection\CollectionInterface $tiposcontatosAtributos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contatosAtributo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contatosAtributo->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Contatos Atributos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contatosAtributos form content">
            <?= $this->Form->create($contatosAtributo) ?>
            <fieldset>
                <legend><?= __('Edit Contatos Atributo') ?></legend>
                <?php
                    echo $this->Form->control('nome_contato');
                    echo $this->Form->control('email_contato');
                    echo $this->Form->control('status_atributo_id', ['options' => $statusAtributos]);
                    echo $this->Form->control('tiposcontatos_atributo_id', ['options' => $tiposcontatosAtributos]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
