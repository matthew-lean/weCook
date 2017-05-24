<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Recipe Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $description
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $parent_id
 * @property int $cooktime
 * @property int $preptime
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Recipe $parent_recipe
 * @property \App\Model\Entity\Recipe[] $child_recipes
 * @property \App\Model\Entity\RecipesVersion[] $recipes_versions
 * @property \App\Model\Entity\Step[] $steps
 * @property \App\Model\Entity\Ingredient[] $ingredients
 */
class Recipe extends Entity
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
}
