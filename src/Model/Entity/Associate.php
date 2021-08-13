<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Associate Entity
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $phonenumber
 * @property string|null $position
 * @property string|null $role
 * @property int|null $company_id
 *
 * @property \App\Model\Entity\Company $company
 * @property \App\Model\Entity\Project[] $projects
 */
class Associate extends Entity
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
        'firstname' => true,
        'lastname' => true,
        'email' => true,
        'phonenumber' => true,
        'position' => true,
        'role' => true,
        'company_id' => true,
        'company' => true,
        'projects' => true,
    ];

    protected function _getFullName() {
        return $this->firstname . ' ' . $this->lastname;
    }
}
