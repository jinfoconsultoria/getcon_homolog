<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CadServicosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CadServicosTable Test Case
 */
class CadServicosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CadServicosTable
     */
    protected $CadServicos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CadServicos',
        'app.CadFornecedores',
        'app.CadApartamentos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CadServicos') ? [] : ['className' => CadServicosTable::class];
        $this->CadServicos = $this->getTableLocator()->get('CadServicos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CadServicos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CadServicosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CadServicosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
