<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DesignstandardsViccertificate Entity
 *
 * @property int $id
 * @property int|null $viccertificate_id
 * @property int|null $designstandard_id
 *
 * @property \App\Model\Entity\Viccertificate $viccertificate
 * @property \App\Model\Entity\Designstandard $designstandard
 */
class DesignstandardsViccertificate extends Entity
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
        'viccertificate_id' => true,
        'designstandard_id' => true,
        'viccertificate' => true,
        'designstandard' => true,
    ];
}
