<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DesignstandardsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DesignstandardsTable Test Case
 */
class DesignstandardsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DesignstandardsTable
     */
    protected $Designstandards;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Designstandards',
        'app.Ntcertificates',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Designstandards') ? [] : ['className' => DesignstandardsTable::class];
        $this->Designstandards = $this->getTableLocator()->get('Designstandards', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Designstandards);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DesignstandardsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
