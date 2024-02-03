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
    <form action="ejercicio8.php" method="POST">

    Number 1:

    <input type="text" name="number1" id="">

    Number 2: 
    <input type="text" name="number2" id="">

    <input type="submit" value="Send ">


    </form>
</body>
</html>