<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ticket Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $vehicle_id
 * @property int $parklot_id
 * @property string $type
 * @property int $value
 * @property int $total_value
 * @property string $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Vehicle $vehicle
 * @property \App\Model\Entity\Parklot $parklot
 */
class Ticket extends Entity
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
        'user_id' => true,
        'vehicle_id' => true,
        'parklot_id' => true,
        'type' => true,
        'value' => true,
        'total_value' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'vehicle' => true,
        'parklot' => true
    ];
}
