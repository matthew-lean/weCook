<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="recipes view large-9 medium-8 columns content">

    <div class="info">
            <h1><?= h($recipe->name) ?></h1>
            <p><?= h($recipe->description) ?></p>
            <h3><?= $recipe->has('user') ? $this->Html->link($recipe->user->name, ['controller' => 'Users', 'action' => 'view', $recipe->user->id]) : '' ?></h3>
            <div class="cooktime">
              <p><?= h($recipe->cooktime)?></p>
            </div>
            <div class="preptime">
              <p><?= h($recipe->preptime)?></p>
            </div>
            <div class="parent_id">
              <p><?= h($recipe->parent_id)?></p>
            </div>
    </div>

    <div class="ingredients">
          <!-- <h4><?= __('Ingredients') ?></h4> -->
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
