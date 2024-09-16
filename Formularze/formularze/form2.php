<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>
<body>
    <h3>Oblicanie kosztu ogrodzenia</h3>
<form action="" method="POST"> 
<label>Podaj szerokosc</label>
<input type="number" name="szerokosc">m
    <br>
<label>Podaj dlugosc</label>    
<input type="number" name="dlugosc">m
    <br>
<label>Material:</label>
<input type="radio" name='material' value="metal">Metal
<input type="radio" name='material' value="drewno">Drewno
    <br>    
<label>Firma</label>
<input type="checkbox" name="firma"></input>    
    <br>
<button type="submit">Oblicz</button> 
</form>
<?php
$material = $_POST['material'];
$szerokosc = $_POST['szerokosc'];
$dlugosc = $_POST['dlugosc'];
$firma = isset($_POST['firma']);

echo "Wybrany materiał: $material";
echo "<br/>";

if ($firma) {
    echo "Firma: Tak ";
} else {
    echo "Firma: Nie ";
}
echo "<br/>";
$obwod = ($szerokosc + $dlugosc) * 2;

if ($material == "drewno" && $firma) {
    $koszt = 250 * $obwod;
    echo "Koszt: $koszt zł <br/>";
} else if ($material == "drewno" && !$firma) {
    $koszt = 200 * $obwod;
    echo "Koszt: $koszt zł <br/>";
} else if ($material == "metal" && $firma) {
    $koszt = 300 * $obwod;
    echo "Koszt: $koszt zł <br/>";
} else {
    $koszt = 400 * $obwod;
    echo "Koszt: $koszt zł <br/>";
}

?>
</body>
</html>