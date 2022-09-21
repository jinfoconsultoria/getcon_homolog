<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ContatosAtributo Entity
 *
 * @property int $id
 * @property string $nome_contato
 * @property string $email_contato
 * @property int $status_atributo_id
 * @property int $tiposcontatos_atributo_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\StatusAtributo $status_atributo
 * @property \App\Model\Entity\TiposcontatosAtributo $tiposcontatos_atributo
 */
class ContatosAtributo extends Entity
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
        'nome_contato' => true,
        'email_contato' => true,
        'status_atributo_id' => true,
        'tiposcontatos_atributo_id' => true,
        'created' => true,
        'modified' => true,
        'status_atributo' => true,
        'tiposcontatos_atributo' => true,
    ];
}
