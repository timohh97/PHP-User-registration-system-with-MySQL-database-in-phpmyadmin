<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reset password</title>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
    <script src="sendEmail.js"></script>
  </head>
  <body style="text-align: center;">
    <h1>Reset password</h1>
    <form method="POST" action="https://formspree.io/website.ts97@gmail.com">
      <label>Your email:</label><br>
      <input type="text" class="email" placeholder="Your email" required><br>
      <input id="confirm" type="hidden" name="_cc" value="" />
      <input id="linkForCreatingNewPassword" type="hidden" value="Test" />
      <br>
      <button class="resetPasswordbutton" type="submit">Reset password</button>
    </form>
    <br>
      <a href="login.php">Go back</a>
  </body>
</html>
