<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CadUsuario Entity
 *
 * @property int $id
 * @property string|null $usuario
 * @property string|null $senha
 * @property int|null $perfil
 * @property string|null $email
 * @property string|null $celular
 * @property string|null $foto
 * @property int|null $categoria
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $status
 * @property int|null $receber_mensagens
 * @property int|null $realizar_reservas
 * @property string|null $veiculo
 * @property string|null $observacao
 * @property int $cad_apartamento_id
 *
 * @property \App\Model\Entity\CadApartamento $cad_apartamento
 */
class CadUsuario extends Entity
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
        'usuario' => true,
        'senha' => true,
        'perfil' => true,
        'email' => true,
        'celular' => true,
        'foto' => true,
        'categoria' => true,
        'created' => true,
        'modified' => true,
        'status' => true,
        'receber_mensagens' => true,
        'realizar_reservas' => true,
        'veiculo' => true,
        'observacao' => true,
        'cad_apartamento_id' => true,
        'cad_apartamento' => true,
    ];
}
