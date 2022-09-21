<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StatusFixture
 */
class StatusFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'status';
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
                'status' => 'Lorem ipsum dolor sit amet',
                'modified' => '2022-08-24 02:04:50',
                'created' => '2022-08-24 02:04:50',
            ],
        ];
        parent::init();
    }
}
