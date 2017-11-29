<div class="overlay">
    <?php include('./Views/login.php') ?>
    <div id="acc_cont">
        <form id="searchForm" action="index?action=searchImage">
            <input id="searchBar" type="text" placeholder="search">
        </form>
        <div class='grid'>
            <?php foreach ($images as $image)
                echo "
          <a class='grid-item' class='image-popup-vertical-fit' href='{$image->chemin}' data-caption='{$image->description}' title='Caption. Can be aligned to any side and contain any HTML'>
            <img src='{$image->chemin}' alt='{$image->titre}'>
              <div class='desc'>
                  <h4>{$image->titre}</h4>
              </div>
          </a>"
            ?>
        </div>
    </div>
</div>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var elem = document.querySelector('.grid');
        var msnry = new Masonry(elem, {
            itemSelector: '.grid-item',
        });
    });
</script>
