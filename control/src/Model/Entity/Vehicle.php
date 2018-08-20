<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vehicle Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $type
 * @property string $name
 * @property int $plate
 * @property string $model
 * @property string $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Log[] $logs
 * @property \App\Model\Entity\Ticket[] $tickets
 */
class Vehicle extends Entity
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
        'type' => true,
        'name' => true,
        'plate' => true,
        'model' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'logs' => true,
        'tickets' => true
    ];
}
