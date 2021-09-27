<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Feeproposal Entity
 *
 * @property int $id
 * @property int $project_id
 * @property string|null $guarantor
 * @property string $scopeofservice
 * @property string $documentsprovided
 * @property string|null $fixedfee
 * @property string|null $hourlyrate
 * @property string|null $disbursement
 * @property string $total
 * @property string $totalgst
 * @property string $grandtotal
 * @property int $paywithinday
 * @property int $feeproposalnum

 *
 * @property \App\Model\Entity\Project $project
 * @property \App\Model\Entity\Invoice[] $invoices
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
        'datecreated' => true,
        'guarantor' => true,
        'scopeofservice' => true,
        'documentsprovided' => true,
        'fixedfee' => true,
        'hourlyrate' => true,
        'disbursement' => true,
        'total' => true,
        'totalgst' => true,
        'grandtotal' => true,
        'paywithinday' => true,
        'project' => true,
        'invoices' => true,
        'feeproposalnum'=>true
    ];
}
