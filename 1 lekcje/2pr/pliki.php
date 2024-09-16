<?php
//w pliku umiesc rekordy (10) skladajacych sie z naziwiska i liczby oznaczjacej wiek 
//pobierz dane z pliku wyswietlje na stronie w postaci nazwisko, wiek(slownie):
//wyznacz srednia wieku wypisanych osob
$plik=fopen("dane.txt","r");//odczyt z pliku
$tab =array();
$art =1;
for($i=1;$i<11;$i++)
{
    $wiersz=fgets($plik);
    $tab=explode(" ",$wiersz);
    echo $tab[0]." wiek: ".$tab [1];
    $art=$art+$tab[1];

    echo "</br>";
}
$art = $art/10;
echo "srednia wieku wysnoi: ".$art;
$zapis=fopen("art.txt","w");
fwrite($zapis,$art);
fclose($plik);
fclose($zapis);
//funckaj podoba do funckcji explode jest split()



?>