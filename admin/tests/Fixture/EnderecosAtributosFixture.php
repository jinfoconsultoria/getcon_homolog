<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EnderecosAtributosFixture
 */
class EnderecosAtributosFixture extends TestFixture
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
                'cep_endereco' => 'Lorem ipsum dolor sit amet',
                'logradouro_endereco' => 'Lorem ipsum dolor sit amet',
                'bairro_endereco' => 'Lorem ipsum dolor sit amet',
                'numero_endereco' => 'Lorem ipsum dolor sit amet',
                'logradouros_atributo_id' => 1,
                'cidade_endereco' => 'Lorem ipsum dolor sit amet',
                'estado_endereco' => 'Lorem ipsum dolor sit amet',
                'status_atributo_id' => 1,
                'created' => '2022-08-24 03:15:19',
                'modified' => '2022-08-24 03:15:19',
            ],
        ];
        parent::init();
    }
}
