<?php
/**
  * @var \App\View\AppView $this
  */
?>
<br>

<div class="recipes view large-9 medium-8 columns content">
    <br>

    <div class="recipe-info">
            <h1><?= h($recipe->name) ?></h1>
            <p><?= h($recipe->description) ?></p>
            <h3><?= $recipe->has('user') ? $this->Html->link($recipe->user->name, ['controller' => 'Users', 'action' => 'view', $recipe->user->id]) : '' ?></h3>
    </div>

    <div class="related ingredients">
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

    <div class="related method">
        <h2><?= __('Method') ?></h2>
        <?php if (!empty($recipe->steps)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Position') ?></th>
                <th scope="col"><?= __('Description') ?></th>
            </tr>
            <?php foreach ($recipe->steps as $steps): ?>
            <tr>
                <td><?= h($steps->position) ?></td>
                <td><?= h($steps->description) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
