<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label>Podaj wartość: </label>
        <input type="text" name="a">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
<?php
error_reporting(0);
$a=$_POST['a'];

if(empty($a)==true){
    echo "Wypełnij dane!!";
} else {
if(is_numeric($a)) {
    echo "To liczba <br>";
    if($a==round($a)) {
        $tab=array();
        $tab[$a];
        for($i=0;$i<$a;$i++) {
            $tab[$i]=rand()%31+10;
        }
        for($j=0;$j<$a;$j++) {
            echo $tab[$j]." ";
        }
        echo "<br>";
        min($tab);
        echo "Najmniejsza: ".min($tab)."<br>";
        max($tab);
        echo "Największa: ".max($tab)."<br>";
    } else {
        echo "XD";
    }
} else {
    echo "NIE jest to liczba";
}
}



?>