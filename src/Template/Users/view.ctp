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

  <div class="recipes-content">
    <div class="main-title">
            <h3><?= h($user->name) ?>'s Recipes'</h3>
            <p></p>
    </div>

              <?php foreach ($user->recipes as $recipes): ?>
              <div class="project-list-item">
                <div class="content-wrap">
                    <div class="content">
                        <div class="title">
                            <h2><?= h($recipes->name) ?></h2>
                        </div>
                        <div class="description">
                          <p><?= h($recipes->description) ?></p>
                        </div>
                      </div>
                  <!-- <td><?= h($recipes->id) ?></td>
                  <td><?= h($recipes->user_id) ?></td> -->
                  <!-- <td><?= h($recipes->name) ?></td>
                  <td><?= h($recipes->description) ?></td>
                  <td><?= h($recipes->created) ?></td>
                  <td><?= h($recipes->modified) ?></td> -->
                  <td class="actions">
                      <?= $this->Html->link(__('View'), ['controller' => 'Recipes', 'action' => 'view', $recipes->id]) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'Recipes', 'action' => 'edit', $recipes->id]) ?>
                      <?= $this->Html->link(__('Version'), ['controller' => 'Recipes', 'action' => 'Version', $recipes->id]) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'Recipes', 'action' => 'delete', $recipes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipes->id)]) ?>
                  </td>
                </div>
              </div>
              <?php endforeach; ?>
          </table>
  </div>
</div>
