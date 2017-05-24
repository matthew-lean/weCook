<?php
/**
  * @var \App\View\AppView $this
  */
?>
<br>
<div class="recipes form large-9 medium-8 columns content">
    <?= $this->Form->create($recipe) ?>
    <fieldset>
        <legend><?= __('Add Recipe') ?></legend>
        <?php
            ?>
            <div class="info"><?php
              echo $this->Form->create($recipe);
              //grabs the current user and hides the input
              echo $this->Form->hidden('user_id', array('value'=>$authUser['id']));
              echo $this->Form->control('name', ['label' => 'Recipe Title','required' => false,'error' => false]);
              echo $this->Form->control('description', ['label' => 'Recipe Description','required' => false, 'error' => false]);
              ?>
              <div class="cooktime">
              <?php echo $this->Form->control('cooktime', ['label' => 'Cook time','placeholder'=>'mins','class'=>'timeinput','required' => false, 'error' => false]);?>
              </div>
              <div class="preptime">
              <?php echo $this->Form->control('preptime', ['label' => 'Prep time','placeholder'=>'mins','class'=>'timeinput','required' => false, 'error' => false]);?>
              </div>
            </div>

            <div class="method">
              <p>Method</p>
              <div id="StepAdd">
                <?php
                echo $this->Form->control("steps.0.description", ['label' => false, 'class'=>'stepinput', 'placeholder' => 'Step 1', 'required' => false]);
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
              <p>Ingredients</p>
              <div id="IngredientAdd">
                <?php echo $this->Form->control("ingredients.0.name", ['label' => false, 'placeholder' => 'Ingredient', 'required' => false]);?>
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
