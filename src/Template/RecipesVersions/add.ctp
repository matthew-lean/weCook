<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Recipes Versions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Recipes'), ['controller' => 'Recipes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Recipe'), ['controller' => 'Recipes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Versions'), ['controller' => 'Versions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Version'), ['controller' => 'Versions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="recipesVersions form large-9 medium-8 columns content">
    <?= $this->Form->create($recipesVersion) ?>
    <fieldset>
        <legend><?= __('Add Recipes Version') ?></legend>
        <?php
            echo $this->Form->control('recipe_id', ['options' => $recipes]);
            echo $this->Form->control('version_id', ['options' => $versions]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
