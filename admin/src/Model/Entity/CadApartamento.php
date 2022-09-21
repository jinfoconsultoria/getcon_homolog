<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CadApartamento Entity
 *
 * @property int $id
 * @property string|null $numero
 * @property int|null $status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int $cad_bloco_id
 * @property int $cad_bloco_cad_condominio_id
 *
 * @property \App\Model\Entity\CadBloco $cad_bloco
 * @property \App\Model\Entity\CadServico[] $cad_servicos
 * @property \App\Model\Entity\CadUsuario[] $cad_usuarios
 */
class CadApartamento extends Entity
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
        'numero' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'cad_bloco_id' => true,
        'cad_bloco_cad_condominio_id' => true,
        'cad_bloco' => true,
        'cad_servicos' => true,
        'cad_usuarios' => true,
    ];
}
