<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CadCondominio Entity
 *
 * @property int $id
 * @property string|null $nome
 * @property int $cad_contato_id
 * @property int $cad_endereco_id
 * @property string|null $site
 * @property string|null $imagem
 * @property int|null $email_reserva
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $status
 *
 * @property \App\Model\Entity\CadContato $cad_contato
 * @property \App\Model\Entity\CadEndereco $cad_endereco
 * @property \App\Model\Entity\CadBloco[] $cad_blocos
 * @property \App\Model\Entity\CadFornecedore[] $cad_fornecedores
 */
class CadCondominio extends Entity
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
        'cad_contato_id' => true,
        'cad_endereco_id' => true,
        'site' => true,
        'imagem' => true,
        'email_reserva' => true,
        'created' => true,
        'modified' => true,
        'status' => true,
        'cad_contato' => true,
        'cad_endereco' => true,
        'cad_blocos' => true,
        'cad_fornecedores' => true,
    ];
}
