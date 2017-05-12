<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RecipesVersions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Recipes
 * @property \Cake\ORM\Association\BelongsTo $Versions
 *
 * @method \App\Model\Entity\RecipesVersion get($primaryKey, $options = [])
 * @method \App\Model\Entity\RecipesVersion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RecipesVersion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RecipesVersion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RecipesVersion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RecipesVersion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RecipesVersion findOrCreate($search, callable $callback = null, $options = [])
 */
class RecipesVersionsTable extends Table
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

        $this->setTable('recipes_versions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Recipes', [
            'foreignKey' => 'recipe_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Versions', [
            'foreignKey' => 'version_id',
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
        $rules->add($rules->existsIn(['version_id'], 'Versions'));

        return $rules;
    }
}
