<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base') ?>
    <?= $this->Html->css('cake') ?>

    <!--Bootstrap-->
    <?= $this->Html->script('jquery') ?>
    <?= $this->Html->script('tether') ?>
    <?= $this->Html->script('bootstrap') ?>
    <?= $this->Html->css('bootstrap') ?>
    <?= $this->Html->css('app') ?>

    <?= $this->Html->script('scripts') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?= $this->Flash->render() ?>

<div class=home-container>
  <div class="page-head">
      <div class="overlay">
      <div class="site-container">
        <div class="container">
          <div class="content">
            <svg width="400px" viewBox="0 0 381 85.9" style="enable-background:new 0 0 381 85.9" xml:space="preserve">
                <g>
                  <path class="white-logo" d="M47,85l-9-28.8c-0.6-1.8-1.6-5.8-3.2-12h-0.4c-1.2,5.2-2.2,9.3-3.1,12.1L22,85h-8.6L0,35.8h7.8
                    C11,48.1,13.4,57.5,15.1,64s2.6,10.8,2.8,13.1h0.4c0.3-1.7,0.9-3.9,1.6-6.6c0.7-2.7,1.4-4.9,1.9-6.4l9-28.2h8.1L47.6,64
                    c1.7,5.1,2.8,9.5,3.4,13h0.4c0.1-1.1,0.4-2.7,1-5c0.5-2.2,3.6-14.3,9.4-36.2h7.7L55.9,85H47z"/>
                  <path class="white-logo" d="M99.1,85.9c-7.3,0-13-2.2-17.2-6.6c-4.2-4.4-6.3-10.6-6.3-18.4c0-7.9,2-14.2,5.9-18.9s9.1-7,15.7-7
                    c6.2,0,11,2,14.6,6.1c3.6,4.1,5.4,9.4,5.4,16v4.7H83.3c0.1,5.8,1.6,10.2,4.4,13.1c2.8,3,6.7,4.5,11.7,4.5c5.3,0,10.5-1.1,15.7-3.3
                    v6.6c-2.6,1.1-5.1,2-7.5,2.4C105.3,85.6,102.4,85.9,99.1,85.9z M97.1,41.1c-3.9,0-7.1,1.3-9.4,3.9c-2.3,2.6-3.7,6.1-4.1,10.7h25.7
                    c0-4.7-1-8.3-3.1-10.8C104,42.4,101,41.1,97.1,41.1z"/>
                  <path class="white-logo" d="M158.1,30c-5.2,0-9.3,2-12.2,5.9c-2.9,3.9-4.3,9.4-4.3,16.4c0,14.6,5.5,21.9,16.5,21.9
                    c4.6,0,10.2-1.2,16.7-3.5v11.7c-5.4,2.2-11.4,3.4-18,3.4c-9.5,0-16.8-2.9-21.9-8.7c-5.1-5.8-7.6-14.1-7.6-24.9
                    c0-6.8,1.2-12.8,3.7-17.9c2.5-5.1,6-9.1,10.7-11.8s10.1-4.1,16.4-4.1c6.4,0,12.8,1.5,19.2,4.6l-4.5,11.3c-2.5-1.2-4.9-2.2-7.4-3.1
                    C162.9,30.4,160.5,30,158.1,30z"/>
                  <path class="white-logo" d="M233.3,59.8c0,8.2-2.2,14.6-6.5,19.2c-4.3,4.6-10.3,6.9-18,6.9c-4.8,0-9.1-1.1-12.7-3.2
                    c-3.7-2.1-6.5-5.1-8.5-9.1c-2-3.9-3-8.6-3-13.8c0-8.2,2.1-14.6,6.4-19.1c4.3-4.5,10.3-6.8,18-6.8c4.8,0,9.1,1,12.7,3.1
                    c3.7,2.1,6.5,5.1,8.5,9C232.3,49.9,233.3,54.5,233.3,59.8z M198.6,59.8c0,5,0.8,8.7,2.4,11.3c1.6,2.5,4.3,3.8,8,3.8
                    c3.6,0,6.3-1.3,7.9-3.8c1.6-2.5,2.4-6.3,2.4-11.3c0-5-0.8-8.7-2.4-11.2c-1.6-2.5-4.3-3.7-7.9-3.7c-3.6,0-6.3,1.2-7.9,3.7
                    C199.4,51.1,198.6,54.8,198.6,59.8z"/>
                  <path class="white-logo" d="M290.2,59.8c0,8.2-2.2,14.6-6.5,19.2c-4.3,4.6-10.3,6.9-18,6.9c-4.8,0-9.1-1.1-12.7-3.2s-6.5-5.1-8.5-9.1
                    c-2-3.9-3-8.6-3-13.8c0-8.2,2.1-14.6,6.4-19.1c4.3-4.5,10.3-6.8,18-6.8c4.8,0,9.1,1,12.7,3.1c3.7,2.1,6.5,5.1,8.5,9
                    C289.2,49.9,290.2,54.5,290.2,59.8z M255.5,59.8c0,5,0.8,8.7,2.4,11.3c1.6,2.5,4.3,3.8,8,3.8c3.6,0,6.3-1.3,7.9-3.8
                    c1.6-2.5,2.4-6.3,2.4-11.3c0-5-0.8-8.7-2.4-11.2c-1.6-2.5-4.3-3.7-7.9-3.7c-3.6,0-6.3,1.2-7.9,3.7S255.5,54.8,255.5,59.8z"/>
                  <path class="white-logo" d="M314.6,57.7l6-7.6l14-15.3h15.4l-19.9,21.8L351.3,85h-15.8l-14.4-20.3l-5.9,4.7V85h-13.7V15.1h13.7v31.1
                    l-0.7,11.4H314.6z"/>
                </g>
                <g>
                  <g>
                    <path class="white-logo" d="M340,0c1.6,0,3.3,0.3,4.9,0.9c3.2,1.1,6.1,2.8,8.4,5.3c1.8,1.9,2.7,4.3,3,6.8c0.2,1.6,0.3,3.2,0.4,4.8
                      c0.1,1,0.5,1.9,1.3,2.6c3.6,3.2,7.3,6.3,10.9,9.5c3.7,3.3,7.2,6.7,10.3,10.6c0.6,0.8,1.2,1.8,1.6,2.7c0.4,0.9,0.2,1.7-0.5,2.4
                      c-1.2,1.3-2.1,1.5-3.6,0.7c-1.1-0.6-2.1-1.3-3-2.1c-4.1-3.4-7.6-7.2-11.1-11.2c-2.5-2.9-5.1-5.8-7.6-8.8c-1-1.3-2.3-1.7-3.9-1.8
                      c-1.6-0.1-3.2-0.2-4.7-0.5c-3.1-0.5-5.6-2.1-7.6-4.6c-2.1-2.7-3.6-5.7-4.3-9.1c-0.3-1.4-0.4-2.8,0-4.3c0.6-2.3,2.1-3.6,4.6-3.8
                      C339.4,0,339.7,0,340,0z"/>
                  </g>
                </g>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="recipes-content">
  <div class="main-title">
          <h3>Recipes</h3>
  </div>
  <?php foreach ($recipes as $recipe): ?>

  <div class="list-item">
    <div class="user">
      <div class="user-block" style="background-color:#<?= ($recipe->user->colour->hex)?>!important; color:#<?= ($recipe->user->colour->hex)?>!important;">
        <i class="fa fa-user-o" aria-hidden="true"></i>
      </div>
      <div class="user-name" style="color:#<?= ($recipe->user->colour->hex)?>!important;">
      <?= $recipe->has('user') ? $this->Html->link($recipe->user->name, ['controller' => 'Users', 'action' => 'view', $recipe->user->id]) : '' ?>
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
        <?php endif; ?>
      </div>
    </div>

    <div class="content-wrap-alt">
        <div class="content">
            <div class="version-title">
              <p><i class="fa fa-arrow-down" aria-hidden="true"></i> Versions</p>
            </div>
              <?php foreach ($recipe->child_recipes as $childRecipes): ?>
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
      <p><?= $this->Html->link(__("<i class='fa fa-plus'></i> Create a Version"), ['action' => 'Version', $recipe->id] ,['escape' => false]) ?><p>
    </div>

  </div>
    <?php endforeach; ?>
  </div>




<footer>
</footer>
</body>
</html>
