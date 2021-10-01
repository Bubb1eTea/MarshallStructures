<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViccertificatesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViccertificatesTable Test Case
 */
class ViccertificatesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViccertificatesTable
     */
    protected $Viccertificates;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Viccertificates',
        'app.Projects',
        'app.Companys',
        'app.Documentscertifieds',
        'app.Documentsproduceds',
        'app.Designstandards',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Viccertificates') ? [] : ['className' => ViccertificatesTable::class];
        $this->Viccertificates = $this->getTableLocator()->get('Viccertificates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Viccertificates);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ViccertificatesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ViccertificatesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
