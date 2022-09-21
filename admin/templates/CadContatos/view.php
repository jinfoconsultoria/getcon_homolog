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
            <?= $this->Html->link(__('Edit Cad Contato'), ['action' => 'edit', $cadContato->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cad Contato'), ['action' => 'delete', $cadContato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cadContato->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cad Contatos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cad Contato'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cadContatos view content">
            <h3><?= h($cadContato->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($cadContato->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefone') ?></th>
                    <td><?= h($cadContato->telefone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cadContato->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $cadContato->status === null ? '' : $this->Number->format($cadContato->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($cadContato->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($cadContato->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Cad Condominios') ?></h4>
                <?php if (!empty($cadContato->cad_condominios)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nome') ?></th>
                            <th><?= __('Cad Contato Id') ?></th>
                            <th><?= __('Cad Endereco Id') ?></th>
                            <th><?= __('Site') ?></th>
                            <th><?= __('Imagem') ?></th>
                            <th><?= __('Email Reserva') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Status') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($cadContato->cad_condominios as $cadCondominios) : ?>
                        <tr>
                            <td><?= h($cadCondominios->id) ?></td>
                            <td><?= h($cadCondominios->nome) ?></td>
                            <td><?= h($cadCondominios->cad_contato_id) ?></td>
                            <td><?= h($cadCondominios->cad_endereco_id) ?></td>
                            <td><?= h($cadCondominios->site) ?></td>
                            <td><?= h($cadCondominios->imagem) ?></td>
                            <td><?= h($cadCondominios->email_reserva) ?></td>
                            <td><?= h($cadCondominios->created) ?></td>
                            <td><?= h($cadCondominios->modified) ?></td>
                            <td><?= h($cadCondominios->status) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'CadCondominios', 'action' => 'view', $cadCondominios->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'CadCondominios', 'action' => 'edit', $cadCondominios->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CadCondominios', 'action' => 'delete', $cadCondominios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cadCondominios->id)]) ?>
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
