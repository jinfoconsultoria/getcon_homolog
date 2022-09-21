<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CadServico $cadServico
 * @var string[]|\Cake\Collection\CollectionInterface $cadFornecedores
 * @var string[]|\Cake\Collection\CollectionInterface $cadApartamentos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cadServico->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cadServico->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Cad Servicos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cadServicos form content">
            <?= $this->Form->create($cadServico) ?>
            <fieldset>
                <legend><?= __('Edit Cad Servico') ?></legend>
                <?php
                    echo $this->Form->control('descricao');
                    echo $this->Form->control('status');
                    echo $this->Form->control('cad_fornecedore_id', ['options' => $cadFornecedores]);
                    echo $this->Form->control('cad_apartamento_id', ['options' => $cadApartamentos]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
