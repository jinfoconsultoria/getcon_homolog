<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StatusAtributosFixture
 */
class StatusAtributosFixture extends TestFixture
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
                'nome_status' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-08-24 02:36:04',
                'modified' => '2022-08-24 02:36:04',
            ],
        ];
        parent::init();
    }
}
