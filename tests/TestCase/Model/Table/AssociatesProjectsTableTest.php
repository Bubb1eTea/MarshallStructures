<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AssociatesProjectsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AssociatesProjectsTable Test Case
 */
class AssociatesProjectsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AssociatesProjectsTable
     */
    protected $AssociatesProjects;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.AssociatesProjects',
        'app.Associates',
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
        $config = $this->getTableLocator()->exists('AssociatesProjects') ? [] : ['className' => AssociatesProjectsTable::class];
        $this->AssociatesProjects = $this->getTableLocator()->get('AssociatesProjects', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->AssociatesProjects);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AssociatesProjectsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\AssociatesProjectsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
