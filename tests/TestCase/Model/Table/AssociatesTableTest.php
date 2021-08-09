<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AssociatesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AssociatesTable Test Case
 */
class AssociatesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AssociatesTable
     */
    protected $Associates;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Associates',
        'app.Associatecompanys',
        'app.Projects',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Associates') ? [] : ['className' => AssociatesTable::class];
        $this->Associates = $this->getTableLocator()->get('Associates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Associates);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AssociatesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\AssociatesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
