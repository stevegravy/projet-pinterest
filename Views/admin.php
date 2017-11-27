<?php
// if ($_SESSION['role'] != 1){
//   header('location:https://www.google.be/search?q=gros+con&source=lnms&tbm=isch&sa=X&ved=0ahUKEwixrMHSxt7XAhWiiVQKHfYSD8sQ_AUICigB&biw=1855&bih=965#imgrc=h7EfowHDDHaUpM:');
// }
?>
<table id="tableAdmin">
  <?php foreach ($images as $image) { ?>
    <tr>
      <td><?php echo $image->titre; ?></td>
      <td><?php echo $image->description; ?></td>
      <?php echo "<td>
        <div class='actions'>
          <form action='index.php?action=editImage' method='post' >
          <button onclick='this.form.submit()'>edit</button>
          <input type='hidden' value=' 'name='mail' required>
          <input type='hidden' value=' 'name='id'>
        </form></td><td>
        <form action='index.php?action=deleteimage' method='post'>
          <button onclick='this.form.submit()'>delete</button>
          <input type='hidden' value='{$image->id}' name='id'>
         </form></td>
    </div>
  </td>";
  echo "</tr>";
 }
?>
</table>
