<br>
<div class="register default">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('colour_id');
        ?>
        <div class="col blue"></div>
        <div class="col red"></div>
        <div class="col green"></div>
        <div class="col orange"></div>
        <div class="col yellow"></div>
        <div class="col pink"></div>
    </fieldset>
    <?= $this->Form->button(__('Create Account')) ?>
    <?= $this->Form->end() ?>
</div>
