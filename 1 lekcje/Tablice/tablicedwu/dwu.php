<?php
/*
//dowolne wypełnianie tabeli
$tab = Array();
$k = 7;
$w = 10;

for ($i=0;$i<$w;$i++)
{
   for ($j=0;$j<$k;$j++)
   {
$tab [$i][$j]=rand(10,99);
echo $tab [$i][$j].$w;
$s=$s+$tab[$i][$j]." ";
   }
   echo "<br>";
}
echo "suma liczb w tabeli".$s;
*/



//na skos 1
/*
$tab = Array();
$k = 11;
$w = 11;

for ($i=0;$i<$w;$i++)
{
   for ($j=0;$j<$k;$j++)
   {
if($i==$j||$i+$j==$w-1)
{
$tab [$i][$j]=1;
}
else
{
$tab [$i][$j]=0;
}
echo $tab[$i][$j]." ";
   }
   echo "<br>";
}
*/

/*
//wypisywanie X i O w rzedach po kolei
$tab = Array();
$k = 10;
$w = 5;

for ($i=0;$i<$w;$i++)
{
   for ($j=0;$j<$k;$j++)
   {
    if(($i+$j)%2==0)
    {
    $tab[$i][$j]="X";
    }
    else
    {
    $tab[$i][$j]="O";
    }
    echo $tab[$i][$j]." ";
   }
   echo "<br>";
}
*/

/*
//sortowanie rosnaco
$tab = Array();
$w = 20;

for ($i=0;$i<=$w;$i++)
{
    $tab[$i]=rand(100,999);
    echo $tab[$i]."  ";
}
sort($tab);
echo "<br>";

for ($i=0;$i<=$w;$i++)
{
echo $tab[$i]."  ";
}
*/

/*
// sortowanie po kolumnach
$tab = Array();
$w = 8;
$k = 12;

for ($i=0;$i<$w;$i++)
{
    for ($j=0;$j<$k;$j++)
    {
        $tab[$i][$j]=rand (10,99);
        echo $tab[$i][$j]."  ";
    }
    echo "<br>";
    sort($tab[$i]);
}

echo "<br>";

for ($i=0;$i<$w;$i++)
{
    for ($j=0;$j<$k;$j++)
    {
        echo $tab[$i][$j]."  ";
    }
    echo "<br>";
}
*/

/*
$tab = Array();
$w = 30;

for ($i=0;$i<$w;$i++)
{
if($i %3==0)
{
$tab[$i]=7;
}
else
{
$tab[$i]=0;
}
echo $tab[$i]."  ";
}
*/



/*
//srodkowa kulumna lub dwie byly liczbami losowymi jedno cyfrowymi, na pozostalych miejscach wastawiamy liczby losowe 2 cyfrowe. Wyznacz najwiekszy element tablicy.
$tab = Array();
$w = 10;
$k = 16;

for ($i=0;$i<$w;$i++)
{
    for ($j=0;$j<$k;$j++)
    {
        if($k%2!=0)//k nie jest liczba parzysta ten zapis to oznacza!!!
        {
              if($j==($k-1)/2)
              {
              $tab[$i][$j]=rand(0,9);
              print"<b>". $tab[$i][$j]." </b>";
              }
              else
              {
               $tab[$i][$j]=rand(10,99);
               print $tab[$i][$j]."  ";
              }
        }
        else
        {
         if($j==$k/2-1||$j==$k/2)
         {
            $tab[$i][$j]=rand(0,9);
            print"<b>". $tab[$i][$j]." </b>";
         }
         else 
         {
            $tab[$i][$j]=rand(10,99);
            print $tab[$i][$j]."  ";
         }
        }
    }
    print "<br>";
}
$max=$tab[0][0];
for ($i=0;$i<$w;$i++)
{
    for ($j=0;$j<$k;$j++)
    {
        if($tab[$i][$j]>$max)
        {
            $max=$tab[$i][$j];
        }
    }
}
echo "Najwiekszy element tablicy jest: ".$max;
 
*/ 

?>