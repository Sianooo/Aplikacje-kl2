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
    <label>Interwal :</label>
    <select name="interwal"id="interwal">
    <option value="geo">Geometryczny</option>
    <option value="ary">Arytmetyczny</option>
    <br>
    <br> 
    <button type="submit">Wyslij</button> 
</body>
<?php
$A = $_POST['wyraz'];
$R = $_POST['roznica'];
$N = $_POST['liczba'];

function potega($a,$n)
{
    for($i=1;$i<=$N;$i++)
    {
        $pot=$pot*$a;
    }
}
return $pot;


if($rodzaj == "ary")
{
for ($i=0; $i<$N;$i++)
{
 echo "$A, ";
 $A=$A+$R;
}
}
else if($rodzaj == "geo")
{
    
}

?>
</html>