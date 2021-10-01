<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Documentscertified Entity
 *
 * @property int $id
 * @property int $documentno
 * @property \Cake\I18n\FrozenDate $documentdate
 * @property string|null $type
 * @property int|null $numberofpage
 * @property string|null $preparedby
 * @property int $viccertificate_id
 *
 * @property \App\Model\Entity\Viccertificate $viccertificate
 */
class Documentscertified extends Entity
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
        'documentno' => true,
        'documentdate' => true,
        'type' => true,
        'numberofpage' => true,
        'preparedby' => true,
        'viccertificate_id' => true,
        'viccertificate' => true,
    ];
}
