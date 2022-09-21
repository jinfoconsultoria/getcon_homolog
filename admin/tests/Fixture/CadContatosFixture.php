<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CadContatosFixture
 */
class CadContatosFixture extends TestFixture
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
                'email' => 'Lorem ipsum dolor sit amet',
                'telefone' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-09-01 00:58:47',
                'modified' => '2022-09-01 00:58:47',
                'status' => 1,
            ],
        ];
        parent::init();
    }
}
