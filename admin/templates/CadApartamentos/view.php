<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CadApartamento $cadApartamento
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cad Apartamento'), ['action' => 'edit', $cadApartamento->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cad Apartamento'), ['action' => 'delete', $cadApartamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cadApartamento->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cad Apartamentos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cad Apartamento'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cadApartamentos view content">
            <h3><?= h($cadApartamento->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= h($cadApartamento->numero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cad Bloco') ?></th>
                    <td><?= $cadApartamento->has('cad_bloco') ? $this->Html->link($cadApartamento->cad_bloco->Array, ['controller' => 'CadBlocos', 'action' => 'view', $cadApartamento->cad_bloco->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cadApartamento->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $cadApartamento->status === null ? '' : $this->Number->format($cadApartamento->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cad Bloco Id') ?></th>
                    <td><?= $this->Number->format($cadApartamento->cad_bloco_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($cadApartamento->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($cadApartamento->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Cad Servicos') ?></h4>
                <?php if (!empty($cadApartamento->cad_servicos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Descricao') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Cad Fornecedore Id') ?></th>
                            <th><?= __('Cad Apartamento Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($cadApartamento->cad_servicos as $cadServicos) : ?>
                        <tr>
                            <td><?= h($cadServicos->id) ?></td>
                            <td><?= h($cadServicos->descricao) ?></td>
                            <td><?= h($cadServicos->status) ?></td>
                            <td><?= h($cadServicos->created) ?></td>
                            <td><?= h($cadServicos->modified) ?></td>
                            <td><?= h($cadServicos->cad_fornecedore_id) ?></td>
                            <td><?= h($cadServicos->cad_apartamento_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'CadServicos', 'action' => 'view', $cadServicos->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'CadServicos', 'action' => 'edit', $cadServicos->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CadServicos', 'action' => 'delete', $cadServicos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cadServicos->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Cad Usuarios') ?></h4>
                <?php if (!empty($cadApartamento->cad_usuarios)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Usuario') ?></th>
                            <th><?= __('Senha') ?></th>
                            <th><?= __('Perfil') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Celular') ?></th>
                            <th><?= __('Foto') ?></th>
                            <th><?= __('Categoria') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Receber Mensagens') ?></th>
                            <th><?= __('Realizar Reservas') ?></th>
                            <th><?= __('Veiculo') ?></th>
                            <th><?= __('Observacao') ?></th>
                            <th><?= __('Cad Apartamento Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($cadApartamento->cad_usuarios as $cadUsuarios) : ?>
                        <tr>
                            <td><?= h($cadUsuarios->id) ?></td>
                            <td><?= h($cadUsuarios->usuario) ?></td>
                            <td><?= h($cadUsuarios->senha) ?></td>
                            <td><?= h($cadUsuarios->perfil) ?></td>
                            <td><?= h($cadUsuarios->email) ?></td>
                            <td><?= h($cadUsuarios->celular) ?></td>
                            <td><?= h($cadUsuarios->foto) ?></td>
                            <td><?= h($cadUsuarios->categoria) ?></td>
                            <td><?= h($cadUsuarios->created) ?></td>
                            <td><?= h($cadUsuarios->modified) ?></td>
                            <td><?= h($cadUsuarios->status) ?></td>
                            <td><?= h($cadUsuarios->receber_mensagens) ?></td>
                            <td><?= h($cadUsuarios->realizar_reservas) ?></td>
                            <td><?= h($cadUsuarios->veiculo) ?></td>
                            <td><?= h($cadUsuarios->observacao) ?></td>
                            <td><?= h($cadUsuarios->cad_apartamento_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'CadUsuarios', 'action' => 'view', $cadUsuarios->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'CadUsuarios', 'action' => 'edit', $cadUsuarios->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CadUsuarios', 'action' => 'delete', $cadUsuarios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cadUsuarios->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
