<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CadUsuario $cadUsuario
 * @var string[]|\Cake\Collection\CollectionInterface $cadApartamentos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cadUsuario->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cadUsuario->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Cad Usuarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cadUsuarios form content">
            <?= $this->Form->create($cadUsuario) ?>
            <fieldset>
                <legend><?= __('Edit Cad Usuario') ?></legend>
                <?php
                    echo $this->Form->control('usuario');
                    echo $this->Form->control('senha');
                    echo $this->Form->control('perfil');
                    echo $this->Form->control('email');
                    echo $this->Form->control('celular');
                    echo $this->Form->control('foto');
                    echo $this->Form->control('categoria');
                    echo $this->Form->control('status');
                    echo $this->Form->control('receber_mensagens');
                    echo $this->Form->control('realizar_reservas');
                    echo $this->Form->control('veiculo');
                    echo $this->Form->control('observacao');
                    echo $this->Form->control('cad_apartamento_id', ['options' => $cadApartamentos]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
