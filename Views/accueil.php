<?php include('./Views/login.php') ?>
<div id="acc_cont">

    <form id="searchForm" action="index?action=searchImage">
        <input id="searchBar" type="text" placeholder="search">
    </form>

    <div class="grid">
        <div class="grid-item">
            <img src="./public/images/20733-all-american-club-sandwich-600x600.jpg" alt="">
            <div class="desc">

                <h4>adipisicing elit. Porro, sed.</h4>
            </div>
        </div>
        <div class="grid-item">
            <img src="./public/images/image.png" alt="">
            <div class="desc">

                <h4>sit amet, consectetur adipisicing elit. Porro, sed.</h4>
            </div>
        </div>
        <div class="grid-item">
            <img src="./public/images/Moulin-Rouge-1-_-630x405-_-©-Moulin-Rouge-OTCP.jpg" alt="">
            <div class="desc">

                <h4>dolor sit amet, consectetur adipisicing elit. Porro, sed.</h4>
            </div>
        </div>
        <div class="grid-item">
            <img src="./public/images/badrutts-palace-hotel_kings-club-4.jpg" alt="">
            <div class="desc">

                <h4>Lorem ipsum dolor sit adipisicing elit. Porro, sed.</h4>
            </div>
        </div>
        <div class="grid-item">
            <img src="./public/images/decouvrir-marseille.jpg" alt="">
            <div class="desc">

                <h4>Lorem ipsum dolor sit adipisicing elit. Porro, sed.</h4>
            </div>
        </div>
        <div class="grid-item">
            <img src="./public/images/lol.jpg" alt="">
            <div class="desc">

                <h4>Lorem ipsum dolor sit elit. Porro, sed.</h4>
            </div>
        </div>
        <div class="grid-item">
            <img src="./public/images/Pasted%20Image_%20Nov%2024,%202017%20-%203_11_27pm%20(1).png" alt="">
            <div class="desc">

                <h4>Lorem ipsum dolor sit adipisicing elit. Porro, sed.</h4>
            </div>
        </div>
        <div class="grid-item">
            <img src="./public/images/Pasted%20Image_%20Nov%2024,%202017%20-%203_12_38pm.png" alt="">
            <div class="desc">

                <h4>Lorem consectetur adipisicing elit. Porro, sed.</h4>
            </div>
        </div>
        <div class="grid-item">
            <img src="./public/images/20733-all-american-club-sandwich-600x600.jpg" alt="">
            <div class="desc">

                <h4>Consectetur adipisicing elit. Porro, sed.</h4>
            </div>
        </div>
        <div class="grid-item">
            <img src="./public/images/image.png" alt="">
            <div class="desc">

                <h4>Lamet, consectetur adipisicing elit. Porro, sed.</h4>
            </div>
        </div>
        <div class="grid-item">
            <img src="./public/images/Moulin-Rouge-1-_-630x405-_-©-Moulin-Rouge-OTCP.jpg" alt="">
            <div class="desc">

                <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, sed.</h4>
            </div>
        </div>
        <div class="grid-item">
            <img src="./public/images/badrutts-palace-hotel_kings-club-4.jpg" alt="">
            <div class="desc">

                <h4>Lorem ipsum, consectetur adipisicing elit. Porro, sed.</h4>
            </div>
        </div>
        <div class="grid-item">
            <img src="./public/images/decouvrir-marseille.jpg" alt="">
            <div class="desc">

                <h4>Lorem ipsum dolor sit adipisicing elit. Porro, sed.</h4>
            </div>
        </div>
        <div class="grid-item">
            <img src="./public/images/lol.jpg" alt="">
            <div class="desc">

                <h4>Lorem ipsum dolor sit adipisicing elit. Porro, sed.</h4>
            </div>
        </div>
        <div class="grid-item">
            <img src="./public/images/Pasted%20Image_%20Nov%2024,%202017%20-%203_11_27pm%20(1).png" alt="">
            <div class="desc">

                <h4>Lorem ipsum dolor sit adipisicing elit. Porro, sed.</h4>
            </div>
        </div>
        <div class="grid-item">
            <img src="./public/images/Pasted%20Image_%20Nov%2024,%202017%20-%203_12_38pm.png" alt="">
            <div class="desc">

                <h4>Lorem ipsum dolor sit amet, consectetur orro, sed.</h4>
            </div>
        </div>
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
