<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Colours Model
 *
 * @property \Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Colour get($primaryKey, $options = [])
 * @method \App\Model\Entity\Colour newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Colour[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Colour|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Colour patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Colour[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Colour findOrCreate($search, callable $callback = null, $options = [])
 */
class ColoursTable extends Table
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

        $this->setTable('colours');
        $this->setDisplayField('colour_name');
        $this->setPrimaryKey('id');

        $this->hasMany('Users', [
            'foreignKey' => 'colour_id'
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
            ->requirePresence('colour_name', 'create')
            ->notEmpty('colour_name');

        return $validator;
    }
}
