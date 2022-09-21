<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ContatosFixture
 */
class ContatosFixture extends TestFixture
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
                'tiposcontatos_id' => 1,
                'created' => '2022-08-24 02:13:54',
                'modified' => '2022-08-24 02:13:54',
                'status_id' => 1,
            ],
        ];
        parent::init();
    }
}
