<?php
//tablice dwuwymiarowa gdzie ilosc wierszy i kolmun pobieramy z pliku, 
//wypelnij tak aby srodkowy wiersz lub dwa stanowiły liczby 1 na pozostałych zero wyswietl ta tablice i zapisz do pliku

$p=fopen("dane.txt","r");
$w=fgets($p);
$k=fgets($p);

$tab=array();
for($i=1;$i<$w;$i++)
{
    for($j=1;$j<$k;$j++)
    {
     if($w%2!=0)
     {
        if($i==($w-1)/2)
        {
            $tab[$i][$j]=1;
        }
        else
        {
            $tab[$i][$j]=0;
        }
     }
     echo $tab[$i][$j]." ";
    }
    else
    {
     
    }
    echo "<br>";
}

fclose($p);

?>