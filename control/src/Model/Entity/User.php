<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property string $type
 * @property string $name
 * @property string $email
 * @property string $cpf
 * @property string $password
 * @property \Cake\I18n\FrozenDate $birthdate
 * @property int $phone
 * @property int $balance
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Log[] $logs
 * @property \App\Model\Entity\Order[] $orders
 * @property \App\Model\Entity\Proceedings[] $proceedings
 * @property \App\Model\Entity\Query[] $queries
 * @property \App\Model\Entity\Ticket[] $tickets
 * @property \App\Model\Entity\Vehicle[] $vehicles
 */
class User extends Entity
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
        '*' => true,
        'id' => false
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($password)
    {
        if (strlen($password) > 0) {
            return $password;
        }
    }

}
