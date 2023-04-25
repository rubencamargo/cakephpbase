<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Country Entity
 *
 * @property int $id
 * @property int $num_code
 * @property string $iso1_code
 * @property string $name
 * @property string $name_caps
 * @property string|null $iso3_code
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Country extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'num_code' => true,
        'iso1_code' => true,
        'name' => true,
        'name_caps' => true,
        'iso3_code' => true,
        'created' => true,
        'modified' => true,
    ];
}
