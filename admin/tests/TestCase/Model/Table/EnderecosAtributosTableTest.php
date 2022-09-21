<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EnderecosAtributosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EnderecosAtributosTable Test Case
 */
class EnderecosAtributosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EnderecosAtributosTable
     */
    protected $EnderecosAtributos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.EnderecosAtributos',
        'app.LogradourosAtributos',
        'app.StatusAtributos',
        'app.CondominiosAtributos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('EnderecosAtributos') ? [] : ['className' => EnderecosAtributosTable::class];
        $this->EnderecosAtributos = $this->getTableLocator()->get('EnderecosAtributos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->EnderecosAtributos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EnderecosAtributosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\EnderecosAtributosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
