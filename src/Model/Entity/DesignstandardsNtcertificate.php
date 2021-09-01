<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DesignstandardsNtcertificate Entity
 *
 * @property int $id
 * @property int|null $ntcertificate_id
 * @property int|null $designstandard_id
 *
 * @property \App\Model\Entity\Ntcertificate $ntcertificate
 * @property \App\Model\Entity\Designstandard $designstandard
 */
class DesignstandardsNtcertificate extends Entity
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
        'ntcertificate_id' => true,
        'designstandard_id' => true,
        'ntcertificate' => true,
        'designstandard' => true,
    ];
}
