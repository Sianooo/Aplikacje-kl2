<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>
<body>
<form action="" method="POST"> 
<label>Podaj nazwisko</label>
<input type="text" name="nazwisko">
    <br>
<label>Podaj wiek</label>    
<input type="number" name="wiek">
    <br>
<button type="submit">Wyslij</button> 
</form>
<?php
$n=$_POST['nazwisko'];
$w=$_POST['wiek'];
if($w>=18)
{
echo "Witaj na mojej stronie masz na imie $n i masz $w lat";
}
else
{
echo"Witaj na mojej stronie nie masz 18 lat tylko $w"; 
}
?>
</body>
</html>