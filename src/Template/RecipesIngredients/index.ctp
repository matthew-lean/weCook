<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="site-container">
  <nav class="large-3 medium-4 columns" id="actions-sidebar">
      <ul class="side-nav">
          <li class="heading"><?= __('Actions') ?></li>
          <li><?= $this->Html->link(__('New Recipes Ingredient'), ['action' => 'add']) ?></li>
          <li><?= $this->Html->link(__('List Recipes'), ['controller' => 'Recipes', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('New Recipe'), ['controller' => 'Recipes', 'action' => 'add']) ?></li>
          <li><?= $this->Html->link(__('List Ingredients'), ['controller' => 'Ingredients', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('New Ingredient'), ['controller' => 'Ingredients', 'action' => 'add']) ?></li>
      </ul>
  </nav>
  <div class="recipesIngredients index large-9 medium-8 columns content">
      <h3><?= __('Recipes Ingredients') ?></h3>
      <table cellpadding="0" cellspacing="0">
          <thead>
              <tr>
                  <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('recipe_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('ingredient_id') ?></th>
                  <th scope="col" class="actions"><?= __('Actions') ?></th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($recipesIngredients as $recipesIngredient): ?>
              <tr>
                  <td><?= $this->Number->format($recipesIngredient->id) ?></td>
                  <td><?= $recipesIngredient->has('recipe') ? $this->Html->link($recipesIngredient->recipe->name, ['controller' => 'Recipes', 'action' => 'view', $recipesIngredient->recipe->id]) : '' ?></td>
                  <td><?= $recipesIngredient->has('ingredient') ? $this->Html->link($recipesIngredient->ingredient->name, ['controller' => 'Ingredients', 'action' => 'view', $recipesIngredient->ingredient->id]) : '' ?></td>
                  <td class="actions">
                      <?= $this->Html->link(__('View'), ['action' => 'view', $recipesIngredient->id]) ?>
                      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $recipesIngredient->id]) ?>
                      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $recipesIngredient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipesIngredient->id)]) ?>
                  </td>
              </tr>
              <?php endforeach; ?>
          </tbody>
      </table>
      <div class="paginator">
          <ul class="pagination">
              <?= $this->Paginator->first('<< ' . __('first')) ?>
              <?= $this->Paginator->prev('< ' . __('previous')) ?>
              <?= $this->Paginator->numbers() ?>
              <?= $this->Paginator->next(__('next') . ' >') ?>
              <?= $this->Paginator->last(__('last') . ' >>') ?>
          </ul>
          <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
      </div>
  </div>
</div>
