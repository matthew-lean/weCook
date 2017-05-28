<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="site-container">
  <div class="recipes view large-9 medium-8 columns content">

    <div class="user">
      <div class="user-block" style="background-color:#<?= ($recipe->user->colour->hex)?>!important">
        <p><?= $recipe->has('user') ? $this->Html->link($recipe->user->name, ['controller' => 'Users', 'action' => 'view', $recipe->user->id]) : '' ?></p>
      </div>
    </div>

    <h3><?= h($recipe->name) ?></h3>

  </div>
</div>


<div class="recipes view large-9 medium-8 columns content">
    <h3><?= h($recipe->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $recipe->has('user') ? $this->Html->link($recipe->user->name, ['controller' => 'Users', 'action' => 'view', $recipe->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($recipe->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($recipe->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parent Recipe') ?></th>
            <td><?= $recipe->has('parent_recipe') ? $this->Html->link($recipe->parent_recipe->name, ['controller' => 'Recipes', 'action' => 'view', $recipe->parent_recipe->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($recipe->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cooktime') ?></th>
            <td><?= $this->Number->format($recipe->cooktime) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preptime') ?></th>
            <td><?= $this->Number->format($recipe->preptime) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($recipe->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($recipe->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Child Recipes') ?></h4>
        <?php if (!empty($recipe->child_recipes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col"><?= __('Cooktime') ?></th>
                <th scope="col"><?= __('Preptime') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($recipe->child_recipes as $childRecipes): ?>
            <tr>
                <td><?= h($childRecipes->id) ?></td>
                <td><?= h($childRecipes->user_id) ?></td>
                <td><?= h($childRecipes->name) ?></td>
                <td><?= h($childRecipes->description) ?></td>
                <td><?= h($childRecipes->created) ?></td>
                <td><?= h($childRecipes->modified) ?></td>
                <td><?= h($childRecipes->parent_id) ?></td>
                <td><?= h($childRecipes->cooktime) ?></td>
                <td><?= h($childRecipes->preptime) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Recipes', 'action' => 'view', $childRecipes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Recipes', 'action' => 'edit', $childRecipes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Recipes', 'action' => 'delete', $childRecipes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childRecipes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

    <div class="related">
        <h4><?= __('Ingredients') ?></h4>
        <?php if (!empty($recipe->ingredients)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($recipe->ingredients as $ingredients): ?>
            <tr>
                <td><?= h($ingredients->id) ?></td>
                <td><?= h($ingredients->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ingredients', 'action' => 'view', $ingredients->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ingredients', 'action' => 'edit', $ingredients->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ingredients', 'action' => 'delete', $ingredients->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ingredients->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

    <div class="related">
        <h4><?= __('Method') ?></h4>
        <?php if (!empty($recipe->steps)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Recipe Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Position') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($recipe->steps as $steps): ?>
            <tr>
                <td><?= h($steps->id) ?></td>
                <td><?= h($steps->recipe_id) ?></td>
                <td><?= h($steps->description) ?></td>
                <td><?= h($steps->position) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Steps', 'action' => 'view', $steps->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Steps', 'action' => 'edit', $steps->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Steps', 'action' => 'delete', $steps->id], ['confirm' => __('Are you sure you want to delete # {0}?', $steps->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
</div>
