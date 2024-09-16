<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label>Podaj a</label>
        <input type="number" name="a">
        <label>Podaj b</label>
        <input type="number" name="b">
        <br>
        <button type="submit">Oblicz</button>
    </form>
</body>
</html>

<?php
//Funkcje matematyczne


error_reporting(0);

$a=$_POST['a'];
$b=$_POST['b'];

echo "Liczby: ".$a." ".$b."<br>";

$s=0;
$s=$a-$b;
echo $s;
echo "<br>";
echo $s."<br>";
$s=abs($s);
echo $s."<br>";
$s=sqrt($s);
echo $s."<br>";
$s=round($s,2);
echo $s."<br>";
$s=pow($s,3);
echo $s."<br>";
$s=sqrt($s);
echo $s."<br>";
$s=ceil($s);
echo $s."<br>";
$s=decbin($s);
echo $s."<br>";


?>