<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Parklots Model
 *
 * @property \App\Model\Table\LogsTable|\Cake\ORM\Association\HasMany $Logs
 * @property \App\Model\Table\TicketsTable|\Cake\ORM\Association\HasMany $Tickets
 *
 * @method \App\Model\Entity\Parklot get($primaryKey, $options = [])
 * @method \App\Model\Entity\Parklot newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Parklot[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Parklot|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Parklot patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Parklot[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Parklot findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ParklotsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('parklots');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Logs', [
            'foreignKey' => 'parklot_id'
        ]);
        $this->hasMany('Tickets', [
            'foreignKey' => 'parklot_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('type')
            ->maxLength('type', 50)
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        $validator
            ->scalar('name')
            ->maxLength('name', 256)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('lat')
            ->maxLength('lat', 256)
            ->requirePresence('lat', 'create')
            ->notEmpty('lat');

        $validator
            ->scalar('lng')
            ->maxLength('lng', 256)
            ->requirePresence('lng', 'create')
            ->notEmpty('lng');

        $validator
            ->scalar('description')
            ->maxLength('description', 256)
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->integer('value')
            ->requirePresence('value', 'create')
            ->notEmpty('value');

        $validator
            ->scalar('max_time')
            ->maxLength('max_time', 255)
            ->requirePresence('max_time', 'create')
            ->notEmpty('max_time');

        return $validator;
    }
}
