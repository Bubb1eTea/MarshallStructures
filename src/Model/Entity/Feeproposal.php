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
 * @property int $service_id
 * @property int $document_id
 * @property string|null $fee
 * @property string|null $hourlyrate
 * @property string|null $disbursement
 * @property string|null $total
 * @property string|null $totalGST
 * @property string|null $grandtotal
 * @property int|null $feebrokendown_id
 * @property int|null $paywithinday
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
        'service_id' => true,
        'document_id' => true,
        'fee' => true,
        'hourlyrate' => true,
        'disbursement' => true,
        'total' => true,
        'totalGST' => true,
        'grandtotal' => true,
        'feebrokendown_id' => true,
        'paywithinday' => true,
        'datecreated' => true,
        'lastmodified' => true,
        'project' => true,
    ];
}
