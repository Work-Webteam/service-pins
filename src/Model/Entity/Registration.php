<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Registration Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $user_idir
 * @property string|null $user_guid
 * @property int|null $employee_number
 * @property string|null $first_name
 * @property string|null $last_name
 * @property int|null $ministry_id
 * @property string|null $department
 * @property int|null $milestone
 * @property string|null $retro_years
 * @property string|null $admin_notes
 * @property string|null $office_careof
 * @property string|null $office_address
 * @property string|null $office_suite
 * @property int|null $office_city_id
 * @property string|null $office_province
 * @property string|null $office_postal_code
 * @property string|null $office_po_box
 * @property string|null $work_phone
 * @property string|null $work_extension
 * @property string|null $preferred_email
 * @property string|null $supervisor_first_name
 * @property string|null $supervisor_last_name
 * @property string|null $supervisor_careof
 * @property string|null $supervisor_address
 * @property string|null $supervisor_suite
 * @property int|null $supervisor_city_id
 * @property string|null $supervisor_province
 * @property string|null $supervisor_postal_code
 * @property string|null $supervisor_email
 * @property string|null $supervisor_work_phone
 * @property string|null $supervisor_work_extension
 *
 * @property \App\Model\Entity\Ministry $ministry
 * @property \App\Model\Entity\City $city
 */
class Registration extends Entity
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
        'created' => true,
        'modified' => true,
        'user_idir' => true,
        'user_guid' => true,
        'employee_number' => true,
        'first_name' => true,
        'last_name' => true,
        'ministry_id' => true,
        'department' => true,
        'milestone' => true,
        'retro_years' => true,
        'admin_notes' => true,
        'office_careof' => true,
        'office_address' => true,
        'office_suite' => true,
        'office_city_id' => true,
        'office_province' => true,
        'office_postal_code' => true,
        'office_po_box' => true,
        'work_phone' => true,
        'work_extension' => true,
        'preferred_email' => true,
        'supervisor_first_name' => true,
        'supervisor_last_name' => true,
        'supervisor_careof' => true,
        'supervisor_address' => true,
        'supervisor_suite' => true,
        'supervisor_city_id' => true,
        'supervisor_province' => true,
        'supervisor_postal_code' => true,
        'supervisor_email' => true,
        'supervisor_work_phone' => true,
        'supervisor_work_extension' => true,
        'ministry' => true,
        'city' => true,
    ];
}
