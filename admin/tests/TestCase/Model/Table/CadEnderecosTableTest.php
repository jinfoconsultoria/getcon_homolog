<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CadEnderecosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CadEnderecosTable Test Case
 */
class CadEnderecosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CadEnderecosTable
     */
    protected $CadEnderecos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CadEnderecos',
        'app.CadCondominios',
        'app.CadFornecedores',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CadEnderecos') ? [] : ['className' => CadEnderecosTable::class];
        $this->CadEnderecos = $this->getTableLocator()->get('CadEnderecos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CadEnderecos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CadEnderecosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
