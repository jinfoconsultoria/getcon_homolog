<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContatosAtributosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContatosAtributosTable Test Case
 */
class ContatosAtributosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ContatosAtributosTable
     */
    protected $ContatosAtributos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ContatosAtributos',
        'app.StatusAtributos',
        'app.TiposcontatosAtributos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ContatosAtributos') ? [] : ['className' => ContatosAtributosTable::class];
        $this->ContatosAtributos = $this->getTableLocator()->get('ContatosAtributos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ContatosAtributos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ContatosAtributosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ContatosAtributosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
