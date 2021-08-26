<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Invoice Entity
 *
 * @property int $id
 * @property int|null $feeproposal_id
 * @property \Cake\I18n\FrozenTime $datecreated
 * @property string|null $invdesc
 * @property int|null $completepercentage
 * @property string|null $subtotal
 * @property string|null $saletax
 * @property string|null $totalamount
 * @property int|null $paywithinday
 *
 * @property \App\Model\Entity\Project $project
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
        'feeproposal_id' => true,
        'datecreated' => true,
        'invdesc' => true,
        'completepercentage' => true,
        'subtotal' => true,
        'saletax' => true,
        'totalamount' => true,
        'paywithinday' => true,
        'project' => true,
    ];
}
