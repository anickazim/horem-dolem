<?php

if (!empty($_POST)) {

    $_isFormValid = true;
    if ($_POST["name"] == "") {
        $_isFormValid = false;
        $_nameClass = "is-invalid";

    }
    else {

        $_nameClass = null;

    }
    if ($_POST["surname"] == "") {
        $_isFormValid = false;
        $_surnameClass = "is-invalid";

    }
    else {

        $_surnameClass = null;

    }
    if ($_POST["email"] == "") {
        $_isFormValid = false;
        $_emailClass = "is-invalid";

    }
    else {

        $_emailClass = null;

    }
    if ($_POST["birthNumber"] == "") {
        $_isFormValid = false;
        $_birthNumberClass = "is-invalid";

    }
    else {

        $_birthNumberClass = null;

    }
    if ($_POST["date"] == "") {
        $_isFormValid = false;
        $_dateClass = "is-invalid";

    }
    else {

        $_dateClass = null;

    }
    if ($_POST["address"] == "") {
        $_isFormValid = false;
        $_addressClass = "is-invalid";

    }
    else {

        $_addressClass = null;

    }
    if ($_POST["city"] == "") {
        $_isFormValid = false;
        $_cityClass = "is-invalid";

    }
    else {

        $_cityClass = null;

    }

    if($_isFormValid) {
        header('refresh:4;url=../');

        require "mailer.php";


    }


}

?>


<html lang="en">
<head>

    <!-- Required meta tags -->

    <meta charset="utf-8">


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <base href="/">


    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <!-- ikony-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- loader ikona-->

    <link rel="stylesheet" href="/dobrovolnici/resources/styles.css">

    <!-- jquery ikona-->

    <link rel="script" href="/dobrovolnici/resources/jquery.js">

    <!-- font-text-->

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600&amp;display=swap" rel="stylesheet">


    <!-- font-nadpisy-->

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@700&amp;display=swap" rel="stylesheet">


    <!-- moje css-->

    <link href="css/HD-web-css.css" rel="stylesheet">


    <!-- ikonka-->

    <link rel="shortcut icon" href="fotky/grafika/favicon.ico" type="image/x-icon">


    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-4KF6574JRJ"></script>


    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());


        gtag('config', 'G-4KF6574JRJ');

    </script>


    <meta name="description"
          content="Horem Dolem je dvoudenní festival nejen hudby, ale i divadla, filmu, přednášek a workshopů, který se koná na Provodově (mezi Zlínem a Luhačovicemi).">

    <meta name="robots" content="index, follow">

    <title>Horem Dolem | Dobrovolnictví</title>

</head>

<body>


<header>

    <!-- Navigation -->

    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">

        <div class="container">

            <a class="navbar-brand" href="/">

                <img src="fotky/grafika/logo-82.png" alt="Horem Dolem festival Provodov 2021" height="30">

            </a>

            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

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

                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="true" aria-expanded="false">Festival</a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/o-festivalu">O festivalu</a>
                            <a class="dropdown-item" href="/fotogalerie">Fotogalerie</a>
                            <a class="dropdown-item" href="/prakticke">Praktické</a>
                            <a class="dropdown-item" href="/dobrovolnici">Dobrovolnictví</a>
                            <a class="dropdown-item" href="/transparentni-ucet">Transparentní účet</a>
                            <a class="dropdown-item" href="/press">Press</a>
                        </div>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="/kontakt">Kontakt</a>

                    </li>

                </ul>

            </div>

        </div>

    </nav>

    <!-- Navigation -->

</header>


<main>
    <?php
    if($_isFormValid){
        include "redirect.php";
    }
    else {
        include "main.php";
    }
    if(!$_isFormValid && !empty($_POST)){
        echo "<script>
            element = document.getElementById('scrollPoint');
            element.scrollIntoView({behavior:'smooth'});
            </script>";
    }
    ?>
</main>


<!-- footer -->

<footer <?php if($_isFormValid){echo 'class="fixed-bottom"';}?>

<div class="container-fluid bg-light">

    <div class="container">

        <div class="row justify-content-center pt-5">


            <a href="https://www.facebook.com/horemdolemprovodov/" target="_blank" class="btn btn-social-icon"><span
                        class="fa fa-facebook"></span></a>


            <a href="https://www.youtube.com/channel/UCymSzmLibkv4Twm-LQPn9vA" target="_blank"
               class="btn btn-social-icon"><span class="fa fa-youtube"></span></a>


        </div>


        <div class="row justify-content-center">

            <p>info@horem-dolem.cz</p>

        </div>

        <div class="row justify-content-center pt-3">

            <p>©2022</p>

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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>


    function checkAgreement() {

        if (document.getElementById("agreementCheckbox").checked) {

            document.getElementById('agreementCheckbox').checked = true;

            document.getElementById("submitButton").setAttribute('type', 'submit');

            document.getElementById("submitButton").dataset.target = null;

        } else {

            document.getElementById('agreementCheckbox').checked = false;

            document.getElementById("submitButton").setAttribute('type', 'button');

            document.getElementById("submitButton").dataset.target = "#checkboxWarning";

        }


    }


    function markAgreementCheckboxRed() {

        document.getElementById("agreementCheck").classList.add("text-danger");

    }


    function checkInput(name) {

        if (document.getElementById(name).value == "") {

            document.getElementById(name).classList.add("is-invalid");

        } else {

            document.getElementById(name).classList.remove("is-invalid");

            document.getElementById(name).classList.add("is-valid");

        }

    }

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

    function ValidateBirthNumber(number) {


        var x = document.getElementById(number).value;

        var validRegex = /^[0-9]{6}(?:\/[0-9]+)|[0-9]{9,10}$/;


        if (x.match(validRegex)) {

            document.getElementById(number).classList.remove("is-invalid");

            document.getElementById(number).classList.add("is-valid");

        } else {

            document.getElementById(number).classList.add("is-invalid");

        }


    }

</script>


</body>
</html>