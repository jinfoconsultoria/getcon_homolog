<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CadFornecedore $cadFornecedore
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cad Fornecedore'), ['action' => 'edit', $cadFornecedore->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cad Fornecedore'), ['action' => 'delete', $cadFornecedore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cadFornecedore->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cad Fornecedores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cad Fornecedore'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cadFornecedores view content">
            <h3><?= h($cadFornecedore->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($cadFornecedore->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ramo') ?></th>
                    <td><?= h($cadFornecedore->ramo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Logo') ?></th>
                    <td><?= h($cadFornecedore->logo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cnpj') ?></th>
                    <td><?= h($cadFornecedore->cnpj) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cad Condominio') ?></th>
                    <td><?= $cadFornecedore->has('cad_condominio') ? $this->Html->link($cadFornecedore->cad_condominio->id, ['controller' => 'CadCondominios', 'action' => 'view', $cadFornecedore->cad_condominio->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Cad Contato') ?></th>
                    <td><?= $cadFornecedore->has('cad_contato') ? $this->Html->link($cadFornecedore->cad_contato->id, ['controller' => 'CadContatos', 'action' => 'view', $cadFornecedore->cad_contato->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Cad Endereco') ?></th>
                    <td><?= $cadFornecedore->has('cad_endereco') ? $this->Html->link($cadFornecedore->cad_endereco->id, ['controller' => 'CadEnderecos', 'action' => 'view', $cadFornecedore->cad_endereco->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cadFornecedore->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $cadFornecedore->status === null ? '' : $this->Number->format($cadFornecedore->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($cadFornecedore->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($cadFornecedore->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Cad Servicos') ?></h4>
                <?php if (!empty($cadFornecedore->cad_servicos)) : ?>
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
                        <?php foreach ($cadFornecedore->cad_servicos as $cadServicos) : ?>
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
        </div>
    </div>
</div>
