<?php $this->load->view('_head'); ?>

<div class="login">
  <h3>Login</h3>
  <?php echo form_open('login'); ?>
  <p>Email<br>
    <?php echo form_input('email', $this->input->post('email'), 'class="form-control form-control-sm"'); ?>
    <?php echo form_error('email'); ?>
  </p>
  <p>Password<br>
    <?php echo form_input('password', $this->input->post('password'), 'class="form-control form-control-sm"'); ?>
    <?php echo form_error('password'); ?>
  </p>
  <p>
    <?php echo form_submit('submit', 'Login', 'class="btn btn-secondary btn-sm"'); ?>
    <?php echo anchor('forgot', 'Forgot password?'); ?>
  </p>
  <?php echo form_close(); ?>

</div>

<style>
  .login {
    width: 300px;
    margin: auto;
  }
</style>