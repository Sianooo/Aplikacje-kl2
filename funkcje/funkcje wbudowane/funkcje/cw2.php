<?php

$plik=fopen("dane.txt","r");
$a=0;
$a=fgets($plik);
$b=fgets($plik);
echo $a."<br>";
$a=deg2rad($a);
$b=deg2rad($b);
echo $a."<br>";
$a=sin($a);
echo $a."<br>";
$b=cos($b);
echo $b."<br>";
$a=tan($a);
echo $a."<br>";

?>