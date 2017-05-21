<?php
/**
  * @var \App\View\AppView $this
  */
?>
<br>
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
            echo $this->Form->hidden('original_id', array('value'=>$recipe['id']));
            echo $this->Form->control('name', ['label' => false, 'placeholder' => 'Recipe Title','error' => false]);
            echo $this->Form->control('description', ['label' => false, 'placeholder' => 'Recipe Description', 'error' => false]);
            ?>

            <!-- Method -->
            <div class="method">
              <p>Method</p>
              <div id="StepAdd">
              <!-- <?php
                foreach($recipe->steps as  $key => $value) { ?>
                  <?= $this->Form->control(sprintf('steps.%s.description',$key), ['type'=>'text','class'=>'stepinput','label'=>false, 'class'=>'stepinput']); ?>
                  <?= $this->Form->hidden(sprintf('steps.%s.position', $key)); ?>
              <?php } ?> -->

    
              </div>
                <!-- Add/Remove buttons -->
                <div id="add">
                  <div id="newStep"><button type="button">+</button></div>
                </div>
                <div id="removeStep">
                  <div id="removeStep"><button type="button">-</button></div>
                </div>
            </div>

            <br>

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
