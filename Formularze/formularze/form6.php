<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Dane osobowe</h3>
<form action="" method="POST">
<label>Podaj nazwisko</label>
<input type="text" name="nazwisko">
    <br>
    <br> 
    <label>Podaj imie</label>
<input type="text" name="imie">
    <br>
    <br> 
    <label>Plec :</label>
<input type="radio" name='plec' value="Mezczyzna">Mezczyzna
<input type="radio" name='plec' value="Kobieta">Kobieta
    <br>
    <br> 
    <label>Hobby :</label>
<select name="hobby[]" multiple="multiple">
    <option value="narty" >Narty</option>
    <option value="plywanie">Plywanie</option>
    <option value="pilkan">Pilka nozna</option>
    <option value="koszykowka">Koszykowka</option>
    <option value="siatkowka">Siatkowka</option>
</select>
     <br>
     <br> 
<label>Miejscowosc :</label>
<select name="miej">
    <option value="Wiecej niz 5 tys" >Wiecej niz 5 tys</option>
    <option value="Od 5 tys do 20 tys">Od 5 tys do 20 tys</option>
    <option value="Wiecej niz 20 tys">Wiecej niz 20 tys</option>
</select>
     <br>
     <br> 
<button type="submit">Wyslij</button> 
</form>
<?php
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$hobby = $_POST['hobby'];
$miej=$_POST['miej'];
$plec=$_POST['plec'];

echo "Wpisane dane:<br> Imie $imie <br> Nazwisko $nazwisko<br> Miejscowosc $miej<br> Plec $plec<br>";
echo"Hobby: <br>";
for($i=0;$i<count($hobby);$i++)
{
    echo " ".$hobby[$i];
}
?>
</body>
</html>