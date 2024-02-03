<?php  
if($_POST){
    print_r($_POST);
    print_r($_FILES['file']['name']);

    // Establecer la ruta de destino en la raíz del proyecto
    $rutaDestino = $_FILES['file']['name'];
    
    move_uploaded_file($_FILES['file']['tmp_name'], $rutaDestino);
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
    <form action="ejercicio32.php" enctype="multipart/form-data" method="post">
        Archivo: <br>
        <input type="file" name="file" id=""><br>
        <input type="submit" name="enviar" value="Send">
    </form>
</body>
</html>
