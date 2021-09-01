<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DesignstandardsNtcertificatesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DesignstandardsNtcertificatesTable Test Case
 */
class DesignstandardsNtcertificatesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DesignstandardsNtcertificatesTable
     */
    protected $DesignstandardsNtcertificates;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.DesignstandardsNtcertificates',
        'app.Ntcertificates',
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
        $config = $this->getTableLocator()->exists('DesignstandardsNtcertificates') ? [] : ['className' => DesignstandardsNtcertificatesTable::class];
        $this->DesignstandardsNtcertificates = $this->getTableLocator()->get('DesignstandardsNtcertificates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->DesignstandardsNtcertificates);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DesignstandardsNtcertificatesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\DesignstandardsNtcertificatesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
