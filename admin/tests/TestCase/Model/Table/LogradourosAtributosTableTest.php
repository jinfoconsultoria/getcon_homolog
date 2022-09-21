<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LogradourosAtributosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LogradourosAtributosTable Test Case
 */
class LogradourosAtributosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LogradourosAtributosTable
     */
    protected $LogradourosAtributos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.LogradourosAtributos',
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
        $config = $this->getTableLocator()->exists('LogradourosAtributos') ? [] : ['className' => LogradourosAtributosTable::class];
        $this->LogradourosAtributos = $this->getTableLocator()->get('LogradourosAtributos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->LogradourosAtributos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LogradourosAtributosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
