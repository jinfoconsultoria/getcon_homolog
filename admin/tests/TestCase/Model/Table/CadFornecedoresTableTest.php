<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CadFornecedoresTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CadFornecedoresTable Test Case
 */
class CadFornecedoresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CadFornecedoresTable
     */
    protected $CadFornecedores;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CadFornecedores',
        'app.CadCondominios',
        'app.CadContatos',
        'app.CadEnderecos',
        'app.CadServicos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CadFornecedores') ? [] : ['className' => CadFornecedoresTable::class];
        $this->CadFornecedores = $this->getTableLocator()->get('CadFornecedores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CadFornecedores);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CadFornecedoresTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CadFornecedoresTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
