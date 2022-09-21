<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CadUsuariosFixture
 */
class CadUsuariosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'usuario' => 'Lorem ipsum dolor sit amet',
                'senha' => 'Lorem ipsum dolor sit amet',
                'perfil' => 1,
                'email' => 'Lorem ipsum dolor sit amet',
                'celular' => 'Lorem ipsum dolor sit amet',
                'foto' => 'Lorem ipsum dolor sit amet',
                'categoria' => 1,
                'created' => '2022-09-01 22:20:30',
                'modified' => '2022-09-01 22:20:30',
                'status' => 1,
                'receber_mensagens' => 1,
                'realizar_reservas' => 1,
                'veiculo' => 'Lorem ipsum dolor sit amet',
                'observacao' => 'Lorem ipsum dolor sit amet',
                'cad_apartamento_id' => 1,
            ],
        ];
        parent::init();
    }
}
