<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./Assets/CSS/style.css">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
  <title>Login</title>
</head>
<body>
      <form class="Login degrade" action="../Model/User.php" method="post">
        <div class="form_ctn">
          <h2>Login</h2>
          <input id="userLogin" type="text" name="user" value="user">
          <input id="passwordLogin" type="text" name="password" value="password">
          <input id="buttonLogin" type="submit" name="Login" value="Login">
        </div>
      </form>
</body>
</html>
