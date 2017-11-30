<form class="Login" id="uploadForm" enctype="multipart/form-data" method="post" action="index.php?action=imageupload">
    <div class="form_ctn">
        <h2>Upload</h2>
        <p id="errs"><?= isset($_SESSION['errorsImg']) && $_SESSION['errorsImg'] == 1 ? "Veuillez ajouter un titre à votre image" : "" ?></p>
        <p id="errs"><?= isset($_SESSION['errorsImg']) && $_SESSION['errorsImg'] == 2 ? "fichier image trop large, veuillez une plus petite image" : "" ?></p>
        <input id="fileload" type="file" size="32" name="image" value="">
        <input id="textForm" type="text" name="title" placeholder="title">
        <textarea id="description" type="text" name="description" placeholder="description"></textarea>
        <input id="buttonForm" type="submit" name="Submit" value="upload">
    </div>
</form>
