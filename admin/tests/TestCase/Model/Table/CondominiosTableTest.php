<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CondominiosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CondominiosTable Test Case
 */
class CondominiosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CondominiosTable
     */
    protected $Condominios;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Condominios',
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
        $config = $this->getTableLocator()->exists('Condominios') ? [] : ['className' => CondominiosTable::class];
        $this->Condominios = $this->getTableLocator()->get('Condominios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Condominios);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CondominiosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CondominiosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
