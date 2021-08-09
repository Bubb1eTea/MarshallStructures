<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClientcompanysTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClientcompanysTable Test Case
 */
class ClientcompanysTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ClientcompanysTable
     */
    protected $Clientcompanys;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Clientcompanys',
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
        $config = $this->getTableLocator()->exists('Clientcompanys') ? [] : ['className' => ClientcompanysTable::class];
        $this->Clientcompanys = $this->getTableLocator()->get('Clientcompanys', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Clientcompanys);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ClientcompanysTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
