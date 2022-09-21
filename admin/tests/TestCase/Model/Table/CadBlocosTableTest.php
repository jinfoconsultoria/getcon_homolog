<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CadBlocosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CadBlocosTable Test Case
 */
class CadBlocosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CadBlocosTable
     */
    protected $CadBlocos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CadBlocos',
        'app.CadCondominios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CadBlocos') ? [] : ['className' => CadBlocosTable::class];
        $this->CadBlocos = $this->getTableLocator()->get('CadBlocos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CadBlocos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CadBlocosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CadBlocosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
