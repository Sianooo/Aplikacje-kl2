<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trojkat</title>
</head>
<body>
    <form method="POST">
    <label for="">Podaj bok a</label>
    <input type="number" name="bok1">
    <br>
    <label for="">Podaj bok b</label>
    <input type="number" name="bok2">
    <br>
    <label for="">Podaj bok c</label>
    <input type="number" name="bok3">
    <br>
    <button type="submit">Wyslij</button>
    </form>
</body>
</html>

<?php

//zdefinuj klase o nazwie trajkat skladajaca sie z pol bok 1,2,3 konstruktora ktorym bokom nadane wartosci 3,4,5 
//metode: pole i czy prostokatny.zdefinuj dwa obiekty klasy trojkat dla 1: wywolaj metody pole i czy prostokatny,
//dla 2:boki pobierz przy pomocy formularza i wywolaj metode pole i czy prostokatny

class Trojkat {
    public $bok1;
    public $bok2;
    public $bok3;

    function __construct($a, $b, $c) {
        $this->bok1 = $a;
        $this->bok2 = $b;
        $this->bok3 = $c;
    }

    function wypisywanie() {
        echo "Bok 1: " . $this->bok1 . "<br>";
        echo "Bok 2: " . $this->bok2 . "<br>";
        echo "Bok 3: " . $this->bok3 . "<br>";
    }

    function pole() {
        $obw = ($this->bok1 + $this->bok2 + $this->bok3) / 2;
        $pole = sqrt($obw * ($obw - $this->bok1) * ($obw - $this->bok2) * ($obw - $this->bok3));
        return $pole;
    }

    function czyProstokatny() {
        if (pow($this->bok1, 2) + pow($this->bok2, 2) == pow($this->bok3, 2) ||
            pow($this->bok1, 2) + pow($this->bok3, 2) == pow($this->bok2, 2) ||
            pow($this->bok3, 2) + pow($this->bok2, 2) == pow($this->bok1, 2)) {
            return true;
        } else {
            return false;
        }
    }
}

$mojTrojkat = new Trojkat(3, 4, 5);
$mojTrojkat2 = new Trojkat($_POST['bok1'], $_POST['bok2'], $_POST['bok3']);

echo "Boki pierwszego trójkąta: <br>";
$mojTrojkat->wypisywanie();
echo "Pole trójkąta: " . $mojTrojkat->pole() . "<br>";
if ($mojTrojkat->czyProstokatny()) {
    echo "Trójkąt jest prostokątny.";
} else {
    echo "Trójkąt nie jest prostokątny.";
}

echo "<br><br>";

echo "Boki drugiego trójkąta: <br>";
$mojTrojkat2->wypisywanie();
echo "Pole trójkąta: " . $mojTrojkat2->pole() . "<br>";
if ($mojTrojkat2->czyProstokatny()) {
    echo "Trójkąt jest prostokątny.";
} else {
    echo "Trójkąt nie jest prostokątny.";
}

?>

