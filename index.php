<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Firewall Login</title>
  <style>
    body {
      font-family: Arial;
      background: #f4f4f4;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-box {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
    input {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
    }
    button {
      width: 100%;
      padding: 10px;
      background: #333;
      color: white;
      border: none;
    }
  </style>
</head>
<body>
  <form class="login-box" action="login.php" method="post">
    <h2>Firewall Login</h2>
    <?php if (isset($_SESSION['error'])): ?>
      <p style="color:red;"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></p>
    <?php endif; ?>
    <input type="text" name="user" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit" name="submit">Login</button>
  </form>
</body>
</html>
