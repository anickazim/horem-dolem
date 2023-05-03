<?php
if(!empty($_POST)){
    $isFormValid = false;
    if(!empty($_POST["text"]) && !empty($_POST["email"])){
        $message = "Zpráva byla úspěšně odeslána. Její rekapitulaci jsme odeslali na zadaný email.";
        $isFormValid = true;
    }

}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <base href="/" >

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- ikony-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- font-text-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600&display=swap" rel="stylesheet">

    <!-- font-nadpisy-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@700&display=swap" rel="stylesheet">

    <!-- moje css-->
    <link href="css/HD-web-css.css" rel="stylesheet">

    <!-- ikonka-->
    <link rel="shortcut icon" href="fotky/grafika/favicon.ico" type="image/x-icon">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4KF6574JRJ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-4KF6574JRJ');

        function ValidateEmail(name) {


            var x = document.getElementById(name).value;

            var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;


            if (x.match(validRegex)) {

                document.getElementById(name).classList.remove("is-invalid");

                document.getElementById(name).classList.add("is-valid");

            } else {

                document.getElementById(name).classList.add("is-invalid");

            }


        }
    </script>
    <script>
        <?php
        if(!empty($_POST)){
            if($isFormValid){
                echo "setTimeout(function() { alert(' $message ');";
                echo "window.location.replace('https://horem-dolem.cz/kontakt/'); },300);";
                require 'mailer.php';
            }
        }

        ?>
    </script>


    <meta name="description" content= "Horem Dolem je dvoudenní festival nejen hudby, ale i divadla, filmu, přednášek a workshopů, který se koná na Provodově (mezi Zlínem a Luhačovicemi)." />
    <meta name="robots" content= "index, follow">
    <title>Horem Dolem | Kontakt</title>
</head>
<body>

<header>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="fotky/grafika/logo-82.png"  height="30" alt="Horem Dolem festival Provodov 2021">
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="/program">Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/aktuality">Aktuality</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/ucinkujici">Účinkující</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Festival</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/o-festivalu">O festivalu</a>
                            <a class="dropdown-item" href="/fotogalerie">Fotogalerie</a>
                            <a class="dropdown-item" href="/prakticke">Praktické</a>
                            <a class="dropdown-item" href="/dobrovolnici">Dobrovolnictví</a>
                            <a class="dropdown-item" href="/transparentni-ucet">Transparentní účet</a>
                            <a class="dropdown-item" href="/press">Press</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Kontakt</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/dobrovolnici/test/">Náš tým</a>
                            <a class="dropdown-item" href="/dobrovolnici/test/napistenam.php">Napište nám</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation -->
</header>


<main>

    <div class="container pt-5 pb-5">

        <h1 class="text-center pt-5 pb-5">NÁŠ TÝM</h1>

        <div class="row pt-0">

            <div class="col-sm-6 col-md-4 item text-center pb-4">
                <img src="fotky/kontakt/vaclav.jpg" class="card-img-top" alt="...">
                <h3 class="pt-4">Václav Zimmermann</h3>
                <p style="margin-bottom:0">ředitel festivalu</p>
                <a href="mailto:vaclav@horem-dolem.cz" style="color: black;">vaclav@horem-dolem.cz</a>
            </div>
            <div class="col-sm-6 col-md-4 text-center item pb-4">
                <img src="fotky/kontakt/matej.jpg" class="card-img-top" alt="...">
                <h3 class="pt-4">Matěj Košárek</h3>
                <p style="margin-bottom:0;color: black">technické zázemí a line-up</p>
                <a href="mailto:matej@horem-dolem.cz" style="color: black;">matej@horem-dolem.cz</a>
            </div>
            <div class="col-sm-6 col-md-4 text-center item pb-4">
                <img src="fotky/kontakt/safa.jpg" class="card-img-top" alt="...">
                <h3 class="pt-4">Ondřej Šafařík</h3>
                <p style="margin-bottom:0;color: black">technické zázemí a gastrozóna</p>
                <a href="mailto:ondrej@horem-dolem.cz" style="color: black;">ondrej@horem-dolem.cz</a>
            </div>
            <div class="col-sm-6 col-md-4 text-center item pb-4">
                <img src="fotky/kontakt/kristyna.jpg" class="card-img-top" alt="...">
                <h3 class="pt-4">Kristýna Sudková</h3>
                <p style="margin-bottom:0;color:black">média a PR</p>
                <a href="mailto:kristyna@horem-dolem.cz" style="color: black;">kristyna@horem-dolem.cz</a>
            </div>
            <div class="col-sm-6 col-md-4 text-center item pb-4">
                <img src="fotky/kontakt/jakub.jpg" class="card-img-top" alt="...">
                <h3 class="pt-4">Jakub Tesař</h3>
                <p style="margin-bottom:0;color:black">koordinátor dobrovolníků</p>
                <a href="mailto:jakub@horem-dolem.cz" style="color: black;">jakub@horem-dolem.cz</a>
            </div>
            <div class="col-sm-6 col-md-4 text-center item pb-4">
                <img src="fotky/kontakt/anna.jpg" class="card-img-top" alt="...">
                <h3 class="pt-4">Anna Zimmermannová</h3>
                <p style="margin-bottom:0;color:black">webmaster</p>
                <a href="mailto:anna@horem-dolem.cz" style="color: black;">anna@horem-dolem.cz</a>
            </div>


            <div
        </div>
    </div>


</main>
<!-- footer -->
<footer>
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row justify-content-center pt-5">

                <a href="https://www.facebook.com/horemdolemprovodov/" target="_blank" class="btn btn-social-icon"><span class="fa fa-facebook"></span></a>

                <a href="https://www.youtube.com/channel/UCymSzmLibkv4Twm-LQPn9vA" target="_blank" class="btn btn-social-icon"><span class="fa fa-youtube"></span></a>

            </div>

            <div class="row justify-content-center">
                <p>info@horem-dolem.cz</p>
            </div>
            <div class="row justify-content-center pt-3">
                <p>&copy;2020</p>
            </div>
        </div>
    </div>
</footer>
<!-- footer -->


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) --
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


</body>
</html>