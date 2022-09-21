<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CadEndereco Entity
 *
 * @property int $id
 * @property string|null $cep
 * @property string|null $logradouro
 * @property int|null $numero
 * @property string|null $bairro
 * @property int|null $tipo_logradouro
 * @property string|null $cidade
 * @property string|null $estado
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $status
 *
 * @property \App\Model\Entity\CadCondominio[] $cad_condominios
 * @property \App\Model\Entity\CadFornecedore[] $cad_fornecedores
 */
class CadEndereco extends Entity
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
        'cep' => true,
        'logradouro' => true,
        'numero' => true,
        'bairro' => true,
        'tipo_logradouro' => true,
        'cidade' => true,
        'estado' => true,
        'created' => true,
        'modified' => true,
        'status' => true,
        'cad_condominios' => true,
        'cad_fornecedores' => true,
    ];
}
