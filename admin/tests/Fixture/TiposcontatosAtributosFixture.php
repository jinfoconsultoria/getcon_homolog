<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TiposcontatosAtributosFixture
 */
class TiposcontatosAtributosFixture extends TestFixture
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
                'nome_tiposcontato' => 'Lorem ipsum dolor sit amet',
                'status_atributo_id' => 1,
                'created' => '2022-08-24 02:46:28',
                'modified' => '2022-08-24 02:46:28',
            ],
        ];
        parent::init();
    }
}
