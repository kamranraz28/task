<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="custom.css">
</head>
<body>
<form class="my-form" action="/show" method="POST">
<?php echo csrf_field(); ?>
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>

  <label for="password">Password: </label>
  <input type="password" id="password" name="password" required>

  <input type="submit" value="Submit">
</form>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\task\resources\views/add.blade.php ENDPATH**/ ?>