<?php
/*
echo"To moj pierwszy skrypt";
echo"<br><i>Wstawiam obrazek o nazwie 1.jpg</i><br><img src='kot.jpeg'>";

$a=124;
$b=200;
for($i=601;$i<800;$i++)
{
    echo $i.' ';
}
else ($a>$b)

$d=1;
$k=3;
$s=2;
$ss=2;

for($i=$d;$i<=30;$i++){
    echo $i.' Dzien '. $s." zl ___>".$ss."zl<br>";
    $s=$s+3;
    $ss=$ss+$s;
}

$a= 10;
$b=99;
$sumap=0;
$sumanp=0;

for($i=10;$i<100;$i++){
if($i %2 == 0){
    echo "<b>".$i.' '."</b>";
    $sumap += $a;
}
else {
echo $i.' ';
$sumanp += $a;
}
}
echo "Suma parzystych".$sumap;
echo "Suma nieparzystych".$sumanp;
*/

$a=28;
$j=$a %10;
$d=($a -$j)/10;
$b=$j*10+$d;
echo"Twoja liczba".' '.$a."<br>";
echo"Po zamianie miejscami".$b;




?>