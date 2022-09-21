<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CadEnderecosFixture
 */
class CadEnderecosFixture extends TestFixture
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
                'cep' => 'Lorem ipsum dolor sit amet',
                'logradouro' => 'Lorem ipsum dolor sit amet',
                'numero' => 1,
                'bairro' => 'Lorem ipsum dolor sit amet',
                'tipo_logradouro' => 1,
                'cidade' => 'Lorem ipsum dolor sit amet',
                'estado' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-09-01 22:21:38',
                'modified' => '2022-09-01 22:21:38',
                'status' => 1,
            ],
        ];
        parent::init();
    }
}
