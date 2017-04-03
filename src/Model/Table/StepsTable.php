<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Steps Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Recipes
 *
 * @method \App\Model\Entity\Step get($primaryKey, $options = [])
 * @method \App\Model\Entity\Step newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Step[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Step|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Step patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Step[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Step findOrCreate($search, callable $callback = null, $options = [])
 */
class StepsTable extends Table
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

        $this->setTable('steps');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Recipes', [
            'foreignKey' => 'recipe_id',
            'joinType' => 'INNER'
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
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->integer('position')
            ->requirePresence('position', 'create')
            ->notEmpty('position');

        // adds acceptable range
        $validator->add('position', 'validValue', ['rule' => ['range', 0, 10]]); 

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['recipe_id'], 'Recipes'));

        return $rules;
    }
}
