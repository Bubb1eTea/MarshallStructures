<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DesignstandardsViccertificatesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DesignstandardsViccertificatesTable Test Case
 */
class DesignstandardsViccertificatesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DesignstandardsViccertificatesTable
     */
    protected $DesignstandardsViccertificates;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.DesignstandardsViccertificates',
        'app.Viccertificates',
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
        $config = $this->getTableLocator()->exists('DesignstandardsViccertificates') ? [] : ['className' => DesignstandardsViccertificatesTable::class];
        $this->DesignstandardsViccertificates = $this->getTableLocator()->get('DesignstandardsViccertificates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->DesignstandardsViccertificates);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DesignstandardsViccertificatesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\DesignstandardsViccertificatesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
