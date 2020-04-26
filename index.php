<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
    <title>User registration</title>
  </head>
  <body>
    <h1>Create new account</h1>
    <form action="register.php" method="post">
      <input type="text" name="username" placeholder="username" required><br>
      <br>
      <input type="password" name="password1" placeholder="password" required minlength="6"><br>
      <br>
      <input type="password" name="password2" placeholder="repeat password" required><br>
      <br>
      <button type="submit" name="submit">Register</button>
    </form>
    <br>
    <a href="login.php">I already have an account</a>
  </body>
</html>
