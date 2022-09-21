<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EnderecosAtributo $enderecosAtributo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Enderecos Atributo'), ['action' => 'edit', $enderecosAtributo->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Enderecos Atributo'), ['action' => 'delete', $enderecosAtributo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enderecosAtributo->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Enderecos Atributos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Enderecos Atributo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="enderecosAtributos view content">
            <h3><?= h($enderecosAtributo->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Cep Endereco') ?></th>
                    <td><?= h($enderecosAtributo->cep_endereco) ?></td>
                </tr>
                <tr>
                    <th><?= __('Logradouro Endereco') ?></th>
                    <td><?= h($enderecosAtributo->logradouro_endereco) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bairro Endereco') ?></th>
                    <td><?= h($enderecosAtributo->bairro_endereco) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero Endereco') ?></th>
                    <td><?= h($enderecosAtributo->numero_endereco) ?></td>
                </tr>
                <tr>
                    <th><?= __('Logradouros Atributo') ?></th>
                    <td><?= $enderecosAtributo->has('logradouros_atributo') ? $this->Html->link($enderecosAtributo->logradouros_atributo->id, ['controller' => 'LogradourosAtributos', 'action' => 'view', $enderecosAtributo->logradouros_atributo->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Cidade Endereco') ?></th>
                    <td><?= h($enderecosAtributo->cidade_endereco) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado Endereco') ?></th>
                    <td><?= h($enderecosAtributo->estado_endereco) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status Atributo') ?></th>
                    <td><?= $enderecosAtributo->has('status_atributo') ? $this->Html->link($enderecosAtributo->status_atributo->nome_status, ['controller' => 'StatusAtributos', 'action' => 'view', $enderecosAtributo->status_atributo->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($enderecosAtributo->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($enderecosAtributo->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($enderecosAtributo->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Condominios Atributos') ?></h4>
                <?php if (!empty($enderecosAtributo->condominios_atributos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nome Condominio') ?></th>
                            <th><?= __('Site Condominio') ?></th>
                            <th><?= __('Imagem Condominio') ?></th>
                            <th><?= __('Contatos Atributo Id') ?></th>
                            <th><?= __('Status Atributo Id') ?></th>
                            <th><?= __('Enderecos Atributo Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($enderecosAtributo->condominios_atributos as $condominiosAtributos) : ?>
                        <tr>
                            <td><?= h($condominiosAtributos->id) ?></td>
                            <td><?= h($condominiosAtributos->nome_condominio) ?></td>
                            <td><?= h($condominiosAtributos->site_condominio) ?></td>
                            <td><?= h($condominiosAtributos->imagem_condominio) ?></td>
                            <td><?= h($condominiosAtributos->contatos_atributo_id) ?></td>
                            <td><?= h($condominiosAtributos->status_atributo_id) ?></td>
                            <td><?= h($condominiosAtributos->enderecos_atributo_id) ?></td>
                            <td><?= h($condominiosAtributos->created) ?></td>
                            <td><?= h($condominiosAtributos->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'CondominiosAtributos', 'action' => 'view', $condominiosAtributos->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'CondominiosAtributos', 'action' => 'edit', $condominiosAtributos->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CondominiosAtributos', 'action' => 'delete', $condominiosAtributos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $condominiosAtributos->id)]) ?>
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
