<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AssociatesProject Entity
 *
 * @property int|null $associate_id
 * @property int|null $project_id
 *
 * @property \App\Model\Entity\Associate $associate
 * @property \App\Model\Entity\Project $project
 */
class AssociatesProject extends Entity
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
        'associate_id' => true,
        'project_id' => true,
        'associate' => true,
        'project' => true,
    ];
}
