<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Signup</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="container">
  <div class="header">
  </div>

  <form method="post" action="register.php" class="facebook-registration-form">
    <?php include('errors.php'); ?>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" value="<?php echo $username; ?>" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password_1" required>
    </div>
    <div class="form-group">
        <label for="confirm-password">Confirm Password</label>
        <input type="password" id="confirm-password" name="password_2" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary" name="reg_user">Sign Up</button>
    </div>
    <p class="terms">By clicking Sign Up, you agree to our <a href="#">Terms</a>, <a href="#">Data Policy</a> and <a href="#">Cookie Policy</a>.</p>
    <p class="login-link">Already have an account? <a href="login.php">Log In</a></p>
</form>

</body>
</html>
