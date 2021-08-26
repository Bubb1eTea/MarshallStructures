<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DocumentsprovidedsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DocumentsprovidedsTable Test Case
 */
class DocumentsprovidedsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DocumentsprovidedsTable
     */
    protected $Documentsprovideds;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Documentsprovideds',
        'app.Feeproposals',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Documentsprovideds') ? [] : ['className' => DocumentsprovidedsTable::class];
        $this->Documentsprovideds = $this->getTableLocator()->get('Documentsprovideds', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Documentsprovideds);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DocumentsprovidedsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
