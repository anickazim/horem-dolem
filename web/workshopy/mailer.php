<?php
$to[] = 'workshopy@horem-dolem.cz';

// Subject
$subject = "Registrace na workshop " . $_POST["workshop"];

// Message
$message = '<html>
<body>
<h3>Registrace na workshop</h3>
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
        <td>Workshop: </td>
        <td>'.$_POST["workshop"] .'</td>
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
mail(implode("\r\n", $to), $subject, $message,implode("\r\n", $headers), "-f workshopy@horem-dolem.cz");




//mail registrovanemu
$to_volunteer = $_POST['email'];
$subject_volunteer = "Potvrzení o přijetí registrace";
$message_volunteer = '<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div style="padding: 20px;">
    <p style="padding-bottom: 10px;">Vaši registraci na workshop jsme v pořádku přijali! Děkujeme a budeme se na Vás těšit na festivalu Horem Dolem.</p>
    <p>Organizátoři Horem Dolem</p>
</div>


</body>
</html>
';

$headers_volunteer[] = 'MIME-Version: 1.0';
$headers_volunteer[] = 'Content-type: text/html; charset=UTF-8; lang=cs';

mail($to_volunteer, $subject_volunteer, $message_volunteer,implode("\r\n", $headers_volunteer), "-f registrace@horem-dolem.cz");

//ulozeni do souboru
$line[] = $_POST["name"];
$line[] = $_POST["surname"];
$line[] = $_POST["email"];
$line[] = $_POST["phone"];
$line[] = $_POST["workshop"];

$file = fopen("db.csv", "a");
fputcsv($file, $line);
fclose($file);


?>

