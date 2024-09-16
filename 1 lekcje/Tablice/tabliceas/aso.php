<?php

/*
$tab=Array();
$tab["Kowalski"]=7;
$tab["Nowak"]=10;
$tab["Zabłocki"]=9;
$tab["Sikora"]=2;
$tab["Machinko"]=5;
$tab["Pielak"]=3;
$tab["Rosiek"]=12;
//n ==> nazwisko    w===> wartosc

$h=0;
$suma=0;
foreach($tab as $n => $w)
{
    print $n." wiek: ".$w." lat/lata ";//wypisywanie lat
    print "<br>";
    $suma=$suma+$w;//sumowanie ich lat
    $h++;
}
$suma=$suma/$h;
echo "Średnia wieku wynosi: ".$suma;
*/


$tab=Array();
$tab["Róża"]="Czerwony" ;
$tab["Tulipan"]="Niebieski" ;
$tab["Fiołki"]="Niebieskie" ;
$tab["Lilje"]="Białe" ;
$tab["Narcyz"]="Czerwony" ;
$tab["Hiacynt"]="Żółty" ;

//k ==>kolor
foreach($tab as $k =>$w)
{
    echo $k." Kolor: ".$w."<br>";
}
echo "Kloru czerwonego są: ";
foreach($tab as $k =>$w)
{
    if($w=="czerwony")
    {
        echo "  ".$k;
    }
}

echo "<br>";
echo "<br>";
asort($tab);
foreach($tab as $k =>$w)
{
    echo $k." Kolor: ".$w."<br>";
}

?>