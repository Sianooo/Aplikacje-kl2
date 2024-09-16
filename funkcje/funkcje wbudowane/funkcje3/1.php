<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje</title>
</head>
<body>
<?php
$rozmiar = fopen('rozmiar.txt','r');
$romiar2 = fgets($rozmiar);
$tab = array();
for ($i = 0; $i < $romiar2; $i++) {
    $los=rand(1,100);
    $tab[] = $los;
}

foreach($tab as $liczba)//wypisuje tablice
{
echo $liczba." ";
}

echo "</br>";
echo asort($tab);
$a=array_count_values($tab)[15];//wypisuje ile razy 15 sie pojawila
echo"liczba 15 wystapila : $a";

echo "</br>";
array_pop($tab);

echo "</br>";
$a=sizeof($tab);//pokazuje rozmiar tablicy
echo $a." ";

echo "</br>";
array_push($tab,777,888,999);//wstawia na koniec te liczby

foreach($tab as $liczba)
{
echo $liczba." ";
}

echo "</br>";
echo "</br>";
array_unshift($tab,1000,1001);//wstawia na poczateek te liczby 
foreach($tab as $liczba)
{
echo $liczba." ";
}

echo "</br>";
echo "</br>";
rsort($tab);//sortuje malejonco
foreach($tab as $liczba)
{
echo $liczba." ";
}

echo "</br>";
echo "</br>";
$tab=array_unique($tab);//pozbywa sie dupikatow
foreach($tab as $liczba)
{
echo $liczba." ";
}

$tab2=array(-15,-16,-17);
echo "</br>";
echo "</br>";
array_splice($tab,5,3,$tab2);//tablica,od ktorego indeksu,ile elementow,czym podmieniamy
foreach($tab as $liczba)
{
echo $liczba." ";
}

echo "</br>";
echo "</br>";
$a=array_sum($tab);
echo $a." ";

echo "</br>";
echo "</br>";
if(in_array('500',$tab))
{
    echo "jest";
}
else
{
    echo "nie ma ";
} 

echo "</br>";
echo "</br>";
$uczniowie = array(
    "Adam" => 4.5,
    "Darbara" => 3.8,
    "Cezary" => 4.2,
    "Worota" => 5.0,
    "Ewa" => 4.7
);
foreach($uczniowie as $nazwisko => $ocena)
{
echo "Uczen $nazwisko ma srednia $ocena"."</br>";
}

echo "</br>";
echo "</br>";
ksort($uczniowie);
foreach($uczniowie as $nazwisko => $ocena)
{
echo "Uczen $nazwisko ma srednia $ocena"."</br>";
}

echo "</br>";
echo "</br>";
arsort($uczniowie);
foreach($uczniowie as $nazwisko => $ocena)
{
echo "Uczen $nazwisko ma srednia $ocena"."</br>";
}

echo "</br>";
echo "</br>";
$uczniowie=array_change_key_case($uczniowie,CASE_LOWER);//zmienia na upper (duze) lower(male)
foreach($uczniowie as $nazwisko => $ocena)
{
echo "Uczen $nazwisko ma srednia $ocena"."</br>";
}

echo "</br>";
echo "</br>";
$a=array_keys($uczniowie);
foreach($a as $b)
{
 echo $b;
 echo "</br>";
}

echo "</br>";
echo "</br>";
$pol=array_merge($tab,$tab2);
$r=sizeof($pol);
for($i=0; $i <$r;$i++)
{
   echo $pol[$i]." ";
}

echo "</br>";
echo "</br>";
$a=array_search('5.0',$uczniowie);
echo $a;

echo "</br>";
echo "</br>";
$w=array_slice($uczniowie,1,3);
print_r($w);
?>
</body>
</html>