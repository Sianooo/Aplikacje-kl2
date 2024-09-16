<?php
/*
function suma($a, $b)
{
$s=$a + $b;
return $s;
}
echo 'suma to '.suma(15,19);
*/

/*
function suma_cyfr($a)//nagłówek funkcji(notatka z lekcji) + funkcja na sumowanie cyfr pojedyńczo
{//ciało funkcji
$s=0;
while($a!=0)
{
    $r=$a%10;
    $s=$s + $r;
    $a=($a- $r)/10;
}
return $s;
}
echo 'suma cyfr liczb 123 ------> '.suma_cyfr(123);
*/


/*
function potega($a, $n)//pierwsza i ostatnia liczba sie zmienia(środek nie)
{
$p=1;
for ($i=1;$i<=$n;$i++)
{
    $p=$p*$a;  
}
return $p;
}//zawsze trzeba dac tyle zmiennych i przecinków ile jest zmiennych w function np.:(2,6)

function zamiana_miejsc($a)
{//pierwsza i ostatnia liczba sie zmienia(środek nie)
$pocz=$a;
$r2= 0 ;
$r= $a % 10;
$c= 0;
while($a!=0)
{
$r2=$a%10;
$a= ($a-$r2)/10;
$c+=1;
}
$n = ($r * potega(10,$c-1)) + $r2 + ($pocz - $r2*potega(10, $c-1) - $r);
return $n;
}
$potega= 65789;
echo "Liczba: ".$potega."<br>";
echo "<br>Wynik: ".zamiana_miejsc($potega);
*/



// dwa ostatnie trzeba poprawic!!!!!!!!!
/*
function silnia($a)
{
$sil=1;
for($i=1;$i<=$a;$i++)
{
$sil= $sil = $i;

}
}
return $sil;
echo 'Wynik'.silnia(5);
*/


/*
function wartoscz3($a,$b,$c)
{

if($a>$b) && if($a>$c)
{
    return $a;
}
 else if($b>$a) && if($b>$c)
{
    return $b;
}
else if($c>$a) if($c>$b)
{
    return $c;
}    
}
echo"wynik".wartoscz3(4,4,6)
*/


function dod($a,$b)
{
$s=0;
for ($i=$a;$i<=$b;$i++)
{
$s=$s+ $i;
}
return $s;
}
$a=5;
$b=7;
echo"wynik: ".dod($a,$b);

?>