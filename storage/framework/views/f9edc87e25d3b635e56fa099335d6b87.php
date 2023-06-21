<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="custom.css">
</head>
<body>
  <div class="container">
    <form action="/login" method="post">
      <h2>Login</h2>
      <div class="input-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="input-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <input type="submit" value="Login">
    </form>
  </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\task\resources\views/login.blade.php ENDPATH**/ ?>