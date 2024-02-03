<?php 

if($_POST){

    $number1=$_POST["number1"];
    $number2=$_POST["number2"];

    $plus = $number1+$number2;
    $rest = $number1-$number2;
    $multiplication = $number1*$number2;
    $divition = $number1/$number2;
    


    echo "<br/>".$plus;
    echo "<br/>".$rest;
    echo "<br/>".$multiplication;
    echo "<br/>".$divition;


if($number1 == $number2){
    echo "los Numeros son iguales ";

    if($number1 == 4) {
        echo "el umero es 4";
    } 
}

if($number1 != $number2 && $number1 == 10){
    echo "el".$number1."es diferente al ".$number2."porque es el numero 10";
    if($number1 >= $number2){
        echo "el numer1 es mayor que el number 2";
    }


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
    <form action="ejercicio11.php" method="POST">

    Number 1:

    <input type="text" name="number1" id="">

    Number 2: 
    <input type="text" name="number2" id="">

    <input type="submit" value="Send ">


    </form>
</body>
</html>