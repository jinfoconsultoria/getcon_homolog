<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BlocosAtributosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BlocosAtributosTable Test Case
 */
class BlocosAtributosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BlocosAtributosTable
     */
    protected $BlocosAtributos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.BlocosAtributos',
        'app.StatusAtributos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('BlocosAtributos') ? [] : ['className' => BlocosAtributosTable::class];
        $this->BlocosAtributos = $this->getTableLocator()->get('BlocosAtributos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->BlocosAtributos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BlocosAtributosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\BlocosAtributosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
