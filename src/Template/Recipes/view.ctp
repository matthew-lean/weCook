<?php
/**
  * @var \App\View\AppView $this
  */
?>
  <div class="site-container">
  <div class="recipes view large-9 medium-8 columns content">
      <div class="info">
              <h1><?= h($recipe->name) ?></h1>
              <p><?= h($recipe->description) ?></p>
              <!-- User colour now dynamically added -->
              <!-- EDIT THIS WHEN THE SITE GOES LIVE? -->
              <a href="/weCook/users/view/<?= $recipe->user->id?>"<h3 style="color:#<?= ($recipe->user->colour->hex)?>;" ><?= h($recipe->user->name); ?></h3></a>
              <!-- <h3><?= $recipe->has('user') ? $this->Html->link($recipe->user->name, ['controller' => 'Users', 'class'=>'usercolour', 'action' => 'view', $recipe->user->id]) : '' ?></h3> -->

              <div class='time'>
                <div class="cooktime">
                  <p>Cooktime</p>
                  <p><?= h($recipe->cooktime)?> mins</p>
                </div>
                <div class="preptime">
                  <p>Preptime</p>
                  <p><?= h($recipe->preptime)?> mins</p>
                </div>
              </div>

              <div class="parent_id" style="border-top:solid 3px #<?= ($recipe->user->colour->hex)?>!important">
                  <!-- Parent Recipe -->
                  <p><?= $recipe->has('parent_id') ? $this->Html->link($recipe->parent_id, ['controller' => 'Recipes', 'action' => 'view', $recipe->parent_id]) : '' ?></p>
                  <p><?= $recipe->has('parent_id') ? $this->Html->link($recipe->user->name, ['controller' => 'users', 'action' => 'view', $recipe->user->id]) : '' ?></p>
              </div>
      </div>

      <div class="ingredients">
            <h2><?= __('Ingredients') ?></h2>
            <?php if (!empty($recipe->ingredients)): ?>
                <?php foreach ($recipe->ingredients as $ingredients): ?>
                <div class="ingredients">
                    <div class="bubble"><?= h($ingredients->name) ?></div>
                </div>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
      </div>

      <br><br>

      <div class="method">
          <h2><?= __('Method') ?></h2>
          <?php if (!empty($recipe->steps)): ?>
          <table cellpadding="0" cellspacing="0">
              <?php foreach ($recipe->steps as $steps): ?>
              <tr>
                  <td><?= h($steps->position) ?></td>
                  <td><?= h($steps->description) ?></td>
              </tr>
              <?php endforeach; ?>
          </table>
          <?php endif; ?>
      </div>
</div>
