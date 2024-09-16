
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mieszkanie</title>
    <style>#red{color:red;}</style>
</head>
<body>
<body>
    <h3>Obliczanie kosztu malowania mieszkania</h3>
<form action="" method="POST"> 
<label>Podaj szerokosc</label>
<input type="number" name="szerokosc">m
    <br>
    <br>
<label>Podaj dlugosc</label>    
<input type="number" name="dlugosc">m
    <br>
    <br>
    <label>Podaj wysokosc</label>    
<input type="number" name="wysokosc">m
    <br>
    <br>
<label>Pedzel :</label>
<input type="radio" name='pedzel' value="waski">Waski
<input type="radio" name='pedzel' value="szeroki">Szeroki
    <br>
    <br>
<label>Farba :</label>
<select name="farba"id="farba">
    <option value="lateksowa">Lateksowa</option>
    <option value="akrelowa">Akrelowa</option>
    <option value="winelowa">Winelowa</option>
</select>
    <br>
    <br>
<button type="submit">Oblicz</button> 
    <br>
</form>
<?php
$b = $_POST['szerokosc'];
$a = $_POST['dlugosc'];
$c = $_POST['wysokosc'];
if(isset($_POST['pedzel']))
{
    $p=$_POST['pedzel'];
}
else
{
    $p="";
}
$f = $_POST['farba'];
$czas=0;
if($b==0|| $c==0||$a==0||$p="")
{
    echo "<a id='red'>Uzupelnij dane!</a>";
}
else
{
$powierzchnia=$a*$b+2*$a*$c+2*$b*$c;

echo"Wpisane dane: <br> Wysokosc: $c, <br> Dlugosc: $a, <br> Szerokosc: $b, <br> Pedzel: $p, <br> Farba: $f <br>";
echo"Pomalowana powierzchnia: $powierzchnia m2 <br>";
if($p=="waski")
{
    $czas=$powierzchnia*15;
    $czas=$czas/60;
    echo "Czas malowania: $czas h <br>";
}
else
{
    $czas=$powierzchnia*5;
    $czas=$czas/60;
    echo "Czas malowania $czas h <br>";
}
if($f=="lateksowa")
{
    $koszt=$powierzchnia*35;
    echo"Koszt farby: $koszt zl <br>";
}
else if($f=="winelowa")
{
    $koszt=$powierzchnia*30;
    echo"Koszt farby: $koszt zl <br>";
}
else
{
    $koszt=$powierzchnia*25;
    echo"Koszt farby: $koszt zl <br>";
}
}
?>
</body>
</html>