<?php
$kraje=array();
$kraje['europa'][0]="polska";
$kraje['europa'][1]="anglia";
$kraje['europa'][2]="niemcy";

$kraje['afryka'][0]="tunezja";
$kraje['afryka'][1]="egipt";
$kraje['afryka'][2]="rpa";

$kraje['azja'][0]="china";
$kraje['azja'][1]="korea";
$kraje['azja'][2]="japonia";
echo "<table border = '1'>";
foreach($kraje as $klucz =>$wartosc)
{
    echo "<tr>"."<td>"."<b>".$klucz."</b>"." ";
    for($i=0;$i<=2;$i++)
    {
    echo "<td>";
    echo $wartosc[$i]." ";
    echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>