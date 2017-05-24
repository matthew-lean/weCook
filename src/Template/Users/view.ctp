<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="site-container">
  <!-- users colour is grabbed and used as the background to the header -->
  <div class="profile-header" style="background-color:#<?= ($user->colour->hex)?>!important">
    <h1><?= h($user->name) ?></h1>
  </div>

  <div class="users view large-9 medium-8 columns content">

      <div class="related">
          <h4><?= __('Related Recipes') ?></h4>
          <?php if (!empty($user->recipes)): ?>
          <table cellpadding="0" cellspacing="0">
              <tr>
                  <th scope="col"><?= __('Id') ?></th>
                  <th scope="col"><?= __('User Id') ?></th>
                  <th scope="col"><?= __('Name') ?></th>
                  <th scope="col"><?= __('Description') ?></th>
                  <th scope="col"><?= __('Created') ?></th>
                  <th scope="col"><?= __('Modified') ?></th>
                  <th scope="col" class="actions"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($user->recipes as $recipes): ?>
              <tr>
                  <td><?= h($recipes->id) ?></td>
                  <td><?= h($recipes->user_id) ?></td>
                  <td><?= h($recipes->name) ?></td>
                  <td><?= h($recipes->description) ?></td>
                  <td><?= h($recipes->created) ?></td>
                  <td><?= h($recipes->modified) ?></td>
                  <td class="actions">
                      <?= $this->Html->link(__('View'), ['controller' => 'Recipes', 'action' => 'view', $recipes->id]) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'Recipes', 'action' => 'edit', $recipes->id]) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'Recipes', 'action' => 'delete', $recipes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipes->id)]) ?>
                  </td>
              </tr>
              <?php endforeach; ?>
          </table>
          <?php endif; ?>
      </div>
  </div>
</div>
