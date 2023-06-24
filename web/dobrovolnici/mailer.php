<?php
$to[] = 'jakub@horem-dolem.cz'; // note the comma
$to[] = 'tesar.jakub@centrum.cz';

// Subject
$subject = "Přihláška dobrovolníka " .$_POST["name"] . " " . $_POST["surname"];

// Message
$message = '<html>
<body>
<h1>Přihláška dobrovolníka '.$_POST["name"] . " " . $_POST["surname"] .'</h1>
<table>
    <tr>
        <td>Jméno: </td>
        <td>'.$_POST["name"] .'</td>
    </tr>
    <tr>
        <td>Příjmení: </td>
        <td> '.$_POST["surname"] .'</td>
    </tr>
    <tr>
        <td>Email: </td>
        <td>'.$_POST["email"] .'</td>
    </tr>
    <tr>
        <td>Telefon: </td>
        <td>'.$_POST["phone"] .'</td>
    </tr>
    <tr>
        <td>Datum narození: </td>
        <td>'.$_POST["date"] .'</td>
    </tr>
    <tr>
        <td>Rodné číslo: </td>
        <td>'.$_POST["birthNumber"] .'</td>
    </tr>
    <tr>
        <td>Adresa: </td>
        <td>'.$_POST["address"] .'</td>
    </tr>
    <tr>
        <td>Město: </td>
        <td>'.$_POST["city"] .'</td>
    </tr>
    <tr>
        <td>Velikost trička: </td>
        <td>'.$_POST["tshirtSize"] .'</td>
    </tr>
    <tr>
        <td>Poznámka: </td>
        <td>'.$_POST["note"] .'</td>
    </tr>
</table>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=UTF-8; lang=cs';

// Additional headers
//$headers[] = 'From: noreply@horem-dolem.cz';

// Mail it
mail(implode("\r\n", $to), $subject, $message,implode("\r\n", $headers), "-f dobrovolnici@horem-dolem.cz");




//mail dobrovolnikovi
$to_volunteer = $_POST['email'];
$subject_volunteer = "Potvrzení o přijetí přihlášky";
$message_volunteer = '<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div style="padding: 20px;">
    <h2 style="padding-bottom: 10px;">Přihlášku jsme v pořádku přijali!</h2>
    <p style="padding-bottom: 5px;">Teď už jen zbývá, než ji zpracujeme a v brzké době se ozveme.</p>
    <p style="padding-bottom: 5px;">Děkujeme za zájem o dobrovolnickou činnost na festivalu Horem Dolem 2023 a budeme se těšit na spolupráci.</p>
    <p style="padding-bottom: 5px;">Za tým Horem Dolem přeji krásný den!</p><br>
    <br>
    <p ><b>Jakub Tesař</b></p>
    <p >koordinátor dobrovolníků</p>
    <p ><a href="tel:+420 732 124 374">+420 732 124 374</a></p>
    <p ><a href="mailto:jakub@horem-dolem.cz">jakub@horem-dolem.cz</a></p>
    <p ><a href="www.horem-dolem.cz" >www.horem-dolem.cz</a></p>
    <a style="padding-bottom: 15px;" href="http://www.horem-dolem.cz/"><img src="http://www.horem-dolem.cz/fotky/grafika/logo-82.png" alt="horem dolem logo"></a>
    <p style="font-size: 10px; padding-top: 100px;">Toto je automaticky generovaná zpráva. Prosíme, neodpovídejte na ni.</p>
    
</div>


</body>
</html>
';

$headers_volunteer[] = 'MIME-Version: 1.0';
$headers_volunteer[] = 'Content-type: text/html; charset=UTF-8; lang=cs';

mail($to_volunteer, $subject_volunteer, $message_volunteer,implode("\r\n", $headers_volunteer), "-f noreply@horem-dolem.cz");


//ulozeni do souboru
$line[] = $_POST["name"];
$line[] = $_POST["surname"];
$line[] = $_POST["email"];
$line[] = $_POST["phone"];
$line[] = $_POST["date"];
$line[] = $_POST["birthNumber"];
$line[] = $_POST["address"];
$line[] = $_POST["city"];
$line[] = $_POST["tshirtSize"];
$line[] = $_POST["note"];

$file = fopen("resources/db/db.csv", "a");
fputcsv($file, $line);
fclose($file);


?>

