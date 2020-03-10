<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserRole Entity
 *
 * @property int $id
 * @property string|null $idir
 * @property string|null $guid
 * @property int|null $role_id
 * @property int|null $ministry_id
 *
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Ministry $ministry
 */
class UserRole extends Entity
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
        'idir' => true,
        'guid' => true,
        'role_id' => true,
        'ministry_id' => true,
        'role' => true,
        'ministry' => true,
    ];
}
