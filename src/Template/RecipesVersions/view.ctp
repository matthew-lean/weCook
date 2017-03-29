<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Recipes Version'), ['action' => 'edit', $recipesVersion->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Recipes Version'), ['action' => 'delete', $recipesVersion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipesVersion->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Recipes Versions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recipes Version'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Recipes'), ['controller' => 'Recipes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recipe'), ['controller' => 'Recipes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="recipesVersions view large-9 medium-8 columns content">
    <h3><?= h($recipesVersion->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Recipe') ?></th>
            <td><?= $recipesVersion->has('recipe') ? $this->Html->link($recipesVersion->recipe->name, ['controller' => 'Recipes', 'action' => 'view', $recipesVersion->recipe->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($recipesVersion->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Version Id') ?></th>
            <td><?= $this->Number->format($recipesVersion->version_id) ?></td>
        </tr>
    </table>
</div>
