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
            echo $this->Form->control('description', ['label' => false, 'placeholder' => 'Description']);
            echo $this->Form->control('ingredients._ids', ['options' => $ingredients]);
            echo $this->Form->input('Steps.0.Step');

            // Testing New Ingredient Input
            //echo $this->Form->input('link', array('label' => false, "class" => " form-control input-medium", "placeholder" => __('ingredients'), 'id' => 'search'));
            // echo $this->Form->button(null, array('class' => 'btn btn-primary icon-search icon-white','onclick' => "location.href='/weCook/'+document.getElementById('search').value;"));
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
