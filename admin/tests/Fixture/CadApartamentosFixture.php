<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CadApartamentosFixture
 */
class CadApartamentosFixture extends TestFixture
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
                'numero' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'created' => '2022-09-01 01:20:43',
                'modified' => '2022-09-01 01:20:43',
                'cad_bloco_id' => 1,
                'cad_bloco_cad_condominio_id' => 1,
            ],
        ];
        parent::init();
    }
}
