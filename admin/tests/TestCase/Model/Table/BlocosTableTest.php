<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BlocosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BlocosTable Test Case
 */
class BlocosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BlocosTable
     */
    protected $Blocos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Blocos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Blocos') ? [] : ['className' => BlocosTable::class];
        $this->Blocos = $this->getTableLocator()->get('Blocos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Blocos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BlocosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
