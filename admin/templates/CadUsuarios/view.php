<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CadUsuario $cadUsuario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cad Usuario'), ['action' => 'edit', $cadUsuario->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cad Usuario'), ['action' => 'delete', $cadUsuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cadUsuario->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cad Usuarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cad Usuario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cadUsuarios view content">
            <h3><?= h($cadUsuario->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Usuario') ?></th>
                    <td><?= h($cadUsuario->usuario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Senha') ?></th>
                    <td><?= h($cadUsuario->senha) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($cadUsuario->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Celular') ?></th>
                    <td><?= h($cadUsuario->celular) ?></td>
                </tr>
                <tr>
                    <th><?= __('Foto') ?></th>
                    <td><?= h($cadUsuario->foto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Veiculo') ?></th>
                    <td><?= h($cadUsuario->veiculo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Observacao') ?></th>
                    <td><?= h($cadUsuario->observacao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cad Apartamento') ?></th>
                    <td><?= $cadUsuario->has('cad_apartamento') ? $this->Html->link($cadUsuario->cad_apartamento->id, ['controller' => 'CadApartamentos', 'action' => 'view', $cadUsuario->cad_apartamento->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cadUsuario->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Perfil') ?></th>
                    <td><?= $cadUsuario->perfil === null ? '' : $this->Number->format($cadUsuario->perfil) ?></td>
                </tr>
                <tr>
                    <th><?= __('Categoria') ?></th>
                    <td><?= $cadUsuario->categoria === null ? '' : $this->Number->format($cadUsuario->categoria) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $cadUsuario->status === null ? '' : $this->Number->format($cadUsuario->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Receber Mensagens') ?></th>
                    <td><?= $cadUsuario->receber_mensagens === null ? '' : $this->Number->format($cadUsuario->receber_mensagens) ?></td>
                </tr>
                <tr>
                    <th><?= __('Realizar Reservas') ?></th>
                    <td><?= $cadUsuario->realizar_reservas === null ? '' : $this->Number->format($cadUsuario->realizar_reservas) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($cadUsuario->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($cadUsuario->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
