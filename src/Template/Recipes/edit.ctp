<?php
/**
  * @var \App\View\AppView $this
  */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
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
</nav> -->
<br>
<div class="recipes form large-9 medium-8 columns content">
    <?= $this->Form->create($recipe) ?>
    <fieldset>
        <legend><?= __('Edit Recipe') ?></legend>
        <?php
            echo $this->Form->create($recipe);
            //grabs the current user and hides the input
            echo $this->Form->hidden('user_id', array('value'=>$authUser['id']));
            echo $this->Form->control('name', ['label' => false, 'placeholder' => 'Recipe Title','error' => false]);
            echo $this->Form->control('description', ['label' => false, 'placeholder' => 'Recipe Description', 'error' => false]);
            ?>

            <!-- Method -->
            <div class="method">
              <p>Method</p>
              <div id="EditStepAdd">
              <?php
                foreach($recipe->steps as  $key => $value) { ?>
                  <?= $this->Form->control(sprintf('steps.%s.description',$key), ['type'=>'text','label'=>false, 'class'=>'stepinput']); ?>
                  <?= $this->Form->hidden(sprintf('steps.%s.position', $key)); ?>
              <?php } ?>
              </div>
                <!-- Add/Remove buttons -->
                <div id="add">
                  <div id="EditnewStep"><button type="button">+</button></div>
                </div>
                <div id="editremoveStep">
                  <div id="editremoveStep"><button type="button">-</button></div>
                </div>
            </div>

            <br>
            <!-- Ingredients -->
            <div class="ingredients">
              <p>Ingredients</p>
              <?php
                foreach($recipe->steps as  $key => $value) { ?>
                  <?= $this->Form->control(sprintf('ingredients.%s.name',$key),['type'=>'text','label'=>false, 'class'=>'ingredientinput']); ?>
              <?php } ?>
              <div id="IngredientAdd">
              </div>
              <!-- Add/Remove Buttons -->
              <div id="add">
                <div id="newIngredient"><button type="button">+</button></div>
              </div>
              <div id="remove">
                <div id="removeIngredient"><button type="button">-</button></div>
              </div>
            </div>

    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
