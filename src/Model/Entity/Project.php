<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Project Entity
 *
 * @property int $id
 * @property string $msnumber
 * @property string $projectname
 * @property string $streetname
 * @property string $suburb
 * @property string $postcode
 * @property string $state
 * @property string $phase
 * @property string $projectdesc
 * @property \Cake\I18n\FrozenDate|null $duedate
 * @property int|null $client_id
 *
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Associate[] $associates
 */
class Project extends Entity
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
        'msnumber' => true,
        'projectname' => true,
        'streetname' => true,
        'suburb' => true,
        'postcode' => true,
        'state' => true,
        'phase' => true,
        'projectdesc' => true,
        'duedate' => true,
        'client_id' => true,
        'client' => true,
        'associates' => true,
    ];
}
