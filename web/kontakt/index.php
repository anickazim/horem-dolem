<?php
if(!empty($_POST)){
    $isFormValid = false;
    if(!empty($_POST["text"]) && !empty($_POST["email"])){
        $message = "Zpráva byla úspěšně odeslána. Její rekapitulaci jsme odeslali na zadaný email.";
        $isFormValid = true;
    }

}
?>

<!-- head and header, title variable -->
<?php $title = 'Kontakt'; include $_SERVER['DOCUMENT_ROOT'].'/header.php' ?>
<!-- head and header, title variable -->


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


            <div>
        </div>
    </div>


</main>
<!-- footer -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/footer.php' ?>
<!-- footer -->

</body>
</html>