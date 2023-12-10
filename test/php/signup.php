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
    <?php
    include("config.php");
    if (isset($_POST["submit"])) {
      $username = $_POST["username"];
      $email = $_POST["email"];
      $password = $_POST["password"];
      // Verify Unique Email 
      $verify_query = mysqli_query($con, "SELECT email FROM users WHERE email='$email'");
      if (mysqli_num_rows($verify_query) != 0) {
        echo "<div class='message'>
          <p>This Email is already used!, Try Another one.</p>
          </div><br>";
        echo "<a href='signup.php'><button class='btn'>Go Back</button>";
      } else {
        mysqli_query($con, "INSERT INTO users(username,email,passwordd) VALUES ('$username','$email','$password')") or die("Error Occured!\n");
        echo "<div class='message'>
          <p>Registeration Successfully!</p>
          </div><br>";
        echo "<a href='index.php'><button class='btn'>Login Now</button>";
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
              <i class="fas fa-user"></i>
            </div>
            <div>
              <h5>Username</h5>
              <input class="input" type="username" name="username" id="username" required />
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
          <div class='field'>
            <input type="submit" class="btn" name='submit' value="Sign Up" />
          </div>
          <div class='links'>
            <a href="login.php">Already Have Account? Login Now</a>
          </div>
        </form>
      </div>
    <?php } ?>
  </div>
  <script type="text/javascript" src="../js/main.js"></script>
</body>

</html>