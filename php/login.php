<?php

include 'config.php';
session_start();

if (isset($_POST['submit'])) {

  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

  $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

  if (mysqli_num_rows($select) > 0) {
    $row = mysqli_fetch_assoc($select);
    $_SESSION['user_id'] = $row['id'];
    header('location:index.php');
  } else {
    header('location:wrong.php');
  }

}

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
  </div>
  <script type="text/javascript" src="../js/main.js"></script>
</body>

</html>