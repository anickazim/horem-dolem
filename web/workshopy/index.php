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
    var_dump($_isFormValid);
    if($_isFormValid) {
        require "mailer.php";
    }


}

?>


<!-- head and header, title variable -->

<main>
    <?php
    if($_isFormValid){
        include "redirect.php";
    }
    else {
    }
    if(!$_isFormValid && !empty($_POST)){
        echo "<script>
            element = document.getElementById('scrollPoint');
            element.scrollIntoView({behavior:'smooth'});
            </script>";
    }
    $title = 'Workshopy';
    include $_SERVER['DOCUMENT_ROOT'] . '/header.php'
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


<main>

    <div class="container pt-5 pb-5">

        <div class="row d-flex justify-content-center">
            <h1 class="text-center pt-5 pb-2">REGISTRACE NA WORKSHOPY</h1>
        </div>
        <div class="row d-flex justify-content-center">
            <p class="lead text-center">Pro účast na workshopech je z důvodu prezence nutné vyplnit registrační formulář.<br> Workshopy jsou zpoplatněny částkou 100 Kč, která bude k zaplacení u infostánku.</p>
        </div>

        <div class="row" style="margin-top: 10px">

            <div class="col d-flex justify-content-center">

                <form id="contact-form" name="contact-form" method="POST">

                    <!--Grid row-->
                    <div class="row mb-3">
                        <div class="col">

                            <div class="md-form mb-0">

                                <label for="name" class=""><h5>Jméno:</h5></label>

                                <input type="text" id="name" name="name" class="form-control"
                                       onfocusout="checkInput('name')" placeholder="Jméno"
                                       value="<?php echo $_POST["name"] ?>" required>

                                <div id="validationServerUsernameFeedback" class="invalid-feedback">

                                    Je nutno zadat jméno!

                                </div>

                            </div>

                        </div>
                        <div class="col">

                            <div class="md-form mb-0">

                                <label for="name" class=""><h5>Příjmení:</h5></label>

                                <input type="text" id="surname" name="surname"
                                       class="form-control "
                                       onfocusout="checkInput('surname')" placeholder="Příjmení"
                                       value="<?php echo $_POST["surname"] ?>">

                                <div id="validationServerUsernameFeedback" class="invalid-feedback">

                                    Je nutno zadat příjmení!

                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">

                            <div class="md-form mb-0">

                                <label for="name" class=""><h5>Email:</h5></label>

                                <input type="email" id="email" name="email" class="form-control <?php echo $_emailClass ?>"
                                       onfocusout="ValidateEmail('email')" placeholder="Email"
                                       value="<?php echo $_POST["email"] ?>">

                                <div id="validationServerUsernameFeedback" class="invalid-feedback">

                                    Je nutno zadat email ve správném tvaru!

                                </div>

                            </div>

                        </div>
                        <div class="col">

                            <div class="md-form mb-0">

                                <label for="name" class=""><h5>Telefon:</h5></label>

                                <input type="tel" id="phone" name="phone" class="form-control"
                                       placeholder="Telefonní číslo"
                                       value="<?php echo $_POST["email"] ?>">

                            </div>

                        </div>
                    </div>
                    <div class="row mb-3 d-flex justify-content-center">
                        <div class="md-form mb-0">

                            <label for="workshop" class=""><h5>Volba workshopu:</h5></label><br/>

                            <select name="workshop" required id="workshop">

                                <option value="<?php echo $_POST["workshop"] ?>" selected="selected" disabled hidden></option>

                                <option>Dialogické jednání s vnitřním partnerem</option>

                                <option>Divadelní improvizace</option>

                                <option>Tanec</option>

                                <option>Divadlo fórum</option>

                                <option>Zpěv</option>

                            </select>

                        </div>

                    </div>

                    <div class="row form-group d-flex justify-content-center pb-3">
                        <div class="row-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="agreementCheckbox"
                                       onclick="checkAgreement()">
                                <label class="form-check-label" for="gridCheck1" id="agreementCheck">
                                    Souhlasím s platbou na místě 100 Kč
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center text-md-left d-flex justify-content-center pt-2">
                        <button type="button" id="submitButton" class="btn btn-danger" data-toggle="modal"
                                data-target="#checkboxWarning">Odeslat
                        </button>
                    </div>

                </form>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <h1 class="text-center pt-5 pb-5">SEZNAM WORKSHOPŮ</h1>
        </div>

        <div class="container pt-3">
            <div class="row featurette">
                <div class="col-md-7 pl-0 pr-4">
                    <h3 class="featurette-heading">Dialogické jednání s vnitřním partnerem</h3>
                    <p class="lead font-weight-bold">kapacita: 13</p>
                    <p class="font-weight-normal">Jaké to je stát na scéně (anebo v životě), nemít v ruce nic a vše ponechat spontánnímu, a přece kultivovanému dění? Nejde o bohapustou improvizaci, kdy člověk chrlí nápad za nápadem, ale o základní orientaci a koncentrované jednání v této dynamické situaci, kdy jste před ostatními sám za sebe a se sebou. Dialogické jednání studuje principy hry, hráčství a herectví jak v uměleckém, tak neuměleckém kontextu: Jak být v přítomnosti? Jak nehrát? Jak být autentický? Jak si všímat impulzů a jak s nimi naložit? Jak (si) naslouchat a odpovídat (si)? Jak tříbit tělo a inteligenci, empatii, souhru…</p> 
                    <p class="font-weight-normal">Dialogické jednání je hlavní psychosomatickou disciplínou autorsko-herecké katedry DAMU, kterou vymyslel prof. Ivan Vyskočil. Chodí na ně každý semestr stovka zájemců jak z DAMU, tak z jiných vysokých škol, tak lidí z ulice.</p> 
                    <p class="font-weight-normal">Workshop je pro 12 lidí a je určen pro divadelníky, pro kohokoli, kdo pracuje na veřejnosti (s veřejností) anebo pro ty, kdo mají zájem o akční sebepoznání či kondici k dialogu. Dílnu povede Hanka Malaníková, která učí hereckou tvorbu a dialogické jednání na Katedře autorské tvorby a pedagogiky pražské DAMU, kterou od roku 2021 vede. Už jedenáct let patří mezi zdravotní klauny a je to to nejlepší, co se jí v životě mohlo stát. Vedle klaunování, autorského divadla a improvizace se věnuje také rozhlasové tvorbě. Je členkou audio skupiny KINETICON a moderátorkou Českého rozhlasu Vltava.</p> 
                </div>
                <div class="col-md-5 p-0">
                    <img class="featurette-image img-fluid mx-auto" src="fotky/ucinkujici-2023/dialogicke-jednani.jpg" alt="Horem Dolem 2023 workshop">
                    <p class="font-italic font-weight-normal text-center pt-3">„Základem je zkušenost a zakoušení stran jednání (mluvení, hraní) sám se sebou (s vnitřním partnerem, resp. partnery) zpravidla o samotě. Z autopsie snad každému známé tzv. samomluvy nebo samohry. Dále pak jde o to, učit se a naučit se podobně autentické, spontánní, hrající a souhrající jednání (chování a prožívání) produkovat veřejně, v situaci ´veřejné samoty´ (Stanislavskij), za přítomnosti a pozornosti ´diváků´. V situaci, kdy ´jako kdyby´ druzí, diváci, při tom nebyli, s vyloučením zejména zrakového a taktilního kontaktu.“</p> 
                    <p class="font-italic font-weight-normal text-center">Prof. Ivan Vyskočil</p> 
                </div>
            </div>
        </div>

        <div class="container pt-5">
            <div class="row featurette">
                <div class="col-md-7 pl-0 pr-4">
                    <h3 class="featurette-heading">Divadelní improvizace</h3>
                    <p class="lead font-weight-bold">kapacita: 15</p>
                    <p  class="font-weight-normal">Divadelní workshop s Jáchymem Sůrou, který se opírá o jeho dlouholetou zkušenost v improvizaci a studium herectví na JAMU a DAMU. Cvičení, která vás uvolní, naladí, zpřítomní a připraví vás na otevřenou dramatickou hru. Přijďte si to užít!</p> 
                </div>
                <div class="col-md-5 p-0">
                    <img class="featurette-image img-fluid mx-auto" src="fotky/ucinkujici-2023/divadelni-improvizace.jpg" alt="Horem Dolem 2023 workshop">
                </div>
            </div>
        </div>

        <div class="container pt-5">
            <div class="row featurette">
                <div class="col-md-7 pl-0 pr-4">
                    <h3 class="featurette-heading">Tanec salsa</h3>
                    <p class="lead font-weight-bold">kapacita: 20</p>
                    <p class="font-weight-normal">Když náš kolega Kuba nekoordinuje dobrovolníky, tak tančí.</p> 
                    <p class="font-weight-normal">Že to jemu a jeho taneční partnerce Báře Havlové jde, se budete moci přesvědčit na salsovém tanečním workshopu ve středu od 15 hodin, kde vás během hodiny provedou základními kroky tohoto latinskoamerického tance.</p> 
                    <p class="font-weight-normal">Akce je vhodná jak pro jednotlivce, tak páry; od začátečníků po pokročilé - tak neváhejte a přijďte si zakroutit boky!</p> 
                </div>
                <div class="col-md-5 p-0">
                    <img class="featurette-image img-fluid mx-auto" src="fotky/ucinkujici-2023/tanec.jpg" alt="Horem Dolem 2023 workshop">
                </div>
            </div>
        </div>

        <div class="container pt-5">
            <div class="row featurette">
                <div class="col-md-7 pl-0 pr-4">
                    <h3 class="featurette-heading">Divadlo fórum</h3>
                    <p class="lead font-weight-bold">kapacita: 15</p>
                    <p class="font-weight-normal">Co je divadlo fórum? Jaké jsou jeho principy a co přináší tvůrcům a divákům? Každý se někdy v životě ocitáme v útlaku. Ať už vnitřním nebo vnějším. Divadlo fórum je technika, která učí diváky skrze divadelní prožitek takový útlak poznat a čelit mu. Učí je hledat strategie řešení v těžkých situacích, které je obklopují. Brazilský divadelník Augusto Boal tuto techniku vytvořil jako nástroj k aktivizaci společnosti. Divadlo 21. století má několik cílů, a aktivizace společnosti - spolu s kritickým myšlením - mezi ně bezpochyby patří.</p> 
                    <p class="font-weight-normal">Dílna nabídne účastníkům základní vhled do techniky divadla fórum. V případě zájmu si sami vyzkoušíme vytvořit útlakovou situaci a hledat strategie k jejímu řešení. Cílem workshopu je předat poznání, že pokud divák dokáže změnit chod dění ve světě fikce na jevišti, bude toho schopen i ve skutečném životě.</p> 
                    <p class="font-weight-normal">Dílnu povedou:</p> 
                    <p class="font-weight-normal">Michaela Váňová, absolventka Katedry výchovné dramatiky DAMU, režisérka, herečka (Studio 2, Geisslers Hofcomoedianten) a autorka řady představení nejen v pražském divadle Minor.</p> 
                    <p class="font-weight-normal">Bára Černochová, absolventka Katedry výchovné dramatiky DAMU, věnuje se dramatické výchově a divadelnímu lektorství, je autorkou divadla fórum s dětmi staršího školního věku na téma bodyshaming.</p> 
                    <p class="font-weight-normal">Divadlem ke změně! Viva la revolution!</p> 
                </div>
                <div class="col-md-5 p-0">
                    <img class="featurette-image img-fluid mx-auto" src="fotky/ucinkujici-2023/divadlo-forum.jpg" alt="Horem Dolem 2023 workshop">
                </div>
            </div>
        </div>

        <div class="container pt-5">
            <div class="row featurette">
                <div class="col-md-7 pl-0 pr-4">
                    <h3 class="featurette-heading">Zpěv</h3>
                    <p class="lead font-weight-bold">kapacita: 50</p>
                    <p class="font-weight-normal">Hudební workshop zaměřený na společný zpěv a svobodný hlasový projev s Veronikou Holcovou, která se věnuje sborovému zpěvu v různých věkových kategorií. Ve své práci propojuje zkušenosti ze studia sbormistrovství na UK a dramatické výchovy na DAMU. Přijďte se nechat unést na vlně společného zpěvu!</p> 
                    <p class="font-weight-normal">Zkušenost se zpěvem není podmínkou</p>
                </div>
                <div class="col-md-5 p-0">
                    <img class="featurette-image img-fluid mx-auto" src="fotky/ucinkujici-2023/zpev.jpg" alt="Horem Dolem 2023 workshop">
                </div>
            </div>
        </div>
			








<!--
        <div class="row">
            <div class="row d-flex justify-content-center">
                <div class="pb-4">
                    <h3 class="text-center pt-5">Dialogické jednání s vnitřním partnerem</h3>
                    <h6 class="text-center pb-3">Kapacita: 13</h6>

                    <!-<p class="text-center">Hanka Malaníková</p>
                    <p>Učí hereckou tvorbu a dialogické jednání na Katedře autorské tvorby a pedagogiky pražské DAMU, kterou od roku 2021 vede. Už jedenáct let patří mezi zdravotní klauny a je to to nejlepší, co se jí v životě mohlo stát. Vedle klaunování, autorského divadla a improvizace se věnuje také rozhlasové tvorbě. Je členkou audio skupiny KINETICON a moderátorkou Českého rozhlasu Vltava.</p>--
                    <p>Jaké to je stát na scéně (anebo v životě), nemít v ruce nic a vše ponechat spontánnímu, a přece kultivovanému dění? Nejde o bohapustou improvizaci, kdy člověk chrlí nápad za nápadem, ale o základní orientaci a koncentrované jednání v této dynamické situaci, kdy jste před ostatními sám za sebe a se sebou. Dialogické jednání studuje principy hry, hráčství a herectví jak v uměleckém, tak neuměleckém kontextu: Jak být v přítomnosti? Jak nehrát? Jak být autentický? Jak si všímat impulzů a jak s nimi naložit? Jak (si) naslouchat a odpovídat (si)? Jak tříbit tělo a inteligenci, empatii, souhru… </p>
                    <p>Dialogické jednání je hlavní psychosomatickou disciplínou autorsko-herecké katedry DAMU, kterou vymyslel prof. Ivan Vyskočil. Chodí na ně každý semestr stovka zájemců jak z DAMU, tak z jiných vysokých škol, tak lidí z ulice. </p>
                    <p>Workshop je pro 12 lidí a je určen pro divadelníky, pro kohokoli, kdo pracuje na veřejnosti (s veřejností) anebo pro ty, kdo mají zájem o akční sebepoznání či kondici k dialogu.</p>
                    <p> Dílnu povede Hanka Malaníková, která učí hereckou tvorbu a dialogické jednání na Katedře autorské tvorby a pedagogiky pražské DAMU, kterou od roku 2021 vede. Už jedenáct let patří mezi zdravotní klauny a je to to nejlepší, co se jí v životě mohlo stát. Vedle klaunování, autorského divadla a improvizace se věnuje také rozhlasové tvorbě. Je členkou audio skupiny KINETICON a moderátorkou Českého rozhlasu Vltava.</p>
                    <i class="d-flex justify-content-right text-right">„Základem je zkušenost a zakoušení stran jednání (mluvení, hraní) sám se sebou (s vnitřním partnerem, resp. partnery) zpravidla o samotě. Z autopsie snad každému známé tzv. samomluvy nebo samohry. Dále pak jde o to, učit se a naučit se podobně autentické, spontánní, hrající a souhrající jednání (chování a prožívání) produkovat veřejně, v situaci ´veřejné samoty´ (Stanislavskij), za přítomnosti a pozornosti ´diváků´. V situaci, kdy ´jako kdyby´ druzí, diváci, při tom nebyli, s vyloučením zejména zrakového a taktilního kontaktu.“ </i>
                    <p class="text-right" >Prof. Ivan Vyskočil<p>
                </div>
                <div class="pb-4">
                    <h3 class="text-center pt-5">Divadelní improvizace</h3>
                    <h6 class="text-center pb-3">Kapacita: 15</h6>
                    <p>Divadelní workshop s Jáchymem Sůrou, který se opírá o jeho dlouholetou zkušenost v improvizaci a studium herectví na JAMU a DAMU. Cvičení, která vás uvolní, naladí, zpřítomní a připraví vás na otevřenou dramatickou hru. Přijďte si to užít!</p>
                </div>
                <div class="pb-4">
                    <h3 class="text-center pt-5">Tanec</h3>
                    <h6 class="text-center pb-3">Kapacita: 20</h6>
                    <p>Když náš kolega Kuba nekoordinuje dobrovolníky, tak tančí. Že to jemu a jeho taneční partnerce Báře Havlové jde, se budete moci přesvědčit na salsovém tanečním workshopu ve středu od 15 hodin, kde vás během hodiny provedou základními kroky tohoto latinskoamerického tance. Akce je vhodná jak pro jednotlivce, tak páry; od začátečníků po pokročilé - tak neváhejte a přijďte si zakroutit boky!
                    </p>
                </div>
                <div class="pb-4">
                    <h3 class="text-center pt-5">Divadlo fórum</h3>
                    <h6 class="text-center pb-3">Kapacita: 15</h6>
                    <i>Co je divadlo fórum? Jaké jsou jeho principy a co přináší tvůrcům a divákům?</i>
                    <p>Každý se někdy v životě ocitáme v útlaku. Ať už vnitřním nebo vnějším. Divadlo fórum je technika, která učí diváky skrze divadelní prožitek takový útlak poznat a čelit mu. Učí je hledat strategie řešení v těžkých situacích, které je obklopují. Brazilský divadelník Augusto Boal tuto techniku vytvořil jako nástroj k aktivizaci společnosti.  Divadlo 21. století má několik cílů, a aktivizace společnosti - spolu s kritickým myšlením - mezi ně bezpochyby patří.</p>
                    <p>Dílna nabídne účastníkům základní vhled do techniky divadla fórum. V případě zájmu si sami vyzkoušíme vytvořit útlakovou situaci a hledat strategie k jejímu řešení. Cílem workshopu je předat poznání, že pokud divák dokáže změnit chod dění ve světě fikce na jevišti, bude toho schopen i ve skutečném životě.</p>
                    <p>Dílnu povedou:<br>Michaela Váňová, absolventka Katedry výchovné dramatiky DAMU, režisérka, herečka (Studio 2, Geisslers Hofcomoedianten) a autorka řady představení nejen v pražském divadle Minor.</p>
                    <p>Bára Černochová, absolventka Katedry výchovné dramatiky DAMU, věnuje se dramatické výchově a divadelnímu lektorství, je autorkou divadla fórum s dětmi staršího školního věku na téma bodyshaming.</p>
                    <p>Divadlem ke změně! Viva la revolution!</p>
                </div>
                <div class="pb-4">
                    <h3 class="text-center pt-5">Zpěv</h3>
                    <h6 class="text-center pb-3">Kapacita: 50</h6>
                    <p>Hudební workshop zaměřený na společný zpěv a svobodný hlasový projev s Veronikou Holcovou, která se věnuje sborovému zpěvu v různých věkových kategorií. Ve své práci propojuje zkušenosti ze studia sbormistrovství na UK a dramatické výchovy na DAMU. Přijďte se nechat unést na vlně společného zpěvu!</p>
                </div>
            </div>
        </div>

-->

        <div class="modal fade" tabindex="-1" role="dialog" id="checkboxWarning">

            <div class="modal-dialog" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <h4 class="modal-title text-danger">Upozornění</h4>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                            <span aria-hidden="true">&times;</span>

                        </button>

                    </div>

                    <div class="modal-body">

                        <h5>Je nutno souhlasit s platbou na místě.</h5>

                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                onclick="markAgreementCheckboxRed()">Zavřít
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>
</main>

<!-- footer -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/footer.php' ?>
<!-- footer -->