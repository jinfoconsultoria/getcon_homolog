<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StatusCadastrosFixture
 */
class StatusCadastrosFixture extends TestFixture
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
                'nome_statu' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-08-24 02:19:08',
                'modified' => '2022-08-24 02:19:08',
            ],
        ];
        parent::init();
    }
}
