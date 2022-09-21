<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CadFornecedore Entity
 *
 * @property int $id
 * @property string|null $nome
 * @property string|null $ramo
 * @property string|null $logo
 * @property string|null $cnpj
 * @property int|null $status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int $cad_condominio_id
 * @property int $cad_contatos_id
 * @property int $cad_endereco_id
 *
 * @property \App\Model\Entity\CadCondominio $cad_condominio
 * @property \App\Model\Entity\CadContato $cad_contato
 * @property \App\Model\Entity\CadEndereco $cad_endereco
 * @property \App\Model\Entity\CadServico[] $cad_servicos
 */
class CadFornecedore extends Entity
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
        'nome' => true,
        'ramo' => true,
        'logo' => true,
        'cnpj' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'cad_condominio_id' => true,
        'cad_contatos_id' => true,
        'cad_endereco_id' => true,
        'cad_condominio' => true,
        'cad_contato' => true,
        'cad_endereco' => true,
        'cad_servicos' => true,
    ];
}
