<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./Assets/CSS/style.css">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Login</title>
</head>
<body>
      <form class="Login degrade action" action="index.php?action=loguser" method="post">
        <div class="form_ctn">
          <h2>Login</h2>
          <a id="croix" href="#"><i class="fa fa-times fa-1g" aria-hidden="true"></i></a>
          <input id="userLogin" type="text" name="pseudo" value="user">
          <input id="passwordLogin" type="text" name="password" value="password">
          <input id="buttonLogin" type="submit" name="Login" value="Login">
        </div>
      </form>
</body>
</html>
