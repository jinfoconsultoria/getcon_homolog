<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BlocosAtributosFixture
 */
class BlocosAtributosFixture extends TestFixture
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
                'nome_bloco' => 'Lorem ipsum dolor sit amet',
                'status_atributo_id' => 1,
                'created' => '2022-08-24 02:50:50',
                'modified' => '2022-08-24 02:50:50',
            ],
        ];
        parent::init();
    }
}
