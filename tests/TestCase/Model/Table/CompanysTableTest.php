<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompanysTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompanysTable Test Case
 */
class CompanysTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CompanysTable
     */
    protected $Companys;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Companys',
        'app.Associates',
        'app.Clients',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Companys') ? [] : ['className' => CompanysTable::class];
        $this->Companys = $this->getTableLocator()->get('Companys', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Companys);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CompanysTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
