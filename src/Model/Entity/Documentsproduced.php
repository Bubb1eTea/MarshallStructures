<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Documentsproduced Entity
 *
 * @property int $id
 * @property int $documentno
 * @property \Cake\I18n\FrozenDate $documentdate
 * @property int $revision
 * @property int $viccertificate_id
 *
 * @property \App\Model\Entity\Viccertificate $viccertificate
 */
class Documentsproduced extends Entity
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
        'revision' => true,
        'viccertificate_id' => true,
        'viccertificate' => true,
    ];
}
