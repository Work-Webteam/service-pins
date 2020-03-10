<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ministry Entity
 *
 * @property int $id
 * @property string $name
 * @property string|null $initials
 * @property string|null $retroactive
 * @property string|null $shipping_method
 * @property string|null $bulk_shipping_address
 * @property string|null $contact_name
 * @property string|null $contact_email
 *
 * @property \App\Model\Entity\Registration[] $registrations
 * @property \App\Model\Entity\UserRole[] $user_roles
 */
class Ministry extends Entity
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
        'name' => true,
        'initials' => true,
        'retroactive' => true,
        'shipping_method' => true,
        'bulk_shipping_address' => true,
        'contact_name' => true,
        'contact_email' => true,
        'registrations' => true,
        'user_roles' => true,
    ];
}
