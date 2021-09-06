<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DesignstandardsViccertificatesFixture
 */
class DesignstandardsViccertificatesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'viccertificate_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'designstandard_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_VICDESIGNSTANDARDS_ID' => ['type' => 'index', 'columns' => ['designstandard_id'], 'length' => []],
            'FK_VICCERTIFICATES_ID' => ['type' => 'index', 'columns' => ['viccertificate_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'FK_VICDESIGNSTANDARDS_ID' => ['type' => 'foreign', 'columns' => ['designstandard_id'], 'references' => ['designstandards', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_VICCERTIFICATES_ID' => ['type' => 'foreign', 'columns' => ['viccertificate_id'], 'references' => ['viccertificates', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'viccertificate_id' => 1,
                'designstandard_id' => 1,
            ],
        ];
        parent::init();
    }
}
