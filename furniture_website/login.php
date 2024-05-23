<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="container">
  <div class="header">
  </div>
  <div id="loginModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <form method="post" action="login.php" class="facebook-login-form">
        <?php include('errors.php'); ?>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" autocomplete="off" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="login_user">Log In</button>
        </div>
        <p class="signup-link">Don't have an account? <a href="register.php">Sign up</a></p>
      </form>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>
