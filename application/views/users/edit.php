<h3>Edit user</h3>
<?php echo form_open('users/edit/' . $user->id); ?>
<p>Id<br>
  <?php echo form_input('id', $user->id); ?>
  <?php echo form_error('id'); ?>
</p>
<p>Email<br>
  <?php echo form_input('email', $user->email); ?>
  <?php echo form_error('email'); ?>
</p>
<p>Password<br>
  <?php echo form_input('password', $user->password); ?>
  <?php echo form_error('password'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save changes'); ?>
  or <?php echo anchor('users', 'cancel'); ?>
</p>
<?php echo form_close(); ?>