<?php 
// z pliku pobierz dwie liczby całkowite ktore stanowia zakres losowania elementow tablicy o rozmierze 30.
//wyswietl pobrane liczby,elementy te wraz z ich sredni arytmetyczna wyslij do pliku

//wyswietlanie liczb z pliku
$plik=fopen('dane.txt','r');
$a=fgets($plik);
$b=fgets($plik);
fclose($plik);
echo'liczby wynosza'.$a." ".$b;


echo "<br>";
$art=0;
$tab=array();
for ($i=0;$i<30;$i++)
{
    $tab[$i]=rand($a,$b);
    $art = $art + $tab[$i];//licznie sredniej art
    echo ' '.$tab[$i];//wypisywanie tablicy
}
$art = $art/sizeof($tab);
echo "<br>";
echo "srednia artytmetyczna wynosi: ".$art;
$plik = fopen("tablica.txt","w");//tworzenie pliku
for($i=0;$i<sizeof($tab);$i++)
{
fwrite($plik,$tab[$i]." ");
}
fwrite($plik,"\n");//zapisywanie rzeczy do pliku
fwrite($plik,"Srednia art: ".$art);  
fclose($plik);                       
?>