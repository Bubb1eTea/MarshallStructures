<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Feeproposal Entity
 *
 * @property int $id
 * @property int|null $project_id
 * @property bool $guarantor
 * @property int $scopeofservice_id
 * @property int $documentsprovided_id
 * @property string|null $fee
 * @property string|null $hourlyrate
 * @property string|null $disbursement
 * @property string|null $total
 * @property string|null $totalGST
 * @property string|null $grandtotal
 * @property int|null $feebrokendown_id
 * @property int|null $paywithindays
 * @property \Cake\I18n\FrozenTime $datecreated
 * @property \Cake\I18n\FrozenTime $lastmodified
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
        'project_id' => true,
        'guarantor' => true,
        'scopeofservice_id' => true,
        'documentsprovided_id' => true,
        'fee' => true,
        'hourlyrate' => true,
        'disbursement' => true,
        'total' => true,
        'totalGST' => true,
        'grandtotal' => true,
        'feebrokendown_id' => true,
        'paywithindays' => true,
        'datecreated' => true,
        'lastmodified' => true,
        'project' => true,
    ];
}
