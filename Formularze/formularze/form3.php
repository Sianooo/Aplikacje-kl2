<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>
<body>
<form action="" method="POST">
    <label for="">Podaj nazwisko</label>
    <input type="text" name="nazwisko">
    <label for="">Miejsce urodzenia</label>
    <input type="text" name="urodzenia">
    <button type="submit">Wyslij</button>
</form>
<?php
if(empty($_POST['nazwisko']) && empty($_POST['urodzenia']))
{
    echo"<span style='red'>Uzupelnij dane";
}
if(isset($_POST['nazwisko']))
{
    $nazwisko=$_POST['nazwisko'];
    echo"Nazwisko : $nazwisko";
}
if(isset($_POST['urodzenia']))
{
    $miejsce=$_POST['urodzenia'];
    echo"Miejsce urodzenia $miejsce";
}

?>
</body>
</html>