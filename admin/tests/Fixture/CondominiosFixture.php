<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CondominiosFixture
 */
class CondominiosFixture extends TestFixture
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
                'nome_condominio' => 'Lorem ipsum dolor sit amet',
                'bloco_id' => 1,
                'created' => '2022-08-24 02:31:09',
                'modified' => '2022-08-24 02:31:09',
            ],
        ];
        parent::init();
    }
}
