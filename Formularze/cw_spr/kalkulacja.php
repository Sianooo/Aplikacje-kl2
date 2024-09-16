<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oblicz</title>
</head>
<body>
<h3>Oblicz, ile litrów musisz zatankowac</h3>
<form action="" method="POST">
<label>Dystans do przejechnaia w km</label>
<br>
<input type="number" name="dystans">
    <br>
    <br> 
    <label>Spalanie samochodu  w 1L/100km</label>
    <br>
<input type="number" name="spalanie" min="0" step="0.1">
    <br>
    <br> 
    <label>Wybierz rodzaj paliwa</label>
    <input type="radio" name='rodzaj' value="Benzyna">Benzyna
    <input type="radio" name='rodzaj' value="Olej">Olej napędowy
    <br>
    <br> 
    <button type="submit">Wyslij</button> 
</body>
<?php
$koszt=0;
$dystans = $_POST['dystans'];
$spalanie = $_POST['spalanie'];
$rodzaj = $_POST['rodzaj'];

$koszt=($spalanie/100)*$dystans;

echo "<br>";

echo "Potrzebujesz $koszt litrow paliwa";

echo "<br>";

if ($rodzaj == "Benzyna") {
    $koszt = 4 * $koszt;
    echo "Koszt: $koszt zł <br/>";
} else if ($rodzaj == "Olej") {
    $koszt = 3.8 * $koszt;
    echo "Koszt: $koszt zł <br/>";
}


?>
</html>