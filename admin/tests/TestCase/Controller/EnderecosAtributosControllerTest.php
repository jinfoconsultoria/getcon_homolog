<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\EnderecosAtributosController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\EnderecosAtributosController Test Case
 *
 * @uses \App\Controller\EnderecosAtributosController
 */
class EnderecosAtributosControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.EnderecosAtributos',
        'app.LogradourosAtributos',
        'app.StatusAtributos',
        'app.CondominiosAtributos',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\EnderecosAtributosController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\EnderecosAtributosController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\EnderecosAtributosController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\EnderecosAtributosController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\EnderecosAtributosController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
