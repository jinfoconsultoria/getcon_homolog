<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TiposcontatosAtributosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TiposcontatosAtributosTable Test Case
 */
class TiposcontatosAtributosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TiposcontatosAtributosTable
     */
    protected $TiposcontatosAtributos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.TiposcontatosAtributos',
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
        $config = $this->getTableLocator()->exists('TiposcontatosAtributos') ? [] : ['className' => TiposcontatosAtributosTable::class];
        $this->TiposcontatosAtributos = $this->getTableLocator()->get('TiposcontatosAtributos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->TiposcontatosAtributos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TiposcontatosAtributosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\TiposcontatosAtributosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
