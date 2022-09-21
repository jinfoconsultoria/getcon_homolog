<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ContatosAtributosFixture
 */
class ContatosAtributosFixture extends TestFixture
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
                'nome_contato' => 'Lorem ipsum dolor sit amet',
                'email_contato' => 'Lorem ipsum dolor sit amet',
                'status_atributo_id' => 1,
                'tiposcontatos_atributo_id' => 1,
                'created' => '2022-08-24 02:59:32',
                'modified' => '2022-08-24 02:59:32',
            ],
        ];
        parent::init();
    }
}
