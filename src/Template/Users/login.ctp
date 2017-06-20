<div class="site-container">
  <div class="login default">
      <div class="panel">
        <h2 class="text-center">Login</h2>
        <?= $this->Form->create(); ?>
          <?= $this->Form->input('email'); ?>
          <?= $this->Form->input('password', array('type' => 'password')); ?>
          <?= $this->Form->submit('Login', array('class' => 'button login-button')); ?>
        <?= $this->Form->end(); ?>
        <button class="register-button"><?= $this->Html->link('Register', ['controller' => 'users', 'action' => 'register']); ?></button>
    </div>
  </div>
</div>
