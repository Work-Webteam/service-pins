<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RegistrationPeriod Entity
 *
 * @property int $id
 * @property int|null $award_year
 * @property \Cake\I18n\FrozenTime|null $open_registration
 * @property \Cake\I18n\FrozenTime|null $close_registration
 */
class RegistrationPeriod extends Entity
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
        'award_year' => true,
        'open_registration' => true,
        'close_registration' => true,
    ];
}
