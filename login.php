<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="loginStyle.css">
    <title>Login</title>
  </head>
  <body>
    <h1>Login</h1>
    <form action="loginLogic.php" method="post">
      <input type="text" name="username" placeholder="username" required><br>
      <br>
      <input type="password" name="password" placeholder="password" required><br>
      <br>
      <button type="submit" name="submit">Login</button>
    </form>
    <br>
    <a href="index.php">Create new account</a>

  </body>
</html>
