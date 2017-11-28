<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pinterest</title>
    <link rel="icon" href="./Views/Assets/img/logo.ico" type="image/x-icon"/>
    <!---<meta property="og:image" content="./Views/Assets/img/logo.ico" />--->
    <link rel="stylesheet" href="Views/Assets/CSS/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <?php include('Views/login.php') ?>
<nav id="navbar">
    <a href="./index.php?action=default"><img id="logo" src="./Views/Assets/img/logo.svg" alt=""></a>

    <?php if(isset($_SESSION['login'])): ?>
    <div id="right_content">
        <a href="index.php?action=form" id="add" ><img src="./Views/Assets/img/add.png" alt=""></a>
        <ul id="menu">
            <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 1): ?>
                <a href="index.php?action=admin"><li class="link"><?= $_SESSION['pseudo'] ?></li></a>
            <?php else: ?>
                <a href="index.php?action=accueil"><li class="link"><?= $_SESSION['pseudo'] ?></li></a>
            <?php endif; ?>
          <a href="./index.php?action=logout"><li class="link">Logout</li></a>
        </ul>
      <div id="nav_list">
        <ul id="burger">
          <a id="threeLi" href="#"><li><i class="fa fa-bars" aria-hidden="true"></i></li></a>
          <a id='index' href="index?action=login"><li class="link"><?= $_SESSION['pseudo'] ?></li></a>
          <a href="./index.php?action=logout"><li class="link">Logout</li></a>
          <a href="./form.php"><li class="link">Add</li></a>
        </ul>
      </div>
    </div>
    <?php elseif(!isset($_SESSION['login'])): ?>
        <div id="right_content">
            <ul id="menu">
                <a href="#"><li  id='login' class="link">Login</li></a>
                <a href="index.php?action=getsignuppage"><li class="link">Signup</li></a>
            </ul>
            <div id="nav_list">
                <ul id="burger">
                    <a id="threeLi" href="#"><li><i class="fa fa-bars" aria-hidden="true"></i></li></a>
                    <a id='login2' href="#"><li class="link">Login</li></a>
                    <a href="index?action=logout"><li class="link">Logout</li></a>
                    <a href="./form.php"><li class="link">Add</li></a>
                </ul>
            </div>
        </div>
    <?php endif; ?>
</nav>
