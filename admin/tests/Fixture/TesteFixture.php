<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TesteFixture
 */
class TesteFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'teste';
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
                'modified' => '2022-09-01 01:28:30',
                'created' => '2022-09-01 01:28:30',
                'status' => 1,
            ],
        ];
        parent::init();
    }
}
