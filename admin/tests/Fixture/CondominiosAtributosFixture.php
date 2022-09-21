<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CondominiosAtributosFixture
 */
class CondominiosAtributosFixture extends TestFixture
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
                'site_condominio' => 'Lorem ipsum dolor sit amet',
                'imagem_condominio' => 'Lorem ipsum dolor sit amet',
                'contatos_atributo_id' => 1,
                'status_atributo_id' => 1,
                'enderecos_atributo_id' => 1,
                'created' => '2022-08-24 03:15:30',
                'modified' => '2022-08-24 03:15:30',
            ],
        ];
        parent::init();
    }
}
