<?php include('./Views/login.php') ?>
<div id="acc_cont">
    <form id="searchForm" action="index?action=searchImage">
        <input id="searchBar" type="text" placeholder="search">
    </form>
    <div class='grid'>
      <?php foreach ($images as $image)
      echo "
          <div class='grid-item'>
            <img src='{$image->chemin}'>
              <div class='desc'>
                <h4>{$image->titre}</h4>
              </div>
          </div>"
      ?>
    </div>
</div>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script>
    var elem = document.querySelector('.grid');
    console.log(elem);
    var msnry = new Masonry(elem, {
        itemSelector: '.grid-item',
       });
</script>
