<div class="site-container">
  <div class="register default">
      <?= $this->Form->create($user) ?>
      <fieldset>
          <legend><?= __('Add User') ?></legend>
          <?php
              echo $this->Form->control('name', ['label' => 'Username','error' => false]);;
              echo $this->Form->control('email');
              echo $this->Form->control('password');
              // echo $this->Form->control('colour_id');
              ?>
              <div class="cc-selector">
                <input id="colour-id-1" type="radio" name="colour_id" value="1" />
                <label class="col blue" for="colour-id-1"></label>

                <input id="colour-id-2" type="radio" name="colour_id" value="2" />
                <label class="col red"for="colour-id-2"></label>

                <input id="colour-id-3" type="radio" name="colour_id" value="3" />
                <label class="col green" for="colour-id-3"></label>

                <input id="colour-id-4" type="radio" name="colour_id" value="4" />
                <label class="col orange"for="colour-id-4"></label>

                <input id="colour-id-5" type="radio" name="colour_id" value="5" />
                <label class="col yellow" for="colour-id-5"></label>

                <input id="colour-id-6" type="radio" name="colour_id" value="6" />
                <label class="col pink"for="colour-id-6"></label>
              </div>
              <?
          ?>
      </fieldset>
      <?= $this->Form->button(__('Create Account')) ?>
      <?= $this->Form->end() ?>
  </div>
</div>
