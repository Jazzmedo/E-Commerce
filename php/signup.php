<?php

include 'config.php';

if (isset($_POST['submit'])) {

  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
  $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));

  $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

  if (mysqli_num_rows($select) > 0) {
    header('location:used.php');
  } else {
    mysqli_query($conn, "INSERT INTO `user_form`(name, email, password) VALUES('$name', '$email', '$pass')") or die('query failed');
    header('location:succ.php');
  }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up</title>
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
            <i class="fas fa-user"></i>
          </div>
          <div>
            <h5>Username</h5>
            <input class="input" type="text" name="name" id="username" required />
          </div>
        </div>
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
        <div class="input-div" two>
          <div class="i">
            <i class="fas fa-lock"></i>
          </div>
          <div>
            <h5>Confirm Password</h5>
            <input class="input" name="cpassword" id="password" type="password" required />
          </div>
        </div>
        <div class='field'>
          <input type="submit" class="btn" name='submit' value="Sign Up" />
        </div>
        <div class='links'>
          <a href="login.php">Already Have Account? Login Now</a>
        </div>
      </form>
    </div>
  </div>
  <script type="text/javascript" src="../js/main.js">
  </script>
</body>

</html>