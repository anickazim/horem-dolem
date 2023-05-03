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


<!-- head and header, title variable -->
<?php $title = 'Dobrovolnictví'; include $_SERVER['DOCUMENT_ROOT'].'/header.php' ?>
<!-- head and header, title variable -->

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

        /**if (document.getElementById(name).value == "") {

            document.getElementById(name).classList.add("is-invalid");

        } else {

            document.getElementById(name).classList.remove("is-invalid");

            document.getElementById(name).classList.add("is-valid");

        }**/

    }

    function ValidateEmail(name) {


        var x = document.getElementById(name).value;

        var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;


        if (x.length > 0){
            if (x.match(validRegex)) {

                document.getElementById(name).classList.remove("is-invalid");

                document.getElementById(name).classList.add("is-valid");

            } else {

                document.getElementById(name).classList.add("is-invalid");

            }
        }
        else{
            document.getElementById(number).classList.remove("is-invalid");
            document.getElementById(number).classList.remove("is-valid");
        }

    }

    function ValidateBirthNumber(number) {


        var x = document.getElementById(number).value;

        var validRegex = /^[0-9]{6}(?:\/[0-9]+)|[0-9]{9,10}$/;

        if (x.length > 0){
            if (x.match(validRegex)) {

                document.getElementById(number).classList.remove("is-invalid");

                document.getElementById(number).classList.add("is-valid");

            } else {

                document.getElementById(number).classList.add("is-invalid");

            }
        }
        else{
            document.getElementById(number).classList.remove("is-invalid");
            document.getElementById(number).classList.remove("is-valid");
        }



    }

</script>


<!-- footer -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/footer.php' ?>
<!-- footer -->  



