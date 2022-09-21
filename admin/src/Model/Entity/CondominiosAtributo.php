<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CondominiosAtributo Entity
 *
 * @property int $id
 * @property string $nome_condominio
 * @property string $site_condominio
 * @property string $imagem_condominio
 * @property int $contatos_atributo_id
 * @property int $status_atributo_id
 * @property int $enderecos_atributo_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\ContatosAtributo $contatos_atributo
 * @property \App\Model\Entity\StatusAtributo $status_atributo
 * @property \App\Model\Entity\EnderecosAtributo $enderecos_atributo
 */
class CondominiosAtributo extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'nome_condominio' => true,
        'site_condominio' => true,
        'imagem_condominio' => true,
        'contatos_atributo_id' => true,
        'status_atributo_id' => true,
        'enderecos_atributo_id' => true,
        'created' => true,
        'modified' => true,
        'contatos_atributo' => true,
        'status_atributo' => true,
        'enderecos_atributo' => true,
    ];
}
