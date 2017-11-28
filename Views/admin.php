<?php
if (!isset($_SESSION) || $_SESSION['role'] != 1) {
    header('location:https://www.google.be/search?q=gros+con&source=lnms&tbm=isch&sa=X&ved=0ahUKEwixrMHSxt7XAhWiiVQKHfYSD8sQ_AUICigB&biw=1855&bih=965#imgrc=h7EfowHDDHaUpM:');
    die();
}
?>
<table id="tableAdmin">
    <tr>
        <th>Image</th>
        <th>Titre</th>
        <th>Description</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($images as $image) { ?>
        <?php echo "
            <tr>
                <td><img src='$image->chemin' alt=''></td>
                <td>$image->titre</td>
                <td>$image->description</td>
            <td>
            <div class='actions'>
              <form action='index.php?action=adminEdit' method='post' >
                  <button onclick='this.form.submit()'>edit</button>
                  <input type='hidden' value='{$image->titre}'name='titre'>
                  <input type='hidden' value='{$image->description}'name='description'>
                  <input type='hidden' value='{$image->id}'name='id'>
              </form>
              <form action='index.php?action=deleteImage' method='post'>
                  <button onclick='this.form.submit()'>delete</button>
                  <input type='hidden' value='{$image->id}' name='id'>
              </form>
            </div>
        </td>
        </tr>";
    }
    ?>
</table>
