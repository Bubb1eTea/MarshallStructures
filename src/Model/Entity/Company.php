<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Company Entity
 *
 * @property int $id
 * @property string $companyname
 * @property string|null $type
 *
 * @property \App\Model\Entity\Associate[] $associates
 * @property \App\Model\Entity\Client[] $clients
 */
class Company extends Entity
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
        'companyname' => true,
        'type' => true,
        'associates' => true,
        'clients' => true,
    ];
}
