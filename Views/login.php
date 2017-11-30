<form class="Login degrade action" action="index.php?action=loginuser" method="post">
    <div class="form_ctn">
        <h2>Login</h2>
        <?php if (isset($_SESSION['erreur']) && $_SESSION['erreur'] == 1): ?>
            <div class="erreur">
                <p>Problème de validation du mot de passe ou du pseudo! <br> Essayez encore...</p>
            </div>
        <?php endif; ?>
        <a id="croix" href="#"><i class="fa fa-times fa-1g" aria-hidden="true"></i></a>
        <input id="userLogin" type="text" name="pseudo" placeholder="pseudo">
        <input id="passwordLogin" type="password" name="password" placeholder="password">
        <input id="buttonLogin" type="submit" name="Login" value="Login">
    </div>
</form>


<span id="err"><?= isset($_SESSION['erreur']) ? $_SESSION['erreur'] : "" ?></span>

<script>

    $error = document.querySelector("#err");
    form = document.querySelector(".Login");
    console.log(form);
    console.log($error.innerHTML);
    if ($error.innerHTML) {
        form.classList.add("actionOnclick");
    }
</script>