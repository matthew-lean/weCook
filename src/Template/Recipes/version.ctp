<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="recipes form large-9 medium-8 columns content">
    <?= $this->Form->create($recipe) ?>
    <fieldset>
        <legend><?= __('Creating a version of ') ?>
          <h1><?= h($recipe->name)?></h1>
          <p style="color:#<?= ($recipe->user_id)?>!important"> originally by <?= h($recipe->user->name)?> </p>
        </legend>
        <?php
            echo $this->Form->create($recipe);
            //grabs the current user and hides the input
            echo $this->Form->hidden('user_id', array('value'=>$authUser['id']));
            echo $this->Form->control('parent_id', ['options' => $parentRecipes, 'empty' => true]);
            echo $this->Form->control('name', ['label' => 'Recipe Title','required' => false,'error' => false]);
            echo $this->Form->control('description', ['label' => 'Recipe Description','required' => false, 'error' => false]);
            ?>
              <div class="cooktime">
              <?php echo $this->Form->control('cooktime', ['label' => 'Cook time','placeholder'=>'mins','class'=>'timeinput','required' => false, 'error' => false]);?>
              </div>
              <div class="preptime">
              <?php echo $this->Form->control('preptime', ['label' => 'Prep time','placeholder'=>'mins','class'=>'timeinput','required' => false, 'error' => false]);?>
              </div>

            <!-- Method -->
            <div class="method">
              <p>Method</p>
              <div id="StepAdd">
              <?php
                foreach($recipe->steps as  $key => $value) { ?>
                  <?= $this->Form->control(sprintf('steps.%s.description',$key), ['type'=>'text','class'=>'stepinput','label'=>false, 'class'=>'stepinput']); ?>
                  <?= $this->Form->hidden(sprintf('steps.%s.position', $key)); ?>
              <?php } ?>
              </div>
                <!-- Add/Remove buttons -->
                <div id="add">
                  <div id="newStep"><button type="button">+</button></div>
                </div>
                <div id="remove">
                  <div id="removeStep"><button type="button">-</button></div>
                </div>
            </div>

            <!-- Ingredients -->
            <div class="ingredients">
              <p>Ingredients</p>
              <div id="IngredientAdd">
              <?php
                foreach($recipe->ingredients as  $key => $value) { ?>
                  <?= $this->Form->control(sprintf('ingredients.%s.name',$key),['type'=>'text','label'=>false, 'class'=>'ingredientinput']); ?>
              <?php } ?>
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
