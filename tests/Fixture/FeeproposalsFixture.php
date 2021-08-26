<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FeeproposalsFixture
 */
class FeeproposalsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'project_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'guarantor' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'scopeofservice_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'documentsprovided_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fee' => ['type' => 'decimal', 'length' => 12, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'hourlyrate' => ['type' => 'decimal', 'length' => 12, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'disbursement' => ['type' => 'decimal', 'length' => 12, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'total' => ['type' => 'decimal', 'length' => 12, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'totalGST' => ['type' => 'decimal', 'length' => 12, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'grandtotal' => ['type' => 'decimal', 'length' => 12, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'feebrokendown_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'paywithindays' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'datecreated' => ['type' => 'timestamp', 'length' => null, 'precision' => null, 'null' => false, 'default' => 'current_timestamp()', 'comment' => ''],
        'lastmodified' => ['type' => 'timestamp', 'length' => null, 'precision' => null, 'null' => false, 'default' => 'current_timestamp()', 'comment' => ''],
        '_indexes' => [
            'FK_PROJECTS_FEEPROPOSALS' => ['type' => 'index', 'columns' => ['project_id'], 'length' => []],
            'FK_SCOPEOFSERVICES_FEEPROPOSALS' => ['type' => 'index', 'columns' => ['scopeofservice_id'], 'length' => []],
            'FK_FEEBROKENDOWNS_FEEPROPOSALS' => ['type' => 'index', 'columns' => ['feebrokendown_id'], 'length' => []],
            'FK_DOCUMENTSPROVIDEDS_FEEPROPOSALS' => ['type' => 'index', 'columns' => ['documentsprovided_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'FK_SCOPEOFSERVICES_FEEPROPOSALS' => ['type' => 'foreign', 'columns' => ['scopeofservice_id'], 'references' => ['scopeofservices', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_PROJECTS_FEEPROPOSALS' => ['type' => 'foreign', 'columns' => ['project_id'], 'references' => ['projects', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_FEEBROKENDOWNS_FEEPROPOSALS' => ['type' => 'foreign', 'columns' => ['feebrokendown_id'], 'references' => ['feebrokendowns', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_DOCUMENTSPROVIDEDS_FEEPROPOSALS' => ['type' => 'foreign', 'columns' => ['documentsprovided_id'], 'references' => ['documentsprovideds', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'project_id' => 1,
                'guarantor' => 1,
                'scopeofservice_id' => 1,
                'documentsprovided_id' => 1,
                'fee' => 1.5,
                'hourlyrate' => 1.5,
                'disbursement' => 1.5,
                'total' => 1.5,
                'totalGST' => 1.5,
                'grandtotal' => 1.5,
                'feebrokendown_id' => 1,
                'paywithindays' => 1,
                'datecreated' => 1629984723,
                'lastmodified' => 1629984723,
            ],
        ];
        parent::init();
    }
}
