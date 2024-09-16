<?php
$a=17;
echo $a."<br>";
$a=dechex($a);
echo "Liczba w systemie szesnastkowym: ".$a."<br>";
$a=hexdec($a);
echo "Liczba w systemie dziesiętnym: ".$a."<br>";

echo pi();

$r=$a;

$s=0;
$z=round(2*pi(),2)*round(($r),2);
$s=round(pi(),2)*round(($r*$r),2);
echo "<br> Obówd wynosi: ".$z;
echo "<br> Pole wynosi: ".$s;

?>