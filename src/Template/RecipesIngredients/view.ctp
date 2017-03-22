<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Recipes Ingredient'), ['action' => 'edit', $recipesIngredient->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Recipes Ingredient'), ['action' => 'delete', $recipesIngredient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipesIngredient->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Recipes Ingredients'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recipes Ingredient'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Recipes'), ['controller' => 'Recipes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recipe'), ['controller' => 'Recipes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ingredients'), ['controller' => 'Ingredients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ingredient'), ['controller' => 'Ingredients', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="recipesIngredients view large-9 medium-8 columns content">
    <h3><?= h($recipesIngredient->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Recipe') ?></th>
            <td><?= $recipesIngredient->has('recipe') ? $this->Html->link($recipesIngredient->recipe->name, ['controller' => 'Recipes', 'action' => 'view', $recipesIngredient->recipe->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ingredient') ?></th>
            <td><?= $recipesIngredient->has('ingredient') ? $this->Html->link($recipesIngredient->ingredient->name, ['controller' => 'Ingredients', 'action' => 'view', $recipesIngredient->ingredient->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($recipesIngredient->id) ?></td>
        </tr>
    </table>
</div>
