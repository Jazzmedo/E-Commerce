<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="../css/styles.css" />
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <link rel="icon" type="image/x-icon" href="../img/Logo.ico">
</head>

<body>
  <div class="container">
    <?php

    include("config.php");
    if (isset($_POST['submit'])) {
      $email = mysqli_real_escape_string($con, $_POST['email']);
      $password = mysqli_real_escape_string($con, $_POST['password']);

      $result = mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND passwordd='$password' ") or die("Select Error");
      $row = mysqli_fetch_assoc($result);

      if (is_array($row) && !empty($row)) {
        $_SESSION['valid'] = $row['email'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['id'] = $row['id'];
      } else {
        header("Location:wrong.php");
      }
      if (isset($_SESSION['valid'])) {
        header("Location: index.php");
      }
    } else {


      ?>
      <div class="img">
        <img src="../img/logo.png" />
      </div>
      <div class="login-container">
        <form action="" method="post">
          <img class="avator" src="../img/watch8.png" />
          <h2>Best Watches</h2>
          <div class="input-div" one>
            <div class="i">
              <i class="fas fa-envelope"></i>
            </div>
            <div>
              <h5>Email</h5>
              <input class="input" name="email" id="email" type="email" required />
            </div>
          </div>
          <div class="input-div" two>
            <div class="i">
              <i class="fas fa-lock"></i>
            </div>
            <div>
              <h5>Password</h5>
              <input class="input" name="password" id="password" type="password" required />
            </div>
          </div>
          <div class='field'>
            <input type="submit" class="btn" name='submit' value="Login" />
          </div>
          <div class='links'>
            <a href="signup.php">Don't Have Account? Sign Up Now</a>
          </div>
        </form>
      </div>
    <?php } ?>
  </div>
  <script type="text/javascript" src="../js/main.js"></script>
</body>

</html>