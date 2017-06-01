<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="site-container">
  <div class="recipes view large-9 medium-8 columns content" style="border-top:solid 5px #<?= ($recipe->user->colour->hex)?>!important;">

    <div class="info">
              <h1><?= h($recipe->name) ?></h1>
              <div class="description">
                <p><?= h($recipe->description) ?></p>
              </div>
              <div class="user-name" style="color:#<?= ($recipe->user->colour->hex)?>!important;">
                <div class="user">
                    <i class="fa fa-user-o" aria-hidden="true"></i>
                  <div class="user-name" style="color:#<?= ($recipe->user->colour->hex)?>!important;">
                  <?= $recipe->has('user') ? $this->Html->link($recipe->user->name, ['controller' => 'Users', 'action' => 'view', $recipe->user->id]) : '' ?>
                  </div>
                </div>
              </div>
              <div class="times">
                <div class="cooktime">
                  <div class="title">
                    <p>Cook Time</p>
                  </div>
                  <div class="value">
                    <p><?= h($recipe->cooktime)?> mins</p>
                  </div>
                </div>
                <div class="preptime">
                  <div class="title">
                    <p>Prep Time</p>
                  </div>
                    <div class="value">
                      <p><?= h($recipe->preptime)?> mins</p>
                    </div>
                </div>
              </div>
      </div>

</div>

<div class="recipes version-nav view large-9 medium-8 columns content">
  <div class="content-wrap-alt">
      <div class="content">
          <div class="version-title">
            <h4>Versions</h4>
          </div>
            <?php foreach ($recipe->child_recipes as $childRecipes): ?>
            <div class="child-container">
                <div class="name" class="user-block" style="color:#<?= ($childRecipes->user->colour->hex);?>">
                  <!-- <i class="fa fa-chevron-right" aria-hidden="true"></i> -->
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
    <button><?= $this->Html->link(__("<i class='fa fa-plus'></i> Create a Version"), ['action' => 'Version', $recipe->id] ,['escape' => false]) ?></button>
  </div>
</div>

<div class="recipes view large-9 medium-8 columns content">
  <div class="ingredients-container">
        <h4><?= __('Ingredients') ?></h4>
        <?php if (!empty($recipe->ingredients)): ?>

            <?php foreach ($recipe->ingredients as $ingredients): ?>
            <div class="ingredients">
                <div class="bubble"><?= h($ingredients->name) ?></div>
            </div>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
  </div>
</div>

<div class="recipes view large-9 medium-8 columns content">
  <div class="method-container">
    <h4><?= __('Method') ?></h4>
      <?php foreach ($recipe->steps as $steps): ?>
        <div class="step">
          <div class="position">
            <p><?= h($steps->position) ?></p>
          </div>
          <div class="description">
            <p><?= h($steps->description) ?></p>
          </div>
        </div>
        <?php endforeach; ?>
  </div>
</div>
</div>
