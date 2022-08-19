<?php $this->load->view('_head'); ?>

<div class="login">
  <img src="public/themes/default/img/logo.png">
  <h3>Login</h3>
  <?php if ($message): ?>
    <p class="alert alert-warning">
      <?php echo $message; ?>
    </p>
  <?php endif; ?>
  <?php echo form_open('login'); ?>
  <p>Email<br>
    <?php echo form_input('email', $this->input->post('email'), 'class="form-control form-control-sm"'); ?>
    <?php echo form_error('email'); ?>
  </p>
  <p>Password<br>
    <?php echo form_password('password', '', 'class="form-control form-control-sm"'); ?>
    <?php echo form_error('password'); ?>
  </p>
  <p>
    <?php echo form_submit('submit', 'Login', 'class="btn btn-secondary btn-sm"'); ?>
    <?php echo anchor('forgot', 'Forgot password?'); ?>
  </p>
  <p>
    No account yet? <?php echo anchor('register', 'Register'); ?>
  </p>
  <?php echo form_close(); ?>

</div>

<style>
  .login {
    padding-top: 50px;
    width: 300px;
    margin: auto;
  }
  .login img {
    width: 128px;
  }
</style>
