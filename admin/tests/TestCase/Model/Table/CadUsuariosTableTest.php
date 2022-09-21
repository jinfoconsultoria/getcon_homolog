<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CadUsuariosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CadUsuariosTable Test Case
 */
class CadUsuariosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CadUsuariosTable
     */
    protected $CadUsuarios;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CadUsuarios',
        'app.CadApartamentos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CadUsuarios') ? [] : ['className' => CadUsuariosTable::class];
        $this->CadUsuarios = $this->getTableLocator()->get('CadUsuarios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CadUsuarios);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CadUsuariosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CadUsuariosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
