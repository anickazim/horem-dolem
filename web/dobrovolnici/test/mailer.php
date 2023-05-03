<?php

//ZJISTENI, KOMU VSEMU SE MA MAIL ODESLAT
$file = fopen("recipients.csv","r");
while (($line = fgetcsv($file)) !== FALSE)
{
    if($line[0]==  $_POST['oblast']){
        $to[] = $line[1];
    }
}
if(sizeof($to)==0){
    $toNEW = "tesar.jakub@centrum.cz";
}
else{
    $toNEW = implode(", ", $to);
}
$subject = 'Příchozí zpráva od ' . $_POST["email"];

if(empty($_POST["subjectText"])){$predmet = "prázdný";}else{$predmet = $_POST["subjectText"];}
// Message
$message = '<html>
<body>
<h2>Předmět: '.$predmet.'</h2>

<p>'.$_POST["text"].'</p>
<a href="mailto:'.$_POST["email"].'" style="padding-top:30px"><b>Odpovědět</b> </a>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=UTF-8; lang=cs';

// Additional headers
//$headers[] = 'From: noreply@horem-dolem.cz';

// Mail it
mail($toNEW, $subject, $message,implode("\r\n", $headers), "-f kontakt@horem-dolem.cz");




//mail zadateli
$to_recipient = $_POST['email'];
$subject_recipient = "Potvrzení o přijetí zprávy";
$message_recipient = '<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body style="padding: 20px">
<h2 style="padding-bottom: 10px;">Vaši zprávu jsme v pořádku přijali!</h2>
<p style="padding-bottom: 5px;">V nejbližší době ji zpracujeme a poté se Vám ozveme.</p>
<p style="padding-bottom: 5px;">Přejeme krásný den!</p>
<p style="padding-bottom: 5px;"><a href="www.horem-dolem.cz" >www.horem-dolem.cz</a></p>
<br>
<p><b>Rekapitulace zprávy:</b></p>
<p>Váš email: '.$_POST["email"].'</p>
<p>Oblast '.$_POST['oblast'].'</p>
<p>Předmět zprávy: '.$predmet.'</p>
<p>Text zprávy: '.$_POST["text"].'</p>

<p style="font-size: 10px; padding-top: 100px;">Toto je automaticky generovaná zpráva. Prosíme, neodpovídejte na ni.</p>


</body>
</html>
';

$headers_volunteer[] = 'MIME-Version: 1.0';
$headers_volunteer[] = 'Content-type: text/html; charset=UTF-8; lang=cs';

mail($to_recipient, $subject_recipient, $message_recipient,implode("\r\n", $headers_volunteer), "-f noreply@horem-dolem.cz");
?>