<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\CondominiosAtributosController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\CondominiosAtributosController Test Case
 *
 * @uses \App\Controller\CondominiosAtributosController
 */
class CondominiosAtributosControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CondominiosAtributos',
        'app.ContatosAtributos',
        'app.StatusAtributos',
        'app.EnderecosAtributos',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\CondominiosAtributosController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\CondominiosAtributosController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\CondominiosAtributosController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\CondominiosAtributosController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\CondominiosAtributosController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
