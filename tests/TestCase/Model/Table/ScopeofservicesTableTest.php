<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ScopeofservicesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ScopeofservicesTable Test Case
 */
class ScopeofservicesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ScopeofservicesTable
     */
    protected $Scopeofservices;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Scopeofservices',
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
        $config = $this->getTableLocator()->exists('Scopeofservices') ? [] : ['className' => ScopeofservicesTable::class];
        $this->Scopeofservices = $this->getTableLocator()->get('Scopeofservices', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Scopeofservices);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ScopeofservicesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
