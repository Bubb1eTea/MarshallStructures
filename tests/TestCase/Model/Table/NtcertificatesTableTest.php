<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NtcertificatesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NtcertificatesTable Test Case
 */
class NtcertificatesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NtcertificatesTable
     */
    protected $Ntcertificates;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Ntcertificates',
        'app.Projects',
        'app.Designstandards',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Ntcertificates') ? [] : ['className' => NtcertificatesTable::class];
        $this->Ntcertificates = $this->getTableLocator()->get('Ntcertificates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Ntcertificates);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\NtcertificatesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\NtcertificatesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
