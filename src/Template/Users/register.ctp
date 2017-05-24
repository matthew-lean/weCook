<div class="site-container">
  <div class="register default">
      <?= $this->Form->create($user) ?>
      <fieldset>
          <legend><?= __('Add User') ?></legend>
          <?php
              echo $this->Form->control('name');
              echo $this->Form->control('email');
              echo $this->Form->control('password');
              // echo $this->Form->control('colour_id');
              ?>
              <div class="col blue"><input type="radio" name="colour_id" value="1" id="colour-id-1"></div>
              <div class="col red"><input type="radio" name="colour_id" value="2" id="colour-id-2"></div>
              <div class="col green"><input type="radio" name="colour_id" value="3" id="colour-id-3"></div>
              <div class="col orange"><input type="radio" name="colour_id" value="4" id="colour-id-4"></div>
              <div class="col yellow"><input type="radio" name="colour_id" value="5" id="colour-id-5"></div>
              <div class="col pink"><input type="radio" name="colour_id" value="6" id="colour-id-6"></div>
              <?

          ?>
      </fieldset>
      <?= $this->Form->button(__('Create Account')) ?>
      <?= $this->Form->end() ?>
  </div>
</div>
