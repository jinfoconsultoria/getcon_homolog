<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CadCondominio $cadCondominio
 */
?>
<div class="row index content">
    <!-- <aside class="column"> -->
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $cadCondominio->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $cadCondominio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cadCondominio->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Adicionar'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    <!-- </aside> -->
    <div class="column-responsive column-80">
        <div class="cadCondominios view content">
            <h3><?= h($cadCondominio->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($cadCondominio->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cad Contato') ?></th>
                    <td><?= $cadCondominio->has('cad_contato') ? $this->Html->link($cadCondominio->cad_contato->email, ['controller' => 'CadContatos', 'action' => 'view', $cadCondominio->cad_contato->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Cad Endereco') ?></th>
                    <td><?= $cadCondominio->has('cad_endereco') ? $this->Html->link($cadCondominio->cad_endereco->id, ['controller' => 'CadEnderecos', 'action' => 'view', $cadCondominio->cad_endereco->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Site') ?></th>
                    <td><?= h($cadCondominio->site) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imagem') ?></th>
                    <td><?= h($cadCondominio->imagem) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cadCondominio->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email Reserva') ?></th>
                    <td><?= $cadCondominio->email_reserva === null ? '' : $this->Number->format($cadCondominio->email_reserva) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $cadCondominio->status === null ? '' : $this->Number->format($cadCondominio->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($cadCondominio->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($cadCondominio->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Blocos') ?></h4>
                <?php if (!empty($cadCondominio->cad_blocos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nome') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Cad Condominio Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($cadCondominio->cad_blocos as $cadBlocos) : ?>
                        <tr>
                            <td><?= h($cadBlocos->id) ?></td>
                            <td><?= h($cadBlocos->nome) ?></td>
                            <td><?= h($cadBlocos->created) ?></td>
                            <td><?= h($cadBlocos->modified) ?></td>
                            <td><?= h($cadBlocos->status) ?></td>
                            <td><?= h($cadBlocos->cad_condominio_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Ver'), ['controller' => 'CadBlocos', 'action' => 'view', $cadBlocos->id]) ?>
                                <?= $this->Html->link(__('Editar'), ['controller' => 'CadBlocos', 'action' => 'edit', $cadBlocos->id]) ?>
                                <?= $this->Form->postLink(__('Deletar'), ['controller' => 'CadBlocos', 'action' => 'delete', $cadBlocos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cadBlocos->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Fornecedores') ?></h4>
                <?php if (!empty($cadCondominio->cad_fornecedores)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nome') ?></th>
                            <th><?= __('Ramo') ?></th>
                            <th><?= __('Logo') ?></th>
                            <th><?= __('Cnpj') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Cad Condominio Id') ?></th>
                            <th><?= __('Cad Contatos Id') ?></th>
                            <th><?= __('Cad Endereco Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($cadCondominio->cad_fornecedores as $cadFornecedores) : ?>
                        <tr>
                            <td><?= h($cadFornecedores->id) ?></td>
                            <td><?= h($cadFornecedores->nome) ?></td>
                            <td><?= h($cadFornecedores->ramo) ?></td>
                            <td><?= h($cadFornecedores->logo) ?></td>
                            <td><?= h($cadFornecedores->cnpj) ?></td>
                            <td><?= h($cadFornecedores->status) ?></td>
                            <td><?= h($cadFornecedores->created) ?></td>
                            <td><?= h($cadFornecedores->modified) ?></td>
                            <td><?= h($cadFornecedores->cad_condominio_id) ?></td>
                            <td><?= h($cadFornecedores->cad_contatos_id) ?></td>
                            <td><?= h($cadFornecedores->cad_endereco_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Ver'), ['controller' => 'CadFornecedores', 'action' => 'view', $cadFornecedores->id]) ?>
                                <?= $this->Html->link(__('Editar'), ['controller' => 'CadFornecedores', 'action' => 'edit', $cadFornecedores->id]) ?>
                                <?= $this->Form->postLink(__('Deletar'), ['controller' => 'CadFornecedores', 'action' => 'delete', $cadFornecedores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cadFornecedores->id)]) ?>
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
