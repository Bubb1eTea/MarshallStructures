<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DocumentscertifiedsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DocumentscertifiedsTable Test Case
 */
class DocumentscertifiedsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DocumentscertifiedsTable
     */
    protected $Documentscertifieds;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Documentscertifieds',
        'app.Viccertificates',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Documentscertifieds') ? [] : ['className' => DocumentscertifiedsTable::class];
        $this->Documentscertifieds = $this->getTableLocator()->get('Documentscertifieds', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Documentscertifieds);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DocumentscertifiedsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\DocumentscertifiedsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
