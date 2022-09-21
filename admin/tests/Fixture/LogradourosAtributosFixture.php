<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LogradourosAtributosFixture
 */
class LogradourosAtributosFixture extends TestFixture
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
                'nome_logradouro' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-08-24 03:15:07',
                'modified' => '2022-08-24 03:15:07',
            ],
        ];
        parent::init();
    }
}
