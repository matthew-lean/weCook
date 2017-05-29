<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="site-container">
  <div class="recipes-content">
    <div class="main-title">
            <h3>Recipes</h3>
            <p></p>
    </div>
    <?php foreach ($recipes as $recipe): ?>
    <div class="project-list-item">
      <div class="user">
        <div class="user-block" style="background-color:#<?= ($recipe->user->colour->hex)?>!important">
          <p><?= $recipe->has('user') ? $this->Html->link($recipe->user->name, ['controller' => 'Users', 'action' => 'view', $recipe->user->id]) : '' ?></p>
        </div>
      </div>
      <div class="content-wrap">
          <div class="content">
              <div class="title">
                  <h2><?= $recipe->has('name') ? $this->Html->link($recipe->name, ['controller' => 'Recipes', 'action' => 'view', $recipe->id]) : '' ?></h2>
              </div>
              <div class="description">
                <p><?= h($recipe->description) ?></p>
              </div>
              <!-- <div class="extra">
                <p><?= $this->Html->link(__('View'), ['action' => 'view', $recipe->id]) ?></p>
                <!-- <p><?= $this->Html->link(__('Edit'), ['action' => 'edit', $recipe->id]) ?></p> -->
                <!-- <p><?= $this->Html->link(__('Version'), ['action' => 'Version', $recipe->id]) ?><p> -->
                <!-- <p><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $recipe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipe->id)]) ?><p> -->
              <!-- </div> -->
          </div>
      </div>
      <div class="create-version">
        <p><?= $this->Html->link(__("<i class='fa fa-plus'></i> Create a Version"), ['action' => 'Version', $recipe->id] ,['escape' => false]) ?><p>
      </div>
      <!-- <div class="action">
        <p><?= $this->Html->link(__('View'), ['action' => 'view', $recipe->id]) ?></p>
        <p><?= $this->Html->link(__('Edit'), ['action' => 'edit', $recipe->id]) ?></p>
        <p><?= $this->Html->link(__('Version'), ['action' => 'Version', $recipe->id]) ?><p>
        <p><?= $this->Form->postLink(__('Del'), ['action' => 'delete', $recipe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipe->id)]) ?><p>
      </div> -->

      <!-- Parent Recipe currently hidden -->

      <!-- <div class="content-wrap-alt">
          <div class="content">
              <div class="title">
                <h2>Parent Recipe</h2>
              </div>
              <div class="description">
                  <h2><?= $recipe->has('parent_recipe') ? $this->Html->link($recipe->parent_recipe->name, ['controller' => 'Recipes', 'action' => 'view', $recipe->parent_recipe->id]) : '' ?></h2>
              </div>
          </div>
      </div> -->

      <div class="content-wrap-alt">
          <div class="content">
                <?php foreach ($recipe->child_recipes as $childRecipes): ?>
                <div class="child-container">
                    <div class="name">
                      <p><?= $this->Html->link(__($childRecipes->name), ['controller' => 'Recipes','action' => 'view', $childRecipes->id]) ?></p>
                    </div>
                    <div class="child">
                      <p><?= $this->Html->link(__($childRecipes->user->name), ['controller' => 'Users','action' => 'view', $childRecipes->user_id]) ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
          </div>
      </div>
    </div>
      <?php endforeach; ?>
  </div>
</div>

<!-- Old Table View -->

<div class="recipes index large-9 medium-8 columns content">
    <h3><?= __('Recipes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('parent_id') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('cooktime') ?></th>
                <th scope="col"><?= $this->Paginator->sort('preptime') ?></th> -->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($recipes as $recipe): ?>
            <tr>
                <td><?= $this->Number->format($recipe->id) ?></td>
                <td><?= $recipe->has('user') ? $this->Html->link($recipe->user->name, ['controller' => 'Users', 'action' => 'view', $recipe->user->id]) : '' ?></td>
                <td><?= h($recipe->name) ?></td>
                <td><?= h($recipe->description) ?></td>
                <!-- <td><?= h($recipe->created) ?></td>
                <td><?= h($recipe->modified) ?></td> -->
                <td><?= $recipe->has('parent_recipe') ? $this->Html->link($recipe->parent_recipe->name, ['controller' => 'Recipes', 'action' => 'view', $recipe->parent_recipe->id]) : '' ?></td>
                <!-- <td><?= $this->Number->format($recipe->cooktime) ?></td>
                <td><?= $this->Number->format($recipe->preptime) ?></td> -->
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $recipe->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $recipe->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $recipe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipe->id)]) ?>
                    <?= $this->Html->link(__('Version'), ['action' => 'Version', $recipe->id]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!-- <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div> -->
</div>
</div>
