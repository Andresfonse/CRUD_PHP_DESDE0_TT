<?php


if($_POST){
    $boton=$_POST['boton'];


    switch($boton){
    case 1:

            echo "presionaste el 1";
             break;
    
    case 2:

        echo "presionaste el 2";
         break;


    case 3:

    echo "presionaste el 3";
     break;
}

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio13.php" method="POST">

<input type="submit" name="boton" value="1">
<input type="submit" name="boton" value="2">
<input type="submit" name="boton" value="3">



    </form>
</body>
</html>