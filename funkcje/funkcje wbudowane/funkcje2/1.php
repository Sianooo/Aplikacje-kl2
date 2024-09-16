<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" >
<label>Podaj imie</label>
<input type="text" name="imie">
<br>
<label>Podaj nazwisko</label>
<input type="text" name="nazwisko">
<br>
<button type="submit">Wyslij</button>
</form>
<?php
$i=$_POST['imie'];
$n=$_POST['nazwisko'];

echo ucwords($i);

echo ucwords($n);

echo "</br>";

echo strtoupper($i);

echo strtoupper($n);

echo "</br>";

echo strtolower($i);

echo strtolower($n);

echo "</br>";

$b="alamadzisiajmatematyke";
echo substr_count($b,"t");

echo "</br>";

echo str_replace("ma","**",$b);

echo "</br>";

$c="alaniemamatematyki";

echo substr_replace($c,"** **",6,4);

echo "</br>";

$d="  Ala   ";
$d=trim($d);
echo trim($d);
echo strlen($d);

echo "</br>";

for($i=97;$i<=122;$i++)
{
    echo "$i ----->". chr($i)."</br>";
}
$x=ord(":");
echo $x;

$e="Fizyka";
echo str_shuffle($e);

?>
</body>
</html>