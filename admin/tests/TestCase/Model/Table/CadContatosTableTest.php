<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CadContatosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CadContatosTable Test Case
 */
class CadContatosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CadContatosTable
     */
    protected $CadContatos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CadContatos',
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
        $config = $this->getTableLocator()->exists('CadContatos') ? [] : ['className' => CadContatosTable::class];
        $this->CadContatos = $this->getTableLocator()->get('CadContatos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CadContatos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CadContatosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
