<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
</head>
<body>
  <h2>Create an Account</h2>

  <?php
  if (isset($_SESSION['register_error'])) {
      echo '<p style="color:red;">' . htmlspecialchars($_SESSION['register_error']) . '</p>';
      unset($_SESSION['register_error']);
  }
  ?>

  <form action="process_register.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" name="username" required><br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" required><br><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br><br>

    <label for="confirm_password">Confirm Password:</label>
    <input type="password" name="confirm_password" required><br><br>

    <input type="submit" value="Register">
  </form>

  <p>Already have an account? <a href="login.php">Login here</a></p>
</body>
</html>
