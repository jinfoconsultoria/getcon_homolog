<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CondominiosAtributosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CondominiosAtributosTable Test Case
 */
class CondominiosAtributosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CondominiosAtributosTable
     */
    protected $CondominiosAtributos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CondominiosAtributos',
        'app.ContatosAtributos',
        'app.StatusAtributos',
        'app.EnderecosAtributos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CondominiosAtributos') ? [] : ['className' => CondominiosAtributosTable::class];
        $this->CondominiosAtributos = $this->getTableLocator()->get('CondominiosAtributos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CondominiosAtributos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CondominiosAtributosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CondominiosAtributosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
