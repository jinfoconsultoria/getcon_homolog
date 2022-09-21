<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CadCondominiosFixture
 */
class CadCondominiosFixture extends TestFixture
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
                'nome' => 'Lorem ipsum dolor sit amet',
                'cad_contato_id' => 1,
                'cad_endereco_id' => 1,
                'site' => 'Lorem ipsum dolor sit amet',
                'imagem' => 'Lorem ipsum dolor sit amet',
                'email_reserva' => 1,
                'created' => '2022-09-01 01:22:34',
                'modified' => '2022-09-01 01:22:34',
                'status' => 1,
            ],
        ];
        parent::init();
    }
}
