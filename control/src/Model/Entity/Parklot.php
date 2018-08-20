<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Parklot Entity
 *
 * @property int $id
 * @property string $type
 * @property string $name
 * @property string $lat
 * @property string $lng
 * @property string $description
 * @property int $value
 * @property string $max_time
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Log[] $logs
 * @property \App\Model\Entity\Ticket[] $tickets
 */
class Parklot extends Entity
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
        'type' => true,
        'name' => true,
        'lat' => true,
        'lng' => true,
        'description' => true,
        'value' => true,
        'max_time' => true,
        'created' => true,
        'modified' => true,
        'logs' => true,
        'tickets' => true
    ];
}
