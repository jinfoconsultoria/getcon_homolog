<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CadServicosFixture
 */
class CadServicosFixture extends TestFixture
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
                'descricao' => 'Lorem ipsum dolor sit amet',
                'status' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-09-01 00:59:08',
                'modified' => '2022-09-01 00:59:08',
                'cad_fornecedore_id' => 1,
                'cad_apartamento_id' => 1,
            ],
        ];
        parent::init();
    }
}
