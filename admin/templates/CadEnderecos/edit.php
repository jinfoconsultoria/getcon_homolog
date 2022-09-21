<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CadEndereco $cadEndereco
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cadEndereco->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cadEndereco->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Cad Enderecos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cadEnderecos form content">
            <?= $this->Form->create($cadEndereco) ?>
            <fieldset>
                <legend><?= __('Edit Cad Endereco') ?></legend>
                <?php
                    echo $this->Form->control('cep');
                    echo $this->Form->control('logradouro');
                    echo $this->Form->control('numero');
                    echo $this->Form->control('bairro');
                    echo $this->Form->control('tipo_logradouro');
                    echo $this->Form->control('cidade');
                    echo $this->Form->control('estado');
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
