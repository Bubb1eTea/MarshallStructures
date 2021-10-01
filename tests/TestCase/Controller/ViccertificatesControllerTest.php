<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\ViccertificatesController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\ViccertificatesController Test Case
 *
 * @uses \App\Controller\ViccertificatesController
 */
class ViccertificatesControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Viccertificates',
        'app.Projects',
        'app.Companys',
        'app.Documentsproduceds',
        'app.Documentscertifieds',
        'app.Designstandards',
        'app.DesignstandardsViccertificates',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\ViccertificatesController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\ViccertificatesController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\ViccertificatesController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\ViccertificatesController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\ViccertificatesController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
