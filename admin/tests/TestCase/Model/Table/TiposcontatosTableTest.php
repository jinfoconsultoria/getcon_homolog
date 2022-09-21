<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TiposContatosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TiposContatosTable Test Case
 */
class TiposContatosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TiposContatosTable
     */
    protected $TiposContatos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.TiposContatos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('TiposContatos') ? [] : ['className' => TiposContatosTable::class];
        $this->TiposContatos = $this->getTableLocator()->get('TiposContatos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->TiposContatos);

        parent::tearDown();
    }
}
