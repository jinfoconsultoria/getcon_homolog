<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CadServico Entity
 *
 * @property int $id
 * @property string|null $descricao
 * @property string|null $status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int $cad_fornecedore_id
 * @property int $cad_apartamento_id
 *
 * @property \App\Model\Entity\CadFornecedore $cad_fornecedore
 * @property \App\Model\Entity\CadApartamento $cad_apartamento
 */
class CadServico extends Entity
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
        'descricao' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'cad_fornecedore_id' => true,
        'cad_apartamento_id' => true,
        'cad_fornecedore' => true,
        'cad_apartamento' => true,
    ];
}
