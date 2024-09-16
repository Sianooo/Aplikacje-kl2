<?php
//w pliku napisz 6 rekordow (linjek) skladajacych sie z nazwiska i liczby bedacej wiekiem, pobierz dane z pliku, 
//wyswietl je w postaci nazwisko, wiek: wartosc . znajdz najstarsza osobe(nazwisko i wiek)

 $tab=array();
 $plik=fopen("dane.txt","r");
 $max=0;
 $max_n="";
 for($i=0;$i<6;$i++)
 {
    $wiersz=fgets($plik);
    $tab= explode(" ","$wiersz");
    echo $tab[0]." Wiek: ".$tab[1]."</br>";
 
 if($tab[1]>$max)
 {
    $max=$tab[1];
    $max_n=$tab[0];
 }
 }
 echo "Najstarsza osoba: $max_n $max";
 echo "</br>";
 echo "</br>";



 //wypelnianie tablicy 
/*  
$miasta=array();
$miasta=['Ludnosc']['Wroclaw']=6800000;
$miasta=['Ludnosc']['Krakow']=9000000;
$miasta=['Powierzchnia']['Wroclaw']=292;
$miasta=['Powierzchnia']['Krakow']=327;
*/
$miasta=Array(
"Ludnosc"=>array('Wroclaw'=>6800000,'Krakow'=>9000000),
"Powierzchnia"=>array('Wroclaw'=>292,'Krakow'=>327)
);

echo"<table border='1'>";
$a=1;
foreach ($miasta as $klucz => $wartosc)
{
if($a==1)
{
echo"<tr>";
echo"<th>";
echo"</th>";
$a++;
foreach($wartosc as $klucz2 => $wartosc)
{
    echo"<th>";
    echo "$klucz2";
    echo"</th>";
}
echo"</tr>";
}
echo"<tr>";
echo"<th>";
echo "$klucz";
echo"</th>";
foreach($wartosc as $klucz2 => $wartosc2) 
{
    echo "<td>";
    echo "$wartosc2";
    echo "</td>";
}
echo"</tr>";
}


echo"</table>";

?>