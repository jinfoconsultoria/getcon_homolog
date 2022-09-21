<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CadContato $cadContato
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cadContato->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cadContato->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Cad Contatos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cadContatos form content">
            <?= $this->Form->create($cadContato) ?>
            <fieldset>
                <legend><?= __('Edit Cad Contato') ?></legend>
                <?php
                    echo $this->Form->control('email');
                    echo $this->Form->control('telefone');
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
