<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FeeproposalsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FeeproposalsTable Test Case
 */
class FeeproposalsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FeeproposalsTable
     */
    protected $Feeproposals;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Feeproposals',
        'app.Projects',
        'app.Invoices',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Feeproposals') ? [] : ['className' => FeeproposalsTable::class];
        $this->Feeproposals = $this->getTableLocator()->get('Feeproposals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Feeproposals);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FeeproposalsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\FeeproposalsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
