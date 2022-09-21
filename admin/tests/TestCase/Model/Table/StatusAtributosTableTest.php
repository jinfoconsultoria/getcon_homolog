<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatusAtributosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatusAtributosTable Test Case
 */
class StatusAtributosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StatusAtributosTable
     */
    protected $StatusAtributos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
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
        $config = $this->getTableLocator()->exists('StatusAtributos') ? [] : ['className' => StatusAtributosTable::class];
        $this->StatusAtributos = $this->getTableLocator()->get('StatusAtributos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->StatusAtributos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\StatusAtributosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
