<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Version'), ['action' => 'edit', $version->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Version'), ['action' => 'delete', $version->id], ['confirm' => __('Are you sure you want to delete # {0}?', $version->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Versions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Version'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Recipes'), ['controller' => 'Recipes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recipe'), ['controller' => 'Recipes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Versions'), ['controller' => 'Versions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Version'), ['controller' => 'Versions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="versions view large-9 medium-8 columns content">
    <h3><?= h($version->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Recipe') ?></th>
            <td><?= $version->has('recipe') ? $this->Html->link($version->recipe->name, ['controller' => 'Recipes', 'action' => 'view', $version->recipe->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($version->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Version Id') ?></th>
            <td><?= $this->Number->format($version->version_id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Versions') ?></h4>
        <?php if (!empty($version->versions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Recipe Id') ?></th>
                <th scope="col"><?= __('Version Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($version->versions as $versions): ?>
            <tr>
                <td><?= h($versions->id) ?></td>
                <td><?= h($versions->recipe_id) ?></td>
                <td><?= h($versions->version_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Versions', 'action' => 'view', $versions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Versions', 'action' => 'edit', $versions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Versions', 'action' => 'delete', $versions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $versions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
