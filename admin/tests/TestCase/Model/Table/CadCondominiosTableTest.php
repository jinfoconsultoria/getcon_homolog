<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CadCondominiosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CadCondominiosTable Test Case
 */
class CadCondominiosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CadCondominiosTable
     */
    protected $CadCondominios;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CadCondominios',
        'app.CadContatos',
        'app.CadEnderecos',
        'app.CadBlocos',
        'app.CadFornecedores',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CadCondominios') ? [] : ['className' => CadCondominiosTable::class];
        $this->CadCondominios = $this->getTableLocator()->get('CadCondominios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CadCondominios);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CadCondominiosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CadCondominiosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
