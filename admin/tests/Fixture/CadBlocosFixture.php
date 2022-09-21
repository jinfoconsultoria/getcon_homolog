<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CadBlocosFixture
 */
class CadBlocosFixture extends TestFixture
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
                'created' => '2022-09-01 22:19:20',
                'modified' => '2022-09-01 22:19:20',
                'status' => 1,
                'cad_condominio_id' => 1,
            ],
        ];
        parent::init();
    }
}
