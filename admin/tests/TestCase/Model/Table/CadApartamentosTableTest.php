<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CadApartamentosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CadApartamentosTable Test Case
 */
class CadApartamentosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CadApartamentosTable
     */
    protected $CadApartamentos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CadApartamentos',
        'app.CadBlocos',
        'app.CadServicos',
        'app.CadUsuarios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CadApartamentos') ? [] : ['className' => CadApartamentosTable::class];
        $this->CadApartamentos = $this->getTableLocator()->get('CadApartamentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CadApartamentos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CadApartamentosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CadApartamentosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
