<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="site-container">
  <nav class="large-3 medium-4 columns" id="actions-sidebar">
      <ul class="side-nav">
          <li class="heading"><?= __('Actions') ?></li>
          <li><?= $this->Html->link(__('Edit Step'), ['action' => 'edit', $step->id]) ?> </li>
          <li><?= $this->Form->postLink(__('Delete Step'), ['action' => 'delete', $step->id], ['confirm' => __('Are you sure you want to delete # {0}?', $step->id)]) ?> </li>
          <li><?= $this->Html->link(__('List Steps'), ['action' => 'index']) ?> </li>
          <li><?= $this->Html->link(__('New Step'), ['action' => 'add']) ?> </li>
          <li><?= $this->Html->link(__('List Recipes'), ['controller' => 'Recipes', 'action' => 'index']) ?> </li>
          <li><?= $this->Html->link(__('New Recipe'), ['controller' => 'Recipes', 'action' => 'add']) ?> </li>
      </ul>
  </nav>
  <div class="steps view large-9 medium-8 columns content">
      <h3><?= h($step->id) ?></h3>
      <table class="vertical-table">
          <tr>
              <th scope="row"><?= __('Recipe') ?></th>
              <td><?= $step->has('recipe') ? $this->Html->link($step->recipe->name, ['controller' => 'Recipes', 'action' => 'view', $step->recipe->id]) : '' ?></td>
          </tr>
          <tr>
              <th scope="row"><?= __('Description') ?></th>
              <td><?= h($step->description) ?></td>
          </tr>
          <tr>
              <th scope="row"><?= __('Id') ?></th>
              <td><?= $this->Number->format($step->id) ?></td>
          </tr>
          <tr>
              <th scope="row"><?= __('Position') ?></th>
              <td><?= $this->Number->format($step->position) ?></td>
          </tr>
      </table>
  </div>
</div>
