<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./Views/Assets/CSS/style.css">
    <title>Pinterest</title>

    <style>
        .grid-item { width: 200px; }
        img{
            width: 100%;
        }
    </style>
</head>
<body>
<?php include('./Views/login.php') ?>
<div id="acc_cont">
    <div class="grid">
        <div class="grid-item">
            <img src="./public/images/20733-all-american-club-sandwich-600x600.jpg" alt="">
            <h5>titre</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, sed.</p>
        </div>
        <div class="grid-item">
            <img src="./public/images/image.png" alt="">
            <h5>titre</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, sed.</p>
        </div>
        <div class="grid-item">
            <img src="./public/images/Moulin-Rouge-1-_-630x405-_-©-Moulin-Rouge-OTCP.jpg" alt="">
            <h5>titre</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, sed.</p>
        </div>
        <div class="grid-item">
            <img src="./public/images/badrutts-palace-hotel_kings-club-4.jpg" alt="">
            <h5>titre</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, sed.</p>
        </div>
        <div class="grid-item">
            <img src="./public/images/decouvrir-marseille.jpg" alt="">
            <h5>titre</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, sed.</p>
        </div>
        <div class="grid-item">
            <img src="./public/images/lol.jpg" alt="">
            <h5>titre</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, sed.</p>
        </div>
        <div class="grid-item">
            <img src="./public/images/Pasted%20Image_%20Nov%2024,%202017%20-%203_11_27pm%20(1).png" alt="">
            <h5>titre</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, sed.</p>
        </div>
        <div class="grid-item">
            <img src="./public/images/Pasted%20Image_%20Nov%2024,%202017%20-%203_12_38pm.png" alt="">
            <h5>titre</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, sed.</p>
        </div>
        <div class="grid-item">
            <img src="./public/images/20733-all-american-club-sandwich-600x600.jpg" alt="">
            <h5>titre</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, sed.</p>
        </div>
        <div class="grid-item">
            <img src="./public/images/image.png" alt="">
            <h5>titre</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, sed.</p>
        </div>
        <div class="grid-item">
            <img src="./public/images/Moulin-Rouge-1-_-630x405-_-©-Moulin-Rouge-OTCP.jpg" alt="">
            <h5>titre</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, sed.</p>
        </div>
        <div class="grid-item">
            <img src="./public/images/badrutts-palace-hotel_kings-club-4.jpg" alt="">
            <h5>titre</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, sed.</p>
        </div>
        <div class="grid-item">
            <img src="./public/images/decouvrir-marseille.jpg" alt="">
            <h5>titre</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, sed.</p>
        </div>
        <div class="grid-item">
            <img src="./public/images/lol.jpg" alt="">
            <h5>titre</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, sed.</p>
        </div>
        <div class="grid-item">
            <img src="./public/images/Pasted%20Image_%20Nov%2024,%202017%20-%203_11_27pm%20(1).png" alt="">
            <h5>titre</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, sed.</p>
        </div>
        <div class="grid-item">
            <img src="./public/images/Pasted%20Image_%20Nov%2024,%202017%20-%203_12_38pm.png" alt="">
            <h5>titre</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, sed.</p>
        </div>
    </div>
</div>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script type="text/javascript" src='./Views/Assets/JS/app.js'></script>
<script>
    var elem = document.querySelector('.grid');
    var msnry = new Masonry( elem, {
        // options
        itemSelector: '.grid-item',
        columnWidth: 200
    });

    // element argument can be a selector string
    //   for an individual element
    var msnry = new Masonry( '.grid', {
        // options
    });
</script>
</body>
</html>
