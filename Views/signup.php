<?php
echo $_SESSION ['erreur'];
?>


<form class="Login degrade" action="index.php?action=signupuser" method="post">
    <div class="form_ctn">
        <h2>Sign up</h2>
        <input id="userLogin" type="text" name="pseudo" placeholder="user">
        <input id="passwordLogin" type="password" name="password" placeholder="password" required title="8 caractères minimum avec une majuscule, une minuscule et un chiffre">
        <input id="confirmation" type="password" name="confirmation" placeholder="confirmation password">
        <input id="buttonLogin" type="submit" name="Sign up" value="Sign up">
    </div>
</form>
</body>
</html>


<!--<input pattern=".{8,}" id="passwordLogin" type="password" name="password" placeholder="password" required title="8 caractères minimum avec une majuscule, une minuscule et un chiffre">
<input pattern=".{8,}" id="confirmation" type="password" name="confirmation" placeholder="confirmation password">-->