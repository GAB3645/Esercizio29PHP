<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$euro = $_GET['EUR'];
$valuta = $_GET['valuta'];
$risultato = 0;


date_default_timezone_set('Europe/Rome');

echo "CONVERSIONE EFFETTUATA IL: ";
echo date('d-m-Y '); 

echo calcolaGiorno(date('l'));
echo "<br>";


switch($valuta) {
    case "USD":
        $risultato = $euro * 1.08;
        break;
    case "JPY":
        $risultato = $euro * 165.93;
        break;
    case "CHF":
        $risultato = $euro * 0.94;
        break;
    case "GBP":
        $risultato = $euro * 0.83;
        break;

}


echo "€ " . $euro . " = " . $risultato . " " . $valuta;


?>


<?php


    function calcolaGiorno($day) {

        switch($day) {
            case "Monday":
                return "Lunedi";
            case "Tuesday":
                return "Martedi";
            case "Wednesday":
                return "Mercoledi";
            case "Thursday":
                return "Giovedi";
            case "Friday":
                return "Venerdi";
            case "Saturday":
                return "Sabato";
            case "Sunday":
                return "Domenica";
        }
    }

?>
    
</body>
</html>