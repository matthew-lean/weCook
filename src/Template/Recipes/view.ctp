<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Recipe'), ['action' => 'edit', $recipe->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Recipe'), ['action' => 'delete', $recipe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipe->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Recipes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recipe'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Steps'), ['controller' => 'Steps', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Step'), ['controller' => 'Steps', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ingredients'), ['controller' => 'Ingredients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ingredient'), ['controller' => 'Ingredients', 'action' => 'add']) ?> </li>
    </ul>
</nav>
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
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($recipe->id) ?></td>
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
        <h4><?= __('Related Steps') ?></h4>
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
            <?php endif; ?>
        </table>
    </div>

    <!-- Add recipe steps-->
    <div class="newStep">
            <?= $this->Form->create($newStep,  ['url' => ['controller' => 'steps', 'action' => 'add']]) ?>
            <fieldset>
                <legend><?= __('Add Step') ?></legend>
                <?php
                    echo $this->Form->hidden('recipe_id', ['value' => $recipe->id]);
                    echo $this->Form->control('description');
                    echo $this->Form->control('position');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
    </div>

    <div class="related">
        <h4><?= __('Related Ingredients') ?></h4>
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

</div>
