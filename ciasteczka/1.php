<?php
// //ile razy odwiedziles strone zadanie
// setcookie("pismo",$_COOKIE["pismo"]+1,time()+3600);
// if(isset($_COOKIE["pismo"]))
// {
//     echo "Odwiedziles strone ".$_COOKIE["pismo"]." razy";
// }
// else
// {
//      echo "Witamy po raz pierwszy na stronie";
// }
?>

<?php
//kiedy ostatnio odwiedziles strone
setcookie("wizyta",time(),time()+30*86400);
if(isset($_COOKIE["wizyta"]))
{
    echo "Witaj gosciu!";
}
else
{
     echo "Ostatni raz odwiedziles strone: ".date('d.m.Y,H:i',$_COOKIE['wizyta']);
} 
?>