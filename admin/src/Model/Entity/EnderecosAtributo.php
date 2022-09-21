<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EnderecosAtributo Entity
 *
 * @property int $id
 * @property string $cep_endereco
 * @property string $logradouro_endereco
 * @property string $bairro_endereco
 * @property string $numero_endereco
 * @property int $logradouros_atributo_id
 * @property string $cidade_endereco
 * @property string $estado_endereco
 * @property int $status_atributo_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\LogradourosAtributo $logradouros_atributo
 * @property \App\Model\Entity\StatusAtributo $status_atributo
 * @property \App\Model\Entity\CondominiosAtributo[] $condominios_atributos
 */
class EnderecosAtributo extends Entity
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
        'cep_endereco' => true,
        'logradouro_endereco' => true,
        'bairro_endereco' => true,
        'numero_endereco' => true,
        'logradouros_atributo_id' => true,
        'cidade_endereco' => true,
        'estado_endereco' => true,
        'status_atributo_id' => true,
        'created' => true,
        'modified' => true,
        'logradouros_atributo' => true,
        'status_atributo' => true,
        'condominios_atributos' => true,
    ];
}
