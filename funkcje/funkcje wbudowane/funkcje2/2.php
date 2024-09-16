<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fryzjer</title>
</head>
<body>
<form action="" method="POST">
<h3>Strzyżenie włosów</h3>
<input type="radio" name="dlugosc" value="k">Krótkie
<br>
<input type="radio" name="dlugosc" value="s">Średnie
<br>
<input type="radio" name="dlugosc" value="pd">Półdługie 
<br>
<input type="radio" name="dlugosc" value="d">Długie
<br>
<br>
<button type="submit">Oblicz koszt</button>
</form>
<?php
    $dlugosc = $_POST['dlugosc'];
    $koszt = 0;

    if (isset($dlugosc)) {
        switch ($dlugosc) {
            case 'k':
                $koszt = 25;
                break;
            case 's':
                $koszt = 30;
                break;
            case 'pd':
                $koszt = 40;
                break;
            case 'd':
                $koszt = 50;
                break;
            default:
                echo "Nie wybrano długości włosów.";
        }

        if ($koszt > 0) {
            echo "Koszt strzyżenia wynosi: $koszt zł.";
        }
    }
?>
</body>
</html>
