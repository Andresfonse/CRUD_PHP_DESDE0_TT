<?php 
// toma el valor que va a imprimir desde el ormulario if mira si ya fue llegado lo pone en la variable y lo imprime en el echo 

if($_POST){
    $nombre=$_POST['txtNombre'];

    echo " Welcome " .$nombre;
    
    
    
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Basic</title>
</head>
<body>

<h2>Hiii Developer </h2>
    
<form action="ejercicio2.php" method="post">
<input type="text" name="txtNombre" id="">
<br>
<input type="submit" value="Enviar">

</form>
</body>
</html>