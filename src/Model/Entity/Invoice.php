<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Invoice Entity
 *
 * @property int $id
 * @property int $project_id
 * @property int $feeproposal_id
 * @property \Cake\I18n\FrozenTime $datecreated
 * @property string|null $invdesc
 * @property string $completedpercentage
 * @property string $total
 * @property string $totalgst
 * @property string $grandtotal
 * @property int $paywithinday
 *
 * @property \App\Model\Entity\Project $project
 * @property \App\Model\Entity\Feeproposal $feeproposal
 */
class Invoice extends Entity
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
        'feeproposal_id' => true,
        'datecreated' => true,
        'invdesc' => true,
        'completedpercentage' => true,
        'total' => true,
        'totalgst' => true,
        'grandtotal' => true,
        'paywithinday' => true,
        'project' => true,
        'feeproposal' => true,
    ];
}
