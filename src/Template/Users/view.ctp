<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="site-container">
  <!-- users colour is grabbed and used as the background to the header -->
  <div class="profile-header" style="background-color:#<?= ($user->colour->hex)?>!important">
    <div class="container">
        <div class="content">
          <div class="profile-circle" style="background-color:#<?= ($user->colour->hex)?>!important">
            <i class="fa fa-user-o fa-3x" aria-hidden="true"></i>
          </div>
          <h2 style="color:#<?= ($user->colour->hex)?>!important"><?= h($user->name) ?></h2>
          <p>User from <?= h($user->created) ?></p>
      </div>
    </div>
  </div>

  <div class="recipes-content">
    <div class="main-title">
            <h3><?= h($user->name) ?>'s Recipes'</h3>
            <p></p>
    </div>

              <?php foreach ($user->recipes as $recipes): ?>
              <div class="list-item">
                <div class="content-wrap">
                    <div class="content">
                        <div class="title" style="color:#<?= ($recipes->user->colour->hex)?>!important">
                            <h2><?= $this->Html->link($recipes->name, ['controller' => 'Recipes', 'action' => 'view', $recipes->id]); ?></h2>
                        </div>
                        <div class="description">
                          <p><?= h($recipes->description) ?></p>
                        </div>
                      </div>

                  <!-- <td class="actions">
                      <?= $this->Html->link(__('View'), ['controller' => 'Recipes', 'action' => 'view', $recipes->id]) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'Recipes', 'action' => 'edit', $recipes->id]) ?>
                      <?= $this->Html->link(__('Version'), ['controller' => 'Recipes', 'action' => 'Version', $recipes->id]) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'Recipes', 'action' => 'delete', $recipes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipes->id)]) ?>
                  </td> -->
                </div>

                <div class="ingredients">
                    <div class="ingredients-container">
                      <h2><?= __('Ingredients') ?></h2>
                      <?php if (!empty($recipes->ingredients)): ?>
                          <?php foreach ($recipes->ingredients as $ingredients): ?>
                          <div class="ingredient">
                              <div class="bubble"><?= h($ingredients->name) ?></div>
                          </div>
                      <?php endforeach; ?>
                    <?php endif; ?>
                    </div>
                </div>

                <div class="content-wrap-alt">
                    <div class="content">
                        <div class="version-title">
                          <p><i class="fa fa-arrow-down" aria-hidden="true"></i> Versions</p>
                        </div>
                          <?php foreach ($recipes->child_recipes as $childRecipes): ?>
                          <div class="child-container">
                              <div class="name" class="user-block" style="color:#<?= ($childRecipes->user->colour->hex);?>">
                                  <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                <?= $this->Html->link(__($childRecipes->name), ['controller' => 'Recipes','action' => 'view', $childRecipes->id]) ?>
                              </div>
                              <div class="child" style="color:#<?= ($childRecipes->user->colour->hex)?>">
                                <i class="fa fa-user-o" aria-hidden="true" style="color:#<?= ($childRecipes->user->colour->hex)?>"></i>
                                  <?= $this->Html->link(__($childRecipes->user->name), ['controller' => 'Users','action' => 'view', $childRecipes->user_id]) ?>
                              </div>
                          </div>
                          <?php endforeach; ?>
                    </div>
                </div>

                <div class="create-version">
                  <p><?= $this->Html->link(__("<i class='fa fa-plus'></i> Create a Version"), ['controller' => 'Recipes','action' => 'Version', $recipes->id] ,['escape' => false]) ?><p>
                </div>
              </div>
              <?php endforeach; ?>

  </div>
</div>
