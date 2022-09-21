<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CadFornecedoresFixture
 */
class CadFornecedoresFixture extends TestFixture
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
                'nome' => 'Lorem ipsum dolor sit amet',
                'ramo' => 'Lorem ipsum dolor sit amet',
                'logo' => 'Lorem ipsum dolor sit amet',
                'cnpj' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'created' => '2022-09-01 00:59:02',
                'modified' => '2022-09-01 00:59:02',
                'cad_condominio_id' => 1,
                'cad_contatos_id' => 1,
                'cad_endereco_id' => 1,
            ],
        ];
        parent::init();
    }
}
