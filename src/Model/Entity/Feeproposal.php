<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Feeproposal Entity
 *
 * @property int $id
 * @property string|null $proposaldesc
 * @property \Cake\I18n\FrozenTime $datecreated
 * @property \Cake\I18n\FrozenTime $lastmodified
 * @property string|null $fee
 * @property string|null $disbursement
 * @property string|null $total
 * @property int|null $project_id
 *
 * @property \App\Model\Entity\Project $project
 */
class Feeproposal extends Entity
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
        'proposaldesc' => true,
        'datecreated' => true,
        'lastmodified' => true,
        'fee' => true,
        'disbursement' => true,
        'total' => true,
        'project_id' => true,
        'project' => true,
    ];
}
