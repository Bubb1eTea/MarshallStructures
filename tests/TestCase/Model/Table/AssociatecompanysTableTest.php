<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AssociatecompanysTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AssociatecompanysTable Test Case
 */
class AssociatecompanysTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AssociatecompanysTable
     */
    protected $Associatecompanys;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Associatecompanys',
        'app.Associates',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Associatecompanys') ? [] : ['className' => AssociatecompanysTable::class];
        $this->Associatecompanys = $this->getTableLocator()->get('Associatecompanys', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Associatecompanys);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AssociatecompanysTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
