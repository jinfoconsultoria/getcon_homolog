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
            <?= $this->Html->link(__('Edit Cad Endereco'), ['action' => 'edit', $cadEndereco->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cad Endereco'), ['action' => 'delete', $cadEndereco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cadEndereco->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cad Enderecos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cad Endereco'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cadEnderecos view content">
            <h3><?= h($cadEndereco->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Cep') ?></th>
                    <td><?= h($cadEndereco->cep) ?></td>
                </tr>
                <tr>
                    <th><?= __('Logradouro') ?></th>
                    <td><?= h($cadEndereco->logradouro) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bairro') ?></th>
                    <td><?= h($cadEndereco->bairro) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cidade') ?></th>
                    <td><?= h($cadEndereco->cidade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= h($cadEndereco->estado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cadEndereco->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= $cadEndereco->numero === null ? '' : $this->Number->format($cadEndereco->numero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Logradouro') ?></th>
                    <td><?= $cadEndereco->tipo_logradouro === null ? '' : $this->Number->format($cadEndereco->tipo_logradouro) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $cadEndereco->status === null ? '' : $this->Number->format($cadEndereco->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($cadEndereco->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($cadEndereco->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Cad Condominios') ?></h4>
                <?php if (!empty($cadEndereco->cad_condominios)) : ?>
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
                        <?php foreach ($cadEndereco->cad_condominios as $cadCondominios) : ?>
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
            <div class="related">
                <h4><?= __('Related Cad Fornecedores') ?></h4>
                <?php if (!empty($cadEndereco->cad_fornecedores)) : ?>
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
                        <?php foreach ($cadEndereco->cad_fornecedores as $cadFornecedores) : ?>
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
                                <?= $this->Html->link(__('View'), ['controller' => 'CadFornecedores', 'action' => 'view', $cadFornecedores->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'CadFornecedores', 'action' => 'edit', $cadFornecedores->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CadFornecedores', 'action' => 'delete', $cadFornecedores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cadFornecedores->id)]) ?>
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
