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
        <li><?= $this->Html->link(__('New Recipes Version'), ['controller' => 'RecipesVersions', 'action' => 'add']) ?></li>
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
        <legend><?= __('Add Recipe') ?></legend>
        <?php
            echo $this->Form->create($recipe);
            //grabs the current user and hides the input
            echo $this->Form->hidden('user_id', array('value'=>$authUser['id']));
            echo $this->Form->control('name', ['label' => false, 'placeholder' => 'Recipe Title','error' => false]);
            echo $this->Form->control('description', ['label' => false, 'placeholder' => 'Recipe Description', 'error' => false]);
            ?>
            <!-- <div class="method">
              <?php
              //Steps Add Section
              echo $this->Form->control("steps.0.description", ['label' => "Method", 'placeholder' => 'Step 1', 'required' => false]);
              echo $this->Form->hidden("steps.0.position", ['label' => false, 'value' => '1', 'required' => false]);
              ?>
              <div class="toAdd">
                <?php
                echo $this->Form->control("steps.1.description", ['label' => false, 'placeholder' => 'Step 2', 'required' => false]);
                echo $this->Form->hidden("steps.1.position", ['label' => false, 'value' => '2']);
                ?>
              </div>
              <div class="toAdd">
                  <?php echo $this->Form->control("steps.2.description", ['label' => false, 'placeholder' => 'Step 3', 'required' => false]);
                  echo $this->Form->hidden("steps.2.position", ['label' => false, 'value' => '3']);
                  ?>
              </div>
              <div class="toAdd">
                  <?php echo $this->Form->control("steps.3.description", ['label' => false, 'placeholder' => 'Step 4', 'required' => false]);
                  echo $this->Form->hidden("steps.3.position", ['label' => false, 'value' => '4']);
                  ?>
              </div>
              <div class="toAdd">
                  <?php echo $this->Form->control("steps.4.description", ['label' => false, 'placeholder' => 'Step 5', 'required' => false]);
                  echo $this->Form->hidden("steps.4.position", ['label' => false, 'value' => '5']);
                  ?>
              </div>
            </div> -->

            <div class="method">
              <div id="StepAdd">
                <?php
                echo $this->Form->control("steps.0.description", ['label' => "Method", 'placeholder' => 'Step 1', 'required' => false]);
                echo $this->Form->hidden("steps.0.position", ['label' => false, 'value' => '1', 'required' => false]);
                ?>
              </div>
              <div id="add">
                <div id="newStep"><button type="button">+</button></div>
              </div>
              <div id="remove">
                <div id="removeStep"><button type="button">-</button></div>
              </div>
            </div>

            <div class="ingredients">
              <div id="IngredientAdd">
                <?php echo $this->Form->control("ingredients.0.name", ['label' => 'Ingredients', 'placeholder' => 'Ingredient', 'required' => false]);?>
              </div>
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
