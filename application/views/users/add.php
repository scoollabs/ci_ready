<h3>Add user</h3>
<?php echo form_open('users/add'); ?>
<p>Id<br>
  <?php echo form_input('id', $this->input->post('id')); ?>
  <?php echo form_error('id'); ?>
</p>
<p>Email<br>
  <?php echo form_input('email', $this->input->post('email')); ?>
  <?php echo form_error('email'); ?>
</p>
<p>Password<br>
  <?php echo form_input('password', $this->input->post('password')); ?>
  <?php echo form_error('password'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save changes'); ?>
  or <?php echo anchor('users', 'cancel'); ?>
</p>
<?php echo form_close(); ?>