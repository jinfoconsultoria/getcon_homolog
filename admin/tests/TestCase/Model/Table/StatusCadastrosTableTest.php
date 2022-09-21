<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatusCadastrosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatusCadastrosTable Test Case
 */
class StatusCadastrosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StatusCadastrosTable
     */
    protected $StatusCadastros;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.StatusCadastros',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('StatusCadastros') ? [] : ['className' => StatusCadastrosTable::class];
        $this->StatusCadastros = $this->getTableLocator()->get('StatusCadastros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->StatusCadastros);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\StatusCadastrosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
