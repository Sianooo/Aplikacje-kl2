<?php
class Osoba {
    public $nazwisko;
    public $wzrost;
    public $waga;

    function __construct() {
        $this->nazwisko = "Kowalski";
        $this->waga = 75;
        $this->wzrost = 183;
    }

    function wypisz() {
        echo "Nazwisko: " . $this->nazwisko . "<br>";
        echo "Waga: " . $this->waga . "<br>";
        echo "Wzrost: " . $this->wzrost . "<br>";
    }

    function czyWysoki() {
        if ($this->wzrost >= 180) {
            echo "Tak";
        } else {
            echo "Nie";
        }
    }
}

class Uczen extends Osoba {
    public $szkola;
    public $sredniaOcen;
    
    function wypisz2() {
        echo "Szkola: " . $this->szkola . "<br>";
        echo "Srednia ocen: " . $this->sredniaOcen . "<br>";
    }
}

$plik = fopen("plik.txt", "r");
if ($plik) {
    $szkola = fgets($plik);
    $sredniaOcen = fgets($plik);
    fclose($plik);
}
class Pracownik extends Osoba
{
    public $zawod;
    public $zarobek;

   /* function __construct()
    {
        $this->zarobek=10000;
        $this->zawod="Informatyk";
    }*/

    function wypisz3() {
        echo "Zarobek: " . $this->zarobek . "<br>";
        echo "Zawod: " . $this->zawod . "<br>";
    }
}

$uczen = new Uczen();
$osoba = new Osoba();
$pracownik = new Pracownik();

//wypisywanie
$uczen->szkola = $szkola;
$uczen->sredniaOcen = $sredniaOcen;
$uczen->wypisz();
echo "<br>";
$uczen->wypisz2();
echo "<br>";
//podmiana cech
$uczen->nazwisko="Nowak";
$uczen->wypisz();
echo "<br>";

$pracownik->wypisz();
$pracownik->zarobek=10000;
$pracownik->zawod="Informatyk";
$pracownik->wypisz3();
?>
