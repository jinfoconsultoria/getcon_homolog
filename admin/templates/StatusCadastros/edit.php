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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $statusCadastro->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $statusCadastro->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Status Cadastros'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="statusCadastros form content">
            <?= $this->Form->create($statusCadastro) ?>
            <fieldset>
                <legend><?= __('Edit Status Cadastro') ?></legend>
                <?php
                    echo $this->Form->control('nome_statu');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
