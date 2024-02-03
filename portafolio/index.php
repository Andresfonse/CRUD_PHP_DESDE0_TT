<?php
include("navbar.php");
include("conexion.php");





$objconexion = new Conexion();

// Proceso de inserción
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $image = $_POST['image'];
    $descripcion = $_POST['descripcion'];

    $sql = "INSERT INTO `proyectos` (`id`, `name`, `image`, `descripcion`) VALUES (NULL, ?, ?, ?)";
    $objconexion->ejecutar($sql, [$name, $image, $descripcion]);
    header("location:tienda.php");
}





// ...



// ...



// Consultar los datos después de la inserción o eliminación
$resultado = $objconexion->consultar("SELECT * FROM `proyectos`");

include("footer.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



    
</head>
<body>



    


    <!-- Resto del contenido HTML -->

    <?php
// Ahora puedes iterar sobre los resultados
if ($resultado) {
    echo '<div class="row">'; // Inicio de la fila

    foreach ($resultado as $proyecto) {
        echo '<div class="col-md-3 mb-4">'; // Cada tarjeta ocupa un cuarto del ancho en dispositivos medianos o más grandes, y añade un margen inferior
        echo '<div class="card h-100">'; // Agrega la clase h-100 para que la tarjeta ocupe toda la altura
        echo '<img src="' . $proyecto['image'] . '" alt="' . $proyecto['name'] . '" class="card-img-top" style="width: 100%; max-height: 200px; object-fit: cover;">'; // Establece el ancho, altura máxima y objeto de ajuste para las imágenes
        echo '<div class="card-body text-center">'; // Centra el contenido dentro del card-body
        echo '<h5 class="card-title">' . $proyecto['name'] . '</h5>';
        echo '<p class="card-text">' . $proyecto['descripcion'] . '</p>';
        echo '</div>';
        echo '<div class="card-footer">';

        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

    echo '</div>'; // Fin de la fila
}
?>


    <?php 
    include("footer.php");
    ?>
</body>
</html>


