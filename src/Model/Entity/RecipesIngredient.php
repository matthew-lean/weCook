<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RecipesIngredient Entity
 *
 * @property int $id
 * @property int $recipe_id
 * @property int $ingredient_id
 *
 * @property \App\Model\Entity\Recipe $recipe
 * @property \App\Model\Entity\Ingredient $ingredient
 */
class RecipesIngredient extends Entity
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
