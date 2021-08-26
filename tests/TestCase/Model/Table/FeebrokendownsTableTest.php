<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FeebrokendownsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FeebrokendownsTable Test Case
 */
class FeebrokendownsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FeebrokendownsTable
     */
    protected $Feebrokendowns;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Feebrokendowns',
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
        $config = $this->getTableLocator()->exists('Feebrokendowns') ? [] : ['className' => FeebrokendownsTable::class];
        $this->Feebrokendowns = $this->getTableLocator()->get('Feebrokendowns', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Feebrokendowns);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FeebrokendownsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
