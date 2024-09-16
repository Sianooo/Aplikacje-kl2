<?php

$dane=Array();
$dane[0]["imie"]="Jan" ;
$dane[0]["nazwisko"]="Kowalski" ;
$dane[0]["ulica"]="Kowalska" ;
$dane[1]["imie"]="Maciej" ;
$dane[1]["nazwisko"]="Nowak" ;
$dane[1]["ulica"]="Nowakowska";

echo "<table border='1'> ";
echo "<tr>";
foreach($dane[0] as $k =>$w)
{
        echo "<tr><th>".$k."</th>";
    
}
echo "</tr>";
for($i=0;$i<count($dane);$i++)
{
    echo "<tr>";
    foreach($dane[$i] as $k=> $w)
    {
        echo"<td>".$w."</td>";
    }
    echo "</tr>":
}
echo "</table>";
?>