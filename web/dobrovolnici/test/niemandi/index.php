<?php
include "head.php";
include "header.php";
?>
<body onload="hideSplash()">
<div class="splash" style="z-index: 1; position: fixed;">
    <img class="title_img" src="https://horem-dolem.cz/dobrovolnici/test/niemandi/resource/header_title.png">
    <div class="now playing" id="music">
        <span class="bar n1">A</span>
        <span class="bar n2">B</span>
        <span class="bar n3">c</span>
        <span class="bar n4">D</span>
        <span class="bar n5">E</span>
        <span class="bar n6">F</span>
        <span class="bar n7">G</span>
        <span class="bar n8">H</span>
    </div>
</div>
<main>
    <div class="container ">
        <div class="jumbotron">
            <div class="row pb-5">
                <div class="col-md-3 align-self-center">
                    <h1 class="display-4">NIEMANDI</h1>
                </div>
                <div class="col-md-9">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active shadow" data-interval="2000">
                                <img class="d-block w-100" src="resources/photos/home/1.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item shadow" data-interval="2000">
                                <img class="d-block w-100" src="resources/photos/home/2.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item shadow" data-interval="2000">
                                <img class="d-block w-100" src="resources/photos/home/3.jpg" alt="Third slide">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <p class="lead">Jsme mladá rocková kapela Niemandi, která vznikla v prosinci roku 2020 v Želechovicích nad Dřevnicí. </p>
            <hr class="my-4">
            <p></p>
            <p class="lead justify-content-center">
                <a class="myButton" href="https://horem-dolem.cz/dobrovolnici/test/niemandi/kde-nas-najdete" role="button">Zjistěte, kde hrajeme!</a>
            </p>
        </div>

    </div>

</main>
</body>
<?php include "footer.php";?>
</html>
<script>
    function hideSplash(){
        var splashScreen = document.querySelector('.splash');
        setTimeout(()=>{
            splashScreen.style.transform = "translateY(-100%)";
        },1500)
        setTimeout(()=>{
            splashScreen.remove()
        },2100)
    }
    var splashScreen = document.querySelector('.splash');
    splashScreen.addEventListener('click',()=>{
        var splashScreen = document.querySelector('.splash');
        splashScreen.style.transform = "translateY(-100%)";
        setTimeout(()=>{
            splashScreen.remove();
        },610)
    });

    function setActiveSection(){
        const odkaz = window.location.href;
        const link = document.querySelector('a[href= odkaz]');
        link.parentElement.classList.add('active-link');
    }
</script>
