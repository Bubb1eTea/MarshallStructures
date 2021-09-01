<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Designstandard Entity
 *
 * @property int $id
 * @property string|null $designcode
 * @property string|null $designdesc
 *
 * @property \App\Model\Entity\Ntcertificate[] $ntcertificates
 */
class Designstandard extends Entity
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
        'designcode' => true,
        'designdesc' => true,
        'ntcertificates' => true,
    ];
}
