<?php

if ($_POST) {
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];

    if ($number1 != $number2 || $number1 > $number2) {
        echo "El número 1 es mayor que el número 2 y son diferentes ";
    } else {
        echo "idk bro";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones </title>
</head>
<body>
    <form action="ejercicio10.php" method="POST">

    Number 1:

    <input type="text" name="number1" id="">

    Number 2: 
    <input type="text" name="number2" id="">

    <input type="submit" value="Send ">


    </form>
</body>
</html>