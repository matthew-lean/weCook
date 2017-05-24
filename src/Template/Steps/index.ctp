<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="site-container">
  <nav class="large-3 medium-4 columns" id="actions-sidebar">
      <ul class="side-nav">
          <li class="heading"><?= __('Actions') ?></li>
          <li><?= $this->Html->link(__('New Step'), ['action' => 'add']) ?></li>
          <li><?= $this->Html->link(__('List Recipes'), ['controller' => 'Recipes', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('New Recipe'), ['controller' => 'Recipes', 'action' => 'add']) ?></li>
      </ul>
  </nav>
  <div class="steps index large-9 medium-8 columns content">
      <h3><?= __('Steps') ?></h3>
      <table cellpadding="0" cellspacing="0">
          <thead>
              <tr>
                  <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('recipe_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('position') ?></th>
                  <th scope="col" class="actions"><?= __('Actions') ?></th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($steps as $step): ?>
              <tr>
                  <td><?= $this->Number->format($step->id) ?></td>
                  <td><?= $step->has('recipe') ? $this->Html->link($step->recipe->name, ['controller' => 'Recipes', 'action' => 'view', $step->recipe->id]) : '' ?></td>
                  <td><?= h($step->description) ?></td>
                  <td><?= $this->Number->format($step->position) ?></td>
                  <td class="actions">
                      <?= $this->Html->link(__('View'), ['action' => 'view', $step->id]) ?>
                      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $step->id]) ?>
                      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $step->id], ['confirm' => __('Are you sure you want to delete # {0}?', $step->id)]) ?>
                  </td>
              </tr>
              <?php endforeach; ?>
          </tbody>
      </table>
      <div class="paginator">
          <ul class="pagination">
              <?= $this->Paginator->first('<< ' . __('first')) ?>
              <?= $this->Paginator->prev('< ' . __('previous')) ?>
              <?= $this->Paginator->numbers() ?>
              <?= $this->Paginator->next(__('next') . ' >') ?>
              <?= $this->Paginator->last(__('last') . ' >>') ?>
          </ul>
          <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
      </div>
  </div>
</div>
