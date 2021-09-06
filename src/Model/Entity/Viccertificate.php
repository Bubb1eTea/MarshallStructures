<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Viccertificate Entity
 *
 * @property int $id
 * @property int|null $project_id
 * @property int|null $company_id
 * @property \Cake\I18n\FrozenTime $lastmodified
 * @property string|null $buildingtype
 * @property int|null $numberofstorey
 * @property int|null $riseinstory
 * @property int|null $effectiveheight
 * @property string|null $constructiontype
 * @property string|null $buildingclass
 * @property string|null $workrelatingto
 * @property string|null $drawingsproducedby
 * @property int|null $documentsproduced_id
 * @property int|null $documentscertified_id
 * @property string|null $performancereq
 * @property string|null $performancesolution
 * @property string|null $prepared
 * @property \Cake\I18n\FrozenDate|null $dateofissue
 *
 * @property \App\Model\Entity\Project $project
 * @property \App\Model\Entity\Company $company
 * @property \App\Model\Entity\Documentsproduced $documentsproduced
 * @property \App\Model\Entity\Documentscertified $documentscertified
 * @property \App\Model\Entity\Designstandard[] $designstandards
 */
class Viccertificate extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'project_id' => true,
        'company_id' => true,
        'lastmodified' => true,
        'buildingtype' => true,
        'numberofstorey' => true,
        'riseinstory' => true,
        'effectiveheight' => true,
        'constructiontype' => true,
        'buildingclass' => true,
        'workrelatingto' => true,
        'drawingsproducedby' => true,
        'documentsproduced_id' => true,
        'documentscertified_id' => true,
        'performancereq' => true,
        'performancesolution' => true,
        'prepared' => true,
        'dateofissue' => true,
        'project' => true,
        'company' => true,
        'documentsproduced' => true,
        'documentscertified' => true,
        'designstandards' => true,
    ];
}
