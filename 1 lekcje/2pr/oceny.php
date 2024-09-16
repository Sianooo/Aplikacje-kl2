<?php
$oceny = array(
 'historia'=>array('Nowak'=>5,'kowalski'=>3),
 'matematyka'=>array('Nowak'=>1,'kowalski'=>4));
 $plik=fopen("tabela.txt","w");
 echo "<table border= '1'>";
 foreach($oceny as $klucz => $wartosc)
 {
 echo "<tr>"."<th>".$klucz." ";
 fwrite($plik,"     ");
 foreach($wartosc as $nazwisko => $ocny)
 {
 echo "<td>";
 echo $ocny." ";
 echo "</td>";
 echo "<td>";
 echo $nazwisko." ";
 echo "</td>";
 fwrite($plik,"     ");
 }
 }
 echo "</table>";
?>