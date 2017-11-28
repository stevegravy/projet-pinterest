<form class="Login degrade action" action="index.php?action=loginuser" method="post">
    <div class="form_ctn">
        <h2>Login</h2>
        <a id="croix" href="#"><i class="fa fa-times fa-1g" aria-hidden="true"></i></a>
        <input id="userLogin" type="text" name="pseudo" placeholder="pseudo">
        <input pattern=".{8,}" id="passwordLogin" type="password" name="password" placeholder="password" required title="8 caractères minimum avec une majuscule, une minuscule et un chiffre">
        <input id="buttonLogin" type="submit" name="Login" value="Login">
    </div>
</form>
