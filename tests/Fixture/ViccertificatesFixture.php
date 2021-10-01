<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ViccertificatesFixture
 */
class ViccertificatesFixture extends TestFixture
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
        'company_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'lastmodified' => ['type' => 'timestamp', 'length' => null, 'precision' => null, 'null' => false, 'default' => 'current_timestamp()', 'comment' => ''],
        'buildingtype' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'numberofstorey' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'riseinstory' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'effectiveheight' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'constructiontype' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'buildingclass' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'workrelatingto' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'drawingsproducedby' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'documentsproduced_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'documentscertified_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'performancereq' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'performancesolution' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'prepared' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'dateofissue' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'FK_PROJECTS_VICCERTIFICATES' => ['type' => 'index', 'columns' => ['project_id'], 'length' => []],
            'FK_COMPANYS_VICCERTIFICATES' => ['type' => 'index', 'columns' => ['company_id'], 'length' => []],
            'FK_DOCUMENTSPRODUCED_VICCERTIFICATES' => ['type' => 'index', 'columns' => ['documentsproduced_id'], 'length' => []],
            'FK_DOCUMENTSCERTIFIED_VICCERTIFICATES' => ['type' => 'index', 'columns' => ['documentscertified_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'FK_PROJECTS_VICCERTIFICATES' => ['type' => 'foreign', 'columns' => ['project_id'], 'references' => ['projects', 'id'], 'update' => 'restrict', 'delete' => 'setNull', 'length' => []],
            'FK_DOCUMENTSPRODUCED_VICCERTIFICATES' => ['type' => 'foreign', 'columns' => ['documentsproduced_id'], 'references' => ['documentsproduceds', 'id'], 'update' => 'restrict', 'delete' => 'setNull', 'length' => []],
            'FK_DOCUMENTSCERTIFIED_VICCERTIFICATES' => ['type' => 'foreign', 'columns' => ['documentscertified_id'], 'references' => ['documentscertifieds', 'id'], 'update' => 'restrict', 'delete' => 'setNull', 'length' => []],
            'FK_COMPANYS_VICCERTIFICATES' => ['type' => 'foreign', 'columns' => ['company_id'], 'references' => ['companys', 'id'], 'update' => 'restrict', 'delete' => 'setNull', 'length' => []],
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
                'company_id' => 1,
                'lastmodified' => 1633068659,
                'buildingtype' => 'Lorem ipsum dolor sit amet',
                'numberofstorey' => 1,
                'riseinstory' => 1,
                'effectiveheight' => 1,
                'constructiontype' => 'Lorem ip',
                'buildingclass' => 'Lorem ipsum dolor sit amet',
                'workrelatingto' => 'Lorem ipsum dolor sit amet',
                'drawingsproducedby' => 'Lorem ipsum dolor sit amet',
                'documentsproduced_id' => 1,
                'documentscertified_id' => 1,
                'performancereq' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'performancesolution' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'prepared' => 'Lorem ipsum dolor sit amet',
                'dateofissue' => '2021-10-01',
            ],
        ];
        parent::init();
    }
}
