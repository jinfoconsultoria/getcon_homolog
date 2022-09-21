<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TiposContatosFixture
 */
class TiposContatosFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tiposcontatos';
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
                'tipo_contato' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-08-24 02:20:51',
                'modified' => '2022-08-24 02:20:51',
                'status_id' => 1,
            ],
        ];
        parent::init();
    }
}
