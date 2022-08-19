
<?php $this->load->view('_head'); ?>

<div class="container">

  <img src="public/themes/default/img/logo.png">

  <nav>
    <?php echo anchor('dashboard', 'Dashboard'); ?>
    <?php echo anchor('users', 'Users'); ?>
    <?php echo anchor('logout', 'Log out'); ?>
  </nav>

  <?php echo $content; ?>
</div>

<style>
  .container img {
    width: 128px;
  }

  nav a {
    margin-right: 10px;
  }
</style>
