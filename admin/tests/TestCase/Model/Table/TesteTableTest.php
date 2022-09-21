<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TesteTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TesteTable Test Case
 */
class TesteTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TesteTable
     */
    protected $Teste;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Teste',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Teste') ? [] : ['className' => TesteTable::class];
        $this->Teste = $this->getTableLocator()->get('Teste', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Teste);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TesteTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
