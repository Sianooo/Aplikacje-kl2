<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciag</title>
</head>
<body>
<h3>Generowanie ciagu</h3>
<form action="" method="POST">
    <label>Pierwszy wyraz A1:</label>
    <br>
    <input type="number" name="wyraz" step="0.1">
    <br>
    <br> 
    <label>Roznica ciagu R:</label>
    <br>
    <input type="number" name="roznica" step="0.1">
    <br>
    <br> 
    <label>Liczba wyrazow ciagu N:</label>
    <br>
    <input type="number" name="liczba" step="0.1">
    <br>
    <br> 
    <button type="submit">Wyslij</button> 
</body>
<?php
$A = $_POST['wyraz'];
$R = $_POST['roznica'];
$N = $_POST['liczba'];


for ($i=0; $i<$N;$i++)
{
 echo "$A, ";
 $A=$A+$R;
}

?>
</html>