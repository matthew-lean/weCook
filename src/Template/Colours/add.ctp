<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="site-container">
  <nav class="large-3 medium-4 columns" id="actions-sidebar">
      <ul class="side-nav">
          <li class="heading"><?= __('Actions') ?></li>
          <li><?= $this->Html->link(__('List Colours'), ['action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
      </ul>
  </nav>
  <div class="colours form large-9 medium-8 columns content">
      <?= $this->Form->create($colour) ?>
      <fieldset>
          <legend><?= __('Add Colour') ?></legend>
          <?php
              echo $this->Form->control('colour_name');
              echo $this->Form->control('hex');
          ?>
      </fieldset>
      <?= $this->Form->button(__('Submit')) ?>
      <?= $this->Form->end() ?>
  </div>
</div>
