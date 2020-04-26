<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
    <title>Registration</title>
  </head>
  <body>
    <h1>Create new account</h1>
    <form action="register.php" method="post">
      <input type="text" name="username" placeholder="username" required><br>
      <input type="password" name="pw" placeholder="password" required><br>
      <input type="password" name="pw2" placeholder="repeat password" required><br>
      <button type="submit" name="submit">Register</button>
    </form>
    <br>
  </body>
</html>
