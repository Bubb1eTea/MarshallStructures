<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ntcertificate Entity
 *
 * @property int $id
 * @property int $project_id
 * @property \Cake\I18n\FrozenTime $lastmodified
 * @property string|null $lotportionnum
 * @property string|null $location
 * @property string|null $townhundred
 * @property string|null $workdesc
 * @property string|null $drawingno
 * @property string|null $other
 * @property string|null $buildingclass
 * @property string|null $constructiontype
 * @property string|null $buildingimportancelevel
 * @property string|null $windexceedance
 * @property string|null $region
 * @property string|null $windspeed
 * @property string|null $terraincat
 * @property string|null $referenceheight
 * @property string|null $mz
 * @property string|null $ms
 * @property string|null $mt
 * @property string|null $windspeedrefheight
 * @property string|null $intpressure
 * @property string|null $expressurewall
 * @property string|null $expressureroof
 * @property string|null $netpressureroofwall
 * @property string|null $imposedloadfloorroof
 * @property string|null $earthquakecat
 * @property string|null $earthexceedance
 * @property string|null $importancelevel
 * @property string|null $hazardfactor
 * @property string|null $subsoilclass
 * @property string|null $bearingcap
 * @property string|null $siteclass
 * @property string|null $exclusion
 * @property string|null $comment
 * @property string|null $compname
 * @property string|null $compntregnum
 * @property string|null $name
 * @property string|null $ntregnum
 * @property \Cake\I18n\FrozenDate|null $date
 *
 * @property \App\Model\Entity\Project $project
 * @property \App\Model\Entity\Designstandard[] $designstandards
 */
class Ntcertificate extends Entity
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
        'lastmodified' => true,
        'lotportionnum' => true,
        'location' => true,
        'townhundred' => true,
        'workdesc' => true,
        'drawingno' => true,
        'other' => true,
        'buildingclass' => true,
        'constructiontype' => true,
        'buildingimportancelevel' => true,
        'windexceedance' => true,
        'region' => true,
        'windspeed' => true,
        'terraincat' => true,
        'referenceheight' => true,
        'mz' => true,
        'ms' => true,
        'mt' => true,
        'windspeedrefheight' => true,
        'intpressure' => true,
        'expressurewall' => true,
        'expressureroof' => true,
        'netpressureroofwall' => true,
        'imposedloadfloorroof' => true,
        'earthquakecat' => true,
        'earthexceedance' => true,
        'importancelevel' => true,
        'hazardfactor' => true,
        'subsoilclass' => true,
        'bearingcap' => true,
        'siteclass' => true,
        'exclusion' => true,
        'comment' => true,
        'compname' => true,
        'compntregnum' => true,
        'name' => true,
        'ntregnum' => true,
        'date' => true,
        'project' => true,
        'designstandards' => true,
    ];
}
