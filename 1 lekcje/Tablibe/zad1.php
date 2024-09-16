<?php
//wypisywanie liczb do tablicy(konkretnych)
$tab=Array(25,34,18,128);
for($i=0;$i<4;$i++)
{
    echo $tab[$i]." ";
}
echo"</br>";
echo"</br>";

//losowanie liczb z tablic 
$tab2=Array();
for($i=0;$i<6;$i++)
{
    $tab2[$i]=rand(1,49);
    echo $tab2[$i]." ";
}

echo"</br>";
echo"</br>";

$tab3=Array();
for($i=0;$i<20;$i++)
{
    if($i%2==0){
        $tab3[$i]=0;
    }
    else{
        $tab3[$i]=1;
    }
    echo $tab3[$i]." ";
}

?>