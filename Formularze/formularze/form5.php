
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jezyki</title>
</head>
<body>
    <h3>Jezyki obce</h3>
<form action="" method="POST">
<label>Jezyki :</label>
<select name="jezyk[]" id="jezyk" multiple="multiple">
    <option value="hiszpanski" >Hiszpanski</option>
    <option value="niemiecki">Niemiecki</option>
    <option value="angielski">Angielski</option>
    <option value="francuski">Francuski</option>
    <option value="rosyjski">Rosyjski</option>
    <option value="japonski">Japonski</option>
</select>
    <br>
<button type="submit">Wyslij</button> 
</form>
<?php
$wybor=$_POST['jezyk'];
echo"Wybrano jezyki: ";
for($i=0;$i<count($wybor);$i++)
{
    echo " ".$wybor[$i];
}

?>
</body>
</html>