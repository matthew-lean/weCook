<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Colour'), ['action' => 'edit', $colour->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Colour'), ['action' => 'delete', $colour->id], ['confirm' => __('Are you sure you want to delete # {0}?', $colour->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Colours'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Colour'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="colours view large-9 medium-8 columns content">
    <h3><?= h($colour->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($colour->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($colour->id) ?></td>
        </tr>
    </table>
</div>
