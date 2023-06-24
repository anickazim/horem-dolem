<div class="container pt-5">

    <h1 class="text-center pt-5 pb-5" style="font-family: 'Red Hat Display'">DOBROVOLNICTVÍ</h1>

    <!-- START THE FEATURETTES -->

    <div class="row justify-content-md-center">

        <div class="row featurette">

            <div class="col-sm text-center">
                <div class="p-5;m-2" style="border: 2px solid black; border-radius: 10px; background-color: rgba(245, 0, 0, 0.3); margin-bottom:20px; padding-top:15px;padding-bottom:15px;font-weight: normal;">
                <h4>Omlouváme se, tým dobrovolníků podílejících se na festivalu Horem Dolem je v současnosti naplněn, proto nové přihlášky nepřijímáme. V případě Vašeho velkého zájmu přihlášku vyplňte, budeme Vás registrovat jako náhradníka.</h4><br>
                <h4>Díky za pochopení, tým Horem Dolem</h4>
                </div>

                <h3 class="featurette-heading font-weight-bold">Kdo nám s tím pomáhá?</h3>

                <h3 class="">No přece dobrovolníci!</h3>

                <div class="row" style="padding-top: 20px">

                    <div class="col md-6 align-middle">

                            <p class="lead paragraph align-middle">Bez dobrovolníků by to určitě nešlo. A protože si jejich důležité
                                práce vážíme, připravili jsme si benefity, které práci na festivalu co nejvíce zpříjemní
                                a umožní si jej užít plnými doušky. Věříme, že dobrovolnická činnost je skvělý způsob, jak se aktivně podílet na akci,
                                která ukazuje tím nejlepším způsobem, jak je kultura rozmanitá a důležitá.

                            </p>

                    </div>

                    <div class="col-md-6">
                        <img src="fotky/dobrovolnici/1.jpg" style="border-radius: 10px;" class="card-img-top" alt="Horem Dolem festival dobrovolnici" >
                    </div>

                </div>

                <h3 class="featurette-heading font-weight-bold" style="padding-top:20px">Co ti to přinese?</h3>

                <div class="row featurette justify-content-md-left" style="margin-bottom: 30px;">

                    <div class="col-md-6">
                        <img src="fotky/dobrovolnici/3.jpg" style="border-radius: 10px;" class="card-img-top" alt="Horem Dolem festival dobrovolnici">
                    </div>

                    <div class="col-md-6 text-left align-middle">

                        <p class="lead paragraph">Potkáš se s novými lidmi, najdeš nové přátele a odpálíš prázdniny
                            tím správným způsobem!</p>

                        <p class="lead paragraph">Nemusíš se bát, že bys hladověl/a. Za dobře odvedenou práci budeš mít
                            zajištěné stravování v místě konání festivalu. Můžeš se těšit na stánky s burgery, tradičními klobásami, zmrzlinou a myslíme i na vegany.</p>

                        <p class="lead paragraph">O ubytování se starat nemusíš. Pokud bys měl/a problém s dojížděním,
                            můžeš si buď vzít vlastní stan a zažít festival z první ruky, nebo máme zajišťěnou noclehárnu v
                            místní školní družině, která poskytuje dostatečný komfort - je vybavena kuchyňkou a sociálním zázemím.</p>


                    </div>

                </div>

                <p class="lead paragraph font-weight-bold" id="scrollPoint">Chtěl bys zažít Horem Dolem s námi? Tak neváhej a
                    vyplň přihlášku!</p>


            </div>

        </div>

    </div>


    <div class="row" style="margin-top: 10px">

        <div class="col-sm-2"></div>

        <div class="col-md-9 mb-md-0 mb-5">

            <form id="contact-form" name="contact-form" method="POST">

                <!--Grid row-->

                <div class="row mb-3">

                    <!--Grid column-->

                    <div class="col-md-6">

                        <div class="md-form mb-0">

                            <label for="name" class=""><h5>Jméno:</h5></label>

                            <input type="text" id="name" name="name" class="form-control <?php echo $_nameClass ?>"
                                   onfocusout="checkInput('name')" placeholder="Jméno"
                                   value="<?php echo $_POST["name"] ?>">

                            <div id="validationServerUsernameFeedback" class="invalid-feedback">

                                Je nutno zadat jméno!

                            </div>

                        </div>

                    </div>

                </div>

                <div class="row mb-3">

                    <div class="col-md-6">

                        <div class="md-form mb-0">

                            <label for="name" class=""><h5>Příjmení:</h5></label>

                            <input type="text" id="surname" name="surname"
                                   class="form-control <?php echo $_surnameClass ?>"
                                   onfocusout="checkInput('surname')" placeholder="Příjmení"
                                   value="<?php echo $_POST["surname"] ?>">

                            <div id="validationServerUsernameFeedback" class="invalid-feedback">

                                Je nutno zadat příjmení!

                            </div>

                        </div>

                    </div>

                </div>

                <div class="row mb-3">

                    <div class="col-md-6">

                        <div class="md-form mb-0">

                            <label for="name" class=""><h5>Email:</h5></label>

                            <input type="email" id="email" name="email" class="form-control <?php echo $_emailClass ?>""
                            onfocusout="ValidateEmail('email')" placeholder="Email"
                            value="<?php echo $_POST["email"] ?>">

                            <div id="validationServerUsernameFeedback" class="invalid-feedback">

                                Je nutno zadat email ve správném tvaru!

                            </div>

                        </div>

                    </div>

                </div>

                <div class="row mb-3">

                    <!--Grid column-->

                    <div class="col-md-6">

                        <div class="md-form mb-0">

                            <label for="name" class=""><h5>Datum narození:</h5></label>

                            <input type="date" id="date" name="date" class="form-control <?php echo $_dateClass ?>"
                                   onfocusout="checkInput('date')" placeholder="Jméno"
                                   value="<?php echo $_POST["date"] ?>">

                            <div id="validationServerUsernameFeedback" class="invalid-feedback">

                                Je nutno zadat datum narození!

                            </div>

                        </div>

                    </div>

                </div>

                <div class="row mb-3">

                    <div class="col-md-6">

                        <div class="md-form mb-0">

                            <label for="phone" class=""><h5>Telefon:</h5></label>

                            <input type="text" id="phone" name="phone" class="form-control"
                                   placeholder="Telefon"
                                   value="<?php echo $_POST["phone"] ?>"
                            >

                        </div>

                    </div>

                </div>

                <div class="row mb-3">

                    <div class="col-md-6">

                        <div class="md-form mb-0">

                            <label for="birthNumber" class=""><h5>Rodné číslo:</h5></label>

                            <input type="text" id="birthNumber" name="birthNumber" class="form-control <?php echo $_birthNumberClass ?>"
                            onfocusout="ValidateBirthNumber('birthNumber')" placeholder="Rodné číslo"
                            value="<?php echo $_POST["birthNumber"] ?>"
                            >


                            <div id="validationServerUsernameFeedback" class="invalid-feedback">

                                Je nutno zadat rodné číslo ve správném tvaru - xxxxxx/yyyy nebo xxxxxxyyyy nebo xxxxxxyyy!

                            </div>
                            <a data-target="#birthNumberModal" data-toggle="modal"
                               class="MainNavText" id="MainNavHelp"
                               href="#birthNumberModal" style="font-size:10px;color: darkgray;padding-top: 5px;">
                                K čemu to potřebujeme?
                            </a>

                        </div>

                    </div>

                </div>


                <div class="row mb-3">

                    <div class="col-md-4">

                        <div class="md-form mb-0">

                            <label for="address" class="""><h5>Ulice a číslo popisné:</h5></label>

                            <input type="text" id="address" name="address" class="form-control <?php echo $_addressClass ?>"
                                   onfocusout="checkInput('address')" placeholder="Ulice a č.p."
                                   value="<?php echo $_POST["address"] ?>">

                            <div id="validationServerUsernameFeedback" class="invalid-feedback">

                                Je nutno zadat adresu!

                            </div>

                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="md-form mb-0">

                            <label for="city" class=""><h5>Město:</h5></label>

                            <input type="text" id="city" name="city" class="form-control <?php echo $_cityClass ?>"
                                   onfocusout="checkInput('city')" placeholder="Město"
                                   value="<?php echo $_POST["city"] ?>">

                            <div id="validationServerUsernameFeedback" class="invalid-feedback">

                                Je nutno zadat město!

                            </div>

                        </div>

                    </div>

                </div>

                <div class="row mb-3">

                    <div class="col-sm-3">

                        <div class="md-form mb-0">

                            <label for="tshirtSize" class=""><h5>Velikost trička:</h5></label><br/>

                            <select name="tshirtSize" required id="tshirtSize">

                                <option value="<?php echo $_POST["tshirtSize"] ?>" selected="selected" disabled hidden></option>

                                <option>XS</option>

                                <option>S</option>

                                <option>M</option>

                                <option>L</option>

                                <option>XL</option>

                                <option>2XL</option>

                            </select>

                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="row mb-3">


                                <div class="md-form mb-0">

                                    <label for="note" class="" style="padding-bottom:0;margin-bottom:0;"><h5>Poznámka:</h5><p style="font-size:15px;padding: 0;margin: 0;">(volitelné)</p></label>

                                    <textarea style="border-radius: 15px;" form="contact-form" placeholder="Zde může být tvůj zvláštní požadavek apod." id="note" name="note" rows="3" cols="25"></textarea>

                                </div>


                        </div>
                    </div>

                </div>




                <!-- <div class="mb-3">

                     <div class="row">

                         <legend class="col-form-label col-sm-7 pt-0 ">

                             <h5 class="font-weight-bold">Co si myslíš, že dobrovolník potřebuje?<small>
                                     (volitelné)</small></h5>

                         </legend>

                     </div>

                     <div class="row mb-3">

                         <div class="col-sm-10">

                             <div class="form-check">

                                 <input class="form-check-input" type="checkbox" name="check1" id="check1"
                                        value="Dobrou náladu">

                                 <label class="form-check-label" for="check1">

                                     Dobrou náladu

                                 </label>

                             </div>

                             <div class="form-check">

                                 <input class="form-check-input" type="checkbox" name="check2" id="check2"
                                        value="Chuť pracovat">

                                 <label class="form-check-label" for="check2">

                                     Chuť pracovat

                                 </label>

                             </div>

                             <div class="form-check">

                                 <input class="form-check-input" type="checkbox" name="check3" id="check3"
                                        value="Kolegialitu">

                                 <label class="form-check-label" for="check3">

                                     Kolegialitu

                                 </label>

                             </div>

                             <div class="form-check">

                                 <input class="form-check-input" type="checkbox" name="check4" id="check4"
                                        value="Volný čas">

                                 <label class="form-check-label" for="check4">

                                     Volný čas

                                 </label>

                             </div>

                         </div>

                     </div>

                 </div>-->

                <div class="row mb-3" style="margin-left: 20px">

                    <div class="form-group">

                        <div class="row-md-6">

                            <div class="form-check">

                                <input class="form-check-input" type="checkbox" id="agreementCheckbox"
                                       onclick="checkAgreement()">

                                <label class="form-check-label" for="gridCheck1" id="agreementCheck">

                                    Souhlasím se
                                    <a data-target="#GDPRmodal" data-toggle="modal"
                                                    class="MainNavText" id="MainNavHelp"

                                                    href="#GDPRmodal">zpracováním osobních údajů</a>
                                    ,
                                    <a data-target="#volunteerResponsible" data-toggle="modal"
                                                      class="MainNavText" id="MainNavHelp"

                                                      href="#volunteerResponsible">povinnostmi dobrovolníka</a> a
                                    obsahem <a href="dobrovolnici/resources/dobrovolnik_smlouva_2023.pdf" target="_blank">dobrovolnické smlouvy</a>

                                </label>

                            </div>

                        </div>


                    </div>

                    <div class="text-center text-md-left">

                        <button type="button" id="submitButton" class="btn btn-primary" data-toggle="modal"
                                data-target="#checkboxWarning">Odeslat
                        </button>

                    </div>
                </div>


            </form>


            <div class="status"></div>

        </div>

    </div>

    <!-- Modal o rodném čísle-->

    <div class="modal fade" id="birthNumberModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLongTitle" aria-hidden="true">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLongTitle">K čemu potřebujeme rodné číslo</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                <div class="modal-body">

                    <p>
                        Tvé rodné číslo potřebujeme ke zřízení pojištění hmotné odpovědnosti, které Ti ze zákona musíme na vlastní náklady sjednat po dobu konání festivalu. Díky tomuto pojištění nebudeš muset hradit případné škody, které by vznikly návštěvníkům či partnerům festivalu. (Tímto samozřejmě <b>ne</b>nabádáme, abys nějaké škody páchal :) )
                    </p>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zavřít</button>

                </div>

            </div>

        </div>

    </div>

    <!-- Modal s ochranou osobních údajů -->

    <div class="modal fade" id="GDPRmodal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLongTitle" aria-hidden="true">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLongTitle">Souhlas se zpracováním osobních údajů</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                <div class="modal-body">

                    <p>
                        Odesláním přihlášky udělujete výslovný souhlas dle <a href="https://www.zakonyprolidi.cz/cs/2000-101">§ 5 Zákona č. 101/2000 Sb., o ochraně osobních údajů</a>, spolku Horem Dolem k tomu, že tyto údaje budou zpracovány k interním potřebám spolku Horem Dolem.

                        Tento souhlas je udělen na dobu neurčitou a může být kdykoli odvolán, a to formou doporučeného dopisu adresovaného do sídla spolku.

                        Zasláním své přihlášky, udělujete souhlas, že na festivale pořizuje organizační štáb a osoby jím pověřené fotografickou a video dokumentaci, která může být zveřejňována na webu či sociálních sítích, případně použita k propagaci.
                    </p>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zavřít</button>

                </div>

            </div>

        </div>

    </div>


    <!-- Modal s povinnostmi dobrovolnika -->

    <div class="modal fade" id="volunteerResponsible" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLongTitle" aria-hidden="true">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLongTitle">Povinnosti dobrovolníka</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                <div class="modal-body">

                    <ul class="list-group">

                        <li class="list-group-item">Dostaví se na místo práce včas</li>

                        <li class="list-group-item">Svěřenou práci vykoná svědomitě</li>

                        <li class="list-group-item">Je kolegiální</li>

                        <li class="list-group-item">Spolupracuje s ostatními</li>

                        <li class="list-group-item">Návštěvníkům je ochoten poradit</li>

                        <li class="list-group-item">V pracovní době neužívá žádný alkohol, nekouří a neužívá jiné
                            omamné látky
                        </li>

                        <!--<iframe style="height: 500px; width: 100%;" src="HoremDolemTest/smlouva.pdf" ></iframe>-->

                    </ul>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zavřít</button>

                </div>

            </div>

        </div>

    </div>

    <!-- Modal s upozornenim na checkbox-->


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

                    <h5>Je nutno souhlasit se zpracováním osobních údajů, povinnostmi dobrovolníka a obsahem dobrovolnické
                        smlouvy.</h5>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            onclick="markAgreementCheckboxRed()">Zavřít
                    </button>

                </div>

            </div>

        </div>

    </div>


    <!-- /END THE FEATURETTES -->

</div>