<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RecipesSteps Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Recipes
 *
 * @method \App\Model\Entity\RecipesStep get($primaryKey, $options = [])
 * @method \App\Model\Entity\RecipesStep newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RecipesStep[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RecipesStep|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RecipesStep patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RecipesStep[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RecipesStep findOrCreate($search, callable $callback = null, $options = [])
 */
class RecipesStepsTable extends Table
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

        $this->setTable('recipes_steps');
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
