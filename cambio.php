<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center; background-color: lightblue; font-size: 30px;">


<?php

$cambio = array(
    "USD" => 1.08,
    "JPY" => 165.93,
    "CHF" => 0.94,
    "GBP" => 0.83
);

$euro = $_GET['EUR'];
$valuta = $_GET['valuta'];
$risultato = 0;

echo "<div style='font-family: Arial, sans-serif;'>";
echo "<p style='font-weight: bold;'>CONVERSIONE EFFETTUATA IL: " . date('d-m-Y ') . "</p>";

$giorno = calcolaGiorno(date('l'));
echo "<p>Giorno: " . $giorno . "</p>";
echo "<br>";

$commissione = 0;

if (date('w') >= 1 && date('w') <= 5) {  //w = numero del giorno
    $commissione = $euro * 0.025;
} else {
    $commissione = $euro * 0.05;
}

$euroNettoCommissione = $euro - $commissione;

$risultato = $euroNettoCommissione * $cambio[$valuta];

echo "<p>" . number_format($euro, 2) . " EUR = " . number_format($risultato, 2) . " " . $valuta . "</p>";
echo "<br>";
echo "<p>Commissione di cambio: " . number_format($commissione, 2) . " € (" . ($commissione > $euro * 0.025 ? "COMMISSIONE MAGGIORATA" : "commissione standard") . ")</p>";
echo "<br>";
echo "<a href='valuta.html' style='color: green; text-decoration: none;'>Torna alla pagina valuta.html</a>";

echo "</div>";

function calcolaGiorno($day) {

    switch ($day) {
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