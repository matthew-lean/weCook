<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Recipes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Steps'), ['controller' => 'Steps', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Step'), ['controller' => 'Steps', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ingredients'), ['controller' => 'Ingredients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ingredient'), ['controller' => 'Ingredients', 'action' => 'add']) ?></li>
    </ul>
</nav>

<div class="recipes form large-9 medium-8 columns content">
    <?= $this->Form->create($recipe) ?>
    <fieldset>
        <legend><?= __('Add Recipe') ?></legend>
        <?php
            //grabs the current user and hides the input
            echo $this->Form->hidden('user_id', array('value'=>$authUser['id']));
            echo $this->Form->control('name', ['label' => false, 'placeholder' => 'Name']);
            echo $this->Form->control('Recipes._description', ['label' => false, 'placeholder' => 'Description']);
            echo $this->Form->control('ingredients._ids', ['options' => $ingredients]);
          ?>
    </fieldset>

    <?= $this->Form->create($newStep,  ['url' => ['controller' => 'steps', 'action' => 'add']]) ?>
    <fieldset>
            <legend><?= __('Add Steps') ?></legend>
            <?php
            echo $this->Form->hidden('recipe_id', ['value' => $recipe->id]);
            echo $this->Form->control('description', ['label' => false, 'placeholder' => 'Step 1']);
            echo $this->Form->hidden('position', ['label' => false, 'value' => '1']);
        ?>
    </fieldset>


    <!--this button adds a text field
    <div id="demo">
      <p id=''>Next</p>
    </div>
    -->

    <?= $this->Form->button(__('Submit'), ['id' => 'test']) ?>
    <?= $this->Form->end() ?>
</div>
