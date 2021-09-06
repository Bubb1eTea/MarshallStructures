<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DocumentsproducedsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DocumentsproducedsTable Test Case
 */
class DocumentsproducedsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DocumentsproducedsTable
     */
    protected $Documentsproduceds;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Documentsproduceds',
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
        $config = $this->getTableLocator()->exists('Documentsproduceds') ? [] : ['className' => DocumentsproducedsTable::class];
        $this->Documentsproduceds = $this->getTableLocator()->get('Documentsproduceds', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Documentsproduceds);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DocumentsproducedsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
