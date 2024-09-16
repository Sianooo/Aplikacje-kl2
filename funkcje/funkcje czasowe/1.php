<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Czas i data</title>
</head>
<body>
<?php

$data= getdate();

echo "Dzisiaj jest ";
echo $data['weekday'];
echo " "; 
echo $data['mday'];
echo " "; 
echo $data['month'];
echo " "; 
echo $data['year'];
echo " "; 


echo "</br>";
echo date('Y-m-d');
echo "</br>";
echo date('d-m-Y');
echo "</br>";
echo date('G:i:s');
echo "</br>";
echo date('H-i-sa');
echo "</br>";
echo date('Y-m-d   G:i:s' );
echo "</br>";


$d=getdate(mktime(0,0,0,3,5,2024));
$dd=getdate(mktime(0,0,0,6,21,2024));
$wakacje=mktime(0,0,0,6,21,2024);
echo date("Y-m-d",$wakacje);
echo "Dni do wakacji: ";
echo $dd['yday'] - $d['yday'];


?>
</body>
</html>