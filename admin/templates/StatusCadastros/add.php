<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StatusCadastro $statusCadastro
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Status Cadastros'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="statusCadastros form content">
            <?= $this->Form->create($statusCadastro) ?>
            <fieldset>
                <legend><?= __('Add Status Cadastro') ?></legend>
                <?php
                    echo $this->Form->control('nome_statu');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
