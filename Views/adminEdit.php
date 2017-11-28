<?php
if (!isset($_SESSION) || $_SESSION['role'] != 1) {
    header('location:https://www.google.be/search?q=gros+con&source=lnms&tbm=isch&sa=X&ved=0ahUKEwixrMHSxt7XAhWiiVQKHfYSD8sQ_AUICigB&biw=1855&bih=965#imgrc=h7EfowHDDHaUpM:');
    die();
}
?>
<div id="main">
    <div class="content">
        <form id="editForm" action="index.php?action=editImage" method="post">
            <h1>Edit Image</h1>
            <input type="text" value="<?= isset($_POST['titre']) ? $_POST['titre'] : "" ?>" name="titre">
            <input type="text" value="<?= isset($_POST['description']) ? $_POST['description'] : "" ?>"
                   name="description" ?>
            <input type="hidden" value="<?= isset($_POST['id']) ? $_POST['id'] : "" ?>" name="id">
            <div>
                <input type="submit" value="save changes">
            </div>
        </form>
    </div>
</div>