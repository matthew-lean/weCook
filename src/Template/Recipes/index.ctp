<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="site-container">
  <div class="recipes-content">
    <div class="main-title">
            <h3>Recipes</h3>
    </div>
    <?php foreach ($recipes as $recipe): ?>

    <div class="list-item">
      <div class="user">
        <div class="user-block" style="background-color:#<?= ($recipe->user->colour->hex)?>!important">
          <p><?= $recipe->has('user') ? $this->Html->link($recipe->user->name, ['controller' => 'Users', 'action' => 'view', $recipe->user->id]) : '' ?></p>
        </div>
      </div>
      <div class="content-wrap">
          <div class="content">
              <div class="title" style="color:#<?= ($recipe->user->colour->hex)?>!important">
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

      <div class="ingredients">
        <div class="ingredients-container">
          <h2><?= __('Ingredients') ?></h2>
          <?php if (!empty($recipe->ingredients)): ?>
              <?php foreach ($recipe->ingredients as $ingredients): ?>
              <div class="ingredient">
                  <div class="bubble"><?= h($ingredients->name) ?></div>
              </div>
              <?php endforeach; ?>
          </table>
          <?php endif; ?>
        </div>
      </div>

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
              <div class="version-title">
                <p>Versions</p>
              </div>
                <?php foreach ($recipe->child_recipes as $childRecipes): ?>
                <div class="child-container">
                    <div class="name" class="user-block" style="border-left:solid 5px #<?= ($childRecipes->user->colour->hex)?>!important; color:#<?= ($childRecipes->user->colour->hex);?>">
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
        <p><?= $this->Html->link(__("<i class='fa fa-plus'></i> Create a Version"), ['action' => 'Version', $recipe->id] ,['escape' => false]) ?><p>
      </div>

    </div>
      <?php endforeach; ?>
  </div>
