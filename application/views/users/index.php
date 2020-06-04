<h3>Users</h3>
<p><?php echo anchor('users/add', 'Add User'); ?></p>
<table>
  <tr>
    <th>Id</th>
    <th>Email</th>
    <th>Password</th>
    <th></th>
  </tr>
  <?php foreach ($users as $user): ?>
  <tr>
    <td><?php echo $user->id; ?></td>
    <td><?php echo $user->email; ?></td>
    <td><?php echo $user->password; ?></td>
    <td>
      <?php echo anchor('users/edit/' . $user->id, 'Edit'); ?>
      <a href='javascript:void(0);' onclick="deleteUser('<?php echo $user->id; ?>', <?php echo $user->id; ?>);" title="Delete">Delete</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>

<script>
  var url = '<?php echo base_url(); ?>';
  function deleteUser(name, id) {
    var c = confirm('Do you really want to delete ' + name + '?');
    if (c === true) {
      window.location = url + 'users/delete/' + id;
    } else {
      return false;
    }
  }
</script>