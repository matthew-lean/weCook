<?php
/**
  * @var \App\View\AppView $this
  */
?>
<br>
<h2 class="index-large-4 medium-4 large-offset-4 medium-offset-4 columns">
  <div class="panel">
    <h2 class="text-center">Register</h2>
    <?= $this->Form->create($user) ?>
    <fieldset>

        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('colour_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
